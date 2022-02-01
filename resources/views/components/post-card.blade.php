<div class = "card mb-3" style = "width: 600px; max-width: 100%;">
    <div class = "class-header bg-white border-0">
        
            <img src = "" style = "width: 50px; height: 50px">
        
        <span class = "fw-bold">{{$post->user->name}}</span>
    </div>

    <img src = "{{asset($post->image)}}" class = "card-ing rounded-0">

    <div class = "card-body">
        <p class = "card-text">
            <span class = "fw-bold">{{$post->user->name}}</span>
            {{$post->description}}
        </p>
    </div>
</div>