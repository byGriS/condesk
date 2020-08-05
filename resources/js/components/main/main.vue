<template>
  <div>
    <div>Main from vue</div>
    <div v-for="item in categories" :key="item.id">
      <div>{{item.title}}</div>
    </div>

  </div>
</template>

<script>
import axios from 'axios'

export default {
  data(){
    return{
      categories:[]
    }
  },
  beforeMount(){
    console.log(window.axios.defaults.headers.common.Authorization);
    axios
      .get("http://condesk.loc/api/category")
      .then(response =>{
        console.log(response);
      });
  }
}
</script>