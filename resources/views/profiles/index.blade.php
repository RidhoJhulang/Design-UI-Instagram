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
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
            <div class="pr-5"><strong>212</strong> posts</div>
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
        <div class="col-4">
            <img src="https://instagram.fcgk6-1.fna.fbcdn.net/vp/f1ed7cfe8b00686a2babdc18280bbb86/5DC56F27/t51.2885-15/sh0.08/e35/c135.0.809.809a/s640x640/66028429_2113593352102536_8949049690389745854_n.jpg?_nc_ht=instagram.fcgk6-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcgk6-1.fna.fbcdn.net/vp/84fd809ecee68654dcc1a1d5f96d5cd7/5DA12535/t51.2885-15/sh0.08/e35/c135.0.809.809a/s640x640/65498340_453037795511778_1037856628650986118_n.jpg?_nc_ht=instagram.fcgk6-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcgk6-1.fna.fbcdn.net/vp/26deefba4e1fd02f72095ec4b9e20ab0/5DBE40CA/t51.2885-15/sh0.08/e35/c135.0.809.809a/s640x640/62482824_200031270944872_1127545953082352845_n.jpg?_nc_ht=instagram.fcgk6-1.fna.fbcdn.net" class="w-100">
        </div>
    </div>    
</div>
@endsection
