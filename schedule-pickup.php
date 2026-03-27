<?php
include("navbar.php");
?>
<main class="body-bg">


    <div class="container my-lg-5 bg-white">
        <div class="schedule-pickup-form-container">
            <h2 class="color-main-2">Schedule pickup</h2>
            <p class="pb-3">Fill the form below to schedule for a pickup from your doorstep</p>
            <h4 class="color-main pb-2">Pickup Details</h4>
            <small class="text-danger text-sm">All fields marked * are required</small>
            <form action="">
                <div class="pickup-details schedule-pickup" id="pickup-details">


                    <div class="row">
                        <div class="col-md-6">
                            <!-- <h4 class="color-main">Pickup Details</h4> -->
                            <div class="form-group">
                                <label for="">Pincode <span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" class="form-control no-radius">
                            </div>
                            <div class="form-group">
                                <label for="">State <span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" class="form-control  no-radius">
                            </div>
                            <div class="form-group">
                                <label for="">City <span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" class="form-control  no-radius">
                            </div>
                            <div class="form-group">
                                <label for="">Address <span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" placeholder="House No 1, ABC society, " class="form-control  no-radius">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name <span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" class="form-control no-radius">
                            </div>
                            <div class="form-group">
                                <label for="">Mobile No. <span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" class="form-control no-radius">
                            </div>
                            <div class="form-group">
                                <label for="">Altenative Phone </label>
                                <input type="text" placeholder="optional" class="form-control no-radius">
                            </div>
                            <div class="form-group">
                                <label for="">Email </label>
                                <input type="email" placeholder="optional" class="form-control no-radius">
                            </div>
                        </div>
                    </div>
                    <div class="text-right py-5">
                        <button type="button" class="btn btn-main">Next</button>
                    </div>
                </div>
                <div class="package-details schedule-pickup" id="packages-details">
                    <h4 class="color-main">Package Details</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Package Weight <span class="text-danger font-weight-bold">*</span></label>
                                <input type="number" step=any class="form-control no-radius">
                            </div>
                            <div class="form-group">
                                <label for="">Package dimensions </label>
                                <div class="form-row">
                                    <div class="col-4">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">L</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Length" aria-label="Length" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon2">W</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Width" aria-label="Width" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">H</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="height" aria-label="Height" aria-describedby="basic-addon3">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Contents <span class="text-danger font-weight-bold">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">No. parcels <span class="text-danger font-weight-bold">*</span></label>
                                <input type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="text-right py-5">
                    <button type="button" class="btn btn-light btn-main-light">Back</button> <button type="button" class="btn btn-main">Next</button>
                </div>
                </div>


                <div class="drop-details schedule-pickup" id="drop-details">
                    <h4 class="color-main">Drop Details</h4>

                    <div class="row">
                        <div class="col-md-6">


                            <div class="form-group">
                                <label for="">Shipment type <span class="text-danger font-weight-bold">*</span></label>
                                <select class="form-control no-radius">
                                    <option value="" disabled selected>Select Shipment type</option>
                                    <option value="International">International</option>
                                    <option value="Domestic">Domestic</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="">Pincode <span class="text-danger font-weight-bold">*</span></label>
                            <input type="text" class="form-control no-radius">
                       </div>
                        <div class="form-group">
                            <label for="">State/Province <span class="text-danger font-weight-bold">*</span></label>
                            <input type="text" class="form-control  no-radius">
                        </div>
                        <div class="form-group">
                            <label for="">City <span class="text-danger font-weight-bold">*</span></label>
                            <input type="text" class="form-control  no-radius">
                        </div>
                        <div class="form-group">
                            <label for="">Address <span class="text-danger font-weight-bold">*</span></label>
                            <input type="text" placeholder="House No 1, ABC society, " class="form-control  no-radius">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Name <span class="text-danger font-weight-bold">*</span></label>
                            <input type="text" class="form-control no-radius">
                        </div>
                        <div class="form-group">
                            <label for="">Mobile No. <span class="text-danger font-weight-bold">*</span></label>
                            <input type="text" class="form-control no-radius">
                        </div>
                        <div class="form-group">
                            <label for="">Altenative Phone </label>
                            <input type="text" placeholder="optional" class="form-control no-radius">
                        </div>
                        <div class="form-group">
                            <label for="">Email </label>
                            <input type="email" placeholder="optional" class="form-control no-radius">
                        </div>
                    </div>
                </div>
                <div class="text-right py-5">
                    <button type="button" class="btn btn-light  btn-main-light">Back</button> <button type="button" class="btn btn-main">Next</button>
                </div>
        </div>
        </form>
    </div>
    </div>

</main>

<?php
include("footer.php");
?>