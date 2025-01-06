document.addEventListener('DOMContentLoaded', () => {
    // Select all rows with the "table-row" class
    const rows = document.querySelectorAll('.table-row');

    // Attach click event listener to each row
    rows.forEach((row) => {
        row.addEventListener('click', (event) => {
            // Prevent redirection if the checkbox is clicked
            if (!event.target.closest('input[type="checkbox"]')) {
                window.location.href = '/Hbookdetailswithreserve';
            }
        });
    });
});
