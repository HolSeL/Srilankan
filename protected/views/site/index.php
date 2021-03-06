<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<center>
<h1>Добро пожаловать на сайт нашей компании. <i><?php //echo CHtml::encode(Yii::app()->name); ?></i></h1>
<h2>Мы рады предложить различные высококачественные товары импортируемые из Шри Ланки.</h2>
</center>
<div style="text-align: justify;"><p style="text-indent: 40px"><span  style="text-indent: 10pt; font-size: 14pt; font-family: 'Times New Roman'">Официальное название Демократическая Социалистическая Республика Шри-Ланка - государство в Южной Азии, на одноимённом острове у юго-восточного побережья Индостана.
 Со времён португальского вторжения и до обретения независимости в европейских языках страна называлась Цейлон. Остров Шри-Ланка расположен в Южной Азии, немного восточнее 
 южной оконечности Индостана и омывается водами Индийского океана и Бенгальского залива. Отделён от Индостана Манарским заливом и Полкским проливом. Так называемый
  Адамов мост — отмель в Полкском проливе — когда-то полностью соединял Шри-Ланку с материком, но, по данным летописей, был разрушен землетрясением около 1481 г.
  Большую часть территории занимают прибрежные низменности. Горы расположены в центральной части страны; высочайшая вершина — г. Пидуруталагала (2524 м), 
  другая известная вершина — Шри Пада (известна также как Адамов пик). Чай является визитной карточкой Шри-Ланки. На острове производится около 10 % всего чая в мире,
   что составляет более 305 тысяч тонн в год. Сейчас страна занимает 3-е место в мире по производству чая, уступая Индии и КНР.
  </span></p></div>
  <center>
  <?php
	echo CHtml::image(Yii::app()->request->baseUrl."/images/ShriLanka.gif");
?>
</center>