<?php
/* @var $this TextController */
/* @var $model Text */

$this->breadcrumbs=array(
	'Texts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Text', 'url'=>array('index')),
	array('label'=>'Manage Text', 'url'=>array('admin')),
);
?>

<h1>Create Text</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>