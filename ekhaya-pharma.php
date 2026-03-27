<?php
include("navbar.php");
?>


<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-none">
        <li class="breadcrumb-item"><a href="./index">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Fuel Supply Services</li>
    </ol>
</nav>





<div class="container-fluid py-5">
    <div class="ekhaya-pharma-container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/ekhaya-pharma.jpg" alt="Limitless Logistics Ships medication to Africa" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2 class="py-3 color-main">Fuel Supply Services</h2>
                <p>
                    Bulk Petrol Supply Provision of petrol in large quantities for commercial and industrial clients, available in multiple currencies and delivered nationwide. 
                    Bulk Diesel SupplyReliable diesel distribution tailored for businesses requiring consistent fuel availability across Zimbabwe. 
                </p>
                <p>Limitless Energy Logistics have shipped medication like Cancer Medication, Kidney transplant treatment,
                    Chemotherapy, general medication</p>
                <p>We are not limited to only medication but we also ship phamarceteucal equipments, surgical
                    consumables, test kits[COVID-19, HIV, Pregnancy etc], Lab equipments & machinery</p>
            </div>
        </div>

        <div class="ekhaya-pharma-enquiry-container py-5 ">
            <div class="row">
                <div class="col-md-6 shadow p-4 mb-5">


                    <h2 class="color-main-2">Enquire now!</h2>
                    <p>Fill the form below to enquire, we will get back to you soon.</p>
                    <div class="ekhaya-pharma-form ">
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
                                    <label for="">I am a</label>
                                    <select type="text" class="form-control">
                                        <option value="Patient">Patient</option>
                                        <option value="Phamarcist/Phamarcy owner">Phamarcist/Phamarcy owner</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 patient">
                                    <label for="">Upload prescription(if any)</label>
                                    <input type="file" class="form-control-file">
                                </div>
                                <div class="form-group col-md-6 pharmacist d-none">
                                    <label for="">Upload drug list</label>
                                    <input type="file" class="form-control-file">
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
                <div class="col-md-6 shadow p-4 ">
                    <h2 class="color-main-2 pb-4">Ekhaya Pharma Frequently Asked Questions</h2>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <span class="">How to Buy Medication in India?</span>
                                    <span class="float-right">
                                        <button class="btn bg-white faqs-btn rounded-50 font-weight-bold"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            +
                                        </button>
                                    </span>

                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <strong> Logistics will buy medication on your behalf, so you need to do is send
                                        your enquiry or prescription. </strong>India supplies medication and test kits
                                    to many countries across the world.
                                    India exports over US$2.4 billion worth of effecient and trustest drugs and
                                    pharmaceteucals.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <span class="">What are the required documents for me to buy medication from
                                        India?</span>
                                    <span class="float-right">
                                        <button class="btn bg-white faqs-btn rounded-50 font-weight-bold collapsed"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            +
                                        </button>
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <strong>If you let Ekhaya Logistics buy the medication on your behalf, there are No
                                        documents required.</strong> We strongly advice that you consult us before
                                    purchasing any medication because the documents depend on the type of medication
                                    being exported.
                                    If you are shippping medication to Zimbabwe you can opt for our comprehensive
                                    charges which covers even customs in Zimbabwe.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <span class="">How many days does it take to ship medication to Africa?</span>
                                    <span class="float-right">
                                        <button class="btn bg-white faqs-btn rounded-50 font-weight-bold collapsed"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            +
                                        </button>
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <strong>Shipping drugs and phamarceteucal from India takes 8 to 10 days from day of
                                        dispatch.</strong>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

















<?php

include("footer.php");
?>