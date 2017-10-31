<?php
/* @var $this UserController */
/* @var $model User 

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);*/

$this->menu=array(
	array('label'=>'Создать пользователя', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Журнал пользователей</h1>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'password',
        'email',
		'created'=>array(
            'name'=> 'created',
            'value' => 'date("j.m.Y H:i", $date->created)',
            'filter' => false,
        ),
		'ban'=>array(
            'name'=> 'ban',
            'value' => '($data->ban==1)?"Бан":" "',
            'filter' => array(0=>"Нет",1=>"Да"),
        ),
		'role'=>array(
            'name'=> 'role',
            'value' => '($data->role==1)?"Moderator":(($data->role==2)?"Admin":"User")',
            'filter' => array(0=>"User",1=>"Moderator",2=>"Admin"),
        ),
		/*
		
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
