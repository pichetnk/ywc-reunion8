@extends('layouts.app')
@section('content')
<div id="register" class="container-fluid register">
     <div class="row">
               <div class="col-lg-4 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                                  
                 @include('profileimage')     
                </div> 

                 <div class="col-lg-4 col-lg-offset-1 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <p class="registerHeader">ลงทะเบียน</p>
                    <form class="form-horizontal" id="registerForm" class="register" action="#">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">ชื่อ</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nickname" name="nickname" placeholder="nickname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputGen" class="col-sm-2 control-label">รุ่น</label>
                            <div class="col-sm-10">
                                
                                <select class="form-control" name="generation" id="generation">
                                    
                                    <option  value="" >---Plase Select---</option>
                                    <option  value="0">สมมาคม</option>
                                    @for ($i = 1; $i <= 14; $i++)
                                        <option  value="{{ $i }}">{{ $i }}</option>
                                      
                                    @endfor
                                   
                                </select>
                                
                            </div>
                        </div>
                        <div class="form-group"> 
                           
                            <div class="col-sm-10 col-sm-offset-2">
                                <label class="radio-inline">
                                     <input type="radio" name="join_event" id="join_event1" value="going">มาวันงาน
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="join_event" id="join_event2" value="not_go">ไม่มาวันงาน
                                </label>
                                <label for="join_event" class="error" style="display:none;">Please choose one.</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <input type="hidden"  id="facebook_id" name="facebook_id" value="{{ Auth::user()->facebook_id }}">                         
                            
                             <div class="random-team">
                                     <div class="random-team-border"></div>
                                    <div class="random-team-bg"></div>
                                   
                                    <div class="random-team-label" > 
                                        <div class="random-team-content" >
                                            <a id="btnRandomTeam" href="#" 
                                             onclick="submitFormRegister();"> สุ่มทีม </a> </div>
                                    </div>
                             </div>   
                             


                            </div>
                        </div>
                     </form>
                                                                    
                </div> 

       
       </div>
           
</div>
@endsection