@extends('layouts.app')
@section('content')
<div id="profile" class="container-fluid register">
     <div class="row row-profile">
               <div class="col-lg-4 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                       
                 @include('profileimage')     
                </div> 
                <div class="col-lg-4 col-lg-offset-1 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 col-team">
                        <img src="/img/{{$teamImg}}.svg" class="img-responsive">    
                        <div class="profile-name">
                            
                            {{$userDetail->nickname}}
                            @if ( $userDetail->generation  == 0)
                                สมาคม
                            @else
                            #YWC{{$userDetail->generation}}
                            @endif  
                                
                        </div>
                         
                </div> 


    </div> 


</div>
@endsection