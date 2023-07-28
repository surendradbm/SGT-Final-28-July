<x-default-layout>
{{-- Breadcrumbs (Start) --}}
<div class="py-3">
    <ul class="breadcrumb">
        <li><a href="{{route("superadmin.properties.index")}}">All New Properties</a></li>
        <li><i class="fas fa-chevron-right"></i></li>
        <li class="active"><a href="{{route("superadmin.properties.create")}}">Create new property</a></li>
    </ul>
</div>
{{-- Breadcrumbs (End) --}}

{{-- First Section Starts --}}
<div class="card shadow-sm guard-header">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-lg-6 col-md-4 col-12">
                <div class="title">Create new property</div>
                <p class="description">Fill out the below form to create a new property.</p>
            </div>
            <div class="col-lg-6 col-md-4 col-12 text-end">
                <a href="{{ route('superadmin.properties.index') }}" class="btn btn-primary">Back to Properties</a>
            </div>
        </div>

    </div>
</div>
{{-- First Section Ends --}}

<section class="property-section mt-6">

    {{-- Section Content (Start) --}}
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

        <div class="card-body p-5">
            <div class="row mb-6">
                <h1 class="title fw-bold text-primary h3 mb-1">Add property pictures</h1>
                <p class="description mb-0 small">Upload property pictures (if any)</p>
            </div>
            <div class="row">
                <div class="d-flex flex-wrap">
                    <div class="d-inline-block mb-7 me-7">
                        <div class="uploaded-image-card">
                            <button><i class="far fa-times-circle"></i></button>
                            <img src="{{asset('assets/images/properties/upload-image.png')}}" alt="">
                        </div>
                    </div>
                    <div class="d-inline-block mb-7 me-7">
                        <div class="uploaded-image-card">
                            <button><i class="far fa-times-circle"></i></button>
                            <img src="{{asset('assets/images/properties/upload-image.png')}}" alt="">
                        </div>
                    </div>
                    <div id="file-upload-inputs" class="d-inline-block">

                    </div>
                    <div class="d-inline-block mb-7 me-7">
                        <div class="h-100 w-100 d-flex align-items-center justify-content-center">
                            <button onclick="handleCreateUploadImageInput(event)" class="btn btn-primary inverse">Add more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-10">
                <i><p class="description mb-1 small">Max 10 photos of property can be uploaded</p></i>
                <i><p class="description small">Maximum image size 500kb and should be in JPG or PNG format.</p></i>
            </div>

            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label class="form-label required">Property Name</label>
                        <input type="text" placeholder="Enter property name" class="form-control mb-1" required>
                        <div class="text-end">
                        <small class="ms-auto text-dark">0/36 Characters</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label class="form-label required">Property Type</label>
                        <select class="form-select" required>
                            <option value="">Choose from list</option>
                            <option value="Residential Property">Residential Property</option>
                            <option value="Commercial Property">Commercial Property</option>
                            <option value="Healthcare Property">Healthcare Property</option>
                            <option value="Educational Property">Educational Property</option>
                            <option value="Office Property">Office Property</option>
                            <option value="Hotel Property">Hotel Property</option>
                            <option value="Government Property">Government Property</option>
                            <option value="Financial Property">Financial Property</option>
                            <option value="Other Property">Other Property</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label class="form-label">Property Area</label>
                        <input type="text" placeholder="In sqft" class="form-control mb-1" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label class="required form-label">Country</label>
                        <select class="form-select" required>
                            <option value="">Choose from list</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label class="required form-label">State</label>
                        <select class="form-select" required>
                            <option value="">Choose from list</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label class="form-label">City</label>
                        <select class="form-select" required>
                            <option value="">Choose from list</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mt-6">
                <div class="col-lg-6 col-12">
                    <h4 class="text-dark requird">Emergency Contact*</h4>
                </div>
                <div class="col-lg-6 col-12 text-end">
                    <a href="javascript:void(0);" onclick="handleCreateContactInput(event)">+ Add more</a>
                </div>
            </div>
            <div class="row mt-5">
                <div id="emergency-contact-div">

                </div>
                <div class="col-lg-12 col-12">
                    <div class="form-group w-100">
                        <label class="form-label">Property Description</label>
                        <textarea rows="3" class="form-control" required placeholder="This is a property description area where in person can write basic description of the property for the destails This is a property description area where in person can write basic description of the property for the destails This is a property description area where in person can write basic description of the property for the destails.  write basic description of the property for the destails This is a property"></textarea>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 mb-6">
                    <div class="form-group">
                        <h4 class="text-dark">Location*</h4>
                        <p class="description small">(Please search your property location from below)</p>
                        <div class="form-control d-flex justify-content-between align-items-center">
                            <input type="text" placeholder="Search location" style="border: none; outline: none; width: 90%;" required>
                            <i class="fas fa-location text-dark fa-2xl"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Latitude" required>
                        <div class="text-end mt-2">
                            <a href="#" class="text-decoration-underline" style="color: #244B8A;" class="ms-auto text-dark">Drop your location from map
                                <i class="fas fa-location text-dark fa-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Longitude" required>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <figure class="overflow-hidden rounded">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121059.04711154905!2d73.78056547023556!3d18.524598599519145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1688622304610!5m2!1sen!2sin" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </figure>
                </div>
            </div>

        </div>
    </div>




    <div class="card property-create-card mb-6">
        <div class="card-body p-5 text-end">
        <a href="{{route("superadmin.properties.index")}}" class="btn btn-primary inverse me-3">Save & Exit</button> </a>
        <a href="{{route("superadmin.properties.shift")}}" class="btn btn-primary">Save & Next</a>
        </div>
    </div>
    {{-- Section Content (End) --}}

</section>


<script>
    const handleCheckCharacterLength = (event) => {
        let inputLength = event.target.value.length;
        event.target.parentNode.querySelector('small').innerHTML = `${inputLength}/25 Characters`;
    }

    const handleRemoveContactInput = (event) => {
        event.target.closest('.emergency-contact-input-row').remove();
    }

    const handleCreateContactInput = (event) => {
        const inputLength = document.querySelectorAll('.emergency-contact-input-row').length;

        let html = `<div class="col-lg-6 col-12 d-flex">
            <div class="form-group">
                <div class="me-2 py-4">
                    <label class="form-label">${inputLength + 1}.</label>
                </div>
            </div>
            <div class="form-group w-100">
                <input onkeyup="handleCheckCharacterLength(event)" type="text" placeholder="Contact Name" class="form-control mb-1" required maxlength="25" minlength="1">
                <div class="text-end">
                    <small class="ms-auto text-dark">0/25 Characters</small>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 d-flex">
            <div class="form-group w-100">
                <input type="text" placeholder="Contact Number" class="form-control mb-1" required>
            </div>
            <div class="form-group">
                <button class="me-2 border-0 bg-white py-4 ps-5" onclick="handleRemoveContactInput(event)">
                    <i class="far fa-trash-alt"></i>
                </button>
            </div>
        </div>`;

        const parentRow = document.createElement('div');
        parentRow.className = "row mb-4 emergency-contact-input-row";
        parentRow.innerHTML = html;

        document.getElementById('emergency-contact-div').appendChild(parentRow);
    }

    handleCreateContactInput();
</script>


<script>
    const handleCreateUploadImageInput = (event) => {

    let html = `<div>
                    <div class="image-upload-div">
                        <input type="file" required>
                        <div>
                            <img src="/assets/images/properties/file-upload.svg" alt="file-upload">
                            <p class="description small">Upload image<p>
                        </div>
                    </div>
                </div>`;

    const parentRow = document.createElement('div');
    parentRow.className = "d-inline-block mb-7 me-7";
    parentRow.innerHTML = html;

    document.getElementById('file-upload-inputs').appendChild(parentRow);

    }
</script>

</x-default-layout>
