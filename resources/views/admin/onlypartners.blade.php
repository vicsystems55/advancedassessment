

<div class="table-responsive">


<!-- Projects table -->
<table class="table align-items-center table-flush">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Reg Code</th>
            <th scope="col">Email</th>
            <th scope="col">Account</th>
        </tr>
    </thead>
    <tbody>

    @foreach($user_data as $user)

    <tr>
            <th scope="row">
                {{$loop->iteration}}
            </th>
            <td>
                {{$user->name}}
            </td>
            <td>
                {{$user->reg_code}}
            </td>
            <td>
                {{$user->email}}
            </td>
            <td>
                <a href="{{ route('admin.singpartner', $user->id)}}" class="btn btn-sm btn-primary shadow">view</a>
            </td>
        </tr>

    @endforeach

    </tbody>
</table>
</div>
