@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!--Jqery ajax cdn -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      

        <!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Add Gallary Videos</h4>
                 <a href=" {{ route('managevideos.view') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View Gallery Videos </a>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('managevideos.store') }} " enctype="multipart/form-data" > <!--form-->
                        @csrf  
                         <div class="row">
                           <div class="col-12">	


                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Video Name </h5>
                                        <div class="controls">
                                            <input type="text" name="video_name"  class="form-control"   aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>
                            <!--row Ended here-->
                           </div>
                         </div>


                              <!--row Stared here-->
                            <div class="row">

                                <!--col-6 stared here-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {{-- <label class="col-form-label col-lg-2">Custom BS file input</label> --}}
                                        <div class="col-md-12">
                                            <h5>Choose Video </h5>
                                            <div class="custom-file">
                                                <input type="file" accept="video/*" name="gallery_video"  class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    
                                
                                    <!--image display ended here-->

                                </div><!--col-6 Ended here-->                                
                            </div>
                            <!--row Ended here-->
                           
                           <br><br>
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                           </div>
                       </form><!--form-->
   
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>
           <!-- /.content -->

   
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection
