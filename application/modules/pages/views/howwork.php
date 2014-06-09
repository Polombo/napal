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
        <div class="titulo">
            CÓMO TRABAJAMOS
        </div>
        <div id='contacto'>
            <br>
            <span class="classCabecera">Consultanos tus dudas o danos tus sugerencias.</span>
            <?php 
            echo form_open('pages/submit');
            ?>
                <p class="">
                    Para cualquier duda que tengan con el centro estaremos encantados de atenderles lo antes posible.
                    Pueden dejar un mensaje en nuestro correo y lo reponderemos con la mayor brevedad posible.
                </p>	

                <div class="email">
                        Email*:<input type="text" name="from" value="">
                    <br><br><br><br>
                    <input type="submit" name="accion" value="Aceptar">
                    <input type="button" name="accion" value="Cancelar">
                    <input type="hidden" name="accion" value="mandarMail">
                </div>
                <div class="texarea">
                        Observaciones*:
                        <textarea name="mensaje" cols="35" rows="6" value=""></textarea>
                </div>
            </form>
            <?php
            echo form_close();
            ?>
        </div>
        
    </div>
    
</div>


