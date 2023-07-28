<x-default-layout>
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">Coupons</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="{{ route('superadmin.coupon.add') }}" class="btn btn-primary inverse">+ Add New Coupon</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 mb-3">
                    <figure class="info-card card">
                        <div class="card-body p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M11.64 19.9091L15 17.3318L18.3 19.9091L17.04 15.7364L20.4 13.0364H16.32L15 8.86364L13.68 13.0364H9.6L12.9 15.7364L11.64 19.9091ZM5.4 24C4.74 24 4.175 23.7597 3.705 23.279C3.235 22.7983 3 22.2205 3 21.5455V18.2216C3 17.9966 3.07 17.8023 3.21 17.6386C3.35 17.475 3.53 17.3727 3.75 17.3318C4.23 17.1682 4.625 16.8716 4.935 16.442C5.245 16.0125 5.4 15.5318 5.4 15C5.4 14.4682 5.245 13.9875 4.935 13.558C4.625 13.1284 4.23 12.8318 3.75 12.6682C3.53 12.6273 3.35 12.525 3.21 12.3614C3.07 12.1977 3 12.0034 3 11.7784V8.45455C3 7.77955 3.235 7.2017 3.705 6.72102C4.175 6.24034 4.74 6 5.4 6H24.6C25.26 6 25.825 6.24034 26.295 6.72102C26.765 7.2017 27 7.77955 27 8.45455V11.7784C27 12.0034 26.93 12.1977 26.79 12.3614C26.65 12.525 26.47 12.6273 26.25 12.6682C25.77 12.8318 25.375 13.1284 25.065 13.558C24.755 13.9875 24.6 14.4682 24.6 15C24.6 15.5318 24.755 16.0125 25.065 16.442C25.375 16.8716 25.77 17.1682 26.25 17.3318C26.47 17.3727 26.65 17.475 26.79 17.6386C26.93 17.8023 27 17.9966 27 18.2216V21.5455C27 22.2205 26.765 22.7983 26.295 23.279C25.825 23.7597 25.26 24 24.6 24H5.4Z" fill="#244B8A"/>
                                </svg>
                                <label>Total <br>
                                    Coupons</label>
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
                                    Coupons</label>
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
                                    Coupons</label>
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

    <div class="card card-flush shadow-sm mt-5">
        <div class="card-body py-5">
            {{-- SearchBar, Filter, Export Starts --}}
            <div class="flex-grow-1">
                <div class="d-flex flex-stack flex-wrap">
                    <div class="col-md-4">
                        {{-- Search Keyword Start --}}
                        {{-- <input type="text" class="form-control" placeholder="Search by name..."> --}}
                        {{-- Search Keyword End --}}
                    </div>
                    <div class="">
                        {{-- Filter button Start --}}
                        <button id="filterButton" type="button" class="btn btn-theame me-3 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>
                            Filter
                        </button>
                        <div id="filterDropdown" class="dropdown-menu filter_dropdown">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="dropdown-item">
                                        <label for="columns">Columns:</label>
                                        <select id="columns" class="form-control">
                                            <option value="">Select Filter</option>
                                            <option value="Language">Language </option>
                                            <option value="Total Keywords">Total Keywords</option>
                                            <option value="Translated Keywords">Translated Keywords</option>
                                            <option value="Status">Status</option>

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
                        <button id="aman" type="button" class="btn btn-theame" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
                            Export Report
                        </button>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 fw-semibold w-200px p-3" data-kt-menu="true">
                            <div class="menu-item"><a href="#" class="menu-link" data-kt-export="csv">Export as CSV</a></div>
                            <div class="menu-item"><a href="#" class="menu-link" data-kt-export="pdf">Export as PDF</a></div>
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
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="headCheckbox" onchange="toggleAllCheckboxes()">
                                    <label class="form-check-label" for="headCheckbox">
                                    </label>
                                </div>
                            </th>
                            <th>S.No.</th>
                            <th>Coupon Code</th>
                            <th>Discount</th>
                            <th>Description</th>
                            <th>Creation Date</th>
                            <th>Expires At</th>
                            <th>Used Count</th>
                            <th>Enabled</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($x = 1; $x <= 10; $x++) { ?>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input body-checkbox" type="checkbox"
                                            value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                        </label>
                                    </div>
                                </td>
                                <td><?php echo $x; ?></td>
                                <td>DSKCLSDK366</td>
                                <td>67%</td>
                                <td>The smell of freshly brewed co...</td>
                                <td>01/11/2083</td>
                                <td>05/03/2095</td>
                                <td>65</td>
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
                                    <a href="{{ route('superadmin.coupon.edit') }}"
                                        class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                        <i class="fa fa-trash"></i>
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
                <p>All the Data Will be lost. do you want to delete this staff ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-theame">Delete</button>
            </div>
        </div>
    </div>
</div>
{{-- Delete Modal Ends --}}

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
<script>
    "use strict";

    // Class definition
    var KTDatatablesExample = function() {
        // Shared variables
        var table;
        var datatable;

        // Private functions
        var initDatatable = function() {
            // Set date data order
            const tableRows = table.querySelectorAll('tbody tr');

            tableRows.forEach(row => {
                const dateRow = row.querySelectorAll('td');
                const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT")
                    .format(); // select date from 4th column in table
                dateRow[3].setAttribute('data-order', realDate);
            });

            // Init datatable --- more info on datatables: https://datatables.net/manual/
            datatable = $(table).DataTable({
                "info": false,
                'order': [],
                'pageLength': 10,
            });
        }

        // Hook export buttons
        var exportButtons = () => {
            const documentTitle = 'Customer Orders Report';
            var buttons = new $.fn.dataTable.Buttons(table, {
                buttons: [{
                        extend: 'copyHtml5',
                        title: documentTitle
                    },
                    {
                        extend: 'excelHtml5',
                        title: documentTitle
                    },
                    {
                        extend: 'csvHtml5',
                        title: documentTitle
                    },
                    {
                        extend: 'pdfHtml5',
                        title: documentTitle
                    }
                ]
            }).container().appendTo($('#kt_datatable_example_buttons'));

            // Hook dropdown menu click event to datatable export buttons
            const exportButtons = document.querySelectorAll(
                '#kt_datatable_example_export_menu [data-kt-export]');
            exportButtons.forEach(exportButton => {
                exportButton.addEventListener('click', e => {
                    e.preventDefault();

                    // Get clicked export value
                    const exportValue = e.target.getAttribute('data-kt-export');
                    const target = document.querySelector('.dt-buttons .buttons-' +
                        exportValue);

                    // Trigger click event on hidden datatable export buttons
                    target.click();
                });
            });
        }

        // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
        var handleSearchDatatable = () => {
            const filterSearch = document.querySelector('[data-kt-filter="search"]');
            filterSearch.addEventListener('keyup', function(e) {
                datatable.search(e.target.value).draw();
            });
        }

        // Public methods
        return {
            init: function() {
                table = document.querySelector('#kt_datatable_example');

                if (!table) {
                    return;
                }

                initDatatable();
                exportButtons();
                handleSearchDatatable();
            }
        };
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function() {
        KTDatatablesExample.init();
    });
</script>
