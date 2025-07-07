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
            const sameTime = trigger.classList.contains('same-time');
            if (rect.top <= 700) {
                anims.forEach((el, i) => {
                    if (sameTime) {
                        el.classList.add('activeAnim');
                    } else {
                        setTimeout(() => {
                            el.classList.add('activeAnim');
                        }, i * 250);
                    }
                });
            } else {
                anims.forEach(el => el.classList.remove('activeAnim'));
            }
        });
    }

    window.addEventListener('scroll', checkTriggers);
    checkTriggers();
});
