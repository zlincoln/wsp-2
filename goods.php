<?php include('includes/header.php'); ?>
<section class="gallery-detail-template goods container">
	<div id="detail-target" class="row" data-curr-detail="null"></div>
	<div id="item-gallery" class="row">
		<?php for($i=0;$i<=5;$i++): ?>
		<a class="item-wrapper col-xs-12 col-sm-6 col-md-4" href="goods-detail.php">
			<div class="item-viewport">
				<img class="img-responsive" src="http://placehold.it/1200x1000">
				<span class="price">$55.00</span>
			</div>
			<div class="item-details">
				<h3 class="item-title">The chief coast coach</h3>
				<div class="image-gallery">
					<!-- <img class="img-responsive" src="http://placehold.it/1200x1000">
					<img class="img-responsive" src="http://placehold.it/1200x1000">
					<img class="img-responsive" src="http://placehold.it/1200x1000">
					<img class="img-responsive" src="http://placehold.it/1200x1000"> -->
				</div>
				<div class="wysiwyg-content">
					<p>Limited run: HG Coaches Jacket</p>
					<span style="font-weight: bold">Size Chart:</span>
					<ul>
						<li>M: L:32" W:26.5"</li>
						<li>L: L:32" W:26.5"</li>
						<li>XL: L:32" W:26.5"</li>
						<li>2XL: L:32" W:26.5"</li>
					</ul>
					<form>
						<select>
							<option>Please Select Size</option>
							<option>M: L:32" W:26.5"</option>
							<option>L: L:32" W:26.5"</option>
							<option>XL: L:32" W:26.5"</option>
							<option>2XL: L:32" W:26.5"</option>
						</select>
						<input type="submit" class="button button-primary" name="submit" id="purchase-item-1" value="BUY">
					</form>
				</div>
			</div>
		</a>
		<?php endfor; ?>
	</div>
</section>
<?php include('includes/gallery-script'); ?>
<?php include('includes/footer.php'); ?>