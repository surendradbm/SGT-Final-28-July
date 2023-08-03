<x-default-layout>
    <form action="{{ route('property_owner.properties.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <section class="property-section">
            <div class="py-3 px-7">
            </div>
            <div class="py-6 px-7 border-top property-create-top-header bg-white">
                <div class="row align-items-center justify-content-lg-between justify-content-start">
                    <div class="col-lg-5 col-md-6 col-12">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('property_owner.properties.all') }}"><b>All New Properties</b></a></li>
                            <li><i class="fas fa-chevron-right"></i></li>
                            <li class="active"><a href="{{ route('property_owner.properties.create') }}"><b>Create new
                                        property</b></a>
                            </li>
                        </ul>
                        <br>
                        <p class="description"><b>Fill out the below form to create a new property.</b></p>
                    </div>
                    <div class="col-lg-7 col-md-6 col-12 text-start text-lg-end">
                        <div>
                            <a href="{{ route('property_owner.properties.all') }}" class="btn btn-primary">Back to
                                Properties</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-7">
                <div class="card property-create-card mb-6">
                    <div class="card-body overscroll-auto">
                        <div class="progress-points-div">
                            <ul class="progress-points">
                                <li class="active">
                                    <div><i class="fas fa-circle-check"></i><span>Create Property</span></div>
                                </li>
                                <li>
                                    <div><i class="fas fa-circle-check"></i><span>Shift</span></div>
                                </li>
                                <li>
                                    <div><i class="fas fa-circle-check"></i><span>Checkpoints</span></div>
                                </li>
                                <li>
                                    <div><i class="fas fa-circle-check"></i><span>Routes</span></div>
                                </li>
                                <li>
                                    <div><i class="fas fa-circle-check"></i><span>Assign Guards</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card property-create-card mb-6">
                    <div class="card-body p-5 pb-0">
                        <h1 class="title fw-bold text-primary h3 mb-1">Add property pictures</h1>
                        <p class="description mb-0 small">Upload property pictures (if any)</p>
                    </div>
                    <div id="imageInputsContainer" class="image-inputs-container">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="d-flex flex-wrap container">
                                    <div class="d-inline-block mb-7 me-7 element" id='div_1'>
                                        <div class="uploaded-image-card">
                                            <button onclick="removeImg(this)"><i
                                                    class="far fa-times-circle"></i></button>
                                            <input type="file" name="avatar_1" onchange="readUrl(this)"
                                                style="height: 160px; width: 250px; opacity: 0; cursor: pointer; z-index: 2;">
                                            <img src="http://placehold.it/180" class="blah" alt=""
                                                style="position: absolute; height: -webkit-fill-available; width: -webkit-fill-available;">
                                        </div>
                                    </div>
                                    <div class="d-inline-block mb-7 me-7">
                                        <div class="h-100 w-100 d-flex align-items-center justify-content-center">
                                            <button class="btn btn-primary inverse add" onclick="addImage()">Add
                                                Image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-10">
                                <i>
                                    <p class="description mb-1 small">Max 10 photos of property can be uploaded</p>
                                </i>
                                <i>
                                    <p class="description small">Maximum image size 500kb and should be in JPG or PNG
                                        format.
                                    </p>
                                </i>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label class="required form-label">Property Name</label>
                                        <input value="{{ old('name') }}" type="text"
                                            placeholder="Enter property name" name="name"
                                            class="form-control form-control-solid" value="{{ old('') }}">
                                        <div class="text-end">
                                            <small class="ms-auto text-dark">0/36 Characters</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label class="required form-label">Property Type</label>
                                        <select class="form-select form-select-solid" data-control="select2"
                                            name="type" data-placeholder="Select an option">
                                            <option value="{{ old('type') }}"></option>
                                            <option value="1">Residential Property</option>
                                            <option value="2">Commercial Property</option>
                                            <option value="3">Healthcare Property</option>
                                            <option value="4">Educational Property</option>
                                            <option value="5">Office Property</option>
                                            <option value="6">Hotel Property</option>
                                            <option value="7">Government Property</option>
                                            <option value="8">Financial Property</option>
                                            <option value="9">Other Property</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label class="required form-label">Property Area</label>
                                        <input value="{{ old('area') }}" type="text" placeholder="In sqft"
                                            name="area" class="form-control form-control-solid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card property-create-card mb-6">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <b><label class="required form-label" for="country">Country</label><br></b>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        name="country" id="country-dd" aria-label="Floating label select example"
                                        required>
                                        <option value="{{ old('$data->name') }}">Select Country</option>
                                        @foreach ($countries as $data)
                                            <option value="{{ $data->id }}">
                                                {{ $data->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="state" class="required form-label">State</label>
                                    <select class="form-select form-select-solid" name="state" id="state-dd"
                                        data-control="select2" required>
                                        <option value="{{ old('$data->name') }}">Select State</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <br>
                                    <label for="city" class="required form-label">City</label><br>
                                    <select class="form-select form-select-solid" name="city" id="city-dd"
                                        data-control="select2" required>
                                        <option value="{{ old('$data->name') }}">Select City</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card property-create-card mb-6">
                    <div class="card-body p-5">
                        <div class="row mb-4 justify-content-between">
                            <div class="col-lg-6 col-12">
                                <h5 class="required text-dark">Emergency Contact
                                </h5>
                            </div>
                            <div class="col-lg-6 col-12 text-end">
                                <a href="javascript:void(0);" onclick="handleCreateContactInput()">+ Add more</a>
                            </div>
                        </div>
                        <div>
                            <div id="emergency-contact-div">
                            </div>
                            <div>
                                <div class="form-group w-100">
                                    <label class="required form-label">Property Description</label>
                                    <textarea rows="3" class="form-control form-control-solid" placeholder="Enter Property Description"
                                        name="property_description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card property-create-card mb-6">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-12 mb-6">
                                <div class="form-group">
                                    <h5 class="required text-dark">Location</h5>
                                    <p class="description small">(Please enter your property location from below)</p>
                                    <div>
                                        <input value="{{ old('location') }}" class="form-control form-control-solid"
                                            type="text" name="location" placeholder="Enter location"
                                            style="border: none; outline: none; width: 90%;">
                                        {{-- <i class="fas fa-location text-dark fa-2xl"></i> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mb-5">
                                <div class="form-group">
                                    <input value="{{ old('latitude') }}" type="text"
                                        class="form-control form-control-solid" placeholder="Latitude" id="latitude"
                                        name="latitude">
                                    <div class="text-end mt-2">
                                        <a href="#" class="text-decoration-underline" style="color: #244B8A;"
                                            onclick="getLiveLocation()">
                                            Get Live Location <i class="fas fa-location text-dark fa-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mb-5">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Longitude" id="longitude" name="longitude"
                                        value="{{ old('longitude') }}">
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <figure class="overflow-hidden rounded">
                                    <iframe id="map-iframe" class="w-100" height="450" style="border:0;"
                                        allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card property-create-card mb-6">
                    <div class="card-body p-5 text-end">
                        <a href="{{ route('property_owner.properties.all') }}"
                            class="btn btn-primary inverse me-3">Save &
                            Exit</button> </a>
                        {{-- <a href="{{ route('property_owner.properties.shift') }}" class="btn btn-primary">Save & Next</a> --}}
                        <button type="submit" class="btn btn-primary">Save & Next</button>
                    </div>
                </div>
            </div>
        </section>
    </form>
</x-default-layout>

{{-- google Maps --}}
<script>
    function getLiveLocation() {
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;
                    const mapIframe = document.getElementById("map-iframe");
                    const iframeUrl =
                        `https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121059.04711154905!2d${longitude}!3d${latitude}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1688622304610!5m2!1sen!2sin`;
                    mapIframe.src = iframeUrl;

                    // Update the input fields with latitude and longitude
                    document.getElementById("latitude").value = latitude;
                    document.getElementById("longitude").value = longitude;
                },
                function(error) {
                    console.error("Error getting location: ", error.message);
                }
            );
        } else {
            console.error("Geolocation is not available in this browser.");
        }
    }
</script>

{{-- Country, State, City --}}
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

{{-- Contact Name --}}
<script>
    let contactIndex = 1;
    const maxRows = 5; // Maximum number of rows to be added

    const handleCreateContactInput = () => {
        if (contactIndex > maxRows) {
            console.log("Maximum number of rows reached.");
            return;
        }
        const emergencyContactDiv = document.getElementById('emergency-contact-div');
        if (!emergencyContactDiv) {
            console.error("emergency-contact-div not found.");
            return;
        }

        let html = `<div class="col-lg-6 col-12 d-flex">
                    <div class="form-group">
                        <div class="me-2 py-4">
                            <label class="required form-label">${contactIndex}.</label>
                        </div>
                    </div>
                    <div class="form-group w-100">
                        <input onkeyup="handleCheckCharacterLength(event)" type="text" placeholder="Contact Name" name="contact_name_${contactIndex}" class="form-control form-control-solid" maxlength="25" minlength="1">
                        <div class="text-end">
                          
                        </div>
                    </div> 
                </div>
                <div class="col-lg-6 col-12 d-flex">
                    <div class="form-group w-100">
                        <input type="text" placeholder="Contact Number" name="contact_number_${contactIndex}" class="form-control form-control-solid">
                    </div> 
                    <div class="form-group">
                        <button class="me-2 border-0 bg-white py-4 ps-5" onclick="handleRemoveContactInput(event, ${contactIndex})">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </div>`;

        const parentRow = document.createElement('div');
        parentRow.className = "row mb-4 emergency-contact-input-row";
        parentRow.innerHTML = html;

        emergencyContactDiv.appendChild(parentRow);
        contactIndex++;
    };

    const handleRemoveContactInput = (event, index) => {
        const emergencyContactDiv = document.getElementById('emergency-contact-div');
        if (!emergencyContactDiv) {
            console.error("emergency-contact-div not found.");
            return;
        }

        const contactRow = event.target.closest(".emergency-contact-input-row");
        if (contactRow) {
            emergencyContactDiv.removeChild(contactRow);
            contactIndex--;
        }
    };

    handleCreateContactInput();
</script>

{{-- iMAGE  --}}
<script>
    let imageCount = 1;

    function readUrl(input) {
        const a = input.parentElement.querySelector(".blah");
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = (e) => {
                a.src = e.target.result;
            };
        }
    }

    function removeImg(button) {
        const div = button.parentElement;
        const a = div.querySelector(".blah");
        const inputFile = div.querySelector(".inputFile");
        a.src = "http://placehold.it/180";
        inputFile.value = "";
    }

    function addImage() {
        if (imageCount >= 10) {
            // Disable the "Add Image" button if the maximum limit (10 images) is reached.
            document.getElementById("addImageButton").disabled = true;
            return;
        }
        imageCount++;
        const container = document.querySelector(".container");
        const newDiv = document.createElement("div");
        newDiv.className = "d-inline-block mb-7 me-7 element";
        newDiv.id = `div_${imageCount}`;
        newDiv.innerHTML = `
            <div class="uploaded-image-card">
                <button onclick="removeImg(this)"><i class="far fa-times-circle"></i></button>
                <input type="file" name="avatar_${imageCount}" class="inputFile" onchange="readUrl(this)"
                    style="height: 160px; width: 250px; opacity: 0; cursor: pointer; z-index: 2;">
                <img src="http://placehold.it/180" class="blah" alt=""
                    style="position: absolute; height: -webkit-fill-available; width: -webkit-fill-available;">
            </div>
        `;
        container.appendChild(newDiv);

        // Check if the new image count reaches the limit, then disable the "Add Image" button.
        if (imageCount >= 10) {
            document.getElementById("addImageButton").disabled = true;
        }
    }
</script>
