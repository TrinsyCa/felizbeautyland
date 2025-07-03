document.addEventListener('DOMContentLoaded', () => {
    const triggers = document.querySelectorAll('.animation-trigger');

    function checkTriggers() {
        triggers.forEach(trigger => {
            const rect = trigger.getBoundingClientRect();
            const container = trigger.parentElement;
            const anims = container.querySelectorAll('.TopToBottomAnim, .BottomToTopAnim');
            if (rect.top <= 600) {
                anims.forEach(el => el.classList.add('activeAnim'));
            } else {
                anims.forEach(el => el.classList.remove('activeAnim'));
            }
        });
    }

    window.addEventListener('scroll', checkTriggers);
    checkTriggers();
});
