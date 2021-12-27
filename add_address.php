<?php include("header.php"); ?>

<div class="container">
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#address">Add New Address</button>
    <div id="address" class="collapse">
        <div class="row">
            <div class="col-md-8 mb-4">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Biling details</h5>
                    </div>
                    <div class="card-body">

                        <form id="add_user_address" method="post">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-outline">
                                        <label class="form-label" for="">First name</label>
                                        <input type="text" id="fname" class="form-control" required />

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Last name</label>
                                        <input type="text" id="lname" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label class="form-label" for="">Phone</label>

                                    <input type="tel" id="phone" required id="form6Example6" maxlength="10" minlength="10" class="form-control" />
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="">Email</label>
                                    <input type="email" id="email" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <label class="form-label" for="">Address</label>
                                    <input type="text" class="form-control" id="uaddress" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group col-md-9">
                                    <label for="landmark">Landmark</label>
                                    <input type="text" class="form-control" id="landmark" required>
                                </div>


                                <div class="form-group col-md-3">
                                    <label for="pincode">Pincode/ZIP</label>
                                    <input type="text" class="form-control" id="pincode" maxlength="6" minlength="6" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group col-md-12">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group col-md-6">
                                    <label for="state">State</label>
                                    <select class="form-control" id="state" required>
                                        <option value="">-- Select State --</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="country">Country</label>
                                    <select class="form-control" id="country" required>
                                        <option value="">-- Select Country --</option>
                                        <option value="India">India</option>
                                    </select>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Add Address" id="btnProceed" style="line-height: 0;">
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php include("footer.php"); ?>