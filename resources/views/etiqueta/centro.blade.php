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
    @foreach($centro as $centros)
        <div class="col-md-6 row">
            <div class="col-md-4">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=http://track.devriko.com/envceo/{{$centros->id_centro}}/edit" class="img-thumbnail">
            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <th>Datos Ubicacion</th>
                    </tr>
                    <tr>
                        <th>Centro</th>
                        <td>{{$centros->nombre_centro}}</td>
                    </tr>
                    <tr>
                        <th>Region</th>
                        <td>{{$centros->region_centro}}</td>
                    </tr>
                    <tr>
                        <th>Comuna</th>
                        <td>{{$centros->comuna_centro}}</td>
                    </tr>
                    <tr>
                        <th>Direccion</th>
                        <td>{{$centros->direccion_centro}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Datos Receptor</th>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td>{{\App\User::find($centros->id_users)->name}}</td>
                        <th>Email</th>
                        <td>{{\App\User::find($centros->id_users)->email}}</td>
                    </tr>
                    <tr>
                        <th>Run</th>
                        <td>{{\App\User::find($centros->id_users)->run_enc}}</td>
                        <th>Fono</th>
                        <td>{{\App\User::find($centros->id_users)->telefono_enc}}</td>
                    </tr>
                </table>
            </div>
        </div>
    @endforeach
</div>
