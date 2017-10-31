<?php
/* @var $this GrammController */
/* @var $model Gramm 

$this->breadcrumbs=array(
	'Gramms'=>array('index'),
	$model->id_gramm=>array('view','id'=>$model->id_gramm),
	'Update',
);*/

$this->menu=array(
	array('label'=>'Список количества', 'url'=>array('index')),
	array('label'=>'Добавить', 'url'=>array('create')),
	array('label'=>'Просмотреть', 'url'=>array('view', 'id'=>$model->id_gramm)),
	//array('label'=>'Manage Gramm', 'url'=>array('admin')),
);
?>

<h1>Изменить количество: <?php echo $model->gramm; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>