<?php
/* @var $this TapkiController */
/* @var $model Tapki 

$this->breadcrumbs=array(
	'Tapkis'=>array('index'),
	$model->id_tapki,
);*/

$this->menu=array(
	array('label'=>'Список обуви', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->id_tapki)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tapki),'confirm'=>'Вы уверенны в своем выборе?')),
	//array('label'=>'Manage Tapki', 'url'=>array('admin')),
);
?>

<h1>Просмотр наименования: <b><?php echo $model->nazvinie; ?></b></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tapki',
		'id_marka'=>array(
            'name'=>'id_marka',
            'value'=>$model->Marka->marka,
        ),
		'nazvinie',
		'colour',
		'size',
        'text',
		'foto_link',
		
	),
)); ?>
