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

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
        echo $this->fetch('bootstrap-datetimepicker.min');

        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('customjs');
	?>



</head>
<body>

           <header >
            <nav id="menu">
                <a href="#" class="nav-mobile" id="nav-mobile"></a>
                <ul id="navv">
                    <li><a href="/">Inicio</a></li>
                    <li><?php echo $this->Html->link("Pacientes", array("controller"=>"pacientes", "action"=>"index")); ?></li>
                    <li><?php echo $this->Html->link("Cobros", array("controller"=>"tratamientos", "action"=>"index")); ?></li></li>
                    <li><a href="#">Laboratorio</a></li>
                    <li><a href="#">Recetas</a></li>
                    <li><?php echo $this->Html->link("Doctoressss", array("controller"=>"doctors", "action"=>"index")); ?></li>
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