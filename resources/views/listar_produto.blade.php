<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    
     <!--  <ul>

        @foreach($produtos as $produto)

         <li>{{$produto}}</li>

        @endforeach
    </ul>
    -->

    <div class="container">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(Página atual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/produtos">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('produto.create') }} ">Cadastrar</a>
            </li>

            </ul>
        </div>
    </nav>

    <p class="h1">LISTA DE PRODUTOS</p>

        @foreach($produtos as $produto)
            <div class="row">

                <div class="col-sm">
                    
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$produto->imagem}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">ID: {{$produto->id}}</h5>
                        <h5 class="card-title">Produto: {{$produto->produto}}</h5>
                        <a href=" {{ route('produto.edit', ['produto' => $produto->id]) }} " class="btn btn-primary">Editar</a>
                        <a href="{{ route('produto.show', ['produto' => $produto->id]) }}" class="btn btn-primary">Excluir</a>
                    </div>
                </div>

                </div>

            </div>
        @endforeach
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>