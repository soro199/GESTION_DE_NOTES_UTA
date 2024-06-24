function loadNotes() {
    const notes = {
        math: 15,
        science: 14,
        history: 16,
        literature: 13
    };

    document.querySelector('.subjects #math .note').textContent = notes.math;
    document.querySelector('.subjects #science .note').textContent = notes.science;
    document.querySelector('.subjects #history .note').textContent = notes.history;
    document.querySelector('.subjects #literature .note').textContent = notes.literature;
}

// Appel à loadNotes au chargement de la page (simulé)
window.addEventListener('load', loadNotes);




