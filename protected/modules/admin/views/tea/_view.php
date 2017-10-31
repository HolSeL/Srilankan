<?php
/* @var $this TeaController */
/* @var $data Tea */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tea')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tea), array('view', 'id'=>$data->id_tea)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_marka')); ?>:</b>
	<?php echo CHtml::encode($data->id_marka); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazvanie')); ?>:</b>
	<?php echo CHtml::encode($data->nazvanie); ?>
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