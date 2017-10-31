<?php
/* @var $this BigController */
/* @var $model Big

$this->breadcrumbs=array(
	'Bigs'=>array('index'),
	$model->id_big,
); */

$this->menu=array(
	array('label'=>'Список видов фасовки', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->id_big)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_big),'confirm'=>'Вы уверенны?')),
	//array('label'=>'Manage Big', 'url'=>array('admin')),
);
?>

<h1>Просмотр вида фасовки: <?php echo $model->big; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_big',
		'big',
	),
)); ?>
