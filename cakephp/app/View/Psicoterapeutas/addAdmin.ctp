<?php
echo $this->Form->create('Psicoterapeuta');
echo $this->Form->input('nome');
echo $this->Form->input('sobrenome');
echo $this->Form->input('tipoPsicologo');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('email');
echo $this->Form->input('crp');
echo $this->Form->end('Save Psicoterapeuta');