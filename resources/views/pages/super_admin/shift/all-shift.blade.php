<x-default-layout>
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">Shifts</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="{{ route('superadmin.shift.add_shift') }}" class="btn btn-primary inverse">+ Add New
                        Shift</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M9.8 16.4444V15.3333H2.111L2.1 19.7778C2.1 21.0111 3.079 22 4.3 22H19.7C20.921 22 21.9 21.0111 21.9 19.7778V15.3333H14.2V16.4444H9.8ZM20.8 6.44444H16.389V4.22222L14.189 2H9.789L7.589 4.22222V6.44444H3.2C1.99 6.44444 1 7.44444 1 8.66667V12C1 13.2333 1.979 14.2222 3.2 14.2222H9.8V12H14.2V14.2222H20.8C22.01 14.2222 23 13.2222 23 12V8.66667C23 7.44444 22.01 6.44444 20.8 6.44444ZM14.2 6.44444H9.8V4.22222H14.2V6.44444Z"
                                        fill="#244B8A" />
                                </svg>
                                <label>Total <br>
                                    Shifts</label>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" fill="none">
                                    <path
                                        d="M20.508 9.696L12.6 17.604L8.292 13.308L6.6 15L12.6 21L22.2 11.4L20.508 9.696ZM15 3C8.376 3 3 8.376 3 15C3 21.624 8.376 27 15 27C21.624 27 27 21.624 27 15C27 8.376 21.624 3 15 3ZM15 24.6C9.696 24.6 5.4 20.304 5.4 15C5.4 9.696 9.696 5.4 15 5.4C20.304 5.4 24.6 9.696 24.6 15C24.6 20.304 20.304 24.6 15 24.6Z"
                                        fill="#244B8A" />
                                </svg>
                                <label>Active <br>
                                    Shifts</label>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" fill="none">
                                    <path
                                        d="M15.9414 7.48294C17.0379 7.48294 17.9267 6.59133 17.9267 5.49147C17.9267 4.39161 17.0379 3.5 15.9414 3.5C14.8449 3.5 13.9561 4.39161 13.9561 5.49147C13.9561 6.59133 14.8449 7.48294 15.9414 7.48294Z"
                                        fill="#244B8A" />
                                    <path
                                        d="M22.126 14.0608C21.5744 13.9651 19.3658 13.5813 19.2425 13.5401C19.1014 13.4929 19.2425 13.5401 19.1956 13.4693C19.1488 13.3985 17.222 9.32129 17.0339 9.10914C16.846 8.897 16.3291 8.35479 15.6009 8.11921C14.8725 7.88363 14.1441 8.26056 14.1441 8.26056C14.1441 8.26056 10.5258 10.3347 10.2909 10.4523C10.0558 10.5702 9.8446 10.9945 9.8446 10.9945L8.15535 14.18C8.0169 14.3548 7.93377 14.5756 7.93377 14.8164C7.93377 15.3825 8.39144 15.8416 8.95583 15.8416C9.43833 15.8416 9.84189 15.5056 9.94911 15.0547L11.5245 12.0669L12.5114 11.5131C12.4408 11.7252 11.5363 16.1443 11.5363 16.1443L10.62 21.3764L7.40898 25.2572C7.17805 25.4731 7.03296 25.78 7.03296 26.1214C7.03296 26.7743 7.56071 27.304 8.21167 27.304C8.6081 27.304 8.95829 27.1066 9.17175 26.8054C9.76 26.1117 12.7189 22.6232 13.0045 22.2835C13.3217 21.9065 13.4038 21.7181 13.4508 21.4707C13.4978 21.223 14.0265 18.0297 14.0265 18.0297L17.0573 21.07V26.4317H17.0634C17.1244 27.0319 17.6298 27.5001 18.2441 27.5001C18.8582 27.5001 19.3635 27.0319 19.4243 26.4317H19.4304C19.4304 26.4317 19.4302 26.3937 19.4297 26.3278C19.4297 26.3219 19.4304 26.3158 19.4304 26.3098C19.4304 26.3022 19.4294 26.2945 19.4294 26.2866C19.4238 25.4696 19.3987 21.4021 19.4304 20.4807C19.4656 19.4558 19.1011 19.2318 19.019 19.1375C18.9366 19.0433 16.1056 16.0266 16.1056 16.0266L16.728 12.9983C16.728 12.9983 17.5388 14.589 17.6209 14.7658C17.7033 14.9424 17.9618 15.2609 18.2316 15.3196C18.5021 15.3786 21.8737 16.0621 21.8737 16.0621L21.8752 16.055C21.9246 16.0624 21.9748 16.0703 22.0264 16.0703C22.5824 16.0703 23.033 15.6184 23.033 15.0606C23.0335 14.5367 22.6348 14.1116 22.126 14.0608Z"
                                        fill="#244B8A" />
                                </svg>
                                <label>In-Progress <br>
                                    Shifts</label>
                            </div>
                            <div>
                                <h2 class="count">12</h2>
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
                                <label>Missed <br>
                                    Shifts</label>
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
                                <p>All the Data Will be lost. Do you want to delete Shift ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Delete Modal Ends --}}
                <div class="card card-flush shadow-sm mt-5">
                    <div class="card-body py-5">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-theame float_right" id="aman"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    {{ __('table.Export_Report') }}
                                </button>
                                <div id="kt_datatable_example_export_menu"
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="csv">
                                            {{ __('table.csv') }}
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                            {{ __('table.pdf') }}
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <button id="filterButton" type="button" class="btn float_right btn-theame me-3">
                                    <i class="ki-duotone ki-filter fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    {{ __('table.Filter') }}
                                </button>
                                <div id="filterDropdown" class="dropdown-menu filter_dropdown">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="dropdown-item">
                                                <label for="columns">{{ __('table.Columns') }}:</label>
                                                <select id="columns" class="form-control">
                                                    <option value="column1">{{ __('table.Select_Filter') }}</option>
                                                    <option value="column2">{{ __('table.Shift_Name') }}</option>
                                                    <option value="column3">{{ __('table.Property_Name') }}</option>
                                                    <option value="column3">{{ __('table.Clock-In_Clock-out') }}
                                                    </option>
                                                    <option value="column3">{{ __('table.Created_By') }}</option>
                                                    <option value="column3">{{ __('table.Created_on') }}</option>
                                                    <option value="column3">{{ __('table.Shift_Status') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dropdown-item">
                                                <label for="operator">{{ __('table.Operator') }}:</label>
                                                <select id="operator" class="form-control">
                                                    <option value="equal">{{ __('table.Select_Filter') }}</option>
                                                    <option value="equal">{{ __('table.Contains') }}</option>
                                                    <option value="equal">{{ __('table.Equal') }}</option>
                                                    <option value="equal">{{ __('table.Starts_with') }}</option>
                                                    <option value="notEqual">{{ __('table.Ends_with') }}</option>
                                                    <option value="greaterThan">{{ __('table.Is_empty') }}</option>
                                                    <option value="lessThan">{{ __('table.Is_not_empty') }}</option>
                                                    <option value="lessThan">{{ __('table.Is_any_of') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dropdown-item">
                                                <label for="value">{{ __('table.Value') }}:</label>
                                                <input type="text" id="value" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <th>{{ __('table.s_no') }}</th>
                                        <th>{{ __('table.Shift_Name') }}</th>
                                        <th>{{ __('table.Property_Name') }}</th>
                                        <th>{{ __('table.Clock-In_Clock-out') }}</th>
                                        <th>{{ __('table.Created_By') }}</th>
                                        <th>{{ __('table.Created_on') }}</th>
                                        <th>{{ __('table.Shift_Status') }}</th>
                                        <th>{{ __('table.Status') }}</th>
                                        <th>{{ __('table.Action') }}</th>
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
                                        <td>1</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u class="text-hover-primary">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u class="text-hover-primary">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
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
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="bi bi-three-dots-vertical"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Download QR
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                            </div>
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
                                        <td>2</td>
                                        <td>Shift 2</td>
                                        <td><u class="text-hover-primary">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u class="text-hover-primary">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Upcoming</td>
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
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="bi bi-three-dots-vertical"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Download QR
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>3</td>
                                        <td>Hallway Shift 3</td>
                                        <td><u class="text-hover-primary">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u class="text-hover-primary">Petersburg and nancarrow St...</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Inprogress</td>
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
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="bi bi-three-dots-vertical"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Download QR
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>4</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u class="text-hover-primary">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u class="text-hover-primary">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
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
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="bi bi-three-dots-vertical"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Download QR
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>5</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u class="text-hover-primary">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u class="text-hover-primary">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
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
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="bi bi-three-dots-vertical"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Download QR
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>6</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u class="text-hover-primary">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u class="text-hover-primary">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
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
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="bi bi-three-dots-vertical"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Download QR
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>7</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u class="text-hover-primary">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u class="text-hover-primary">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
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
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="bi bi-three-dots-vertical"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Download QR
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>8</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u class="text-hover-primary">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u class="text-hover-primary">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
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
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="bi bi-three-dots-vertical"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Download QR
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>9</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u class="text-hover-primary">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u class="text-hover-primary">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
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
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="bi bi-three-dots-vertical"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Download QR
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>10</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u class="text-hover-primary">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u class="text-hover-primary">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
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
                                            <button
                                                class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="bi bi-three-dots-vertical"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Download QR
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
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
</x-default-layout>
