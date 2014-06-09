<div id="capa_camisetas">

<?php 
$idcombo=0;
foreach($query->result() as $value){

    
    ?>
    <div id="capa_detalle">
        <?php
        echo form_open('pages/detalleProducto/'.$value->idartacol);
        ?>
        <div id="imgCapa" class="altocompleto">
            <div id="enlacepop" title="<?=utf8_encode($value->descripcion)?>">
            <a class="fancyImg" href="<?php echo base_url()?>images/ropa_imagenes/<?=$value->logo?>" title="<?=utf8_encode($value->descripcion)?>">
                <img class="imgpeq" src="<?php echo base_url()?>images/ropa_imagenes/<?=$value->logo?>" alt="" />
            </a>
            </div>
        </div>

        <div id="datosCapa" class="altocompleto fltright">

            <p class="titulo bigFont"><?php echo $value->titulo;?></p>
            <p class="textodetalle medFont">Descripcion:</p>
            <p><?php echo $value->descripcion;?></p>
            <p class="boton">
                <input class="button" type="submit" name="accion" value="Detalle">
                
                
                <?php
                /*echo form_hidden('id_articulo', $value->id_articulo);
                echo form_hidden('id_color', $value->id_color);
                echo form_hidden('id_talla', $value->id_talla);
                echo form_hidden('titulo', $value->titulo);
                echo form_hidden('descripcion', $value->descripcion);
                echo form_hidden('precio', $value->precio);
                echo form_hidden('logo', $value->logo);
                echo form_hidden('stock', $value->stock);
                echo form_hidden('color', $value->color);
                echo form_hidden('talla', $value->talla);*/
                ?>
            </p>
        </div>
        <?php
        echo form_close();
        ?>
        <hr>
    </div>
    <?php 
}//foreach

?>
</div>