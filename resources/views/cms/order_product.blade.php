{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('order_id', 'Order_id:') !!}
			{!! Form::text('order_id') !!}
		</li>
		<li>
			{!! Form::label('product_id', 'Product_id:') !!}
			{!! Form::text('product_id') !!}
		</li>
		<li>
			{!! Form::label('product_name', 'Product_name:') !!}
			{!! Form::text('product_name') !!}
		</li>
		<li>
			{!! Form::label('product_price', 'Product_price:') !!}
			{!! Form::text('product_price') !!}
		</li>
		<li>
			{!! Form::label('product_sales_quantity', 'Product_sales_quantity:') !!}
			{!! Form::text('product_sales_quantity') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}