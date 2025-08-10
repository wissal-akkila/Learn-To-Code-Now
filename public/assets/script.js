
// صفحة ال home




AOS.init();
AOS.init({
    once: true // يشغل الأنميشن مرة واحدة فقط
});







$('.card-hover').on('mouseenter', function () {
    $(this).css({
        'transform': 'scale(1.05)',
        'box-shadow': '0 10px 20px rgba(0,0,0,0.4)',
        'transition': '0.3s ease',

    });
});

$('.card-hover').on('mouseleave', function () {
    $(this).css({
        'transform': 'scale(1)',
        'box-shadow': 'none',
        // ✅ هنا يتحول إلى أزرق
    });
});



var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true, // اجعل السلايدر دائري
    initialSlide: 2,
    slidesPerView: 3,

    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        992: {
            slidesPerView: 3
        }
    }
});


// ****لاضافة الدرس الى صفحة الداش بورد
function saveCourseToLocalStorageFromCard(button) {
    // إيجاد العنصر الأعلى بطاقة الكورس
    const card = button.closest('.card');
    console.log("Card element:", card);

    // إيجاد span الذي يحتوي على اسم الدورة
    const courseSpan = card.querySelector('.language-label');
    console.log("Course span:", courseSpan);

    if (!courseSpan) {
        alert("Course name element not found!");
        return;
    }


    const courseName = courseSpan.textContent.trim();
    console.log("Course name:", courseName);


    let courses = JSON.parse(localStorage.getItem("myCourses")) || [];
    console.log("Courses in storage:", courses);

    // التحقق من التكرار
    if (courses.includes(courseName)) {
        alert("This course is already added.");
        return;
    }

    // إضافة الدورة وتخزينها
    courses.push(courseName);
    localStorage.setItem("myCourses", JSON.stringify(courses));

    alert("Course added successfully: " + courseName);
}

// lessons
$(document).ready(function () {
    $('.lesson').on('click', function () {
        $('.lesson').removeClass('active-lesson');
        $(this).addClass('active-lesson');
    });
});

//dashbord

function clearCourses() {
    localStorage.removeItem("myCourses");
    renderMyCourses(); // تحديث العرض بعد الحذف
    alert("تم حذف جميع الدورات.");
}


 
 
document.getElementById('profileImage')?.addEventListener('change', function (event) {
    const file = event.target.files[0];
    const fileNameSpan = document.getElementById('fileName');
    const previewImage = document.getElementById('previewImage');
    const topProfileImage = document.getElementById('topProfileImage');

    if (file) {
        fileNameSpan.textContent = file.name;

        const reader = new FileReader();
        reader.onload = function (e) {
            previewImage.src = e.target.result;
   
            topProfileImage.src = e.target.result;
        };
        reader.readAsDataURL(file);
    } else {
        fileNameSpan.textContent = 'No file chosen';
    }
});


 
$('.card-hover').on('mouseenter', function () {
    $(this).css({
        'transform': 'scale(1.05)',
        'box-shadow': '0 10px 20px rgba(0,0,0,0.4)',
        'transition': '0.3s ease',
        'border-color': 'inherit' 
    });
});

$('.card-hover').on('mouseleave', function () {
    $(this).css({
        'transform': 'scale(1)',
        'box-shadow': 'none',
        'border-color': 'blue' 
    });
});





// 
$('.image-box').on('mouseenter', function () {
    $(this).css({
        'transform': 'scale(1.05)',
        "box-shadow": "0 0 15px #0dcaf0",
        'transition': '0.3s ease',
        'border-color': 'blue' // يبقى اللون الحالي أثناء الدخول
    });
});

$('.image-box').on('mouseleave', function () {
    $(this).css({
        "transform": "scale(1)",
        "box-shadow": "none",
        'border-color': 'none'

    });
});

// contact us
// جي كويري للفورم
// 



//    جي كويري للنص 
// $('.hover-text').on('mouseenter', function () {
//     $(this).css({
//         "color": "#0dcaf0",
//         "font-size": "1.2rem",
//         "background-color": "rgba(130, 185, 241, 0.2)",
//         "padding": "5px",
//         "border-radius": "5px",
//         "transition": "all 0.3s ease-in-out"
//     });
// });

// $('.hover-text').on('mouseleave', function () {
//     $(this).css({
//         "color": "",
//         "font-size": "",
//         "background-color": "",
//         "padding": "",
//         "border-radius": ""// تبقي الانتقال سلس
//     });
// });



// جي كويري خاصة بالصور
$('.hover-image').on('mouseenter', function () {
    $(this).css({
        "transform": "scale(1.2)", // تكبير الصورة بنسبة 20%
        "box-shadow": "0 6px 20px rgba(0, 0, 0, 0.3)", // إضافة ظل أكثر وضوحًا
        "border-radius": "50%", // تحويل الحواف إلى شكل بيضوي
        "transition": "all 0.3s ease-in-out"
    });
});

$('.hover-image').on('mouseleave', function () {
    $(this).css({
        "transform": "scale(1)", // العودة للحجم الطبيعي
        "box-shadow": "0 6px 20px rgba(0, 0, 0, 0.3)", // إزالة الظل
        "border-radius": "10px"// تبقي الانتقال سلس
    });
});

// coding tips
new Swiper(".tipsSwiper", {
    effect: "cards",
    grabCursor: true,
});








// --------------------------------------------------------------
// dashboard

let startTime = Date.now();

window.addEventListener('beforeunload', function () {
    let endTime = Date.now();
    let secondsSpent = Math.floor((endTime - startTime) / 1000);

    // إرسال الوقت للسيرفر
    navigator.sendBeacon("/log-learning-time", JSON.stringify({
        seconds: secondsSpent
    }));
});



// -----------------------------------------------------------------------
// lessons


document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.lesson-list').forEach(ul => {
        const lessonId = ul.dataset.lessonId;
        const userId = ul.dataset.user;
        const totalItems = ul.querySelectorAll('li').length;

        // استرجع البيانات من localStorage
        let clickedItems = JSON.parse(localStorage.getItem(`lesson_${lessonId}_userId_${userId}`)) || [];

        // تحقق من العناصر التي تم الضغط عليها مسبقًا
        clickedItems.forEach(index => {
            const li = ul.querySelector(`li[data-index="${index}"]`);
            if (li) li.classList.add('visited');
        });

        checkCompletion();

        // عند الضغط على عنصر
        ul.querySelectorAll('li').forEach(li => {
            li.addEventListener('click', function () {

                const index = li.dataset.index;
                if (!clickedItems.includes(index)) {

                    clickedItems.push(index);
                    localStorage.setItem(`lesson_${lessonId}_userId_${userId}`, JSON.stringify(clickedItems));
                    li.classList.add('visited');
                }
                checkCompletion();
            });
        });

        // تحقق من الاكتمال
        function checkCompletion() {
            if (clickedItems.length === totalItems - 1) {

                document.querySelector('.lesson-complete').classList.remove('d-none');
            }
        }
    });
});
