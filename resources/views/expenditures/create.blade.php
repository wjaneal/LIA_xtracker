@extends(Auth::user()->type=='0' ? 'app':'staff')

@section('content')
<h1>Submit an Expenditure:</h1>
    {!! form($expenditureForm) !!}
@endsection
