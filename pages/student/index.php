<?php
$title = "Dashboard";
$style = "./index.css";
include_once("../../components/head.php");
?>

<body>

    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">Select Internship Application Type</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <a href="#" class="col decoration">
                <div class="selection card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-5 text-white text-shadow-1">
                        <h3 class="pt-3 mt-3 mb-4 display-6 lh-1 fw-bold">Apply for NOC letter
                        </h3>
                        <h5>
                            (No Objection Certificate for Off-Campus Internships Only)
                        </h5>

                    </div>
                </div>
            </a>

            <a href="#" class="col decoration">
                <div class="selection card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-5 text-white text-shadow-1">
                        <h3 class="pt-3 mt-3 mb-4 display-6 lh-1 fw-bold">Apply For Campus Department Internships</h3>

                    </div>
                </div>
            </a>

            <a href="#" class="col decoration">
                <div class="selection card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-5 text-shadow-1">
                        <h3 class="pt-3 mt-3 mb-4 display-6 lh-1 fw-bold">Apply For On-Campus Internships</h3>

                    </div>
                </div>
            </a>
        </div>
    </div>
</body>

</html>