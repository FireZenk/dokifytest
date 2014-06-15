<!-- File: /app/View/Empresas/view.ctp -->

<h1><?php echo $empresa[0]['empresas']['nombre']?></h1>

<p><small>Sector: <?php echo $empresa[0]['empresas']['sector']?></small></p>

<h1>Es cliente de:</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Acción</th>
    </tr>

	<?php foreach ($clientes as $cliente): ?>
    <tr>
        <td>
            <?php echo $cliente['providers']['empresa_id'];?>
        </td>
        <td><?php echo $cliente['empresas']['nombre'];?></td>
        <td>
            <?php echo $this->Form->postLink(
                'Eliminar',
                array('action' => 'deleteRelation', $empresa[0]['empresas']['id'], $cliente['providers']['id']),
                array('confirm' => '¿Estás seguro?')
            )?>
        </td>
    </tr>
	<?php endforeach; ?>
</table>

<p><?php echo $this->Html->link('Añadir nuevo', array('action' => 'addAsClientOf', $empresa[0]['empresas']['id']));?></p>

<h1>Es proveedor de:</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Acción</th>
    </tr>

	<?php foreach ($proveedores as $proveedor): ?>
    <tr>
        <td>
            <?php echo $proveedor['providers']['cliente_id'];?>
        </td>
        <td><?php echo $proveedor['empresas']['nombre']; ?></td>
        <td>
            <?php echo $this->Form->postLink(
                'Eliminar',
                array('action' => 'deleteRelation', $empresa[0]['empresas']['id'], $proveedor['providers']['id']),
                array('confirm' => '¿Estás seguro?')
            )?>
        </td>
    </tr>
	<?php endforeach; ?>
</table>

<p><?php echo $this->Html->link('Añadir nuevo', array('action' => 'addAsProviderOf', $empresa[0]['empresas']['id']));?></p>