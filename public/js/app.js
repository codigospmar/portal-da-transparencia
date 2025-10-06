$(document).ready(function () {

    $('.alter-file-image').change(function (event) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
        $(".src-file-image").fadeIn("fast").attr('src', tmppath).fadeIn("slow", 3000);
    });

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

    preparaMenu();

});

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