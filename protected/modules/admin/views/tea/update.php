<?php
/* @var $this TeaController */
/* @var $model Tea 

$this->breadcrumbs=array(
	'Teas'=>array('index'),
	$model->id_tea=>array('view','id'=>$model->id_tea),
	'Update',
);*/

$this->menu=array(
	array('label'=>'Список всех чаев', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id_tea)),
	array('label'=>'Manage Tea', 'url'=>array('admin')),
);
?>

<h1>Изменение чая: <b><?php echo $model->nazvanie; ?></b></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>