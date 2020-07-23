<!doctype html>
<html class="no-js" lang="">

<head>
<?php include_once("components/Meta.php")?>
</head>

<body oncontextmenu="return false;" class="sticky-header">
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <div id="preloader"></div>
    <div id="wrapper" class="wrapper">
        <header class="header">
            <div id="rt-sticky-placeholder"></div>
                <?php include_once("components/Header.php");?>
            </div>
        </header>
        <section class="inner-page-banner bg-common" data-bg-image="img/roofer.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Lépjen velünk kapcsolatba</h1>
                            <ul>
                                <li>
                                    <a href="index.php">Főoldal</a>
                                </li>
                                <li>Kapcsolatfelvétel</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-wrap-layout2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-box-layout2">                          
                                <div class="contact-box-layout1">
                            <div class="contact-form">
                                <div class="heading-layout3">
                                    <h3 class="mg-b-10">Hagyjon üzenetet</h3>
                                    <p>Az üzenetekre általában már másnap válaszolunk!</p>
                                </div>
                                <form class="contact-form-box" id="contact-form">
                                    <div class="row gutters-15">
                                        <div class="col-md-6 col-12 form-group">
                                            <input type="text" placeholder="Név *" class="form-control" name="email_uname" data-error="Kötelező a név!" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 col-12 form-group">
                                            <input type="email" placeholder="E-mail *" class="form-control" name="email_name" data-error="Kötelező az emailcím!" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 col-12 form-group">
                                            <input type="text" placeholder="Telefonszám *" class="form-control" name="email_phone" data-error="Kötelező a telefonszám!" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                        
                                        <div class="col-12 form-group">
                                            <textarea placeholder="Üzenet *" class="textarea form-control" name="email_message" id="form-message" rows="7" cols="20" 
                                            data-error="Kötelező az üzenet mező kitöltése!" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <button type="submit" class="btn-fill-xl bg-Primary text-textprimary border-none">Küldés</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4 sidebar-break-md sidebar-widget-area">
                        <div class="widget widget-contact-info">
                            <div class="media">
                                <div class="item-icon">
                                    <i class="flaticon-call-answer"></i>
                                </div>
                                <div class="media-body space-md">
                                    <h4>Telefon:</h4>
                                    <ul>
                                        <li>+36205819710</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-icon">
                                    <i class="flaticon-message"></i>
                                </div>
                                <div class="media-body space-md">
                                    <h4>E-mail:</h4>
                                    <ul>
                                        <li>csabatetodoki@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-icon">
                                    <i class="flaticon-maps-and-flags"></i>
                                </div>
                                <div class="media-body space-md">
                                    <h4>Székhelyünk:</h4>
                                    <ul>
                                        <li>Budapest</li>
                                        <li>Deák utca 53</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php include_once("components/ContactCard.php");?>
                    </div>
            </div>
        </section>
        <?php include_once("components/Telephone.php");?>
        <?php include_once("components/Footer.php");?>
    </div>
    <?php include_once("components/FooterJavascript.php");?>
</body>
</html>