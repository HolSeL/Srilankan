<?php
/* @var $this BagController */
/* @var $model Bag */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_bag'); ?>
		<?php echo $form->textField($model,'id_bag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bag'); ?>
		<?php echo $form->textField($model,'bag',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yroven'); ?>
		<?php echo $form->textField($model,'yroven'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->