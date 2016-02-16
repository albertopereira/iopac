	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script type="text/javascript">
    $(function(){
    	$('#add_marcsubfield').on('click', function(e){
    			e.preventDefault();
				$('.table-marcsubfields').append("<tr><input type='hidden' name='records[" + $('.table-marcsubfields tr').length + "][id]' value=''><input type='hidden' name='records[" + $('.table-marcsubfields tr').length + "][tagfield]' value='" + $('#marcfield_id').val() + "'><td><input type='text' name='records[" + $('.table-marcsubfields tr').length + "][tagsubfield]'></td><td><input type='text' name='records[" + $('.table-marcsubfields tr').length + "][description]'></td><td><input type='checkbox' name='records[" + $('.table-marcsubfields tr').length + "][repeatable]'></td><td><input type='checkbox' name='records[" + $('.table-marcsubfields tr').length + "][mandatory]'></td><td><a href='http://127.0.0.1/admin/marcfields/1/delete/" + $('.table-marcsubfields tr').length + "' id='delete_" + $('.table-marcsubfields tr').length + "' data-title='Confirmation' data-text='Are you sure?' class='btn btn-danger btn-sm confirmActionLink'>Delete</a></td></tr>");
			});

		$(".form-confirm .confirmActionForm").on('click', function(e){
			e.preventDefault();
		  	selectedForm = $(this).parents('form:first');

		  	$("#confirm_modal").modal({
				backdrop: false
			});
		});

		$('.confirmAction').on('click', function(e){
			$("#confirm_modal").modal('hide');
			if(typeof selectedForm !== "undefined")
				selectedForm.submit();
			else
				window.location = selectedLink.attr('href');
		});

		$(".table-marcsubfields").on('click', '.confirmActionLink', function(e){
			e.preventDefault();
		  	selectedLink = $(this);

		  	if(!selectedLink.parent().parent().hasClass('edited-marcsubfield'))
		  	{
		  		selectedLink.parent().parent().remove();
		  		return true;
		  	}

		  	$("#confirm_modal").modal({
				backdrop: false
			});
		});

    	$('#confirm_modal').on('show.bs.modal', function (event) {
				if(typeof selectedForm !== "undefined")
				{
					var textInput = selectedForm.data('text');
					var titleInput = selectedForm.data('title');
				}
				else
				{
					var textInput = selectedLink.attr('data-text');
					var titleInput = selectedLink.attr('data-title');	
				}

				var modal = $(this);
				modal.find('#text').text(textInput);
				modal.find('.modal-title').text(titleInput);
			})

    	$('.table-marcfields-itemtypes tr').each(function(){
    		if($(this).children('td:first').find('input').attr('checked') == 'checked')
    			$(this).css('background-color', '#eeeeee');
    	});

    	$('.table-marcfields-itemtypes tr td').find('input').on('click', function(){
    		$(this).parent().parent().css('background-color', '#eeeeee');
    	});
    });
    </script>