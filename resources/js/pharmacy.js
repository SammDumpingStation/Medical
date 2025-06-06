document.addEventListener('livewire:initialized', () => {
    Livewire.on('closeModal', (modalId) => {
        const modal = document.getElementById(modalId);
        if (modal) {
            // Hide the modal
            modal.classList.add('hidden');
            modal.setAttribute('aria-hidden', 'true');
            
            // Remove the modal backdrop
            const modalBackdrop = document.querySelector('.modal-backdrop');
            if (modalBackdrop) {
                modalBackdrop.remove();
            }
            
            // Remove any modal-open classes from body
            document.body.classList.remove('modal-open');
            document.body.style.overflow = 'auto';
            document.body.style.paddingRight = '0';
            
            // Reset the form if there is one in the modal
            const form = modal.querySelector('form');
            if (form) {
                form.reset();
            }
        }
    });
});
