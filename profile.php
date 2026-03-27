<?php
session_start();
include('connection.php');
if (!isset($_SESSION['email']) && !isset($_COOKIE['email'])){
    if(isset($_COOKIE['email'])) {
        $_SESSION['email'] =$_COOKIE['email'];
    }
 header('Location:login.html');
 die('You are Not logged In or Session has expired');
}  else{
    $user = $_SESSION['email'];
    $user_sql = "SELECT * FROM users1 WHERE email='$user'";
    $sql_result = mysqli_query($link,$user_sql);
    if ($sql_result){
        while($row = mysqli_fetch_assoc($sql_result))
        {
            $name = $row['name'];

        }
    }
    $fetch_orders = "SELECT * FROM packages WHERE sender_email='$user'";
    $fetch_orders_ex = mysqli_query($link, $fetch_orders);
  


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="progress.css">
    <title>User Portal</title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
.one-sode {
    background: #EAEDF4;
    height: 100%;
}
#track-progressbar{
    height: 600px!important;
}
.card {
    width: 300px;
    border: none;
    border-radius: 15px;
    background-color: white;
}

.media {
    padding: 30px 30px 15px
}

span.text-muted {
    font-size: 12px
}

p.pt-1 {
    font-size: 13px;
    color: #8686AC;
    cursor: pointer
}

.fas {
    color: #ABB0B4
}

.fa-angle-right {
    color: #E6E6E6
}

span {
    font-size: 14px
}

.justify-content-between {
    height: 50px;
    margin-bottom: 10px
}

.justify-content-between:hover {
    background-color: #EFF3FF;
    color: #7175B5;
    cursor: pointer
}

.justify-content-between:hover .fas {
    color: #7175B5
}

.justify-content-between.sample {
    background-color: #EFF3FF;
    color: #7175B5
}

.preview {
    color: #7175B5
} 
    </style>
  </head>
  
  <body>
   
    <header class="mb-2">
        <div class="intro_container">
        <div class="row">
        <div class="intro_logo_container_div col-md-7">
          <div class="intro_logo_div">
              <a href="index.html">
            <img src="img/ekhaya-logistcs-logo.png" alt="Ekhaya Logistics Logo|The easiest way to ship goods from India to Zimbabwe  and vice versa">
         </a> </div>
          <div class="intro_info">
             <h1 style="color:#e68600;">Ekhaya<span style="color:#871212;">Logistics</span></h1>
            <p style="color: #000; font-weight: bold;">Send it home, Thumela Ekhaya!</p>
          </div>
        </div>
     
        <div class="intro_contact_div col-md-5" style="font-size:99%;">
          <span class="pt-10"><a href="tel:+918010266351" class="contact-a">Call Us : +91 801 026 6351 </a> <span class="divider">|</span><a href="tel:+918010251955" class="contact-a"> +91 801 025 1955</a> <span class="divider">|</span><span> <a href="tel:+263774453652" class="contact-a">+263 77 445 3652</a></span></span>
          <span class="divider">|</span>   <span style="position: relative; bottom: 7px;"><a href="https://wa.me/918010266351?text=Hie%20Ekhaya%20Logistics,%20I%20want%20to%20Ship%20some%20 goods%20"><img src="img/whatsapp.png" class="pt-2"></a></span>
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
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="package.html">Send Now</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="profile.php">My Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login / Register</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="/faqs">FAQs <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="row">
        <div class="col-md-6 one-sode">

     
  <div class="container d-flex justify-content-center">
    <div class="card mt-5 pb-3">
        <div class="media"> <img src="img/user.png" class="mr-3" height="80">
            <div class="media-body">
                <h5 class="mt-1 mb-0"><?php echo $name; ?></h5> <span class="text-muted"><?php echo $user;?></span>
                <p class="pt-1">Edit profile</p>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center p-3 mx-3">
            <div class="d-flex flex-row align-items-center"><i class="fa fa-suitcase"></i>
                <div class="d-flex flex-row align-items-start ml-3"><span>Upcoming trips</span></div>
            </div>
            <div class="d-flex flex-row align-items-center mt-2"><i class="fa fa-angle-right"></i></div>
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center p-3 mx-3 sample">
            <div class="d-flex flex-row align-items-center"><i class="fa fa-bell preview"></i>
                <div class="d-flex flex-row align-items-start ml-3"><span>Your Orders</span></div>
            </div>
            <div class="d-flex flex-row align-items-center mt-2"><i class="fa fa-angle-right preview"></i></div>
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center p-3 mx-3">
            <div class="d-flex flex-row align-items-center"><i class="fa fa-money-bill-wave-alt"></i>
                <div class="d-flex flex-row align-items-start ml-3"><span>Payment history</span></div>
            </div>
            <div class="d-flex flex-row align-items-center mt-2"><i class="fa fa-angle-right"></i></div>
        </div>
    </div>
</div>
</div>
<div class="col-md-6 mt-6">
    <h3 class="text-center">Your Orders</h3>
<?php 
if ($fetch_orders_ex)
{
    if (mysqli_num_rows($fetch_orders_ex)<1){
        ?>
        <div class="alert alert-info"><h5>Hmmm!! It seems like You haven't shipped anything yet. <a href="package.html">Click here</a> to get a tracking id </h5>

        <smalll>Please make sure you are logged with the email that was used during shipping entry</smalll>
        </div><?php
    }else {
        while ($rw = mysqli_fetch_assoc($fetch_orders_ex)){
            $tracking_id = $rw['tracking_id'];
            $processed = $rw['processed'];
            $shipped = $rw['shipped'];
            $in_route = $rw['in_route'];
            $arrived = $row['arrived'];
            $receiver = $rw['receiver_name'];
            $date_requested = $rw['date_requested'];
            $date = strtotime($date_requested);

 $newdate = date('D d, M Y H:i:s',strtotime("+3 day",$date));
        ?>
    <div class="container px-1 px-md-4  mx-auto" id="track-progressbar" >
      
        <div class="card" style="width: 100%;">
            <div class="row d-flex justify-content-between px-3 top">
                <div class="d-flex">
                    <h5>TRACK ID <span class="text-primary font-weight-bold">#<?php echo $tracking_id; ?></span></h5>
                </div>
                <div class="d-flex flex-column text-sm-right">
                    <p class="mb-0">Expected Arrival <span><strong><?php echo $newdate; ?> </strong></span></p>
                    <p>Receiver <span class="font-weight-bold"><?php echo $receiver; ?></span></p>
                </div>
            </div> 
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <ul id="progressbar" class="text-center">
                        <li class="<?php echo $processed;?> step0"></li>
                        <li class="<?php echo $shipped;?> step0"></li>
                        <li class="<?php echo $in_route;?> step0"></li>
                        <li class="<?php echo $arrived;?> step0"></li>
                    </ul>
                </div>
             
            </div>
            <div class="row justify-content-between top">
                <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Package<br>Processed</p>
                    </div>
                </div>
                <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Package<br>Shipped</p>
                    </div>
                </div>
                <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Package<br>Left Airport</p>
                    </div>
                </div>
                <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Package<br>Arrived</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
       }   }

} else{
    echo mysqli_error($link);
}
?>  
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f57adcc4704467e89ed3261/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
 
  </body>
</html>

<?php }?>




