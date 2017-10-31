<?php
/* @var $this BagController */
/* @var $model Bag 

$this->breadcrumbs=array(
	'Bags'=>array('index'),
	'Manage',
);*/

$this->menu=array(
	//array('label'=>'List Bag', 'url'=>array('index')),
	array('label'=>'Добавить размер', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bag-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список размеров упаковки</h1>


<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bag-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_bag',
		'bag',
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
