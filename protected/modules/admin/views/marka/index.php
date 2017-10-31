<?php
/* @var $this MarkaController */
/* @var $model Marka 

$this->breadcrumbs=array(
	'Markas'=>array('index'),
	'Manage',
);*/

$this->menu=array(
	//array('label'=>'List Marka', 'url'=>array('index')),
	array('label'=>'Добавить производителя', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#marka-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список производителей</h1>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'marka-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_marka',
		'marka',
		'yroven'=>array(
            'name'=>'yroven',
            'value' => '($data->yroven==1)?"Чай":(($data->yroven==2)?"Кофе":(($data->yroven==3)?"Подушки":(($data->yroven==4)?"Обувь":"Не определен")))',
            'filter' => array(1=>"Чай", 2=>"Кофе",3=>"Подушки",4=>"Обувь"),
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
