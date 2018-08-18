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
				  <input class="input is-medium" type="email" placeholder="Name"  v-model="contact.name">
				  <span class="icon is-left">
				    <i class="fas fa-user"></i>
				  </span>
				  <span class="has-text-danger" v-for="error in errors.name">{{error}}</span>
				</div>
		    	<label>Phone number</label>
		      	<div class="control has-icons-left has-icons-right">
				  <input class="input is-medium" type="email" placeholder="Phone number ..." v-model="contact.phone">
				  <span class="icon is-left">
				    <i class="fas fa-phone"></i>
				  </span>
				   <span class="has-text-danger" v-for="error in errors.phone">{{error}}</span>
				</div>
		    	<label>Email</label>
		      	<div class="control has-icons-left has-icons-right">
				  <input class="input is-medium" type="email" placeholder="Email"  v-model="contact.email">
				  <span class="icon is-left">
				    <i class="fas fa-envelope"></i>
				  </span>
				   <span class="has-text-danger" style="display:block;" v-for="error in errors.email">{{error}}</span>
				</div>
		    </section>
		    <footer class="modal-card-foot">
		      <button class="button is-success" @click="save">Add contact</button>
		      <button class="button" @click="close" >Cancel</button>
		    </footer>
	  	</div>
		</div>
</template>
<script>
	export default {
		props:['openmodal'],
		data (){
			return {
				contact:{
					name:'',
					phone:'',
					email:''
				},
				errors:{
					
					name:'',
					phone:'',
					email:''
				}
			}
		}
		,
		methods:{
			close:function(){
				
				this.$emit('closeModal');
			},
			save:function(){
				axios.post('/phonebook',this.$data.contact).then((response)=>{
					
					this.$emit('closeModal');
				}).catch((error)=>{
					this.errors=error.response.data.errors;		

				});
				this.$root.$emit('home') //like this
			}
		},
		mounted(){
			
		}
	}
</script>
<style scoped>
.has-text-danger{
		display: block;
	}
</style>