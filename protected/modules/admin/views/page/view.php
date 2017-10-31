<?php
/* @var $this PageController */
/* @var $model Page 

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->title,
);*/

$this->menu=array(
	array('label'=>'Список статей', 'url'=>array('index')),
	array('label'=>'Добавление', 'url'=>array('create')),
	array('label'=>'Изменение', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удаление', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены?')),
	//array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1>Просмотр статьи: <b><?php echo $model->title; ?></b></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'created'=>array(
            'name'=> 'created',
            'value' => date("j.m.Y H:i", $model->created),
            'filter' => false,
        ),
		'status',
	),
)); ?>
