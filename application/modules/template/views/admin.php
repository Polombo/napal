<html>
    <?php 
    include_once("includes/cabeceraAdmin.php");
    ?>
    <body>
        
        <h2 style="text-align:center;">ADMIN----->PARTE PRIVADA</h2>
            
        <?php
        $this->load->view('menuAdmin');

        ?>
        <div id='principal_Admin'>
            <?php
            if (!isset($view_file)) {
                $view_file = "";
            }


            if (!isset($module)) {
                $module = $this->uri->segment(1);
            }


            if (($module!="") && ($view_file!="")) {
                $path = $module."/".$view_file;
                $this->load->view($path);
            }
            ?>
        </div>
    </body>
</html>
