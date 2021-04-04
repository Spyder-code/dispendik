<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $book->title }}</p>
</div>

<!-- Author Field -->
<div class="form-group">
    {!! Form::label('author', 'Author:') !!}
    <p>{{ $book->author }}</p>
</div>

<!-- Publication Field -->
<div class="form-group">
    {!! Form::label('publication', 'Publication:') !!}
    <p>{{ $book->publication }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $book->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $book->updated_at }}</p>
</div>

