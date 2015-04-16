@extends('app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Create a New Movie</div>

					<div class="panel-body">
						
						{!! Form::open(['route' => 'movies.store']) !!}

						<div class="form-group">
							{!! Form::label('libId', 'Library ID') !!}
							{!! Form::text('libId', null, ['class' => 'form-control', 'placeholder' => '(Optional)']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('title', 'Title') !!}
							{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => '']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('edition', 'Edition Name') !!}
							{!! Form::text('edition', null, ['class' => 'form-control', 'placeholder' => '(Optional)']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('', '') !!}
							{!! Form::text('', null, ['class' => 'form-control', 'placeholder' => '']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('releasedYear', 'Released Year') !!}
							{!! Form::number('releasedYear', date('Y'), ['class' => 'form-control', 'type' => 'date']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('studios', 'Studio') !!}
							{!! Form::text('', null, ['class' => 'form-control', 'placeholder' => '']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('motionPictureRating', 'MPAA Rating') !!}
							{!! Form::select('motionPictureRating', ['G' => 'General Audiences', 'PG' => 'Parental Guidance', 'PG-13' => 'Parents Strongly Cautioned', 'R' => 'Restricted', 'NC-17' => 'NC-17', 'UR' => 'Unrated', 'NR' => 'Not Rated'], null, ['class' => 'form-control', 'placeholder' => '']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('runtime', 'Running Time') !!}
							{!! Form::number('runtime', null, ['class' => 'form-control', 'placeholder' => '']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('imdbId', 'IMDB Link') !!}
							{!! Form::url('imdbId', null, ['class' => 'form-control', 'placeholder' => '']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('wikiUrl', 'Wikipeda Link') !!}
							{!! Form::text('wikiUrl', 'http://en.wikipedia.com/wiki/', ['class' => 'form-control', 'placeholder' => '']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('format', 'Media Format') !!}
							{!! Form::text('format', 'DVD', ['class' => 'form-control', 'placeholder' => '']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('posterUrl', 'Movie Poster') !!}
							{!! Form::text('posterUrl', null, ['class' => 'form-control', 'placeholder' => '']) !!}
							{!! Form::file('posterUrl') !!}
						</div>

						<div class="form-group">
							{!! Form::submit('Create Movie', ['class' => 'btn btn-primary btn-lg']) !!}
						</div>

						{!! Form::close() !!}

					</div>
				</div>
			</div>
		</div>
	</div>

@stop