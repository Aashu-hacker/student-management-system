@include('components.header');
<div class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Student Add</h5>
                        </div>
                    </div>
                    <div class="col-auto">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Online Courses</a></li>
                            <li class="breadcrumb-item" aria-current="page">Student Add</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Basic Information</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3"><label class="form-label">Student Name</label> <input type="text" name="student_name" class="form-control" id="student_name" placeholder="Enter Student Name"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3"><label class="form-label">Class Teacher</label> <select name="class_teacher_id" class="form-control" id="class_teacher_id" required>
                                            @foreach($teachers as $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                            @endforeach
                                        </select></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3"><label class="form-label">Class</label> <input type="text" name="class" class="form-control" id="class" placeholder="Enter Class" required> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3"><label class="form-label">Admission Date</label> <input type="date" name="admission_date" class="form-control" id="admission_date" required></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3"><label class="form-label">Yearly Fees</label> <input type="number" step="0.01" name="yearly_fees" class="form-control" id="yearly_fees" required></div>
                                </div>
                                <div class="col-md-12 text-end"><button class="btn btn-primary">Add Student</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>@include('components.footer');