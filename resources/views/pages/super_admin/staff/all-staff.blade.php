<x-default-layout>

    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header mb-5">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">All Staff</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="{{ route('superadmin.staff.add') }}" class="btn btn-primary inverse">+ Add New Staff</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M15 17.4C18.3085 17.4 20.9905 14.1765 20.9905 10.2C20.9905 6.22355 18.3085 3 15 3C11.6916 3 9.00952 6.22355 9.00952 10.2C9.00952 14.1765 11.6916 17.4 15 17.4Z" fill="#244B8A"/>
                                    <path d="M26.7414 23.52C25.6631 21.36 23.6263 19.56 20.9905 18.48C20.2716 18.24 19.433 18.24 18.8339 18.6C17.6358 19.32 16.4377 19.68 15 19.68C13.5623 19.68 12.3642 19.32 11.1661 18.6C10.567 18.36 9.72835 18.24 9.00949 18.6C6.37367 19.68 4.33689 21.48 3.2586 23.64C2.41993 25.2 3.73784 27 5.53499 27H24.465C26.2622 27 27.5801 25.2 26.7414 23.52Z" fill="#244B8A"/>
                                </svg>
                                <label>Total <br>
                                    Staff</label>
                            </div>
                            <div>
                                <h2 class="count">112</h2>
                            </div>
                        </div>
                    </figure>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M20.508 9.696L12.6 17.604L8.292 13.308L6.6 15L12.6 21L22.2 11.4L20.508 9.696ZM15 3C8.376 3 3 8.376 3 15C3 21.624 8.376 27 15 27C21.624 27 27 21.624 27 15C27 8.376 21.624 3 15 3ZM15 24.6C9.696 24.6 5.4 20.304 5.4 15C5.4 9.696 9.696 5.4 15 5.4C20.304 5.4 24.6 9.696 24.6 15C24.6 20.304 20.304 24.6 15 24.6Z" fill="#244B8A"/>
                                </svg>
                                <label>Active <br>
                                    Staff</label>
                            </div>
                            <div>
                                <h2 class="count">100</h2>
                            </div>
                        </div>
                    </figure>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M15 3C8.4 3 3 8.4 3 15C3 21.6 8.4 27 15 27C21.6 27 27 21.6 27 15C27 8.4 21.6 3 15 3ZM5.4 15C5.4 9.72 9.72 5.4 15 5.4C17.16 5.4 19.2 6.12 20.88 7.44L7.44 20.88C6.12 19.2 5.4 17.16 5.4 15ZM15 24.6C12.84 24.6 10.8 23.88 9.12 22.56L22.56 9.12C23.88 10.8 24.6 12.84 24.6 15C24.6 20.28 20.28 24.6 15 24.6Z" fill="#244B8A"/>
                                </svg>
                                <label>Inactive <br>
                                    Staff</label>
                            </div>
                            <div>
                                <h2 class="count">12</h2>
                            </div>
                        </div>
                    </figure>
                </div>

            </div>
        </div>
    </div>
    {{-- First Section Ends --}}
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="card card-flush shadow-sm">
                    <div class="card-body py-5">
                        {{-- Filter button Start --}}
                        <div class="row">
                            <div class="col-md-12 text-end">
                                <button id="filterButton" type="button" class="btn btn-theame me-3 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>
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

                                {{-- Export button Start --}}
                                <button id="aman" type="button" class="btn btn-theame" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
                                    Export Report
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 fw-semibold w-200px p-3" data-kt-menu="true">
                                    <div class="menu-item"><a href="#" class="menu-link" data-kt-export="csv">Export as CSV</a></div>
                                    <div class="menu-item"><a href="#" class="menu-link" data-kt-export="pdf">Export as PDF</a></div>
                                </div>
                                {{-- Export button End --}}
                            </div>
                        </div>
                        {{-- Filter button End --}}

                        {{-- Table Starts --}}
                        <div class="table-responsive mt-5">
                            <table class="table table-hover display responsive table-rounded border gy-5 gs-7"
                                id="dataTable">
                                <thead>
                                    <tr class="bg-primary text-white">
                                        <th class="table_head">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="headCheckbox" onchange="toggleAllCheckboxes()">
                                                <label class="form-check-label" for="headCheckbox">
                                                </label>
                                            </div>
                                        </th>
                                        <th>S.No.</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Current Location</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <th>1</th>
                                        <td><a href="{{route('superadmin.staff.edit')}}">Aman Singh</a></td>
                                        <td>Admin-IND</td>
                                        <td>myidofsgt@gmailcom</td>
                                        <td>India</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">Inactive</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('superadmin.staff.edit')}}"
                                                class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <th>2</th>
                                        <td><a href="{{route('superadmin.staff.edit')}}">Aman Singh</a></td>
                                        <td>Admin-IND</td>
                                        <td>myidofsgt@gmailcom</td>
                                        <td>India</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">Inactive</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('superadmin.staff.edit')}}"
                                                class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <th>3</th>
                                        <td><a href="{{route('superadmin.staff.edit')}}">Aman Singh</a></td>
                                        <td>Admin-IND</td>
                                        <td>myidofsgt@gmailcom</td>
                                        <td>India</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">Inactive</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('superadmin.staff.edit')}}"
                                                class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <th>4</th>
                                        <td><a href="{{route('superadmin.staff.edit')}}">Aman Singh</a></td>
                                        <td>Admin-IND</td>
                                        <td>myidofsgt@gmailcom</td>
                                        <td>India</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">Inactive</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('superadmin.staff.edit')}}"
                                                class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <th>5</th>
                                        <td><a href="{{route('superadmin.staff.edit')}}">Aman Singh</a></td>
                                        <td>Admin-IND</td>
                                        <td>myidofsgt@gmailcom</td>
                                        <td>India</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">Inactive</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('superadmin.staff.edit')}}"
                                                class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <th>6</th>
                                        <td><a href="{{route('superadmin.staff.edit')}}">Aman Singh</a></td>
                                        <td>User Manager</td>
                                        <td>myidofsgt@gmailcom</td>
                                        <td>India</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">Inactive</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('superadmin.staff.edit')}}"
                                                class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <th>7</th>
                                        <td><a href="{{route('superadmin.staff.edit')}}">Aman Singh</a></td>
                                        <td>User Manager</td>
                                        <td>myidofsgt@gmailcom</td>
                                        <td>India</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">Inactive</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('superadmin.staff.edit')}}"
                                                class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <th>8</th>
                                        <td><a href="{{route('superadmin.staff.edit')}}">Aman Singh</a></td>
                                        <td>User Manager</td>
                                        <td>myidofsgt@gmailcom</td>
                                        <td>India</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">Inactive</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('superadmin.staff.edit')}}"
                                                class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <th>9</th>
                                        <td><a href="{{route('superadmin.staff.edit')}}">Aman Singh</a></td>
                                        <td>User Manager</td>
                                        <td>myidofsgt@gmailcom</td>
                                        <td>India</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">Inactive</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('superadmin.staff.edit')}}"
                                                class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <th>10</th>
                                        <td><a href="{{route('superadmin.staff.edit')}}">Aman Singh</a></td>
                                        <td>User Manager</td>
                                        <td>myidofsgt@gmailcom</td>
                                        <td>India</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">Inactive</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('superadmin.staff.edit')}}"
                                                class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Table Ends --}}
                    </div>
                </div>
            </form>
        </div>
    </div>

{{-- Delete Modal Starts --}}
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1"
aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete Confirmation
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>All the Data Will be lost. do you want to delete this staff ?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-theame">Delete</button>
        </div>
    </div>
</div>
</div>
{{-- Delete Modal Ends --}}




</x-default-layout>
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

<script>
    const filterButton = document.getElementById('filterButton');
    const filterDropdown = document.getElementById('filterDropdown');

    filterButton.addEventListener('click', () => {
        filterDropdown.classList.toggle('show');
    });
</script>
