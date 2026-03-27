<?php
include('connection.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="Rhf0-1_oDocn9mv4b8P3OnIK2ZLK8TFaNMmbyhWASnI" />
 <meta name="description" content="Ekhaya Logistics is company which helps you send goods and parcels to Africa from India and send  from India to Africa,How to ship goods and parcels to Africa from India, It is one of the most affordable Logistics Companies">
    <meta name="keywords" content="Send Goods to Zimbawe, Send Goods to India from Africa, Send parcels to Africa, Simplest way to send parcels to Africa from India,  Track Your Order, Ekhaya Logistics, Send Remittance, Cheapest Shipping Company in India, Ship goods to Zimbawe, Ship Goods to India.">
    <meta name="author" content="Masuka Web Solutions">
    <!-- Bootstrap CSS -->
        <link rel="shortcut icon" type="image/x-icon" href="img/ekhaya-logistcs-logo.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://ekhayalogistics.com/style.css">
<link rel="stylesheet" href="https://ekhayalogistics.com/footer.css">
<link rel="stylesheet" href="announce.css">


    <title>LimitLess Energy Logistics - Announcements </title>
    <style>
        body {
            background-color:#fff;
        }
        .banner{
            background-image:url('img/announce-banner.jpg');
            background-color:white;
    height: 800px;
    width:90%;
    background-position:center bottom;
    background-size: 85% 100%;
    background-repeat: no-repeat !important;

}
.card-header
{
    background-color: #FFB145;
    
}
.card-header a
{
    color: black;
    font-weight: bold;

}

#theOnes{
   position:relative;
   top:50px;
}
@media only screen and (max-width: 768px)
{
     .banner{
       background-size:100% 100%;
     }
    
    #track-label {
        display:none;
    }
}
@media only screen and (max-width: 518px){
   .banner{
       background-size:100% 100%;
       height:40vh;
   }
   .myf{
       width:320px !important;
   }
    .imgs h5 {
        font-size: 11px;
    }
    .intro_contact_div span{
        font-size:95%;
    }
    #tracking_input{
        position:relative;
    }
    .form1{
        position:absolute;
        top:38px;
        left:30px;
    }
    
    
    .service:hover{
        background-color:inital;
    }
     #track-btn{
        width:250px;
        
    }
   
}

@media only screen and (max-width: 376px){
    
   
    .intro_contact_div{
        font-size:10px;
    }
    
}
.clock-wrapper{ 
	font: normal 13px/20px Arial, Helvetica, sans-serif; word-wrap:break-word;
	color: #eee;
    background: #353535;
    position:fixed;
    left:10px;
    bottom:100px;
    
}
#countdown{
	width: 180px;
	height: 160px;
	text-align: center;
	background: #222;
	background-image: -webkit-linear-gradient(top, #222, #333, #333, #222); 
	background-image:    -moz-linear-gradient(top, #222, #333, #333, #222);
	background-image:     -ms-linear-gradient(top, #222, #333, #333, #222);
	background-image:      -o-linear-gradient(top, #222, #333, #333, #222);
	border: 1px solid #111;
	border-radius: 5px;
	box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.6);
	margin: auto;
	padding: 24px 0;

  position: absolute;
  top:0;
  bottom:0;
  right:0;
  left:0;
}

#countdown:before{
	content:"";
	width: 8px;
	height: 65px;
	background: #444;
	background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
	background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
	background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
	background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
	border: 1px solid #111;
	border-top-left-radius: 6px;
	border-bottom-left-radius: 6px;
	display: block;
	position: absolute;
	top: 48px; left: -10px;
}

#countdown:after{
	content:"";
	width: 8px;
	height: 65px;
	background: #444;
	background-image: -webkit-linear-gradient(top, #555, #444, #444, #555); 
	background-image:    -moz-linear-gradient(top, #555, #444, #444, #555);
	background-image:     -ms-linear-gradient(top, #555, #444, #444, #555);
	background-image:      -o-linear-gradient(top, #555, #444, #444, #555);
	border: 1px solid #111;
	border-top-right-radius: 6px;
	border-bottom-right-radius: 6px;
	display: block;
	position: absolute;
	top: 48px; right: -10px;
}

#countdown #tiles{
	position: relative;
	z-index: 1;
}

#countdown #tiles > span{
	width: 30px;
	max-width: 30px;
	font: bold 25px 'Droid Sans', Arial, sans-serif;
	text-align: center;
	color: #111;
	background-color: #ddd;
	background-image: -webkit-linear-gradient(top, #bbb, #eee); 
	background-image:    -moz-linear-gradient(top, #bbb, #eee);
	background-image:     -ms-linear-gradient(top, #bbb, #eee);
	background-image:      -o-linear-gradient(top, #bbb, #eee);
	border-top: 1px solid #fff;
	border-radius: 3px;
	box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.7);
	margin: 0 7px;
	padding: 10px 0;
	display: inline-block;
	position: relative;
}

#countdown #tiles > span:before{
	content:"";
	width: 100%;
	height: 13px;
	background: #111;
	display: block;
	padding: 0 3px;
	position: absolute;
	top: 41%; left: -3px;
	z-index: -1;
}

#countdown #tiles > span:after{
	content:"";
	width: 100%;
	height: 1px;
	background: #eee;
	border-top: 1px solid #333;
	display: block;
	position: absolute;
	top: 50%; left: 0;
}

#countdown .labels{
	width: 100%;
	height: 25px;
	text-align: center;
	position: absolute;
	bottom: 8px;
}

#countdown .labels li{
	width: 100px;
	font: bold 13px 'Droid Sans', Arial, sans-serif;
	color: #f47321;
	text-shadow: 1px 1px 0px #000;
	text-align: center;
  padding: 3px;
	display: inline;
}

    </style>
  </head>
  <body>
    <header>
      <div class="intro_container">
        <div class="row">
        <div class="intro_logo_container_div col-md-7">
          <div class="intro_logo_div">
              <a href="index.html">
            <img src="http://ekhayalogistics.com/img/ekhaya-logistcs-logo.png" alt="Ekhaya Logistics Logo|The easiest way to ship goods from India to Africa  and vice versa">
         </a> </div>
          <div class="intro_info">
             <h1 style="color:#e68600;">Ekhaya<span style="color:#871212;">Logistics</span></h1>
            <p style="color: #000; font-weight: bold;">Send it home, Thumela Ekhaya!</p>
          </div>
        </div>
     
        <div class="intro_contact_div col-md-5" style="font-size:99%;">
          <span class="pt-10"><a href="tel:+918010266351" class="contact-a">Call Us : +91 801 026 6351 </a> <span class="divider">|</span><a href="tel:+918010251955" class="contact-a"> +91 801 025 1955</a> <span class="divider">|</span><span> <a href="tel:+263774453652" class="contact-a">+263 77 445 3652</a></span></span>
          <span class="divider">|</span>   <span style="position: relative; bottom: 7px;"><a href="https://wa.me/918010266351?text=Hie%20Ekhaya%20Logistics,%20I%20want%20to%20Ship%20some%20 goods%20"><img src="http://ekhayalogistics.com/img/whatsapp.png" class="pt-2"></a></span>
        </div>
      </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-none" style=" background-color:#FFB145;">
       
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="package.html">Send Now</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login / Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faqs.html">faqs <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
      </header>
      <section class="banner">

      </section>

<div class="container mt-5 mb-5">
	<div class="row">
		<div class="">
			<h4>Latest  Updates</h4>
			<ul class="timeline">
        <?php
        $sql = mysqli_query($link, "SELECT * FROM announcements ORDER BY id DESC");
        if (mysqli_num_rows($sql)> 0)
        {
          while ($row = mysqli_fetch_assoc($sql))
          {

        ?>
				<li>
					<a target="_blank" href="#"><?php echo $row['subject'];?></a>
					<a href="#" class="float-right"><?php echo date('d F, Y', strtotime($row['date'])); ?></a>
					<p><?php echo $row['announcement'];?></p>
        </li>
          <?php }
        }else {?>
      
          <div class="alert-info">There are no announcement Yet!!</div>
          <?php  }
			?>
			</ul>
		</div>
	</div>
</div>

<div class="text-muted mt-5 mb-5 text-center small">by : <a class="text-muted" target="_blank" href="https://www.ekhayalogistics.com">Ekhaya Logistics | Admin</a></div>
<footer class="my-6" style="background-color:#FFB145;">
    <div class="container py-5">
        <div class="row py-3">
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">About</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="contact-us.html" class="text-muted">Contact Us</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">About Us</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Testimonials</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Announcements</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Help</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="text-muted">Payments</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Shipping</a></li>
                  
                </ul>
            </div>
           
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="login.html" class="text-muted">Login</a></li>
                    <li class="mb-2"><a href="login.html" class="text-muted">Register</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Sitemap</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Our Services</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Registered Office Address</h6>
                <p class="text-muted mb-4">5 SURVEY NUMBER 1/1/3, MAMTA NAGAR, LANE No1, OLD SANGVI PUNE- 411027 , MAHARASHTRA, INDIA.</p>
                <ul class="list-inline mt-4">
                    <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><img src="http://ekhayalogistics.com/img/twitter.png" alt="Ship Your goods To Africa from India| twitter account"></a></li>
                    <li class="list-inline-item"><a href="https://www.facebook.com/ekhayalogistics/" target="_blank" title="facebook"><img src="http://ekhayalogistics.com/img/facebook.png" alt="Ship Your goods To Africa from India| facebook account"></a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/company/ekhaya-logistics/" target="_blank" title="linkedin"><img src="http://ekhayalogistics.com/img/linkedin.png"></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><img src="http://ekhayalogistics.com/img/instagram.png"></a></li>
                    
                    <li class="list-inline-item"><a href="https://wa.me/918010266351" target="_blank" title="Whatsapp"><img src="http://ekhayalogistics.com/img/whatsapp1.png"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="p-0 m-0 b-0">
    <div class="py-2" style=" background-color:#e68600;">
        <div class="container text-center">
            <p class="text-muted mb-0 py-2">© <?php echo date('Y');?> Ekhaya Logistics All rights reserved.</p>
        </div>
    </div>
    <div class="clock-wrapper">
      <div id="countdown">
        <small>Our first Cargo will be going to Zim on 12/12/2020. Time Remaining</small>
        <div id='tiles'></div>
        <div class="labels">
          <li>Days</li>
          <li>Hours</li>
          <li>Mins</li>
          <li>Secs</li>
        </div>
      </div>
    </div>  
</footer>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <script>
          var fullDate = "12/18/2020 00:00:00";
          var target_date = new Date(fullDate) // set the countdown date
var days, hours, minutes, seconds; // variables for time units

var countdown = document.getElementById("tiles"); // get tag element

getCountdown();

setInterval(function () { getCountdown(); }, 1000);

function getCountdown(){

	// find the amount of "seconds" between now and target
	var current_date = new Date().getTime();
	var seconds_left = (target_date - current_date) / 1000;

	days = pad( parseInt(seconds_left / 86400) );
	seconds_left = seconds_left % 86400;
		 
	hours = pad( parseInt(seconds_left / 3600) );
	seconds_left = seconds_left % 3600;
		  
	minutes = pad( parseInt(seconds_left / 60) );
	seconds = pad( parseInt( seconds_left % 60 ) );

	// format countdown string + set tag value
	if ((target_date - current_date) < 0)
	{
	    days = pad(0);
	    hours = pad(0);
	    minutes = pad(0);
	    seconds = pad(0);
	}
	countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>"; 
}

function pad(n) {
	return (n < 10 ? '0' : '') + n;
}


    </script>
</body>
</html>