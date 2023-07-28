<x-default-layout>
    {{-- Remove Arrrow from inout fields --}}
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
    </style>
    {{-- Remove Arrrow from inout fields --}}

    {{-- Top Section Start --}}
    <div class="card shadow-sm mt-5">
        <div class="card-body">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                    General Settings
                </h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="#" class="text-muted">Settings</a>
                    </li>
                    <li class="breadcrumb-item text-muted"> > </li>
                    <li class="breadcrumb-item text-bg">General Settings</li>
                    <li class="breadcrumb-item text-muted"> > </li>
                    <li class="breadcrumb-item text-bg text-hover-primary">Notification</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- Top Section End --}}

    {{-- Nav Tab Start --}}
    <div class="card shadow-sm mt-5">
        <div class="card-body py-5">
            <div class="d-grid">
                <ul class="nav nav-tabs nav-pills flex-nowrap text-nowrap">
                    <li class="nav-item">
                        <a href="{{ route('superadmin.setting.general.company_details') }}"
                            class="nav-link rounded-bottom-0" id="div1"><i class="bi bi-building-fill xyz fs-2">
                            </i>Company Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('superadmin.setting.general.notification') }}"
                            class="nav-link rounded-bottom-0 active" id="div2"><i class="bi bi-bell-fill xyz fs-2">
                            </i> Notification</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('superadmin.setting.general.payment') }}" class="nav-link rounded-bottom-0"
                            id="div1"><i class="bi bi-credit-card-fill xyz fs-2"> </i>Payment</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('superadmin.setting.general.support') }}" class="nav-link rounded-bottom-0"
                            id="div1"><i class="bi bi-hand-index-fill xyz fs-2"> </i>Support</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Nav Tab End --}}

    {{-- SMS Start --}}
    <div class="card shadow-sm mt-5">
        <div class="card-body py-5">
            <h3><u>SMS Setting</u></h3>
            <span id="title_help" class="form-text text-muted">Twilio SMS integration is one way messaging, means that
                your customer won’t not be able to reply to the SMS. Phone numbers must be in format E.164. Click here
                to read more about how phone number should be formatted.</span>
            <br>
            <div class="row">
                <div class="col-md-10">

                    <form>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_property">Account SSID
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        placeholder="Enter Account SSID " required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mt-4 align-items-center mb-2">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_property">Auth Tokens
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        placeholder="Enter Auth Tokens" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" id="maximum_properties"
                                        for="maximum_property">Twilio Phone Number
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        placeholder="Enter Twilio Phone Number" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_property">Status
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8 mt-">
                                <div class="form-group">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input body-toggle" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" onchange="toggleSwitch()">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Inactive</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 mt-5">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn submit_btn">Save Change</button>
                                        <a href="#" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10 mt-6">
                                    <div class="form-group">
                                        <label class="required form-label" id="maximum_properties"
                                            for="maximum_property">Send Test SMS
                                            :</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-solid"
                                            name="maximum_property" id="maximum_properties"
                                            aria-describedby="emailHelp" placeholder="Enter Twilio Phone Number"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- SMS End --}}

    {{-- Email Start --}}
    <div class="card shadow-sm mt-5">
        <div class="card-body py-5">
            <h3><u>Email Settings</u></h3>
            <br>
            <div class="row">
                <div class="col-md-10">
                    <form>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_property">Company Email
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        placeholder="Enter Company email id " required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_property">Company Email
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <select class="form-control form-control-solid" id="messenger" name="messenger"
                                        aria-label="Floating label select example" required>
                                        <option value="">Choose</option>
                                        <option value="">IMAP</option>
                                        <option value="">POP3</option>
                                        <option value="">SMTP </option>
                                        <option value="">HTTP</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" id="maximum_properties"
                                        for="maximum_property">SMTP Host
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        placeholder="Enter smtp.gmail.com" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" id="maximum_properties"
                                        for="maximum_property">SMTP User
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        placeholder="Enter smtp.gmail.com" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" id="maximum_properties"
                                        for="maximum_property">SMTP Password
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" id="maximum_properties"
                                        for="maximum_property">SMTP Port
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" id="maximum_properties"
                                        for="maximum_property">Email Encryption
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-10 mt-5">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn submit_btn">Save Change</button>
                                        <a href="#" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="required form-label" id="maximum_properties"
                                            for="maximum_property">Sent Email SMS:
                                            :</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-solid"
                                            name="maximum_property" id="maximum_properties"
                                            aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn submit_btn">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Email End --}}

    {{-- Push Notification Settings Start --}}
    <div class="card shadow-sm mt-5">
        <div class="card-body py-5">
            <h3><u>Push Notification Settings</u></h3>
            <br>
            <div class="row">
                <div class="col-md-10">
                    <form>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_property">Firbase Cloud Messaging
                                        Key
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        required>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                          <div class="col-md-4 mt-4">
                              <div class="form-group">
                                  <label class="required form-label" for="maximum_property">API Key
                                      :</label>
                              </div>
                          </div>
                          <div class="col-md-8">
                              <div class="form-group">
                                  <select class="form-control form-control-solid" id="messenger" name="messenger"
                                      aria-label="Floating label select example" required>
                                      <option value="">Choose</option>
                                      <option value="">IMAP</option>
                                      <option value="">POP3</option>
                                      <option value="">SMTP </option>
                                      <option value="">HTTP</option>
                                  </select>
                              </div>
                          </div>
                      </div> --}}
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" id="maximum_properties"
                                        for="maximum_property">API Key
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" id="maximum_properties"
                                        for="maximum_property">AUTH domain
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        required>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                          <div class="col-md-4 mt-4">
                              <div class="form-group">
                                  <label class="required form-label" id="maximum_properties"
                                      for="maximum_property">SMTP Password
                                      :</label>
                              </div>
                          </div>
                          <div class="col-md-8">
                              <div class="form-group">
                                  <input type="password" class="form-control form-control-solid"
                                      name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                      required>
                              </div>
                          </div>
                      </div> --}}
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" id="maximum_properties"
                                        for="maximum_property">Database URL
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" id="maximum_properties"
                                        for="maximum_property">Project ID
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" id="maximum_properties"
                                        for="maximum_property">Storage Bucket ID
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" id="maximum_properties"
                                        for="maximum_property">Messaging Sender ID
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label class="required form-label" id="maximum_properties"
                                        for="maximum_property">Application ID
                                        :</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4 mt-4">
                               <div class="form-group">
                                   <label class="required form-label" id="maximum_properties"
                                       for="maximum_property">Measurement ID
                                       :</label>
                               </div>
                           </div>
                           <div class="col-md-8">
                               <div class="form-group">
                                   <input type="text" class="form-control form-control-solid"
                                       name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                       required>
                               </div>
                           </div>
                       </div>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-10 mt-5">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn submit_btn">Save Change</button>
                                        <a href="#" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mt-4">
                                    <div class="form-group">
                                        <label class="required form-label" id="maximum_properties"
                                            for="maximum_property">Sent Email SMS:
                                            :</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-solid"
                                            name="maximum_property" id="maximum_properties"
                                            aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn submit_btn">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Push Notification Settings End --}}

    {{-- SMS Start --}}

    <div class="card shadow-sm mt-5">
        <div class="card-body py-5">

        </div>
    </div>

    {{-- SMS End --}}



</x-default-layout>
