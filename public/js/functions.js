function aplicarMascaraCEP(input) {
    let valor = input.value.replace(/\D/g, ''); // Remove tudo que não é número
    if (valor.length > 5) {
        valor = valor.slice(0, 5) + '-' + valor.slice(5, 8); // Adiciona o hífen
    }
    input.value = valor;
}

function aplicarMascaraCPF(input) {
    let valor = input.value.replace(/\D/g, ''); // Remove tudo que não é número
    if (valor.length > 3) {
        valor = valor.slice(0, 3) + '.' + valor.slice(3);
    }
    if (valor.length > 7) {
        valor = valor.slice(0, 7) + '.' + valor.slice(7);
    }
    if (valor.length > 11) {
        valor = valor.slice(0, 11) + '-' + valor.slice(11, 13);
    }
    input.value = valor.slice(0, 14); // Limita a 14 caracteres (CPF formatado)
}

function aplicarMascaraCNPJ(input) {
    let valor = input.value.replace(/\D/g, ''); // Remove tudo que não é número

    if (valor.length > 2) {
        valor = valor.slice(0, 2) + '.' + valor.slice(2);
    }
    if (valor.length > 6) {
        valor = valor.slice(0, 6) + '.' + valor.slice(6);
    }
    if (valor.length > 10) {
        valor = valor.slice(0, 10) + '/' + valor.slice(10);
    }
    if (valor.length > 15) {
        valor = valor.slice(0, 15) + '-' + valor.slice(15, 17);
    }

    input.value = valor.slice(0, 18); // Limita a 18 caracteres (CNPJ formatado)
}

function aplicarMascaraCPF_CNPJ(input) {
    let value = input.value.replace(/\D/g, ''); // só números

    if (value.length <= 11) {
        // CPF -> 000.000.000-00
        value = value.replace(/(\d{3})(\d)/, "$1.$2");
        value = value.replace(/(\d{3})(\d)/, "$1.$2");
        value = value.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

        // Limite máximo para CPF
        input.value = value.substring(0, 14);

    } else {
        // CNPJ -> 00.000.000/0000-00
        value = value.replace(/^(\d{2})(\d)/, "$1.$2");
        value = value.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
        value = value.replace(/\.(\d{3})(\d)/, ".$1/$2");
        value = value.replace(/(\d{4})(\d)/, "$1-$2");

        // Limite máximo para CNPJ
        input.value = value.substring(0, 18);
    }

}

function inArray(needle, haystack) {
    var length = haystack.length;
    for (var i = 0; i < length; i++) {
        if (haystack[i] == needle)
            return true;
    }
    return false;
}

function showHideSecretariaID(secretariaType) {
    if (inArray(secretariaType, ["SECRETARIA_EXECUTIVA", "DIRETORIA", "SUPERINTENDENCIA"])) {
        $("#secretariaDIV").removeClass("d-none");
    } else {
        $("#secretariaDIV").addClass("d-none");
    }
    $("#structureID").val("").change();
}

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function formatHour(hour) {
    const newHour = hour.split(":");
    return `${newHour[0]}:${newHour[1]}`;
}

function currentMonth(cMonth) {
    return `<table class="table">
            <thead>
                <tr>
                    <th colspan="3"><h3 class="text-start text-primary fw-bold">${cMonth}</h3></th>
                </tr>
                <tr>
                    <th class="text-start">Data</th>
                    <th class="text-center">Número</th>
                    <th class="">Opções</th>
                </tr>
            </thead>
        <tbody>`;
}

function tBody(data, numero, nomeDoArquivo, tamanho) {
    let dwld = "https://angra.rj.gov.br/downloads/bo/";
    return `<tr>
            <td class="text-start" width="33%"><strong>${data}</strong></td>
            <td class="text-center" width="33%">${numero}</td>
            <td class="text-end">
                <a class="fw-bold rounded-5 border-0" href="${dwld}${nomeDoArquivo}" target="_blank"><i class="fa-solid fa-eye"></i> Visualizar</a>
                <a class="fw-bold" href="${dwld}${nomeDoArquivo}" download="${nomeDoArquivo}"><i class="fa-solid fa-download"></i> Download <span class="text-secondary fw-light">(${tamanho})</span></a>
            </td>
        </tr>`;
}

async function preparaBoletins() {

    var currentYear = $(".currentYear");
    var tBodyDownload = $(".tBodyDownload");

    var year = ($("#endpoint").val() === "") ? new Date().getFullYear() : $("#endpoint").val();
    var preload = `<tr><td colspan="3" class="text-center"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></td></tr>`;
    tBodyDownload.html(preload);
    currentYear.html(year);
    var url = $("#endpoint").attr("data-endpoint") + year;

    var tHtml = "";

    try {
        let response = await fetch(url);
        if (!response.ok) { // Verifica o status HTTP
            throw new Error(`Erro HTTP: ${response.status}`);
        }

        let boletinsData = await response.json();

        for (var i = 0; i < boletinsData.length; i++) {
            if (boletinsData[i].hasOwnProperty("Dezembro")) {
                let dezembro = boletinsData[i]["Dezembro"];
                tHtml += currentMonth("Dezembro");
                dezembro.forEach(boletim => {
                    tHtml += tBody(boletim.data, boletim.numero, boletim.nomeDoArquivo, boletim.tamanho);
                });
                tHtml += `</tbody></table>`;
            }
            if (boletinsData[i].hasOwnProperty("Novembro")) {
                let novembro = boletinsData[i]["Novembro"];
                tHtml += currentMonth("Novembro");
                novembro.forEach(boletim => {
                    tHtml += tBody(boletim.data, boletim.numero, boletim.nomeDoArquivo, boletim.tamanho);
                });
                tHtml += `</tbody></table>`;
            }
            if (boletinsData[i].hasOwnProperty("Outubro")) {
                let outubro = boletinsData[i]["Outubro"];
                tHtml += currentMonth("Outubro");
                outubro.forEach(boletim => {
                    tHtml += tBody(boletim.data, boletim.numero, boletim.nomeDoArquivo, boletim.tamanho);
                });
                tHtml += `</tbody></table>`;
            }
            if (boletinsData[i].hasOwnProperty("Setembro")) {
                let setembro = boletinsData[i]["Setembro"];
                tHtml += currentMonth("Setembro");
                setembro.forEach(boletim => {
                    tHtml += tBody(boletim.data, boletim.numero, boletim.nomeDoArquivo, boletim.tamanho);
                });
                tHtml += `</tbody></table>`;
            }
            if (boletinsData[i].hasOwnProperty("Agosto")) {
                let agosto = boletinsData[i]["Agosto"];
                tHtml += currentMonth("Agosto");
                agosto.forEach(boletim => {
                    tHtml += tBody(boletim.data, boletim.numero, boletim.nomeDoArquivo, boletim.tamanho);
                });
                tHtml += `</tbody></table>`;
            }
            if (boletinsData[i].hasOwnProperty("Julho")) {
                let julho = boletinsData[i]["Julho"];
                tHtml += currentMonth("Julho");
                julho.forEach(boletim => {
                    tHtml += tBody(boletim.data, boletim.numero, boletim.nomeDoArquivo, boletim.tamanho);
                });
                tHtml += `</tbody></table>`;
            }
            if (boletinsData[i].hasOwnProperty("Junho")) {
                let junho = boletinsData[i]["Junho"];
                tHtml += currentMonth("Junho");
                junho.forEach(boletim => {
                    tHtml += tBody(boletim.data, boletim.numero, boletim.nomeDoArquivo, boletim.tamanho);
                });
                tHtml += `</tbody></table>`;
            }
            if (boletinsData[i].hasOwnProperty("Maio")) {
                let maio = boletinsData[i]["Maio"];
                tHtml += currentMonth("Maio");
                maio.forEach(boletim => {
                    tHtml += tBody(boletim.data, boletim.numero, boletim.nomeDoArquivo, boletim.tamanho);
                });
                tHtml += `</tbody></table>`;
            }
            if (boletinsData[i].hasOwnProperty("Abril")) {
                let abril = boletinsData[i]["Abril"];
                tHtml += currentMonth("Abril");
                abril.forEach(boletim => {
                    tHtml += tBody(boletim.data, boletim.numero, boletim.nomeDoArquivo, boletim.tamanho);
                });
                tHtml += `</tbody></table>`;
            }
            if (boletinsData[i].hasOwnProperty("Março")) {
                let marco = boletinsData[i]["Março"];
                tHtml += currentMonth("Março");
                marco.forEach(boletim => {
                    tHtml += tBody(boletim.data, boletim.numero, boletim.nomeDoArquivo, boletim.tamanho);
                });
                tHtml += `</tbody></table>`;
            }
            if (boletinsData[i].hasOwnProperty("Fevereiro")) {
                let fevereiro = boletinsData[i]["Fevereiro"];
                tHtml += currentMonth("Fevereiro");
                fevereiro.forEach(boletim => {
                    tHtml += tBody(boletim.data, boletim.numero, boletim.nomeDoArquivo, boletim.tamanho);
                });
                tHtml += `</tbody></table>`;
            }
            if (boletinsData[i].hasOwnProperty("Janeiro")) {
                let janeiro = boletinsData[i]["Janeiro"];
                tHtml += currentMonth("Janeiro");
                janeiro.forEach(boletim => {
                    tHtml += tBody(boletim.data, boletim.numero, boletim.nomeDoArquivo, boletim.tamanho);
                });
                tHtml += `</tbody></table>`;
            }
        }

    } catch (error) {
        console.error("Erro ao buscar os boletins:", error);
        tBodyDownload.html(`<tr><td colspan="3" class="text-center text-danger">Erro ao carregar os boletins: ${error.message}</td></tr>`);
    }
    tBodyDownload.html(tHtml);

}

async function preparaMenu() {
    var url = $('meta[name="site"]').attr("content");

    let response = await fetch(url + "/menu");
    let userData = await response.json();

    var menu = "";
    var menuAutarquias = "";

    for (var i = 0; i < userData.length; i++) {
        if (userData[i].type !== "AUTARQUIA" && userData[i].type !== "FUNDACAO") {
            menu += `<li class="nav-item"><a class="nav-link-lateral" href="${url}/secretarias/${userData[i].url}">${userData[i].nome}</a>`;
            if (userData[i].executivas !== undefined) {
                menu += "<ul class='nav-link-lateral-executiva'>";
                for (var j = 0; j < userData[i].executivas.length; j++) {
                    menu += `<li class="nav-item"><a class="nav-link-lateral menu-sec-executiva" href="${url}/secretarias/${userData[i].url}/executivas/${userData[i].executivas[j].url}">${userData[i].executivas[j].nome}</a></li>`;
                }

                menu += "</ul>";
            }
            if (userData[i].diretorias !== undefined) {
                menu += "<ul class='nav-link-lateral-executiva'>";
                for (var j = 0; j < userData[i].diretorias.length; j++) {
                    menu += `<li class="nav-item"><a class="nav-link-lateral menu-sec-executiva" href="${url}/secretarias/${userData[i].url}/diretorias/${userData[i].diretorias[j].url}">${userData[i].diretorias[j].nome}</a></li>`;
                }

                menu += "</ul>";
            }
            if (userData[i].superintendencias !== undefined) {
                menu += "<ul class='nav-link-lateral-executiva'>";
                for (var j = 0; j < userData[i].superintendencias.length; j++) {
                    menu += `<li class="nav-item"><a class="nav-link-lateral menu-sec-executiva" href="${url}/secretarias/${userData[i].url}/superintendencias/${userData[i].superintendencias[j].url}">${userData[i].superintendencias[j].nome}</a></li>`;
                }

                menu += "</ul>";
            }
            menu += "</li>";
        } else {
            menuAutarquias += `<li class="nav-item"><a class="nav-link-lateral" href="${url}/secretarias/${userData[i].url}">${userData[i].nome}</a></li>`;
        }
    }
    $("#menuSecretarias").html(menu);
    $("#menuFundacoesAutarquias").html(menuAutarquias);
}

async function getDadosProprietario(entity) {

    $("#modalLabel").html($(entity).attr("data-name"));
    $("#saveChange").addClass("d-none");
    $("#dataUrlEdit").addClass("d-none");
    $("#dataUrlEdit").attr("href", "");
    $("#dataUrlDestroy").addClass("d-none");
    $("#dataUrlDestroy").attr("action", "");

    let response = await fetch($(entity).attr("data-url"));
    let userData = await response.json();

    var stt = userData.status.toLowerCase();

    var html = `<div class="m-3"><img src="${userData.foto}" class="img-fluid img-thumbnail"/></div>` +
        `<div class="m-3"><strong>Nome social: </strong><br/>${userData.nome_social}</div>` +
        `<div class="m-3"><strong>Email: </strong><br/>${userData.email}</div>` +
        `<div class="m-3"><strong>Telefone: </strong><br/>${userData.telefone}</div>` +
        `<div class="m-3"><strong>Perfil: </strong><br/>${userData.perfil_value}</div>` +
        `<div class="m-3"><strong>Tipo de usuário: </strong><br/>${userData.tipo_de_usuario_value}</div>` +
        `<div class="m-3"><strong>Status: </strong><br/>${capitalizeFirstLetter(stt)}</div>` +
        `<div class="m-3"><strong>Área de atuação: </strong><br/>${userData.area_de_atuacao}`;
    $("#modalBody").html(html);
}

async function getDadosEvento(entity) {

    $("#modalLabel").html($(entity).attr("data-name"));
    $("#saveChange").addClass("d-none");

    let response = await fetch($(entity).attr("data-url-show"));
    let eventData = await response.json();

    var dataUrlEdit = $(entity).attr("data-url-edit");
    var dataUrlDestroy = $(entity).attr("data-url-destroy");

    $("#dataUrlEdit").attr("href", dataUrlEdit);
    $("#dataUrlEdit").removeClass("d-none");

    $("#dataUrlDestroy").attr("action", dataUrlDestroy);
    $("#dataUrlDestroy").removeClass("d-none");

    var html = `<div class="mb-3"><strong>Titulo</strong><br/>${eventData.titulo}</div>` +
        `<div class="mb-3"><strong>Descrição do Evento</strong><br/>${eventData.evento}</div>` +
        `<div class="mb-3"><strong>Data</strong><br/>${eventData.data.split("-").reverse().join("/")}</div>` +
        `<div class="mb-3"><strong>Hora</strong><br/>${formatHour(eventData.hora)}</div>` +
        `<div class="mb-3"><strong>Local</strong><br/>${eventData.local}</div>`;

    $("#modalBody").html(html);
}

// Campo de Busca Principal
function toggleSearchForm() {
    var searchForm = document.getElementById("searchForm");
    searchForm.classList.toggle("d-none");
}

// Comportamentos do Menu Lateral
if (document.getElementById('secretarias') !== null) {
    document.getElementById('secretarias').onclick = function () {
        document.getElementById('menu').style.display = 'none';
        document.getElementById('subSecretarias').style.display = 'block';
    };

    document.getElementById('voltarSecretarias').onclick = function () {
        document.getElementById('subSecretarias').style.display = 'none';
        document.getElementById('menu').style.display = 'block';
    };

    document.getElementById('autarquias').onclick = function () {
        document.getElementById('menu').style.display = 'none';
        document.getElementById('subAutarquias').style.display = 'block';
    };

    document.getElementById('voltarAutarquias').onclick = function () {
        document.getElementById('subAutarquias').style.display = 'none';
        document.getElementById('menu').style.display = 'block';
    };
}

function monitorCharacterLimit(inputSelector, counterSelector, charLimit) {
    const input = document.querySelector(inputSelector);
    const counter = document.querySelector(counterSelector);

    input.addEventListener('input', () => {
        let currentValue = input.value;
        const currentLength = currentValue.length;

        // Impede que o texto ultrapasse o limite
        if (currentLength > charLimit) {
            input.value = currentValue.substring(0, charLimit); // Corta o excesso
        }

        // Atualiza o texto da tag <small> com o comprimento atualizado
        const newLength = input.value.length;
        counter.textContent = `${newLength}/${charLimit}`;

        // Verifica se o limite foi atingido ou ultrapassado
        if (newLength === charLimit) {
            counter.classList.add('text-danger');
        } else {
            counter.classList.remove('text-danger');
        }
    });

}

function copyToClipboard(text) {
    // Cria um elemento <textarea> temporário
    let tempTextarea = document.createElement("textarea");
    tempTextarea.value = text;
    document.body.appendChild(tempTextarea);

    // Seleciona e copia o texto
    tempTextarea.select();
    tempTextarea.setSelectionRange(0, 99999); // Para dispositivos móveis

    try {
        let successful = document.execCommand("copy");
        let msg = successful ? "Link copiado para a área de transferência!" : "Falha ao copiar!";
        alert(msg);
    } catch (err) {
        console.error("Erro ao copiar:", err);
    }

    // Remove o elemento temporário
    document.body.removeChild(tempTextarea);
}

function confirmDelete(form) {
    var confirmMessage = $(form).find('input[name="confirm"]').val();
    if (confirm(confirmMessage)) {
        return true;
    }
    return false;
}

function abrirJanelaCentralizada(url) {
    const largura = window.innerWidth * 0.6;  // 60% da largura da tela
    const altura = window.innerHeight * 0.8;  // 80% da altura da tela

    const left = window.screenX + (window.innerWidth - largura) / 2;
    const top = window.screenY + (window.innerHeight - altura) / 2;

    const novaJanela = window.open(
        url,
        "_blank",
        `toolbar=no, scrollbars=yes, resizable=yes, width=${largura}, height=${altura}, top=${top}, left=${left}`
    );

    if (novaJanela) {
        novaJanela.focus();

        // Adiciona um evento para recarregar a página pai quando a janela for fechada
        const timer = setInterval(function () {
            if (novaJanela.closed) {
                clearInterval(timer);
                window.location.reload();
            }
        }, 500);
    } else {
        alert("O navegador bloqueou a janela popup. Permita popups para este site.");
    }
}

function proximaAba(abaId) {
    const nextTab = document.querySelector(`.nav-link[href="#${abaId}"]`);
    bootstrap.Tab.getOrCreateInstance(nextTab).show();
}

function anteriorAba(abaId) {
    const prevTab = document.querySelector(`.nav-link[href="#${abaId}"]`);
    bootstrap.Tab.getOrCreateInstance(prevTab).show();
}

function destroyComprovante(obj) {
    if (confirm($(obj).attr("data-message"))) {
        var route = $(obj).attr("data-route");
        var token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: route,
            type: 'POST',
            data: {
                _method: 'DELETE',
                _token: token
            },
            success: function (response) {
                alert("Comprovante excluído com sucesso!");
                $('#comprovante-wrapper').remove();
            },
            error: function (xhr) {
                alert("Erro ao excluir o comprovante.");
            }
        });
    }
    return false;
}

function destroyFibromialfiaArquivo(obj) {

    if (!confirm($(obj).data('message'))) {
        return false;
    }

    let route = $(obj).data('route');
    let laudoId = $(obj).data('id');
    let token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: route,
        type: 'POST',
        data: {
            _method: 'DELETE',
            _token: token
        },
        success: function (response) {
            $('#laudo-' + laudoId).remove();
            alert('Arquivo excluído com sucesso!');
            window.location.reload();
        },
        error: function (xhr) {
            alert('Erro ao excluir o laudo.');
        }
    });
}
function abrirModalRelatorio(tipo) {
    const titulo = document.getElementById('modalExportacaoLabel');
    const inputTipo = document.getElementById('tipoRelatorioInput');

    document.getElementById('bloco-cadastro').classList.add('d-none');
    document.getElementById('bloco-carteirinha').classList.add('d-none');
    document.getElementById('bloco-dados-cadastro').classList.add('d-none');

    inputTipo.value = tipo;

    if (tipo === 'cadastro') {
        titulo.innerText = 'Selecione os estados de cadastro';
        document.getElementById('bloco-cadastro').classList.remove('d-none');
    } else if (tipo === 'carteirinha') {
        titulo.innerText = 'Selecione os status da carteirinha';
        document.getElementById('bloco-carteirinha').classList.remove('d-none');
    } else if (tipo === 'dadosCadastrados') {
        titulo.innerText = 'Selecione os campos que deseja exportar';
        document.getElementById('bloco-dados-cadastro').classList.remove('d-none');
    }

    const modal = new bootstrap.Modal(document.getElementById('modalExportacao'));
    modal.show();
}

function enviarCarteirinha(id, acao) {
    document.getElementById('acaoCarteirinha' + id).value = acao;
    document.getElementById('formCarteirinha' + id).submit();
}

function enviarCarteirinhaLote(acao) {
    document.getElementById('acaoCarteirinhaLote').value = acao;
    document.getElementById('formGerarCarteirinha').submit();
}

if (document.getElementById('cep') != null) {
    document.addEventListener('DOMContentLoaded', function () {
        const cepInput = document.getElementById('cep');

        cepInput.addEventListener('blur', function () {
            const cep = cepInput.value.replace(/\D/g, '');

            if (cep.length === 8) {
                fetch(`https://viacep.com.br/ws/${cep}/json/`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.erro) {
                            alert('CEP não encontrado.');
                            return;
                        }

                        document.getElementById('logradouro').value = data.logradouro || '';
                        document.getElementById('bairro').value = data.bairro || '';
                        document.getElementById('cidade').value = data.localidade || '';
                        document.getElementById('uf').value = data.uf || '';
                    })
                    .catch(() => {
                        alert('Erro ao buscar o endereço. Tente novamente.');
                    });
            }
        });
    });
}
if (document.getElementById('interessados-wrapper') != null) {

    const wrapper = document.getElementById('interessados-wrapper');
    const addBtn = document.getElementById('add-interessado');

    addBtn.addEventListener('click', () => {
        const field = document.createElement('div');
        field.classList.add('input-group', 'mb-2');

        field.innerHTML = `
            <input type="text" class="form-control" name="interessados[]" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
            <span class="input-group-text text-danger remove-interessado" style="cursor: pointer;">
                <i class="fa-solid fa-square-minus"></i>
            </span>
        `;

        wrapper.appendChild(field);
    });

    wrapper.addEventListener('click', function (e) {
        if (e.target.closest('.remove-interessado')) {
            const allFields = wrapper.querySelectorAll('.input-group');
            if (allFields.length > 1) {
                e.target.closest('.input-group').remove();
            } else {
                alert("Pelo menos um interessado é obrigatório.");
            }
        }
    });

}

function mascaraSEI(obj) {
    let val = obj.value.replace(/[^0-9]/g, '');
    if (val.length > 12)
        val = val.slice(0, 12);
    if (val.length > 4) {
        val = val.slice(0, 4) + '-' + val.slice(4);
    }
    return obj.value = 'SEI-' + val;
}

function validaCPF(cpf) {
    if (typeof cpf !== "string")
        return false
    cpf = cpf.replace(/[\s.-]*/igm, '')
    if (
        !cpf ||
        cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999"
    ) {
        return false
    }
    var soma = 0
    var resto
    for (var i = 1; i <= 9; i++)
        soma = soma + parseInt(cpf.substring(i - 1, i)) * (11 - i)
    resto = (soma * 10) % 11
    if ((resto == 10) || (resto == 11))
        resto = 0
    if (resto != parseInt(cpf.substring(9, 10)))
        return false
    soma = 0
    for (var i = 1; i <= 10; i++)
        soma = soma + parseInt(cpf.substring(i - 1, i)) * (12 - i)
    resto = (soma * 10) % 11
    if ((resto == 10) || (resto == 11))
        resto = 0
    if (resto != parseInt(cpf.substring(10, 11)))
        return false
    return true
}

function consultarCPFDocumentosValidacao(obj) {

    var mensagemDocumento = $("#mensagemDocumento");

    mensagemDocumento.removeClass("alert-danger");
    mensagemDocumento.addClass("d-none");
    mensagemDocumento.addClass("alert-info");
    mensagemDocumento.html("");

    var dataID = $(obj).attr("data-id");
    var dataURL = $(obj).attr("data-url");
    var cpf = $(dataID).val();
    var url = dataURL + "/" + cpf;
    var _token = $("input[name='_token']").val();

    if (!validaCPF(cpf)) {
        mensagemDocumento.removeClass("alert-info");
        mensagemDocumento.removeClass("d-none");
        mensagemDocumento.addClass("d-block");
        mensagemDocumento.addClass("alert-danger");
        mensagemDocumento.html("* CPF inválido!");
        $(dataID).addClass("bg-white");
        $(dataID).removeAttr("readonly");
        $("#email").addClass("bg-white");
        $("#email").removeAttr("readonly");
        return false;
    }

    $.ajax({
        type: "POST",
        url: url,
        dataType: 'json',
        data: {
            data: cpf,
            _token: _token
        },
        success: function (resposta) {
            if (resposta.length === 0) {
                mensagemDocumento.removeClass("d-none");
                mensagemDocumento.addClass("d-block");
                mensagemDocumento.html("* Usuário não existe no sistema!");
            } else {
                mensagemDocumento.removeClass("d-none");
                mensagemDocumento.addClass("d-block");
                mensagemDocumento.html("* Usuário já existe no sistema!");

                var user_id = $("#user_id");
                var matriculation = $("#matriculation");
                var nome = $("#nome");
                var telefone = $("#telefone");
                var email = $("#email");
                var nacimento_at = $("#nacimento_at");
                var isServidorPublico = $("#isServidorPublico");

                if (resposta.isServidorPublico !== "Não") {
                    isServidorPublico.prop('checked', true);
                } else {
                    isServidorPublico.prop('checked', false);
                }

                nome.val(resposta.firstName + " " + resposta.lastName);
                matriculation.val(resposta.matriculation);
                nacimento_at.val(resposta.nacimento_at);
                telefone.val(resposta.phoneNumber);
                email.val(resposta.email);
                user_id.val(resposta.id);

                $(dataID).addClass("bg-light");
                $(dataID).attr("readonly", true);

                $("#email").addClass("bg-light");
                $("#email").attr("readonly", true);
            }
        },
        error: function (xhr, status, error) {
            console.error("Erro:", error);
        }
    });

}

$("#cep").ready(function () {
    document.addEventListener("DOMContentLoaded", function () {
        const cepInput = document.getElementById('cep');

        if (cepInput) {
            cepInput.addEventListener('input', function (e) {
                let value = e.target.value.replace(/\D/g, ''); // Remove tudo que não for dígito

                if (value.length > 5) {
                    value = value.slice(0, 5) + '-' + value.slice(5, 8);
                }

                e.target.value = value.slice(0, 9); // Limita ao formato 00000-000
            });
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    if (document.getElementById('ficha-user-pca') != null) {
        const container = document.getElementById('ficha-user-pca');

        const filterButtons = container.querySelectorAll('.filter-btn');
        const filterSections = container.querySelectorAll('.filter-section');

        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                filterSections.forEach(section => {
                    section.style.display = 'none';
                });

                const filter = this.getAttribute('data-filter');
                const targetSection = document.getElementById(filter);
                if (targetSection) {
                    targetSection.style.display = 'block';
                }
            });
        });

        const defaultActive = container.querySelector('.filter-btn.active');
        if (defaultActive) {
            defaultActive.click();
        }
    }
});

function toggleNumero(obj) {

    const divNumero = $('#div-numero');

    if ($(obj).val() === "INFORMATIVOS_DO_RH") {
        divNumero.addClass("d-none");
    } else {
        divNumero.removeClass("d-none");
    }
}

function toggleEmbarcacaoAndBoats(obj) {

    var tiposEmbarcacaoAndBoats = $("#tiposEmbarcacaoAndBoats");
    let enumBoats = $("#enumBoats").html();
    let enumEmbarcacoes = $("#enumEmbarcacoes").html();

    if (obj.value == "TAXI_BOATS") {
        tiposEmbarcacaoAndBoats.html(enumBoats);
    } else {
        tiposEmbarcacaoAndBoats.html(enumEmbarcacoes);
    }


}

// PORTAL DA TRANSPARÊNCIA - CAMPO DE BUSCA:

document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('pesquisaInput');
    const mainInfo = document.getElementById('mainInfo');

    searchInput.addEventListener('input', function () {
        const searchTerm = this.value.toLowerCase().trim();

        // Esconder mainInfo se houver busca
        mainInfo.style.display = searchTerm === '' ? 'block' : 'none';

        // Esconder sectionTitle se houver busca
        document.querySelectorAll('.sectionTitle').forEach(section => {
            section.style.display = searchTerm === '' ? 'block' : 'none';
        });

        // Buscar em todos os cards (usando a classe card-item)
        document.querySelectorAll('.card-item').forEach(card => {
            const cardText = card.textContent.toLowerCase();

            if (searchTerm === '' || cardText.includes(searchTerm)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });

        // Atualizar visibilidade das seções
        document.querySelectorAll('.col-12.pt-5').forEach(section => {
            const nextRow = section.nextElementSibling;
            if (nextRow && nextRow.classList.contains('row')) {
                const visibleCards = nextRow.querySelectorAll('.card-item[style="display: block"]');
                section.style.display = visibleCards.length > 0 || searchTerm === '' ? 'block' : 'none';
                nextRow.style.display = visibleCards.length > 0 || searchTerm === '' ? 'flex' : 'none';
            }
        });
    });

});

// PORTAL DA TRANSPARÊNCIA - FIM


// INÍCIO - COMPARTILHAR BOLETIM METEOROLÓGICO


function shareOnSocial(platform) {
    const url = encodeURIComponent(window.location.href);
    const title = encodeURIComponent('Boletim Meteorológico - Defesa Civil Angra dos Reis');
    const text = encodeURIComponent('Confira o boletim meteorológico mais recente da Defesa Civil de Angra dos Reis');

    const shares = {
        facebook: `https://www.facebook.com/sharer/sharer.php?u=${url}&quote=${text}`,
        twitter: `https://twitter.com/intent/tweet?url=${url}&text=${text}`,
        linkedin: `https://www.linkedin.com/sharing/share-offsite/?url=${url}&title=${title}&summary=${text}`,
        whatsapp: `https://wa.me/?text=${text}%20${url}`,
        telegram: `https://t.me/share/url?url=${url}&text=${text}`
    };

    if (shares[platform]) {
        window.open(shares[platform], '_blank', 'width=600,height=500');
    }
}

function isPessoaFisicaOuPessoaJuridica(valor) {

    var pessoaFisica = $("#pessoaFisica");
    var pessoaJuridica = $("#pessoaJuridica");
    
    var cpf = $("#cpf");
    var cnpj = $("#cnpj");

    if (valor === '1') {
        pessoaFisica.removeClass("d-none");
        pessoaJuridica.addClass("d-none");
        cnpj.val("");
    } else {
        pessoaJuridica.removeClass("d-none");
        pessoaFisica.addClass("d-none");
        cpf.val("");
    }
}

function mascaraMoeda(input) {
    let valor = input.value;
    valor = valor.replace(/\D/g, '');
    valor = (valor / 100).toFixed(2);
    valor = valor.replace('.', ',');
    valor = valor.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    input.value = 'R$ ' + valor;
}

async function copyToClipboard() {
    try {
        const url = window.location.href;

        // Método moderno
        if (navigator.clipboard && window.isSecureContext) {
            await navigator.clipboard.writeText(url);
        } else {
            // Método fallback para navegadores mais antigos
            const textArea = document.createElement('textarea');
            textArea.value = url;
            textArea.style.position = 'fixed';
            textArea.style.left = '-999999px';
            textArea.style.top = '-999999px';
            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
        }

        // Feedback visual melhorado
        const btn = event.target.closest('button');
        const originalHTML = btn.innerHTML;
        const originalTitle = btn.getAttribute('title') || btn.getAttribute('data-bs-original-title');

        btn.innerHTML = '<i class="fas fa-check me-1 text-soft"></i>';
        btn.classList.remove('btn-outline-secondary');
        btn.classList.add('btn-success');

        // Atualizar tooltip se existir
        if (btn._tooltip) {
            btn.setAttribute('data-bs-original-title', 'Link copiado!');
            btn._tooltip.show();
        }

        setTimeout(() => {
            btn.innerHTML = originalHTML;
            btn.classList.remove('btn-success');
            btn.classList.add('btn-outline-secondary');

            if (btn._tooltip && originalTitle) {
                btn.setAttribute('data-bs-original-title', originalTitle);
            }
        }, 3000);

    } catch (err) {
        console.error('Falha ao copiar: ', err);

        // Feedback de erro
        const btn = event.target.closest('button');
        const originalHTML = btn.innerHTML;

        btn.innerHTML = '<i class="fas fa-times me-1"></i>Erro';
        btn.classList.remove('btn-outline-secondary');
        btn.classList.add('btn-danger');

        setTimeout(() => {
            btn.innerHTML = originalHTML;
            btn.classList.remove('btn-danger');
            btn.classList.add('btn-outline-secondary');
        }, 2000);
    }
}

// Versão alternativa mais simples para copyToClipboard
async function copyToClipboardSimple() {
    const url = window.location.href;

    try {
        await navigator.clipboard.writeText(url);

        // Toast notification (se você tiver um sistema de toast)
        showToast('Link copiado para a área de transferência!', 'success');

    } catch (err) {
        // Fallback para navegadores mais antigos
        const textArea = document.createElement('textarea');
        textArea.value = url;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);

        showToast('Link copiado!', 'success');
    }
}

// Função auxiliar para mostrar notificação (opcional)
function showToast(message, type = 'info') {
    // Se você usar Bootstrap Toasts
    if (typeof bootstrap !== 'undefined') {
        const toastEl = document.createElement('div');
        toastEl.className = `toast align-items-center text-bg-${type} border-0`;
        toastEl.innerHTML = `
            <div class="d-flex">
                <div class="toast-body">${message}</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        `;
        document.body.appendChild(toastEl);

        const toast = new bootstrap.Toast(toastEl);
        toast.show();

        toastEl.addEventListener('hidden.bs.toast', () => {
            document.body.removeChild(toastEl);
        });
    } else {
        // Fallback simples
        alert(message);
    }
}

// Inicializar tooltips se estiver usando Bootstrap
document.addEventListener('DOMContentLoaded', function () {
    if (typeof bootstrap !== 'undefined') {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }
});
