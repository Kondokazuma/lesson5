// Swiperの初期化
const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    slidesPerView:1.2,
    centeredSlides:true,
    spaceBetween:10,
});

// スケジュール切り替え
const scheduleItems = document.querySelectorAll('.schedule-date');
const scheduleDescriptions = document.querySelectorAll('.schedule_description p');

// 初期状態で1番目の説明のみ表示
scheduleDescriptions.forEach((desc, index) => {
    desc.style.display = index === 0 ? 'block' : 'none';
});

// 初期状態で0901を選択し、フォームのボタン制御
document.addEventListener('DOMContentLoaded', function () {
    // スケジュール初期設定
    const defaultDate = document.getElementById('0901');
    if (defaultDate) {
        defaultDate.classList.add('selected');
    }

    // フォームの送信ボタン制御
    const form = document.querySelector('.contact-form');
    const submitBtn = document.querySelector('.submit-btn');
    const requiredInputs = form.querySelectorAll('input[required], select[required]');

    // フォームの入力状態をチェック
    function checkFormValidity() {
        let isValid = true;
        requiredInputs.forEach(input => {
            if (!input.value.trim() || (input.tagName === 'SELECT' && input.value === '---')) {
                isValid = false;
            }
        });
        return isValid;
    }

    // ボタンの状態を更新
    function updateButtonState() {
        if (checkFormValidity()) {
            submitBtn.classList.remove('disabled');
            submitBtn.disabled = false;
        } else {
            submitBtn.classList.add('disabled');
            submitBtn.disabled = true;
        }
    }

    // 初期状態でボタンを非活性化
    updateButtonState();

    // 入力イベントを監視
    requiredInputs.forEach(input => {
        input.addEventListener('input', updateButtonState);
        input.addEventListener('change', updateButtonState); // select用
    });
});

// スケジュールクリックイベント
scheduleItems.forEach((item, index) => {
    item.addEventListener('click', () => {
        scheduleItems.forEach(i => i.classList.remove('selected'));
        item.classList.add('selected');
        scheduleDescriptions.forEach(desc => desc.style.display = 'none');
        scheduleDescriptions[index].style.display = 'block';
    });
});

// ハンバーガーメニューのトグル
document.getElementById('menu-icon').addEventListener('click', function() {
    this.classList.toggle('active'); // アイコンのアニメーション
    document.getElementById('menu').classList.toggle('active'); // メニューの表示/非表示
});