@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div>
        <h2 class="text-white">CRUD FOR TASK</h2>
        </div>
    </div>
    <div>
        <a href="" class="btn btn-primary">Create Task </a>
    </div>
    <div class="col-12 mt-4">
    <table class=table table-bordered text-white">  
    <tr class="text-secondary">
        <th>Task</th>
        <th>Description</th>
        <th>Due Date</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    <tr>
        <id class="fw-bold">Study Laravel</id>
        <td>Study Laravel for 2 hours</td>
        <td>2024/02/16</td>
        <td>
            <span class="badge bg-warning fs-6">
                Pending
            </span>
        </td>
        <td>
            <a href="" class="btn btn-warning">Edit </a>

            <form action="" method="POST" class="d-line">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
</table>
</div>
</div>

@endsection