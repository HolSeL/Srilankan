<?php
/* @var $this NazvanieController */
/* @var $data Nazvanie */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_nazvanie')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_nazvanie), array('view', 'id'=>$data->id_nazvanie)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazvanie')); ?>:</b>
	<?php echo CHtml::encode($data->nazvanie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yroven')); ?>:</b>
	<?php echo CHtml::encode($data->yroven); ?>
	<br />


</div>