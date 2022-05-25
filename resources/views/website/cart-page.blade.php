@include('website.nav')

        <!-- header end -->
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-image-3 ptb-150">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h3>CART PAGE</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Cart page</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- shopping-cart-area start -->
        <div class="cart-main-area ptb-100">
            <div class="container">
                <h3 class="page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Until Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"
                                                    ><img
                                                        src={{url('website/assets/img/cart/cart-3.jpg')}}
                                                        alt=""
                                                /></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#"
                                                    >Dutchman's Breeches
                                                </a>
                                            </td>
                                            <td class="product-price-cart">
                                                <span class="amount"
                                                    >$260.00</span
                                                >
                                            </td>
                                            <td class="product-quantity">
                                                <div class="pro-dec-cart">
                                                    <input
                                                        class="cart-plus-minus-box"
                                                        type="text"
                                                        value="02"
                                                        name="qtybutton"
                                                    />
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                $110.00
                                            </td>
                                            <td class="product-remove">
                                                <a href="#"
                                                    ><i class="fa fa-pencil"></i
                                                ></a>
                                                <a href="#"
                                                    ><i class="fa fa-times"></i
                                                ></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"
                                                    ><img
                                                        src={{url('website/assets/img/cart/cart-4.jpg')}}
                                                        alt=""
                                                /></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#"
                                                    >Flowers Bouquet Pink</a
                                                >
                                            </td>
                                            <td class="product-price-cart">
                                                <span class="amount"
                                                    >$150.00</span
                                                >
                                            </td>
                                            <td class="product-quantity">
                                                <div class="pro-dec-cart">
                                                    <input
                                                        class="cart-plus-minus-box"
                                                        type="text"
                                                        value="02"
                                                        name="qtybutton"
                                                    />
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                $150.00
                                            </td>
                                            <td class="product-remove">
                                                <a href="#"
                                                    ><i class="fa fa-pencil"></i
                                                ></a>
                                                <a href="#"
                                                    ><i class="fa fa-times"></i
                                                ></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"
                                                    ><img
                                                        src={{url('website/assets/img/cart/cart-5.jpg')}}
                                                        alt=""
                                                /></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#"
                                                    >Evergreen Candytuft
                                                </a>
                                            </td>
                                            <td class="product-price-cart">
                                                <span class="amount"
                                                    >$170.00</span
                                                >
                                            </td>
                                            <td class="product-quantity">
                                                <div class="pro-dec-cart">
                                                    <input
                                                        class="cart-plus-minus-box"
                                                        type="text"
                                                        value="02"
                                                        name="qtybutton"
                                                    />
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                $170.00
                                            </td>
                                            <td class="product-remove">
                                                <a href="#"
                                                    ><i class="fa fa-pencil"></i
                                                ></a>
                                                <a href="#"
                                                    ><i class="fa fa-times"></i
                                                ></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="#">Continue Shopping</a>
                                        </div>
                                        <div class="cart-clear">
                                            <button>
                                                Update Shopping Cart
                                            </button>
                                            <a href="#">Clear Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="cart-tax">
                                    <div class="title-wrap">
                                        <h4
                                            class="cart-bottom-title section-bg-gray"
                                        >
                                            Estimate Shipping And Tax
                                        </h4>
                                    </div>
                                    <div class="tax-wrapper">
                                        <p>
                                            Enter your destination to get a
                                            shipping estimate.
                                        </p>
                                        <div class="tax-select-wrapper">
                                            <div class="tax-select">
                                                <label> * Country </label>
                                                <select
                                                    class="email s-email s-wid"
                                                >
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>
                                                        Åland Islands
                                                    </option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * Region / State
                                                </label>
                                                <select
                                                    class="email s-email s-wid"
                                                >
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>
                                                        Åland Islands
                                                    </option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * Zip/Postal Code
                                                </label>
                                                <input type="text" />
                                            </div>
                                            <button
                                                class="cart-btn-2"
                                                type="submit"
                                            >
                                                Get A Quote
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="discount-code-wrapper">
                                    <div class="title-wrap">
                                        <h4
                                            class="cart-bottom-title section-bg-gray"
                                        >
                                            Use Coupon Code
                                        </h4>
                                    </div>
                                    <div class="discount-code">
                                        <p>
                                            Enter your coupon code if you have
                                            one.
                                        </p>
                                        <form>
                                            <input
                                                type="text"
                                                required=""
                                                name="name"
                                            />
                                            <button
                                                class="cart-btn-2"
                                                type="submit"
                                            >
                                                Apply Coupon
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4
                                            class="cart-bottom-title section-bg-gary-cart"
                                        >
                                            Cart Total
                                        </h4>
                                    </div>
                                    <h5>Total products <span>$260.00</span></h5>
                                    <div class="total-shipping">
                                        <h5>Total shipping</h5>
                                        <ul>
                                            <li>
                                                <input type="checkbox" />
                                                Standard <span>$20.00</span>
                                            </li>
                                            <li>
                                                <input type="checkbox" />
                                                Express <span>$30.00</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="grand-totall-title">
                                        Grand Total <span>$260.00</span>
                                    </h4>
                                    <a href="#">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer style Start -->
        <footer class="footer-area pt-75 gray-bg-3">
            <div class="footer-top gray-bg-3 pb-35">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>My Account</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li>
                                            <a href="my-account.php"
                                                >My Account</a
                                            >
                                        </li>
                                        <li>
                                            <a href="about-us.php"
                                                >Order History</a
                                            >
                                        </li>
                                        <li>
                                            <a href="wishlist.php">WishList</a>
                                        </li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li>
                                            <a href="about-us.php"
                                                >Order History</a
                                            >
                                        </li>
                                        <li>
                                            <a href="#">International Orders</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Information</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li>
                                            <a href="about-us.php">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Delivery Information</a>
                                        </li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li>
                                            <a href="#">Terms & Conditions</a>
                                        </li>
                                        <li>
                                            <a href="#">Customer Service</a>
                                        </li>
                                        <li><a href="#">Return Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">Support Center</a></li>
                                        <li>
                                            <a href="#">Term & Conditions</a>
                                        </li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">FAQS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div
                                class="footer-widget footer-widget-red footer-black-color mb-40"
                            >
                                <div class="footer-title mb-25">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="footer-about">
                                    <p>
                                        Your current address goes to here,120
                                        haka, angladesh
                                    </p>
                                    <div class="footer-contact mt-20">
                                        <ul>
                                            <li>(+008) 254 254 254 25487</li>
                                            <li>(+009) 358 587 657 6985</li>
                                        </ul>
                                    </div>
                                    <div class="footer-contact mt-20">
                                        <ul>
                                            <li>yourmail@example.com</li>
                                            <li>example@admin.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pb-25 pt-25 gray-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">
                                <p>
                                    <a
                                        target="_blank"
                                        href="https://www.templateshub.net"
                                        >Templates Hub</a
                                    >
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment-img f-right">
                                <a href="#">
                                    <img
                                        alt=""
                                        src={{url('website/assets/img/icon-img/payment.png')}}
                                    />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer style End -->

        <!-- all js here -->
        <script src={{url('website/assets/js/vendor/jquery-1.12.0.min.js')}}></script>
        <script src={{url('website/assets/js/popper.js')}}></script>
        <script src={{url('website/assets/js/bootstrap.min.js')}}></script>
        <script src={{url('website/assets/js/imagesloaded.pkgd.min.js')}}></script>
        <script src={{url('website/assets/js/isotope.pkgd.min.js')}}></script>
        <script src={{url('website/assets/js/ajax-mail.js')}}></script>
        <script src={{url('website/assets/js/owl.carousel.min.js')}}></script>
        <script src={{url('website/assets/js/plugins.js')}}></script>
        <script src={{url('website/assets/js/main.js')}}></script>
    </body>
</html>
