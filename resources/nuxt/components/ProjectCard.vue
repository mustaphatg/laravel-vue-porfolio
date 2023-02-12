<template>

    <div class=" border-white border-b-8 bg-gradient-to-br from-gray-900 to-gray-700  w-full p-3 text-white">


        <div class="flex flex-col lg:flex-row  w-full">

            <!-- image div -->
            <div class=" basis-1/2 p-2" >
                <img class="block w-full rounded-md" :src="image_link" />
            </div>

            <!-- project info text -->
            <div class="basis-1/2 p-2 text-sky-200">
                <h2 class="card-title ">{{ project.name }}</h2>
                <p class="break-all" v-html="project.description"></p>

                <br>
                <br>
                <a
                    :href="project.link"
                    target="_blank"
                    class="btn text-white mt-4 bg-gradient-to-r from-blue-400 to-pink-400 hover:from-orange-400 hover:to-yellow-400"
                    >view this app</a
                > 
            </div>

        </div>

    </div>


</template>

<script>
export default {
    props: ["project"],

    mounted() {
    },

    computed: {
        image_link() {
            if (this.project) {
                var host = location.origin;
                return host + "/storage/" + this.project.image;
            }

            return "https://via/placeholder.com/150";
        },
    },
};
</script>

<style scoped>

    @media only screen and (min-width: 1024px) {
        .project_card {
            flex-shrink: 0;
            flex-basis: 30%;
        }
    }
</style>
