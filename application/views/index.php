<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1"><![endif]-->
        <title><?php echo $page_title; ?> — <?php echo $site_name; ?></title>
        
        <meta name="author" content="@plumon, @pascaleglm, @juanpablob" />
        <meta name="robots" content="nofollow, noindex" />
        
        <!-- styles -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
        <!-- /styles -->
        
        <!-- scripts -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
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
        <div class="container">
            <h1>Red de Alimentos</h1>
            
            <p>Mira! Acá van cayendo tus letras.</p>
            
            <h2 class="tweet" style="margin-bottom: 4px;">Hola!</h2>
            <small class="diff">Sobran <span>00</span> caracteres</small>
        </div>
    </body>
</html>