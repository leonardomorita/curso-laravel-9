<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-dark mb-2">Criar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie }}</li>
        @endforeach
    </ul>

    <script>
        // Inserir o valor de uma variável PHP à uma váriavel Javascript
        const series = {{ Js::from($series) }};
    </script>
</x-layout>
