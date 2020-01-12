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
                      <a class="nav-link active"  href="{{ url('/grupo')}}"  data-toggle="tab">Lista</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                    <label for="codigo">CODIGO</label>
                    <input type="email" class="form-control" id="codigo" name="code" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="desc">Descipcion</label>
                    <input type="email" class="form-control" id="desc" name="desc" placeholder="">
                  </div>
              </div><!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </div>
            <!-- /.card -->
          </section>
    </div>
@endsection