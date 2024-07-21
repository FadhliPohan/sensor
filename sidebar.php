<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="assets_moderen/css/styles.css" />

    <title>Sensor Amoniac</title>
</head>

<body>

    <div class="preloader">
        <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <aside class="left-sidebar with-vertical">
            <div>
                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="../main/index.html" class="text-nowrap logo-img">
                        <img src="../assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
                        <img src="../assets/images/logos/light-logo.svg" class="light-logo" alt="Logo-light" />
                    </a>
                    <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                        <i class="ti ti-x"></i>
                    </a>
                </div>


                <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                    <ul id="sidebarnav">
                        <!-- ---------------------------------- -->
                        <!-- Home -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="home.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="monitoring.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">Monitoring</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="perhitungan.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">Rule Based Combination</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="perhitungan_segitiga.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">Rule Based Triangle</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="hasilnya.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">Data Results</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="laporan.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">Report</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="laporan.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">Report</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="grafik_penyiraman.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="data_user.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">User Data</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="logout.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">Logout</span>
                            </a>
                        </li>

                    </ul>
                </nav>

                <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded sidebar-ad mt-3">
                    <div class="hstack gap-3">
                        <div class="john-img">
                            <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="" />
                        </div>
                        <div class="john-title">
                            <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                            <span class="fs-2">Designer</span>
                        </div>
                        <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                            <i class="ti ti-power fs-6"></i>
                        </button>
                    </div>
                </div>

                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
            </div>
        </aside>
        <!--  Sidebar End -->
        <div class="page-wrapper">
            <!--  Header Start -->
            <header class="topbar">
                <div class="with-vertical">
                    <!-- ---------------------------------- -->
                    <!-- Start Vertical Layout Header -->
                    <!-- ---------------------------------- -->
                    <nav class="navbar navbar-expand-lg p-0">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>
                            <li class="nav-item d-none d-lg-block">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="ti ti-search"></i>
                                </a>
                            </li>
                        </ul>



                        <div class="d-block d-lg-none">
                            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
                        </div>
                        <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="p-2">
                                <i class="ti ti-dots fs-7"></i>
                            </span>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                                    <i class="ti ti-align-justified fs-7"></i>
                                </a>
                                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">

                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="user-profile-img">
                                                    <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                            <div class="profile-dropdown position-relative" data-simplebar>
                                                <div class="py-3 px-7 pb-0">
                                                    <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                                </div>
                                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                                    <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="80" height="80" alt="" />
                                                    <div class="ms-3">
                                                        <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                                                        <span class="mb-1 d-block">Designer</span>
                                                        <p class="mb-0 d-flex align-items-center gap-2">
                                                            <i class="ti ti-mail fs-4"></i> info@modernize.com
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-body">
                                                    <a href="../main/page-user-profile.html" class="py-8 px-7 mt-8 d-flex align-items-center">
                                                        <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                            <img src="../assets/images/svgs/icon-account.svg" alt="" width="24" height="24" />
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                                            <span class="fs-2 d-block text-body-secondary">Account Settings</span>
                                                        </div>
                                                    </a>
                                                    <a href="../main/app-email.html" class="py-8 px-7 d-flex align-items-center">
                                                        <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                            <img src="../assets/images/svgs/icon-inbox.svg" alt="" width="24" height="24" />
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
                                                            <span class="fs-2 d-block text-body-secondary">Messages & Emails</span>
                                                        </div>
                                                    </a>
                                                    <a href="../main/app-notes.html" class="py-8 px-7 d-flex align-items-center">
                                                        <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                            <img src="../assets/images/svgs/icon-tasks.svg" alt="" width="24" height="24" />
                                                        </span>
                                                        <div class="w-75 d-inline-block v-middle ps-3">
                                                            <h6 class="mb-1 fs-3 fw-semibold lh-base">My Task</h6>
                                                            <span class="fs-2 d-block text-body-secondary">To-do and Daily Tasks</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="d-grid py-4 px-7 pt-8">
                                                    <div class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5 class="fs-4 mb-3 w-50 fw-semibold">Unlimited Access</h5>
                                                                <button class="btn btn-primary">Upgrade</button>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="m-n4 unlimited-img">
                                                                    <img src="../assets/images/backgrounds/unlimited-bg.png" alt="" class="w-100" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="../main/authentication-login.html" class="btn btn-outline-primary">Log Out</a>
                                                </div>
                                            </div>

                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </nav>


                </div>

            </header>
            <!--  Header End -->

            <div class="body-wrapper">
                <div class="container-fluid">


                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">


                                <div class="col-md-10">
                                    <table bordercolor="#0C1015" bgcolor="#9900FF" class="table table-bordered" style="background-color:white">
                                        <tr>
                                            <td bgcolor="#9966CC">TEMPERATURE (CELCIUS)</td>
                                            <td bgcolor="#9966CC">SOIL MOISTURE (%)</td>
                                            <td bgcolor="#9966CC">HUMIDITY (%)</td>
                                            <td bgcolor="#9966CC">INTENSITAS (LUX)</td>

                                        </tr>
                                        <tr>
                                            <?php
                                            $sql = "SELECT * from tbl_hasil_menit ORDER BY id_hasil DESC LIMIT 0,1";
                                            $data = mysqli_query($konek, $sql);
                                            while ($row = mysqli_fetch_array($data)) {
                                                $nilai = $row['nilai'];
                                                echo "
                                <td>" . $row['suhu'] . "</td>
                                <td>" . $row['sm'] . "</td>
                                <td>" . $row['humidity'] . "</td>
                                <td>" . $row['li'] . "</td>
                                
                                ";
                                            }

                                            ?>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#9966CC">
                                                <button id="start">start</button></td>
                                            <td colspan="2" bgcolor="#9966CC" style="text-align:center">
                                                <h1><time>00:00:00</time></h1>
                                                <h3 class="style1"> DURATION DRIP IRIGASI <?php echo $nilai; ?>
                                                    SECONDS</h3>
                                            </td>
                                            <td bgcolor="#9966CC" id="lampu"></td>
                                        </tr>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>



                </div>
            </div>


</body>
<script>
    document.getElementById("lampu").style.backgroundColor = "red";
    var h1 = document.getElementsByTagName('h1')[0],
        start = document.getElementById('start'),
        stop = document.getElementById('stop'),
        clear = document.getElementById('clear'),

        seconds = <?php echo $nilai; ?>,
        minutes = 0,
        hours = 0,
        t;

    function add() {
        seconds--;
        if (seconds == 0) {
            seconds = 60;
            minutes--;
            if (minutes == 0) {
                minutes = 60;
                hours--;
            }
        }

        h1.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 0 ? seconds : "0" + seconds);

        timer();
    }

    function timer() {
        document.getElementById("lampu").style.backgroundColor = "green";
        t = setTimeout(add, 200);
        if (seconds == 1) {
            clearTimeout(t);
            document.getElementById("lampu").style.backgroundColor = "red";
            alert("Penyiraman Selesai Dilakukan");
            location.reload();
        } else {

        }
    }
    //timer();


    /* Start button */
    start.onclick = timer;



    /* Stop button */
    stop.onclick = function() {
        clearTimeout(t);

    }

    /* Clear button */
    clear.onclick = function() {
        h1.textContent = "00:00:00";
        seconds = 0;
        minutes = 0;
        hours = 0;
    }
</script>
<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>


</html>