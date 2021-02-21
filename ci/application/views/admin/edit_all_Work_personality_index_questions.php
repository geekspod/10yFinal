<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Work Personality Index</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/categories/view_Work_personality_index" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>



									 
							
 								
							

<section class="content">

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
<?php echo form_open_multipart(base_url().'admin/categories/edit_Work_personality_index_questions_data',array('class' => 'form-horizontal')); ?>
     <?php if(!empty($questions)){
							
							
								 ?>  
<!--1-->


    <input type="hidden" value="<?php echo $questions[0]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[0]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[0]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[0]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">1<span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name1" value="<?php echo $questions[0]['name'];?>">
							</div>
						</div>
						</div>

                       

<!-- 2nd -->
    <input type="hidden" value="<?php echo $questions[1]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
    <input type="hidden" value="<?php echo $questions[1]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
    <input type="hidden" value="<?php echo $questions[1]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
    <input type="hidden" value="<?php echo $questions[1]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

                    <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">2<span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name2" value="<?php echo $questions[1]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 3 -->
                         <input type="hidden" value="<?php echo $questions[2]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[2]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[2]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[2]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
               
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">3 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name3" value="<?php echo $questions[2]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 4 -->
                         <input type="hidden" value="<?php echo $questions[3]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[3]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[3]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[3]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">4 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name4" value="<?php echo $questions[3]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 5 -->
                         <input type="hidden" value="<?php echo $questions[4]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[4]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[4]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[4]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">5 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name5" value="<?php echo $questions[4]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 6 -->
                         <input type="hidden" value="<?php echo $questions[5]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[5]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[5]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[5]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">6* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name6" value="<?php echo $questions[5]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 7 -->
                        
                         <input type="hidden" value="<?php echo $questions[6]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[6]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[6]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[6]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">7* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name7" value="<?php echo $questions[6]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 8 -->
                        
                         <input type="hidden" value="<?php echo $questions[7]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[7]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[7]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[7]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">8* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name8" value="<?php echo $questions[7]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 9 -->
                        
                         <input type="hidden" value="<?php echo $questions[8]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[8]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[8]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[8]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">9* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name9" value="<?php echo $questions[8]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 10 -->
                        
                         <input type="hidden" value="<?php echo $questions[9]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[9]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[9]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[9]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">10* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name10" value="<?php echo $questions[9]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 11 -->
                        
                         <input type="hidden" value="<?php echo $questions[10]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[10]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[10]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[10]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
 
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">11* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name11" value="<?php echo $questions[10]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 12 -->
                         <input type="hidden" value="<?php echo $questions[11]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[11]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[11]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[11]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">12* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name12" value="<?php echo $questions[11]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 13 -->
                         <input type="hidden" value="<?php echo $questions[12]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[12]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[12]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[12]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">13* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name13" value="<?php echo $questions[12]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 14 -->
                         <input type="hidden" value="<?php echo $questions[13]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[13]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[13]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[13]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">14* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name14" value="<?php echo $questions[13]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 15 -->
                         <input type="hidden" value="<?php echo $questions[14]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[14]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[14]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[14]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">15* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name15" value="<?php echo $questions[14]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 16 -->
                         <input type="hidden" value="<?php echo $questions[15]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[15]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[15]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[15]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">16* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name16" value="<?php echo $questions[15]['name'];?>">
							</div>
						</div>
						</div>
                           

  <!-- 17 -->
  
   <input type="hidden" value="<?php echo $questions[16]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[16]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[16]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[16]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
        
  <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">17* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name17" value="<?php echo $questions[16]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 18 -->
                         <input type="hidden" value="<?php echo $questions[17]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[17]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[17]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[17]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
     
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">18* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name18" value="<?php echo $questions[17]['name'];?>">
							</div>
						</div>
						</div>
                         
                        <!-- 19 -->
                         <input type="hidden" value="<?php echo $questions[18]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[18]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[18]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[18]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">19* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name19" value="<?php echo $questions[18]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 20 -->
                         <input type="hidden" value="<?php echo $questions[19]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[19]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[19]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[19]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">20* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name20" value="<?php echo $questions[19]['name'];?>">
							</div>
						</div>
						</div>
                           <!--20 end-->
                           <!--21-->
                            <input type="hidden" value="<?php echo $questions[20]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[20]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[20]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[20]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
 
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">21 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name21" value="<?php echo $questions[20]['name'];?>">
							</div>
						</div>
						</div>

                       

<!-- 2nd -->
<input type="hidden" value="<?php echo $questions[21]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[21]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[21]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[21]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

                    <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">22 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name22" value="<?php echo $questions[21]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 23 -->
                        <input type="hidden" value="<?php echo $questions[22]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[22]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[22]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[22]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
      
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">23 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name23" value="<?php echo $questions[22]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 24 -->
                        <input type="hidden" value="<?php echo $questions[23]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[23]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[23]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[23]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
     
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">24 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name24" value="<?php echo $questions[23]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 25 -->
                        <input type="hidden" value="<?php echo $questions[24]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[24]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[24]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[24]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">25 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name25" value="<?php echo $questions[24]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 26 -->
                        <input type="hidden" value="<?php echo $questions[25]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[25]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[25]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[25]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
 
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">26* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name26" value="<?php echo $questions[25]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 27 -->
                        <input type="hidden" value="<?php echo $questions[26]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[26]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[26]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[26]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
 
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">27* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name27" value="<?php echo $questions[26]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 28 -->
                        <input type="hidden" value="<?php echo $questions[27]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[27]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[27]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[27]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
 
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">28* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name28" value="<?php echo $questions[27]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 29 -->
                        <input type="hidden" value="<?php echo $questions[28]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[28]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[28]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[28]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">29* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name29" value="<?php echo $questions[28]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 30 -->
                        <input type="hidden" value="<?php echo $questions[29]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[29]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[29]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[29]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
      
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">30* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name30" value="<?php echo $questions[29]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 31 -->
                        
                        <input type="hidden" value="<?php echo $questions[30]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[30]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[30]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[30]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
     
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">31* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name31" value="<?php echo $questions[30]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 32 -->
                        <input type="hidden" value="<?php echo $questions[31]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[31]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[31]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[31]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">32* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name32" value="<?php echo $questions[31]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 33 -->
                         <input type="hidden" value="<?php echo $questions[32]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[32]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[32]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[32]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
 
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">33* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name33" value="<?php echo $questions[32]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 34 -->
                         <input type="hidden" value="<?php echo $questions[33]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[33]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[33]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[33]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
 
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">34* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name34" value="<?php echo $questions[33]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 35 -->
                         <input type="hidden" value="<?php echo $questions[34]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[34]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[34]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[34]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">35* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name35" value="<?php echo $questions[34]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 36 -->
                         <input type="hidden" value="<?php echo $questions[35]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[35]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[35]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[35]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">36* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name36" value="<?php echo $questions[35]['name'];?>">
							</div>
						</div>
						</div>
                           

  <!-- 37 -->
   <input type="hidden" value="<?php echo $questions[36]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[36]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[36]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[36]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
  <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">37* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name37" value="<?php echo $questions[36]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 38 -->
                         <input type="hidden" value="<?php echo $questions[37]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[37]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[37]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[37]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
     
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">38* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name38" value="<?php echo $questions[37]['name'];?>">
							</div>
						</div>
						</div>
                         
                        <!-- 39 -->
                         <input type="hidden" value="<?php echo $questions[38]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[38]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[38]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[38]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
     
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">39* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name39" value="<?php echo $questions[38]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 40 -->
                         <input type="hidden" value="<?php echo $questions[39]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[39]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[39]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[39]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
    
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">40* <span></span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name40" value="<?php echo $questions[39]['name'];?>">
							</div>
						</div>
						</div>
                           <!--40-->
                           <!--41-->
                            <input type="hidden" value="<?php echo $questions[40]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[40]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[40]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[40]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">41 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name41" value="<?php echo $questions[40]['name'];?>">
							</div>
						</div>
						</div>

                       

<!-- 42 -->
 <input type="hidden" value="<?php echo $questions[41]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[41]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[41]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[41]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
     
                    <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">42 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name42" value="<?php echo $questions[41]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 43 -->
                         <input type="hidden" value="<?php echo $questions[42]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[42]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[42]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[42]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">43 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name43" value="<?php echo $questions[42]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 44 -->
                         <input type="hidden" value="<?php echo $questions[43]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[43]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[43]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[43]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
    
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">44 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name44" value="<?php echo $questions[43]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 45 -->
                         <input type="hidden" value="<?php echo $questions[44]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[44]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[44]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[44]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">45 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name45" value="<?php echo $questions[44]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 46 -->
                         <input type="hidden" value="<?php echo $questions[45]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[45]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[45]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[45]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
    
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">46 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name46" value="<?php echo $questions[45]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 47 -->
                         <input type="hidden" value="<?php echo $questions[46]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[46]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[46]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[46]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">47 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name47" value="<?php echo $questions[46]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 48 -->
                         <input type="hidden" value="<?php echo $questions[47]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[47]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[47]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[47]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
    
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">48 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name48" value="<?php echo $questions[47]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 49 -->
                         <input type="hidden" value="<?php echo $questions[48]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[48]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[48]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[48]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
    
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">49 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name49" value="<?php echo $questions[48]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 50 -->
                         <input type="hidden" value="<?php echo $questions[49]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[49]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[49]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[49]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">50 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name50" value="<?php echo $questions[49]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 51 -->
                         <input type="hidden" value="<?php echo $questions[50]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[50]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[50]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[50]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">51 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name51" value="<?php echo $questions[50]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 52 -->
                         <input type="hidden" value="<?php echo $questions[51]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[51]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[51]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[51]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
 
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">52 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name52" value="<?php echo $questions[51]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 53 -->
                         <input type="hidden" value="<?php echo $questions[52]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[52]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[52]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[52]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">53 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name53" value="<?php echo $questions[52]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 54 -->
                         <input type="hidden" value="<?php echo $questions[53]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[53]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[53]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[53]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">54 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name54" value="<?php echo $questions[53]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 55 -->
                         <input type="hidden" value="<?php echo $questions[54]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[54]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[54]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[54]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">55 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name55" value="<?php echo $questions[54]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 56 -->
                         <input type="hidden" value="<?php echo $questions[55]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[55]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[55]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[55]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
     
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">56 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name56" value="<?php echo $questions[55]['name'];?>">
							</div>
						</div>
						</div>
                           

  <!-- 57 -->
   <input type="hidden" value="<?php echo $questions[56]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[56]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[56]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[56]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
     
  <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">57 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name57" value="<?php echo $questions[56]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 58 -->
                         <input type="hidden" value="<?php echo $questions[57]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[57]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[57]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[57]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
     
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">58 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name58" value="<?php echo $questions[57]['name'];?>">
							</div>
						</div>
						</div>
                         
                        <!-- 59 -->
                         <input type="hidden" value="<?php echo $questions[58]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[58]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[58]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[58]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">59 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name59" value="<?php echo $questions[58]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 60 -->
                         <input type="hidden" value="<?php echo $questions[59]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[59]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[59]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[59]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
    
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">60 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name60" value="<?php echo $questions[59]['name'];?>">
							</div>
						</div>
						</div>
                           <!--60-->
                          
                            <input type="hidden" value="<?php echo $questions[60]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[60]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[60]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[60]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">61 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name61" value="<?php echo $questions[60]['name'];?>">
							</div>
						</div>
						</div>

                       

<!-- 62-->
  <input type="hidden" value="<?php echo $questions[61]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[61]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[61]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[61]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
 
                    <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">62 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name62" value="<?php echo $questions[61]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 63 -->
                          <input type="hidden" value="<?php echo $questions[62]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[62]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[62]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[62]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">63 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name63" value="<?php echo $questions[62]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 64 -->
                          <input type="hidden" value="<?php echo $questions[63]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[63]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[63]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[63]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">64 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name64" value="<?php echo $questions[63]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 65 -->
                          <input type="hidden" value="<?php echo $questions[64]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[64]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[64]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[64]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
    
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">65 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name65" value="<?php echo $questions[64]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 66 -->
                          <input type="hidden" value="<?php echo $questions[65]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[65]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[65]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[65]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">66 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name66" value="<?php echo $questions[6]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 67 -->
                          <input type="hidden" value="<?php echo $questions[66]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[66]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[66]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[66]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">67 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name67" value="<?php echo $questions[66]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 68 -->
                          <input type="hidden" value="<?php echo $questions[67]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[67]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[67]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[67]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
 
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">68 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name68" value="<?php echo $questions[67]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 69 -->
                          <input type="hidden" value="<?php echo $questions[68]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[68]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[68]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[68]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">69 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name69" value="<?php echo $questions[68]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!--70-->
                          <input type="hidden" value="<?php echo $questions[69]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[69]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[69]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[69]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

                           <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">70 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name70" value="<?php echo $questions[69]['name'];?>">
							</div>
						</div>
						</div> 
                           
					

<!-- 71 -->
  
  <input type="hidden" value="<?php echo $questions[70]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[70]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[70]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[70]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
    
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">71 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name71" value="<?php echo $questions[70]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 72 -->
                         <input type="hidden" value="<?php echo $questions[71]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[71]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[71]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[71]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">72 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name72" value="<?php echo $questions[71]['name'];?>">
							</div>
						</div>
						</div>
                           

  <!-- 73 -->
   <input type="hidden" value="<?php echo $questions[72]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[72]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[72]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[72]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

  <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">73 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name73" value="<?php echo $questions[72]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 74 -->
                         <input type="hidden" value="<?php echo $questions[73]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[73]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[73]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[73]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">74 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name74" value="<?php echo $questions[73]['name'];?>">
							</div>
						</div>
						</div>
                         
                        <!-- 75 -->
                         <input type="hidden" value="<?php echo $questions[74]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[74]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[74]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[74]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">75 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name75" value="<?php echo $questions[74]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 76 -->
                         <input type="hidden" value="<?php echo $questions[75]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[75]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[75]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[75]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">76 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name76" value="<?php echo $questions[75]['name'];?>">
							</div>
						</div>
						</div>
                        
                           <!--77-->
                            <input type="hidden" value="<?php echo $questions[76]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[76]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[76]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[76]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">77 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name77" value="<?php echo $questions[76]['name'];?>">
							</div>
						</div>
						</div>

                       

<!-- 78 -->
 <input type="hidden" value="<?php echo $questions[77]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[77]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[77]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[77]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                    <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">78 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name78" value="<?php echo $questions[77]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 79 -->
                         <input type="hidden" value="<?php echo $questions[78]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[78]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[78]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[78]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
    
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">79 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name79" value="<?php echo $questions[78]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 80 -->
                         <input type="hidden" value="<?php echo $questions[79]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[79]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[79]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[79]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">80 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name80" value="<?php echo $questions[79]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 81 -->
                         <input type="hidden" value="<?php echo $questions[80]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[80]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[80]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[80]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">81 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name81" value="<?php echo $questions[80]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 82 -->
                         <input type="hidden" value="<?php echo $questions[81]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[81]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[81]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[81]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">

                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">82 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name82" value="<?php echo $questions[81]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 83 -->
                         <input type="hidden" value="<?php echo $questions[82]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[82]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[82]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[82]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
 
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">83 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name83" value="<?php echo $questions[82]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 84 -->
                         <input type="hidden" value="<?php echo $questions[83]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[83]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[83]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[83]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">84 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name84" value="<?php echo $questions[83]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 85 -->
                         <input type="hidden" value="<?php echo $questions[84]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[84]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[84]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[84]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">85 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name85" value="<?php echo $questions[84]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 86 -->
                         <input type="hidden" value="<?php echo $questions[85]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[85]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[85]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[85]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">86 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name86" value="<?php echo $questions[85]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 87 -->
                         <input type="hidden" value="<?php echo $questions[86]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[86]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[86]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[86]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">87 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name87" value="<?php echo $questions[86]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 88 -->
                         <input type="hidden" value="<?php echo $questions[87]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[87]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[87]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[87]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">88 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name88" value="<?php echo $questions[87]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 89 -->
                         <input type="hidden" value="<?php echo $questions[88]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[88]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[88]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[88]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">89 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name89" value="<?php echo $questions[88]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 90 -->
                         <input type="hidden" value="<?php echo $questions[89]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[89]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[89]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[89]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">90 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name90" value="<?php echo $questions[89]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 91 -->
                         <input type="hidden" value="<?php echo $questions[90]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[90]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[90]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[90]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">91 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name91" value="<?php echo $questions[90]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 92 -->
                         <input type="hidden" value="<?php echo $questions[91]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[91]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[91]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[91]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
 
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">92 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name92" value="<?php echo $questions[91]['name'];?>">
							</div>
						</div>
						</div>
                           

  <!-- 93 -->
   <input type="hidden" value="<?php echo $questions[92]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[92]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[92]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[92]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
  <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">93 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name93" value="<?php echo $questions[92]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 94 -->
                         <input type="hidden" value="<?php echo $questions[93]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[93]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[93]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[93]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">94 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name94" value="<?php echo $questions[93]['name'];?>">
							</div>
						</div>
						</div>
                         
                        <!-- 95 -->
                         <input type="hidden" value="<?php echo $questions[94]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[94]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[94]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[94]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">95 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name95" value="<?php echo $questions[94]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 96 -->
                         <input type="hidden" value="<?php echo $questions[95]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[95]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[95]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[95]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">96 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name96" value="<?php echo $questions[95]['name'];?>">
							</div>
						</div>
						</div>
                        
                           <!--97-->
                            <input type="hidden" value="<?php echo $questions[96]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[96]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[96]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[96]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
 
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">97 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name97" value="<?php echo $questions[96]['name'];?>">
							</div>
						</div>
						</div>

                       

<!-- 98-->
  <input type="hidden" value="<?php echo $questions[97]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[97]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[97]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[97]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                    <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">98 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name98" value="<?php echo $questions[97]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 99 -->
                          <input type="hidden" value="<?php echo $questions[98]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[98]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[98]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[98]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
    
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">99 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name99" value="<?php echo $questions[98]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 100 -->
                          <input type="hidden" value="<?php echo $questions[99]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[99]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[99]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[99]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">100 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name100" value="<?php echo $questions[99]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 101 -->
                          <input type="hidden" value="<?php echo $questions[100]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[100]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[100]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[100]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">101 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name101" value="<?php echo $questions[100]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 102 -->
                          <input type="hidden" value="<?php echo $questions[101]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[101]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[101]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[101]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">102 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name102" value="<?php echo $questions[101]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 103 -->
                          <input type="hidden" value="<?php echo $questions[102]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[102]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[102]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[102]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">103 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name103" value="<?php echo $questions[102]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 104 -->
                          <input type="hidden" value="<?php echo $questions[103]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[103]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[103]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[103]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
   
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">104 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name104" value="<?php echo $questions[103]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 105 -->
                          <input type="hidden" value="<?php echo $questions[104]['questions_assessment_id']; ?>" id="questions_assessment_id[]" name="questions_assessment_id[]">
      <input type="hidden" value="<?php echo $questions[104]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[104]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        <input type="hidden" value="<?php echo $questions[104]['sub_categories_names']; ?>" id="sub_categories_names[]" name="sub_categories_names[]">
  
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">105 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name105" value="<?php echo $questions[104]['name'];?>">
							</div>
						</div>
						</div>
                           
                        
                           
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-8">
								<button type="submit" class="btn btn-success pull-left" name="form2">Submit</button>
							</div>
						</div>
					</div>
				</div>

<?php  }?>
			<?php echo form_close(); ?>


		</div>
	</div>

</section>
<!-- 1 -->
<script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value1');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 2 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value2');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 3 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value3');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 4 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value4');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 5 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value5');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 6 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value6');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 7 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value7');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 8 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value8');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 9 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value9');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 10 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value10');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 11 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value11');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 12 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value12');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 13 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value13');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 14 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value14');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 15 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value15');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
  <!-- 16 -->
  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value16');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>