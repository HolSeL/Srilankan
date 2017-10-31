<?php
/* @var $this TeaController */
/* @var $model Tea 

$this->breadcrumbs=array(
	'Teas'=>array('index'),
	'Create',
);*/

$this->menu=array(
	array('label'=>'Список всех чаев', 'url'=>array('index')),
	//array('label'=>'Manage Tea', 'url'=>array('admin')),
);
?>

<h1>Добавить чай</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>