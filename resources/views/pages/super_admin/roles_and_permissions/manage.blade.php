<x-default-layout>
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header mb-5">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">Roles & Permissions</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="{{route('superadmin.roles_and_permissions.add')}}" class="btn btn-primary inverse">Add Roles & Permissions</a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-end">
                    {{-- Breadcrumbs (Start) --}}
                    <ul class="breadcrumb">
                        <li><a href="{{route("superadmin.roles_and_permissions.manage")}}">Roles & Permissions</a></li>
                        <li><i class="fas fa-chevron-right"></i></li>
                        <li class="active"><a href="{{route("superadmin.roles_and_permissions.manage")}}">Manage Roles & Permissions</a></li>
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
                <div class="card card-flush shadow-sm">
                    <div class="card-body py-5">
                        {{-- Filter, Export  Starts --}}
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-theame float_right" id="aman"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                   >
                                    <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    Export Report
                                </button>
                                <div id="kt_datatable_example_export_menu"
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="csv">
                                            Export as CSV
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                            Export as PDF
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <button id="filterButton" type="button" class="btn float_right btn-theame me-3"
                                    >
                                    <i class="ki-duotone ki-filter fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    Filter
                                </button>
                                <div id="filterDropdown" class="dropdown-menu filter_dropdown"
                                    >
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="dropdown-item">
                                                <label for="columns">Columns:</label>
                                                <select id="columns" class="form-control">
                                                    <option value="column1">Select Filter</option>
                                                    <option value="column2">Positon </option>
                                                    <option value="column3">Gender</option>
                                                    <option value="column3">country</option>
                                                    <option value="column3">state</option>
                                                    <option value="column3">City</option>
                                                    <option value="column3">Account Cration</option>
                                                    <option value="column3">Property Assign</option>
                                                    <option value="column3">Missed Shift</option>
                                                    <option value="column3">Reports</option>
                                                    <option value="column3">Toltal Leaves</option>
                                                    <option value="column3">Last Login</option>
                                                    <option value="column3">Status</option>
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
                            </div>
                        </div>
                        {{-- Filter, Export  Ends --}}
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
                                        <p>Are you sure you want to delete this item?</p>
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
                        {{-- Table Starts --}}
                        <div class="table-responsive mt-5">
                            <table class="table table-hover table-rounded border gy-5 gs-7" id="dataTable">
                                <thead>
                                    <tr class="bg-primary text-white">
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="headCheckbox" onchange="toggleAllCheckboxes()">
                                                <label class="form-check-label" for="headCheckbox">
                                                </label>
                                            </div>
                                        </th>
                                        <th>S.No.</th>
                                        <th>Roles</th>
                                        <th>Total Users</th>
                                        <th>Creation Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($x = 1; $x <= 10; $x++) { ?>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input body-checkbox" type="checkbox"
                                                        value="" id="checkbox1">
                                                    <label class="form-check-label" for="checkbox1">
                                                    </label>
                                                </div>
                                            </td>
                                            <td><?php echo $x; ?></td>
                                            <td>Admin-IND</td>
                                            <td>10</td>
                                            <td>01/11/2083</td>
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
                                                <a href="#"
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
                                    <?php } ?>




                                </tbody>
                            </table>
                        </div>
                        {{-- Table Ends --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
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
