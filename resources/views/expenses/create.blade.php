<!DOCTYPE html>
<html>
<head>
    <title>Create Expense</title>
</head>
<body>
<h1>Create New Expense</h1>

<form action="{{ route('expenses.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Expense Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" step="0.01" value="{{ old('amount') }}" required>
        @error('amount')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="category">Category:</label>
        <input type="text" id="category" name="category" value="{{ old('category') }}" required>
        @error('category')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="{{ old('date') }}" required>
        @error('date')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ old('description') }}</textarea>
        @error('description')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Save Expense</button>
</form>

<a href="{{ route('expenses.index') }}">Back to Expenses</a>
</body>
</html>
