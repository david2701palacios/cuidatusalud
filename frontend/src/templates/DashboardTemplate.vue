<template>
    <v-app id="inspire">
        <v-app-bar
            elevation="2"
            color="#fff"
            dark
            src="https://picsum.photos/1920/1080?random"
        >
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title class="text-shadow">Cuida tu salud</v-toolbar-title>
        </v-app-bar>
        <v-navigation-drawer
            app
            v-model="drawer"
            :permanent="$vuetify.breakpoint.smAndUp"
            :mini-variant.sync="mini"
        >
            <v-list-item class="px-2">
                <v-list-item-avatar>
                    <v-img src="https://randomuser.me/api/portraits/men/15.jpg"></v-img>
                </v-list-item-avatar>

                <v-list-item-title>Oscar Amado</v-list-item-title>

                <v-btn
                    icon
                    @click.stop="mini = !mini"
                >
                    <v-icon>{{ mini ? 'mdi-chevron-right' : 'mdi-chevron-left' }}</v-icon>
                </v-btn>
            </v-list-item>


            <v-divider></v-divider>

            <v-list>
                <v-list-item
                    v-for="[icon, text, routeName] in links"
                    :key="icon"
                    link
                    @click="redirect(routeName)"
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
                @click="redirect('login')"
            >
                <v-list-item-icon>
                    <v-icon>mdi-logout</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                    <v-list-item-title>Salir</v-list-item-title>
                </v-list-item-content>
            </v-list-item>

        </v-navigation-drawer>

        <v-main>
            <router-view></router-view>
        </v-main>
    </v-app>
</template>

<script>
export default {
    name: 'DashboardPage',
    methods: {
        redirect(routeName) {
            this.$router.push({name: routeName})
        },
    },
    data: () => ({
        email: 'oscarfamado@gmail.com',
        cards: ['Today', 'Yesterday'],
        drawer: true,
        mini: false,
        links: [
            ['mdi-calendar', 'Calendario', 'calendar'],
            ['mdi-heart-pulse', 'Salud', 'health'],
            ['mdi-file-chart', 'Reportes', 'reports'],
            ['mdi-account-multiple', 'Familia', 'family'],
        ],
    })
};
</script>
<style scoped>
.text-shadow {
    text-shadow: 0 0 5px #000000e6;
}
</style>
