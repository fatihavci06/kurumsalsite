@extends('back.layouts.master')
        <!-- End of Sidebar -->
@section('content')
@section('title','Anasayfa')        <!-- Content Wrapper -->


                        <!-- Nav Item - Alerts -->
                        

                   
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Hizmetlerimiz</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="content col-lg-10">
                        
                <table id="example" class="table table-striped table-bordered col-lg-12" style="width:100%">
        <thead>
           
            <tr>
                <th>Id</th>
                <th>Başlık</th>
                <th>Açıklama</th>
                <th>İşlem</th>
                
            </tr>
            
        </thead>
        <tbody>
             @foreach($sss as $h)
            <tr>
                <td>{{$h->id}}</td>
                <td>{{$h->soru}}</td>
                <td>{!!$h->cevap!!}</td>
                <td>
                 
                    <a onclick="silmedenSor('{{route('admin.sss.sil',$h->id)}}');return false"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    &nbsp&nbsp
                    <a href="{{route('admin.sss.guncelle',$h->id)}}"><i class="fas fa-edit" aria-hidden="true"></i></a>
                </td>
               
            </tr>
            @endforeach
        
           
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Başlık</th>
                <th>Açıklama</th>
                <th>İşlem</th>
            </tr>
        </tfoot>
    </table>
                    </div>

                    <!-- Content Row -->

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection