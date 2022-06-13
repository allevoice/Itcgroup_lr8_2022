@extends('template.thermadmin')

@section('title', 'Bannners')

@section('admincontenent')
    <div class="col-md-12">
        <h2>
            Nouvelle Insertion
            <a href="{{route('listslide')}}" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-arrow-left"></i></a>
        </h2>


        @if(session()->has('sms_error'))
            <div class="alert alert-danger">
                {{ session()->get('sms_error') }}
            </div>
        @endif


        <form method="post" action="{{route('insertslide')}}">
            @csrf

            <div class="col-md-9 col-sm-8" style="background-color: #95999c">

                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="pull-right btn btn-info">Next</button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Titre</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="{{old('title')}}" name="title" placeholder="Titre De l'info bulble">
                        </div>
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Url</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="{{old('link')}}" name="link" placeholder="Titre De l'info bulble">
                        </div>
                        @error('link')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control myTextEditor" rows="3" value="{{old('description')}}" name="description" placeholder="Votre contenu"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Langue</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="EN" readonly>
                        </div>
                    </div>

                </div>

            </div>

        </form>


    </div>


    </div>
    {{--Mise a jours de background--}}




@endsection
