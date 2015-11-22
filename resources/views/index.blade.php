@extends('_master')


@section('head')
	<style>
		body { 
		  background: url(images/bg1.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
	</style>
@stop


@section('title')
	Exposing Digital Photography Final Project
@stop


@section('content')

<div class="vert-center text-center">
	<h1 class="page-header banner">Thomas Nguyen</h1>
	<p class="lead">My image gallery for DGMD E-10: Exposing Digital PhotographyFall 2015</p><br>
	<a class="btn btn-lg btn-danger" href="/gallery" role="button">Enter</a>
</div>
@stop