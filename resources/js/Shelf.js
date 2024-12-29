// Handle the row click for redirection
function handleRowClick(event) {
    if (event.target.type !== 'checkbox') {
        window.location = 'Hbookdetailswithreserve'; // Adjust the URL as needed
    }
}

// Prevent the row click event when the checkbox is clicked
function handleCheckboxClick(event) {
    event.stopPropagation(); // Prevent the row click from triggering
}
