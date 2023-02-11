<template>
    <div  class="overflow-x-hidden">

        <div class="m-4 ">
            <h2 class="lg:text-2xl text-white font-bold  text-center font-mono">My Personal Projects</h2>
        </div>

        <div class="flex h-full justify-between flex-wrap py-5">
            <project-card
                v-for="project in projects"
                :key="project.id"
                :project="project"
            ></project-card>
        </div>
    </div>
</template>

<script>


export default {
    data() {
        return {
            name: "ibrahim Mustpha",
            projects: [],
        };
    },

    async asyncData({ app }) {
        const result = await app.$axios.get("/api/projects/all");

        var projects = result.data;
        console.log(projects);
        return { projects };
    },
};
</script>
