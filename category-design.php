<?php get_header();?>


<div class="row" style="display: flex; flex-wrap:wrap;">
    <div class="col-4" style="min-width: 300px;">
<!-- Sidebar filter section -->
<section id="sidebar" style="padding-left:80px;">
    <p> Home | <b>All Products</b></p>
    <div class="border-bottom pb-2 ml-2">
        <h4 id="burgundy">Filters</h4>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Categories</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Men</label> </div>
            <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Women</label> </div>
            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Shoes</label> </div>
        </form>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Product Details </h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="WomenT-shirt"> <label for="WomenT-shirt">Women T-shirt</label> </div>
            <div class="form-group"> <input type="checkbox" id="MenT-shirt"> <label for="MenT-shirt">Men T-shirt</label> </div>
            <div class="form-group"> <input type="checkbox" id="WomenTrousers"> <label for="WomenTrousers">Women Trousers</label> </div>
            <div class="form-group"> <input type="checkbox" id="MenTrousers"> <label for="MenTrousers">Men Trousers"</label> </div>
            <div class="form-group"> <input type="checkbox" id="Shoes"> <label for="Shoes">Shoes</label> </div>
        </form>
    </div>
    <div class="py-2 ml-3">
        <h6 class="font-weight-bold">Top Offers</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
            <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">5% off on artisan breads</label> </div>
        </form>
    </div>
</section>
</div>

<!-- products section -->
<div class="col-7">
<section id="products" style="margin-left:40px;">
    <div class="containerCategory">
        <div class="d-flex flex-row">
            <div class="text-muted m-2" id="res">Showing all results</div>
            <div class="ml-auto mr-lg-4">
                <div id="sorting" class="border rounded p-1 m-1"> <span class="text-muted">Sort by</span> <select name="sort" id="sort">
                        <option value="popularity"><b>Popularity</b></option>
                        <option value="prcie"><b>Price</b></option>
                        <option value="rating"><b>Rating</b></option>
                    </select> </div>
            </div>
        </div>
        <div class="row" >
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> 

                    <img class="card-img-top" height="200%" src="./Projektarbete-e-handel/image-ehandel/adidas-blommiga.jpeg">
                    <div class="card-body">
                        <h5><b>Title</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">200 kr</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">2 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                        </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="../Projektarbete-e-handel/image-ehandel/adidas-blommiga.jpeg">
                    <div class="card-body">
                        <h5><b>Tshirt</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">12 kr</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                        </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="../Projektarbete-e-handel/image-ehandel/adidas-blommiga.jpeg">
                    <div class="card-body">
                        <h5><b>White pants</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">50 kr</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                        </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="../Projektarbete-e-handel/image-ehandel/adidas-blommiga.jpeg">
                    <div class="card-body">
                        <h5><b>Tshirt</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">20 kr</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                        </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="../Projektarbete-e-handel/image-ehandel/adidas-blommiga.jpeg">
                    <div class="card-body">
                        <h5><b>Shoes</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">900 kr</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span class="px-sm-1">1 pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                        </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card d-relative"> <img class="card-img-top" src="../Projektarbete-e-handel/image-ehandel/adidas-blommiga.jpeg">
                    <div class="card-body">
                        <h5><b>Shoes</b> </h5>
                        <div class="rounded bg-white discount" id="orange">10% off</div>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted price"><del>100 kr</del>20 kr</div>
                            <div class="ml-auto"> <button class="border rounded bg-white sign"><span class="fa fa-plus" id="orange"></span></button> <span>1pc</span> <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button> </div>
                        </div> <button class="btn w-100 rounded my-2">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>

<?php get_footer(); ?>