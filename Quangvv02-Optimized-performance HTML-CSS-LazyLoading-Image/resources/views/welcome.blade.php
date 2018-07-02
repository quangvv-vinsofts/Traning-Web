<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="Tot cho seo"/>
    <meta name="description" content="Huong dan Seo web"/>
    <title>Laravel</title>
    <style>
        <?php
        $cssAbove= file_get_contents("css/PageCenterAbove.css");
        echo $cssAbove  ;
        ?>
    </style>
    <link rel="stylesheet" href="css/PageCenterBelow.css">
</head>
<body>
<div class="background">
    <div class="container-full">
        {{--Header Web--}}
        <header>


            <div class="container-header-logo">
                <img src="image/logo.png" alt="logo-vinsofts">
            </div>

            <div class="container-header-menu">

                <div class="container-header-menu-info">
                    <i class="fa fa-skype" aria-hidden="true">Skype:Vinsofts.com</i>
                    <i class="fa fa-envelope-o" aria-hidden="true">Mail:Contact@vinsofts.com</i>
                    <i class="fa fa-phone" aria-hidden="true">Hotline:0988.988.988</i>
                </div>

                <nav class="container-header-menu-navbar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Protfolio</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">ecruitment</a></li>
                    </ul>
                    <div class="container-header-menu-icon" >
                        <a href="http://www.facebook.com/"><img src="image/facebook.png" alt="Facebook" width="48" style="text-decoration: none; width: 30px;"></a>
                        <a href="https://twitter.com/"><img src="image/twitter.png" alt="Twitter" width="48" style="text-decoration: none; width: 30px;"></a>
                        <a href="https://plus.google.com/"><img src="image/google-plus.png" alt="Google Plus" width="48" style="text-decoration: none; width: 30px;"></a>
                        <a href="http://convertkit.com"><img src="image/website.png" alt="Website" width="48" style="text-decoration: none; width: 30px;"></a>
                    </div>

                </nav>


            <div class="clear"></div>
            </div>
        </header>

        <div class="container-banner">
            <div class=" container-banner-line">
                <h5 class="container-banner-text-image">WEB DESIGN COMPANY REPUPATION</h5>
                <p>we've been brougth the most valued products and
                    servecies to our global clients during last 10 year</p></div>
        </div>
        <div class="container-services">
        <div class="container-services-title">
            <h2>OURS SERVICES</h2>
            <h6>We Get The Job Done, No Matter The Project</h6>
        </div>
        <div class="container-services-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <img src="image/hinh2.png" alt="logo-services" />
                        <h5>Mobile App Developongment</h5>
                        <p>We are experts in mobile development
                            in industry for years. We have a team with 10
                            skilled developers that have been in this
                            field for at least 5 years so far. </p>
                        <button type="submit"><span>Explore more &raquo</span></button>

                    </div>
                    <div class="col-sm">

                        <img src="image/hinh2.png" alt="logo-services"/>
                        <h5>Mobile App Developongment</h5>
                        <p>We are experts in mobile development
                            in industry for years. We have a team with 10
                            skilled developers that have been in this
                            field for at least 5 years so far. </p>
                        <button type="submit"><span>Explore more &raquo</span></button>
                        <hr>
                    </div>
                    <div class="col-sm">
                        <img src="image/hinh2.png" alt="logo-services"/>
                        <h5>Mobile App Developongment</h5>
                        <p>We are experts in mobile development
                            in industry for years. We have a team with 10
                            skilled developers that have been in this
                            field for at least 5 years so far. </p>
                        <button type="submit"><span>Explore more &raquo</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container-client">
            <div class="container">
                <div class="row">
                    <div class="col-sm"></div>
                    <div class="col-sm">
                        <div class=" container-client-text">
                            <h2>OURS CLIENTS</h2>
                            <h6>The Circle Of Live And Deft Continue ...</h6>
                        </div>
                    </div>
                    <div class="col-sm"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <img src="image/logo2.png" alt="logo-client"/>
                    </div>
                    <div class="col-sm">
                        <img src="image/logo2.png" alt="logo-client"/>
                    </div>
                    <div class="col-sm">
                        <img src="image/logo2.png" alt="logo-client"/>
                    </div>
                    <div class="col-sm">
                        <img src="image/logo2.png" alt="logo-client"/>
                    </div>
                    <div class="col-sm">
                        <img src="image/logo2.png" alt="logo-client"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm"></div>
                    <div class="col-sm"><hr></div>
                    <div class="col-sm"></div>
                </div>
            </div>
        </div>
        <div class="container-article">
            <div class="container-article-text">
                <h2>OURS ARTICLES</h2>
                <h6>We Like To Keep Everyone Updated</h6>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm"> <img data-src="image/logo3-1.png" alt="logo-article-1" />
                        <div class="container-article-text-des">
                            <br>
                            <h5>Mobile App Developongment</h5>

                            <p>We are experts in mobile development
                                in industry for years. We have a team with 10
                                skilled developers that have been in this
                                field for at least 5 years so far. </p></div></div>
                    <div class="col-sm"> <img data-src="image/logo3-2.png" alt="logo-article-2" />
                        <div class="container-article-text-des">
                            <br>
                            <h5>Mobile App Developongment</h5>

                            <p>We are experts in mobile development
                                in industry for years. We have a team with 10
                                skilled developers that have been in this
                                field for at least 5 years so far. </p></div></div>
                    <div class="col-sm"><img data-src="image/logo3-3.png" alt="logo-article-3" />
                        <div class="container-article-text-des">
                            <br>
                            <h5>Mobile App Developongment</h5>

                            <p>We are experts in mobile development
                                in industry for years. We have a team with 10
                                skilled developers that have been in this
                                field for at least 5 years so far. </p></div></div>
                </div>
            </div>
        </div>
        <div class="clear"> </div>
        <footer >
            <div class="footer-line-down"></div>
            <div class="footer-about">
                <h5>About  Vinsofts</h5>
                <hr>
                <p>Vinsofts Co., Ltd is software
                    innovation and outsourcing
                    company based in Hanoi, Vietnam.
                    We provide top quality outsourcing
                    services to global clients from USA
                    to Australia, from Japan to
                    EU countries.</p>
            </div>
            <div class="footer-form">
                <h5>CONTACT US</h5>
                <hr>
                <p>Name*</p>
                <input type="text"/>
                <input type="text"/>
                <p>Email*</p>
                <input type="text"/>
                <p>Commnent*</p>
                <textarea cols="3" rows="40" type="text"></textarea>
            </div>
            <div class="footer-map">
                <h5 style="width: 55%;margin-left: 66%;">OURS INFO</h5>
                <hr class="footer-map-line" >
                <iframe data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.802368936622!2d105.78465515090815!3d21.040592292680472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab343be174b3%3A0x4b4d88def2a5bd8e!2zOCBQaGFuIFbEg24gVHLGsOG7nW5nLCBE4buLY2ggVuG7jW5nIEjhuq11LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1529996049090" width="550" height="300" frameborder="0" style="border:0 ;margin-left: 50px" allowfullscreen></iframe>
            </div>
        </footer>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/lazyload.min.js"></script>
<script type="text/javascript">
    new LazyLoad({
        elements_selector:["img","iframe"],
    });
</script>

</body>

</html>