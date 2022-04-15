<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body>
    <div class="header ">
        @section('header')
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">InetSoft</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="list">Users List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="create">Create Account</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        @show

    </div>

    <div class="content">
        @section('content')

        @show

    </div>

    <div class="footer">
        @section('footer')
        <pre>Copyright &copy; 2022, InetSoft Technology Corp. </pre>
        @show

    </div>

</body>

</html>