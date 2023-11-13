<div class="col-md-12">

        <!-- Botón o enlace que abre el modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-color: #187BEC; margin: 10px 10px 10px -15px;">
            Nuevo Operativo 
        </button>
        

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-custom modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: rgb(36, 142, 243);">
                            <h4 class="modal-title" id="myModalLabel" ><b>CREACIÓN DE NUEVO OPERATIVO</b></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <form action="{{ route('registrar.operativo') }}" method="GET">
                        <div class="modal-body">

                                <div class="form-group">
                                    <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Tipo de Operativo</label>
                                    <select class="form-select" id="inputGroupSelect01" name = "inputGroupSelect01" value="">
                                        <option selected>Seleccionar...</option>
                                        <option value="INOPINADO">INOPINADO</option>
                                        <option value="MULTISECTORIAL">MULTISECTORIAL</option>
                                    </select>
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="lugar">Lugar:</label>
                                    <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Ingrese el lugar">
                                </div>
                                <div class="form-group">
                                    <label for="fecha">Fecha:</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha">
                                </div>
                                <div class="form-group">
                                    <label for="habilitado">Habilitar:</label>
                                    <input type="number" class="form-control" id="numero" name="dias" value="0">
                                </div>    
                            
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" style = "background-color: #EC7518; color:white;">Cerrar</button>
                            <button type="submit" class="btn btn-primary" style = "background-color: #229ed1; color:white;" >Guardar</button>
                        </div>

                        </form>

                    </div>    
                </div>
        </div>


        <!--FORMULARIO PARA EDITAR-->
        

        <div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-custom modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: rgb(36, 142, 243);">
                            <h4 class="modal-title" id="myModalLabel"><b>EDITAR OPERATIVO</b></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <form action="" id="editarForm" method="POST">
                        <div class="modal-body">
                                @csrf

                                <div class="form-group">
                                    <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Tipo de Operativo</label>
                                    <select class="form-select" id="inputGroupSelect01edit" name = "inputGroupSelect01" value="">
                                        <option selected>Seleccionar...</option>
                                        <option value="INOPINADO">INOPINADO</option>
                                        <option value="MULTISECTORIAL">MULTISECTORIAL</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="lugar">Lugar:</label>
                                    <input  type="text" class="form-control" id="lugaredit" name="lugar" value="">
                                </div>
                                <div class="form-group">
                                    <label for="fecha">Fecha:</label>
                                    <input type="date" class="form-control" id="fechaedit" name="fecha" value="">
                                </div>
                                <div class="form-group">
                                    <label for="habilitado">Habilitar:</label>
                                    <input type="number" class="form-control" id="numeroedit" name="dias" value="">
                                </div>    
                            
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" style = "background-color: #EC7518; color:white;">Cerrar</button>
                            <button type="submit" class="btn btn-primary" style = "background-color: #229ed1; color:white;" >Guardar</button>
                        </div>

                        </form>

                    </div>    
                </div>
        </div>
</div>


<div class="table-responsive">
<table class="table" style="font-size: 75%; text-align: center;">
        
                    <!--CABECERA-->
                    <thead class="thead-dark">
                            <tr>
                                <th scope="col">TIPO DE OPERATIVO</th>
                                <th scope="col">LUGAR DE OPERATIVO</th>
                                <th scope="col">FECHA DE OPERATIVO</th>
                                <th scope="col">TOTAL DE ACTAS</th>
                                <th scope="col">ARCHIVADOS</th>
                                <th scope="col">TRAMITADOS</th>
                                <th scope="col">PENDIENTES</th>
                                <th scope="col">+ DIAS</th>
                                <th scope="col">ACCIONES</th>
                            </tr>
                    </thead>

                    @props(['resultados'])

                    <!--CUERPO-->
                    <tbody>
                        
                            @foreach($resultados as $operativo)
                                    <tr>
                                    <td>{{$operativo->tipo}}</td>
                                    <td>{{$operativo->lugar}}</td>
                                    <td>{{$operativo->fecha}}</td>
                                
                                    @php
                                        $archivados = 0;
                                        $tramitados = 0;
                                        $condescargo = 0;
                                        $libre=0;
                                        $actas = 0;
                                        
                                        foreach($operativo->actas as $acta)
                                        {
                                            $actas+=1;
                                            
                                                if($acta->estado == "ARCHIVADO")
                                                {
                                                $archivados+=1;
                                                }
                                                elseif ($acta->estado == "CONDESCARGO")
                                                {
                                                $condescargo+=1;
                                                }
                                                elseif ($acta->estado == "TRAMITADO")
                                                {
                                                $tramitados+=1;
                                                }
                                                else
                                                {
                                                $libre+=1;
                                                }
                                        }

                                        $libre+=$condescargo;
                                    @endphp

                                    <td><span class="badge bg-info" style="font-size: 150%">{{$actas}}</span></td>
                                    <td><span class="badge bg-success" style="font-size: 150%">{{$archivados}} archivados</span></td>
                                    <td><span class="badge bg-primary" style="font-size: 150%">{{$tramitados}} tramitados</span></td>
                                    <td><span class="badge bg-danger" style="font-size: 150%; color: white; background-color=#fb2d5b;">{{$libre}} pendientes</span></td>
                                    <td>{{$operativo->diashabiles}}</td>

                                    <td>
                                        <!-- Update button -->
                                        <a class="btn btn-warning" data-toggle="modal" data-target="#myModalEdit" onclick="capturar({{ json_encode($operativo->id) }},{{ json_encode($operativo->lugar) }},{{ json_encode($operativo->fecha) }},{{ json_encode($operativo->diashabiles) }},{{ json_encode($operativo->tipo) }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                            </svg> 
                                        </a>

                                        <!-- View button -->
                                        <a href="{{ route('actasdeloperativo', ['id' => json_encode($operativo->id)]) }}" class="btn btn-primary position-relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg>
                                        </a>
                                        
                                        <!-- Delete button -->

                                        <form action="{{ route('operativo.destroy', ['id' => $operativo->id]) }}" method="POST" class="btn btn-danger d-inline" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-danger" onclick="return confirm('Are you sure you want to delete this acta?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                                </svg>
                                            </button>
                                        </form>

                                    </td>        
                                    </tr>    
                            @endforeach               
                    </tbody>

</table>

<div class="col-md-12">{{$resultados->links()}}</div>

</div>

<script>
    function capturar(id,lugar,fecha,diahabiles,tipo)
        {
        
            var ruta = "{{ route('operativo.update', ['id' => ':id']) }}";
            ruta = ruta.replace(':id', id);
            document.getElementById("editarForm").action = ruta;
            document.getElementById("lugaredit").value = lugar;     
            document.getElementById("fechaedit").value = fecha;  
            document.getElementById("numeroedit").value = diahabiles; 
            document.getElementById("inputGroupSelect01edit").value = tipo;         
        } 

    function eliminarOperativo(id) {
        if (confirm('¿Estás seguro de que deseas eliminar este operativo?')) {
            // Puedes usar Axios o Fetch para enviar una solicitud DELETE al controlador
            // Aquí se usa Fetch como ejemplo
            fetch(`/operativo/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Recargar la página o actualizar la lista de operativos
                    location.reload();
                } else {
                    alert('Error al eliminar el operativo.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    }
</script>
