<?php
 $show_fields = !empty($show_fields)?$show_fields:array();
 $image_fields = !empty($image_fields)?$image_fields:array(); 
 $record_id = $this->uri->segment(2).'_id';
?>
<link href="<?php echo base_url() ;?>assets/css/uploadifive.css" rel="stylesheet" type="text/css"></link>


<section class="inbox-sec order-baner">
	<div class="container">
		<div class="inbox-head">
			<h5>inbox</h5>
			<div class="main_section">
   <div class="messagepage">
      <div class="row content">

        <!-- sidebar group -->
        <div class="sidebar-group col-md-4">

            <!-- Chats sidebar -->
            <div id="chats" class="sidebar active">
                
               <!-- <form class="searchbox">
                    <input type="text" class="form-control" placeholder="Search chats">
                </form>-->
                <div class="sidebar-body" tabindex="2" style="overflow: hidden; outline: none;">
                    <ul class="list-group list-group-flush">
                    <?php 
                    $l =0;
                    $sender_id 		= $this->session->userdata('id');
                    
                    if($chat->num_rows() > 0){ ?>
                    <?php 
                    foreach($chat->result() as $rows){ 
                    	$notificationData = $this->db->update('tbl_notification', array('status' => 1),array('chat_id' => $rows->id));
                        if($rows->user_id == $sender_id)
		            	{   
		            	    $users = $this->db->get_where('tbl_customer',array('customer_id' => $rows->driver_id));
						}else
						{
							$users = $this->db->get_where('tbl_customer',array('customer_id' => $rows->user_id));
						}
						$list= $l++;
		            	if($users->num_rows() > 0)
		            	{
		            		$user = $users->row();
							$em   = explode("@",$user->email);
							$em = $em[0];
						}else
						{
							$em   = '';
							$user = 0 ;
						}
						if(isset($_GET['chat_id']))
		            	{
							$chatid = $_GET['chat_id'];
						}else
						{
							$chatid = 0 ;
						}	
                    ?>
		              <li class="list-group-item chat_list conversationlist<?php echo $rows->id ; ?>   <?php if($rows->id == $chatid){ echo 'active_chat';}else if($list == 0){echo 'active_chat';} ?>" data-ids="<?php echo $rows->id; ?>" data-reciever="<?php  echo $rows->driver_id ; ?>" data-sender="<?php echo $rows->user_id ; ?>">
                            <div class="col-md-3">
                            	<figure class="avatar avatar_<?php echo $rows->id ; ?> avatar-state-success">
	                                <?= $user->photo ? '<img alt="" src="'.base_url().'public/uploads/'.$user->photo.'" class="rounded-circle">' :
					              '<img alt="" src="'.base_url().'public/uploads/non-image.png" class="rounded-circle">';
					              ?>				           
	                            </figure>   
                            </div>
                            <div class="col-md-9">
                            	<div class="users-list-body">
	                                <div>
	                                    <h5 class="text-primary selectename_<?php echo $rows->id; ?>"><?php echo $em  ;?></h5>
	                                    <p><?php echo $rows->lastmessage_message; ?></p>
	                                </div>
	                                <div class="users-list-action">
	                                    <!--<div class="new-message-count">3</div>-->
	                                    <small class="text-primary"><?php echo date('H:i A',strtotime($rows->lastmessage_datetime)) ; ?> </small>
	                                </div>
	                            </div>
                            </div>
                            
                        </li>
				    <?php } ?>
				    <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- ./ Chats sidebar -->

        </div>
        <!-- ./ sidebar group -->

        <!-- chat -->
        <div class="chat col-md-8">
            <div class="chat-header">
                <div class="chat-header-user">
                    <figure class="avatar selecedchatimage">
	                   <img alt="" src="http://localhost/e2talknewproject/e2talk_v_2/application/resources/img/users_image/thumbs/5dbe766952e24attachment_2c47ff17bd06b80f14b6646935005d0b.jpg" class="rounded-circle">					           
	                </figure>
                    <div>
                        <h5 class="selectedchatname">noorabbasi</h5>
                        <small class="text-success">
                            <i></i>
                        </small>
                    </div>
                </div>
                
            </div>
            <div class="chat-body" tabindex="1" style=""> <!-- .no-message -->
                
            <div class="messages">
                    
            </div>
            </div>
            <div class="chat-footer">
				<form class="messagesenform">
					<div class="messageform" data-emojiarea="" data-type="image" data-global-picker="false">
                    		<input type="file" name="message-attachment[]" class="image_file" id="first-message-attachment" multiple="">
							<input type="text" class="form-control write_msg" name="message" placeholder="Write a message.">
                    <div class="form-buttons">
						
                        
                        <button class="btn btn-primary" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        </button>
                    </div>
							<input type="hidden" class="reciever_id" value="94" name="reciever_id">
							<input type="hidden" class="sender_id" value="64" name="sender_id">
							<input type="hidden" class="postchat" value="0" name="postchat">
							<input type="hidden" class="user_id" value="<?php echo $this->session->userdata('id') ; ?>" name="user_id">
							<br>
					</div>		
							<ul class="attachments js-attachments-stop" id="queue"></ul>
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" class="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>"></input>
                </form>
						
            </div>
        </div>
        <!-- ./ chat -->

    </div>
     
   </div>
</div>
		</div>
	</div>
</section>


<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/jquery.uploadifive.js"></script>


<script type="text/javascript">
	 $('.chat_list').click(function(){
      	$('.chat_list').removeClass('active_chat');
      	var ids 		= $(this).data('ids');
      	var deletebtn 	= $(this).data('delete');
      	var sender_id	= $(this).data('data-sender');
      	var reciever_id	= $(this).data('data-reciever');
      	var getname     = $('.selectename_'+ids).text() ;
      	var getimage	= $('.avatar_'+ids).html();
      	$('.selecedchatimage').html(getimage);
      	$('.selectedchatname').text(getname);
      	$('.deletebutton').attr('data-usertype',deletebtn)
      	if(deletebtn == 'sender')
      	{
			$('.deletebutton').attr('data-user',sender_id)
		}else
		{
			$('.deletebutton').attr('data-user',reciever_id)
		}
      	$('.deletebutton').attr('data-ids',ids)
      	$(this).addClass('active_chat');
      	get_chats_messages();
      })
      
     setInterval(function() {
        get_chats_messages();
    }, 2500);
     
      function get_chats_messages()
     {
     
     	var chat_id = $('.active_chat').attr('data-ids');
     	var csrf_test_name = $('.csrf_test_name').val();
      	$('.deletebutton').attr('data-ids',chat_id)
     	var reciever_id = $('.active_chat').attr('data-reciever');
     	var sender_id = $('.active_chat').attr('data-sender');
     	var deletebtn 	= $('.active_chat').data('delete');
     	$('.deletebutton').attr('data-usertype',deletebtn)
     	var getname     = $('.selectename_'+chat_id).text() ;
      	var getimage	= $('.avatar_'+chat_id).html();
      	$('.selecedchatimage').html(getimage);
      	$('.selectedchatname').text(getname);
      	if(deletebtn == 'sender')
      	{
			
			$('.deletebutton').attr('data-user',sender_id)
		}else
		{
			$('.deletebutton').attr('data-user',reciever_id)
			$('.deletebutton').attr('data-user',reciever_id)
		}
     	$('.reciever_id').val(reciever_id);
     	$('.sender_id').val(sender_id);
     	var user_id = "<?php echo $this->session->userdata('id') ; ?>";
		 $.post("<?php echo base_url() ; ?>chat/messages", { chat_id: chat_id,user_id:user_id,csrf_test_name:csrf_test_name }, function(data) {

            /* Condition */
            if (data.status == 'ok') {
                //console.log(data.content);
                var current_content = $("div.messages").html();
                
                $("div.messages").html(data.content);
                
                if (!data.content == '') {
                    var notification = new Notification('Notification title', {
                      icon: '',
                      body: "Ada pesan masuk, silahkan cek!!",
                    });

                    notification.onclick = function () {
                      window.open("http://stackoverflow.com/a/13328397/1269037");      
                    };

                    /* Scroll each time you get new message */
					$('div.chat-body').scrollTop($('div.chat-body')[0].scrollHeight);
                } else {
                    
                }
                

            } else {
                /* Error here */
            }

        }, "json");

        return false;
    }


    get_chats_messages();
    
    
    
	$('.messagesenform').submit(function(e) {
		event.preventDefault();
		var formData = new FormData($(this)[0]);
		if ($('.write_msg').val() != '' || $('.image_url').val() != '') {

			var request = $.ajax({
				type: 'POST',
				url: '<?php echo base_url() ; ?>chat/create',
				mimeType:'application/json',
				dataType:'json',
				data: formData,
				contentType: false,
				processData: false,
				success: function(data) {
					if (data.success) {
						$(".messagesenform")[0].reset();
						$('.write_msg').val('');
						$('.emojionearea-editor').text("");
						$('.input_msg_write').removeClass('has-attachments')
						$('.js-attachments-stop').html('');
						get_chats_messages();
					} else {
						$('.successmessage').hide();
						$('.popup-main').show('slow');
					}
				},
				error: function(msg) {
					alert(JSON.stringify(msg,null,4));
				}
			});
		} else {

		}

	})
	
	
	
	$(function() {
	    var user_id = '<?php echo $this->session->userdata('id') ; ?>';
	    var csrf_test_name = $('.csrf_test_name').val();
		$('#first-message-attachment').uploadifive({
			'onSelect'		   : function(file, data) { $('.input_msg_write').addClass('has-attachments') },
			'auto'             : true,
			'buttonText'	   : '<button class="btn btn-light" data-toggle="tooltip" title="" type="button" data-original-title="Add files"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg></button>',
			//'checkScript'      : 'check-exists.php',
			'formData'         : {
				'timestamp' 	: '1591380627',
				'token'     	: '855c9f8184499a059417b6fd277328d8',
				'user_id'   	: user_id,
				'csrf_test_name': csrf_test_name,
			},
			'queueID'          : 'queue',
			'uploadScript'     : '<?php echo base_url() ; ?>chat/uploadimage',
			'onUploadComplete' : function(file, data) { file.queueItem.find('.fileinfo').html('<input type="hidden" name="imageurl[]" value="'+file.name+'"><input type="hidden" name="imagetype[]" value="'+file.type+'">'); }
		});
	});
	
	
	$('.emoji-trigger').click(function() {
		if ($('.emoji-picker-container').hasClass('shown')) {
			$('.emoji-picker-container').removeClass('shown');
		} else {
			$('.emoji-picker-container').addClass('shown');
		}
	})
</script>