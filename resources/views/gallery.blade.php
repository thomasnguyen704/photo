@extends('_master')


@section('head')
	<style>
		body { 
		  background-color: black;
		}
	</style>
@stop


@section('title')
	Exposing Digital Photography Final Project
@stop


@section('content')
<div class="text-center">
	<h1 class="page-header banner">Thomas Nguyen</h1>
	<div id="nanoGallery1"></div>
</div>
@stop


@section('js')
<script>
	$(document).ready(function () {
		$("#nanoGallery1").nanoGallery({
			thumbnailWidth: 'auto',
      		thumbnailHeight: 250,
			kind: 'flickr',
			userID: '40219745@N05',
			photoset: '72157659202372153',
			thumbnailHoverEffect: [{ name: 'labelAppear75', duration: 300 }],
			thumbnailLabel: { display: true, position: 'overImageOnMiddle', align: 'center' }
		});
	});
</script>
@stop