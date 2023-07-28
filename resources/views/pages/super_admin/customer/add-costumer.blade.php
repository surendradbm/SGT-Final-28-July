<x-default-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
    </style>
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">{{ __('customer.Add') }} {{ __('customer.Customer') }}</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="{{route('superadmin.customer.all')}}" class="btn btn-primary">Back to  {{ __('customer.Customer') }}</a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-end">
                    {{-- Breadcrumbs (Start) --}}
                    <ul class="breadcrumb">
                        <li><a href="{{route("superadmin.customer.all")}}">{{ __('customer.Customer') }}</a></li>
                        <li><i class="fas fa-chevron-right"></i></li>
                        <li class="active"><a href="{{route("superadmin.customer.add")}}">{{ __('customer.Add') }} {{ __('customer.Customer') }}</a></li>
                    </ul>
                    {{-- Breadcrumbs (End) --}}
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
                        <h4 class="text-dark fw-bold">{{ __('customer.Customer') }} {{ __('customer.Profile') }}</h4>
                        <span class="text-gray-600">{{ __('customer.Below_Details') }} Username</span>
                        <div class="float-end">
                            <div class="form-check form-switch">
                                <input class="form-check-input body-toggle" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault" onchange="toggleSwitch()" checked>
                                <b><label class="form-check-label text-dark" for="flexSwitchCheckDefault">{{ __('customer.Active') }} {{ __('customer.Status') }}</label></b>
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
                            <label class="btn btn-primary btn-sm" data-kt-image-input-action="change" data-bs-dismiss="click"> {{ __('customer.Upload_Photo') }}

                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg, .svg" />
                                <input type="hidden" name="avatar_remove" />
                            </label>
                            <!--begin::Cancel button-->
                            <span class="" data-kt-image-input-action="cancel" data-bs-dismiss="click">{{ __('customer.Remove_Photo') }}</span>
                        </div>
                        <!--end::Image input-->
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="title">{{ __('customer.Customer_Name') }}</label><br></b>
                            <input type="text" class="form-control form-control-solid" name="title"
                                placeholder="Enter Customer Name" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="title">Email</label><br></b>
                            <input type="email" class="form-control form-control-solid" name="title"
                                placeholder="Enter Email" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="title">Mobile Number</label><br></b>
                            <input type="number" class="form-control form-control-solid" name="title"
                                placeholder="Enter Mobile Number" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="title">Company Name</label><br></b>
                            <input type="text" class="form-control form-control-solid" name="title"
                                placeholder="Enter Company Name" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="title">BSIS Number</label><br></b>
                            <input type="text" class="form-control form-control-solid" name="title"
                                placeholder="Enter BSIS Number" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="title">Federal EIN</label><br></b>
                            <input type="text" class="form-control form-control-solid" name="title"
                                placeholder="Enter Federal EIN" required>
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
                            <b><label class="required form-label" for="title">Country</label><br></b>
                            <select class="form-select form-select-solid" id="messenger" name="messenger"
                                aria-label="Floating label select example" required>
                                <option value="">Choose Country</option>
                                <option value="">India</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="title">State</label><br></b>
                            <select class="form-select form-select-solid" id="messenger" name="messenger"
                                aria-label="Floating label select example" required>
                                <option value="">Choose State</option>
                                <option value="">Utter Pradesh</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="title">City</label><br></b>
                            <select class="form-select form-select-solid" id="messenger" name="messenger"
                                aria-label="Floating label select example" required>
                                <option value="">Choose City</option>
                                <option value="">Lucknow</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="title">Street</label><br></b>
                            <input type="text" class="form-control form-control-solid" name="title"
                                placeholder="Enter Street" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="title">Post Code</label><br></b>
                            <input type="number" class="form-control form-control-solid" name="title"
                                placeholder="Enter Post Code" required>
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
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="title">Email</label><br></b>
                            <span class="text-gray-600">Excepteur sint occaecat cupidatat non proident su.</span>
                            <input type="email" class="form-control form-control-solid" name="title"
                                placeholder="Enter Email" required>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="title">Password</label><br></b>
                            <span class="text-gray-600">Excepteur sint occaecat cupidatat non proident sunt in culp.</span>
                            <div class="password-input">
                                <input type="password" class="form-control form-control-solid" id="password" name="password"
                                    placeholder="Password" >
                                <i class="fas fa-eye" id="togglePassword"
                                    style="margin-right: 20px;float: right;margin-top: -27px; cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                       <button type="submit" class="btn btn-primary inverse mt-17">Set Password</button>
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

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>

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


