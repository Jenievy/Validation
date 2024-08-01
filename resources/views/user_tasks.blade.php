@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Task Form') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ url('user_task') }}" method="POST">
                        @csrf
                        <div class="row mb-3 mx-3">
                            <label for="task_name" class="form-label p-0">Task Name:</label>
                            <input type="text" id="name" name="task_name" class="form-control @error('task_name') is-invalid @enderror" value="{{ old('task_name') }}" />
                            @error('task_name')
                                <div class="invalid-feedback p-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3 mx-3">
                            <label for="status" class="form-label p-0">Status:</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                <option value="">--</option>
                                <option value="Pending">Pending</option>
                                <option value="On Process">On Process</option>
                                <option value="Completed">Completed</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback p-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3 mx-3">
                            <label for="description" class="form-label p-0">Description:</label>
                            <textarea name="description" id="description" rows="5" style="width: 100%" class="form-control @error('description') is-invalid @enderror"></textarea>
                            @error('description')
                                <div class="invalid-feedback p-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3 mx-3">
                            <label for="deadline" class="form-label p-0">Deadline:</label>
                            <input type="date" id="deadline" name="deadline" class="form-control @error('deadline') is-invalid @enderror" value="{{ old('deadline') }}" />
                            @error('deadline')
                                <div class="invalid-feedback p-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3 mx-2">
                            <div class="col-6">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
