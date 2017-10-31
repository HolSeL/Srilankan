<?php
/* @var $this UserController */
/* @var $model User 

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);*/

$this->menu=array(
	array('label'=>'Список пользователей', 'url'=>array('index')),
	array('label'=>'Просмотреть пользователя', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Изменить пользователя', 'url'=>array('update', 'id'=>$model->id)),
);
?>
<h1>Укажите пароль</h1><br />
<?php
	echo CHtml::form();
    echo CHtml::textField('password');
    echo CHtml::submitButton('Изменить');
    echo CHtml::endForm();
?>