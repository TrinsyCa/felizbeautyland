document.addEventListener('DOMContentLoaded', () => {
    const triggers = document.querySelectorAll('.animation-trigger');
    const animTimeouts = new WeakMap();

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
                'shutdownAnim',
            ];
            const selector = animClasses.map(cls => '.' + cls).join(', ');
            const anims = Array.from(container.querySelectorAll(selector));
            const sameTime = trigger.classList.contains('same-time');

            if (animTimeouts.has(trigger)) {
                animTimeouts.get(trigger).forEach(clearTimeout);
            }
            const timeouts = [];

            if (rect.top <= 900) {
                anims.forEach((el, i) => {
                    if (sameTime) {
                        el.classList.add('activeAnim');
                    } else {
                        const t = setTimeout(() => {
                            el.classList.add('activeAnim');
                        }, i * 100);
                        timeouts.push(t);
                    }
                });
            } else {
                anims.forEach((el, i) => {
                    if (sameTime) {
                        el.classList.remove('activeAnim');
                    } else if (el.classList.contains('shutdownAnim')) {
                        // shutdownAnim sırası geldiğinde, timeout ile aynı anda alt animasyonları kapat
                        const t = setTimeout(() => {
                            const shutdownAnims = el.querySelectorAll('.TopToBottomAnim, .BottomToTopAnim, .ScaleToShowAnim, .ScaleReverseToShowAnim, .LeftToRightAnim, .RightToLeftAnim');
                            shutdownAnims.forEach(animEl => {
                                animEl.classList.remove('activeAnim');
                            });
                            el.classList.remove('activeAnim');
                        }, i * 50);
                        timeouts.push(t);
                    } else {
                        const t = setTimeout(() => {
                            el.classList.remove('activeAnim');
                        }, i * 50);
                        timeouts.push(t);
                    }
                });
            }
            animTimeouts.set(trigger, timeouts);
        });
    }

    window.addEventListener('scroll', checkTriggers);
    checkTriggers();
});
