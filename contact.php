<!doctype html>

<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if lt IE 9 ]><html lang="en" class="ie8"><![endif]-->
<!--[if lt IE 8 ]><html lang="en" class="ie7"><![endif]-->
<!--[if (gt IE 7)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us | Knockout Fitness</title>
	<meta name="description" content="Contact information for Frank Wood's boxing gym, Knockout Fitness.">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
</head>
<body>
	<header id="sub">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

	<div id="heading" class="sub">

		<div class="inner">

			<h1>Contact Us</h1>

		</div><!--inner-->

	</div><!--heading-->

</header>

<section class="sub-body">
	
	<div class="inner">
		
		<div class="form">

		    <?php
		        $name = $_REQUEST['name'] ;
		        $email = $_REQUEST['email'] ;
		        $phone = $_REQUEST['phone'] ;
		        $desc = $_REQUEST['desc'] ;
		        if (isset($_POST['submit'])) {
		          $to = 'kofnashville@gmail.com';
		          $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
		          $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
		          $headers .= "MIME-Version: 1.0\r\n";
		          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		          $message = '<html><body>';
		          $message .= 'Name: '.$name.'<br>';
		          $message .= 'Email: '.$email.'<br>';
		          $message .= 'Phone: '.$phone.'<br>';
		          $message .= 'How May We Help You: '.$desc.'<br>';
		          $message .= '</body></html>';
		          $subject = 'new form submission from knockoutfitness.net';

		    mail($to, $subject, $message, $headers);
		    echo "<div style='padding: 50px 20px 80px; color: #fff; text-align: center; font-family: open_sansbold_italic;'><label> Thank you for using our form. We will be in contact with you as soon as possible.</label></div>";
		  }
		else
		  { echo "
		        <form method='post' action='".$_SERVER['SCRIPT_NAME']."'>
		        <div class='left'>
			        <label for='name'>Name (required)</label><input type='text' required name='name' id='name' size='10'>
			        <label for='phone'>Phone (required)</label><input type='text' required name='phone' id='phone' size='10'>
			        <label for='email'>Email</label><input type='text' name='email' id='email' size='10'>
		    	</div><!--left-->
		    	<div class='right'>
		    		<label for='desc'>How May We Help You?</label>
			        <textarea name='desc' id='desc' size='10'></textarea>
			        <button class='submit' type='submit' name='submit'>Send Form</button>
				</div><!--right-->
		      </form>";
		      }
		    ?>

		</div><!--form-->

	</div><!--inner-->

</section><!--sub-body-->


<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>