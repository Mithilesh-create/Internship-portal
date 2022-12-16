<?php
$title = "Dashboard";
$style = "./styles/pending.css";
include_once("../../components/head.php");
?>

<body>
    <?php
    include_once("../../components/navbar/index.php");
    ?>
    <div class="container my-2 greet">
        <p>Pending Applications</p>
    </div>
    <div class="container mt-5 table-responsive-sm">
        <table class="table table-bordered table-dark table-sm">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Company</th>
                    <th scope="col">Applied On</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Class</th>
                    <th scope="col">Mail</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-light">
                    <th class="pt-3 text-danger" scope="row">
                        <a href="./decision.php">
                            14
                        </a>
                    </th>
                    <td class="pt-3">
                        Mark Industries pvt. ltd
                    </td>
                    <td class="pt-3">
                        18/10/2022
                    </td>
                    <td class="pt-3">
                        18/10/2022
                    </td>
                    <td class="pt-3">
                        18/10/2022
                    </td>
                    <td class="pt-3">
                        WFH
                    </td>
                    <td class="pt-3">
                        SE-ECS
                    </td>
                    <td class="pt-3">
                        Sent
                    </td>


                </tr>
                <tr class="table-light">
                    <th class="pt-3 text-danger" scope="row">
                        <a href="./decision.php">
                            14
                        </a>
                    </th>
                    <td class="pt-3">
                        Mark Industries pvt. ltd
                    </td>
                    <td class="pt-3">
                        18/10/2022
                    </td>
                    <td class="pt-3">
                        18/10/2022
                    </td>
                    <td class="pt-3">
                        18/10/2022
                    </td>
                    <td class="pt-3">
                        WFH
                    </td>
                    <td class="pt-3">
                        SE-ECS
                    </td>
                    <td class="pt-3">
                        Sent
                    </td>

                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>