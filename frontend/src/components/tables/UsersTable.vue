<template>
    <section>
        <v-data-table
            :headers="headers"
            :items="users"
            :items-per-page="5"
            class="elevation-1"
            :search="search"
            :custom-filter="filterOnlyCapsText"
        >
            <template v-slot:top>
                <v-text-field
                    v-model="search"
                    label="Buscar"
                    class="mx-4"
                ></v-text-field>
            </template>
        </v-data-table>
    </section>
</template>
<script>
export default {
    name: 'UsersTable',
    data() {
        return {
            search: '',
            headers: [
                {
                    text: 'Nombre',
                    align: 'start',
                    value: 'fullName',
                },
                {text: 'Correo electrónico', value: 'email'},
                {text: 'Genero', value: 'gender'},
                {text: 'Edad', value: 'age'},
            ],
            users: [
                {
                    fullName: 'Oscar Amado',
                    email: 'oscarfamado@gmail.com',
                    gender: 'Masculino',
                    age: '18',
                },
                {
                    fullName: 'Kerttu Wallo',
                    email: 'kerttu.wallo@example.com',
                    gender: 'Femenino',
                    age: '23',
                },
                {
                    fullName: 'Evaldo Nascimento',
                    email: 'evaldo.nascimento@example.com',
                    gender: 'Masculino',
                    age: '18',
                },
                {
                    fullName: 'Erin Anderson',
                    email: 'erin.anderson@example.com',
                    gender: 'Masculino',
                    age: '42',
                },
            ],
        }
    },
    methods: {
        filterOnlyCapsText(value, search) {
            return value &&
                search &&
                typeof value === 'string' &&
                value.toString().toLowerCase().includes(search.toLowerCase())
        },
    },
}
</script>
