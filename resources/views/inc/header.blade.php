<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>MiRight - Your Legal companion</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="MiRight is an NGO that aims to ensure justice for all and promote legal empowerment of the society by making the public aware of their rights and entitlements through creative media content such as animations, memes e.t.c.">
  <meta property="og:description" content="">
  <meta name="keywords" content="Legal literacy,My Rights, Legal empowerment,Legal awareness, Fighting injustices, Marginalized groups, Minority groups">
  <meta property="og:title" content="MiRight - Your Legal companion">
  <meta name="twitter:title" content="MiRight - Your Legal companion">
  <meta name="twitter:description" content="MiRight is an NGO that aims to ensure justice for all and promote legal empowerment of the society by making the public aware of their rights and entitlements through creative media content such as animations, memes e.t.c.">
  <link rel="icon" href="{{URL::asset('/img/logo_b.png')}}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

</head>
<body>
  <!-- ====== Navbar Section Start -->
  <!-- ====== Navbar Section Start -->
  <header
  x-data="
  {
    navbarOpen: false,
  }
  "

  class="absolute z-50 w-full left-0 top-0 border"
  >
  <div class="container mx-auto">
    <div class="flex -mx-4 items-center  relative">
      <div class="px-4 w-60 max-w-full">
        <a href="/" class="w-full block py-5">
          <img
          src="{{URL::asset('/img/logo_c.png')}}"
          alt="logo"
          class="w-full rounded-full"
          style="width:70px; height:70px;"
          />
        </a>
      </div>
      <div class="flex px-4 justify-between items-center w-full">
        <div>
          <button
          @click="navbarOpen = !navbarOpen"
          :class="navbarOpen && 'navbarTogglerActive'"
          id="navbarToggler"
          class="
          block
          absolute
          right-4
          top-1/2
          -translate-y-1/2
          lg:hidden
          focus:ring-2
          ring-primary
          px-3
          py-[6px]
          rounded-lg
          "
          >
          <span
          class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"
          ></span>
          <span
          class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"
          ></span>
          <span
          class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"
          ></span>
        </button>
        <nav
        x-transition
        :class="!navbarOpen && 'hidden'"
        id="navbarCollapse"
        class="
        absolute
        py-5
        px-6
        text-dark

        rounded-lg
        max-w-[250px]
        w-full
        lg:max-w-full lg:w-full
        right-4
        lg:block lg:static lg:shadow-none
        transition-all
        top-full
        "
        >
        <ul class="blcok lg:flex">
          <li>
            <a
            href="javascript:void(0)"
            class="
            text-base
            font-medium
            text-dark
            hover:text-primary
            py-2
            lg:inline-flex
            flex
            lg:ml-12
            "
            >
            Home
          </a>
        </li>
        <li>
          <a
          href="#about"
          class="
          text-base
          font-medium
          text-dark
          hover:text-primary
          py-2
          lg:inline-flex
          flex
          lg:ml-12
          "
          >
          About
        </a>
      </li>
      <li>
        <a
        href="#services"
        class="
        text-base
        font-medium
        text-dark
        hover:text-primary
        py-2
        lg:inline-flex
        flex
        lg:ml-12
        "
        >
        Services
      </a>
    </li>
    <li>
      <a
      href="#team"
      class="
      text-base
      font-medium
      text-dark
      hover:text-primary
      py-2
      lg:inline-flex
      flex
      lg:ml-12
      "
      >
      Team
    </a>
  </li>
  <li>
    <a
    href="#contact"
    class="
    text-base
    font-medium
    text-dark
    hover:text-primary
    py-2
    lg:inline-flex
    flex
    lg:ml-12
    "
    >
    Contact
  </a>
</li>
</ul>
</nav>
</div>

@if (Auth::user())
  <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
    <a
    href="/login"
    class="
    text-base
    font-medium
    text-dark
    hover:text-primary
    py-3
    px-7
    "
    >
    <p>Welcome, {{auth()->user()->email}}</p>
  </a>

  <a href="{{route('logout')}}"
  href="#"
  class="
  text-base
  font-medium
  text-dark
  hover:text-primary
  py-3
  px-7
  "
  >
  <p>Logout</p>
</a>

</div>
@else
  <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
    <a
    href="/login"
    class="
    text-base
    font-medium
    text-dark
    hover:text-primary
    py-3
    px-7
    "
    >
    Login
  </a>
  <a
  href="/register"
  class="
  text-base
  font-medium
  text-white

  rounded-lg
  hover:bg-opacity-90
  py-3
  px-7
  "
  style="background:#d36569"
  >
  Register
</a>

</div>
@endif


</div>
</div>
</div>
</header>
<!-- ====== Navbar Section End -->




<!-- ====== Navbar Section End -->
