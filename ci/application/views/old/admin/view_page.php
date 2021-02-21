<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Page Section</h1>
	</div>
</section>

<section class="content" style="min-height:auto;margin-bottom: -30px;">
	<div class="row">
		<div class="col-md-12">
			<?php
            if($this->session->flashdata('error')) {
                ?>
                <div class="callout callout-danger">
                    <p><?php echo $this->session->flashdata('error'); ?></p>
                </div>
                <?php
            }
            if($this->session->flashdata('success')) {
                ?>
                <div class="callout callout-success">
                    <p><?php echo $this->session->flashdata('success'); ?></p>
                </div>
                <?php
            }
            ?>
		</div>
	</div>
</section>


<section class="content">

    <div class="row">
        <div class="col-md-12">
                            
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Home</a></li>
                       <!-- <li><a href="#tab_2" data-toggle="tab">About US</a></li>
                        <li><a href="#tab_11" data-toggle="tab">Terms</a></li>
                        <li><a href="#tab_12" data-toggle="tab">Privacy</a></li>
                        <li><a href="#tab_9" data-toggle="tab">Contact</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Faq</a></li>-->
                        

                    </ul>
                    <div class="tab-content">
                        
                        <div class="tab-pane active" id="tab_1">

                            <h3 class="sec_title">Meta Items</h3>
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="title" class="form-control" value="<?php echo $page_home['title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="meta_keyword" style="height:60px;"><?php echo $page_home['meta_keyword']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="meta_description" style="height:60px;"><?php echo $page_home['meta_description']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
                                    </div>
                                </div>                 
                            <?php echo form_close(); ?>

                            <h3 class="sec_title">About Section</h3>
                            <?php echo form_open_multipart(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_welcome_title" class="form-control" value="<?php echo $page_home['home_welcome_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Text </label>
                                    <div class="col-sm-6">
                                        <textarea name="home_welcome_text" class="form-control editor_short" cols="30" rows="10"><?php echo $page_home['home_welcome_text']; ?></textarea>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_welcome_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" <?php if($page_home['home_welcome_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                        <option value="Hide" <?php if($page_home['home_welcome_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_welcome">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                            


                            <h3 class="sec_title">Counter Section</h3>
                            <?php echo form_open_multipart(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="counter_title" class="form-control" value="<?php echo $page_home['counter_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Counter 1 Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="counter_1_title" class="form-control" value="<?php echo $page_home['counter_1_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Counter 1 Value </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="counter_1_value" class="form-control" value="<?php echo $page_home['counter_1_value']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Counter 2 Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="counter_2_title" class="form-control" value="<?php echo $page_home['counter_2_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Counter 2 Value </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="counter_2_value" class="form-control" value="<?php echo $page_home['counter_2_value']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Counter 3 Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="counter_3_title" class="form-control" value="<?php echo $page_home['counter_3_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Counter 3 Value </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="counter_4_value" class="form-control" value="<?php echo $page_home['counter_4_value']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Counter 4 Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="counter_4_title" class="form-control" value="<?php echo $page_home['counter_4_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Counter 4 Value </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="counter_4_value" class="form-control" value="<?php echo $page_home['counter_4_value']; ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_counter_text">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>


                            <h3 class="sec_title">Human Title Section</h3>
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Section Title </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="home_service_title" class="form-control" value="<?php echo $page_home['home_service_title']; ?>">
                                    </div>
                                    
                                </div>
                                
                              
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_service">Update</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                            <h3 class="sec_title">Testimonial Section</h3>
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Section Title </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="home_testimonial_title" class="form-control" value="<?php echo $page_home['home_testimonial_title']; ?>">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Sub Title </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="home_testimonial_subtitle" class="form-control" value="<?php echo $page_home['home_testimonial_subtitle']; ?>">
                                    </div>
                                    
                                </div>
                                
                              
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_testimonial">Update</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>



                            <h3 class="sec_title">News Section</h3>
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_blog_title" class="form-control" value="<?php echo $page_home['home_blog_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Number of news show on home page </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_blog_item" class="form-control" value="<?php echo $page_home['home_blog_item']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_blog_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" <?php if($page_home['home_blog_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                        <option value="Hide" <?php if($page_home['home_blog_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_blog">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>


                        </div>
<!--
                        <div class="tab-pane" id="tab_2">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">About Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="about_heading" class="form-control" value="<?php echo $page_about['about_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">About Content </label>
                                    <div class="col-sm-9">
                                        <textarea name="about_content" class="form-control" cols="30" rows="10" id="editor1"><?php echo $page_about['about_content']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_about" class="form-control" value="<?php echo $page_about['mt_about']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_about" style="height:60px;"><?php echo $page_about['mk_about']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_about" style="height:60px;"><?php echo $page_about['md_about']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_about">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>
                        <div class="tab-pane" id="tab_11">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Term & Condition Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="term_heading" class="form-control" value="<?php echo $page_term['term_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Term & Condition Content </label>
                                    <div class="col-sm-9">
                                        <textarea name="term_content" class="form-control" cols="30" rows="10" id="editor2"><?php echo $page_term['term_content']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_term" class="form-control" value="<?php echo $page_term['mt_term']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_term" style="height:60px;"><?php echo $page_term['mk_term']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_term" style="height:60px;"><?php echo $page_term['md_term']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_term">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>


                        <div class="tab-pane" id="tab_12">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Privacy Policy Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="privacy_heading" class="form-control" value="<?php echo $page_privacy['privacy_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Privacy Policy Content </label>
                                    <div class="col-sm-9">
                                        <textarea name="privacy_content" class="form-control" cols="30" rows="10" id="editor3"><?php echo $page_privacy['privacy_content']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_privacy" class="form-control" value="<?php echo $page_privacy['mt_privacy']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_privacy" style="height:60px;"><?php echo $page_privacy['mk_privacy']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_privacy" style="height:60px;"><?php echo $page_privacy['md_privacy']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_privacy">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>
                        



                        <div class="tab-pane" id="tab_4">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Faq Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="faq_heading" class="form-control" value="<?php echo $page_faq['faq_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_faq" class="form-control" value="<?php echo $page_faq['mt_faq']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_faq" style="height:60px;"><?php echo $page_faq['mk_faq']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_faq" style="height:60px;"><?php echo $page_faq['md_faq']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_faq">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>




                        



                        <div class="tab-pane" id="tab_9">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="contact_heading" class="form-control" value="<?php echo $page_contact['contact_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Map (iframe Code) </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="contact_map" style="height:120px;"><?php echo $page_contact['contact_map']; ?></textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_contact" class="form-control" value="<?php echo $page_contact['mt_contact']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_contact" style="height:60px;"><?php echo $page_contact['mk_contact']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_contact" style="height:60px;"><?php echo $page_contact['md_contact']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_contact">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>
-->

                        
                        



                        








                    </div>
                </div>

                
        </div>
    </div>

</section>