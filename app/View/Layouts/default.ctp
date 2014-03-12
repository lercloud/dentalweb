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
        echo $this->Html->css('/select2/select2');
        echo $this->Html->css('/font-awesome/css/font-awesome.min');
        echo $this->Html->css('/fullcalendar/fullcalendar/fullcalendar');
        echo $this->Html->css('/jquery-ui/themes/base/jquery-ui');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
        echo $this->fetch('bootstrap-datetimepicker.min');

        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('customjs');
        echo $this->Html->script('/select2/select2');
        echo $this->Html->script('/fullcalendar/fullcalendar/fullcalendar');
        echo $this->Html->script('/jquery-ui/ui/jquery-ui');
	?>

<script>
        $(document).ready(function() {

            $(".select2").select2();

            $("#searchByBranch").click(function(event) {
                /* Act on the event */
                $("#searchStatus").css({
                  'visibility': 'visible'
                });

                branchId = $("#searchByBranchIdField").val();

                $.ajax({
                    url: '<?php echo $this->Html->url(array("controller"=>"appointments", "action"=>"retriveByBranch")) ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {branchId: branchId},
                })
                .done(function(data) {

                    calendar.fullCalendar( 'removeEvents');
                    calendar.fullCalendar( 'addEventSource', data.appointments );

                    console.log("success");
                    $("#searchStatus").css({
                  'visibility': 'hidden'
                });

                })
                .fail(function() {
                    console.log("error");

                    $("#searchStatus").css({
                  'visibility': 'hidden'
                });
                })
                .always(function() {
                    console.log("complete");

                    $("#searchStatus").css({
                  'visibility': 'hidden'
                });
                });
                


            });

            $("#searchByDoctor").click(function(event) {
                /* Act on the event */
                $("#searchStatus").css({
                  'visibility': 'visible'
                });
                doctorId = $("#searchByDoctorIdField").val();

                $.ajax({
                    url: '<?php echo $this->Html->url(array("controller"=>"appointments", "action"=>"retriveByDoctor")) ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {doctorId: doctorId},
                })
                .done(function(data) {
                    calendar.fullCalendar( 'removeEvents');
                    calendar.fullCalendar( 'addEventSource', data.appointments );
                    console.log("success");
                    $("#searchStatus").css({
                  'visibility': 'hidden'
                });
                })
                .fail(function() {
                    console.log("error");
                    $("#searchStatus").css({
                  'visibility': 'hidden'
                });
                })
                .always(function() {
                    console.log("complete");
                    $("#searchStatus").css({
                  'visibility': 'hidden'
                });
                });
                


            });


            $("#deleteAppointment").click(function(event) {
                

                if (confirm("<?php echo __('Are you sure of delete this?'); ?>"))
                  {
                 


                $("#searchStatusAddAppointment").css({
                  'visibility': 'visible'
                });

               var appointmentId = $(this).attr("appointmentId");

                $.ajax({
                    url: '<?php echo $this->Html->url(array("controller"=>"appointments", "action"=>"deleteAppointment")) ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {appointmentId: appointmentId},
                })
                .done(function(data) {

                    if(data.id == 0){
                        alert(data.txt);
                    }else
                        if(data.id == 1){
                            calendar.fullCalendar( 'removeEvents',  appointmentId);

                            $("#searchStatusAddAppointment").css({
                  'visibility': 'hidden'
                });
                            $("#retriveAppointmentModal").modal("hide");
                        }


                    console.log("success");
                })
                .fail(function() {
                    console.log("error");
                    $("#searchStatusAddAppointment").css({
                  'visibility': 'hidden'
                });
                })
                .always(function() {
                    console.log("complete");
                    $("#searchStatusAddAppointment").css({
                  'visibility': 'hidden'
                });
                });
                
            }

            });



            $("#addAppoinment").click(function(event) {
                
                $("#searchStatusAddAppointment").css({
                  'visibility': 'visible'
                });

                pacienteId = $("#addAppoinmentPacienteIdField").val();
                doctorId = $("#addAppoinmentDoctorIdField").val();
                branchId = $("#addAppoinmentBranchIdField").val();
                appointmentTypeId = $("#addAppoinmentAppointmentTypeIdField").val();

                dateYear = $("#addAppoinmentDateFieldYear").val();
                dateMonth = $("#addAppoinmentDateFieldMonth").val();
                dateDay = $("#addAppoinmentDateFieldDay").val();

                beginTimeHour = $("#addAppoinmentBeginTimeFieldHour").val();
                beginTimeMinute = $("#addAppoinmentBeginTimeFieldMinute").val();

                endTimeHour = $("#addAppoinmentEndTimeFieldHour").val();
                endTimeMinute = $("#addAppoinmentEndTimeFieldMinute").val();


                $.ajax({
                    url: '<?php echo $this->Html->url(array("controller"=>"appointments", "action"=>"add")) ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {pacienteId : pacienteId, doctorId : doctorId,
                           branchId : branchId, appointmentTypeId : appointmentTypeId, dateYear : dateYear,  dateMonth : dateMonth, dateDay : dateDay, beginTimeHour : beginTimeHour, beginTimeMinute : beginTimeMinute,
                           endTimeHour : endTimeHour, endTimeMinute : endTimeMinute
                             },
                })
                .done(function(data) {

                     calendar.fullCalendar( 'renderEvent', data.appointment );

                     $("#searchStatusAddAppointment").css({
                  'visibility': 'hidden'
                });

                     $("#addAppointmentModal").modal("hide");


                    console.log("success");
                })
                .fail(function() {
                    console.log("error");

                     $("#searchStatusAddAppointment").css({
                  'visibility': 'hidden'
                });

                })
                .always(function() {
                    console.log("complete");

                     $("#searchStatusAddAppointment").css({
                  'visibility': 'hidden'
                });

                });
                


            });


            var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        //Update dates whe move or risize
       function eventAppointmentUpdate(event, jsEvent, ui, view){

                $("#searchStatus").css({
                  'visibility': 'visible'
                });

               this_date = $.fullCalendar.parseDate( event.start );
                //alert(datee.getDate());

                //********************
                this_month = this_date.getMonth()+1;

                this_year = this_date.getFullYear();

                if(this_month<10)
                    this_month = "0"+this_month;

                this_day = this_date.getDate();
                if(this_day<10)
                    this_day = "0"+this_day;

                //********************
                this_begin_time_hour = this_date.getHours();
                if(this_begin_time_hour<10)
                    this_begin_time_hour = "0"+this_begin_time_hour;

                 this_begin_time_minutes = this_date.getMinutes();
                if(this_begin_time_minutes<10)
                    this_begin_time_minutes = "0"+this_begin_time_minutes;


                //********************
                this_end_date = $.fullCalendar.parseDate( event.end );
                this_end_time_hour = this_end_date.getHours();
                if(this_end_time_hour<10)
                    this_end_time_hour = "0"+this_end_time_hour;

                 this_end_time_minutes = this_end_date.getMinutes();
                if(this_end_time_minutes<10)
                    this_end_time_minutes = "0"+this_end_time_minutes;


                $.ajax({
                    url: '<?php echo $this->Html->url(array("controller"=>"appointments", "action"=>"updateAppointmentDate")) ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {appointmentId : event.id, dateYear : this_year,  dateMonth : this_month, dateDay : this_day, beginTimeHour : this_begin_time_hour, beginTimeMinute : this_begin_time_minutes,
                           endTimeHour : this_end_time_hour, endTimeMinute : this_end_time_minutes
                             },
                })
                .done(function(data) {

                     //calendar.fullCalendar( 'renderEvent', data.appointment );

                     $("#searchStatus").css({
                  'visibility': 'hidden'
                });

                     $("#addAppointmentModal").modal("hide");


                    console.log("success");
                })
                .fail(function() {
                    console.log("error");

                     $("#searchStatus").css({
                  'visibility': 'hidden'
                });

                })
                .always(function() {
                    console.log("complete");

                     $("#searchStatus").css({
                  'visibility': 'hidden'
                });

                });


        }



        $('#addAppointmentModal').on('hidden.bs.modal', function (e) {
                calendar.fullCalendar('unselect');
            });
        
        var calendar = $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDay) {
                $("#addAppointmentModal").modal();

                this_date = $.fullCalendar.parseDate( start );
                //alert(datee.getDate());

                this_month = this_date.getMonth()+1;

                if(this_month<10)
                    this_month = "0"+this_month;

                this_day = this_date.getDate();
                if(this_day<10)
                    this_day = "0"+this_day;

                

                //set date for separated format form date
                $("#addAppoinmentDateFieldYear").val(this_date.getFullYear());
                $("#addAppoinmentDateFieldMonth").val(this_month);
                $("#addAppoinmentDateFieldDay").val(this_day);

                this_begin_time_hour = this_date.getHours();
                if(this_begin_time_hour<10)
                    this_begin_time_hour = "0"+this_begin_time_hour;

                 this_begin_time_minutes = this_date.getMinutes();
                if(this_begin_time_minutes<10)
                    this_begin_time_minutes = "0"+this_begin_time_minutes;

                //set date for separated format form begin time
                $("#addAppoinmentBeginTimeFieldHour").val(this_begin_time_hour);
                $("#addAppoinmentBeginTimeFieldMinute").val(this_begin_time_minutes);


                this_end_date = $.fullCalendar.parseDate( end );

                //set date for separated format form end time
                this_end_time_hour = this_end_date.getHours();
                if(this_end_time_hour<10)
                    this_end_time_hour = "0"+this_end_time_hour;

                 this_end_time_minutes = this_end_date.getMinutes();
                if(this_end_time_minutes<10)
                    this_end_time_minutes = "0"+this_end_time_minutes;

                //set date for separated format form begin time
                $("#addAppoinmentEndTimeFieldHour").val(this_end_time_hour);
                $("#addAppoinmentEndTimeFieldMinute").val(this_end_time_minutes);

               
            },
            eventClick: function(calEvent, jsEvent, view) {

                

                $.ajax({
                    url: '<?php echo $this->Html->url(array("controller"=>"appointments", "action"=>"retriveById")) ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {appointmentId: calEvent.id},
                })
                .done(function(data) {

                    $("#retriveAppointmentPacientField").html(data.appointmentRaw.Paciente.fullName);

                    $("#retriveAppointmentDoctorField").html(data.appointmentRaw.Doctor.nombre);

                    $("#retriveAppointmentTypeField").html(data.appointmentRaw.AppointmentType.name);

                    $("#retriveAppointmentBranchField").html(data.appointmentRaw.Branch.name);

                    $("#retriveAppointmentDateField").html(data.appointmentRaw.Appointment.date);

                    $("#retriveAppointmentBeginTimeField").html(data.appointmentRaw.Appointment.time);

                    $("#retriveAppointmentEndTimeField").html(data.appointmentRaw.Appointment.end_time);

                    $("#deleteAppointment").attr('appointmentId', data.appointmentRaw.Appointment.id);

                    $("#retriveAppointmentModal").modal("show");
                    console.log("success");
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
                


                //alert('Event: ' + calEvent.start);
                //alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
               // alert('View: ' + view.name);

                // change the border color just for fun
                //$(this).css('border-color', 'red');

    },
    eventDrop: function( event, jsEvent, ui, view ){

        eventAppointmentUpdate(event, jsEvent, ui, view);
    },
    eventResize: function( event, dayDelta, minuteDelta, revertFunc, jsEvent, ui, view ){
       // alert(view.name);
        if(view.name!="month")
        eventAppointmentUpdate(event, jsEvent, ui, view);
        else
            revertFunc();
    },
            editable: true,
            events: [
                {
                   
                }
            ]
        });



//Retrive appointments only if there is the
        if( $('#calendar').length )
        {
            $("#searchStatus").css({
                  'visibility': 'visible'
                });
            
            $.ajax({
                url: '<?php echo $this->Html->url(array("controller"=>"appointments", "action"=>"retriveAll"),true); ?>',
                type: 'GET',
                dataType: ' json',
               
            })
            .done(function(data) {

               calendar.fullCalendar( 'addEventSource', data.appointments );

               $("#searchStatus").css({
                  'visibility': 'hidden'
                });

                console.log("success");
            })
            .fail(function() {
                console.log("error");
                $("#searchStatus").css({
                  'visibility': 'hidden'
                });
            })
            .always(function() {
                console.log("complete");
                $("#searchStatus").css({
                  'visibility': 'hidden'
                });
            });
            


        }



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
                    <li><?php echo $this->Html->link("Citas", array("controller"=>"appointments", "action"=>"index")); ?></li>
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
        <?php 
    //if($this->Session->read("var1")!='') echo print_r($this->Session->read("var1"),true);
    //if($this->Session->read("var2")!='') echo print_r($this->Session->read("var2"),true);
    //if($this->Session->read("var3")!='') echo print_r($this->Session->read("var3"),true);
    
   // echo Configure::version();
     ?>
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