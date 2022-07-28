<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            Layssa Matos
          </a>
        </div>
    </nav>


    <div class="row">
        <div class="col-9">
            <p class="display-4">
                <em> Produtos </em>
            </p>
        </div>
        <div class="col-3 ">
            <div class="d-grid  d-md-flex justify-content">
                <button class="btn btn-success me-md-2 mt-4" type="button">Adicionar Produto</button>
              </div>
        </div>
      </div>


    <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Preço</th>
                <th scope="col">Data de criação</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Palio</td>
                <td>Fiat</td>
                <td>R$ 10.000,00</td>
                <td>27/07/2022</td>
                <td>
                    <button type="button" class="btn btn-danger">Excluir</button>
                    <button type="button" class="btn btn-warning">Editar</button>
                </td>
              </tr>
            </tbody>
    </table>


</body>
</html>
