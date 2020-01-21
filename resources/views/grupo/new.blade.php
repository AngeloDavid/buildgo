@extends('base')
@section('main-content')
    <div class="row">
        <section class="col-lg-7 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-object-group mr-1"></i>
                    Nuevo Grupo
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto success">
                    <li class="nav-item">
                      <a class="nav-link active"  href="{{ url('/grupo')}}" >Lista</a>
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
                {{-- <div class="form-group">
                    <label for="codigo">CODIGO</label>
                    <input type="email" class="form-control" id="codigo" name="code" placeholder="">
                  </div> --}}
                  <div class="form-group">
                    <label for="desc">Descipcion</label>
                    <input type="email" class="form-control" id="descrip" name="descrip" value="{{ old('descrip',$group->descrip)}}" placeholder="">
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
                  </div>
              </div><!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>
            </div>
            <!-- /.card -->
          </section>
    </div>
@endsection