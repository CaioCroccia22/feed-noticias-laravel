<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Página do feed de noticias
    <div id="main">
      <header id="navbar">
        Simetria
      </header>
      <main class="feed">
        <section id="noticia1">
            <h1 class="titulo-noticia">
                {{$titulo}}
            </h1>
            <p>{{$descricao}} e {{$dt_publicacao}}</p>
            <img/>{{$imagem}}

        </section>
      </main>
    </div>
</body>
</html>