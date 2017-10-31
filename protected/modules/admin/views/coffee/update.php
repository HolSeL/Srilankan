<?php
/* @var $this CoffeeController */
/* @var $model Coffee */

$this->breadcrumbs=array(
	'Coffees'=>array('index'),
	$model->id_coffee=>array('view','id'=>$model->id_coffee),
	'Update',
);

$this->menu=array(
	array('label'=>'List Coffee', 'url'=>array('index')),
	array('label'=>'Create Coffee', 'url'=>array('create')),
	array('label'=>'View Coffee', 'url'=>array('view', 'id'=>$model->id_coffee)),
	array('label'=>'Manage Coffee', 'url'=>array('admin')),
);
?>

<h1>Update Coffee <?php echo $model->id_coffee; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>