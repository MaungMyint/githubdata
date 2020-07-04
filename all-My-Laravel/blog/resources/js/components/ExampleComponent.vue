<template>
  <div class="col-md-8 mt-3" >
    
    <div class="card" v-for="post in posts">
        <div class="card-header">{{post.post_title}}</div>
        <img :src="post.post_image" class="card-img-top">
        <div class="card-body">
            {{post.post_content}}
            
        </div>
        <div> <!-- <a :href="'/post/' + post.post_id" class="btn btn-primary">Read More
             </a> -->
          <router-link :to="{ name:'detail',params:{id: post.post_id} }" class="btn btn-primary" >Read More</router-link>
        </div>
    </div>
    </div>
        

</template>

<script>


    export default {
        data () {
    return {
      posts: null
    }
  },

        mounted() {
            axios
      .get('/api/posts')
      .then(response => (this.posts = response.data.data))
  
        }
    }
</script>


<style type="text/css">
    

</style>
<!-- in vue  1 template web page frame (only one div tag)
            2.script js main
            3. css style
            -> go app.js
-->
