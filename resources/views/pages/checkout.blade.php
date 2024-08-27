@extends('layouts.template')

@section('content')
    <div class="mb4d25">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    {{-- <div class="membership_chk_bg">
                        <div class="checkout_title">
                            <h4>Billing Details</h4>
                            <img src="{{ asset('') }}assets/images/line.svg" alt="">
                        </div>
                    </div> --}}
                    <div class="membership_chk_bg">

                        <div class="checkout_title">
                            <h4>Billing Details {{ $produk->nama_produk }}</h4>
                            <img src="{{ asset('') }}assets/images/line.svg" alt="">
                        </div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="address1">
                                    <div class="panel-title">
                                        <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion"
                                            href="#collapseaddress1" aria-expanded="false" aria-controls="collapseaddress1">
                                            Edit Address
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseaddress1" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="address1">
                                    <div class="panel-body basic_form">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>First Name*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text" name="name"
                                                                value="Joginder" id="id_name" required=""
                                                                maxlength="64" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Last Name*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text" name="surname"
                                                                value="Singh" id="id_surname" required="" maxlength="64"
                                                                placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Academy Name*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="academyname" value="Gambolthemes" id="id_academy"
                                                                required="" maxlength="64" placeholder="Academy Name">
                                                        </div>
                                                        <div class="help-block">If you want your invoices addressed to a
                                                            academy. Leave blank to use your full name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mt-30 lbel25">
                                                        <label>Country*</label>
                                                    </div>
                                                    {{-- <select class="selectpicker" title="Select Country" data-size="7">
                                                        <option value="1">Afghanistan</option>
                                                        <option value="2">Albania</option>
                                                        <option value="3">Algeria</option>
                                                        <option value="4">American Samoa</option>
                                                        <option value="5">Andorra</option>
                                                        <option value="6">Angola</option>
                                                        <option value="7">Anguilla</option>
                                                        <option value="8">Antarctica</option>
                                                        <option value="9">Antigua and Barbuda</option>
                                                        <option value="10">Argentina</option>
                                                        <option value="11">Armenia</option>
                                                        <option value="12">Aruba</option>
                                                        <option value="13">Australia</option>
                                                        <option value="14">Austria</option>
                                                        <option value="15">Azerbaijan</option>
                                                        <option value="16">Bahamas</option>
                                                        <option value="17">Bahrain</option>
                                                        <option value="18">Bangladesh</option>
                                                        <option value="19">Barbados</option>
                                                        <option value="20">Belarus</option>
                                                        <option value="21">Belgium</option>
                                                        <option value="22">Belize</option>
                                                        <option value="23">Benin</option>
                                                        <option value="24">Bermuda</option>
                                                        <option value="25">Bhutan</option>
                                                        <option value="26">Bolivia</option>
                                                        <option value="27">Bosnia and Herzegovina</option>
                                                        <option value="28">Botswana</option>
                                                        <option value="29">Bouvet Island</option>
                                                        <option value="30">Brazil</option>
                                                        <option value="31">British Indian Ocean Territory</option>
                                                        <option value="32">Brunei Darussalam</option>
                                                        <option value="33">Bulgaria</option>
                                                        <option value="34">Burkina Faso</option>
                                                        <option value="35">Burundi</option>
                                                        <option value="36">Cambodia</option>
                                                        <option value="37">Cameroon</option>
                                                        <option value="38">Canada</option>
                                                        <option value="39">Cape Verde</option>
                                                        <option value="40">Cayman Islands</option>
                                                        <option value="41">Central African Republic</option>
                                                        <option value="42">Chad</option>
                                                        <option value="43">Chile</option>
                                                        <option value="44">China</option>
                                                        <option value="45">Christmas Island</option>
                                                        <option value="46">Cocos (Keeling) Islands</option>
                                                        <option value="47">Colombia</option>
                                                        <option value="48">Comoros</option>
                                                        <option value="49">Congo</option>
                                                        <option value="50">Cook Islands</option>
                                                        <option value="51">Costa Rica</option>
                                                        <option value="52">Croatia (Hrvatska)</option>
                                                        <option value="53">Cuba</option>
                                                        <option value="54">Cyprus</option>
                                                        <option value="55">Czech Republic</option>
                                                        <option value="56">Denmark</option>
                                                        <option value="57">Djibouti</option>
                                                        <option value="58">Dominica</option>
                                                        <option value="59">Dominican Republic</option>
                                                        <option value="60">East Timor</option>
                                                        <option value="61">Ecuador</option>
                                                        <option value="62">Egypt</option>
                                                        <option value="63">El Salvador</option>
                                                        <option value="64">Equatorial Guinea</option>
                                                        <option value="65">Eritrea</option>
                                                        <option value="66">Estonia</option>
                                                        <option value="67">Ethiopia</option>
                                                        <option value="68">Falkland Islands (Malvinas)</option>
                                                        <option value="69">Faroe Islands</option>
                                                        <option value="70">Fiji</option>
                                                        <option value="71">Finland</option>
                                                        <option value="72">France</option>
                                                        <option value="73">France, Metropolitan</option>
                                                        <option value="74">French Guiana</option>
                                                        <option value="75">French Polynesia</option>
                                                        <option value="76">French Southern Territories</option>
                                                        <option value="77">Gabon</option>
                                                        <option value="78">Gambia</option>
                                                        <option value="79">Georgia</option>
                                                        <option value="80">Germany</option>
                                                        <option value="81">Ghana</option>
                                                        <option value="82">Gibraltar</option>
                                                        <option value="83">Guernsey</option>
                                                        <option value="84">Greece</option>
                                                        <option value="85">Greenland</option>
                                                        <option value="86">Grenada</option>
                                                        <option value="87">Guadeloupe</option>
                                                        <option value="88">Guam</option>
                                                        <option value="89">Guatemala</option>
                                                        <option value="90">Guinea</option>
                                                        <option value="91">Guinea-Bissau</option>
                                                        <option value="92">Guyana</option>
                                                        <option value="93">Haiti</option>
                                                        <option value="94">Heard and Mc Donald Islands</option>
                                                        <option value="95">Honduras</option>
                                                        <option value="96">Hong Kong</option>
                                                        <option value="97">Hungary</option>
                                                        <option value="98">Iceland</option>
                                                        <option selected="" value="99">India</option>
                                                        <option value="100">Isle of Man</option>
                                                        <option value="101">Indonesia</option>
                                                        <option value="102">Iran (Islamic Republic of)</option>
                                                        <option value="103">Iraq</option>
                                                        <option value="104">Ireland</option>
                                                        <option value="105">Israel</option>
                                                        <option value="106">Italy</option>
                                                        <option value="107">Ivory Coast</option>
                                                        <option value="108">Jersey</option>
                                                        <option value="109">Jamaica</option>
                                                        <option value="110">Japan</option>
                                                        <option value="111">Jordan</option>
                                                        <option value="112">Kazakhstan</option>
                                                        <option value="113">Kenya</option>
                                                        <option value="114">Kiribati</option>
                                                        <option value="115">Korea, Democratic People's Republic of
                                                        </option>
                                                        <option value="116">Korea, Republic of</option>
                                                        <option value="117">Kosovo</option>
                                                        <option value="118">Kuwait</option>
                                                        <option value="119">Kyrgyzstan</option>
                                                        <option value="120">Lao People's Democratic Republic
                                                        </option>
                                                        <option value="121">Latvia</option>
                                                        <option value="122">Lebanon</option>
                                                        <option value="123">Lesotho</option>
                                                        <option value="124">Liberia</option>
                                                        <option value="125">Libyan Arab Jamahiriya</option>
                                                        <option value="126">Liechtenstein</option>
                                                        <option value="127">Lithuania</option>
                                                        <option value="128">Luxembourg</option>
                                                        <option value="129">Macau</option>
                                                        <option value="130">Macedonia</option>
                                                        <option value="131">Madagascar</option>
                                                        <option value="132">Malawi</option>
                                                        <option value="133">Malaysia</option>
                                                        <option value="134">Maldives</option>
                                                        <option value="135">Mali</option>
                                                        <option value="136">Malta</option>
                                                        <option value="137">Marshall Islands</option>
                                                        <option value="138">Martinique</option>
                                                        <option value="139">Mauritania</option>
                                                        <option value="140">Mauritius</option>
                                                        <option value="141">Mayotte</option>
                                                        <option value="142">Mexico</option>
                                                        <option value="143">Micronesia, Federated States of</option>
                                                        <option value="144">Moldova, Republic of</option>
                                                        <option value="145">Monaco</option>
                                                        <option value="146">Mongolia</option>
                                                        <option value="147">Montenegro</option>
                                                        <option value="148">Montserrat</option>
                                                        <option value="149">Morocco</option>
                                                        <option value="150">Mozambique</option>
                                                        <option value="151">Myanmar</option>
                                                        <option value="152">Namibia</option>
                                                        <option value="153">Nauru</option>
                                                        <option value="154">Nepal</option>
                                                        <option value="155">Netherlands</option>
                                                        <option value="156">Netherlands Antilles</option>
                                                        <option value="157">New Caledonia</option>
                                                        <option value="158">New Zealand</option>
                                                        <option value="159">Nicaragua</option>
                                                        <option value="160">Niger</option>
                                                        <option value="161">Nigeria</option>
                                                        <option value="162">Niue</option>
                                                        <option value="163">Norfolk Island</option>
                                                        <option value="164">Northern Mariana Islands</option>
                                                        <option value="165">Norway</option>
                                                        <option value="166">Oman</option>
                                                        <option value="167">Pakistan</option>
                                                        <option value="168">Palau</option>
                                                        <option value="169">Palestine</option>
                                                        <option value="170">Panama</option>
                                                        <option value="171">Papua New Guinea</option>
                                                        <option value="172">Paraguay</option>
                                                        <option value="173">Peru</option>
                                                        <option value="174">Philippines</option>
                                                        <option value="175">Pitcairn</option>
                                                        <option value="176">Poland</option>
                                                        <option value="177">Portugal</option>
                                                        <option value="178">Puerto Rico</option>
                                                        <option value="179">Qatar</option>
                                                        <option value="180">Reunion</option>
                                                        <option value="181">Romania</option>
                                                        <option value="182">Russian Federation</option>
                                                        <option value="183">Rwanda</option>
                                                        <option value="184">Saint Kitts and Nevis</option>
                                                        <option value="185">Saint Lucia</option>
                                                        <option value="186">Saint Vincent and the Grenadines
                                                        </option>
                                                        <option value="187">Samoa</option>
                                                        <option value="188">San Marino</option>
                                                        <option value="189">Sao Tome and Principe</option>
                                                        <option value="190">Saudi Arabia</option>
                                                        <option value="191">Senegal</option>
                                                        <option value="192">Serbia</option>
                                                        <option value="193">Seychelles</option>
                                                        <option value="194">Sierra Leone</option>
                                                        <option value="195">Singapore</option>
                                                        <option value="196">Slovakia</option>
                                                        <option value="197">Slovenia</option>
                                                        <option value="198">Solomon Islands</option>
                                                        <option value="199">Somalia</option>
                                                        <option value="200">South Africa</option>
                                                        <option value="201">South Georgia South Sandwich Islands
                                                        </option>
                                                        <option value="202">Spain</option>
                                                        <option value="203">Sri Lanka</option>
                                                        <option value="204">St. Helena</option>
                                                        <option value="205">St. Pierre and Miquelon</option>
                                                        <option value="206">Sudan</option>
                                                        <option value="207">Suriname</option>
                                                        <option value="208">Svalbard and Jan Mayen Islands</option>
                                                        <option value="209">Swaziland</option>
                                                        <option value="210">Sweden</option>
                                                        <option value="211">Switzerland</option>
                                                        <option value="212">Syrian Arab Republic</option>
                                                        <option value="213">Taiwan</option>
                                                        <option value="214">Tajikistan</option>
                                                        <option value="215">Tanzania, United Republic of</option>
                                                        <option value="216">Thailand</option>
                                                        <option value="217">Togo</option>
                                                        <option value="218">Tokelau</option>
                                                        <option value="219">Tonga</option>
                                                        <option value="220">Trinidad and Tobago</option>
                                                        <option value="221">Tunisia</option>
                                                        <option value="222">Turkey</option>
                                                        <option value="223">Turkmenistan</option>
                                                        <option value="224">Turks and Caicos Islands</option>
                                                        <option value="225">Tuvalu</option>
                                                        <option value="226">Uganda</option>
                                                        <option value="227">Ukraine</option>
                                                        <option value="228">United Arab Emirates</option>
                                                        <option value="229">United Kingdom</option>
                                                        <option value="230">United States</option>
                                                        <option value="231">United States minor outlying islands
                                                        </option>
                                                        <option value="232">Uruguay</option>
                                                        <option value="233">Uzbekistan</option>
                                                        <option value="234">Vanuatu</option>
                                                        <option value="235">Vatican City State</option>
                                                        <option value="236">Venezuela</option>
                                                        <option value="237">Vietnam</option>
                                                        <option value="238">Virgin Islands (British)</option>
                                                        <option value="239">Virgin Islands (U.S.)</option>
                                                        <option value="240">Wallis and Futuna Islands</option>
                                                        <option value="241">Western Sahara</option>
                                                        <option value="242">Yemen</option>
                                                        <option value="243">Zaire</option>
                                                        <option value="244">Zambia</option>
                                                        <option value="245">Zimbabwe</option>
                                                    </select> --}}
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Address1*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="addressname"
                                                                value="#1234 Street No. 45, Ward No. 60, Phase 3"
                                                                id="id_address1" required="" maxlength="300"
                                                                placeholder="Address Line 1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Address2*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="addressname2"
                                                                value="Shahid Karnail Singh Nagar, Near Pakhowal Road"
                                                                id="id_address2" required="" maxlength="300"
                                                                placeholder="Address Line 2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>City*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text" name="city"
                                                                value="Ludhiana" id="id_city" required=""
                                                                maxlength="64" placeholder="City">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>State / Province / Region*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="state" value="Punjab" id="id_state"
                                                                required="" maxlength="64"
                                                                placeholder="State / Province / Region">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Zip/Postal Code*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="zip" value="141013" id="id_zip"
                                                                required="" maxlength="64"
                                                                placeholder="Zip / Postal Code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Phone Number*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="phone" value="+91123456789" id="id_phone"
                                                                required="" maxlength="12" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <button class="save_address_btn" type="submit">Save
                                                        Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="address_text">
                            ABD RACHMAN SIDDIK<br>
                            JL. GAPURA BANGKAL<br> RT-001 / RW-002<br>
                            Road.<br>
                            Ludhiana, Punjab, 141013<br>
                            Indonesia
                        </div>
                    </div>
                    <div class="membership_chk_bg">
                        <div class="checkout_title">
                            <h4>Select Payment Method</h4>
                            <img src="{{ asset('') }}assets/images/line.svg" alt="">
                        </div>
                        <div class="checkout-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a href="#credit-method-tab" id="credit-tab" class="nav-link active"
                                        data-bs-toggle="tab"><i class="uil uil-card-atm check_icon5"></i>Credit/Debit
                                        Card</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#bank-method-tab" id="bank-tab" class="nav-link" data-bs-toggle="tab"><i
                                            class="uil uil-university check_icon5"></i>Bank
                                        Transfer</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#payapl-method-tab" id="payapl-tab" class="nav-link"
                                        data-bs-toggle="tab"><i class="uil uil-paypal check_icon5"></i>Paypal</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="credit-method-tab" role="tabpanel"
                                aria-labelledby="credit-tab">
                                <form class="basic_form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ui search focus mt-30 lbel25">
                                                <label>Holder Name</label>
                                                <div class="ui left icon input swdh11 swdh19">
                                                    <input class="prompt srch_explore" type="text" name="holder[name]"
                                                        value="" id="id_holdername" required="" maxlength="64"
                                                        placeholder="Enter Holder Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ui search focus mt-30 lbel25">
                                                <label>Card Number</label>
                                                <div class="ui left icon input swdh11 swdh19">
                                                    <input class="prompt srch_explore" type="text" name="card[number]"
                                                        maxlength="16" placeholder="Card #">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="lbel25 mt-30">
                                                <label>Expiration Month</label>
                                                <select class="selectpicker" name="card[expire-month]" data-size="5">
                                                    <option value="">Month</option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="ui search focus mt-30 lbel25">
                                                <label>Expiration Year</label>
                                                <div class="ui left icon input swdh11 swdh19">
                                                    <input class="prompt srch_explore" type="text"
                                                        name="card[expire-year]" maxlength="4" placeholder="Year">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="ui search focus mt-30 lbel25">
                                                <label>Expiration Year</label>
                                                <div class="ui left icon input swdh11 swdh19">
                                                    <input class="prompt srch_explore" type="text" name="card[cvc]"
                                                        maxlength="3" placeholder="CVC">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="bank-method-tab" role="tabpanel" aria-labelledby="bank-tab">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ui search focus mt-30 lbel25">
                                                <label>Account Holder Name</label>
                                                <div class="ui left icon input swdh11 swdh19">
                                                    <input class="prompt srch_explore" type="text"
                                                        name="account[holdername}" value="" required=""
                                                        maxlength="64" placeholder="Enter Your Full Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ui search focus mt-30 lbel25">
                                                <label>Account Number</label>
                                                <div class="ui left icon input swdh11 swdh19">
                                                    <input class="prompt srch_explore" type="text"
                                                        name="Account[number]" maxlength="10"
                                                        placeholder="Enter Account Number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="lbel25 mt-30">
                                                <label>Bank Name</label>
                                                <select class="ui hj145 dropdown cntry152 prompt srch_explore"
                                                    name="Bank[name]">
                                                    <option value="">State Bank of India</option>
                                                    <option value="1">Indian Bank</option>
                                                    <option value="2">ICICI Bank</option>
                                                    <option value="3">HDFC Bank</option>
                                                    <option value="4">Yes Bank</option>
                                                    <option value="5">Oriental Bank</option>
                                                    <option value="6">Punjab National Bank</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ui search focus mt-30 lbel25">
                                                <label>IFSC Code</label>
                                                <div class="ui left icon input swdh11 swdh19">
                                                    <input class="prompt srch_explore" type="text" name="IFSC[code]"
                                                        maxlength="10" placeholder="Enter IFSC Code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="payapl-method-tab" role="tabpanel"
                                aria-labelledby="payapl-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="t-body">After payment via PayPal's secure checkout, we will send you
                                            a link to download your files.</p>
                                        <div class="media h-mt2">
                                            <div class="media__item -align-center">
                                                <p class="t2-body h-m0">PayPal accepts</p>
                                            </div>
                                            <div class="media__body">
                                                <ul id="paypal-gateway" class="financial-institutes">
                                                    <li class="financial-institutes__logo">
                                                        <img alt="Visa" title="Visa"
                                                            src="{{ asset('') }}assets/images/membership/pyicon-1.svg">
                                                    </li>
                                                    <li class="financial-institutes__logo">
                                                        <img alt="MasterCard" title="MasterCard"
                                                            src="{{ asset('') }}assets/images/membership/pyicon-2.svg">
                                                    </li>
                                                    <li class="financial-institutes__logo">
                                                        <img alt="American Express" title="American Express"
                                                            src="{{ asset('') }}assets/images/membership/pyicon-3.svg">
                                                    </li>
                                                    <li class="financial-institutes__logo">
                                                        <img alt="Discover" title="Discover"
                                                            src="{{ asset('') }}assets/images/membership/pyicon-4.svg">
                                                    </li>
                                                    <li class="financial-institutes__logo">
                                                        <img alt="China UnionPay" title="China UnionPay"
                                                            src="{{ asset('') }}assets/images/membership/pyicon-5.svg">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chckout_order_dt">
                            <div class="checkout_title">
                                <h4>Order Details</h4>
                                <img src="{{ asset('') }}assets/images/line.svg" alt="">
                            </div>
                            <div class="order_dt_section">
                                <div class="order_title">
                                    <h4>Baby Plan</h4>
                                    <div class="order_price">$49</div>
                                </div>
                                <div class="order_title">
                                    <h6>Taxes(GST)</h6>
                                    <div class="order_price">$2</div>
                                </div>
                                <div class="order_title">
                                    <h3>Total</h3>
                                    <div class="order_price">$51</div>
                                </div>
                                <button class="chckot_btn" type="submit">Confirm Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="membership_chk_bg rght1528">
                        <div class="checkout_title">
                            <h4>Order Summary</h4>
                            <img src="{{ asset('') }}assets/images/line.svg" alt="">
                        </div>
                        <div class="order_dt_section">
                            <div class="order_title">
                                <h4>COPEMAN: Coklat Pedas Manual</h4>
                                <div class="order_price">Rp8.999</div>
                            </div>
                            <div class="order_title">
                                <h6>Ongkir</h6>
                                <div class="order_price">Rp5.000</div>
                            </div>
                            <div class="order_title">
                                <h2>Total</h2>
                                <div class="order_price5">Rp13.999</div>
                            </div>
                            <div class="scr_text"><i class="uil uil-lock-alt"></i>Secure checkout</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
