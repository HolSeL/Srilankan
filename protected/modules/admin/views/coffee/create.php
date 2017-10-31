<?php
/* @var $this CoffeeController */
/* @var $model Coffee */

$this->breadcrumbs=array(
	'Coffees'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Coffee', 'url'=>array('index')),
	array('label'=>'Manage Coffee', 'url'=>array('admin')),
);
?>

<h1>Create Coffee</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>