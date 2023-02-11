<template>

    <div class="ss h-screen ">

        <div class="hero h-full  bg-base-200  ">

            <div class="hero-overlay bg-opacity-80"></div>

            <div class="hero-content  w-full ">

                <div class="lg:p-8  text-white w-full ">
                    <h1 class=" hero_text text-2xl lg:text-4xl   text-sky-200 ">An Enthusiastic PHP Developer</h1>

                    <p class="py-2 sm:py-4 text-lg font-bold font-mono">
                        I Transform Ideas into High-Performance, Scalable Web Applications.
                    </p>

                    <!-- social media links -->
                    <div class="sm:btn-group lg:p-2 flex-wrap  sm:flex-no-wrap sm:overflow-hidden lg:overflow-hidden lg:no-wrap">
                        <a class="btn   m-2 sm:m-0    text-xs lg:text-base border  hover:border-blue-300 hover:outline hover:outline-1 hover:outline-offset-2" target="_blanck" href="https://linkedin.com/in/mustaphatg"> <v-icon class="w-5 mr-3" name='linkedin'></v-icon> Linkedin</a>
                        <a class="btn   m-2 sm:m-0   text-xs lg:text-base border  hover:border-blue-300 hover:outline hover:outline-1 hover:outline-offset-2" target="_blanck" href="https://github.com/mustaphatg"> <v-icon class="w-5 mr-3" name='github'></v-icon> Github</a>
                        <a class="btn   m-2 sm:m-0  text-xs lg:text-base border  hover:border-blue-300 hover:outline hover:outline-1 hover:outline-offset-2" target="_blanck" href="https://drive.google.com/file/d/1j2TvOiXHqIAxTscNYlZ4SUdgIsHLoZ1k/view?usp=sharing"> <v-icon class="w-5 mr-3" name='file'></v-icon> Resume</a>
                        <a class="btn   m-2 sm:m-0  text-xs lg:text-base  border  hover:border-blue-300 hover:outline hover:outline-1 hover:outline-offset-2" target="_blanck" href="mailto:mustaphatg.001@gmail.com,mustophatg@gmail.com?subject=Mail From Your Porfolio"> <v-icon class="w-5 mr-3" name='mail'></v-icon> Mail</a>
                    </div>
                </div>

            </div>

        </div>

    </div>

</template>

<script>
 export default { 
    head(){
        return {
            title : 'Ibrahim Mustapha Oyeyemi, php developer, php full stack developer, php laravel developer, PHP developer in Osun State, Web developer in Nigeria'
        }
    },

    layout : 'home_page'
 }
</script>

<style >
    .hero{
        background-image: url('~/assets/hero_background.jpg');
        background-size: fill;
        background-repeat: no-repeat;
        background-position-y: center;
    }

   

</style>
