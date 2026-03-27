<?php
include('connection.php');

if ($_POST['tracking_id'] =='') {



echo '
<div class="alert alert-danger"> Please enter a tracking id</div>
';
}else {
    $track_id = mysqli_real_escape_string($link, $_POST['tracking_id']);
$sql = "SELECT * FROM packages WHERE tracking_id ='$track_id' LIMIT 1";
$res = mysqli_query($link,$sql);
 if (mysqli_num_rows($res)>0) {
 if ($res){
     while($row = mysqli_fetch_assoc($res))
     {
        $sender_name = $row['sender_name'];
         $receiver_name = $row['receiver_name'];
         $date_requested = $row['date_requested'];
         $description = $row['description'];
         $address = $row['shipped_to'];
         $dest_country = $row['shipped_to'];
         $sender_phone = $row['sender_phone'];
         $receiver_phone = $row['receiver_phone'];
         $weight = $row['weight1'];
         $quantity = $row['quantity'];
         $date = $row['shipped_time'];
         $qrcode = $row['qrcode'];
         $date_shipped = date('D, j M Y H:i', strtotime($date));
         if ($date =='0000-00-00 00:00:00')
         {
             $date_shipped = "Not Yet";
             $date = date('Y-m-d H:i:S');
         }
         $processed = $row['processed'];
         $shipped = $row['shipped'];
         $accepted = $row['accepted'];
         $clearance_india = $row['clearance_india'];
         $clearance_zim = $row['clearance_zim'];
         $ready = $row['ready'];
         $delivered = $row['delivered'];
         $arrived = $row['arrived'];
        $est1 = date('D, j M, Y',strtotime( "+10 days", strtotime($date)));
        
         $est = date('d-m Y', strtotime( "+10 days", strtotime($date)));
         
     }
 
 
 $date = strtotime(date('d-m-Y H:i:s'));

 $newdate = date('D d, M Y H:i:s',strtotime("+1 day",$date));

?>
<div class="card" >
            <div class="row d-flex justify-content-between px-3 top">
                <div>
                    <h5>ORDER <span class="text-primary font-weight-bold">#<?php echo $track_id; ?></span></h5>
                    <?php if ($ready == "active")
                    {
                        if(strpos(strtolower($address), "zimbabwe") !== false)
                        {
                        ?>
                        <p>Status: <span class="badge badge-success">Ready for collection</span></p>
                        <?php } else 
                        {
                            ?>
                            <p>Status: <span class="badge badge-success">Out for delivery</span></p>
                            
                 <?php } }else { ?>
                  <p>Status: <span class="badge badge-success">In Transit</span></p>
                 <?php } ?>
                     
                </div>
                <div class="d-flex flex-column text-sm-right">
                    <p class="mb-0">Expected Arrival: <strong> <span><?php echo $est1; ?></span> </strong></p>
                    <p>To Delivered to: <span class="font-weight-bold"><?php echo $receiver_name; ?></span></p>
                   
                </div>
            </div> <!-- Add class 'active' to progress -->
            <div class="info-progress-container">
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <ul id="progressbar" class="text-center">
                        <li class="<?php echo $processed;?> step0"></li>
                        <p class="p1">Arrived at Ekhaya Logistics Hub, Pune</p>
                        <p class="">Parcel Left Pune Hub to I.G.I Airpot, Delhi</p>
                        <li class="<?php echo $accepted;?> step0"></li>
                        <p class="">Arrived at I.G.I Airpot, Delhi</p>
                        
                        <li class="<?php echo $clearance_india;?> step0"></li>
                         <p class="">Left I.G.I Airport, Delhi</p>
                        <li class="<?php echo $shipped;  ?> step0"></li>
                          <p class="">Arrived in Dubai</p>
                        <li class="<?php echo $arrived;?> step0"></li>
                        <p>Arrived in <?php echo $dest_country;?></p>
                        <li class="<?php echo $clearance_zim;?> step0"></li>
                        <p>Package out for delivery</p>
                        <li class="<?php echo $ready;?> step0"></li>
                        
                        <p>Package  delivered, Thank you for choosing Ekhaya Logistics</p>
                        <li class="<?php echo $delivered;?> step0"></li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-between  top1">
               
                   
                        <p class="">Package<br>Arrived at Ekhaya Logistics Hub, Pune</p>
                 
              
                  
                        <p class="">Package<br>Left Pune Hub to I.G.I Airpot, Delhi</p>
                    
               
                        <p class="">Arrived at I.G.I Airpot, Delhi</p>
                   
               
                        <p class="">Package<br>Left I.G.I Airport, Delhi</p>
                    
                        <p class="">Package<br>Arrived in Dubai</p>
                        
                        <p>Arrived in <?php echo $dest_country;?></p>
                        
                        <p>Package<br>out for delivery </p>
                        
                        <p>Package <br> delivered, Thank you for choosing Ekhaya Logistics</p>
                        
                    
                </div>
                </div>
            </div>
<?php
}
 }
 else {
  echo '<div class="alert alert-danger">That Tracking Id was not found</div>';
 }
}
