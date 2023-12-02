document.addEventListener('DOMContentLoaded', function() {
    const cardsPerPage = 15; // Adjust the number of cards per page
    const cards = document.querySelectorAll('#Card-Deck-Code-Library .col');
    const totalCards = cards.length;
    const totalPages = Math.ceil(totalCards / cardsPerPage);
    let currentPage = 1;

    function showPage(pageNumber) {
        const start = (pageNumber - 1) * cardsPerPage;
        const end = start + cardsPerPage;
        cards.forEach((card, index) => {
            card.style.display = (index >= start && index < end) ? '' : 'none';
        });
    }

    function createPagination() {
        const paginationContainer = document.querySelector('.pagination');
        paginationContainer.innerHTML = '';

        // 'Previous' link
        const prevLi = document.createElement('li');
        prevLi.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
        prevLi.innerHTML = `<a class="page-link" href="#" data-page="${currentPage - 1}">Previous</a>`;
        paginationContainer.appendChild(prevLi);

        // Page number links
        for (let i = 1; i <= totalPages; i++) {
            const pageLi = document.createElement('li');
            pageLi.className = `page-item ${i === currentPage ? 'active' : ''}`;
            pageLi.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i}</a>`;
            paginationContainer.appendChild(pageLi);
        }

        // 'Next' link
        const nextLi = document.createElement('li');
        nextLi.className = `page-item ${currentPage === totalPages ? 'disabled' : ''}`;
        nextLi.innerHTML = `<a class="page-link" href="#" data-page="${currentPage + 1}">Next</a>`;
        paginationContainer.appendChild(nextLi);
    }

    function addPaginationEventListeners() {
        document.querySelectorAll('.pagination a.page-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const newPage = parseInt(this.getAttribute('data-page'));

                if (!isNaN(newPage) && newPage > 0 && newPage <= totalPages) {
                    currentPage = newPage;
                    showPage(currentPage);
                    createPagination();
                    addPaginationEventListeners();
                }
            });
        });
    }

    createPagination();
    addPaginationEventListeners();
    showPage(currentPage);
});