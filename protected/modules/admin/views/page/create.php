<?php
/* @var $this PageController */
/* @var $model Page 

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Create',
);*/

$this->menu=array(
	array('label'=>'Список статей', 'url'=>array('index')),
	//array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1>Добавление статьи</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>