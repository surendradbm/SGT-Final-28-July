<x-default-layout>
    {{-- header --}}
    @include('/pages/super_admin/notification/header')
    {{-- header --}}
    {{-- padedata --}}
    <div class="" id="padedata">
        <div class="table-responsive mt-5">
            <table class="table table-hover table-rounded border gy-5 gs-5" id="dataTable">
                <thead>
                    <tr class="fw-semibold fs-6 border-bottom-2 border-gray-200">
                        <th>S.No.</th>
                        <th>Description</th>
                        <th>Email</th>
                        <th>Push</th>
                        <th>SMS</th>
                        <th style="width: 8%;">In-App</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($x = 1; $x <= 10; $x++) { ?>
                    <tr>
                        <td style="background: white;"><?php echo $x; ?></td>
                        <td>
                            <div class="d-flex justify-content-start flex-column">
                                <a href="javascript:void(0);"
                                    class="text-hover-primary mb-1 fs-6 under_line" >Send a
                                    notification when a user's subscription is about to
                                    expire, providing options to renew or upgrade the
                                    subscription.</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">Last
                                    modified on 12/06/2002 by Admin-IND</span>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="" id="checkbox12">
                                <label class="form-check-label" for="checkbox12">
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="" id="checkbox13">
                                <label class="form-check-label" for="checkbox13">
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="" id="checkbox14">
                                <label class="form-check-label" for="checkbox14">
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    value="" id="checkbox15">
                                <label class="form-check-label" for="checkbox15">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    {{-- padedata --}}

    {{-- footer --}}
    @include('/pages/super_admin/notification/footer')
    {{-- footer --}}

</x-default-layout>


