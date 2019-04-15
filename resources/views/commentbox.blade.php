<div class="panel panel-default">             
<div class="panel-heading text-center">Comments</div>

<div class="panel-body">
            @include('partial.alert')
            @if (count($book->comment) > 0)
            
            @foreach($book->comment as $com)
                <div class="clearfix box-comment">
                    <h4>{{$com->user->name}}</h4>
                    <p class="text-muted pull-right">{{$com->created_at}}</p>
                    <p class="text-muted pull-right">{{$com->comment}}</p>
                </div>
            <hr>
                <!-- /.row -->
                @endforeach
                @endif
            <form action="{{route('comment',$book->id)}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea class="form-control" name="comment" placeholder="Enter Your Comment Here"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" name="addcomment" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
            <hr>
            
        </div>
    </div>