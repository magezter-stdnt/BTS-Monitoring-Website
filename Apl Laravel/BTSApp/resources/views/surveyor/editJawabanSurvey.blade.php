<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Survey - BTS Surveyor</title>
    <link rel="icon" type="image/x-icon" href="image/BTS logo.png">
    <link rel="stylesheet" href="css/dbAdmin.css">
    <link rel="stylesheet" href="css/inputSurvey.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header Awal -->
    <header>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-bts-1">
            <a class="navbar-brand ps-3 d-flex bg-bts-3" href="#" style="padding-bottom:18px; border-top-right-radius: 40px; justify-content: center;">
                <img src="image/BTS logo3.png" id="logo" alt="logo" style="margin-left: -25px; margin-top:18px; width: 100px;">
            </a>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Header Akhir -->


    <div id="layoutSidenav">
        <!-- Sidebar Awal -->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: #52784F; border-bottom-right-radius: 20px;">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">
                            <div class="d-flex sb-nav-link-icon">
                                <img src="./image/pp.png" style="width:50px; margin-right: 10px;">
                                <div class="d-flex flex-column">
                                    <small class="font-weight-normal" style="color:#F4D2EB; font-weight:lighter">Welcome</small>
                                    <p >{{ auth()->user()->name }}</p>

                                </div>
                            </div>
                        </div>

                        <div class="sb-sidenav-menu-heading">General</div>
                        <a class="nav-link" href="dashboardSurveyor.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Master Data</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Data Akun
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="editProfileSurveyor.html">Edit Profil</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Data BTS
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="listBTSInfo.html">BTS info</a>
                                <a class="nav-link" href="surveyList.html">Survey</a>
                                <a class="nav-link" href="monitoringSurveyor.html">Monitoring</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar Akhir -->

        <div id="layoutSidenav_content">
            <!-- Main Awal -->
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Edit Jawaban Survey</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">List Survey</li>
                        <li class="breadcrumb-item active">Survey ID #005</li>
                    </ol>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">silakan jawab pertanyaan di bawah ini dengan sebenar-benarnya:</li>
                    </ol>
                    <div class="col">
                        <div id="survey-answers">
                            <!-- Card -->
                            <form class="mx-0 mx-sm-auto card">
                                <div class="text-center card-header">
                                    <strong>Bagaimana kondisi BTS yang Anda monitoring?</strong>
                                </div>

                                <div class="text-center mb-3 card-body">
                                    <div class="d-inline mx-3">
                                        Buruk
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1-1"
                                        value="option1" checked="checked" />
                                        <label class="form-check-label" for="inlineRadio1-1">1</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1-2"
                                        value="option2" />
                                        <label class="form-check-label" for="inlineRadio1-2">2</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1-3"
                                        value="option3" />
                                        <label class="form-check-label" for="inlineRadio1-3">3</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1-4"
                                        value="option4" />
                                        <label class="form-check-label" for="inlineRadio1-4">4</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1-5"
                                        value="option5" />
                                        <label class="form-check-label" for="inlineRadio1-5">5</label>
                                    </div>

                                    <div class="d-inline me-4">
                                        Baik
                                    </div>
                                </div>
                            </form>

                            <!-- Card -->
                            <form class="mx-0 mx-sm-auto card mt-2">
                                <div class="text-center card-header">
                                    <strong>Bagaimana keadaan jalan di sekitar daerah BTS ?</strong>
                                </div>

                                <div class="text-center mb-3 card-body">
                                    <div class="d-inline mx-3">
                                        Buruk
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2-1"
                                        value="option1" />
                                        <label class="form-check-label" for="inlineRadio2-1">1</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2-2"
                                        value="option2" />
                                        <label class="form-check-label" for="inlineRadio2-2">2</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2-3"
                                        value="option3" checked="checked" />
                                        <label class="form-check-label" for="inlineRadio2-3">3</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2-4"
                                        value="option4" />
                                        <label class="form-check-label" for="inlineRadio2-4">4</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2-5"
                                        value="option5" />
                                        <label class="form-check-label" for="inlineRadio2-5">5</label>
                                    </div>

                                    <div class="d-inline me-4">
                                        Baik
                                    </div>
                                </div>
                            </form>

                            <!-- Card -->
                            <form class="mx-0 mx-sm-auto card mt-2">
                                <div class="text-center card-header">
                                    <strong>Bagaimana keadaan kabel di sekitar daerah BTS ?</strong>
                                </div>

                                <div class="text-center mb-3 card-body">
                                    <div class="d-inline mx-3">
                                        Buruk
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3-1"
                                        value="option1" />
                                        <label class="form-check-label" for="inlineRadio3-1">1</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3-2"
                                        value="option2" />
                                        <label class="form-check-label" for="inlineRadio3-2">2</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3-3"
                                        value="option3" />
                                        <label class="form-check-label" for="inlineRadio3-3">3</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3-4"
                                        value="option4" />
                                        <label class="form-check-label" for="inlineRadio3-4">4</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3-5"
                                        value="option5" checked="checked" />
                                        <label class="form-check-label" for="inlineRadio3-5">5</label>
                                    </div>

                                    <div class="d-inline me-4">
                                        Baik
                                    </div>
                                </div>
                            </form>

                            <!-- Card -->
                            <form class="mx-0 mx-sm-auto card mt-2">
                                <div class="text-center card-header">
                                    <strong>Bagaimana keadaan Anda di sekitar daerah BTS ?</strong>
                                </div>

                                <div class="text-center mb-3 card-body">
                                    <div class="d-inline mx-3">
                                        Buruk
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4-1"
                                        value="option1" />
                                        <label class="form-check-label" for="inlineRadio4-1">1</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4-2"
                                        value="option2" checked="checked" />
                                        <label class="form-check-label" for="inlineRadio4-2">2</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4-3"
                                        value="option3" />
                                        <label class="form-check-label" for="inlineRadio4-3">3</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4-4"
                                        value="option4" />
                                        <label class="form-check-label" for="inlineRadio4-4">4</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4-5"
                                        value="option5" />
                                        <label class="form-check-label" for="inlineRadio4-5">5</label>
                                    </div>

                                    <div class="d-inline me-4">
                                        Baik
                                    </div>
                                </div>
                            </form>

                            <div class="text-center">
                                <button type="button" class="btn btn-success m-3" onclick="">Edit Jawaban</button>
                            </div>
                        </div>
                    </div>
            </main>
            <!-- Main Akhir -->

            <!-- Footer Awal -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Diskominfo BTS Surakarta 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Awal -->
        </div>
    </div>
</body>

</html>
