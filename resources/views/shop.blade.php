@extends('layouts.app')
@section('content')
<div class="container-fluid " id="shop">
       <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                    
            </div>
       </div>
       <div class="row">
            <div class="col-lg-6 col-lg-offset-3">

                <form class="form-horizontal" id="formShop">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">ชื่อ-สกุล</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="name" placeholder="ชื่อ-สกุล">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="generation" class="col-sm-2 control-label">รุ่น</label>
                        <div class="col-sm-5">
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
                        <label for="order" class="col-sm-2 control-label">สั่งชื้อ </label>
                        <div class="col-sm-10">
                                  <div class="form-group row">
                                         <label for="shirtSize" class="col-sm-2 control-label">
                                         เสื้อ
                                         </label>
                                         <div class="col-sm-3">
                                              <select name="shirtSize" class="form-control">
                                                <option value="s">S</option>
                                                <option value="m">M</option>
                                                <option value="l">L</option>
                                                <option value="x;">XL</option>
                                                <option value="xxl">XXL</option>
                                            </select>
                                         </div>   
                                          <label for="shirtOrder" class="col-sm-2 control-label">
                                                    จำนวน
                                                    </label>
                                          <div class="col-sm-5">
                                              <input type="text" class="form-control" id="shirtOrder" placeholder="จำนวนที่สั่งเสื้อ เช่น 1,2,3">
                                               
                                         </div>                    
                                  
                                  </div>
                                           <div class="form-group row">
                                         <label for="order2" class="col-sm-2 control-label">
                                            แก้ว
                                         </label>
                                         <div class="col-sm-5">
                                             <input type="text" name="order2" class="form-control" placeholder="จำนวนที่สั่งแก้ว เช่น 1,2,3">
                                           
                                         </div>    
                                                                                                 
                                  
                                  </div>
                                  
                                    
                                 
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="receiveType" class="col-sm-2 control-label">รับของ</label>
                        <div class="col-sm-6">
                                <select name="receiveType" class="form-control">
                                    <option value="own">หน้างาน</option>
                                    <option value="zip">จัดส่ง</option>                            
                                </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="order" class="col-sm-2 control-label">ที่อยู่</label>
                        <div class="col-sm-10">
                             <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>


                    
               
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-default" id="btnSubmitShop">สั่งชื้อ</button>
                        </div>
                    </div>
                </form>

            </div>
       </div>      
</div>
@endsection
