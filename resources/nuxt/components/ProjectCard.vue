<template>
    <div
        class="card w-full lg:w-1/4 bg-base-100  outline outline-1  outline-offset-4 outline-blue-400"
    >
        <figure class="bg-blue-50"><img  :src="image_link" /></figure>
        <div class="card-body">
            <h2 class="card-title font-mono">{{project.name}}</h2>
            <p v-html="project.description"></p>
            <div class="card-actions justify-end">
                <a
                    :href="project.link"
                    target="_blank"
                    class="btn btn-sm glass hover:outline hover:outline-2 hover:outline-offset-4 hover:border"
                    >view this app</a
                >
             
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        props : ['project'],

        mounted(){
            console.log('it is one')
            console.log(this.project)
        },

        computed : {
            image_link(){

                if(this.project){
                    return 'http://localhost:8001/storage/'+this.project.image
                }

                return 'https://via/placeholder.com/150'
            }
        }
    }
</script>
