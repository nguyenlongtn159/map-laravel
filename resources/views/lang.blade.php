@extends('layouts.default')
@section('title', 'Map')
@section('content')
    <p>{!! Tran('content') !!} {!! Tran('map') !!}</p>
    @if(isset($la))
        <br /> {!! Tran('add') !!} {!! Tran('key:') !!}
        <form action="{!! Route('lang.getAdd') !!}" method="post">
            <table class="small-table">
                <tr><td>Key: </td><td><input type="text" name="key" /></td>
                    <td>
                        @if (count($errors) > 0)
                            {!!  $errors->first("key")!!}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Eng:</td><td><input type="text" name="eng" /></td>
                    <td>
                        @if (count($errors) > 0)
                            {!!  $errors->first("eng")!!}
                        @endif
                    </td>
                </tr>
                <tr><td>Vn: </td>
                    <td> <input type="text" name="vn" /></td>
                    <td>
                        @if (count($errors) > 0)
                            {!!  $errors->first("vn")!!}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><input type="hidden" name="_token" value="{!! csrf_token() !!}"></td>
                    <td> <input type="submit" value="OK" /></td>
                </tr>
            </table>
        </form>
        {!! Tran('list') !!} :
        <table class="small-table2">
            <tr><td>ID:</td><td>{!! Tran('key:') !!}</td><td>Eng:</td><td>Vn:</td><td>{{ Tran('edit') }}</td><td>{{ Tran('delete') }}</td></tr>
        @foreach($la as $item=>$val)

                <?php
                echo "<tr><td>".$val["id"]."</td><td>".$val["key"]."</td><td>".$val["eng"]."</td><td>".$val["vn"]."</td><td><a href='";
                ?>{!!url('lang/edit')!!}<?php
                echo "/".$val['id']."'>Edit</a></td><td><a href='";
                    ?>{!!url('lang/delete')!!}<?php
                    echo "/".$val['id']."'>Delete</a></td></tr>";
                 ?>

    @endforeach
    </table><br />
        @elseif(isset($lang2))
        <table class="small-table">
            @foreach($lang2 as $item=>$val)
                <br /> {!! Tran('edit') !!} {!! Tran('key') !!}
                <form action="{!! url('/lang/edit')!!}" method="post"><br />
                    <table class="small-table">
                        <input type="hidden" name="id" value="{!! $val['id']  !!}" />
                        <tr><td>{!! Tran('key:') !!} </td><td><input type="hidden" name="key" value="{!! $val['key']  !!}" />{!! $val['key']  !!}</td><td>
                                @if (count($errors) > 0)
                                    {!!  $errors->first("key")!!}
                                @endif
                            </td></tr>
                        <tr><td>Eng:</td><td><input type="text" name="eng" value="{!! $val['eng']  !!}"  /></td><td>
                                @if (count($errors) > 0)
                                    {!!  $errors->first("eng")!!}
                                @endif
                            </td></tr>
                        <tr><td>Vn: </td><td> <input type="text" name="vn" value="{!! $val['vn']  !!}"  /></td><td>
                                @if (count($errors) > 0)
                                    {!!  $errors->first("vn")!!}
                                @endif
                            </td></tr>
                        <tr><td>
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <input type="submit" value="OK" />
                            </td>
                        </tr>
                    </table>
                </form>
            @endforeach
        </table><br />

    @endif
@endsection