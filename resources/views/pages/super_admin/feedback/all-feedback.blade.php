<x-default-layout>
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">Feedback</div>
                </div>
                {{-- <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="{{ route('superadmin.coupon.add') }}" class="btn btn-primary inverse">+ Create Feedback</a>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.25 21.25L15 17.575C14.5125 17.525 14.15 17.5 13.75 17.5C10.4125 17.5 3.75 19.175 3.75 22.5V25H15L11.25 21.25ZM13.75 15C16.5125 15 18.75 12.7625 18.75 10C18.75 7.2375 16.5125 5 13.75 5C10.9875 5 8.75 7.2375 8.75 10C8.75 12.7625 10.9875 15 13.75 15Z"
                                        fill="#244B8A" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.3375 25.625L15 21.25L16.75 19.4875L19.3375 22.0875L25.75 15.625L27.5 17.3875L19.3375 25.625Z"
                                        fill="#244B8A" />
                                </svg>
                                <label>Total <br>
                                    Feedbacks</label>
                            </div>
                            <div>
                                <h2 class="count">56</h2>
                            </div>
                        </div>
                    </figure>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.15 11.5488V1.88281C7.4 2.55781 2 8.34931 2 15.3828C2 22.4163 7.4 28.2078 14.15 28.8828V19.2168C12.8 18.6633 11.45 17.1648 11.45 15.3828C11.45 13.6008 12.8 12.1023 14.15 11.5488ZM19.361 14.0328H29C28.352 7.62031 23.6 2.51731 16.85 1.88281V11.5488C18.2 11.9538 18.902 12.8718 19.361 14.0328ZM16.85 19.2168V28.8828C23.6 28.2483 28.352 23.1453 29 16.7328H19.361C18.902 17.8938 18.2 18.8118 16.85 19.2168Z"
                                        fill="#244B8A" />
                                </svg>
                                <label>Positive <br>
                                    Feedbacks</label>
                            </div>
                            <div>
                                <h2 class="count">541</h2>
                            </div>
                        </div>
                    </figure>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.8375 16.4124C22.55 17.5749 23.75 19.1499 23.75 21.2499V24.9999H28.75V21.2499C28.75 18.5249 24.2875 16.9124 20.8375 16.4124Z"
                                        fill="#244B8A" />
                                    <path
                                        d="M11.25 15C14.0114 15 16.25 12.7614 16.25 10C16.25 7.23858 14.0114 5 11.25 5C8.48858 5 6.25 7.23858 6.25 10C6.25 12.7614 8.48858 15 11.25 15Z"
                                        fill="#244B8A" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.75 15C21.5125 15 23.75 12.7625 23.75 10C23.75 7.2375 21.5125 5 18.75 5C18.1625 5 17.6125 5.125 17.0875 5.3C18.125 6.5875 18.75 8.225 18.75 10C18.75 11.775 18.125 13.4125 17.0875 14.7C17.6125 14.875 18.1625 15 18.75 15Z"
                                        fill="#244B8A" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.25 16.25C7.9125 16.25 1.25 17.925 1.25 21.25V25H21.25V21.25C21.25 17.925 14.5875 16.25 11.25 16.25Z"
                                        fill="#244B8A" />
                                </svg>
                                <label>Negative <br>
                                    Feedbacks</label>
                            </div>
                            <div>
                                <h2 class="count">2345</h2>
                            </div>
                        </div>
                    </figure>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.5 13.75V3.75H18.75V7.5H11.25V3.75H2.5V13.75H11.25V10H13.75V22.5H18.75V26.25H27.5V16.25H18.75V20H16.25V10H18.75V13.75H27.5Z"
                                        fill="#244B8A" />
                                </svg>

                                <label>Netural <br>
                                    Feedbacks</label>
                            </div>
                            <div>
                                <h2 class="count">6751</h2>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    {{-- First Section Ends --}}

    {{-- Container Start --}}
    <div class="card shadow-sm mt-5">
        <div class="card-body">
            {{-- SearchBar, Filter, Export Starts --}}
            <div class="flex-grow-1">
                <div class="d-flex flex-stack flex-wrap">
                    <div class="col-md-4">
                        {{-- Search Keyword Start --}}
                        {{-- <input type="text" class="form-control" placeholder="Search by name..."> --}}
                        {{-- Search Keyword End --}}
                    </div>
                    <div class="">
                        {{-- Filter button Start --}}
                        <button id="filterButton" type="button" class="btn btn-theame me-3 dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            Filter
                        </button>
                        <div id="filterDropdown" class="dropdown-menu filter_dropdown">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="dropdown-item">
                                        <label for="columns">Columns:</label>
                                        <select id="columns" class="form-control">
                                            <option value="">Select Filter</option>
                                            <option value="Language">Language </option>
                                            <option value="Total Keywords">Total Keywords</option>
                                            <option value="Translated Keywords">Translated Keywords</option>
                                            <option value="Status">Status</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="dropdown-item">
                                        <label for="operator">Operator:</label>
                                        <select id="operator" class="form-control">
                                            <option value="equal">Select Filter</option>
                                            <option value="equal">Contains</option>
                                            <option value="equal">Equal</option>
                                            <option value="equal">Starts with</option>
                                            <option value="notEqual">Ends with</option>
                                            <option value="greaterThan">Is empty</option>
                                            <option value="lessThan">Is not empty</option>
                                            <option value="lessThan">Is any of</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="dropdown-item">
                                        <label for="value">Value:</label>
                                        <input type="text" id="value" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Filter button End --}}

                        {{-- Export button Start --}}
                        <button id="aman" type="button" class="btn btn-theame" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            Export Report
                        </button>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 fw-semibold w-200px p-3"
                            data-kt-menu="true">
                            <div class="menu-item"><a href="#" class="menu-link" data-kt-export="csv">Export
                                    as CSV</a></div>
                            <div class="menu-item"><a href="#" class="menu-link" data-kt-export="pdf">Export
                                    as PDF</a></div>
                        </div>
                        {{-- Export button End --}}

                    </div>
                </div>

            </div>
            {{-- SearchBar, Filter, Export  Ends --}}

            {{-- Table Starts --}}
            <div class="table-responsive mt-5">
                <table class="table table-hover table-rounded border gy-5 gs-7" id="dataTable">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="headCheckbox"
                                        onchange="toggleAllCheckboxes()">
                                    <label class="form-check-label" for="headCheckbox">
                                    </label>
                                </div>
                            </th>
                            <th>S.No.</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Given By</th>
                            <th>Feedback Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>1</td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                        alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td><label class="text-bg fw-bold fs-6">Likely</label></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                    data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                    data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>2</td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                        alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td><label class="text-bg fw-bold fs-6">Nice</label></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                    data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                    data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>3</td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                        alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td><label class="text-bg fw-bold fs-6">Likely</label></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                    data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                    data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>4</td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                        alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td><label class="text-bg fw-bold fs-6">Nice</label></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                    data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                    data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>5</td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                        alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td><label class="text-bg fw-bold fs-6">Not at all</label></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                    data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                    data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>6</td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                        alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td><label class="text-bg fw-bold fs-6">Average</label></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                    data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                    data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>7</td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                        alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td><label class="text-bg fw-bold fs-6">Not at all</label></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                    data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                    data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>8</td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                        alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td><label class="text-bg fw-bold fs-6">Nice</label></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                    data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                    data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Container Start --}}

    {{-- View Modal Starts --}}
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Feedback
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <h4 class="text-dark fw-bold"><label for="feedback_lavel">Feedback Level</label></h4>
                                <input type="text" class="form-control" name="feedback_lavel" id="feedback_lavel"
                                    placeholder="Not at all">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <h4 class="text-dark fw-bold"><label for="description">Description</label></h4>
                                <textarea type="text" class="form-control" name="description" id="description" rows="5"
                                    placeholder="Gorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-theame" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- View Modal Ends --}}

    {{-- Delete Modal Starts --}}
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1"
        aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete Confirmation
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>All the Data Will be lost. do you want to delete this staff ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-theame">Delete</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Delete Modal Ends --}}



    {{-- Toggle Active Inactive --}}
    <script>
        function toggleSwitch() {
            // var checkboxes = document.getElementsByClassName("form-check-input");
            var checkboxes = document.querySelectorAll(".body-toggle");
            for (var i = 0; i < checkboxes.length; i++) {
                var checkbox = checkboxes[i];
                var label = checkbox.nextElementSibling;

                if (checkbox.checked) {
                    label.textContent = "Active";
                } else {
                    label.textContent = "Inactive";
                }
            }
        }
    </script>
    {{-- Toggle Active Inactive Ends --}}

    {{-- Checkbox --}}
    <script>
        function toggleAllCheckboxes() {
            var headCheckbox = document.getElementById("headCheckbox");
            // var checkboxes = document.querySelectorAll("tbody input[type='checkbox']");
            var checkboxes = document.querySelectorAll(".body-checkbox");

            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = headCheckbox.checked;
            }
        }
    </script>
    {{-- Checkbox Ends --}}





</x-default-layout>
