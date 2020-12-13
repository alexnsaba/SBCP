@extends('dashboard.master')

@section('title')
View patient
@endsection


@section('content')


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
    <td>{{ $patient->location->name }}</td>
    <td>{{ $patient->Phone_number }}</td>
    <td>{{ $patient->Email }}</td>
    <td><a class="fa fa-pencil" href = 'edit/{{ $patient->id }}' style= "color: dodgerblue; font-size:14pt"></a></td>
    <td><a class="fa fa-trash" href = 'delete/{{ $patient->id }}' style= "color: red; font-size:14pt"></a></td>
</tr>
@endforeach
</table>
</div>
</div>
</div>

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

@endsection
