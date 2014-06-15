<!-- File: /app/View/Empresas/edit.ctp -->

<h1>Editar empresa</h1>
<?php
    echo $this->Form->create('Empresa', array('action' => 'edit'));
    echo $this->Form->input('nombre');
    echo $this->Form->input('sector', array('rows' => '3'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar empresa');