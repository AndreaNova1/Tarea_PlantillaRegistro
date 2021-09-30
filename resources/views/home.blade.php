@extends('layouts.plantilla')

@section('content')
    <div class="card mt-5 bg-info text-white">
        <div class="card-header ">
            <p>Registro de Datos de Usuario</p>
        </div>
    </div>
    <div class="container bg-warning text-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-vertical" method="post">
                        <fieldset>
                            <legend class="text-center header">Formulario Para Registrar</legend>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                <span class="col-md-5 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-4">
                                    <input id="fname" name="name" type="text" placeholder="Nombre Completo" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                                <span class="col-md-5 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-4">
                                    <input id="lname" name="name" type="text" placeholder="Apellidos" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Correo Electronica</label>
                                <span class="col-md-5 col-md-offset-2 text-center color-white"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-4">
                                    <input id="email" name="email" type="text" placeholder="Correo Electronico" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                                <span class="col-md-5 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-4">
                                    <input type="password" class="form-control" id="Contraseña" aria-describedby="Fecha">
                                </div>
                            </div>

                            <div class="form-group align-content-center">
                                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                                <span class="col-md-5 text-center "><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-4 text-center">
                                    <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                                <span class="col-md-5 "><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-4">
                                    <input type="date" class="form-control" id="Fecha" aria-describedby="Fecha">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center ">
                                    <button type="submit" class="btn btn-primary btn-lg">Agregar Datos</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
