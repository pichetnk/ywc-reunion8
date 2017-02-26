<template >
    <main-layout>
    <div id="home" class="container-fluid">
        <div class="row team">

         <div class="row team-red">  
            <div class="row">
                <div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
                      <img src="/img/team_red.svg" class="img-responsive team-banner" alt="">
                </div>   
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                          

                      <div class="member"> 
                           <div class="pic-frame">
                               <div class="pic-frame-border-out"></div>
                               <div class="pic-frame-icon"></div>
                              <img src="/img/pic-frame-tmp.png" class="pic-frame-pic">
                           <div class="pic-frame-border-in"></div>
                         </div>
                      </div>
                             
                      
                </div>   
            </div>
         </div>

          <div class="row team-blue">  
            <div class="row">
                <div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
                      <img src="/img/team_blue.svg" class="img-responsive" alt="">
                </div>   
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                      

                </div>   
            </div>
         </div>

          <div class="row team-green">  
            <div class="row">
                <div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
                      <img src="/img/team_green.svg" class="img-responsive" alt="">
                </div>   
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                      

                </div>   
            </div>
         </div>


          <div class="row team-orange">  
            <div class="row">
                <div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
                      <img src="/img/team_orange.svg" class="img-responsive" alt="">
                </div>   
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                      

                </div>   
            </div>
         </div>

          <div class="row team-yellow">  
            <div class="row">
                <div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
                      <img src="/img/team_yellow.svg" class="img-responsive" alt="">
                </div>   
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                      

                </div>   
            </div>
         </div>

         </div>
    </div>
    </main-layout>
</template>

<script>
  import MainLayout from '../layouts/Main.vue'
  import config from '../config';
  export default {
    components: {
      MainLayout
    } ,
    data : {
      function () {
        return {
          teamRList: [],
          teamBList: [],
          teamGList: [],
          teamOList: [],
          teamYList: []
        };
    }
    },
  created() {
    this.fetchTeam()
  },
  methods: {
    
    fetchTeam() {
      console.log('fetchItemfetchItemfetchItemfetchItemfetchItemfetchItemfetchItemfetchItemfetchItemfetchItemfetchItem');
      this.$http.get(config.appurl+'/api/getTeam', function(data) {
         console.log(data);
           /* this.$set('teamRList', teamList.r||[]);
            this.$set('teamBList', teamList.b||[]);
            this.$set('teamGList', teamList.g||[]);
            this.$set('teamOList', teamList.o||[]);
            this.$set('teamYList', teamList.y||[]);*/
           
      });
    }  
  }  
 }
</script>