<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1"><![endif]-->
        <title><?php echo $page_title; ?> — <?php echo $site_name; ?></title>
        
        <meta name="author" content="@plumon, @pascaleglm, @juanpablob" />
        <meta name="robots" content="nofollow, noindex" />
        
        <!-- styles -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic" />
        <!-- /styles -->
        
        <!-- scripts -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
        <!--<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.8.22.custom.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.imagesloaded.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/video.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bigvideo.js"></script>-->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
        <script>
            $(document).ready(function() {
                app.init({
                    baseUrl: '/redalimentos/letras/'
                });
            });
        </script>
        
        <!--[if lt IE 9 ]>
            <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
        <![endif]-->
        <!-- /scripts -->
    </head>
    
    <body>
        <div id="site-wrap">
            <!-- call -->
            <div class="call clearfix">
                <div class="pull-left">
                    <h1>Mira! Ahí van cayendo tus letras</h1>
                    
                    <p>Aquí estamos reuniendo todos los caracteres que nos has enviado. Estos fideitos servirán para alimentar a cientos de niños y ancianos.</p>
                    
                    <small>Sigue enviando los caracteres que no uses. <strong>Cuando juntemos 100 mil</strong>, te mostraremos cómo tu aporte se transforma.</small>
                </div>
                
                <div class="pull-right">
                    <small>Ya llevamos</small>
                    <strong class="counter">0000</strong>
                    <small>caracteres</small>
                </div>
                
                <span class="arrow"></span>
            </div>
            <!-- call -->
            
            <!-- etc -->
            <div class="etc clearfix">
                <!--<div class="container">-->
                    <!-- twitter -->
                    <div class="widget twitter">
                        <hgroup class="clearfix">
                            <h3>#nadasobra</h3>
                            
                            <div class="extra">
                                <a href="https://twitter.com/redalimentos" class="twitter-follow-button" data-show-count="false" data-lang="es">Seguir a @redalimentos</a>
                            </div>
                        </hgroup>
                        
                        <div class="inside">
                            <p class="tweet">Hay veces que nos enojamos porque nuestra comida se demora... Video- Finalista en Cannes: http://youtu.be/lZI0N9Oz6V8</p>
                            <p class="author"><img src="https://si0.twimg.com/profile_images/1184923584/Sin_t_tulo.png" alt="" /> <span class="name">Red de Alimentos</span> <span>—</span> <a href="http://twitter.com/redalimentos" class="username" target="_blank">@LaCircunspecta</a></p>
                        </div>
                    </div>
                    <!-- /twitter -->
                    
                    <!-- facebook -->
                    <div class="widget facebook">
                        <hgroup class="clearfix">
                            <h3>facebook</h3>
                            
                            <div class="extra">
                                <div class="fb-like" data-href="http://www.facebook.com/redalimentos.cl" data-width="200" data-layout="button_count" data-show-faces="false" data-send="false"></div>
                            </div>
                        </hgroup>
                        
                        <div class="inside">
                            <img src="<?php echo base_url(); ?>assets/img/faces.png" alt="" />
                        </div>
                    </div>
                    <!-- /facebook -->
                    
                    <!-- corporate -->
                    <div class="widget corporate">
                        <hgroup class="clearfix">
                            <h3>Conoce Red de Alimentos</h3>
                            
                            <div class="extra">
                                
                            </div>
                        </hgroup>
                        
                        <div class="inside">
                            <p>Necesitamos que más y más personas conozcan el trabajo de Red de Alimentos. Por eso te pedimos que le des "me gusta" a nuestra labor. Así seremos más los que queremos erradicar el hambre en nuestro país, y podremos convencer a más empresas para que nos aporten con alimentos. Gracias por tu ayuda!</p>
                            
                            <a href="#" class="btn btn-small trigg-video">¿A quienes ayudamos?</a> <a href="http://web.redalimentos.cl/nuestros-socios/colaboradores/" class="btn btn-small">Colaboradores</a>
                        </div>
                    </div>
                    <!-- /corporate -->
                <!--</div>-->
            </div>
            <!-- /etc -->
        </div>
        
        <!-- scripts -->
        <div id="fb-root"></div>
        
        <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
            
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=195281680520368";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- /scripts -->
    </body>
</html>