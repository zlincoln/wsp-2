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
				<iframe src="//player.vimeo.com/video/74658496?portrait=0" width="520" height="300" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<div class="caption">
					<p>We brought Cole along on an urban trip halfway through this past season and from then on we knew he was a perfect addition to the crew. Were happy to announce that he is the newest addition to the team as we approach the 2013/14 season! He was able to spend a month out in [&hellip;]</p>
				</div>
			</li>
			<li>
				<iframe src="http://player.vimeo.com/video/70885416" width="780" height="439" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<div class="caption">
					<p>Aurora: n. the dawn. We present the trailer for Aurora, our team movie for the 2012-2013 season. It was almost entirely filmed in the northeast exposing some very unique features custom to the area. Filmed &amp; Edited by: Sam Rogers &amp; Charlie Stemen Riders: Connor Gaeta, Cole Gibson, James Amodeo, Hunter Tyrrell &amp; Friends Music: [&hellip;]</p>
				</div>
			</li>
			<li>
				<iframe src="http://player.vimeo.com/video/62085918" width="780" height="439" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<div class="caption">
					<p>Connor taking some laps through Sugarbush Parks for the new City Prospect Apparel edit, Enjoy!</p>
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

			//create functions to pair flexslider with vimeo api
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

		  //init flexslider and responsive videos
		  //@todo: 10sec delay
		  $(".flexslider").fitVids().flexslider({
		      animation: "slide",
		      useCSS: false,
		      animationLoop: false,
		      smoothHeight: true,
		      before: function(slider){
		      	//pause video before moving to next slide
		      	var video2Pause = $('.flexslider li.flex-active-slide iframe').attr('id'),
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