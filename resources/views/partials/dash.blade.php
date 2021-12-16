<!doctype html>
<html lang="en">
  <head>
    @include('partials.header')
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center mt-5">
        <div class="col-md-10">
          <div class="card shadow border-0 text-center" data-title="hello" data-intro="Hai guys!!">
            @include('partials.head_dash')
            @yield('content')
          </div>
        </div>
      </div>
    </div>
    @include('partials.footer')
  </body>
</html>