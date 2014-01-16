<?php 
	echo $this->form->create('Task');
?>
<fieldset>
<legend>Add New Task</legend>
<?php
echo $this->form->input('title');
echo $this->form->input('done');
?>
</fieldset>
<?php echo $this->form->end('Add Task');
 echo $this->html->link('List All Tasks', array('action'=>'index')); ?>
