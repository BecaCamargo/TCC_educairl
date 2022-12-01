<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Icons -->
        <script src="https://kit.fontawesome.com/0d966a43c2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <!-- CSS -->
        <link rel='stylesheet' type='text/css' media='screen' href='css/admin.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

        <!-- Title -->
        <title> Denúncias </title>
        
    </head>

<body class="improved-body">

    <!-- Table -->
    <div class="container-main">
        <div class="container">
            <div class="row">
                <br>
                <br>
                <span class="title"><span class="span">.</span>Administração de denúncias registradas</span>
                <br>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr class="tr">
                            <th><span class="span">...</span>Usuário</th>
                            <th>Data</th>
                            <th>CEP</th>
                            <th>Bairro</th>
                            <th>Endereço</th>
                            <th>Incidente</th>
                            <th>Configurações<span class="span"></span></th>
                        </tr>
                    </thead>
                    
                    <tbody class="tbody">
                        <tr>
                            <td class="td"><span class="span">...</span>bruno.pires0422@gmail.com</td>
                            <td class="td">2022.15.11</td>
                            <td class="td">86085-670</td>
                            <td class="td">Luiz de Sá</td>
                            <td class="td">Édson Ricardo de Lima</td>
                            <td class="td">Incêndio</td>
                            <td><i class="yess fa-solid fa-circle-check"></i><i class="noo fa-solid fa-circle-xmark"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<a href="./../pages/home-adm.php"><div class="scrollTop"><i class="back uil uil-arrow-left"></i></div></a>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

</body>
</html>