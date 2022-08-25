const app = new Vue({
    el: '#app',
    data: {
        discsList : [],
    
    },
    methods: {
        APICallDiscs(){
            axios.get('http://localhost/php-ajax-dischi/db/controller.php')
            .then((result)=>{
            this.discsList = result.data
            console.log(this.discsList)
            })
            .catch((error)=>{
            console.error(error)
            })
        }
    },
    created(){
        this.APICallDiscs()
    }

})
  