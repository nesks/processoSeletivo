<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Principal</title>
</head>
<body>
        @if(session('mensagem'))
            <div class="alert alert-success">
            {{session('mensagem')}}
            </div>
        @endif
<div class="container">
<div class="row justify-content-center align-items-center">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1 col-4">

                    <div class="row justify-content-center my-auto mb-5">

                                <img src="https://www.infomoney.com.br/wp-content/uploads/2019/10/fundos-de-a%C3%A7%C3%B5es-guia-como-funciona.jpg?w=768&quality=70&strip=all" alt="" class="src">

                    </div>
                                    <div class="bottom text-center mb-5">

                 <form action="{{route('api')}}" method="get">

                <div class="row justify-content-md-center">
                <div class="col-10">
                    <label>Simbolo:</label>
                    <input type="text" id="simbolo" name="simbolo" class="form-control px-2"/>

                    <input class= "btn btn-success form-control px-2" type="submit" value="confirmar">
                    </div>
                    </div>
                </form>

                                    </div>

            </div>


        @yield('conteudo')

        </div>
    </div>

</div>


</body>
</html>
