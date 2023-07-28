<x-default-layout>
    {{-- header --}}
    @include('/pages/super_admin/notification/header')
    {{-- header --}}

    {{-- pagedata --}}
    <div class="row">
        <div class="col-md-8">
            <div
                class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h5
                    class="d-flex text-dark fs-3 flex-column justify-content-center my-0">
                    Subscription Module</h5>
                <ul
                    class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <span class="text-dark">Conditions: </span>
                        <span class="nt_title">
                            <label class="text-hover-primary mb-1 fs-5 under_line">Send a
                                notification when a user's subscription is about to
                                expire, providing options to renew or upgrade the
                                subscription.</label>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div id="exTab1" class="container">
                <ul class="nav nav-pills">
                    <li class="hhh active">
                        <a href="#1a" data-toggle="tab">SMS</a>
                    </li>
                    <li class="hhh">
                        <a href="#2a" data-toggle="tab">Email</a>
                    </li>
                    <li class="hhh">
                        <a href="#3a" data-toggle="tab">Push</a>
                    </li>
                    <li class="hhh">
                        <a href="#4a" data-toggle="tab">In-app</a>
                    </li>
                </ul>

                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="1a">
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <form class="form fv-plugins-bootstrap5 fv-plugins-framework">
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-stack">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">Notification Status</span> </label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input body-toggle" type="checkbox"
                                                role="switch" id="flexSwitchCheckDefault" value="1" checked>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="fs-7 fw-semibold mb-2">SMS Message:</label>
                                        <textarea class="form-control form-control-lg form-control-solid" name="name" id="sms_message"
                                            placeholder="" rows="5"></textarea>
                                        <span class="text-muted">Last modified on 12/06/2002 by Admin-IND</span>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-theame me-3">Save Changes</button>
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="2a">
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <form class="form fv-plugins-bootstrap5 fv-plugins-framework">
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-stack">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">Notification Status</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input body-toggle" type="checkbox"
                                                role="switch" id="flexSwitchCheckDefault" value="1" checked>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="fs-5 fw-semibold mb-2">Email Message:</label>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="fs-7 fw-semibold mb-2">Title:</label>
                                        <input class="form-control form-control-lg form-control-solid" name="name" id=""
                                            placeholder="">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="fs-7 fw-semibold mb-2">Message:</label>
                                        <textarea class="form-control form-control-lg form-control-solid" name="name" id="email_message"
                                            placeholder="" rows="5"></textarea>
                                        <span class="text-muted">Last modified on 12/06/2002 by Admin-IND</span>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-theame me-3">Save Changes</button>
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="3a">
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <form class="form fv-plugins-bootstrap5 fv-plugins-framework">
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-stack">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">Notification Status</span> </label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input body-toggle" type="checkbox"
                                                role="switch" id="flexSwitchCheckDefault" value="1" checked>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="fs-7 fw-semibold mb-2">Push Message:</label>
                                        <textarea class="form-control form-control-lg form-control-solid" name="name" id="push_message"
                                            placeholder="" rows="5"></textarea>
                                        <span class="text-muted">Last modified on 12/06/2002 by Admin-IND</span>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-theame me-3">Save Changes</button>
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="4a">
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <form class="form fv-plugins-bootstrap5 fv-plugins-framework">
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-stack">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">Notification Status</span> </label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input body-toggle" type="checkbox"
                                                role="switch" id="flexSwitchCheckDefault" value="1" checked>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="fs-7 fw-semibold mb-2">In-App Message:</label>
                                        <textarea class="form-control form-control-lg form-control-solid" name="name" id="in_app_message"
                                            placeholder="" rows="5"></textarea>
                                        <span class="text-muted">Last modified on 12/06/2002 by Admin-IND</span>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-theame me-3">Save Changes</button>
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- pagedata --}}


    {{-- footer --}}
    @include('/pages/super_admin/notification/footer')
    {{-- footer --}}

</x-default-layout>
