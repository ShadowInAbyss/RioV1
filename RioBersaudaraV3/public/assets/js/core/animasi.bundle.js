document.addEventListener('DOMContentLoaded', function () {
    // Tambahkan kelas untuk animasi fade-in saat halaman dimuat
    document.body.classList.add('fade-in-active');

    // Tangkap klik pada tautan untuk memicu animasi fade-out
    document.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Cegah navigasi langsung
            const href = this.href; // Simpan tujuan tautan

            // Tambahkan kelas fade-out dan tunggu animasi selesai
            document.body.classList.add('fade-out-active');
            setTimeout(() => {
                window.location.href = href; // Arahkan ke tujuan setelah animasi
            }, 1500); // Sesuaikan durasi dengan CSS animasi fade-out
        });
    });

    // Tangkap submit form untuk animasi fade-out
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Cegah pengiriman langsung
            document.body.classList.add('fade-out-active');

            setTimeout(() => {
                this.submit(); // Kirim form setelah animasi selesai
            }, 1500); // Sesuaikan durasi dengan CSS animasi fade-out
        });
    });
});

// Animasi Mouse
document.addEventListener('mousemove', (e) => {
    const x = e.clientX / window.innerWidth;
    const y = e.clientY / window.innerHeight;
    document.body.style.setProperty('--bg-pos', `${x * 100}% ${y * 100}%`);
});
