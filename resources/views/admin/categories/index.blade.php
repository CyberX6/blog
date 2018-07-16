@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Category name
                </th>
                <th>
                    Editing
                </th>
                <th>
                    Deleting
                </th>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>
                            {{$category->name}}
                        </td>
                        <td>
                            <i class="glyphicon glyphicon-edit"></i>
                        </td>
                        <td>
                            <i class="glyphicon glyphicon-remove"></i>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop