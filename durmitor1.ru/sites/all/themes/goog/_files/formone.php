<?php ?>

<div class=questions_outer_wrap>
	<div class=questions_wraper>
		<div class=questions_ihner_wrap>
			<div class=questions_quest_wrapper>
				<script type="text/javascript" language="javascript">
				    function call() {

				    	var send_true = 0;

				    	$('#formquestone .form-control').each(function() {
				    		
						    if ($(this).val() == '')
						    {
						        $(this).addClass('error_form');
						        $('#formquestone button.submitbutton').text('Позвоните мне!');
						        send_true = 0;
						    }
						    if ($(this).val() != '') 
						    { 
						    	$(this).removeClass('error_form');
						    	send_true = send_true + 1;
						    }
						});
						
				    		if (send_true == 2) {
						   		var msg   = $('#formquestone').serialize();
							        $.ajax({
							          type: 'POST',
							          url: 'http://durmitor1.ru/sites/all/themes/goog/files/sendmailone.php',
							          data: msg,
							          success: function(data) {
							            $('#formquestone button.submitbutton').addClass('sent').text('Отправлено');
							          },
							          error:  function(xhr, str){
							        alert('Возникла ошибка: ' + xhr.responseCode);
							          }
							        });
							        
							        $('#formquestone')[0].reset();
							        $('#formquestone .form-control').removeClass('error_form');
						   } else {
						   		$('#formquestone button.submitbutton').text('Позвоните мне!');
						   }
					    }

				</script>
				<form id=formquestone class="inviteform" action="javascript:void(null);" onsubmit="call()" method="POST">


					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input class="form-control" type="text" placeholder="Введите ваше имя" name="name">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
							<input class="form-control" placeholder="Введите ваш телефон" name="phone"></input>
							
						</div>
					</div>		
	

					<button type="submit" class="btn btn-danger btn-lg btn-block submitbutton">Позвоните мне!</button>				

				</form>
			    <div class=clearfloat></div>
			</div>
		</div>
	</div>
</div>

<?php ?>