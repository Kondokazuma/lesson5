<?php
$page_title = "トップページ";
include(dirname(__FILE__) . '/header.php');
?>

<div class="key_visual">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./image/slide_1.jpg" alt="お祭りの画像1">
            </div>
            <div class="swiper-slide">
                <img src="./image/slide_2.jpg" alt="お祭りの画像2">
            </div>
            <div class="swiper-slide">
                <img src="./image/slide_3.jpg" alt="お祭りの画像3">
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"><img src="./image/slide-btn-prev.svg" alt="戻るボタン"></div>
        <div class="swiper-button-next"><img src="./image/slide-btn-next.svg" alt="次へボタン"></div>
    </div>
</div>
<p class="title_word">今年も始まる<span>夏祭り</span></p>
<div class="schedule" id="schedule">
    <p class="schedule_title">スケジュール</p>
    <div class="schedule_list">
        <p class="schedule-date" id="0901">9月1日</p>
        <p class="schedule-date" id="0902">9月2日</p>
        <p class="schedule-date" id="0903">9月3日</p>
    </div>
    <div class="schedule_description">
        <p>9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容</p>
        <p>9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容</p>
        <p>9月3日の内容9月3日の内容9月3の内
内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容</p>
    </div>
</div>
<div class="map" id="access">
    <p class="map_titile">アクセス</p>
    <p>〒771-1154 徳島県徳島市応神町東貞方南川渕</p>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6607.067012250145!2d134.51810744613482!3d34.10708912594649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3553725a43298fb3%3A0x1bc47188f8f9226a!2z44CSNzcxLTExNTQg5b6z5bO255yM5b6z5bO25biC5b-c56We55S65p2x6LKe5pa55Y2X5bed5re1!5e0!3m2!1sja!2sjp!4v1753766373098!5m2!1sja!2sjp"
        width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="contact-form" id="reserve">
    <p class="section_title">席予約</p>
    <form action="confirm.php" method="post">
        <div class="form-group">
            <div class="label-wrapper">
                <label for="name">お名前</label>
                <span class="required">*必須</span>
            </div>
            <input type="text" id="name" name="name" required aria-required="true" placeholder="例）田中 太郎">
        </div>
        <div class="form-group">
            <div class="label-wrapper">
                <label for="seat">席の場所</label>
                <span class="required">*必須</span>
            </div>
            <select id="seat" name="seat" required aria-required="true">
                <option value="">---</option>
                <option value="SS席">SS席</option>
                <option value="S席">S席</option>
                <option value="A席">A席</option>
                <option value="B席">B席</option>
            </select>
        </div>
        <div class="form-group">
            <div class="label-wrapper">
                <label for="email">メールアドレス</label>
                <span class="required">*必須</span>
            </div>
            <input type="email" id="email" name="email" required aria-required="true" placeholder="例）abcd123@example.com">
        </div>
        <div class="form-group">
            <div class="label-wrapper">
                <label for="phone">電話番号</label>
                <span class="optional">*任意</span>
            </div>
            <input type="tel" id="phone" name="phone" placeholder="例）09012345678">
        </div>
        <button type="submit" class="submit-btn">送信</button>
    </form>
</div>

<?php include(dirname(__FILE__) . '/footer.php'); ?>