@extends('layouts.app')

@section('title', 'Get in touch')
@section('meta_description', 'Contact Atelier Nova to talk about a brand, website, or creative project.')

@section('content')
    <section class="contact-section section-wrap">
        <div class="contact-copy">
            <p class="eyebrow"><span class="eyebrow-line"></span> Let's start a conversation</p>
            <h1>Tell us what<br>you're <span>dreaming up.</span></h1>
            <p class="contact-intro">Big idea, tiny question, or a project that's still taking shape. We'd love to hear about it.</p>
            <div class="contact-note"><span class="contact-note-icon" aria-hidden="true">✳</span><div><strong>A real person will listen.</strong><p>This is a classroom demo form. Laravel validates your entry and displays a confirmation message.</p></div></div>
            <div class="contact-detail"><span>EMAIL</span><p>hello@ateliernova.example</p><small>Sample contact detail for the assignment</small></div>
        </div>

        <div class="contact-form-card">
            <div class="form-heading"><span>YOUR TURN</span><h2>Let's talk details.</h2><p>Fill in the fields below.</p></div>

            @if (session('success'))
                <div class="success-message" role="status">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="error-summary" role="alert">Please check the highlighted fields and try again.</div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                @csrf
                <input type="hidden" name="theme" value="{{ $theme }}">
                <div class="form-field">
                    <label for="name">Your name</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="e.g. Alex Morgan" autocomplete="name" required maxlength="80" class="{{ $errors->has('name') ? 'field-invalid' : '' }}">
                    @error('name')<span class="field-error">{{ $message }}</span>@enderror
                </div>
                <div class="form-field">
                    <label for="email">Email address</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="alex@example.com" autocomplete="email" required maxlength="150" class="{{ $errors->has('email') ? 'field-invalid' : '' }}">
                    @error('email')<span class="field-error">{{ $message }}</span>@enderror
                </div>
                <div class="form-field">
                    <label for="message">Tell us a little about it</label>
                    <textarea id="message" name="message" rows="5" placeholder="What would you love to make?" required maxlength="2000" class="{{ $errors->has('message') ? 'field-invalid' : '' }}">{{ old('message') }}</textarea>
                    @error('message')<span class="field-error">{{ $message }}</span>@enderror
                </div>
                <button type="submit" class="button button-primary form-submit">Send your message <span aria-hidden="true">↗</span></button>
            </form>
        </div>
    </section>
@endsection
