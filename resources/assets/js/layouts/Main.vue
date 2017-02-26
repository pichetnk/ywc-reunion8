<template>
    <div>
       <nav class="navbar navbar-default navbar-static-top navbar-ywc">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#"><img src="img/logo.svg" alt=" "/></a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                             <li><v-link href="/">Home</v-link> </li>
                            <li> <v-link href="/timeline">Timeline</v-link> </li>                      
                            <li> <v-link href="/team">Team</v-link> </li>    
                    </ul>
                </div>
            </div>
        </nav>

        <slot></slot>
    </div>
</template>

<script>
  import VLink from '../components/VLink.vue'
  export default {
    components: {
      VLink
    }
  }
</script>
