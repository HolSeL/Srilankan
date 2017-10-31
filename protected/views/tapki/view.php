<?php
/* @var $this TapkiController */
/* @var $model Tapki */

$this->breadcrumbs=array(
	'Tapkis'=>array('index'),
	$model->id_tapki,
);

$this->menu=array(
	array('label'=>'List Tapki', 'url'=>array('index')),
	array('label'=>'Create Tapki', 'url'=>array('create')),
	array('label'=>'Update Tapki', 'url'=>array('update', 'id'=>$model->id_tapki)),
	array('label'=>'Delete Tapki', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tapki),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tapki', 'url'=>array('admin')),
);
?>

<h1>View Tapki #<?php echo $model->id_tapki; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tapki',
		'id_marka',
		'nazvinie',
		'colour',
		'text',
		'foto_link',
		'size',
	),
)); ?>
