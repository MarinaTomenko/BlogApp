<div class="footer">
    <div class="footer-area">
        <div class="footer-area-content">
            <div class="container">
                <div class="row ">
                    @if (count($menu) > 0)
                    <div class="col-md-3">
                        <div class="menu">
                            <h6>Menu</h6>
                            <ul>
                                @foreach ($menu as $item)
                                <li><a href="{{ $item["href"] }}">{{ $item["text"] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                   
                </div>
            </div>
        </div>
        <div class="footer-area-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <p>{{ $sitesettings->copyright_text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
