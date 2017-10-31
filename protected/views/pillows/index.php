<?php
/* @var $this PillowsController */
/* @var $dataProvider CActiveDataProvider 

$this->breadcrumbs=array(
	'Pillows',
);*/

$this->menu=array(
	//array('label'=>'Create Tea', 'url'=>array('create')),
	//array('label'=>'Manage Tea', 'url'=>array('admin')),
    array('label'=>'Чай', 'url'=>array('//tea/index', 'view'=>'about')),
    //array('label'=>'Кофе', 'url'=>array('//cofe/index', 'view'=>'about')),
    array('label'=>'Подушки', 'url'=>array('//pillows/index', 'view'=>'about')),
    array('label'=>'Обувь', 'url'=>array('//tapki/index', 'view'=>'about')),
);
?>

<center><h1><b>Подушки</b></h1>
<h2><b>100% натуральный латекс</b></h2>
</center>

<table>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>