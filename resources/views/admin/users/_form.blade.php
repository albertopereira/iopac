		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control']) !!}
		</div>

		<!-- only show pass on create user -->
		@if($create)
			<div class="form-group">
				{!! Form::label('password', trans('messages.password_fl')) !!}
				{!! Form::password('password', null, ['id' => 'password', 'class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('password_confirmation', trans('messages.repeat_password')) !!}
				{!! Form::password('password_confirmation', null, ['id' => 'password_confirmation', 'class' => 'form-control']) !!}
			</div>
		@endif

		<div class="form-group">
			{!! Form::submit($submitLabel, ['class' => 'btn btn-success']) !!}
			<button class="btn btn-primary" onclick="javascript:history.back()" value="Cancel">Cancel</button>
		</div>
