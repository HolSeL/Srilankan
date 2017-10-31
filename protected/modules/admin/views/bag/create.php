<?php
/* @var $this BagController */
/* @var $model Bag */

$this->breadcrumbs=array(
	'Bags'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Список упаковки', 'url'=>array('index')),
	//array('label'=>'Manage Bag', 'url'=>array('admin')),
);
?>

<h1>Добавление размера упаковки</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>