<template>
    <div class="p-8">

        <h2 class="lg:text-2xl font-mono">Lists of my personal projects...</h2>

        <div class="flex  justify-between flex-wrap py-5">
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
