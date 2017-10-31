<?php
/* @var $this CoffeeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Coffees',
);

$this->menu=array(
	array('label'=>'Create Coffee', 'url'=>array('create')),
	array('label'=>'Manage Coffee', 'url'=>array('admin')),
);
?>

<h1>Coffees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
