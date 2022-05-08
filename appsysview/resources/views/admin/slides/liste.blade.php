@extends('template.thermadmin')

@section('title', 'Slide')

@section('admincontenent')
    <div class="col-md-12">
        <h2>
            Slides Shows liste
            <a href="{{route('newslide')}}" class="btn btn-md btn-primary">+</a>
        </h2>


        <!-- Advanced Tables -->
        <div class="panel panel-default">

            <span href="#" class="btn btn-sm btn-primary" title="update">fr <!--id+indice--></span>
            <span href="#" class="btn btn-sm btn-warning" title="Creer">fr <!--id+indice--></span>

            <span href="#" class="btn btn-sm btn-primary" title="update">en <!--id+indice--></span>
            <span href="#" class="btn btn-sm btn-warning" title="Creer">en <!--id+indice--></span>


            <span href="#" class="btn btn-sm btn-primary" title="update">cr <!--id+indice--></span>
            <span href="#" class="btn btn-sm btn-warning" title="Creer">cr <!--id+indice--></span>

            <span href="#" class="btn btn-sm btn-primary" title="Update">es <!--id+indice--></span>
            <span href="#" class="btn btn-sm btn-warning" title="Creer">es <!--id+indice--></span>


            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>

                        <tr>
                            <th>indice</th>
                            <th>Images</th>
                            <th>Logo</th>
                            <th>Titre</th>

                            <th class="row visible-lg">Content</th>
                            <th class="row visible-lg">Link</th>
                            <th class="row visible-lg">Status</th>
                            <th class="row visible-lg">Level</th>


                            <th></th>
                        </tr>
                        </thead>
                        <tbody>


                        @forelse ($slide as $slideshow)

                            <tr  class="odd gradeX
                            @if ($slideshow->status == NULL and $slideshow->status == 0 and empty($slideshow->status))
                                danger
                            @endif
                                ">
                                <td>{{$slideshow->langues}}</td>

                                <td class="center">
                                    @if ($slideshow->imageslide == NULL)
                                        <img src="{{asset('assets/img/slideshow/home-banner2.jpg')}}" class="img-thumbnail imgslideshowadmin">
                                    @else
                                        <img src="{{asset('assets/img/slideshow/')}}/{{$slideshow->imageslide}}" class="img-thumbnail imgslideshowadmin">
                                    @endif
                                </td>

                                <td class="center">
                                    @if ($slideshow->logoslide == NULL)
                                        <img src="{{asset('assets/img/slideshow/small-logo.png')}}" class="img-circle imgslideshowadmin">
                                    @else
                                        <img src="{{asset('assets/img/slideshow/')}}/{{$slideshow->logoslide}}" class="img-circle imgslideshowadmin">
                                    @endif
                                </td>

                                <td>{{Str::limit($slideshow->titleslide, 15)}}</td>

                                <td class="row visible-lg">
                                    {{Str::limit($slideshow->contentslide, 20)}}
                                </td>
                                <td class="row visible-lg"><a href="https://{{$slideshow->linkslide}}" target="_blank" class="btn btn-default">Contact</a></td>
                                <td class="row visible-lg">{{$slideshow->status}}</td>
                                <td class="row visible-lg">{{$slideshow->level}}</td>

                                <td>
                                    {{$slideshow->id}}

                                    <a href="#" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="{{route('editslide',$slideshow->id)}}" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>


                        @empty
                            <tr>
                                <td colspan="9"> <center>No data</center> </td>
                            </tr>

                        @endforelse

                        </tbody>
                    </table>



                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>




    </div>



@endsection
