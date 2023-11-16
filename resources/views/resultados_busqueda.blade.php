<x-app-layout>
 @section('content')
    <div class="container mt-4">
        <h1>Resultados de la búsqueda para '{{ $query }}'</h1>

        @if($resultados->isEmpty())
            <p>No se encontraron resultados.</p>
        @else
            <ul>
                @foreach($resultados as $result)
                    <li>
                        {{ $result->numero }} - {{ $result->observacion }} - {{ $result->estado }}
                        <!-- Agrega más información según tus necesidades -->
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
</x-app-layout>