<x-default-layout>
    <form action="{{ route('dashboard.company_details') }}" method="get">
        {{ auth()->user()->first_name }}
        @if (empty($user_subscribed))
            {{-- <div class="modal fade" tabindex="-1" id="kt_modal_1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Modal title</h3>

                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Close-->
                        </div>

                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                    <div class="modal fade" tabindex="-1" id="kt_modal_1" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body border-0 h-md-100" data-bs-theme="light"
                                    style="display: block;background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
                                    <div class="row align-items-center h-100 mb-10">
                                        <div class="col-12 text-end">
                                            <button class="btn btn-icon btn-sm btn-active-secondary ms-2"
                                                data-bs-dismiss="modal" aria-label="Close">
                                                <i class="bi bi-x-lg text-white"></i>
                                            </button>
                                        </div>
                                        <div class="col-7 ps-xl-13">
                                            <div class="text-white mb-6 pt-6">
                                                <span class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 opacity-75">Get
                                                    best
                                                    offer</span>

                                                <span class="fs-2qx fw-bold">Upgrade Your Plan</span>
                                            </div>
                                            <span class="fw-semibold text-white fs-6 mb-8 d-block opacity-75">
                                                Flat cartoony and illustrations with vivid unblended purple hair lady
                                            </span>
                                            <div
                                                class="d-flex align-items-center flex-wrap d-grid gap-2 mb-10 mb-xl-20">
                                                <div class="d-flex align-items-center me-5 me-xl-13">
                                                    <div class="symbol symbol-30px symbol-circle me-3">
                                                        <span class="symbol-label" style="background: #35C7FF">
                                                            <i class="ki-duotone ki-abstract-41 fs-5 text-white"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i> </span>
                                                    </div>
                                                    <div class="text-white">
                                                        <span
                                                            class="fw-semibold d-block fs-8 opacity-75">Projects</span>
                                                        <span class="fw-bold fs-7">Up to 500</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-30px symbol-circle me-3">
                                                        <span class="symbol-label" style="background: #35C7FF">
                                                            <i class="ki-duotone ki-abstract-26 fs-5 text-white"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i> </span>
                                                    </div>
                                                    <div class="text-white">
                                                        <span class="fw-semibold opacity-75 d-block fs-8">Tasks</span>
                                                        <span class="fw-bold fs-7">Unlimited</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-sm-row d-grid gap-2">
                                                <a href="#" class="btn btn-success flex-shrink-0 me-lg-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_upgrade_plan">Upgrade
                                                    Plan</a>
                                                {{-- <a href="#" class="btn btn-primary flex-shrink-0"
                                                    style="background: rgba(255, 255, 255, 0.2)" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_create_app">Read Guides</a> --}}
                                            </div>
                                        </div>
                                        <div class="col-5 pt-10">
                                            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px"
                                                style="background-image:url('{{ asset('assets/media/5.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Col-->

            </div>
            <!--end::Row-->
        @endif
    </form>
</x-default-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the modal element by its ID
        const modal = document.getElementById('kt_modal_1');

        // Create a new bootstrap Modal instance
        const modalInstance = new bootstrap.Modal(modal);

        // Show the modal
        modalInstance.show();
    });
</script>
