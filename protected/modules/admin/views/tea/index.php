<?php
/* @var $this TeaController */
/* @var $model Tea 

$this->breadcrumbs=array(
	'Teas'=>array('index'),
	'Manage',
);*/

$this->menu=array(
	//array('label'=>'Список всех чаев', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
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

<h1>Список всех чаев</h1>

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
		'id_tea',
		'id_marka'=>array(
            'name'=>'id_marka',
            'value'=>'$data->Marka->marka',
            'filter'=>Marka::all(),
        ),
		'nazvanie',
		'id_bag'=>array(
            'name'=>'id_bag',
            'value'=>'$data->Bag->bag',
            'filter'=>Bag::all(),
        ),
        'id_big'=>array(
            'name'=>'id_big',
            'value'=>'$data->Big->big',
            'filter'=>Big::all(),
        ),
        'id_gramm'=>array(
            'name'=>'id_gramm',
            'value'=>'$data->Gramm->gramm',
            'filter'=>Gramm::all(),
        ),
		'text',
		'foto_link',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
