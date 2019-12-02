<template>
<div>
  <v-layout>
    <v-flex xs12 sm6 offset-sm3 style="margin:30px;">
      <v-card>
        <v-card-media :src="questions.image" height="200px">
        </v-card-media>
        <v-card-title primary-title>
            <div>
<router-link :to="questions.path" v-if="log()">

            <h3 class="headline mb-0">{{questions.title}}</h3>
</router-link>

            <div>{{questions.description}}</div>
          </div>
        </v-card-title>
        <v-card-actions v-if="me()">
          <v-btn flat color="orange">Share</v-btn>
          <v-btn flat color="orange">Explore</v-btn>
        </v-card-actions>
      </v-card>
    </v-flex>
    
  </v-layout>

</div>
</template>
<script>
import AppEditQuestion from './AddEditQuestion';
import AppAddReply from '../Reply/AppAddReply';
export default {
  props:['questions'],
  components:{
    AppAddReply:AppAddReply,
AppEditQuestion:AppEditQuestion
  },
  data()
  {
return{
 
}

  },
  methods: {
    me()
    {
return User.id()==this.questions.user_id?true:false;

    },
    log()
    {
      return User.loggedin();
    }
},
created() {
  console.log(this.questions.path)
},
  
}
</script>
<style>
    
</style>