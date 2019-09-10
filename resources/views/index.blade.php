@extends('layout.main')
@section('content')
                                <div class="page-wrapper">

                                    <div class="page-body">
                                      <div class="row">



											<!-- tabs card start -->
                                            <div class="col-sm-12">
                                                <div class="card tabs-card">
                                                    <div class="card-block p-0">
                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs md-tabs" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#home3" role="tab"><i class="fa fa-users"></i>Lecturers</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#profile3" role="tab"><i class="fa fa-users"></i>Students</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#messages3" role="tab"><i class="fa fa-book"></i>Courses</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                        </ul>

                                                        <!-- Tab panes -->
                                                        <div class="tab-content card-block">
                                                            <div class="tab-pane active" id="home3" role="tabpanel">

                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>First Name</th>
                                                                                <th>Last Name</th>
                                                                                <th>Matricule</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php if(isset($lecturers)): ?>
                                                                                @foreach($lecturers as $lecturer)
                                                                                    <tr>
                                                                                        <td><?= $lecturer->fN ?></td>
                                                                                        <td><?= $lecturer->lN ?></td>
                                                                                        <td><?= $lecturer->matricule ?></td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            <?php endif; ?>
                                                                            </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                            <div class="tab-pane" id="profile3" role="tabpanel">

                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Matricule</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> </td>
                                                                            <td> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> </td>
                                                                            <td> </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                            <div class="tab-pane" id="messages3" role="tabpanel">

                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Code</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> </td>
                                                                            <td> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> </td>
                                                                            <td> </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- tabs card end -->

                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>

                    @endsection
