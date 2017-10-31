<?php
/* @var $this TapkiController */
/* @var $model Tapki */

$this->breadcrumbs=array(
	'Tapkis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tapki', 'url'=>array('index')),
	array('label'=>'Manage Tapki', 'url'=>array('admin')),
);
?>

<h1>Create Tapki</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>