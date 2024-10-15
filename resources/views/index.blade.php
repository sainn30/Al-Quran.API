<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al-Qur'an</title>

    <link rel="stylesheet" href="{{'css/bootstrap.min.css'}}">

    <link rel="stylesheet" href="{{'css/style.css'}}">

    <script src="https://kit.fontawesome.com/8b969e22b4.js" crossorigin="anonymous"></script>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    {{-- {{navbar}} --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Digital <span class="food">Quran</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 1048px">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/quran/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Quran</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    <div class="container" style="margin-top: 250px">
        @yield('content')
    </div>


    {{-- click to action --}}

    <div id="cta">
        <div class="dark-overlay">
            <div class="cloud-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto text-center">
                            <h3 class="display-4">Media <span style="color: cornflowerblue">Qur'an</span></h3>
                            <h5>Informasi Mengenai Ajaran Islam <br>Ilmu Al-Qur'an</h5>
                            <h3 style="margin-top: 25px">CONTACT INFORMATION</h3>
                            <div class="py-3">
                                <i class="fas fa-phone " style="margin-right: 30px">
                                    <p class="mt-2" style="color: rgb(18, 25, 32)">phone</p>
                                    <h5>+62 857-8156-7068</h5>
                                </i>
                                <i class="fas fa-map-marked-alt" style="margin-right: 30px">
                                    <p class="mt-2" style="color: rgb(18, 25, 32)">Address</p>
                                    <h5>Jl. Pringgodani no .84</h5>
                                </i>
                                <i class="fas fa-envelope">
                                    <p class="mt-2" style="color: rgb(18, 25, 32)">Email</p>
                                    <h5>sainn3008@gmail.com</h5>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <footer class="py-5 bg-light text-center text-dark-emphasis ">
        <p>Copyright &copy; 2024 | Digital <span>Quran</span></p>
    </footer>



</body>
</html>