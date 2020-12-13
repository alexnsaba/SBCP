@extends('dashboard.master')
@section('title')
View patient
@endsection

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../files/assets/css/pages.css">
</head>
<body>
@section('content')


<div class="card">
<div class="card-header">
<center><h3>Patient Details</h3></center>
</div>
@include('message')
<div class="card-block">
<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Location</th>
<th>Phone Number</th>
<th>Email</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
@foreach ($patients as $patient)
<tr>
<td>{{ $patient->id }}</td>
<td>{{ $patient->Name }}</td>
<td>{{ $patient->Location }}</td>
<td>{{ $patient->Phone_number }}</td>
<td>{{ $patient->Email }}</td>
<td>
<a class="fa fa-pencil" href = 'edit/{{ $patient->id }}' style= "color: green; font-size:14pt"></a>
</td>

<td>
<!-- Button trigger modal -->
<form action="{{ url('delete/'.$patient->id)}}">
<i aria-hidden="true" style= "color: red; font-size:14pt" class="fa fa-trash" data-toggle="modal" data-target="#exampleModal" ></i>
<!-- Modal for the delete -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Delete patient</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="delete" method="POST" id="deleteForm">
      <div class="modal-body">
        <center style= "color: green; font-size:14pt">Are you sure you want to delete <b style="color:black">{{ $patient->Name }}</b>?</center>
        <center style= "color: green; font-size:14pt">This action cannot be undone !!</center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<a class="btn btn-danger" href="{{ url('delete/'.$patient->id)}}">Delete</a>-->
        <input type="submit" class="btn btn-primary">
      </div>
      <form>
    </div>
  </div>
</div>
</td>

</tr>
@endforeach
</tfoot>
</table>
</div>
</div>
</div>






</div>

</div>
</div>


</div>
</div>

@endsection
<!--Start of datatable scripts-->
<script src="../files/assets/pages/waves/js/waves.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>

<script type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="../files/assets/pages/waves/js/waves.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>

<script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>
<script src="../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>
<script src="../files/assets/pages/data-table/js/jszip.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>
<script src="../files/assets/pages/data-table/js/pdfmake.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>
<script src="../files/assets/pages/data-table/js/vfs_fonts.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.print.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>
<script src="../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>
<script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>
<script src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>

<script src="../files/assets/pages/data-table/js/data-table-custom.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>
<script src="../files/assets/js/pcoded.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js" type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript"></script>
<script type="3dcfa1cc3e23b5ff9cd40f5d-text/javascript" src="../files/assets/js/script.js"></script>

<script src="../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="3dcfa1cc3e23b5ff9cd40f5d-|49" defer=""></script>
<!--End of datatable scripts-->
