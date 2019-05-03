@extends('user.master')
@section('content')
<div class="container">
  <div class="row">
    <h2 class="category-title">Ảnh Nền</h2>
<div class="row category-banner">
  <div class="col-sm-12 category-image"><img src="public/watchpro/image/banners/banner-3-33_03.png" alt="Desktops" width="100%" title="Ảnh Nền" class="img-thumbnail"></div>
  <div class="col-sm-12 category-desc">Lorem ipsum dolomagna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</div>
</div>
<div class="category-page-wrapper">
  <div class="col-md-6 list-grid-wrapper">
    <div class="btn-group btn-list-grid">
      <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="" data-original-title="List"><i class="fa fa-th-list"></i></button>
      <button type="button" id="grid-view" class="btn btn-default grid active" data-toggle="tooltip" title="" data-original-title="Grid"><i class="fa fa-th"></i></button>
    </div>
    <a href="#" id="compare-total">Sản Phẩm So Sánh (0)</a> </div>
  <div class="col-md-1 text-right page-wrapper">
    <label class="control-label" for="input-limit">Show :</label>
    <div class="limit">
      <select id="input-limit" class="form-control">
        <option value="8" selected="selected">8</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="75">75</option>
        <option value="100">100</option>
      </select>
    </div>
  </div>
  <div class="col-md-2 text-right sort-wrapper">
    <label class="control-label" for="input-sort">Sort By :</label>
    <div class="sort-inner">
      <select id="input-sort" class="form-control">
        <option value="ASC" selected="selected">Default</option>
        <option value="ASC">Name (A - Z)</option>
        <option value="DESC">Name (Z - A)</option>
        <option value="ASC">Price (Low &gt; High)</option>
        <option value="DESC">Price (High &gt; Low)</option>
        <option value="DESC">Rating (Highest)</option>
        <option value="ASC">Rating (Lowest)</option>
        <option value="ASC">Model (A - Z)</option>
        <option value="DESC">Model (Z - A)</option>
      </select>
    </div>
  </div>
</div>
<br>
<div class="grid-list-wrapper">
  <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="women's New Wine is an alcoholic stores" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"><span class="price-old">$272.00</span> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div><div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"><span class="price-old">$272.00</span> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div><div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"><span class="price-old">$272.00</span> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div><div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"><span class="price-old">$272.00</span> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div><div class="clearfix visible-lg"></div><div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"><span class="price-old">$272.00</span> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div><div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"><span class="price-old">$272.00</span> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div><div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"><span class="price-old">$272.00</span> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div><div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"><span class="price-old">$272.00</span> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div><div class="clearfix visible-lg"></div><div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"><span class="price-old">$272.00</span> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div>
  <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div>
  <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div>
  <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div><div class="clearfix visible-lg"></div>
  <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div>
  <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div>
  <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div>
  <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="product-thumb">
      <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/ảnh đồng hồ/pro-1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive"> </a>
        <div class="button-group">
          <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
          <button type="button" class="addtocart-btn">Add to Cart</button>
          <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
        </div>
      </div>
      <div class="caption product-detail">
        <h4 class="product-name"> <a href="product.html" title="lorem ippsum dolor dummy"> lorem ippsum dolor dummy </a> </h4>
        <p class="product-desc"> More room to move.

          With 80GB or 160GB of storage and up to 40 hours of battery life, the new lorem ippsum dolor dummy lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

          Cover Flow.

          Browse through your music collection by flipping..</p>
        <p class="price product-price"> $122.00 <span class="price-tax">Ex Tax: $100.00</span> </p>
        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
      </div>
      <div class="button-group">
        <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
        <button type="button" class="addtocart-btn">Add to Cart</button>
        <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div><div class="clearfix visible-lg"></div>
</div>
<div class="category-page-wrapper">
  <div class="result-inner">Showing 1 to 8 of 10 (2 Pages)</div>
  <div class="pagination-inner">
    <ul class="pagination">
      <li class="active"><span>1</span></li>
      <li><a href="category.html">2</a></li>
      <li><a href="category.html">&gt;</a></li>
      <li><a href="category.html">&gt;|</a></li>
    </ul>
  </div>
</div>
  </div>
</div>
@endsection