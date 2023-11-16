<x-guest-layout>
    <head>
        <title>Infraccion</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="container col-md-12">
        <div class="col-md-12">
            <x-navfiscalizacion/>
        </div>
        <div class="container col-md-12">
            <p>Código de Infracción: {{ $codigo }}</p>
            <p>Tipo de Infracción: {{ $tipo }}</p>
            <p>Descripción: {{ $descripcion }}</p>
            <p>Calificación: {{ $calificacion }}</p>
            <p>Medidas Preventivas: {{ $m_preventivas }}</p>
            <p>Consecuencia: {{ $consecuencia }}</p>
        </div>
    </body>
</x-guest-layout>
