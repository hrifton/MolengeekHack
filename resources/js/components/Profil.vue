<template>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img :src="imgUrl(user.id)" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{user.name}}
                        </h5>
                        <h6>
                            Statut
                        </h6>
                        <p class="proile-rating">RANKINGS :
                            <span>8/10</span>
                        </p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    id="home-tab"
                                    data-toggle="tab"
                                    href="#home"
                                    role="tab"
                                    aria-controls="home"
                                    aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="profile-tab"
                                    data-toggle="tab"
                                    href="#profile"
                                    role="tab"
                                    aria-controls="profile"
                                    aria-selected="false">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="dispo-tab"
                                    data-toggle="tab"
                                    href="#dispo"
                                    role="tab"
                                    aria-controls="dispo"
                                    aria-selected="false">Disponibilité</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input
                        type="submit"
                        class="profile-edit-btn"
                        name="btnAddMore"
                        value="Edit Profile"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <p>WORK LINK</p>
                        <a href="">Website Link</a><br/>
                        <a href="">Bootsnipp Profile</a><br/>
                        <a href="">Bootply Profile</a>
                        <p>SKILLS</p>
                        <a href="">Web Designer</a><br/>
                        <a href="">Web Developer</a><br/>
                        <a href="">WordPress</a><br/>
                        <a href="">WooCommerce</a><br/>
                        <a href="">PHP, .Net</a><br/>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div
                            class="tab-pane fade show active"
                            id="home"
                            role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>User Id</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{user.name}}{{user.id}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{user.name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{user.email}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>123 456 7890</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profession</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Web Developer and Designer</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="profile"
                            role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Experience</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Hourly Rate</label>
                                </div>
                                <div class="col-md-6">
                                    <p>10$/hr</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Total Projects</label>
                                </div>
                                <div class="col-md-6">
                                    <p>230</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>English Level</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Availability</label>
                                </div>
                                <div class="col-md-6">
                                    <p>6 months</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Your Bio</label><br/>
                                    <p>Your detail description</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="dispo"
                            role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="row">
                                <h4>
                                    Période disponibilité</h4>
                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <label>disponiblité date debut
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <b-form-input
                                        v-model="daysselected.periodeDeb"
                                        type="date"
                                        class="form-control"></b-form-input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>disponiblité date de fin
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <b-form-input
                                        v-model="daysselected.periodeFin"
                                        type="date"
                                        class="form-control"></b-form-input>
                                </div>
                                <div class="col-md-2">
                                    <b-button
                                        class="float-right"
                                        size='md'
                                        variant="success"
                                        v-on:click="dispo(daysselected)">
                                        valider
                                    </b-button>
                                </div>
                            </div>
                            <div class="row">
                                <h4>
                                    Disponibilité hebdomadaire</h4>
                            </div>
                            <div class="row">
                                <b-form-group>
                                    <b-form-checkbox-group
                                        id="checkboxes1"
                                        name="flavour1"
                                        v-model="selecte"
                                        :options="options"></b-form-checkbox-group>
                                </b-form-group>
                                <b-button
                                    class="float-right"
                                    size='md'
                                    variant="success"
                                    v-on:click="dispo(selecte)">
                                    valider
                                </b-button>
                            </div>
                            <div class="row">
                                <div class="pb-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Hourly Rate</label>
                                </div>
                                <div class="col-md-6">
                                    <p>30€/h</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Total Projects</label>
                                </div>
                                <div class="col-md-6">
                                    <p>230</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>English Level</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Availability</label>
                                </div>
                                <div class="col-md-6">
                                    <p>6 months</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- <div class="container"> <div class="row justify-content-center"> <div
    class="col-md-8"> <div class="card card-default"> <div
    class="card-header">Profil {{user.name}}</div> <div class="card-body"> <div>
    <b-input-group size="lg" prepend="nom" placeholder="user.name"> <b-form-input
    v-model="up.user.name" type="text" :placeholder="user.name"></b-form-input>
    </b-input-group> <br> <b-input-group size="lg" prepend="Email"
    placeholder="user.email"> <b-form-input v-model="up.user.email" type="text"
    :placeholder="user.email"></b-form-input> </b-input-group> <br> <div>
    <b-form-group> <b-form-checkbox-group id="checkboxes1" name="flavour1"
    v-model="up.selected" :options="options"> </b-form-checkbox-group>
    </b-form-group> <b-form-group label="Choix du statut:"> <b-form-checkbox-group
    id="checkboxes2" name="flavour2" v-model="up.selected"> <b-form-checkbox
    value="1">Utilisateur</b-form-checkbox> <b-form-checkbox
    value="2">Agent</b-form-checkbox> </b-form-checkbox-group> </b-form-group> <hr>
    <b-button class="pull-right" variant="primary"
    v-on:click="save(up)">Valider</b-button> </div> </div> </div> </div> </div>
    </div> </div> -->

</template>

<script>

    export default {
        props: ['user'],
        data() {
            return {
                up: {
                    user: {
                        id: this.user.id,
                        name: '',
                        email: ''
                    }
                },
                select: [],
                daysselected: {
                    periodeDeb: '',
                    periodeFin: ''
                },
                // Must be an array reference!
                options: [
                    {
                        text: 'Lundi',
                        value: 'Lundi'
                    }, {
                        text: 'Mardi',
                        value: 'Mardi'
                    }, {
                        text: 'Mercredi',
                        value: 'Mercredi'
                    }, {
                        text: 'Jeudi',
                        value: 'Jeudi'
                    }, {
                        text: 'Vendredi',
                        value: 'Vendredi'
                    }, {
                        text: 'Samedi',
                        value: 'Samedi'
                    }, {
                        text: 'Dimanche',
                        value: 'Dimanche'
                    }
                ]
            }
        },

        methods: {
            save(up) {
                axios
                    .put('/role/', up.user.id)
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            dispo(item) {
                axios
                    .post('/dispo', {
                        id:this.user.id,
                        dateDeb: this.daysselected.periodeDeb,
                        dateFin: this.daysselected.periodeFin
                    })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log('sa passe pas ');
                    });
            },

            imgUrl(id) {
                return 'https://cdn.iconscout.com/icon/free/png-256/avatar-369-4563' + id + '.p' +
                        'ng';
            },

            getId() {
                var id = 1;
                do {

                    id = Math.floor(Math.random() * Math.floor(10));
                } while (id == 0);
                return id;
            }
        }
    }
</script>
<style>

    .emp-profile {
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }
    .profile-img {
        text-align: center;
    }
    .profile-img img {
        width: 70%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
    .profile-head h5 {
        color: #333;
    }
    .profile-head h6 {
        color: #0062cc;
    }
    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }
    .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }
    .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }
    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }
    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }
    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }
    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }
    .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }
    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }
    .profile-work ul {
        list-style: none;
    }
    .profile-tab label {
        font-weight: 600;
    }
    .profile-tab p {
        font-weight: 600;
        color: #0062cc;
    }
</style>