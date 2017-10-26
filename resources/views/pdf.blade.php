<body>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<table>
		<tr>
			<td>สินค้า</td>
			<td>บ้านเลขที่</td>
		</tr>
		@foreach($Customers as $c)
		<tr>
			<td>{{$c->customer_id}}</td>
		</tr>

	</table>
</body>

<style>
@font-face {
	font-family: 'THSarabunNew';
	font-style: normal;
	font-weight: normal;
	src : url("{asset('font/THSarabunNew.ttf') }}") format('truetype');
}

@font-face {
	font-family: 'THSarabunNew';
	font-style: normal;
	font-weight: bold;
	src : url("{asset('font/THSarabunNew Bold.ttf') }}") format('truetype');
}

@font-face {
	font-family: 'THSarabunNew';
	font-style: italic;
	font-weight: normal;
	src : url("{asset('font/THSarabunNew Italic.ttf') }}") format('truetype');
}

@font-face {
	font-family: 'THSarabunNew';
	font-style: italic;
	font-weight: blod;
	src : url("{asset('font/THSarabunNew BoldItalic.ttf') }}") format('truetype');
}
body{
	font-family: "THSarabunNew";
}
table{
	border-collapse: collapse;
}
td,th{
	border: 1px solid;
}
</style>