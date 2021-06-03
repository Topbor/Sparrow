
    <div class="columns portfolio-item">
        <div class="item-wrap">
          	<a href="{{route('admin.tour.view', ['id' => $t->id])}}">
                <img alt="" src="{{$t->image_url}}">
                <div class="overlay"></div>
                <div class="link-icon"><i class="fa fa-link"></i></div>
            </a>
            <div class="portfolio-item-meta">
                <h5><a href="{{route('admin.tour.view' ,['id' => $t->id])}}">{{$t->mountaine}}</a></h5>
                <p>{{$t->country}}</p>
                <div style="display:flex; margin-top:10px; padding-left:30px">
                    <div style="padding:5px; margin-right:30px; padding-right:20px; padding-left:20px; background:#e1a900; border-radius:3px;">
                    <a style="color:white;" href="{{route('admin.update.tour',['id'=>$t->id])}}"><i class="fas fa-edit"></i></a></div>
                    <div style="padding:5px; padding-right:20px; padding-left:20px; background:#f20000; border-radius:3px;">
                    <a style="color:white;" href="{{route('admin.delete.tour',['id'=>$t->id])}}"><i class="fas fa-trash"></i></a></div>
                </div>
            </div>
        </div>
    </div>