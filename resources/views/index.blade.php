@include('components.header');
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-xl-4 col-md-6">
                <div class="card bg-secondary-dark dashnum-card text-white overflow-hidden">
                    <span class="round small"></span>
                    <span class="round big"></span>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="avtar avtar-lg">
                                    <i class="text-white ti ti-credit-card"></i>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="btn-group">
                                    <a type="button" class="avtar bg-secondary dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><button class="dropdown-item" type="button">Import Card</button></li>
                                        <li><button class="dropdown-item" type="button">Export</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span class="text-white d-block f-34 f-w-500 my-2">1350 <i class="ti ti-arrow-up-right-circle opacity-50"></i></span>
                        <p class="mb-0 opacity-50">Total Pending Orders</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-primary-dark dashnum-card text-white overflow-hidden">
                    <span class="round small"></span>
                    <span class="round big"></span>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="avtar avtar-lg">
                                    <i class="text-white ti ti-credit-card"></i>
                                </div>
                            </div>
                            <div class="col-auto">
                                <ul class="nav nav-pills justify-content-end mb-0" id="chart-tab-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-white active" id="chart-tab-home-tab" data-bs-toggle="pill" data-bs-target="#chart-tab-home" type="button" role="tab" aria-controls="chart-tab-home" aria-selected="true">Month</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-white" id="chart-tab-profile-tab" data-bs-toggle="pill" data-bs-target="#chart-tab-profile" type="button" role="tab" aria-controls="chart-tab-profile" aria-selected="false">Year</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="chart-tab-tabContent">
                            <div class="tab-pane show active" id="chart-tab-home" role="tabpanel" aria-labelledby="chart-tab-home-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-6">
                                        <span class="text-white d-block f-34 f-w-500 my-2">$130<i class="ti ti-arrow-up-right-circle opacity-50"></i></span>
                                        <p class="mb-0 opacity-50">Total Earning</p>
                                    </div>
                                    <div class="col-6">
                                        <div id="tab-chart-1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="chart-tab-profile" role="tabpanel" aria-labelledby="chart-tab-profile-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-6">
                                        <span class="text-white d-block f-34 f-w-500 my-2">$29961 <i class="ti ti-arrow-down-right-circle opacity-50"></i></span>
                                        <p class="mb-0 opacity-50">C/W Last Year</p>
                                    </div>
                                    <div class="col-6">
                                        <div id="tab-chart-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card bg-primary-dark dashnum-card dashnum-card-small text-white overflow-hidden">
                    <span class="round bg-primary small"></span>
                    <span class="round bg-primary big"></span>
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <div class="avtar avtar-lg">
                                <i class="text-white ti ti-credit-card"></i>
                            </div>
                            <div class="ms-2">
                                <h4 class="text-white mb-1">$203k <i class="ti ti-arrow-up-right-circle opacity-50"></i></h4>
                                <p class="mb-0 opacity-50 text-sm">Net Profit</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card dashnum-card dashnum-card-small overflow-hidden">
                    <span class="round bg-warning small"></span>
                    <span class="round bg-warning big"></span>
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <div class="avtar avtar-lg bg-light-warning">
                                <i class="text-warning ti ti-credit-card"></i>
                            </div>
                            <div class="ms-2">
                                <h4 class="mb-1">$550K <i class="ti ti-arrow-up-right-circle opacity-50"></i></h4>
                                <p class="mb-0 opacity-50 text-sm">Total Revenue</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="my-4">Students</h1>
                        <a href="{{ route('students.create') }}" class="btn btn-secondary mb-3">Add Student</a>
                        <table id="studentsTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Class Teacher</th>
                                    <th>Class</th>
                                    <th>Admission Date</th>
                                    <th>Yearly Fees</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->student_name }}</td>
                                    <td>{{ $student->teacher->name }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->admission_date }}</td>
                                    <td>${{ $student->yearly_fees }}</td>
                                    <td>
                                    <a href="#" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#animateModalview{{$student->id}}"><i class="ti ti-eye f-18"></i></a>
                                        <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#animateModal{{$student->id}}"><i class="ti ti-edit-circle f-18"></i></a>
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="ti ti-trash f-18"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <div class="modal fade modal-animate anim-3d-flip-horizontal" id="animateModal{{$student->id}}" tabindex="-1" aria-modal="true" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Student Modal : Edit Information</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('students.update', $student->id) }}" method="POST">
                                                <div class="modal-body">

                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label for="student_name" class="form-label">Student Name</label>
                                                        <input type="text" name="student_name" class="form-control" id="student_name" value="{{ $student->student_name }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="class_teacher_id" class="form-label">Class Teacher</label>
                                                        <select name="class_teacher_id" class="form-control" id="class_teacher_id" required>
                                                            @foreach($teachers as $teacher)
                                                            <option value="{{ $teacher->id }}" {{ $teacher->id == $student->class_teacher_id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="class" class="form-label">Class</label>
                                                        <input type="text" name="class" class="form-control" id="class" value="{{ $student->class }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="admission_date" class="form-label">Admission Date</label>
                                                        <input type="date" name="admission_date" class="form-control" id="admission_date" value="{{ $student->admission_date }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="yearly_fees" class="form-label">Yearly Fees</label>
                                                        <input type="number" step="0.01" name="yearly_fees" class="form-control" id="yearly_fees" value="{{ $student->yearly_fees }}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button> 
                                                    <button type="submit" class="btn btn-secondary shadow-2">Update changes</button>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="modal fade modal-animate anim-3d-flip-horizontal" id="animateModalview{{$student->id}}" tabindex="-1" aria-modal="true" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Student Modal : View Information</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="" method="POST">
                                                <div class="modal-body">

                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label for="student_name" class="form-label">Student Name</label>
                                                        <input type="text" name="student_name" class="form-control" id="student_name" value="{{ $student->student_name }}" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="class_teacher_id" class="form-label">Class Teacher</label>
                                                        <select name="class_teacher_id" class="form-control" id="class_teacher_id" readonly>
                                                            @foreach($teachers as $teacher)
                                                            <option value="{{ $teacher->id }}" {{ $teacher->id == $student->class_teacher_id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="class" class="form-label">Class</label>
                                                        <input type="text" name="class" class="form-control" id="class" value="{{ $student->class }}" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="admission_date" class="form-label">Admission Date</label>
                                                        <input type="date" name="admission_date" class="form-control" id="admission_date" value="{{ $student->admission_date }}" readonly>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="yearly_fees" class="form-label">Yearly Fees</label>
                                                        <input type="number" step="0.01" name="yearly_fees" class="form-control" id="yearly_fees" value="{{ $student->yearly_fees }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a type="button" href="{{ route('home') }}" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a> 
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $students->links() }}
                    </div>
                </div>
            </div>
            
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
@include('components.footer');