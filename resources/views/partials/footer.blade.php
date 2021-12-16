<footer class="py-5 bg-dark p-5 text-white mt-5" style="overflow-x: hidden; isolation: isolate;">
  <div class="row justify-content-between">
    <div class="col-lg-8">
      <div class="row">
        <div class="col-lg-3">
          <h5>Pages</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="/about" class="nav-link p-0 text-muted">About</a></li>
            @auth
            <li class="nav-item mb-2">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-link text-decoration-none p-0 text-muted signout" style="z-index: 2;">Signout</button>
              </form>
            </li>
            @else
            <li class="nav-item mb-2"><a href="{{ route('login') }}" class="nav-link p-0 text-muted signin" style="z-index: 2;">Signin </a></li>
            @endauth
          </ul>
        </div>
        <div class="col-lg-3">
          <h5>Absen</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="/sd" class="nav-link p-0 text-muted">SD</a></li>
            <li class="nav-item mb-2"><a href="/smp" class="nav-link p-0 text-muted">SMP</a></li>
            <li class="nav-item mb-2"><a href="/sma" class="nav-link p-0 text-muted">SMA</a></li>
            <li class="nav-item mb-2"><a href="/univ" class="nav-link p-0 text-muted">Universitas</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h5>Dev</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="https://www.net-code.tech/#about" target="_blank" class="nav-link p-0 text-muted">Who is the developer?</a></li>
            <li class="nav-item mb-2"><p>Thank you for using Hadirin :)</p></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <form>
        <h5>Subscribe to our newsletter</h5>
        <p>Monthly digest of whats new and exciting from us.</p>
        <form action="/subscribe" method="POST">
          @csrf
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" name="email" type="text" class="form-control form-control-sm" placeholder="Email address">
            <button class="btn btn-outline-success btn-sm shadow" type="submit">Subscribe</button>
          </div>
        </form>
      </form>
    </div>
  </div>
  <div class="d-flex justify-content-between flex-wrap py-4 my-4 border-top">
    <p>Create with <span style="color: #e25555;">&#9829;</span> by <span class="thks">Arlan Butar Butar</span></p>
    <ul class="list-unstyled d-flex">
      <li class="ms-3">
        <a class="link-dark" target="_blank" href="https://www.instagram.com/ar.code_/">
          <ion-icon name="logo-instagram" class="text-white" size="small"></ion-icon>
        </a>
      </li>
      <li class="ms-3">
        <a class="link-dark" target="_blank" href="https://www.facebook.com/ar.code27/">
          <ion-icon name="logo-facebook" class="text-white" size="small"></ion-icon>
        </a>
      </li>
      <li class="ms-3">
        <a class="link-dark" target="_blank" href="https://twitter.com/arcode27">
          <ion-icon name="logo-twitter" class="text-white" size="small"></ion-icon>
        </a>
      </li>
      <li class="ms-3">
        <a class="link-dark" target="_blank" href="whatsapp://send?text=Halo AR&phone=+628113827421">
          <ion-icon name="logo-whatsapp" class="text-white" size="small"></ion-icon>
        </a>
      </li>
      <li class="ms-3">
        <a class="link-dark" target="_blank" href="https://www.tiktok.com/@ar.code_">
          <ion-icon name="logo-tiktok" class="text-white" size="small"></ion-icon>
        </a>
      </li>
      <li class="ms-3">
        <a class="link-dark" target="_blank" href="https://github.com/arlanbutarbutar">
          <ion-icon name="logo-github" class="text-white" size="small"></ion-icon>
        </a>
      </li>
      <li class="ms-3">
        <a class="link-dark" target="_blank" href="https://stackoverflow.com/users/17001097/arlan-butar-butar">
          <ion-icon name="logo-stackoverflow" class="text-white" size="small"></ion-icon>
        </a>
      </li>
    </ul>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
  const options = {
    bottom: '64px', // default: '32px'
    right: 'unset', // default: '32px'
    left: '32px', // default: 'unset'
    time: '0.5s', // default: '0.3s'
    mixColor: '#fff', // default: '#fff'
    backgroundColor: '#fff',  // default: '#fff'
    buttonColorDark: '#100f2c',  // default: '#100f2c'
    buttonColorLight: '#fff', // default: '#fff'
    saveInCookies: false, // default: true,
    label: '🌓', // default: ''
    autoMatchOsTheme: true, // default: true
    
  }
  const darkmode = new Darkmode(options);
  darkmode.showWidget();
</script>
<script type="text/javascript">
  function copy_text() {
    document.getElementById("pilih").select();
    document.execCommand("copy");
    alert("Kode kelas berhasil dicopy!");
  }
</script>