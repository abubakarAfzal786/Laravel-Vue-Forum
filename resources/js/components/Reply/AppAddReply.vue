<template>
    <div>
        <v-flex xs12 offset-sm4 style="margin:30px;">
            <markdown-editor></markdown-editor>
          <v-btn type="submit" color="success">Post</v-btn>
        </v-flex>
    </div>
</template>
<script>

export default {
    props:['quest'],
    created() {
        console.log(this.quest)
    },
}
</script>