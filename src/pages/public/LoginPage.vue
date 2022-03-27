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
                                <login-form/>
                            </v-card-text>
                            <v-card-actions>
                                <a class="ml-3" @click="redirect('register')">Registrarme</a>
                                <v-spacer></v-spacer>
                                <v-btn color="primary" @click="redirect('calendar')">Ingresar</v-btn>
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
        redirect(routeName) {
            this.$router.push({name: routeName})
        }
    }
};
</script>

<style></style>
