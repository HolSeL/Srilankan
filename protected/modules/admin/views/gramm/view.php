<?php
/* @var $this GrammController */
/* @var $model Gramm 

$this->breadcrumbs=array(
	'Gramms'=>array('index'),
	$model->id_gramm,
);*/

$this->menu=array(
	array('label'=>'Список количества', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->id_gramm)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_gramm),'confirm'=>'Вы уверенны?')),
	//array('label'=>'Manage Gramm', 'url'=>array('admin')),
);
?>

<h1>Просмотр количества: <?php echo $model->gramm; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_gramm',
		'gramm',
	),
)); ?>
