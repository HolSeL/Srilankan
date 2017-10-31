<?php
/* @var $this PillowsController */
/* @var $model Pillows 

$this->breadcrumbs=array(
	'Pillows'=>array('index'),
	$model->id_pillows,
);*/

$this->menu=array(
	array('label'=>'Список подушек', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->id_pillows)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pillows),'confirm'=>'Вы уверенны?')),
	//array('label'=>'Manage Pillows', 'url'=>array('admin')),
);
?>

<h1>Просмотр подушки: <b><?php echo $model->nazvanie; ?></b></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pillows',
		'id_marka'=>array(
            'name'=>'id_marka',
            'value'=>$model->Marka->marka,            
        ),
		'nazvanie',
		'id_bag'=>array(
            'name'=>'id_bag',
            'value'=>$model->Bag->bag,            
        ),
		'text',
		'foto_link',
	),
)); ?>
