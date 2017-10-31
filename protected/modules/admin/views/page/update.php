<?php
/* @var $this PageController */
/* @var $model Page 

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);*/

$this->menu=array(
	array('label'=>'Список статей', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1>Изменить статью: <b><?php echo $model->title; ?></b></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>