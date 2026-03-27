<?php
include("navbar.php");
?>
<link rel="stylesheet" href="procurement.css">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-none">
        <li class="breadcrumb-item"><a href="./index">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">LimitLess Energy Procurement</li>
    </ol>

</nav>

<div class="container-fluid py-5">
    <div class="limitless-Energy-procurement">
    </div>

    <div class="row">
        <div class=" col-md-6">
            <img src="img/procurement.jpg" alt="ORDER YOUR FUEL WITH LIMITLESS " class="img-fluid">
        </div>
        <div class="col-md-6">


            <h2 class=" py-3 color-main">procurement</h2>
            <p>
                We assist clients in sourcing high-quality fuel and related products from trusted suppliers. 
                Our procurement services are focused on transparency, cost efficiency, and ensuring that clients receive the best value in the market.
        
        </p>


        </div>
    </div>

    <div class="procurement-container py-5">


        <div class="procurement-form">
            <form action="">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Full Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Phone No.</label>
                        <div class="row">
                            <div class="col-3">
                                <input type="text" placeholder="+1" required class="form-control">
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control">
                            </div>

                        </div>

                    </div>

                </div>
                <div class="form-row my-3">
                    <div class="form-group col-md-6">
                        <label for="">key product.</label>
                        <input type="text" class="form-control" placeholder="key product">
                    </div>
                    <div class="form-group col-md-6">
                        <label for=""></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class=" form-group col-md-6">
                        <label for=""></label>

                    </div>
                    <div class="form-group col-md-6 pharmacist d-none">
                        <label for=""></label>
                        <input type="" class="form-control-file">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="" id="" class="form-control"></textarea>
                </div>
                <button class="btn btn-main" type="submit">submit</button>
            </form>
        </div>
    </div>
</div>

<?php

include("footer.php")
?>