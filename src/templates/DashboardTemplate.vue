<template>
    <v-app id="inspire">
        <v-navigation-drawer
            v-model="drawer"
            app
        >
            <v-sheet
                color="grey lighten-4"
                class="pa-4"
            >
                <v-avatar
                    class="mb-4"
                    color="grey darken-1"
                    size="64"
                >
                    <span class="white--text text-h5">OA</span>
                </v-avatar>

                <div>{{ email }}</div>
            </v-sheet>

            <v-divider></v-divider>

            <v-list>
                <v-list-item
                    v-for="[icon, text, href] in links"
                    :key="icon"
                    link
                    @click="redirect(`/tablero/${href}`)"
                >
                    <v-list-item-icon>
                        <v-icon>{{ icon }}</v-icon>
                    </v-list-item-icon>

                    <v-list-item-content>
                        <v-list-item-title>{{ text }}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
            <v-divider></v-divider>
            <v-list-item
                link
                @click="redirect('/ingresar')"
            >
                <v-list-item-icon>
                    <v-icon>mdi-logout</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                    <v-list-item-title>Salir</v-list-item-title>
                </v-list-item-content>
            </v-list-item>

        </v-navigation-drawer>

        <v-main class="pt-10">
            <router-view></router-view>
        </v-main>
    </v-app>
</template>

<script>
export default {
    name: 'DashboardPage',
    methods: {
        redirect(path) {
            this.$router.push({path})
        }
    },
    data: () => ({
        email: 'oscarfamado@gmail.com',
        cards: ['Today', 'Yesterday'],
        drawer: true,
        links: [
            ['mdi-heart-pulse', 'Salud', 'salud'],
            ['mdi-file-chart', 'Reportes', 'reportes'],
            ['mdi-account-multiple', 'Familia', 'familia'],
        ],
    })
};
</script>
