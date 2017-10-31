<?php
/* @var $this NazvanieController */
/* @var $model Nazvanie */

$this->breadcrumbs=array(
	'Nazvanies'=>array('index'),
	$model->id_nazvanie=>array('view','id'=>$model->id_nazvanie),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nazvanie', 'url'=>array('index')),
	array('label'=>'Create Nazvanie', 'url'=>array('create')),
	array('label'=>'View Nazvanie', 'url'=>array('view', 'id'=>$model->id_nazvanie)),
	array('label'=>'Manage Nazvanie', 'url'=>array('admin')),
);
?>

<h1>Update Nazvanie <?php echo $model->id_nazvanie; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>