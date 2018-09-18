let actions = {
    SEARCH_PRODUCTS({commit}, query) {
        let params = {
            query
        };
        axios.get(`/api/search`, {params})
            .then(res => {
                if (res.data === 'ok')
                // commit('SET_PRODUCTS', res.data)
                    console.log('request sent successfully')

            }).catch(err => {
            console.log(err)
        })
    },
    GET_PRODUCTS({commit}) {
        axios.get('/api/products')
            .then(res => {
                {
                    commit('SET_PRODUCTS', res.data)
                }
            })
            .catch(err => {
                console.log(err)
            })
    }
}

export default actions