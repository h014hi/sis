    
<!--BOTONES DE ACCIONAR REGISTRAR GENERAR PDF GENERAR EXCEL-->
    <div class="col-md-12">
        <!-- Botón o enlace que abre el modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-color: #187BEC; margin: 10px 10px 10px -15px;">
         Registrar Inspector
        </button>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-custom modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Registrar Inspectores</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">  
                <form id="formulario" action="{{ route('guardar-datos') }}" method="GET">
                @csrf
                 <div class="space-y-3 mb-4">
                   <h2 class="font-bold"></h2>
                    <div class="space-y-3">
                        <div class="space-y-3 mb-4">
                            <h2 class="font-bold">Datos del Inspector</h2>
                        <div class="space-x-3 flex justify-between">  
                                <div class="flex-1 space-y-3">
                                    <label for="">Nombres</label>
                                    <input type="text" name="nombres" id="nombres"
                                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ingrese nombre">
                                </div>
                                <div class="flex-1 space-y-3">
                                    <label for="">Apellido Paterno</label>
                                    <input type="text" name="apellidos" id="apellidos"
                                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ingrese apellidos">
                                </div>
                            </div>
                            </div>
                    </div>       
        </div>

        <div class="space-y-3 mb-4">
        <h2 class="font-bold">ESTADO DEL INSPECTOR</h2>
        <div class="space-x-3 flex justify-between">  
            <div class="flex-1 space-y-3">
                    <label for="">ESTA HABILITADO PARA TRABAJO DE CAMPO (SI/NO)</label>
                    <input type="text" name="telefono" id="telefono"
                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="SI">
                </div>
            </div>
        </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" style = "background-color: #EC7518; color:white;">Cerrar</button>
                <button type="submit" class="btn btn-primary" style = "background-color: #187BEC;" >Guardar</button>
            </div>
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
                        <th scope="col">NOMBRES</th>
                        <th scope="col">APELLIDOS</th>
                        <th scope="col">INSPECTOR</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
            </thead>

            @props(['resultados'])

            <!--CUERPO-->
            <tbody>
                    @foreach($resultados as $inspector)
                            <tr>
                            <td>{{$inspector->nombres}}</td>
                            <td>{{$inspector->apellidos}}</td>
                            @if($inspector->telefono == "SI")
                                <td><span class="badge bg-success" style="font-size: 100%">HABILITADO</span></td>
                            @else
                                <td><span class="badge bg-danger" style="font-size: 100%">NO HABILITADO</span></td>
                            @endif
                            <td>
                                
                                <a class="btn btn-warning" data-toggle="modal" data-target="#myModalEdit" onclick="editar_inspector(
                                    {{json_encode($inspector->id)}},
                                    {{json_encode($inspector->nombres)}},
                                    {{json_encode($inspector->apellidos)}},
                                    {{json_encode($inspector->telefono)}})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                                </a>
                            </td>        
                            </tr>    
                    @endforeach               
            </tbody>
        </table>

    <div class="col-md-12">{{$resultados->links()}}</div>

</div>

</div>
<!-- Modal -->
<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-custom modal-xl" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Editar Inspectores</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <div class="modal-body">  
        <form id="formularioid" action="" method="">
            @csrf
         <div class="space-y-3 mb-4">
           <h2 class="font-bold"></h2>
            <div class="space-y-3">
                <div class="space-y-3 mb-4">
                    <h2 class="font-bold">Datos del Inspector</h2>
                <div class="space-x-3 flex justify-between">  
                        <div class="flex-1 space-y-3">
                            <label for="">Nombres</label>
                            <input type="text" name="nombres" id="nombresedit"
                                class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Ingrese nombre" value="">
                        </div>
                        <div class="flex-1 space-y-3">
                            <label for="">Apellido Paterno</label>
                            <input type="text" name="apellidos" id="apellidosedit"
                                class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Ingrese apellidos">
                        </div>
                    </div>
                    </div>
            </div>       
</div>

<div class="space-y-3 mb-4">
<h2 class="font-bold">ESTADO DEL INSPECTOR</h2>
<div class="space-x-3 flex justify-between">  
    <div class="flex-1 space-y-3">
            <label for="">ESTA HABILITADO PARA TRABAJO DE CAMPO (SI/NO)</label>
            <input type="text" name="telefono" id="telefonoedit"
                class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Ingrese telefono">
        </div>
    </div>
</div>

    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal" style = "background-color: #EC7518; color:white;">Cerrar</button>
        <button type="submit" class="btn btn-primary" style = "background-color: #187BEC;" >Guardar</button>
    </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<script>
    function editar_inspector(id,nombres,apellidos,telefono)
        {
        
            var ruta = "{{ route('inspector.update', ['id' => ':id']) }}";
            ruta = ruta.replace(':id', id);
            document.getElementById("formularioid").action = ruta;
            document.getElementById("nombresedit").value = nombres;     
            document.getElementById("apellidosedit").value = apellidos;  
            document.getElementById("telefonoedit").value = telefono;
        }

</script>