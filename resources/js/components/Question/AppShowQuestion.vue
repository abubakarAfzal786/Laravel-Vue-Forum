<template>
<div>
<app-single-question v-for="question in questions" :key="question.title" :quest=question></app-single-question>
 <app-add-reply :quest=slug></app-add-reply>
</div>
</template>
<script>
import AppAddReply from '../Reply/AppAddReply'
import AppSingleQuestion from './AppSingleQuestion';
export default {
    components:{
    AppAddReply:AppAddReply,
AppSingleQuestion:AppSingleQuestion
    },
 data()
 {
     return{
questions:[],
slug:this.$route.params.slug,
     }
 },
 created() {
    axios.get(`/api/posts/${this.$route.params.slug}`)
    .then(res=>
        {
            this.questions=res.data.data
            console.log(this.questions)
            }
      
    );
      
 },   
}

</script>