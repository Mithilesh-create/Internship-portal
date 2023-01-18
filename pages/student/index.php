<?php
$title = "Dashboard";
$style = "./styles/global.css";
$favicon = "../../assets/favicon.ico";
include_once("../../components/head.php");
?>
<?php
require './auth.php';
// if (!isset($_SESSION['login_id'])) {
//     $location = "../login/index.php";
//     header('Location: ' . $location);
//     exit;
// }
// $id = $_SESSION['student_auth_id'];

// $get_user = mysqli_query($db_connection, "SELECT * FROM `Users` WHERE `google_id`='$id'");

// if (mysqli_num_rows($get_user) > 0) {
//     $user = mysqli_fetch_assoc($get_user);
// }
// else{
//     header('Location: logout.php');
//     exit;
// }
?>

<body>
    <?php
    include_once("../../components/navbar/index.php");
    ?>
    <div class="container my-2 greet">
        <p>Welcome , <?php echo $user['name']; ?></p>
    </div>
    <div class="container text-center">
        <div class="row mx-auto">
            <div class="col mt-3">
                <a href="./new.php" class="btn btn-primary btn-lg col-md-12 p-sm-4" role="button">New
                    Application</a>
            </div>
            <div class="col my-3">
                <a href="./previous.php" class="btn btn-warning btn-lg col-md-12 p-sm-4" role="button">Previous
                    Applications</a>
            </div>
        </div>
    </div>

    <?php
    include_once("../../components/announcement/index.php");
    ?>

</body>

</html>