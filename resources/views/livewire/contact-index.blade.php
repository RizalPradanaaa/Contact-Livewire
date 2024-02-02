<div>
    <livewire:contact-create :contacts="$contacts"></livewire:contact-create>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->phone }}</td>
            <td>
                <button class="btn btn-info text-white">Update</button>
                <button class="btn btn-danger">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
