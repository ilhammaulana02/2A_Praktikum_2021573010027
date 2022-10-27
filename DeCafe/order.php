<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <?php
    include("navbar.php");
    ?>
    <!-- End Navbar -->

    <!-- Container Sidebar & Content -->
    <div class="container" style="height: 3000px;">
        <div class="row mt-3">
            <!-- Sidebar -->
            <div class="col-3">
                <?php
                include("sidebar.php");
                ?>
            </div>
            <!-- End Sidebar -->

            <!-- Content -->
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        Order
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>
        <!-- End Container Sidebar & Content -->

        <!-- Footer -->
        <div class="container-fluid fixed-bottom">
            <div class="card text-center border-0">
                (C) Copyright 2022 Ilham Maulana - Teknik Informatika
            </div>
        </div>
        <!-- End Footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </div>
</body>

</html>