<?php
/* @var $this TeaController */
/* @var $model Tea */

$this->breadcrumbs=array(
	'Teas'=>array('index'),
	$model->id_tea,
);

$this->menu=array(
	array('label'=>'List Tea', 'url'=>array('index')),
	array('label'=>'Create Tea', 'url'=>array('create')),
	array('label'=>'Update Tea', 'url'=>array('update', 'id'=>$model->id_tea)),
	array('label'=>'Delete Tea', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tea),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tea', 'url'=>array('admin')),
);
?>

<h1>View Tea #<?php echo $model->id_tea; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tea',
		'id_marka',
		'nazvanie',
		'id_bag',
		'text',
		'foto_link',
	),
)); ?>
