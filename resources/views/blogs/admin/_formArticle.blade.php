<div class="form-group {{ $errors->has('name') ? ' has-error':'' }}">
	{!! csrf_field() !!}
	<div class="col-md-12">
		{!! Form::label('post_title', 'Title', ['class'=>'']) !!}
		{!! Form::text('post_title', null, ['class'=>'form-control','placeholder'=>'Title','id'=>'title']) !!}
		{!! $errors->first('post_title','<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group {{ $errors->has('tags') ? ' has-error':'' }}">
	<div class="col-md-12">
		{!! Form::label('tags', 'Tags', ['class'=>'']) !!}
		{!! Form::select('tags[]', [''=>'']+App\Tags::lists('name','id')->all(), null, [ 'class'=>'form-control chosen-select', 'multiple']) !!}
		{{-- {!! Form::select('tags', ['1' => 'Programing', '2' => 'HTML', '3' => 'Css', '4' => 'Javascript'], null, ['class' => 'form-control chosen-select', 'placeholder' => '', 'multiple' => true]) !!} --}}
		{!! $errors->first('tags','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('post_image') ? ' has-error' : '' }}">
  <div class="col-md-12">
	{!! Form::label('post_image', 'Image', ['class'=>'']) !!}
    {!! Form::file('post_image') !!}
    @if (isset($post) && $post->post_image)
      <p>
      {!! Html::image(asset('img/cover/'.$post->post_image), null, ['class'=>'thumbnail img-rounded']) !!}
      </p>
    @endif
    {!! $errors->first('post_image', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group {{ $errors->has('content') ? ' has-error':'' }}">
	<div class="col-md-12">
		{!! Form::label('post_content', 'Content', ['class'=>'']) !!}
		{!! Form::textarea('post_content', null, ['class' => 'summernote', 'placeholder' => 'article']) !!}
	    {!! $errors->first('post_content','<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-12">
    	{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
  	</div>
</div>