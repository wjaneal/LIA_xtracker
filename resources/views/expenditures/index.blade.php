@extends(Auth::user()->type=='0' ? 'app':'staff')

@section('content')
<H1>Budget Spending Summary - {{Config::get('Globals.departments')[$budget[0]->departmentid]}} Department</H1>
<table class="table">
        <tr><th align="right">Budget Category<th align="right">Budget Subcategory<th align="right">Amount Spent<th align="right">Budget Amount<th align="right">Percent Spent
        @foreach($budget as $b)

                        <tr><td align="right">{{$b->category}}<td align="right">{{$b->subcategory}}
                @foreach($subcategory_totals as $st)
                        @if($b->subcategory === $st->subcategory)
                                <td align="right">$ {{number_format((double)$st->sum1,2,".",",")}}
                        <td align="right">$ {{number_format((double)$b->amount,2, ".", ",")}}<td align="right"> {{number_format((double)$st->sum1*100/$b->amount, 2, ".",",")}}%
                        @endif
                @endforeach


        @endforeach

<tr><td colspan=2><strong>Total<td align="right">$ {{number_format((double)$total_spent,2)}}<td align="right">$ {{number_format((double)$total,2)}}<td align="right">{{number_format(100*((double)$total_spent)/((double)$total), 2)}}%</strong>
</table>


<H1>Individual Invoices</H1>
<table class="table">
        <tr><th>Date<th>Subcategory<th>Amount<th>Description
        @foreach($expenditures as $expenditure)
        <tr><td>{{$expenditure->date}}<td>{{$expenditure->subcategory}}<td align="right">$ {{number_format((double)$expenditure->amount,2)}}<td>{{$expenditure->description}}
        @endforeach
</table>
@stop

@endsection


