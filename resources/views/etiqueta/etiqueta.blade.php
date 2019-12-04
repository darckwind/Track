@foreach($lab as $labs)
    <table border="1">
        <tr>
            <td>Laboratorio</td>
            <td>{{$labs->nombre_lab}}</td>
        </tr>
    </table>
@endforeach
