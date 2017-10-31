<?php
/* @var $this GrammController */
/* @var $model Gramm 

$this->breadcrumbs=array(
	'Gramms'=>array('index'),
	'Create',
);*/

$this->menu=array(
	array('label'=>'Список количества', 'url'=>array('index')),
	//array('label'=>'Manage Gramm', 'url'=>array('admin')),
);
?>

<h1>Добавить</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>