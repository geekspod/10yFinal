<!DOCTYPE html>
<html>
<head>
	<title>9-Yards</title>
    <style >
    

.button {
    position: absolute;
    top: 50%;
}
</style>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


</head>
<body>
<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Select Categories Score</h1>
	</div>
	
</section>
<?php echo "<br>";echo "<br>";echo "<br>";?>
<?php echo "<br>";echo "<br>";echo "<br>";?>

<?php echo form_open_multipart(base_url().'admin/categories/add_categories_score',array('class' => 'form-horizontal')); ?>

<div class="d-flex justify-content-center my-4">
  <form class="range-field w-75">
    <input id="value" name="value" class="border-0" type="range" min="0" max="100" />
    <input type="hidden" value="<?php echo $categories_id; ?>" id="categories_id" name="categories_id">
  <span class="font-weight-bold text-primary ml-2 mt-1 valueSpan"></span>
</div>
<?php echo "<br>";echo "<br>";echo "<br>";?>

<button type="submit" class="btn btn-primary sb-btn loginbtn">Submit</button>
</form>
<?php echo form_close(); ?>

  <script type="text/javascript">
   $(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#value');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
}); 
  </script>
</body>
</html>