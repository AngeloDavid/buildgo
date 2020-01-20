@extends('base')
@section('main-content')
    <div class="row">
        <section class="col-lg-7 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-object-group mr-1"></i>
                    Nueva Marca
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto success">
                    <li class="nav-item">
                      <a class="nav-link active"  href="{{ url('/marca')}}" >Lista</a>
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
                    <input type="email" class="form-control" id="name" name="name" value="{{ old('name',$brand->name)}}" placeholder="">
                  </div>
                  <div class="form-group">
                    <label class="">
                      <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                      Habilitado
                    </label>
                    <label class="">
                      <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                    </label>
                    <label>
                      <div class="icheckbox_flat-green disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="checkbox" class="flat-red" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                      
                    </label>
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