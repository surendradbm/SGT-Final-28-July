<x-default-layout>
    <style>
        .icon-style i {
            font-size: 30px !important;
            color: #244a8d !important;
        }

        .icon-style i::before {
            font-weight: 600 !important;
        }

        /* .message_card{
            box-shadow: 0px 0px 4px 2px #b6b9be78!important;
            border: none!important;
            border-radius: 0!important;
        } */
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


    {{-- Properties list start --}}

    {{-- Properties list end --}}
    {{-- Main Content --}}

    <div class="">
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
                                    <a class="nav-link p-4 active" href="{{ route('notification.guard_app.logins') }}">
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
                                    <a class="nav-link p-4 " href="{{ route('notification.guard_app.logins') }}">
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
        <div id="kt_calendar_app" class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
            <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                <div class="fc-toolbar-chunk">
                    <div class="fc-button-group"><button type="button" title="Previous month" aria-pressed="false" class="fc-prev-button fc-button fc-button-primary"><span class="fc-icon fc-icon-chevron-left"></span></button><button type="button" title="Next month" aria-pressed="false" class="fc-next-button fc-button fc-button-primary"><span class="fc-icon fc-icon-chevron-right"></span></button></div>
                    <button type="button" title="This month" disabled="" aria-pressed="false" class="fc-today-button fc-button fc-button-primary">today</button>
                </div>
                <div class="fc-toolbar-chunk">
                    <h2 class="fc-toolbar-title" id="fc-dom-1">July 2023</h2>
                </div>
                <div class="fc-toolbar-chunk">
                    <div class="fc-button-group"><button type="button" title="month view" aria-pressed="true" class="fc-dayGridMonth-button fc-button fc-button-primary fc-button-active">month</button><button type="button" title="week view" aria-pressed="false" class="fc-timeGridWeek-button fc-button fc-button-primary">week</button><button type="button" title="day view" aria-pressed="false" class="fc-timeGridDay-button fc-button fc-button-primary">day</button></div>
                </div>
            </div>
            <div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-active" style="height: 888.889px;">
                <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                    <table role="grid" class="fc-scrollgrid  fc-scrollgrid-liquid">
                        <thead role="rowgroup">
                            <tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                <th role="presentation">
                                    <div class="fc-scroller-harness">
                                        <div class="fc-scroller" style="overflow: hidden;">
                                            <table role="presentation" class="fc-col-header " style="width: 1197px;">
                                                <colgroup></colgroup>
                                                <thead role="presentation">
                                                    <tr role="row">
                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun">
                                                            <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday" class="fc-col-header-cell-cushion ">Sun</a></div>
                                                        </th>
                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-mon">
                                                            <div class="fc-scrollgrid-sync-inner"><a aria-label="Monday" class="fc-col-header-cell-cushion ">Mon</a></div>
                                                        </th>
                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-tue">
                                                            <div class="fc-scrollgrid-sync-inner"><a aria-label="Tuesday" class="fc-col-header-cell-cushion ">Tue</a></div>
                                                        </th>
                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-wed">
                                                            <div class="fc-scrollgrid-sync-inner"><a aria-label="Wednesday" class="fc-col-header-cell-cushion ">Wed</a></div>
                                                        </th>
                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-thu">
                                                            <div class="fc-scrollgrid-sync-inner"><a aria-label="Thursday" class="fc-col-header-cell-cushion ">Thu</a></div>
                                                        </th>
                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-fri">
                                                            <div class="fc-scrollgrid-sync-inner"><a aria-label="Friday" class="fc-col-header-cell-cushion ">Fri</a></div>
                                                        </th>
                                                        <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sat">
                                                            <div class="fc-scrollgrid-sync-inner"><a aria-label="Saturday" class="fc-col-header-cell-cushion ">Sat</a></div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody role="rowgroup">
                            <tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                <td role="presentation">
                                    <div class="fc-scroller-harness fc-scroller-harness-liquid">
                                        <div class="fc-scroller fc-scroller-liquid-absolute" style="overflow: hidden auto;">
                                            <div class="fc-daygrid-body fc-daygrid-body-balanced " style="width: 1197px;">
                                                <table role="presentation" class="fc-scrollgrid-sync-table" style="width: 1197px; height: 840px;">
                                                    <colgroup></colgroup>
                                                    <tbody role="presentation">
                                                        <tr role="row">
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other" data-date="2023-06-25" aria-labelledby="fc-dom-2">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-2" class="fc-daygrid-day-number" title="Go to June 25, 2023" data-navlink="" tabindex="0">25</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other" data-date="2023-06-26" aria-labelledby="fc-dom-4">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-4" class="fc-daygrid-day-number" title="Go to June 26, 2023" data-navlink="" tabindex="0">26</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-past fc-day-other" data-date="2023-06-27" aria-labelledby="fc-dom-6">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-6" class="fc-daygrid-day-number" title="Go to June 27, 2023" data-navlink="" tabindex="0">27</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-past fc-day-other" data-date="2023-06-28" aria-labelledby="fc-dom-8">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-8" class="fc-daygrid-day-number" title="Go to June 28, 2023" data-navlink="" tabindex="0">28</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-past fc-day-other" data-date="2023-06-29" aria-labelledby="fc-dom-10">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-10" class="fc-daygrid-day-number" title="Go to June 29, 2023" data-navlink="" tabindex="0">29</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-past fc-day-other" data-date="2023-06-30" aria-labelledby="fc-dom-12">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-12" class="fc-daygrid-day-number" title="Go to June 30, 2023" data-navlink="" tabindex="0">30</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-past" data-date="2023-07-01" aria-labelledby="fc-dom-14">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-14" class="fc-daygrid-day-number" title="Go to July 1, 2023" data-navlink="" tabindex="0">1</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-danger fc-event-solid-warning" tabindex="0">
                                                                                <div class="fc-event-main">
                                                                                    <div class="fc-event-main-frame">
                                                                                        <div class="fc-event-title-container">
                                                                                            <div class="fc-event-title fc-sticky">All Day Event</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row">
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2023-07-02" aria-labelledby="fc-dom-16">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-16" class="fc-daygrid-day-number" title="Go to July 2, 2023" data-navlink="" tabindex="0">2</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-primary" tabindex="0">
                                                                                <div class="fc-event-main">
                                                                                    <div class="fc-event-main-frame">
                                                                                        <div class="fc-event-title-container">
                                                                                            <div class="fc-event-title fc-sticky">Company Trip</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2023-07-03" aria-labelledby="fc-dom-18">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-18" class="fc-daygrid-day-number" title="Go to July 3, 2023" data-navlink="" tabindex="0">3</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -171px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-light fc-event-solid-primary" tabindex="0">
                                                                                <div class="fc-event-main">
                                                                                    <div class="fc-event-main-frame">
                                                                                        <div class="fc-event-title-container">
                                                                                            <div class="fc-event-title fc-sticky">ICT Expo 2021 - Product Release</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 30px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2023-07-04" aria-labelledby="fc-dom-20">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-20" class="fc-daygrid-day-number" title="Go to July 4, 2023" data-navlink="" tabindex="0">4</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 30px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2023-07-05" aria-labelledby="fc-dom-22">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-22" class="fc-daygrid-day-number" title="Go to July 5, 2023" data-navlink="" tabindex="0">5</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-past" data-date="2023-07-06" aria-labelledby="fc-dom-24">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-24" class="fc-daygrid-day-number" title="Go to July 6, 2023" data-navlink="" tabindex="0">6</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-past" data-date="2023-07-07" aria-labelledby="fc-dom-26">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-26" class="fc-daygrid-day-number" title="Go to July 7, 2023" data-navlink="" tabindex="0">7</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-past" data-date="2023-07-08" aria-labelledby="fc-dom-28">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-28" class="fc-daygrid-day-number" title="Go to July 8, 2023" data-navlink="" tabindex="0">8</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row">
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2023-07-09" aria-labelledby="fc-dom-30">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-30" class="fc-daygrid-day-number" title="Go to July 9, 2023" data-navlink="" tabindex="0">9</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-danger" tabindex="0">
                                                                                <div class="fc-daygrid-event-dot"></div>
                                                                                <div class="fc-event-time">4p</div>
                                                                                <div class="fc-event-title">Repeating Event</div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2023-07-10" aria-labelledby="fc-dom-32">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-32" class="fc-daygrid-day-number" title="Go to July 10, 2023" data-navlink="" tabindex="0">10</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2023-07-11" aria-labelledby="fc-dom-34">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-34" class="fc-daygrid-day-number" title="Go to July 11, 2023" data-navlink="" tabindex="0">11</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2023-07-12" aria-labelledby="fc-dom-36">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-36" class="fc-daygrid-day-number" title="Go to July 12, 2023" data-navlink="" tabindex="0">12</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past" tabindex="0">
                                                                                <div class="fc-event-main">
                                                                                    <div class="fc-event-main-frame">
                                                                                        <div class="fc-event-title-container">
                                                                                            <div class="fc-event-title fc-sticky">Dinner</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-past" data-date="2023-07-13" aria-labelledby="fc-dom-38">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-38" class="fc-daygrid-day-number" title="Go to July 13, 2023" data-navlink="" tabindex="0">13</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-past" data-date="2023-07-14" aria-labelledby="fc-dom-40">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-40" class="fc-daygrid-day-number" title="Go to July 14, 2023" data-navlink="" tabindex="0">14</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-success" tabindex="0">
                                                                                <div class="fc-daygrid-event-dot"></div>
                                                                                <div class="fc-event-time">1:30p</div>
                                                                                <div class="fc-event-title">Reporting</div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-past" data-date="2023-07-15" aria-labelledby="fc-dom-42">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-42" class="fc-daygrid-day-number" title="Go to July 15, 2023" data-navlink="" tabindex="0">15</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row">
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2023-07-16" aria-labelledby="fc-dom-44">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-44" class="fc-daygrid-day-number" title="Go to July 16, 2023" data-navlink="" tabindex="0">16</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past" tabindex="0">
                                                                                <div class="fc-daygrid-event-dot"></div>
                                                                                <div class="fc-event-time">4p</div>
                                                                                <div class="fc-event-title">Repeating Event</div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2023-07-17" aria-labelledby="fc-dom-46">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-46" class="fc-daygrid-day-number" title="Go to July 17, 2023" data-navlink="" tabindex="0">17</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2023-07-18" aria-labelledby="fc-dom-48">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-48" class="fc-daygrid-day-number" title="Go to July 18, 2023" data-navlink="" tabindex="0">18</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2023-07-19" aria-labelledby="fc-dom-50">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-50" class="fc-daygrid-day-number" title="Go to July 19, 2023" data-navlink="" tabindex="0">19</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-past" data-date="2023-07-20" aria-labelledby="fc-dom-52">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-52" class="fc-daygrid-day-number" title="Go to July 20, 2023" data-navlink="" tabindex="0">20</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-past" data-date="2023-07-21" aria-labelledby="fc-dom-54">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-54" class="fc-daygrid-day-number" title="Go to July 21, 2023" data-navlink="" tabindex="0">21</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-past" data-date="2023-07-22" aria-labelledby="fc-dom-56">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-56" class="fc-daygrid-day-number" title="Go to July 22, 2023" data-navlink="" tabindex="0">22</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row">
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2023-07-23" aria-labelledby="fc-dom-58">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-58" class="fc-daygrid-day-number" title="Go to July 23, 2023" data-navlink="" tabindex="0">23</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2023-07-24" aria-labelledby="fc-dom-60">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-60" class="fc-daygrid-day-number" title="Go to July 24, 2023" data-navlink="" tabindex="0">24</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2023-07-25" aria-labelledby="fc-dom-62">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-62" class="fc-daygrid-day-number" title="Go to July 25, 2023" data-navlink="" tabindex="0">25</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2023-07-26" aria-labelledby="fc-dom-64">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-64" class="fc-daygrid-day-number" title="Go to July 26, 2023" data-navlink="" tabindex="0">26</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -171px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-primary" tabindex="0">
                                                                                <div class="fc-event-main">
                                                                                    <div class="fc-event-main-frame">
                                                                                        <div class="fc-event-title-container">
                                                                                            <div class="fc-event-title fc-sticky">Conference</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 30px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-today " data-date="2023-07-27" aria-labelledby="fc-dom-66">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-66" class="fc-daygrid-day-number" title="Go to July 27, 2023" data-navlink="" tabindex="0">27</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-event-harness" style="margin-top: 30px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today" tabindex="0">
                                                                                <div class="fc-daygrid-event-dot"></div>
                                                                                <div class="fc-event-time">10:30a</div>
                                                                                <div class="fc-event-title">Meeting</div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-info" tabindex="0">
                                                                                <div class="fc-daygrid-event-dot"></div>
                                                                                <div class="fc-event-time">12p</div>
                                                                                <div class="fc-event-title">Lunch</div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-warning" tabindex="0">
                                                                                <div class="fc-daygrid-event-dot"></div>
                                                                                <div class="fc-event-time">2:30p</div>
                                                                                <div class="fc-event-title">Meeting</div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-info" tabindex="0">
                                                                                <div class="fc-daygrid-event-dot"></div>
                                                                                <div class="fc-event-time">5:30p</div>
                                                                                <div class="fc-event-title">Happy Hour</div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"><a class="fc-daygrid-more-link fc-more-link" title="Show 3 more events" aria-expanded="false" aria-controls="" tabindex="0">+3 more</a></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2023-07-28" aria-labelledby="fc-dom-68">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-68" class="fc-daygrid-day-number" title="Go to July 28, 2023" data-navlink="" tabindex="0">28</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-solid-info fc-event-light" tabindex="0">
                                                                                <div class="fc-event-main">
                                                                                    <div class="fc-event-main-frame">
                                                                                        <div class="fc-event-title-container">
                                                                                            <div class="fc-event-title fc-sticky">Site visit</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-primary" tabindex="0">
                                                                                <div class="fc-daygrid-event-dot"></div>
                                                                                <div class="fc-event-time">12p</div>
                                                                                <div class="fc-event-title">Birthday Party</div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                                            <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-solid-danger fc-event-light" tabindex="0">
                                                                                <div class="fc-daygrid-event-dot"></div>
                                                                                <div class="fc-event-time">6p</div>
                                                                                <div class="fc-event-title">Dinner</div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2023-07-29" aria-labelledby="fc-dom-70">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-70" class="fc-daygrid-day-number" title="Go to July 29, 2023" data-navlink="" tabindex="0">29</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row">
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2023-07-30" aria-labelledby="fc-dom-72">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-72" class="fc-daygrid-day-number" title="Go to July 30, 2023" data-navlink="" tabindex="0">30</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2023-07-31" aria-labelledby="fc-dom-74">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-74" class="fc-daygrid-day-number" title="Go to July 31, 2023" data-navlink="" tabindex="0">31</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-future fc-day-other" data-date="2023-08-01" aria-labelledby="fc-dom-76">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-76" class="fc-daygrid-day-number" title="Go to August 1, 2023" data-navlink="" tabindex="0">1</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other" data-date="2023-08-02" aria-labelledby="fc-dom-78">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-78" class="fc-daygrid-day-number" title="Go to August 2, 2023" data-navlink="" tabindex="0">2</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other" data-date="2023-08-03" aria-labelledby="fc-dom-80">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-80" class="fc-daygrid-day-number" title="Go to August 3, 2023" data-navlink="" tabindex="0">3</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other" data-date="2023-08-04" aria-labelledby="fc-dom-82">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-82" class="fc-daygrid-day-number" title="Go to August 4, 2023" data-navlink="" tabindex="0">4</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                            <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other" data-date="2023-08-05" aria-labelledby="fc-dom-84">
                                                                <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                    <div class="fc-daygrid-day-top"><a id="fc-dom-84" class="fc-daygrid-day-number" title="Go to August 5, 2023" data-navlink="" tabindex="0">5</a></div>
                                                                    <div class="fc-daygrid-day-events">
                                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                    </div>
                                                                    <div class="fc-daygrid-day-bg"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end::Calendar-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
            </div>
            <!--end::Content-->
        </div>
    </div>

    {{-- Main Content --}}






</x-default-layout>
