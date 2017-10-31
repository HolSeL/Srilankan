<?php
/* @var $this PillowsController */
/* @var $model Pillows */

$this->breadcrumbs=array(
	'Pillows'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pillows', 'url'=>array('index')),
	array('label'=>'Manage Pillows', 'url'=>array('admin')),
);
?>

<h1>Create Pillows</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>