<template>
    <div class="container">
        <div class="input-group mb-3">
            <input v-model="query" type="text" class="form-control" placeholder="Product name or description"
                   aria-label="Product name or description"
                   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" @click="searchProducts" @keyup.enter="searchProducts" type="button">
                    Search
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Searchbar",
        data() {
            return {
                query: '',
            }
        },
        watch: {
            query: {
                handler: _.debounce(function () {
                    this.searchProducts()
                }, 100)
            }
        },
        methods: {
            searchProducts() {
                this.$store.dispatch('SEARCH_PRODUCTS', this.query)
            }
        }
    }
</script>

<style scoped>

</style>