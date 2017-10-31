<?php
/* @var $this MarkaController */
/* @var $model Marka

$this->breadcrumbs=array(
	'Markas'=>array('index'),
	'Create',
); */

$this->menu=array(
	array('label'=>'Список производителей', 'url'=>array('index')),
	//array('label'=>'Manage Marka', 'url'=>array('admin')),
);
?>

<h1>Добавление производителя</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>