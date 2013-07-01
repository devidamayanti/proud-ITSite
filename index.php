<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width">

<title>PROUD-IT (Build Trust and Give Solution)</title>
<link rel="stylesheet" type="text/css" href="libraries/_css/style.css" />
<link href="libraries/_css/menu.css" rel="stylesheet" type="text/css" />
<!--<link href="libraries/_css/coursel.css" rel="stylesheet" type="text/css" />-->
<link href="libraries/_css/form/demo.css" rel="stylesheet" type="text/css" />
<link href="libraries/_css/form.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- MAIN HEADER -->
<div id="header">
<div id="link">
    <div class="header-cont">
        <div class="page">
          <div class="logo"><img src="libraries/_images/code.png" /></div>
            
            <div id="search">
            	<form method="get" action="/search" id="search">
                  <input name="q" type="text" size="40" placeholder="Search..." />
                </form>
      		</div>
            
            <div class="soc-button">
            	<div id="demo">
                  <ul id="menu">
                    <li> <a href="javascript:void(0);" target='blank'><img src="libraries/_images/soc/rss.png" alt="Proud-IT"/></a> </li>
                    <li> <a href="javascript:void(0);" target='blank'> <img src="libraries/_images/soc/tw.png" alt="Follow us on Twitter"/></a> </li>
                    <li> <a href="https://www.facebook.com/ProudITCorp" target='blank'> <img src="libraries/_images/soc/fb.png" alt="Proud-IT on FaceBook"/></a> </li>
                  </ul>
	            </div>
            </div>
            
            
            
        </div>
        
        <div class="header">
            <div class="header-bottom"></div>
            <div class="menu">
            <div class="margin-header">
                <div class="dock" id="dock">
                  <div class="dock-container">
                  <a class="dock-item" href="index.php?dock=home"><img src="libraries/_images/iproud-home-electrict.png" alt="Home" /><span>Home</span></a> 
                  <a class="dock-item" href="index.php?dock=portofolio"><img src="libraries/_images/iproud-portofolio-electrict.png" alt="Portofolio" /><span>Portofolio</span></a> 
                  <a class="dock-item" href="javascript:void(0);"><img src="libraries/_images/iproud-team-electrict.png" alt="Meet the Team" /><span>Meet the Team</span></a> 
                  <a class="dock-item" href="index.php?dock=profile"><img src="libraries/_images/iproud-profile-proudit.png" alt="Our Profile" /><span>Our Profile</span></a>
                  <a class="dock-item" href="index.php?dock=partner-all"><img src="libraries/_images/iproud-clients-electrict.png" alt="Our Partnership" /><span>Our Partnership</span></a> 
                  <a class="dock-item" href="index.php?dock=product-all"><img src="libraries/_images/iproud-profile-electrict.png" alt="Our Product" /><span>Our Product</span></a> 
                  <a class="dock-item" href="index.php?dock=contact"><img src="libraries/_images/iproud-contact-electrict.png" alt="Contact Us" /><span>Contact Us</span></a> 
                  </div>
                </div>
            </div>
            </div>
            <div class="bottom-menu"></div>
    	</div>
    </div>
</div>
</div>

<!-- MAIN CONTENT --> 
<?PHP
if(@!$_GET['dock'])
{ 
	echo"<div class=main-content>";
}
else
{
	echo"<div class=main-content2>";
}
?>


	<div id="link">
	    <!--slide-->
        <?PHP
        if(@!$_GET['dock'])
        {
            echo'   <div class="slide">
                        <div id="wrapper">
                            <div class="slider-wrapper theme-default">
                                <div id="slider" class="nivoSlider">
                                    <img src="libraries/_images/promotion.png" />
                                    <img src="libraries/_images/promotion2.png" />
                                    <img src="libraries/_images/promotion3.png" />
                                    <img src="libraries/_images/promotion4.png" />
                                </div>
                            </div>
                        </div>
                    </div>';	
        }
        else
        {
                
        }
        ?>
        
        <div class="clear"></div>
        
        <div id="content">
        <!--top content-->
            <?PHP
            if(@!$_GET['dock'])
			{
				echo'<div class="top-content"></div>
					 <div class="clear"></div>';	
			}
			else
			{
				
			}
			?>
            
        <!--content-->
            <div class="content"><br><br><br>
            <?PHP
                if(@$_GET['dock'])
				{
					switch(@$_GET['dock'])
					{
						
						default;
						case 'home':
						echo"<script>location.href='index.php'</script>";
						break;
						
						case 'news':
						include('view/_news/view.php');
						break;
						
						case 'product':
						include('view/_product/view.php');
						break;
						
						case 'profile':
						include('view/_profile/view.php');
						break;
						
						case 'portofolio':
						include('view/_portofolio/view.php');
						break;
						
						case 'product-all':
						include('view/_product/all.php');
						break;
						
						case 'product-det':
						include('view/_product/detail.php');
						break;
						
						case 'partner-all':
						include('view/_partner/all.php');
						break;
						
						case 'contact':
						include('view/_contact/view.php');
						break;
					}	
				}
				else 
				{
					include('view/_product/view.php');	
					include('view/_news/view.php');
					//include('view/_partner/view.php');	
				}	
                ?>                
                
            </div>
        
        <div class="clear"></div>
        
        <!--footer-->
        <div id="footer">
            <div class="footer">
                <div id="widget">
                	<div class="first-widged">
                    <div class="widget-title">ABOUT US</div>
                    <div class="content-first-widget">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua &nbsp;<a href="#">read more</a>
                    </div>
                    </div>
                    
                    <div class="second-widged">
                    <div class="widget-title">GET IN TOUCH WITH US</div>
                    <div class="content-second-widget">
                    <img src="libraries/_images/Home2.png" title="Address"> <div class="info">Jl. Singaraja No. 3 Antapani Bandung 40291</div>
                    <img src="libraries/_images/Phone.png" title="Phone/Mobile"> <div class="info"> +62 856 2415 9164 / +62 22 7513 188</div>
                    <img src="libraries/_images/Email.png" title="E-mail"> <div class="info"><a href="mailto:?contact@proudit-team.com">contact@proudit-team.com</a></div>
                    </div>
                    </div>
                    
                    <div class="third-widged">
                    <div class="widget-title">SUBSCRIBE</div>
                    <div class="content-third-widget">
                    <form>
                      <p><label for="first-name">First Name</label><input type="text" id="first-name" />
                      <label for="last-name">Last Name</label><input type="text" id="last-name" /></p>
                      <p><label for="street">Email</label><input type="text" id="street" /></p>
                      <input type="submit" value="Subscribe"> 
                    </form>
                    </div>
                    </div>
                </div>
                
            </div>
            <div class="clear"></div>
            <div class="end-footer">
            	<div class="margin-footer">Copyright &copy; 2013. PROUD-IT All Right Reserved.&nbsp;<font color="#999999"><b>Build Trust and Give Solution</b></font></div>
            </div>
        </div>
        </div>
   </div>
</div>



    <!-- JavaScript at the bottom for fast page loading -->
    <?PHP
    if(@!$_GET['dock']) 
    {
	echo"<!--slider-->
		<link rel=stylesheet href=libraries/_css/default.css type=text/css media=screen />
		<link rel=stylesheet href=libraries/_css/nivo-slider.css type=text/css media=screen />
		<link rel=stylesheet href=libraries/_css/nivo_style.css type=text/css media=screen />
		<script type=text/javascript src=libraries/_js/jquery-1.7.1.min.js></script>
		<script type=text/javascript src=libraries/_js/jquery.nivo.slider.js></script>
		<script type=text/javascript>
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
		</script>";	
    }
    elseif(@$_GET['dock'])
    {
	echo"<!--slider-->
		<script type=text/javascript src=libraries/_js/jquery-1.7.1.min.js></script>
		<script type=text/javascript src=libraries/_js/jquery.nivo.slider.js></script>
		<script type=text/javascript>
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
		</script>";	
		
	echo"<!-- slider portofolio -->
		<link href=libraries/_css/portofolio/nivo-slider.css rel=stylesheet type=text/css />
		<link href=libraries/_css/portofolio/main.css rel=stylesheet type=text/css />
		<script src=libraries/_js/blanka.js type=text/javascript></script>
		<script src=libraries/_js/jquery.nivo.slider.pack.js type=text/javascript></script>";
    }
    
    ?>
    
    <!--menu-->
    <script type="text/javascript" src="libraries/_js/jquery.js"></script>
    <script type="text/javascript" src="libraries/_js/interface.js"></script>
    <script type="text/javascript">
        
        $(document).ready(
            function()
            {
                $('#dock').Fisheye(
                    {
                        maxWidth: 50,
                        items: 'a',
                        itemsText: 'span',
                        container: '.dock-container',
                        itemWidth: 90,
                        proximity: 70,
                        halign : 'center'
                    }
                )
            }
        );
    
    </script>
    
    <!--bubbleup-->
    <script type="text/javascript" src="libraries/_js/bubbleup.jquery.js"></script>
    <script type="text/javascript">
    $(function(){
    
        $("ul#menu li img").bubbleup({tooltips: true});
        
    });
    </script>
    
    <!-- carouFredSel -->
    <!--
    <script type="text/javascript" language="javascript" src="libraries/_js/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script type="text/javascript" language="javascript">
        $(function() {
    
            //	Basic carousel, no options
            $('#foo0').carouFredSel();
            
        });
    </script>
    -->
    
    <!--fade-->
    <script type="text/javascript" src="libraries/_js/fade.js"></script>
    
    <!--form-->
    <script type="text/javascript" src="libraries/_js/form.js"></script>

</body>
</html>



