const app = new Vue({
    el: '#app',
    data: {
        discsList : [],
        genreToSearch : null,
        genres : ['Rock', 'Pop', 'Jazz', 'Metal'],
        selected : '',
    },
    methods: {
        APICallDiscs(genre){
            let url = 'http://localhost/php-ajax-dischi/db/controller.php'
            if(genre){
                url += '?genre='+genre
            }
            axios.get(url)
            .then((result)=>{
                this.discsList = result.data
            })
            .catch((error)=>{
            console.error(error)
            })
        },

    },
    created(){
        this.APICallDiscs(this.genreToSearch)
    }

})
  