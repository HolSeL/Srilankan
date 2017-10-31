<?php
/* @var $this PageController */
/* @var $dataProvider CActiveDataProvider */

?>

<center><h1><b>Статьи</b></h1></center>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
?>
