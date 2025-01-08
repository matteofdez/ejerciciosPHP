var app = new Vue({
    el: '#app',
    data: {
        produktuak: "",
        zenbakiak: "1",
        produk: [],
        erosita: true
    },
    methods: {
        addToCart: function () {
            if (this.produktuak.length <= 1) 
                return alert("Produktua ezin da hutsik egon.");

            this.produk.push({
                title: this.produktuak,
                zenbakia: this.zenbakiak,
                completed: false
            });
        },
        gehitu: function (index) {
            this.produk[index].zenbakia++;
        },
        kendu: function (index) {
            this.produk[index].zenbakia--;
        }
    }
})