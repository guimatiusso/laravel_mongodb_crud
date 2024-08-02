<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses List</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-center">Expenses</h1>

    <div class="flex justify-end mb-4">
        <a href="{{ route('expenses.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add New Expense</a>
    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="w-full bg-white text-center">
            <thead>
            <tr>
                <th class="w-1/6 px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="w-1/6 px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                <th class="w-1/6 px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                <th class="w-1/6 px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="w-1/6 px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                <th class="w-1/6 px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($expenses as $expense)
                <tr>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $expense->name }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $expense->amount }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $expense->category }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $expense->formatted_date }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $expense->description }}</td>
                    <td class="px-4 py-2 text-sm">
                        <div class="flex space-x-2">
                            <a href="{{ route('expenses.show', $expense->id) }}" class="bg-success text-gray-700 px-3 py-1 rounded hover:bg-green-600">View</a>
                            <a href="{{ route('expenses.edit', $expense->id) }}" class="bg-yellow-500 text-gray-700 px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-gray-700 px-3 py-1 rounded hover:bg-red-600">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-4 py-2 text-center text-gray-500">No expenses found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $expenses->links('vendor.pagination.simple-tailwind') }}
    </div>
</div>
</body>
</html>
