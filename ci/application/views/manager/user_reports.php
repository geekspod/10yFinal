<!DOCTYPE html>
<head>
    <title>User Value</title>

    <style>

        #main_container {
            height: 400px;
        }


        .highcharts-figure, .highcharts-data-table table {
            margin: 1em auto;
        }

        #container {
            height: 400px;
        }

        #container1 {
            height: 400px;
        }

        #container4 {
            height: 400px;
        }

        /*5*/
        #container5 {
            height: 400px;
        }

        #container3 {
            height: 400px;
        }

        #container2 {
            height: 400px;
        }

        .highcharts-drilldown-data-label text {
            text-decoration: none !important;
        }

        .highcharts-xaxis-labels text {
            text-decoration: none !important;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #EBEBEB;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }

    </style>
</head>
<body>

<!--Load the AJAX API-->

<!--Load the AJAX API-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<!--<script src="https://code.highcharts.com/highcharts.js"></script>-->
<!--<script src="https://code.highcharts.com/highcharts-3d.js"></script>-->
<!--<script src="https://code.highcharts.com/modules/exporting.js"></script>-->
<!--<script src="https://code.highcharts.com/modules/export-data.js"></script>-->
<!--<script src="https://code.highcharts.com/modules/accessibility.js"></script>-->

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<!--bootstrap modal-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .bs-example {
        margin: 0px;
    }

    .modal .chart {
        height: 90%;
        width: 90%;
        max-width: none;
    }
</style>

<div class="container">
    <div class="row align-items-center">
        <div class="col-sm-3">
            <p><b>Name: </b></p>
        </div>
        <div class="col-sm-9">
            <p><?php echo $user_detail['first_name'] . " " . $user_detail['last_name']; ?></p>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-sm-3">
            <p><b>Job Title: </b></p>
        </div>
        <div class="col-sm-9">
            <p><?php echo $user_detail['job_title']; ?></p>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-sm-3">
            <p><b>Department: </b></p>
        </div>
        <div class="col-sm-9">
            <p><?php echo $user_detail['department']; ?></p>
        </div>
    </div>
</div>


<div class="mt-5"></div>

<!--
    How to dynamically show progress bars:
        in <?php echo 70; ?> replace 70 with
        the number from database or backend
        which shows the completion percentage
-->
<div class="container">
    <div class="row align-items-center">
        <div class="col-sm-3">
            <p><b>Work Personality Index</b></p>
        </div>
        <div class="col-sm-9">
            <div class="progress" style="width:100%;">
                <div class="progress-bar" style="width:<?php echo 70; ?>%;"><?php echo 70; ?>%</div>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-sm-3">
            <p><b>Personal Values Assessment</b></p>
        </div>
        <div class="col-sm-9">
            <div class="progress" style="width:100%;">
                <div class="progress-bar" style="width:<?php echo 70; ?>%;"><?php echo 70; ?>%</div>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-sm-3">
            <p><b>Personality Assessment</b></p>
        </div>
        <div class="col-sm-9">
            <div class="progress" style="width:100%;">
                <div class="progress-bar" style="width:<?php echo 70; ?>%;"><?php echo 70; ?>%</div>
            </div>
        </div>
    </div>
</div>
<!--end-->
<div class="mt-5"></div>
<div class="container">
    <div class="row">
        <div class="col-md-9">
        <p id="myID" align="justify"></p>
        <figure class="highcharts-figure">
        </figure>
        <div id="container"></div>
    </div>
        <div class="col-md-3 align-self-center">
        <!--<i> <h6 class="description">Description is:</h6></i>-->
        <!--1-10-->
        <i><p class="highcharts-description1" align="justify">Score indicates that the person is easy-going,
                non-competitive, do not have the urge to go ahead, and set easy goals.</p></i>
        <i><p class="highcharts-description2" align="justify">Score indicates an ambitious and competitive person who set
                difficult goals, high standards and aspirations.</p></i>
        <i><p class="highcharts-description3" align="justify">Score suggests that, person avoid taking risks and they don't
                feel empowered and or trusted to take initiative.</p></i>
        <i><p class="highcharts-description4" align="justify">Score indicates that, a person with initiative capability is
                proactive. He/She can identify and take challenges.</p></i>
        <i><p class="highcharts-description5" align="justify">Score suggests that, a person finds hard to adapt dynamic
                environment. they hardly see the surroundings with multiple perspective.</p></i>
        <i><p class="highcharts-description6" align="justify">Score suggests that, flexible person has the capacity to cope
                with a frequently changing work environment and can adapt to emerging situations.</p></i>
        <i><p class="highcharts-description7" align="justify">Score suggests that, a person look for reason to have positive
                energy and high spirit. In tough times, he/she struggles to maintain composure.</p></i>
        <i><p class="highcharts-description8" align="justify">Score suggests that, energetic person has stamina and the
                tendency to maintain a high spirit. He/She performs well in a pressure situation and can remain positive in
                stressful state.</p></i>

        <i><p class="highcharts-description9" align="justify">Score indicates that the person prefers to work alone and
                avoid leadership positions.</p></i>
        <i><p class="highcharts-description10" align="justify">Score indicates that a person with leading attitude is
                willing to take charge of any situation. He/She can lead and inspire others.</p></i>
        <!--11-20-->
        <i><p class="highcharts-description10" align="justify">Score indicates that a person with leading attitude is
                willing to take charge of any situation. He/She can lead and inspire others.</p></i>
        <i><p class="highcharts-description11" align="justify">Score shows inability to cope with different activities at
                once.</p></i>
        <i><p class="highcharts-description12" align="justify">Score indicates that the person has the potential to deal
                with several activities at a time.</p></i>
        <i><p class="highcharts-description13" align="justify">Score shows that the person is not interested in negotiating
                with and influencing people.</p></i>
        <i><p class="highcharts-description14" align="justify">Score suggests that a persuasive person feels comfortable in
                negotiating, selling, influencing and persuading.</p></i>
        <i><p class="highcharts-description15" align="justify">Score suggests that the person is introvert and lacks
                confidence in social situations.</p></i>
        <i><p class="highcharts-description16" align="justify">Score indicates that the person is extremely confident and
                self-assured. He/She is at ease with people in all types of social situations.</p></i>
        <i><p class="highcharts-description17" align="justify">Score indicates that the person easily gives up on difficult
                tasks and gets distracted easily.</p></i>
        <i><p class="highcharts-description18" align="justify">Score indicates that a person has a tendency to stick with
                tasks. They do not give up and overcome obstacles with persistence.</p></i>
        <i><p class="highcharts-description19" align="justify">Score shows that the person is rarely bothered about minor
                details, dislikes complex assignments, and has a careless approach towards work.</p></i>

        <!--21-30-->
        <i><p class="highcharts-description20" align="justify">Score indicates that the person is thorough and rigorous.
                He/She strives towards perfection and approach the work in a neat and organized manner.</p></i>
        <i><p class="highcharts-description21" align="justify">Score shows that the individual ignores rules and
                instructions.</p></i>
        <i><p class="highcharts-description22" align="justify">Score suggests that, a person with high compliance adheres to
                rules and strictly follows work regulations whereas</p></i>
        <i><p class="highcharts-description23" align="justify">Score indicate that the person leaves things unfinished and
                struggles to meet deadlines.</p></i>
        <i><p class="highcharts-description24" align="justify">Score shows that the person is highly trustable, reliable,
                responsible and dependable.</p></i>
        <i><p class="highcharts-description25" align="justify">Score shows that the person lacks long term vision and is not
                meticulous.</p></i>
        <i><p class="highcharts-description26" align="justify">Score indicates that the person has the requisite desire to
                plan his/her work and to follow it.</p></i>
        <i><p class="highcharts-description27" align="justify">Score shows that the person likes to do work alone and
                appears as reserved, distant, and withdrawn.</p></i>
        <i><p class="highcharts-description28" align="justify">Score suggests that a person is cooperative, displays a
                good-natured attitude and encourages people to work together.</p></i>
        <i><p class="highcharts-description29" align="justify">Score shows that the person is not indulged in the problems
                of others.</p></i>

        <!--31-40-->
        <i><p class="highcharts-description30" align="justify">Score indicates that the person is sensitive and
                understanding of the needs and feelings of others. He/She is kind and have empathy.</p></i>
        <i><p class="highcharts-description31" align="justify">Score shows that a person is detached, reserved, and
                quiet.</p></i>
        <i><p class="highcharts-description32" align="justify">Score indicates that, A extrovert person prefers to interact
                with others and establish personal connections.</p></i>
        <i><p class="highcharts-description33" align="justify">Score suggests that the person is autocratic and takes
                decisions without guidance and support.</p></i>
        <i><p class="highcharts-description34" align="justify">Score suggests that, a democratic person has preference for
                making decisions through consultation and collaboration.</p></i>
        <i><p class="highcharts-description35" align="justify">Score shows that the person can easily get frustrated, angry,
                and upset.</p></i>
        <i><p class="highcharts-description36" align="justify">Score indicates that, a person shows a disciplined attitude
                who could maintain composure and keeps emotions in check.</p></i>
        <i><p class="highcharts-description37" align="justify">Score shows that the individual gets tense under stress, take
                criticism personally and find it difficult to handle challenging tasks.</p></i>
        <i><p class="highcharts-description38" align="justify">Score indicates that a person has the capability to be
                resilient and patient towards taking criticism positively and to handle high stress situations calmly and
                effectively.</p></i>
        <i><p class="highcharts-description39" align="justify">Score indicates that the person prefers avoiding risks.</p>
        </i>

        <i><p class="highcharts-description40" align="justify">Score indicates that, an innovative person focuses on
                unconventional ideas and is action-oriented.</p></i>
        <i><p class="highcharts-description41" align="justify">Score indicates that the person makes quick and spontaneous
                decisions and dislikes analytical or complicated information.</p></i>
        <i><p class="highcharts-description42" align="justify">Score suggests that, an analytical person has the tendency to
                carefully analyze information and use logic to address issues and problems.</p></i>
        <!--1-->
    </div>
    </div>
</div>
<div class="container">
    <h6 class="heading">1.Energy And Drive Description</h6>
    <p class="highcharts-description" align="justify"><i>
            <?php echo $Energy_and_drive_data['description_test']; ?></i>
    </p>
    <!--2-->
    <h6 class="heading">2.Work Style Description</h6>
    <p class="highcharts-description" align="justify"><i>
            <?php echo $Work_style_data['description_test']; ?></i>
    </p>
    <!--3-->
    <h6 class="heading">3.Working With Others Description</h6>
    <p class="highcharts-description" align="justify"><i>
            <?php echo $Working_with_others_data['description_test']; ?></i>
    </p>
    <!--4-->
    <h6 class="heading">4.Dealing With Pressure And Stress Description</h6>
    <p class="highcharts-description" align="justify"><i>
            <?php echo $Dealing_with_pressure_and_stress_data['description_test']; ?></i>
    </p>
    <!--5-->
    <h6 class="heading">5.Problem Solving Style Data Description</h6>
    <p class="highcharts-description" align="justify"><i>
            <?php echo $Problem_solving_style_data['description_test']; ?></i>
    </p>
</div>
<!--div-->
<div class="bs-example">

    <div id="myModal1" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Personality Index</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A strong desire to do or achieve something.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">OK, Got it!</button>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--2-->
<div class="bs-example">

    <div id="myModal2" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Personality Index</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A high score indicates an ambitious and competitive person who set difficult goals, high
                        standards and aspirations while a low score indicates that the person is easy-going,
                        non-competitive, do not have the urge to go ahead, and set easy goals.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">OK, Got it!</button>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--2-work style-->

<div class="bs-example">

    <div id="myModal3" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The ability to assess and initiate things independently.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--4-->

<div class="bs-example">

    <div id="myModal4" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A person with initiative capability is proactive. He/She can identify and take challenges.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--5-->

<div class="bs-example">

    <div id="myModal5" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Working With Others</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The extent to which a person can cope with changes in the environment and think about problems
                        and tasks in novel and creative ways.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--6-->

<div class="bs-example">

    <div id="myModal6" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Working With Others</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A highly flexible person has the capacity to cope with a frequently changing work environment
                        and can adapt to emerging situations.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--7-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal7" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dealing with pressure and Stress</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The ability to be energetic, active and positive.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>


<!--8-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal8" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dealing with pressure and Stress</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A highly energetic person has stamina and the tendency to maintain a high spirit. He/She
                        performs well in a pressure situation and can remain positive in stressful state.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>


<!--9-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal9" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Problem Solving Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The ability to inspire and guide teams towards turning a vision into reality.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--10-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal10" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Problem Solving Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A person with leading attitude is willing to take charge of any situation. He/She can lead and
                        inspire others. A low score indicates that the person prefers to work alone and avoid leadership
                        positions.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>
<!--11-->


<!--div-->
<div class="bs-example">

    <div id="myModal11" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Personality Index</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The capacity to deal with multiple and diverse activities at the same time and perform well in
                        all.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">OK, Got it!</button>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--2-->
<div class="bs-example">

    <div id="myModal12" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Personality Index</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A high score indicates that the person has the potential to deal with several activities at a
                        time while low score shows inability to cope with different activities at once.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">OK, Got it!</button>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--2-work style-->

<div class="bs-example">

    <div id="myModal3" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The extent to which a person demonstrates negotiating, persuading and convincing prowess.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--4-->

<div class="bs-example">

    <div id="myModal14" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A highly persuasive person feels comfortable in negotiating, selling, influencing and
                        persuading. Low score shows that the person is not interested in negotiating with and
                        influencing people.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--5-->

<div class="bs-example">

    <div id="myModal15" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Working With Others</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The strength of a person to be self-aware, presentable and confident.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--6-->

<div class="bs-example">

    <div id="myModal16" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Working With Others</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        High score indicates that the person is extremely confident and self-assured. He/She is at ease
                        with people in all types of social situations. A low score suggests that the person is introvert
                        and lacks confidence in social situations.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--7-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal17" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dealing with pressure and Stress</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The determination to remain persistent and not to give up in the face of difficult tasks and
                        assignments.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>


<!--8-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal18" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dealing with pressure and Stress</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A person with high score shows the tendency to stick with tasks. They do not give up and
                        overcome obstacles with persistence. A low score indicates that the person easily gives up on
                        difficult tasks and gets distracted easily.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>


<!--9-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal19" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Problem Solving Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The person appears to be perfectionist and has an ability to read between the lines, not missing
                        minor details.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--10-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal20" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Problem Solving Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A high score indicates that the person is thorough and rigorous. He/She strives towards
                        perfection and approach the work in a neat and organized manner. Low score shows that the person
                        is rarely bothered about minor details, dislikes complex assignments, and has a careless
                        approach towards work.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>
<!--21-->


<!--div-->
<div class="bs-example">

    <div id="myModal21" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Personality Index</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A tendency to stick to rules, guidelines and respect social norms or boundaries.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">OK, Got it!</button>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--2-->
<div class="bs-example">

    <div id="myModal22" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Personality Index</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A person with high compliance adheres to rules and strictly follows work regulations whereas low
                        score shows that the individual ignores rules and instructions.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">OK, Got it!</button>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--2-work style-->

<div class="bs-example">

    <div id="myModal23" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The ability to take ownership and responsibility. A person who is highly trustable, and can be
                        relied upon for good advice.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--4-->

<div class="bs-example">

    <div id="myModal24" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        High score shows that the person is highly trustable, reliable, responsible and dependable. Low
                        score indicate that the person leaves things unfinished and struggles to meet deadlines.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--5-->

<div class="bs-example">

    <div id="myModal25" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Working With Others</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The propensity to stay a step ahead. A person with the habit to stay organized and plan
                        everything beforehand.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--6-->

<div class="bs-example">

    <div id="myModal26" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Working With Others</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        High score indicates that the person has the requisiet desire to plan his/her work and to follow
                        it. Low score shows that the person lacks long term vision and is not meticulous
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--7-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal27" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dealing with pressure and Stress</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        To be able to accomplish tasks with teambuilding and celebrate success together.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>


<!--8-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal28" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dealing with pressure and Stress</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A high score is suggestive of a person who is cooperative, displays a good-natured attitude and
                        encourages people to work together. Low score shows that the person likes to do work alone and
                        appears as reserved, distant, and withdrawn.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>


<!--9-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal29" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Problem Solving Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The ability to understand emotional needs of others and to take care of the work colleagues.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--10-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal30" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Problem Solving Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        Highs score indicates that the person is sensitive and understanding of the needs and feelings
                        of others. He/She is kind and have empathy. Low score shows that the person is not indulged in
                        the problems of others.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--31-->

<!--div-->
<div class="bs-example">

    <div id="myModal31" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Personality Index</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        An extrovert individual who has the ability to connect with others and enjoy social gatherings.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">OK, Got it!</button>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--2-->
<div class="bs-example">

    <div id="myModal32" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Personality Index</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A highly extrovert person prefers to interact with others and establish personal connections. A
                        person with low score shows the he/she is detached, reserved, and quiet.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--<button type="button" class="btn btn-primary">OK, Got it!</button>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--2-work style-->

<div class="bs-example">

    <div id="myModal33" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The habit to cooperate and consult before taking a decision. Prefer to ask for guidance when
                        needed.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--4-->

<div class="bs-example">

    <div id="myModal34" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A highly democratic person has preference for making decisions through consultation and
                        collaboration. Low score suggests that the person is autocratic and takes decisions without
                        guidance and support.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--5-->

<div class="bs-example">

    <div id="myModal35" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Working With Others</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        Practice to remain disciplined and maintain composure, in a given situation.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--6-->

<div class="bs-example">

    <div id="myModal36" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Working With Others</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A person with high score shows a disciplined attitude who could maintain composure and keeps
                        emotions in check. Low score shows that the person can easily get frustrated, angry, and upset.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--7-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal37" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dealing with pressure and Stress</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The propensity to be patience and resilient when in hot waters.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>


<!--8-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal38" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dealing with pressure and Stress</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A person with high score has the capability to be resilient and patient towards taking criticism
                        positively and to handle high stress situations calmly and effectively . Low score shows that
                        the individual gets tense under stress, take criticism personally and find it difficult to
                        handle challenging tasks.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>


<!--9-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal39" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Problem Solving Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The attitude to try new ways of doing a job, to be creative and to be able to take risks.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--10-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal40" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Problem Solving Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A highly innovative person focuses on unconventional ideas and is action-oriented. Low score
                        indicates that the person prefers avoiding risks.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>


<!--9-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal41" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Problem Solving Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        The ability to think and analyse critically, before taking a decision.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!--10-dealing with prssure and stress-->
<div class="bs-example">

    <div id="myModal42" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Problem Solving Style</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p align="justify">
                        A highly analytical person has the tendency to carefully analyse information and use logic to
                        address issues and problems. Low score indicates that the person makes quick and spontaneous
                        decisions and dislikes analytical or complicated information.
                    </p>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>


<script>


    var jsonData = $.ajax({

        url: "<?php echo base_url(); ?>" + "/manager/login/get_demo_chart_data/",
        dataType: "json",
        type: 'GET',
        data: data,
        async: false,
        cache: false,


        success: function (data) {
            //alert(data);
            var imgUrl = "<?php echo base_url(); ?>" + '/uploads/pdf/user_reports.pdf' + data;
        }

    });


    var data = jsonData.responseJSON;
    //debugger;

    var Energy_and_drive = [];
    var Work_style = [];
    var Working_with_others = [];
    var Dealing_with_pressure_and_stress = [];
    var Problem_solving_style = [];

    var Ambition = [];
    var Initiative = [];
    var Flexibility = [];
    var Energy = [];
    var Leadership = [];

    var Multi_tasking = [];
    var Persuasion = [];
    var Social_Confidence = [];
    var Persistence = [];
    var Attention_to_detail = [];

    var Rule_Following = [];
    var Dependability = [];
    var Planning = [];
    var Team_Work = [];
    var Concern_for_others = [];

    var Outgoing = [];
    var Democratic = [];
    var Self_control = [];
    var Stress_Tolerance = [];
    var Innovation = [];
    var Analytical_Thinking = [];

    var Energy_and_drive_data = [];
    var Work_style_data = [];
    var Working_with_others_data = [];
    var Dealing_with_pressure_and_stress_data = [];
    var Problem_solving_style_data = [];

    Energy_and_drive = data.Energy_and_drive;
    //alert(Energy_and_drive_data);
    // description
    Energy_and_drive_data = data.Energy_and_drive_data;
    //debugger;
    Work_style_data = data.Work_style_data;
    Working_with_others_data = data.Working_with_others_data;
    Dealing_with_pressure_and_stress_data = data.Dealing_with_pressure_and_stress_data;
    Problem_solving_style_data = data.Problem_solving_style_data;
    // end description


    Work_style = data.Work_style;
    Working_with_others = data.Working_with_others;
    Dealing_with_pressure_and_stress = data.Dealing_with_pressure_and_stress;
    Problem_solving_style = data.Problem_solving_style;


    Ambition = data.Ambition;
    Initiative = data.Initiative;
    Flexibility = data.Flexibility;
    Energy = data.Energy;


    Leadership = data.Leadership;
    Multi_tasking = data.Multi_tasking;
    Persuasion = data.Persuasion;
    Social_Confidence = data.Social_Confidence;


    Persistence = data.Persistence;
    Attention_to_detail = data.Attention_to_detail;
    Rule_Following = data.Rule_Following;
    Dependability = data.Dependability;


    Planning = data.Planning;
    Team_Work = data.Team_Work;
    Concern_for_others = data.Concern_for_others;
    Outgoing = data.Outgoing;


    Democratic = data.Democratic;
    Self_control = data.Self_control;
    Stress_Tolerance = data.Stress_Tolerance;
    Innovation = data.Innovation;
    Analytical_Thinking = data.Analytical_Thinking;
    //debugger;
    // main content
    // Create the chart
    // Create the chart
    const chart = Highcharts.chart('container', {
        chart: {
            type: 'column',
            reflow: false,
        },
        title: {
            text: 'Work Personality Index'
        },
        subtitle: {
            text: 'Chart for WPI'
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: ''
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                cursor: 'pointer',
                point: {
                    events: {
                        click: function () {

                            var seriesName = this.name;
                            // alert(this.name);


                            if (seriesName == "Ambition" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();

                                $(".highcharts-description1").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                                // $(".highcharts-description1").append("");
                                //  $(".highcharts-description1").append("The score suggests that, people have an easy-going and non-competitive nature. They have little urge to go ahead and hence set themselves easy and achievable targets. They prefer structured tasks and avoid being spontaneous. They usually struggle under pressure. They are also not keen with social interactions. They have little or no interest in jobs which are related to negotiating and influencing people. They prefer stable and predictable job. They also prefer to work alone rather than in teams. They avoid leading and often like to be silent members of a larger group.");

                                //  alert('The score suggests that, people have an easy-going and non-competitive nature. They have little urge to go ahead and hence set themselves easy and achievable targets. They prefer structured tasks and avoid being spontaneous. They usually struggle under pressure. They are also not keen with social interactions. They have little or no interest in jobs which are related to negotiating and influencing people. They prefer stable and predictable job. They also prefer to work alone rather than in teams. They avoid leading and often like to be silent members of a larger group.');
                                // $("p").append(" ");
                                //  $("p").append("The score suggests that, people have an easy-going and non-competitive nature. They have little urge to go ahead and hence set themselves easy and achievable targets. They prefer structured tasks and avoid being spontaneous. They usually struggle under pressure. They are also not keen with social interactions. They have little or no interest in jobs which are related to negotiating and influencing people. They prefer stable and predictable job. They also prefer to work alone rather than in teams. They avoid leading and often like to be silent members of a larger group.");
                                //$("#myModal1").modal('show');


                            } else if (seriesName == "Ambition" && this.y >= 51 && this.y <= 100) {

                                $(".highcharts-description").hide();

                                $(".heading").hide();

                                $(".highcharts-description1").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();


                                // $(".highcharts-description2").show();
                                // $(".highcharts-description1").append("The score suggests that, people have an easy-going and non-competitive nature. They have little urge to go ahead and hence set themselves easy and achievable targets. They prefer structured tasks and avoid being spontaneous. They usually struggle under pressure. They are also not keen with social interactions. They have little or no interest in jobs which are related to negotiating and influencing people. They prefer stable and predictable job. They also prefer to work alone rather than in teams. They avoid leading and often like to be silent members of a larger group.");


                            } else if (seriesName == "Initiative" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();

                                $(".heading").hide();
                                $(".highcharts-description2").show();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                                // $(".highcharts-description1").hide();
                                // $(".highcharts-description1").hide();
                                //  $(".highcharts-description2").show();


                                // $(".highcharts-description1").append("The score suggests that, people have an easy-going and non-competitive nature. They have little urge to go ahead and hence set themselves easy and achievable targets. They prefer structured tasks and avoid being spontaneous. They usually struggle under pressure. They are also not keen with social interactions. They have little or no interest in jobs which are related to negotiating and influencing people. They prefer stable and predictable job. They also prefer to work alone rather than in teams. They avoid leading and often like to be silent members of a larger group.");


                            } else if (seriesName == "Initiative" && this.y >= 51 && this.y <= 100) {
                                // alert('The score suggests that, People are competitive in nature and challenge their limitations to grow. They set and develop high standards for themselves. They are keen on taking initiatives and always act proactively. They have the capacity to cope with frequently changing work environment. They are known to have stamina and are able to maintain a high level of energy. They prefer to take charge of situations and lead teams. They have potential to multitask. They enjoy negotiating, selling, influencing and persuading. These people are known to be confident and self-assured.');
                                // $("#myID").append("The score suggests that, people have an easy-going and non-competitive nature. They have little urge to go ahead and hence set themselves easy and achievable targets. They prefer structured tasks and avoid being spontaneous. They usually struggle under pressure. They are also not keen with social interactions. They have little or no interest in jobs which are related to negotiating and influencing people. They prefer stable and predictable job. They also prefer to work alone rather than in teams. They avoid leading and often like to be silent members of a larger group.");
                                //  $(".highcharts-description").append("The score suggests that, people have an easy-going and non-competitive nature. They have little urge to go ahead and hence set themselves easy and achievable targets. They prefer structured tasks and avoid being spontaneous. They usually struggle under pressure. They are also not keen with social interactions. They have little or no interest in jobs which are related to negotiating and influencing people. They prefer stable and predictable job. They also prefer to work alone rather than in teams. They avoid leading and often like to be silent members of a larger group.");
                                //  $("p").append("The score suggests that, people have an easy-going and non-competitive nature. They have little urge to go ahead and hence set themselves easy and achievable targets. They prefer structured tasks and avoid being spontaneous. They usually struggle under pressure. They are also not keen with social interactions. They have little or no interest in jobs which are related to negotiating and influencing people. They prefer stable and predictable job. They also prefer to work alone rather than in teams. They avoid leading and often like to be silent members of a larger group.");
                                // 	$("#myModal4").modal('show');
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description4").show();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                                //      $(".highcharts-description2").show();
                                // $(".highcharts-description1").append("The score suggests that, people have an easy-going and non-competitive nature. They have little urge to go ahead and hence set themselves easy and achievable targets. They prefer structured tasks and avoid being spontaneous. They usually struggle under pressure. They are also not keen with social interactions. They have little or no interest in jobs which are related to negotiating and influencing people. They prefer stable and predictable job. They also prefer to work alone rather than in teams. They avoid leading and often like to be silent members of a larger group.");

                            } else if (seriesName == "Flexibility" && this.y >= 0 && this.y <= 50) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();

                                $(".highcharts-description5").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();


                            } else if (seriesName == "Flexibility" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description6").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   4
                            else if (seriesName == "Energy" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description7").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();


                            } else if (seriesName == "Energy" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description8").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   5
                            else if (seriesName == "Leadership" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();

                                $(".highcharts-description9").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            } else if (seriesName == "Leadership" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description10").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description1").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            // 6
                            else if (seriesName == "Multi Tasking" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();

                                $(".highcharts-description11").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description1").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            } else if (seriesName == "Multi Tasking" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description12").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            // 7
                            else if (seriesName == "Persuasion" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description13").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();


                            } else if (seriesName == "Persuasion" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description14").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   8
                            else if (seriesName == "Social Confidence" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description15").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();


                            } else if (seriesName == "Social Confidence" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description16").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   9
                            else if (seriesName == "Persistence" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description17").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            } else if (seriesName == "Persistence" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description18").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   10
                            else if (seriesName == "Attention To Detail" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();

                                $(".highcharts-description19").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            } else if (seriesName == "Attention To Detail" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description20").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description1").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   11
                            else if (seriesName == "Rule Following" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description21").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description1").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            } else if (seriesName == "Rule Following" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description22").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   12
                            else if (seriesName == "Dependability" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description23").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();


                            } else if (seriesName == "Dependability" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description24").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   13
                            else if (seriesName == "Planning" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description25").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();


                            } else if (seriesName == "Planning" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description25").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
// 14
//   14
                            if (seriesName == "Team Work" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description26").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            } else if (seriesName == "Team Work" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description27").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   15
                            else if (seriesName == "Concern For Others" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description28").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();


                            } else if (seriesName == "Concern For Others" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description29").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   16
                            else if (seriesName == "Outgoing" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description30").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description1").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();


                            } else if (seriesName == "Outgoing" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description31").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description1").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   17
                            else if (seriesName == "Democratic" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description32").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();


                            } else if (seriesName == "Democratic" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description33").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   18
                            else if (seriesName == "Self Control" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description34").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();


                            } else if (seriesName == "Self Control" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description36").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   19
                            else if (seriesName == "Stress Tolerance" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description37").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();


                            } else if (seriesName == "Stress Tolerance" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description38").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   20
                            else if (seriesName == "Innovation" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();

                                $(".highcharts-description39").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description1").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            } else if (seriesName == "Innovation" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();

                                $(".highcharts-description40").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description1").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            }
                            //   21
                            else if (seriesName == "Analytical Thinking" && this.y >= 0 && this.y <= 50) {

                                $(".highcharts-description").hide();
                                $(".heading").hide();

                                $(".highcharts-description41").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description1").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description42").hide();

                            } else if (seriesName == "Analytical Thinking" && this.y >= 51 && this.y <= 100) {
                                $(".highcharts-description").hide();
                                $(".heading").hide();
                                $(".highcharts-description42").show();
                                $(".highcharts-description2").hide();
                                $(".highcharts-description3").hide();
                                $(".highcharts-description4").hide();
                                $(".highcharts-description5").hide();
                                $(".highcharts-description6").hide();
                                $(".highcharts-description7").hide();
                                $(".highcharts-description8").hide();
                                $(".highcharts-description9").hide();
                                $(".highcharts-description10").hide();

                                $(".highcharts-description11").hide();
                                $(".highcharts-description12").hide();
                                $(".highcharts-description13").hide();
                                $(".highcharts-description14").hide();
                                $(".highcharts-description15").hide();
                                $(".highcharts-description16").hide();
                                $(".highcharts-description17").hide();
                                $(".highcharts-description18").hide();
                                $(".highcharts-description19").hide();
                                $(".highcharts-description20").hide();


                                $(".highcharts-description21").hide();
                                $(".highcharts-description22").hide();
                                $(".highcharts-description23").hide();
                                $(".highcharts-description24").hide();
                                $(".highcharts-description25").hide();
                                $(".highcharts-description26").hide();
                                $(".highcharts-description27").hide();
                                $(".highcharts-description28").hide();
                                $(".highcharts-description29").hide();
                                $(".highcharts-description30").hide();


                                $(".highcharts-description31").hide();
                                $(".highcharts-description32").hide();
                                $(".highcharts-description33").hide();
                                $(".highcharts-description34").hide();
                                $(".highcharts-description35").hide();
                                $(".highcharts-description36").hide();
                                $(".highcharts-description37").hide();
                                $(".highcharts-description38").hide();
                                $(".highcharts-description39").hide();
                                $(".highcharts-description40").hide();

                                $(".highcharts-description41").hide();
                                $(".highcharts-description1").hide();

                            }


                        }
                    }
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [
            {
                name: "score",
                colorByPoint: true,
                data: [
                    {
                        name: "Energy and Drive",
                        y: Energy_and_drive,
                        drilldown: "Energy and Drive"
                    },
                    {
                        name: "Work Style",
                        y: Work_style,
                        drilldown: "Work Style"
                    },
                    {
                        name: "Working With Others",
                        y: Working_with_others,
                        drilldown: "Working With Others"
                    },
                    {
                        name: "Dealing With Pressure And Stress",
                        y: Dealing_with_pressure_and_stress,
                        drilldown: "Dealing With Pressure And Stress"
                    },
                    {
                        name: "Problem Solving Style",
                        y: Problem_solving_style,
                        drilldown: "Problem Solving Style"
                    },

                ]
            }
        ],
        drilldown: {
            series: [
                {
                    name: "Energy and Drive",
                    id: "Energy and Drive",
                    data: [
                        [
                            "Ambition",
                            Ambition,


                        ],
                        [
                            "Initiative",
                            Initiative
                        ],
                        [
                            "Flexibility",
                            Flexibility
                        ],
                        [
                            "Energy",
                            Energy
                        ],
                        [
                            "Leadership",
                            Leadership
                        ],
                        [
                            "Multi Tasking",
                            Multi_tasking
                        ],
                        [
                            "Persuasion",
                            Persuasion
                        ],
                        [
                            "Social Confidence",
                            Social_Confidence
                        ],
                    ]
                },
                {
                    name: "Work Style",
                    id: "Work Style",
                    data: [
                        [
                            "Persistence",
                            Persistence
                        ],
                        [
                            "Attention To Detail",
                            Attention_to_detail
                        ],
                        [
                            "Rule Following",
                            Rule_Following
                        ],
                        [
                            "Dependability",
                            Dependability
                        ],
                        [
                            "Planning",
                            Planning
                        ],

                    ]
                },
                {
                    name: "Working With Others",
                    id: "Working With Others",
                    data: [
                        [
                            "Team Work",
                            Team_Work
                        ],
                        [
                            "Concern For Others",
                            Concern_for_others
                        ],
                        [
                            "Outgoing",
                            Outgoing
                        ],
                        [
                            "Democratic",
                            Democratic
                        ]
                    ]
                },
                {
                    name: "Dealing With Pressure And Stress",
                    id: "Dealing With Pressure And Stress",
                    data: [
                        [
                            "Self Control",
                            Self_control
                        ],
                        [
                            "Stress Tolerance",
                            Stress_Tolerance
                        ],

                    ]
                },
                {
                    name: "Problem Solving Style",
                    id: "Problem Solving Style",
                    data: [
                        [
                            "Innovation",
                            Innovation
                        ],
                        [
                            "Analytical Thinking",
                            Analytical_Thinking
                        ],

                    ]
                },

            ]
        }
    });
    // end
</script>

<script>

    $(".highcharts-description1").hide();
    $(".highcharts-description2").hide();
    $(".highcharts-description3").hide();
    $(".highcharts-description4").hide();
    $(".highcharts-description5").hide();
    $(".highcharts-description6").hide();
    $(".highcharts-description7").hide();
    $(".highcharts-description8").hide();
    $(".highcharts-description9").hide();
    $(".highcharts-description10").hide();

    $(".highcharts-description11").hide();
    $(".highcharts-description12").hide();
    $(".highcharts-description13").hide();
    $(".highcharts-description14").hide();
    $(".highcharts-description15").hide();
    $(".highcharts-description16").hide();
    $(".highcharts-description17").hide();
    $(".highcharts-description18").hide();
    $(".highcharts-description19").hide();
    $(".highcharts-description20").hide();


    $(".highcharts-description21").hide();
    $(".highcharts-description22").hide();
    $(".highcharts-description23").hide();
    $(".highcharts-description24").hide();
    $(".highcharts-description25").hide();
    $(".highcharts-description26").hide();
    $(".highcharts-description27").hide();
    $(".highcharts-description28").hide();
    $(".highcharts-description29").hide();
    $(".highcharts-description30").hide();


    $(".highcharts-description31").hide();
    $(".highcharts-description32").hide();
    $(".highcharts-description33").hide();
    $(".highcharts-description34").hide();
    $(".highcharts-description35").hide();
    $(".highcharts-description36").hide();
    $(".highcharts-description37").hide();
    $(".highcharts-description38").hide();
    $(".highcharts-description39").hide();
    $(".highcharts-description40").hide();

    $(".highcharts-description41").hide();
    $(".highcharts-description42").hide();

</script>


</body>
</html>


