<?php
/* @var $this TextController */
/* @var $model Text 

$this->breadcrumbs=array(
	'Texts'=>array('index'),
	'Manage',
);*/

$this->menu=array(
	//array('label'=>'List Text', 'url'=>array('index')),
	array('label'=>'Создать статью', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#text-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список статей</h1>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'text-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_text',
		'title',
		'content',
		'created',
		'status',
		'category_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
