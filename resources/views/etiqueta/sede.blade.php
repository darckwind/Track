<style>
    table {
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid black;
    }

    .col-md-6{
        border: 1px solid black;
    }

</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


<div class="row">
    @foreach($sede as $sedes)
        <div class="col-md-6">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=http://track.devriko.com/sede/{{$sedes->id}}/edit" class="img-thumbnail">
            <table class="table">
                <tr>
                    <th>Sede</th>
                    <th>Direccion</th>
                    <th>Encargado</th>
                    <th>Telefono</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>{{$sedes->nombre_sede}}</td>
                    <td>{{$sedes->direccion_sede}}</td>
                    <td>{{\App\User::find($sedes->id_users)->name}}</td>
                    <td>{{\App\User::find($sedes->id_users)->telefono_enc}}</td>
                    <td>{{\App\User::find($sedes->id_users)->email}}</td>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <th>Sede</th>
                    <th>Laboratorios</th>
                </tr>
                @foreach($lab as $labs)
                    @if($labs->id_sede == $sedes->id_sede)
                        <tr>
                            <td>{{$labs->nombre_sede}}</td>
                            <td>{{$labs->nombre_lab}}</td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
    @endforeach
</div>
