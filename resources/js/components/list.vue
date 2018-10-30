<template>
<div>
<div class="row">

</div>
      <div class="row">

            <div v-for="agent in agents" class="col-md-4 mt-4">
                <div class="card">
                    <h5  class="card-header text-center bg-success text-white">{{agent.name}}</h5>
                    <div class="card-body">
                       <div class="row">
                        <div class="col-lg-12">
                          <div class="star-rating">
                            
                            <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                          </div>
                        </div>
                      </div>
                        <div class="image_ava">
                        <img :src="imgUrl(getId())" class="img-thumbnail rounded mx-auto d-block" alt="avatar">
                        </div>
                    <h4 class="card-title text-center">{{agent.name}}</h4>
                    <!-- ↓ Redes ↓ -->
                    <div class="paneles-usuario">
                      <b-button variant="primary">Booking</b-button>
                    </div>
                    <!-- ↑ Redes ↑ -->
                    </div>
                </div>
            </div>
        </div>   
</div>
</template>

<script>
export default {
    data () {
    return {
        
        agents:[]
        
        }
    },
mounted() {
 axios.get('/user').then(response=>(this.agents=response.data));
},
methods:{
    imgUrl (id){
    return 'http://www.worldhotel.co.kr/main/img/avatar/avatar'+id+'.png';
                                                                              },
 getId() {
   var id=1;
  do {
  
  id = Math.floor(Math.random() * Math.floor(10));
} while (id == 0);
  return id;
                                                      } 
}
}
</script>

<style>
.user-l {
  padding-right: 6px;
}
.user-r {
  padding-left: 6px;
}
.user-l >img,
.user-r >img {
  width: 150px;
}
.redes >ul li a {
  width: 42px;
  margin-left: 5px;
  margin-right: 5px;
  text-align: center;
  border-radius: 10em;
  border: #EEE 1px solid;
}
.redes >ul li span {
  color: #CCC;
  font-size: 18px;
}
.image_ava img {
  border-radius: 10em!important;
  width: 150px;
}
.bio {
  float: left;
  position: absolute;
  top: -45px;
  left: 10px;
  color: #FFF;
}
.bio2 {
  float: right;
  position: absolute;
  top: -45px;
  left: 10px;
  color: #FFF;
}
.bio_content {
  padding: 6px 10px;
}
/* New's panels */
.paneles-usuario {
  padding: 6px 0;
  text-align: center;
}
.paneles-usuario .bloques {
  border: 1px solid #CCC;
  width: 30%;
  display: inline-block;
  text-align: center;
  margin-left: -3.7px;
  padding: 2px 8px;
}
.paneles-usuario .bloques i {
  display: block;
  font-size: 32px;
  color: #FFF;
  margin-bottom: -8px;
  padding: 5px 0!important;
}
.paneles-usuario .bloques span {
  font-size: 11px;
  text-transform: uppercase;
  color: #FFF;
}
.bgf {
  background-color: #3b5998;
}
.bgt {
  background-color: #55acee;
}
.bgg {
  background-color: #dd4b39;
}
/* Beta2 */
.paneles-usuario-beta2 {
  padding: 6px 0;
  text-align: center;
  float: right;
  position: absolute;
  top: 4em;
  left: .2em;
  height: auto;
  width: 80px;
}
.paneles-usuario-beta2 .bloques {
  border: 1px solid #CCC;
  width: 100%;
  display: block;
  text-align: center;
  padding: 2px 8px;
}
.paneles-usuario-beta2 .bloques i {
  display: block;
  font-size: 32px;
  color: #FFF;
  padding: 5px 0!important;
}
.paneles-usuario-beta2 .bloques span {
  font-size: 11px;
  text-transform: uppercase;
  color: #FFF;
}
.bgf {
  background-color: #3b5998;
}
.bgt {
  background-color: #55acee;
}
.bgg {
  background-color: #dd4b39;
}

</style>
