<div class="col-sm-2 column-sidebar">
    <div class="sidebar-block">
        <div class="sidebar-title">
            Brands
        </div>
        <form method="POST" action="{{url('/filter')}}">
            {{ csrf_field() }}
            <div class="sidebar-content">
                <div class="brandscroll">
                    <?php
                    $categry = \App\Category::all();
                    ?>
                    @foreach($categry as $cats)
                    <input type="checkbox" name="brand[]" value="{{$cats->id}}"> {{$cats->cat_name}}<br>
                    @endforeach
                </div>
            </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">
            SIM
        </div>
        <div class="sidebar-content">
            <div class="brandscroll">
                 <?php
                $product = \App\Product::all();
                ?>   
                @foreach($product as $p)
                <input type="checkbox" name="SIM" value="{{$p->SIM}}" > {{$p->SIM}}<br>
                @endforeach
            </div>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">
            Primary Camera
        </div>
        <div class="sidebar-content">
            <div class="brandscroll">
                <?php
                $product = \App\Product::all();
                ?>   
                @foreach($product as $p)
                <input type="checkbox" name="Primary" value="{{$p->Primary}}" > {{$p->Primary}}<br>
                @endforeach

            </div>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">
            Front Camera
        </div>
        <div class="sidebar-content">
            <div class="brandscroll">
               <?php
                $product = \App\Product::all();
                ?>   
                @foreach($product as $p)
                <input type="checkbox" name="Front" value="{{$p->Front}}" > {{$p->Front}}<br>
                @endforeach
            </div>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">
            Internal
        </div>
        <div class="sidebar-content">
            <div class="brandscroll">
                 <?php
                $product = \App\Product::all();
                ?>   
                @foreach($product as $p)
                <input type="checkbox" name="Internal" value="{{$p->Internal}}" > {{$p->Internal}}<br>
                @endforeach
            </div>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">
            Oprating System
        </div>
        <div class="sidebar-content">
            <div class="brandscroll">
                <?php
                $product = \App\Product::all();
                ?>   
                @foreach($product as $p)
                <input type="checkbox" name="OS" value="{{$p->OS}}" > {{$p->OS}}<br>
                @endforeach
            </div>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">
            Display_type
        </div>
        <div class="sidebar-content">
            <div class="brandscroll">
                <?php
                $product = \App\Product::all();
                ?>   
                @foreach($product as $p)
                <input type="checkbox" name="display_type" value="{{$p->display_type}}" > {{$p->display_type}}<br>
                @endforeach
            </div>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">
            Resolution
        </div>
        <div class="sidebar-content">
            <div class="brandscroll">
                <?php
                $product = \App\Product::all();
                ?>   
                @foreach($product as $p)
                <input type="checkbox" name="Resolution" value="{{$p->Resolution}}"> {{$p->Resolution}}<br>
                @endforeach
            </div>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">
            Ram
        </div>
        <div class="sidebar-content">
            <div class="brandscroll">
                <?php
                $product = \App\Product::all();
                ?>   
                @foreach($product as $p)
                <input type="checkbox" name="RAM" value="{{$p->RAM}}"> {{$p->RAM}}<br>
                @endforeach
            </div>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">
            Protection
        </div>
        <div class="sidebar-content">
            <div class="brandscroll">
                <?php
                $product = \App\Product::all();
                ?>   
                @foreach($product as $p)
                <input type="checkbox" name="Protection" value="{{$p->Protection}}"> {{$p->Protection}}<br>
                @endforeach
            </div>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">

        </div>
        <div class="sidebar-content">
            <div class="sidebar-filters">
                <div class="sidebar-filters-title">Battery</div><br>
                <select name="Capacity">
                    <option value="">Battery</option>
                    <option value="1000-1500">1000mAh-1500mAh</option>
                    <option value="1501-2499">1501mAh-2499mAh</option>
                    <option value="2500-2999">2500mAh-2999mAh</option>
                    <option value="3000-3499">3000mAh-3499mAh</option>
                    <option value="3500-40000">3500mAh-40000mAh</option>
                </select>
            </div>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">
            Filter By
        </div>
        <div class="sidebar-content">
            <div class="sidebar-filters">
                <div class="sidebar-filters-title">Price</div><br>
                <select name="price">
                    <option value="" >Price Range</option>
                    <option value="0-2000">Rs.0-Rs.2000</option>
                    <option value="2001-5000">Rs.2001-Rs.5000</option>
                    <option value="5001-10000">Rs.5001-Rs.10000</option>
                    <option value="10001-20000">Rs.10001-Rs.20000</option>
                    <option value="20001-40000">Rs.20001-Rs.40000</option>

                    <option value="2001-50000">Rs.2001-Rs.50000</option>
                    <option value="50000-60000">Rs.50000-Rs.60000</option>
                    <option value="50000-70000">Rs.50000-Rs.70000</option>
                    <option value="50000-99000">Rs.50000-Rs.99000</option>

                    <option value="2000-99000">Rs.2000-Rs.99000</option>
                </select>

                <div class="form-group">
                    <br>
                    <button type="Submit" class="btn-default btn1" value="Submit">Submit</button>
                </div>
            </div>
        </div>
    </div></form>
</div>