<link rel="stylesheet" href="<?php echo base_url(); ?>assets/datepicker/css/bootstrap-datepicker.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/datepicker/css/custom.css" />
<script src="<?php echo base_url() ; ?>assets/datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ; ?>assets/datepicker/locales/bootstrap-datepicker.de.min.js"></script>
<section class="sear-view">
	<div class="container">
		<div class="row">
			
			<div class="col-md-12">
				<div class="chef-de">
					<div class="row">
            <div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="calendar" style="display: inline-block;"></div>
                        </div>
                        

                    </div>
                </div>
                <script type="text/javascript">
                    $.get("<?php echo base_url() ; ?>availabilty/getdate", function(data){
                        disabledDates = data.split(',');
                        $('.calendar').datepicker({
                            format: 'yyyy-mm-dd',
                            datesDisabled: disabledDates,
                            firstDay:1,
                            multidate: true,
                            language: 'en',
					        updateViewDate: true
                        });
                    });
                    /*
                    $('.calendar').map(function(index) {
                        $(this).datepicker({
                            defaultViewDate: {
                                year: (new Date()).getFullYear(),
                                month: (new Date()).getMonth() + index,
                                date: 1
                            },
                            multidate: true,
                            onSelectDate: function(date, month, year){
					          alert([year, month, date].join('-') + ' is: ' + this.isAvailable(date, month, year));
					        },
                            updateViewDate: false
                        });
                    });
                    */

                    // keep month in sync
  
                    var orderMonth = function(e) {
                        var target = e.target;
                        var date = e.date;
                        var calendars = $('.calendar');
                        var positionOfTarget = calendars.index(target);
                        calendars.each(function(index) {
                            if (this === target) {
                                return;
                            }
                            var newDate = new Date(date);
                            newDate.setUTCDate(1);
                            newDate.setMonth(
                                date.getMonth() + index - positionOfTarget
                            );

                            $(this).datepicker('_setDate', newDate, 'view');
                        });
                    };
                    $('.calendar').on('changeMonth', orderMonth);

                    // keep dates in sync
                    $('.calendar').on('changeDate', function(e) {
                        var calendars = $('.calendar');
                        var target = e.target;
                        var newDates = $(target).datepicker('getUTCDates');
                        jQuery.ajax({
							url  	: '<?php echo base_url() ; ?>availabilty/add',
							data 	: {date:newDates},
							type 	: 'GET',
							dataType : 'Json',
							success	: function(data) {
							if (data.success) {
								
								
							} else {

								
							}

							},error : function() {
							
							}
							})
					
                    });


                </script>
            </div>
        </div>
				</div>
			</div>
		</div>
	</div>
</section>
