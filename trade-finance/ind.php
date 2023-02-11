<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$country=$_POST['country'];
$company=$_POST['company'];
$apiKey = '1fd8ec9f6a60cecc1acd30710cb03b1c';
$listID = 'c169361fe3';
$memberID = md5(strtolower($email));
$dataCenter = 'us20';
$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
$json = json_encode([
	'email_address' => $email,
	'status'        => 'subscribed',
	'merge_fields'  => [
		'FNAME'     => $name,
        'MOBILE'     => $number,
        'COUNTRY'    => $country,
	'COMPANY'    => $company
	]
]);
// send a HTTP POST request with curl
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
$result = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if ($httpCode == 200) {
	// header('Location:https://www.euroeximbank.com/eeb-landing-page/thankyou.html');
	$success = "Thank you for submitting your information.";
}
else{
	$success = "Message Sending Failed, try again";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the apple mobile web app capable -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the apple mobile web app status bar style -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- set the description -->
	<meta name="description"
		content="The best global trade finance bank specialized in Letter of Credit, Bank Guarantees & more">
	<meta name="keywords"
		content="LETTERS OF CREDIT, STANDBY LETTER OF CREDIT, ADVANCE PAYMENT GUARANTEE, PERFORMANCE GUARANTEE BOND, Trade finance, Trade finance instruments, Export finance, Import finance, Euro Exim Bank">
	<meta name="author" content="Euro Exim Bank">
	<!-- Page Title -->
	<title>Euro Exim Trade Finance Bank | Facilitating Global Trade</title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7cUbuntu:400,700" rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/fonts-icons.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/plugin-resets.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/color.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110160689-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', 'UA-110160689-1');
	</script>
	<!-- Global site tag (gtag.js) - Google Ads: 828768374 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-828768374"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', 'AW-828768374');
	</script>
	<script>
		gtag('config', 'AW-828768374/66k5CPrq0ZABEPaAmIsD', {
			'phone_conversion_number': '+44 208 207 2868'
		});
	</script>
	<!-- Google Tag Manager -->
	<script>(function (w, d, s, l, i) {
			w[l] = w[l] || []; w[l].push({
				'gtm.start':
					new Date().getTime(), event: 'gtm.js'
			}); var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
					'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-TTQGPKW');</script>
	<!-- End Google Tag Manager -->


	<!-- Global site tag (gtag.js) - Google Ads: 753026772 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-753026772"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', 'AW-753026772');
	</script>


<style>

.alert-success {
    color: #999;
    border-color: #c3e6cb;
}
</style>
</head>

<body>
	<div id="wrapper">

		<!-- header of the page start here -->
		<header id="header" class="dark-bg" data-scroll-index="0">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<!-- header logo -->
						<div class="logo pull-left">
							<a href="#!">
								<img src="images/eebxmas.png" alt="Euro exim"
									class="img-responsive">
							</a>
						</div>
						<a href="#" class="nav-opener pull-right"><i class="fa fa-bars" aria-hidden="true"></i></a>
					</div>
					<div class="col-xs-12 col-sm-8">
						<!-- top list -->
						<ul class="list-inline text-right top-list">
							<li>
								<i class="fa fa-envelope main-color"></i>
								<strong>Contact US :</strong>
								<a href="mailto:info@euroeximbank.com">info@euroeximbank.com</a>
							</li>
							<li>
								<i class="fa fa-phone main-color"></i>
								<strong>Call Us :</strong>
								<a href="#">+44 208 207 2868</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- page navigation start here -->
			<nav id="nav">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<ul class="nav-list list-inline">
								<li><a href="#" data-scroll-nav="0" class="smooth">Home</a></li>
								<li><a href="#" data-scroll-nav="2" class="smooth">About Us</a></li>
								<li><a href="#" data-scroll-nav="3" class="smooth">Our Services</a></li>
								<li><a href="#" data-scroll-nav="4">Contact Us</a></li>
								<li class="button"><a href="#"
										class="btn btn-default main-bg-color text-uppercase smooth"
										data-scroll-nav="1">Get A Quote</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<!-- page navigation end here -->
		</header>
		<!-- header of the page end here -->
		<!-- main content wrapping section start here -->
		<main id="main">
			<!-- main banner section start here -->
			<section class="bg-img-full main-banner bg-img-parallax" style="background-image: url(images/eeb2.jpg);"
				data-scroll-index="0">
				<span class="overlay"></span>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-7" id="ban">
							<span class="title">Facilitating Global Trade</span>
							<h1 class="heading text-uppercase">ACQUIRE YOUR TRADE INSTRUMENTS <br>
								<span class="main-color"> WITHIN 48 HOURS* </span></h1>
							<span class="divider white"></span>
							<div class="btn-holder" style="margin-top:-20px;">
								<p style="font-size:18px;">We aim to accelerate your import & export business
									transactions <br> and connect you to new opportunities.</p>
								<a href="#" class="btn btn-default main-bg-color text-uppercase"
									data-scroll-nav="2">Learn More</a>
							</div>

						</div>
						<div class="col-xs-12 col-sm-6 col-md-5">
							<!-- quote form start here -->
							<section class="quote-form" style="background-color:#FAFAFA;" data-scroll-index="1">
								<h2 class="form-heading text-center text-uppercase">GET A CALL BACK</h2>
								<span class="form-title text-center">Submit the form our agent will get in <br> touch
									with you shortly!</span>
								<div id="mc_embed_signup">
									<form method="POST">
										<div id="mc_embed_signup_scroll">
											<div class="mc-field-group form-group">
												<input type="text" value="" name="name" placeholder="Name"
													class="form-control" id="mce-NAME" required>
											</div>
											<div class="mc-field-group form-group">
												<input type="email" value="" name="email" placeholder="Email Address"
													class="required email form-control" id="mce-EMAIL" required>
											</div>

											<div class="mc-field-group form-group">
												<input type="text" value="" name="company" placeholder="Company Name"
													class="form-control" id="mce-MMERGE4" id="mce-MMERGE4" required>
											</div>


											<div class="mc-field-group form-group">
												<input type="text" value="" name="number"
													placeholder="Phone Number With Country Code" class="form-control"
													id="mce-MMERGE3" required>
											</div>
											<div class="mc-field-group form-group">
												<input type="text" value="" name="country" placeholder="City"
													class="required form-control" id="mce-MMERGE4">
											</div>

											<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
											<span class="info"><i class="fa fa-info-circle main-color"
													aria-hidden="true"></i> We will never share your personal
												info</span>

											<div style="position: absolute; left: -5000px;" aria-hidden="true"><input
													type="text" name="b_83577cd843da31cf8b9db3898_c169361fe3"
													tabindex="-1" value=""></div>
											<div class="clear"><input onclick="gtag_report_conversion()" type="submit"
													value="GET A CALL BACK" name="submit" id="mc-embedded-subscribe"
													class="btn btn-default main-bg-color"></div>
										</div>
										<?php
										if (isset($success)){ echo "<div class='alert-success'>" . $success . "</div>";}
										?>
										
</form>
</div>
</section>
<!-- quote form end here -->
</div>
</div>
</div>
</section>
<!-- main banner section end here -->
<!-- about section start here -->
<section class="about-section pad-top-lg pad-bottom-sm" data-scroll-index="2">
	<div class="container">
		<!-- main heading start here -->
		<header class="main-heading row">
			<div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
				<h2 class="heading text-uppercase"><span class="main-color">ABOUT </span> EURO EXIM BANK
				</h2>
				<span class="divider center"></span>
				<p style="text-align: center;">Euro Exim Bank Limited is an innovative global financial
					institution with its Head office in St. Lucia and representative office in London. Euro
					Exim Bank is an associate member of the Caribbean Association of Banks Inc (CAB). We
					hold a "Class A" international banking license from Financial Services Regulatory
					Authority (FSRA) of <br> St. Lucia. This license provides authorisation to conduct
					business with third parties across industries and geographies worldwide, exercising
					strong due diligence, full compliance and operational excellence in our processes. We
					cater to a range of trade finance instruments.
				</p>
			</div>
		</header>
		<div class="row">
			<!-- about box start here -->
			<div class="col-xs-12 col-sm-6 col-md-3 about-box pad-bottom-sm">
				<span class="num main-color">01.</span>
				<span class="title text-uppercase">Excellence in Trade Finance </span>
				<span class="divider"></span>
				<p style="text-align: left;">We have the right expertise and exposure as a globally
					operative trade finance specialist having won cfi.co 2018 for Best Global Trade Services
					Bank.</p>
				<span class="divider"></span>
			</div>
			<!-- about box end here -->
			<!-- about box start here -->
			<div class="col-xs-12 col-sm-6 col-md-3 about-box pad-bottom-sm">
				<span class="num main-color">02.</span>
				<span class="title text-uppercase">Cutting-edge <br>Technology
				</span>
				<span class="divider"></span>
				<p style="text-align: left;"> We deploy the latest technology to ensure uninterrupted
					payment processing and issuance of trade finance instruments from a single<br> point
					within a shorter period of time.
				</p>
				<span class="divider"></span>
			</div>
			<!-- about box end here -->
			<!-- about box start here -->
			<div class="col-xs-12 col-sm-6 col-md-3 about-box pad-bottom-sm">
				<span class="num main-color">03.</span>
				<span class="title text-uppercase">Competitive <br> Pricing</span>
				<span class="divider"></span>
				<p style="text-align: left;"> Effective pricing can make or break a business. We offer
					unmatched competitive pricing suitable for your financial needs.</p>
				<br>
				<span class="divider"></span>
			</div>
			<!-- about box end here -->
			<!-- about box start here -->
			<div class="col-xs-12 col-sm-6 col-md-3 about-box pad-bottom-sm">
				<span class="num main-color">04.</span>
				<span class="title text-uppercase">Collaboration and Compliance</span>
				<span class="divider"></span>
				<p style="text-align: left;">We have a trusted strong network of International
					correspondents and our due diligence ensures a healthy financial structure.</p>
				<br>
				<span class="divider"></span>
			</div>

			<!-- about box end here -->
		</div>



	</div>
</section>
<!-- about section end here -->
<!-- counter section start here -->




<div class="counter-section text-center bg-img-full pad-bottom-sm " style="background-color:#06283a;padding:40px;"
	data-scroll-index="2">
	<div class="container">
		<div class="row">
			<div class="co-xs-12 col-sm-3 ">
				<span class="counter main-color">2500</span>
				<span class="txt text-uppercase">Trade Financed (in Crores)</span>
			</div>
			<div class="co-xs-12 col-sm-3 ">
				<span class="counter main-color">390</span>
				<span class="txt text-uppercase">Exporters</span>
			</div>
			<div class="co-xs-12 col-sm-3 ">
				<span class="counter main-color">70</span>
				<span class="txt text-uppercase">Countries with Buyers</span>
			</div>
			<div class="co-xs-12 col-sm-3 ">
				<span class="counter main-color">470</span>
				<span class="txt text-uppercase">Cities with exporters</span>
			</div>
		</div>
	</div>
</div>

<div class="row pad-top-sm" style="background-color:transparent;padding:40px;margin-top:20px;margin-bottom:-20px;">
	<div class="col-md-2">
		<img src="images/cfii.png" id="award">
	</div>
	<div class="col-md-10">
		<p>
			"The latest addition to Euro Exim�s financial arsenal comes from a strategic partnership with
			the XRP cryptocurrency developer Ripple. As the first regulated bank to join the Ripple network,
			Euro Exim can offer friction-free trade solutions to make money move as information does in the
			21st century � instantly. The partnership strengthens Euro Exim�s strong compliance process with
			enhanced authentication capabilities, as well as ramping-up speed efficiency. The CFI.co judging
			panel has recognized the bank in the past for its trade�tailored solutions and strong diligence.
			This year the judges praise the bank�s bold and savvy partnership move, enabling swift
			transactions, reduced liquidity and credit risks and minimized fund transactions. For 2019, and
			the second year running, the judges name Euro Exim Bank as the winner of the award for the Best
			Global Trade Services Bank"
			<br><b>- Judge�s Report, Capital Finance International</b>
		</p>
	</div>

</div>
<!-- counter section end here -->
<!-- services section starts here -->
<section class="services-section  pad-bottom-sm" data-scroll-index="3" style="margin-top:60px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-push-6 pad-bottom-sm">
				<div class="txt-box">
					<!-- main heading start here -->
					<header class="main-heading">
						<h2 class="heading text-uppercase"><span class="main-color">our </span> services
						</h2>
						<span class="divider"></span>
						<p>Euro Exim Bank's Trade instruments are accepted worldwide,<br> issued via SWIFT.
						</p>
					</header>
					<ul class="list list-unstyled">
						<li><i class="fa fa-caret-right main-color" aria-hidden="true"></i>Documentary
							Letter of Credit (LC)</li>
						<li><i class="fa fa-caret-right main-color" aria-hidden="true"></i>Standby Letter of
							Credit (SBLC)</li>
						<li><i class="fa fa-caret-right main-color" aria-hidden="true"></i>Revolving Letter
							of Credit</li>
						<li><i class="fa fa-caret-right main-color" aria-hidden="true"></i>Proof of Funds
							(POF)</li>
						<li><i class="fa fa-caret-right main-color" aria-hidden="true"></i>Performance Bond
						</li>
						<li><i class="fa fa-caret-right main-color" aria-hidden="true"></i>Bank Guarantee
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-md-pull-6 pad-bottom-sm">
				<!-- services box start here -->
				<ul class="services-box list-unstyled text-center" style="background-image: url(images/eeb1.png);">
					<li>
						<div class="over">
							<span class="icomoon icon-document main-color"></span>
							<span id="color" class="title text-uppercase main-color">ADVANCE <br>PAYMENT
								GUARANTEE
							</span>
							<span class="divider white center"></span>
							<p>Advance Payment Guarantee is an advance payment bond issued to a contractual
								obligation alongside advance payment.
							</p>
						</div>
					</li>
					<li>
						<div class="over" style="background-color:#06283a">
							<span class="icomoon icon-mobile main-color"></span>
							<span id="color" class="title text-uppercase main-color">COMMERCIAL <br> LETTERS
								OF CREDIT</span>
							<span class="divider white center"></span>
							<p>A commercial letter of credit is a direct payment method in which the issuing
								bank makes the payments to the beneficiary.
							</p>
						</div>
					</li>
					<li>
						<div class="over" style="background-color:#06283a">
							<span class="icomoon icon-layers main-color"></span>
							<span id="color" class="title text-uppercase main-color">CONFIRMED <br>LETTER OF
								CREDIT
							</span>
							<span class="divider white center"></span>
							<p>Used when the issuing bank of the letter of credit may have questionable
								creditworthiness and the seller seeks to get a second guarantee to assure
								payment.
							</p>
						</div>
					</li>
					<li>
						<div class="over">
							<span class="icomoon icon-briefcase main-color"></span>
							<span id="color" class="title text-uppercase main-color">PERFORMANCE <br>
								GUARANTEE BOND
							</span>
							<span class="divider white center"></span>
							<p>Performance Guarantee is a guarantee issued by the bank that the client will
								fulfil their contractual obligations.</p>
						</div>
					</li>
				</ul>
				<!-- services box end here -->
			</div>
		</div>
	</div>
</section>
<!-- services section end here -->


<!-- quote section start here -->
<section class="bg-img-full bg-img-parallax quote-section pad-top-lg pad-bottom-lg"
	style="background-image: url(images/eeb3.jpg);">
	<span class="overlay"></span>
	<div class="container">
		<div class="row">
			<div class="col-cs-12 col-sm-10 col-lg-8 col-sm-push-1 col-lg-push-2 text-center">
				<span class="subtitle">Get in touch and get your trade finance instruments with us!
				</span>
				<h2 class="main-color text-uppercase">GET A CALL BACK
				</h2>
				<span class="divider white center"></span>
				<p>Our experts are ready to assist you. Apply for your free consultation now!
				</p>
				<button class="btn btn-default main-bg-color text-uppercase smooth" data-scroll-nav="1">Click
					here</button>
			</div>
		</div>
	</div>
</section>
<!-- quote section end here -->
</main>
<!-- main content wrapping section end here -->
<!-- footer of the page start here -->
<footer data-scroll-index="4" class="dark-bg pad-top-xs pad-bottom-xs" id="cont">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<!-- footer logo -->
				<div class="logo pull-left">
					<a href="#!">
						<img src="images/eeb logo with ripple transparent.png" alt="swam lake" class="img-responsive">
					</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8">
				<!-- top list -->
				<ul class="list-inline text-right top-list">
					<li>
						<i class="fa fa-envelope main-color"></i>
						<strong>Contact US :</strong>
						<a href="mailto:info@euroeximbank.com">info@euroeximbank.com</a>
					</li>
					<li>
						<i class="fa fa-phone main-color"></i>
						<strong>Call Us :</strong>
						<a href="#">+44 208 207 2868</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<!-- footer bottom container -->
			<div class="col-xs-12 col-sm-6 bottom">
				<p> <i class="fa fa-copyright" aria-hidden="true"></i> Copyrights - 2019 All Rights Reserved by
					Euro Exim Bank.</p>
			</div>
			<!-- footer bottom container -->
			<div class="col-xs-12 col-sm-6 bottom">
				<p id="terms"><a href="https://www.euroeximbank.com/privacy-and-legal-eeb.php" target="_blank">Terms of
						Use / Privacy Policy</a></p>
			</div>
		</div>
	</div>
</footer>
<!-- footer of the page end here -->
<!-- Back Top of the page -->
<span id="back-top" class="fa fa-angle-up main-bg-color"></span>
<div class="popup-holder">
	<div id="popup1" class="lightbox">
		<!-- quote form start here -->
		<section class="quote-form" style="background-image: url(images/img02.jpg);">
			<h2 class="form-heading text-center text-uppercase">register now</h2>
			<span class="form-title text-center">Take your free trial</span>
			<form id="contactForm" data-toggle="validator">
				<fieldset>
					<div class="form-group">
						<input type="text" id="name" placeholder="Your Name" class="form-control" required
							data-error="NEW ERROR MESSAGE">
					</div>
					<div class="form-group">
						<input type="email" id="email" placeholder="Your Email" class="form-control" required
							data-error="NEW ERROR MESSAGE">
					</div>
					<div class="form-group">
						<input type="tel" id="phone" placeholder="Phone Number" class="form-control" required
							data-error="NEW ERROR MESSAGE">
					</div>
					<div id="msgSubmit" class="form-message hidden"></div>
					<span class="info"><i class="fa fa-info-circle main-color" aria-hidden="true"></i> We will
						never share your personal info</span>
					<button class="btn btn-default main-bg-color" type="submit" id="form-submit">GET A
						QUOTE</button>
				</fieldset>
			</form>
		</section>
		<!-- quote form end here -->
	</div>
</div>
</div>

<script src="js/jquery.js"></script>
<script src="js/plugins.js" defer></script>
<script src="js/jquery.main.js" defer></script>
</body>

</html>