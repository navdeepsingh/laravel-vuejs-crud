@extends('layouts.master')

@section('content')



        <div id="create-record-container" v-show="showForm">

        @include('crud.create')

        </div>

        <div class="alert alert-success" transition="success" v-if="success">New Crud added successfully.</div>

        <hr>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Crud Level</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            <tr v-for="value in crud">
                <td>@{{ value.id }}</td>
                <td>@{{ value.name }}</td>
                <td>@{{ value.email }}</td>
                <td>@{{ value.crud_level }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <button class="btn btn-small btn-info" @click="ShowRecord(value.id)">Edit this Item</button>
                    <button class="btn btn-small btn-danger" @click="RemoveRecord(value.id)">Remove this Item</button>
                </td>
            </tr>
            </tbody>
        </table>

@stop
