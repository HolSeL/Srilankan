<?php
/* @var $this PillowsController */
/* @var $model Pillows

$this->breadcrumbs=array(
	'Pillows'=>array('index'),
	'Manage',
); */

$this->menu=array(
	//array('label'=>'List Pillows', 'url'=>array('index')),
	array('label'=>'Добавить подушку', 'url'=>array('create')),
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

<h1>Список подушек</h1>



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
		'text',
		'foto_link',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
