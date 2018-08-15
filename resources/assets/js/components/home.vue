<template>
<div>
<nav class="container panel">
  <p class="panel-heading">
    <strong>Phone book</strong>
 	<a class="button is-success button modal-button" v-on:click="isActive=true" >Add contact</a>
 			
  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-small" type="text" placeholder="search">
      <span class="icon is-small is-left">
        <i class="fas fa-search" aria-hidden="true"></i>
      </span>
    </p>
  </div>
 
  <a class="panel-block is-active">
    <span class="column is-9">Tên ai đó</span>
    
    <span class="panel-icon colum is-1 has-text-danger">
	  <i class="fas fa-trash"></i>
	</span>
	<span class="panel-icon colum is-1 has-text-info">
	  <i class="fas fa-edit"></i>
	</span>
	<span class="panel-icon colum is-1 has-text-success">
	  <i class="fas fa-eye"></i>
	</span>
  </a>
  
  <div class="panel-block">
    <button class="button is-link is-outlined is-fullwidth">
      reset all filters
    </button>
  </div>
</nav>
<!-- Modal -->
<Add :openmodal="isActive" @closeModal="close"></Add>
</div>
</template>

<script>
let Add=require('./add.vue');
export default {

  name: 'home',
  components:{
  	Add
  },
  data () {
    return {
    	isActive:false
    }
  },
  methods:{
  	close:function(){
  		this.isActive=false;
  	}
  }
}
</script>

<style lang="css" scoped>
</style>