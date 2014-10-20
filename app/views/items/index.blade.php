@extends('layouts.master')

@section('css')

.add-form {
    margin: 20px auto;
    height: 40px;
    width: 300px;
    font-size: 24px;
    text-align: center;
}

#new-item {
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

<!--     {{ Form::open(array('action' => 'ItemsController@store', 'role' => 'form', 'class' => 'form-inline')) }}
    
    {{ Form::label('new-item', 'Add an item:', array('class' => 'form-group')) }}
    {{ Form::text('new-item', null, array('class' => 'form-control')) }}

    {{ Form::submit('Add', array('class' => 'btn btn-default')) }}
    {{ Form::close() }} -->


    <div id="add-form" class="form-group">
        <form class="form-inline" role="form" method="POST" action="">
            <label for="new-item">Add an item: </label>
            <input id="new-item" class="form-control" name="new-item" type="text">
            <button class="btn btn-default" type="submit">Add</button>
        </form>
    </div> <!-- End Form -->

    <table class="table table-hover">
        <tr>
            <th>Item</th>
            <th class="actions">Actions</th>
        </tr>
        
        @foreach ($items as $item)

        <tr>
            <td>{{{$item->name}}}</td>
            <td class="actions">
                <a href="#" class="deleteItem btn btn-default btn-danger" data-itemid="{{ $item->id }}">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
            </td>
        </tr>

        @endforeach
    </table>

    <!-- Hidden Form to allow item deletion from index view -->
    {{ Form::open(array('action' => 'ItemsController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}
    {{ Form::close() }}
    <!-- End Delete Form -->

</div>

@stop

@section('bottomscript')
<script type="text/javascript">
    $(".deleteItem").click(function() {
        var itemid = $(this).data('itemid');
        $("#deleteForm").attr('action', '/items/' + itemid);
        if (confirm("Are you sure you want to delete this item?")) {
            $('#deleteForm').submit();
        }
    });
</script>
@stop