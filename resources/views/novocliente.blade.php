<html>
<head>
    <title>Cadastro de Cliente</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        body { padding: 20px;}
    </style>
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container" col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome do cliente</label>
                                    <input type="text" id="nome" class="form-control" name ="nome" placeholder="Nome do cliente">
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade do cliente</label>
                                    <input type="number" id="idade" class="form-control" name ="idade" placeholder="Idade do cliente">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço do cliente</label>
                                    <input type="text" id="endereco" class="form-control" name ="endereco" placeholder="Endereço do cliente">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail do cliente</label>
                                    <input type="text" id="email" class="form-control" name ="email" placeholder="E-mail do cliente">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn btn-primary btn-sm">Cancelar</button>
                        </form>
                    </div>
                    @if($errors->any())
                        <div class="card-footer">
                            <!-- Foreach feito para percorrer todos os campos atrás de erro.
                            Caso algum campo esteja vazio, será printado na tela uma mensagem falando que o campo é requerido -->
                            @foreach ($errors ->all() as $error)
                                <div class="alert alert-danger" role ="alert">
                                    {{ $error}}
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
    @if (isset($errors)) <!-- Caso algum campo esteja vazio, será printado na tela uma mensagem falando que o campo é requerido -->
        {{var_dump($errors)}}
    @endif
    <script src="{{asset('js/app.js')}}"type="text/javascript">  </script>
</body>

</head>
</html>
