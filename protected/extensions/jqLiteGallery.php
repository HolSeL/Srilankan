<?php
class jqLiteGallery extends CComponent {
	
	  
	/**
	 * @brief retrieve the script file name
	 */
	protected static function scriptName($css=false) {
		return $css ? '/skins/default/stylelite.css' : 'lightgallery.js';
	}
	
	protected static function registerScript(){
		$cs = Yii::app()->clientScript;
		$cs->registerCoreScript('jquery');
		$assets = Yii::app()->extensionPath. DIRECTORY_SEPARATOR.'ligthgallery'.DIRECTORY_SEPARATOR;
		$aUrl = Yii::app()->getAssetManager()->publish($assets);
		$cs->registerScriptFile($aUrl.'/'.self::scriptName());
        $cs->registerScriptFile($aUrl.'/lang/ru_utf8.js');
		$cs->registerCssFile($aUrl .self::scriptName(true));
	}
	
	public static function addGallery($opts=array()){
		
		self::registerScript();
		
		//$opts['theme']=$theme;
		$js = ""; //Heard from community ad-image-wrapper should be larger as well
		/*
            animate (�� ��������� � true) � ���������/���������� ��������
            framesNumber (�� ��������� � 20) � ���������� ������ � ��������
            speed (�� ��������� � 30) � ������� ������� ����� ���������������� ������, ����
            resizeSync (�� ��������� � false) � ���� ���������� � true, �� ������� ���������� ���������� ������������ � ��-����������� � ��-���������
            enableZoom (�� ��������� � true) � ���������/���������� ���������������
            fadeImage (�� ��������� � true) � ������������ ������� ��������� ��� ����������� (����� ��������� ��� ����������� �������� �������)
            alias (�� ��������� � �lightgallery�) � ���������, ������������ � �������� �rel� (rel = �lightgallery�).
            showOverlay (�� ��������� � true) � ���������� �� �������
            overlayColor (�� ��������� � #000) � ���� �������
            overlayOpacity (�� ��������� � .85) � ������������ �������
            zoomStep (�� ��������� � 0.2) � ����������� ����������/���������� ������� ��� ���������������
            fullSize (�� ��������� � false) � ���������� �� ����������� � �������� ������� �� ��������� (�� ��������� ������ ����������� ��� ������ ������)
            minPadding (�� ��������� � 15) � ����������� ���������� ����� ����������� � ����� (�������)

        */		
		
		Yii::app()->clientScript->registerScript(__CLASS__,'lightgallery.init('.CJavaScript::encode($opts).');',CClientScript::POS_BEGIN );
	}
    
    protected function opt()
    {
        
    }
	
	
}
