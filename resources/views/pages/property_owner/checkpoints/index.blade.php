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
                    <div class="title">Checkpoints</div>
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
                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <span class="icon-style"><i class="bi bi-list-ol"></i></span>
                                <label>Total <br>
                                    Checkpoints</label>
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
                                <label>Completed <br>
                                    Checkpoints</label>
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
                                    Checkpoints</label>
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
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="headCheckbox"
                                        onchange="toggleAllCheckboxes()">
                                    <label class="form-check-label" for="headCheckbox">
                                    </label>
                                </div>
                            </th>
                            <th>Checkpoints</th>
                            <th>Action</th>
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
                            <td>
                                <div class="d-flex">
                                    <!--begin::Symbol-->
                                    <img class="me-3" style="width: 50px;height: 50px;"
                                        src="http://127.0.0.1:8000/assets/images/properties/shift-qr.png"
                                        alt="qr">
                                    <!--end::Symbol-->

                                    <!--begin::Text-->
                                    <div class="d-flex flex-column">
                                        <div class="text-dark fw-bold fs-5">Hallway Checkpoint</div>

                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <div class="text-dark fw-bold me-4">Shift Name:
                                                <span class="text-gray-700 fw-semibold">Suhanta Shift</span>
                                            </div>
                                            <div class="text-dark fw-bold me-4">Route Number:
                                                <span class="text-gray-700 fw-bold">7</span>
                                            </div>
                                            <div class="text-dark fw-bold me-4">Property Name:
                                                <span class="text-gray-700 fw-bold">Rivi Property</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Text-->
                                </div>
                            </td>
                            <td>
                                <button
                                    class="btn btn-icon btn-color-gray-700 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="bi bi-three-dots-vertical fs-1"></i>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px p-3"
                                    data-kt-menu="true">
                                    <div class="menu-item"><a href="javascript:void(0)" class="menu-link">Edit
                                            Checkpoint</a></div>
                                    <div class="menu-item"><a href="{{ route('property_owner.checkpoints.history') }}"
                                            class="menu-link">View History</a></div>
                                    <div class="menu-item"><a href="javascript:void(0)" class="menu-link">Download
                                            QR</a></div>
                                    <div class="menu-item"><a href="javascript:void(0)" class="menu-link"
                                            data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">Delete
                                            Checkpoint</a>
                                    </div>

                                </div>
                            </td>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Delete Model --}}
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1"
        aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
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
