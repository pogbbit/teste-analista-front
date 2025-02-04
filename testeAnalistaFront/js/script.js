// Função que aguarda o carregamento completo do conteúdo do DOM e configura
// os eventos de mouse para mostrar e ocultar menus dropdown. Ao passar o mouse
// sobre um item dropdown, o menu correspondente é exibido, e quando o mouse sai,
// o menu é ocultado.
document.addEventListener('DOMContentLoaded', () => {
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseenter', () => {
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');
            dropdownMenu.style.display = 'block';
        });

        dropdown.addEventListener('mouseleave', () => {
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');
            dropdownMenu.style.display = 'none';
        });
    });
});

// Função que aguarda o carregamento completo do conteúdo do DOM e inicializa
// o slider/carrossel com a biblioteca Splide. O carrossel identificado pelo 
// seletor '#image-carousel' é montado para permitir a navegação entre as imagens.
document.addEventListener('DOMContentLoaded', () => {
    new Splide('#image-carousel').mount();
});
