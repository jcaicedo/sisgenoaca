<div id="fh5co-portfolio">
  <div class="container">

    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
        <h3>Últimos OACAS</h3>
        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p> --}}
      </div>
    </div>


    <div class="row row-bottom-padded-md">
      <div class="col-md-12">
        <ul id="fh5co-portfolio-list">
          @foreach ($registrys as $key => $registry)
            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(themes/pentagon/images/work-5.jpg); ">
              <a href="#" class="color-3">
                <div class="case-studies-summary">
                  <span>Illustration</span>
                  <h2>{{$registry->title_oaca}}</h2>
                </div>
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 col-md-offset-4 text-center animate-box">
        <a href="#" class="btn btn-primary btn-lg">Ver Más</a>
      </div>
    </div>


  </div>
</div>
