<?php
/* @var $this TapkiController */
/* @var $model Tapki */

$this->breadcrumbs=array(
	'Tapkis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Список Tapki', 'url'=>array('index')),
	array('label'=>'Создать Tapki', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tapki-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tapkis</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tapki-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tapki',
		'id_marka',
		'nazvinie',
		'colour',
		'text',
		'foto_link',
		/*
		'size',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
