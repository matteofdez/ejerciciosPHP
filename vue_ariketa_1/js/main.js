var app = new Vue({
    el: '#app',
    data:{
        produktuak: "",
        produk: [ {title:""}]        
    },
    methods:{
        addToCart: function(){
            this.produk.push({
                title: this.produktuak
            });
            this.produktuak="";
        },
        minusToCart: function(index) {
            this.produk.splice(index, 1);
        }
    }
})