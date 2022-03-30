<template>
    <v-app>
        <v-content>
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md3>
                        <v-card class="elevation-1">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Ingresar</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>
                                <v-text-field
                            id="email"
                            v-model="email" 
                            name="email"
                            label="Correo electrónico"
                            type="email"
                        ></v-text-field>
                        <v-text-field
                            id="password"
                            v-model="password" 
                            name="password"
                            label="Contraseña"
                            type="password"
                        ></v-text-field>
                            </v-card-text>
                            <v-card-actions>
                                <a class="ml-3" @click="redirect('register')">Registrarme</a>
                                <v-spacer></v-spacer>
                                <v-btn color="primary" @click="submitForm()">Ingresar</v-btn>
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
            default:'login'   
           }
       },
    methods: {
           submitForm: function(){
               console.log("Entro"+this.email);
              if(this.email != '' && this.password!= ''){
                  let data ={
                      email:         this.email,
                      password:  this.password
                      
                  } 
                   let that = this;
                axios
                .post(this.url,data)
                .then((response)=>{
                    if(response.status){
                        alert("Logeado exitosamente")
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
}
</script>

<style></style>

