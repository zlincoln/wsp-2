<?php include('includes/header.php'); ?>
<section class="hero">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<iframe src="//player.vimeo.com/video/75268264?portrait=0" width="525" height="310" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<div class="caption">
					<p>We are getting ready to unveil our newest ski, the Stinger. Pre-Order dropping October 4th&#8230; Edit: Sam Rogers</p>
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
			// prep videos for api calls
		 	// @todo: make sure to get ie8 indexof polyfill before release
			$('.flexslider iframe').each(function(index){
				var video = $(this),
						source = video.attr('src');
				if(source.indexOf('vimeo') != -1){
					var cutoffPoint,
							updatedSource;
					cutoffPoint = source.indexOf('?');
					updatedSource = source.substring(0, (cutoffPoint != -1) ? cutoffPoint : source.length);
					video.attr({
						id: 'player_'+index,
						src: updatedSource+'?api=1&amp;player_id=player_'+index
					});
					var player = document.getElementById('player_'+index);
					$f(player).addEvent('ready', ready);
				}
			});

		  // Vimeo API nonsense
		  // var player = document.getElementById('player_1');
		  // $f(player).addEvent('ready', ready);
		 
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
		      	var slideIndex = slider.currentSlide,
		      			video2Pause = $('.flexslider li.flex-active-slide iframe').attr('id'),
		      			player = document.getElementById(video2Pause);
		      	if(player){
		      		$f(player).api('pause');
		      	}
		      }
		  });
		});
	</script>
</section>
<?php include('includes/footer.php'); ?>