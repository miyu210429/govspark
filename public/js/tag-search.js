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
const selectedTagsContainer = document.getElementById('selectedTags');
const keywordInput = document.getElementById('keywordInput');
const keywordSearchBox = document.querySelector('.keyword-search-box');
const searchButton = document.querySelector('.search-icon-button');

const selectedTags = new Set();

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
        
        // クリックイベント（選択/解除）
        button.addEventListener('click', function() {
            toggleTagSelection(tag, button);
        });
        
        tagContainer.appendChild(button);
    });
    
    // もっと見るボタンの表示状態を更新
    updateShowMoreButton();
}

function toggleTagSelection(tag, button) {
    if (selectedTags.has(tag)) {
        selectedTags.delete(tag);
        button.classList.remove('selected');
    } else {
        selectedTags.add(tag);
        button.classList.add('selected');
    }

    renderSelectedTags();
}

function renderSelectedTags() {
    selectedTagsContainer.innerHTML = '';
    selectedTags.forEach((tag) => {
        const chip = document.createElement('span');
        chip.className = 'selected-tag';
        chip.textContent = tag;

        const removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.setAttribute('aria-label', `${tag} を削除`);
        removeButton.textContent = '×';
        removeButton.addEventListener('click', () => {
            selectedTags.delete(tag);
            const tagButton = Array.from(tagContainer.querySelectorAll('.tag-button'))
                .find((btn) => btn.textContent === tag);
            if (tagButton) {
                tagButton.classList.remove('selected');
            }
            renderSelectedTags();
            keywordInput.focus();
        });

        chip.appendChild(removeButton);
        selectedTagsContainer.appendChild(chip);
    });
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

// 検索ボタンのクリックイベント
if (searchButton && keywordSearchBox) {
    searchButton.addEventListener('click', function() {
        const resultUrl = keywordSearchBox.dataset.resultUrl;
        if (resultUrl) {
            window.location.href = resultUrl;
        }
    });
}

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
