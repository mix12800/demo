// document.querySelectorAll('.btn-cart').forEach((btn) => {
//     btn.addEventListener('click', () => {
//         let block = btn.closest('.cart-m').querySelector('.coment-block');
//         block.classList.toggle('open');
//     });
// });

document.addEventListener("click", (e) => {
    if (e.target.closest('.btn-open-modal')) {
        let modal = document.getElementById('modalAddRoom');
        if (modal) modal.classList.add('modal-open');
        return;
    }
    if (e.target.id === 'modalAddRoom') {
        e.target.classList.remove('modal-open');
    }
});