<?php
$title = "Dashboard";
$style = "./styles/global.css";
$favicon = "../../assets/favicon.ico";
include_once("../../components/head.php");
?>

<body>
    <?php
    include_once("../../components/navbar/index.php");
    ?>
    <div class="container my-2 greet">
        <p>Student Applications</p>
        <div class="col-md-8">

            <div class="search">
            <i class="fa fa-search"></i>
            <input type="text" class="form-control" placeholder="Search Bar">
            <button class="btn btn-primary">Search</button>
            </div>
        
        </div>
    </div>
    <div class="container mt-5 table-responsive-sm">
        <table class="table table-bordered table-dark table-sm">
            <thead class="thead-light text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Company</th>
                    <th scope="col">Applied On</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Class</th>
                </tr>
            </thead>
            <tbody >
                <tr class="table-light">
                    <th class="pt-3 text-danger text-center" scope="row">
                        <a href="./decision.php">
                            14
                        </a>
                    </th>
                    <td class="pt-3">
                        Mark Industries pvt. ltd
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        WFH
                    </td>
                    <td class="pt-3 text-center">
                        SE-ECS
                    </td>
                    
                </tr>
                <tr class="table-light">
                    <th class="pt-3 text-center text-danger" scope="row">
                        <a href="./decision.php">
                            14
                        </a>
                    </th>
                    <td class="pt-3">
                        Mark Industries pvt. ltd
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        WFH
                    </td>
                    <td class="pt-3 text-center">
                        SE-ECS
                    </td>
                    
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>