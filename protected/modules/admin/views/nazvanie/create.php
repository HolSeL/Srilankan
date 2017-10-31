<?php
/* @var $this NazvanieController */
/* @var $model Nazvanie */

$this->breadcrumbs=array(
	'Nazvanies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nazvanie', 'url'=>array('index')),
	array('label'=>'Manage Nazvanie', 'url'=>array('admin')),
);
?>

<h1>Create Nazvanie</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>