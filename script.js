document.addEventListener('DOMContentLoaded', function() {
    const detailsElements = document.querySelectorAll('details');

    detailsElements.forEach(details => {
        const savedState = localStorage.getItem(`details_${details.id}`);
        if (savedState === 'open') {
            details.open = true;
        }

        // Сохраняем состояние при изменении
        details.addEventListener('toggle', function() {
            localStorage.setItem(`details_${this.id}`, this.open ? 'open' : 'closed');
        });
    });
});