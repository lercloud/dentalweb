<h1>Login</h1>

<?php
echo $this->Form->create('Usuario'); 


echo $this->Form->input("user");
echo $this->Form->input("password");

echo $this->Form->end(__('Login')); 

?>
