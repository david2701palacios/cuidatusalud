<template>
    <BasicPageTemplate title="Familia">
        <UsersTable/>
    </BasicPageTemplate>
</template>
<script>
import BasicPageTemplate from "@/templates/BasicPageTemplate";
import UsersTable from "@/components/tables/UsersTable";

export default {
    name: 'FamilyPage',
    components: {BasicPageTemplate, UsersTable}
}
</script>
