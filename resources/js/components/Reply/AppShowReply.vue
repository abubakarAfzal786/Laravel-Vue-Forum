<template>
  <v-layout>
    <v-flex xs12 sm8 offset-sm2 style="margin-top:10px;">
      <v-card>
       

        <v-card-title primary-title>
          <div>
            <h5 class="headline mb-0">{{reply.comment}}</h5>
            <div> 
            <p>Creted At: {{reply.created_at}}</p>
            <p>Commented by: {{reply.username}}</p>    

             </div>
          </div>
        </v-card-title>

      </v-card>
    </v-flex>
  </v-layout>
</template>
<script>
export default {
    props:['reply']
}
</script>