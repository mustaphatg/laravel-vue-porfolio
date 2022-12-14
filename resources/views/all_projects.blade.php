@extends('layouts.page')

@section('page')

<div>

    <ul class="menu menu-horizontal my-5">
        <li class="underline"><a href="">All projects</a></li>
        <li><a href="{{route('add_project')}}">Create Project</a></li>
    </ul>

    <div class="flex justify-between flex-wrap">

        @foreach($projects as $project)

        <div class="project_card card w-full  my-5 bg-base-100 shadow-md border border-2 border-blue-700">
            <figure><img src="/storage/{{$project->image}}" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">{{$project->name}}</h2>
                <p>{{$project->description}}</p>
                <div class="card-actions justify-end">
                    <a href="{{route('delete_project', ['id' => $project->id])}}"
                        class="btn btn-sm bg-red-600 border-none hover:bg-red-500 text-white">Delete</a>
                    <a href="{{route('edit_project', ['id' => $project->id])}}"
                        class="btn btn-sm btn-primary text-white">Edit</a>

                </div>
            </div>
        </div>


        @endforeach

    </div>
</div>

@endSection


@section('css')
<style>
    @media only screen and (min-width: 1024px) {
        .project_card {
            flex-shrink: 0;
            flex-basis: 30%;
        }

    }
</style>
@endSection