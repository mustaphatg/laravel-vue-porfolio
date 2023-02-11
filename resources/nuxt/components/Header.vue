<template>

    <div class="navbar border-b border-gray-200 shadow-md ">

        <div class="flex-none">

            <label
                for="my-drawer"
                class="btn btn-square btn-ghost drawer-button text-white lg:hidden"
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    class="inline-block w-5 h-5 stroke-current"
                >

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    ></path>

                </svg>

            </label>

        </div>

        <div class="flex-1">

            <a class="btn btn-ghost text-white font-bold normal-case text-xl">Ibrahim Mustapha</a>

        </div>

        <div class="flex-1 btn-sm justify-end">
            <ul class="menu menu-horizontal hidden lg:flex">
                <li class=""> <nuxt-link to="/">Home</nuxt-link> </li>
                <li class=""> <nuxt-link to="/about">About Me</nuxt-link> </li>
                <li class=""> <nuxt-link to="/projects">My Projects</nuxt-link> </li>
                <!-- <li class=""> <nuxt-link to="/contact">Contact</nuxt-link> </li> -->
            </ul>
            <!-- <button @click="toggleDark" class="ml-3 btn btn-sm btn-info ">{{theme}} theme</button> -->
        </div>

    </div>

</template>

<script>
export default {
    
    data(){
        return {
            theme : 'light'
        }
    },

    methods : {

        toggleDark : function(){
            var html = document.querySelector('html')

            if(this.theme == 'light'){
                html.setAttribute('data-theme', 'light')
                this.theme = 'night'
            }else{
                 html.setAttribute('data-theme', 'night')
                    this.theme = 'light'
            }

        }

    }
}
</script>

