<?php
/* @var $this TapkiController */
/* @var $model Tapki 

$this->breadcrumbs=array(
	'Tapkis'=>array('index'),
	'Create',
);*/

$this->menu=array(
	array('label'=>'Список обуви', 'url'=>array('index')),
	//array('label'=>'Manage Tapki', 'url'=>array('admin')),
);
?>

<h1>Добавление наименования обуви</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>