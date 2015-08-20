@extends(Auth::user()->type=='0' ? 'app':'staff')
@section('content')

<h1>LIA Expenditure - Show </h1>
<table class="table">
	<tr><th>Category<th>Subcategory<th>Date<th>Description<th>Amount<th>Show or Edit
	@foreach($expenditures as $expenditure)
		<tr>
		<td>{{$expenditure->category}}</td>
		<td>{{$expenditure->subcategory}}</td>
		<td>{{$expenditure->date}}</td>
		<td>{{$expenditure->description}}</td>
		<td>{{$expenditure->amount}}</td>
		<td>
 			<!-- show or edit the expenditure -->
                	<a class="btn btn-small btn-success" href="{{ URL::to('expenditures/' . $expenditure->id) }}">Show</a>
                        <a class="btn btn-small btn-info" href="{{ URL::to('expenditures/' . $expenditure->id . '/edit') }}">Edit</a>
		</td>
		</tr>
	@endforeach
</table>
@endsection
