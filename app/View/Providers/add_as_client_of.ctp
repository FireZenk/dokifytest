<!-- File: /app/View/Providers/addAsClientOf.ctp -->

<h1>Añadir proveedor para la empresa con id: <?php echo $this->params['pass'][0];?></h1>
<?php
echo $this->Form->create('Provider');
echo $this->Form->input('cliente_id', array('type' => 'hidden', 'value' => $this->params['pass'][0]));
echo $this->Form->input('empresa_id', array(
    										'options' => $empresas,
    										'empty' => '(elija uno)'));
echo $this->Form->end('Guardar proveedor');
?>