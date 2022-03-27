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
                                <register-form/>
                            </v-card-text>
                            <v-card-actions>
                                <a class="ml-3" @click="redirect('/ingresar')">Ingresar</a>
                                <v-spacer></v-spacer>
                                <v-btn color="primary" @click="redirect('/ingresar')">Registrarme</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
import RegisterForm from "@/components/forms/RegisterForm";

export default {
    name: 'RegisterPage',
    components: {RegisterForm},
    methods: {
        redirect(path) {
            this.$router.push({path})
        }
    }
};
</script>

<style></style>
