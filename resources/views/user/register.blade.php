<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="font-family: Georgia, serif; font-weight: bold;font-style: italic;">
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <!-- <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register for Fly With Flamingo</p> -->
            <div class="row d-flex justify-content-center align-items-center h-100">
                <!-- <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register for Fly With Flamingo</p> -->
                <div class="col-lg-12 col-xl-11">
                    <!-- <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register for Fly With Flamingo</p> -->
                    <div class="card text-black" style="border-radius: 25px;">
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register for कला-Sparsh <i class="fa fa-tshirt"></i></p>
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <form action="{{route('user.register_code')}}" action="post" class="mx-1 mx-md-4">
                                        @csrf
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <!-- <i class="fas fa-user fa-lg me-3 fa-fw"></i> -->
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                                <input type="text" name="name" class="form-control" />

                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <!-- <i class="fas fa-envelope fa-lg me-3 fa-fw"></i> -->
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                                <input type="email" name="email" class="form-control" />

                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4c">Password</label>
                                                <input type="password" name="password" class="form-control" />

                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <!-- <i class="fas fa-key fa-lg me-3 fa-fw"></i> -->
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4cd">Mobile No</label>
                                                <input type="text" name="mobile_no" class="form-control" />

                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <!-- <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" /> -->
                                            <label class="form-check-label" for="form2Example3">
                                                Already have an account ??<a href="{{route('user.user_login')}}">
                                                    <br> CLICK HERE FOR LOGIN</a>

                                            </label>

                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" value="submit" class="btn btn-primary btn-lg">Register</button>
                                            <!-- <input type="button" class="btn btn-primary" value="submit"> -->
                                        </div>


                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <!-- <img src=" https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image"> -->
                                    <img src="{{asset('new_user/images/register.jpg')}}" style="margin-left: 30%;" class="mb-8 justify-between img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</html>