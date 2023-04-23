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
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page"
                                href="{{ url('/') }}/">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/') }}/register">Sign-up</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <br>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h3 class="text-center text-primary">{{ $title }}</h3>
                <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="uname" class="form-label">Username</label>
                        <input type="text" class="form-control" id="uname" name="uname" autocomplete="off"
                            value="{{ $customer->uname }}" />
                        <span class="text-danger">
                            @error('uname')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="full_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" autocomplete="off"
                            value="{{ $customer->full_name }}" />
                        <span class="text-danger">
                            @error('full_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" autocomplete="off"
                            value="{{ $customer->email }}" />
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" autocomplete="off"
                            value="{{ $customer->pass }}" />
                        <span class="text-danger">
                            @error('pass')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label><br>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="male">Female
                        <span class="text-danger">
                            @error('gender')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone_number" name="phone_number"
                            rows="3" autocomplete="off" value="{{ $customer->phone_number }}" />
                        <span class="text-danger">
                            @error('phone_number')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" rows="3"
                            autocomplete="off" value="{{ $customer->address }}" />
                        <span class="text-danger">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <input type="text" class="form-control" id="bio" name="bio" autocomplete="off"
                            value="{{ $customer->bio }}" />
                        <span class="text-danger">
                            @error('bio')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" autocomplete="off"
                            value="{{ $customer->dob }}" />
                    </div>

                    <div class="mb-3">
                        <label for="github_uname" class="form-label">GitHub Username</label>
                        <input type="text" class="form-control" id="github_uname" name="github_uname"
                            autocomplete="off" value="{{ $customer->github_uname }}" />
                        <span class="text-danger">
                            @error('github_uname')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="occupation" class="form-label">Occupation</label>
                        <input type="text" class="form-control" id="occupation" name="occupation"
                            autocomplete="off" value="{{ $customer->occupation }}" />
                        <span class="text-danger">
                            @error('occupation')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <button type="submit" class="btn btn-dark">Update</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>
