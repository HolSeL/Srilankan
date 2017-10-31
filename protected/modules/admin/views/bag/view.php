<?php
/* @var $this BagController */
/* @var $model Bag 

$this->breadcrumbs=array(
	'Bags'=>array('index'),
	$model->id_bag,
);*/

$this->menu=array(
	array('label'=>'Список размеров', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->id_bag)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_bag),'confirm'=>'Вы уверенны?')),
	//array('label'=>'Manage Bag', 'url'=>array('admin')),
);
?>

<h1>Просмотр размера упаковки: <b><?php echo $model->bag; ?></b></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_bag',
		'bag',
		'yroven'=>array(
            'name'=>'yroven',
            'value' => ($model->yroven==1)?"Чай":(($model->yroven==2)?"Кофе":(($model->yroven==3)?"Подушки":(($model->yroven==4)?"Обувь":"Не определен"))),
            'filter' => array(0=>" ",1=>"Чай", 2=>"Кофе",3=>"Подушки",4=>"Обувь"),
        ),
	),
)); ?>
