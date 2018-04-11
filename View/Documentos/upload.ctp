

<h1> Upload Documentos </h1>

<?php
    echo $this->Form->create(null, array('type' => 'file'));

    echo $this->Form->file('uploadFile', array('multiple'));
    echo $this->Form->button('Submit',['type' => 'submit']);
    echo $this->Form->end();

?>
