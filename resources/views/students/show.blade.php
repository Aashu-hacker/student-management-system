@extends('layouts.app')

@section('content')
    <h1>Student Details</h1>
    <div class="mb-3">
        <label for="student_name" class="form-label">Student Name</label>
        <input type="text" name="student_name" class="form-control" id="student_name" value="{{ $student->student_name }}" readonly>
    </div>
    <div class="mb-3">
        <label for="class_teacher_id" class="form-label">Class Teacher</label>
        <input type="text" name="class_teacher_id" class="form-control" id="class_teacher_id" value="{{ $student->teacher->name }}" readonly>
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
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
@endsection
