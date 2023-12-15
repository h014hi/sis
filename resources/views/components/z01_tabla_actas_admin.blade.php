@props(['resultados','inspectores','empresas','conductores','infracciones','vehiculos','pagos'])

<!-- Modal -->
<div class="modal fade" id="ActaEdit" tabindex="-1" role="dialog" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-custom modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #fb2d5b;" id = "headmod">
        <h4 class="modal-title" id="myModalLabel"><b>EDITAR ACTA DE CONTROL</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>

<div class="modal-body" style="padding: 40px;">
<form id="formularioid" action="" method="POST">
            
@csrf
  <!--desde aqui es el formulario-->     

  <div class="space-y-3 mb-4">
    <h2 class="font-bold"></h2>
            <div class="space-y-3">
                <div class="space-y-3 mb-4">
                    <h2 class="font-bold">DATOS DEL ACTA:</h2>
                    <hr style="border-top: 2px solid #000;">
                        <div class="space-x-3 flex justify-between"> 
                            
                            <div class="flex-1 space-y-3">
                                <label for="estado">Estado del Acta</label>
                                <select name="condicion_id"  id="colorSelectedit" class="bg-white-50 border border-gray-200 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-64 h-10 p-2.5 dark:focus:border-blue-500">
                                    <option type="text" value="PENDIENTE">Pendiente</option>
                                    <option type="text" value="CONDESCARGO">Con Descargo</option>
                                    <option type="text" value="TRAMITADO">Tramitado</option>
                                    <option type="text" value="ARCHIVADO">Archivado</option>
                                </select>
                            </div> 

                            <div class="flex-1 space-y-3">
                                    <label for="numero">N° de Acta:</label>
                                    <input type="text" name="acta" id="actaedit"
                                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Ingrese número de acta de control">
                            </div>

                            <div class="flex-1 space-y-3">    
                            <label for="">Inspector que puso el acta:</label>
                                <select name="inspector" value="" id="inspectoredit"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:border-blue-500">
                                    <option value="">Seleccione</option>
                                    @foreach ($inspectores as $item)
                                                
                                                <option value= "{{$item->id}}">{{ $item->nombres}} {{$item->apellidos}}</option>
                                                
                                    @endforeach
                                </select>
                            </div>
                        </div>
                </div>
            </div>       
</div>

<div class="space-y-3 mb-4">
    <h2 class="font-bold">DATOS DE LA INFRACCIÓN</h2>
    <hr style="border-top: 2px solid #000;">
    <div class="space-x-3 flex justify-between">

    <div class="flex-1 space-y-3">
        <label for="">Codigo de Infracción:</label>
        <select name="infraccion" value="" id="infraccionedit"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:border-blue-500">
                            <option value="">Seleccione</option>
                            @foreach ($infracciones as $item)
                                <option value= "{{$item->id}}">{{ $item->codigo}}</option>
                            @endforeach
        </select>
    </div>
    
    <div class="flex-1 space-y-3">
            <label for="">Retencion de documentos:</label>
            <input type="text" name="retencion" id="retencionedit" value="NINGUNA"
            class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Detalles de retención" autocomplete="off">
    </div>
    
</div>
</div>

            <div class="space-y-3 mb-4">
            <h2 class="font-bold">DATOS DEL CONDUCTOR <a id="alerta"></a></h2>
            <hr style="border-top: 2px solid #000;">
            <div class="space-x-3 flex justify-between">
                <div class="flex-1 space-y-3">
                    <label for="">DNI:</label>
                    <input type="text" name="dni" id="dniedit" value=""
                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Ingrese su DNI">
                </div>

                <div class="flex-1 space-y-3">
                    <label for="">Nombres:</label>
                    <input type="text" name="nombres" id="nombresedit" value=''
                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Ingrese sus Nombres">
                </div>
                <div class="flex-1 space-y-3">
                    <label for="">Apellidos:</label>
                    <input type="text" name="apellidos" value=''
                        id="apellidosedit"
                        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Ingrese sus Apellidos">
                </div>
            </div>
        </div>

<div class="space-y-3 mb-4">
<h2 class="font-bold"><b>DATOS DE LA LICENCIA</b></h2>
<hr style="border-top: 2px solid #000;">
<div class="space-x-3 flex justify-between">  
<div class="flex-1 space-y-3">
        <label for="">N° Licencia:</label>
        <input type="text" name="licencia" id="licenciaedit"
        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="Ingrese la licencia">
    </div>

    <div class="flex-1 space-y-3">
                                <label for="categoria">Categoria:</label>
                                <select name="categoria" id="categoriaedit" class="bg-white-50 border border-gray-200 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-64 h-10 p-2.5 dark:focus:border-blue-500">
                                    <option type="text" value="AI">AI</option>
                                    <option type="text" value="A-IIa">A-IIa</option>
                                    <option type="text" value="A-IIb">A-IIb</option>
                                    <option type="text" value="A-IIIa">A-IIIa</option>
                                    <option type="text" value="A-IIIb">A-IIIb</option>
                                </select>
    </div>

    <div class="flex-1 space-y-3">
                                <label for="estadol">Estado de la licencia:</label>
                                <select name="estadol" id="estadoedit" class="bg-white-50 border border-gray-200 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-64 h-10 p-2.5 dark:focus:border-blue-500">
                                    <option type="text" value="VIGENTE">VIGENTE</option>
                                    <option type="text" value="VENCIDO">VENCIDO</option>
                                    <option type="text" value="ENTRAMITE">EN TRAMITE</option>
                                </select>
    </div> 

</div>
</div>

<div class="space-y-3 mb-4">
<h2 class="font-bold">DATOS DEL VEHICULO <a id="alertados"></a></h2>
<hr style="border-top: 2px solid #000;">
<div class="space-x-3 flex justify-between">  
    
    <div class="flex-1 space-y-3">
        <label for="">Empresa:</label>
        <select name="empresas" value="" id="empresaedit"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:border-blue-500">
                            <option value="">Seleccione</option>
                            <option value= "21">PERSONA NATURAL NO HAY EMPRESA</option>
                            @foreach ($empresas as $item)
                                <option value= "{{$item->id}}">{{ $item->razon_social}}</option>
                            @endforeach
        </select>
    </div>
    
    
    <div class="flex-1 space-y-3">
        <label for="">Placa:</label>
        <input type="text" name="placa" id="placaedit"
        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="Ingrese la Placa">
    </div>
    
    <div class="flex-1 space-y-3">
        <label for="">Ruta:</label>
        <input type="text" name="ruta" id="rutaedit"
        class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="Ingrese su ruta">
    </div>
</div>
</div>
    
    <div class="space-y-3 mb-4">
        <div class="space-x-3 flex justify-between">  
            <div class="flex-1 space-y-3">
                <label for="">Observacion del Intervenido</label>
                <input type="text" name="obs_intervenidoedit" id="obs_intervenidoedit"
                class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Ingrese alguna observaciones del intervenido" >
            </div>            
        </div>
    </div>
    <div class="space-y-3 mb-4">
        <div class="space-x-3 flex justify-between">  
            <div class="flex-1 space-y-3">
                <label for="">Observaciones del Inspector</label>
                <input type="text" name="obs_inspectoredit" id="obs_inspectoredit"
                class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Ingrese alguna observaciones del inspector" >
            </div>            
        </div>
    </div>
    <div class="space-y-3 mb-4">
        <div class="space-x-3 flex justify-between">  
            <div class="flex-1 space-y-3">
                <label for="">Observaciones del Acta</label>
                <input type="text" name="obs_actaedit" id="obs_actaedit"
                class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Ingrese alguna observaciones del Acta" >
            </div>           
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal" style = "background-color: #EC7518; color:white;">Cerrar</button>
        <button type="submit" class="btn btn-primary" style = "background-color: #187BEC;" >Guardar</button>
    </div>
    </div>
</div>
</div>
</form>
</div>


@php
        function esFinDeSemana($fecha) {
          $diaSemana = date('N', strtotime($fecha)); // 1 (lunes) a 7 (domingo)
          return ($diaSemana == 6 || $diaSemana == 7);
        }
@endphp

        <!--CUERPO-->
        <tbody>
                @foreach($resultados as $index => $acta)
                        <tr>
                        <td>{{$index + 1 }}</td>   
                        <td>{{$acta->numero}}</td> 
                        <td>{{$acta->operativo->fecha}}</td>
                        <td>{{$acta->operativo->lugar}}</td>
                        <td>{{$acta->empresa->razon_social}}</td>
                        <td>{{$acta->vehiculo->placa}}</td>
                        <td>{{$acta->ruta}}</td>
                        <td>{{$acta->conductor->nombres}}</td>
                        <td>{{$acta->conductor->licencia}} / {{$acta->estadolicencia}}</td>
                        <td>{{$acta->infraccion->codigo}}</td>
                        <td>{{$acta->retencion}}</td>
                        <!--
                        <td>{{$acta->obs_intervenido}}</td>
                        <td>{{$acta->obs_inspector}}</td>
                        -->
                        <td>{{$acta->obs_acta}}</td>
                        
                        @php
                                // en caso de paros o huelgas o feriados

                                $dias_aumentados = $acta->operativo->diashabiles;
                                $nuevaFecha = date('Y-m-d', strtotime($acta->operativo->fecha . ' + ' . strval($dias_aumentados) . ' days'));        
                                $nuevaFecha = date('Y-m-d', strtotime($nuevaFecha . ' + 5 days'));
                                
                                // en caso de sabados y domingos
                                $sabados_domingos = 0;
                                $fechaActual = date('Y-m-d', strtotime($acta->operativo->fecha . ' + 0 days'));

                                //contando cuantos sabados y domingos hay para sumarlos
                                while ($fechaActual <= $nuevaFecha) {
                                        $diaSemana = date('N', strtotime($fechaActual));
                                        if ($diaSemana == 6 || $diaSemana == 7) {
                                                $sabados_domingos++;
                                        }
                                        $fechaActual = date('Y-m-d', strtotime($fechaActual . ' + 1 days'));
                                }

                                $nuevaFecha = date('Y-m-d', strtotime($nuevaFecha . ' + ' . strval($sabados_domingos) . ' days')); 

                                $fechaHoy = date('Y-m-d');

                        @endphp
                                
                               
                                        @if($acta->estado == "ARCHIVADO")
                                                <td > <div style="color: black; background-color: #89f13a; padding: 1em;"><b>Archivado PAS</b></div></td>
                                        @else
                                                @if($acta->estado == "TRAMITADO")
                                                        <td>  <div style="color: black; background-color: yellow; padding: 1em;"><b>Tramitado</b></div></td>
                                                @else
                                                        @if($acta->estado == "CONDESCARGO")
                                                                <td>  <div style="color: black; background-color: #3ac7f1; padding: 1em;"><b>Pendiente de tramite (con descargo)</b></div></td>
                                                        @else
                                                                @if($acta->infraccion->tipo == "INFRACCION")
                                                                        @if($fechaHoy > $nuevaFecha)
                                                                        <td><div style="color: black; background-color: #f53838; padding: 1em;"><b>Para su Tramite</b></div></td>
                                                                        @else
                                                                        <td> <div style="color: black; background-color: orange; padding: 1em;"><b>Dentro del plazo para Pago y/o Descargo</b></div></td>
                                                                        @endif
                                                                @else
                                                                        @if($fechaHoy > $nuevaFecha)
                                                                        <td>  <div style="color: black; background-color: #f53838; padding: 1em;"><b>Para su Tramite</b></div></td>
                                                                        @else
                                                                        <td> <div style="color: black; background-color: orange; padding: 1em;"><b>Dentro del plazo para Descargo</b></div></td>
                                                                        @endif
                                                                @endif
                                                        @endif
                                                @endif
                                        @endif
                        
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-warning" data-toggle="modal" data-target="#ActaEdit" onclick="editar_acta(
                                            {{json_encode($acta->id)}},
                                            {{json_encode($acta->numero)}},
                                            {{json_encode($acta->estado)}},
                                            {{json_encode($acta->inspector->id)}},
                                            {{json_encode($acta->infraccion->id)}},
                                            {{json_encode($acta->retencion)}},
                                            {{json_encode($acta->conductor->dni)}},
                                            {{json_encode($acta->conductor->nombres)}},
                                            {{json_encode($acta->conductor->apellidos)}},
                                            {{json_encode($acta->conductor->licencia)}},
                                            {{json_encode($acta->categoria)}},
                                            {{json_encode($acta->estadolicencia)}},
                                            {{json_encode($acta->empresa->id)}},
                                            {{json_encode($acta->vehiculo->placa)}},
                                            {{json_encode($acta->ruta)}},
                                            {{json_encode($acta->obs_intervenido)}}),
                                            {{json_encode($acta->obs_inspector)}}),
                                            {{json_encode($acta->obs_acta)}})">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                        </a>

                                        <a href="{{ route('ifi', ['id' => json_encode($acta->id)]) }}" class="btn btn-success position-relative">
                                            + IFI
                                        </a>
                                        <form action="{{ route('acta.destroy', ['id' => $acta->id]) }}" method="POST" class="btn btn-danger d-inline" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"  onclick="return confirm('Are you sure you want to delete this acta?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                                </svg>
                                            </button>
                                        </form>
                            </div>
                        </td>
                                
                        </tr>    
                @endforeach               
        </tbody>
    
    <script>
                function editar_acta(id,numero,estado,inspector_id,infraccion_id,retencion,conductor_dni,conductor_nombres,conductor_apellidos,conductor_licencia,categoria,estadolicencia,empresa_id,vehiculo_placa,ruta2,obs_intervenido,obs_inspector,obs_acta)
                    {
                        var ruta = "{{ route('acta.update', ['id' => ':id']) }}";
                        ruta = ruta.replace(':id', id);
                        document.getElementById("formularioid").action = ruta;
                        document.getElementById("actaedit").value = numero; 
                        document.getElementById("colorSelectedit").value = estado;
                        document.getElementById("inspectoredit").value = inspector_id;  
                        document.getElementById("infraccionedit").value = infraccion_id;
                        document.getElementById("retencionedit").value = retencion;
                        document.getElementById("dniedit").value = conductor_dni;
                        document.getElementById("nombresedit").value = conductor_nombres;
                        document.getElementById("apellidosedit").value = conductor_apellidos;
                        document.getElementById("licenciaedit").value = conductor_licencia;
                        document.getElementById("categoriaedit").value = categoria;
                        document.getElementById("estadoedit").value = estadolicencia;
                        document.getElementById("empresaedit").value = empresa_id;
                        document.getElementById("placaedit").value = vehiculo_placa;
                        document.getElementById("rutaedit").value = ruta2;
                        document.getElementById("obs_intervenido").value = obs_intervenido;
                        document.getElementById("obs_inspector").value = obs_inspector;
                        document.getElementById("obs_acta").value = obs_acta;
                    }

                    
                    function changeColor() 
                    {
                        var select = document.getElementById("colorSelect");
                        var div2 = document.getElementById("headmod");
                        
                        if(select.value == "CONDESCARGO")
                        {    
                        div2.style.backgroundColor = "orange";
                        }

                        if(select.value == "ARCHIVADO")
                        {
                        div2.style.backgroundColor = "#2bd390";  
                        }

                        if(select.value == "TRAMITADO")
                        {
                        div2.style.backgroundColor = "#248ef3";  
                        }

                        if(select.value == "PENDIENTE")
                        {
                        div2.style.backgroundColor = "#fb2d5b";  
                        }

                    }
    </script>