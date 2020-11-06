<div class="aside-nav">
    <ul>
        <li>
            <a href="{{ route('admin.catalog.products.brands') }}">Brands</a>
        </li>
         <li>
            <a href="{{ route('admin.catalog.products.models') }}">Models</a>
        </li>
        @if (request()->route()->getName() != 'admin.configuration.index')
            <?php $keys = explode('.', $menu->currentKey);  ?>

            @if(isset($keys) && strlen($keys[0]))
            @foreach (\Illuminate\Support\Arr::get($menu->items, current($keys) . '.children') as $item)
                <li class="{{ $menu->getActive($item) }}">
                    <a href="{{ $item['url'] }}">
                        {{ trans($item['name']) }}

                        @if ($menu->getActive($item))
                            <i class="angle-right-icon"></i>
                        @endif


                    </a>
                </li>

            @endforeach

            @else

            <li class="active">
                <a href="http://localhost:8000/admin/catalog/products"> 
                    Products<i class="angle-right-icon"></i>
                </a>
            </li> 
            <li>
                <a href="http://localhost:8000/admin/catalog/categories">
                    Categories </a>
            </li> 
            <li>
                <a href="http://localhost:8000/admin/catalog/attributes">
                    Attributes
                </a>
            </li> 
            <li>
                <a href="http://localhost:8000/admin/catalog/families">
                    Attribute Families
                </a>
            </li>

            @endif
        @else
            @foreach ($config->items as $key => $item)
                <li class="{{ $item['key'] == request()->route('slug') ? 'active' : '' }}">
                    <a href="{{ route('admin.configuration.index', $item['key']) }}">
                        {{ isset($item['name']) ? trans($item['name']) : '' }}

                        @if ($item['key'] == request()->route('slug'))
                            <i class="angle-right-icon"></i>
                        @endif
                    </a>
                </li>

            @endforeach
        @endif
    </ul>

    <!-- <div class="close-nav-aside">
        <i class="icon angle-left-icon close-icon"></i>
    </div> -->
</div>
