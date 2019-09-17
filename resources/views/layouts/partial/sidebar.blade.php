<div class="sidebar" data-color="purple" data-background-color="white" data-image="">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            RocketechIT Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('admin/dashboard*') ? 'active':'' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/slider*') ? 'active':'' }}">
                <a class="nav-link" href="{{ route('slider.index') }}">
                    <i class="material-icons">slideshow</i>
                    <p>Sliders</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/statistics*') ? 'active':'' }}">
                <a class="nav-link" href="{{ route('statistics.index') }}">
                    <i class="material-icons">assessment</i>
                    <p>Statistics</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/gallery*') ? 'active':'' }}">
                <a class="nav-link" href="{{ route('gallery.index') }}">
                    <i class="material-icons">image</i>
                    <p>Gallery</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/news*') ? 'active':'' }}">
                <a class="nav-link" href="{{ route('news.index') }}">
                    <i ><img src="https://img.icons8.com/ios/24/000000/news.png"></i>
                    <p>News</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="">
                    <i class="material-icons">inventory</i>
                    <p>Products</p>
                </a>
            </li>
            {{--<li class="nav-item ">
                <a class="nav-link" href="">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>--}}
        </ul>
    </div>
</div>
