<x-default-layout>
    <style>
        .table thead {
        background: #244b8a;
    }
    </style>
        {{-- First Section Starts --}}
        <div class="card shadow-sm guard-header">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-lg-12 col-md-4 col-12">
                        <div class="title">Routes</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12 mb-3">
                        <figure class="info-card card">
                            <div class="card-body p-4">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M22.6667 2.66667V1.33333C22.6667 0.6 22.0667 0 21.3333 0H18.6667C17.9333 0 17.3333 0.6 17.3333 1.33333V2.66667H16V8C16 8.73333 16.6 9.33333 17.3333 9.33333H18.6667V18.6667C18.6667 20.1333 17.4667 21.3333 16 21.3333C14.5333 21.3333 13.3333 20.1333 13.3333 18.6667V5.33333C13.3333 2.38667 10.9467 0 8 0C5.05333 0 2.66667 2.38667 2.66667 5.33333V14.6667H1.33333C0.6 14.6667 0 15.2667 0 16V21.3333H1.33333V22.6667C1.33333 23.4 1.93333 24 2.66667 24H5.33333C6.06667 24 6.66667 23.4 6.66667 22.6667V21.3333H8V16C8 15.2667 7.4 14.6667 6.66667 14.6667H5.33333V5.33333C5.33333 3.86667 6.53333 2.66667 8 2.66667C9.46667 2.66667 10.6667 3.86667 10.6667 5.33333V18.6667C10.6667 21.6133 13.0533 24 16 24C18.9467 24 21.3333 21.6133 21.3333 18.6667V9.33333H22.6667C23.4 9.33333 24 8.73333 24 8V2.66667H22.6667Z" fill="#244B8A"/>
                                    </svg>
                                    <label>Total <br>
                                        Routes</label>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <path d="M20.508 9.696L12.6 17.604L8.292 13.308L6.6 15L12.6 21L22.2 11.4L20.508 9.696ZM15 3C8.376 3 3 8.376 3 15C3 21.624 8.376 27 15 27C21.624 27 27 21.624 27 15C27 8.376 21.624 3 15 3ZM15 24.6C9.696 24.6 5.4 20.304 5.4 15C5.4 9.696 9.696 5.4 15 5.4C20.304 5.4 24.6 9.696 24.6 15C24.6 20.304 20.304 24.6 15 24.6Z" fill="#244B8A"/>
                                    </svg>
                                    <label>Active <br>
                                        Routes</label>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <path d="M15 3C8.4 3 3 8.4 3 15C3 21.6 8.4 27 15 27C21.6 27 27 21.6 27 15C27 8.4 21.6 3 15 3ZM5.4 15C5.4 9.72 9.72 5.4 15 5.4C17.16 5.4 19.2 6.12 20.88 7.44L7.44 20.88C6.12 19.2 5.4 17.16 5.4 15ZM15 24.6C12.84 24.6 10.8 23.88 9.12 22.56L22.56 9.12C23.88 10.8 24.6 12.84 24.6 15C24.6 20.28 20.28 24.6 15 24.6Z" fill="#244B8A"/>
                                    </svg>
                                    <label>Inactive <br>
                                        Routes</label>
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

        <div class="card card-flush shadow-sm mt-5">
            <div class="card-body py-5">
                {{-- SearchBar, Filter, Export Starts --}}
                <div class="flex-grow-1">
                    <div class="d-flex flex-stack flex-wrap">

                        <div class="">

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
                                        <label class="form-check-label text-white" for="headCheckbox">All</label>
                                    </div>
                                </th>
                                <th>S.No.</th>
                                <th>Route Number</th>
                                <th>Property Name</th>
                                <th>Shift Name</th>
                                <th>Guard Assigned</th>
                                <th>Total Checkpoint</th>
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
                                <td class="text-bg fw-bold">95</td>
                                <td>Johnson's General Stores</td>
                                <td>Hallway Shift 4</td>
                                <td><u class="text-bg fw-bold">12</u></td>
                                <td><u class="text-bg fw-bold">12</u></td>
                                <td>
                                    <button class="btn btn-icon btn-active-color-primary" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="bi bi-three-dots-vertical text-dark fs-1"></i>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 fw-semibold w-200px p-3"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <a href="#" class="menu-link">
                                                View On Map
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <a href="#" class="menu-link" data-bs-toggle="modal"
                                            data-bs-target="#edit-route-modal">
                                                Edit Route
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <a href="#" class="menu-link" data-bs-toggle="modal"
                                                data-bs-target="#delete-report-modal">
                                                Delete Route
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
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


        {{-- General Report Modal --}}
        <div class="modal fade" id="edit-route-modal" tabindex="-1" aria-labelledby="edit-route-modal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered rounded modal-lg">
                <div class="modal-content">
                    {{-- <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <svg class="me-2" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.8 11.592V3C7.8 3.6 3 8.748 3 15C3 21.252 7.8 26.4 13.8 27V18.408C12.6 17.916 11.4 16.584 11.4 15C11.4 13.416 12.6 12.084 13.8 11.592ZM18.432 13.8H27C26.424 8.1 22.2 3.564 16.2 3V11.592C17.4 11.952 18.024 12.768 18.432 13.8ZM16.2 18.408V27C22.2 26.436 26.424 21.9 27 16.2H18.432C18.024 17.232 17.4 18.048 16.2 18.408Z"
                                    fill="#244B8A" />
                            </svg>
                            General Report
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div> --}}
                    <div class="modal-body" style="background-image: url({{ asset('/assets/images/properties/map.png') }})">
                        <div class="row w-600px h-300px">

                        </div>
                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-primary inverse" data-bs-dismiss="modal">Cancel</button>
                        <button ty e="button" class="btn btn-primary">Save</button>
                    </div> --}}
                </div>
            </div>
        </div>

        {{-- Delete Modal --}}
        <div class="modal fade" id="delete-report-modal" tabindex="-1" aria-labelledby="delete-report-modal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <p class="fs-4 fw-bold">All the Data Will be lost. Do you want to <br> delete this Route?</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary ms-3">Continue</button>
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
