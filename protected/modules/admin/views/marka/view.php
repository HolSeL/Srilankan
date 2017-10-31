<?php
/* @var $this MarkaController */
/* @var $model Marka */

$this->breadcrumbs=array(
	'Markas'=>array('index'),
	$model->id_marka,
);

$this->menu=array(
	array('label'=>'Список производителей', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->id_marka)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_marka),'confirm'=>'Вы уверенны?')),
	//array('label'=>'Manage Marka', 'url'=>array('admin')),
);
?>

<h1>Просмотр производителя: <b><?php echo $model->marka; ?></b></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_marka',
		'marka',
		'yroven'=>array(
            'name'=>'yroven',
            'value' => ($model->yroven==1)?"Чай":(($model->yroven==2)?"Кофе":(($model->yroven==3)?"Подушки":(($model->yroven==4)?"Обувь":"Не определен"))),
            'filter' => array(0=>" ",1=>"Чай", 2=>"Кофе",3=>"Подушки",4=>"Обувь"),
        ),
	),
)); ?>
