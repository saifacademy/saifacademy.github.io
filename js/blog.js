var vm9 = new Vue({
    el: '#posts',
    data: {
        posts: []
    },
    methods: {
        getAllUsers: function () {
            axios.get('https://newsapi.org/v2/top-headlines?country=us&apiKey=61baf5575deb454aac129b71dbc2be18')
                .then(function (response) {
                    console.log(response)
                    vm9.posts = response.data.articles;
                })
                .catch(function (error) {
                    console.log(error);
                });

        }
    },
    created: function () {
        this.getAllUsers();

    }
})

