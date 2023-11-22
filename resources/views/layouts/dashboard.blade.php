<!doctype html>
<html lang="en">
   @include('partials.dashboard-header')
   <body>
      <div class="loading-modal"></div>
      <div class="page">
         @include('partials.dashboard-nav')
         <div class="page-wrapper">
            @include('partials.page-header')
            <div class="page-body">
               <div class="container-xl">
                  <div class="row row-deck row-cards">
                     @include('partials.messages')
                     @yield('content')
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="{{ url(elixir('js/app.js')) }}"></script>
      @section('scripts') @show
   </body>

</html>
<!-- <script src="{{ url('js/jquery-3.6.0.min.js') }}"></script>
<script>
   $(document).ready(function() {
         $('body').bind('cut copy paste', function(e) {
            e.preventDefault();
         });
      });
      $(document).contextmenu(function() {
    return false;
});
</script> -->
