<x-default-layout>
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">Edit Coupon</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="{{route('superadmin.coupon.all')}}" class="btn btn-primary">Back to Coupons</a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-end">
                    {{-- Breadcrumbs (Start) --}}
                    <ul class="breadcrumb">
                        <li><a href="{{route("superadmin.coupon.all")}}">Coupons</a></li>
                        <li><i class="fas fa-chevron-right"></i></li>
                        <li class="active"><a href="{{route("superadmin.coupon.edit")}}">Edit Coupon</a></li>
                    </ul>
                    {{-- Breadcrumbs (End) --}}
                </div>
            </div>
        </div>
    </div>
    {{-- First Section Ends --}}

    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="card card-flush shadow-sm mt-5">
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="col-lg-6 col-md-4 col-12">
                                <h4 class="text-dark fw-bold">Below are the details to edit Coupon</h4>
                            </div>
                            <div class="col-lg-6 col-md-4 col-12">
                                <div class="float-end">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input body-toggle" type="checkbox" role="switch" id="flexSwitchCheckDefault" onchange="toggleSwitch()" checked="">
                                        <b><label class="form-check-label text-dark" for="flexSwitchCheckDefault">Active Status</label></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title" class="required form-label">Coupon Title</label><br>
                                    <input type="text" class="form-control form-control-solid" name="title" value="CODSST7556"
                                        id="title" aria-describedby="emailHelp" placeholder="Enter Coupon title">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="coupon_code" class="required form-label">Coupon Code</label><br>
                                    <input type="text" class="form-control form-control-solid" name="coupon_code"
                                        id="coupon_code" value="ncjdscnsdjcshsh" aria-describedby="emailHelp"
                                        placeholder="Generate Coupon Code">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">&nbsp;</label>
                                    <button type="button" class="btn btn-primary" style="margin-top: 28px;"
                                        onclick="generateCode()">Generate Code</button>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <label for="maximum_shift" class="required form-label">Discount Type</label><br>
                                    <select class="form-select form-select-solid" id="maximum_shift"
                                        name="maximum_shift" aria-label="Floating label select example"
                                        onchange="toggleDiscountSection()">
                                        <option value="Zero">Please Select Discount Type</option>
                                        <option value="Amount">Amount</option>
                                        <option selected value="Percentage">Percentage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5" id="amountSection" style="display: none;">
                                <div class="form-group">
                                    <label for="discount" class="required form-label">Discount Amount</label><br>
                                    <input type="text" class="form-control form-control-solid" name="discount"
                                        id="discount" value="20" aria-describedby="emailHelp" placeholder="Enter Discount Amount">
                                </div>
                            </div>
                            <div id="percentageSection" style="display: none;" class="col-md-6 mt-5">
                                <div class="form-group">
                                    <label for="discount" class="required form-label">Discount
                                        Percentage</label><br>
                                    <input type="text" class="form-control form-control-solid" name="discount"
                                        id="discount" value="20" aria-describedby="emailHelp"
                                        placeholder="Enter Discount Percentage">
                                </div>
                            </div>

                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <label for="date" class="required form-label">Expires At</label><br>
                                    <input type="text" class="form-control form-control-solid" name="expire_at"
                                        id="date" value="26/08/2023" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <label for="subscription_type" class="required form-label">Subscription
                                    Type</label><br>
                                <span id="free_trial_help" class="form-text text-muted">Select Subscription type for
                                    which the Coupon Code will be applicable</span>
                                <select class="form-select form-select form-select-solid" id="subscription_type"
                                    name="subscription_type" aria-label="Floating label select example">
                                    <option value="No">Please Select the Subscription Type</option>
                                    <option selected value="Basic">Basic</option>
                                    <option value="Premium">Premium</option>
                                    <option value="Advance">Advance</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card card-flush shadow-sm mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-end">
                        <button type="submit" class="submit_btn">Save</button>
                    </div>

                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    <!--end::Tables widget 16-->




</x-default-layout>
<script>
    $( document ).ready(function() {
        // for calender
        $("#date").flatpickr({
            dateFormat: "d-m-Y",
        });
});
</script>
<script>
    function toggleDiscountSection() {
        var selectedValue = document.getElementById("maximum_shift").value;
        var amountSection = document.getElementById("amountSection");
        var percentageSection = document.getElementById("percentageSection");

        if (selectedValue === "Amount") {
            amountSection.style.display = "block";
            percentageSection.style.display = "none";
        } else if (selectedValue === "Percentage") {
            amountSection.style.display = "none";
            percentageSection.style.display = "block";
        } else if (selectedValue === "Zero") {
            amountSection.style.display = "none";
            percentageSection.style.display = "none";
        }
    }
</script>
<script>
    function generateCode() {
        // Generate random alphanumeric code
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var codeLength = 10;
        var randomCode = '';
        for (var i = 0; i < codeLength; i++) {
            randomCode += characters.charAt(Math.floor(Math.random() * characters.length));
        }

        // Fill the input tag with the generated code
        document.getElementById('coupon_code').value = randomCode;
    }
</script>
<script>
    function toggleSwitch() {
        // var checkboxes = document.getElementsByClassName("form-check-input");
        var checkboxes = document.querySelectorAll(".body-toggle");
        for (var i = 0; i < checkboxes.length; i++) {
            var checkbox = checkboxes[i];
            var label = checkbox.nextElementSibling;

            if (checkbox.checked) {
                label.textContent = "Active Status";
            } else {
                label.textContent = "Inactive Status";
            }
        }
    }
</script>
