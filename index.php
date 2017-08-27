<!DOCTYPE html>
<html>
    <head>
        <title>Noticias</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- para nao dar zoom -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- my style compilate -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> <!-- my style compilate -->
        <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css"> <!-- plugin menu responsivo -->
        <link rel="stylesheet" type="text/css" href="css/jquery.mhead.css"> <!-- plugin menu responsivo -->
        <link rel="stylesheet" type="text/css" href="css/responsivo.css"> <!-- plugin menu responsivo -->

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> <!-- boostrap -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-social.css"> <!-- botao redes sociais boostrap -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/docs.css"> <!-- botao redes sociais boostrap -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> <!-- boostrap -->
        <script type="text/javascript" src="bootstrap/js/npm.js"></script> <!-- boostrap -->
        <script type="text/javascript" src="bootstrap/js/docs.js"></script> <!-- icones redes sociais boostrap -->

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> <!-- jquery -->
        <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> <!-- plugin menu responsivo -->
        <script type="text/javascript" src="js/jquery.mhead.js"></script> <!-- plugin menu responsivo -->
        <script type="text/javascript" src="js/modernizr.custom.js"></script> <!-- plugin modernizin -->
        <script type="text/javascript" src="js/wow.min.js"></script> <!-- efeitos de page Wow -->

        <script type="text/javascript">
            new WOW().init();

            function mostraMenu() {
                $("nav").toggle();
            }
            $(function () {

                //	create a menu
                $('#menu').mmenu();

                //	fire the plugin
                $('.mh-head').mhead();

                //	for demo only
                $('a[href^="#/"]').click(function () {
                    alert('Thank you for clicking, but that\'s a demo link.');
                    return;
                })
            });
            // funcao para rodar os botoes redes sociais
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-42119746-1']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body class="home-page">
        <!-- menu -->
        <div id="page">
            <div class="mh-head Sticky">
                <span class="mh-btns-left">
                    <a class="fa fa-bars" href="#menu"></a>
                </span>
                <span class="mh-text"><i class="fa fa-newspaper-o"></i> Notícias</span>
            </div>

            <!-- centro de conteudo -->
            <div class="container">
                <?php
                //print_r( $_GET );

                if (isset($_GET["p"])) {
                    //se o parametro p existe
                    $p = trim($_GET["p"]);

                    //separar por / produto/111
                    //pagina - produto
                    //codigo - 111
                    $p = explode("/", $p);

                    //print_r ( $p );
                    $pagina = $p[0]; //nome da página
                } else {

                    $pagina = "home";
                }

                $pagina = "pages/$pagina.php";

                if (file_exists($pagina))
                    include $pagina;
                else
                    include "pages/erro.php";
                ?>
            </div>
            <!-- final centro de conteudo -->
            <div class="menu-fixo-rodape">
                <ul>
                    <li>
                        <a href="home">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-folder"></i> Categoria
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-search"></i> Buscar
                        </a>
                    </li>
                </ul>
            </div>

            <nav id="menu">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><span>About us</span>
                        <ul>
                            <li><a href="#about/history">History</a></li>
                            <li><span>The team</span>
                                <ul>
                                    <li><a href="#about/team/management">Management</a></li>
                                    <li><a href="#about/team/sales">Sales</a></li>
                                    <li><a href="#about/team/development">Development</a></li>
                                </ul>
                            </li>
                            <li><a href="#about/address">Our address</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <main>

    </main>
    <!-- RODAPE -->

</body>
</html>
