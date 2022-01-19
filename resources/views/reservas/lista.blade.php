@extends('layouts.principal')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-dark text-white">
              <i class="fa fa-home" aria-hidden="true"></i> Reservas
            </div>
            <div class="card-body">
                <button data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-success my-2"><i class="fa fa-print" aria-hidden="true"></i> Imprimir</button>
                <button class="btn btn-primary my-2"><i class="fa fa-file" aria-hidden="true"></i> Exportar Excel</button>
                <div class="btn-group dropright">
                    <button type="button" class="btn btn-warning my-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-archive" aria-hidden="true"></i> Crear Reporte
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Reporte de hoy</a>
                        <a class="dropdown-item" href="#">Reporte semanal</a>
                        <a class="dropdown-item" href="#">Reporte personalizado</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="tabla" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Habitacion</th>
                        <th scope="col">Fecha inicio</th>
                        <th scope="col">Fecha salida</th>
                        <th scope="col">Estado pago</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservas as $reserva)
                            <tr>
                                <td>{{$reserva->id}}</td>
                                <td>{{$reserva->nombre}}</td>
                                <td>H-{{$reserva->room_id}}</td>
                                <td>{{date('d-m-Y', strtotime($reserva->start))}}</td>
                                <td>{{date('d-m-Y', strtotime($reserva->end))}}</td>
                                <td>{{$reserva->status_pago}}</td>
                                
                            </tr>    
                        @endforeach
                        
                    </tbody>
                  </table>

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#tabla').DataTable({
            responsive: true,
            autoWidth: false,

            "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No hay registros",
            "info": "Mostrando pagina _PAGE_ de _PAGES_ de _TOTAL_ registros.",
            "infoEmpty": "No hay registros",
            "infoFiltered": "(filtrado de _MAX_ total registros totales)",
            'search': 'Buscar:',
            'paginate': {
                'next': 'Siguiente',
                'previous': 'Anterior'
            }
        }
        });
    </script>
@endsection