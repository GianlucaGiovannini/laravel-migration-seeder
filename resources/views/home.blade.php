@extends('layout/app')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 px-3 py-3 g-4">

        @forelse($packs as $pack)
        <div class="col">
            <div class="cards p-2">
                <div class="cards_img">
                    <img class="img-fluid" src="{{$pack->image}}">
                </div>
                
                <div class="cards_body">
                    <h4>{{$pack->state}} - {{$pack->city}}</h4>
                    <small class="py-2">{{$pack->description}}</small>
                    <p class="py-2">Date disponibili <strong class="{{ $pack->is_availlable == true ? 'green' : 'red'}}">{{$pack->date}}</strong></p>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            niente da mostrare
        </div>
        @endforelse
        </div>
    </div>
@endsection