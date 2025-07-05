document.addEventListener('DOMContentLoaded', () => {
    const triggers = document.querySelectorAll('.animation-trigger');

    function checkTriggers() {
        triggers.forEach(trigger => {
            const rect = trigger.getBoundingClientRect();
            const container = trigger.parentElement;
            const animClasses = [
                'TopToBottomAnim',
                'BottomToTopAnim',
                'ScaleToShowAnim',
                'ScaleReverseToShowAnim',
                'LeftToRightAnim',
                'RightToLeftAnim',
            ];
            const selector = animClasses.map(cls => '.' + cls).join(', ');
            const anims = Array.from(container.querySelectorAll(selector));
            if (rect.top <= 650) {
                anims.forEach((el, i) => {
                    setTimeout(() => {
                        el.classList.add('activeAnim');
                    }, i * 200);
                });
            } else {
                anims.forEach(el => el.classList.remove('activeAnim'));
            }
        });
    }

    window.addEventListener('scroll', checkTriggers);
    checkTriggers();
});
