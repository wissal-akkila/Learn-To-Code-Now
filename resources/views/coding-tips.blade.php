@extends('layouts.app')

@section('title', 'Coding Tips')

@section('content')
    <div class="section-wrapper py-5">
        <!-- Swiper Section (Left) -->
        <div style="    max-width: 260px;">

            <div class="swiper swiper-tips tipsSwiper ">
                <!-- أضف class swiper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-tips-slide">
                        <p>
                            <strong class="">Master the Basics First:</strong><br>
                            <span class="">Start with strong fundamentals like variables, loops, and functions. A
                                solid foundationmakes advanced concepts easier to grasp.</span>
                        </p>
                    </div>
                    <div class="swiper-slide swiper-tips-slide">
                        <p>
                            <strong class="">Practice What You Learn Immediately:</strong><br>
                            <span class="">Don’t just watch or read tutorials—type the code,
                                experiment with it,
                                and apply it in mini-projects</span>
                        </p>
                    </div>
                    <div class="swiper-slide swiper-tips-slide">
                        <p>
                            <strong class="">Break Down Problems into Smaller Parts:</strong><br>
                            <span class="">Divide complex tasks into manageable chunks. This helps reduce
                                overwhelm and makes debugging easier</span>
                        </p>
                    </div>
                    <div class="swiper-slide swiper-tips-slide">
                        <p>
                            <strong class="">Use Multiple Learning Resources:</strong><br>
                            <span class="">Combine video tutorials, documentation, forums, and blogs to get
                                diverse perspectives and better understanding</span>
                        </p>
                    </div>
                    <div class="swiper-slide swiper-tips-slide">
                        <p>
                            <strong class="">Learn from Mistakes and Bugs:</strong><br>
                            <span class="">Bugs are your best teachers. Debugging improves your logical thinking
                                and deepens your understanding of how things work</span>
                        </p>
                    </div>
                    <div class="swiper-slide swiper-tips-slide">
                        <p>
                            <strong class="">Build Real Projects:</strong><br>
                            <span class="">Start with simple apps like to-do lists or calculators. Real-world
                                practice is the best way to retain knowledge and build confidence</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>



        
        <div class="text-section o">
            <h2 class="fw-bold text-info " >  <i class="bi bi-lightbulb-fill"></i>Coding Tips</h2>
            <p>Explore helpful tips to enhance your coding journey. Swipe through the cards to discover advice that will
                boost your learning and development process.</p>
        </div>
    </div>


    </div>
@endsection