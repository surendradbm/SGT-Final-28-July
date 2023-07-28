<x-default-layout>
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
    </style>
    {{-- Breadcrumbs (Start) --}}
    <div class="py-3">
        <ul class="breadcrumb">
            <li><a href="{{ route('superadmin.guard.all') }}">Guards</a></li>
            <li><i class="fas fa-chevron-right"></i></li>
            <li class="active"><a href="{{ route('superadmin.guard.add') }}">Add Guard</a></li>
        </ul>
    </div>
    {{-- Breadcrumbs (End) --}}
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">Guards</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="{{route('superadmin.guard.all')}}" class="btn btn-primary">Back to  Guards</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 21.25L15 17.575C14.5125 17.525 14.15 17.5 13.75 17.5C10.4125 17.5 3.75 19.175 3.75 22.5V25H15L11.25 21.25ZM13.75 15C16.5125 15 18.75 12.7625 18.75 10C18.75 7.2375 16.5125 5 13.75 5C10.9875 5 8.75 7.2375 8.75 10C8.75 12.7625 10.9875 15 13.75 15Z" fill="#244B8A"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.3375 25.625L15 21.25L16.75 19.4875L19.3375 22.0875L25.75 15.625L27.5 17.3875L19.3375 25.625Z" fill="#244B8A"/>
                                </svg>
                                <label>Total<br>Guards</label>
                            </div>
                            <div>
                                <h2 class="count">540</h2>
                            </div>
                        </div>
                    </figure>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M20.4545 22C22.2727 22 23.8182 21.3681 25.0909 20.1042C26.3636 18.8403 27 17.3056 27 15.5C27 13.6944 26.3636 12.1597 25.0909 10.8958C23.8182 9.63194 22.2727 9 20.4545 9H9.54545C7.72727 9 6.18182 9.63194 4.90909 10.8958C3.63636 12.1597 3 13.6944 3 15.5C3 17.3056 3.63636 18.8403 4.90909 20.1042C6.18182 21.3681 7.72727 22 9.54545 22H20.4545ZM20.4545 19.8333H9.54545C8.34545 19.8333 7.31818 19.409 6.46363 18.5604C5.60909 17.7118 5.18182 16.6917 5.18182 15.5C5.18182 14.3083 5.60909 13.2882 6.46363 12.4396C7.31818 11.591 8.34545 11.1667 9.54545 11.1667H20.4545C21.6545 11.1667 22.6818 11.591 23.5364 12.4396C24.3909 13.2882 24.8182 14.3083 24.8182 15.5C24.8182 16.6917 24.3909 17.7118 23.5364 18.5604C22.6818 19.409 21.6545 19.8333 20.4545 19.8333ZM20.4545 18.75C19.5455 18.75 18.7727 18.434 18.1364 17.8021C17.5 17.1701 17.1818 16.4028 17.1818 15.5C17.1818 14.5972 17.5 13.8299 18.1364 13.1979C18.7727 12.566 19.5455 12.25 20.4545 12.25C21.3636 12.25 22.1364 12.566 22.7727 13.1979C23.4091 13.8299 23.7273 14.5972 23.7273 15.5C23.7273 16.4028 23.4091 17.1701 22.7727 17.8021C22.1364 18.434 21.3636 18.75 20.4545 18.75Z" fill="#244B8A"/>
                                </svg>
                                <label>Active <br>Guards</label>
                            </div>
                            <div>
                                <h2 class="count">530</h2>
                            </div>
                        </div>
                    </figure>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M20.4545 21C22.2727 21 23.8182 20.3681 25.0909 19.1042C26.3636 17.8403 27 16.3056 27 14.5C27 12.6944 26.3636 11.1597 25.0909 9.89583C23.8182 8.63194 22.2727 8 20.4545 8H9.54545C7.72727 8 6.18182 8.63194 4.90909 9.89583C3.63636 11.1597 3 12.6944 3 14.5C3 16.3056 3.63636 17.8403 4.90909 19.1042C6.18182 20.3681 7.72727 21 9.54545 21H20.4545ZM20.4545 18.8333H9.54545C8.34545 18.8333 7.31818 18.409 6.46363 17.5604C5.60909 16.7118 5.18182 15.6917 5.18182 14.5C5.18182 13.3083 5.60909 12.2882 6.46363 11.4396C7.31818 10.591 8.34545 10.1667 9.54545 10.1667H20.4545C21.6545 10.1667 22.6818 10.591 23.5364 11.4396C24.3909 12.2882 24.8182 13.3083 24.8182 14.5C24.8182 15.6917 24.3909 16.7118 23.5364 17.5604C22.6818 18.409 21.6545 18.8333 20.4545 18.8333ZM9.54545 17.75C8.63636 17.75 7.86364 17.434 7.22727 16.8021C6.59091 16.1701 6.27273 15.4028 6.27273 14.5C6.27273 13.5972 6.59091 12.8299 7.22727 12.1979C7.86364 11.566 8.63636 11.25 9.54545 11.25C10.4545 11.25 11.2273 11.566 11.8636 12.1979C12.5 12.8299 12.8182 13.5972 12.8182 14.5C12.8182 15.4028 12.5 16.1701 11.8636 16.8021C11.2273 17.434 10.4545 17.75 9.54545 17.75Z" fill="#244B8A"></path>
                                </svg>
                                <label>Inactive <br>Guards</label>
                            </div>
                            <div>
                                <h2 class="count">20</h2>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M15.9416 7.48294C17.038 7.48294 17.9269 6.59133 17.9269 5.49147C17.9269 4.39161 17.038 3.5 15.9416 3.5C14.8451 3.5 13.9562 4.39161 13.9562 5.49147C13.9562 6.59133 14.8451 7.48294 15.9416 7.48294Z" fill="#244B8A"/>
                                    <path d="M22.1261 14.0608C21.5744 13.9651 19.3658 13.5813 19.2426 13.5401C19.1014 13.4929 19.2426 13.5401 19.1956 13.4693C19.1489 13.3985 17.2221 9.32129 17.034 9.10914C16.8461 8.897 16.3292 8.35479 15.601 8.11921C14.8726 7.88363 14.1441 8.26056 14.1441 8.26056C14.1441 8.26056 10.5259 10.3347 10.291 10.4523C10.0559 10.5702 9.84466 10.9945 9.84466 10.9945L8.15541 14.18C8.01696 14.3548 7.93384 14.5756 7.93384 14.8164C7.93384 15.3825 8.3915 15.8416 8.95589 15.8416C9.43839 15.8416 9.84195 15.5056 9.94918 15.0547L11.5246 12.0669L12.5114 11.5131C12.4409 11.7252 11.5364 16.1443 11.5364 16.1443L10.6201 21.3764L7.40904 25.2572C7.17811 25.4731 7.03302 25.78 7.03302 26.1214C7.03302 26.7743 7.56077 27.304 8.21173 27.304C8.60816 27.304 8.95835 27.1066 9.17181 26.8054C9.76006 26.1117 12.719 22.6232 13.0045 22.2835C13.3218 21.9065 13.4039 21.7181 13.4509 21.4707C13.4978 21.223 14.0266 18.0297 14.0266 18.0297L17.0573 21.07V26.4317H17.0635C17.1245 27.0319 17.6298 27.5001 18.2442 27.5001C18.8582 27.5001 19.3636 27.0319 19.4243 26.4317H19.4305C19.4305 26.4317 19.4302 26.3937 19.4298 26.3278C19.4298 26.3219 19.4305 26.3158 19.4305 26.3098C19.4305 26.3022 19.4295 26.2945 19.4295 26.2866C19.4239 25.4696 19.3988 21.4021 19.4305 20.4807C19.4657 19.4558 19.1012 19.2318 19.0191 19.1375C18.9367 19.0433 16.1056 16.0266 16.1056 16.0266L16.728 12.9983C16.728 12.9983 17.5389 14.589 17.621 14.7658C17.7034 14.9424 17.9618 15.2609 18.2316 15.3196C18.5021 15.3786 21.8737 16.0621 21.8737 16.0621L21.8752 16.055C21.9246 16.0624 21.9748 16.0703 22.0265 16.0703C22.5825 16.0703 23.033 15.6184 23.033 15.0606C23.0335 14.5367 22.6349 14.1116 22.1261 14.0608Z" fill="#244B8A"/>
                                </svg>
                                <label>Guards<br>On Duty</label>
                            </div>
                            <div>
                                <h2 class="count">520</h2>
                            </div>
                        </div>
                    </figure>
                </div>

            </div>
        </div>
    </div>
    {{-- First Section Ends --}}


    <form>
        <div class="card card-flush shadow-sm mt-5">
            <div class="card-body py-5">
                <div class="row mb-5">
                    <div class="col-lg-12 col-md-4 col-12">
                        <h4 class="text-dark fw-bold">Fill the details to create Guard Profile</h4>
                        <div class="float-end">
                            <div class="form-check form-switch">
                                <input class="form-check-input body-toggle" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault" onchange="toggleSwitch()" checked>
                                <b><label class="form-check-label text-dark" for="flexSwitchCheckDefault">Active Status</label></b>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mb-5">
                    <div class="col-md-12">
                        <!--begin::Image input-->
                        <div class="image-input image-input-empty" data-kt-image-input="true">
                            <!--begin::Image preview wrapper-->
                            <div class="image-input-wrapper rounded-circle w-130px h-130px"></div>
                            <!--begin::Edit button-->
                            <label class="btn btn-primary btn-sm" data-kt-image-input-action="change" data-bs-dismiss="click"> Upload Photo

                                <input type="file" name="image" accept=".png, .jpg, .jpeg, .svg" />
                                <input type="hidden" name="image_remove" />
                            </label>
                            <!--begin::Cancel button-->
                            <span class="" data-kt-image-input-action="cancel" data-bs-dismiss="click">Remove Photo</span>
                        </div>
                        <!--end::Image input-->
                    </div>
                </div>

                <div class="row mb-5">
                    <h4 class="text-dark fw-bold">Personal Info</h4>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="name">Name</label><br></b>
                            <input type="text" class="form-control form-control-solid" name="name" id="name"
                                placeholder="Enter Guard Name" value="" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="position">Position</label><br></b>
                            <input type="text" class="form-control form-control-solid" name="position" id="position"
                                placeholder="Enter Position" value="" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="gender">Gender</label><br></b>
                            <select class="form-select form-select-solid" id="gender" name="gender"
                                aria-label="Floating label select example" required>
                                <option value="">Choose Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="date">Date Of Birth</label><br></b>
                            <input type="text" class="form-control form-control-solid" name="birth_date" id="date"
                                placeholder="Enter Date Of Birth" value="" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="phone">Mobile Number</label><br></b>
                            <input type="text" class="form-control form-control-solid" name="phone" id="phone"
                                placeholder="Enter Mobile Number" value="" required>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card card-flush shadow-sm mt-5">
            <div class="card-body py-5">
                <div class="row">
                    <div class="col-lg-12 col-md-4 col-12">
                        <h4 class="text-dark fw-bold">Address</h4>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="country">Country</label><br></b>
                            <select class="form-select form-select-solid" id="country" name="country"
                                aria-label="Floating label select example" required>
                                <option value="">Choose Country</option>
                                <option value="">India</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="state">State</label><br></b>
                            <select class="form-select form-select-solid" id="state" name="state"
                                aria-label="Floating label select example" required>
                                <option value="">Choose State</option>
                                <option value="">Utter Pradesh</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="city">City</label><br></b>
                            <select class="form-select form-select-solid" id="city" name="city"
                                aria-label="Floating label select example" required>
                                <option value="">Choose City</option>
                                <option value="Lucknow">Lucknow</option>
                                <option value="Ashiana">Ashiana</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="street">Street</label><br></b>
                            <input type="text" class="form-control form-control-solid" name="street" id="street"
                                placeholder="Enter Street" value="" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="zip_code">Zip Code</label><br></b>
                            <input type="number" class="form-control form-control-solid" name="zip_code" id="zip_code"
                                placeholder="Enter Zip Code" value="" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-flush shadow-sm mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-4 col-12">
                        <h4 class="text-dark fw-bold">Login Credentials</h4>
                    </div>
                </div>
                <div class="row mb-10">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="email">Email Address</label><br></b>
                            <input type="email" class="form-control form-control-solid" name="email" id="email"
                                placeholder="Enter Email Address" value="" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="password">Password</label><br></b>
                            <div class="password-input">
                                <input type="password" class="form-control form-control-solid" id="password" name="password"
                                    placeholder="Password" value="" >
                                <i class="fas fa-eye" id="togglePassword"
                                    style="margin-right: 20px;float: right;margin-top: -27px; cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-4 col-12 text-lg-end">
                        <a href="#" class="link text-decoration-underline d-block my-5">Send Application</a>
                        <a href="#" class="link text-decoration-underline d-block">Change Password</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-4 col-12">
                        <h4 class="text-dark fw-bold">Guard Identity Card</h4>
                    </div>
                    <div class="col-lg-12 col-md-4 col-12">
                        <!--begin::Image input-->
                        <div class="image-input image-input-empty" data-kt-image-input="true">
                            <!--begin::Image preview wrapper-->
                            <div class="image-input-wrapper w-300px h-150px"></div>
                            <!--begin::Edit button-->
                            <label class="btn btn-primary btn-sm inverse" data-kt-image-input-action="change" data-bs-dismiss="click"> Upload ID Card

                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg, .svg" />
                                <input type="hidden" name="avatar_remove" />
                            </label>
                            <!--begin::Cancel button-->
                            <span class="" data-kt-image-input-action="cancel" data-bs-dismiss="click">Remove ID Card</span>

                        </div>
                        <!--end::Image input-->
                    </div>
                </div>

            </div>
        </div>
        <div class="card card-flush shadow-sm mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </div>
            </div>
        </div>
    </form>


</x-default-layout>

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
<script>
    $( document ).ready(function() {
        // for calender
        $("#date").flatpickr({
            dateFormat: "d-m-Y",
        });

        // for view password
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
});
</script>


