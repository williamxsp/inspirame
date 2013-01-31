<?php
echo $this->Session->flash("auth");
echo $this->Form->create("User", array('class'=>'span4 offset4'));
echo $this->Form->input("login");
echo $this->Form->input("password");
echo $this->Form->end(array('class'=>'btn btn-success', 'label' => 'Login'));