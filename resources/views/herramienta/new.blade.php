@extends('base')
@section('main-content')
    <div class="row">
        <section class="col-12">

            <div class="card ">
            <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-tools mr-1"></i>
                Nueva Herramienta
                </h3>
                <div class="card-tools">
                <ul class="nav nav-pills ml-auto success">
                    <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/grupo/create')}}">Nuevo</a>
                    </li>
                </ul>
                </div>
            </div><!-- /.card-header -->
            <form novalidate="" name="Form1" id="Form1" novalidate method="POST"  action="{{ url($urlForm) }}">
                {!! csrf_field() !!}
                @if (!$isnew)
                  {{ method_field('PUT') }}
                @endif
              <div class="card-body">
                  <div class="row">
                    <div class="form-group col-lg-2 col-12">
                        <label for="codeabr">CODIGO</label>
                        <input type="text" class="form-control" id="codeabr" name="codeabr" placeholder="">
                      </div> 
                      <div class="form-group col-lg-10 col-12">
                        <label for="name">Descipcion</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$tool->name)}}" placeholder="">
                      </div>
                  </div>  
                  <div class="row">
                    <div class="form-group col-lg-8" >
                        <label>Grupo</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            @forelse ($groups as $item)
                                <option  value="{{ $item->id}}">{{ $item->descrip }}</option>
                            @empty
                                <option  value="-1">Sin Grupos creados</option>
                            @endforelse
                          
                        </select>
                      </div>
                    <div class="form-group col-lg-4">
                        <label for="name">stock</label>
                        <input type="number" min="0" class="form-control" id="stock" name="stock" value="{{ old('name',$tool->name)}}" placeholder="">
                    </div>
                  </div>  
                  <div class="row">
                    <div class="col-lg-6">
                      <!-- checkbox -->
                      <div class="form-group clearfix">
                        <div class="icheck-success d-inline">
                          <input type="checkbox" id="status" name="satus" checked>
                          <label for="status">
                              Habilitado
                          </label>
                        </div>
                      </div>
                    </div>
                      <div class="col-lg-6">
                        <!-- checkbox -->
                        <div class="form-group clearfix">
                          <div class="icheck-success d-inline">
                            <input type="checkbox" id="haveLote" checked>
                            <label for="haveLote">
                                Herramienta Codificada
                            </label>
                          </div>
                        </div>
                    </div>
                  </div>
              </div><!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </div>
        </section>
    </div>
    <div class="row">
        <section class="col-12">

            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-object-group mr-1"></i>
                  Lote de Heramientas
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto success">
                    <li class="nav-item">
                      <a class="nav-link active" href="{{ url('/grupo/create')}}">Nuevo</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Descripcion</th>
                      <th>Estado</th>
                      <th>Cantidad de Herramientas</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td colspan="12" style="text-align='center';"> "No existe registros"</td>
                      </tr>                                      
                  </tbody>
                </table>
              </div><!-- /.card-body -->
            </div>
        </section>
    </div>
    
@endsection
@section('cssExtras')
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
@section('jsExtras')
<script src="{{ asset('plugins/select2/js/select2.full.min.js')}}"></script>
@endsection
@section('jscustomer')
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()})
    </script>
@endsection