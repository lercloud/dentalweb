<h1>Group Add</h1>

<?php
echo $this->Form->create('Group', array("role"=>"form")); 

?>
<div class="form-group">
<?php

echo $this->Form->input("name",array(
		"div"=>array("class"=>"col-md-7"),
		'class'=>"form-control",
		'placeholder'=>"Group Name"));

$options = array(
    'label' => 'Add Group',

        'class' => 'btn btn-success col-md-6',


);
echo $this->Form->end($options);
?>

</div>

<?php

?>
