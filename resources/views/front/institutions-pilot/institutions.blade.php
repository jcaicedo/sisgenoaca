@extends('front.layouts.main')
@section('title','Home')
	@section('content')


		@include('front.institutions-pilot.includes.banner-principal')
		<!-- end:header-top -->
		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Educación Universitaria</h3>
						{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p> --}}
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12 col-sm-12">
						<div class="services animate-box">
							{{-- <span><i class="icon-browser"></i></span> --}}
							<img src="{{url("/assets/imgs/home/bandera-aragua.jpg")}}" alt="" class="img-flat" />
							<br>
							<h3>Estado Aragua</h3>
							<p>
								Universidad Bicentenaria de Aragua
							</p>


						</div>
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="services animate-box">
							{{-- <span><i class="icon-mobile"></i></span> --}}
								<img src="{{url("/assets/imgs/home/bandera-cojedes.jpg")}}" alt="" class="img-flat" />
								<br>
							<h3>Estado Cojedes</h3>
							<p>Universidad Deportiva del Sur</p>
							<p>Universidad Experimental Simón Rodríguez</p>
						</div>
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="services animate-box">
							{{-- <span><i class="icon-tools"></i></span> --}}
								<img src="{{url("/assets/imgs/home/bandera-dtto-capital.jpg")}}" alt="" class="img-flat" />
								<br>
							<h3>Distrito Capital</h3>
							<p>Universidad Bolivariana de Venezuela</p>
							<p>Universidad Central de Venezuela</p>
							<p>	Universidad Nacional Abierta</p>
						</div>
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="services animate-box">
							{{-- <span><i class="icon-video"></i></span> --}}
								<img src="{{url("/assets/imgs/home/bandera-merida.jpg")}}" alt="" class="img-flat" />
								<br>
							<h3>Estado Mérida</h3>
							<p>Colegio Universitario Hotel Escuela de los Andes Venezolanos</p>
							<p>Universidad Nacional Experimental Politécnica de la Fuerza Armada Bolivariana</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Educación Media General</h3>
						{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p> --}}
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12 col-sm-12">
						<div class="services animate-box">
							{{-- <span><i class="icon-browser"></i></span> --}}
							<img src="{{url("/assets/imgs/home/bandera-cojedes.jpg")}}" alt="" class="img-flat" />
							<br>
							<h3>Estado Cojedes</h3>
							<p>Liceo Bolivariano Batalla de Carabobo</p>
							<p>Escuela Técnica Industrial Robinsioniana Natalicio Libertador</p>
							<p>Centro Unificado José Antonio Anzoátegui</p>
							<p>Escuela Técnica José Laurencio Silva</p>


						</div>
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="services animate-box">
							{{-- <span><i class="icon-mobile"></i></span> --}}
							<img src="{{url("/assets/imgs/home/bandera-merida.jpg")}}" alt="" class="img-flat" />
							<br>
							<h3>Estado Mérida</h3>
							<p>Complejo Educativo General Eleazar López Contreras</p>
							<p>U. E. Vitalia Gutierrez de Rincón</p>
							<p>U. E. Emiro Fuenmayor</p>
							<p>U.E. María del Rosario Nava</p>
							<p>U.E. Colegio General Rafael Urdaneta</p>
						</div>
					</div>

				</div>
			</div>
		</div>



	@endsection
	@push('styles')
		<style media="screen">
			.img-flat{
				width:124px !important;
				height:auto;
				margin-bottom: 18px;

			}
		</style>

	@endpush
