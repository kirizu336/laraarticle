@extends('layouts.dashboard')

@section('content')
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Home</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        @if(Session::get('Error'))
          <div class="row">
              <div class="alert alert-danger col-12 text-center" role="alert">
                {{ Session::get('Error') }}
              </div>
          </div>
        @endif
        <div class="row">
            <div class="card col-lg-8 offset-lg-2 col-sm-12 col-xs-12">
              <div class="card-block">
                <h4 class="card-title">Edit Tag</h4>
                <form action="{{ route('admin.tag.storeEdit', ['id' => $tag->id]) }}" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label class="form-control-label" for="formGroupExampleInput">Nama Tag</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $tag->tag }}" name="tag" required>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Edit">
                    <input type="reset" class="btn btn-danger pull-right" value="Batal">
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
