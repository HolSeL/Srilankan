<?php
/* @var $this NazvanieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nazvanies',
);

$this->menu=array(
	array('label'=>'Create Nazvanie', 'url'=>array('create')),
	array('label'=>'Manage Nazvanie', 'url'=>array('admin')),
);
?>

<h1>Nazvanies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
