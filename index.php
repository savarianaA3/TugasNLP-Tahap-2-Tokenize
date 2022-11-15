<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Layout Web dengan Grid System & Container</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <img src="2.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="row">
            <div class="col-md-12 text-center" style="backgroundcolor:AntiqueWhite ;">
                <a href="#">Menu 1</a><a href="#" class="ml-5">Menu 2</a><a href="#" class="ml-5">Menu 3</a><a href="#" class="ml-5">Menu 4</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="background-color:GreenYellow;">
                <h2>Sidebar</h2>
                <p><a href="#">Link 1</a></p>
                <p><a href="#">Link 2</a></p>
                <p><a href="#">Link 3</a></p>
                <p><a href="#">Link 4</a></p>
            </div>
            <div class="col-md-9" style="background-color:LightCyan;">
                <h2>Tabel pada Bootstrap</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
        <div class="row" style="background-color:MediumPurple;">
            <div class="col-md-12 text-center">
            <h2>Footer</h2>
            </div>
            </div>
        </div>

 <!-- jQuery and Bootstrap Bundle (includes Popper) -->
 <script src="assets/jquery.slim.min.js"></script>
 <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
