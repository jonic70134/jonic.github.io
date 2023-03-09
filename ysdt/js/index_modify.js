// 上傳圖片
const dropzone = $('#file-input');
const dropframe = $('.chos-file');
dropzone.on('dragover', function(e) {
    e.preventDefault();
    dropzone.addClass('dragover');
});
dropzone.on('drop', function(e) {
    e.preventDefault();
    dropzone.removeClass('dragover');
    handleFiles(e.originalEvent.dataTransfer.files);
});
$('#file-input').on('change', function() {
    handleFiles($('#file-input').prop('files'));
});
// 選擇檔案按鈕被選擇時觸發
function handleFiles(files) {
    for (let i = 0; i < files.length; i++) {
    const file = files[i];
        if (file.type === 'image/jpeg' || file.type === 'image/gif') {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = $('<img class="preview-image"/>').attr('src', e.target.result);
                const name = $('<div class="preview-image-name"/>').text(file.name);
                const delBtn = $('<div class="preview-image-delete icon icon_del"/>');
                const wrapper = $('<div class="preview-image-wrapper"/>').append(img, delBtn);
                // 將預覽圖片包裝器添加到預覽區域
                $('.preview').append(wrapper);
                // 當刪除按鈕被點擊時，刪除對應的預覽圖片包裝器
                delBtn.on('click', function() {
                    wrapper.remove();
                });
            };
            // 讀取選中的檔案
            reader.readAsDataURL(file);
        } else {
            dropframe.addClass('error_type');
            setTimeout(function() {dropframe.removeClass('error_type')}, 5000);
        }
    }
}

// top slider

var duo1slide = new Swiper('.duo_1 .per_r', {
    slidesPerView: 4,
    slidesPerGroup: 8,
    spaceBetween: 20,
    grid: {
        rows: 2,
        fill: 'row',
    },

});
var duo2slide = new Swiper('.duo_2 .per_r', {
    slidesPerView: 4,
    slidesPerGroup: 8,
    spaceBetween: 20,
    grid: {
        rows: 2,
        fill: 'row',
    },

});

$('.cho_tab').click(function(){
    var cho_tab_id = $(this).attr('data-chotab');
    $('.cho_tab').removeClass('active');
    $('.cho_info').removeClass('active');
    $(this).addClass('active');
    $("#"+cho_tab_id).addClass('active');
});

$('.rec_tab').click(function(){
    var rec_tab_id = $(this).attr('data-rectab');
    $('.rec_tab').removeClass('active');
    $('.rec_info').removeClass('active');
    $(this).addClass('active');
    $("#"+rec_tab_id).addClass('active');
});

// 熱賣特選 slider
var perslide = new Swiper('.hot_cho .per_r', {
    slidesPerView: 4,
    spaceBetween: 20,
});
// 夯品推薦 slider
var recslide = new Swiper('.hot_rec .per_r', {
    slidesPerView: 3.7,
    spaceBetween: 15,
    grid: {
        rows: 2,
        fill: 'row',
    },
});

// 特賣主題 slider
var specslide = new Swiper('.spec_slide', {
    slidesPerView: 2,
    spaceBetween: 25,
});

// 個人禮券slider
var cupnslide = new Swiper('.cupn_slide', {
    slidesPerView: 3.18,
    slidesPerGroup: 6,
    spaceBetween: 15,
    grid: {
        rows: 2,
        fill: 'row',
    },
});




// 瀑布流
var masonry = new Macy({
    container: '.items',
    trueOrder: false,
    waitForImages: false,
    useOwnImageLoader: false,
    debug: true,
    mobileFirst: true,
    columns: 6,
    margin: {
        y: 10,
        x: 20,
    },
});


// 愛心class切換
$(".icon_track").click(function(e){
    e.preventDefault();
    $(this).toggleClass('icon_track icon_track_plus');
});

// gotop
$(window).scroll(function() {
    if ($(this).scrollTop() > 300) {
        $('.gotop').fadeIn(500);
    } else {
        $('.gotop').stop().fadeOut(500);
    }
});
$('.gotop').click(function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 500);
    return false;
});

// 再轉轉按鈕
$(".cupn_chg img").click(function() {
    $(this).addClass('rotate-in-center').on("animationend", function(){
        $(this).removeClass('rotate-in-center');
    });
    $(".cupn_items").load("index.html #refresh > *");
});

// shadow DOM
// const shadowRoot = document.getElementById('turn_body').attachShadow({mode: 'open'});
// const iframe = document.createElement('iframe');
// iframe.src = 'https://go.shopping.friday.tw/cycle/turn/?d=1';
// shadowRoot.appendChild(iframe);
// iframe.style.width = '368px';
// iframe.style.height = '680px';
// iframe.style.border = 'none';
