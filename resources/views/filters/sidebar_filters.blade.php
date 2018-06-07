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
                <input type="checkbox" name="SIM" value="Dual Sim, Dual Standby (Nano-SIM)"> Dual Sim<br>
                <input type="checkbox" name="SIM" value="Single SIM (Nano-SIM)"> Single Sim  <br>
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
                <input type="checkbox" name="Primary" value="12 MP (f/1.75) + 12 MP (f/2.6), dual-LED dual-tone flash, autofocus">8MP-13MP<br>
                <input type="checkbox" name="Primary" value="Dual: 16 MP + 5 MP, f/2.0, phase detection autofocus, dual-LED flash">14MP-16MP<br>
                <input type="checkbox" name="Primary" value="23 MP (f/2.0) + 23 MP (f/2.6), dual-LED dual-tone flash, autofocus">17MP-21MP<br>

            </div>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">
            Front Camera
        </div>
        <div class="sidebar-content">
            <div class="brandscroll">
                <input type="checkbox" name="Front" value="1.2 MP (f/2.2, 31mm), 720p@30fps, face detection, HDR, FaceTime over Wi-Fi or Cellular - 5 MP, f/2.2">1MP-5MP
                <br>
                <input type="checkbox" name="Front" value="5.1 MP, f/2.4, 1080p, HDR - 8 MP (f/2.0, 26mm, 1/3.2, 1.4µm), autofocus, 1080p">6MP-12MP
                <br>
                <input type="checkbox" name="Front" value="Dual: 16 MP + 5 MP, f/2.0, phase detection autofocus, dual-LED flash">13MP-16MP
                <br>
                <input type="checkbox" name="Front" value="24 MP, f/2.0, 1080p - 25 MP, f/2.0, 1080p ">17MP-25MP<br>
            </div>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">
            Internal
        </div>
        <div class="sidebar-content">
            <div class="brandscroll">
                <input type="checkbox" name="Internal" value="16/32/64/128 GB -16/32 GB"> 8GB - 16GB<br>
                <input type="checkbox" name="Internal" value="16/32 GB-32GB built in-16/32/64/128 GB"> 32GB - 64GB<br>
                <input type="checkbox" name="Internal" value="32GB built in-64 GB + 64/128 GB"> 128GB - 256GB<br>
            </div>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-title">
            Oprating System
        </div>
        <div class="sidebar-content">
            <div class="brandscroll">
                <input type="checkbox" name="OS" value="Android 8.0 (Oreo)-Android V8.1 Oreo  "> Android V8.1 Oreo  <br>
                <input type="checkbox" name="OS" value="Android 7.1.1 (Nougat)-Android 7.1.1 (Nougat)"> Android 7.1.1 (Nougat)<br>
                <input type="checkbox" name="OS" value="Android 5.1.1 (Lollipop), upgradable to 7.1.1 (Nougat)-Android 6.0.1 (Marshmallow), upgradable to 7.0 (Nougat)"> Android 5.1.1 (Lollipop) - Android 6.0.1 (Marshmallow)<br>
                <input type="checkbox" name="OS" value="iOS 11.1.1, upgradable to iOS 11.3-iOS 11.1.1, upgradable to iOS 11.3"> iOS 11.1.1, upgradable to iOS 11.3<br>
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
                <div class="sidebar-filters-title">Batery</div><br>
                <select name="Capacity">
                    <option value="">Batery</option>
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
                </select>

                <div class="form-group">
                    <br>
                    <button type="Submit" class="btn-default btn1" value="Submit">Submit</button>
                </div>
            </div>
        </div>
    </div></form>
</div>