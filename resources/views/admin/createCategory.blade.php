@extends('layouts.admin')

<!-- Sidebar -->
@section('sidebar')
@parent

@endsection
<!-- End of Sidebar -->

@section('content')
<div class="container-fluid">
    <form class="well form-horizontal" action="{{ route('category.store') }}" method="POST" id="contact_form">
        @csrf
        {{-- {{ method_field('GET') }} --}}

        <fieldset>
            <!-- Form Name -->
            <legend>Category Creation</legend>
            @include('common.checkSave')

            <!-- Text Name input-->

            <div class="form-group">
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fab fa-avianex"></i></span>
                        <input name="name" required placeholder="Tour Name..." class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text area -->
            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Success <i
                    class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you
                shortly.</div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-warning">Send <span
                            class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>

        </fieldset>
    </form>
</div>

@endsection

<!-- /.container -->
