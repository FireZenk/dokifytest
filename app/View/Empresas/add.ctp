<!-- File: /app/View/Empresas/add.ctp -->

<h1>Añadir empresa</h1>
<?php
echo $this->Form->create('Empresa');
echo $this->Form->input('nombre');
echo $this->Form->input('sector', array('rows' => '3'));
echo $this->Form->end('Guardar empresa');
?>