<?php
/* @var $this CoffeeController */
/* @var $data Coffee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_coffee')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_coffee), array('view', 'id'=>$data->id_coffee)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_marka')); ?>:</b>
	<?php echo CHtml::encode($data->id_marka); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_nazvanie')); ?>:</b>
	<?php echo CHtml::encode($data->id_nazvanie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bag')); ?>:</b>
	<?php echo CHtml::encode($data->id_bag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_link')); ?>:</b>
	<?php echo CHtml::encode($data->foto_link); ?>
	<br />


</div>