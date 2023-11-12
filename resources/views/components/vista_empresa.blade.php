         
<!--BOTONES DE ACCIONAR REGISTRAR GENERAR PDF GENERAR EXCEL-->
    <div class="col-md-12">

        <!-- Botón o enlace que abre el modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-color: #187BEC; margin: 10px 10px 10px -15px;">
         Registrar Empresa
        </button>
          

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-custom modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Registrar Empresas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            

            <div class="modal-body">    
                <form id="formulario" action="{{ route('guardar-empresas') }}" method="GET">
                    @csrf
          <div class="space-y-3 mb-4">
            <h2 class="font-bold"></h2>
                    <div class="space-y-3">
                        <div class="space-y-3 mb-4">
                            <h2 class="font-bold">Datos de la Empresa</h2>
                        <div class="space-x-3 flex justify-between">  
                            <div class="flex-1 space-y-3">
                                    <label for="">Razon Social</label>
                                    <input type="text" name="razon_social" id="razon_social"
                                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ingrese la razon social">
                                </div>
                                <div class="flex-1 space-y-3">
                                    <label for="">RUC</label>
                                    <input type="text" name="ruc" id="ruc"
                                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Ingrese la RUC">
                                </div>
                            </div>
                            </div>
                    </div>       
        </div>

       
        <div class="space-y-3 mb-4">
        <h2 class="font-bold">Datos del representante legal</h2>
        <div class="space-x-3 flex justify-between">  
            <div class="flex-1 space-y-3">
                    <label for="">DNI</label>
                    <input type="text" name="dni_rep_legal" id="dni_rep_legal"
                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ingrese el DNI">
                </div>
                <div class="flex-1 space-y-3">
                    <label for="">Nombres</label>
                    <input type="text" name="nombres_rep_legal" id="nombres_rep_legal"
                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ingrese los nombres">
                </div>
                <div class="flex-1 space-y-3">
                    <label for="">Apellidos</label>
                    <input type="text" name="apellidos_rep_legal" id="apellidos_rep_legal"
                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ingrese los apellidos">
                </div>
            </div>
        </div>
        <div class="space-y-3 mb-4">
            <h2 class="font-bold">Otros Datos</h2>
            <div class="space-x-3 flex justify-between">  
                    <div class="flex-1 space-y-3">
                        <label for="">Celular</label>
                        <input type="text" name="numero_celular" id="numero_celular"
                            class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ingrese el celular">
                    </div>
                    <div class="flex-1 space-y-3">
                        <label for="">Domicilio</label>
                        <input type="text" name="domicilio" id="domicilio"
                            class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ingrese el domicilio">
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
                <th scope="col">RUC</th>
                <th scope="col">RAZON SOCIAL</th>
                <th scope="col">NOMBRES</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">DNI</th>
                <th scope="col">CELULAR</th>
                <th scope="col">DOMICILIO</th>
                <th scope="col">ACCIONES</th>
            </tr>
    </thead>

    @props(['resultados'])

    <!--CUERPO-->
    <tbody>
            @foreach($resultados as $empresa)
                    <tr>
                    <td>{{$empresa->ruc}}</td>
                    <td>{{$empresa->razon_social}}</td> 
                    <td>{{$empresa->nombres_rep_legal}}</td>
                    <td>{{$empresa->apellidos_rep_legal}}</td>
                    <td>{{$empresa->dni_rep_legal}}</td>
                    <td>{{$empresa->numero_celular}}</td>
                    <td>{{$empresa->domicilio}}</td>
                    <td>
                        
                        <a class="btn btn-warning" data-toggle="modal" data-target="#ModalEdit" onclick="editar_empresa(
                            {{json_encode($empresa->id)}},
                            {{json_encode($empresa->razon_social)}},
                            {{json_encode($empresa->ruc)}},
                            {{json_encode($empresa->nombres_rep_legal)}},
                            {{json_encode($empresa->apellidos_rep_legal)}},
                            {{json_encode($empresa->dni_rep_legal)}},
                            {{json_encode($empresa->numero_celular)}},
                            {{json_encode($empresa->domicilio)}})">
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


<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-custom modal-xl" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Editar Empresas</h4>
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
                    <h2 class="font-bold">Datos de la Empresa</h2>
                <div class="space-x-3 flex justify-between">  
                    <div class="flex-1 space-y-3">
                            <label for="">Razon Social</label>
                            <input type="text" name="razon_social" id="razon_socialedit" value=""
                                class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Ingrese la Provincia">
                        </div>
                        <div class="flex-1 space-y-3">
                            <label for="">RUC</label>
                            <input type="text" name="ruc" id="rucedit" value=""
                                class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Ingrese su Correo Institucional">
                        </div>
                    </div>
                    </div>
            </div>       
</div>


<div class="space-y-3 mb-4">
<h2 class="font-bold">Datos del representante legal</h2>
<div class="space-x-3 flex justify-between">  
    
        <div class="flex-1 space-y-3">
            <label for="">Nombres</label>
            <input type="text" name="nombres_rep_legal" id="nombres_rep_legaledit" value=""
                class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Ingrese su Correo Institucional">
        </div>
        <div class="flex-1 space-y-3">
            <label for="">Apellidos</label>
            <input type="text" name="apellidos_rep_legal" id="apellidos_rep_legaledit" value=""
                class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
        </div>
      <div class="flex-1 space-y-3">
            <label for="">DNI</label>
            <input type="text" name="dni_rep_legal" id="dni_rep_legaledit"
                class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Ingrese la Provincia">
        </div>

    </div>
</div>
<div class="space-y-3 mb-4">
    <h2 class="font-bold">Otros Datos</h2>
    <div class="space-x-3 flex justify-between">  
            <div class="flex-1 space-y-3">
                <label for="">Telefono</label>
                <input type="text" name="numero_celular" id="numero_celularedit" value=""
                    class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Ingrese su Correo Institucional">
            </div>
            <div class="flex-1 space-y-3">
                <label for="">Domicilio</label>
                <input type="text" name="domicilio" id="domicilioedit"
                    class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Ingrese su Correo Institucional" value="">
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

<script>
    function editar_empresa(id,razon_social,ruc,nombres_rep_legal,apellidos_rep_legal,dni_rep_legal,numero_celular,domicilio)
        {
            var ruta = "{{ route('empresa.update', ['id' => ':id']) }}";
            ruta = ruta.replace(':id', id);
            document.getElementById("formularioid").action = ruta;
            document.getElementById("razon_socialedit").value = razon_social;   
            document.getElementById("rucedit").value = ruc;   
            document.getElementById("nombres_rep_legaledit").value = nombres_rep_legal;   
            document.getElementById("apellidos_rep_legaledit").value = apellidos_rep_legal;   
            document.getElementById("dni_rep_legaledit").value = dni_rep_legal;   
            document.getElementById("numero_celularedit").value = numero_celular;  
            document.getElementById("domicilioedit").value = domicilio;     
        }

</script>



