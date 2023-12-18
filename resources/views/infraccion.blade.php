<x-guest-layout>
    <head>
        <title>Infraccion</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="container col-md-12">
        <div class="col-md-12">
            <x-header/>
        </div>

        <article class="container">
            <div class="m_container">
                @php
                     $w_temp = ($infrac->tipo == 'infraccion') ? 'una' : 'un';
                @endphp

                <p class="m_infrac">Usted ha cometido {{$w_temp}} <b>{{ $infrac->tipo }}</b>  tipificada con codigo: <b>{{ $infrac->codigo  }}</b> , puede ver los detalles de su {{$infrac->tipo}} en la siguiente tabla.</p>

                @if ($infrac->tipo == 'infraccion')
                    <x-z06_infraccion :infrac="$infrac" w_temp="$w_temp"/>
                @else
                    <x-z07_incumplimiento :infrac="$infrac"/>
                @endif

                <div class="back-button">
                    <a href="/" class="btn btn-primary" style="margin-top: 10px;">Volver a la página principal</a>
                </div>
            </div>
        </article>

    </body>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 0 auto;
        }

        th, td {
            border: 2px solid rgb(88, 82, 82);
            padding: 8px;
            text-align: left;
            border-left: 0px;
            border-right: 0px;
        }

        th {
            background-color: #bbbaba; /* Optional background color for header */
        }
        .m_infrac{
            text-align:justify;
            font-size:1.3em;
        }
        .m_container{
            margin:20px 0;
        }
        .m_p_infra{
            margin:10px 0;
        }
        .m_p{
            margin-top:10px;
            margin-bottom:0px;
        }
    </style>
</x-guest-layout>
