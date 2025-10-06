<section>
    <div class="container">

        <div class="row mt-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4 mb-5 d-flex justify-content-center align-items-start">
                <div class="d-flex justify-content-center align-items-start" style="cursor:pointer;" onclick="window.location='{{ route("index") }}';">
                    <img src="{{ asset("/images/logo-angra-branco.svg") }}" alt="Prefeitura de Angra dos Reis" class="footer-pmar-transparencia-logo m-auto">
                </div>
            </div>
            <div class="footer-pmar-colunas col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 col-xxl-4 mb-5">
                <h5>Entre em contato:</h5>
                <ul>
                    <li>
                        <a href="tel:+552433778311">
                            <i class="footer-pmar-icons fa-solid fa-phone"></i>
                            <span>Tel: +55 (24) 3377 8311</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://portal.angra.rj.gov.br/downloads/Lista_Telefonica.pdf" target="_blank">
                            <i class="footer-pmar-icons fa-solid fa-book"></i>
                            <span>Lista de ramais</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://maps.app.goo.gl/14ovbkFQAySAGb1L8" target="_blank">
                            <i class="footer-pmar-icons fa-solid fa-location-dot"></i>
                            <span>Praça Nilo Peçanha, nº 186 - Centro<br>
                                Angra dos Reis, RJ - CEP: 23900-901</span>
                        </a>
                    </li>
                    <li>
                        <i class="footer-pmar-icons fa-solid fa-clock"></i>
                        <span>Horário de atendimento ao público:<br>
                            segunda à sexta, das 10 às 16h.</span>
                    </li>
                </ul>
            </div>
            <div class="footer-pmar-colunas col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 col-xxl-4">
                <h5>Acompanhe, comente e compartilhe:</h5>
                <ul>
                    <li>
                        <a href="http://facebook.com/PrefeituradeAngra" target="_blank">
                            <i class="footer-pmar-icons fa-brands fa-facebook"></i>
                            <span>Curta nossa página no Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/prefeituraangra" target="_blank">
                            <i class="footer-pmar-icons fa-brands fa-instagram"></i>
                            <span>Siga nosso perfil no Instagram</span>
                        </a>
                    </li>
                </ul>
                <h5 class="mt-5">Outros sites relevantes:</h5>
                <ul>
                    <li>
                        <a href="https://visite.angra.rj.gov.br/" target="_blank">
                            <i class="footer-pmar-icons fa-solid fa-sun"></i>
                            <span>Portal Visite Angra</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://saaeangra.com.br/" target="_blank">
                            <i class="footer-pmar-icons fa-solid fa-droplet"></i>
                            <span>SAAE - Água e esgoto</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.angraprev.rj.gov.br/" target="_blank">
                            <i class="footer-pmar-icons fa-solid fa-person"></i>
                            <span>Angraprev - Previdência Social</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://angra.rj.gov.br/protecao-de-dados-lgpd" target="_blank">
                            <i class="footer-pmar-icons fa-solid fa-lock"></i>
                            <span>Proteção de Dados - LGPD</span>
                        </a>
                    </li>
                </ul>
            </div>
            <button id="backToTop" aria-label="Voltar ao Topo">
                <i class="text-primary fa-solid fa-chevron-up fw-bold fs-4"></i>
            </button>


        </div>
    </div>
</section>

<script src="https://plugin.handtalk.me/web/latest/handtalk.min.js"></script>
<script>
    var ht = new HT({
        token: "7a92081e27daf17bd3b2efe277d0648c",
        avatar: "MAYA",
        pageSpeech: true,
        maxTextSize: 1000
    });
</script>

<script src="{{ asset('pmar/js/jquery-3.7.1.min.js') }}"></script>
<!-- <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script async src="https://cse.google.com/cse.js?cx=b5b7c1de20bbd48fb"></script>
