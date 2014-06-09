
<div id="cssmenu">
    <ul>
        <li>
            <?php
            echo anchor('pages','Home');
            ?>
        </li>
        <li class="has-sub ">
            <?php
            echo anchor('pages/whatdo','Qué hacemos');
            ?>                
        </li>
        <li class="has-sub ">
            <?php
            echo anchor('pages/howwork','Cómo trabajamos');
            ?>                
        </li>
        <li class="has-sub "><a href="#">Servicios</a>
            <ul>
                <li class="has-sub"><a href="#">Desarrollos Web</a></li>
                <li class="has-sub"><a href="#">Desarrollos Java</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <?php
            echo anchor('pages/noticias','Noticias');
            ?>
        </li>
        <li class="has-sub ">
            <?php
            echo anchor('pages/aboutus','Sobre Nosotros');
            ?>                
        </li>
        <li class="has-sub">
            <?php
            echo anchor('pages/contact','Contact Us');
            ?>
        </li>

    </ul>
</div>
