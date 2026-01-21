import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// sideBar JS

   document.addEventListener('DOMContentLoaded', () => {
    const sideBar = document.getElementById('sideBar');
    const openSideBar = document.getElementById('openSideBar');
    const closeSideBar = document.getElementById('closeSideBar');
    const overlay = document.getElementById('overlay');

    function closeSidebar() {
        sideBar.classList.add('-translate-x-full');
        overlay.classList.remove('flex');
        overlay.classList.add('hidden');
    }

    function openSidebar() {
        sideBar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
        overlay.classList.add('flex');
    }

    openSideBar.addEventListener('click', openSidebar);
    closeSideBar.addEventListener('click', closeSidebar);
    overlay.addEventListener('click', closeSidebar);
});

    
