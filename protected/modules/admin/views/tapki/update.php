<?php
/* @var $this TapkiController */
/* @var $model Tapki 

$this->breadcrumbs=array(
	'Tapkis'=>array('index'),
	$model->id_tapki=>array('view','id'=>$model->id_tapki),
	'Update',
);*/

$this->menu=array(
	array('label'=>'Список обуви', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id_tapki)),
	//array('label'=>'Manage Tapki', 'url'=>array('admin')),
);
?>

<h1>Изменить:<b> <?php echo $model->nazvinie; ?></b></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>