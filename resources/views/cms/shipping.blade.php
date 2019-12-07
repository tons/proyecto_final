{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('shipping_name', 'Shipping_name:') !!}
			{!! Form::text('shipping_name') !!}
		</li>
		<li>
			{!! Form::label('shipping_address', 'Shipping_address:') !!}
			{!! Form::textarea('shipping_address') !!}
		</li>
		<li>
			{!! Form::label('shipping_email', 'Shipping_email:') !!}
			{!! Form::text('shipping_email') !!}
		</li>
		<li>
			{!! Form::label('shipping_phone', 'Shipping_phone:') !!}
			{!! Form::text('shipping_phone') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}