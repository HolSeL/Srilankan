<?php
$this->menu=array(
	//array('label'=>'Create Tea', 'url'=>array('create')),
	//array('label'=>'Manage Tea', 'url'=>array('admin')),
    array('label'=>'Чай', 'url'=>array('//tea/index', 'view'=>'about')),
    //array('label'=>'Кофе', 'url'=>array('//cofe/index', 'view'=>'about')),
    array('label'=>'Подушки', 'url'=>array('//pillows/index', 'view'=>'about')),
    array('label'=>'Обувь', 'url'=>array('//tapki/index', 'view'=>'about')),
);

?>
<center>
<!--<h1>В данном разделе, вы сможете просмотреть импортируемую нами продукцию. <i><?php //echo CHtml::encode(Yii::app()->name); ?></i></h1>-->
<h2><b>Для просмотра продукции выберите интересующий вас раздел.</b></h2></center>
<center>
<?php
      $my_image = CHtml::image(Yii::app()->request->baseUrl.'/images/cup1.jpg',
      'Цейлонский чай', array('height'=>'300px','title'=>'Цейлонский чай'));
      echo CHtml::link($my_image , array('//tea/index'));
      
?>
<?php
      $my_image = CHtml::image(Yii::app()->request->baseUrl.'/images/pillow1.jpg',
      'Подушки', array('width'=>'250px','height'=>'200px','title'=>'Подушки'));
      echo CHtml::link($my_image , array('//pillows/index'));
      
?>
<br />
<?php
      $my_image = CHtml::image(Yii::app()->request->baseUrl.'/images/slip.jpg',
      'Обувь', array('height'=>'250px','title'=>'Обувь'));
      echo CHtml::link($my_image , array('//tapki/index'));
      
?>
</center>
<div style="text-align: justify;"><span  style="text-indent: 10pt; font-size: 14pt; font-family: 'Times New Roman'">Размещенная на сайте информация предоставлена только для ознакомления с импортируемой продукцией.  
  </span></div>
        
 