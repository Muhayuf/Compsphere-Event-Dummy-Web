<nav class="navbar">
  <a class="navLogo" href="home"><img src="img/logo.png" alt="logo" width="74"/></a>
  <div class="menu">
    <ul class="list">
      <li><a class="{{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a></li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Seminar" || $title === "Sraya Exhibition" || $title === "IT Festival") ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Events
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/ITfest">IT Festival</a></li>
            <li><a class="dropdown-item" href="/sraya">Sraya Exhibition</a></li>
            <li><a class="dropdown-item" href="/seminar">Seminar</a></li>
          </ul>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Competitive Programming" || $title === "Capture The Flag" || $title === "UI/UX" || $title === "Enterprising Resource Planning") ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Competition
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href='/cp'>Competitive Programming</a></li>
            <li><a class="dropdown-item" href="/ctf">Capture The Fla</a></li>
            <li><a class="dropdown-item" href="/uiux">UI/UX</a></li>
            <li><a class="dropdown-item" href="/erp">Enterprising Resourse Planning</a></li>
          </ul>
      </li>
      <li><a class="{{ ($title === "About") ? 'active' : '' }}" href="/about">About Us</a></li>
      <li><a class="{{ ($title === "Trivia" || $title === "Dad Jokes" || $title === "Hover Neon") ? 'active' : '' }}" href="/trivia">Trivia</a></li>
    </ul>
  </div>
  <ul class="login">
    @auth
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Welcome back, {{ auth()->user()->name }}
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/dashboard"><i class="fa-solid fa-user"></i> My Dashboard</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
          <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket fa-rotate-180"></i> Logout</button>
          </form>
        </li>
      </ul>
    </li>
    @else
      <li><a href="/login" class="nav-link"><i class="fa-solid fa-right-to-bracket"></i>  Join Us</a></li>
    @endauth    
  </ul>
</nav>

<!-- Inspired by: https://www.w3schools.com/howto/howto_js_scroll_to_top.asp -->
<button onclick="topFunction()" id="upBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i> UP <i class="fa-solid fa-arrow-up"></i></button>

<script>
  let mybutton = document.getElementById("upBtn");

  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
  }

  function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
  }
</script>