<?php
/* @var $this NazvanieController */
/* @var $model Nazvanie */

$this->breadcrumbs=array(
	'Nazvanies'=>array('index'),
	$model->id_nazvanie,
);

$this->menu=array(
	array('label'=>'List Nazvanie', 'url'=>array('index')),
	array('label'=>'Create Nazvanie', 'url'=>array('create')),
	array('label'=>'Update Nazvanie', 'url'=>array('update', 'id'=>$model->id_nazvanie)),
	array('label'=>'Delete Nazvanie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_nazvanie),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nazvanie', 'url'=>array('admin')),
);
?>

<h1>View Nazvanie #<?php echo $model->id_nazvanie; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_nazvanie',
		'nazvanie',
		'yroven',
	),
)); ?>
