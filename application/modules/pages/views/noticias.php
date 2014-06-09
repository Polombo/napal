<div id="contenido">
    
    <div class="contenido_izq">
        LENGUAJES DE PROGRAMACION<br>
        En divs dropdown o como quieras
            <dl>PHP</dl>
            <dl>JAVA</dl>
        CONTENT HERE CONTENT HERE CONTENT HERE 
        CONTENT HERE CONTENT HERE CONTENT HERE 
        CONTENT HERE CONTENT HERE CONTENT HERE 
        CONTENT HERE CONTENT HERE CONTENT HERE 
        CONTENT HERE CONTENT HERE CONTENT HERE 
        CONTENT HERE CONTENT HERE CONTENT HERE 
    </div>
    <div class="empresa">
        <div id="noticias">
        <h3 class="error">!!!!Esta pagina no esta disponible por el momento. <br>Disculpe las molestias.¡¡¡¡¡¡¡¡¡</h3>

        <?php
        $imagen = array(
                  'src' => base_url().'images/obra.jpg',
                  'alt' => 'Pagina en obras',
                  'class' => 'post_images',
                  'width' => '200',
                  'height' => '200',
                  'title' => 'Pagina en obras',
                  'rel' => 'lightbox',
        );

        echo img($imagen);    

        ?>
        </div>
    </div>
    
</div>


