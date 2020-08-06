 <template>
 <v-app-bar app color="white" dense :flat="isFlat">
      <div class="d-flex align-center">
        <v-img
          alt="Vuetify Logo"
          class="shrink mr-2"
          contain
          src="/img/logo.png"
          transition="scale-transition"
          width="150"
          href="/"
          v-on:click="home"
        />
      </div>

      <v-btn text class="ms-9 navbtn" href="/learn">Learn</v-btn>
      <v-btn text class="navbtn" href="/articles">Resources</v-btn>
      <v-btn text class="navbtn">Community</v-btn>
      

      <v-spacer></v-spacer>
      <v-col cols="12" sm="1">
      </v-col>
      <v-btn
      href="https://github.com/vuetifyjs/vuetify/releases/latest"
      target="_blank"
      text
      color="#222222"
      width="1%"
      class="navbtn"
      >
      <span>GitHub </span>
      
      </v-btn>
      &nbsp;
      <v-btn
        href="/login"
        text
        color="#222222"
        width="1%"
        class="navbtn"
      >
        <span>Sign in</span>
      </v-btn>
      
      
    </v-app-bar>
</template>
<script>
export default {
    data: () => ({

    isFlat: false
    //
  }),
    watch: {
    '$route'() {
      if (this.$route.path === '/') {
        this.isFlat = false
      }
      else {
        this.isFlat = true
      }
    }
  },
  methods: {
    home() {
      window.location = "/";
      console.log("yes");
    }
  }
}
</script>

