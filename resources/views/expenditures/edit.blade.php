@extends(Auth::user()->type=='0' ? 'app':'staff')

@section('content')
<H1>Edit an Expenditure:</H1>
    {!! form($expenditureForm) !!}
@endsection
