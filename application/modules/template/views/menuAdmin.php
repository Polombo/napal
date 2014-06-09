<div id="contenedor_menu">
    <div id="cabeceraAdmin" class="txt_centrado">
            ELIJA UNA OPCION:
    </div>
    <div id="opcionesAdmin">

        <div id="subopcion" class="txt_centrado">
            <?php
            echo anchor('admin_dash/manage_art','Articulos');
            ?>
        </div>

        <div id="subopcion" class="txt_centrado">
            <?php
            echo anchor('admin_dash/manage_videos','Videos');
            ?>
        </div>

        <div id="subopcion" class="txt_centrado">
            <?php
            echo anchor('admin_dash/manage_fotos','Fotos');
            ?>
        </div>

        <div id="subopcion" class="txt_centrado">
            <?php
            echo anchor('admin_dash/manage_eventos','Eventos');
            ?>
        </div>

         <div id="subopcion" class="txt_centrado">
            
            <?php
            echo anchor('admin_dash/manage_noticias','Noticias');
            ?>
        </div>

        <div id="subopcion" class="txt_centrado">
            <?php
            echo anchor('admin_dash/cerrar_sesion','Cerrar Session');
            ?>
        </div>
    </div>			

</div><!-- div contenedormenu -->