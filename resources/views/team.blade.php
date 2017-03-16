@extends('layouts.app') @section('content')
<div id="team" class="container-fluid">
  <div class="team-bg">
    <div class="team-bg-img"></div>
  </div>

  <div class="row profile">
    <div class="col-lg-4 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">

      @include('profileimage')
    </div>
    <div class="col-lg-4 col-lg-offset-1 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 col-team">
        <div class="team-show">
            <img src="/img/{{$teamImg}}.svg" class="img-responsive">
            <div class="profile-name">

              {{$userDetail->nickname}} @if ( $userDetail->generation == 0)  #สมาคม @else #YWC{{$userDetail->generation}} @endif

            </div>
        </div>
         <div class="btn-order">
                <div class="btn-col">
                             <div class="btn-box">
                                        <div class="btn-box-border"></div>
                                        <div class="btn-box-bg"></div>
                                    
                                        <div class="btn-box-label" > 
                                            <div class="btn-box-content" >
                                                <a  href="http://goo.gl/asrcu7"  target="_blank"> สั่งซื้อของที่ระลึก </a> </div>
                                        </div>
                                </div>   
                              </div> 
         </div>


    </div>
  </div>
  <div class="row team">
    <div class="col-md-12">
    <div class="row team-red">
      <div class="col-md-12">
        <div class="row">
          <div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
            <img src="/img/team_red.svg" class="img-responsive team-banner" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">




            @foreach ($teamRed as $user)
            <div class="member">

              <div class="pic-frame">
                <div class="pic-frame-border-out"></div>
                <div class="pic-frame-icon"> </div>

                <img src="//graph.facebook.com/{{ $user->facebook_id }}/picture?type=large" class="pic-frame-pic">

                <div class="pic-frame-border-in"></div>
              </div>
              <div class="labal-name">
                {{ $user->nickname }} @if ($user->generation !=0 ) #{{$user->generation}} @endif
              </div>
            </div>
            @endforeach



          </div>
        </div>
        <div class="row buttomTeam"></div>
      </div>     
    </div>

    <div class="row team-blue">
      <div class="col-md-12">
        <div class="row">
          <div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
            <img src="/img/team_blue.svg" class="img-responsive team-banner" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">

            @foreach ($teamBlue as $user)
            <div class="member">
              <div class="pic-frame">
                <div class="pic-frame-border-out"></div>
                <div class="pic-frame-icon"></div>

                <img src="//graph.facebook.com/{{ $user->facebook_id }}/picture?type=large" class="pic-frame-pic">

                <div class="pic-frame-border-in"></div>
              </div>
              <div class="labal-name">
                {{ $user->nickname }} @if ($user->generation !=0 ) #{{$user->generation}} @endif
              </div>
            </div>
            
            @endforeach

          </div>

        </div>
        <div class="row buttomTeam"></div>
      </div>
    </div>

    <div class="row team-green">
      <div class="col-md-12">
        <div class="row">
          <div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
            <img src="/img/team_green.svg" class="img-responsive team-banner" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            @foreach ($teamGreen as $user)
            <div class="member">

              <div class="pic-frame">
                <div class="pic-frame-border-out"></div>
                <div class="pic-frame-icon"></div>
                
                <img src="//graph.facebook.com/{{ $user->facebook_id }}/picture?type=large" class="pic-frame-pic">

                <div class="pic-frame-border-in"></div>

              </div>
              <div class="labal-name">
                {{ $user->nickname }} @if ($user->generation !=0 ) #{{$user->generation}} @endif
              </div>
            </div>
            @endforeach

          </div>
        </div>
        <div class="row buttomTeam"></div>
      </div>
    </div>


    <div class="row team-orange">
      <div class="col-md-12">
        <div class="row">
          <div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
            <img src="/img/team_orange.svg" class="img-responsive team-banner" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">

            @foreach ($teamOrange as $user)
            <div class="member">
              <div class="pic-frame">
                <div class="pic-frame-border-out"></div>
                <div class="pic-frame-icon"></div>

                <img src="//graph.facebook.com/{{ $user->facebook_id }}/picture?type=large" class="pic-frame-pic">

                <div class="pic-frame-border-in"></div>
              </div>
              <div class="labal-name">
                {{ $user->nickname }} @if ($user->generation !=0 ) #{{$user->generation}} @endif
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="row buttomTeam"></div>
      </div>
    </div>

    <div class="row team-yellow">
      <div class="col-md-12">
        <div class="row">
          <div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
            <img src="/img/team_yellow.svg" class="img-responsive team-banner" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            @foreach ($teamYellow as $user)
            <div class="member">
              <div class="pic-frame">
                <div class="pic-frame-border-out"></div>
                <div class="pic-frame-icon"></div>

                <img src="//graph.facebook.com/{{ $user->facebook_id }}/picture?type=large" class="pic-frame-pic">

                <div class="pic-frame-border-in"></div>
              </div>
            <div class="labal-name">
                {{ $user->nickname }} @if ($user->generation !=0 ) #{{$user->generation}} @endif
              </div>
            </div>
            @endforeach

          </div>
        </div>
        <div class="row buttomTeam"></div>
      </div>
    </div>
    </div>
  </div>
</div>

@endsection