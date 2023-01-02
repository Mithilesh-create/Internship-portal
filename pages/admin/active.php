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
        <p>Active Student Persuing Internships</p>
        <!-- Search Button -->
        <form class="row g-3">
            <div class="col-auto">
                <input class="form-control" id="search" placeholder="ID or Company Name">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Search</button>
            </div>
        </form>
    </div>
    <div class="container mt-2 table-responsive-sm">
        <table class="table table-bordered table-dark table-sm">
            <thead class="thead-light text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Company</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Year</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Activity</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-light">
                    <th class="pt-3 text-center" scope="row">
                        14
                    </th>
                    <td class="pt-3">
                        Mark Industries pvt. ltd
                    </td>
                    <td class="pt-3 text-center">
                        Mithilesh Sharma
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        SE
                    </td>
                    <td class="pt-3 text-center">
                        ECS
                    </td>

                    <td class="py-3 ">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="#" class="btn btn-danger" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg></a>
                        </div>

                    </td>
                </tr>
                <tr class="table-light">
                    <th class="pt-3 text-center" scope="row">
                        14
                    </th>
                    <td class="pt-3">
                        Mark Industries pvt. ltd
                    </td>
                    <td class="pt-3 text-center">
                        Mithilesh Sharma
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        SE
                    </td>
                    <td class="pt-3 text-center">
                        ECS
                    </td>

                    <td class="py-3 ">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="#" class="btn btn-danger" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg></a>
                        </div>

                    </td>
                </tr>
                <tr class="table-light">
                    <th class="pt-3 text-center" scope="row">
                        14
                    </th>
                    <td class="pt-3">
                        Mark Industries pvt. ltd
                    </td>
                    <td class="pt-3 text-center">
                        Mithilesh Sharma
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        SE
                    </td>
                    <td class="pt-3 text-center">
                        ECS
                    </td>

                    <td class="py-3 ">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="#" class="btn btn-danger" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg></a>
                        </div>

                    </td>
                </tr>
                <tr class="table-light">
                    <th class="pt-3 text-center" scope="row">
                        14
                    </th>
                    <td class="pt-3">
                        Mark Industries pvt. ltd
                    </td>
                    <td class="pt-3 text-center">
                        Mithilesh Sharma
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        SE
                    </td>
                    <td class="pt-3 text-center">
                        ECS
                    </td>

                    <td class="py-3 ">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="#" class="btn btn-danger" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg></a>
                        </div>

                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>