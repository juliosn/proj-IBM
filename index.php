<!-- 
    PRA QUE SERVE TANTO CÓDIGO?
    SE A VIDA NÃO É PROGRAMADA 
    E AS MELHORES COISAS
    NÃO TEM LÓGICA!
 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJM - Assistance</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="shortcut icon" href="img/SJM.png" type="image/x-icon">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-xl navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand logo-pc" href="index.php "><img src="img/SJM.png" height="70" alt="" srcset=""></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servico.php">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.html">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dicas.html">Dicas</a>
                        </li>
                    </ul>
                    </div>
                    <div class="nome-nav">
                        <img src="img/SJM.png" height="60" class="img-logo-nav-cel" srcset="">
                        SJM Assistance
                    </div>
                    <div class="d-btn">
                        <a class="btn btn-entrar" href="entrar.php">Entrar</a>
                        <a class="btn btn-cadastro" href="cadastro.php">Cadastre-se</a>
                    </div>
                    <div class="nome-cel">
                        <a class="link-nome-cel" href="index.php">
                            <img src="img/SJM.png" height="60" alt="" srcset="">
                            SJM Assistance
                        </a>
                    </div>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container">


            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-carrousel bd-placeholder-img bd-placeholder-img-lg d-block w-100" src="img/conserto2.webp" alt="" srcset="">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h1>First slide label</h1>
                            <p>Some representative placeholder content for the first slide.</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-carrousel bd-placeholder-img bd-placeholder-img-lg d-block w-100" src="img/conserto1.jpg" alt="" srcset="">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h1>Second slide label</h1>
                            <p>Some representative placeholder content for the first slide.</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-carrousel bd-placeholder-img bd-placeholder-img-lg d-block w-100" src="img/conserto2.jpg" alt="" srcset="">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h1>Third slide label</h1>
                            <p>Some representative placeholder content for the first slide.</p> -->
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </header>
    <main>
        <!-- MENU PARA CELULAR -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header" style="background: #002060; color: #fff">
                <button type="button" style="background: transparent; border:0; color: #fff" data-bs-dismiss="offcanvas">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                </button>
                <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="background: #002060;">
                <div class=" navbar-dark">
                    <a class="navbar-brand logo-menu-celular" href="index.php "><img src="img/logo-nome-grande.png" height="200" alt="" srcset=""></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servico.php">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.html">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dicas.html">Dicas</a>
                        </li>
                    </ul>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col col-btn-celular">
                            <a class="btn btn-entrar-footer" href="entrar.php">Entrar</a>
                        </div>
                        <div class="col col-btn-celular">
                            <a class="btn btn-cadastro-footer" href="cadastro.php">Cadastre-se</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MENU PARA CELULAR -->
        <div class="container">
            <div class="marcas-parceiras">
                <h1 class="title-marca">Confira marcas parceiras</h1>
                <div class="row">
                    <div class="col marca bd-highlight">
                        <h1>HP</h1>
                        <p class="text-marcas-parceiras">Nossa visão é fornecer a melhor descoberta de produtos e experiência de compra para nossos clientes. 
                            Explore as várias tecnologias HP, encontre detalhes de lançamentos de novos produtos, obtenha detalhes das ofertas mais recentes e compre
                            com a conveniência e confiança de comprar produtos originais HP. Atualmente, a Loja HP ​​é gerenciada e mantida pela Kalunga SA, um revendedor autorizado 
                            da HP, Inc.</p>
                        <a href="https://www.hp.com/br-pt/shop/hp-intel?gclid=EAIaIQobChMIxMTP4qak-wIVVxXUAR1rWwUUEAAYASAAEgK2zvD_BwE&gclsrc=aw.ds" class="btn btn-saiba-mais">Saiba mais</a>
                    </div>
                    <div class="col marca">
                        <h1>Acer</h1>
                        <p class="text-marcas-parceiras">Acer é um fornecedor global de computadores, que se classificou em 2º lugar nas vendas de Notebooks, tablets, e outros 
                            produtos mundialmente. Com filiais em 38 países e mais de 8000 funcionários em todo o mundo, o faturamento da Acer em 2013 foi de US$15.7 bilhões. 
                            A Acer se esforça para oferecer produtos e serviços inovadores e intuitivos para que sua empresa possa explorar seus limites.</p>
                        <a href="https://br-store.acer.com/?utm_medium=cpc&utm_source=google&utm_campaign=SEM-Amplo-Acer&utm_term=geral&utm_content=Acer-Amplo_Notebooks&gclid=EAIaIQobChMIkpaUmqek-wIVCRXUAR0b3AcTEAAYASAAEgLZKvD_BwE" class="btn btn-saiba-mais">Saiba mais</a>
                    </div>
                    <div class="col marca">
                        <h1>Asus</h1>
                        <p class="text-marcas-parceiras">Fundada em 1989, a ASUS é uma empresa multinacional conhecida pelas melhores placas-mãe e computadores pessoais de alta
                             qualidade, monitores, placas de vídeo, roteadores e outras soluções de tecnologia do mundo. Hoje, a ASUS está projetando e construindo tecnologias 
                             inteligentes de última geração para proporcionar experiências incríveis que melhoram a vida das pessoas em todos os lugares.</p>
                        <a href="https://www.asus.com/br/?utm_source=google&utm_medium=cpc&utm_campaign=22q3_notebook_bz&utm_content=institucional_search__8&gclid=EAIaIQobChMIt63Viamk-wIVCk-RCh2CZgWPEAAYASAAEgLHl_D_BwE" class="btn btn-saiba-mais">Saiba mais</a>
                    </div>
                    <div class="col marca">
                        <h1>Positivo</h1>
                        <p class="text-marcas-parceiras">Tecnologia faz parte da vida de todos nós. Na Positivo, atendemos às pessoas que tanto esperavam, e agora não precisam mais esperar. 
                            Com produtos que unem a necessidade com a realidade. Mais que sonhar, nosso papel é realizar. Oferecer ao consumidor dispositivos tecnológicos que todos possam e queiram comprar.
                            Computadores, smartphones e tablets que combinam o que há de mais atual à preços mais justos.</p>
                        <a href="https://loja.meupositivo.com.br/notebooks?gclid=EAIaIQobChMIq8Oi16mk-wIVBEVIAB2iDwUIEAAYASAAEgL7kPD_BwE" class="btn btn-saiba-mais">Saiba mais</a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
            <div class="opnioes container">
                <div class="row">
                    <div class="col">
                        <h1 class="title-marca">Tipos de Serviço</h1>
                    </div>
                </div>
                <div class="row div-servico">
                    <div class="col servico">
                        <img class="img-servicos" src="img/bateria.jpg" alt="" srcset="">
                    </div> 
                    <div class="col servico col-text">
                        <h1>Problemas na bateria</h1>
                        <p class="text-servico">
                            A população ela precisa da Zona Franca de Manaus, porque na Zona franca de Manaus, não é uma zona de exportação, é uma zona 
                            para o Brasil. Portanto ela tem um objetivo, ela evita o desmatamento, que é altamente lucravito. Derrubar arvores da natureza 
                            é muito lucrativo!
                        </p>
                        <a href="entrar.php" class="btn btn-saiba-mais">Entrar em contato</a>
                    </div>
                </div>
                <div class="row div-servico">
                    <div class="col servico">
                        <h1>Troca de placa mãe</h1>
                        <p class="text-servico">
                            A única área que eu acho, que vai exigir muita atenção nossa, e aí eu já aventei a hipótese de até criar um ministério. É na 
                            área de... Na área... Eu diria assim, como uma espécie de analogia com o que acontece na área agrícola.
                        </p>
                        <a href="entrar.php" class="btn btn-saiba-mais">Entrar em contato</a>
                    </div>
                    <div class="col servico">
                        <img class="img-servicos" src="img/placa_mae.png" alt="" srcset="">
                    </div>
                </div>
                <div class="row div-servico">
                    <div class="col servico">
                        <img class="img-servicos" src="img/sistema_seguranca.png" alt="" srcset="">
                    </div>
                    <div class="col servico">
                        <h1>Sistema de segurança</h1>
                        <p class="text-servico">
                            No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. 
                            Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
                        </p>
                        <a href="entrar.php" class="btn btn-saiba-mais">Entrar em contato</a>
                    </div>
                </div>
                <div class="row div-servico">
                    <div class="col servico">
                        <h1>Sistemas operacionais</h1>
                        <p class="text-servico">
                            No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. 
                            Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
                        </p>
                        <a href="entrar.php" class="btn btn-saiba-mais">Entrar em contato</a>
                    </div>
                    <div class="col servico">
                        <img class="img-servicos" src="img/sistema_operacional.webp" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>

        <button style="display: none;" type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="img/SJM.png" height="20px" class="rounded me-2" alt="...">
                    <strong class="me-auto" style="font-size:16px;">SJM</strong>
                    <small>Agora</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body" style="font-size:16px;">
                    Crie sua conta <a href="cadastro.php">aqui!</a> Ou entre por <a href="entrar.php">aqui!</a>
                </div>
            </div>
        </div>
    </main>

    <script>
        var toastTrigger = document.getElementById('liveToastBtn')
        var toastLiveExample = document.getElementById('liveToast')
                var toast = new bootstrap.Toast(toastLiveExample)

                toast.show()
    </script>

    <footer>
        <div class="container">
            <div class="row row-links">
                <div class="col-3 col-img-footer">
                    <img src="img/SJM.png" class="logo-footer">
                </div>
                <div class="col-2 col-link">
                    <div class="row">
                        <div class="col text-footer">Site</div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="index.php">Home</a></div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="servicos-prestados.html">Serviços</a></div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="contato.php">Contato</a></div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="sobre.html">Sobre</a></div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="dicas.html">Dicas</a></div>
                    </div>
                </div>
                <div class="col-2 col-link link-centro">
                    <div class="row">
                        <div class="col text-footer">Criadores</div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="https://github.com/JoaoEnrique">João Enrique</a></div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="#">Júlia Dias</a></div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="https://github.com/juliosn/proj-IBM/tree/v2">Júlio Neves</a></div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="#">Maria Eduarda</a></div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="#">Sarah Jandozza</a></div>
                    </div>
                </div>
                <div class="col-3 col-link link-right">
                    <div class="row">
                        <div class="col text-footer">Principais Pesquisas</div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="dicas.html">Conserto</a></div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="dicas.html">Troca de HD</a></div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="dicas.html">Backup</a></div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="dicas.html">Troca de tela</a></div>
                    </div>
                    <div class="row">
                        <div class="col col-link-footer"><a class="link-footer" href="dicas.html">Placa mãe</a></div>
                    </div>
                </div>
                <div class="col-2 col-btn-footer">
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-entrar-footer" href="entrar.php">Entrar</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-cadastro-footer" href="cadastro.php">Cadastre-se</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="linha-footer"></div>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 25px;">
                <div class="row" style="justify-content: center!important;">
                    <div class="col" style="text-align: left;">
                            <p class="copyright">© SJM Assistance. 2022</p>
                    </div>
                    <!-- Links das redes sociais (imagens) -->
                    <div class="col div-link-icons">
                        <a href="http://" target="_blank"><!-- Facebook -->
                            <svg class="img-link-footer" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a  href="http://" target="_blank"><!-- Instagram -->
                            <svg class="img-link-footer" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                        <a href="http://" target="_blank"><!-- Contato -->
                            <svg class="img-link-footer" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-chat-text" viewBox="0 0 16 16">
                                <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </a>
                        <a href="http://" target="_blank"><!-- Email -->
                            <svg class="img-link-footer" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                        </a>
                        <a href="http://" target="_blank"><!-- Linkedin -->
                            <svg class="img-link-footer" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                            </svg>
                        </a>
                        <a href="http://" target="_blank"><!--YouTube -->
                            <svg class="img-link-footer" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>