var app = new Vue({
    el: '#app',
    data:{
        produktuak: "",
        zereginak: [ {title:""}]        
    },
    methods:{
        addToCart: function(){
            this.zereginak.push({
                title: this.produktuak
            });
            this.produktuak="";
        }
    }
})