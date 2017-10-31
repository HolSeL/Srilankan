<?php
/* @var $this GrammController */
/* @var $model Gramm */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_gramm'); ?>
		<?php echo $form->textField($model,'id_gramm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gramm'); ?>
		<?php echo $form->textField($model,'gramm'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Поиск'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->