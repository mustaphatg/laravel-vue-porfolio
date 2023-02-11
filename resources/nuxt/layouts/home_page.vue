<template>
    <div data-theme="dark" class="drawer drawer-mobile 2xl:w-[75%] 2xl:mx-auto ">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />

        <div  class="drawer-content">
            <!-- header -->
            <Header></Header>
            <!-- end of header -->

            <!-- Page content here -->
                <Nuxt   class="" keep-alive />
            <!-- Page content here -->
        </div>

        <div class="drawer-side">
            <label for="my-drawer" class="drawer-overlay"></label>

            <ul class="menu w-80 bg-base-100 lg:hidden">
                <li class="text-xl menu-title mt-4">
                    <span class="text-xl text-white">Mobile Links</span>
                </li>
                <li class=""><nuxt-link to="/">Home</nuxt-link></li>
                <li class=""><nuxt-link to="/about">About</nuxt-link></li>
                <li class="">
                    <!-- <nuxt-link to="/experience">Experience</nuxt-link> -->
                </li>
                <li class=""><nuxt-link to="/projects">Projects</nuxt-link></li>
                <!-- <li class=""><nuxt-link to="/contact">Contact</nuxt-link></li> -->
            </ul>
        </div>
    </div>
</template>


<script>

import Vue from 'vue'
import SmoothScrollbar from 'vue-smooth-scrollbar'
Vue.use(SmoothScrollbar)

export default {
    
}

</script>

<style scoped>
    .drawer-content {
        overflow: hidden !important;
    }
</style>
