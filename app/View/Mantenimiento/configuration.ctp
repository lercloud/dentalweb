<div class="configuration index">
	<h2><?php echo __('Configuration'); ?></h2>
	
<div>
<h3><?php echo __("Update Change Type") ?></h3>
<?php

echo $this->Form->create("Configuration", array("url"=>array("controller"=>"mantenimiento", "action"=>"updateChageType")));

echo $this->Form->input("changeType", array("type"=>"text", "class"=>"form-control"));

echo $this->Form->end(array("label"=>"Actualizar", "class"=>"btn btn-success"));

?>
</div>

</div>
