// タグ検索ページのJavaScript

// タグデータ（バックエンドから渡される）
let tags = [];

// 表示設定
const INITIAL_DISPLAY = 9; // 最初に表示する数
const LOAD_MORE_COUNT = 9; // もっと見るで追加する数
let currentDisplayCount = INITIAL_DISPLAY;

// DOM要素
const tagContainer = document.getElementById('tagContainer');
const showMoreButton = document.getElementById('showMoreButton');

// タグを生成して追加
function initializeTags() {
    tags.forEach((tag, index) => {
        const button = document.createElement('button');
        button.className = 'tag-button';
        button.textContent = tag;
        button.dataset.index = index;
        
        // 最初のINITIAL_DISPLAY個以外は非表示
        if (index >= INITIAL_DISPLAY) {
            button.classList.add('hidden');
        }
        
        // クリックイベント（検索ページへ遷移など）
        button.addEventListener('click', function() {
            console.log(`タグ「${tag}」がクリックされました`);
            // 検索結果ページへ遷移
            window.location.href = `7.html?tag=${encodeURIComponent(tag)}`;
        });
        
        tagContainer.appendChild(button);
    });
    
    // もっと見るボタンの表示状態を更新
    updateShowMoreButton();
}

// もっと見るボタンの表示/非表示を制御
function updateShowMoreButton() {
    if (currentDisplayCount >= tags.length) {
        showMoreButton.classList.add('hidden');
    } else {
        showMoreButton.classList.remove('hidden');
    }
}

// もっと見るボタンのクリックイベント
showMoreButton.addEventListener('click', function() {
    const tagButtons = tagContainer.querySelectorAll('.tag-button');
    const nextDisplayCount = Math.min(currentDisplayCount + LOAD_MORE_COUNT, tags.length);
    
    // 次のLOAD_MORE_COUNT個を表示
    for (let i = currentDisplayCount; i < nextDisplayCount; i++) {
        tagButtons[i].classList.remove('hidden');
    }
    
    currentDisplayCount = nextDisplayCount;
    updateShowMoreButton();
});

// 初期化
document.addEventListener('DOMContentLoaded', function() {
    // DOMContentLoadedでは何もしない
    // タグはsetTagsFromBackendで設定される
});

// バックエンドからデータを受け取る関数
// 実際の実装時はこの関数にバックエンドから渡されたタグ配列を設定
function setTagsFromBackend(backendTags) {
    // バックエンドから渡されたタグ配列を使用
    tags = backendTags;
    
    // タグコンテナをクリアして初期化
    tagContainer.innerHTML = '';
    currentDisplayCount = INITIAL_DISPLAY;
    initializeTags();
}
