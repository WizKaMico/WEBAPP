// Get the modal and buttons
const modal = document.getElementById('NewlyCreatedAnnouncement');
const closeModalBtn = document.getElementById('closeModalBtn');

// Function to open the modal
function openModal() {
  modal.style.display = 'block';
}

// Function to close the modal
function closeModal() {
  modal.style.display = 'none';
}

// Event listener to close the modal when the close button is clicked
closeModalBtn.addEventListener('click', closeModal);

// Event listener to close the modal when clicking outside of it
window.addEventListener('click', (event) => {
  if (event.target === modal) {
    closeModal();
  }
});

// Open the modal automatically when the page loads
window.addEventListener('load', openModal);
