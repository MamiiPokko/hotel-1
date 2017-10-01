<body>
	<table>
		<tr>
			<td>สินค้า</td>
			<td>บ้านเลขที่</td>
		</tr>
		@foreach($Orders as $c)
		<tr>
			<td>{{$c->name}}</td>
		</tr>
		@endforeach
	</table>
</body>