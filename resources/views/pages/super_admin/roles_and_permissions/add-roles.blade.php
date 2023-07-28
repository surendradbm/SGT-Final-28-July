<x-default-layout>
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header mb-5">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">Add Roles & Permissions</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="{{route('superadmin.roles_and_permissions.manage')}}" class="btn btn-primary">Back to Roles & Permissions</a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-end">
                    {{-- Breadcrumbs (Start) --}}
                    <ul class="breadcrumb">
                        <li><a href="{{route("superadmin.roles_and_permissions.manage")}}">Manage Roles & Permissions</a></li>
                        <li><i class="fas fa-chevron-right"></i></li>
                        <li class="active"><a href="{{route("superadmin.roles_and_permissions.add")}}">Add Roles & Permissions</a></li>
                    </ul>
                    {{-- Breadcrumbs (End) --}}
                </div>
            </div>
        </div>
    </div>
    {{-- First Section Ends --}}

    <div class="card card-flush shadow-sm mt-5">
        <div class="card-body">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-4 col-12">
                    <h4 class="text-dark fw-bold">Add Roles & Permissions</h4>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-solid" name="title"
                            placeholder="Enter Role Name" required>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    {{-- Filter button Start --}}
                    <div class="row">
                        <div class="col-md-12 text-end">
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
                    {{-- Filter button End --}}
                </div>
            </div>

            <div class="row">
                <table class="table table-striped border rounded gy-5 gs-7" id="dataTable" style="width:100%">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th>S.No.</th>
                            <th>Permissions</th>
                            <th>Read</th>
                            <th>Edit</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($x = 1; $x <= 10; $x++) { ?>
                            <tr>
                                <td style="background: white;"><?php echo $x; ?></td>
                                <td>Roles and Permission</td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input body-checkbox" type="checkbox"
                                            value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input body-checkbox" type="checkbox"
                                            value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input body-checkbox" type="checkbox"
                                            value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input body-checkbox" type="checkbox"
                                            value="" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                        </label>
                                    </div>
                                </td>


                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="card card-flush shadow-sm mt-5">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 text-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </div>
        </div>
    </div>


</x-default-layout>

