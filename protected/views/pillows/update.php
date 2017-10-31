<?php
/* @var $this PillowsController */
/* @var $model Pillows */

$this->breadcrumbs=array(
	'Pillows'=>array('index'),
	$model->id_pillows=>array('view','id'=>$model->id_pillows),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pillows', 'url'=>array('index')),
	array('label'=>'Create Pillows', 'url'=>array('create')),
	array('label'=>'View Pillows', 'url'=>array('view', 'id'=>$model->id_pillows)),
	array('label'=>'Manage Pillows', 'url'=>array('admin')),
);
?>

<h1>Update Pillows <?php echo $model->id_pillows; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>