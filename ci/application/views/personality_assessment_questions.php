<section class="content-header" style="display:none">
	<div class="content-header-left">
    <?php echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>";?>
		<h1>Questions</h1>
	</div>
	<div class="content-header-right">
		<!-- <a href="<?php echo base_url(); ?>admin/categories/add_nayatel_values_assessment" class="btn btn-primary btn-sm">Add New</a> -->
	</div>
</section>

<?php echo form_open_multipart(base_url().'login/personality_assessment_questions_data',array('class' => 'form-horizontal')); ?>
<input type="hidden" class="email" name="email" value="<?php echo $dashboard_data['email'];?>"

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

      <div class="box box-info">
        
        <div class="box-body table-responsive"style="width: 80%;
    margin: 0 auto">
            <h1 style="    color: #4172a5">Questions</h1>
            
          <table id="checkboxes" class="table table-bordered table-striped">
			<thead>
			    <tr>
			        <th>SL</th>
			        <th>Items</th>
                    <th>Strongly Dislike</th>
                    <th>Somewhat Dislike</th>
                    <th>Neither Like Nor Dislike</th>
                    <th>Somewhat Like</th>
                    <th>Strongly Like</th>
                    
                    <!-- <th>Add Score</th> -->
			    </tr>
			</thead>
            <tbody>
            	<?php
                $i=0;
                if (!empty($personality_assessment_questions)){
            	foreach ($personality_assessment_questions as $row) {
            		$i++;
            		?>
					<tr>
	                    <td><?php echo $i; ?></td>
	                    <td><?php echo $row['name']; ?></td>



	
                        <!-- <input type='hidden' value='0' name='checkbox[]'> -->

                        <td><input type="checkbox" name="checkbox[]" value="0" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" name="checkbox[]" value="1" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" name="checkbox[]" value="2" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" name="checkbox[]" value="3" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
                        <td><input type="checkbox" name="checkbox[]" value="5" data-bind="checked: $data.queuedValues, checkedValue: policyNumber" /></td>
 

  <?php
  $count_total_uploads=$count;
  if($i == $count_total_uploads){
break;
                    }
                }
            }
            	?>
                        </tr>
            		
            </tbody>
          </table>
                        <button name="form2" type="submit" class="btn btn-primary sb-btn loginbtn" style="    width: 16%;
    margin-left: 430px;margin-top:20px">Submit</button>

                        <?php echo form_close(); ?>
                      
                        
	                    <!-- <td>
	                        <a href="<?php echo base_url(); ?>admin/categories/edit_Work_personality_index/<?php echo $row['questions_assessment_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
	                        <a href="<?php echo base_url(); ?>admin/categories/delete_Work_personality_index/<?php echo $row['questions_assessment_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>

                        </td> -->
                        <!-- <td>
                        <a href="<?php echo base_url(); ?>admin/categories/add_score/<?php echo $row['categories_id']; ?>" class="btn btn-primary btn-xs">Add score</a>
</td> -->
                       
	               
        </div>
      </div>
</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                Are you sure want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<script>
function QueryViewModel(){

var self = this;
....
self.queuedValues=ko.observableArray([]);
}
</script>

<script>
$( document ).ready(function() {
    $('input[type="checkbox"]').on('change', function() {
      var checkedValue = $(this).prop('checked');
        // uncheck sibling checkboxes (checkboxes on the same row)
        $(this).closest('tr').find('input[type="checkbox"]').each(function(){
           $(this).prop('checked',false);
        });
        $(this).prop("checked",checkedValue);

    });
});
</script>