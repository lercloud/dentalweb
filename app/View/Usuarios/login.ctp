<h1>Login</h1>

<?php
echo $this->Form->create('User', array("role"=>"form")); 

?>
<div class="form-group">
<?php

	echo $this->Form->input("username",array(
	"div"=>array("class"=>"col-md-7"),
	'class'=>"form-control",
	'placeholder'=>"User"));

	echo $this->Form->input("password",array(
	"div"=>array("class"=>"col-md-7", "style"=>"clear:both;"),
	'class'=>"form-control",
	'placeholder'=>"Password"));


$options = array(
    'label' => 'Login',

        'class' => 'btn btn-success col-md-6',


);
echo $this->Form->end($options);
?>

</div>