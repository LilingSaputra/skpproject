<h1>Edit People</h1>
<?php
    echo $this->Form->create('People');
    echo $this->Form->input('username');
    echo $this->Form->input('fullname');
    echo $this->Form->input('division_id');
    echo $this->Form->input('job_position');
    echo $this->Form->input('email');
    echo $this->Form->input('phone');
    echo $this->Form->input('address');
    echo $this->Form->end('Save');
?>
    