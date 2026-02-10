<div class="container mt-5 wrap-shop">
  <div class="row h-100">
    <div class="gx-5 col-3  shop-sidebar">
      <div class="sidebar-category mb-3">
        <div class="tile">
          <h4>Category</h4>
        </div>
        <div class="category-list">
          <div class="accordion" id="accordionExample">
            <div class="card border-0">
              <div class="card-heading">
                <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse1">Man</a>
              </div>
              <div class="collapse" data-bs-parent="#accordionExample" id="collapse1">
                <div class="card-body">
                  <ul class="justify-content-start text-start">
                    <li>Addidas</li>
                    <li>Nike</li>
                    <li>Boy</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="card border-0">
              <div class="card-heading">
                <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse2">Women</a>
              </div>
              <div class="collapse" data-bs-parent="#accordionExample" id="collapse2">
                <div class="card-body">
                  <ul>
                    <li>Coats</li>
                    <li>Jackets</li>
                    <li>ShirtsJeans</li>
                    <li>T-Shirts</li>
                  </ul>
                </div>
              </div>

            </div>

            <div class="card border-0">
              <div class="card-heading">
                <a href="#" data-bs-toggle="collapse" data-bs-target="#collapse3">Kids</a>
              </div>
              <div class="collapse" data-bs-parent="#accordionExample" id="collapse3">
                <div class="card-body">
                  <ul>
                    <li>Coats</li>
                    <li>Jackets</li>
                    <li>Dresses</li>
                    <li>Jeans</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar-price mb-3">
        <div class="title">
          <h4>Price</h4>
        </div>
        <div class="wrap-price-range justify-content-center">
          <div class="price-content">
            <div class="price-content-min row">
              <div class="d-none d-xl-block col-4">Min</div>
              <div class="col-8">
                <p id="min-value" class="mb-0">$50</p>
              </div>
            </div>

            <div class="price-content-max row">
              <div class="p-0 col-0 col-xxl-2"></div>
              <div class="d-none d-xl-block col-xl-6 col-xxl-4 p-0">Max</div>
              <div class="col-12 col-xl-6 text-end">
                <p id="max-value" class="mb-0 ">$50</p>
              </div>
            </div>
          </div>
          <div class="range-sliderrr">
            <div class="range-fill"></div>
            <!-- <div class="price-input">
                      <p>Price:</p> -->
            <input type="range" min="0" max="100" value="0" step="1" class="min-price" id="min-slider">
            <input type="range" min="0" max="100" value="100" step="1" class="max-price" id="max-slider">
            <!-- </div> -->
          </div>
          <a href="#" class="text-center btn btn-primary ">Filter</a>

        </div>


      </div>
      <div class="sidebar-size mb-3">
        <div class="title">
          <h4>Size</h4>
        </div>
        <div class="size-list d-flex flex-column">
          <div>
            <input type="checkbox" id="xxs">
            <span>xxs</span>
          </div>
          <div>
            <input type="checkbox" id="xs">
            <span>xs</span>
          </div>
          <div>
            <input type="checkbox" id="s">
            <span>s</span>
          </div>
          <div>
            <input type="checkbox" id="m">
            <span>m</span>
          </div>
          <div>
            <input type="checkbox" id="l">
            <span>l</span>
          </div>
          <div>
            <input type="checkbox" id="xl">
            <span>xl</span>
          </div>
        </div>
      </div>
      <div class="sidebar-color mb-3">
        <div class="title">
          <h4>Color</h4>
        </div>
        <div class="color-list d-flex flex-column">
          <div>
            <input type="checkbox" id="black">
            <span>Black</span>
          </div>
          <div>
            <input type="checkbox" id="white">
            <span>White</span>
          </div>
          <div>
            <input type="checkbox" id="red">
            <span>Red</span>
          </div>
          <div>
            <input type="checkbox" id="blue">
            <span>Blue</span>
          </div>
          <div>
            <input type="checkbox" id="green">
            <span>Green</span>
          </div>
          <div>
            <input type="checkbox" id="yellow">
            <span>Yellow</span>
          </div>
        </div>
      </div>
    </div>
    <div class="gx-5 col-9 shop-products">
      <div class="row row-cols-2 row-cols-lg-3 g-4 mb-5">

        <div class="col product-item image-zoom-effect link-effect">
          <div class="card h-100 border-0 image-holder position-relative">
            <a href="#" class="card-img-top h-75">
              <img src="images/product.png" alt="...">
            </a>
            <a href="index.html" class="btn-icon btn-wishlist">
              <svg width="24" height="24" viewBox="0 0 24 24">
                <use xlink:href="#heart"></use>
              </svg>
            </a>
            <a href="index.html" class="btn-icon btn-wishlist">
              <svg width="24" height="24" viewBox="0 0 24 24">
                <use xlink:href="#heart"></use>
              </svg>
            </a>
            <div class="card-body h-25 ">
              <h5 class="card-title">Nike Dunk</h5>
              <h5 class="card-text price">$49.00</h5>
            </div>
          </div>
        </div>


      </div>
      <div class="row">
        <nav aria-label="Page navigation example">
          <ul class="pagination pagination-color-info justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item active"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

</div>
<style>
  /* Base pagination link */
  .pagination-color-info .page-link {
    color: #5e624e;
    /* text color */
    border: none;
    /* optional: remove default border */
    transition: all 0.3s;
    /* smooth hover transition */
  }

  /* Hover / focus effect */
  .pagination-color-info .page-link:hover {
    background-color: #5e624e80;
    /* soft hover background */
    color: #5e624e;

  }

  /* Remove focus styles completely */
  .pagination-color-info .page-link:focus {
    background-color: #5e624e80;
    /* soft hover background */
    color: #5e624e;
    outline: none;
    box-shadow: none;
  }

  /* Active page */
  .pagination-color-info .page-item.active .page-link {
    background-color: #5e624e;
    color: #fff;
    border-color: #5e624e;
    /* font-weight: 500;         optional: emphasize active */
  }

  /* Disabled page */
  .pagination-color-info .page-item.disabled .page-link {
    color: #ffffff;
    /* soft gray */
    pointer-events: none;
    background-color: #63645e;
  }



  .wrap-shop {
    /* height: 100vh; */
  }

  .wrap-shop .shop-products .product-item {
    height: 40vh;

    img {
      max-height: 100%;
      max-width: 100%;
      object-fit: contain;
      object-position: center;

    }


    .card-title {
      text-align: center;
      font-weight: bold;
      color: #5e624e;
    }

    .card-text {
      color: black;
      font-weight: bold;
      text-align: center;
    }

    /* .price-container {
      display: inline-block;
      position: relative;
      cursor: pointer;
      text-align: center;
    } */

    /* Hide Add to cart by default */
    .price {
      transition: all 0.7s ease;

    }

    /* .add-to-cart {
      display: none;
      width: 60%;
      text-align: center;
      color: #000000;
      font-weight: bold;
      border: solid 1px #5e624e;
      border-radius: 7px;
      margin-top: 0.25rem;
      transition: all 2s ease;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.5s ease, visibility 0.5s ease;

    } */

    /* .add-to-cart:hover {
      border: solid 1px #5e624e;
      border-radius: 7px;
      background-color: #5e624e;
      color: white;

    } */

    /* .add-to-cart:active {
      border: solid 1px #1e1f1c;
      border-radius: 7px;
      background-color: #2d2e29;
      color: white;
    } */

    /* Show on hover of product-item */


  }

  /* .wrap-shop .shop-products .product-item:hover {

    .add-to-cart {
      display: block;
    }

    .price {
      display: none;
    }
  } */

  .sidebar-category a {
    display: block;
    border: none;
  }

  .wrap-price-range {
    width: 100%;
    display: flex;
    flex-direction: column;
  }

  .wrap-price-range .price-content {
    display: flex;
    width: 100%;
    justify-content: space-between;
  }

  .price-content .price-content-min {
    /* display: flex; */
    width: 50%;
    /* justify-content: space-between; */
  }

  .price-content .price-content-max {
    /* display: flex; */
    width: 50%;
    /* justify-content: space-between; */
  }

  .range-sliderrr {
    width: 100%;
    position: relative;
    margin: 15px 0 30px 0;
  }

  .range-sliderrr .range-fill {
    height: 6px;
    background-color: #5e624e;
    position: absolute;
    z-index: 1;
  }

  .range-sliderrr input[type="range"] {
    -webkit-appearance: none;
    width: 100%;
    background: transparent;
    position: absolute;
    left: 0;
  }

  .range-sliderrr input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    background-color: #5e624e;
    cursor: pointer;
    margin-top: -5px;
    position: relative;
    z-index: 1;
  }

  .range-sliderrr input[type="range"]::-webkit-slider-runnable-track {
    width: 100%;
    height: 5px;
    background-color: #2b2b2b1f;
    border-radius: 5px;
    border: none;
  }
</style>
<script>
  const minSlider = document.getElementById("min-slider");
  const maxSlider = document.getElementById("max-slider");

  const minValue = document.getElementById("min-value");
  const maxValue = document.getElementById("max-value");

  const rangeFill = document.querySelector(".range-fill");

  const minGap = 5; // minimum gap between sliders

  function updateRange() {
    let min = parseInt(minSlider.value);
    let max = parseInt(maxSlider.value);

    // prevent overlap
    if (max - min < minGap) {
      if (this === minSlider) {
        minSlider.value = max - minGap;
      } else {
        maxSlider.value = min + minGap;
      }
      min = parseInt(minSlider.value);
      max = parseInt(maxSlider.value);
    }

    // update text
    minValue.textContent = "$" + min;
    maxValue.textContent = "$" + max;

    // update fill bar
    const percentMin = ((min) / (minSlider.max)) * 100;
    const percentMax = ((max) / (maxSlider.max)) * 100;

    rangeFill.style.left = percentMin + "%";
    rangeFill.style.width = (percentMax - percentMin) + "%";
  }

  minSlider.addEventListener("input", updateRange);
  maxSlider.addEventListener("input", updateRange);

  updateRange(); // init
</script>