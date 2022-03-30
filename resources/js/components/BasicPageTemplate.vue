<template>
    <v-app class="px-10">
        <h1 class="my-5 text-h3">{{ title }}</h1>
        <slot></slot>
    </v-app>
</template>
<script>
export default {
    name: 'BasicPageTemplate',
    props: {
        title: String,
    },
}
</script>
