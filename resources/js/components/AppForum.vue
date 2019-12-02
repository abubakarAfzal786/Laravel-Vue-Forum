<template>
    <div>
        
        <app-all-question v-for="questions in question" :key="questions.title" :questions=questions></app-all-question>
    </div>
</template>
<script>

import AppAllQuestion from './Question/AppAllQuestion'
export default {
    data()
    {
        return{
            question:[]
        }
    },
    components:{
        AppAllQuestion:AppAllQuestion
    },
    created(){
        this.$Progress.start()
        axios.get('/api/posts')
        .then(response=>{
            this.$Progress.finish()
            this.question=response.data.data
            console.log(this.question)
            })

    },
}
</script>
<style>
    
</style>