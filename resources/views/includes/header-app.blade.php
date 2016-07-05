
<table>
    <tr>
        <td class="left-header">BWHERE</td>
        <td class="center" width="60%"><a href="{{URL::asset('/')}}">{!! Tran('home') !!} </a>
            <a href="{{URL::asset('/map')}}"><?php echo Tran('map'); ?></a>
            <a href="{{URL::asset('/location')}}"><?php echo Tran('location'); ?></a></td>
        <td class="right" width="">                @if (Auth::guest())
                <a href="{{ url('/login') }}">{!! Tran('login') !!}</a> </td><td class="right"><a href="{{ url('/register') }}">{!! Tran('register') !!}</a>

            @else
              <td>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>


                        <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>{!! Tran('logout') !!}</a>


            @endif
        </td>
    </tr>
</table>
