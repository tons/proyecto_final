{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('shipping_id', 'Shipping_id:') !!}
			{!! Form::text('shipping_id') !!}
		</li>
		<li>
			{!! Form::label('payment_id', 'Payment_id:') !!}
			{!! Form::text('payment_id') !!}
		</li>
		<li>
			{!! Form::label('total', 'Total:') !!}
			{!! Form::text('total') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::label('date', 'Date:') !!}
			{!! Form::text('date') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}