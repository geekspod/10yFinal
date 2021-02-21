<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Nayatel Values Assessment</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/categories/view_all_nayatel_values_assessment" class="btn btn-primary btn-sm">View All</a>
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
<?php echo form_open_multipart(base_url().'admin/categories/edit_all_nayatel_questions_data',array('class' => 'form-horizontal')); ?>
     <?php if(!empty($questions)){
							
							
								 ?>  
<!--1-->


    <input type="hidden" value="<?php echo $questions[0]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[0]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[0]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">1 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name1" value="<?php echo $questions[0]['name'];?>">
							</div>
						</div>
						</div>

                       

<!-- 2nd -->
                 <input type="hidden" value="<?php echo $questions[1]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[1]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[1]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
                    <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">2 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name2" value="<?php echo $questions[1]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 3 -->
                         <input type="hidden" value="<?php echo $questions[2]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[2]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[2]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
                        
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
                         <input type="hidden" value="<?php echo $questions[3]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[3]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[3]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[4]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[4]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[4]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[5]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[5]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[5]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">6 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name6" value="<?php echo $questions[5]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 7 -->
                        
                         <input type="hidden" value="<?php echo $questions[6]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[6]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[6]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">7 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name7" value="<?php echo $questions[6]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 8 -->
                        
                         <input type="hidden" value="<?php echo $questions[7]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[7]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[7]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">8 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name8" value="<?php echo $questions[7]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 9 -->
                        
                         <input type="hidden" value="<?php echo $questions[8]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[8]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[8]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">9 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name9" value="<?php echo $questions[8]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 10 -->
                        
                         <input type="hidden" value="<?php echo $questions[9]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[9]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[9]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">10 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name10" value="<?php echo $questions[9]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 11 -->
                        
                         <input type="hidden" value="<?php echo $questions[10]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[10]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[10]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">11 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name11" value="<?php echo $questions[10]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 12 -->
                         <input type="hidden" value="<?php echo $questions[11]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[11]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[11]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">12 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name12" value="<?php echo $questions[11]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 13 -->
                         <input type="hidden" value="<?php echo $questions[12]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[12]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[12]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">13 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name13" value="<?php echo $questions[12]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 14 -->
                         <input type="hidden" value="<?php echo $questions[13]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[13]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[13]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">14 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name14" value="<?php echo $questions[13]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 15 -->
                         <input type="hidden" value="<?php echo $questions[14]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[14]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[14]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">15 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name15" value="<?php echo $questions[14]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 16 -->
                         <input type="hidden" value="<?php echo $questions[15]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[15]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[15]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">16 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name16" value="<?php echo $questions[15]['name'];?>">
							</div>
						</div>
						</div>
                           

  <!-- 17 -->
  
   <input type="hidden" value="<?php echo $questions[16]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[16]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[16]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
        
  <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">17 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name17" value="<?php echo $questions[16]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 18 -->
                         <input type="hidden" value="<?php echo $questions[17]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[17]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[17]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">18 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name18" value="<?php echo $questions[17]['name'];?>">
							</div>
						</div>
						</div>
                         
                        <!-- 19 -->
                         <input type="hidden" value="<?php echo $questions[18]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[18]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[18]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">19 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name19" value="<?php echo $questions[18]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 20 -->
                         <input type="hidden" value="<?php echo $questions[19]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[19]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[19]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">20 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name20" value="<?php echo $questions[19]['name'];?>">
							</div>
						</div>
						</div>
                           <!--20 end-->
                           <!--21-->
                            <input type="hidden" value="<?php echo $questions[20]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[20]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[20]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
<input type="hidden" value="<?php echo $questions[21]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[21]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[21]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                        <input type="hidden" value="<?php echo $questions[22]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[22]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[22]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                        <input type="hidden" value="<?php echo $questions[23]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[23]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[23]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                        <input type="hidden" value="<?php echo $questions[24]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[24]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[24]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                        <input type="hidden" value="<?php echo $questions[25]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[25]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[25]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">26 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name26" value="<?php echo $questions[25]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 27 -->
                        <input type="hidden" value="<?php echo $questions[26]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[26]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[26]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">27 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name27" value="<?php echo $questions[26]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 28 -->
                        <input type="hidden" value="<?php echo $questions[27]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[27]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[27]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">28 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name28" value="<?php echo $questions[27]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 29 -->
                        <input type="hidden" value="<?php echo $questions[28]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[28]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[28]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">29 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name29" value="<?php echo $questions[28]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 30 -->
                        <input type="hidden" value="<?php echo $questions[29]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[29]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[29]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">30 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name30" value="<?php echo $questions[29]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 31 -->
                        
                        <input type="hidden" value="<?php echo $questions[30]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[30]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[30]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">31 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name31" value="<?php echo $questions[30]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 32 -->
                        <input type="hidden" value="<?php echo $questions[31]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[31]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[31]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">32 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name32" value="<?php echo $questions[31]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 33 -->
                         <input type="hidden" value="<?php echo $questions[32]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[32]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[32]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">33 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name33" value="<?php echo $questions[32]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 34 -->
                         <input type="hidden" value="<?php echo $questions[33]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[33]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[33]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">34 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name34" value="<?php echo $questions[33]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 35 -->
                         <input type="hidden" value="<?php echo $questions[34]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[34]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[34]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">35 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name35" value="<?php echo $questions[34]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 36 -->
                         <input type="hidden" value="<?php echo $questions[35]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[35]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[35]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">36 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name36" value="<?php echo $questions[35]['name'];?>">
							</div>
						</div>
						</div>
                           

  <!-- 37 -->
   <input type="hidden" value="<?php echo $questions[36]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[36]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[36]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
  <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">37 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name37" value="<?php echo $questions[36]['name'];?>">
							</div>
						</div>
						</div>
                          
                        <!-- 38 -->
                         <input type="hidden" value="<?php echo $questions[37]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[37]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[37]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">38 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name38" value="<?php echo $questions[37]['name'];?>">
							</div>
						</div>
						</div>
                         
                        <!-- 39 -->
                         <input type="hidden" value="<?php echo $questions[38]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[38]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[38]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">39 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name39" value="<?php echo $questions[38]['name'];?>">
							</div>
						</div>
						</div>
                           
                        <!-- 40 -->
                         <input type="hidden" value="<?php echo $questions[39]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[39]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[39]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                        <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">40 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name40" value="<?php echo $questions[39]['name'];?>">
							</div>
						</div>
						</div>
                           <!--40-->
                           <!--41-->
                            <input type="hidden" value="<?php echo $questions[40]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[40]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[40]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
 <input type="hidden" value="<?php echo $questions[41]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[41]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[41]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[42]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[42]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[42]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[43]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[43]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[43]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[44]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[44]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[44]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[45]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[45]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[45]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[46]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[46]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[46]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[47]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[47]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[47]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[48]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[48]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[48]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[49]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[49]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[49]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[50]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[50]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[50]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[51]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[51]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[51]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[52]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[52]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[52]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[53]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[53]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[53]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[54]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[54]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[54]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[55]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[55]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[55]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
   <input type="hidden" value="<?php echo $questions[56]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[56]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[56]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[57]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[57]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[57]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[58]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[58]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[58]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                         <input type="hidden" value="<?php echo $questions[59]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[59]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[59]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                           <!--61-->
                            <input type="hidden" value="<?php echo $questions[60]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[60]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[60]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
  <input type="hidden" value="<?php echo $questions[61]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[61]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[61]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                          <input type="hidden" value="<?php echo $questions[62]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[62]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[62]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                          <input type="hidden" value="<?php echo $questions[63]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[63]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[63]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                          <input type="hidden" value="<?php echo $questions[64]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[64]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[64]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                          <input type="hidden" value="<?php echo $questions[65]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[65]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[65]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                          <input type="hidden" value="<?php echo $questions[66]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[66]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[66]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                          <input type="hidden" value="<?php echo $questions[67]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[67]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[67]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                          <input type="hidden" value="<?php echo $questions[68]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[68]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[68]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
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
                          <input type="hidden" value="<?php echo $questions[69]['questions_id']; ?>" id="questions_id[]" name="questions_id[]">
      <input type="hidden" value="<?php echo $questions[69]['dimensions_name']; ?>" id="dimensions_name[]" name="dimensions_name[]">
        <input type="hidden" value="<?php echo $questions[69]['categories_id']; ?>" id="categories_id[]" name="categories_id[]">
        
                           <div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">70 <span>*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name70" value="<?php echo $questions[69]['name'];?>">
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