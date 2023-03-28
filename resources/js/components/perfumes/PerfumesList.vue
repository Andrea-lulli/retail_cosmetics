<template>
    <div class="container my-3">
        <div class="d-flex justify-content-center">
            <input class="inp-sty text-center border border-black" type="text" v-model="search"
                placeholder="Search perfume name" />
        </div>
        <div class="d-flex justify-content-center">

            <!-- se non viene usata la ricerca -->
            <div class="card-deck d-flex flex-wrap justify-content-center" v-if="search == ''">
                <div v-for="elem in perfumes" :key="elem.id" class="card"
                    :style="{backgroundImage: `url(${elem.image})`}">
                    <div class="card-overlay">
                        <h5 class="card-title">{{ elem.name }}</h5>
                        <p class="card-text">Marca: {{ elem.brand }}</p>
                    </div>
                </div>
            </div>

            <!-- se viene usata la ricerca -->
            <div class="card-deck d-flex flex-wrap justify-content-center" v-else>
                <div v-for="elem in filteredPerfumes" :key="elem.id" class="card"
                    :style="{backgroundImage: `url(${elem.image})`}">
                    <div class="card-overlay">
                        <h5 class="card-title">{{ elem.name }}</h5>
                        <p class="card-text">Marca: {{ elem.brand }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <Pagination @on-page-change="getPerfumes" :pagination="pagination" />
        </div>
    </div>
</template>

<script>
    import Pagination from "../Pagination.vue";

    export default {
        name: "PerfumesList",
        components: {
            Pagination,
        },
        data() {
            return {
                perfumes: [],
                pagination: {},
                search: '',
                perfumesTotal: [],
            };
        },
        mounted() {
            this.getPerfumes();

            this.getAllPerfumes();

            this.prova()



        },
        methods: {

            // chiamata axios con paginate
            getPerfumes(page = 1) {
                axios
                    .get("http://localhost:8000/api/perfumes?page=" + page)
                    .then((res) => {
                        const data = res.data.data;
                        const current_page = res.data.current_page;
                        const last_page = res.data.last_page;

                        this.perfumes = data;
                        this.pagination = {
                            lastPage: last_page,
                            currentPage: current_page,
                        };
                    })
                    .catch((err) => {
                        console.log(err);
                    });
            },

            // chiamata axios con tutti i profumi
            getAllPerfumes() {
                axios
                    .get("http://localhost:8000/api/perfumes/all")
                    .then((res) => {
                        const data = res.data;
                        this.perfumesTotal = data;
                    })
                    .catch((err) => {
                        console.log(err);
                    });
            },
        },
        computed: {
            filteredPerfumes() {
                return this.perfumesTotal.filter(perfume => {
                    return perfume.name.toLowerCase().includes(this.search.toLowerCase())
                })
            }
        }
    };
</script>

<style scoped lang="scss">
    .inp-sty {
        padding: 10px;
        border-radius: 20px;
        width: 30%;
        margin: 30px 0px;
        border: 0;
    }

    .list-type {
        background-color: #00ccbc;
        border-radius: 15px;
    }

    .list-restaurants {
        list-style-type: none;
        text-decoration: none;
        color: gray;
    }

    .card {
        flex-basis: 30%;
        justify-content: space-between;
        margin: 10px 10px;
    }

    .card-deck {
        display: flex;
        flex-wrap: wrap;
        width: 60%;
    }

    .card-titl .card-tex {
        color: white;
    }

    .card {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        aspect-ratio: 1/1;
    }

    .card-overlay {
        margin-top: 25%;
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.8);
        text-align: center;
        color: black;
    }

    .card-title {
        font-size: 1.2rem;
        margin: 0;
    }

    .card-text {
        font-size: 1rem;
        margin: 0;
    }
</style>
