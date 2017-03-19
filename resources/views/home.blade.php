@extends('layouts.app') @section('content')
<div id="appHome" class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="text-center">
        <!-- แก้ logo ไม่กลางด้วยการใส่ display: inline แล้วครอบด้วย div ให้เป็น block อีกที -->
        <img src="img/Re8Gif.gif" alt=" " class="img-responsive" style="display: inline;width: 100% height: auto;">
      </div>

      <div class="fb-login">
        <a href="{{ route('facebook-login') }}">
          <div class="fb-btn">
            <div class="fb-btn-shadow"></div>
            <div class="fb-btn-background"></div>
            <div class="fb-btn-border"></div>
            <div class="fb-btn-label">
              <div class="fb-btn-content">
                <div class="fb-btn-space"></div>
                <div class="fb-btn-text">
                  Login with Facebook
                </div>
              </div>
            </div>

          </div>
        </a>
      </div>

    </div>
  </div>
</div>
@endsection