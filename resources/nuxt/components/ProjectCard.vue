<template>
    <div
        class="project_card card w-full  my-5 bg-base-200 border border-1 border-blue-200 "
    >
        <figure class="bg-blue-50"><img class="object-contain" :src="image_link" /></figure>
        <div class="card-body">
            <h2 class="card-title font-mono">{{ project.name }}</h2>
            <p v-html="project.description"></p>
            <div class="card-actions justify-end">
                <a
                    :href="project.link"
                    target="_blank"
                    class="btn btn-sm  hover:outline hover:outline-2 hover:outline-offset-4 outline-gray-900 hover:border"
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
        console.log("it is one");
        console.log(this.project);
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
