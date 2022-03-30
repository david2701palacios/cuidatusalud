<template>
    <BasicPageTemplate title="Familia">
        <UsersTable/>
    </BasicPageTemplate>
</template>
<script>
import BasicPageTemplate from "../../js/components/BasicPageTemplate.vue";
import UsersTable from "../../js/components/UsersTable.vue";

export default {
    name: 'FamilyPage',
    components: {BasicPageTemplate, UsersTable}
}
</script>
