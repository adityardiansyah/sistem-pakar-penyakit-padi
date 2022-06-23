@extends('layouts.app')

@section('breadcrump')
    <li class="active">Home</li>
@endsection
@section('style')
<style>
    .absolute{
        position: absolute; top:0; left:0; right:0; bottom:0;
    }
</style>
@endsection

@section('content')
{{-- @include('layouts.aside') --}}
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <img src="{{ asset('assets/img/banner.jpg') }}" class="img-responsive" alt="">
            <div class="absolute" style="background:rgba(0, 0, 0, 0.418); border-radius:8px;">
                <p class="text-center" style="margin-top:20%; color:#fff; font-size:18px;">Selamat datang  di <strong>DOKTER PADI</strong>, untuk memulai konsultasi silahkan klik tombol dibawah ini :</p> 
                <p class="text-center" style="color:#fff;"><a href="{{ route('pasienForm') }}" class="btn btn-primary">Konsultasi</a></p>
            </div>
        </div>
    </div>
    
</div>
@endsection
