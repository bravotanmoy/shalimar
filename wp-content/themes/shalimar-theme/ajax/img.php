<?php
	$img = $_REQUEST['img'];
?>

<div class="project row">
	<div class="col-md-12">
        <a href="javascript:void(0)" class="close" id="close-project"><i class="fa fa-times"></i></a>
        <span id="bravot">Hi there</span>
		<img id="bigimage" src="img/products/<?php echo $img; ?>" alt="slika" class="img-responsive">
	</div>
</div>