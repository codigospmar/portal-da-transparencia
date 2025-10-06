
$(document).ready(function () {


    /**
     *
     * @rogeriopontesti
     * Função: altera o atributo `src` de uma tag `<img/> através da tag `<input type="file">`
     * Uso: <img class="src-file-image"/>  <input type="file" class="alter-file-image">
     *
     **/
    $('.alter-file-image').change(function (event) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
        $(".src-file-image").fadeIn("fast").attr('src', tmppath).fadeIn("slow", 3000);
    });

    /**
     *
     * @rogeriopontesti
     * Função: Núvem de Tags `<img/> através da tag `<input type="file">`
     * Uso: <img class="src-file-image"/>  <input type="file" class="alter-file-image">
     *
     **/
    $('.tag-input').on('input', function () {
        const input = $(this);
        const value = input.val();
        if (value.includes(',') || value.includes(';')) {
            const tags = value.split(/[,;]/).map(tag => tag.trim()).filter(tag => tag !== '');
            tags.forEach(tag => {
                if (tag) {
                    $('.tag-cloud').append(`
                        <span class="badge bg-primary me-1 tag-badge">
                            ${tag} <span class="ms-1" style="cursor: pointer;">&times;</span>
                            <input type="hidden" name="cloud[]" value="${tag}">
                        </span>
                    `);
                }
            });
            input.val('');
        }
    });

    // Remove a tag ao clicar nela
    $('.tag-cloud').on('click', '.tag-badge', function () {
        $(this).remove();
    });

    $(".show-password").on("click", function (event) {
        var input = $('input[name="password"]');
    });

    $(".del-confirm").on("click", function (event) {
        if (confirm($("input[name=confirm]").val())) {
            $(".del").submit();
        }
    });

    $(".textarea-body").ready(function () {
        tinymce.init({
            selector: '.textarea-body',
            entity_encoding: "raw",
            menubar: false, // Esconde a barra de menus (File, Edit, etc.)
            valid_elements: 'p,a[href|target],strong/b,em/i,u', // Permite apenas <p> e <a> com atributos específicos
            valid_children: '', // Não permite filhos dentro de nenhuma tag
            forced_root_block: 'p', // Força o encapsulamento por <p>
            invalid_elements: 'ul,li,table,thead,tbody,tr,td,th', // Bloqueia outras tags que não sejam <p> ou <a>
            height: 500, // Ajusta a altura do editor, se necessário

            // Inclui o ícone de link na barra de ferramentas
            toolbar: 'undo redo | bold italic underline | link',

            // Ativa o plugin de link
            plugins: 'link',

            // Remove context menus desnecessários
            contextmenu: false, // Remove o menu de clique direito no editor
        });
    });

    $(".textarea-comments").ready(function () {
        tinymce.init({
            selector: '.textarea-comments',
            entity_encoding: "raw",
            menubar: false,
            plugins: ['lists', 'link', 'table'], // Habilita os plugins
            toolbar: 'bold italic | bullist numlist | link | table', // Adiciona os botões bold e italic
            height: 150,
            valid_elements: 'p,ul,li,a[href|target],table,thead,tbody,tr,td,th,b,i,strong,em', // Inclui <strong> e <em> além de <b> e <i>
            valid_children: '+body[table],+table[thead|tbody|tr],+tr[td|th]', // Estrutura válida para tabelas
            forced_root_block: 'p', // Força o encapsulamento do texto em <p>
            table_default_attributes: {}, // Remove atributos padrão de tabelas
            table_default_styles: {}, // Remove estilos padrão de tabelas
            skin: 'oxide', // Garante que o skin padrão seja usado
            content_css: 'default', // Carrega o CSS padrão
        });
    });


    $(".pesquisarBoletim").on("submit", function (event) {
        event.preventDefault();

        $("#hiddenPagination").addClass("d-none");

        var preload = `
            <tr>
                <th>Data de Publicação</th>
                <th>Mês</th>
                <th>Número</th>
                <th>Tipo de Edição</th>
                <th></th>
            </tr>
        <tr>
            <td colpan="5">
                <div>
                    <span class="spinner-grow text-primary" role="status">
                    <span class="visually-hidden">Carregando, aguarde...</span>
                    </span>
                    <span class="spinner-grow text-secondary" role="status">
                    <span class="visually-hidden"></span>
                    </span>
                    <span class="spinner-grow text-success" role="status">
                    <span class="visually-hidden"></span>
                    </span>
                    <span class="spinner-grow text-danger" role="status">
                    <span class="visually-hidden"></span>
                    </span>
                    <span class="spinner-grow text-warning" role="status">
                    <span class="visually-hidden"></span>
                </span>
            </div>
            </td>
        </tr>`;
        $("#bulletinsTable").html(preload);

        var url = $(this).attr("action");

        let dados = $(this).serialize(); // Pega todas as variáveis do formulário

        $.ajax({
            url: url, // Altere para a URL do seu backend
            type: "POST",
            data: dados,
            success: function (resposta) {
                $("#getResultAjaxHTML").html(resposta);
            },
            error: function (xhr, status, error) {
                console.error("Erro:", error);
            }
        });


    });

    preparaMenu();

    if (document.getElementById('endpoint') != null) {
        preparaBoletins();
    }

    if (document.getElementById('charCounterTitleNews') != null) {
        monitorCharacterLimit('#title', '#charCounterTitleNews', 85);
        monitorCharacterLimit('#summary', '#charCounterSummaryNews', 200);
    }

    if (document.getElementById("zipCode") != null) {
        const cepInput = document.getElementById("zipCode");

        // Adiciona evento para buscar o endereço ao perder o foco
        cepInput.addEventListener("blur", function () {
            const cep = this.value.replace("-", "").trim(); // Remove o traço do CEP

            if (cep.length === 8) {
                // Chama a API para buscar os dados do endereço
                fetch(`https://viacep.com.br/ws/${cep}/json/`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error("Erro ao buscar o CEP");
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.erro) {
                                alert("CEP não encontrado!");
                                return;
                            }
                            // Preenche os campos com os valores retornados pela API
                            document.getElementById("street").value = data.logradouro || "";
                            document.getElementById("neighborhood").value = data.bairro || "";
                            document.getElementById("city").value = data.localidade || "";
                            document.getElementById("state").value = data.uf || "";

                            const address = `${data.logradouro}, ${data.localidade}, ${data.uf}, Brasil`;
                            const geoUrl = `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(address)}`;
                            fetch(geoUrl)
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.length > 0) {
                                            const latitude = data[0].lat;
                                            const longitude = data[0].lon;
                                            // Armazena os valores nos campos ocultos
                                            document.getElementById("latitude").value = latitude;
                                            document.getElementById("longitude").value = longitude;
                                        } else {
                                            console.error("Nenhuma coordenada encontrada para esse endereço.");
                                        }
                                    }).catch(error => console.error("Erro ao buscar latitude e longitude:", error));

                        })
                        .catch(error => {
                            console.error("Erro ao buscar o CEP:", error);
                            alert("Ocorreu um erro ao buscar o CEP. Verifique sua conexão ou tente novamente mais tarde.");
                        });
            } else {
                alert("Por favor, insira um CEP válido com 8 dígitos.");
            }
        });
    }
});
function resetPasswordUser(obj) {
    const isChecked = $(obj).is(":checked");
    let div = $("#resetPasswordCheckbox");
    if (isChecked) {
        div.removeClass("d-none");
    } else {
        div.addClass("d-none");
    }
}
function selectAllCheckboxSecretariasNoticias(obj) {

    if ($(obj).html() === "* selecionar todas as secretarias") {
        $(obj).html("* remover seleção");
        $("#checkboxSecretariasNoticias").find("input").each(function (i) {
            $(this).prop('checked', true);
        });
    } else {
        $(obj).html("* selecionar todas as secretarias");
        $("#checkboxSecretariasNoticias").find("input").each(function (i) {
            $(this).prop('checked', false);
        });
    }

}

function selectAllCheckboxCategoriasNoticias(obj) {

    if ($(obj).html() === "* selecionar todas as categorias") {
        $(obj).html("* remover seleção");
        $("#checkboxCategoriasNoticias").find("input").each(function (i) {
            $(this).prop('checked', true);
        });
    } else {
        $(obj).html("* selecionar todas as categorias");
        $("#checkboxCategoriasNoticias").find("input").each(function (i) {
            $(this).prop('checked', false);
        });
    }

}

function selectAllCheckboxDiretoriasNoticias(obj) {

    if ($(obj).html() === "* selecionar todos os departamentos") {
        $(obj).html("* remover seleção");
        $("#checkboxDiretoriasNoticias").find("input").each(function (i) {
            $(this).prop('checked', true);
        });
    } else {
        $(obj).html("* selecionar todos os departamentos");
        $("#checkboxDiretoriasNoticias").find("input").each(function (i) {
            $(this).prop('checked', false);
        });
    }

}

function selectAllCheckboxExecutivasNoticias(obj) {

    if ($(obj).html() === "* selecionar todas as executivas") {
        $(obj).html("* remover seleção");
        $("#checkboxExecutivasNoticias").find("input").each(function (i) {
            $(this).prop('checked', true);
        });
    } else {
        $(obj).html("* selecionar todas as executivas");
        $("#checkboxExecutivasNoticias").find("input").each(function (i) {
            $(this).prop('checked', false);
        });
    }

}

function selectAllCheckboxGabinetesNoticias(obj) {

    if ($(obj).html() === "* selecionar todos os gabinetes") {
        $(obj).html("* remover seleção");
        $("#checkboxGabinetesNoticias").find("input").each(function (i) {
            $(this).prop('checked', true);
        });
    } else {
        $(obj).html("* selecionar todos os gabinetes");
        $("#checkboxGabinetesNoticias").find("input").each(function (i) {
            $(this).prop('checked', false);
        });
    }

}

function selectAllCheckboxSuperintendenciasNoticias(obj) {

    if ($(obj).html() === "* selecionar todas as superintendencias") {
        $(obj).html("* remover seleção");
        $("#checkboxSuperintendenciasNoticias").find("input").each(function (i) {
            $(this).prop('checked', true);
        });
    } else {
        $(obj).html("* selecionar todas as superintendencias");
        $("#checkboxSuperintendenciasNoticias").find("input").each(function (i) {
            $(this).prop('checked', false);
        });
    }

}

function selectAllCheckboxPapeisUsuarios(obj) {

    if ($(obj).html() === "* selecionar todos papeis") {
        $(obj).html("* remover seleção");
        $("#checkboxPapeisUsuarios").find("input").each(function (i) {
            $(this).prop('checked', true);
        });
    } else {
        $(obj).html("* selecionar todos papeis");
        $("#checkboxPapeisUsuarios").find("input").each(function (i) {
            $(this).prop('checked', false);
        });
    }

}

function selectAllCheckboxParquesJardins(obj) {

    if ($(obj).html() === "* selecionar todos os atributos") {
        $(obj).html("* remover seleção");
        $("#checkboxParquesJardins").find("input").each(function (i) {
            $(this).prop('checked', true);
        });
    } else {
        $(obj).html("* selecionar todos os atributos");
        $("#checkboxParquesJardins").find("input").each(function (i) {
            $(this).prop('checked', false);
        });
    }

}

function selectAllCheckboxAutarquiasNoticias(obj) {

    if ($(obj).html() === "* selecionar todas os órgãos") {
        $(obj).html("* remover seleção");
        $("#checkboxAutarquiasNoticias").find("input").each(function (i) {
            $(this).prop('checked', true);
        });
    } else {
        $(obj).html("* selecionar todas os órgãos");
        $("#checkboxAutarquiasNoticias").find("input").each(function (i) {
            $(this).prop('checked', false);
        });
    }

}

if (document.getElementById('backToTop') != null) {
    document.addEventListener('DOMContentLoaded', function () {
        const backToTopBtn = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopBtn.style.display = 'flex';
            } else {
                backToTopBtn.style.display = 'none';
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
}

// Compartilhamento de notícias
    const socialIcons = document.querySelectorAll('.social-icons a');
    const socialContainer = document.querySelector('.social-icons');

    const noticiaTitle = encodeURIComponent(socialContainer.dataset.title);
    const noticiaURL = encodeURIComponent(socialContainer.dataset.url);
    const noticiaImage = encodeURIComponent(socialContainer.dataset.image);

    socialIcons.forEach(icon => {
        icon.addEventListener('click', function (event) {
            event.preventDefault();
            const platform = this.dataset.platform;
            const shareURL = getShareURL(platform, noticiaTitle, noticiaURL, noticiaImage);

            if (shareURL) {
                window.open(shareURL, '_blank', 'noopener,noreferrer');
            } else {
                alert('Plataforma de compartilhamento não configurada.');
            }
        });
    });

    function getShareURL(platform, title, url, image) {
        switch (platform) {
            case 'twitter':
                return `https://twitter.com/intent/tweet?text=${title}&url=${url}`;
            case 'facebook':
                return `https://www.facebook.com/sharer/sharer.php?u=${url}`;
            case 'linkedin':
                return `https://www.linkedin.com/shareArticle?mini=true&url=${url}&title=${title}`;
            case 'whatsapp':
                return `https://wa.me/?text=${title} - ${url}`;
            case 'telegram':
                return `https://t.me/share/url?url=${url}&text=${title}`;
            default:
                return null;
        }
    }

//Acessibilidade
$('#adjust').on('click', function (e) {
    $('#darkSwitch').click();
});

zoomLevel = 1;
$('.zoom').on('click', function (e) {
    let zoom = parseFloat($(this).attr('data-value'))
    if (zoom == 1) {
        zoom = 0;
        zoomLevel = 1
    }

    zoomLevel += zoom;
    $('body').css({'transform-origin': 'center top'})
    $('body').css({'transform-box': 'fill-box'})
    $('body').css({zoom: zoomLevel, '-moz-transform': 'scale(' + zoomLevel + ')'})
});

if (document.getElementById("darkSwitch") != null) {
    var darkSwitch = document.getElementById("darkSwitch");
    if (darkSwitch) {
        initTheme();
        darkSwitch.addEventListener("change", function (event) {
            resetTheme();
        });
        function initTheme() {
            var darkThemeSelected =
                    localStorage.getItem("darkSwitch") !== null &&
                    localStorage.getItem("darkSwitch") === "dark";
            darkSwitch.checked = darkThemeSelected;
            darkThemeSelected
                    ? document.body.setAttribute("data-theme", "dark")
                    : document.body.removeAttribute("data-theme");
        }
        function resetTheme() {
            if (darkSwitch.checked) {
                document.body.setAttribute("data-theme", "dark");
                localStorage.setItem("darkSwitch", "dark");
            } else {
                document.body.removeAttribute("data-theme");
                localStorage.removeItem("darkSwitch");
            }
        }
    }
}

$('[data-bs-toggle="tooltip"]').ready(function () {
    // TOOLTIP
    document.addEventListener("DOMContentLoaded", function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
});

$('.faq-item h3, .faq-item .faq-toggle').ready(function () {
    // FAQ Accordion
    document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
        faqItem.addEventListener('click', () => {
            faqItem.parentNode.classList.toggle('faq-active');
        });
    });
});

if (document.getElementById('verMaisBtn') != null) {
    const btn = document.getElementById('verMaisBtn');
    const hiddenItems = document.querySelectorAll('.hidden-item');

    let isExpanded = false;

    btn.addEventListener('click', () => {
        if (!isExpanded) {
            hiddenItems.forEach(item => item.style.display = 'block');
            btn.textContent = 'Ver Menos Secretarias';
            isExpanded = true;
        } else {
            hiddenItems.forEach(item => item.style.display = 'none');
            btn.textContent = 'Ver Mais Secretarias';
            isExpanded = false;
        }
    });
}

if (document.getElementById('cpf') != null) {
    document.addEventListener('DOMContentLoaded', function () {
        const cpfInput = document.getElementById('cpf');

        cpfInput.addEventListener('input', function (e) {
            let value = cpfInput.value.replace(/\D/g, ''); // Remove não-dígitos

            // Limita a 11 dígitos
            if (value.length > 11) {
                value = value.slice(0, 11);
            }

            // Aplica a máscara
            if (value.length > 9) {
                value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
            } else if (value.length > 6) {
                value = value.replace(/(\d{3})(\d{3})(\d{1,3})/, "$1.$2.$3");
            } else if (value.length > 3) {
                value = value.replace(/(\d{3})(\d{1,3})/, "$1.$2");
            }

            cpfInput.value = value;
        });
    });
}

$("#categoriaGuiaTuristico").change(function () {
    if ($(this).val() === "OUTROS") {
        $("#divCategoriaOutros").removeClass("d-none");
    } else {
        $("#divCategoriaOutros").addClass("d-none");
        $("#categoriaOutros").val("");
    }
});

var anoAtualDatepickerYear = new Date().getFullYear();

$("#datepickerYear").datepicker({
    changeMonth: false, // esconde seleção de mês
    changeYear: true, // permite escolher o ano
    showButtonPanel: true,
    dateFormat: 'yy', // mostra apenas o ano no input
    currentText: "Hoje", // texto do botão Today
    yearRange: '1900:' + anoAtualDatepickerYear,
    closeText: "OK",
    onClose: function (dateText, inst) {
        var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
        $(this).datepicker('setDate', new Date(year, 1));
    }
});

// Hack para esconder o calendário e mostrar só anos
$("#datepickerYear").focus(function () {
    $(".ui-datepicker-calendar").hide();
    $(".ui-datepicker-month").hide();
});