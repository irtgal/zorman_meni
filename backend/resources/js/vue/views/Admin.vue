<template>
    <div id="admin">
        <div class="heading">
            <img class="text-center mt-3"/>
            <h2 class="h2 text-center text-white">CENIK</h2>
        </div>
    <list-view />
    </div>
</template>
<script>
import ListView from '../components/listView'
export default {
    components : {
        ListView
    }
}
</script>
<style>
#admin {
    background-color: #292b2c;
    min-height: 100vh;
    padding: 1% 10%;
}
.h2 {
    font-size: 200px;
}
@media only screen and (max-width: 730px) {
  #admin {
      padding: 0.5%;
  }
}
</style>