 <div class="row"> 
                     <div class="center-block textCenter">     
                        <div class="member"> 
                            <div class="pic-frame">
                                <div class="pic-frame-border-out"></div>
                                <div class="pic-frame-icon"></div>
                              
                                <img src="//graph.facebook.com/{{ Auth::user()->facebook_id }}/picture?type=large" class="pic-frame-pic">
                                <div class="pic-frame-border-in"></div>
                            </div>
                        </div>
                    </div></div>
                    <div class="row"> 
                        <div class="center-block textCenter">   

                        <div class="main-btn-tilt">
                            <div class="main-btn-tilt-shadow"></div>
                            <div class="main-btn-tilt-background"></div>
                            <div class="main-btn-tilt-border"></div>
                            <div class="main-btn-tilt-label">
                                <div class="main-btn-tilt-content">
                                    <div class="main-btn-tilt-text">
                                        {{ Auth::user()->name }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        </div> 
                     </div>                 
                      