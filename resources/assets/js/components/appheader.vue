<template>
<nav class="navbar  is-info" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="https://www.freepnglogos.com/uploads/eagles-png-logo/eagle-sports-png-logos--0.png" alt="MinhHieuUet" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div class="navbar-menu is-active">
    <div class="navbar-start">
      <router-link to="/home" class="navbar-item">Home</router-link>
      <router-link to="/about" class="navbar-item">About</router-link>
      
    </div>

  </div>
</nav>
</template>

<script>
export default {

  name: 'appheader',

  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>