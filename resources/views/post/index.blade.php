@extends('_layout.template')
@section('content')


<div class="col-md-12" style="background-color: #f5f5f5; padding: 5px; margin-bottom: 20px;">
 	{!! Form::open(['route' => ['post.store',0], 'files'=>true]) !!}
       <div class="form-group col-md-12">
	     <div class="col-md-12"> 
			{!!Form::textarea('post_text','', array('rows'=>'2','class' => 'form-control','placeholder'=>"What's on your mind ?" )) !!}
	    </div>
	  </div>
	  <div class="form-group col-md-6">
	     <div class="col-md-12"> 
			{!!Form::file('post_image','', array('class' => 'form-control')) !!}
	    </div>
	  </div>
		  <div class="form-group col-md-6">  

		     {!!Form::submit('Post', array('class' => 'btn btn-primary pull-right')) !!}

		  </div>

	{!! Form::close()!!}
</div>

    @foreach ($posts as $post)
    <div class="col-md-12" style="background-color: #f5f5f5; padding: 5px;  margin-bottom: 20px;">

        @if($post->post_text or $post->post_image)
   	           <div class="pull-left" style="color: #337ab7;margin-right:10px;font-weight: bold;font-size: 14px;">{{ $post->user }} </div>
   	 			@if($post->post_text)
   	 			<div> {{ $post->post_text }}</div>
   	 			@endif

   	 			@if($post->post_image)
   	 			<div><img src="{{ asset('upload/files/'.$post->post_image) }}" class="col-sm-12 img-responsive" style="width: 100%; max-height:150px; padding: 20px; display: block;"> </div>
   	 			@endif
				 
		@endif

<!-- ------------------------- display comment-->
   <div  style="margin-left: 30px;">
   <blockquote style="font-size:15px">
    @foreach ($post->getChardern($post->id) as $comment)

       @if($comment->post_text or $comment->post_image)
   	           <div class="pull-left" style="color: #337ab7;margin-right:10px;font-weight: bold;font-size: 14px;">{{ $comment->user }} </div>
   	 			@if($comment->post_text)
   	 			<div> {{ $comment->post_text }}</div>
   	 			@endif

   	 			@if($comment->post_image)
   	 			<div><img src="{{ asset('upload/files/'.$comment->post_image) }}" class="col-sm-12 img-responsive" style="width: 100%; max-height:150px; padding: 20px; display: block; "> </div>
   	 			@endif
				 
		@endif
    <hr style="border: 1px solid #dadada; padding: 0px ;margin: 3px;">
<!---------------------------- display replies-->
   <div  style="margin-left: 30px;">
        <blockquote style="font-size:15px">
       @foreach ($comment->getChardern($comment->id) as $reply)
        <div class="row"> 
           @if($reply->post_text or $reply->post_image)
   	           <div class="pull-left" style="color: #337ab7;margin-right:10px;font-weight: bold;font-size: 14px;">{{ $reply->user }} </div>
   	 			@if($reply->post_text)
   	 			<div> {{ $reply->post_text }}</div>
   	 			@endif

   	 			@if($reply->post_image)
   	 			<div class="col-md-12"><img src="{{ asset('upload/files/'.$reply->post_image) }}" class="col-sm-12 img-responsive" style="width: 100%; max-height:150px; padding: 20px; display: block; "> </div>
   	 			@endif
   	    </div>
				 
		@endif
         <hr style="border: 1px solid #dadada; padding: 0px ;margin: 0px;">

      @endforeach
      </blockquote>
   </div>
<!--------------------------- end replies-->

    
           <div class="col-md-12">
			 	{!! Form::open(['route' => ['post.store',$comment->id], 'files'=>true]) !!}
			       <div class="form-group col-md-12">
				     <div class="col-md-12"> 
						{!!Form::textarea('post_text','', array('rows'=>'1','class' => 'form-control','placeholder'=>"write a reply ..." )) !!}
				    </div>
				  </div>
				  <div class="form-group col-md-6">
				     <div class="col-md-12"> 
						{!!Form::file('post_image','', array('class' => 'form-control')) !!}
				    </div>
				  </div>
					  <div class="form-group col-md-6">  

					     {!!Form::submit('reply', array('class' => 'btn btn-primary pull-right btn-xs')) !!}

					  </div>

				{!! Form::close()!!}
			</div>
    @endforeach
    </blockquote>
  </div>

<!---------------------------  end comment-->






           <div class="col-md-12">
			 	{!! Form::open(['route' => ['post.store',$post->id], 'files'=>true]) !!}
			       <div class="form-group col-md-12">
				     <div class="col-md-12"> 
						{!!Form::textarea('post_text','', array('rows'=>'1','class' => 'form-control','placeholder'=>"Write a comment ..." )) !!}
				    </div>
				  </div>
				  <div class="form-group col-md-6">
				     <div class="col-md-12"> 
						{!!Form::file('post_image','', array('class' => 'form-control')) !!}
				    </div>
				  </div>
					  <div class="form-group col-md-6">  

					     {!!Form::submit('Comment', array('class' => 'btn btn-primary pull-right btn-xs')) !!}

					  </div>

				{!! Form::close()!!}
			</div>
</div>
    @endforeach


@stop 