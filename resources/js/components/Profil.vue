<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Profil {{user.name}}</div>

                    <div class="card-body">
                       <div>
                        <!-- Using props -->
                        <b-input-group size="lg" prepend="nom" placeholder="user.name">
                            <b-form-input v-model="up.user.name" type="text" :placeholder="user.name"></b-form-input>
                        </b-input-group>
                        <br>
                        <!-- Using slots -->
                        <b-input-group size="lg" prepend="Email" placeholder="user.email">
                            <b-form-input v-model="up.user.email" type="text" :placeholder="user.email"></b-form-input>
                            
                        </b-input-group>
                        <br>

                       <div>
                            <b-form-group>
                            <b-form-checkbox-group id="checkboxes1" name="flavour1" v-model="up.selected" :options="options">
                            </b-form-checkbox-group>
                            </b-form-group>

                            <b-form-group label="Choix du statut:">
                            <b-form-checkbox-group id="checkboxes2" name="flavour2" v-model="up.selected">
                                <b-form-checkbox value="1">Utilisateur</b-form-checkbox>
                                <b-form-checkbox value="2">Agent</b-form-checkbox>
                            </b-form-checkbox-group>
                            </b-form-group>
                            <hr>
                           <b-button class="pull-right" variant="primary" v-on:click="save(up)">Valider</b-button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: ['user'],
  data () {
    return {
        up:{
            user:{id:this.user.id,
            name:'',
            email:''},
            selected:[]
            }
      
    }
  },
  methods:{
      save(up){
          axios.put('/role/',up)
  .then(function (response) {
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });
      }
  },
}
</script>
