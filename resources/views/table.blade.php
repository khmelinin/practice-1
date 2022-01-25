<table style="border: 1px solid red; width: 100%">
    @foreach($rows as $row)
        @if($row->author!="pekhota.alex@gmail.com")
            <tr style="">
                <td style="">
                </td>
                <td style="text-align: end">
                    {{ $row->created_at }} from {{ $row->author }}.: <br>
                    {{ $row->message }}
                    <hr>
                </td>
            </tr>
        @else
            <tr style="">
                <td style="width: 50%">
                    {{ $row->created_at }} from {{ $row->author }}.: <br>
                    {{ $row->message }}
                    <hr>
                </td>
                <td>
                </td>
            </tr>
        @endif
    @endforeach
</table>
