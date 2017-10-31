<?php
/* @var $this BigController */
/* @var $model Big 

$this->breadcrumbs=array(
	'Bigs'=>array('index'),
	'Create',
);*/

$this->menu=array(
	array('label'=>'Список видов фасовки', 'url'=>array('index')),
	//array('label'=>'Manage Big', 'url'=>array('admin')),
);
?>

<h1>Добавить вид фасовки</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>