$(document).ready(function(){
    var allProduct = "https://dummyjson.com/products";
    getProducts();

    function getProducts(){
        $.ajax({
            url: allProduct,
            method: "GET",
            data: { limit: 10 },
            success: function(res){
                console.log(res);
            },
            error: function(err){
                console.error("Error fetching products:", err);
            }
        });
    }
});

