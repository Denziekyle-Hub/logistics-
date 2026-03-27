<?php
include("navbar.php");
?>

<main class="tracking_main">
    <div class="container">
        <div class="update-form-container p-4 shadow">
            <h3 class="py-4">Update tracking</h3>
            <form action="track_update_process.php" method="POST">
                <div class="form-row">


                    <div class="form-group col-lg-6">
                        <label class="form-label">
                            Date
                        </label>
                        <input type="datetime-local" name="date" required class="form-control form-control-lg no-border-radius">
                    </div>

                    <div class="form-group col-lg-6">
                        <label class="form-label">
                            Master shipment
                        </label>
                        <input type="text" name="master_id" required class="form-control form-control-lg no-border-radius">
                    </div>

                    <div class="form-group col-lg-6">
                        <label class="form-label">
                            City
                        </label>
                        <input type="text" list="cities" name="city" required class="form-control form-control-lg no-border-radius">
                        <datalist id="cities">
                            <option value="Pune">Pune</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Dubai">Dubai</option>
                            <option value="Johannersburg">Johannersburg</option>
                            <option value="Harare">Harare</option>
                            <option value="Windhoek">Windhoek</option>
                            <option value="Lilongwe">Lilongwe</option>
                        </datalist>
                    </div>

                    <div class="form-group col-lg-6">
                        <label class="form-label">
                           Country Code
                        </label>
                        <input type="text" list="country-code" required name="country_code" class="form-control form-control-lg no-border-radius">
                        <datalist id="country-code">
                            <option value="IN">IN</option>
                            <option value="AE">AE</option>
                            <option value="ZA">ZA</option>
                            <option value="ZW">ZW</option>
                            <option value="NA">NA</option>
                            <option value="MW">MW</option>
                            <option value="BW">BW</option>
                        </datalist>
                    </div>


                    <div class="form-group col-lg-6">
                        <label class="form-label">
                            Status
                        </label>
                        <input type="text" name="status" required list="status-list" class="form-control form-control-lg no-border-radius">
                        <datalist id="status-list">
                            <option value="Packaged">Packaged</option>
                            <option value="inTransit">inTransit</option>
                            <option value="Pending">Pending</option>
                            <option value="Ready for Collection">Ready for Collection</option>
                            <option value="Out for Delivery">Out for Delivery</option>
                            <option value="Delivered">Delivered</option>
                        </datalist>
                    </div>
                    <input type="hidden" name="update_tracking" value="admin">
                    <div class="form-group col-lg-6">


                        <label class="form-label">
                            Remark
                        </label>
                        <input type="text" name="remark" required list="remarks" class="form-control form-control-lg no-border-radius">
                        <datalist id="remarks">
                            <option value="Parcel Packaged at Origin Facility">Parcel Packaged at Origin Facility</option>
                            <option value="Parcel left for Mumbai(Clearance house)">Parcel left for Mumbai(Clearance house)</option>
                            <option value="Parcel under customs clearance in India">Parcel under customs clearance in India</option>
                            <option value="Parcel released for export and left for chhatrapati shivaji international airport(BOM)">Parcel released for export and left for chhatrapati shivaji international airport(BOM)</option>
                            <option value="Parcel held by Indian Customs Clearance pending extra documentation">Parcel held by Indian Customs Clearance pending extra documentation</option>
                            <option value="Parcel in Local Facility">Parcel in Local Facility</option>
                            <option value="Parcel inTransit">Parcel inTransit</option>
                            <option value="Parcel connected to final Destination">Parcel connected to final Destination</option>
                            <option value="Parcel Arrived in Destination and pending customs clearance">Parcel Arrived in Destination and pending customs clearance</option>
                            <option value="Our Executive is out to deliver your Parcel">Our Executive is out to deliver your Parcel</option>
                            <option value="Your parcel is ready for Collection our office">Your parcel is ready for Collection our office</option>
                        </datalist>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="form-label">Additional info/ Announcement</label>
                    <textarea  name="add_info" class="form-control form-control-lg no-border-radius"></textarea>
                </div>

                <button class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</main>

<?php
include("footer.php");
?>