@section('footer')
<footer class="footer fixed-bottom">
  <div class="container">
    <p class="text-muted">Place sticky footer content here.</p>
  </div>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
@yield('pageJs')
<style>
.footer {
  background-color: #000000;
}
body > .container {
  padding: 60px 15px 0;
}
.container .text-muted {
  margin: 20px 0;
}
</style>
@endsection