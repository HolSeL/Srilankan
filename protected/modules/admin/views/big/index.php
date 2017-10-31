<?php
/* @var $this BigController */
/* @var $model Big 

$this->breadcrumbs=array(
	'Bigs'=>array('index'),
	'Manage',
);*/

$this->menu=array(
	//array('label'=>'Список Big', 'url'=>array('index')),
	array('label'=>'Добавить вид фасовки', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#big-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список видов фасовки</h1>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'big-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_big',
		'big',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
