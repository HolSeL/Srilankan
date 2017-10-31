<?php
/* @var $this PillowsController */
/* @var $model Pillows 

$this->breadcrumbs=array(
	'Pillows'=>array('index'),
	$model->id_pillows=>array('view','id'=>$model->id_pillows),
	'Update',
);*/

$this->menu=array(
	array('label'=>'Список подушек', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id_pillows)),
	//array('label'=>'Manage Pillows', 'url'=>array('admin')),
);
?>

<h1>Изменить подушку: <b><?php echo $model->nazvanie; ?></b></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>