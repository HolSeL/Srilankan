<?php
/* @var $this BagController */
/* @var $model Bag 

$this->breadcrumbs=array(
	'Bags'=>array('index'),
	$model->id_bag=>array('view','id'=>$model->id_bag),
	'Update',
);*/

$this->menu=array(
	array('label'=>'Список размеров', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id_bag)),
	//array('label'=>'Manage Bag', 'url'=>array('admin')),
);
?>

<h1>Изменить размер: <b><?php echo $model->bag; ?></b></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>