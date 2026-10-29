@extends('layouts.app')

@section('title', 'Creative studio')
@section('meta_description', 'Discover Atelier Nova, a creative studio for thoughtful branding, web design, and digital experiences.')

@section('content')
    <section class="hero section-wrap">
        <div class="hero-copy">
            <p class="eyebrow"><span class="eyebrow-line"></span> Independent creative studio</p>
            <h1>Good ideas deserve <span>a beautiful</span> digital home.</h1>
            <p class="hero-description">We bring brands to life with thoughtful strategy, expressive design, and websites that are a joy to use.</p>
            <div class="button-row">
                <a class="button button-primary" href="#services">Explore what we do <span aria-hidden="true">↘</span></a>
                <a class="text-link" href="{{ route('about', ['theme' => $theme]) }}">Meet the studio <span aria-hidden="true">→</span></a>
            </div>
            <div class="hero-proof">
                <div class="avatar-stack" aria-hidden="true"><span>A</span><span>M</span><span>J</span></div>
                <p><strong>Small team, big ideas.</strong><br>Made with care from start to finish.</p>
            </div>
        </div>

        <div class="hero-art" aria-label="Abstract colourful creative design illustration" role="img">
            <div class="art-orbit orbit-one"></div>
            <div class="art-orbit orbit-two"></div>
            <div class="art-sun"></div>
            <div class="art-card art-card-back"><span class="mini-label">IDEAS IN MOTION</span><div class="mini-bars"><i></i><i></i><i></i><i></i></div></div>
            <div class="art-card art-card-front"><span class="card-dot"></span><span class="art-card-title">Make it<br><em>matter.</em></span><span class="art-card-caption">STRATEGY · DESIGN · DIGITAL</span></div>
            <div class="art-sticker">Stay<br>curious <span aria-hidden="true">✳</span></div>
            <div class="art-bottom-note"><span></span> A little different, by design.</div>
        </div>
    </section>

    <section class="partner-strip" aria-label="Studio values">
        <div class="section-wrap partner-inner">
            <span>Curious by nature</span><i aria-hidden="true">✳</i><span>Design with purpose</span><i aria-hidden="true">✳</i><span>Made for real people</span><i aria-hidden="true">✳</i><span>Always evolving</span>
        </div>
    </section>

    <section class="section-wrap services-section" id="services">
        <div class="section-heading">
            <div><p class="eyebrow">What we bring to the table</p><h2>Creative thinking.<br><span>Practical magic.</span></h2></div>
            <p class="section-intro">From the first spark to the final detail, we make the complicated feel clear and the ordinary feel memorable.</p>
        </div>
        <div class="service-grid">
            <article class="service-card service-card-one">
                <div class="service-icon" aria-hidden="true">✳</div><span class="service-number">01 / STRATEGY</span>
                <h3>Find your point of view.</h3><p>Brand foundations, creative direction, and a clear story your audience can connect with.</p><a href="{{ route('contact', ['theme' => $theme]) }}" aria-label="Ask us about strategy">Discover more <span aria-hidden="true">↗</span></a>
            </article>
            <article class="service-card service-card-two">
                <div class="service-icon" aria-hidden="true">◒</div><span class="service-number">02 / DESIGN</span>
                <h3>Look like you mean it.</h3><p>Distinctive visual identities and design systems that bring consistency to every touchpoint.</p><a href="{{ route('contact', ['theme' => $theme]) }}" aria-label="Ask us about design">Discover more <span aria-hidden="true">↗</span></a>
            </article>
            <article class="service-card service-card-three">
                <div class="service-icon" aria-hidden="true">⌘</div><span class="service-number">03 / DIGITAL</span>
                <h3>Make online feel easy.</h3><p>Responsive websites and digital experiences designed around the people who use them.</p><a href="{{ route('contact', ['theme' => $theme]) }}" aria-label="Ask us about digital work">Discover more <span aria-hidden="true">↗</span></a>
            </article>
        </div>
    </section>

    <section class="feature-band">
        <div class="section-wrap feature-inner">
            <div class="feature-copy"><p class="eyebrow eyebrow-light">Our kind of collaboration</p><h2>Good work happens when we make it <em>together.</em></h2><p>We listen first, ask better questions, and keep you part of the process. No mystery meetings. No design for design's sake.</p><a class="button button-light" href="{{ route('about', ['theme' => $theme]) }}">A little about us <span aria-hidden="true">→</span></a></div>
            <div class="feature-art" aria-hidden="true"><div class="feature-ring"></div><div class="feature-disc disc-a">THINK</div><div class="feature-disc disc-b">MAKE</div><div class="feature-disc disc-c">GROW</div><span class="feature-spark">✳</span></div>
        </div>
    </section>

    <section class="section-wrap closing-cta">
        <p class="eyebrow">Your next chapter starts here</p><h2>Have a good one<br><span>in mind?</span></h2><p>Let's turn that little spark into something people remember.</p><a class="button button-primary" href="{{ route('contact', ['theme' => $theme]) }}">Tell us about it <span aria-hidden="true">↗</span></a>
    </section>
@endsection
