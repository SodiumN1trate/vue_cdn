const Home = Vue.component('Home', {
    template: '<h1>Home screen</h1>',
    data: function () {
        return {
            privateState: {
            },
            publicState: store.state
        }
    },
    mounted: function () {
        if(this.publicState.token == null) {
            window.location.replace('/login');
        }
    }
})
