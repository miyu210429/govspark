// 訂正フォームページのJavaScript

// DOM要素
const backButton = document.getElementById('backButton');
const correctionForm = document.getElementById('correctionForm');
const popupOverlay = document.getElementById('popupOverlay');

// 戻るボタンのクリックイベント
backButton.addEventListener('click', function() {
    window.history.back();
});

// フォーム送信イベント
correctionForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // テキストエリアのバリデーション
    const correctionText = document.getElementById('correctionText').value.trim();
    
    if (!correctionText) {
        alert('批判内容を入力してください');
        return;
    }
    
    // ポップアップを表示
    popupOverlay.classList.add('show');
    
    // カウントダウン処理
    let countdown = 3;
    const countdownElement = document.getElementById('countdown');
    
    const countdownInterval = setInterval(function() {
        countdown--;
        if (countdown > 0) {
            countdownElement.textContent = countdown;
        } else {
            clearInterval(countdownInterval);
        }
    }, 1000);
    
    // 3秒後に前のページに戻る
    setTimeout(function() {
        popupOverlay.classList.remove('show');
        window.history.back();
    }, 3000);
});
