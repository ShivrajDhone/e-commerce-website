
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
              <div class="card-body">
                <h5 class="card-title">${product.title}</h5>
                <p class="card-text">${product.description.substring(0, 60)}...</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
                <a href="#" class="btn btn-primary">$12.00</a>
              </div>
            </div>
          </div>`;
      }
      $("#products").html(html);
    }
  });
});

