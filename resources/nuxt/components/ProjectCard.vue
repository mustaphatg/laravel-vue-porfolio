<template>
    <!-- <div
        class=" project_card card w-full  my-5 bg-base-200 border border-1 border-blue-200 "
    >
        <figure class="bg-blue-50"><img class="object-contain" :src="image_link" /></figure>
        <div class="card-body">
            <h2 class="card-title font-mono">{{ project.name }}</h2>
            <p v-html="project.description"></p>
            <div class="card-actions justify-end">
                <a
                    :href="project.link"
                    target="_blank"
                    class="btn btn-sm bg-zinc-200 hover:outline hover:outline-1 hover:outline-offset-4 outline-zinc-200 hover:border"
                    >view this app</a
                >
            </div>
        </div>
    </div> -->

    <div class=" border-white border-b-8 bg-black w-full p-3 text-white">


        <div class="flex flex-col lg:flex-row  w-full">

            <!-- image div -->
            <div class=" basis-1/2 p-2" >
                <img class="block w-full rounded-md" :src="image_link" />
            </div>

            <!-- project info text -->
            <div class="basis-1/2 p-2">
                <h2 class="card-title font-mono">{{ project.name }}</h2>
                <p v-html="project.description"></p>
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
