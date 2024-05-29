<div class="navDesktop">
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container-fluid py-1 p-md-0 px-md-2">
            <a class="navbar-brand mx-3 text-white" href="#"><span style="color: var(--yellow)"><b>CDE Group</b></span></a>
            <button class="navbar-toggler mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: transparent !important;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-0 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link text-white homeNavbar homeNavbar1" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo '<li class="nav-item mx-3">
                                    <a class="nav-link text-white ticketsNavbar ticketsNavbar1" aria-current="page" href="tickets.php">TICKETS</a>
                                    </li>
                                    <li class="nav-item mx-3">
                                    <a class="nav-link text-white historyNavbar historyNavbar1" aria-current="page" href="history.php">HISTORY</a>
                                    </li>';
                    }
                    ?>
                </ul>
                <?php
                if (!isset($_SESSION['user'])) {
                    echo '<ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item mx-3 mx-lg-0 me-lg-3">
                            <a class="nav-link text-white" aria-current="page" href="login.php"><i class="fa-solid fa-user fa-md logo-user" style="color: var(--cream);"></i> <b> JOIN US NOW!</b></a>
                        </li>
                    </ul>';
                } else {
                    echo '<ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item mx-3 mx-lg-0 me-lg-3">
                            <a class="nav-link text-white" aria-current="page" href="#" id="logout-link"><i class="fa-solid fa-right-from-bracket fa-md logo-user" style="color: var(--cream);"></i> <b> LOG OUT</b></a>
                        </li>
                    </ul>';
                }
                ?>
            </div>
        </div>
    </nav>
</div>

<div class="navMobile">
    <div class="navbar"></div>
    <div class="logo_container">
        <a href="" style="text-decoration: none;">
            <span style="color: var(--yellow);"><b>CDE Group</b></span>
        </a>
    </div>

    <?php
    if (!isset($_SESSION['user'])) {
        echo '<a href="login.php"><i class="fa-solid fa-user fa-lg logo-user" style="color: var(--cream);"></i></a>';
    } else {
        echo '<a href="#" id="logout-link-mobile"><i class="fa-solid fa-right-from-bracket fa-lg logo-user" style="color: var(--cream);"></i></a>';
    }
    ?>

    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
        <div class="spinner diagonal part-1"></div>
        <div class="spinner horizontal"></div>
        <div class="spinner diagonal part-2"></div>
    </label>
    <div id="sidebarMenu">
        <ul class="sidebarMenuInner p-3 d-flex flex-column justify-content-center font4">
            <a href="index.php">
                <li class="p-2 mb-5">
                    <h1 class="homeNavbar homeNavbar2">HOME</h1>
                </li>
            </a>
            <?php if (isset($_SESSION['user'])) {
                echo '<a href="tickets.php" class="ticketsNavbar">
     <li class="p-2 mb-5">
         <h1>TICKETS</h1>
     </li>
    </a>
    <a href="history.php" class="historyNavbar">
     <li class="p-2 mb-5">
         <h1>HISTORY</h1>
     </li>
    </a>';
            } ?>
        </ul>
    </div>
</div>

<script>
    window.addEventListener("resize", function() {
        var windowWidth = window.innerWidth;

        var navDesktop = document.querySelector(".navDesktop");
        var navMobile = document.querySelector(".navMobile");

        if (windowWidth <= 991) {
            navDesktop.style.display = "none";
            navMobile.style.display = "flex";
        } else {
            navMobile.style.display = "none";
            navDesktop.style.display = "flex";
        }
    });

    window.dispatchEvent(new Event("resize"));

    window.addEventListener("load", function() {
        var windowWidth = window.innerWidth;

        var navDesktop = document.querySelector(".navDesktop");
        var navMobile = document.querySelector(".navMobile");

        if (windowWidth <= 991) {
            navDesktop.style.display = "none";
            navMobile.style.display = "flex";
        } else {
            navMobile.style.display = "none";
            navDesktop.style.display = "flex";
        }
    });

    document.getElementById('logout-link').addEventListener('click', function(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to log out?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, log out!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'logout.php';
            }
        });
    });

    document.getElementById('logout-link-mobile').addEventListener('click', function(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to log out?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, log out!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'logout.php';
            }
        });
    });
</script>

<script>
    // document.addEventListener("DOMContentLoaded", function() {
    //     var prevScrollpos = window.pageYOffset;
    //     window.onscroll = function() {
    //         var currentScrollPos = window.pageYOffset;
    //         if (prevScrollpos > currentScrollPos) {
    //             document.getElementById("navbar").style.top = "0";
    //         } else {
    //             document.getElementById("navbar").style.top = "-55px";
    //         }
    //         prevScrollpos = currentScrollPos;
    //     }
    // });
</script>