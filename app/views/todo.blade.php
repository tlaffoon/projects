@extends('layouts.master')

@section('css')

.add-form {
    margin: 20px auto;
    height: 40px;
    width: 300px;
    font-size: 24px;
    text-align: center;
}

#item {
    width: 91%;
}

.actions {
    width: 20%;
    text-align: right;
}

@stop

@section('content')
    


<div class="add-form img-rounded bordered">To-Do List Web App</div>

<div class="col-md-12"> 
    <div id="add-form" class="form-group input-append">
        <form class="form-inline" role="form" method="POST" action="">
            <label for="add_item">Add an item: </label>
            <div class="form-horizontal">
            <input id="item" class="form-control" name="item" type="text">
            <button id="btn1" class="btn btn-default" type="submit">Add</button>
            </div>
        </form>
    </div> <!-- End Form -->

    <table class="table table-hover">
        <tr>
            <th>Item</th>
            <th class="actions">Actions</th>
        </tr>
        <tr>
            <td>Sample Item</td>
            <td class="actions">actions...</td>
        </tr>
    </table>

</div>

@stop

@section('bottomscript')

@stop