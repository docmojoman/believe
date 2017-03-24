<?php
  $bg = array('black-and-white-dark-car-vehicle.jpg', 'parking-parking-lot-underground-garage.jpg', 'pexels-photo-169978.jpg', 'pexels-photo-209999.jpg', 'pexels-photo-263789.jpg'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>theywantyoutobelieve.com | coming soon&hellip;</title>
	<!-- <link rel="stylesheet" href="z-css/custom.css"> -->
	<style type="text/css">
	<!--
	body {
		margin: 0px auto;
		padding: 0px 0px;
		color: #ffffff;
	    height: 100%;
	    overflow: hidden;
		background-color: #000000;
		font: 1.25rem "Courier New", Courier, mono;
	}
	
	div.wrapper {
		height: 100vh;
		/*background-color: #000;*/
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		text-align: center;
		background: url("./z-images/backgrounds/<?php echo $selectedBg; ?>") no-repeat center;
	    background-size: cover;
	}
	
	p {
		display: inline-block;
		margin-right: auto;
		margin-left: auto;
		background-color: #000;
		padding: 10px;
	}


.searchlight {
    position: absolute;
    z-index: 100;
    height: 800px;
    width: 800px;
    border-width: 100vh 100vw;
    border-style: solid;
    border-color: #000;
    top: -100vh;
    left: -100vw;
    cursor: none;
    background: #000;
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box;
    -ms-box-sizing: content-box;
    box-sizing: content-box;
}
.searchlight.on {
    background: -moz-radial-gradient(center, ellipse cover,  rgba(0,0,0,0) 0%, rgba(0,0,0,0) 50%, rgba(0,0,0,1) 60%, rgba(0,0,0,1) 100%); /* FF3.6+ */
    background: -webkit-radial-gradient(center, ellipse cover,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 50%,rgba(0,0,0,1) 60%,rgba(0,0,0,1) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(center, ellipse cover,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 50%,rgba(0,0,0,1) 60%,rgba(0,0,0,1) 100%); /* Opera 12+ */
    background: -ms-radial-gradient(center, ellipse cover,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 50%,rgba(0,0,0,1) 60%,rgba(0,0,0,1) 100%); /* IE10+ */
    background: radial-gradient(ellipse at center,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 50%,rgba(0,0,0,1) 60%,rgba(0,0,0,1) 100%); /* W3C */
}
	-->
	</style>
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
</head>
<body>
	<div class="wrapper">
		<p><img src="z-images/logo.00.png" alt=""><br />coming soon&hellip;</p>
	</div>
	<div class="searchlight"></div>

	<script>
     // $(document).ready(function () {

		$('.searchlight')
	    .on('mousemove', function(event) {
	        $(this).addClass('on').css({'margin-left': event.pageX - 150, 'margin-top': event.pageY - 150});
	    })
	    .on('mouseout', function(event) {
	        $(this).removeClass('on');
	    })
	    .on('click', function() {
	        $(this).fadeOut(function() {
	            $(this).remove();
	        });
	    });
    // });
	</script>
</body>
</html>