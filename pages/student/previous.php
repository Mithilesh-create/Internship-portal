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
    <div class="row">
        <div class="col greet">
        <p>Previous Applications</p>
        </div>
        <div class="col">
        <span style="float:right;">
        <div class="row height d-flex justify-content-center align-items-center">

<div class="col-md-8">

  <div class="search">
    <i class="fa fa-search"></i>
    <input type="text" class="form-control" placeholder="Search Bar">
    <button class="btn btn-primary">Search</button>
  </div>
  
</div>

</div>
    </span>

        </div>
    </div>
    <div class="container mt-5 table-responsive-sm">
        <table class="table table-bordered table-dark table-sm">
            <thead class="thead-light text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Company</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Comment</th>
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
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        Approved
                    </td>
                    <td class="py-3 text-center">
                        Please collect the approval letter from office and upload the certificate after completion of intership 

                        <p> Upload Certificate/LOR here:</p>

                        <form action="/action_page.php">
                        <input type="file" id="myFile" name="filename" accept="application/pdf">
                        <input type="submit">
                        <?php 

                        if($imageFileType != "pdf") {
                        $uploadOk = 0;
                        } ?>
                        </form>

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
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        Approved
                    </td>
                    <td class="py-3 text-center">
                     Please collect the approval letter from office and upload the certificate after completion of intership

                        <p>Upload Certificate/LOR here:</p>

                        <form action="/action_page.php">
                        <input type="file" id="myFile" name="filename" accept="application/pdf">
                        <input type="submit">
                        </form>

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
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        Pending
                    </td>
                    <td class="py-3 text-center">
                        Under Review
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
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        Pending
                    </td>
                    <td class="py-3 text-center">
                    Under Review
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
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        Pending
                    </td>
                    <td class="py-3 text-center">
                        Under Review

                    </td>
                </tr>

            </tbody>

        </table>

    </div>


@import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


       body{
        background-color:#eee;
        font-family: "Poppins", sans-serif;
        font-weight: 300;
       }

       .height{
        height: 100vh;
       }
       

       .search{
       position: relative;
       box-shadow: 0 0 40px rgba(51, 51, 51, .1);
         
       }

       .search input{

        height: 60px;
        text-indent: 25px;
        border: 2px solid #d6d4d4;


       }


       .search input:focus{

        box-shadow: none;
        border: 2px solid blue;


       }

       .search .fa-search{

        position: absolute;
        top: 20px;
        left: 16px;

       }

       .search button{

        position: absolute;
        top: 5px;
        right: 5px;
        height: 50px;
        width: 110px;
        background: blue;

       }

</body>

</html>