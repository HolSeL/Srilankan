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
    array('label'=>'Изменить пароль', 'url'=>array('password', 'id'=>$model->id)),
);
?>

<h1>Изменить пользователя: <b> <?php echo $model->username; ?></b></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>