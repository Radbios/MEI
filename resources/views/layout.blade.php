<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/client.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/vendas.css">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <title>{{}}</title>
</head>

<body>
    <nav class="navbar shadow" style="background-color:#3d479b;">
        <div class="d-flex justify-content-center align-items-center container-fluid">
            <div class="d-flex justify-content-center" style="width:80px;">
                <img src="../assets/img/brasao-ufal.png" width="100%" alt="" class="brasao-ufal">
            </div>
            <div style="font-size:24px;color:#fff">
                <strong>
                    Ambiente de Gerenciamento MEI
                </strong>
            </div>
        </div>
    </nav>
    <div class="content">
        <sidebar>
            <x-sideBar></x-sideBar>
        </sidebar>
        <div class="container-sm">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>
