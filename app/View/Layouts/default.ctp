<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Dental Arcoiris - 
		<?php echo $title_for_layout; ?>
	</title>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

 <link href='http://fonts.googleapis.com/css?family=Open+Sans:600,700' rel='stylesheet' type='text/css'>

 <style type="text/css">
    body,td,th {
	font-family: "Open Sans", sans-serif;
}
body {
	background-image: url(../BG.jpg);
}


    </style>

<style type="text/css">
@media print
  {
    .index {
     float: left !important ;
     border: 0px !important;
     width: 95% !important;

    }

    #menu{
       display: none !important ;
    }

    #cerrarSession{
     display: none !important ;
    }

    .actions{
     display: none !important ;
    }

  }


</style>


	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		
        echo $this->Html->css('bootstrap-datetimepicker.min');
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('bootstrap-theme.min');
        echo $this->Html->css('style');
        echo $this->Html->css('style2');
        echo $this->Html->css('style3');
        echo $this->Html->css('acl');
        echo $this->Html->css('/font-awesome/css/font-awesome.min');
        echo $this->Html->css('/select2/select2');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
        echo $this->fetch('bootstrap-datetimepicker.min');

        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('customjs');
        echo $this->Html->script('/select2/select2');
	?>

<script>
        $(document).ready(function() {

            $(".select2").select2();



        });
    </script>

</head>
<body>

           <header >
            <nav id="menu">
                <a href="#" class="nav-mobile" id="nav-mobile"></a>
                <ul id="navv">
                    <li><a href="<?php echo $this->webroot; ?>">Inicio</a></li>
                    <li><?php echo $this->Html->link("Pacientes", array("controller"=>"pacientes", "action"=>"index")); ?></li>
                    <li><?php echo $this->Html->link("Cobros", array("controller"=>"tratamientos", "action"=>"index")); ?></li></li>
                    
                    <li><?php echo $this->Html->link("Recetas", array("controller"=>"prescriptions", "action"=>"index")); ?></li>
                    <li><?php echo $this->Html->link("Doctores", array("controller"=>"doctors", "action"=>"index")); ?></li>

                    <?php if($this->Session->read("Auth.User.group_id")==1){ ?>

                    <li><?php echo $this->Html->link("Usuarios", array("controller"=>"users", "action"=>"index")); ?></li>
                    <li><?php echo $this->Html->link("Sucursales", array("controller"=>"branches", "action"=>"index")); ?></li>

                    <?php } ?>

                </ul>
            </nav>

            <div id="cerrarSession"><?php echo $this->Html->link('Cerrar Session', array("controller"=>"users", "action"=>"logout")) ?>
            </div>
        </header>

	<div id="container">
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
<footer>
    
	<?php //echo $this->element('sql_dump'); ?>
    <pre style="clear:both;"><?php 
    if($this->Session->read("var1")!='') echo print_r($this->Session->read("var1"),true);
    if($this->Session->read("var2")!='') echo print_r($this->Session->read("var2"),true);
    //if($this->Session->read("var3")!='') echo print_r($this->Session->read("var3"),true);
    
    echo Configure::version();
     ?></pre>
    </footer>

<script src="
"></script>
<script>
    $(function() {

        var btn_movil = $('#nav-mobile'),
            menu = $('#menu').find('ul');
        // Al dar click agregar/quitar clases que permiten el despliegue del menú
        btn_movil.on('click', function (e) {
            e.preventDefault();

            var el = $(this);

            el.toggleClass('nav-active');
            menu.toggleClass('open-menu');
        })

    });
</script>
</body>
</html>