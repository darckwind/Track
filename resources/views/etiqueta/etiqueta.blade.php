<style>
    table {
    border-collapse: collapse;
    }

    table, th, td {
    border: 1px solid black;
    }
</style>

<div class="row">
    @foreach($labora as $labs)
        <div class="col-md-auto">
            <table>
                <tr>
                    <th>Laboratorio</th>
                </tr>
                <tr>
                    <td>{{$labs->nombre_lab}}</td>
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <th>Instrumento</th>
                    <th>cantidad</th>
                </tr>
                @foreach($lab as $labss)
                    @if($labs->id_laboratorio==$labss->id_laboratorio)
                        <tr>
                            <td>{{$labss->description}}</td>
                            <td>{{$labss->cantidad}}</td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
    @endforeach
</div>

