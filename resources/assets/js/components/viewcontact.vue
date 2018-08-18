<template>
<div v-bind:class="{'modal':true,'is-active':viewInfo.isView}">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Contact infomation</p>
      <button class="delete" aria-label="close" @click="closeView"></button>
    </header>
    <section class="modal-card-body">
    	<div class="control has-icons-left has-icons-right">
		  <input class="input is-medium" type="email" v-bind:value="viewInfo.name" readonly>
		  <span class="icon is-small is-left  has-text-success">
		    <i class="fas fa-user"></i>
		  </span>
		  <span class="icon is-small is-right">
		    <i class="fas fa-check"></i>
		  </span>
		</div>
		<div class="control has-icons-left has-icons-right">
		  <input class="input is-medium" type="email" v-bind:value="viewInfo.phone" readonly>
		  <span class="icon is-small is-left has-text-success">
		    <i class="fas fa-phone"></i>
		  </span>
		  <span class="icon is-small is-right">
		    <i class="fas fa-check"></i>
		  </span>
		</div>
		<div class="control has-icons-left has-icons-right">
		  <input class="input is-medium" type="email" v-bind:value="viewInfo.email" readonly>
		  <span class="icon is-small is-left  has-text-success">
		    <i class="fas fa-envelope"></i>
		  </span>
		  <span class="icon is-small is-right">
		    <i class="fas fa-check"></i>
		  </span>
		</div>
      	
    </section>
    <footer class="modal-card-foot">
      
      <button class="button" @click="closeView">Cancel</button>
    </footer>
  </div>
</div>
</template>

<script>
export default {

  name: 'viewcontact',
  props:['viewInfo'],
  data () {
    return {
    	
    }
  },
  methods:{
  	closeView:function(){
  		this.$emit('closeView');
  	},
  	getInfo:function(){
  		console.log('hihi');
  	}
  }


}
</script>

<style lang="css" scoped>
</style>