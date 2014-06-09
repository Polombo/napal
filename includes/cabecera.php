<head>
    <?php 
    
    $meta = array(
            array('name' => 'robots', 'content' => 'no-cache'),
            array('name' => 'description', 'content' => 'Software Tecnologies'),
            array('name' => 'keywords', 'content' => 'Developers, Programadores'),
            array('name' => 'robots', 'content' => 'no-cache'),
            array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
        );

    echo meta($meta);
    
    $link_tipografias = array(
          'href' => base_url().'css/tipografias.css',
          'rel' => 'stylesheet',
          'type' => 'text/css',
          'media' => 'screen'
    );
    
    echo link_tag($link_tipografias);
    
    $link_style_menu = array(
          'href' => base_url().'css/styles_menu.css',
          'rel' => 'stylesheet',
          'type' => 'text/css'
    );
    
    $link_estilo = array(
          'href' => base_url().'css/estilo.css',
          'rel' => 'stylesheet',
          'type' => 'text/css'
    );
    
        
    $link_fancy_buttons = array(
          'href' => base_url().'includes/fancyBox/source/helpers/jquery.fancybox-buttons.css',
          'rel' => 'stylesheet',
          'type' => 'text/css',
          'media' => 'screen'
    );
    
    $link_fancy_thumbs = array(
          'href' => base_url().'includes/fancyBox/source/helpers/jquery.fancybox-thumbs.css',
          'rel' => 'stylesheet',
          'type' => 'text/css',
          'media' => 'screen'
    );
    
    $link_fancybox = array(
          'href' => base_url().'includes/fancyBox/source/jquery.fancybox.css',
          'rel' => 'stylesheet',
          'type' => 'text/css'
    );

    echo link_tag($link_estilo);
    echo link_tag($link_style_menu);
    echo link_tag($link_fancy_buttons);
    echo link_tag($link_fancy_thumbs);
    echo link_tag($link_fancybox);
    
    // <link href="http://site.com/css/printer.css" rel="stylesheet" type="text/css" media="print" />
    ?>
    <title>Desarrollo de Aplicaciones</title>

    <!-- Hojas de estilo --> 
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- <link rel="stylesheet" href="../administrador/cssAdmin/admincss.css" type="text/css" />-->
    <!-- <link type="text/css" href="css/smoothness/jquery-ui-1.8.23.custom.css" rel="Stylesheet"> -->  
    
    <!-- Add mousewheel plugin (this is optional) -->
    <!-- Add fancyBox --><!-- Jquery -->
    <script src="<?=base_url()?>js/jquery-1.11.0.js"></script>
    <script type="text/javascript" src="<?=base_url()?>includes/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="<?=base_url()?>includes/fancyBox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="<?=base_url()?>includes/fancyBox/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="<?=base_url()?>includes/fancyBox/source/helpers/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="<?=base_url()?>includes/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script type="text/javascript" src="<?=base_url()?>includes/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>
    
    

    <!-- Optionally add helpers - button, thumbnail and/or media -->

    
    <script>

            if(typeof jQuery!=='undefined'){
            console.log('jQuery Loaded');
            }	
            else{
            console.log('not loaded yet');
            }
    </script>
    <script src="<?=base_url()?>js/funciones.js"></script>


    <!-- 
    <script type="text/javascript" src="js/mootools.js"></script>
    <script type="text/javascript" src="js/moocheck.js"></script> -->


</head>