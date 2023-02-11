<template>
    <div  class=" p-8 m-4 rounded overflow-x-hidden">

        <h2 class="lg:text-2xl text-white font-bold  text-left font-mono">My Personal Projects</h2>

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
