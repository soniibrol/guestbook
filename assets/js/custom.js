$(document).ready(function(){
	loadMessage(); //mengambil data dari database untuk inisiasi awal

	//page akan merequest data terbaru setiap 1 menit
	setInterval(function(){
		loadMessage();
	},60000);

	//ketika button submit di klik, button submit di disable kan terlebih dahulu, lalu form dengan id guestbookForm di cek valid atau tidaknya
	$('#submit_button').click(function(){
		$('#submit_button').attr('disabled','true');
		if($('#guestbookForm').valid()==true){
			$.ajax({
				url: base_url + '/index.php/home/submit',
				type: 'POST',
				data: {
						'name' : $('#name').val(),
						'email' : $('#email').val(),
						'message' : $('#message').val()
						},
				cache: false,
				dataType: 'json',
				success:function(data){
					if(data.success==1){
						alert('Message sent succesfully');
					}else{
						alert('Message not sent');
					}
				},
				complete:function(){
					loadLastMessage();
					cleanForm();
					$('#submit_button').removeAttr('disabled');
				}
			});

			return false;
		}else{
			$('#guestbookForm').validate();
			$('#submit_button').removeAttr('disabled');
		}
	});
});

function cleanForm(){
	$('#name').val('');
	$('#email').val('');
	$('#message').val('');
}

function loadMessage(){
	$('#message_list').empty();
	$.ajax({
		url: base_url + 'index.php/home/loadMessage',
		cache: false,
		dataType: 'json',
		success: function(data){
			$.each(data.messages,function(key,value){
				var msg = '';

				msg += '<div class="message_list_member">';
				msg += '<div class="message_list_member_name"><b>'+value.name+'</b> '+value.email+'</div>';
				msg += '<div class="message_list_member_message">'+value.message+'</div>';
				msg += '<div class="message_list_member_time">'+value.time_posted+'</div>';
				msg += '</div>';

				$('#message_list').append(msg);
			});
		}
	});
}

function loadLastMessage(){
	$.ajax({
		url: base_url + 'index.php/home/loadMessage/true',
		cache: false,
		dataType: 'json',
		success: function(data){
			$.each(data.messages,function(key,value){
				var msg = '';

				msg += '<div class="message_list_member">';
				msg += '<div class="message_list_member_name"><b>'+value.name+'</b> '+value.email+'</div>';
				msg += '<div class="message_list_member_message">'+value.message+'</div>';
				msg += '<div class="message_list_member_time">'+value.time_posted+'</div>';
				msg += '</div>';

				$('.message_list_member:first').prepend(msg);
			});
		}
	});
}