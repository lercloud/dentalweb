$(document).ready(function() {
	
$('#addPatologiaBtn').click(function(event) {
	
var patologiaString = $('#PacienteOtraPatologia').val();



$.ajax({
  url: '../pacientes/addpatologia',
  type: 'POST',
  dataType: 'html',
  data: {descripcion: patologiaString},
  complete: function(xhr, textStatus) {
    //called when complete
  },
  success: function(data, textStatus, xhr) {



if(data!="error")
{
var patologiaHtml ='<div class="col-md-3"><input checked="true" type="checkbox" name="data[Patologia][Patologia][]" value="'+data+'" id="PatologiaPatologia'+data+'"><label for="PatologiaPatologia'+data+'">'+patologiaString+'</label></div>';
$('#AntecedentesPatologicos .select').append(patologiaHtml);
$('#PacienteOtraPatologia').val('');
}
else
{
	alert("Error al agregar Patologia");
}
  },
  error: function(xhr, textStatus, errorThrown) {
    //called when there is an error
  }
});


});



$('#PacienteOtraPatologia').keypress(function(event) {
	/* Act on the event */
	if (event.keyCode == 13 ) {
        event.preventDefault();

        $('#addPatologiaBtn').click();
    }
});


$(".deleteHistoria").click(function(event) {
 $(this).parent().fadeOut('slow/400/fast', function() {
   
  $(this).remove();

 });
});

var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
  };
})();

$("body").on("keyup","input#buscarPaciente",function(ev){
                  //ev.preventDefault();
           $("#searchStatus").css({
                  'visibility': 'visible'
                });
           delay(function(){
                  
              $.ajax({
                url: 'pacientes/buscarajax/',
                type: 'POST',
                dataType: 'html',
                data: {datasearch: $("input#buscarPaciente").val()},
              })
              .done(function(html_response) {
                
                $("#pacienteSearchResult").html(html_response);
                $("#searchStatus").css({
                  'visibility': 'hidden'
                });
              })
              .fail(function() {
                console.log("error");
              })
              .always(function() {
                console.log("complete");
                
              });
              

             }, 400 );

                              //return false;
                  });



$("body").on("keyup","input#buscarPacienteTratamiento",function(ev){
                  //ev.preventDefault();
           $("#searchStatus").css({
                  'visibility': 'visible'
                });
           delay(function(){
                  
              $.ajax({
                url: 'tratamientos/buscarajax/',
                type: 'POST',
                dataType: 'html',
                data: {datasearch: $("input#buscarPacienteTratamiento").val()},
              })
              .done(function(html_response) {
                
                $("#tratamientoSearchResult").html(html_response);
                $("#searchStatus").css({
                  'visibility': 'hidden'
                });
              })
              .fail(function() {
                console.log("error");
              })
              .always(function() {
                console.log("complete");
                
              });
              

             }, 400 );

                              //return false;
                  });



});