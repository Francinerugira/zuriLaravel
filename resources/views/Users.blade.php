 <table >
                            <thead>
                                <tr style="background-color:#e9ecef47; font-size:15px;" class="text-center">
                                <th scope="col">Name</th>
                                <th scope="col">PhoneNumber</th>
                                <th scope="col">Email </th>
                                <th scope="col">Edit </th>
                                <th scope="col">Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr style="font-size:14px;" class="text-center">
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a class="btn btn-success" href="edit-user/{{ $user->id  }}">
                                                    {{ __('Edit User') }}
                                                </a>

                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="delete-user/{{ $user->id  }}">
                                                    {{ __('Delete User') }}
                                                </a>

                                    </td>
                                    </tr>


                                @endforeach

                            </tbody>
                        </table>
