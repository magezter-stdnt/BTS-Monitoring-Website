<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - BTS Admin</title>
    <link rel="icon" type="image/x-icon" href="image/BTS logo.png">
    <link rel="stylesheet" href="css/dbAdmin.css">
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
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <a href="/admin/pesan" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                        </li>
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </li> -->
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                     aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/admin/edit-profile">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><a class="dropdown-item" href="/">Home</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li id="logout">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">LogOut</button>
                            </form>
                        </li>
                        {{-- <li><a class="dropdown-item" href="#!">Logout</a></li> --}}
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Header Akhir -->


    <div id="layoutSidenav">
        <!-- Sidebar Awal -->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark bg-bts-3" id="sidenavAccordion" style="background-color: #52784F; border-bottom-right-radius: 20px;">
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
                        <a class="nav-link" href="/admin">
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
                                <a class="nav-link" href="/admin/edit-profile">Edit Profil</a>
                                <a class="nav-link" href="/admin/edit-config">Edit Config</a>
                                <a class="nav-link" href="/admin/edit-surveyor">Edit Surveyor</a>
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
                                <a class="nav-link" href="/admin/edit-bts">Edit Info BTS</a>
                                <a class="nav-link" href="/admin/edit-pemilik">Edit Pemilik BTS</a>
                                <a class="nav-link" href="/admin/edit-wilayah">Edit Wilayah BTS</a>
                                <a class="nav-link" href="/admin/list-survey">Edit Survey</a>
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
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard Admin</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-12 col-md-6">
                            <div class="card bg-bts-3 text-white mb-4">
                                <div class="card-body">
                                    <div>Jumlah Pesan Baru</div>
                                    <h3 class="text-white">4</h3>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/admin/pesan">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    <div>Jumlah Pengunjung</div>
                                    <h3 class="text-white">28</h3>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">
                                    <div>Jumlah Survey</div>
                                    <h3 class="text-white">5</h3>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/admin/list-survey">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-dark text-white mb-4">
                                <div class="card-body">
                                    <div>Jumlah BTS</div>
                                    <h3 class="text-white">12</h3>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/admin/edit-bts">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">
                                    <div>Jumlah Surveyor</div>
                                    <h3 class="text-white">4</h3>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/admin/edit-surveyor">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xl-2 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Edit Survey</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="editSurvey.html">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-pie me-1"></i>
                                    Plotting Jawaban Survey
                                    <!-- <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                        <a class="nav-link active" href="#">Active</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                        </li>
                                    </ul> -->
                                </div>
                                <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Alamat
                                </div>
                                <div class="card-body">
                                    <div class="mapouter">
                                        <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas"
                                                src="https://maps.google.com/maps?q=diskominfo%20surakarta&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                frameborder="0" scrolling="no" marginheight="0"
                                                marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
                                            <style>
                                                .mapouter {
                                                    position: relative;
                                                    text-align: right;
                                                    height: 15rem;
                                                    width: 100%;
                                                }

                                                .gmap_canvas {
                                                    overflow: hidden;
                                                    background: none !important;
                                                    height: 15rem;
                                                    width: 100%;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Date & Time
                                </div>
                                <div class="card-body">
                                    <div id="clock" style="height: 15rem; text-align: center;">
                                        <h1 id="date-time"></h1>
                                        <div id="clockContainer">
                                            <div id="hour"></div>
                                            <div id="minute"></div>
                                            <div id="second"></div>
                                        </div>
                                    </div>
                                    <style>
                                        #clockContainer {
                                            position: relative;
                                            margin: auto;
                                            height: 10rem;
                                            width: 10rem;
                                            background: url(image/clock.png) no-repeat;
                                            background-size: 100%;
                                        }

                                        #hour,
                                        #minute,
                                        #second {
                                            position: absolute;
                                            background: black;
                                            border-radius: 10px;
                                            transform-origin: bottom;
                                        }

                                        #hour {
                                            width: 1.8%;
                                            height: 25%;
                                            top: 25%;
                                            left: 48.85%;
                                            opacity: 0.8;
                                        }

                                        #minute {
                                            width: 1.6%;
                                            height: 30%;
                                            top: 19%;
                                            left: 48.9%;
                                            opacity: 0.8;
                                        }

                                        #second {
                                            width: 1%;
                                            height: 40%;
                                            top: 9%;
                                            left: 49.25%;
                                            opacity: 0.8;
                                        }
                                    </style>
                                </div>
                            </div>
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="script/chartAdmin.js"></script>

    <script>

        // window.addEventListener('DOMContentLoaded', event => {

        // const sidebarToggle = document.body.querySelector('#sidebarToggle');
        // if (sidebarToggle) {
        //     sidebarToggle.addEventListener('click', event => {
        //         event.preventDefault();
        //         document.body.classList.toggle('sb-sidenav-toggled');
        //         localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        //     });
        // }

        // const datatablesSimple = document.getElementById('datatablesSimple');
        // if (datatablesSimple) {
        //     new simpleDatatables.DataTable(datatablesSimple);
        // }
        // });




        window.addEventListener("load", () => {
            clock();
            function clock() {
                const today = new Date();

                // get time components
                const hours = today.getHours();
                const minutes = today.getMinutes();
                const seconds = today.getSeconds();

                //add '0' to hour, minute & second when they are less 10
                const hour = hours < 10 ? "0" + hours : hours;
                const minute = minutes < 10 ? "0" + minutes : minutes;
                const second = seconds < 10 ? "0" + seconds : seconds;

                //make clock a 12-hour time clock
                const hourTime = hour > 12 ? hour - 12 : hour;

                // if (hour === 0) {
                //   hour = 12;
                // }
                //assigning 'am' or 'pm' to indicate time of the day
                const ampm = hour < 12 ? "AM" : "PM";

                // get date components
                const month = today.getMonth();
                const year = today.getFullYear();
                const day = today.getDate();

                //declaring a list of all months in  a year
                const monthList = [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December"
                ];

                //get current date and time
                const date = monthList[month] + " " + day + ", " + year;
                const time = hourTime + ":" + minute + ":" + second + ampm;

                //combine current date and time
                const dateTime = date + " - " + time;

                //print current date and time to the DOM
                document.getElementById("date-time").innerHTML = dateTime;
                setTimeout(clock, 1000);
            }
        });

        setInterval(() => {
            d = new Date();
            htime = d.getHours();
            mtime = d.getMinutes();
            stime = d.getSeconds();
            hrotation = 30 * htime + mtime / 2;
            mrotation = 6 * mtime;
            srotation = 6 * stime;

            hour.style.transform = `rotate(${hrotation}deg)`;
            minute.style.transform = `rotate(${mrotation}deg)`;
            second.style.transform = `rotate(${srotation}deg)`;
        }, 1000);
    </script>
</body>

</html>

