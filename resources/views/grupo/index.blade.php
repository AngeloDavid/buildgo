@extends('base')
@section('main-content')
    <div class="row">
        <section class="col-lg-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-object-group mr-1"></i>
                  Lista de Grupos de las heramientas
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
                    @forelse ($list as $item)
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td> {{ $item->descrip }}</td>
                        <td> @if ($item->status == 1)
                          <span class="badge bg-success">
                            Activo
                        @else
                          <span class="badge bg-error">
                            Inactivo
                        @endif  
                          </span> </td>
                        <td> </td>
                        <td> 
                          <div class="btn-group">
                          <a class="btn btn-default" href="{{ url('/grupo/'.$item->id.'/edit')}}"><i class="fa fa-edit"></i></a>
                          <a class="btn btn-default" href="{{ url('/grupo/'.$item->id.'/edit')}}"><i class="fa fa-times-circle"></i></a>
                          </div>
                        </td>
                      </tr> 
                    @empty
                        <tr>
                          <td colspan="12" style="text-align='center';"> "No existe registros"</td>
                        </tr>
                    @endforelse
                                      
                  </tbody>
                </table>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
    </div>
@endsection