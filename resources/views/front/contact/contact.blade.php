@extends('front.layouts.main')
@section('title','Contacto')
  @section('content')
    
    @include('front.contact.includes.banner-principal')
    <!-- end:header-top -->

    <div id="fh5co-contact" class="animate-box">
      <div class="container">
        <form action="#">
          <div class="row">
            <div class="col-md-6">
              <h3 class="section-title">Dirección</h3>
              {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
              <ul class="contact-info">
                <li><i class="icon-location-pin"></i>Universidad Central de Venezuela</li>
                {{-- <li><i class="icon-phone2"></i>+ 1235 2355 98</li> --}}
                <li><i class="icon-mail"></i><span>Coordinadora: </span><a href="#"> yoslyhernandez@gmail.com</a> </li>
                <li><i class="icon-mail"></i><a href="#">proyectoaca@gmail.com</a></li>
                <li><i class="icon-twitter2"></i><a href="#">@proyectoOACA</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Mensaje"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="submit" value="Enviar" class="btn btn-primary">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- END fh5co-contact -->
    <div id="map" class="fh5co-map"></div>
    <!-- END map -->
  @endsection

  @push('scripts')
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="themes/pentagon/js/google_map.js"></script>
  @endpush
