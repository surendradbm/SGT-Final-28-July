<x-default-layout>
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header mb-5">
        <div class="card-body py-3">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">Messages</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    {{-- <a href="javascript:void(0);" class="btn btn-primary btn-sm inverse icon-style">
                        Go Back
                    </a> --}}
                </div>
            </div>

        </div>
    </div>
    {{-- First Section Ends --}}



    {{-- Main Content --}}

    <div class="">
        <div class="d-flex flex-column flex-lg-row">
            {{-- Properties list start --}}
            <div class="flex-column flex-lg-row-auto w-lg-300px mb-10 mb-lg-0">
                <!--begin::Contacts-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header pt-7">
                        <h5 class="text-dark fw-bold">Properties</h5>
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



            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-lg-300px mb-10 mb-lg-0 ms-lg-7 ms-xl-5">
                <!--begin::Contacts-->
                <div class="card message_card">
                    <!--begin::Card header-->
                    <div class="card-header pt-7" id="kt_chat_contacts_header">
                        <h5 class="text-dark fw-bold">Rivi Property</h5>
                        <!--begin::Form-->
                        <form class="w-100 position-relative" autocomplete="off">
                            <!--begin::Icon-->
                            <i
                                class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span
                                    class="path1"></span><span class="path2"></span></i>
                            <!--end::Icon-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid px-13" name="search"
                                value="" placeholder="Search by username or email...">
                            <!--end::Input-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-5" id="kt_chat_contacts_body">
                        <!--begin::List-->
                        <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true"
                            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header"
                            data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body"
                            data-kt-scroll-offset="5px" style="max-height: 139px;">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-45px symbol-circle "><span
                                            class="symbol-label  bg-light-danger text-danger fs-6 fw-bolder ">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                            Macy</a>
                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Lat seen-->
                                <div class="d-flex flex-column align-items-end ms-2">
                                    <span class="text-muted fs-7 mb-1">2 weeks</span>
                                </div>
                                <!--end::Lat seen-->
                            </div>
                            <!--end::User-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed d-none"></div>
                            <!--end::Separator-->
                            @for ($x = 1; $x <= 15; $x++)
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-45px symbol-circle ">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/blank.svg') }}">
                                            <div
                                                class="symbol-badge bg-success start-100 top-100 border-4 h-8px w-8px ms-n2 mt-n2">
                                            </div>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                Smith</a>
                                            <div class="fw-semibold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Lat seen-->
                                    <div class="d-flex flex-column align-items-end ms-2">
                                        <span class="text-muted fs-7 mb-1">1 day</span>
                                    </div>
                                    <!--end::Lat seen-->
                                </div>
                            @endfor

                            <!--end::User-->

                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Contacts-->
            </div>
            <!--end::Sidebar-->



            <!--begin::Content-->
            <div class="flex-lg-row-fluid">
                <!--begin::Messenger-->
                <div class="card" id="kt_chat_messenger">
                    <!--begin::Card header-->
                    <div class="card-header" id="kt_chat_messenger_header">
                        <div class="card-title">
                            <div class="symbol-group symbol-hover">

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="{{ asset('assets/media/avatars/blank.svg') }}"></div>
                                <!--end::Avatar-->

                            </div>
                        </div>
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <div class="me-n3">
                                <button class="btn btn-sm btn-icon btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal">
                                            Delete
                                        </a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">
                                            Share
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body" id="kt_chat_messenger_body">
                        <!--begin::Messages-->
                        <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages"
                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                            data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
                            data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body"
                            data-kt-scroll-offset="5px" style="max-height: 483px;">
                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="{{ asset('assets/media/avatars/blank.svg') }}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                Cox</a>
                                            <span class="text-muted fs-7 mb-1">2 mins</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                        data-kt-element="message-text">
                                        How likely are you to recommend our company to your friends and
                                        family ?
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->
                            <!--begin::Message(out)-->
                            <div class="d-flex justify-content-end mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">5 mins</span>
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="{{ asset('assets/media/avatars/blank.svg') }}">
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                        data-kt-element="message-text">
                                        Hey there, we’re just writing to let you know that you’ve been
                                        subscribed to a repository on GitHub.
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(out)-->
                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="{{ asset('assets/media/avatars/blank.svg') }}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                Cox</a>
                                            <span class="text-muted fs-7 mb-1">1 Hour</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                        data-kt-element="message-text">
                                        Ok, Understood!
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->
                            <!--begin::Message(out)-->
                            <div class="d-flex justify-content-end mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">2 Hours</span>
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="{{ asset('assets/media/avatars/blank.svg') }}">
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                        data-kt-element="message-text">
                                        You’ll receive notifications for all issues, pull requests!
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(out)-->
                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="{{ asset('assets/media/avatars/blank.svg') }}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                Cox</a>
                                            <span class="text-muted fs-7 mb-1">3 Hours</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                        data-kt-element="message-text">
                                        You can unwatch this repository immediately by clicking here: <a
                                            href="https://keenthemes.com">Keenthemes.com</a>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->
                            <!--begin::Message(out)-->
                            <div class="d-flex justify-content-end mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">4 Hours</span>
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="{{ asset('assets/media/avatars/blank.svg') }}">
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                        data-kt-element="message-text">
                                        Most purchased Business courses during this sale!
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(out)-->
                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="{{ asset('assets/media/avatars/blank.svg') }}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                Cox</a>
                                            <span class="text-muted fs-7 mb-1">5 Hours</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                        data-kt-element="message-text">
                                        Company BBQ to celebrate the last quater achievements and goals.
                                        Food and drinks provided
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->
                            <!--begin::Message(template for out)-->
                            <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">Just now</span>
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="{{ asset('assets/media/avatars/blank.svg') }}">
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                        data-kt-element="message-text">
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(template for out)-->
                            <!--begin::Message(template for in)-->
                            <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="{{ asset('assets/media/avatars/blank.svg') }}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                Cox</a>
                                            <span class="text-muted fs-7 mb-1">Just now</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                        data-kt-element="message-text">
                                        Right before vacation season we have the next Big Deal for you.
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(template for in)-->
                        </div>
                        <!--end::Messages-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer" id="kt_chat_messenger_footer">
                        <!--begin:Toolbar-->
                        <div class="d-flex flex-stack">
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center me-2">
                                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                    data-bs-toggle="tooltip" aria-label="Coming soon"
                                    data-bs-original-title="Coming soon" data-kt-initialized="1">
                                    <i class="ki-duotone ki-paper-clip fs-3"></i> </button>
                                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                    data-bs-toggle="tooltip" aria-label="Coming soon"
                                    data-bs-original-title="Coming soon" data-kt-initialized="1">
                                    <i class="ki-duotone ki-exit-up fs-3"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </button>
                            </div>
                            <!--end::Actions-->
                            <!--begin::Input-->
                            <textarea class="form-control me-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
                            <!--end::Input-->
                            <!--begin::Send-->
                            <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                            <!--end::Send-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Messenger-->
            </div>
            <!--end::Content-->
        </div>
    </div>

    {{-- Main Content --}}
    {{-- Delete Model --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="ConfirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ConfirmationModalLabel">Delete Confirmation
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this item?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-theame">Delete</button>
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
