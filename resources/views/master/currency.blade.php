@extends('app')@section('title')Currency @endsection @section('content') <section class="main-content">

<div class="content-wrap">

<div class="wrapper">

<div class="row">

<div class="col-md-12"> <section class="panel no-b">


<div class="panel-body">

<div class="table-responsive">
  <table class="striped">
          <thead>
            <tr>
                <th>No</th>
                <th>Code</th>
                <th>Name</th>
            </tr>
          </thead>

          <tbody>
            @foreach($data as $key => $row)
          <tr>
          <td>{{$key+1}}
          </td>
          <td>{{$row->code}}
          </td>
          <td>{{$row->name}}
          </td>
        </tr> @endforeach
        </tbody>
      </table>
</div>
</div> </section>
</div>
</div>
</div>
</div> <a class="exit-offscreen"></a> </section>@endsection
