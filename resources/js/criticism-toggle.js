/**
 * 批判コメントのトグル表示と「もっと見る」機能
 * 3.html, 4-5.html, 7.html で共通利用
 */

(function() {
    'use strict';

    /**
     * 批判セクションのトグル機能を初期化
     * @param {string} itemSelector - 投稿アイテムのセレクター
     * @param {string} mainSelector - クリック可能なメイン部分のセレクター
     * @param {string} criticismSelector - 批判セクションのセレクター
     */
    function initCriticismToggle(itemSelector, mainSelector, criticismSelector) {
        const items = document.querySelectorAll(itemSelector);

        items.forEach(item => {
            const mainElement = item.querySelector(mainSelector);
            const criticismSection = item.querySelector(criticismSelector);

            if (!mainElement || !criticismSection) return;

            mainElement.addEventListener('click', function(e) {
                // アクションボタンがクリックされた場合は除外
                if (e.target.closest('.candidate-actions') ||
                    e.target.closest('.profile-post-actions')) {
                    return;
                }

                // アバターと名前のクリックは除外（4-5.htmlへの遷移を維持）
                if (e.target.closest('.candidate-avatar') ||
                    e.target.closest('.candidate-name') ||
                    e.target.closest('.profile-post-avatar') ||
                    e.target.closest('.profile-post-name')) {
                    return;
                }

                // トグル表示
                if (criticismSection.style.display === 'none' || criticismSection.style.display === '') {
                    criticismSection.style.display = 'block';
                    item.classList.add('expanded');
                } else {
                    criticismSection.style.display = 'none';
                    item.classList.remove('expanded');
                }
            });
        });
    }

    /**
     * 「もっと見る」ボタンの機能を初期化
     * @param {string} itemSelector - 投稿アイテムのセレクター
     */
    function initShowMoreButtons(itemSelector) {
        const items = document.querySelectorAll(itemSelector);

        items.forEach(item => {
            const showMoreButton = item.querySelector('.show-more-criticisms');
            const criticismSection = item.querySelector('.criticism-section');

            if (!showMoreButton || !criticismSection) return;

            let currentDisplayCount = 2; // 初期表示数
            const criticismItems = criticismSection.querySelectorAll('.criticism-item');

            // ボタンが必要かチェック
            if (criticismItems.length <= 2) {
                showMoreButton.style.display = 'none';
                return;
            }

            showMoreButton.addEventListener('click', function(e) {
                e.stopPropagation(); // 親要素のクリックイベントを防ぐ

                const nextDisplayCount = Math.min(currentDisplayCount + 2, criticismItems.length);

                // 次の2件を表示
                for (let i = currentDisplayCount; i < nextDisplayCount; i++) {
                    criticismItems[i].style.display = 'block';
                }

                currentDisplayCount = nextDisplayCount;

                // 全て表示したらボタンを非表示
                if (currentDisplayCount >= criticismItems.length) {
                    showMoreButton.style.display = 'none';
                }
            });
        });
    }

    /**
     * ページ読み込み完了時に初期化
     */
    document.addEventListener('DOMContentLoaded', function() {
        // 3.html用（.candidate-item）
        if (document.querySelector('.candidate-item')) {
            initCriticismToggle('.candidate-item', '.candidate-main', '.criticism-section');
            initShowMoreButtons('.candidate-item');
        }

        // 4-5.html, 7.html用（.profile-post-item）
        if (document.querySelector('.profile-post-item')) {
            initCriticismToggle('.profile-post-item', '.post-main', '.criticism-section');
            initShowMoreButtons('.profile-post-item');
        }
    });
})();
