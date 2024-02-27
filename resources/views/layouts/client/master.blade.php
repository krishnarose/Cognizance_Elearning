<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.client.head')
        <title>@yield('title')</title>
        @include('layouts.client.css')
        @yield('custom_styles')
    </head>

   <!-- body -->
   <body class="main-layout home_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('client/images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      @include('layouts.client.navbar')
      <!-- end header -->
      @yield('content')
      <!-- footer -->
      @include('layouts.client.footer')
      <!-- end footer -->
      @include('layouts.client.scripts')

   </body>
</html>
