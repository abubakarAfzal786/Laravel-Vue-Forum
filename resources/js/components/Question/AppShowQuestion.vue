<template>
<div>
<app-single-question v-for="question in questions" :key="question.id" :quest=question :reply=reply></app-single-question>
 <app-add-reply :quest=slug></app-add-reply>
</div>
</template>
<script>
import AppAddReply from '../Reply/AppAddReply'
import AppSingleQuestion from './AppSingleQuestion';
import AppShowReply from '../Reply/AppShowReply'
export default {
    components:{
        AppShowReply:AppShowReply,
    AppAddReply:AppAddReply,
AppSingleQuestion:AppSingleQuestion
    },
 data()
 {
     return{
questions:[],
slug:this.$route.params.slug,
reply:[]
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
      axios.get(`/api/post/${this.$route.params.slug}/reply`)
      .then(res=>{
          this.reply=res.data
          
      })
 },   
 methods: {

 },
}

</script>