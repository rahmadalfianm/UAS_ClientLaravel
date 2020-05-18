<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> @yield('title') </title>
</head>

<body>
    <div class="container" style = "margin-left : 130px">
        <div class="row mt-3">
            <div class="col-md-6">
                <div  style = "width : 1100px" class="card">
                <div  class="card-header text-center ">
                    <!-- Judul Halaman -->
                    <h2> @yield('judul_halaman') </h2>
                </div>
                <div  style = "width : 1100px"class="card-body ">
                    <!-- Konten Halaman -->
                    @yield('konten')
                </div>
                <div class="card">
            </div>
        </div>
    </div>
</body>

</html>