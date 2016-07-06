@extends('layouts.default')

@section('content')
<table class="small-table2"> 
	<tr>
		<td>STT:</td>
		<td>Key:</td>
		<td>Eng:</td>
		<td>Vn:</td>
	</tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->key }}</td>
        <td>{{ $item->eng }}</td>
        <td>{{ $item->vn }}</td>
       </tr>
        @endforeach
   </table>
 {!! $items->render() !!}
@endsection
