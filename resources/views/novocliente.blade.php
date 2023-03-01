<html>
<head>
    <title>Cadastro de Cliente</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{csrf_token()}}">
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
                        <form action="/cliente" method="post">
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
                            <button type="cancel" class="btn btn-primary btn-sm">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('js/app.js')}}"type="text/javascript">  </script>
</body>

</head>
</html>
