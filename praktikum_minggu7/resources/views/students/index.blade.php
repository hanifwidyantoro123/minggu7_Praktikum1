@extends('layouts.app')

 @section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('STUDENT DATA') }}
</div>

            <div class="card-body">
 @if (session('status'))
 <div class="alert alert-success" role="alert">
 {{ session('status') }}
 </div>
 @endif

 <table class="table table-responsive table-striped">
 <thead>
 <tr>
 <th>NIM</th>
 <th>Name</th>
 <th>Class</th>
 <th>Departement</th>
 </tr>
 </thead>
 <tbody>
 @foreach($student as $s)
 
 <tr>
 <td>{{ $s->nim }}</td>
 <td>{{ $s->name }}</td>
 <td>{{ $s->class }}</td>
 <td>{{ $s->departement }}</td>
 <td><form action="/students/{{$s->id}}" method="post">
 <a href="/students/{{$s->id}}/edit" class="btn btnwarning">Edit</a>
 
 @csrf
 @method('DELETE')
 <button type="submit" name="delete" class="btn btndanger">Delete</button>
 <a href="/students/{{$s->id}}" class="btn btn-primary">Show</a> 
</form></td>
 </tr>
 @endforeach
 </tbody>
 
 </table>
 <a href="/students/create" class="btn btn-primary">Add Data</a> 
<br><br>

 </div>
 </div>
 </div>
 </div>
</div>
@endsection
