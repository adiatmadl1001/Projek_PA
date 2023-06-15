<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--cssboostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>

    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">

              <div class="d-flex align-items-center justify-content-center pt-3 gap-4">
                <img src="{{ asset ('/assets/img/pngegg.png') }}" width="10%" alt="">
                <span class="fs-2 fw-bold ">YatimPENS-ITS.</span>
              </div>

              <div class="d-flex align-items-center py-5 px-5 mt-5 justify-content-around pt-3  ">

                @if (session('error'))
                    <div class="alert alert-danger"></div>
                    <b>Opps!</b> {{ session('error') }}
                @endif

                <form action="{{ route('loginaksi') }}" method="post" style="width: 23rem;">
                    @csrf
                    <h3 class="fs-1 mb-3 pb-3" style="letter-spacing: 1px;">Login</h3>
                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" />
                    <label class="form-label" for="form2Example18">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" />
                    <label class="form-label" for="form2Example28" >Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                  </div>

                  <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>

                </form>

              </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block d-flex">
              <img src="{{ asset ('/assets/img/banner.jpeg') }}"
                alt="Login image" class="w-100" height="745px" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
      </section>

<!--Boostrap-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
