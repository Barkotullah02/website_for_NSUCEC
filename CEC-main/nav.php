<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include "db_connection.php";
    echo'
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/ceclogo.png" alt="CEC Logo" height="50"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="introduction.php">EB-PANEL</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Members
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="members.php?m_type=1">Probationary Members</a></li>
                            <li><a class="dropdown-item" href="members.php?m_type=2">General Members</a></li>
                            <li><a class="dropdown-item" href="members.php?m_type=3">Senior Members</a></li>
                            <li><a class="dropdown-item" href="members.php?m_type=4">Incharges</a></li>
                            <li><a class="dropdown-item" href="members.php?m_type=5">Sub-Executive Panel</a></li>
                            <li><a class="dropdown-item" href="members.php?m_type=6">Executive Panel</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="member_login.php">MEMBER LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    ';
    ?>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qW5hY1u5aRU2F1lWVGR2RjJK6nPgiT0p5cqFsgMtP4n7AR5n1cZ7e85lI93l4vdp" crossorigin="anonymous"></script>
</body>
</html>
