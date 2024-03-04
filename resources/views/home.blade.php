
@foreach($materias as $materia)
    <div>
        <h2>{{ $materia->titulo }}</h2>
        <p>{{ $materia->descricao }}</p>
        <a href="{{ url('/materias/' . $materia->id) }}">Ver Notícia</a>
    </div>
@endforeach
