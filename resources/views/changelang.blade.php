@extends('layouts.app')

@section('content')
    <table>
    <tr>

        <td width="50%" class="right"><?php echo Tran('change-language'); ?>: </td><td width="50%" class="center-select">
            <form action="{!! Route('language') !!}" method="POST">
                <select class=""name="lang">
                        <option value="eng">Eng</option>
                        <option value="vn">Vn</option>
                    </select>
                <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                <input type="submit" value="ok" />
            </form></td>

    </tr>
        <tr><td width="50%" class="right"><a href="{!! url('/language2') !!}">{!! Tran('list') !!} {!! Tran('key:') !!}</a></td></tr>
    </table>
@endsection
