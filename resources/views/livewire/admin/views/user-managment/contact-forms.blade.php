<div>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Contacts Send by users</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse($allForms as $form)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{ $form->name }}</td>
                                        <td>{{ $form->email }}</td>
                                        <td>{{ $form->subject }}</td>
                                        <td>{{ $form->message }}</td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{$allForms->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
