<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @extends('layout.app')

</head>

<body>
    <main id="main">
        <!-- Breadcrumbs -->
        <section id="breadcrumbs" class="breadcrumbs" style="margin-top: 10px">
            <div class="container">
                <ol>
                    <li><a href="{{ route('news.index') }}">News</a></li>
                    <li>News Details</li>
                </ol>
                <h2>{{ $news->title }}</h2>
            </div>
        </section>

        <!-- News Details Section -->
        <section id="news-details" class="news-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="news-details-slider swiper-container">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/' . $news->image) }}" alt="{{ $news->title }}" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="news-info">
                            <h3>{{ $news->title }}</h3>
                            <ul>
                                <li><strong>Date</strong>: {{ date('F d, Y', strtotime($news->date)) }}</li>
                                @if ($news->url)
                                    <li>
                                        <strong>URL</strong>:
                                        <a href="{{ $news->url }}">{{ $news->url }}</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="news-description">
                            <div id="dropdown-content" class="dropdown-content">
                                {!! $news->content !!}
                            </div>
                            <button id="dropdown-button" class="btn btn-primary">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @section('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var dropdownButton = document.getElementById("dropdown-button");
                var dropdownContent = document.getElementById("dropdown-content");

                dropdownButton.addEventListener("click", function() {
                    dropdownContent.classList.toggle("show");

                    if (dropdownContent.classList.contains("show")) {
                        dropdownButton.textContent = "Show Less";
                    } else {
                        dropdownButton.textContent = "Read More";
                    }
                });
            });
        </script>
    @endsection
</body>

</html>
