<x-default-layout>
    <style>
        .icon-style i {
            font-size: 30px !important;
            color: #244a8d !important;
        }

        .icon-style i::before {
            font-weight: 600 !important;
        }
    </style>
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header mb-5">
        <div class="card-body py-3">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">Timesheet</div>
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
                                    Properties</label>
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
                                <label>Total <br>
                                    Shifts</label>
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
                                <label>Missed <br>
                                    Shifts</label>
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
    <div class="d-flex flex-column flex-lg-row">
        {{-- Properties list start --}}
        <div class="flex-column flex-lg-row-auto w-lg-300px mb-10 mb-lg-0">
            <!--begin::Contacts-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header pt-7">
                    <h5 class="text-dark fw-bold"><i class="bi bi-bank fs-4 me-2 fw-bold text-dark"></i> All
                        Properties</h5>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::List-->
                    <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header"
                        data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body"
                        data-kt-scroll-offset="5px" style="max-height: 139px;">

                        <ul
                            class="nav nav-tabs nav-pills border-0 flex-row flex-md-column mb-3 mb-md-0 text-gray-700 fw-bold">
                            <li class="nav-item me-0 mb-2">
                                <a class="nav-link p-4 active" href="#">
                                    <span class="svg_icon me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M0.5 15.5V3.83333H3.83333V0.5H12.1667V7.16667H15.5V15.5H8.83333V12.1667H7.16667V15.5H0.5ZM2.16667 13.8333H3.83333V12.1667H2.16667V13.8333ZM2.16667 10.5H3.83333V8.83333H2.16667V10.5ZM2.16667 7.16667H3.83333V5.5H2.16667V7.16667ZM5.5 10.5H7.16667V8.83333H5.5V10.5ZM5.5 7.16667H7.16667V5.5H5.5V7.16667ZM5.5 3.83333H7.16667V2.16667H5.5V3.83333ZM8.83333 10.5H10.5V8.83333H8.83333V10.5ZM8.83333 7.16667H10.5V5.5H8.83333V7.16667ZM8.83333 3.83333H10.5V2.16667H8.83333V3.83333ZM12.1667 13.8333H13.8333V12.1667H12.1667V13.8333ZM12.1667 10.5H13.8333V8.83333H12.1667V10.5Z" />
                                        </svg>
                                    </span>
                                    Rivi property
                                </a>
                            </li>
                            <li class="nav-item me-0 mb-2">
                                <a class="nav-link p-4 " href=""><i
                                        class="bi bi-collection-play-fill fs-4 me-2"></i> Rivi property</a>
                            </li>
                            <li class="nav-item me-0 mb-2">
                                <a class="nav-link p-4 " href="#">
                                    <span class="svg_icon me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M0.5 15.5V3.83333H3.83333V0.5H12.1667V7.16667H15.5V15.5H8.83333V12.1667H7.16667V15.5H0.5ZM2.16667 13.8333H3.83333V12.1667H2.16667V13.8333ZM2.16667 10.5H3.83333V8.83333H2.16667V10.5ZM2.16667 7.16667H3.83333V5.5H2.16667V7.16667ZM5.5 10.5H7.16667V8.83333H5.5V10.5ZM5.5 7.16667H7.16667V5.5H5.5V7.16667ZM5.5 3.83333H7.16667V2.16667H5.5V3.83333ZM8.83333 10.5H10.5V8.83333H8.83333V10.5ZM8.83333 7.16667H10.5V5.5H8.83333V7.16667ZM8.83333 3.83333H10.5V2.16667H8.83333V3.83333ZM12.1667 13.8333H13.8333V12.1667H12.1667V13.8333ZM12.1667 10.5H13.8333V8.83333H12.1667V10.5Z" />
                                        </svg>
                                    </span>
                                    Marketing Automation
                                </a>
                            </li>
                            <li class="nav-item me-0 mb-2">
                                <a class="nav-link p-4 " href=""><i
                                        class="bi bi-collection-play-fill fs-4 me-2"></i> Sunny Floor Mill</a>
                            </li>

                            @for ($x = 1; $x <= 14; $x++)
                                <li class="nav-item me-0 mb-2">
                                    <a class="nav-link p-4 " href=""><i
                                            class="bi bi-collection-play-fill fs-4 me-2"></i> Sunny Floor Mill</a>
                                </li>
                            @endfor

                        </ul>


                    </div>
                    <!--end::List-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Contacts-->
        </div>
        {{-- Properties list end --}}

        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-7 ms-xl-5">
            <!--begin::Card-->
            <div class="card ">

                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Calendar-->
                    <div id="timesheet_calendar">

                    </div>
                    <!--end::Calendar-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
    {{-- Main Content --}}





</x-default-layout>
