<!DOCTYPE html>
<html>
<head>
    <title>Expense Details</title>
</head>
<body>
<h1>Expense Details</h1>

<p><strong>Name:</strong> {{ $expense->name }}</p>
<p><strong>Amount:</strong> {{ $expense->amount }}</p>
<p><strong>Category:</strong> {{ $expense->category }}</p>
<p><strong>Date:</strong> {{ $expense->date }}</p>
<p><strong>Description:</strong> {{ $expense->description }}</p>

<a href="{{ route('expenses.index') }}">Back to List</a>
<a href="{{ route('expenses.edit', $expense->id) }}">Edit</a>
<form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
</body>
</html>
