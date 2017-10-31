<?php
/* @var $this TeaController */
/* @var $model Tea */

$this->breadcrumbs=array(
	'Teas'=>array('index'),
	$model->id_tea=>array('view','id'=>$model->id_tea),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tea', 'url'=>array('index')),
	array('label'=>'Create Tea', 'url'=>array('create')),
	array('label'=>'View Tea', 'url'=>array('view', 'id'=>$model->id_tea)),
	array('label'=>'Manage Tea', 'url'=>array('admin')),
);
?>

<h1>Update Tea <?php echo $model->id_tea; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>