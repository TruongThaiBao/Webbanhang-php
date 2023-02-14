<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Nhà Sách Trực Tuyến</title>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }

        header {
            background-color: #0d6efd;
            height: 20vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        aside {
            background-color: lightblue;
            min-height: 75vh;
        }

        footer {
            background-color: #0d6efd;
            height: 5vh;
            color: white;
        }

        h1 {
            color: white;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        /* img{
            width: 50%;
        } */
    </style>
</head>

<body>
    <div class="congtainer">
        <header class="row">
            <h1>NHÀ SÁCH TRỰC TUYẾN</h1>
        </header>
        <div class="row">
            <aside class="col-2">
                @include("left")
            </aside>
            <div class="col-10">
                @yield("main")
            </div>
        </div>
        <footer class="row">
            @include("footer")
        </footer>
    </div>

</body>

</html>