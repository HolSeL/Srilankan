<?php
/* @var $this PillowsController */
/* @var $model Pillows */

$this->breadcrumbs=array(
	'Pillows'=>array('index'),
	$model->id_pillows,
);

$this->menu=array(
	array('label'=>'List Pillows', 'url'=>array('index')),
	array('label'=>'Create Pillows', 'url'=>array('create')),
	array('label'=>'Update Pillows', 'url'=>array('update', 'id'=>$model->id_pillows)),
	array('label'=>'Delete Pillows', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pillows),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pillows', 'url'=>array('admin')),
);
?>

<h1>View Pillows #<?php echo $model->id_pillows; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pillows',
		'id_marka',
		'nazvanie',
		'id_bag',
		'text',
		'foto_link',
	),
)); ?>
