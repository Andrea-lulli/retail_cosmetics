<template>
    <div>
        <Header />
        <PerfumesList />


    </div>
</template>

<script>
import Header from '../components/Header.vue'
import PerfumesList from '../components/perfumes/PerfumesList.vue'
export default {
    name: 'App',
    components: {
        Header,
        PerfumesList
    },
    data() {
        return {
        }
    },
    methods: {
    }
}
</script>
