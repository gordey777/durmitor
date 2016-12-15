<?php ?>

<div class="questions_outer_wrap repeat_form">
	<div class=questions_wraper>
		<div class=questions_ihner_wrap>
			<div class=questions_quest_wrapper>
				<script type="text/javascript" language="javascript">
				    function call1() {

				    	var send_true = 0;

				    	$('#formquesttwo .form-control').each(function() {

						    if ($(this).val() == '')
						    {
						        $(this).addClass('error_form');
						        $('#formquesttwo button.submitbutton').text('Нанять нас!');
						        send_true = 0;
						    }
						    if ($(this).val() != '')
						    {
						    	$(this).removeClass('error_form');
						    	send_true = send_true + 1;
						    }
						});

				    		if (send_true == 2) {
						   		var msg   = $('#formquesttwo').serialize();
							        $.ajax({
							          type: 'POST',
							          url: 'http://durmitor1.ru/sites/all/themes/goog/files/sendmailtwo.php',
							          data: msg,
							          success: function(data) {
							            $('#formquesttwo button.submitbutton').addClass('sent').text('Отправлено');
							          },
							          error:  function(xhr, str){
							        alert('Возникла ошибка: ' + xhr.responseCode);
							          }
							        });

							        $('#formquesttwo')[0].reset();
							        $('#formquesttwo .form-control').removeClass('error_form');
						   } else {
						   		$('#formquesttwo button.submitbutton').text('Нанять нас!');
						   }
					    }

				</script>
				<form id=formquesttwo class="inviteform" action="javascript:void(null);" onsubmit="call1()" method="POST">

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
							<input class="form-control" type="text" required placeholder="Введите ваш телефон" name="phone">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
							<input class="form-control" type="text" required placeholder="Введите ваш e-mail" name="email"></input>
						</div>
					</div>

					<button type="submit" class="btn btn-danger btn-lg btn-block submitbutton">Записаться!</button>

				</form>
			    <div class=clearfloat></div>
			</div>
		</div>
	</div>
</div>

<?php ?>
