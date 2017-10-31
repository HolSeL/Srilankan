<?php
/* @var $this TeaController */
/* @var $model Tea 

$this->breadcrumbs=array(
	'Teas'=>array('index'),
	$model->id_tea,
);*/

$this->menu=array(
	array('label'=>'Список чаев', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->id_tea)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tea),'confirm'=>'Вы уверенны?')),
	//array('label'=>'Manage Tea', 'url'=>array('admin')),
);
?>

<h1>Просмотр чая: <b><?php echo $model->nazvanie; ?></b></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tea',
		'id_marka'=>array(
            'name'=>'id_marka',
            'value'=>$model->Marka->marka,            
        ),
		'nazvanie',
		'id_bag'=>array(
            'name'=>'id_bag',
            'value'=>$model->Bag->bag,            
        ),
        'id_big'=>array(
            'name'=>'id_big',
            'value'=>$model->Big->big,            
        ),
        'id_gramm'=>array(
            'name'=>'id_gramm',
            'value'=>$model->Gramm->gramm,            
        ),
		'text',
		'foto_link',
	),
)); ?>
