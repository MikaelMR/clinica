<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Produtos novos</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div>
            <h1 class="display-5">Produtos novos</h1>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                    </tr>

                    @if (count ($produtos) > 0)
                        @foreach ($produtos as $produto)
                            @if ($produto['promocao'] === true)
                                <tr class="table-success">
                                    <td>{{ $produto['nome'] }}</td>
                                    <td>{{ $produto['categoria'] }}</td>
                                    <td>R$ {{ number_format($produto['preco'],2,',','.') }}</td>
                                </tr>
                            @else
                                <tr>
                                    <td>{{ $produto['nome'] }}</td>
                                    <td>{{ $produto['categoria'] }}</td>
                                    <td>R$ {{ number_format($produto['preco'],2,',','.') }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">
                                <div class="alert alert-warning">
                                    <p>Não há veículos nessa categoria.</p>
                                </div>
                            </td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
