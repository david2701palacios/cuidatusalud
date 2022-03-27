<template>
    <v-form>
        <v-text-field
            name="name"
            label="Nombre"
            type="text"
        ></v-text-field>
        <v-text-field
            name="lastName"
            label="Apellido"
            type="text"
        ></v-text-field>
        <v-autocomplete
            :items="genders"
            label="Genero"
        ></v-autocomplete>
        <v-text-field
            name="age"
            label="Edad"
            min="1"
            max="110"
            type="number"
        ></v-text-field>
        <v-text-field
            name="email"
            label="Correo electrónico"
            type="email"
        ></v-text-field>
        <v-text-field
            name="password"
            label="Contraseña"
            type="password"
        ></v-text-field>
        <v-text-field
            name="password"
            label="Confirmar contraseña"
            type="password"
        ></v-text-field>
    </v-form>

</template>
<script>
export default {
    name: 'RegisterForm',
    data() {
        return {
            genders: ['Masculino', 'Femenino']
        }
    },
};
</script>
