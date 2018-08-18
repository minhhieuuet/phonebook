<template>
<div>
<nav class="container panel">
  <p class="panel-heading">
    <strong>Phone book</strong>

 	<a class="button is-success button modal-button" v-on:click="isActive=true" >Add contact</a>
 			
  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-small" type="text" placeholder="search" v-model="query">
      <span class="icon is-small is-left">
        <i class="fas fa-search" aria-hidden="true"></i>
      </span>
    </p>
  </div>
 <!-- Contact -->
  <a class="panel-block is-active" v-for="contact in filteredContacts">
    <span class="column is-9">{{contact.name}}</span>
    
    <span class="panel-icon colum is-1 has-text-danger" @click="deleteContact(contact.id)">
	  <i class="fas fa-trash"></i>
	</span>
	<span class="panel-icon colum is-1 has-text-info" @click="editContact(contact.id)">
	  <i class="fas fa-edit"></i>
	</span>
	<span class="panel-icon colum is-1 has-text-success" @click="showContact(contact.id)">
	  <i class="fas fa-eye"></i>
	</span>
  </a>
  <!--  -->
  <div class="panel-block">
    <button class="button is-link is-outlined is-fullwidth" @click="query=''">
      Reset all filters
    </button>
  </div>
</nav>
<!-- Modal -->
<Add :openmodal="isActive" @closeModal="close"></Add>
<ViewContact :viewInfo="info" @closeView="info.isView=false"></ViewContact>
<Edit :editInfo="editInfo" @closeEdit="editInfo.isEdit=false"></Edit>
</div>
</template>

<script>
let Add=require('./add.vue');
let ViewContact=require('./viewcontact.vue');
let Edit=require('./edit.vue');
export default {

  name: 'home',
  components:{
  	Add,ViewContact,Edit
  },
  data () {
    return {
    	isActive:false,
      editInfo:{
       id:'',
       isEdit:false,
       name:'',
       phone:'',
       email:'' 
      },
      info:{
       id:'',
       isView:false,
       name:'',
       phone:'',
       email:'' 
      },
      query:'',
      contacts:[]
    }
  },
  methods:{
  	close:function(){
  		this.isActive=false;
  	},
    getContacts:function(){
      

      axios.get('/phonebook/list').then((response)=>{
        this.contacts=response.data;
      
      }).catch((error)=>{
        console.log(error);
      })
      
    },
    showContact:function(id){
      this.info.id=id;
      this.info.isView=true;
      axios.get(`/phonebook/${id}`).then((response)=>{
        this.info.name=response.data.name;
        this.info.phone=response.data.phone;
        this.info.email=response.data.email;
        console.log(response.data);
      })
      
    },
    editContact:function(id){
      this.editInfo.isEdit=true;
      axios.get(`/phonebook/${id}`).then((response)=>{
        this.editInfo.name=response.data.name;
        this.editInfo.phone=response.data.phone;
        this.editInfo.email=response.data.email;
        this.editInfo.id=response.data.id;
      })
    }
    ,
    deleteContact:function(contactid){
      var r=confirm("Bạn đã chắc chưa?");
      if(r==true){
        axios.delete(`/phonebook/${contactid}`).then((response)=>{
        console.log(response.data);  
        });
        this.getContacts();
      }
      
    }
  },
  computed:{
    filteredContacts:function(){
      return this.contacts.filter((contact)=>{
        return contact.name.toLowerCase().includes(this.query.toLowerCase());
      })
    }
  },
  mounted (){
    this.getContacts();
    this.$root.$on('home', () => {
            
            this.getContacts();
        });
  }
}

</script>

<style lang="css" scoped>
</style>