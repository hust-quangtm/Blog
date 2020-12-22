<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid d-flex flex-xl-nowrap flex-md-wrap">
                <div class="col-xl-4 col-md-12 col-6 d-md-flex justify-content-md-center justify-content-center">
                    Simple Blog
                    </div>
                </div>
                <div class="col-xl-8 col-md-12 collapse navbar-collapse d-md-flex flex-md-nowrap justify-content-xl-around justify-content-center" id="collapsingNavbar">
                    <ul class="nav navbar-nav menu-header">
                        <li class="nav-item">
                            <a class="nav-link" href="#">New Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="article ">
        <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Bài viết số 1</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, nam cumque! Velit facilis esse facere qui dicta fugiat vero, tempora saepe laboriosam debitis. Eum quam expedita officia praesentium obcaecati alias.</p>
                <p><a href="#">Read more</a></p>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Bài viết số 2</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, nam cumque! Velit facilis esse facere qui dicta fugiat vero, tempora saepe laboriosam debitis. Eum quam expedita officia praesentium obcaecati alias.</p>
                <p><a href="#">Read more</a></p>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Bài viết số 3</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, nam cumque! Velit facilis esse facere qui dicta fugiat vero, tempora saepe laboriosam debitis. Eum quam expedita officia praesentium obcaecati alias.</p>
                <p><a href="#">Read more</a></p>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Bài viết số 4</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, nam cumque! Velit facilis esse facere qui dicta fugiat vero, tempora saepe laboriosam debitis. Eum quam expedita officia praesentium obcaecati alias.</p>
                <p><a href="#">Read more</a></p>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Bài viết số 5</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, nam cumque! Velit facilis esse facere qui dicta fugiat vero, tempora saepe laboriosam debitis. Eum quam expedita officia praesentium obcaecati alias.</p>
                <p><a href="#">Read more</a></p>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Bài viết số 6</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, nam cumque! Velit facilis esse facere qui dicta fugiat vero, tempora saepe laboriosam debitis. Eum quam expedita officia praesentium obcaecati alias.</p>
                <p><a href="#">Read more</a></p>
            </div>
        </div>
    </div>
    </section>
    <footer >
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>Coppyright &copy; 2020, by QuangTran</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
