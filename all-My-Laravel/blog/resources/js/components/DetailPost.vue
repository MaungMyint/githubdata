<template>

   <div class="col-lg-8">
        <!-- Title -->
        <h1 class="mt-4">{{post.post_title}}</h1>
        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{post.author.name}}</a>
        </p>
        <hr>
        <!-- Date/Time -->
        <p>Posted on January 1, 2019 at 12:00 PM</p>
        <hr>
        <!-- Preview Image -->
        <img :src="post.post_image" class="card-img-top" alt="Card image cap" width="500" height="500">
          
        <hr>
        <!-- Post Content -->
        <p class="lead">{{post.post_content}}</p>
        <hr>
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>
      </div>
</template>
<script>


    export default {
        data () {
    return {
      post: null
    }
  },

        mounted() {
            axios
      .get('/api/posts/'+this.$route.params.id)
      .then(response => (this.post= response.data.data))
  
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
