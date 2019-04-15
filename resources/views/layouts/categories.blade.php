<div class="panel panel-default">             
<div class="panel-heading text-center">Categories</div>

<div class="panel-body"> 
    @if (count($allcategories) > 0)
                        <ul class="list-unstyled nav-link">
                        @foreach($allcategories as $category)
                        <li style="border: 1px solid #383;margin-bottom: 5px;"><a href="{{route('category',$category->id)}}">{{$category->name}}</a></li>
                            @endforeach
                            <li style="border: 1px solid #383;margin-bottom: 5px;"><a href="{{route('index')}}">All Categories</a></li>    
                        </ul>    
    @endif
</div>
</div>