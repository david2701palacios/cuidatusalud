<template>
    <v-app>
        <v-content>
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md4>
                        <v-card class="elevation-1">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Ingresar</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>
                                <login-form/>
                            </v-card-text>
                            <v-card-actions>
                                <a class="ml-3" @click="redirect('/registrarme')">Registrarme</a>

                                <v-spacer></v-spacer>

                                <v-btn color="primary" @click="redirect('/tablero')">Ingresar</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
import LoginForm from "@/components/forms/LoginForm";

export default {
    name: 'LoginPage',
    components: {LoginForm},
    methods: {
        redirect(path) {
            this.$router.push({path})
        }
    }
};
</script>

<style></style>
