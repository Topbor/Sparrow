
    <div class="columns portfolio-item">
        <div class="item-wrap">
          	<a href="{{route('tour.view', ['id' => $t->id])}}">
                <img alt="" src="{{$t->image_url}}">
                <div class="overlay"></div>
                <div class="link-icon"><i class="fa fa-link"></i></div>
            </a>
            <div class="portfolio-item-meta">
                <h5><a href="{{route('tour.view' ,['id' => $t->id])}}">{{$t->mountaine}}</a></h5>
                <p>{{$t->country}}</p>
            </div>
        </div>
    </div>