<template>
  <div id="app">
  <router-view/>
  </div>
</template>

<script>
export default {
    name: 'App',
}
</script>

<style>
.hover:hover, .hover > *:hover {
    cursor: pointer;
}
.dim:hover {
    filter: brightness(90);
}
.light-grey {
    color:  #e6e6e6;
}
.bg-grey {
    background-color: rgb(41,43,44);
}
</style>