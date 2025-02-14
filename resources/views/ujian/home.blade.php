@extends('ujian.main')
@section('title', 'Homepage')

@section('konten')
    <div class="container w-full d-flex align-items-center flex-column">
        <h2>PICTURE <br></h2>
        <img class="shadow rounded-2" src="{{asset('asset/img/pemandangan.jpeg')}}" alt="gambar">
    </div>
@endsection