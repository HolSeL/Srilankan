<?php
/* @var $this UserController */
/* @var $model User 

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);*/

$this->menu=array(
	array('label'=>'Список пользователей', 'url'=>array('index')),
	array('label'=>'Изменить пользователя', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить пользователя', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены, что хотите удалить?')),
	//array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Просмотр пользователя:<b> <?php echo $model->username; ?></b></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
		'created'=>array(
            'name'=> 'created',
            'value' => date("j.m.Y H:i", $date->created),
            'filter' => false,
        ),
		'ban'=>array(
            'name'=> 'ban',
            'value' => ($model->ban==1)?"Бан":" ",
            'filter' => array(0=>"Нет",1=>"Да"),
        ),
		'role'=>array(
            'name'=> 'role',
            'value' => ($model->role==1)?"Moderator":(($model->role==2)?"Admin":"User"),
            'filter' => array(0=>"User",1=>"Moderator",2=>"Admin"),
        ),
	),
)); ?>
