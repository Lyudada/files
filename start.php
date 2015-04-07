<div class="main_photo">
<script type="text/javascript">
$('slider').waitForImages(function() {
    // All descendant images have loaded, now slide up.
    $(this).slideUp(); 
});
</script>
<script src="/js/mainTopSlider/slider.js"></script>
	     <div class="slider-box">
                     <div class="slider">
                         <img src="images/slider_top1.jpg" height="350px" alt="солнечное снаружи" /> 
                         <img src="images/slider_top2.gif" height="350px" alt="номер" /> 
                         <img src="images/slider_top3.gif" height="350px" alt="пляж" /> 
                         <img src="images/slider_top4.gif" height="350px" alt="летняя площадка ресторана" /> 
                         <img src="images/slider_top5.jpg" height="350px" alt="басейн" /> 
                     </div>
		     <ul class="bullets"></ul>
			  <div class="prev"></div>
                      <div class="next"></div>
              </div>
         </div>

	     </div>

		 <script type="text/javascript" src="/js/datepicker/datepicker.js"></script>
		 <div class="bron_line">
		     <form id="reserv" METHOD="POST" action="/bronirovanie">
			       <label style="color:#fff;position:relative; top:1px;">ЗАБРОНИРУЙТЕ НОМЕР</label>
				<a class='support-hover-two' tabindex="1">
				   <input type="text" value="<?echo isset($_POST['from2'])?$_POST['from2']:'2015-04-29';?>" name="from2" id="from2" style="margin:0 10px;"/>
				 </a>
				   <span class='tip-block'>
						<span class='tip-two'>
							База начинает работать с 29 апреля.
                         </span>
                   </span>
				   
				    <input type="text" value="<?echo isset($_POST['to2'])?$_POST['to2']: '2015-04-30';?>" name="to2" id="to2" style="margin:0 10px;" />

					<input type="submit" name="find_all"  value="ЗАБРОНИРОВАТЬ" class="button"/>
					 <a onclick="showLogIn()" class="button">Войти</a>
			 </form>
	     </div>
    </header>
   <section>
          <div class="container">
				<div class="icons">
					<img src="/images/icon/sw_pool.png" alt="басейн">
					<img src="/images/icon/food.png" alt="ресторан">
					<img src="/images/icon/cocktail.png" alt="бар" >
					<img src="/images/icon/dollar.png" alt="">
					<img src="/images/icon/computer.png" alt="wi-fi" >
					<img src="/images/icon/chair.png" alt="пляж">
				</div>
				
          
		<div id="about">
		 <div class="lineBefore"><hr></div>
		<h2>O HAC</h2>
		  <div class="lineAfter"><hr></div>
		  
          <div class="row">
		     <div class="col-md-6">
		 <!--//-->
		 <div  href="/video/62.flv" class="video" id="player62"></div>
                 <script type="text/javascript">
                      flowplayer("player62",  "http://solnechnaya.com/video/flowplay/flowplayer-3.2.2.swf",
                         {
                           clip: {
                           autoPlay: false, 
                           autoBuffering: true 
                         }
                    });
                  </script>
		      </div>
<?		  
	//текст с первой страницы
	$query = "SELECT * FROM `top_menu` where id='12'";
	$result = sql($query);
	$row = mysql_fetch_assoc($result);
	echo  ' <div class="col-md-6 ">'.parseStr($row['text'], true).'</div></div>';//row
?>
	    </div>
		
	<div style="clear:both;"></div><br/>
	
	<div id="rooms">
	     <div class="lineBefore"><hr></div>
         <h2>НАШИ НОМЕРА</h2>
		 <div class="lineAfter"><hr></div>
		 <br/>
		 <!-- Slideshow HTML -->
             <script src="/js/mainRoomSlider/slider.js"></script>
<?	     //вывод гостинничных номеров 
	$query = "SELECT  * FROM `product`";
	$result = sql($query);
		$indeksator=0;
		$count=mysql_num_rows($result);
	while($row = mysql_fetch_assoc($result))
	{
		  if($indeksator==0)
		   {
		       echo" <div id='slider-wrap'>
                                 <div id='slider'>
		                    <div class='slideRoom'>";//slide
	           }
		   else if($indeksator!=0 && $indeksator%3==0)
		   {
		          echo "</div>";//slide
				  echo "<div class='slideRoom'>";//slide
                   }
			 echo  "<div class='gallery'>
	             <a href='/catalog' class='photo'>
			      <div class='MainPhotoHref'>{$row['name']}<div class='line'></div></div>
			      <img src='/images/product/{$row['id']}_s.jpg' alt='отель' style='border: 1px solid #3859a8;'/> 
		        </a>
             </div>";
			  
              $indeksator=$indeksator+1;
			  
                   if($indeksator==$count )		
                       {
	                    echo "</div></div></div>";//slide,slidesContainer,slideshow
                       }			
	       
		?>
        <!--div class="gallery">
        	<a href="/product/<?//=$row['url']?>" class="photo">
			  <div class="MainPhotoHref"><?//=$row['name']?><div class="line"></div></div>
			  <img src="/images/product/<?//=$row['id']?>_s.jpg" alt="отель" />
		    </a>
        </div-->
        <?	
	}
	echo '<div style="clear:both;"></div>';
	//текст галереи
    $query = "SELECT * FROM `top_menu` where id='30'";
	$result = sql($query);
	$row = mysql_fetch_assoc($result);
	echo  parseStr($row['text'], true);
?>
     </div>
	 
    <div id="entertainment">
	     <div class="lineBefore"><hr></div>
	     <h2>РАЗВЛЕЧЕНИЯ</h2>
		 <div class="lineAfter"><hr></div>
		 <br/>
		 <div class="gallery">
		 <a href="/restaurant" class="photo mainGaleryHtef"><img src="/images/restaurant.jpg" alt="ресторан" /><br />РЕСТОРАН "СОЛАР"</a>
		 </div>
		 <div class="gallery">
		 <a href="/sea" class="photo mainGaleryHtef"><img src="/images/beach.jpg" alt="пляж" /><br />МОРЕ И ПЛЯЖ</a>
		 </div>
		 <div class="gallery">
		 <a href="/pool" class="photo mainGaleryHtef" ><img src="/images/pool.jpg" alt="басейн" /><br />БАСЕЙН</a>
		 </div>
	</div>
	<div style="clear:both;"></div>
	<div id="main_galery">
	     <div class="lineBefore"><hr></div>
	     <h2>ГАЛЕРЕЯ</h2>
		  <div class="lineAfter"><hr></div>
	</div></br>
	 </div> <!--container-->
	 
	 <div id="bottom_galery">
     <img src="/images/bg_foot.jpg" alt=""  height="550px" style="z-index:1">
	 <img src="/images/blue.jpg" alt=""  height="550px" style="z-index:2;  opacity: 0.58;-moz-opacity: 0.58;   filter: progid:DXImageTransform.Microsoft.Alpha(opacity=40); /* данная строчка работает в IE6, IE7, и IE8 */
    -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(opacity=40)'; /* данная строчка работает только в IE8 */">
	 
<!-- Slideshow HTML -->
<script src="/js/mainbottomSlider/slider.js"></script>

<!-- Slideshow HTML -->
    <?   $query2 = "SELECT * FROM photo_object where cat_id=795";
	    $result2 = sql($query2);
		$indeksator=0;
		$count=mysql_num_rows($result2);
	    while($row2 = mysql_fetch_assoc($result2))
	       {
		   if($indeksator==0)
		   {
		       echo" <div id='slideshow'>
                                 <div id='slidesContainer'>
		                    <div class='slide'>";//slide
	           }
		   else if($indeksator!=0 && $indeksator%6==0)
		   {
		          echo "</div>";//slide
				  echo "<div class='slide'>";//slide
                   }
			  
			  echo "<a class='example-image-link' href='/images/report/795/{$row2['name']}.jpg' data-lightbox='example-set'>
			  <img class='example-image' src='/images/report/795/{$row2['name']}.jpg'/>
			   </a>";
			  
              $indeksator=$indeksator+1;
			  
                   if($indeksator==$count )		
                       {
	                    echo "</div></div></div>";//slide,slidesContainer,slideshow
                       }			
	       }
		   ?>
	 </div>
	 
	<?

?>