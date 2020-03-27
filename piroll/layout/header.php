
<link rel="stylesheet" href="../../piroll/css/header.css">

<div class="header">
	<div class="holder">
		<div class="logo">
			<img src="../../piroll/images/header/logo.png" alt="Logo">
		</div>
		<div class="menu-icon">
			<i class="pe-7s-menu"></i>
		</div>
		<div class="menu">
			<ul class="clearfix">
				<li class="active"><a href="#">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li class="menu-hide"><a href="#">WORK</a></li>
				<li class="menu-hide"><a href="#">PROCESS</a></li>
				<li class="menu-hide"><a href="#">SERVICES</a></li>
				<li class="menu-hide"><a href="#">TESTIMONIALS</a></li>
				<li><a href="#">CONTACT</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
<script>
	$(".pe-7s-menu").click(function(){
		$(".menu-hide").css("display", "block");
		$(".menu").fadeToggle("slow");
	});
</script>