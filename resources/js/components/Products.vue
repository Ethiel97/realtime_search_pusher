<template>
    <div class="container">
        <div v-if="hasResults" class="row" v-for="products in groupedProducts">
            <div class="col-md-3 col-sm-6" v-for="product in products">
                <product class="animated fadeIn" :product="product"></product>
            </div>
            <div class="col w-100"></div>
        </div>
        <div v-else class="align-content-center">
            <img src="../../img/no_result.svg" alt="">
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'
    import product from '../components/Product'

    export default {
        name: "Products",
        components: {
            product
        },
        mounted() {
            this.$store.dispatch('GET_PRODUCTS')

            window.Echo.channel('search')
                .listen('.searchResults', (e) => {
                    this.$store.commit('SET_PRODUCTS', e.products)

                    console.log(e)
                })

        },
        computed: {
            groupedProducts() {
                return _.chunk(this.products, 6);
            },
            hasResults() {
                return this.products.length > 0
            },
            ...mapGetters([
                'products'
            ])
        }
    }
</script>

<style scoped>

</style>