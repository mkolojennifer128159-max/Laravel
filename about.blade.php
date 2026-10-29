@extends('layouts.app')

@section('title', 'About the studio')
@section('meta_description', 'Learn about Atelier Nova, our values, and our people-first approach to creative work.')

@section('content')
    <section class="page-hero section-wrap">
        <p class="eyebrow"><span class="eyebrow-line"></span> A little about us</p>
        <h1>We make things<br>with <span>meaning.</span></h1>
        <p class="page-hero-intro">Atelier Nova is a small independent studio that believes good design should look lovely, work beautifully, and make life a little easier.</p>
        <div class="about-art" role="img" aria-label="Abstract overlapping shapes representing collaboration"><div class="about-shape shape-a"></div><div class="about-shape shape-b"></div><div class="about-shape shape-c"></div><span>Curiosity<br>looks good<br>on everyone.</span></div>
    </section>

    <section class="section-wrap about-story">
        <div class="story-label"><p class="eyebrow">Our point of view</p><span>01 — WHY WE EXIST</span></div>
        <div class="story-copy"><h2>Clear thinking.<br><span>Kind collaboration.</span></h2><p>We started Atelier Nova around a simple idea: creative work is at its best when it solves a real problem and still has a little soul. We combine thoughtful planning with playful experimentation to help people and businesses show up with confidence.</p><p>We keep our team intentionally small, our process open, and our attention on the details that make the difference.</p></div>
    </section>

    <section class="values-section">
        <div class="section-wrap"><div class="section-heading"><div><p class="eyebrow">The things we come back to</p><h2>Our values, <span>in practice.</span></h2></div><p class="section-intro">These aren't just words on a wall. They're how we make decisions, work with people, and measure a good result.</p></div>
            <div class="values-grid">
                <article class="value-item"><span class="value-index">01</span><h3>Stay curious.</h3><p>We ask questions, explore possibilities, and never assume the first idea is the only idea.</p></article>
                <article class="value-item"><span class="value-index">02</span><h3>Keep it human.</h3><p>We design for real people, with empathy, accessibility, and clear communication at the centre.</p></article>
                <article class="value-item"><span class="value-index">03</span><h3>Make it matter.</h3><p>Every choice has a reason. We focus on work that has a purpose beyond looking impressive.</p></article>
            </div>
        </div>
    </section>

    <section class="section-wrap about-bottom"><div><p class="eyebrow">Have a project in mind?</p><h2>Let's make room<br>for <span>something good.</span></h2></div><a class="button button-primary" href="{{ route('contact', ['theme' => $theme]) }}">Talk to our team <span aria-hidden="true">↗</span></a></section>
@endsection
