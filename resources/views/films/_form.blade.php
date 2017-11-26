<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description') !!}
</div>
<div class="form-group">
    {!! Form::label('release_date', 'Release Date:') !!}
    {!! Form::text('release_date') !!}
</div>
<div class="form-group">
    {!! Form::label('rating', 'Rating:') !!}
    {!! Form::text('rating') !!}
</div>
<div class="form-group">
    {!! Form::label('ticket_price', 'Ticket Price:') !!}
    {!! Form::text('ticket_price') !!}
</div>
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country') !!}
</div>
<div class="form-group">
    {!! Form::label('genre', 'Genre:') !!}
    {!! Form::text('genre') !!}
</div>
<div class="form-group">
    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::file('photo', null) !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>