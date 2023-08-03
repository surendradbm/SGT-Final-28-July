<x-default-layout>
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header mb-5">
        <div class="card-body py-3">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">Rejected Leaves</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    {{-- <a href="javascript:void(0);" class="btn btn-primary btn-sm inverse icon-style">
                        Go Back
                    </a> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <span class="icon-style"><i class="bi bi-list-ol"></i></span>
                                <label>Total <br>
                                    Leaves</label>
                            </div>
                            <div>
                                <h2 class="count">561</h2>
                            </div>
                        </div>
                    </figure>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" fill="none">
                                    <path
                                        d="M20.508 9.696L12.6 17.604L8.292 13.308L6.6 15L12.6 21L22.2 11.4L20.508 9.696ZM15 3C8.376 3 3 8.376 3 15C3 21.624 8.376 27 15 27C21.624 27 27 21.624 27 15C27 8.376 21.624 3 15 3ZM15 24.6C9.696 24.6 5.4 20.304 5.4 15C5.4 9.696 9.696 5.4 15 5.4C20.304 5.4 24.6 9.696 24.6 15C24.6 20.304 20.304 24.6 15 24.6Z"
                                        fill="#244B8A" />
                                </svg>
                                <label>Approved <br>
                                    Leaves</label>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" fill="none">
                                    <path
                                        d="M15 3C8.4 3 3 8.4 3 15C3 21.6 8.4 27 15 27C21.6 27 27 21.6 27 15C27 8.4 21.6 3 15 3ZM5.4 15C5.4 9.72 9.72 5.4 15 5.4C17.16 5.4 19.2 6.12 20.88 7.44L7.44 20.88C6.12 19.2 5.4 17.16 5.4 15ZM15 24.6C12.84 24.6 10.8 23.88 9.12 22.56L22.56 9.12C23.88 10.8 24.6 12.84 24.6 15C24.6 20.28 20.28 24.6 15 24.6Z"
                                        fill="#244B8A" />
                                </svg>
                                <label>Rejected <br>
                                    Leaves</label>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" fill="none">
                                    <path
                                        d="M14.988 3C8.364 3 3 8.376 3 15C3 21.624 8.364 27 14.988 27C21.624 27 27 21.624 27 15C27 8.376 21.624 3 14.988 3ZM15 24.6C9.696 24.6 5.4 20.304 5.4 15C5.4 9.696 9.696 5.4 15 5.4C20.304 5.4 24.6 9.696 24.6 15C24.6 20.304 20.304 24.6 15 24.6Z"
                                        fill="#244B8A" />
                                    <path d="M15.6 9H13.8V16.2L20.1 19.98L21 18.504L15.6 15.3V9Z" fill="#244B8A" />
                                </svg>
                                <label>Pending <br>
                                    Leaves</label>
                            </div>
                            <div>
                                <h2 class="count">20</h2>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>

        </div>
    </div>
    {{-- First Section Ends --}}

    {{-- Main Content --}}
    <div class="card card-flush shadow-sm mt-5">
        <div class="card-body py-5">
            {{-- SearchBar, Filter, Export Starts --}}
            <div class="flex-grow-1">
                <div class="d-flex flex-stack flex-wrap">

                    <div class="">

                    </div>
                    <div class="">
                        {{-- Filter button Start --}}
                        <button id="filterButton" type="button" class="btn btn-primary me-3 dropdown-toggle"
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
                                            <option value="column1">Select Filter</option>
                                            <option value="column2">Positon </option>
                                            <option value="column3">Gender</option>

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
                        <button id="aman" type="button" class="btn btn-primary" data-kt-menu-trigger="click"
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
                                    <label class="form-check-label text-white" for="headCheckbox">All</label>
                                </div>
                            </th>
                            <th>S.No.</th>
                            <th>Guard Name</th>
                            <th>Shifts b/w Leaves</th>
                            <th>Leave From</th>
                            <th>Leave To</th>
                            <th>Reason Of Leave</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($x = 1; $x <= 5; $x++) { ?>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td><?php echo $x; ?></td>
                            <td>John Daily</td>
                            <td>
                                <u class="text-bg fw-bold" data-bs-toggle="modal" data-bs-target="#ShiftleavesModal">5</u>
                            </td>
                            <td>21/16/2023</td>
                            <td>21/16/2023</td>
                            <td>I am not able to ......</td>
                            <td><span class="badge badge-outline badge-danger">Rejected </span></td>
                            <td>
                                <button
                                    class="btn btn-icon btn-color-gray-700 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="bi bi-three-dots-vertical fs-1"></i>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px p-3"
                                    data-kt-menu="true">
                                    <div class="menu-item">
                                        <a href="javascript:void(0)" class="menu-link" data-bs-toggle="modal"
                                            data-bs-target="#RequestModal">View Detail</a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="javascript:void(0)" class="menu-link" data-bs-toggle="modal"
                                            data-bs-target="#DeleteModal1">Delete History</a>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            {{-- Table Ends --}}
        </div>
    </div>
    {{-- Main Content --}}

    {{-- Shiftleaves Modal Model --}}
    <div class="modal fade" id="ShiftleavesModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"><span>Shift b/w leaves (5)</span>
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row ">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>S.No.</th>
                                        <th>Shift Name</th>
                                        <th>Shift Date</th>
                                        <th>Property Name</th>
                                        <th>Clock-In Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($x = 1; $x <= 5; $x++)
                                    <tr>
                                        <td>{{ $x }}</td>
                                        <td>Hallway Morning Shift</td>
                                        <td>22/05/2023</td>
                                        <td>Holland Property</td>
                                        <td>10:00 AM</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Delete</button>
                </div> --}}
            </div>
        </div>
    </div>

    {{-- Request Modal Model --}}
    <div class="modal fade" id="RequestModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">
                        <span class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <path
                                    d="M14.988 3C8.364 3 3 8.376 3 15C3 21.624 8.364 27 14.988 27C21.624 27 27 21.624 27 15C27 8.376 21.624 3 14.988 3ZM15 24.6C9.696 24.6 5.4 20.304 5.4 15C5.4 9.696 9.696 5.4 15 5.4C20.304 5.4 24.6 9.696 24.6 15C24.6 20.304 20.304 24.6 15 24.6Z"
                                    fill="#244B8A" />
                                <path d="M15.6 9H13.8V16.2L20.1 19.98L21 18.504L15.6 15.3V9Z" fill="#244B8A" />
                            </svg>
                        </span>
                        <span class="me-3">Leave Request</span>
                        <span class="badge badge-outline badge-danger">Rejected </span>
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-lg-12 col-md-12 col-12 mb-5">
                            <label class="form-label">Guard Name</label>
                            <input type="text" class="form-control form-control-solid" value="Manik Shah"
                                readonly />
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 mb-5">
                            <label class="form-label">Shift b/w Leaves</label>
                            <input type="text" class="form-control form-control-solid" value="5 Shifts"
                                readonly />
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 mb-5">
                            <label class="form-label">Leave Duration</label>
                            <input type="text" class="form-control form-control-solid"
                                value="21/06/2023 to 28/06/2023" readonly />
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 mb-5">
                            <label class="form-label">Reason Of Leave</label>
                            <textarea class="form-control form-control-solid" maxlength="150" rows="4" readonly>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="row ">
                        <h4 class="text-dark fw-bold mb-5">Leave Rejection Details</h4>
                        <div class="col-lg-12 col-md-12 col-12 mb-5">
                            <label class="required form-label">Reason Of Rejection</label>
                            <textarea class="form-control form-control-solid" maxlength="150" rows="4">Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</textarea>
                            <span class="fs-6 fw-semibold text-gray-700 float-end">0/150 Characters</span>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    {{-- Delete Model --}}
    <div class="modal fade" id="DeleteModal1" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Delete Confirmation
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this item?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Delete</button>
                </div>
            </div>
        </div>
    </div>



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
