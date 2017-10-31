<?php
/* @var $this MarkaController */
/* @var $model Marka */

$this->breadcrumbs=array(
	'Markas'=>array('index'),
	$model->id_marka=>array('view','id'=>$model->id_marka),
	'Update',
);

$this->menu=array(
	array('label'=>'Список производителей', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id_marka)),
	//array('label'=>'Manage Marka', 'url'=>array('admin')),
);
?>

<h1>Изменить производителя: <b><?php echo $model->marka; ?></b></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>