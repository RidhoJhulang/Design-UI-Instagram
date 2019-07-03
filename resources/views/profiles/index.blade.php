@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://image.flaticon.com/icons/svg/874/874979.svg" class="rounded-circle">
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
            <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
            <div class="pr-5"><strong>100k</strong> followers</div>
            <div class="pr-5"><strong>200</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <!-- <div class="">GIFT - COLLECTION
                        Hias Ruangan | Suvenir
        </div>.
        <div class="">PRICE /pcs start from Rp15.000>
                        5 pcs dapat SPECIAL PRICE *sesuai pilihan*
        </div>.
        <div class="">WA 087789195761
                        MLG-IDN</div> -->
        <!-- <div><a href=#>www.cactusmalang.inc</a></div> -->
        <div><a href=#>{{ $user->profile->url }}</a></div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>    
</div>
@endsection
