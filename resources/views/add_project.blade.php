@extends('layouts.page')


@section('page')

    <div class="border rounded-md border-2 border-blue-700 p-3">

        <h3 class="btn underline  btn-ghost mb-4">Add Project</h3>

        <form enctype="multipart/form-data" action="{{route('store_project')}}" method="post" class="max-w-md flex-col justify-center items-center">

            @csrf

            <div class="form-control">
                <input type="text" class="input input-bordered input-primary" name="name" placeholder="Project Name">
            </div>

            <div class="form-control my-5">
                <textarea rows="10" name="description" class="textarea textarea-primary" placeholder="Project Description"></textarea>
            </div>

            <div class="form-control my-5">
                <input type="url" class="input input-bordered input-primary" name="link" placeholder="Project LInk">
            </div>

            <div class="form-control my-5">
                <input name="image" type="file" class="file-input file-input-bordered file-input-primary w-full max-w-xs" />
            </div>

            <div class="form-control my-5">
                <input type="submit" class="btn btn-primary btn-outline" value="Add">
            </div>

        </form>

    </div>

@endSection