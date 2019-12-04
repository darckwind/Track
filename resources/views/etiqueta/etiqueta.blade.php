<stytle>
    table {
    border-collapse: collapse;
    }

    table, th, td {
    border: 1px solid black;
    }
</stytle>

@foreach($lab as $labs)
    <table>
        <tr>
            <th>Laboratorio</th>
        </tr>
        <tr>
            <td>{{$labs->nombre_lab}}</td>
        </tr>
    </table>
    <table>
        <tr>
            <th>Instrumento</th>
            <th>cantidad</th>
        </tr>
        @foreach($lab as $labss)
            <tr>
                <td>{{$labss->description}}</td>
                <td>{{$labss->cantidad}}</td>
            </tr>
        @endforeach
    </table>
@endforeach

