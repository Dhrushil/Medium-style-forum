<template>
<v-app>
  <div class="learn" style="height: 100%">
      <v-card elevation=6a fluid style="background-color: #f5f6f7; height: 5em; z-index: 1">
          <v-card-title>Install</v-card-title>
      </v-card>
      <v-card elvation=12 style="background-color:white; width: 15%; height: 100%; float: left; position: sticky;
  top: 0; " >
         <v-list shaped >
             <v-list-item-group v-model="item" color="blue" >
              <v-list-item
                v-for="(item, i) in itemset1"
                :key="i"
                class="mb-3 listsmall"
                dense
                :href="`${item.link}`"
              >
              
              </v-list-item>
              <v-divider></v-divider>
               <v-list-item
                v-for="(item, i) in itemset2"
                :key="i"
                class="mb-3"
              >
              {{item.text}}
             
              </v-list-item>
             </v-list-item-group>
         </v-list>
      </v-card>
  
  </div>
</v-app>
</template>

<script>
// @ is an alias to /src


export default {
  name: 'Home',
  components: {
    
  },
  props: {
    
  },
  data: () => ({
      
      itemset1: [
        { text: 'Get started',link: '/learn' },
        { text: 'Setup', link:'/learn/setup' },
      ],
      itemset2: [
        { text: 'Fit a curve to two-dimensional data', icon: 'mdi-clock' },
        { text: 'Recognize handwritten digits with CNNs', icon: 'mdi-account' },
        { text: 'Predict baseball pitch types in Node.js', icon: 'mdi-flag' },
      ],
    }),

}
</script>

<style>
@font-face {
  font-family: "Product Sans";
  font-style: normal;
  font-weight: 700;
  src: local("Open Sans"), local("OpenSans"),
    url(https://fonts.gstatic.com/s/productsans/v5/HYvgU2fE2nRJvZ5JFAumwegdm0LZdjqr5-oayXSOefg.woff2)
      format("woff2");
}

.listsmall {
    font-size: 1em;
}
</style>

