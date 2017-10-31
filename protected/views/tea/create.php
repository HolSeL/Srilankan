<?php
/* @var $this TeaController */
/* @var $model Tea */

$this->breadcrumbs=array(
	'Teas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tea', 'url'=>array('index')),
	array('label'=>'Manage Tea', 'url'=>array('admin')),
);
?>

<h1>Create Tea</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>