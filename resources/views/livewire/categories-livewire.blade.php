<div class="header-nav d-none d-lg-flex">
    <div class="main-menu d-none d-lg-block">
        <nav>
            <ul>
                @foreach ($categories as $category)
                    <li class="position-static">
                        <a wire:click="$emit('category_click',{{$category->id}});" href="#">{{ $category->title }}</i></a>
                        <ul class="mega-menu" >
                            <li class="sub-mega-menu sub-mega-menu-two">
                                <div class="menu-banner-wrap">
                                    <div class="menu-banner-content">
                                       <img height="230px" src="uploads/categories/{{$category->image}}">
                                    </div>
                                </div>
                            </li>
                            @foreach ($category->supCategories as $supCategory)
                                <li class="sub-mega-menu sub-mega-menu-one">
                                    <ul class="dropdown">
                                            <li>
                                                <i class="fa-solid fa-arrow-right fa-fade" style="color: #175dcf;"></i>
                                                <a style="display: inline-block; margin-left:10px;" href="product-category-list.html">{{ $supCategory->title }}</a>
                                            </li>
                                    </ul>
                                </li>
                            @endforeach
                        </ul>

                     
                    </li>
                @endforeach


            </ul>
        </nav>
    </div>
</div>