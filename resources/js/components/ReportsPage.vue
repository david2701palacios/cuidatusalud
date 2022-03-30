<template>
    <BasicPageTemplate title="Reportes">
        <h3 class="text-h6">Hipertensión</h3>
        <GChart
            type="ColumnChart"
            :data="chartData"
            :options="chartOptions"
        />
    </BasicPageTemplate>
</template>
<script>
import BasicPageTemplate from "../../js/components/BasicPageTemplate.vue";
import {GChart} from "vue-google-charts";

export default {
    name: 'ReportsPage',
    components: {BasicPageTemplate, GChart},
    data() {
        return {
            // Array will be automatically processed with visualization.arrayToDataTable function
            chartData: [
                ["Fecha", "Sistólica", "Diastólica"],
                ["01 Enero", 140, 90],
                ["12 Febrero", 146, 93],
                ["25 Marzo", 143, 94],
                ["14 Abril", 134, 92]
            ],
            chartOptions: {
                chart: {
                    title: "Company Performance",
                    subtitle: "Sales, Expenses, and Profit: 2014-2017"
                }
            }
        };
    }
}
</script>
