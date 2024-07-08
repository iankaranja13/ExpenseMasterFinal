<!-- resources/views/savingsblade.blade.php -->


@section('content')
<div class="savings-package">
    <div class="ewallet">
        <h2>E-Wallet</h2>
        <div class="income-categories">
            <h3>Income Categories</h3>
            <ul>
                <li>M-Pesa</li>
                <li>Lottery</li>
                <li>Business Allowance</li>
                <li>Sale</li>
            </ul>
        </div>
        <!-- Display E-Wallet Balance -->
        <div class="ewallet-balance">
            <p>E-Wallet Balance: $<span id="ewalletBalance">{{ $user->ewallet_balance }}</span></p>
        </div>
    </div>
    <div class="expense-transaction">
        <h2>Expense Transaction</h2>
        <!-- Add form for expense transactions -->
        <form id="deductForm" action="/deduct-from-ewallet" method="POST">
            @csrf
            <label for="amount">Enter Amount:</label>
            <input type="number" id="amount" name="amount" step="0.01" required>
            <button type="submit">Deduct</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('deductForm');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally
            
            // Fetch CSRF token
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            
            // Prepare data to send
            const formData = new FormData(form);
            
            // Send POST request to deduct money
            fetch('/deduct-from-ewallet', {
                method: 'POST',
                headers: {
                    'X-CSRF-Token': token
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Update E-Wallet balance on success
                document.getElementById('ewalletBalance').textContent = data.ewallet_balance;
                alert('Money deducted successfully!');
                form.reset(); // Reset the form
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Failed to deduct money. Please try again.');
            });
        });
    });
</script>

@endsection
