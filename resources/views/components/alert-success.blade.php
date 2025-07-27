@if (session($key))
    <div 
        id="alert-success" 
        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 transition-opacity duration-500"
        role="alert"
    >
        <strong class="font-bold">Sukses!</strong>
        <span class="block sm:inline">{{ session($key) }}</span>
    </div>

    <script>
        setTimeout(() => {
            const alertBox = document.getElementById('alert-success');
            if (alertBox) {
                alertBox.style.opacity = '0';
                setTimeout(() => alertBox.remove(), 500); // Remove after fade-out
            }
        }, 3000);
    </script>
@endif
