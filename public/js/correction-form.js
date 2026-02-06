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
    
    // 3秒後に前のページに戻る（履歴がなければ戻り先を使用）
    setTimeout(function() {
        popupOverlay.classList.remove('show');
        if (window.history.length > 1) {
            window.history.back();
            return;
        }

        const returnUrl = document.body ? document.body.dataset.returnUrl : '';
        if (returnUrl) {
            window.location.href = returnUrl;
            return;
        }

        if (document.referrer) {
            window.location.href = document.referrer;
        }
    }, 3000);
});
