
// صفحة ال home

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

// صفحة ال tutoorial

// $(document).ready(function () {
//     $('.card').on('mouseenter', function () {
//         $(this).find('.language-label').fadeIn(200);
//     });

//     $('.card').on('mouseleave', function () {
//         $(this).find('.language-label').fadeOut(200);
//     });
// });

// add-lesson
// $(document).ready(function () {
//     $('.card').on('mouseenter', function () {
//         $(this).find('.language-label').fadeIn(200);
//     });

//     $('.card').on('mouseleave', function () {
//         $(this).find('.language-label').fadeOut(200);
//     });
// });
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




// ------------------------------------------------------------
// صفحة edits panel

// لفتح فورم التعديل على الكورس
function openEditForm(id) {
    document.getElementById('edit-form-' + id).style.display = 'block';

}

function closeEditForm(id) {
    document.getElementById('edit-form-' + id).style.display = 'none';
}


// لاختيار الكورس الذي نريد عرض دروسه
document.getElementById('course-select').addEventListener('change', function () {
    let courseId = this.value;
    let lessonsList = document.getElementById('lessons-list');

    if (!courseId) {
        lessonsList.innerHTML = '';
        return;
    }

    fetch(`/api/courses/${courseId}/lessons`)
        .then(response => response.json())
        .then(data => {

            if (data.length === 0) {
                lessonsList.innerHTML = '<p>No lessons found for this course.</p>';
                return;
            }


            let html = '<ul class="list-group">';
            data.forEach(lesson => {
                html += `
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>${lesson.title}</span>
                        <div>
                            <button class="btn btn-sm btn-outline-info me-2" onclick="editLesson(${lesson.id})">Edit</button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteLesson(${lesson.id})">Delete</button>
                        </div>
                    </li>
                `;
            });
            html += '</ul>';
            lessonsList.innerHTML = html;
        })
        .catch(error => {
            lessonsList.innerHTML = '<p>Error loading lessons.</p>';
            console.error('Error fetching lessons:', error);
        });
});

function editLesson(lessonId) {

    fetch(`/lessons/${lessonId}`, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json'
        },
    })
        .then(res => res.json())
        .then(lesson => {
            console.log(lesson);
            document.getElementById('editLessonId').value = lesson.id;
            document.getElementById('editLessonTitle').value = lesson.title;
            document.getElementById('editLessonDescription').value = lesson.content;
            document.getElementById('editLessonexample').value = lesson.example;
            document.getElementById('editLessonexampledes').value = lesson.example_description;

            const modal = new bootstrap.Modal(document.getElementById('editLessonModal'));
            modal.show();
        })
        .catch(err => {
            alert('Error loading lesson data.');
            console.error(err);
        });
}


document.getElementById('editLessonForm').addEventListener('submit', function (e) {
    e.preventDefault();

    let lessonId = document.getElementById('editLessonId').value;
    let title = document.getElementById('editLessonTitle').value;
    let content = document.getElementById('editLessonDescription').value;
    let example = document.getElementById('editLessonexample').value;
    let example_description = document.getElementById('editLessonexampledes').value;

    fetch(`/lessons/${lessonId}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json'
        },
        body: JSON.stringify({
            title,
            content,
            example,
            example_description,

        })
    })
        .then(response => {
            if (response.ok) {
                // إغلاق المودال
                bootstrap.Modal.getInstance(document.getElementById('editLessonModal')).hide();
                // تحديث القائمة
                document.getElementById('course-select').dispatchEvent(new Event('change'));
                alert('Lesson updated successfully.');
            } else {
                alert('Failed to update lesson.');
            }
        })
        .catch(err => {
            alert('Error updating lesson.');
            console.error(err);
        });
});

function deleteLesson(lessonId) {
    if (!confirm('Are you sure you want to delete this lesson?')) return;

    fetch(`/lessons/${lessonId}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json'
        }
    })
        .then(response => {
            if (response.ok) {
                alert('Lesson deleted successfully');
                // تحديث قائمة الدروس بعد الحذف
                document.getElementById('course-select').dispatchEvent(new Event('change'));
            } else {
                alert('Failed to delete lesson');
            }
        })
        .catch(err => {
            alert('Error deleting lesson');
            console.error(err);
        });
}




document.querySelectorAll('.toggle-edit').forEach(button => {
    button.addEventListener('click', function () {

        const id = this.dataset.id;

        const row = document.getElementById('edit-qz-form-' + id);

        row.style.display = (row.style.display === 'none') ? 'table-row' : 'none';
    });
});



document.querySelectorAll('.cancel-edit').forEach(button => {
    button.addEventListener('click', function () {
        const id = this.dataset.id;
        const row = document.getElementById('edit-qz-form-' + id);
        row.style.display = 'none';
    });
});











document.getElementById('quizzes-select').addEventListener('change', function () {
    let quizId = this.value;
    let quizzesList = document.getElementById('quizzes-list');

    if (!quizId) {
        quizzesList.innerHTML = '';
        return;
    }



    fetch(`/quizzes/${quizId}/questions`)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (!data || data.length === 0) {
                quizzesList.innerHTML = '<p>No questions found for this quiz.</p>';
                return;
            }

            function escapeHTML(str) {
                return str
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;")
                    .replace(/"/g, "&quot;")
                    .replace(/'/g, "&#039;");
            }

            let html = '<ul class="list-group">';
            data.forEach(question => {
                const qText = escapeHTML(question.question_text);
                const optionA = escapeHTML(question.option_a);
                const optionB = escapeHTML(question.option_b);
                const optionC = escapeHTML(question.option_c);
                const optionD = escapeHTML(question.option_d);

                html += `
        <li class="list-group-item">
            <strong>Q: ${qText}</strong>
            <ul class="mt-2">
                <li><input type="radio" disabled ${question.correct_option === 'a' ? 'checked' : ''}> A. ${optionA}</li>
                <li><input type="radio" disabled ${question.correct_option === 'b' ? 'checked' : ''}> B. ${optionB}</li>
                <li><input type="radio" disabled ${question.correct_option === 'c' ? 'checked' : ''}> C. ${optionC}</li>
                <li><input type="radio" disabled ${question.correct_option === 'd' ? 'checked' : ''}> D. ${optionD}</li>
            </ul>
            <div class="mt-2">
                <button class="btn btn-sm btn-outline-info me-2" onclick="editQuestion(${question.id})">Edit</button>
                <button class="btn btn-sm btn-outline-danger" onclick="deleteQuestion(${question.id})">Delete</button>
            </div>
        </li>
    `;
            });
            html += '</ul>';
            quizzesList.innerHTML = html;
        })
        .catch(error => {
            quizzesList.innerHTML = '<p>Error loading questions.</p>';
            console.error('Error fetching questions:', error);
        });
});


function editQuestion(questionId) {
    fetch(`/questions/${questionId}`)
        .then(response => response.json())
        .then(question => {
            document.getElementById('editQuestionId').value = question.id;
            document.getElementById('editQuestionText').value = question.question_text;
            document.getElementById('optionA').value = question.option_a;
            document.getElementById('optionB').value = question.option_b;
            document.getElementById('optionC').value = question.option_c;
            document.getElementById('optionD').value = question.option_d;
            document.getElementById('correctOption').value = question.correct_option;

            const modal = new bootstrap.Modal(document.getElementById('editQuestionModal'));
            modal.show();
        })
        .catch(err => {
            alert('Failed to load question data.');
            console.error(err);
        });
}



document.getElementById('editQuestionForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const questionId = document.getElementById('editQuestionId').value;

    const updatedData = {
        question_text: document.getElementById('editQuestionText').value,
        option_a: document.getElementById('optionA').value,
        option_b: document.getElementById('optionB').value,
        option_c: document.getElementById('optionC').value,
        option_d: document.getElementById('optionD').value,
        correct_option: document.getElementById('correctOption').value
    };

    fetch(`/questions/${questionId}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json'
        },
        body: JSON.stringify(updatedData)
    })
        .then(response => {
            if (response.ok) {
                bootstrap.Modal.getInstance(document.getElementById('editQuestionModal')).hide();
                alert('Question updated successfully');
                // إعادة تحميل الأسئلة
                document.getElementById('quizzes-select').dispatchEvent(new Event('change'));
            } else {
                alert('Failed to update question');
            }
        })
        .catch(err => {
            alert('Error updating question');
            console.error(err);
        });
});



function deleteQuestion(questionId) {
    if (!confirm('Are you sure you want to delete this question?')) return;

    fetch(`/questions/${questionId}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json'
        }
    })
        .then(response => {
            if (response.ok) {
                alert('Question deleted successfully');
                document.getElementById('quizzes-select').dispatchEvent(new Event('change'));
            } else {
                alert('Failed to delete question');
            }
        })
        .catch(err => {
            alert('Error deleting question');
            console.error(err);
        });
}





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