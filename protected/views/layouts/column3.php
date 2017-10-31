<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-5 last">
        <?php
    	if ($this->menu){
        ?>
    
    	<div id="sidebar">
        	<?php
        		$this->beginWidget('zii.widgets.CPortlet', array(
        			'title'=>'<center>Продукция</center>',
        		));
        		$this->widget('zii.widgets.CMenu', array(
        			'items'=>$this->menu,
        			'htmlOptions'=>array('class'=>'operations'),
        		));
        		$this->endWidget();
        	?>
    	</div><!-- sidebar -->
        <?php
    	}
        ?>
        
        <div id="sidebar">
        	<?php
        		$this->beginWidget('zii.widgets.CPortlet', array(
        			'title'=>'<center>Статьи</center>',
        		));
        		$page=Page::model()->findAll(array('order'=>'rand() limit 5'));
                foreach ($page as $pages){        
                    echo "<p>".CHtml::link($pages->title, array('page/view','id'=>$pages->id))."</p>";
                }                
        		$this->endWidget();
        	?>    
    	</div><!-- sidebar -->
    
  
        <div id="sidebar"> 
        <center>
        	  
                <script type="text/javascript" src="css/todo.js"></script>
                <script type="text/javascript">
                    todo.onload(function(){
                        todo.gallery('gallery');
                    });
                </script> 
                       
            <?php
                
            
        		$this->beginWidget('zii.widgets.CPortlet', array(
        			'title'=>'<center>Важно!</center>',
        		));
        		echo "<h4><b>Cайт не используется в качестве Интернет-магазина, в том числе для торговли с помощью курьера, по образцам.</b></h4>";
               /*echo "<a href='".Yii::app()->request->baseUrl."/images/ser/Lanka_BON_1.jpg' rel='gallery[1]' title='Сертификат'>
            <img src='".Yii::app()->request->baseUrl."/images/ser/Lanka_BON_1.jpg' alt='' width='75' height='100'/></a>";
            
                echo "  "."<a href='".Yii::app()->request->baseUrl."/images/ser/Lanka_BON_2.jpg' rel='gallery[1]' title='Сертификат'>
            <img src='".Yii::app()->request->baseUrl."/images/ser/Lanka_BON_2.jpg' alt='' width='75' height='100'/></a>"."<br/>";
            
                echo "<a href='".Yii::app()->request->baseUrl."/images/ser/Lanka_Pillows_1.jpg' rel='gallery[1]' title='Сертификат'>
            <img src='".Yii::app()->request->baseUrl."/images/ser/Lanka_Pillows_1.jpg' alt='' width='75' height='100'/></a>";
            
                echo "  "."<a href='".Yii::app()->request->baseUrl."/images/ser/Lanka_Pillows_2.jpg' rel='gallery[1]' title='Сертификат'>
            <img src='".Yii::app()->request->baseUrl."/images/ser/Lanka_Pillows_2.jpg' alt='' width='75' height='100'/></a>"."<br/>";
            
                echo "<a href='".Yii::app()->request->baseUrl."/images/ser/Lanka_Tapki_1.jpg' rel='gallery[1]' title='Сертификат'>
            <img src='".Yii::app()->request->baseUrl."/images/ser/Lanka_Tapki_1.jpg' alt='' width='75' height='100'/></a>";
            
                echo "  "."<a href='".Yii::app()->request->baseUrl."/images/ser/Lanka_Tapki_2.jpg' rel='gallery[1]' title='Сертификат'>
            <img src='".Yii::app()->request->baseUrl."/images/ser/Lanka_Tapki_2.jpg' alt='' width='75' height='100'/></a>"."<br/>";*/
                
                $this->endWidget();
        	?>
        </center>
        
    	</div> <!--sidebar -->
</div>

<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>


<div class="span-7">
    <div id="sidebar">
        <style>

</style>
    	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'<center><span id="digitalclock" class="styling"></span></center>',
		));
        ?>
       
        <style>
            
            .styling{
            background-color:#808000;
            color:white;
            font: bold 16px MS Sans Serif;
            padding: 3px;
            border-radius: 20px;
            }
            
        </style>
        
        <script>
            //<!--
            
            var alternate=0
            var standardbrowser=!document.all&&!document.getElementById
            
            if (standardbrowser)
            document.write('<form name="tick"><input type="text" name="tock" size="11"></form>')
            
            function show(){
            if (!standardbrowser)
            var clockobj=document.getElementById? document.getElementById("digitalclock") : document.all.digitalclock
            var Digital=new Date()
            var hours=Digital.getHours()
            var minutes=Digital.getMinutes()
            var seconds=Digital.getSeconds()
            var dn="AM"
            
            
            if (hours==0) hours=12
            if (hours.toString().length==1)
            hours="0"+hours
            if (minutes<=9)
            minutes="0"+minutes
            if (seconds<=9)
            seconds="0"+seconds
            if (standardbrowser){
            if (alternate==0)
            document.tick.tock.value=hours+" "+minutes+" : "+seconds+" "+dn
            else
            document.tick.tock.value=hours+" "+minutes+" "+seconds+" "+dn
            }
            else{
            if (alternate==0)
            clockobj.innerHTML=hours+"<font color='white'> : </font>"+minutes+"<font color='white'> : </font>"+seconds+"<sup style='font-size:10px'>"+" "+dn+"</sup>"
            else
            clockobj.innerHTML=hours+"<font color='white'> : </font>"+minutes+"<font color='black'> : </font>"+seconds+"<sup style='font-size:10px'>"+" "+dn+"</sup>"
            }
            alternate=(alternate==0)? 1 : 0
            setTimeout("show()",1000)
            }
            window.onload=show
            
            //-->
        </script>
        
            <table width="80%" id="calendar3">
             <thead>
                <tr ><td></td><!--<td colspan="3"><select>
            <option value="0">Январь</option>
            <option value="1">Февраль</option>
            <option value="2">Март</option>
            <option value="3">Апрель</option>
            <option value="4">Май</option>
            <option value="5">Июнь</option>
            <option value="6">Июль</option>
            <option value="7">Август</option>
            <option value="8">Сентябрь</option>
            <option value="9">Октябрь</option>
            <option value="10">Ноябрь</option>
            <option value="11">Декабрь</option>
            </select></td><td colspan="3"><input type="number" value="" min="1900" max="2100" size="4"></td>--></tr>
                <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
              <tbody></table>
        <?php
            $this->endWidget();
        ?>
        
    </div><!-- sidebar -->

            <script>
            function Calendar3(id, year, month) {
            var Dlast = new Date(year,month+1,0).getDate(),
                D = new Date(year,month,Dlast),
                DNlast = D.getDay(),
                DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
                calendar = '<tr>',
                m = document.querySelector('#'+id+' option[value="' + D.getMonth() + '"]'),
                g = document.querySelector('#'+id+' input');
            if (DNfirst != 0) {
              for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
            }else{
              for(var  i = 0; i < 6; i++) calendar += '<td>';
            }
            for(var  i = 1; i <= Dlast; i++) {
              if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
                calendar += '<td class="today">' + i;
              }else{
                if (  // список официальных праздников
                    (i == 1 && D.getMonth() == 0 && ((D.getFullYear() > 1897 && D.getFullYear() < 1930) || D.getFullYear() > 1947)) || // Новый год
                   // (i == 2 && D.getMonth() == 0 && D.getFullYear() > 1992) || // Новый год
                   // ((i == 3 || i == 4 || i == 5 || i == 6 || i == 8) && D.getMonth() == 0 && D.getFullYear() > 2004) || // Новый год
                    (i == 7 && D.getMonth() == 0 && D.getFullYear() > 1990) || // Рождество Христово
                    (i == 23 && D.getMonth() == 1 && D.getFullYear() > 2001) || // День защитника Отечества
                    (i == 8 && D.getMonth() == 2 && D.getFullYear() > 1965) || // Международный женский день
                    (i == 1 && D.getMonth() == 4 && D.getFullYear() > 1917) || // Праздник Весны и Труда
                    (i == 9 && D.getMonth() == 4 && D.getFullYear() > 1964) || // День Победы
                    (i == 12 && D.getMonth() == 5 && D.getFullYear() > 1990) || // День России (декларации о государственном суверенитете Российской Федерации ознаменовала окончательный Распад СССР)
                    (i == 7 && D.getMonth() == 10 && (D.getFullYear() > 1926 && D.getFullYear() < 2005)) || // Октябрьская революция 1917 года
                    (i == 8 && D.getMonth() == 10 && (D.getFullYear() > 1926 && D.getFullYear() < 1992)) || // Октябрьская революция 1917 года
                    (i == 25 && D.getMonth() == 11 && D.getFullYear() > 0) // День народного единства, который заменил Октябрьскую революцию 1917 года
                   ) {
                  calendar += '<td class="holiday">' + i;
                }else{
                  calendar += '<td>' + i;
                }
              }
              if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
                calendar += '<tr>';
              }
            }
            for(var  i = DNlast; i < 7; i++) calendar += '<td>&nbsp;';
            document.querySelector('#'+id+' tbody').innerHTML = calendar;
            g.value = D.getFullYear();
            m.selected = true;
            if (document.querySelectorAll('#'+id+' tbody tr').length < 6) {
                document.querySelector('#'+id+' tbody').innerHTML += '<tr><td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;';
            }
            document.querySelector('#'+id+' option[value="' + new Date().getMonth() + '"]').style.color = 'rgb(220, 0, 0)'; // в выпадающем списке выделен текущий месяц
            }
            Calendar3("calendar3",new Date().getFullYear(),new Date().getMonth());
            document.querySelector('#calendar3').onchange = function Kalendar3() {
              Calendar3("calendar3",document.querySelector('#calendar3 input').value,parseFloat(document.querySelector('#calendar3 select').options[document.querySelector('#calendar3 select').selectedIndex].value));
            }
            	
            </script>

               
        

         <div id="sidebar">   
        	<?php
        	       $this->beginWidget('zii.widgets.CPortlet', array(
        			'title'=>'<center>Оптовые продажи</center>',
        		));
    		?>
                <!--<center><h3><b>Частное предприятие «Ланка Трэйд»</b></h3></center>-->
                <center><h3>Пн.-Пт. с 09.00 до 17.00</h3></center>
                <center><h3>тел.: 8-(017)-544-62-20</h3></center>
               <?php //<br />
                //<h4>
               // e-mail:<a href="mailto:pillowslatex@gmail.com">pillowslatex@gmail.com</a></h4>
                   
            
            
    		$this->endWidget();
            ?> 
    	
    		
    	</div><!-- --> 
          <!-- sidebar -->
          
        <div id="sidebar">   
        	<?php
        	       $this->beginWidget('zii.widgets.CPortlet', array(
        			'title'=>'<center>Эксклюзивные права!</center>',
        		));
               // $url= CHtml::image(Yii::app()->request->baseUrl."/images/sert/eks.jpg");
               // $st1=strrpos($url, "src=");
                //           $st2=strrpos($url, "jpg");                            
                //            $st=substr($url, $st1+5, $st2-$st1-2);
                // echo "<center>".CHtml::image(Yii::app()->request->baseUrl."/images/sert/eks.jpg", "/images/sert/eks_pravo0001.jpg", array('width'=>'100px','height'=>'150px'))."</center>";
                ?>
                <div class="gallery">     <?php
                    	 echo "<center>".CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/sert/eks.jpg", "Эксклюзивные права!",array('width'=>"110")),Yii::app()->request->baseUrl."/images/sert/eks.jpg", array('rel'=>'lightgallery'))."</center>";   
                        ?>
                    </div>  
              <?php //echo "<a href='#img'>Эксклюзивные права!</a>"; 
              ?>
                     
                       <?php    //вырезает путь к файлу картинки
                        	                                                       
                       ?>
        
       <!-- <div class="lightbox" <?php  echo "id='img".$id."'";?>
		 	<div class="white">
			 	        <?php	echo "<img alt='' src='".$st."' align='middle'/>"; ?>
                    </div>		
                    <a href="#close" class="close" title="Щелкните, чтобы закрыть"></a>     -->
		
            <?
            
    		$this->endWidget();
            ?>
    	
    		
    	</div><!---->
    	<div id="sidebar">   
        	<?php
        	       $this->beginWidget('zii.widgets.CPortlet', array(
        			'title'=>'<center>Уважаемые посетители!</center>',
        		));
    		?>
                <center><h3><b>Приносим свои извинения за временные неудобства. Сайт нашей компании находится на стадии разработки и внедрения. Свои предложения и замечания можете высылать на наш <a href="mailto:pillowslatex@gmail.com">e-mail</a>.</b></h3></center> 
               <?php //<br />
                //<h4>
               // e-mail:<a href="mailto:pillowslatex@gmail.com">pillowslatex@gmail.com</a></h4>*/
                   
            
            
    		$this->endWidget();
            ?>
    	
    		
    	</div><!-- sidebar -->
</div>

<?php $this->endContent(); ?>