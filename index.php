<!doctype html>

<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if lt IE 9 ]><html lang="en" class="ie8"><![endif]-->
<!--[if lt IE 8 ]><html lang="en" class="ie7"><![endif]-->
<!--[if (gt IE 7)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Knockout Fitness</title>
	<meta name="description" content="Knockout Fitness is Nashville's original boxing gym, offering personal training for over 20 years.">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
</head>
<body id="home">
	<header>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

	<div id="heading">

		<div class="inner">

			<h1>Nashville's original <span>Boxing Fitness Gym</span> for over 20 years</h1>

		</div><!--inner-->

	</div><!--heading-->

</header>

<section class="slider">

	<div class="flexslider carousel">

  		<ul class="slides">
    		<li><img src="/_assets/img/slider-heavy-bag.jpg" alt="client punching the heavy bag at Knockout Fitness" /></li>
    		<li><img src="/_assets/img/slider-kick.jpg" alt="client kicking at Knockout Fitness" /></li>
    		<li><img src="/_assets/img/slider-punching.jpg" alt="client punching at Knockout Fitness" /></li>
    		<li><img src="/_assets/img/slider-training.jpg" alt="client training at Knockout Fitness" /></li>
    		<li><img src="/_assets/img/slider-vance.jpg" alt="client exercising at Knockout Fitness" /></li>
    		<li><img src="/_assets/img/slider-riddick-bowe.jpg" alt="Riddick Bowe and Frank Wood sparring at Knockout Fitness" /></li>
    		<li><img src="/_assets/img/slider-jermain-taylor.jpg" alt="Jermain Taylor and Frank Wood at Knockout Fitness" /></li>
    		<li><img src="/_assets/img/slider-mary-steenburgen.jpg" alt="Mary Steenburgen poses with Frank Wood at Knockout Fitness" /></li>
    		<li><img src="/_assets/img/slider-oliver-mccall.jpg" alt="Oliver McCall poses with Frank Wood at Knockout Fitness" /></li>
    		<li><img src="/_assets/img/slider-riddick-bowe2.jpg" alt="Riddick Bowe and Frank Wood pose at Knockout Fitness" /></li>
  		</ul><!--slides-->

	</div><!--flexslider-->

</section><!--slider-->

<section id="frank">

	<div class="inner">

		<article class="text">
		
			<h3>Meet Frank Wood</h3>

			<p>Knockout Fitness is the creation of Frank Wood. Frank has been active in the sport of boxing since 1991, when he began his amateur career through the United States Amateur Boxing Association. Trying to find a way to maintain the rigorous training and competition schedule of a boxer, Frank decided to open his own gym and offer his training regiment to the public. </p>

		</article><!--text-->

		<div class="frank-wood">
			
			<img src="/_assets/img/frank-wood.png" alt="Frank Wood, owner of Knockout Fitness">

		</div><!--frank-->

	</div><!--inner-->

</section>

<section class="bg-fixed"></section><!--bg-fixed-->

<section id="workout">
	
	<div class="inner">
		
		<h2>The Workout</h2>

		<img class="inset" src="/_assets/img/inset-gym.jpg" alt="interior shot of Knockout Fitness gym">

		<h4>The world of boxing has been heralded for producing some of the fittest athletes in sports. The quality of a boxer's workout has received much attention nationwide and has taken a prominent place in the world of fitness as an effective and complete total body workout. Under the Knockout Fitness program, our clients have seen dramatic results in toning, weight loss and endurance.</h4>

		<div class="clearfix"></div>

		<p>At Knockout Fitness we strive to provide you professional and knowledgeable boxing fitness training in a friendly and enjoyable environment. Knockout Fitness offers a fully-equipped boxing gym including a 20' boxing ring, cardio equipment and free weights. Boxing for fitness is a fun, easy to learn workout that will get you mentally and physically into the best shape of your life. The benefits are upper and lower body strength, coordination, various punching, kicking and self defense techniques, cardiovascular endurance and stamina.</p>

		<p>When compared to other exercise programs you will find that Knockout Fitness will give you superior results. Burning fat and calories comes naturally and looking fit and trim is the reward.</p>

	</div><!--inner-->

</section><!--workout-->

<section id="testimonials">
	
	<div class="inner">
		
		<article class="img">
			
			<div class="text">
				
				<h5>"I have trained athletes from all-state to all-pro and there is no other fitness program that boosts the heart rate and metabolism as fast as Frank's boxing program does."</h5>

				<h6>&mdash; Andy Williams, <span>USA weightlifting certified, former strength and conditioning coach Kansas City Chiefs, Kansas City Royals, Tennessee State</span></h6>

			</div><!--text-->

			<div class="img">
				
				<img src="/_assets/img/andy-williams.png" alt="Boxer Andy Williams">

			</div><!--img-->

		</article>

		<article>
			
			<div class="text">
				
				<h5 class="alt">"Frank is a terrific trainer. Great sense of humor, welcoming environment, and he gets you in great shape. Note that the boxing is all bags and practice mitts. Nobody is hitting you. Mix in a healthy dose of other interesting exercises and your abs, shoulders, arms, and chest will all benefit. And this spoken by a tall, thin middle-aged guy who will never be musclebound but who feels and looks fit. You won't regret hiring Frank."</h5>

				<h6>&mdash; S.B., <span>Nashville, November 2013</span></h6>

			</div><!--text-->

		</article>

	</div><!--inner-->

</section><!--testimonials-->

<section id="feed">
	
	<div class="inner">
	      
	    <div class="fb-like-box" data-href="https://www.facebook.com/pages/Knockout-Fitness/299347150115020" data-width="300" data-height="456" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
	    
	    <div class="fight"><img src="/_assets/img/wood-v-navarre-fight.jpg" alt="Frank Wood v Navarre fight"></div><!--fight-->

    </div><!--inner-->

</section><!--feed-->


<script src="/_assets/js/jquery.flexslider.js"></script>

<script>
$(window).load(function() {
  $('.flexslider').flexslider({
  });
});
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=265693663453307&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>