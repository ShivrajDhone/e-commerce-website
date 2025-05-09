
$(document).ready(function () {
  $.ajax({
    url: "https://dummyjson.com/products",
    method: "GET",
    data: { limit: 20 },
    success: function (res) {
      let html = "";
      for (let product of res.products) {
        html += `
          <div class="col-md-3 mb-4">
            <div class="card h-100">
              <img src="${product.thumbnail}" class="card-img-top" alt="${product.title}">
              <div class="card-body mb-2">
                <h5 class="card-title">${product.title}</h5>
                <p class="card-text">${product.description.substring(0, 60)}...</p>
                 </div>
                 <div class="ms-3">
                  <a href="#" class="btn btn-primary">$ ${product.price}</a>
                  <h6>Discount: ${product.discountPercentage}%</h6>
                  <h6>${product.rating} rating</h6>
                  <h6>${product.stock} Product Left</h6>
                </div>
                 
             
            </div>
          </div>`;
      }
      $("#products").html(html);
    }
  });
});

