<?php
/* @var $this TapkiController */
/* @var $model Tapki 

$this->breadcrumbs=array(
	'Tapkis'=>array('index'),
	'Manage',
);*/

$this->menu=array(
	//array('label'=>'Список Tapki', 'url'=>array('index')),
	array('label'=>'Добавить модель', 'url'=>array('create')),
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

<h1>Список моделей обуви</h1>


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
		'id_marka'=>array(
            'name'=>'id_marka',
            'value'=>'$data->Marka->marka',
            'filter'=>Marka::all(),
        ),
		'nazvinie',
		'colour',
		'size',
        'text',
		'foto_link',
		
        /*
		
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
