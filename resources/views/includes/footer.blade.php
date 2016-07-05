<table>
        <tr>
            <td class="left" width="150px"><label><select><option value="0001">{!! Tran('reference-site') !!}</option></select></label></td>
            <td class="left-margin" width="170px"><?php echo Tran('term'); ?></td>
            <td width="130px" class="left"><a href="{{URL::asset('/')}}"><?php echo Tran('help-support'); ?></a></td>
            <td width="160px" class="right"><a href="{!! Route('lang.changeLang') !!}"><?php echo Tran('change-language'); ?></a>: </td><td width="100px" class="right-select">
                <form action="{!! Route('language') !!}" method="POST">
                    <label><select name="lang">
                            <option value="eng">Eng</option>
                            <option value="vn">Vn</option>
                        </select></label>
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                        <input type="submit" value="ok" />
                    </form></td>
            <td width="220px" class="right">{!! Tran('powered-by') !!} Libre Team @2016</td>
        </tr>
</table>
