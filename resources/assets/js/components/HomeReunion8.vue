<template >
    <MainLayout>
    <div id="appHome" class="container-fluid">
        <div class="row">
             <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <img src="img/logo.svg" alt=" " class="img-responsive" />

                <div class="center-block fb-login">   
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
                </div>
               
              </div>              
        </div>
    </div>
    </MainLayout>
</template>


<script>
  import MainLayout from '../layouts/Main.vue'
  export default {
    components: {
      MainLayout
    }
  }
</script>