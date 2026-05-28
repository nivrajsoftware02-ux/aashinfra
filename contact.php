

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'headerlink.php'; ?>
</head>
<body>
   <?php include 'header.php'; ?> 
   <!-- content sections start -->
            
    <style>
        
@media only screen and (max-width: 600px) {
 .contact-details__info li .text a {
    font-size: 14px;
    color: var(--notech-black);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
}
}

    </style>
      <section class="page-title" style="background-image: url(siteadmin/images/background/page-title-bg.png);">
    		<div class="auto-container">
    			<div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
    				<h1 class="title">Contact Us</h1>
    			
    			</div>
    		</div>
    	</section>
   

    <section id="contact" class="contact-details">
        <div class="container ">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">Send us email</span>
                        <h2>Feel free to Contact US</h2>
                    </div>
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="mb-5">
                            <input name="form_botcheck" class="form-control" type="hidden" value="">
                            <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit</span></button>
                           
                        </div>
                    </form>
                    <!-- Contact Form Validation-->
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">Need any help?</span>
                            <h2>Get in touch with us</h2>
                            
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
								<div class="icon">
									<span class="lnr-icon-phone-plus"></span>
								</div>
                                <div class="text">
                                    <h6>Have any question?</h6>
                                    <a href="tel:+919336805413" class="text-dark">+91- 9336805413</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6>Email ID :</h6>
                                    <a href="aashinfrapvt@gmail.com" class="main-email text-dark">
    aashinfrapvt@gmail.com
</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6>Address :</h6>
                                    <span class="text-dark">3/491 vikalp khand Near Rail vihar tiraha Gomti Nagar Lucknow</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


         <!-- content section end -->
   <?php include 'footer.php'; ?>
   <?php include 'footerlink.php';?>
</body>
</html>
