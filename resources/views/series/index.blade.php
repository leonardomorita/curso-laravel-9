<x-layout title="Séries">
    <a href="/series/criar">Criar</a>

    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie }}</li>
        @endforeach
    </ul>

    <script>
        // Inserir o valor de uma variável PHP à uma váriavel Javascript
        const series = {{ Js::from($series) }};
    </script>
</x-layout>
