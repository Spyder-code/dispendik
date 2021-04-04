<div class="table-responsive">
    <table class="table" id="institutionals-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Npwp</th>
        <th>File</th>
        <th>Active</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($institutionals as $institutional)
            <tr>
                       <td>{{ $institutional->name }}</td>
            <td>{{ $institutional->phone }}</td>
            <td>{{ $institutional->address }}</td>
            <td>{{ $institutional->npwp }}</td>
            <td>{{ $institutional->file }}</td>
            <td>{{ $institutional->active }}</td>
            <td>{{ $institutional->status }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['institutionals.destroy', $institutional->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('institutionals.show', [$institutional->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('institutionals.edit', [$institutional->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
