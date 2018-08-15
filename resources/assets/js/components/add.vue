<template>
		<div v-bind:class="{'is-active':openmodal,'modal':true}" >
		  <div class="modal-background"></div>
		  <div class="modal-card">
		    <header class="modal-card-head">
		      <p class="modal-card-title">Add new contact</p>
		      <button class="delete" aria-label="close" @click="close"></button>
		    </header>
		    <section class="modal-card-body">
		    	<label>Name</label>
		      	<div class="control has-icons-left has-icons-right">
				  <input class="input is-medium" type="email" placeholder="Name">
				  <span class="icon is-left">
				    <i class="fas fa-user"></i>
				  </span>
				  
				</div>
		    	<label>Phone number</label>
		      	<div class="control has-icons-left has-icons-right">
				  <input class="input is-medium" type="email" placeholder="Phone number ...">
				  <span class="icon is-left">
				    <i class="fas fa-phone"></i>
				  </span>
				  
				</div>
		    	<label>Email</label>
		      	<div class="control has-icons-left has-icons-right">
				  <input class="input is-medium" type="email" placeholder="Email">
				  <span class="icon is-left">
				    <i class="fas fa-envelope"></i>
				  </span>
				  
				</div>
		    </section>
		    <footer class="modal-card-foot">
		      <button class="button is-success">Add contact</button>
		      <button class="button" @click="close" >Cancel</button>
		    </footer>
	  	</div>
	</div>
</template>
<script>
	export default {
		props:['openmodal'],
		methods:{
			close:function(){
				
				this.$emit('closeModal');
			}
		}
	}
</script>