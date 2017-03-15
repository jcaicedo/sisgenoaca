@extends('front.layouts.main')
@section('title','Home')
@section('content')

  @include('front.home.includes.banner-principal')
  <!-- end:header-top -->

  <!--  Welcome Oaca -->
  @include('front.home.includes.welcome')
  <!--Recents Oacas-->
  @include('front.home.includes.recents_oacas')

  <!--Recents Oacas-->
  @include('front.home.includes.aboutus')
  {{-- <!--Pilot Institutions-->
  @include('front.home.includes.pilot_institutions') --}}
@endsection
