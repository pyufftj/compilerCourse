@extends('layouts.master')
<link rel="stylesheet" href="{{asset('css/video-js.min.css')}}">
@section('title')
    教学录像
@endsection

@section('content')
    <div class="container">
        <video id="video1" class="video-js vjs-default-skin" controls
               preload="auto" width="1280" height="720" poster="{{asset('img/3.jpg')}}"
               data-setup='{"autoplay":true}'>
            <source src="{{asset('course_video/1.mp4')}}" type="video/mp4">
            <p class="vjs-no-js">
                请确认打开了Javascript，或者使用Html5播放器<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
        </video>
    </div>

@endsection
@section('footer')
    <footer>
        <div class="foot">

            <div class="common-site">

            </div>

            <div class="copyright">
                华中科技大学编译原理课程组——版权所有
            </div>
        </div>

    </footer>
    <script src="{{asset('js/video.min.js')}}"></script>
    <script>
        videojs('video1').ready(function() {
            this.play();
        });
    </script>

@endsection