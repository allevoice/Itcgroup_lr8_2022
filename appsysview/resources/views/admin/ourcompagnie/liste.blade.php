@extends('template.thermadmin')

@section('title', 'Our Compagnie')

@section('admincontenent')
    <div class="col-md-12">
        <h2>
            Shows liste
            <a href="{{route('newourcmg')}}" class="btn btn-sm btn-primary">+</a>
            <a href="{{route('ourcmglstdel')}}" class="btn btn-xs btn-danger">Del</a>
        </h2>


        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">

                    {{--{{ $data->links('pagination::bootstrap-4') }}--}}

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th >Image</th>
                            <th>Link</th>
                            <th class="row visible-lg">Description</th>
                            <th class="row visible-lg">Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>


                        @forelse ($data as $show)
                            <tr  class="odd gradeX">

                                <td class="center" width="100">
                                        <img src="{{asset('assets/img/about/')}}/{{$show->backimg}}" class="img-thumbnail" width="100">
                                </td>

                                <td width="100">{{$show->link}}</td>

                                <td class="row visible-lg"  >
                                    {!! $show->description !!}
                                </td>
                                <td class="row visible-lg" >{{statuscmd($show->status)}}</td>

                                <td width="100">
                                    <form action="{{route('delourcmg',$show->id)}}" method="post" class='form-inline'>
                                        @csrf
                                        @method('DELETE')

                                        <a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal_view_{{$show->id}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                        <a href="{{route('editourcmg',$show->id)}}" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-pencil"></i></a>

                                        <script>
                                            function ConfirmDeletebutton()
                                            {
                                                return confirm("Are you sure you want to delete?");
                                            }
                                        </script>
                                        <button Onclick="return ConfirmDeletebutton();" type="submit" name="actiondelete" class=" form-group btn btn-danger btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>



                            <div class="modal fade" id="myModal_view_{{$show->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Visual info</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <img src="{{asset('assets/img/about/')}}/{{$show->backimg}}" class="img-thumbnail" width="200">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">

                                                    <div class="form-horizontal">

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Link</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{$show->link}}" readonly>
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Description</label>
                                                            <div class="col-sm-9">
                                                                {!! $show->description !!}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-3 control-label">Status</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{statuscmd($show->status)}}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">User</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{$show->iduser}}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Inscrit</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{$show->created_at}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Update</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" value="{{$show->updated_at}}" readonly>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        @empty
                            <tr>
                                <td colspan="9"> <center><a href="{{route('addstourcmg')}}">Add defalut teste Data</a></center> </td>
                            </tr>

                        @endforelse

                        </tbody>
                    </table>


                    {{--{{ $data->links('pagination::bootstrap-4') }}--}}




                    </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>




    </div>



@endsection
