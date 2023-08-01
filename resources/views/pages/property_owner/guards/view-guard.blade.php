<x-default-layout>
    <form action="{{ route('property_owner.guards.all') }}" method="get" enctype="multipart/form-data">
        {{-- <form action="{{ route('property_owner.guards.update', $guards->id) }}" method="post" enctype="multipart/form-data"> --}}
        @csrf
        <section class="property-section">
            <div class="guard-header card mt-lg-7 rounded-0">
                <div class="card-body p-5 pb-3">
                    <div class="row">
                        <div class="col-lg-10 col-12">
                            <h1 class="title">View Guard</h1>
                            <p class="description mb-2">Guard ID : {{ $guards->id }}</p>
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
            <div class="p-7">
                <div class="card section-card add-guard-card mb-6">
                    <div class="card-body p-7">
                        <div class="float-end">
                            <div class="form-check form-switch">
                                <a href="{{ route('property_owner.guards.edit', $guards->id) }}"
                                    class="btn btn-sm btn-active-icon-primary btn-text-primary menu-link px-3">Edit
                                    Guard Details
                                </a>
                            </div>
                        </div>
                        {{-- <div class="float-end">
                            <div class="form-check form-switch">
                                <input readonly class="form-check-input" name="status" type="checkbox"
                                    value="{{ !empty($guards->status) ? $guards->status : '' }}" id="status"
                                    onchange="toggleSwitch()" {{ $guards->status === '1' ? 'checked' : '' }}>
                                <b><label class="form-check-label text-dark"
                                        for="status">{{ $guards->status === '1' ? 'Active Status' : 'Inactive Status' }}</label></b>
                            </div>
                        </div> --}}
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper rounded-circle w-130px h-130px"
                                        style="background-image: url({{ asset('/uploads/profile_pictures/' . $guards->avatar) }})">
                                    </div>
                                    <!--begin::Edit button-->
                                    {{-- <label class="btn btn-primary btn-sm" data-kt-image-input-action="change"
                                        data-bs-dismiss="click"> Change Thumbnail

                                        <input readonly type="file" name="avatar" accept=".png, .jpg, .jpeg"
                                            value="{{ $guards->avatar }}" />
                                        <input readonly type="hidden" name="avatar" value="{{ $guards->avatar }}" />
                                    </label>
                                    <!--begin::Cancel button-->
                                    <span class="" data-kt-image-input-action="cancel"
                                        data-bs-dismiss="click">Remove
                                        Thumbnail</span> --}}
                                </div>
                                <!--end::Image input-->
                            </div>
                        </div>
                        <br>
                        <div class="row ">
                            <div class="col-12 mb-5">
                                <h1 class="guard-form-title">Personal Info</h1>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <label class="required form-label">Name</label>
                                    <input readonly type="text" class="form-control form-control-solid"
                                        name="name" value="{{ !empty($guards->name) ? $guards->name : '' }}"
                                        required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <label class="required form-label">Guard Position</label>
                                    <input readonly type="text" class="form-control form-control-solid"
                                        name="guard_position"
                                        value="{{ !empty($guards->guard_position) ? $guards->guard_position : '' }}"
                                        required>
                                    @error('guard_position')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <label class="required form-label">Gender</label>
                                    <select class="form-control form-control-solid" name="gender" required>
                                        <option value="">Choose Gender</option>
                                        <option value="Male" {{ $guards->gender === 'Male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="Female" {{ $guards->gender === 'Female' ? 'selected' : '' }}>
                                            Female</option>
                                    </select>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <label class="required form-label">Date Of Birth</label>
                                    <input readonly type="date" name="date_of_birth"
                                        value="{{ !empty($guards->date_of_birth) ? $guards->date_of_birth : '' }}"
                                        class="form-control form-control-solid" required>
                                    @error('date_of_birth')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <label class="required form-label">Contact Number</label>
                                    <input readonly name="contact_number"
                                        type="text"value="{{ !empty($guards->contact_number) ? $guards->contact_number : '' }}"
                                        class="form-control form-control-solid" required>
                                    @error('contact_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
                                            <option value="{{ $data->id }}"
                                                {{ $data->id == $guards->country ? 'selected' : '' }}>
                                                {{ $data->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label for="state" class="required mb-2 form-label">State</label>
                                    <select name="state" id="state-dd" class="form-control form-control-solid"
                                        required>
                                        <option value="">Select State</option>
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}"
                                                {{ $state->id == $guards->state ? 'selected' : '' }}>
                                                {{ $state->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <label for="city" class="required form-label">City</label><br>
                                    <select name="city" id="city-dd" class="form-control form-control-solid"
                                        required>
                                        <option value="">Select City</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}"
                                                {{ $city->id == $guards->city ? 'selected' : '' }}>
                                                {{ $city->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <br>
                                    <label class="required form-label">Street</label>
                                    <input readonly type="text" name="street"
                                        value="{{ !empty($guards->street) ? $guards->street : '' }}"
                                        class="form-control form-control-solid" required>
                                    @error('street')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <br>
                                    <label class="required form-label">Zip Code</label>
                                    <input readonly type="text" name="zip_code"
                                        value="{{ !empty($guards->zip_code) ? $guards->zip_code : '' }}"
                                        class="form-control form-control-solid" required>
                                    @error('zip_code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card section-card add-guard-card">
                    <div class="card-body p-7">
                        <div class="row ">
                            <div class="col-12 mb-5">
                                <h1 class="guard-form-title">Credentials</h1>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <label class="required form-label">Email Address</label>
                                    <input readonly type="text" name="email_address"
                                        value="{{ !empty($guards->email_address) ? $guards->email_address : '' }}"
                                        class="form-control form-control-solid" required>
                                    @error('email_address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-5">
                                <div class="form-group">
                                    <label class="required form-label">Password</label>
                                    <input readonly type="password" name="password"
                                        value="{{ !empty($guards->password) ? $guards->password : '' }}"
                                        class="form-control form-control-solid" required>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-lg-4 col-12 text-lg-end">
                                <a href="#" class="link text-decoration-underline d-block my-5">Send
                                    Application</a>
                            </div> --}}
                        </div>
                        <input readonly type="" hidden class="form-control form-control-solid"
                            name="property_owner" id="property_owner" value="{{ auth()->user()->id }}" required>
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
                                    <div class="image-input-wrapper w-300px h-150px"
                                        style="background-image: url({{ asset('/uploads/profile_pictures/' . $guards->front_side_id_card) }})">
                                    </div>
                                    <!--begin::Edit button-->
                                    {{-- <label class="btn btn-primary btn-sm inverse" data-kt-image-input-action="change"
                                        data-bs-dismiss="click"> Edit Front Side

                                        <input readonly type="file" name="front_side_id_card"
                                            accept=".png, .jpg, .jpeg, .svg" />
                                        @error('front_side_id_card')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <span class="" data-kt-image-input-action="cancel"
                                        data-bs-dismiss="click">Remove Front Side</span> --}}
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-12">
                                <h4 class="text-dark fw-bold"></h4>
                                <br>
                                <br>
                                <div class="image-input image-input-empty" data-kt-image-input="true">
                                    <div class="image-input-wrapper w-300px h-150px"
                                        style="background-image: url({{ asset('/uploads/profile_pictures/' . $guards->back_side_id_card) }})">
                                    </div>
                                    {{-- <div><label class="btn btn-primary btn-sm inverse"
                                            data-kt-image-input-action="change" data-bs-dismiss="click">
                                            Edit Back
                                            Side
                                            <input readonly type="file" name="back_side_id_card"
                                                accept=".png, .jpg, .jpeg, .svg" />
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderrorxt-danger">{{ $errors->first('back_side_id_card') }}</span>
                                                @endif
                                            </label>
                                            <span class="" data-kt-image-input-action="cancel"
                                                data-bs-dismiss="click">Remove Back Side</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card section-card mb-6">
                <div class="card-body p-5 text-end">
                    <button class="btn btn-primary inverse me-3" type="submit">Cancel</button>
                    {{-- <button class="btn btn-primary">Save</button> --}}
                </div>
            </div>
            </div>
        </section>
    </form>
</x-default-layout>
{{-- <script>
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
    </script> --}}
<script>
    @if (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            confirmButtonText: 'OK'
        });
    @endif
</script>
