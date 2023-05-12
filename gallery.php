<? include("h1.php"); ?>

<? include("connection.php"); ?>
<? $qry=mysql_query("select * from gallery");
 ?>
 
	<!-- a-about -->
	
	<div class="a-grid">
		<div class="container">
			<div class="w3l-about-heading">
				<h2>photo gallery</h2>
			</div>
			<div class="gallery">	
				<? while($row=mysql_fetch_array($qry)){ ?>
				<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
					
						<a href="<? echo 'admin/'.$row['path']; ?>"><img src="<? echo 'admin/'.$row['path']; ?>" alt="" title="<? echo $row['name']; ?>" height="230"/></a>
						
					</div>
				</div>
				<? 
				}
				 ?>
				
				<!--<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
						<a href="images/g4.jpg"><img src="images/g4.jpg" alt="" title="Nulla molestie nulla et dolor commodo pharetra."/></a>
					</div>
				</div>
		
				
				<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
						<a href="images/g5.jpg"><img src="images/g5.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur. Praesent cursus aliquam erat a commodo."/></a>
					</div>
				</div>
				
				<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
						<a href="images/g6.jpg"><img src="images/g6.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur."/></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
						<a href="images/g8.jpg"><img src="images/g8.jpg" alt="" title="Nulla molestie nulla et dolor commodo pharetra."/></a>
					</div>
				</div>
				
				<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
						<a href="images/g2.jpg"><img src="images/g2.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur. Praesent cursus aliquam erat a commodo."/></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
						<a href="images/g5.jpg"><img src="images/g5.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur."/></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
						<a href="images/g6.jpg"><img src="images/g6.jpg" alt="" title="Nulla molestie nulla et dolor commodo pharetra."/></a>
					</div>
				</div>-->
				<div class="clearfix"></div>
				
			</div>
			<script type="text/javascript" src="js/simple-lightbox.js"></script>
			<script>
				$(function(){
					var $gallery = $('.gallery a').simpleLightbox();
					
					$gallery.on('show.simplelightbox', function(){
						console.log('Requested for showing');
					})
					.on('shown.simplelightbox', function(){
						console.log('Shown');
					})
					.on('close.simplelightbox', function(){
						console.log('Requested for closing');
					})
					.on('closed.simplelightbox', function(){
						console.log('Closed');
					})
					.on('change.simplelightbox', function(){
						console.log('Requested for change');
					})
					.on('next.simplelightbox', function(){
						console.log('Requested for next');
					})
					.on('prev.simplelightbox', function(){
						console.log('Requested for prev');
					})
					.on('nextImageLoaded.simplelightbox', function(){
						console.log('Next image loaded');
					})
					.on('prevImageLoaded.simplelightbox', function(){
						console.log('Prev image loaded');
					})
					.on('changed.simplelightbox', function(){
						console.log('Image changed');
					})
					.on('nextDone.simplelightbox', function(){
						console.log('Image changed to next');
					})
					.on('prevDone.simplelightbox', function(){
						console.log('Image changed to prev');
					})
					.on('error.simplelightbox', function(e){
						console.log('No image found, go to the next/prev');
						console.log(e);
					});
				});
			</script>
		</div>
	</div>
	<!-- //a-about -->
	<?php include("footer.php"); ?>