<x-default-layout>
    <style>

        #transection .profile img {
            width: 100px;
            height: auto;
        }

        #transection .profile i {
            background: #f2ebeb;
            padding: 8px;
            font-size: 40px;
            color: #244b8a;
            border-radius: 5px;
        }

        #transection .boxx {
            padding: 20px !important;
        }

        #transection .border_gray {
            border: 1px solid #b8c3d5;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 10px;
        }

        #transection .payment_crad_img {
            width: 35px;
            margin-right: 5px;
        }
    </style>
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header mb-5">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">Transactions & Invoice</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="{{ route('superadmin.transaction_and_invoice') }}" class="btn btn-primary">All Transactions </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M15 17.4C18.3085 17.4 20.9905 14.1765 20.9905 10.2C20.9905 6.22355 18.3085 3 15 3C11.6916 3 9.00952 6.22355 9.00952 10.2C9.00952 14.1765 11.6916 17.4 15 17.4Z" fill="#244B8A"/>
                                    <path d="M26.7414 23.52C25.6631 21.36 23.6263 19.56 20.9905 18.48C20.2716 18.24 19.433 18.24 18.8339 18.6C17.6358 19.32 16.4377 19.68 15 19.68C13.5623 19.68 12.3642 19.32 11.1661 18.6C10.567 18.36 9.72835 18.24 9.00949 18.6C6.37367 19.68 4.33689 21.48 3.2586 23.64C2.41993 25.2 3.73784 27 5.53499 27H24.465C26.2622 27 27.5801 25.2 26.7414 23.52Z" fill="#244B8A"/>
                                </svg>
                                <label>All <br>
                                    Transactions</label>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M20.508 9.696L12.6 17.604L8.292 13.308L6.6 15L12.6 21L22.2 11.4L20.508 9.696ZM15 3C8.376 3 3 8.376 3 15C3 21.624 8.376 27 15 27C21.624 27 27 21.624 27 15C27 8.376 21.624 3 15 3ZM15 24.6C9.696 24.6 5.4 20.304 5.4 15C5.4 9.696 9.696 5.4 15 5.4C20.304 5.4 24.6 9.696 24.6 15C24.6 20.304 20.304 24.6 15 24.6Z" fill="#244B8A"/>
                                </svg>
                                <label>Active <br>
                                    Customers</label>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M15 3C8.4 3 3 8.4 3 15C3 21.6 8.4 27 15 27C21.6 27 27 21.6 27 15C27 8.4 21.6 3 15 3ZM5.4 15C5.4 9.72 9.72 5.4 15 5.4C17.16 5.4 19.2 6.12 20.88 7.44L7.44 20.88C6.12 19.2 5.4 17.16 5.4 15ZM15 24.6C12.84 24.6 10.8 23.88 9.12 22.56L22.56 9.12C23.88 10.8 24.6 12.84 24.6 15C24.6 20.28 20.28 24.6 15 24.6Z" fill="#244B8A"/>
                                </svg>
                                <label>Inactive <br>
                                    Customers</label>
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

    <div class="card shadow-sm" id="transection">
        <div class="card-body d-flex flex-column">

            <div class="row mb-5 mt-5">
                <div class="col-md-12">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                            Transaction Detail Of Madhav Prasad</h1>
                        <div class="row" style="margin-left: 0px;">
                            <div class="col-md-12">
                                <div class="row mb-5 mt-5">
                                    <!--begin::Col-->
                                    <div class="col-md-2">
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="profile symbol me-3">
                                                <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                    alt="">
                                            </div>
                                            <!--end::Symbol-->
                                        </div>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-2 boxx">
                                        <div class="profile d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <i class="bi bi-gear-wide-connected me-3"></i>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="">
                                                <label class="fs-5 text-dark fw-bold">Basic Plan</label>
                                                <div class="fs-7 text-gray-600 fw-bold">Active Plan</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-2">
                                        <div class="d-flex align-items-center">
                                            <!--begin::Title-->
                                            <div class="boxx">
                                                <label class="fs-3 text-bg fw-bold">$35.00</label>
                                                <div class="fs-7 text-gray-600 fw-bold">Monthly</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->


                                </div>
                            </div>

                            <div class="row mb-5 mt-5">
                                <div class="col-md-6 border_gray">
                                    <div class="flex-grow-1">
                                        <div class="d-flex flex-stack flex-wrap">
                                            <p class="text-dark fs-5 fw-bold">Customer Name:</p>
                                            <p class="text-gray-600 fs-5 fw-bold"> Madhav Prasad</p>
                                        </div>
                                        <div class="d-flex flex-stack flex-wrap">
                                            <p class="text-dark fs-5 fw-bold">Email Address:</p>
                                            <p class="text-gray-600 fs-5 fw-bold"> madhavprasad@gmail.com</p>
                                        </div>
                                        <div class="d-flex flex-stack flex-wrap">
                                            <p class="text-dark fs-5 fw-bold">Last Payment Day:</p>
                                            <p class="text-gray-600 fs-5 fw-bold"> Monday</p>
                                        </div>
                                        <div class="d-flex flex-stack flex-wrap">
                                            <p class="text-dark fs-5 fw-bold">Last Payment Date:</p>
                                            <p class="text-gray-600 fs-5 fw-bold"> 12/06/2022</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="border_gray flex-grow-1">
                                                <div class="d-flex flex-stack flex-wrap">
                                                    <p class="text-dark fs-5 fw-bold">Transaction ID:</p>
                                                    <p class="text-gray-600 fs-5 fw-bold"> 4643210568</p>
                                                </div>
                                                <div class="d-flex flex-stack flex-wrap">
                                                    <p class="text-dark fs-5 fw-bold">Plan Expiration Date & Time:</p>
                                                    <p class="text-gray-600 fs-5 fw-bold"> 12/07/2022, 11:59 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="border_gray flex-grow-1">
                                                <div class="d-flex flex-stack flex-wrap">
                                                    <p class="text-dark fs-5 fw-bold">Payment Method</p>
                                                </div>
                                                <div class="d-flex flex-stack flex-wrap">
                                                    <p class="text-dark fs-5 fw-bold">Card:</p>
                                                    <p class="text-gray-600 fs-5 fw-bold">
                                                        <img class="payment_crad_img"
                                                            src="http://127.0.0.1:8000/assets/media/svg/card-logos/mastercard-dark.svg"
                                                            alt="Card Image">
                                                        XXXX XXXX 7678
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                            Transaction History</h1>
                        <div class="row">
                            <div class="col-md-12">
                                {{-- Table Starts --}}
                                <div class="table-responsive mt-5">
                                    <table class="table table-hover table-rounded border gy-5 gs-7" id="dataTable">
                                        <thead>
                                            <tr class="bg-primary text-white">
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="headCheckbox"
                                                            onchange="toggleAllCheckboxes()">
                                                        <label class="form-check-label" for="headCheckbox">
                                                        </label>
                                                    </div>
                                                </th>
                                                <th>S.No.</th>
                                                <th>Transaction ID</th>
                                                <th>Payment Method</th>
                                                <th>Amount</th>
                                                <th>Payment Date</th>
                                                <th>Invoive</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($x = 1; $x <= 5; $x++) { ?>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input body-checkbox" type="checkbox"
                                                            value="" id="checkbox1">
                                                        <label class="form-check-label" for="checkbox1">
                                                        </label>
                                                    </div>
                                                </td>
                                                <th><?php echo $x; ?></th>
                                                <td>4643210568</td>
                                                <td>
                                                    <p class="text-gray-600 fs-5 fw-bold">
                                                        <img class="payment_crad_img"
                                                            src="http://127.0.0.1:8000/assets/media/svg/card-logos/mastercard-dark.svg"
                                                            alt="Card Image">
                                                        XXXX XXXX 7678
                                                    </p>
                                                </td>
                                                <td>$80</td>
                                                <td>May 04, 2023</td>
                                                <td>
                                                    <a href="{{ route('superadmin.transaction_and_invoice.view_invoice') }}"
                                                        class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="javacript:void(0);"
                                                        class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        <i class="fa fa-download"></i>
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
                    </div>
                </div>
            </div>

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