<div>
    <table class="table-auto" style="width: 100%;">
      <thead>
        <tr>
          <th class="px-4 py-2">ID</th>
          <th class="px-4 py-2">Nome</th>
          <th class="px-4 py-2">Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
            <tr>
            <td class="border px-4 py-1">{{ $user->id }}</td>
            <td class="border px-4 py-1">{{ $user->name }}</td>
            <td class="border px-4 py-1">{{ $user->email }}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
  
    {{ $users->links() }}
</div>