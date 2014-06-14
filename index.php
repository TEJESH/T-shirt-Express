<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
<?php

print date('F jS, Y');
include_once($_SERVER['DOCUMENT_ROOT'].'/project/header.inc');
?>




<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="/project/noob/_web.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/project/noob/style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/project/noob/mootools-1.2-core.js"></script>
	<script type="text/javascript" src="/project/noob/_class.noobSlide.packed.js"></script>
<link rel="stylesheet" type="text/css" href="/project/css/style.css"/>
<link rel="stylesheet" type="text/css" href="styles.css">
  <!--link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=ABeeZee:400,400italic"-->
  <!--script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script-->
  <script type="text/javascript" src="formslider.js"></script>
  
  
<style type="text/css" src="/project/css/style.css"> </style>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="noob/_web.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="noob/style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="noob/mootools-1.2-core.js"></script>
	<script type="text/javascript" src="noob/_class.noobSlide.packed.js"></script>
<link rel="stylesheet" type="text/css" href="/project/css/style.css"/>
<link rel="stylesheet" type="text/css" href="/project/customer/account/login/styles.css"/>  
  
  
<P>Welcome!!!!!!</P>
</br>

<Script type="text/javascript">
window.addEvent('domready',function(){
	var startItem = 3; //or   0   or any
		var thumbs_mask7 = $('thumbs_mask7').setStyle('left',(startItem*60-568)+'px').set('opacity',0.8);
		var fxOptions7 = {property:'left',duration:1000, transition:Fx.Transitions.Back.easeOut, wait:false}
		var thumbsFx = new Fx.Tween(thumbs_mask7,fxOptions7);
		var nS7 = new noobSlide({
			box: $('box7'),
			items: [0,1,2,3,4,5,6,7],
			handles: $$('#thumbs_handles7 span'),
			fxOptions: fxOptions7,
			onWalk: function(currentItem){
				thumbsFx.start(currentItem*60-568);
			},
			startItem: startItem
		});
		//walk to first with fx
		nS7.walk(0);
	});
</script>
<?
for($i=1; $i<100;$i++)
{
echo " &nbsp;";
}
?>
<div class="sample">
	<div class="mask3">
		<div id="box7">
			<a href="shirts/shirt1.php"><span><img src="noob/img1.jpg" alt="Photo" /></span></a>
			<a href="shirts/shirt2.php"><span><img src="noob/img2.jpg" alt="Photo" /></span></a>
			<a href="shirts/shirt3.php"><span><img src="noob/img3.jpg" alt="Photo" /></span></a>
			<a href="shirts/shirt4.php"><span><img src="noob/img4.jpg" alt="Photo" /></span></a>
			<a href="shirts/shirt5.php"><span><img src="noob/img5.jpg" alt="Photo" /></span></a>
			<a href="shirts/shirt6.php"><span><img src="noob/img6.jpg" alt="Photo" /></span></a>
			<a href="shirts/shirt7.php"><span><img src="noob/img7.jpg" alt="Photo" /></span></a>
			<a href="shirts/shirt8.php"><span><img src="noob/img8.jpg" alt="Photo" /></span></a>
			
		</div>
	</div>

	<div id="thumbs7">
		<div class="thumbs">
		
			<div><img src="noob/img1.jpg" alt="Photo Thumb" /></div>
			<div><img src="noob/img2.jpg" alt="Photo Thumb" /></div>
			<div><img src="noob/img3.jpg" alt="Photo Thumb" /></div>
			<div><img src="noob/img4.jpg" alt="Photo Thumb" /></div>
			<div><img src="noob/img5.jpg" alt="Photo Thumb" /></div>
			<div><img src="noob/img6.jpg" alt="Photo Thumb" /></div>
			<div><img src="noob/img7.jpg" alt="Photo Thumb" /></div>
			<div><img src="noob/img8.jpg" alt="Photo Thumb" /></div>
			
		</div>

		<div id="thumbs_mask7"></div>

		<p id="thumbs_handles7">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			
		</p>
	</div>
</div>
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/project/footer.inc');
?>

