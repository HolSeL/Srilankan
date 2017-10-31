<?php
/* @var $this GrammController */
/* @var $model Gramm 

$this->breadcrumbs=array(
	'Gramms'=>array('index'),
	'Manage',
);*/

$this->menu=array(
	//array('label'=>'Список количества', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gramm-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список количества товара в одной единице</h1>


<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gramm-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_gramm',
		'gramm',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
