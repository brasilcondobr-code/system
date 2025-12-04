<li class="fi-topbar-item">
    <button
        type="button"
        id="filament-fullscreen-toggle"
        class="fi-topbar-item-btn"
        aria-label="Alternar tela cheia">
        <span class="fi-icon" id="filament-fullscreen-icon" aria-hidden="true">
            <!-- Enter fullscreen icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3"/><path d="M16 3h3a2 2 0 0 1 2 2v3"/><path d="M21 16v3a2 2 0 0 1-2 2h-3"/><path d="M3 8v3a2 2 0 0 0 2 2h3"/></svg>
        </span>
    </button>
</li>

<script>
(function () {
    const btn = document.getElementById('filament-fullscreen-toggle');
    const icon = document.getElementById('filament-fullscreen-icon');

    if (!btn || !icon) return;

    const enterSvg = `<?xml version="1.0" encoding="UTF-8"?><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M8 3H5a2 2 0 0 0-2 2v3\"/><path d=\"M16 3h3a2 2 0 0 1 2 2v3\"/><path d=\"M21 16v3a2 2 0 0 1-2 2h-3\"/><path d=\"M3 8v3a2 2 0 0 0 2 2h3\"/></svg>`;
    const exitSvg = `<?xml version="1.0" encoding="UTF-8"?><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M16 14h5v5a2 2 0 0 1-2 2h-5v-2\"/><path d=\"M8 10H3V5a2 2 0 0 1 2-2h5v2\"/><path d=\"M21 3l-6 6\"/><path d=\"M3 21l6-6\"/></svg>`;

    function isFullscreen() {
        return !!(document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement);
    }

    function updateIcon() {
        if (isFullscreen()) {
            icon.innerHTML = exitSvg;
            btn.setAttribute('aria-label', 'Sair da tela cheia');
        } else {
            icon.innerHTML = enterSvg;
            btn.setAttribute('aria-label', 'Entrar em tela cheia');
        }
    }

    async function toggleFullscreen() {
        try {
            if (!isFullscreen()) {
                if (document.documentElement.requestFullscreen) {
                    await document.documentElement.requestFullscreen();
                } else if (document.documentElement.webkitRequestFullscreen) {
                    await document.documentElement.webkitRequestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    await document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.msRequestFullscreen) {
                    await document.documentElement.msRequestFullscreen();
                }
            } else {
                if (document.exitFullscreen) {
                    await document.exitFullscreen();
                } else if (document.webkitExitFullscreen) {
                    await document.webkitExitFullscreen();
                } else if (document.mozCancelFullScreen) {
                    await document.mozCancelFullScreen();
                } else if (document.msExitFullscreen) {
                    await document.msExitFullscreen();
                }
            }
        } catch (e) {
            // fail silently
        }
    }

    btn.addEventListener('click', function (e) {
        e.preventDefault();
        toggleFullscreen();
    });

    document.addEventListener('fullscreenchange', updateIcon);
    document.addEventListener('webkitfullscreenchange', updateIcon);
    document.addEventListener('mozfullscreenchange', updateIcon);
    document.addEventListener('MSFullscreenChange', updateIcon);

    // Run once on load
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', updateIcon);
    } else {
        updateIcon();
    }
})();
</script>
