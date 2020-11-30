<?php


//check if http or https
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
// echo $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if ($url == 'http://sungevity.com/solar-free-quote/') {
    header('Location: https://sungevity.com/solar-free-quote/');
    // echo 'true';
} else {
    // echo $url;
}
?>

<!DOCTYPE html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    <meta charset="utf-8" />-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/zInput_default_stylesheet.css">
    <link rel="stylesheet" href="css/long_form.css">
    <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'
    type='text/css' />
    <style>
        body {
            overflow: hidden;
        }

        body::-webkit-scrollbar {
            width: 0 !important;
        }

        body {
            overflow: -moz-scrollbars-none;
        }

        body {
            -ms-overflow-style: none;
        }

        input[class="error"] {
            background-color: pink;
            border-color: red;
        }

        label[class="error"] {
            color: white;
            background-color: red;
            padding: 15px;
            border: 2px dotted pink;
            font-weight: bold;
            font-size: 28px;
            width: 100%;
            border-radius: 5px;
        }

        #mobile {
            display: none;
        }

        @media (max-width: 450px) {
            #mobile {
                display: inline-flex;
            }
        }
    </style>
</head>

<!-- <body style="overflow-y:hidden;"> -->

    <body>
        <div class="content-box w3-animate-left">
            <div id="ribbon-container" style="text-align:center;">
                <!-- <a href="#" id="ribbon"><span style="font-size:24px;">Best Pricing of 2020!</span></a> -->


            </div>
        </div>


        <!-- logo -->
        <div class="logo-head">
            <!-- <img src="../../assets/logos/horizon-solar-only-v1.png" style="color:white; text-align: center;"> -->
            <img src="../../assets/logos/Sungevity_logo4ff9.png" alt="Free Solar Quote from Sungevity">
            <a href="tel:866-SUN-4ALL">
                <img src="../wp-content/themes/sungevity/img/phone-only.jpg" alt="866-SUN-4ALL">
            </a>



        </div>

        <!--avg. electricity-->
        <a name="avg_electricity"></a>
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center text-white">
                        <br>
                        <div class="step-holder">
                            <div class="step-number-white">1</div>
                        </div>

                        <h1 class="display-4">What is Your Average Electric Bill?</h1>
                        <p class="lead mb-5">Select Your monthly average electricity bill amount below</p>

                        <form id="avg_electricity">


                            <label id="avg_utility_bill_hsp-error" class="error" for="avg_utility_bill_hsp"></label>

                            <!--                    <div id="avg_utility_bill_hsp-error" class="error"></div>-->

                            <div id="zInputWrapper" class="zInputWrapper-width" tabindex="1">
                                <input type="radio" class="avg_utility_bill_hsp" name="avg_utility_bill_hsp"
                                id="avg_utility_bill_hsp" title="$0 - $100" value="0 - 100"
                                data-msg-required="Please Enter Your Elelctricity Bill">
                                <input type="radio" class="avg_utility_bill_hsp" name="avg_utility_bill_hsp"
                                id="avg_utility_bill_hsp" title="$101 - $200" value="101 - 200"
                                data-msg-required="Please Enter Your Elelctricity Bill">
                                <input type="radio" class="avg_utility_bill_hsp" name="avg_utility_bill_hsp"
                                id="avg_utility_bill_hsp" title="$201 - $300" value="201 - 300"
                                data-msg-required="Please Enter Your Elelctricity Bill">
                                <input type="radio" class="avg_utility_bill_hsp" name="avg_utility_bill_hsp"
                                id="avg_utility_bill_hsp" title="$301 - $400" value="301 - 400"
                                data-msg-required="Please Enter Your Elelctricity Bill">
                                <input type="radio" class="avg_utility_bill_hsp" name="avg_utility_bill_hsp"
                                id="avg_utility_bill_hsp" title="$401 - $500" value="401 - 500"
                                data-msg-required="Please Enter Your Elelctricity Bill">
                                <input type="radio" class="avg_utility_bill_hsp" name="avg_utility_bill_hsp"
                                id="avg_utility_bill_hsp" title="$501 & Up" value="501 & Up"
                                data-msg-required="Please Enter Your Elelctricity Bill">
                            </div>

                            <br>
                            <!--                <div id="next-own-home" class="btn btn-light btn-lg btn-width">Next</div>-->
                            <button type="button" id="next-own-home" class="btn btn-light btn-lg btn-width">Next</button>

                        </form>

                        <br>
                        <div class="mt-5 mb-5 privacy">
                            <img src="img/lock.png" alt="Your information is protected and safe" width="50px;"> Your
                            information is <strong>protected and safe</strong>.
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!--end avg. electricity-->

        <!--own home-->
        <a name="own-home">
            <section class="step-main" id="own-home">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 text-center text-black">
                            <div class="step-holder">
                                <div class="step-number-black">2</div>
                            </div>

                            <form id="own_home">

                                <h1 class="display-4" style="color:#f26826;">Do You Own Your Home?</h1>
                                <div class="row own_home_text">
                                    <div class="col text-center" tabindex="2">
                                        <a href="#home-address" id="next-home-address">
                                            <span>Yes</span>
                                        </a>
                                    </div>
                                    <div class="col text-center">
                                        <a href="" data-toggle="modal" data-target="#myModal" tabindex="3">
                                            <span>No</span>
                                        </a>
                                    </div>
                                </div>

                            </form>

                            <div class="mt-5 privacy">
                                <img src="img/lock.png" alt="Your information is protected and safe" width="50px;"> Your
                                information is <strong>protected and safe</strong>.
                            </div>
                        </div>
                    </div>
                </section>
            </a>
            <!--end own home-->

            <!--home address-->
            <a name="home-address">
                <section class="step-main" id="home-address">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 text-center text-black">
                                <div class="step-holder">
                                    <div class="step-number-black">3</div>
                                </div>
                                <h1 class="display-4 mb-5" style="color:#f26826;">What Is Your Home Address?</h1>

                                <form id="home_address">
                                    <?php
                                    /*
                                                ** Utm parameters */
                                    $utm_campaign = filter_var($_REQUEST['utm_campaign'], FILTER_SANITIZE_STRING);
                                    $utm_content = filter_var($_REQUEST['utm_content'], FILTER_SANITIZE_STRING);
                                    $utm_source = filter_var($_REQUEST['utm_source'], FILTER_SANITIZE_STRING);
                                    ?>
                                    <input type="hidden" id="utm_campaign" name="utm_campaign"
                                    value="<?php echo $utm_campaign; ?>">
                                    <input type="hidden" id="utm_content" name="utm_content"
                                    value="<?php echo $utm_content; ?>">
                                    <input type="hidden" id="utm_source" name="utm_source" value="<?php echo $utm_source; ?>">
                            <?php // 
                            ?>

                            <!--                        errors-->
                            <label id="address_1-error" class="error" for="address_1"></label>
                            <br>
                            <label id="state-error" class="error" for="state"></label>
                            <br>
                            <label id="postal_code-error" class="error" for="postal_code"></label>


                            <div class="form-group row">
                                <input type="text" class="form-control form-control-lg" id="address_1" name="address_1"
                                placeholder="Street Address" data-msg-required="Address is Required" tabindex="4">
                            </div>

                            <div class="form-group row">
                                <select id="state" class="custom-select custom-select-lg" name="state"
                                placeholder="State" data-msg-required="State is Required" tabindex="5">
                                <option value="">State</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DC">District of Columbia</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <!-- <option value="NY">New York</option> -->
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>

                        <div class="form-group row mb-5">
                            <input type="text" class="form-control form-control-lg" id="postal_code"
                            name="postal_code" placeholder="Zip Code" data-msg-required="Zip Code is Required"
                            tabindex="6">
                        </div>

                        <!--                            <div id="next-first-last-name" class="btn btn-orange btn-lg btn-width">Next</div>-->
                        <button type="button" id="next-first-last-name"
                        class="btn btn-orange btn-lg btn-width">Next</button>

                    </form>

                    <div class="mt-5 privacy">
                        <img src="img/lock.png" alt="Your information is protected and safe" width="50px;"> Your
                        information is <strong>protected and safe</strong>.
                    </div>
                </div>
            </div>
        </div>
    </section>
</a>
<!--end home address-->

<!--first and last name-->
<a name="first-last-name">
    <section class="step-main" id="first-last-name">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-black">
                    <div class="step-holder">
                        <div class="step-number-black">4</div>
                    </div>
                    <h1 class="display-4 mb-5" style="color:#f26826;">Who Is This Quote For?</h1>

                    <form id="who_quote_for">

                        <!--                        errors-->
                        <label id="first_name-error" class="error" for="first_name"></label>
                        <br>
                        <label id="last_name-error" class="error" for="last_name"></label>
                        <br>


                        <div class="form-group row">
                            <input type="text" class="form-control form-control-lg" id="first_name"
                            name="first_name" placeholder="First Name" tabindex="7">
                        </div>
                        <div class="form-group row mb-5">
                            <input type="text" class="form-control form-control-lg" id="last_name" name="last_name"
                            placeholder="Last Name" tabindex="8">
                        </div>
                        <!--                    <input type="submit" name="submit" class="btn btn-orange btn-lg btn-width" value="Next" />-->
                        <!--                    <div id="next-phone-number" class="btn btn-orange btn-lg btn-width">Next</div>-->
                        <button type="button" id="next-phone-number"
                        class="btn btn-orange btn-lg btn-width">Next</button>

                    </form>

                    <div class="mt-5 privacy">
                        <img src="img/lock.png" alt="Your information is protected and safe" width="50px;"> Your
                        information is <strong>protected and safe</strong>.
                    </div>
                </div>
            </div>
        </section>
    </a>
    <!--end first and last name-->

    <!--phone number-->
    <a name="phone-number">
        <section class="step-main" id="phone-number">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center text-black">
                        <div class="step-holder">
                            <div class="step-number-black">5</div>
                        </div>
                        <h1 class="display-4 mb-5" style="color:#f26826;">Phone Number</h1>

                        <form id="phone_number">
                            <!--                        errors-->
                            <label id="phone_1-error" class="error" for="phone_1"></label>
                            <br>

                            <div class="form-group row mb-5">
                                <input type="text" class="form-control form-control-lg" id="phone_1" name="phone_1"
                                placeholder="Phone Number" data-msg-required="Phone Number is Required"
                                tabindex="9">
                            </div>
                            <!--                    <a href="#email"class="btn btn-orange btn-lg btn-width">Next</a><br>-->
                            <!--                    <div id="next-email" class="btn btn-orange btn-lg btn-width">Next</div>-->
                            <button type="button" id="next-email" class="btn btn-orange btn-lg btn-width">Next</button>

                        </form>


                        <div class="mt-5 privacy">
                            <img src="img/lock.png" alt="Your information is protected and safe" width="50px;"> Your
                            information is <strong>protected and safe</strong>.
                        </div>
                    </div>
                </div>
            </section>
        </a>
        <!--end phone number-->

        <!--email-->
        <a name="email">
            <section class="step-main bg-fill-info" id="email">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 text-center text-black">
                            <div class="step-holder">
                                <div class="step-number-black">6</div>
                            </div>
                            <h1 class="display-4 mb-5">Where Can We Send Your Free Solar Quote?</h1>

                            <form id="where_send_quote">

                                <!--                        errors-->
                                <label id="email-error" class="error" for="email"></label>
                                <br>

                                <div class="form-group row mb-5">
                                    <input type="hidden" name="ip_address" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                                    <input type="text" class="form-control form-control-lg" id="email" name="email"
                                    placeholder="Email" data-msg-required="Email is Required" tabindex="10">
                                </div>
                                <button type="submit" class="btn btn-orange btn-lg btn-width">Submit</button>
                                <br>
                                <h4 id="mobile"><strong>Or</strong></h4>
                                <br>
                                <a class="btn btn-lg btn-warning" id="mobile" style="background-color:#2787CD; color:white;"
                                href="tel:866-SUN-4ALL" title="Call" target="_blank"><i class="fa fa-phone"
                                aria-hidden="true" style="padding-left:4px;"></i> &nbsp;CALL 866-SUN-4ALL&nbsp;<i
                                class="fa fa-phone" aria-hidden="true" style="padding-right:4px;"></i> </a>

                            </form>


                            <div class="mt-5 privacy">
                                <img src="img/lock.png" alt="Your information is protected and safe" width="50px;"> Your
                                information is <strong>protected and safe</strong>.
                            </div>
                            <div class="pt-5 privacy">
                                <p>By clicking "Submit" you authorize Horizon Solar Power and/or Solar Spectrum to use
                                    automated technology to contact you regarding its offers and services via email, SMS
                                    texting and/or telephone at the telephone number and email address provided, even if it
                                    is a wireless number and even if you have registered with a Do Not Call list. This
                                consent is not required to make a purchase.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </a>
            <!--end email-->
            <!--<span class="throw_error"></span>-->
            <span id="success"></span>

            <!--error modal-->
            <div class="modal" id="errorModal">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="d-flex align-items-center flex-column justify-content-center h-100 text-black"
                            id="header">
                            <h1 class="text-center" style="color:red;">Please Fix Below</h1>
                            <div class="error-title-border"></div>


                            <span class="throw_error"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end error modal-->

        <!--modal-->
        <div class="modal" id="myModal" style="background-color:black;">
            <div class="modal-dialog-lg  bg-money-solar">
                <div class="modal-content-lg  bg-money-solar">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="d-flex align-items-center flex-column justify-content-center h-100 text-black"
                        id="header">
                        <h1 class="text-center">Make Money With Solar</h1>
                        <p class="text-center">Sorry. In order to qualify for solar you must own your home. <br>But the
                        good news is you can make money from Horizon Solar for referring someone for solar.</p>
                        <a href="https://www.horizonsolarpower.com/referral-program/" class="btn btn-light btn-lg">Sign
                        Up Today!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal -->


    <!--old-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<!--zinput radio buttons-->
<script src="js/zInput.js"></script>
<!--validation-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/additional-methods.js"></script>
<script>
    $(document).on("keydown", "form", function (event) {
        return event.key != "Enter";
    });

    function hideModal() {
        $("#errorModal").modal('hide');
    }
</script>

<script>
        //hide avg electricity error
        $('#avg_utility_bill_hsp-error').hide();

        //hide address errors
        $('#address_1-error').hide();
        $('#state-error').hide();
        $('#postal_code-error').hide();

        //first last name errors
        $('#first_name-error').hide();
        $('#last_name-error').hide();

        //phone number
        $('#phone_1-error').hide();

        //email
        $('#email-error').hide();

        // zinput radio buttons
        $("#zInputWrapper").zInput();
    </script>
    <script>
        $(document).ready(function () {

            /*
            VALIDATION
            */

            //avg electricity validate
            $('#avg_electricity').validate({
                rules: {
                    zInputWrapper: {
                        required: true
                    },
                    messages: {
                        zInputWrapper: 'Average Electricity Bill Is Required'
                    }
                }

            });

            //home address validate
            $('#home_address').validate({
                rules: {
                    address_1: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    postal_code: {
                        required: true
                    },
                    messages: {
                        address_1: 'Address is Required',
                        state: 'State is Required',
                        postal_code: 'Zip Code is Required'
                    }
                }
            });

            //first and last namem
            $('#who_quote_for').validate({
                rules: {
                    first_name: {
                        required: true
                    },
                    last_name: {
                        required: true
                    }
                },
                messages: {
                    first_name: 'First Name is Required',
                    last_name: 'Last Name is Required'
                }
            });

            //phone number
            $('#phone_number').validate({
                rules: {
                    phone_1: {
                        required: true
                    },
                    messages: {
                        phone_1: 'Phone Number is Required'
                    }
                }
            });

            //email & submit form
            $('#where_send_quote').validate({
                rules: {
                    email: {
                        required: true
                    },
                    messages: {
                        email: 'Email is Required'
                    }
                },
                submitHandler: function (form) {
                    // serialize and join data for all forms
                    // console.log($('#avg_electricity,#home_address,#who_quote_for,#phone_number,#where_send_quote').serialize());

                    var formData = $(
                        '#avg_electricity,#home_address,#who_quote_for,#phone_number,#where_send_quote'
                        ).serialize();

                    $.ajax({
                        type: 'POST',
                        url: 'process.php',
                        data: formData,
                        // contentType: 'application/json',
                        dataType: 'json',
                        success: function (data) {
                            // console.log(formData);
                            //  console.log(data);

                            //email
                            // if($.type(data.errors.email) === "undefined") {
                            //     var email = "";
                            // } else {
                            //     var email = data['errors']['email'] + " <a href='#email' class='btn btn-danger' style='margin-bottom:25px;margin-left:10px;font-size:25px;font-weight:bold;' onclick='hideModal()'>FIX</a><br>";
                            // }
                            console.log(data);


                            if (data['success'] === false) {

                                //avg_utility_bill_hsp
                                if ($.type(data.errors.avg_utility_bill_hsp) ===
                                    "undefined") {
                                    var avg_utility_bill_hsp = "";
                            } else {
                                var avg_utility_bill_hsp = data['errors'][
                                'avg_utility_bill_hsp'
                                ] +
                                " <a href='#avg_electricity' class='btn btn-danger' style='margin-bottom:25px;margin-left:28px;font-size:25px;font-weight:bold;' onclick='hideModal()'>FIX</a><div class='error-border'></div><br>";
                            }

                                //address
                                if ($.type(data.errors.address_1) === "undefined") {
                                    var address = "";
                                } else {
                                    var address = data['errors']['address_1'] +
                                    "<a href='#home-address' class='btn btn-danger' style='margin-bottom:25px;margin-left:100px;font-size:25px;font-weight:bold;' onclick='hideModal()'>FIX</a><div class='error-border'></div><br>";

                                }
                                //state
                                if ($.type(data.errors.state) === "undefined") {
                                    var state = "";
                                } else {
                                    var state = data['errors']['state'] +
                                    " <a href='#home-address' class='btn btn-danger' style='margin-bottom:25px;margin-left:115px;font-size:25px;font-weight:bold;' onclick='hideModal()'>FIX</a><div class='error-border'></div><br>";
                                }

                                //postal_code
                                if ($.type(data.errors.postal_code) === "undefined") {
                                    var postal_code = "";
                                } else {
                                    var postal_code = data['errors']['postal_code'] +
                                    " <a href='#home-address' class='btn btn-danger' style='margin-bottom:25px;margin-left:85px;font-size:25px;font-weight:bold;' onclick='hideModal()'>FIX</a><div class='error-border'></div><br>";
                                }

                                //first_name
                                if ($.type(data.errors.first_name) === "undefined") {
                                    var first_name = "";
                                } else {
                                    var first_name = data['errors']['first_name'] +
                                    " <a href='#first-last-name' class='btn btn-danger' style='margin-bottom:25px;margin-left:70px;font-size:25px;font-weight:bold;' onclick='hideModal()'>FIX</a><div class='error-border'></div><br>";
                                }

                                //last_name
                                if ($.type(data.errors.last_name) === "undefined") {
                                    var last_name = "";
                                } else {
                                    var last_name = data['errors']['last_name'] +
                                    " <a href='#first-last-name' class='btn btn-danger' style='margin-bottom:25px;margin-left:70px;font-size:25px;font-weight:bold;' onclick='hideModal()'>FIX</a><div class='error-border'></div><br>";
                                }


                                //phone_1
                                if ($.type(data.errors.phone_1) === "undefined") {
                                    var phone_1 = "";
                                } else {
                                    var phone_1 = data['errors']['phone_1'] +
                                    " <a href='#phone-number' class='btn btn-danger' style='margin-bottom:25px;margin-left:38px;font-size:25px;font-weight:bold;' onclick='hideModal()'>FIX</a><div class='error-border'></div><br>";
                                }

                                //    if(emailError === "undefined") {
                                //     console.log(emailError);
                                //    }
                                $("#errorModal").modal('show');
                                $(".throw_error").html(
                                    // email +
                                    avg_utility_bill_hsp +
                                    address +
                                    state +
                                    postal_code +
                                    first_name +
                                    last_name +
                                    phone_1
                                    //   data['errors']['email'] + "<br>" +
                                    //  data['errors']['address_1'] + "<br>"
                                    //  data['errors']['state'] + "<br>" +
                                    //  data['errors']['postal_code'] + "<br>" +
                                    //  data['errors']['first_name'] + "<br>" +
                                    //  data['errors']['last_name'] + "<br>" +
                                    //  data['errors']['phone_1'] + "<br>" +
                                    //  data['errors']['avg_utility_bill_hsp'] + "<br>"
                                    );
                            }
                            if (data['success'] === true) {
                                var url = "thank-you.php";
                                $(location).attr('href', url);
                                // console.log(data);

                            }

                            // console.log(data['errors']['address_1']);

                            //redirect
                            // window.location.href = 'thank-you.php';
                            // console.log(data);

                            // if(data['errors'] === true) {
                            //     alert('true');
                            // } else {
                            //     //true errors
                            //     alert('false');
                            // }


                        },
                        error: function (data) {
                            window.location.href = 'thank-you.php';


                        }


                    });

return false;
                    // if(data['success'] = true) {
                    //     var url = "thank-you.php";
                    //     $(location).attr('href', url);
                    //     // console.log(data);
                    //
                    // }

                    // event.preventDefault();


                    // ajax submit
                    // alert('go ajax');
                    // return false;
                }
            });


            /*
            CLICK FUNCTIONS
            */

            //avg electricity click function
            $('#next-own-home').on('click', function () {
                if ($('#avg_electricity').valid()) {
                    //scroll down
                    $('html, body').animate({
                        scrollTop: $("#own-home").offset().top
                    }, 2000);


                } else {
                    $('#avg_utility_bill_hsp-error').show();
                }
            });

            //home address
            $("#next-home-address").click(function () {
                $('html, body').animate({
                    scrollTop: $("#home-address").offset().top
                }, 2000);
            });

            //first and last name
            $('#next-first-last-name').on('click', function () {
                if ($('#home_address').valid()) {
                    //scroll down
                    $('html, body').animate({
                        scrollTop: $("#first-last-name").offset().top
                    }, 2000);


                } else {
                    $('#address_1-error').show();
                    $('#state-error').show();
                    $('#postal_code-error').show();
                }
            });

            //who the quote is for
            $('#next-phone-number').on('click', function () {
                if ($('#who_quote_for').valid()) {
                    //scroll down
                    $('html, body').animate({
                        scrollTop: $("#phone-number").offset().top
                    }, 2000);


                } else {
                    $('#first_name-error').show();
                    $('#last_name-error').show();
                }
            });

            //phone number
            $('#next-email').on('click', function () {
                if ($('#phone_number').valid()) {
                    //scroll down
                    $('html, body').animate({
                        scrollTop: $("#email").offset().top
                    }, 2000);


                } else {
                    $('#phone_1-error').show();
                }
            });



            //end
        });
    </script>
</body>

</html>