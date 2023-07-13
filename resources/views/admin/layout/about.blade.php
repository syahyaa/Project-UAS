@extends('admin.layout.app')
{{-- orang tua dari setiap halaman --}}


{{-- extends itu tulisan atau perintah agar kita dapat menggunakan semua kode yang ada di dalam file tersebut --}}

{{-- halaman dashboard adalah anak dari si parent --}}
{{-- @include('frontend.layout.top')
@include('frontend.layout.header') --}}
@section('content')
    <!-- About-->
    <div class="pagetitle">
        <h1>About</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">About</li>
            </ol>
        </nav>
    </div>
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2>ABOUT ME</h2>
                    <p class="lead mb-5">
                        Introduce my self, my name is Dean Pramona and you can call me Dean. I'm from sukabumi but now i live in Jakarta. 
                        I am a student majoring in information systems at the University of Technology in Jakarta.
                        Nice to meet you
                        !
                    </p>
                    <a class="btn btn-dark btn-xl" href="https://wa.me/6285693458971">Closer To Me</a>
                </div>
            </div>
        </div>
    </section>
@endsection
