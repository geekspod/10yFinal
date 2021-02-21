<!-- About Title -->

    <section class="about">
        <div class="container">
            <div class="about-text text-center">
                <h1 class="title-color"><?php echo $page_about['about_heading'] ; ?></h1>
                <?php echo $page_about['about_content'] ; ?>
            </div>
        </div>

    </section>

    <section class="about-team">
        <div class="container-fluid">
            <div class="container">
                <div class="col-xs-12 col-sm-6 col-md-6"></div>
                <div class="team-text text-center">
                    <h1 class="title-color">MEET THE TEAM</h1>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean<br>
                        sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</br></p>
                </div>

                <div class="row-car">
                    <!-- Team member -->
                    <?php foreach($team_members as $team){ ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="image-flip">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid"
                                                    src="<?php echo base_url() ; ?>public/uploads/<?php echo $team['photo'] ;?>"
                                                    alt="card image"></p>
                                            <h4 class="card-title title-color"><?php echo $team['name'] ;?></h4>
                                            <p class="card-text"><?php echo $team['designation'] ;?></p>
                                            <div class="c-icons text-center">
                                                <a href="<?php echo $team['facebook'] ;?>" target="_blank"><i class="fab fa-facebook-f icon"></i></a>
                                                <a href="<?php echo $team['twitter'] ;?>" target="_blank"><i class="fab fa-twitter icon"></i></a>
                                                <a href="<?php echo $team['instagram'] ;?>" target="_blank"><i class="fab fa-instagram icon"></i></a>
                                                <a href="<?php echo $team['pinterest'] ;?>" target="_blank"><i class="fab fa-pinterest-p icon"></i></a>
                                                <a href="<?php echo $team['linkedin'] ;?>" target="_blank"><i class="fab fa-linkedin-in icon"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    <?php } ?>
					<!-- ./Team member -->
                    

                </div>
            </div>
            </div>
    </section>

