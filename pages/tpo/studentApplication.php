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
                    <th scope="col">Mail</th>
                    <!-- <th scope="col">Download</th> -->
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
                    <td class="pt-3 text-center ">
                        <div class="d-flex justify-content-center align-items-center">

                            <button class="btn btn-warning" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg>
                            </button>
                        </div>
                        <!-- <button class="btn btn-success" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path
                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg></button> -->
                    </td>
                    <!-- <td class="py-3 ">
                        <div class="d-flex justify-content-center align-items-center">
                            <button class="btn btn-primary" role="button"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-download"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg></button>
                        </div>

                    </td> -->
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
                    <td class="pt-3 text-center ">
                        <div class="d-flex justify-content-center align-items-center">
                            <button class="btn btn-success" disabled role="button"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-envelope-check" viewBox="0 0 16 16">
                                    <path
                                        d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                    <path
                                        d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                                </svg></button>
                        </div>
                    </td>
                    <!-- <td class="py-3 ">
                        <div class="d-flex justify-content-center align-items-center">
                            <button disabled class="btn btn-primary" role="button"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg></button>
                        </div>

                    </td> -->
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>