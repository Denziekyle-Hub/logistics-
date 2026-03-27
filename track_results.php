<?php
require("functions.inc.php");
if (isset($_GET["tracking_id"]) && isset($_GET["eksky"])) {
    include("navbar.php");

    $tracking_id = escape($_GET["tracking_id"]);




?>


    <main class="tracking_main">
        <section class="tracking_details py-4">


            <div class="container">
                <h2 class="section-title">Tracking details- <?php echo $tracking_id; ?></h2>
                <?php
                $package = mysqli_query($link, "SELECT * FROM packages WHERE tracking_id='$tracking_id' LIMIT 1");

                if (mysqli_num_rows($package) > 0) {
                    $pack = mysqli_fetch_assoc($package);

                    $master_id = $pack["master_shipment_number"];

                    $current_status = mysqli_query($link, "SELECT * FROM shipping_updates WHERE master_id='$master_id' ORDER BY date DESC LIMIT 1");
                    if (mysqli_num_rows($current_status) > 0) {
                        $curr = mysqli_fetch_assoc($current_status);
                    }
                ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="status-div py-4 px-5">
                                <p class="color-main">Tracking status</p>
                                <?php
                                if ($pack["delivered"] == "active") {
                                ?>
                                    <h2 class="pb-3 text-success"><i class="icofont-check-circled fa-x"></i> Delivered</h2>
                                    <?php } else {
                                    if (strtolower($curr["status"]) == 'out for delivery' || strtolower($curr["status"]) == 'ready for collection') {
                                    ?>
                                        <h2 class="pb-3 text-success"><i class="icofont-fast-delivery fa-x"></i> <?php echo $curr["status"] ?></h2>

                                    <?php
                                    } else {

                                    ?>
                                        <h2 class="pb-3 text-info"><i class="icofont-box fa-x"></i> <?php echo $curr["status"] ?></h2>
                                <?php

                                    }
                                }


                                ?>


                                <p class="pb-3"><?php echo $curr["city"] . ', ' . $curr["country_code"] . ' - ' . $curr["remark"]; ?></p>



                                <p class="color-main">Expected arrival</p>
                                <h2>Fri 06 Jan 2022 <?php echo date("D d M Y", strtotime($pack["processed_time"] . '+ 10 days')); ?></h2>

                            </div>
                            <div class="tracking-activity bg-white my-3 p-3">
                                <h3 class="pb-2 color-main">Tracking updates</h3>
                                <a class="btn btn-light" data-toggle="collapse" href="#activities" role="button" aria-expanded="false" aria-controls="activities">View shipment updates <span class="pl-2 down_arrow"> <i class="fa fa-angle-down arrows"></i></span> <span class="pl-2 up_arrow d-none"> <i class="fa fa-angle-up arrows"></i></span></a>
                                <div class="activities collapse multi-collapse" id="activities">
                                    <?php
                                    $updates = mysqli_query($link, "SELECT * FROM shipping_updates WHERE master_id='$master_id' ORDER BY id DESC");

                                    if (mysqli_num_rows($updates) > 0) {
                                        while ($update = mysqli_fetch_assoc($updates)) { ?>
                                            <div class="activity my-5">
                                                <h5><?php echo date("d, M Y", strtotime($update["date"])).' - '.$update["city"].', '.$update["country_code"]; ?></h5>
                                                <p> <span class="activity_time"><?php echo date("H:i", strtotime($update["date"])); ?> </span> <span><?php echo $update["status"]; ?> -<?php echo $update["remark"];  ?></span></p>
                                            </div>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="alert alert-info">
                                            <h3>No updates yet</h3>
                                            <p>Sorry we dont have updates as of now for this tracking id please check again later</p>
                                        </div>
                                    <?php      }
                                    ?>


                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="shipment_facts card bg-white p-3" id="shipment_facts">
                                <h3 class="pb-2 color-main">Shipment details</h3>
                                <p>Deliver to: <span class="font-weight-bold"><?php echo $pack["receiver_name"];?></span></p>
                                <p>Destination: <span class="font-weight-bold"><?php echo $pack["shipped_to"];?></span></p>
                                <p>Weight: <?php echo $pack["weight1"].'Kg'; ?></p>
                                <p>No. Of parcels: <?php echo $pack["quantity"]; ?></p>
                                <p>Service: Ekhaya International Shipment</p>

                            </div>

                        </div>
                    </div>
                <?php } else {
                ?>
                    <div class="alert alert-danger mb-4" role="alert">
                        <h4><i class="icofont-warning fa-x"></i> Invalid Tracking Id</h4>
                        <p>Please enter a valid tracking id!, check your tracking id and try again</p>
                    </div>

                    <h3>Enter Correct Details</h3>
                    <form class="form-inline" method="GET">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" name="tracking_id" placeholder="Tracking Id" class="form-control form-control-lg no-border-radius">
                        </div>
                        <input type="hidden" name="eksky" value="<?php echo md5(time()) ?>">
                        <button class="btn btn-success mb-2">Track package</button>
                    </form>

                <?php } ?>

            </div>
        </section>
    </main>






<?php

    include("footer.php");
} else {
    header("Location:index.html");
}
?>