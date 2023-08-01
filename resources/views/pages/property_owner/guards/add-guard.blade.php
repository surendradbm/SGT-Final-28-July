<x-default-layout>
    <form action="{{ route('property_owner.guards.add-guard-check') }}" method="post" enctype="multipart/form-data">
        @csrf
        <section class="property-section">
            <div class="guard-header card mt-lg-7 rounded-0">
                <div class="card-body p-5 pb-3">
                    <div class="row">
                        <div class="col-lg-10 col-12">
                            <h1 class="title mb-10">Add Guard</h1>
                            <div class="row mt-5">
                                <div class="col-lg-3 col-md-4 col-6 mb-3">
                                    <figure class="info-card card">
                                        <div class="card-body p-4">
                                            <div>
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15 2.5L5 6.25V13.8625C5 20.175 9.2625 26.0625 15 27.5C20.7375 26.0625 25 20.175 25 13.8625V6.25L15 2.5ZM13.675 19.425L9.25 15L11.0125 13.2375L13.6625 15.8875L18.9625 10.5875L20.725 12.35L13.675 19.425Z"
                                                        fill="#244B8A" />
                                                </svg>
                                                <label>Completed <br>
                                                    Jobs</label>
                                            </div>
                                            <div>
                                                <h2 class="count">56</h2>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-3">
                                    <figure class="info-card card">
                                        <div class="card-body p-4">
                                            <div>
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15 2.5L5 6.25V13.8625C5 20.175 9.2625 26.0625 15 27.5C20.7375 26.0625 25 20.175 25 13.8625V6.25L15 2.5ZM19.375 17.6125L17.6125 19.375L15 16.775L12.3875 19.375L10.625 17.6125L13.2375 15L10.625 12.3875L12.3875 10.625L15 13.2375L17.6125 10.625L19.375 12.3875L16.775 15L19.375 17.6125Z"
                                                        fill="#244B8A" />
                                                </svg>
                                                <label>Missed <br>
                                                    Shifts</label>
                                            </div>
                                            <div>
                                                <h2 class="count">541</h2>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-3">
                                    <figure class="info-card card">
                                        <div class="card-body p-4">
                                            <div>
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.25 22.5H23.75V25H6.25V22.5ZM12 19.125L6.25 13.375L8.75 11L12 14.25L21.25 5L23.75 7.5L12 19.125Z"
                                                        fill="#244B8A" />
                                                </svg>
                                                <label>Total <br>
                                                    Leave</label>
                                            </div>
                                            <div>
                                                <h2 class="count">2345</h2>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Top Header (End) --}}
            {{-- Section Content (Start) --}}
            <div class="p-7">
                <div class="card section-card add-guard-card mb-6">
                    <div class="card-body p-7">
                        <div class="row mt-5">
                            <div class="col-lg-12 col-md-4 col-12">
                                <h4 class="text-dark fw-bold">Create a New Subscription</h4>
                                <span class="text-gray-600">Fill out the necessary details to create the
                                    Subscription</span>
                                <div class="float-end">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="status" type="checkbox" value="1"
                                            id="status" onchange="toggleSwitch()" checked>
                                        <b><label class="form-check-label text-dark" for="status">Active
                                                Status</label></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper rounded-circle w-130px h-130px"></div>
                                    <!--begin::Edit button-->
                                    <label class="btn btn-primary btn-sm" data-kt-image-input-action="change"
                                        data-bs-dismiss="click"> Change Thumbnail

                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        {{-- <input type="hidden" name="avatar_remove" /> --}}
                                    </label>
                                    <!--begin::Cancel button-->
                                    <span class="" data-kt-image-input-action="cancel"
                                        data-bs-dismiss="click">Remove
                                        Thumbnail</span>
                                </div>
                                <!--end::Image input-->
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row ">
                            <div class="col-12 mb-5">
                                <h1 class="guard-form-title">Personal Info</h1>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <b><label class="required form-label" for="name">Name</label><br></b>
                                    <input type="text" class="form-control form-control-solid" name="name"
                                        id="name" placeholder="Enter Guard Name" value="{{ old('name') }}"
                                        required>
                                </div>
                            </div>
                            <input type="" hidden class="form-control form-control-solid" name="property_owner"
                                id="property_owner" value="{{ auth()->user()->id }}" required>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <label class="required form-label">Guard Position</label>
                                    <input type="text" class="form-control form-control-solid" name="guard_position"
                                        id="position" placeholder="Enter Position" value="{{ old('guard_position') }}"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <label class="required form-label">Gender</label>
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
                                    <input type="text" class="form-control form-control-solid" name="birth_date"
                                        id="date" placeholder="Enter Date Of Birth"
                                        value="{{ old('birth_date') }}" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <label class="required form-label">Contact Number</label>
                                    <input type="tel" class=" form-control form-control-solid" name="phone"
                                        id="phone" placeholder="Enter Mobile Number" value="{{ old('phone') }}"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card section-card add-guard-card mb-6">
                    <div class="card-body p-7">
                        <div class="row ">
                            <div class="col-12 mb-5">
                                <h1 class="guard-form-title">Address</h1>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <b><label class="required form-label" for="country">Country</label><br></b>
                                    <select class="form-select form-select-solid" name="country" id="country-dd"
                                        aria-label="Floating label select example" required>
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $data)
                                            <option value="{{ $data->id }}">
                                                {{ $data->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label for="state" class="mb-2 form-label">State <em>*</em></label>
                                    <select name="state" id="state-dd" class="form-control form-control-solid"
                                        required>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label for="city" class="form-label">City <em>*</em></label><br>
                                    <select name="city" id="city-dd" class="form-control form-control-solid"
                                        required>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <br>
                                    <b><label class="required form-label" for="street">street</label><br></b>
                                    <input type="text" class="form-control form-control-solid" name="street"
                                        id="street" placeholder="Enter Street" value="{{ old('street') }}"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <br>
                                    <b><label class="required form-label" for="zip_code">Zip Code</label><br></b>
                                    <input type="text" class="form-control form-control-solid" name="zip_code"
                                        id="zip_code" placeholder="Enter Zip Code" value="{{ old('zip_code') }}"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card section-card add-guard-card mb-6">
                    <div class="card-body p-7">
                        <div class="row ">
                            <div class="col-12 mb-5">
                                <h1 class="guard-form-title">Credentials</h1>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <b><label class="required form-label" for="email">Email Address</label><br></b>
                                    <input type="email" class="form-control form-control-solid" name="email"
                                        id="email" placeholder="Enter Email Address" value="{{ old('email') }}"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <b><label class="required form-label" for="password">Password</label><br></b>
                                    <div class="password-input">
                                        <input type="password" class="form-control form-control-solid" id="password"
                                            name="password" placeholder="Password" value="">
                                        <i class="fas fa-eye" id="togglePassword"
                                            style="margin-right: 20px;float: right;margin-top: -27px; cursor: pointer;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 text-lg-end">
                                <a href="#" class="link text-decoration-underline d-block my-5">Send
                                    Application</a>
                                {{-- <a href="#" class="link text-decoration-underline d-block">Change Password</a> --}}
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                            </div>
                            <div class="col-lg-5 col-md-6 col-12">
                                <h4 class="text-dark fw-bold">Guard Identity Card</h4>
                                <br>
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-300px h-150px"></div>
                                    <!--begin::Edit button-->
                                    <label class="btn btn-primary btn-sm inverse" data-kt-image-input-action="change"
                                        data-bs-dismiss="click"> Upload Front Side

                                        <input type="file" name="front_side" accept=".png, .jpg, .jpeg, .svg" />
                                        {{-- <input type="hidden" name="avatar_remove" /> --}}
                                    </label>
                                    <!--begin::Cancel button-->
                                    <span class="" data-kt-image-input-action="cancel"
                                        data-bs-dismiss="click">Remove Front Side</span>

                                </div>
                                <!--end::Image input-->
                            </div>
                            <div class="col-lg-5 col-md-6 col-12">
                                <h4 class="text-dark fw-bold"></h4>
                                <br>
                                <br>
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-300px h-150px"></div>
                                    <!--begin::Edit button-->
                                    <div><label class="btn btn-primary btn-sm inverse"
                                            data-kt-image-input-action="change" data-bs-dismiss="click"> Upload Back
                                            Side

                                            <input type="file" name="back_side"
                                                accept=".png, .jpg, .jpeg, .svg" />
                                            {{-- <input type="hidden" name="avatar_remove" /> --}}
                                        </label>
                                        <!--begin::Cancel button-->
                                        <span class="" data-kt-image-input-action="cancel"
                                            data-bs-dismiss="click">Remove Back Side</span>
                                    </div>
                                </div>
                                <!--end::Image input-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card section-card mb-6">
                    <div class="card-body p-5 text-end">
                        <button class="btn btn-primary inverse me-3">Cancel</button>
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
            {{-- Section Content (End) --}}
        </section>
    </form>
</x-default-layout>
<script>
    $(document).ready(function() {
        $('#country-dd').on('change', function() {
            var idCountry = this.value;
            $("#state-dd").html('');
            $.ajax({
                url: "{{ url('api/fetch-states') }}",
                type: "POST",
                data: {
                    country_id: idCountry,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#state-dd').html('<option value="">Select State</option>');
                    $.each(result.states, function(key, value) {
                        $("#state-dd").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                    $('#city-dd').html('<option value="">Select City</option>');
                }
            });
        });
        $('#state-dd').on('change', function() {
            var idState = this.value;
            $("#city-dd").html('');
            $.ajax({
                url: "{{ url('api/fetch-cities') }}",
                type: "POST",
                data: {
                    state_id: idState,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(res) {
                    $('#city-dd').html('<option value="">Select City</option>');
                    $.each(res.cities, function(key, value) {
                        $("#city-dd").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });
</script>

<script>
    let table = new DataTable('#data-table');
</script>
<script>
    $(document).ready(function() {
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
<script>
    function toggleSwitch() {
        const checkbox = document.getElementById("status");

        const label = document.querySelector(".form-check-label");

        if (checkbox.checked) {
            label.textContent = "Active Status";
            checkbox.value = "1";
        } else {
            label.textContent = "Inactive Status";
            checkbox.value = "0";
        }
    }
</script>
