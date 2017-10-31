<?php
/* @var $this CoffeeController */
/* @var $model Coffee */

$this->breadcrumbs=array(
	'Coffees'=>array('index'),
	$model->id_coffee,
);

$this->menu=array(
	array('label'=>'List Coffee', 'url'=>array('index')),
	array('label'=>'Create Coffee', 'url'=>array('create')),
	array('label'=>'Update Coffee', 'url'=>array('update', 'id'=>$model->id_coffee)),
	array('label'=>'Delete Coffee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_coffee),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Coffee', 'url'=>array('admin')),
);
?>

<h1>View Coffee #<?php echo $model->id_coffee; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_coffee',
		'id_marka',
		'id_nazvanie',
		'id_bag',
		'text',
		'foto_link',
	),
)); ?>
