
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 leading-tight">
                    {{ __('Expense Dashboard') }}
                </h3>

                <!-- Expense Form -->
                {{-- <form action="{{ route('expenses.store') }}" method="POST"> --}}
                    @csrf
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">

                            <!-- Expense Date -->
                            <div class="col-span-6 sm:col-span-3">
                                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                                <input type="date" name="date" id="date" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <!-- Expense Amount -->
                            <div class="col-span-6 sm:col-span-3">
                                <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                                <input type="number" name="amount" id="amount" step="0.01" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <!-- Expense Category -->
                            <div class="col-span-6 sm:col-span-3">
                                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                                <select id="category" name="category" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <option value="food">Food</option>
                                    <option value="transportation">Transportation</option>
                                    <option value="utilities">Utilities</option>
                                    <option value="entertainment">Entertainment</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <!-- Expense Description -->
                            <div class="col-span-6 sm:col-span-6">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <input type="text" name="description" id="description" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Description of the expense">
                            </div>
                        </div>
                    </div>

                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save Expense
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

