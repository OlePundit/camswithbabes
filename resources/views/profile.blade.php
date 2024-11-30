@extends('layouts.app')

@section('content')
<div class="container profile">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <h1 class="card-header">
                    {{$profile->name}}
                  </h1>
                <img src="storage/{{$profile->thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">{{$profile->availability}}</p>
                </div>
            </div>
            <div class="card card-info">
                <h3>Essential Info</h3>
                <table>
                    <tr>
                        <td class="lead">Name</td>
                        <td>{{$profile->name}}</td>

                    </tr>
                    <tr>
                        <td class="lead">Age</td>
                        <td>{{$profile->age}}</td>

                    </tr>
                    <tr>
                        <td class="lead">Turn Ons</td>
                        <td class="p">{{$profile->turnOns}}

                        </td>

                    </tr>
                    <tr>
                        <td class="lead">Availability</td>
                        <td>{{$profile->availability}}

                        </td>

                    </tr>
                    <tr>
                        <td class="lead">Cam2Cam

                        </td>
                        <td><span>Enabled</span>

                        </td>

                    </tr>
                </table>
            </div>
            <div class="card card-tag">
                <h3>Tags</h3>
                <div class="tag-container">
                    @php
                        // Decode the JSON string into an array
                        $tags = json_decode($profile->tags, true);
                    @endphp
                
                    @foreach($tags as $tag)
                        <span>{{ $tag }}</span>
                    @endforeach
                </div>
                
                
            </div>
            
        </div>
        <div class="col-md-8">
            <div class="welcome-card">
                <h2>I'm Live! Come & join me x</h2>
                <div class="row">
                    <div class="col-md-5">
                        <button>Start group chat</button>
                        <label>30 credits per minute</label>
                    </div>
                    <div class="col-md-2">
                        <div>|</div>
                        <h4>OR</h4>
                        <div>|</div>

                    </div>
                    <div class="col-md-5">
                        <button>Start private chat</button>
                        <label>30 credits per minute</label>

                    </div>
                </div>
            </div>
            <div class="card card-desc">
                <h4>About me</h4>
                <p>{{$profile->bio}}

                </p>
            </div>
            <div class="card card-pics">
                <h4>My public pics</h4>
                <div class="row">
                    @php
                    // Decode the JSON string into an array
                    $img = json_decode($profile->img, true);
                    @endphp
                    @foreach($img as $img)
                    <div class="col-md-6 col-6">
                        <img src="storage/{{$img}}">
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
