<?php
/* @var $this TeaController */
/* @var $model Tea */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tea'); ?>
		<?php echo $form->textField($model,'id_tea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_marka'); ?>
		<?php echo $form->textField($model,'id_marka'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nazvanie'); ?>
		<?php echo $form->textField($model,'nazvanie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_bag'); ?>
		<?php echo $form->textField($model,'id_bag'); ?>
	</div>
    <div class="row">
		<?php echo $form->label($model,'id_big'); ?>
		<?php echo $form->textField($model,'id_big'); ?>
	</div>
    <div class="row">
		<?php echo $form->label($model,'id_gramm'); ?>
		<?php echo $form->textField($model,'id_gramm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text'); ?>
		<?php echo $form->textField($model,'text',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto_link'); ?>
		<?php echo $form->textField($model,'foto_link',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->