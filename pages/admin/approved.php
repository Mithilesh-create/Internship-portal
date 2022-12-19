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
        <p>Approved Applications</p>
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
                    <th scope="col">Approved On</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Download</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-light">
                    <th class="pt-3" scope="row">
                        14
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
                    <td class="pt-3 ">
                        18/10/2022
                    </td>
                    <td class="pt-3 ">
                        Please collect the approval letter from office
                    </td>
                    <td class="py-3 ">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="../../components/internshipLetter/index.php" target="_blank" class="btn btn-primary" role="button"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-download"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg></a>
                        </div>

                    </td>
                </tr>
                <tr class="table-light">
                    <th class="pt-3" scope="row">
                        14
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
                    <td class="pt-3 ">
                        18/10/2022
                    </td>
                    <td class="pt-3 ">
                        Please collect the approval letter from office
                    </td>
                    <td class="py-3 ">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="../../components/internshipLetter/index.php" class="btn btn-primary" role="button"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-download"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg></a>
                        </div>

                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>