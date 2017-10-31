<?php
/* @var $this PageController */
/* @var $data Page */
?>

<div class="view_v">

	<center><b>
	<h1><?php echo CHtml::link($data->title, array(view, 'id'=>$data->id)); ?></h1></b></center>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('content')); ?></b>
	<?php // echo substr($data->content, 0, 500)."..."; ?>
     <?php 
        //$stroka = iconv('UTF-8', 'windows-1251', $data->content);
        $stroka = substr($data->content, 0, 600); 
        //$stroka = iconv('windows-1251', 'UTF-8', $stroka);
        //$str = preg_replace('/[-`~!#$%^&*()_=+\\\\|\\/\\[\\]{};:"\',<>?]+/', '', $stroka);
        echo $stroka.'...'; 
    ?>
   
	<?php echo CHtml::link('Читать далее...', array(view, 'id'=>$data->id)); ?><br />    

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode(date("j.m.Y H:i", $data->created)); ?>
	<br />
</div>
<hr>