<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Savings Package Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Savings Package Dashboard Content -->
                <x-savingspackage />
            </div>
        </div>
    </div>
</x-app-layout>

@props(['sources' => ['Business', 'Lottery', 'Mpesa', 'Sale', 'Allowance']])

<div class="p-6 bg-white border-b border-gray-200">
    <h3 class="text-lg font-medium text-gray-900">E-Wallet</h3>
    <div class="mt-4">
        <p class="text-sm text-gray-600">Current Balance: $<span id="wallet-balance">0.00</span></p>
    </div>
    <div class="mt-6">
        <h4 class="text-sm font-medium text-gray-700">Add Money</h4>
        <div class="mt-2 space-y-4">
            <div role="status" class="max-w-md p-4 space-y-4 border border-gray-200 divide-y divide-gray-200 rounded shadow animate-pulse dark:divide-gray-700 md:p-6 dark:border-gray-700">
                @foreach ($sources as $source)
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-800">{{ $source }}</p>
                        </div>
                        <button onclick="addMoney('{{ $source }}', 100)" class="text-sm font-medium text-blue-600 hover:text-blue-700">Add $100</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-6">
        <h4 class="text-sm font-medium text-gray-700">Deduct Money</h4>
        <div class="mt-2">
            <input type="number" id="expense-amount" class="mt-1 block w-full" placeholder="Enter amount" />
            <button onclick="deductMoney()" class="mt-2 text-sm font-medium text-red-600 hover:text-red-700">Deduct</button>
        </div>
    </div>
</div>

<script>
    let walletBalance = 0;

    function updateWalletBalance() {
        document.getElementById('wallet-balance').innerText = walletBalance.toFixed(2);
    }

    function addMoney(source, amount) {
        walletBalance += amount;
        updateWalletBalance();
        alert(`$${amount} added from ${source}`);
    }

    function deductMoney() {
        const expenseAmount = parseFloat(document.getElementById('expense-amount').value);
        if (expenseAmount > walletBalance) {
            alert('Insufficient balance');
        } else {
            walletBalance -= expenseAmount;
            updateWalletBalance();
            alert(`$${expenseAmount} deducted from your wallet`);
        }
    }
</script>
