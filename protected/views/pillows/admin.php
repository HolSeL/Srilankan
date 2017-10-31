<?php
/* @var $this PillowsController */
/* @var $model Pillows */

$this->breadcrumbs=array(
	'Pillows'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Список Pillows', 'url'=>array('index')),
	array('label'=>'Создать Pillows', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pillows-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pillows</h1>

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
	'id'=>'pillows-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_pillows',
		'id_marka',
		'nazvanie',
		'id_bag',
		'text',
		'foto_link',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
