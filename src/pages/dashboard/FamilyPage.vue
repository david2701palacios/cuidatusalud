<template>
    <section>
        <h2 class="my-9 ml-5">Familia</h2>
        <users-table />
    </section>
</template>
<script>
import UsersTable from "@/components/tables/UsersTable";
export default {
    name: 'FamilyPage',
    components: {UsersTable}
}
</script>
