@extends('layouts.app')

@section('content')
<div class="container video">
    <div class="video-container">
        <div class="left-controls">
            <img src="{{ asset('storage/'.$video->thumb) }}" class="rounded-circle">
            <label>Harley D</label>
        </div>
        <!-- Video -->
        <video id="video-element" src="{{ asset('storage/'.$video->video) }}" autoplay loop muted></video>
        
        <!-- Controls -->
        <div class="right-controls">
            <!-- Volume Up Icon -->
            <div>
                <svg id="volume-up" xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white" class="bi bi-volume-up-fill" viewBox="0 0 16 16" style="cursor: pointer;">
                    <path d="M11.536 14.01A8.47 8.47 0 0 0 14.026 8a8.47 8.47 0 0 0-2.49-6.01l-.708.707A7.48 7.48 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303z"/>
                    <path d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.48 5.48 0 0 1 11.025 8a5.48 5.48 0 0 1-1.61 3.89z"/>
                    <path d="M8.707 11.182A4.5 4.5 0 0 0 10.025 8a4.5 4.5 0 0 0-1.318-3.182L8 5.525A3.5 3.5 0 0 1 9.025 8 3.5 3.5 0 0 1 8 10.475zM6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06"/>
                </svg>
                
                <!-- Volume Mute Icon -->
                <svg id="volume-mute" xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white" class="bi bi-volume-mute" viewBox="0 0 16 16" style="cursor: pointer; display: none;">
                    <path d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06M6 5.04 4.312 6.39A.5.5 0 0 1 4 6.5H2v3h2a.5.5 0 0 1 .312.11L6 10.96zm7.854.606a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0"/>
                </svg>
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="white" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                    </svg>
                </a>

            </div>

            <div class="bottom-right-controls">
                <div class="plays">
                    <i class="fa-solid fa-play"></i>
                    <label>124</label>
                </div>
                <div class="plays">
                    <i class="fa-solid fa-heart"></i>
                    <label>94</label>
                </div>
                <div class="plays">
                    <i class="fa-solid fa-message"></i>
                    <label>30</label>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
