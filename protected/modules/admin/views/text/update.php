<?php
/* @var $this TextController */
/* @var $model Text */

$this->breadcrumbs=array(
	'Texts'=>array('index'),
	$model->title=>array('view','id'=>$model->id_text),
	'Update',
);

$this->menu=array(
	array('label'=>'List Text', 'url'=>array('index')),
	array('label'=>'Create Text', 'url'=>array('create')),
	array('label'=>'View Text', 'url'=>array('view', 'id'=>$model->id_text)),
	array('label'=>'Manage Text', 'url'=>array('admin')),
);
?>

<h1>Update Text <?php echo $model->id_text; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>