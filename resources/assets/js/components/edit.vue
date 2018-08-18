<template>
		<div v-bind:class="{'is-active':editInfo.isEdit,'modal':true}" >
		  <div class="modal-background"></div>
		  <div class="modal-card">
		    <header class="modal-card-head">
		      <p class="modal-card-title">Edit a contact</p>
		      <button class="delete" aria-label="close" @click="close" ></button>
		    </header>
		    <section class="modal-card-body">
		    	<label>Name</label>
		      	<div class="control has-icons-left has-icons-right">
				  <input class="input is-medium"  v-model="editInfo.name"  >
				  <span class="icon is-left">
				    <i class="fas fa-user"></i>
				  </span>
				  <span class="has-text-danger" v-for="error in errors.name">{{error}}</span>
				</div>
		    	<label>Phone number</label>
		      	<div class="control has-icons-left has-icons-right">
				  <input class="input is-medium" type="text" v-model="editInfo.phone" >
				  <span class="icon is-left">
				    <i class="fas fa-phone"></i>
				  </span>
				   <span class="has-text-danger" v-for="error in errors.phone">{{error}}</span>
				</div>
		    	<label>Email</label>
		      	<div class="control has-icons-left has-icons-right">
				  <input class="input is-medium" type="email" v-model="editInfo.email">
				  <span class="icon is-left">
				    <i class="fas fa-envelope"></i>
				  </span>
				   <span class="has-text-danger" style="display:block;" v-for="error in errors.email">{{error}}</span>
				</div>
		    </section>
		    <footer class="modal-card-foot">
		      <button class="button is-success" @click="editContact">Edit contact</button>
		      <button class="button" @click="close"  >Cancel</button>
		    </footer>
	  	</div>
		</div>
</template>

<script>
export default {

  name: 'edit',
  props:['editInfo'],
  data () {
    return {
    	errors:[],
    	contact:{
    		name:'',
    		phone:'',
    		email:''	
    	}
    }
  },
  methods:{
  	close:function(){
  		this.$emit('closeEdit');
  	},
  	editContact:function(){
  		var editedContact=this.computedClass;
  		axios.put('/phonebook/'+editedContact.id,{id:editedContact.id,name:editedContact.name,phone:editedContact.phone,email:editedContact.email})
  		.then((response)=>{
  			console.log(response.data);
  		});
  		this.close();
  		this.$root.$emit('home')
  	}
  },
  computed: {
        computedClass: function () {
            if ( this.editInfo != null ) {
                return this.editInfo;
            }

            return 'defaultClass';
        }
    }
}
</script>

<style lang="css" scoped>
</style>