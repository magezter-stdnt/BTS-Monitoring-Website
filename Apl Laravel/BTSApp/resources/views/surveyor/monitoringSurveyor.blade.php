<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring - BTS Surveyor</title>
    <link rel="icon" type="image/x-icon" href="image/BTS logo.png">
    <link rel="stylesheet" href="css/dbAdmin.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                        <li><a class="dropdown-item" href="editProfileSurveyor.html">Settings</a></li>
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
                    <h1 class="mt-4">List Monitoring</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">daftar monitoring yang telah dilakukan:</li>
                    </ol>
                    <div class="table-wrapper">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID Monitoring</th>
                                    <th>Kondisi BTS</th>
                                    <th>Tahun Monitoring</th>
                                    <th>Waktu Kunjungan</th>
                                    <th>ID BTS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Baik</td>
                                    <td>2021</td>
                                    <td>2021-11-17 21:23:44</td>
                                    <td>003</td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Baik</td>
                                    <td>2022</td>
                                    <td>2022-09-02 11:23:23</td>
                                    <td>004</td>
                                </tr>
                            </tbody>
                        </table>
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
            <!-- Footer Akhir -->
        </div>
    </div>
</body>
</html>
