const app = new Vue({
    el: '#app',
    data: {
        discs: null,
    },
    created(){
        this.getDiscs();
    },
    methods:{
        getDiscs(){
            axios.get('http://localhost/php-ajax-dischi/ajax/scripts/database.php')
            .then(response=>{
                this.discs = response.data;
            })
            .catch(err=>{
                console.log(err)
            })
        }
    }
})