@component('website.component.navbar')
@endcomponent
<br><br><br><br><br>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">SN</th>
                                        <th>Order Id</th>
                                        <th>Amount</th> 
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employees as $key => $employee)
                                    <tr>
                                        {{-- <td>{{ $key+1 }}</td>
                                        <td>{{ ucfirst($employee->employee_no) }}</td>
                                        <td>{{ ucfirst($employee->initials) }} {{ ucfirst($employee->last_name) }}</td>
                                        <td>{{ $employee->department_name }}</td>
                                        <td>{{ $employee->designation_name }}</td>
 --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

@component('website.component.footer')
@endcomponent
