document.addEventListener('DOMContentLoaded', () => {
    const triggers = document.querySelectorAll('.animation-trigger');

    function checkTriggers() {
        triggers.forEach(trigger => {
            const rect = trigger.getBoundingClientRect();
            const container = trigger.parentElement;
            const animClasses = [
                '.TopToBottomAnim',
                '.BottomToTopAnim',
                '.ScaleToShowAnim',
                '.ScaleReverseToShowAnim'
            ];
            const anims = container.querySelectorAll(animClasses.join(', '));            if (rect.top <= 700) {
                anims.forEach(el => el.classList.add('activeAnim'));
            } else {
                anims.forEach(el => el.classList.remove('activeAnim'));
            }
        });
    }

    window.addEventListener('scroll', checkTriggers);
    checkTriggers();
});
