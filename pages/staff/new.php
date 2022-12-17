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
        <p>New Announcement</p>
    </div>
    <div class="container my-3" id="content">
        <div class="bg-light p-5 rounded">
            <form class="row g-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">

                <div class="col-12">

                    <strong for="CompanyName" class="form-label">Announcement Title</strong>
                    <br>
                    <br>

                    <input type="text" class="form-control" spellcheck="false" required autocomplete="off"
                        name="CompanyName" id="CompanyName" placeholder="e.g. ABC pvt. ltd.">
                </div>
                <br>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">
                        <strong>
                            Description
                        </strong>

                    </label>
                    <br>

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"
                        placeholder="e.g.Please collect the approval letter from office"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">
                        <strong>
                            Skills required
                        </strong>

                    </label>
                    <br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"
                        placeholder="e.g.Please collect the approval letter from office"></textarea>
                </div>
                <div class="col-12">

                    <strong for="CompanyName" class="form-label">Company Location</strong>
                    <br>

                    <input type="text" class="form-control" spellcheck="false" required autocomplete="off"
                        name="CompanyName" id="CompanyName" placeholder="e.g. ABC pvt. ltd.">
                </div>
                <br>
                <div class="col-12">
                    <strong for="inputHeight" class="form-label">Start Date</strong>
                    <input id="startDate" class="form-control" type="date" />

                </div>
                <br>
                <div class="col-12">

                    <strong for="CompanyName" class="form-label">Duration</strong>
                    <br>

                    <input type="text" class="form-control" spellcheck="false" required autocomplete="off"
                        name="CompanyName" id="CompanyName" placeholder="e.g. ABC pvt. ltd.">
                </div>
                <br>
                <div class="col-12">

                    <strong for="CompanyName" class="form-label">Stipend</strong>
                    <br>

                    <input type="text" class="form-control" spellcheck="false" required autocomplete="off"
                        name="CompanyName" id="CompanyName" placeholder="e.g. ABC pvt. ltd.">
                </div>
                <div class="form-group">
                    <label><strong>Branch :</strong></label>
                    <br>
                    <br>

                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="" value="ECS" />
                        <span class="form-check-label">ECS</span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="" value="CS" />
                        <span class="form-check-label">CS</span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="" value="IT" />
                        <span class="form-check-label">IT</span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="" value="MECH" />
                        <span class="form-check-label">MECH</span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="" value="AUTO" />
                        <span class="form-check-label">AUTO</span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="" value="AUTO" />
                        <span class="form-check-label">All Branches</span>
                    </label>

                </div>
                <div class="form-group">
                    <label><strong>Work type :</strong></label>
                    <br>
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
                    <label><strong>Stipend type :</strong></label>
                    <br>
                    <br>

                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Stipend" value="Paid" />
                        <span class="form-check-label"> Lumpsum </span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Stipend" value="UnPaid" />
                        <span class="form-check-label"> Monthly </span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Stipend" value="UnPaid" />
                        <span class="form-check-label"> Unpaid </span>
                    </label>
                </div>

                <div class="form-group">
                    <label><strong>Work Location :</strong></label>
                    <br>
                    <br>

                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Location" value="WFH" />
                        <span class="form-check-label"> Work From Home</span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Location" value="Hybrid" />
                        <span class="form-check-label"> Hybrid </span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Location" value="OnSite" />
                        <span class="form-check-label"> On-site </span>
                    </label>
                </div>
                <div class="container text-center">
                    <div class="row mx-auto">
                        <div class="col mt-3">
                            <button class="btn btn-primary btn-lg col-md-12" role="button">Submit</button>
                        </div>

                    </div>
                </div>



            </form>
        </div>
    </div>





</body>

</html>