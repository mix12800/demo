document.querySelectorAll('.btn-cart').forEach((btn) => {
    btn.addEventListener('click', () => {
        let block = btn.closest('.cart-m').querySelector('.coment-block');
        block.classList.toggle('open');
    });
});
