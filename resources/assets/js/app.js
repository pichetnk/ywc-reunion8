//import routes from './routes'
//import config from './config';
//import Vue from 'vue'
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//const example = Vue.component('example', require('./components/Example.vue'));
//const home = Vue.component('home', require('./components/HomeReunion8.vue'));
//const timeline = Vue.component('timeline', require('./components/Timeline.vue'));

/*

const appHome = new Vue({
  el: '#app',
  data: {
    currentRoute: window.location.pathname
  },
  computed: {
    ViewComponent () {
      const matchingView = routes[this.currentRoute]
      return matchingView
        ? require('./pages/' + matchingView + '.vue')
        : require('./pages/404.vue')
    }
  },
 
  render (h) {
    return h(this.ViewComponent)
  }
})



window.addEventListener('popstate', () => {
  app.currentRoute = window.location.pathname
})

*/
$.validator.setDefaults({
  debug: true,
  success: "valid"
});

 
$("#register").ready(function () {
     var registerForm = $('#registerForm');
      registerForm.validate({
          rules: {
             nickname: {                  
                  required: true
              },
              generation: {
                  required: true
              },
              join_event: {                 
                  required: true
              }
          },
          highlight: function (element) {
             console.log(element.name);
              $(element).closest('.control-group').removeClass('success').addClass('error');
          },
          success: function (element) {
           
              element.addClass('valid')
                  .closest('.control-group').removeClass('error').addClass('success');
          }
      });

    
    $("#btnRandomTeam").on("click",function()
    {     
        if(registerForm.valid()){
           axios.post('register',$("#registerForm").serialize())
              .then(function (res) {
                let data = res.data;
                if(data.error_code=='00'){
                    console.log('valid');
                }if(data.error_code=='01'){
                    console.log('user register');
                }else {
                   console.log('Not found error');
                   window.location.href = '/team';                 

                }
                console.log(res.data);
              })
              .catch(function(res) {
                  console.debug('res',res);
                if(res instanceof Error) {
                   console.log('msg');
                  console.log(res.message);
                } else {
                  console.log('data');
                  console.log(res.data);
                }
            });
        }
      return false;
    }
    );
});


$("#shop").ready(function () {

    $('#btnSubmitShop').on('click',function(){
      
    })
});