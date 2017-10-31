<?php
/* @var $this TapkiController */
/* @var $model Tapki */

$this->breadcrumbs=array(
	'Tapkis'=>array('index'),
	$model->id_tapki=>array('view','id'=>$model->id_tapki),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tapki', 'url'=>array('index')),
	array('label'=>'Create Tapki', 'url'=>array('create')),
	array('label'=>'View Tapki', 'url'=>array('view', 'id'=>$model->id_tapki)),
	array('label'=>'Manage Tapki', 'url'=>array('admin')),
);
?>

<h1>Update Tapki <?php echo $model->id_tapki; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>