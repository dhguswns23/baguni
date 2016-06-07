<nav class="main-top-nav">
    <a href="{{URL::to('/main')}}" class="content">
        Home
    </a>
    <a href="{{ URL::to('/upload') }}" class="content">
        Upload
    </a>
    <div class="right-menu">
        <a href="{{URL::to('/mypage')}}" class="content">
            Mypage
        </a>
        <a href="{{URL::to('/logout')}}" class="content">
            Logout
        </a>
    </div>
</nav>