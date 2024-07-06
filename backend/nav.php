<!-- <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark"> -->
    <!-- Navbar Brand-->
    <!-- <a class="navbar-brand ps-3" href="pages/dashboard.html">Ekem's Creative</a>-->
    <!-- Sidebar Toggle-->
    <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" type="button" id="sidebarToggle"><i class="fas fa-bars"></i></button> -->
    <!-- Navbar Search-->
    <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form> -->
    <!-- Navbar-->
    <!-- <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        </li>
    </ul>
</nav> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="pages/dashboard.html">Ekem's Creative</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" type="button" id="sidebarToggle"><i class="fas fa-bars"></i></button>
    <!-- Countdown Timers -->
    <div class="navbar-text ms-4 me-4" style="color: aliceblue;">
        <span id="domainCountdown"></span> |
        <span id="hostingCountdown"></span>
    </div>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        </li>
    </ul>
</nav>

<script>
    // Set the purchase date
    var purchaseDate = new Date("June 1, 2024");

    // Calculate expiration dates (assuming 1 year validity)
    var domainExpirationDate = new Date(purchaseDate);
    domainExpirationDate.setFullYear(domainExpirationDate.getFullYear() + 1);

    var hostingExpirationDate = new Date(purchaseDate);
    hostingExpirationDate.setFullYear(hostingExpirationDate.getFullYear() + 1);

    // Update the countdown every second
    setInterval(function() {
        var now = new Date().getTime();

        // Calculate time left for domain
        var timeLeftDomain = domainExpirationDate - now;
        var daysLeftDomain = Math.floor(timeLeftDomain / (1000 * 60 * 60 * 24));
        var hoursLeftDomain = Math.floor((timeLeftDomain % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutesLeftDomain = Math.floor((timeLeftDomain % (1000 * 60 * 60)) / (1000 * 60));
        var secondsLeftDomain = Math.floor((timeLeftDomain % (1000 * 60)) / 1000);

        // Display the result for domain
        document.getElementById("domainCountdown").innerHTML = "Nom de domaine expire dans: " + daysLeftDomain + "j " + hoursLeftDomain + "h " + minutesLeftDomain + "m " + secondsLeftDomain + "s ";

        // Calculate time left for hosting
        var timeLeftHosting = hostingExpirationDate - now;
        var daysLeftHosting = Math.floor(timeLeftHosting / (1000 * 60 * 60 * 24));
        var hoursLeftHosting = Math.floor((timeLeftHosting % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutesLeftHosting = Math.floor((timeLeftHosting % (1000 * 60 * 60)) / (1000 * 60));
        var secondsLeftHosting = Math.floor((timeLeftHosting % (1000 * 60)) / 1000);

        // Display the result for hosting
        document.getElementById("hostingCountdown").innerHTML = "Hébergement expire dans: " + daysLeftHosting + "j " + hoursLeftHosting + "h " + minutesLeftHosting + "m " + secondsLeftHosting + "s ";
    }, 1000);
</script>
