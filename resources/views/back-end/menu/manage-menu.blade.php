@extends('back-end.master')
@section('title')
E-commarce
@endsection
@section('appUser')
active
@endsection
@section('content')

<section role="main" class="content-body">
    <header class="page-header page-header-left-breadcrumb">
        <div class="right-wrapper">
            <ol class="breadcrumbs">
                <li>
                <a href="{{route('/')}}">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Menu</span></li>
                <li><span>Manage Menu</span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    
        <h2>Manage Menu</h2>
    </header>
    <div class="row" style="padding-bottom: 10px">
    <div class="col-md-12" onclick="btnToggleFunction()" style="padding-bottom: 5px;">
        <a href="javascript:void(0);"  style="padding: 2px 6px;font-size: 12px;" class="btn btn-info float-right">
        Add New</a>
    </div>
    <div class="col-md-12">

            @if(Session::get('warning'))
            <div class="alert alert-warning" id="warning">
                <h6 class=" text-center text-warning"> {{ Session::get('warning') }}</h6>
            </div>
            @endif       

            @if(Session::get('message'))
            <div class="alert alert-success" id="message">
                <h6 class=" text-center text-success"> {{ Session::get('message') }}</h6>
            </div>
            @endif

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

    </div>
    <div class="col-md-12" id="IdForTaggle" style="display:none">
            <div class="card-body">
            <form action="{{route('add-new-menu')}}" enctype="multipart/form-data" class="form-horizontal " method="post">
                        @csrf
                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2">Menu Name</label>
                                <div class="col-lg-6">
                                    <input type="text" name="menu_name" class="form-control" id="inputDefault">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2">Status</label>
                                    <div class="col-lg-6" style="padding-top: 7px;">
                                    <label >
                                    <input type="radio" name="status" value="1" checked="">
                                        Active
                                        </label>
                                        <label >
                                            <input type="radio" name="status" value="0">
                                            Deactive
                                        </label>
                                    </div>
                                </div>
                            <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2"></label>
                                    <div class="col-lg-6 text-right">
                                        <input type="submit" class="btn btn-info" value="Save" name="btn" style="padding: 2px 6px;font-size: 12px;">
                                    </div>
                            </div>
        
                        </form>





            </div>
    </div>
</div>
    <!-- start: page -->
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                </div>
        
                <h2 class="card-title">Default</h2>
            </header>
            <div class="card-body">
                {{-- <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <button id="addToTable" class="btn btn-primary">Add <i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div> --}}
                <table class="table table-borderedles table-striped mb-0" id="datatable-default">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($obj_menu as $menu)
                           
                        <tr data-item-id="{{$menu->id}}">
                        <td></td>
                        <td>{{$menu->menu_name}}</td>
                        <td>{{$menu->status}}</td>
                            
                            <td class="actions">
                                
                                {{-- <a href="#" class="hidden on-editing save-row"><i class="fas fa-save"></i></a> --}}
                                {{-- <a href="#" class="hidden on-editing cancel-row"><i class="fas fa-times"></i></a> --}}
                                <a href="javascript:void(0);" class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                                <a href="javascript:void(0);"data-toggle="modal"
                                  data-target="#dialog-{{$menu->id}}"  class=""><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>



                        <div class="modal fade" id="dialog-{{$menu->id}}" role="dialog" tabIndex="-1">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <section class="card">
                                            <header class="card-header">
                                                <h2 class="card-title">Are you sure?</h2>
                                            </header>
                                            <div class="card-body">
                                                <div class="modal-wrapper">
                                                    <div class="modal-text">
                                                        <p>Are you sure that you want to delete this row?</p>
                                                        <a href="{{route('delete-menu',['id'=>$menu->id])}}" class="btn btn-info">Confirm</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <footer class="card-footer">
                                                <div class="row">
                                                    <div class="col-md-12 text-right">
                                                    <a href="{{route('delete-menu',['id'=>$menu->id])}}" class="btn btn-info">Confirm</a>
                                                        {{-- <button id="dialogConfirm" class="btn btn-primary">Confirm</button> --}}
                                                        {{-- <button id="dialogCancel" class="btn btn-default">Cancel</button> --}}
                                                    </div>
                                                </div>
                                            </footer>
                                        </section>

                                </div>
                            </div>

                    {{-- <div id="dialog-{{$menu->id}}" role="dialog" class="modal-block mfp-hide">
                                <section class="card">
                                    <header class="card-header">
                                        <h2 class="card-title">Are you sure?</h2>
                                    </header>
                                    <div class="card-body">
                                        <div class="modal-wrapper">
                                            <div class="modal-text">
                                                <p>Are you sure that you want to delete this row?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <footer class="card-footer">
                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                                <button id="dialogConfirm" class="btn btn-primary">Confirm</button>
                                                <button id="dialogCancel" class="btn btn-default">Cancel</button>
                                            </div>
                                        </div>
                                    </footer>
                                </section>
                            </div> --}}

                        @endforeach
        
                       
                   
                    </tbody>
                </table>
            </div>
        </section>
    <!-- end: page -->
</section>




@endsection