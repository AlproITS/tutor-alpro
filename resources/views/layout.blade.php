<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Personal Website - Code With Dary
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" rel="stylesheet"/>
    <link
        rel="stylesheet"
        href="//use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
</head>

<body>
    <header>
        <!-- Navigation -->
        <nav class="top-menu-container">
            <div class="logo-header">
                <a href="">
                    <img
                    src="https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png"
                    alt="Logo personal portfolio"
                    title="Logo personal portfolio"
                    />
                </a>
            </div>

            <ul>
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a href="">Portfolio</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container-footer">
            <img
                src="https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png"
                alt="Logo personal portfolio"
                title="Logo personal portfolio"
                />
            <p>
                This website is created by Code With Dary
            </p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</html>
