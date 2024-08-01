<!DOCTYPE html>
<html>
<head>
    <title>Expenses List</title>
</head>
<body>
<h1>Expenses</h1>

<a href="{{ route('expenses.create') }}">Add New Expense</a>

<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Amount</th>
        <th>Category</th>
        <th>Date</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($expenses as $expense)
        <tr>
            <td>{{ $expense->name }}</td>
            <td>{{ $expense->amount }}</td>
            <td>{{ $expense->category }}</td>
            <td>{{ $expense->date }}</td>
            <td>{{ $expense->description }}</td>
            <td>
                <a href="{{ route('expenses.show', $expense->id) }}">View</a>
                <a href="{{ route('expenses.edit', $expense->id) }}">Edit</a>
                <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="7">No expenses found</td>
        </tr>
    @endforelse
    </tbody>
</table>

<!-- Pagination Links -->
{{ $expenses->links() }}
</body>
</html>
