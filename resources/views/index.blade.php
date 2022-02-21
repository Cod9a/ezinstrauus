@extends('layouts.main')

@section('title', 'Accueil')

@section('content')

	@include('includes.aboutus')

	@include('includes.services')

	{{-- @include('includes.skill') --}}

	@include('includes.caseStudies')

	@include('includes.features')

@endsection