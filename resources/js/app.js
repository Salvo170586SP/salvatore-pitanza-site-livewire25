/* modalità dark mode */
const applyGuestTheme = () => {
    document.documentElement.classList.toggle('dark', window.localStorage.getItem('guest.theme') === 'dark');
};

applyGuestTheme();
document.addEventListener('livewire:navigated', applyGuestTheme);