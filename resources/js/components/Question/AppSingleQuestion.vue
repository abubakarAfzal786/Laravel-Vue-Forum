<template>
    <div>
          <v-layout>
    <v-flex xs12  sm5 offset-sm3 style="margin-top:20px;">
      <v-card>
        <v-card-media :src="quest.image" height="200px">
        </v-card-media>
        <v-card-title primary-title>
            <div>


            <h3 class="headline mb-0">{{quest.title}}</h3>


            <div>{{quest.description}}</div>
          </div>
        </v-card-title>
        <v-card-actions>
          <v-btn flat color="orange">Share</v-btn>
          <v-btn flat color="orange">Explore</v-btn>
        </v-card-actions>
      </v-card>
    </v-flex>
    
  </v-layout>
 <div v-for="repli in this.reply" :key="repli.id">
   




 <div v-if="repli.child_id==0">
 <app-show-reply 
 :reply=repli  ></app-show-reply>
</div>



  </div>


  

 </div>

       
 
 
    </div>
</template>
<script>
import AppShowReply from '../Reply/AppShowReply'
import AppReply from '../Reply/AppReply'
export default {
  
    props:['quest','reply'],
    components:{
      AppShowReply:AppShowReply,
      AppReply:AppReply
    },
   data()
   {
     return{
       

     }
    
   },
    created() {
      
         EventBus.$on('AddNewReply',(Reply)=>{
         
            this.reply.unshift(Reply)
            window.scrollTo({
      top:4,
      bottom: 4,
     behavior: 'smooth'
  })
            
        })
     },
}
</script>