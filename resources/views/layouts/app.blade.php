<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
@font-face {
  font-family: "Product Sans";
  font-style: normal;
  font-weight: 700;
  src: local("Open Sans"), local("OpenSans"),
    url(https://fonts.gstatic.com/s/productsans/v5/HYvgU2fE2nRJvZ5JFAumwegdm0LZdjqr5-oayXSOefg.woff2)
      format("woff2");
}

* {
  text-transform: none !important;
  font-family: Product Sans;
  letter-spacing: 0.04em;
  border-color:black !important;
}
v-select {
    color: #222222 !important;
}

.navbtn {
    
    color: #222222 !important;
}

</style>

</head>
<body>
    <v-app id="app">
        <div>
            @if(Auth::guest())
            <nav-bar/>
            @else
            <v-app-bar app color="white" dense :flat="isFlat">
      <div class="d-flex align-center">
        <v-img
          alt="Vuetify Logo"
          class="shrink mr-2"
          contain
          src="/img/logo.png"
          transition="scale-transition"
          width="150"
          href="/"
          v-on:click="this.home()"
        />
      </div>

      <v-btn text class=" ms-9 navbtn" href="/learn">Learn</v-btn>
      <v-btn text class="navbtn" href="/articles">Resources</v-btn>
      <v-btn text class="navbtn">Community</v-btn>
      

      <v-spacer></v-spacer>
      <v-col cols="12" sm="1">
      </v-col>
      <v-btn
      href="https://github.com/vuetifyjs/vuetify/releases/latest"
      target="_blank"
      text
      color="#222222"
      width="1%"
      class="navbtn"
      >
      <span>GitHub </span>
      
      </v-btn>
      &nbsp;
      <v-btn
        href="/submit"
        text
        color="#222222"
        width="1%"
        class="navbtn"
      >
        <span>{{ Auth::user()->name }}</span>
      </v-btn>
     
    </v-app-bar>
    @endif
        </div>
        <v-img src="./assets/undraw_teaching_f1cm.svg"/>    
        <main class="py-12">
            @yield('content')
        </main>
    </v-app>
</body>
</html>



<style>
  a {
    text-decoration: none !important;
  }
  </style>

  <script>
    function home() {
      window.location = "/";
    }
    </script>