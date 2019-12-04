@foreach($lab as $labs)
    <table>
        <tr>
            <td>Laboratorio</td>
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

