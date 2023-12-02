document.addEventListener('DOMContentLoaded', function() {
    const cardsPerPage = 15;
    const cards = document.querySelectorAll('#Card-Deck-Code-Library .row .col');
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
    function createPagination(totalPages, currentPage) {
        const paginationContainer = document.querySelector('.pagination');
        paginationContainer.innerHTML = '';
        // 'Previous' link
        const prevLi = document.createElement('li');
        prevLi.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
        prevLi.innerHTML = `<a class="page-link" href="#">Previous</a>`;
        paginationContainer.appendChild(prevLi);
        // Page number links
        for (let i = 1; i <= totalPages; i++) {
            const pageLi = document.createElement('li');
            pageLi.className = `page-item ${i === currentPage ? 'active' : ''}`;
            pageLi.innerHTML = `<a class="page-link" href="#">${i}</a>`;
            paginationContainer.appendChild(pageLi);
        }
        // 'Next' link
        const nextLi = document.createElement('li');
        nextLi.className = `page-item ${currentPage === totalPages ? 'disabled' : ''}`;
        nextLi.innerHTML = `<a class="page-link" href="#">Next</a>`;
        paginationContainer.appendChild(nextLi);
        addPaginationEventListeners();
    }
    function addPaginationEventListeners() {
        document.querySelectorAll('.pagination a.page-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const text = this.textContent;
                if (text === 'Previous' && currentPage > 1) {
                    currentPage--;
                } else if (text === 'Next' && currentPage < totalPages) {
                    currentPage++;
                } else if (!isNaN(parseInt(text))) {
                    currentPage = parseInt(text);
                }
                createPagination(totalPages, currentPage);
                showPage(currentPage);
            });
        });
    }
    createPagination(totalPages, currentPage);
    showPage(currentPage);
});