const app = new Vue({

    el: '#root',
    data: {
        discs: []
    },

    created() {

        axios.get('http://localhost/php-ajax-dischi/database_ajax.php').then((response) => {
             this.discs = response.data;
             console.log(this.discs);
        });

    }

})