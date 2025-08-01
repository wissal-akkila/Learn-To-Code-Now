@extends('admin.admin-layout')

>



@section('title', 'Edits')

@section('content')

    <div class="container mt-3">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Tabs on the left -->
            <div class="col-md-3">
                <div class="nav tap flex-column nav-pills me-3" id="edit-tabs" role="tablist" aria-orientation="vertical">
                    <button class=" nav-link nav-link-tap text-info active " id="courses-tab" data-bs-toggle="pill"
                        data-bs-target="#courses" type="button" role="tab" aria-controls="courses"
                        aria-selected="true">Edit Courses</button>

                    <button class="nav-link tap text-info" id="lessons-tab" data-bs-toggle="pill" data-bs-target="#lessons"
                        type="button" role="tab" aria-controls="lessons" aria-selected="false">Edit Lessons</button>

                    <button class="nav-link tap text-info" id="quizzes-tab" data-bs-toggle="pill" data-bs-target="#quizzes"
                        type="button" role="tab" aria-controls="quizzes" aria-selected="false">Edit Quizzes</button>

                    <button class="nav-link tap text-info" id="questions-tab" data-bs-toggle="pill"
                        data-bs-target="#questions" type="button" role="tab" aria-controls="questions"
                        aria-selected="false">Edit Questions</button>
                </div>
            </div>

            <!-- Tab content on the right -->
            <div class="col-md-9">
                <div class="tab-content" id="edit-tabs-content">

                    <!-- Courses Tab -->
                    <div class="tab-pane fade show active" id="courses" role="tabpanel">
                        <h4 class="fw-bold">Edit Courses</h4>
                        <ul class="list-group">
                            @forelse($course as $course)
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>{{ $course->title }}</strong>
                                        <div class="d-flex gap-2">
                                            <button class="btn  btn-outline-info"
                                                onclick="openEditForm({{ $course->id }})">Edit</button>
                                            <form class="m-0" action="{{ route('courses.destroy', $course->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('هل أنت متأكد أنك تريد حذف هذا الكورس؟');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="h-100 btn btn-sm btn-outline-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Edit form (hidden by default) -->
                                    <div id="edit-form-{{ $course->id }}" class="edit-form mt-3" style="display: none;">
                                        <form method="POST" action="{{ route('courses.update', $course->id) }}">
                                            @csrf
                                            @method('PUT')

                                            <label>Title</label>
                                            <input type="text" name="title" value="{{ $course->title }}"
                                                class="form-control mb-2" required>

                                            <label>Description</label>
                                            <textarea name="description" class="form-control mb-2" required>{{ $course->description }}</textarea>

                                            <button type="submit" class="btn btn-outline-success btn-sm">Save</button>
                                            <button type="button" class="btn btn-outline-secondary btn-sm"
                                                onclick="closeEditForm({{ $course->id }})">Cancel</button>
                                        </form>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No courses available.</li>
                            @endforelse
                        </ul>
                    </div>



                    {{-- ----------------------------------------------------------------------------------------------------------------------------------- --}}
                    <!-- Lessons Tab -->
                    <div class="tab-pane fade" id="lessons" role="tabpanel">
                        <h4 class="fw-bold">Edit Lessons</h4>
                        <select name="course_id" id="course-select" class="form-select" required>
                            <option value="" disabled selected>Select Course</option>
                            <!-- #region -->
                            @foreach ($course2 ?? [] as $course)
                                <option value="{{ $course->id }}" @selected(old('course_id') == $course->id)>{{ $course->title }}
                                </option>
                            @endforeach
                        </select>

                        <div id="lessons-list" class="mt-3">

                        </div>
                    </div>
                    {{-- ------------------------------------------------------------------------------- --}}
                    <!-- Quizzes Tab -->
                    <div class="tab-pane fade" id="quizzes" role="tabpanel">
                        <h4 class="fw-bold">Edit Quizzes</h4>

                        <table class="table table-bordered   bg-white">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Quiz Title</th>

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($quizzes as $quiz)
                                    <tr>
                                        <td>{{ $quiz->id }}</td>
                                        <td>{{ $quiz->title }}</td>
                                        <td>
                                            <button type="button" class="btn  btn-outline-info me-2 toggle-edit"
                                                data-id="{{ $quiz->id }}">Edit</button>
                                            <form action="{{ route('quizzes.destroy', $quiz->id) }}" method="POST"
                                                style="display:inline-block;" onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn  btn-outline-danger">Delete</button>
                                            </form>

                                        </td>
                                    </tr>


                                    <tr id="edit-qz-form-{{ $quiz->id }}" style="display: none;">
                                        <td colspan="3" class="text-start">
                                            <form action="{{ route('quizzes.update', $quiz->id) }}" method="POST"
                                                class="border p-3 bg-light">
                                                @csrf
                                                @method('PUT')

                                                <div class="mb-2">
                                                    <label>Title</label>
                                                    <input type="text" name="title" value="{{ $quiz->title }}"
                                                        class="form-control" required>
                                                </div>


                                                <div class="mb-2">
                                                    <label>Time Limit (minutes)</label>
                                                    <input type="number" name="time_limit"
                                                        value="{{ $quiz->time_limit }}" class="form-control">
                                                </div>

                                                <div class="mb-2">
                                                    <label>Max Attempts</label>
                                                    <input type="number" name="max_attempts"
                                                        value="{{ $quiz->max_attempts }}" class="form-control">
                                                </div>

                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-outline-success">Save</button>
                                                    <button type="button" class="btn btn-outline-secondary cancel-edit"
                                                        data-id="{{ $quiz->id }}">Cancel</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>

                                @empty
                                    <tr>
                                        <td colspan="4">No quizzes found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- ------------------------------------------------------------------------------- --}}

                <!-- Questions Tab -->
                <div class="tab-pane fade" id="questions" role="tabpanel">
                    <h4 class="fw-bold">Edit Questions</h4>
                    <select id="quizzes-select" class="form-select" required>
                        <option value="" disabled selected>Select Quizze</option>
                        <!-- #region -->
                        @foreach ($quizzes ?? [] as $quizzes)
                            <option value="{{ $quizzes->id }}" @selected(old('quizzes_id') == $quizzes->id)>{{ $quizzes->title }}
                            </option>
                        @endforeach
                    </select>

                    <div id="quizzes-list" class="mt-3">

                    </div>
                </div>
            </div>
        </div>


        {{-- -------------------------------------------------------------------------- --}}
        <!-- مودال تعديل الدروس -->
        <div class="modal fade" id="editLessonModal" tabindex="-1" aria-labelledby="editLessonModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form id="editLessonForm" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-info fw-bold" id="editLessonModalLabel">Edit Lesson</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="editLessonId">

                        <div class="mb-3">
                            <label for="editLessonTitle" class="form-label text-light">Title</label>
                            <input type="text" class="form-control" id="editLessonTitle" required>
                        </div>

                        <div class="mb-3">
                            <label for="editLessonDescription" class="form-label text-light">Content</label>
                            <textarea class="form-control" id="editLessonDescription" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="editLessonexample" class="form-label text-light">example</label>
                            <textarea class="form-control" id="editLessonexample" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="editLessonexampledes" class="form-label text-light">example Description</label>
                            <textarea class="form-control" id="editLessonexampledes" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-success">Save</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>


        {{-- -------------------------------------------------------------------------- --}}
        <!-- مودال تعديل الاسئلة -->
        <div class="modal fade" id="editQuestionModal" tabindex="-1" aria-labelledby="editQuestionModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form id="editQuestionForm" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-info fw-bold" id="editQuestionModalLabel">Edit Question</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="editQuestionId">

                        <div class="mb-2">
                            <label class="form-label text-light">Question Text</label>
                            <textarea id="editQuestionText" class="form-control" required></textarea>
                        </div>

                        <div class="mb-2">
                            <label class="form-label text-light">Option A</label>
                            <input type="text" id="optionA" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label text-light">Option B</label>
                            <input type="text" id="optionB" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label text-light">Option C</label>
                            <input type="text" id="optionC" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label text-light">Option D</label>
                            <input type="text" id="optionD" class="form-control" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label text-light">Correct Option</label>
                            <select id="correctOption" class="form-select" required>
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-success">Save</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>



        <script>
            // لفتح فورم التعديل على الكورس
            function openEditForm(id) {
                document.getElementById('edit-form-' + id).style.display = 'block';

            }

            function closeEditForm(id) {
                document.getElementById('edit-form-' + id).style.display = 'none';
            }


            // لاختيار الكورس الذي نريد عرض دروسه
            document.getElementById('course-select').addEventListener('change', function() {
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


            document.getElementById('editLessonForm').addEventListener('submit', function(e) {
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
                button.addEventListener('click', function() {

                    const id = this.dataset.id;

                    const row = document.getElementById('edit-qz-form-' + id);

                    row.style.display = (row.style.display === 'none') ? 'table-row' : 'none';
                });
            });



            document.querySelectorAll('.cancel-edit').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.dataset.id;
                    const row = document.getElementById('edit-qz-form-' + id);
                    row.style.display = 'none';
                });
            });











            document.getElementById('quizzes-select').addEventListener('change', function() {
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



            document.getElementById('editQuestionForm').addEventListener('submit', function(e) {
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
        </script>
    @endsection
