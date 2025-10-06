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

async function preparaMenu() {
    var url = "https://angra.rj.gov.br";

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

