@if(count($reviews) > 0)
    <table class="table table-striped">
        <tr>
            <th>Product</th>
            <th>Rating</th>
            <th></th>
            <th></th>
        </tr>
    @foreach($reviews as $review)
        <tr>
            <td>{{$review->item_name}}</td>
            <td><?php 
                for ($i=0; $i < $review->rating; $i++) { 
                    echo '<i class="fas fa-star"></i>';
                }
                for ($i=$review->rating; $i < 5; $i++) { 
                    echo '<i class="far fa-star"></i>';
                }
             ?></td>
             @if(Request::is('/'))
                <td></td>
                <td></td>
             @else
                <td><a href="#" class="btn btn-primary float-right">Edit</a></td>
                <td><a href="#" class="btn btn-danger">Delete</a></td>
            @endif
        </tr>
    @endforeach
@else
    <div class="alert alert-primary" role="alert">
      No Reviews added!
    </div>
@endif
