<!DOCTYPE html>
@section('content')
<html>
    <head>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

       
    </head>
    <body>
        <div class="container">
            <div class="content">

						<div class="row">
					        <div class="col-md-12">
					            @if($mobs->count())
					                <table class="table table-condensed table-striped">
					                    <thead>
					                        <tr>
					                            <th>ID</th>
					                            <th>Description</th>
					                            <th>Price</th>
					                            <th>Image</th>
					                            
					                        </tr>
					                    </thead>

					                    <tbody>
					                        @foreach($mobs as $mob)
					                            <tr>
					                                <td>{{$mob->id}}</td>
					                                <td>{{$mob->name}}</td>
					                                <td>{{$mob->price}}</td>
					                                <td><a href="{{$mob->image}}">{{$mob->image}}</a></td>
					                                
					                            </tr>
					                        @endforeach
					                    </tbody>
					                </table>
					                {!! $mobs->render() !!}
					            @else
					                <h3 class="text-center alert alert-info">Empty!</h3>
					            @endif
            <a class="btn btn-link" href="{{ route('mobiles.welcome') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
					        </div>
					    </div>
              </div>
        </div>
    </body>
</html>