<?php
/* @var $this TapkiController */
/* @var $dataProvider CActiveDataProvider 

$this->breadcrumbs=array(
	'Tapkis',
);

$this->menu=array(
	array('label'=>'Create Tapki', 'url'=>array('create')),
	array('label'=>'Manage Tapki', 'url'=>array('admin')),
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

<center><h1><b>Обувь</b></h1></center>
<table>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>