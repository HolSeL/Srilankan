<?php
/* @var $this PillowsController */
/* @var $model Pillows

$this->breadcrumbs=array(
	'Pillows'=>array('index'),
	'Create',
); */

$this->menu=array(
	array('label'=>'Список подушек', 'url'=>array('index')),
	//array('label'=>'Manage Pillows', 'url'=>array('admin')),
);
?>

<h1>Добавить подушку</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>