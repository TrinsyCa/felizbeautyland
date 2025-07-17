document.addEventListener('DOMContentLoaded', () => {
    const triggers = document.querySelectorAll('.animation-trigger');
    const animTimeouts = new WeakMap();
    let isTicking = false;

    // Mobil cihaz kontrolü (768px ve altı mobil kabul ediliyor)
    const isMobile = () => window.matchMedia("(max-width: 767px)").matches;

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

            // Mevcut timeout'ları temizle
            if (animTimeouts.has(trigger)) {
                animTimeouts.get(trigger).forEach(clearTimeout);
            }
            const timeouts = [];

            if(!isMobile()) {
                if (rect.top <= window.innerHeight - 300 && rect.bottom >= 0)
                    openAnims();
                else
                    closeAnims();
            }
            else {
                if(rect.top <= window.innerHeight - 300)
                    openAnims();
                else
                    closeAnims();
            }
            function openAnims() {
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
            }
            function closeAnims() {
                anims.forEach((el, i) => {
                    if (sameTime) {
                        el.classList.remove('activeAnim');
                    } else if (el.classList.contains('shutdownAnim')) {
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

        isTicking = false; // Animasyon döngüsünü sıfırla
    }

    function onScroll() {
        if (!isTicking) {
            isTicking = true;
            requestAnimationFrame(checkTriggers); // requestAnimationFrame ile kontrol
        }
    }

    // Scroll olayını throttle et
    let lastScrollTime = 0;
    const throttleDelay = 200; // 200ms throttle süresi
    window.addEventListener('scroll', () => {
        const now = Date.now();
        if (now - lastScrollTime >= throttleDelay) {
            lastScrollTime = now;
            onScroll();
        }
    });

    // İlk kontrol
    checkTriggers();
});
