@extends('template.thermadmin')

@section('title', 'Founder')

@section('admincontenent')
    <div class="col-md-12">
        <h2>
            New Insert
            <a href="{{route('listfounder')}}" class="btn btn-md btn-primary"><i class="glyphicon glyphicon-arrow-left"></i></a>
        </h2>




            <div class="col-md-10 col-sm-8">

                <form method="post" action="{{route('insertfounder')}}">
                    @csrf
                    <div class="form-horizontal col-sm-12">
                        <div class="form-group @error('title') is-invalid @enderror">
                            <label for="inputEmail3" class="col-sm-3 control-label">Titre</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Titre De l'info bulble">
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group @error('link') is-invalid @enderror">
                            <label for="inputEmail3" class="col-sm-3 control-label">Link</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="link" value="{{old('link')}}" placeholder="link De l'info bulble">
                                @error('link')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group @error('description') is-invalid @enderror">
                            <label for="inputEmail3" class="col-sm-3 control-label">Contenue</label>
                            <div class="col-sm-9">
                                <textarea class="form-control myTextEditor"  rows="3" name="description" placeholder="Votre contenu" >{{old('description')}}</textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group @error('linkv') is-invalid @enderror">
                            <label for="inputEmail3" class="col-sm-3 control-label">Langues</label>
                            <div class="col-sm-9">
                                <label>
                                    <span class="btn-info">en</span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <div class="col-xs-6">
                                <a href="{{route('listfounder')}}" class="btn btn-danger" type="button">Retour</a>
                            </div>
                            <div class="col-xs-6">
                                <label>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </label>
                            </div>
                        </div>

                    </div>

                </form>


            </div>
    </div>






@endsection
