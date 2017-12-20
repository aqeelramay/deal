<?php include("frontend/include/header.php"); ?>
<body>
  <header class="mainmenu">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#">Home</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Clothes</a>
                </li>
                <li>
                  <a href="#">Food</a>
                </li>
                <li>
                  <a href="#">Electronics</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Stores
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">All Stores</a>
                </li>
                <li>
                  <a href="#">New Store</a>
                </li>
                <li>
                  <a href="#">USA Coupons</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <section class="search_bar">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-1 col-lg-8 col-lg-offset-2">
          <div class="search_form">
            <form>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </span>
              </div>
              <div class="search_checkboxes">
                <div class="checkbox checkbox-primary">
                  <input id="coupons" type="checkbox">
                  <label for="coupons">
                    Coupons
                  </label>
                </div>
                <div class="checkbox checkbox-primary">
                  <input id="deals" type="checkbox">
                  <label for="deals">Deals</label>
                </div>
                <div class="checkbox checkbox-primary">
                  <input id="stores" type="checkbox">
                  <label for="stores">Stores</label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h3>Popular Stores</h3>
          <ul class="list-unstyled list-inline popular_stores_cont">
            <li>
              <a href="">
                <img src="images/belle-lily-store.jpg" alt="Belle Lily Store" />
              </a>
              <div class="storename">
                <a href="">bellylilly</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
            <li>
              <a href="">
                <img src="images/Redbox-store.png" alt="Redbox Store" />
              </a>
              <div class="storename">
                <a href="">Redbox Store</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="popular_stores">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h3>Latest Coupons</h3>
          <section class="coupon_listing">
            <div class="white_box p20 mb20">
              <div class="row">
                <div class="col-md-3">
                  <div class="stores_img mb5">
                    <a href="">
                      <img src="images/belle-lily-store.jpg" alt="Belle Lily Store" />
                    </a>
                  </div>
                  <div class="store_name">
                    <a href="">Belle Lily Store</a>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="coupon_title mb5">
                    <a href="">Up To 40% - 70% Off January Savings Event</a>
                  </div>
                  <div class="coupon_text mb5">
                    At reasonable prices, quality assurance, 100% secure shopping. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiolore consectetur....
                  </div>
                  <div class="coupon_expiry">Expires: October 20, 2017</div>
                </div>
                <div class="col-md-3">
                  <div class="coupon_code_box">
                    <a href="" target="_blank">
                      <span class="coupon_code">2016TATILRA29</span>
                      <span class="show_code"> Show Code</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="white_box p20 mb20">
              <div class="row">
                <div class="col-md-3">
                  <div class="stores_img mb5">
                    <a href="">
                      <img src="images/belle-lily-store.jpg" alt="Belle Lily Store" />
                    </a>
                  </div>
                  <div class="store_name">
                    <a href="">Belle Lily Store</a>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="coupon_title mb5">
                    <a href="">Up To 40% - 70% Off January Savings Event</a>
                  </div>
                  <div class="coupon_text mb5">
                    At reasonable prices, quality assurance, 100% secure shopping. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiolore consectetur....
                  </div>
                  <div class="coupon_expiry">Expires: October 20, 2017</div>
                </div>
                <div class="col-md-3">
                  <div class="coupon_code_box">
                    <a href="" target="_blank">
                      <span class="coupon_code">2016TATILRA29</span>
                      <span class="show_code"> Show Code</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-3">
          <h3>Popular Categories</h3>
          <div class="popular_categories">
            <ul class="list-unstyled">
              <li>
                <a href="">
                  <i class="fa fa-car" aria-hidden="true"></i> Automotive</a>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-paint-brush" aria-hidden="true"></i> Beauty & Spa</a>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-plug" aria-hidden="true"></i> Electronics</a>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-cutlery" aria-hidden="true"></i> Food & Drink</a>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-plane" aria-hidden="true"></i> Gateways</a>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-bicycle" aria-hidden="true"></i> Health & Fitness</a>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-home" aria-hidden="true"></i> Home & Garden</a>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-female" aria-hidden="true"></i> Women</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include("frontend/include/footer.php"); ?>