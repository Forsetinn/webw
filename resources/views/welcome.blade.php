@extends('layouts.app')

@section('content')
<div class="header">
</div>
<div class="content">
  <div class="row">
    <img src="img/audi.png" style="width: 35%;" class="col-lg-offset-1 col-lg-6">
    <div class="col-lg-1"></div>
    <p style="margin-top: 15vh; font-weight: bold;" class="col-lg-4">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus iaculis fermentum. Morbi convallis ipsum dolor. Suspendisse varius fermentum tincidunt. Nunc mi risus, facilisis non convallis volutpat, molestie non orci. In fermentum, mi vel consequat luctus, nunc ipsum faucibus lorem, eu mollis risus libero feugiat elit. Mauris tristique sapien non risus convallis dignissim. Nunc lobortis auctor nunc. Etiam venenatis sapien at nulla tincidunt sed ornare risus dignissim. Etiam pharetra metus et libero consequat varius. Nulla posuere nibh sollicitudin dolor faucibus condimentum. In volutpat iaculis ipsum ut ornare. Donec sodales eros feugiat velit convallis vel viverra dui auctor. Aenean non magna sit amet nibh vestibulum mattis et sed turpis. Sed quis enim sed ipsum adipiscing tristique vel vitae justo. Curabitur interdum lectus non dui varius laoreet.
    </p>
  </div>
</div>
<div class="imgWhiteSpace1">
  <div class="row">

  </div>
</div>
<footer>

  <ul>
    <li>
      <p class="home">Heim</p>
      <a class="logo" href="#">Bílaþj. Fitjavíkur <i>&copy; 2016</i></a>
    </li>
    <li>
      <p class="services">Þjónusta</p>

      <ul>
        <li><a href="#">Þjónustuskoðun</a></li>
        <li><a href="#">Tímareimaskipti</a></li>
        <li><a href="#">Auka- og Íhlutir</a></li>
        <li><a href="#">Viðhald &amp; Viðgerðir</a></li>
      </ul>
    </li>
    <li>
      <p class="reachus">Hafa Samband</p>

      <ul>
        <li><a href="#">Email</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
        <li>562-5050</li>
      </ul>
    </li>
    <li>
      <p class="clients">Viðskiptavinir</p>

      <ul>
        <li><a href="#">Innskráningar Svæði</a></li>
        <li><a href="#">Þjónustuver</a></li>
        <li><a href="#">SOS</a></li>
      </ul>
    </li>
  </ul>

</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<script>
function checkScroll(){
  var startY = $('.navbar').height(); //The point where the navbar changes in px

  if($(window).scrollTop() > startY){
    $('.navbar').removeClass("transparent");
  }else{
    $('.navbar').addClass("transparent");
  }
}

if($('.navbar').length > 0){
  $(window).on("scroll load resize", function(){
    checkScroll();
  });
}
</script>
@endsection
