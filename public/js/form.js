// バグ報告フォームの制御
document.addEventListener('DOMContentLoaded', function() {
    const categorySelect = document.getElementById('categorySelect');
    const detailTextarea = document.getElementById('detailTextarea');
    const submitButton = document.getElementById('submitButton');

    // カテゴリ選択時の処理
    if (categorySelect && detailTextarea) {
        categorySelect.addEventListener('change', function() {
            if (this.value) {
                // カテゴリが選択されたら詳細フォームを有効化
                detailTextarea.disabled = false;
                detailTextarea.focus();
            } else {
                // カテゴリが未選択の場合は詳細フォームを無効化
                detailTextarea.disabled = true;
                detailTextarea.value = '';
            }
            updateSubmitButton();
        });

        // 詳細入力時の処理
        detailTextarea.addEventListener('input', function() {
            updateSubmitButton();
        });
    }

    // 送信ボタンの有効/無効を更新
    function updateSubmitButton() {
        if (submitButton && categorySelect && detailTextarea) {
            if (categorySelect.value && detailTextarea.value.trim()) {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }
        }
    }

    // フォーム送信時の処理
    const bugReportForm = document.getElementById('bugReportForm');
    if (bugReportForm) {
        bugReportForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const category = categorySelect.value;
            const detail = detailTextarea.value.trim();

            if (category && detail) {
                // 実際のアプリケーションではここでサーバーに送信
                alert('バグ報告を送信しました。\n\nカテゴリ: ' + category + '\n詳細: ' + detail.substring(0, 50) + '...');
                
                // フォームをリセット
                categorySelect.value = '';
                detailTextarea.value = '';
                detailTextarea.disabled = true;
                updateSubmitButton();
            }
        });
    }

    // 初期状態の設定
    updateSubmitButton();
});
