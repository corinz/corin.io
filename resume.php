<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Corin's Resume</title>
        <!-- PHP Include HTML Header -->
        <?php include("includes/html-header.php"); ?>
    </head>
    <body class="text-center" id="resume">
        <div id="wrapper">
            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
                <!--Body Header & Navigation-->
                <?php include("includes/header-nav.php"); ?>
                <p>
                    <img src="images/engine.jpg" class="img-fluid rounded" alt="Responsive image">
                </p>
                <div id="resume-text">
                    <h3>Objective</h3>
                    <p>Seeking career advancement in aerospace engineering with applications to computer science while continuing pursuit of Computer Science Graduate degree.
                    </p>
                    <a data-toggle="collapse" href="#collapseEngExperience" role="button" aria-expanded="false" aria-controls="collapseEngExperience">
                        <h3 class="resume-header">Engineering Experience &darr;</h3>
                    </a>
                    <div class="collapse" id="collapseEngExperience">
                        <h3><a href="http://www.pw.utc.com/">Pratt & Whitney</a>, East Hartford, CT</h3>
                        <h4>Propulsion Systems Analysis</h4>
                        <div class="accordion" id="accordionResume">
                            <div>
                                <div id="headingOne">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h5>Modeling & Integration </h5>
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionResume">
                                    <div class="card-body">
                                        September 2017 – Present
                                        <ul>
                                            <li>Current Bombardier PW1500G NPSS modeling team lead responsible for integration of controls, aero inputs, systems group inputs and effective use of engineering outsource teams to drive organization output</li>
                                            <li>Leading process improvement initiative by querying symptomatic tasks with former organization, Performance Analysis, of ~70 engineers by targeting high-impact, low maturity processes as candidates for automation and tool development using knowledge of NPSS, C++, Git and Qt IDE</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div id="headingTwo">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h5>Performance Analysis</h5>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionResume">
                                    <div class="card-body">
                                        June 2016 – August 2017
                                        <ul>
                                            <li>Applied engine test learning from Embraer geared turbo-fan to assemble Performance Table containing aircraft mission profiles and gas generator thermodynamic expectations for release to engineering community of 4,000+</li>
                                            <li>Developed Mitsubishi aircraft power-setting schedules using engine simulation thrust targets and customer guarantees to FAA certify the PW1200G geared turbo-fan engine</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div id="headingThree">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h5>Performance Analysis Co-op</h5>
                                    </button>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionResume">
                                    <div class="card-body">
                                        May 2015 - August 2015
                                        <ul>
                                            <li>Assessed engine performance on Pratt and Whitney’s flagship PW1100G-JM engine for the Airbus A320neo</li>
                                            <li>Applied in-depth analysis to engine data anomalies using off-design engine matching to declare performance drivers </li>
                                            <li>Applied engine performance assessments to request inspections of and dispute aero predicted nacelle performance</li>
                                            <li>Recurrent use of NPSS models and influence coefficients to match, validate and predict engine performance</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>
                        <a data-toggle="collapse" href="#collapseEducation" role="button" aria-expanded="false" aria-controls="collapseEducation">
                        Education &darr;
                        </a>
                    </h3>
                    <div class="collapse" id="collapseEducation">
                        <p>
                            <a href="https://www.harvard.edu">Harvard University</a>, Cambridge, MA<br/> Software Engineering Certificate <br/> Expected Completion: Summer 2018<br/>
                        </p>
                        <p>
                            <a href="https://uconn.edu">University of Connecticut</a>, Storrs, CT<br/> Bachelor of Science<br/> Major: Mechanical Engineering, May 2016
                        </p>
                    </div>
                    <h3>
                        <a data-toggle="collapse" href="#collapseSoftwareSkills" role="button" aria-expanded="false" aria-controls="collapseSoftwareSkills">
                        Programming & Software Skills &darr;
                        </a>
                    </h3>
                    <div class="collapse" id="collapseSoftwareSkills">
                        <ul>
                            <li>C++</li>
                            <li>Java</li>
                            <li>NPSS</li>
                            <li>CSS3, HTML5</li>
                        </ul>
                    </div>
                    <h3>
                        <a data-toggle="collapse" href="#collapseDesignProj" role="button" aria-expanded="false" aria-controls="collapseDesignProj">
                        Undergraduate Design Project &darr;
                        </a>
                    </h3>
                    <div class="collapse" id="collapseDesignProj">
                        Pratt & Whitney, East Hartford, CT - Sponsored<br/> September 2015 – May 2016<br/> Additive Manufacturing with Direct Metal Laser Sintering
                        <ul>
                            <li>Investigate support deflection as the source of build failures and predict critical deflection limits</li>
                            <li>Conduct experiments at P&W Rapid Prototyping Laboratory to validate analytical predictions</li>
                        </ul>
                    </div>
                    <h3>
                        <a data-toggle="collapse" href="#collapseUGradResearch" role="button" aria-expanded="false" aria-controls="collapseUGradResearch">
                        Undergraduate Research &darr;
                        </a>
                    </h3>
                    <div class="collapse" id="collapseUGradResearch">
                        Manufacturing Automation & Control Systems Laboratory – Professor Xu Chen<br/> September 2015 – May 2016 <br/> Structured Light Scanning and Applications to Additive Manufacturing
                        <ul>
                            <li>Structured Light is a method of scanning surfaces by which patterns of light are projected onto a surface and photographed</li>
                            <li>Research includes building a structured light scanner and applying process to the validation phase of additive manufacturing </li>
                        </ul>
                    </div>
                    <h3>
                        <a data-toggle="collapse" href="#collapseUGradRelated" role="button" aria-expanded="false" aria-controls="collapseUGradRelated">
                        Related Undergraduate Courses & Activities &darr;
                        </a>
                    </h3>
                    <div class="collapse" id="collapseUGradRelated">
                        <ul>
                            <li>Aero Propulsion Systems, Fluid Dynamics, Computer Aided Design and Modeling, Design of Machine Elements</li>
                            <li>Students for the Exploration and Development of Space (SEDS) - Vice President</li>
                        </ul>
                    </div>
                </div>
                <br><br><br>
                <!--PHP Include Contact Me Modal Buttons -->
                <?php include("includes/contact-me-buttons.php"); ?>
                <!--PHP Include Contact Me Modal -->
                <?php include("includes/contact-me-modal.php"); ?>
                <!-- PHP Include Footer-->
                <?php include("includes/footer.php"); ?>
            </div>
            <!-- PHP Include JS-->
            <?php include("includes/jsinclude.php"); ?>
        </div>
    </body>
</html>