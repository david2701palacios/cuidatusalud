<template>
    <v-form>
        <v-text-field
            id="email"
            name="email"
            label="Correo electrónico"
            type="email"
        ></v-text-field>
        <v-text-field
            id="password"
            name="password"
            label="Contraseña"
            type="password"
        ></v-text-field>
    </v-form>
</template>
<script>
export default {
    name: 'LoginForm',
    methods: {
        redirect(path) {
            this.$router.push({path})
        }
    }
};
</script>
