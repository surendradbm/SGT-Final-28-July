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
                    <div class="title">Add Staff</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="{{route('superadmin.staff.all')}}" class="btn btn-primary">Back to  Staff</a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-end">
                    {{-- Breadcrumbs (Start) --}}
                    <ul class="breadcrumb">
                        <li><a href="{{route("superadmin.staff.all")}}">All Staff</a></li>
                        <li><i class="fas fa-chevron-right"></i></li>
                        <li class="active"><a href="{{route("superadmin.staff.add")}}">Add Staff</a></li>
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
                        <h4 class="text-dark fw-bold">Fill the details to Add New Staff</h4>
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
                    <div class="col-lg-12 col-md-4 col-12">
                        <h4 class="text-dark fw-bold">Personal Info</h4>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="name">Name</label><br></b>
                            <input type="text" class="form-control form-control-solid" name="name" id="name"
                                placeholder="Enter Name" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-12">
                        <div class="form-group">
                            <label class="required form-label" for="messenger">Assign Role</label><br>
                            <select class="form-select form-select-solid" id="messenger" name="messenger"
                                aria-label="Floating label select example" required>
                                <option value="">Choose</option>
                                <option value="">Role 1</option>
                                <option value="">Role 2</option>
                                <option value="">Role 3</option>
                                <option value="">Role 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-12">
                        <div class="form-group">
                            <label class="required form-label" for="messenger">Gender</label><br>
                            <select class="form-select form-select-solid" id="messenger" name="messenger"
                                aria-label="Floating label select example" required>
                                <option value="">Choose</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                                <option value="">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-12">
                        <div class="form-group"id="kt_td_picker_localization" data-td-target-input="nearest" data-td-target-toggle="nearest">
                            <label class="required form-label" for="maximum_guards">Date Of Birth</label><br>
                            <input class="form-control" placeholder="Pick a date" id="kt_datepicker_1"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-12">
                        <div class="form-group">
                            <label class="required form-label" for="maximum_guards">Email</label><br>
                            <input type="email" class="form-control form-control-solid" name="maximum_guards"
                                id="maximum_guards" aria-describedby="emailHelp"
                                placeholder="Enter email address" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-12">
                        <div class="form-group">
                            <label class="required form-label" for="maximum_guards">Mobile Number</label><br>
                            <input type="number" class="form-control form-control-solid"
                                name="maximum_guards" id="maximum_guards" aria-describedby="emailHelp"
                                placeholder="Enter mobile number" required>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-4 col-12">
                        <div class="form-group">
                            <b><label class="required form-label" for="title">Password</label><br></b>
                            <div class="password-input">
                                <input type="password" class="form-control form-control-solid" id="password" name="password"
                                    placeholder="Password" >
                                <i class="fas fa-eye" id="togglePassword"
                                    style="margin-right: 20px;float: right;margin-top: -27px; cursor: pointer;"></i>
                            </div>
                        </div>
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


