@extends('plantilla')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>Gestor de pacientes</h1>

    </section>

    <section class="content">
        <div class="box">

            <div class="box-header">
            
                <a href="Crear-Paciente">
                    <button class="btn btn-primary btn lg"> Agregar Pacientes</button>
                </a>
            
            </div>
            <div class="box-body">
                <table class="table table-bordered table hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre y apellido</th>
                            <th>Documento</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Editar / borrar</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>11</td>
                            <td>Paciente 1</td>
                            <td>1123123</td>
                            <td>paciente1@gmail.com</td>
                            <td>91727827</td>
                            <td> 
                           
                                <button class="btn btn-success"> <i class="fa fa-pencil"></i> </button> 
                                <button class="btn btn-danger"> <i class="fa fa-trash"></i> </button> 
                           
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </section>

</div>

@endsection