<template>
  <div>
    <template v-if="user">
      <section class="section">
        <div class="columns">
          <div class="column is-half">
            <h1 class="title">{{ user.name }}</h1>
          </div>
          <div class="column is-half">
            <nav class="level">
              <div class="level-item has-text-centered">
                <div>
                  <p class="heading">Posts</p>
                  <p class="title">3,456</p>
                </div>
              </div>
              <div class="level-item has-text-centered">
                <div>
                  <p class="heading">Following</p>
                  <p class="title">123</p>
                </div>
              </div>
              <div class="level-item has-text-centered">
                <div>
                  <p class="heading">Followers</p>
                  <p class="title">456K</p>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </section>
      <template v-if="posts">
        <article class="media m-t-5" v-for="post in posts" :key="post.id">
          <figure class="media-left">
            <p class="image is-64x64">
              <img src="https://bulma.io/images/placeholders/128x128.png">
            </p>
          </figure>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>{{ user.name }}</strong> <small>{{ post.created_at }}</small>
                <br>
                {{ post.content }}
              </p>
            </div>
            <nav class="level is-mobile">
              <div class="level-left">
                <a class="level-item">
                  <span class="icon is-small"><i class="fas fa-reply"></i></span>
                </a>
                <a class="level-item">
                  <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                </a>
                <a class="level-item">
                  <span class="icon is-small"><i class="fas fa-heart"></i></span>
                </a>
              </div>
            </nav>
          </div>
        </article>
      </template>
      <template v-else>
        <p>This user does not have any posts.</p>
      </template>
    </template>
  </div>
</template>
<script>
  export default {
    name: 'userProfile',
    data() {
      return {
        user: null,
        posts: null
      };
    },
    async beforeMount() {
      this.getUser()
    },
    methods: {
      async getUser() {
        let resp = await this.$axios.$get('/api/user/' + this.$route.params.id);

        this.user = resp.data.user
        this.posts = resp.data.posts
      }
    }
  }
</script>
<style>
  .m-t-5 {
    margin-top: 5px;
  }
</style>
