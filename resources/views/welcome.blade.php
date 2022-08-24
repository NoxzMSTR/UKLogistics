<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">

    <title>Stand CSS Blog by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" type="text/css" href="assets/css/roboto-font.css">
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" type="text/css"
        href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/style2.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css"
        integrity="sha512-fXnjLwoVZ01NUqS/7G5kAnhXNXat6v7e3M9PhoMHOTARUMCaf5qNO84r5x9AFf5HDzm3rEZD8sb/n6dZ19SzFA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .form-control {
            border-radius: none !important;
            display: block;
            width: 100%;
            min-height: 50px;
            padding: 13px 40px;
            font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 15px;
            line-height: 26px;
            background-image: none;
            border-radius: 0;
            -webkit-appearance: none;
            transition: 0.3s ease-in-out;
            border: 1px solid #9b9b9b;
            color: #495057;
        }

        .left-icon {
            position: absolute;
            z-index: 1;
            left: 29px;
            top: 6px;
            font-size: 22px;
        }

        .right-icon {
            position: absolute;
            top: 13px;
            right: 38px;
        }

        .left-icon2 {
            position: absolute;
            z-index: 1;
            left: 15px;
            top: 6px;
            font-size: 22px;
        }
        .right-icon3 {
            position: absolute;
            top: 13px;
            right: 17px;
        }

        .left-icon3 {
            position: absolute;
            z-index: 1;
            left: 11px;
            top: 6px;
            font-size: 22px;
        }

        .right-icon2 {
            position: absolute;
            top: 13px;
            right: 18px;
        }


        .sep-icon {
            font-size: 30px;
            font-weight: bolder;
        }

        .item-buttons .fa-trash,
        .item-buttons .mdi-ruler {
            margin-left: 8px;
            margin-right: 5px;
        }

        .step-text {
            /* position: relative;
   right: 26px; */
        }

        .button {
            position: relative;
            overflow: hidden;
            display: inline-block;
            font-size: 15px;
            font-weight: 600;
            padding: 10px 47px
            font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            letter-spacing: 0;
            text-transform: uppercase;
            white-space: nowrap;
            text-overflow: ellipsis;
            text-align: center;
            cursor: pointer;
            vertical-align: middle;
            user-select: none;
            border: 0 !important;
            box-shadow: none !important;
            transition: .2s all ease-in-out
        }

        .button-icon {
            display: inline-flex;
            position: relative;
            background: 0 0;
            padding: 0
        }

        .button-icon .fa {
            position: absolute;
            font-size: 30px;
            top: 50%;
            left: 48%;
            transform: translate(-50%, -50%)
        }

        .button-primary.button-icon .fa {
            color: #fff
        }

        .button-content {
            padding: 20px;
            align-self: stretch;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .button-primary.button-icon .button-content {
            color: #fff;
            background-color: #c62724;
            transition: .3s ease-out all
        }

        .button-primary.button-icon svg path {
            fill: #c62724;
            transition: .3s ease-out all
        }

        @media (max-width: 767px) {
            .sep-icon {
                display: none;
            }
        }

        @media (max-width: 575px) {
            .wizard-v3-content {
                width: 100%;
            }
        }

        .dropdown {
            width: 100%;
        }
        .border-bottom{
            border-bottom: 1px solid #6c757d !important;
        }
        .cal-tabs{
            height: 50px;
            margin: 0px;
            line-height: 50px;
        }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>Stand Blog<em>.</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->

    <section style="background-image: url('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/cardboard-boxes-and-cleaning-things-for-moving-into-a-new-home-1573953252.jpg?crop=0.998xw:0.753xh;0.00160xw,0.192xh&resize=1200:*');background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">

                    <div class="wizard-v3-content" style="background-color: #ffffff66;">
                        <div class="wizard-form">
                            <div class="bs-stepper">
                                <div class="bs-stepper-header flex-wrap" role="tablist">
                                  <!-- your steps here -->
                                  <div class="step active" data-target="#items-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="items-part" id="items-part-trigger">
                                      <span class="bs-stepper-circle">1</span>
                                      <span class="bs-stepper-label">Select items</span>
                                    </button>
                                  </div>
                                  <div class="line"></div>
                                  <div class="step" data-target="#pick-date-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="pick-date-part" id="pick-date-trigger">
                                      <span class="bs-stepper-circle">2</span>
                                      <span class="bs-stepper-label">Pick a date</span>
                                    </button>
                                  </div>
                                  <div class="line"></div>
                                  <div class="step" data-target="#finalize-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="finalize-part-trigger">
                                      <span class="bs-stepper-circle">3</span>
                                      <span class="bs-stepper-label">Finalize</span>
                                    </button>
                                  </div>
                                </div>
                                <div class="bs-stepper-content">
                                  <!-- your steps content here -->
                                  <div id="items-part" class="content active" role="tabpanel" aria-labelledby="items-part-trigger">
                                    <section>
                                        <div class="inner card-body">
                                            <div class="d-flex flex-column flex-md-row mb-4" style="gap: 20px;/* width: 100%; */">
                                                <div class="dropdown">
                                                    <div class="left-icon3">
                                                        <i class="fa-regular fa-circle-up"></i>
                                                    </div>
                                                    <input type="text" name="coll-postalcode" id="coll-postalcode" class="form-control w-100"
                                                        placeholder="Enter Collection Zip Code" required="">
                                                    <div class="right-icon3">
                                                        <button aria-label="Clear" class="close rbt-close"
                                                            type="button">
                                                            <span aria-hidden="true">×</span>
                                                            <span class="sr-only visually-hidden">Clear</span>
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="sep-icon text-center">-</div>
                                                <div class="dropdown">
                                                    <div class="left-icon3">
                                                        <i class="fa-regular fa-circle-up"></i>
                                                    </div>
                                                    <input type="text" name="del-postalcode" id="del-postalcode" class="form-control"
                                                        required="" placeholder="Enter Delivery Zip Code">
                                                    <div class="right-icon3">
                                                        <button aria-label="Clear" class="close rbt-close"
                                                            type="button">
                                                            <span aria-hidden="true">×</span>
                                                            <span class="sr-only visually-hidden">Clear</span>
                                                        </button>
                                                    </div>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col dropdown">
                                                    <div class="left-icon">
                                                        <span class="fa fa-cube"></span>
                                                    </div>
                                                    <input type="text" name="items" id="items" class="form-control"
                                                        required="" placeholder="Enter Item Name">

                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <p class="men-center text-center border-bottom">Two brave men team included.
                                                        ALWAYS!</p>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-flex flex-column my-3" style="gap: 15px;">
                                                        <div class="text-center">
                                                            <h5 style="font-weight: bolder;font-size: 30px;">
                                                                My item list(2)</h5>
                                                        </div>
                                                        <ul>
                                                            <li class="border-bottom">
                                                                <div class="item-buttons mb-2"
                                                                    style="display: flex; justify-content: space-between;">
                                                                    <div>
                                                                        <h5>Dining Chair</h5>
                                                                    </div>
                                                                    <div>
                                                                        <div class="d-flex justify-content-between align-items-baseline"
                                                                            style="gap:5px">
                                                                            <span
                                                                                class="fa  fa-minus-circle  icon quantity-icon  "></span><span>
                                                                                <h5>2</h5>
                                                                            </span><span
                                                                                class="fa fa-plus-circle icon quantity-icon  "></span><span
                                                                                class="mdi mdi-ruler icon quantity-icon  "></span><span
                                                                                class="fa fa-trash icon quantity-icon  "></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-wrap input-group  item-input"><input
                                                                        class="form-control form-input"
                                                                        placeholder="length" title="length"
                                                                        value=""><input class="form-control form-input"
                                                                        placeholder="height" title="height"
                                                                        value=""><input class="form-control form-input"
                                                                        placeholder="width" title="width" value="">
                                                                    <div class="input-group-append "><button
                                                                            class="btn btn-danger input-button in-cm-button"
                                                                            title="units" type="button">cm</button>
                                                                    </div><input class="form-control form-input"
                                                                        placeholder="weight" title="weight" value="">
                                                                    <div class="input-group-append"><span
                                                                            class="input-group-text"
                                                                            id="basic-addon1">KG</span></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="price-tag">
                                                        <div class="items-form">
                                                            <h4 class="text-center" style="font-weight: bold;">
                                                                Total Price: £52.26 <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Please ensure that the selected item(s) correspond to
                                                                shared details otherwise extra fees may be added to
                                                                your order with a processing fee of £10 upon
                                                                arrival."><i class="fa-regular fa-circle-question"></i></a></h4>
                                                            <div class="PriceDisclaimer_popover-content__eayOs">
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-button form-aliner text-center">
                                                        <button class="button button-icon button-primary" onclick="stepper.next()">
                                                            <span class="button-content">Pick a date</span>
                                                            <span class="button-icon"><svg width="98" height="103"
                                                                    viewBox="0 0 98 103" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M63.5 0H0V103H64L98 51L63.5 0Z"></path>
                                                                </svg>
                                                                <span class="fa fa-calendar"></span></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                  </div>
                                  <div id="pick-date-part" class="content" role="tabpanel" aria-labelledby="pick-date-part-trigger">
                                    <section>
                                        <div class="inner card-body row">
                                            <div class="col-12">
                                                <div class="calendar-section">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-6 bg-white">
                                                            <h5 class="text-center cal-tabs">
                                                                Collection date: 2022-08-19
                                                            </h5>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="text-center cal-tabs">
                                                                Delivery date: 2022-08-25
                                                            </h5>
                                                          </div>
                                                          <div class="col-md-12">
                                                            <div class="calendar calendar-first" id="calendar_first">
                                                                <div class="calendar_header">
                                                                    <button class="switch-month switch-left">
                                                                        <i class="fa fa-chevron-left"></i>
                                                                    </button>
                                                                    <h2></h2>
                                                                    <button class="switch-month switch-right">
                                                                        <i class="fa fa-chevron-right"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="calendar_weekdays"></div>
                                                                <div class="calendar_content"></div>
                                                            </div>
                                                        </div>
                                                    </div> <!-- End Row -->

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-button form-aliner text-center">
                                                    <button class="button button-icon button-primary" onclick="stepper.next()">
                                                        <span class="button-content">Finalize</span>
                                                        <span class="button-icon"><svg width="98" height="103"
                                                                viewBox="0 0 98 103" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M63.5 0H0V103H64L98 51L63.5 0Z"></path>
                                                            </svg>
                                                            <span class="fa fa-check"></span></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12"></div>
                                        </div>
                                    </section>
                                  </div>
                                  <div id="finalize-part" class="content" role="tabpanel" aria-labelledby="finalize-part-trigger">
                                    <section>
                                        <div class="inner card-body">

                                            <div class="row">
                                                <div class="col-12">
                                                    <h3 class="finalize-title">Customer Information:</h3>
                                                    <div class="mb-4 row" style="gap: 20px;">
                                                        <div class="col-12 dropdown">
                                                            <div class="left-icon">
                                                                <span class="fa fa-user"></span>
                                                            </div>
                                                            <input type="text" name="email" id="email" class="form-control"
                                                                placeholder="Enter Customer Name" required="">
                                                        </div>
                                                        <div class="col-12 dropdown">
                                                            <div class="left-icon">
                                                                <span class="fa fa-envelope"></span>
                                                            </div>
                                                            <input type="text" name="email" id="email" class="form-control"
                                                                required="" placeholder="Enter Customer Email">
                                                        </div>
                                                        <div class="col-12 dropdown">
                                                            <div class="left-icon">
                                                                <span class="fa fa-phone"></span>
                                                            </div>
                                                            <input type="text" name="email" id="email" class="form-control"
                                                                required="" placeholder="Enter Customer Phone">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <h3 class="finalize-title">Collection Information:</h3>
                                                    <div class="mb-4 row" style="gap: 20px;">
                                                        <div class="col-12 ml-4">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                                <label class="form-check-label" for="mySwitch">Same as Customer</label>
                                                              </div>
                                                        </div>
                                                        <div class="col-12 dropdown">
                                                            <div class="left-icon">
                                                                <span class="fa fa-user"></span>
                                                            </div>
                                                            <input type="text" name="email" id="email" class="form-control"
                                                                placeholder="Enter Collection Contact Name" required="">
                                                        </div>
                                                        <div class="col-12 dropdown">
                                                            <div class="left-icon">
                                                                <span class="fa fa-envelope"></span>
                                                            </div>
                                                            <input type="text" name="email" id="email" class="form-control"
                                                                required="" placeholder="Enter Collection Contact Email">
                                                        </div>
                                                        <div class="col-12 dropdown">
                                                            <div class="left-icon">
                                                                <span class="fa fa-phone"></span>
                                                            </div>
                                                            <input type="text" name="email" id="email" class="form-control"
                                                                required="" placeholder="Enter Collection Contact Phone">
                                                        </div>
                                                        <div class="col-12 dropdown">
                                                            <div class="input-group">
                                                                <button class="btn btn-secondary" type="button">BB1 2QE</button>
                                                                <div class="dropdown flex-grow-1">
                                                                    <div class="left-icon2">
                                                                        <i class="fa-regular fa-circle-up"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Enter Delivery Address">
                                                                    <div class="right-icon2">
                                                                        <button aria-label="Clear" class="close rbt-close"
                                                                            type="button">
                                                                            <span aria-hidden="true">×</span>
                                                                            <span class="sr-only visually-hidden">Clear</span>
                                                                        </button>
                                                                    </div>
                                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Another action</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Something else
                                                                                here</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                              </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <p>Choose working hours: <a data-bs-toggle="modal" data-bs-target="#myModal" href="http://" style="text-decoration: underline !important;">10:00 - 16:00</a></p>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" >
                                                                <label class="form-check-label">Collection is flexible (-£1)</label>
                                                              </div>
                                                        </div>
                                                        <div class="col-12 ml-3">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" >
                                                                <label class="form-check-label" for="mySwitch">Collection Note</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <h3 class="finalize-title">Delivery Information:</h3>
                                                    <div class="mb-4 row" style="gap: 20px;">
                                                        <div class="col-12 ml-4">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                                <label class="form-check-label" for="mySwitch">Same as Customer</label>
                                                              </div>
                                                        </div>
                                                        <div class="col-12 dropdown">
                                                            <div class="left-icon">
                                                                <span class="fa fa-user"></span>
                                                            </div>
                                                            <input type="text" name="email" id="email" class="form-control"
                                                                placeholder="Enter Delivery Contact Name" required="">
                                                        </div>
                                                        <div class="col-12 dropdown">
                                                            <div class="left-icon">
                                                                <span class="fa fa-envelope"></span>
                                                            </div>
                                                            <input type="text" name="email" id="email" class="form-control"
                                                                required="" placeholder="Enter Delivery Contact Email">
                                                        </div>
                                                        <div class="col-12 dropdown">
                                                            <div class="left-icon">
                                                                <span class="fa fa-phone"></span>
                                                            </div>
                                                            <input type="text" name="email" id="email" class="form-control"
                                                                required="" placeholder="Enter Delivery Contact Phone">

                                                        </div>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <button class="btn btn-secondary" type="button">SW17 0QT</button>
                                                                <div class="dropdown flex-grow-1">
                                                                    <div class="left-icon2">
                                                                        <i class="fa-regular fa-circle-up"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Enter Delivery Address">
                                                                    <div class="right-icon2">
                                                                        <button aria-label="Clear" class="close rbt-close"
                                                                            type="button">
                                                                            <span aria-hidden="true">×</span>
                                                                            <span class="sr-only visually-hidden">Clear</span>
                                                                        </button>
                                                                    </div>
                                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Another action</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Something else
                                                                                here</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                              </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <p>Choose working hours: <a href="http://" style="text-decoration: underline !important;">10:00 - 16:00</a></p>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" >
                                                                <label class="form-check-label">Delivery is flexible (-£1)</label>
                                                              </div>
                                                        </div>
                                                        <div class="col-12 ml-3">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" >
                                                                <label class="form-check-label" for="mySwitch">Delivery Note</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h3 class="finalize-title">Payment Details:</h3>
                                                    <div class="my-3">
                                                        <div class="w-100">
                                                            <input type="text" class="form-control" id="holder" name="holder" required="" placeholder="Holder Name*">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center mb-3" style="gap: 16px;">
                                                        <div class="w-100">
                                                            <input type="text" class="form-control" id="card" name="card" required="" placeholder="Card Number*">
                                                        </div>
                                                        <div class="w-auto">
                                                            <input type="text" class="form-control" id="cvc" name="cvc" required="" placeholder="CVC*">
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="align-items-baseline d-flex" style="gap: 30px;">
                                                            <label for="date" class="special-label w-100">Expiry Date*:</label>
                                                            <select name="month_1" id="month_1" class="form-control">
                                                                <option value="Month" disabled="" selected="">Month</option>
                                                                <option value="Feb">Feb</option>
                                                                <option value="Mar">Mar</option>
                                                                <option value="Apr">Apr</option>
                                                                <option value="May">May</option>
                                                            </select>
                                                            <select name="year_1" id="year_1" class="form-control">
                                                                <option value="Year" disabled="" selected="">Year</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2013">2013</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-button form-aliner text-center mt-4">
                                                        <button class="button button-icon button-primary">
                                                            <span class="button-content">Place Order</span>
                                                            <span class="button-icon"><svg width="98" height="103"
                                                                    viewBox="0 0 98 103" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M63.5 0H0V103H64L98 51L63.5 0Z"></path>
                                                                </svg>
                                                                <span class="fa fa-sign-out"></span></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Select Collection Time</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-center">
                <div id="knobcontainer"></div>
                <div class="d-flex justify-content-evenly">
                    <div class="graph-left"></div>
                    <div class="graph-right"></div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="social-icons">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Behance</a></li>
                        <li><a href="#">Linkedin</a></li>
                        <li><a href="#">Dribbble</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>Copyright 2020 Stand Blog Co.

                            | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>

    <!-- Additional Scripts -->

    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery.steps.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/main2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.7.0/d3.min.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/core.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/typeahead.jquery.js"></script>
    <script>
        var substringMatcher = function(strs) {
            return function findMatches(q, cb) {
                var matches, substringRegex;

                // an array that will be populated with substring matches
                matches = [];

                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');

                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                $.each(strs, function(i, str) {
                if (substrRegex.test(str)) {
                    matches.push(str);
                }
                });

                cb(matches);
            };
            };

            var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
            'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
            'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
            'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
            'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
            'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
            'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
            'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
            'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
            ];

            $('#coll-postalcode').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
            },
            {
            name: 'states',
            source: substringMatcher(states)
            });
    </script>
    <script>
      $("#knobcontainer").timerangewheel({
        indicatorWidth: 12,
        handleRadius: 15,
        handleStrokeWidth: 1,
        accentColor: '#2C3E50',
        handleIconColor: "#fff",
        handleStrokeColor: "#fff",
        handleFillColorStart: "#374149",
        handleFillColorEnd: "#374149",
        tickColor: "#8a9097",
        indicatorBackgroundColor: "#E74C3C",
        data: {"start":"00:00", "end":"12:00"},
        onChange: function (timeObj) {
        $(".graph-left").html("From: "+timeObj.start);
        $(".graph-right").html("To: "+timeObj.end);
        $(".graph-center").html("Duration: "+timeObj.duration);
        }
    });
  </script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        </script>
    <script>
       var stepper = new Stepper(document.querySelector('.bs-stepper'),{linear: false,}
);
    </script>
    <script language="text/Javascript">

        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }

    </script>

</body>

</html>
