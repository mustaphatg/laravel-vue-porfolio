@extends('layouts.page')


@section('page')

    <div class="border rounded-md border-2 border-blue-700 p-3">

        <h3 class="btn underline  btn-ghost mb-4">Edit Project</h3>

        <form enctype="multipart/form-data" action="{{route('update_project')}}" method="post" class="max-w-md flex-col justify-center items-center">

            @csrf

            <input type="hidden"  name="id" value="{{$project->id}}">

            <div class="form-control">
                <input type="text" class="input input-bordered input-primary" name="name" value="{{$project->name}}" placeholder="Project Name">
            </div>

            <div class="form-control my-5">
                <textarea name="description" rows="10" class="textarea textarea-primary" placeholder="Project Description">{{$project->description}}</textarea>
            </div>

            <div class="form-control my-5">
                <input type="url" class="input input-bordered input-primary" value="{{$project->link}}"" name="link" placeholder="Project LInk">
            </div>


            <div class="form-control my-5 w-1/2">
                <input type="submit" class="btn btn-primary btn-outline" value="Edit POject">
            </div>

        </form>

    </div>

@endSection