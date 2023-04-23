<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/66d9d9d3b0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="white">
            <div class="container-fluid">
                <p class="navbar-brand text-white mb-2 mb-lg-0"><i class="fa-solid fa-user-group"></i> Social Media</p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <form class="d-flex ms-auto" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <br>
        <div class="ms-4 ps-3">
            <span>Username: </span><br><br>
            <span>Name: </span><br><br>
            <span>Email: </span><br><br>
            <span>Password: </span><br><br>
            <span>Gender: </span><br><br>
            <span>Phone Number: </span><br><br>
            <span>Address: </span><br><br>
            <span>Bio: </span><br><br>
            <span>Date of Birth: </span><br><br>
            <span>GitHub Username: </span><br><br>
            <span>Occupation: </span><br><br>

            <br>
            <a href="{{ url('/user/edit/') }}">
                <button type="button" class="btn btn-primary">Edit</button>
            </a>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>
