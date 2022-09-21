<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?= isset($title) ? $title : 'Real-Estate' ?> </title>

    <!-- Google font -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet" /> -->

    <!-- Font awesome and Icon fonts stylesheet-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" /> -->

    <!-- Bootstrap 5 stylesheet -->
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- CSS stylesheet -->
    <!-- <link rel="stylesheet" href="../css/style.css" /> -->

    <!-- Libraries Stylesheets -->
    <!-- <link rel="stylesheet" href="../libraries/animate/animate.min.css" /> -->
    <!-- <link rel="stylesheet" href="../libraries/owlcarousel/assets/owl.carousel.min.css" /> -->
</head>

<body>
    <div class="container-xxl p-0">

    <!-- display the including file -->
    <?= $content ?>
    
    </div>

    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./libraries/wow/wow.min.js"></script>
    <script src="./libraries/easing/easing.min.js"></script>
    <script src="./libraries/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./libraries/owlcarousel/owl.carousel.min.js"></script> -->

    <!-- Javascript -->
    <!-- <script src="./js/main.js"></script> -->
</body>

</html>