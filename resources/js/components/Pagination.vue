<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li @click="$emit('on-page-change', pagination.currentPage - 1)" v-if="pagination.currentPage > 1"
                class="page-item" role="button">
                <span role="button" class="page-link">Prev</span>
            </li>


            <li @click="$emit('on-page-change', n),classColor(n)" v-for="n in pagination.lastPage" :key="n" class="page-item"
                role="button">
                <span role="button" class="page-link">{{ n }}</span>
            </li>


            <li @click="$emit('on-page-change', pagination.currentPage + 1 )"
                v-if="pagination.currentPage != pagination.lastPage" class="page-item" role="button">
                <span role="button" class="page-link">Next</span>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: 'Pagination',
        props: ['pagination'],
}

</script>

<style scoped lang="scss">

span{
    color: black;
}

span:hover{
color: black;
background-color: rgba($color: #837f7f, $alpha: 0.6);
}
</style>
