<!-- Title Form Input -->
<div class="form-group">
    {!! Form::label('title','Title :') !!}
    {!! Form::text('title', null, ['class' => 'form-control'] ) !!}
</div>

<!-- Body Form Input -->
<div class="form-group">
    {!! Form::label('body','Body :') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control'] ) !!}
</div>

<!-- Published_At Form Input -->
<div class="form-group">
    {!! Form::label('published_at','Publish On :') !!}
    {!! Form::input('date', 'published_at', $article->published_at->format('Y-m-d'), ['class' => 'form-control'] ) !!}
</div>

<!-- Tags Form Input -->
<div class="form-group">
    {!! Form::label('tag_list','Tags :') !!}
    {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple'] ) !!}
</div>

<!-- Add Article Form Input -->
<div class="form-group">
    {!! Form::submit($submitBtn, ['class' => 'btn btn-primary form-control'] ) !!}
</div>

@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder: "Choose a tag",
            tags: true
        });
    </script>
@endsection