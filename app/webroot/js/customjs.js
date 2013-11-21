$(document).ready(function() {
	
$('#addPatologiaBtn').click(function(event) {
	
var patologiaString = $('#PacienteOtraPatologia').val();



$.ajax({
  url: '../../pacientes/addpatologia',
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



});