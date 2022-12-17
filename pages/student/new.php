<?php
$title = "Dashboard";
$style = "./styles/global.css";
include_once("../../components/head.php");
?>

<body>
    <?php
    include_once("../../components/navbar/index.php");
    ?>
    <div class="container my-2 greet">
        <p>New Application</p>
    </div>
    <div class="container my-3" id="content">
        <div class="bg-light p-5 rounded">
            <form class="row g-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">

                <div class="col-12">

                    <strong for="CompanyName" class="form-label">Company Name</strong>
                    <input type="text" class="form-control" spellcheck="false" required autocomplete="off"
                        name="CompanyName" id="CompanyName" placeholder="e.g. ABC pvt. ltd.">
                </div>
                <div class="col-12">
                    <strong for="CompanyAddress" class="form-label">Company Address</strong>
                    <input type="text" class="form-control" spellcheck="false" required autocomplete="off"
                        name="CompanyAddress" id="CompanyAddress"
                        placeholder="e.g. Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016">
                </div>
                <div class="col-12">
                    <strong for="CompanyLocation" class="form-label">Company Location</strong>
                    <input type="text" class="form-control" spellcheck="false" required autocomplete="off"
                        name="CompanyLocation" id="CompanyLocation" placeholder="e.g. Bangalore">
                </div>

                <div class="col-12">
                    <strong for="inputHeight" class="form-label">Start Date</strong>
                    <input id="startDate" class="form-control" type="date" />

                </div>
                <div class="col-12">
                    <strong for="inputHeight" class="form-label">End Date</strong>
                    <input id="endDate" class="form-control" type="date" />
                </div>

                <div class="col-12">
                    <strong for="Branch" class="form-label">Branch</strong>
                    <select class="form-select" aria-label="Default select example">
                        <option selected value="1">ECS</option>
                        <option value="2">CS</option>
                        <option value="3">IT</option>
                        <option value="4">MECH</option>
                        <option value="5">AUTO</option>
                    </select>
                </div>

                <div class="col-12">
                    <strong for="Semester" class="form-label">Current Semester :</strong>
                    <select class="form-select" aria-label="Default select example">
                        <option selected value="1">I</option>
                        <option value="2">II</option>
                        <option value="3">III</option>
                        <option value="4">IV</option>
                        <option value="5">V</option>
                        <option value="6">VI</option>
                        <option value="7">VII</option>
                        <option value="8">VIII</option>
                    </select>
                </div>

                <div class="form-group">
                    <label><strong>Work type :</strong></label>
                    <br>

                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Stipend" value="Paid" />
                        <span class="form-check-label"> Paid </span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Stipend" value="UnPaid" />
                        <span class="form-check-label"> Unpaid </span>
                    </label>
                </div>
                <div class="form-group">
                    <label><strong>Work Location :</strong></label>
                    <br>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Location" value="WFH" />
                        <span class="form-check-label"> Work From Home</span>
                    </label>
                    <br>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Location" value="Hybrid" />
                        <span class="form-check-label"> Hybrid </span>
                    </label>
                    <br>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Location" value="OnSite" />
                        <span class="form-check-label"> On-site </span>
                    </label>
                </div>

                <div class="container text-center">
                    <div class="row mx-auto">
                        <div class="col mt-3">
                            <button class="btn btn-primary btn-lg col-md-12"  role="button">Submit</button>
                        </div>

                    </div>
                </div>



            </form>
        </div>
    </div>





</body>

</html>