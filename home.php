<?php include('includes/header.php'); ?>
<section class="hero">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<iframe id="player_1" src="http://player.vimeo.com/video/39683393?api=1&player_id=player_1" width="500" height="281" frameborder="0" wekitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<div class="caption">
					<p>Example caption for the video, its really long.  Really Really really really really really really really really really really really really really really really really really really really really really really really really really really really really really really really really really long.</p>
				</div>
			</li>
			<li>
				<img src="http://placehold.it/3000x1000" alt="placeholder image">
				<div class="caption">
					<p>Example caption for the image, its really long.  Really Really really really really really really really really really really really really really really really really really really really really really really really really really really really really really really really really really long.</p>
				</div>
			</li>
		</ul>
	</div>
	<script type="text/javascript">
		$(function() {
		 
		  // Vimeo API nonsense
		  var player = document.getElementById('player_1');
		  $f(player).addEvent('ready', ready);
		 
		  function addEvent(element, eventName, callback) {
		    if (element.addEventListener) {
		      element.addEventListener(eventName, callback, false)
		    } else {
		      element.attachEvent(eventName, callback, false);
		    }
		  }

		  function ready(player_id) {
		    var froogaloop = $f(player_id);
		    froogaloop.addEvent('play', function(data) {
		      $('.flexslider').flexslider("pause");
		    });
		    froogaloop.addEvent('pause', function(data) {
		      $('.flexslider').flexslider("play");
		    });
		  }

		  $(".flexslider").fitVids().flexslider({
		      animation: "slide",
		      useCSS: false,
		      animationLoop: false,
		      smoothHeight: true,
		      before: function(slider){
		        $f(player).api('pause');
		      }
		  });
		});
	</script>
</section>
<?php include('includes/footer.php'); ?>