<?php ?>

<div class=questions_outer_wrap>
	<div class=questions_wraper>
		<div class=questions_ihner_wrap>
			<h1>У вас остались вопросы?</h1>
			<div class=questions_quest_wrapper>
				<script type="text/javascript" language="javascript">
				    function call2() {

				    	var send_true = 0;

				    	$('#formquestthree .form-control').each(function() {
				    		
						    if ($(this).val() == '')
						    {
						        $(this).addClass('error_form');
						        $('#formquestthree button.submitbutton').text('Отправить вопрос!');
						        send_true = 0;
						    }
						    if ($(this).val() != '') 
						    { 
						    	$(this).removeClass('error_form');
						    	send_true = send_true + 1;
						    }
						});
						
				    		if (send_true == 2) {
						   		var msg   = $('#formquestthree').serialize();
							        $.ajax({
							          type: 'POST',
							          url: 'http://durmitor1.ru/sites/all/themes/goog/files/sendmailthree.php',
							          data: msg,
							          success: function(data) {
							            $('#formquestthree button.submitbutton').addClass('sent').text('Отправлено');
							          },
							          error:  function(xhr, str){
							        alert('Возникла ошибка: ' + xhr.responseCode);
							          }
							        });
							        
							        $('#formquestthree')[0].reset();
							        $('#formquestthree .form-control').removeClass('error_form');
						   } else {
						   		$('#formquestthree button.submitbutton').text('Отправить вопрос!');
						   }
					    }

				</script>
				<form id=formquestthree class="inviteform" action="javascript:void(null);" onsubmit="call2()" method="POST">

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
							<input class="form-control" type="text" placeholder="Введите e-mail" name="mail">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
							<textarea class="form-control" placeholder="Чем мы можем Вам помочь?" name="mess"></textarea>
						</div>
					</div>				

					<button type="submit" class="btn btn-danger btn-lg btn-block submitbutton">Отправить вопрос!</button>				

				</form>
			    <div class=custom_clear></div>
			</div>
		</div>
	</div>
</div>

<?php ?>