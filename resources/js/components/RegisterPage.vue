<template>
    <v-app>
        <v-content>
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md3>
                        <v-card class="elevation-1">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Registro</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>
                                <v-text-field
                                    v-model="email"
                                    name="email"
                                    label="Correo electrónico"
                                    type="email"
                                ></v-text-field>
                                <v-text-field
                                    v-model="password"
                                    name="password"
                                    label="Contraseña"
                                    type="password"
                                ></v-text-field>
                                <v-text-field
                                    v-model="passwordconfirm"
                                    name="password-confirm"
                                    label="Confirmar contraseña"
                                    type="password"
                                ></v-text-field>
                            </v-card-text>
                            <v-card-actions>
                                <a class="ml-3" @click="redirect('/ingresar')">Ingresar</a>
                                <v-spacer></v-spacer>
                                <v-btn color="primary" @click="submitForm()">Registrarme</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
export default {
   props:{
           url : {
            type: String,
            default:'register'   
           }
       },
    methods: {
           submitForm: function(){
              if(this.email != '' && this.password!= ''){
                  let data ={
                      name:          'namerequierd',
                      email:         this.email,
                      password:  this.password,
                      password_confirmation:  this.passwordconfirm
                      
                  } 
                   let that = this;
                axios
                .post(this.url,data)
                .then((response)=>{
                    if(response.status=201){
                        location.href = that.url
                    }else
                    console.log(response)
                    .catch((error)=>{
                        console.log(error)
                        alert("Error :(")
                    })
                })
              }else{
                  this.showError=true;
              }
           }
       }
};
</script>

<style></style>
