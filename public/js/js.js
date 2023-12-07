// Memilih elemen-elemen yang diperlukan
const table = document.querySelector('table');
const rows = table.querySelectorAll('tbody tr');
const prevPageBtn = document.getElementById('prevPage');
const nextPageBtn = document.getElementById('nextPage');

// Mengatur jumlah item per halaman
const itemsPerPage = 10;
let currentPage = 1;

// Fungsi untuk menampilkan item sesuai dengan halaman saat ini
function displayItems() {
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = currentPage * itemsPerPage;

    rows.forEach((row, index) => {
        if (index >= startIndex && index < endIndex) {
            row.style.display = 'table-row';
        } else {
            row.style.display = 'none';
        }
    });
}

// Menampilkan halaman pertama saat halaman dimuat
displayItems();

// Fungsi untuk menangani tombol "Previous" dan "Next"
prevPageBtn.addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        displayItems();
    }
});

nextPageBtn.addEventListener('click', () => {
    if (currentPage < Math.ceil(rows.length / itemsPerPage)) {
        currentPage++;
        displayItems();
    }
});
