<?php
/* @var $this TeaController */
/* @var $model Tea 

$this->breadcrumbs=array(
	'Teas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tea', 'url'=>array('index')),
	array('label'=>'Create Tea', 'url'=>array('create')),
);
*/
$this->menu=array(
	//array('label'=>'Create Tea', 'url'=>array('create')),
	//array('label'=>'Manage Tea', 'url'=>array('admin')),
    array('label'=>'Чай', 'url'=>array('//tea/index', 'view'=>'about')),
    array('label'=>'Кофе', 'url'=>array('/site/cofe', 'view'=>'about')),
    array('label'=>'Подушки', 'url'=>array('/site/pillows', 'view'=>'about')),
    array('label'=>'Обувь', 'url'=>array('/site/slippers', 'view'=>'about')),
);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tea-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Teas</h1>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tea-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'foto_link',
        'id_tea',
		'id_marka',
		'nazvanie',
		'id_bag',
		'text',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
