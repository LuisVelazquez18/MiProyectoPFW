@extends('plantilla')
@section('contenido')

<section class="content">

<center>
    <h1> seleccione como desea ingresar al sistema</h1>
    </center>

    <div class="row">

        <div class="col-lg-3 col-xs-6">

            <div class="small-box" style="background-color: #f781D8; color: white;">

                <div class="inner">

                    <h3>Secretaria(o)</h3>

                    <p>Inicia sesion</p>

                </div>

                <div class="icon">  
                    <i class="fa fa-famale"></i>
                </div>

                <a href="Ingresar" class="small-box-footer">
                Ingresar <i class="fa fa-arrow-circle-right"></i>
                </a>
                
             </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">

            <div class="small-box" style="background-color: #BDBDBD; color: white;">

                <div class="inner">

                    <h3>Doctor</h3>

                    <p>Inicia sesion</p>

                </div>

                <div class="icon">  
                    <i class="fa fa-user-md"></i>
                </div>

                <a href="Ingresar" class="small-box-footer">
                ingresar <i class="fa fa-arrow-circle-right"></i>
                </a>
                
             </div>
        </div>

        <div class="col-lg-3 col-xs-6">

            <div class="small-box bg-yellow" >

                <div class="inner">

                    <h3>Cliente</h3>

                    <p>Inicia sesion</p>

                </div>

                <div class="icon">  
                    <i class="fa fa-user"></i>
                </div>

                <a href="Ingresar" class="small-box-footer">
                ingresar <i class="fa fa-arrow-circle-right"></i>
                </a>
                
             </div>
        </div>

        <div class="col-lg-3 col-xs-6">

            <div class="small-box bg-red" >

                <div class="inner">

                    <h3>Administrador</h3>

                    <p>Inicia sesion</p>

                </div>

                <div class="icon">  
                    <i class="fa fa-famale"></i>
                </div>

                <a href="Ingresar" class="small-box-footer">
                ingresar <i class="fa fa-arrow-circle-right"></i>
                </a>
                
             </div>
        </div>


    </div>

 </section>

@endsection
