@extends('layouts.app')
@section('content')



<div class="row" id="timeline">
        <div class="col-lg-4 col-lg-offset-1">
         <img src="/img/MAP-E88-04.jpg" class="img-responsive">
         
            <div class="location">
                
                <div class="map">
                      <p>
                      E88 Bangkok <br>
                      E88 Building 2Fl., Sukhumvit 69-71 <br>
                     
                      </p>
                </div>
                <div class="location-label">
                <span class="textover">
                            Location
                 </span>
                 </div>
            </div>
        </div>
        <div class="col-lg-2 hidden-xs">
             <div class="timeline-mainline-each">
                <div class="timeline-center-dot"></div>
                <div class="timeline-center-line"></div>
                <div class="timeline-center-dot"></div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="timeline">
                <div class="timeline-times">
                    <div class="timeline-times-each">
                        <strong class="timeline-times-each-label">17.00 น.</strong>
                    </div>
                    <div class="timeline-times-each">
                        <strong class="timeline-times-each-label">18.00 น.</strong>
                    </div>
                    <div class="timeline-times-each">
                        <strong class="timeline-times-each-label">19.00 น.</strong>
                    </div>
                    <div class="timeline-times-each">
                        <strong class="timeline-times-each-label">20.00 น.</strong>
                    </div>
                    <div class="timeline-times-each">
                        <strong class="timeline-times-each-label">23.00 น.</strong>
                    </div>
                </div>
                <div class="timeline-mainline">
                    <div class="timeline-mainline-each">
                        <div class="timeline-mainline-each-node"></div>
                        <div class="timeline-mainline-each-line"></div>
                    </div>
                    <div class="timeline-mainline-each">
                        <div class="timeline-mainline-each-node"></div>
                        <div class="timeline-mainline-each-line"></div>
                    </div>
                    <div class="timeline-mainline-each">
                        <div class="timeline-mainline-each-node"></div>
                        <div class="timeline-mainline-each-line"></div>
                    </div>
                    <div class="timeline-mainline-each">
                        <div class="timeline-mainline-each-node"></div>
                        <div class="timeline-mainline-each-line"></div>
                    </div>
                    <div class="timeline-mainline-each">
                        <div class="timeline-mainline-each-node"></div>
                    </div>
                </div>
                <div class="timeline-events">
                    <div class="timeline-events-each">
                        <div class="timeline-events-each-label">
                            <div class="timeline-events-each-label-frame">
                                <img src="/img/tap_timeline.svg" alt="">
                                <strong class="timeline-description">ลงทะเบียน</strong>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-events-each">
                        <div class="timeline-events-each-label">
                       
                            <div class="timeline-events-each-label-frame">
                                <img src="/img/tap_timeline.svg" alt="">
                                <strong class="timeline-description">กิจกรรมสักอย่าง</strong>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-events-each">
                        <div class="timeline-events-each-label">
                            <div class="timeline-events-each-label-frame">
                                <img src="/img/tap_timeline.svg" alt="">
                                <strong class="timeline-description">Ignight</strong>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-events-each">
                        <div class="timeline-events-each-label">
                            <div class="timeline-events-each-label-frame">
                                <img src="/img/tap_timeline.svg" alt="">
                                 <strong class="timeline-description">Party Reunion</strong>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-events-each">
                        <div class="timeline-events-each-label">
                            <div class="timeline-events-each-label-frame">
                                <img src="/img/tap_timeline.svg" alt="">
                                <strong class="timeline-description">กลับบ้าน</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       
</div>



@endsection
