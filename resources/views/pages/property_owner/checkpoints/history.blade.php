<x-default-layout>
    {{-- Breadcrumbs (Start) --}}
    <div class="py-3">
        <ul class="breadcrumb">
            <li><a href="{{ route('property_owner.checkpoints') }}">Checkpoints</a></li>
            <li><i class="fas fa-chevron-right"></i></li>
            <li class="active"><a href="{{ route('property_owner.checkpoints.history') }}">Hallway Checkpoint</a></li>
        </ul>
    </div>
    {{-- Breadcrumbs (End) --}}
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header mb-5">
        <div class="card-body py-3">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">Hallway Checkpoint</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm inverse icon-style button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <mask id="mask0_1_336647" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                y="0" width="24" height="24">
                                <rect width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_1_336647)">
                                <path
                                    d="M6.57062 15.4191L10.9661 14.9943L14.182 18.0206L14.6578 17.7872L13.9312 6.31913L6.33724 14.9433L6.57062 15.4191ZM8.76047 21.4474C7.45251 21.0004 6.30816 20.3321 5.32745 19.4425C4.34673 18.5529 3.57631 17.5372 3.0162 16.3954C2.45609 15.2535 2.12443 14.0226 2.02122 12.7026C1.91802 11.3825 2.08994 10.0685 2.53699 8.76054C2.98405 7.45257 3.65237 6.30822 4.54196 5.32751C5.43155 4.34679 6.44725 3.57638 7.58908 3.01626C8.7309 2.45615 9.96183 2.12449 11.2819 2.02128C12.6019 1.91808 13.9159 2.09 15.2239 2.53706C16.5319 2.98411 17.6762 3.65243 18.6569 4.54202C19.6376 5.43161 20.4081 6.44732 20.9682 7.58914C21.5283 8.73096 21.8599 9.96189 21.9632 11.2819C22.0664 12.602 21.8944 13.916 21.4474 15.224C21.0003 16.5319 20.332 17.6763 19.4424 18.657C18.5528 19.6377 17.5371 20.4081 16.3953 20.9682C15.2535 21.5283 14.0225 21.86 12.7025 21.9632C11.3825 22.0664 10.0684 21.8945 8.76047 21.4474ZM9.40682 19.5564C11.5185 20.2782 13.5575 20.1567 15.524 19.1921C17.4905 18.2274 18.8346 16.6893 19.5563 14.5776C20.2781 12.466 20.1566 10.4269 19.192 8.46042C18.2274 6.49395 16.6892 5.14984 14.5776 4.42809C12.4659 3.70635 10.4268 3.82779 8.46036 4.79243C6.49389 5.75707 5.14978 7.29522 4.42803 9.40688C3.70628 11.5185 3.82773 13.5576 4.79237 15.5241C5.75701 17.4905 7.29516 18.8347 9.40682 19.5564Z"
                                    fill="#244B8A" />
                            </g>
                        </svg>
                        Map View
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap mb-2">
                            <div class="text-dark fw-bold me-4">Route No.:
                                <span class="text-gray-800 fw-semibold">236556</span>
                            </div>
                            <div class="text-dark fw-bold me-4">Total Tasks:
                                <span class="text-gray-800 fw-bold">13</span>
                            </div>
                            <div class="text-dark fw-bold me-4">Check-In Time:
                                <span class="text-gray-800 fw-bold">12:00 PM</span>
                            </div>
                        </div>

                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap mb-2">
                            <div class="text-dark fw-bold me-4">Shift Name:
                                <span class="text-gray-800 fw-semibold">Marlin Morning Shift</span>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    {{-- First Section Ends --}}

    {{-- Map Section Starts --}}
    <div class="slider closed">
        <div class="card shadow-sm mb-5">
            <div class="card-body p-3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1779.8605565182552!2d80.92905550384064!3d26.84882128658602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1690357283612!5m2!1sen!2sin"
                    width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    {{-- Map Section Ends --}}


    {{-- Main Content --}}
    <div class="card card-flush shadow-sm">
        <div class="card-body p-3">

            <div class="table-responsive mt-5">
                <table class="table table-hover display responsive table-rounded border gy-5 gs-7" id="dataTable">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th class="table_head">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="headCheckbox"
                                        onchange="toggleAllCheckboxes()">
                                    <label class="form-check-label" for="headCheckbox">
                                    </label>
                                </div>
                            </th>
                            <th>S.No.</th>
                            <th>Assign guard</th>
                            <th>Check-In Time</th>
                            <th>Actual Check-In</th>
                            <th>Actual Check-Out</th>
                            <th>Tasks</th>
                            <th>Status</th>
                            <th>Task detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($x = 1; $x <= 8; $x++) { ?>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <th>1</th>
                            <td>Pavlo Yadav</td>
                            <td>12:23 PM</td>
                            {{-- <td><span class="text-success fs-8 fw-bold">12:23 PM</span></td> --}}
                            <td><span class="text-danger fs-8 fw-bold">12:23 PM</span></td>
                            <td>02:35 PM</td>
                            <td>12/12</td>
                            {{-- <td><span class="text-danger fs-8 fw-bold">Missed</span></td> --}}
                            <td><span class="text-success fs-8 fw-bold">Completed</span></td>
                            <td>
                                <a href="#" class="btn btn-secondary btn-sm fw-bold" data-bs-toggle="modal"
                                    data-bs-target="#task_detail_modal">
                                    View
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Delete Model --}}
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete Confirmation
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

    {{-- Task detail Model --}}
    <div class="modal fade" id="task_detail_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                            fill="none">
                            <path
                                d="M24.3333 3H5.66667C4.2 3 3 4.2 3 5.66667V24.3333C3 25.8 4.2 27 5.66667 27H24.3333C25.8 27 27 25.8 27 24.3333V5.66667C27 4.2 25.8 3 24.3333 3ZM17.6667 21.6667H8.33333V19H17.6667V21.6667ZM21.6667 16.3333H8.33333V13.6667H21.6667V16.3333ZM21.6667 11H8.33333V8.33333H21.6667V11Z"
                                fill="#244B8A" />
                        </svg>
                        Task Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <p class="text-dark fw-bold mb-2">Task</p>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Checked server room</div>
                                    </div>
                                    <span class="fs-8 fw-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M6.4 15L10 11.4L13.6 15L15 13.6L11.4 10L15 6.4L13.6 5L10 8.6L6.4 5L5 6.4L8.6 10L5 13.6L6.4 15ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z"
                                                fill="#666666" />
                                        </svg>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Check the parking gate</div>
                                    </div>
                                    <span class="fs-8 fw-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M8.6 14.6L15.65 7.55L14.25 6.15L8.6 11.8L5.75 8.95L4.35 10.35L8.6 14.6ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z"
                                                fill="#244B8A" />
                                        </svg>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Check car number 5298</div>
                                    </div>
                                    <span class="fs-8 fw-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M8.6 14.6L15.65 7.55L14.25 6.15L8.6 11.8L5.75 8.95L4.35 10.35L8.6 14.6ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z"
                                                fill="#244B8A" />
                                        </svg>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Create a general report</div>
                                    </div>
                                    <span class="fs-8 fw-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M6.4 15L10 11.4L13.6 15L15 13.6L11.4 10L15 6.4L13.6 5L10 8.6L6.4 5L5 6.4L8.6 10L5 13.6L6.4 15ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z"
                                                fill="#666666" />
                                        </svg>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Check all security cameras</div>
                                    </div>
                                    <span class="fs-8 fw-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M8.6 14.6L15.65 7.55L14.25 6.15L8.6 11.8L5.75 8.95L4.35 10.35L8.6 14.6ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z"
                                                fill="#244B8A" />
                                        </svg>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Create parking report</div>
                                    </div>
                                    <span class="fs-8 fw-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M8.6 14.6L15.65 7.55L14.25 6.15L8.6 11.8L5.75 8.95L4.35 10.35L8.6 14.6ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z"
                                                fill="#244B8A" />
                                        </svg>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Met with manager</div>
                                    </div>
                                    <span class="fs-8 fw-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M6.4 15L10 11.4L13.6 15L15 13.6L11.4 10L15 6.4L13.6 5L10 8.6L6.4 5L5 6.4L8.6 10L5 13.6L6.4 15ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z"
                                                fill="#666666" />
                                        </svg>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Take a tour of server room</div>
                                    </div>
                                    <span class="fs-8 fw-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M8.6 14.6L15.65 7.55L14.25 6.15L8.6 11.8L5.75 8.95L4.35 10.35L8.6 14.6ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20Z"
                                                fill="#244B8A" />
                                        </svg>
                                    </span>
                                </li>
                            </ol>
                        </div>
                    </div>




                    <div class="form-group mb-5">
                        <p class="text-dark fw-bold mb-2">Additional Comment</p>
                        <div class="bg-light-primary p-3">Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                            Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                        </div>
                    </div>
                    <div class="form-group mb-5">
                        <p class="text-dark fw-bold mb-2">Checkpoint Media</p>
                        <div class="row">
                            @php for ($x = 1; $x <= 8; $x++) { @endphp
                            <div class="col-lg-3 col-6 py-3">
                                <img src="{{ asset('assets/images/reports/image-sample-1.png') }}" alt="image-sample"
                                    class="img-fluid rounded">
                            </div>
                            @php } @endphp
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Download Report</button>
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


