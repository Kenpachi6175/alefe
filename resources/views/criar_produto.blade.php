<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Produto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

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
                            <a class="nav-link" href="{{ route('produto.create') }}">Cadastrar</a>
                        </li>
                        </ul>
                    </div>
                </nav>

            <p class="h1">Cadastrar Produto</p>

            @if(session()->has('message'))
                {{ session()->get('message') }}
            @endif

            <form  action="{{ route('produto.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                     <input type="text" id='produto' name='produto' class="form-control" placeholder="Produto">
                    </div>
                    <div class="col">
                     <input type="decimal" id="valor"  name='valor' step='0.1' class="form-control" placeholder="valor">
                    </div>
                    <div class="col">
                    <input type="text" id='imagem'  name='imagem' class="form-control" placeholder="Imagem">                    </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Cadastrar">

            </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>