<template>

    <div class="ss h-screen">

        <div class="hero h-full  bg-base-200">

            <div class="hero-overlay bg-opacity-70"></div>

            <div class="hero-content">

                <div class="p-8 text-white">
                    <h1 class="text-5xl font-bold">A professional and a full stack developer.</h1>

                    <p class="py-4 text-lg font-bold font-mono">
                       I'm a passionate Full Stack web developer with <b class="underline">4 years</b> of experience in both frontend and backend web development. <br><br> I majorly use PHP, Laravel, CodeIgniter, React/vue and MySQL in my day-to-day coding session.
                    </p>

                    <!-- social media links -->
                    <div class="btn-group ">
                        <a class="btn  border  hover:border-blue-300 hover:outline hover:outline-1 hover:outline-offset-2" target="_blanck" href="https://linkedin.com/in/mustaphatg"> <v-icon class="w-5 mr-3" name='linkedin'></v-icon> Linkedin</a>
                        <a class="btn   border  hover:border-blue-300 hover:outline hover:outline-1 hover:outline-offset-2" target="_blanck" href="https://github.com/mustaphatg"> <v-icon class="w-5 mr-3" name='github'></v-icon> Github</a>
                        <a class="btn  border  hover:border-blue-300 hover:outline hover:outline-1 hover:outline-offset-2" target="_blanck" href="https://drive.google.com/file/d/1fzpdVeJUXr7YlnunuLVORfGGdc-yK5Uj/view?usp=sharing"> <v-icon class="w-5 mr-3" name='file'></v-icon> Resume</a>
                        <a class="btn   border  hover:border-blue-300 hover:outline hover:outline-1 hover:outline-offset-2" target="_blanck" href="mailto:mustaphatg.001@gmail.com,mustophatg@gmail.com?subject=Mail From Your Porfolio"> <v-icon class="w-5 mr-3" name='mail'></v-icon> Mail</a>
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
            title : 'Ibrahim Mustapha Oyeyemi, php developer, php full stack developer, php laravel developer'
        }
    }
 }
</script>

<style >
    .hero{
        background-image: url('~/assets/musty4.jpg');
        background-size: fill;
        background-repeat: no-repeat;
        background-position-y: center;
    }

</style>
