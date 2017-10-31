<?php
/* @var $this TapkiController */
/* @var $data Tapki */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tapki')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tapki), array('view', 'id'=>$data->id_tapki)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_marka')); ?>:</b>
	<?php echo CHtml::encode($data->id_marka); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazvinie')); ?>:</b>
	<?php echo CHtml::encode($data->nazvinie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colour')); ?>:</b>
	<?php echo CHtml::encode($data->colour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_link')); ?>:</b>
	<?php echo CHtml::encode($data->foto_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />


</div>