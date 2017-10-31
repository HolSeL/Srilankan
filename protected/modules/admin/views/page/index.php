<?php
/* @var $this PageController */
/* @var $model Page 

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Manage',
);*/

$this->menu=array(
	//array('label'=>'Список Page', 'url'=>array('index')),
	array('label'=>'Добавить статью', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#page-grid').yiiGridView('update', {
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
	'id'=>'page-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'content',
		'created'=>array(
            'name'=> 'created',
            'value' => 'date("j.m.Y H:i", $data->created)',
            'filter' => false,
        ),
		'status'=>array(
            'name'=> 'status',
            'value' => '($data->status==1)?"Закрыта":"Видна"',
            'filter' => array(0=>"Видна",1=>"Закрыта"),
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
