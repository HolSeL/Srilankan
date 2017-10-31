<?php
/* @var $this BigController */
/* @var $model Big 

$this->breadcrumbs=array(
	'Bigs'=>array('index'),
	$model->id_big=>array('view','id'=>$model->id_big),
	'Update',
);*/

$this->menu=array(
	array('label'=>'Список видов фасовки', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id_big)),
	//array('label'=>'Manage Big', 'url'=>array('admin')),
);
?>

<h1>Изменить вид фасовки: <?php echo $model->big; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>