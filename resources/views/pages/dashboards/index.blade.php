<x-default-layout>
    <style>
        .nav-item .active {
            color: var(--bs-text-gray-800) !important;
            background: white !important;
        }

        .accordion-button:not(.collapsed) {
            color: #244a8d !important;
            background-color: var(--bs-accordion-active-bg);
            box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
        }
    </style>


    <div class="row gx-5 gx-xl-10">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="text-gray-800 fs-2 fw-bold">SGT Dashboard</div>
        </div>

    </div>

    <div class="row gx-5 gx-xl-10">

        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="symbol symbol-70px symbol-circle me-5">
                        <span class="symbol-label bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31"
                                fill="none">
                                <path d="M7.75 13.2857H3.1V23.619H7.75V13.2857Z" fill="#244B8A" />
                                <path d="M17.825 13.2857H13.175V23.619H17.825V13.2857Z" fill="#244B8A" />
                                <path d="M31 26.5714H0V31H31V26.5714Z" fill="#244B8A" />
                                <path d="M27.9 13.2857H23.25V23.619H27.9V13.2857Z" fill="#244B8A" />
                                <path d="M15.5 0L0 7.38095V10.3333H31V7.38095L15.5 0Z" fill="#244B8A" />
                            </svg>
                        </span>
                    </div>
                    <div class="d-flex flex-column my-5">
                        @if (!empty($value))
                            <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">45.6k</span>
                        @endif
                        <div class="lh-3">
                            <span class="fw-bold text-gray-400 fs-6">Total Properties</span>
                        </div>
                    </div>

                    @if (!empty($value))
                        <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            2.1%
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="symbol symbol-70px symbol-circle me-5">
                        <span class="symbol-label bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="29" viewBox="0 0 31 29"
                                fill="none">
                                <path
                                    d="M12.4 20.7222V19.1667H1.5655L1.55 25.3889C1.55 27.1156 2.9295 28.5 4.65 28.5H26.35C28.0705 28.5 29.45 27.1156 29.45 25.3889V19.1667H18.6V20.7222H12.4ZM27.9 6.72222H21.6845V3.61111L18.5845 0.5H12.3845L9.2845 3.61111V6.72222H3.1C1.395 6.72222 0 8.12222 0 9.83333V14.5C0 16.2267 1.3795 17.6111 3.1 17.6111H12.4V14.5H18.6V17.6111H27.9C29.605 17.6111 31 16.2111 31 14.5V9.83333C31 8.12222 29.605 6.72222 27.9 6.72222ZM18.6 6.72222H12.4V3.61111H18.6V6.72222Z"
                                    fill="#244B8A" />
                            </svg>
                        </span>
                    </div>
                    <div class="d-flex flex-column my-5">
                        @if (!empty($value))
                            <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">45.6k</span>
                        @endif

                        <div class="lh-3">
                            <span class="fw-bold text-gray-400 fs-6">Total Shifts</span>
                        </div>
                    </div>
                    @if (!empty($value))
                        <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span
                                    class="path2"></span></i>
                            2.1%
                        </span>
                    @endif

                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="symbol symbol-70px symbol-circle me-5">
                        <span class="symbol-label bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="31" viewBox="0 0 25 31"
                                fill="none">
                                <path
                                    d="M25 13.1365C25 5.60248 18.9653 -0.450281 11.6987 0.026345C5.48809 0.433221 0.429324 5.73568 0.0270114 12.2617C-0.33456 18.1265 2.97005 23.2299 7.76493 25.2948C7.8015 25.3132 7.83113 25.3301 7.87048 25.3485C9.95797 26.3386 11.3066 28.9673 11.982 30.6404C12.1755 31.1199 12.8246 31.1199 13.0181 30.6404C13.6936 28.9673 15.0422 26.3386 17.1297 25.3485C17.169 25.3301 17.1987 25.3132 17.2352 25.2948C21.7903 23.3335 25 18.6298 25 13.1365Z"
                                    fill="#244B8A" />
                                <path
                                    d="M21.25 13.02C21.25 18.1562 17.3325 22.32 12.5 22.32C7.66751 22.32 3.75 18.1562 3.75 13.02C3.75 7.88375 7.66751 3.72 12.5 3.72C17.3325 3.72 21.25 7.88375 21.25 13.02Z"
                                    fill="white" />
                            </svg>
                        </span>
                    </div>
                    <div class="d-flex flex-column my-5">
                        @if (!empty($value))
                            <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">45.6k</span>
                        @endif

                        <div class="lh-3">
                            <span class="fw-bold text-gray-400 fs-6">Total Checkpoints</span>
                        </div>
                    </div>
                    @if (!empty($value))
                        <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span
                                    class="path2"></span></i>
                            2.1%
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="symbol symbol-70px symbol-circle me-5">
                        <span class="symbol-label bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="31" viewBox="0 0 27 31"
                                fill="none">
                                <path
                                    d="M24 3.1H17.73C17.1 1.302 15.45 0 13.5 0C11.55 0 9.9 1.302 9.27 3.1H3C1.35 3.1 0 4.495 0 6.2V27.9C0 29.605 1.35 31 3 31H24C25.65 31 27 29.605 27 27.9V6.2C27 4.495 25.65 3.1 24 3.1ZM13.5 3.1C14.325 3.1 15 3.7975 15 4.65C15 5.5025 14.325 6.2 13.5 6.2C12.675 6.2 12 5.5025 12 4.65C12 3.7975 12.675 3.1 13.5 3.1ZM13.5 9.3C15.99 9.3 18 11.377 18 13.95C18 16.523 15.99 18.6 13.5 18.6C11.01 18.6 9 16.523 9 13.95C9 11.377 11.01 9.3 13.5 9.3ZM22.5 27.9H4.5V25.73C4.5 22.63 10.5 20.925 13.5 20.925C16.5 20.925 22.5 22.63 22.5 25.73V27.9Z"
                                    fill="#244B8A" />
                            </svg>
                        </span>
                    </div>
                    <div class="d-flex flex-column my-5">
                        @if (!empty($value))
                            <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">45.6k</span>
                        @endif

                        <div class="lh-3">
                            <span class="fw-bold text-gray-400 fs-6">Total Guards</span>
                        </div>
                    </div>
                    @if (!empty($value))
                        <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span
                                    class="path2"></span></i>
                            2.1%
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="symbol symbol-70px symbol-circle me-5">
                        <span class="symbol-label bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31"
                                fill="none">
                                <path
                                    d="M13.95 11.098V0C6.2 0.775 0 7.4245 0 15.5C0 23.5755 6.2 30.225 13.95 31V19.902C12.4 19.2665 10.85 17.546 10.85 15.5C10.85 13.454 12.4 11.7335 13.95 11.098ZM19.933 13.95H31C30.256 6.5875 24.8 0.7285 17.05 0V11.098C18.6 11.563 19.406 12.617 19.933 13.95ZM17.05 19.902V31C24.8 30.2715 30.256 24.4125 31 17.05H19.933C19.406 18.383 18.6 19.437 17.05 19.902Z"
                                    fill="#244B8A" />
                            </svg>
                        </span>
                    </div>
                    <div class="d-flex flex-column my-5">
                        @if (!empty($value))
                            <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">45.6k</span>
                        @endif

                        <div class="lh-3">
                            <span class="fw-bold text-gray-400 fs-6">Total Reports</span>
                        </div>
                    </div>
                    @if (!empty($value))
                        <span class="badge badge-light-danger fs-base">
                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                    class="path1"></span><span class="path2"></span></i>
                            2.1%
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="symbol symbol-70px symbol-circle me-5">
                        <span class="symbol-label bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="31"
                                viewBox="0 0 29 31" fill="none">
                                <path
                                    d="M28.5 31H0.5V25.3643H28.5V31ZM16.1386 4.49801L21.4411 9.7815L8.63039 22.5464H3.32796V17.2629L16.1386 4.49801ZM22.954 8.27394L17.6516 2.99046L20.2392 0.412112C20.7906 -0.137371 21.6814 -0.137371 22.2329 0.412112L25.5416 3.70901C26.0931 4.25849 26.0931 5.14612 25.5416 5.6956L22.954 8.27394Z"
                                    fill="#244B8A" />
                            </svg>
                        </span>
                    </div>
                    <div class="d-flex flex-column my-5">
                        @if (!empty($value))
                            <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">45.6k</span>
                        @endif

                        <div class="lh-3">
                            <span class="fw-bold text-gray-400 fs-6">Total Leaves</span>
                        </div>
                    </div>
                    @if (!empty($value))
                        <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                    class="path1"></span><span class="path2"></span></i>
                            2.1%
                        </span>
                    @endif
                </div>
            </div>
        </div>

    </div>

    <div class="row gx-5 gx-xl-10 mb-10">

        <div class="col-md-12 col-xxl-12">
            <div class="card card-flush h-xl-100">
                <div class="row g-0">
                    <!--begin::Col-->
                    <div class="col-5">
                        <div class="card-header pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Total Guards</span>

                            </h3>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light-primary">View All</a>
                            </div>
                        </div>
                        @if (!empty($value))
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="mb-5" style="position: absolute;top: 200px;left: 100px;">
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="fs-4x fw-bold text-bg me-2 lh-1 ls-n2">225</span>

                                        <span class="badge badge-light-success fs-base me-3">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="fs-6 fw-semibold text-gray-400">15% guards are increased<br> since
                                            last month</span>
                                    </div>
                                    <!--end::Statistics-->

                                </div>
                            </div>
                        @endif
                    </div>
                    <!--end::Col-->


                    <!--begin::Col-->
                    <div class="col-7">
                        <div class="card-header pt-5">
                            <div class="d-flex flex-wrap pt-2">


                                <!--begin::Item-->
                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet bg-success me-3"
                                            style="border-radius: 3px;width: 15px;height: 15px"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="fw-bold text-gray-600 fs-6">Active Guards</div>
                                        <!--end::Label-->


                                    </div>
                                    <!--ed::Item-->

                                </div>
                                <!--ed::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet bg-secondry me-3"
                                            style="border-radius: 3px;width: 15px;height: 15px"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="fw-bold text-gray-600 fs-6">Inactive Guards</div>
                                        <!--end::Label-->


                                    </div>
                                    <!--ed::Item-->

                                </div>
                                <!--ed::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet bg-primary me-3"
                                            style="border-radius: 3px;width: 15px;height: 15px"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="fw-bold text-gray-600 fs-6">Guard On Duty</div>
                                        <!--end::Label-->


                                    </div>
                                    <!--ed::Item-->

                                </div>
                                <!--ed::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet bg-danger me-3"
                                            style="border-radius: 3px;width: 15px;height: 15px"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="fw-bold text-gray-600 fs-6">Guard On Leave</div>
                                        <!--end::Label-->


                                    </div>
                                    <!--ed::Item-->

                                </div>
                                <!--ed::Item-->

                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">

                            @if (!empty($value))
                                <div id="kt_charts_widget_6" style="min-height: 200px; width:100%">
                                </div>
                            @endif

                        </div>
                    </div>
                    <!--end::Col-->




                </div>
                @if (!empty($value))
                    <div class="separator my-2"></div>
                    <div>
                        <div class="card-header pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">All Guards</span>

                            </h3>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body">
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
                                            <th>Guard Name </th>
                                            <th>Position</th>
                                            <th>Gender</th>
                                            <th>Country</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Emails</th>
                                            <th>Phone No.</th>
                                            <th>Account Created Date</th>
                                            <th>Property Assigned</th>
                                            <th>Shift Completed</th>
                                            <th>Missed Shifts</th>
                                            <th>Reports</th>
                                            <th>Total Leaves</th>
                                            <th>Last Log In</th>
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
                                            <td>1</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Supervisor</td>
                                            <td>Male</td>
                                            <td>India</td>
                                            <td>Uttar Pradesh</td>
                                            <td>Lucknow</td>
                                            <td>s.t.sharkey@outlook.com</td>
                                            <td>(215) 424-7763</td>
                                            <td>May 28, 2023</td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td>Jun 8, 2023 11:26 am</td>
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
                                                    <i class="bi bi-three-dots-vertical"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            View Guard ID
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="http://127.0.0.1:8000/property-owner/guards/edit"
                                                            class="menu-link px-3">
                                                            Edit Details
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete-guard-modal">
                                                            Delete Guard
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
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Supervisor</td>
                                            <td>Male</td>
                                            <td>India</td>
                                            <td>Uttar Pradesh</td>
                                            <td>Lucknow</td>
                                            <td>s.t.sharkey@outlook.com</td>
                                            <td>(215) 424-7763</td>
                                            <td>May 28, 2023</td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td>Jun 8, 2023 11:26 am</td>
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
                                                    <i class="bi bi-three-dots-vertical"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            View Guard ID
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="http://127.0.0.1:8000/property-owner/guards/edit"
                                                            class="menu-link px-3">
                                                            Edit Details
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete-guard-modal">
                                                            Delete Guard
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
                                            <td>3</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Supervisor</td>
                                            <td>Male</td>
                                            <td>India</td>
                                            <td>Uttar Pradesh</td>
                                            <td>Lucknow</td>
                                            <td>s.t.sharkey@outlook.com</td>
                                            <td>(215) 424-7763</td>
                                            <td>May 28, 2023</td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td>Jun 8, 2023 11:26 am</td>
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
                                                    <i class="bi bi-three-dots-vertical"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            View Guard ID
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="http://127.0.0.1:8000/property-owner/guards/edit"
                                                            class="menu-link px-3">
                                                            Edit Details
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete-guard-modal">
                                                            Delete Guard
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
                                            <td>4</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Supervisor</td>
                                            <td>Male</td>
                                            <td>India</td>
                                            <td>Uttar Pradesh</td>
                                            <td>Lucknow</td>
                                            <td>s.t.sharkey@outlook.com</td>
                                            <td>(215) 424-7763</td>
                                            <td>May 28, 2023</td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td>Jun 8, 2023 11:26 am</td>
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
                                                    <i class="bi bi-three-dots-vertical"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            View Guard ID
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="http://127.0.0.1:8000/property-owner/guards/edit"
                                                            class="menu-link px-3">
                                                            Edit Details
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete-guard-modal">
                                                            Delete Guard
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
                                            <td>5</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Supervisor</td>
                                            <td>Male</td>
                                            <td>India</td>
                                            <td>Uttar Pradesh</td>
                                            <td>Lucknow</td>
                                            <td>s.t.sharkey@outlook.com</td>
                                            <td>(215) 424-7763</td>
                                            <td>May 28, 2023</td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td><u class="text-hover-primary">23</u></td>
                                            <td>Jun 8, 2023 11:26 am</td>
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
                                                    <i class="bi bi-three-dots-vertical"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            View Guard ID
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="http://127.0.0.1:8000/property-owner/guards/edit"
                                                            class="menu-link px-3">
                                                            Edit Details
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete-guard-modal">
                                                            Delete Guard
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                </div>
                                            </td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                @else
                    <div class="d-flex align-items-center flex-column mb-15">
                        <div class="flex-grow-1">
                            <div class="symbol symbol-200px">
                                <img src="{{ asset('assets/media/bro.svg') }}" alt="img">
                            </div>
                        </div>

                        <div class="pt-5 text-center">
                            <span class="text-bg fs-2 fw-bold">No Guards Added, </span>
                            <p class="text-muted me-2 fs-7">Kindly add guards details to use this service</p>

                            <a href="{{ route('property_owner.guards.add-guard') }}"
                                class="btn btn-primary w-100 py-3">Add New Guard</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>






    </div>



    <!--begin::Row-->
    <div class="row gy-5 g-xl-10">
        <div class="col-xl-12 col-xxl-4">
            <div class="row gy-5 g-xl-10">
                <div class="col-md-6 col-xxl-12">
                    <div class="card card-flush h-xl-100">

                        <div class="card-header pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">516</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Total Properties</span>
                            </h3>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light-primary">View All</a>
                            </div>
                        </div>

                        @if (!empty($value))
                            <div class="separator my-2"></div>
                            <div class="card-body pt-6">
                                <div class="table-responsive">
                                    <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px  me-3">
                                                            <span class="symbol-label bg-light-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="16" viewBox="0 0 20 16"
                                                                    fill="none">
                                                                    <path
                                                                        d="M0 7.11111V16H4.54545V10.6667H8.18182V16H12.7273V7.11111L6.36364 2.66667L0 7.11111Z"
                                                                        fill="#244B8A" />
                                                                    <path
                                                                        d="M8.18182 0V1.75111L14.5455 6.19556V7.11111H16.3636V8.88889H14.5455V10.6667H16.3636V12.4444H14.5455V16H20V0H8.18182ZM16.3636 5.33333H14.5455V3.55556H16.3636V5.33333Z"
                                                                        fill="#244B8A" />
                                                                </svg>
                                                        </div>
                                                        <div class="m-0">
                                                            <span
                                                                class="text-gray-800 fw-bold fs-6 d-block">Residential
                                                                Properties</span>
                                                            <span class="text-gray-400 mt-1 fw-semibold fs-6">30
                                                                Properties</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">{!! getIcon('black-right', 'fs-2 text-gray-500') !!}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px  me-3">
                                                            <span class="symbol-label bg-light-success">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20"
                                                                    fill="none">
                                                                    <path
                                                                        d="M0 20V4.44444H4.44444V0H15.5556V8.88889H20V20H11.1111V15.5556H8.88889V20H0ZM2.22222 17.7778H4.44444V15.5556H2.22222V17.7778ZM2.22222 13.3333H4.44444V11.1111H2.22222V13.3333ZM2.22222 8.88889H4.44444V6.66667H2.22222V8.88889ZM6.66667 13.3333H8.88889V11.1111H6.66667V13.3333ZM6.66667 8.88889H8.88889V6.66667H6.66667V8.88889ZM6.66667 4.44444H8.88889V2.22222H6.66667V4.44444ZM11.1111 13.3333H13.3333V11.1111H11.1111V13.3333ZM11.1111 8.88889H13.3333V6.66667H11.1111V8.88889ZM11.1111 4.44444H13.3333V2.22222H11.1111V4.44444ZM15.5556 17.7778H17.7778V15.5556H15.5556V17.7778ZM15.5556 13.3333H17.7778V11.1111H15.5556V13.3333Z"
                                                                        fill="#07A798" />
                                                                </svg>
                                                        </div>
                                                        <div class="m-0">
                                                            <span class="text-gray-800 fw-bold fs-6 d-block">Commercial
                                                                Properties</span>
                                                            <span class="text-gray-400 mt-1 fw-semibold fs-6">30
                                                                Properties</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">{!! getIcon('black-right', 'fs-2 text-gray-500') !!}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px  me-3">
                                                            <span class="symbol-label bg-light-warning">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20"
                                                                    fill="none">
                                                                    <path
                                                                        d="M18 4H14V2C14 0.9 13.1 0 12 0H8C6.9 0 6 0.9 6 2V4H2C0.9 4 0 4.9 0 6V18C0 19.1 0.9 20 2 20H18C19.1 20 20 19.1 20 18V6C20 4.9 19.1 4 18 4ZM8 2H12V4H8V2ZM14 13H11V16H9V13H6V11H9V8H11V11H14V13Z"
                                                                        fill="#BFA740" />
                                                                </svg>
                                                        </div>
                                                        <div class="m-0">
                                                            <span class="text-gray-800 fw-bold fs-6 d-block">Healthcare
                                                                Properties</span>
                                                            <span class="text-gray-400 mt-1 fw-semibold fs-6">30
                                                                Properties</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">{!! getIcon('black-right', 'fs-2 text-gray-500') !!}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px  me-3">
                                                            <span class="symbol-label bg-light-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                    height="20" viewBox="0 0 26 20"
                                                                    fill="none">
                                                                    <path
                                                                        d="M5.22222 11.3111V15.7556L13 20L20.7778 15.7556V11.3111L13 15.5556L5.22222 11.3111ZM13 0L0.777771 6.66667L13 13.3333L23 7.87778V15.5556H25.2222V6.66667L13 0Z"
                                                                        fill="#4A0CA2" />
                                                                </svg>
                                                        </div>
                                                        <div class="m-0">
                                                            <span
                                                                class="text-gray-800 fw-bold fs-6 d-block">Educational
                                                                Properties</span>
                                                            <span class="text-gray-400 mt-1 fw-semibold fs-6">30
                                                                Properties</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">{!! getIcon('black-right', 'fs-2 text-gray-500') !!}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-40px  me-3">
                                                            <span class="symbol-label bg-light-warning">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20"
                                                                    fill="none">
                                                                    <path
                                                                        d="M10 4.72222V0.5H0V19.5H20V4.72222H10ZM4 17.3889H2V15.2778H4V17.3889ZM4 13.1667H2V11.0556H4V13.1667ZM4 8.94444H2V6.83333H4V8.94444ZM4 4.72222H2V2.61111H4V4.72222ZM8 17.3889H6V15.2778H8V17.3889ZM8 13.1667H6V11.0556H8V13.1667ZM8 8.94444H6V6.83333H8V8.94444ZM8 4.72222H6V2.61111H8V4.72222ZM18 17.3889H10V15.2778H12V13.1667H10V11.0556H12V8.94444H10V6.83333H18V17.3889ZM16 8.94444H14V11.0556H16V8.94444ZM16 13.1667H14V15.2778H16V13.1667Z"
                                                                        fill="#A3B748" />
                                                                </svg>
                                                        </div>
                                                        <div class="m-0">
                                                            <span class="text-gray-800 fw-bold fs-6 d-block">Office
                                                                Properties</span>
                                                            <span class="text-gray-400 mt-1 fw-semibold fs-6">30
                                                                Properties</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">{!! getIcon('black-right', 'fs-2 text-gray-500') !!}</a>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @else
                            <div class="d-flex align-items-center flex-column mb-15">
                                <div class="flex-grow-1">
                                    <div class="symbol symbol-200px">
                                        <img src="{{ asset('assets/media/5202351_2678136 1.svg') }}" alt="img">
                                    </div>
                                </div>

                                <div class="pt-5 text-center">
                                    <span class="text-bg fs-2 fw-bold">No Properties Added, </span>
                                    <p class="text-muted me-2 fs-7">Properties categories will appear here</p>

                                    <a href="{{ route('property_owner.properties.create') }}"
                                        class="btn btn-primary w-100 py-3">Add New Property</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-xxl-12">
                    <div class="card card-flush border-0 h-xl-100" data-bs-theme="light"
                        style="background-color: #22232B">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title">
                                <span class="me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14"
                                        viewBox="0 0 17 14" fill="none">
                                        <path
                                            d="M4.25 10.25C4.49083 10.25 4.69285 10.172 4.85605 10.016C5.01868 9.86054 5.1 9.66771 5.1 9.4375C5.1 9.20729 5.01868 9.01419 4.85605 8.85819C4.69285 8.70273 4.49083 8.625 4.25 8.625C4.00917 8.625 3.80715 8.70273 3.64395 8.85819C3.48132 9.01419 3.4 9.20729 3.4 9.4375C3.4 9.66771 3.48132 9.86054 3.64395 10.016C3.80715 10.172 4.00917 10.25 4.25 10.25ZM3.4 7.8125H5.1V3.75H3.4V7.8125ZM6.8 9.4375H13.6V7.8125H6.8V9.4375ZM6.8 6.1875H13.6V4.5625H6.8V6.1875ZM1.7 13.5C1.2325 13.5 0.832433 13.341 0.4998 13.0231C0.1666 12.7046 0 12.3219 0 11.875V2.125C0 1.67813 0.1666 1.29571 0.4998 0.97775C0.832433 0.65925 1.2325 0.5 1.7 0.5H15.3C15.7675 0.5 16.1679 0.65925 16.5011 0.97775C16.8337 1.29571 17 1.67813 17 2.125V11.875C17 12.3219 16.8337 12.7046 16.5011 13.0231C16.1679 13.341 15.7675 13.5 15.3 13.5H1.7ZM1.7 11.875H15.3V2.125H1.7V11.875Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span class="text-white fs-3 fw-bold me-2">Reports Analytics</span>

                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-sm bg-white bg-opacity-10 btn-color-white btn-active-success w-30px h-30px"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">

                                    <i class="ki-duotone ki-black-right fs-5"></i>
                                </button>


                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->


                        @if (!empty($value))
                            <!--begin::Body-->
                            <div class="card-body d-flex justify-content-between flex-column pt-1 px-0 pb-8">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-wrap px-9 mb-5">
                                    <!--begin::Stat-->
                                    <div class="rounded min-w-125px py-3 px-4 my-1 me-6"
                                        style="border: 1px dashed rgba(255, 255, 255, 0.15)">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="text-white fs-2 fw-bold counted" data-kt-countup="true"
                                                data-kt-countup-value="4368" data-kt-countup-prefix="$"
                                                data-kt-initialized="1">
                                                22.3k</div>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-white opacity-50">Total Reports</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->


                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Chart-->
                                <div id="kt_card_widget_1_chart" data-kt-chart-color="primary"
                                    style="height: 105px; min-height: 105px;">

                                </div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Body-->
                        @else
                            <div class="d-flex align-items-center flex-column mb-15">
                                <div class="flex-grow-1">
                                    <div class="symbol symbol-200px">
                                        <img src="{{ asset('assets/media/bro.svg') }}" alt="img">
                                    </div>
                                </div>

                                <div class="pt-5 text-center">
                                    <span class="text-bg fs-2 fw-bold">No Reports Analytics</span>
                                    <p class="text-muted me-2 fs-7">Reports Analytics will appear here</p>

                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-xxl-12 mb-10">
                    <div class="card card-flush h-xl-100">
                        <div class="card-header pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">All Guards Reports</span>
                            </h3>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light-primary">View All</a>
                            </div>
                        </div>

                        @if (!empty($value))
                            <div class="card-body">

                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px symbol-circle me-3">
                                            <span class="symbol-label bg-light-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                                    viewBox="0 0 20 16" fill="none">
                                                    <path
                                                        d="M0 7.11111V16H4.54545V10.6667H8.18182V16H12.7273V7.11111L6.36364 2.66667L0 7.11111Z"
                                                        fill="#244B8A" />
                                                    <path
                                                        d="M8.18182 0V1.75111L14.5455 6.19556V7.11111H16.3636V8.88889H14.5455V10.6667H16.3636V12.4444H14.5455V16H20V0H8.18182ZM16.3636 5.33333H14.5455V3.55556H16.3636V5.33333Z"
                                                        fill="#244B8A" />
                                                </svg>
                                        </div>
                                        <div class="m-0">
                                            <span class="text-gray-800 fw-bold fs-6 d-block">General</span>
                                            <span class="text-gray-400 mt-1 fw-semibold fs-6">Reports</span>
                                        </div>
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center w-100 mw-125px">
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 me-2 bg-light-success">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Value-->
                                        <span class="text-gray-400 fw-semibold">
                                            65%
                                        </span>
                                        <!--end::Value-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->


                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px symbol-circle me-3">
                                            <span class="symbol-label bg-light-info">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                    viewBox="0 0 16 17" fill="none">
                                                    <path
                                                        d="M11.1546 9.50056L9.44048 11.3297L14.2858 16.5L16 14.6709L11.1546 9.50056Z"
                                                        fill="#7367F0" />
                                                    <path
                                                        d="M12.4443 6.86998C14.0039 6.86998 15.2725 5.51623 15.2725 3.85206C15.2725 3.35194 15.1432 2.88632 14.9412 2.47243L12.7594 4.80055L11.5554 3.51577L13.7372 1.18766C13.3493 0.97209 12.913 0.834128 12.4443 0.834128C10.8847 0.834128 9.61604 2.18788 9.61604 3.85206C9.61604 4.20558 9.68069 4.54187 9.78574 4.85228L8.29081 6.44747L6.85244 4.91264L7.42617 4.30043L6.28679 3.08464L7.9999 1.25664C7.05446 0.247787 5.51912 0.247787 4.57368 1.25664L1.71311 4.30906L2.85249 5.52485H0.57373L0 6.13706L2.86057 9.18948L3.4343 8.57727V6.13706L4.57368 7.35285L5.14741 6.74064L6.58578 8.27548L0.597972 14.6649L2.31108 16.4929L11.5069 6.68891C11.7978 6.801 12.113 6.86998 12.4443 6.86998Z"
                                                        fill="#7367F0" />
                                                </svg>
                                        </div>
                                        <div class="m-0">
                                            <span class="text-gray-800 fw-bold fs-6 d-block">Maintenance</span>
                                            <span class="text-gray-400 mt-1 fw-semibold fs-6">Reports</span>
                                        </div>
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center w-100 mw-125px">
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 me-2 bg-light-warning">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                style="width: 87%" aria-valuenow="87" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Value-->
                                        <span class="text-gray-400 fw-semibold">
                                            87%
                                        </span>
                                        <!--end::Value-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->


                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px symbol-circle me-3">
                                            <span class="symbol-label bg-light-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                    viewBox="0 0 16 17" fill="none">
                                                    <path
                                                        d="M14.1511 1.39778C13.9733 0.873334 13.4756 0.5 12.8889 0.5H3.11111C2.52444 0.5 2.03556 0.873334 1.84889 1.39778L0 7.61111V15.6111C0 16.1 0.4 16.5 0.888889 16.5H1.77778C2.26667 16.5 2.66667 16.1 2.66667 15.6111V14.7222H13.3333V15.6111C13.3333 16.1 13.7333 16.5 14.2222 16.5H15.1111C15.6 16.5 16 16.1 16 15.6111V7.61111L14.1511 1.39778ZM4 11.1667C3.26222 11.1667 2.66667 10.5711 2.66667 9.83333C2.66667 9.09556 3.26222 8.5 4 8.5C4.73778 8.5 5.33333 9.09556 5.33333 9.83333C5.33333 10.5711 4.73778 11.1667 4 11.1667ZM12 11.1667C11.2622 11.1667 10.6667 10.5711 10.6667 9.83333C10.6667 9.09556 11.2622 8.5 12 8.5C12.7378 8.5 13.3333 9.09556 13.3333 9.83333C13.3333 10.5711 12.7378 11.1667 12 11.1667ZM2.49778 5.83333L3.42222 2.27778H12.5689L13.4933 5.83333H2.49778Z"
                                                        fill="#D26ADB" />
                                                </svg>
                                        </div>
                                        <div class="m-0">
                                            <span class="text-gray-800 fw-bold fs-6 d-block">Parking</span>
                                            <span class="text-gray-400 mt-1 fw-semibold fs-6">Reports</span>
                                        </div>
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center w-100 mw-125px">
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 me-2 bg-light-primary">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 44%" aria-valuenow="44" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Value-->
                                        <span class="text-gray-400 fw-semibold">
                                            44%
                                        </span>
                                        <!--end::Value-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->


                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px symbol-circle me-3">
                                            <span class="symbol-label bg-light-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                    viewBox="0 0 16 17" fill="none">
                                                    <path
                                                        d="M11.3156 0.5H4.68444L0 5.18444V11.8156L4.68444 16.5H11.3156L16 11.8156V5.18444L11.3156 0.5ZM14.2222 11.0778L10.5778 14.7222H5.42222L1.77778 11.0778V5.92222L5.42222 2.27778H10.5778L14.2222 5.92222V11.0778Z"
                                                        fill="#FF9F43" />
                                                    <path d="M8.88889 4.05556H7.11111V9.38889H8.88889V4.05556Z"
                                                        fill="#FF9F43" />
                                                    <path d="M8.88889 11.1667H7.11111V12.9444H8.88889V11.1667Z"
                                                        fill="#FF9F43" />
                                                </svg>
                                        </div>
                                        <div class="m-0">
                                            <span class="text-gray-800 fw-bold fs-6 d-block">General</span>
                                            <span class="text-gray-400 mt-1 fw-semibold fs-6">Reports</span>
                                        </div>
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center w-100 mw-125px">
                                        <!--begin::Progress-->
                                        <div class="progress h-6px w-100 me-2 bg-light-info">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 70%"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Value-->
                                        <span class="text-gray-400 fw-semibold">
                                            70%
                                        </span>
                                        <!--end::Value-->
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--end::Item-->



                            </div>
                        @else
                            <div class="d-flex align-items-center flex-column mb-15">
                                <div class="flex-grow-1">
                                    <div class="symbol symbol-200px">
                                        <img src="{{ asset('assets/media/bro.svg') }}" alt="img">
                                    </div>
                                </div>

                                <div class="pt-5 text-center">
                                    <span class="text-bg fs-2 fw-bold">No Guards Reports, </span>
                                    <p class="text-muted me-2 fs-7">Guard Reports will appear here</p>

                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-xxl-8 mb-5 mb-xl-10">
            <div class="row gy-5 g-xl-10">
                <div class="col-md-12 col-xxl-12">
                    <div class="card card-flush h-xl-100">
                        <!--begin::Card head-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <div class="card-title d-flex align-items-center">
                                <h3 class="fw-bold m-0 text-gray-800">Activity Log</h3>
                            </div>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar m-0">
                                <!--begin::Tab nav-->
                                <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_activity_today_tab"
                                            class="nav-link justify-content-center text-active-gray-800 active"
                                            data-bs-toggle="tab" role="tab" href="#kt_activity_today">
                                            Today
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_activity_week_tab"
                                            class="nav-link justify-content-center text-active-gray-800"
                                            data-bs-toggle="tab" role="tab" href="#kt_activity_week">
                                            Week
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_activity_month_tab"
                                            class="nav-link justify-content-center text-active-gray-800"
                                            data-bs-toggle="tab" role="tab" href="#kt_activity_month">
                                            Month
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#" class="btn btn-sm btn-light-primary">View All</a>
                                    </li>
                                </ul>
                                <!--end::Tab nav-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card head-->


                        @if (!empty($value))
                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Tab Content-->
                                <div class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active"
                                        role="tabpanel" aria-labelledby="kt_activity_today_tab">
                                        <!--begin::Timeline-->



                                        <!--begin::Accordion-->
                                        <div class="accordion" id="kt_accordion_1">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="kt_accordion_1_header_1">
                                                    <button class="accordion-button fs-4 fw-semibold" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#kt_accordion_1_body_1" aria-expanded="true"
                                                        aria-controls="kt_accordion_1_body_1">
                                                        <div class="timeline">
                                                            <div class="timeline-item">
                                                                <div
                                                                    class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                                                    <span
                                                                        class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                                                </div>
                                                                <div>
                                                                    <div class="fs-5 fw-bold mb-2">There are 2 new
                                                                        tasks
                                                                        updated in
                                                                        Hallway Checkpoint of Rivi Property.</div>
                                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                                        <div class="text-muted me-2 fs-7">Updated at
                                                                            4:23
                                                                            PM by
                                                                            Admin-IND. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="kt_accordion_1_body_1"
                                                    class="accordion-collapse collapse show"
                                                    aria-labelledby="kt_accordion_1_header_1"
                                                    data-bs-parent="#kt_accordion_1">
                                                    <div class="accordion-body">
                                                        <div class="overflow-auto">
                                                            <div
                                                                class="d-flex align-items-center min-w-750px px-7 py-3 mb-5">
                                                                <div class="symbol symbol-circle symbol-40px me-4">
                                                                    <img src="{{ asset('assets/media/avatars/300-20.jpg') }}"
                                                                        alt="img" />
                                                                </div>
                                                                <a href="javascript:void(0)"
                                                                    class="fs-5 text-gray-800 fw-semibold w-375px min-w-200px">Meeting
                                                                    with customer</a>
                                                                <div class="pe-2 flex-nowrap flex-grow-1 min-w-100px">
                                                                    <span
                                                                        class="badge badge-light text-muted">Application
                                                                        Design</span>
                                                                </div>
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                            </div>

                                                            <div
                                                                class="d-flex align-items-center min-w-750px px-7 py-3 mb-5">
                                                                <div class="symbol symbol-circle symbol-40px me-3">
                                                                    <img src="{{ asset('assets/media/avatars/300-20.jpg') }}"
                                                                        alt="img" />
                                                                </div>
                                                                <a href="javascript:void(0)"
                                                                    class="fs-5 text-gray-800 fw-semibold w-375px min-w-200px">Meeting
                                                                    with customer</a>
                                                                <div class="pe-2 flex-nowrap flex-grow-1 min-w-100px">
                                                                    <span
                                                                        class="badge badge-light text-muted">Application
                                                                        Design</span>
                                                                </div>
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="kt_accordion_1_header_2">
                                                    <button class="accordion-button fs-4 fw-semibold collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#kt_accordion_1_body_2" aria-expanded="false"
                                                        aria-controls="kt_accordion_1_body_2">
                                                        <div class="timeline">
                                                            <div class="timeline-item">
                                                                <div
                                                                    class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                                                    <span
                                                                        class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                                </div>
                                                                <div>
                                                                    <div class="fs-5 fw-bold mb-2">New Property Added.
                                                                    </div>
                                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                                        <div class="text-muted me-2 fs-7">Updated at
                                                                            4:23
                                                                            PM by
                                                                            Admin-IND. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="kt_accordion_1_body_2" class="accordion-collapse collapse"
                                                    aria-labelledby="kt_accordion_1_header_2"
                                                    data-bs-parent="#kt_accordion_1">
                                                    <div class="accordion-body">
                                                        <div class="overflow-auto">
                                                            <div
                                                                class="d-flex align-items-center min-w-750px px-7 py-3 mb-5">
                                                                <div class="symbol symbol-circle symbol-40px me-4">
                                                                    <img src="{{ asset('assets/media/avatars/300-20.jpg') }}"
                                                                        alt="img" />
                                                                </div>
                                                                <a href="javascript:void(0)"
                                                                    class="fs-5 text-gray-800 fw-semibold w-375px min-w-200px">Universtas
                                                                    Property</a>
                                                                <div class="pe-2 flex-nowrap flex-grow-1 min-w-100px">
                                                                    <span class="badge badge-light text-muted">Property
                                                                        Added</span>
                                                                </div>
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="kt_accordion_1_header_3">
                                                    <button class="accordion-button fs-4 fw-semibold collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#kt_accordion_1_body_3" aria-expanded="false"
                                                        aria-controls="kt_accordion_1_body_3">
                                                        <div class="timeline">
                                                            <div class="timeline-item">
                                                                <div
                                                                    class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                                                    <span
                                                                        class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                                                </div>
                                                                <div>
                                                                    <div class="fs-5 fw-bold mb-2">You deleted 3 Guards
                                                                        profile
                                                                        from Rivi Property.</div>
                                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                                        <div class="text-muted me-2 fs-7">Updated at
                                                                            4:23
                                                                            PM by
                                                                            Admin-IND. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="kt_accordion_1_body_3" class="accordion-collapse collapse"
                                                    aria-labelledby="kt_accordion_1_header_3"
                                                    data-bs-parent="#kt_accordion_1">
                                                    <div class="accordion-body">
                                                        <div class="overflow-auto">
                                                            <div
                                                                class="d-flex align-items-center min-w-750px px-7 py-3 mb-5">
                                                                <div class="symbol symbol-circle symbol-40px me-4">
                                                                    <img src="{{ asset('assets/media/avatars/300-20.jpg') }}"
                                                                        alt="img" />
                                                                </div>
                                                                <a href="javascript:void(0)"
                                                                    class="fs-5 text-gray-800 fw-semibold w-375px min-w-200px">Andlas
                                                                    Sical</a>
                                                                <div class="pe-2 flex-nowrap flex-grow-1 min-w-100px">
                                                                    <span
                                                                        class="badge badge-light text-muted">Supervisor</span>
                                                                </div>
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                            </div>

                                                            <div
                                                                class="d-flex align-items-center min-w-750px px-7 py-3 mb-5">
                                                                <div class="symbol symbol-circle symbol-40px me-3">
                                                                    <img src="{{ asset('assets/media/avatars/300-20.jpg') }}"
                                                                        alt="img" />
                                                                </div>
                                                                <a href="javascript:void(0)"
                                                                    class="fs-5 text-gray-800 fw-semibold w-375px min-w-200px">Andlas
                                                                    Sical</a>
                                                                <div class="pe-2 flex-nowrap flex-grow-1 min-w-100px">
                                                                    <span
                                                                        class="badge badge-light text-muted">Supervisor</span>
                                                                </div>
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="kt_accordion_1_header_4">
                                                    <button class="accordion-button fs-4 fw-semibold collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#kt_accordion_1_body_4" aria-expanded="false"
                                                        aria-controls="kt_accordion_1_body_4">
                                                        <div class="timeline">
                                                            <div class="timeline-item">
                                                                <div
                                                                    class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                                                    <span
                                                                        class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                                                </div>
                                                                <div>
                                                                    <div class="fs-5 fw-bold mb-2">Checkpoint list of
                                                                        Rivi
                                                                        property
                                                                        exported.</div>
                                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                                        <div class="text-muted me-2 fs-7">Updated at
                                                                            4:23
                                                                            PM by
                                                                            Admin-IND. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="kt_accordion_1_body_4" class="accordion-collapse collapse"
                                                    aria-labelledby="kt_accordion_1_header_4"
                                                    data-bs-parent="#kt_accordion_1">
                                                    <div class="accordion-body">
                                                        <div class="overflow-auto">

                                                            <div
                                                                class="d-flex align-items-center min-w-750px px-7 py-3 mb-5">
                                                                <img alt="pdf" class="w-30px me-3"
                                                                    src="{{ asset('assets/media/pdf.svg') }}">
                                                                <div class="flex-nowrap flex-grow-1">
                                                                    <a href="javascript:void(0)"
                                                                        class="fs-6 text-hover-primary fw-bold">Checkpoint_list_rivi_property.pdf</a>
                                                                    <div class="text-gray-400">1.9mb</div>
                                                                </div>
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Tab panel-->

                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Card body-->
                        @else
                            <div class="d-flex align-items-center flex-column mb-15">
                                <div class="flex-grow-1">
                                    <div class="">
                                        <img src="{{ asset('assets/media/Group.svg') }}" alt="img"
                                            style="width:405px">
                                    </div>
                                </div>

                                <div class="pt-5 text-center">
                                    <span class="text-bg fs-2 fw-bold">No Activity Log </span>
                                    <p class="text-muted me-2 fs-7">Activities will appear here</p>

                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-12 col-xxl-12">
                    <!--begin::Chart widget 10-->
                    <div class="card card-flush h-xxl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Shift Analytics</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Below are the analytics of shifts of
                                    all the properties</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                    class="btn btn-sm btn-light d-flex align-items-center px-4">
                                    <!--begin::Display range-->
                                    <div class="text-gray-600 fw-bold">
                                        Loading date range...
                                    </div>
                                    <!--end::Display range-->
                                    <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                                        <span class="path1"></span><span class="path2"></span>
                                        <span class="path3"></span><span class="path4"></span>
                                        <span class="path5"></span><span class="path6"></span>
                                    </i>
                                </div>
                                <!--end::Daterangepicker-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        @if (!empty($value))
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="d-flex flex-stack">
                                    <!--begin::Nav-->
                                    <div class="d-flex align-items-center">
                                        <ul class="nav nav-pills nav-pills-custom mb-2">
                                            <!--begin::Item-->
                                            <li class="nav-item mb-3 me-3 me-lg-6">
                                                <!--begin::Link-->
                                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-130px pt-5 pb-5 active"
                                                    data-bs-toggle="pill" id="kt_charts_widget_10_tab_1"
                                                    href="#kt_charts_widget_10_tab_content_1">
                                                    <!--begin::Icon-->
                                                    <div class="nav-icon mb-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="31"
                                                            height="31" viewBox="0 0 31 31" fill="none">
                                                            <g clip-path="url(#clip0_818_5015)">
                                                                <path
                                                                    d="M22.5739 23.5C24.7756 23.5 26.647 22.7222 28.1882 21.1667C29.7294 19.6111 30.5 17.7222 30.5 15.5C30.5 13.2778 29.7294 11.3889 28.1882 9.83333C26.647 8.27778 24.7756 7.5 22.5739 7.5H8.42614C6.22443 7.5 4.35298 8.27778 2.81179 9.83333C1.2706 11.3889 0.5 13.2778 0.5 15.5C0.5 17.7222 1.2706 19.6111 2.81179 21.1667C4.35298 22.7222 6.22443 23.5 8.42614 23.5H22.5739ZM22.5739 20.8333H8.42614C6.97301 20.8333 5.72905 20.3111 4.69425 19.2667C3.65945 18.2222 3.14205 16.9667 3.14205 15.5C3.14205 14.0333 3.65945 12.7778 4.69425 11.7333C5.72905 10.6889 6.97301 10.1667 8.42614 10.1667H22.5739C24.027 10.1667 25.271 10.6889 26.3058 11.7333C27.3406 12.7778 27.858 14.0333 27.858 15.5C27.858 16.9667 27.3406 18.2222 26.3058 19.2667C25.271 20.3111 24.027 20.8333 22.5739 20.8333ZM22.5739 19.5C21.473 19.5 20.5373 19.1111 19.7667 18.3333C18.9961 17.5556 18.6108 16.6111 18.6108 15.5C18.6108 14.3889 18.9961 13.4444 19.7667 12.6667C20.5373 11.8889 21.473 11.5 22.5739 11.5C23.6747 11.5 24.6104 11.8889 25.381 12.6667C26.1516 13.4444 26.5369 14.3889 26.5369 15.5C26.5369 16.6111 26.1516 17.5556 25.381 18.3333C24.6104 19.1111 23.6747 19.5 22.5739 19.5Z"
                                                                    fill="#244B8A" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_818_5015">
                                                                    <rect width="30" height="30"
                                                                        fill="white"
                                                                        transform="translate(0.5 0.5)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Active
                                                        Shifts</span>
                                                    <!--end::Title-->
                                                    <!--begin::Bullet-->
                                                    <span
                                                        class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item mb-3 me-3 me-lg-6">
                                                <!--begin::Link-->
                                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-130px pt-5 pb-5"
                                                    data-bs-toggle="pill" id="kt_charts_widget_10_tab_2"
                                                    href="#kt_charts_widget_10_tab_content_2">
                                                    <!--begin::Icon-->
                                                    <div class="nav-icon mb-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="31"
                                                            height="31" viewBox="0 0 31 31" fill="none">
                                                            <g clip-path="url(#clip0_818_5020)">
                                                                <path
                                                                    d="M8.42614 23.5C6.22443 23.5 4.35298 22.7222 2.81179 21.1667C1.2706 19.6111 0.5 17.7222 0.5 15.5C0.5 13.2778 1.2706 11.3889 2.81179 9.83333C4.35298 8.27778 6.22443 7.5 8.42614 7.5H22.5739C24.7756 7.5 26.647 8.27778 28.1882 9.83333C29.7294 11.3889 30.5 13.2778 30.5 15.5C30.5 17.7222 29.7294 19.6111 28.1882 21.1667C26.647 22.7222 24.7756 23.5 22.5739 23.5H8.42614ZM8.42614 20.8333H22.5739C24.027 20.8333 25.271 20.3111 26.3058 19.2667C27.3406 18.2222 27.858 16.9667 27.858 15.5C27.858 14.0333 27.3406 12.7778 26.3058 11.7333C25.271 10.6889 24.027 10.1667 22.5739 10.1667H8.42614C6.97301 10.1667 5.72905 10.6889 4.69425 11.7333C3.65945 12.7778 3.14205 14.0333 3.14205 15.5C3.14205 16.9667 3.65945 18.2222 4.69425 19.2667C5.72905 20.3111 6.97301 20.8333 8.42614 20.8333ZM8.42614 19.5C9.52699 19.5 10.4627 19.1111 11.2333 18.3333C12.0039 17.5556 12.3892 16.6111 12.3892 15.5C12.3892 14.3889 12.0039 13.4444 11.2333 12.6667C10.4627 11.8889 9.52699 11.5 8.42614 11.5C7.32528 11.5 6.38956 11.8889 5.61896 12.6667C4.84837 13.4444 4.46307 14.3889 4.46307 15.5C4.46307 16.6111 4.84837 17.5556 5.61896 18.3333C6.38956 19.1111 7.32528 19.5 8.42614 19.5Z"
                                                                    fill="#999999" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_818_5020">
                                                                    <rect width="30" height="30"
                                                                        fill="white"
                                                                        transform="translate(0.5 0.5)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Inactive
                                                        Shifts
                                                    </span>
                                                    <!--end::Title-->
                                                    <!--begin::Bullet-->
                                                    <span
                                                        class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item mb-3 me-3 me-lg-6">
                                                <!--begin::Link-->
                                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-130px pt-5 pb-5"
                                                    data-bs-toggle="pill" id="kt_charts_widget_10_tab_3"
                                                    href="#kt_charts_widget_10_tab_content_3">
                                                    <!--begin::Icon-->
                                                    <div class="nav-icon mb-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="31"
                                                            height="31" viewBox="0 0 31 31" fill="none">
                                                            <g clip-path="url(#clip0_818_5024)">
                                                                <path
                                                                    d="M15 23.5L3.33333 12.7566V19.7782H0V7.5H13.3333V10.5695H5.66667L15 19.1643L27.6667 7.5L30 9.68705L15 23.5Z"
                                                                    fill="#EA5455" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_818_5024">
                                                                    <rect width="30" height="30"
                                                                        fill="white"
                                                                        transform="translate(0.5 0.5)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Missed
                                                        Shifts</span>
                                                    <!--end::Title-->
                                                    <!--begin::Bullet-->
                                                    <span
                                                        class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->

                                        </ul>
                                    </div>
                                    <!--end::Nav-->
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="btn btn-sm fw-bold btn-primary">View all</a>
                                    </div>
                                    <!--end::Statistics-->
                                </div>
                                <!--begin::Tab Content-->
                                <div class="tab-content ps-4 pe-6">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade active show" id="kt_charts_widget_10_tab_content_1">
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_10_chart_1" class="min-h-auto"
                                            style="height: 270px">
                                        </div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_charts_widget_10_tab_content_2">
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_10_chart_2" class="min-h-auto"
                                            style="height: 270px">
                                        </div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_charts_widget_10_tab_content_3">
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_10_chart_3" class="min-h-auto"
                                            style="height: 270px">
                                        </div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Tap pane-->

                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end: Card Body-->
                        @else
                            <div class="d-flex align-items-center flex-column mb-15">
                                <div class="flex-grow-1">
                                    <div class="">
                                        <img src="{{ asset('assets/media/bro.svg') }}" alt="img"
                                            style="width: 400px">
                                    </div>
                                </div>

                                <div class="pt-5 text-center">
                                    <span class="text-bg fs-2 fw-bold">No Shift Analytics, </span>
                                    <p class="text-muted me-2 fs-7">Shift Analytics will appear here</p>

                                    <a href="{{ route('property_owner.shift.create-guard') }}"
                                        class="btn btn-primary w-100 py-3">Add New Shift</a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!--end::Chart widget 10-->
                </div>
            </div>
        </div>
    </div>

    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row gy-5 g-xl-10">
        <div class="col-xl-12 col-xxl-4">
            <div class="row gy-5 g-xl-10">

                <div class="col-md-6 col-xxl-12">
                    <div class="card card-flush h-xl-100">
                        <div class="card-header pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Messenger</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Chatting statistics</span>
                            </h3>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light-primary">All Properties</a>
                                <a href="#" class="btn btn-sm btn-light-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center mb-9 me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M3 0H17C18.7 0 20 1.3 20 3V13C20 14.7 18.7 16 17 16H5.4L1.7 19.7C1.5 19.9 1.3 20 1 20C0.9 20 0.7 20 0.6 19.9C0.2 19.8 0 19.4 0 19V3C0 1.3 1.3 0 3 0ZM17 14C17.6 14 18 13.6 18 13V3C18 2.4 17.6 2 17 2H3C2.4 2 2 2.4 2 3V16.6L4.3 14.3C4.5 14.1 4.7 14 5 14H17Z"
                                                        fill="#D63384" />
                                                </svg>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">{{ !empty($value) ? '223' : '' }}
                                            </div>
                                            <div class="fs-7 text-gray-600 fw-bold">Total Chat Heads</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center mb-9 ms-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                    height="21" viewBox="0 0 26 21" fill="none">
                                                    <path
                                                        d="M16.6138 1.39941H3.72231C3.13282 1.39941 2.56747 1.63779 2.15064 2.06211C1.73381 2.48642 1.49963 3.06191 1.49963 3.66199V17.2374C1.49963 17.8375 1.73381 18.413 2.15064 18.8373C2.56747 19.2616 3.13282 19.5 3.72231 19.5H22.3222C22.9117 19.5 23.477 19.2616 23.8939 18.8373C24.3107 18.413 24.5449 17.8375 24.5449 17.2374V9.48811"
                                                        stroke="#00CFE8" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M5.06213 5.01929L13.0638 11.3545L17.8981 7.63991"
                                                        stroke="#00CFE8" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M22.8359 5.92452C24.3075 5.92452 25.5004 4.7102 25.5004 3.21226C25.5004 1.71432 24.3075 0.5 22.8359 0.5C21.3644 0.5 20.1715 1.71432 20.1715 3.21226C20.1715 4.7102 21.3644 5.92452 22.8359 5.92452Z"
                                                        fill="#00CFE8" />
                                                </svg>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">{{ !empty($value) ? '223' : '' }}
                                            </div>
                                            <div class="fs-7 text-gray-600 fw-bold">Unread Messages</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light-info">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0.773457 0.80504C1.27166 0.292185 1.95197 0 2.66599 0H21.3341C22.0481 0 22.7285 0.292186 23.2267 0.80504C23.7241 1.31717 24 2.00735 24 2.72269V18.2942V18.2963V21.2773C24 21.9927 23.7241 22.6828 23.2267 23.195C22.7285 23.7078 22.0481 24 21.3341 24H2.66599C1.95197 24 1.27166 23.7078 0.773457 23.195C0.275962 22.6828 0.000113681 21.9927 0.000113681 21.2773V18.3075C-3.77186e-05 18.2989 -3.80689e-05 18.2903 0.000113681 18.2817V2.72269C0.000113681 2.00735 0.275961 1.31717 0.773457 0.80504ZM1.46949 18.4973V21.2773C1.46949 21.6165 1.60057 21.9376 1.82741 22.1711C2.05355 22.4039 2.35565 22.5306 2.66599 22.5306H21.3341C21.6445 22.5306 21.9466 22.4039 22.1727 22.1711C22.3995 21.9376 22.5306 21.6165 22.5306 21.2773V18.5934L18.9931 14.9519C18.7913 14.7441 18.553 14.5805 18.2921 14.4693C18.0314 14.3581 17.7527 14.3012 17.4718 14.3012C17.1908 14.3012 16.9121 14.3581 16.6514 14.4693C16.3906 14.5805 16.1522 14.7441 15.9504 14.9519L14.6337 16.3073L16.0675 17.7834C16.3503 18.0744 16.3435 18.5396 16.0525 18.8223C15.7614 19.105 15.2963 19.0983 15.0136 18.8072L13.0842 16.8211C13.0828 16.8197 13.0814 16.8182 13.08 16.8168L8.37159 11.9699C8.16982 11.7621 7.93143 11.5985 7.67062 11.4873C7.40986 11.3761 7.13115 11.3192 6.85023 11.3192C6.5693 11.3192 6.2906 11.3761 6.02984 11.4873C5.79319 11.5882 5.57501 11.7323 5.38588 11.9133L1.46949 18.4973ZM13.6094 15.2529L14.8964 13.928C15.2326 13.5819 15.6329 13.3062 16.075 13.1177C16.5172 12.9292 16.9919 12.8318 17.4718 12.8318C17.9517 12.8318 18.4263 12.9292 18.8685 13.1177C19.3106 13.3062 19.7109 13.5819 20.0471 13.928L22.5306 16.4846V2.72269C22.5306 2.38353 22.3995 2.0624 22.1727 1.82889C21.9466 1.5961 21.6445 1.46939 21.3341 1.46939H2.66599C2.35564 1.46939 2.05355 1.5961 1.82741 1.82889C1.60057 2.0624 1.46949 2.38353 1.46949 2.72269V15.6231L4.17046 11.0823C4.19982 11.033 4.23488 10.9872 4.2749 10.946C4.61111 10.5999 5.0114 10.3242 5.4535 10.1357C5.89565 9.94716 6.37033 9.84983 6.85023 9.84983C7.33013 9.84983 7.8048 9.94716 8.24695 10.1357C8.68905 10.3242 9.08935 10.5999 9.42555 10.946L13.6094 15.2529ZM12.741 7.49199C12.9676 7.25875 13.2795 7.12365 13.6094 7.12365C13.9393 7.12365 14.2512 7.25875 14.4777 7.49199C14.7036 7.7245 14.8269 8.03544 14.8269 8.35534C14.8269 8.67524 14.7036 8.98618 14.4777 9.2187C14.2512 9.45194 13.9393 9.58703 13.6094 9.58703C13.2795 9.58703 12.9676 9.45194 12.741 9.2187C12.5151 8.98618 12.3919 8.67524 12.3919 8.35534C12.3919 8.03544 12.5151 7.7245 12.741 7.49199Z"
                                                        fill="#7367F0" />
                                                </svg>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">{{ !empty($value) ? '223' : '' }}
                                            </div>
                                            <div class="fs-7 text-gray-600 fw-bold">Total Photos</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center ms-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                    height="24" viewBox="0 0 25 24" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.057 4.74461C12.0718 4.44258 9.06319 4.42019 6.07351 4.67775L4.07691 4.84915C3.27573 4.91836 2.52214 5.24559 1.93776 5.77802C1.35339 6.31045 0.972333 7.01702 0.856095 7.78368C0.381302 10.9115 0.381302 14.0892 0.856095 17.2169C0.972601 17.9837 1.35391 18.6903 1.93849 19.2227C2.52308 19.7551 3.27684 20.0823 4.07817 20.1515L6.07477 20.3217C9.06441 20.5797 12.073 20.5577 15.0582 20.256L15.8256 20.1782C16.5872 20.1012 17.3034 19.7917 17.8695 19.2948C18.4356 18.7979 18.8218 18.1397 18.9719 17.4163L22.8174 19.3832C22.9555 19.4538 23.1096 19.4904 23.2659 19.4897C23.4222 19.489 23.576 19.4511 23.7133 19.3792C23.8507 19.3073 23.9675 19.2038 24.0532 19.0778C24.1389 18.9519 24.1908 18.8075 24.2045 18.6575L24.236 18.3122C24.588 14.4446 24.588 10.5548 24.236 6.68718L24.2045 6.34194C24.1907 6.19187 24.1386 6.04741 24.0528 5.92148C23.9669 5.79555 23.85 5.69207 23.7125 5.6203C23.575 5.54853 23.4211 5.51071 23.2647 5.5102C23.1083 5.5097 22.9542 5.54654 22.8162 5.61743L18.9719 7.58431C18.8218 6.86093 18.4356 6.20271 17.8695 5.70582C17.3034 5.20892 16.5872 4.89938 15.8256 4.82241L15.057 4.74461ZM6.24263 6.4939C9.1101 6.24699 11.9957 6.26856 14.8588 6.55832L15.6261 6.63612C16.0011 6.67436 16.3521 6.83164 16.624 7.0832C16.896 7.33476 17.0733 7.66629 17.128 8.02559C17.5798 10.9929 17.5798 14.0065 17.128 16.975C17.0733 17.3343 16.896 17.6659 16.624 17.9174C16.3521 18.169 16.0011 18.3263 15.6261 18.3645L14.8588 18.4423C11.9957 18.7321 9.11009 18.7537 6.24263 18.5067L4.24603 18.3341C3.86868 18.3017 3.51367 18.1478 3.23823 17.8973C2.96279 17.6467 2.78297 17.3142 2.72775 16.9532C2.27951 14.0003 2.27951 11.0003 2.72775 8.04747C2.78249 7.68616 2.96214 7.35318 3.23764 7.10237C3.51315 6.85157 3.86842 6.69758 4.24603 6.6653L6.24263 6.4939ZM19.2193 9.52202C19.4073 11.5035 19.4073 13.4971 19.2193 15.4786L22.4338 17.1233C22.6626 14.0453 22.6626 10.9554 22.4338 7.87728L19.2193 9.52202Z"
                                                        fill="#FF9733" />
                                                </svg>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">{{ !empty($value) ? '223' : '' }}
                                            </div>
                                            <div class="fs-7 text-gray-600 fw-bold">Total Videos</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>


                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-xxl-12">
                    <div class="card card-flush h-xl-100">
                        <div class="card-header pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Leaves Analytics</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Total 1128 Leaves</span>
                            </h3>
                            <div class="card-toolbar">
                                <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                    data-kt-daterangepicker-range="today"
                                    class="btn btn-sm btn-light d-flex align-items-center px-4"
                                    data-kt-initialized="1">
                                    <!--begin::Display range-->
                                    <div class="text-gray-600 fw-bold">31 Jul 2023</div>
                                    <!--end::Display range-->

                                    <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span><span
                                            class="path5"></span><span class="path6"></span></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-6">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px  me-3">
                                        <span class="symbol-label bg-light-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 30 30" fill="none">
                                                <path
                                                    d="M20.508 9.696L12.6 17.604L8.292 13.308L6.6 15L12.6 21L22.2 11.4L20.508 9.696ZM15 3C8.376 3 3 8.376 3 15C3 21.624 8.376 27 15 27C21.624 27 27 21.624 27 15C27 8.376 21.624 3 15 3ZM15 24.6C9.696 24.6 5.4 20.304 5.4 15C5.4 9.696 9.696 5.4 15 5.4C20.304 5.4 24.6 9.696 24.6 15C24.6 20.304 20.304 24.6 15 24.6Z"
                                                    fill="#244B8A" />
                                            </svg>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-800 fw-bold fs-6 d-block">Approved Leaves</span>
                                            <span class="text-gray-400 mt-1 fw-semibold fs-6">Great, you always
                                                attending class. keep it up</span>
                                        </div>
                                        <!--end:Author-->

                                        <!--begin::Actions-->
                                        <u
                                            class="text-bg fw-bold fs-3 d-block underline">{{ !empty($value) ? '223' : '' }}</u>
                                        <!--begin::Actions-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px  me-3">
                                        <span class="symbol-label bg-light-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 30 30" fill="none">
                                                <path
                                                    d="M15 3C8.4 3 3 8.4 3 15C3 21.6 8.4 27 15 27C21.6 27 27 21.6 27 15C27 8.4 21.6 3 15 3ZM5.4 15C5.4 9.72 9.72 5.4 15 5.4C17.16 5.4 19.2 6.12 20.88 7.44L7.44 20.88C6.12 19.2 5.4 17.16 5.4 15ZM15 24.6C12.84 24.6 10.8 23.88 9.12 22.56L22.56 9.12C23.88 10.8 24.6 12.84 24.6 15C24.6 20.28 20.28 24.6 15 24.6Z"
                                                    fill="#244B8A" />
                                            </svg>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-800 fw-bold fs-6 d-block">Rejected Leaves</span>
                                            <span class="text-gray-400 mt-1 fw-semibold fs-6">Great, you always
                                                attending class. keep it up</span>
                                        </div>
                                        <!--end:Author-->

                                        <!--begin::Actions-->
                                        <u
                                            class="text-bg fw-bold fs-3 d-block underline">{{ !empty($value) ? '220' : '' }}</u>
                                        <!--begin::Actions-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px  me-3">
                                        <span class="symbol-label bg-light-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 30 30" fill="none">
                                                <path
                                                    d="M14.988 3C8.364 3 3 8.376 3 15C3 21.624 8.364 27 14.988 27C21.624 27 27 21.624 27 15C27 8.376 21.624 3 14.988 3ZM15 24.6C9.696 24.6 5.4 20.304 5.4 15C5.4 9.696 9.696 5.4 15 5.4C20.304 5.4 24.6 9.696 24.6 15C24.6 20.304 20.304 24.6 15 24.6Z"
                                                    fill="#244B8A" />
                                                <path d="M15.6 9H13.8V16.2L20.1 19.98L21 18.504L15.6 15.3V9Z"
                                                    fill="#244B8A" />
                                            </svg>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-800 fw-bold fs-6 d-block">Requested Leaves</span>
                                            <span class="text-gray-400 mt-1 fw-semibold fs-6">Great, you always
                                                attending class. keep it up</span>
                                        </div>
                                        <!--end:Author-->

                                        <!--begin::Actions-->
                                        <u
                                            class="text-bg fw-bold fs-3 d-block underline">{{ !empty($value) ? '223' : '' }}</u>
                                        <!--begin::Actions-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="col-xl-12 col-xxl-8 mb-5 mb-xl-10">
            <div class="row gy-5 g-xl-10">
                <div class="col-md-12 col-xxl-12">
                    <div class="card card-flush h-xl-100">
                        <!--begin::Card head-->
                        <div class="card-header pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Staff</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">223 Total staff</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light-primary">View All</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>

                        <!--end::Card head-->



                        @if (!empty($value))
                            <!--begin::Card body-->
                            <div class="card-body pt-6">

                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-75px symbol-circle me-5">
                                        <img src="{{ asset('assets/media/avatars/300-20.jpg') }}" alt="img">
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <!--begin:Author-->
                                        <div class="flex-grow-1 me-2">
                                            <span class="text-gray-800 fw-bold fs-6 d-block">Leslie Alexander</span>

                                            <span class="text-muted fw-semibold d-block fs-7">Administrator</span>
                                        </div>
                                        <!--end:Author-->

                                        <!--begin::Actions-->
                                        <a href="#" class="btn btn-sm btn-light-primary">
                                            View Profile</a>
                                        <!--begin::Actions-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->
                                @for ($i = 0; $i < 4; $i++)
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-75px symbol-circle me-5">
                                            <img src="{{ asset('assets/media/avatars/300-12.jpg') }}"
                                                alt="img">
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                            <!--begin:Author-->
                                            <div class="flex-grow-1 me-2">
                                                <span class="text-gray-800 fw-bold fs-6 d-block">Leslie
                                                    Alexander</span>

                                                <span class="text-muted fw-semibold d-block fs-7">Administrator</span>
                                            </div>
                                            <!--end:Author-->

                                            <!--begin::Actions-->
                                            <a href="#" class="btn btn-sm btn-light-primary">
                                                View Profile</a>
                                            <!--begin::Actions-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    @if ($i < 3)
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-4"></div>
                                        <!--end::Separator-->
                                    @endif
                                @endfor

                            </div>
                            <!--end::Card body-->
                        @else
                            <div class="d-flex align-items-center flex-column mb-15">
                                <div class="flex-grow-1">
                                    <div class="">
                                        <img src="{{ asset('assets/media/bro.svg') }}" alt="img"
                                            style="width:365px">
                                    </div>
                                </div>

                                <div class="pt-5 text-center">
                                    <span class="text-bg fs-2 fw-bold">No Staff Added, </span>
                                    <p class="text-muted me-2 fs-7">Kindly add staff details to use this service</p>

                                    <a href="#" class="btn btn-primary w-100 py-3">Add New Staff</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--end::Row-->









</x-default-layout>
