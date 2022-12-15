<?php
$title = "Dashboard";
$style = "./index.css";
include_once("../../components/head.php");
?>

<body>
    <?php
    include_once("../../components/navbar/index.php");
    ?>

    <div class="container text-center">
        <div class="row mx-auto">
            <div class="col my-3">
                <a href="./studentApplication.php" class="btn btn-primary btn-lg col-md-12 p-sm-4" role="button">Student
                    Applications</a>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row mx-auto">
            <div class="col mt-3">
                <a href="./new/index.php" class="btn btn-success btn-lg col-md-12 p-sm-4" role="button">Approved
                    Applications</a>
            </div>
            <div class="col my-3">
                <a href="./previous/index.php" class="btn btn-warning btn-lg col-md-12 p-sm-4" role="button">Rejected
                    Applications</a>
            </div>
        </div>
    </div>



</body>

</html>