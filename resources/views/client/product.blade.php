@extends('client.layouts.main')
@section('title', 'Home')
@section('content')
<div class="row sm-gutter app__content">
    <div class="col l-2 m-0 c-0">
        <nav class="category">
            <h3 class="category-heading">Danh mục</h3>
            <ul class="category-list">
                <!-- category-item-active => active -->
                <h2 class="category-item__link">Tất cả sản phẩm</h2>
                @foreach($categories as $cate)
                <li class="category-item ">
                    <a class="category-item__link" href="#">{{$cate->name}}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div class="col l-10 m-12 c-12">
        <div class="home-filter hide-on-mobile-tablet">
            <div class="home-filter-left">
                <span class="home-filter__label">Sắp sếp theo</span>
                <button class="home-filter__btn btn">Phổ biến</button>
                <button class="home-filter__btn btn btn--primary">Mới nhất</button>
                <button class="home-filter__btn btn">Bán chạy</button>
                <div class="select-input ">
                    <span class="select-input__label">Giá</span>
                    <i class="select-input__icon fas fa-chevron-down"></i>
                    <ul class="select-input__list">
                        <li class="select-input__item">
                            <a href="" class="select-input__link">Giá: thấp đến cao</a>
                        </li>
                        <li class="select-input__item">
                            <a href="" class="select-input__link">Giá: cao đến thấp</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="home-filter-right">
                                <span class="home-filter__page">
                                    <span class="home-filter__page-current">1</span>
                                    /14
                                </span>
                <div class="home-filter__page-control">
                    <a href="#" class="home-filter__page-btn home-filter__page-btn--disabled">
                        <i class="home-filter__page-icon fas fa-chevron-left"></i>
                    </a>
                    <a href="#" class="home-filter__page-btn">
                        <i class="home-filter__page-icon fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <nav class="mobile-category">
            <ul class="mobile-category__list">
                <li class="mobile-category__item">
                    <a href="" class="mobile-category__link">Dung cu & thiet bi tien ich Dung cu & thiet bi tien ich</a>
                </li>
                <li class="mobile-category__item">
                    <a href="" class="mobile-category__link">Dung cu & thiet bi tien ich</a>
                </li>
                <li class="mobile-category__item">
                    <a href="" class="mobile-category__link">Dung cu & thiet bi tien ich</a>
                </li>
                <li class="mobile-category__item">
                    <a href="" class="mobile-category__link">Dung cu & thiet bi tien ich</a>
                </li>
                <li class="mobile-category__item">
                    <a href="" class="mobile-category__link">Dung cu & thiet bi tien ich</a>
                </li>
                <li class="mobile-category__item">
                    <a href="" class="mobile-category__link">Dung cu & thiet bi tien ich</a>
                </li>
                <li class="mobile-category__item">
                    <a href="" class="mobile-category__link">Dung cu & thiet bi tien ich</a>
                </li>
                <li class="mobile-category__item">
                    <a href="" class="mobile-category__link">Dung cu & thiet bi tien ich</a>
                </li>
                <li class="mobile-category__item">
                    <a href="" class="mobile-category__link">Dung cu & thiet bi tien ich</a>
                </li>
                <li class="mobile-category__item">
                    <a href="" class="mobile-category__link">Dung cu & thiet bi tien ich</a>
                </li>
                <li class="mobile-category__item">
                    <a href="" class="mobile-category__link">Dung cu & thiet bi tien ich</a>
                </li>
                <li class="mobile-category__item">
                    <a href="" class="mobile-category__link">Dung cu & thiet bi tien ich</a>
                </li>
            </ul>
        </nav>

        <div class="home-product">
            <div class="row sm-gutter">
                <!--  -->
                @foreach($products as $pro)
                <div class="col l-2-4 m-4 c-6">
                    <a href="#" class="home-product-item">
                        <div class="home-product-item__img"
                             style="background-image: url({{ asset('') }}storage/{{$pro->image}})">
                        </div>
                        <h4 class="home-product-item__name">{{$pro->name}}</h4>
                        <div class="home-product-item__price">
                            <del class="home-product-item__price-old">{{number_format($pro->price)}}đ</del>
                            <span class="home-product-item__price-current">999.000đ</span>
                        </div>
                        <div class="home-product-item__action">
                            <!-- home-product-item__like--liked => like -->
                            <span class="home-product-item__like">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                            <div class="home-product-item__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="home-product-item__sold">
                                                Đã bán 100
                                            </span>
                        </div>
                        <div class="home-product-item__origin">
                            <span class="home-product-item__brand">Whoo</span>
                            <span class="home-product-item__origin-name">Nhật bản</span>
                        </div>
                        <div class="home-product-item__favourite">
                            <i class="fas fa-check"></i>
                            <span>Yêu thích</span>
                        </div>
                        <div class="home-product-item__sale-off">
                            <span class="home-product-item__sale-off-percent">10%</span>
                            <span class="home-product-item__sale-off-label">GIẢM</span>
                        </div>

                    </a>
                </div>
                @endforeach

            </div>
        </div>
        <ul class="paginayion home-product__paginayion">
            <li class="paginayion-item">
                <a href="" class="paginayion-item__link">
                    <i class="paginayion-item__icon fas fa-chevron-left"></i>
                </a>
            </li>
            <li class="paginayion-item paginayion-item--active">
                <a href="" class="paginayion-item__link">1</a>
            </li>
            <li class="paginayion-item">
                <a href="" class="paginayion-item__link">2</a>
            </li>
            <li class="paginayion-item">
                <a href="" class="paginayion-item__link">3</a>
            </li>
            <li class="paginayion-item">
                <a href="" class="paginayion-item__link">4</a>
            </li>
            <li class="paginayion-item">
                <a href="" class="paginayion-item__link">5</a>
            </li>
            <li class="paginayion-item">
                <a href="" class="paginayion-item__link">...</a>
            </li>
            <li class="paginayion-item">
                <a href="" class="paginayion-item__link">14</a>
            </li>
            <li class="paginayion-item">
                <a href="" class="paginayion-item__link">
                    <i class="paginayion-item__icon fas fa-chevron-right"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection
