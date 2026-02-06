// メニューの開閉制御
document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById('menuButton');
    const menuPanel = document.getElementById('menuPanel');
    const menuOverlay = document.getElementById('menuOverlay');
    const closeButton = document.getElementById('closeButton');

    // メニューを開く
    function openMenu() {
        menuPanel.classList.add('active');
        menuOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // メニューを閉じる
    function closeMenu() {
        menuPanel.classList.remove('active');
        menuOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    // メニューボタンクリック
    if (menuButton) {
        menuButton.addEventListener('click', openMenu);
    }

    // 閉じるボタンクリック
    if (closeButton) {
        closeButton.addEventListener('click', closeMenu);
    }

    // オーバーレイクリック
    if (menuOverlay) {
        menuOverlay.addEventListener('click', closeMenu);
    }

    // ESCキーでメニューを閉じる
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && menuPanel.classList.contains('active')) {
            closeMenu();
        }
    });
});
