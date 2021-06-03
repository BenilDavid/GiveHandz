<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>IdeaPress</title>

	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<link rel="icon" href="images/favicon.png" type="image/x-icon" />

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>

</head>

<body class="campaign-detail">
	<div id="wrapper">
		<header id="header" class="site-header">
			<div class="container">
				<div class="site-brand">
					<a href="index.html"><img src="images/assets/logo.png" alt="" /></a>
				</div>
				<div class="right-header">
					<nav class="main-menu">
						<button class="c-hamburger c-hamburger--htx">
							<span></span>
						</button>
						<ul>
							<li>
								<a href="#">Home<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="index.html">Home v1</a></li>
									<li><a href="index_2.html">Home v2</a></li>
									<li><a href="index_3.html">Home v3</a></li>
									<li><a href="index_gradient.html">Home Gradient</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Explore<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li>
										<a href="explore_layout_one.html">Explore Layout One</a>
									</li>
									<li>
										<a href="explore_layout_two.html">Explore Layout Two</a>
									</li>
									<li>
										<a href="explore_layout_three.html">Explore Layout Three</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Start a Campaigns<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li>
										<a href="create_a_campaign.html">Create a campaign</a>
									</li>
									<li>
										<a href="update_a_campaign.html">Update a campaign</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Pages<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="coming_soon.html">Coming Soon</a></li>
									<li><a href="about_us.html">About Us</a></li>
									<li><a href="404.html">404</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="faq.html">Faq</a></li>
									<li><a href="campaign_detail.php">Campaign details</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Blog<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="blog_grid.html">Blog Grid</a></li>
									<li><a href="blog_list.html">Blog List</a></li>
									<li>
										<a href="blog_list_sidebar.html">Blog Grid Sidebar</a>
									</li>
									<li><a href="blog_details.html">Blog Details</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Shop<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="shop-grid.html">Shop Grid</a></li>
									<li><a href="shop-details.html">Shop Details</a></li>
									<li><a href="cart.html">Cart</a></li>
									<li><a href="checkout.html">Checkout</a></li>
								</ul>
							</li>
							<li><a href="contact_us.html">Contact</a></li>
							<li>
								<a href="#">Account<i class="fa fa-caret-down" aria-hidden="true"></i></a>
								<ul class="sub-menu">
									<li><a href="dashboard.html">Dashboard</a></li>
									<li><a href="profile.html">Profile</a></li>
									<li>
										<a href="account_my_campaigns.html">My Campaigns</a>
									</li>
									<li>
										<a href="account_pledges_received.html">Pledges Received</a>
									</li>
									<li>
										<a href="account_backed_campaigns.html">Backed Campaigns</a>
									</li>
									<li><a href="account_rewards.html">Rewards</a></li>
									<li><a href="account_payments.html">Payments</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<div class="search-icon">
						<a href="#" class="ion-ios-search-strong"></a>
						<div class="form-search"></div>
						<form action="#" method="POST" id="searchForm">
							<input type="text" value="" name="search" placeholder="Search..." />
							<button type="submit" value="">
								<span class="ion-ios-search-strong"></span>
							</button>
						</form>
					</div>
					<div class="login login-button">
						<a href="login.html" class="btn-primary">Login</a>
					</div>
				</div>
			</div>
		</header>

		<main id="main" class="site-main">
			<div class="page-title background-campaign">
				<div class="container">
					<h1>The Oreous Pillow</h1>
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.html">Home</a><span>/</span></li>
							<li>The Oreous Pillow</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="campaign-content">
				<div class="container">
					<div class="campaign">
						<div class="campaign-item clearfix">
							<div class="campaign-image">
								<div id="owl-campaign" class="campaign-slider">
									<div class="item">
										<img src="images/campaign-recent-01.jpg" alt="" />
									</div>
									<div class="item">
										<img src="images/campaign-recent-02.jpg" alt="" />
									</div>
									<div class="item">
										<img src="images/campaign-recent-03.jpg" alt="" />
									</div>
								</div>
							</div>
							<div class="campaign-box">
								<a href="#" class="category">Crafts</a>
								<h3>The Oreous Pillow</h3>
								<div class="campaign-description">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Etiam tempor, ipsum ut mattis commodo, eros justo feugiat
										ante, sed tristique erat urna et nibh. Donec nec rhoncus
										mi, non laoreet tortor. Proin ullamcorper ipsum interdum
										tellus scelerisque, a ultricies urna vehicula. Mauris
										faucibus metus quis commodo pharetra.
									</p>
								</div>
								<div class="campaign-author clearfix">
									<div class="author-profile">
										<a class="author-icon" href="#"><img src="images/author-01.png" alt="" /></a>by <a class="author-name" href="#">Andrew Noah</a>
									</div>
									<div class="author-address">
										<span class="ion-location"></span>Melbourne, Victoria, AU
									</div>
								</div>
								<div class="process">
									<div class="raised"><span></span></div>
									<div class="process-info">
										<div class="process-funded">
											<span>$10000</span>funding goal
										</div>
										<div class="process-pledged">
											<span>$8100</span>pledged
										</div>
										<div class="process-time"><span>37</span>backers</div>
										<div class="process-time"><span>23</span>days ago</div>
									</div>
								</div>
								<div class="button">
									<!-- Button trigger modal -->
									<button type="button" class="btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
										Donate Now
									</button>

									<!-- Modal -->
									<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLongTitle">
														Donation Amount & Details
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form id="Form" action="" method="post">
													<div class="modal-body">
														<!-- modal body -->
														<div class="input-group mb-3">
															<div class="input-group-prepend">
																<span class="input-group-text" id="basic-addon1">INR</span>
															</div>
															<input type="text" class="form-control" id="amount" name="amount" placeholder="Amount" aria-label="Amount" aria-describedby="basic-addon1" required />
														</div>
														<div class="input-group mb-3">
															<input type="text" id="name" name="name" class="form-control" placeholder="Name" aria-label="Name" required />
														</div>
														<div class="input-group mb-3">
															<input type="email" id="email" name="email" class="form-control" placeholder="Email" required />
														</div>
														<div class="input-group mb-3">
															<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required />
														</div>
														<div class="input-group mb-3">
															<input type="tel" class="form-control" id="referer" name="referer" placeholder="Referer" value="<?php if (isset($_GET['refer'])) {
																																								$ref = $_GET['refer'];
																																								echo $ref;
																																							}  ?>" />
														</div>
														<div class="payment-checkbox">
															<input type="radio" id="payment" name="payment" required />
															<span> Debit / credit / Net Banking</span>
														</div>
													</div>
													<div class="modal-footer">
														<button type="submit" name="submit" id="btn" class="continue-donate btn btn-primary" onclick="payNow()">
															Continue to Donate
														</button>

													</div>
												</form>

											</div>
										</div>
									</div>

									<!-- <a href="#" class="btn-secondary"><i class="fa fa-heart" aria-hidden="true"></i>Remind me</a> -->
								</div>
								<?php
								// 		if (isset($_POST['submit'])) {

								// 			$amount = $_POST['amount'];
								// 			$name = $_POST['name'];
								// 			$email = $_POST['email'];
								// 			$phone = $_POST['phone'];

								// 			$sql = "INSERT INTO user_donation_details (Amount, Name, Email, Phone)
								// VALUES ('$amount', '$name', '$email', '$phone')";

								// 			$s = "select * from user_donation_details where email = '$email'";
								// 			$results = mysqli_query($conn, $s);

								// 			// $num = mysqli_num_rows($results);
								// 			// // echo $num;
								// 			// if ($num > 0) {
								// 			// 	echo "user already donated before.. do you want to donate again";
								// 			// } else {
								// 			$sql = "INSERT INTO user_donation_details (Amount, Name, Email, Phone)
								// VALUES ('$amount', '$name', '$email', '$phone')";
								// 			// if ($conn->query($sql)) {
								// 			// 	// header('location:campaign_details.php');
								// 			// 	echo "<div class='alert alert-success' style='font-size:16px;'>The payment was sucessfully completed.</div>";
								// 			// } else {
								// 			// 	echo "<div class='alert alert-danger' style='font-size:16px;'>failed</div>";
								// 			// }
								// 			// }
								// 		}
								?>
								<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
								<script>
									function payNow() {
										var name = jQuery('#name').val();
										var email = jQuery('#email').val();
										var phone = jQuery('#phone').val();
										var amount = jQuery('#amount').val();

										var options = {
											"key": "rzp_test_eQVid3n05at2yY",
											"amount": amount * 100,
											"currency": "INR",
											"name": "charity Box",
											"description": "donation",
											"callback_url": "http://localhost/charity/success.php",
											"prefill": {
												"name": name,
												"email": email,
												"contact": phone
											},
											"notes": {
												"address": "Payment"
											},
											"theme": {
												"color": "#008000"
											}
										};
										var rzp1 = new Razorpay(options);
										rzp1.open();
									};
								</script>
								<!-- <script>
									$(function() {
										$('#Form').validate({
											rules: {
												amount: {
													required: true,
												},
												name: {
													required: true,
													minlength: 3,
												},
												email: {
													required: true,
												},
												phone: {
													required: true,
												}
											},
											messages: {
												amount: {
													required: 'this field is required',
												},
												name: {
													required: 'this field is required',
												},
												email: {
													required: 'this field is required',
												},
												phone: {
													required: 'this field is required',
												}
											},
											highlight: function(messages) {
												$(this.messages).addClass('error');
											},
											unhighlight: function(messages) {
												$(this.messages).removeClass('error');
											}
										});

										$('#btn').click(function() {
											$.ajax({
												url: $('#Form').attr('action'),
												type: 'post',
												data: $('#Form :input').serialize(),
												sucess: function() {
													alert('welcome');
												},
											});
										});
									});
								</script> -->


								<div class="share">
									<p>Share this project</p>
									<ul>
										<li class="share-facebook">
											<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										</li>
										<li class="share-twitter">
											<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										</li>
										<li class="share-google-plus">
											<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
										</li>
										<li class="share-linkedin">
											<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										</li>
										<li class="share-code">
											<a href="#"><i class="fa fa-code" aria-hidden="true"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="campaign-history">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="campaign-tabs">
								<ul class="tabs-controls">
									<li class="active" data-tab="campaign">
										<a href="#">Campaign Story</a>
									</li>
									<li data-tab="backer"><a href="#">Backer List</a></li>
									<li data-tab="faq"><a href="#">FAQ</a></li>
									<li data-tab="updates"><a href="#">Updates</a></li>
									<li data-tab="comment"><a href="#">Comments</a></li>
								</ul>
								<div class="campaign-content">
									<div id="campaign" class="tabs active">
										<p>
											Ut enim ad minim veniam, quis nostrud exercitation
											ullamco laboris.Lorem ipsum dolor sit amet, consectetur
											adipisicing elit, sed do eiusmod tempor incididunt ut
											labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris. Ut enim ad
											minim veniam, quis nostrud exercitation ullamco
											laboris.Lorem ipsum dolor sit amet, consectetur
											adipisicing elit, sed do eiusmod tempor incididunt ut
											labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris.
										</p>
										<img src="images/campaign-tabs.jpg" alt="" />
										<p>
											A wonderful serenity has taken possession of my entire
											soul, like these sweet mornings of spring which I enjoy
											with my whole heart. I am alone, and feel the charm of
											existence in this spot, which was created for the bliss
											of souls like mine. I am so happy, my dear friend, so
											absorbed in the exquisite sense of mere tranquil
											existence, that I neglect my talents. I should be
											incapable of drawing a single stroke at the present
											moment.
										</p>
										<p>
											One morning, when Gregor Samsa woke from troubled
											dreams, he found himself transformed in his bed into a
											horrible vermin. He lay on his armour-like back, and if
											he lifted his head a little he could see his brown
											belly, slightly domed and divided by arches into stiff
											sections. The bedding was hardly able to cover it and
											seemed ready to slide off any moment. His many legs,
											pitifully thin compared with the size of the rest of
											him, waved
										</p>
									</div>
									<div id="backer" class="tabs">
										<table>
											<tr>
												<th>Name</th>
												<th>Donate Amount</th>
												<th>Date</th>
											</tr>
											<tr>
												<td>Andrew</td>
												<td>$100</td>
												<td>June 25, 2017</td>
											</tr>
											<tr>
												<td>Andrew</td>
												<td>$60</td>
												<td>December 25, 2017</td>
											</tr>
											<tr>
												<td>Andrew</td>
												<td>$70</td>
												<td>November 25, 2017</td>
											</tr>
											<tr>
												<td>Andrew</td>
												<td>$90</td>
												<td>February 25, 2017</td>
											</tr>
											<tr>
												<td>Andrew</td>
												<td>$30</td>
												<td>January 25, 2017</td>
											</tr>
											<tr>
												<td>Andrew</td>
												<td>$80</td>
												<td>June 15, 2017</td>
											</tr>
										</table>
									</div>
									<div id="faq" class="tabs">
										<h2>Frequently Asked Questions</h2>
										<p>
											Looks like there aren't any frequently asked questions
											yet. Ask the project creator directly.
										</p>
										<a href="#" class="btn-primary">Ask a question</a>
									</div>
									<div id="updates" class="tabs">
										<ul>
											<li>
												<p class="date">30-06-2017</p>
												<h3>New Project Launches in Bangalore</h3>
												<div class="desc">
													<p>
														Bacon spare ribs rump chuck turkey, ham hock
														capicola. Strip steak tongue kielbasa, boudin
														hamburger t-bone capicola turducken. Landjaeger
														meatloaf pork belly spare ribs chuck.
													</p>
												</div>
											</li>
											<li>
												<p class="date">31-05-2018</p>
												<h3>Our First Office Start</h3>
												<div class="desc">
													<p>
														Corned beef leberkas fatback porchetta, strip
														steak salami turkey short loin flank ham hock
														landjaeger. Leberkas pork belly kevin shoulder
														filet mignon. Bacon spare ribs rump chuck turkey,
														ham hock capicola. Strip steak tongue kielbasa,
														boudin hamburger t-bone capicola turducken.
														Landjaeger meatloaf pork belly spare ribs chuck.
													</p>
												</div>
											</li>
											<li>
												<p class="date">31-05-2018</p>
												<h3>We Touch the Million Dollar Milestone</h3>
												<div class="desc">
													<p>
														Corned beef leberkas fatback porchetta, strip
														steak salami turkey short loin flank ham hock
														landjaeger. Leberkas pork belly kevin shoulder
														filet mignon. Bacon spare ribs rump chuck turkey,
														ham hock capicola. Strip steak tongue kielbasa,
														boudin hamburger t-bone capicola turducken.
														Landjaeger meatloaf pork belly spare ribs chuck.
													</p>
												</div>
											</li>
											<li>
												<p class="date">31-05-2018</p>
												<h3>Our Employee Reach 100 Person</h3>
												<div class="desc">
													<p>
														Sed cursus hendrerit odio, at aliquet leo
														hendrerit a. Nulla ultricies sagittis dolor, quis
														maximus magna consectetur eu. Cras pharetra
														aliquam fringilla. Integer placerat sapien dapibus
														varius luctus. Lorem ipsum dolor sit amet,
														consectetur adipiscing elit. Vestibulum in aliquam
														urna, ultrices lobortis lacus. Praesent mi enim,
														congue semper volutpat ut, bibendum tempor arcu.
													</p>
												</div>
											</li>
										</ul>
									</div>
									<div id="comment" class="tabs comment-area">
										<h3 class="comments-title">1 Comment</h3>
										<ol class="comments-list">
											<li class="comment clearfix">
												<div class="comment-body">
													<div class="comment-avatar">
														<img src="images/comment.jpg" alt="" />
													</div>
													<div class="comment-info">
														<header class="comment-meta"></header>
														<cite class="comment-author">Jordan B. Goodale</cite>
														<div class="comment-inline">
															<span class="comment-date">2 days ago</span>
															<a href="#" class="comment-reply">Reply</a>
														</div>
														<div class="comment-content">
															<p>
																Lorem ipsum dolor sit amet, consectetur
																adipiscing elit. Equidem e Cn. Sequitur
																disserendi ratio cognitioque naturae; Nunc
																vides, quid faciat. Duo Reges: constructio
																interrete. Memini vero, inquam; Quis Aristidem
																non mortuum diligit?
															</p>
														</div>
													</div>
												</div>
											</li>
										</ol>
										<div id="respond" class="comment-respond">
											<h3 id="reply-title" class="comment-reply-title">
												Leave A Comment?
											</h3>
											<form action="#" id="commentForm">
												<div class="field-textarea">
													<textarea rows="8" placeholder="Your Comment"></textarea>
												</div>
												<div class="row">
													<div class="col-md-4 field">
														<input type="text" value="" name="s" placeholder="Your Name" />
													</div>
													<div class="col-md-4 field">
														<input type="text" value="" name="s" placeholder="Your Email" />
													</div>
													<div class="col-md-4 field">
														<input type="text" value="" name="s" placeholder="Website" />
													</div>
												</div>
												<button type="submit" value="Send Messager" class="btn-primary">
													Post Comment
												</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="support support-campaign">
								<h3 class="support-campaign-title">Back this Campaign</h3>
								<div class="plan">
									<a href="javascript:void(0)">
										<h4>Pledge $100 - $200</h4>
										<div class="plan-desc">
											<p>
												But I must explain to you how all this mistaken idea
												of denouncing pleasure and praising pain was born and
												I will give you a complete account of the system, and
												expound the actual teachings of the great explorer of
												the truth, the master builder of human happiness.
											</p>
										</div>
										<div class="plan-date">May, 2017</div>
										<div class="plan-author">Estimated Delivery</div>
										<div class="backer">2 backer</div>
									</a>
								</div>
								<div class="plan">
									<a href="javascript:void(0)">
										<h4>Pledge $200 - $300</h4>
										<div class="plan-desc">
											<p>
												No one rejects, dislikes, or avoids pleasure itself,
												because it is pleasure, but because those who do not
												know how to pursue pleasure rationally encounter
												consequences that are extremely painful. Nor again is
												there anyone who loves or pursues or desires to obtain
												pain of itself
											</p>
										</div>
										<div class="plan-date">May, 2017</div>
										<div class="plan-author">Estimated Delivery</div>
										<div class="backer">35 backer</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer id="footer" class="site-footer">
			<div class="footer-menu">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-sm-4 col-4">
							<div class="footer-menu-item">
								<h3>Our company</h3>
								<ul>
									<li><a href="#">What is Startup Idea</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="#">How It Works</a></li>
									<li><a href="#">What Is This</a></li>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Press</a></li>
									<li><a href="#">Starts</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-sm-4 col-4">
							<div class="footer-menu-item">
								<h3>Campaign</h3>
								<ul>
									<li><a href="#">Start Your Campaign</a></li>
									<li><a href="#">Pricing Campaign</a></li>
									<li><a href="#">Campaign Support</a></li>
									<li><a href="#">Trust &amp; Safety</a></li>
									<li><a href="#">Support</a></li>
									<li><a href="#">Terms of Use</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-sm-4 col-4">
							<div class="footer-menu-item">
								<h3>Explore</h3>
								<ul>
									<li><a href="#">Design &amp; Art</a></li>
									<li><a href="#">Crafts</a></li>
									<li><a href="#">Film &amp; Video</a></li>
									<li><a href="#">Food</a></li>
									<li><a href="#">Book</a></li>
									<li><a href="#">Games</a></li>
									<li><a href="#">Technology</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-sm-12 col-12">
							<div class="footer-menu-item newsletter">
								<h3>Newsletter</h3>
								<div class="newsletter-description">
									Private, secure, spam-free
								</div>
								<form action="https://template.themeburst.com/ideapress/s" method="POST" id="newsletterForm">
									<input type="text" value="" name="s" placeholder="Enter your email..." />
									<button type="submit" value="">
										<span class="ion-android-drafts"></span>
									</button>
								</form>
								<div class="follow">
									<h3>Follow us</h3>
									<ul>
										<li class="facebook">
											<a target="_Blank" href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										</li>
										<li class="twitter">
											<a target="_Blank" href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										</li>
										<li class="instagram">
											<a target="_Blank" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
										</li>
										<li class="google">
											<a target="_Blank" href="https://www.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
										</li>
										<li class="youtube">
											<a target="_Blank" href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-top">
						<p class="payment-img">
							<img src="images/assets/payment-methods.png" alt="" />
						</p>
						<div class="footer-top-right">
							<div class="dropdow field-select">
								<select name="s">
									<option value="">$ US Dollar (USD)</option>
									<option value="">£ Pound Sterling (GBP)</option>
									<option value="">€ Euro (EUR)</option>
								</select>
							</div>
							<div class="dropdow field-select">
								<select name="s">
									<option value="">English</option>
									<option value="">Greek (Ελληνικά)</option>
									<option value="">Deutsch (German)</option>
									<option value="">العربية (Arabic)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<p class="copyright">2018 by ideapress. All Rights Reserved.</p>
					<a href="#" class="back-top">Back to top<span class="ion-android-arrow-up"></span></a>
				</div>
			</div>
		</footer>
	</div>

	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="libs/popper/popper.js"></script>
	<script src="libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="libs/owl-carousel/carousel.min.js"></script>
	<script src="libs/jquery.countdown/jquery.countdown.min.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script src="libs/isotope/isotope.pkgd.min.js"></script>
	<script src="libs/bxslider/jquery.bxslider.min.js"></script>
	<script src="libs/magicsuggest/magicsuggest-min.js"></script>
	<script src="libs/quilljs/js/quill.core.js"></script>
	<script src="libs/quilljs/js/quill.js"></script>

	<script src="js/main.js"></script>
	<script>
		function validate(evt) {
			var theEvent = evt || window.event;
			var key = theEvent.keyCode || theEvent.which;
			key = String.fromCharCode(key);
			var regex = /[0-9]|\./;
			if (!regex.test(key)) {
				theEvent.returnValue = false;
				if (theEvent.preventDefault) theEvent.preventDefault();
			}
		}
	</script>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>