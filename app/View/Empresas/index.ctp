<!-- File: /app/View/Empresas/index.ctp -->

<?php 
    $this->Html->script('jquery.min', array('inline' => false));
    $this->Html->script('raphael-min', array('inline' => false));
    $this->Html->script('dracula_graffle', array('inline' => false)); 
    $this->Html->script('dracula_graph', array('inline' => false));
    $this->Html->script('empresas', array('inline' => false));
?>

<div id="canvas"></div>

<h1>Empresas</h1>
<p><?php echo $this->Html->link("Añadir empresa", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Sector</th>
        <th>Acción</th>
    </tr>

<?php foreach ($empresas as $empresa): ?>
    <tr>
        <td><?php echo $empresa['Empresa']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($empresa['Empresa']['nombre'], array('action' => 'view', $empresa['Empresa']['id']));?>
        </td>
        <td><?php echo $empresa['Empresa']['sector']; ?></td>
        <td>
            <?php echo $this->Html->link('Editar', array('action' => 'edit', $empresa['Empresa']['id']));?>

            <?php echo $this->Form->postLink(
                'Eliminar',
                array('action' => 'delete', $empresa['Empresa']['id']),
                array('confirm' => '¿Estás seguro?')
            )?>
        </td>
    </tr>
<?php endforeach; ?>

</table>