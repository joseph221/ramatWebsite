<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
     <link rel="shortcut icon" href="{{ asset('assets/images/fav.jpg') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slider/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slider/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

	 <!-- Vendor CSS Files -->
	
	 <link href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}" rel="stylesheet">
	
    <style>
        * {
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent
        }
		.logo-text{
			font-weight: 900;
			text-overflow: none;
			white-space: nowrap;
			font-size:2vw;
		}

        .masthead {
            position: relative;
            padding-bottom: 15px;
            background: rgb(240,83,49)
        }

        .masthead:before {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 15px;
            opacity: .3;
            background: url({{ asset('assets/images/patten.svg') }}) 50% -3px repeat
        }

        .masthead .image-auto {
            padding-top: 41.66666667%;
            background: #000
        }

        .masthead .image-auto:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            z-index: 1;
            background: rgba(255, 206, 132, .35);
            mix-blend-mode: soft-light
        }

        .masthead .image-auto:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            z-index: 1;
            opacity: .6;
            background-image: linear-gradient(to right, #000 0, rgba(0, 0, 0, 0) 100%)
        }

        .masthead .image-auto picture {
            opacity: .8
        }

        .masthead .image-auto.no-overlay:after,
        .masthead .image-auto.no-overlay:before {
            display: none
        }

        .masthead .image-auto.no-overlay picture {
            opacity: 1
        }

        .masthead .masthead-content {
            position: absolute;
            left: 0;
            bottom: 40px;
            z-index: 1;
            width: 100%
        }

        .masthead .masthead-content .bound-layout {
            height: 100%
        }

        .masthead .page-title {
            font-size: 8.75rem;
            line-height: 1;
            color: #fff
        }

        .masthead .breadcrumb {
            color: #bbb
        }

        .masthead .bc-link {
            color: #fff
        }

		

		body, html {
			height: 100%;
		}

		.left-shade {
			fill: orange;
		}

		.right-shade {
			fill: lighten(orange, 30%);
		}

        @media (max-width:900px) {
            .masthead .image-auto {
                padding-top: 54.16666667%
            }

            .masthead .page-title {
                font-size: 5rem
            }
        }

        @media (max-width:600px) {
            .masthead .image-auto {
                padding-top: 75%
            }

            .masthead .page-title {
                font-size: 3.75rem
            }
        }

        @media (max-width:420px) {
            .masthead .page-title {
                font-size: 2.5rem
            }
        }
    </style>
    <style>
		@font-face {
			font-family: 'HelloSunshineMarker';
			src: url(https://www.buildon.org/wp-content/themes/nmc_buildon/css/fonts/HelloSunshineMarker-400.woff2), url(https://www.buildon.org/wp-content/themes/nmc_buildon/css/fonts/HelloSunshineMarker-400.woff);
			font-weight: 400;
			font-style: normal;
			font-display: fallback;
		}

		/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
		html {
			line-height: 1.15;
			-webkit-text-size-adjust: 100%
		}

		body {
			margin: 0
		}

		main {
			display: block
		}

		h1 {
			font-size: 2em;
			margin: .67em 0
		}

		hr {
			box-sizing: content-box;
			height: 0;
			overflow: visible
		}

		pre {
			font-family: monospace, monospace;
			font-size: 1em
		}

		abbr[title] {
			text-decoration: underline;
			text-decoration: underline dotted
		}

		b,
		strong {
			font-weight: bolder
		}

		code,
		kbd,
		samp {
			font-family: monospace, monospace;
			font-size: 1em
		}

		small {
			font-size: 80%
		}

		sub,
		sup {
			font-size: 75%;
			line-height: 0;
			position: relative;
			vertical-align: baseline
		}

		sub {
			bottom: -.25em
		}

		sup {
			top: -.5em
		}

		button,
		input,
		optgroup,
		select,
		textarea {
			font-family: inherit;
			font-size: 100%;
			line-height: 1.15;
			margin: 0
		}

		button,
		input {
			overflow: visible
		}

		button,
		select {
			text-transform: none
		}

		[type=button],
		[type=reset],
		[type=submit],
		button {
			-webkit-appearance: button
		}

		[type=button]::-moz-focus-inner,
		[type=reset]::-moz-focus-inner,
		[type=submit]::-moz-focus-inner,
		button::-moz-focus-inner {
			border-style: none;
			padding: 0
		}

		[type=button]:-moz-focusring,
		[type=reset]:-moz-focusring,
		[type=submit]:-moz-focusring,
		button:-moz-focusring {
			outline: 1px dotted ButtonText
		}

		fieldset {
			padding: .35em .75em .625em
		}

		legend {
			box-sizing: border-box;
			color: inherit;
			display: table;
			max-width: 100%;
			padding: 0;
			white-space: normal
		}

		progress {
			vertical-align: baseline
		}

		textarea {
			overflow: auto
		}

		[type=number]::-webkit-inner-spin-button,
		[type=number]::-webkit-outer-spin-button {
			height: auto
		}

		[type=search] {
			-webkit-appearance: textfield;
			outline-offset: -2px
		}

		[type=search]::-webkit-search-decoration {
			-webkit-appearance: none
		}

		::-webkit-file-upload-button {
			-webkit-appearance: button;
			font: inherit
		}

		details {
			display: block
		}

		summary {
			display: list-item
		}

		template {
			display: none
		}

		* {
			box-sizing: border-box;
			-webkit-tap-highlight-color: transparent
		}

		.slick-slider {
			position: relative;
			display: block;
			box-sizing: border-box;
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			-ms-touch-action: pan-y;
			touch-action: pan-y;
			-webkit-tap-highlight-color: transparent
		}

		.slick-list {
			position: relative;
			overflow: hidden;
			display: block;
			margin: 0;
			padding: 0
		}

		.slick-list:focus {
			outline: 0
		}

		.slick-list.dragging {
			cursor: pointer;
			cursor: hand
		}

		.slick-slider .slick-list,
		.slick-slider .slick-track {
			-webkit-transform: translate3d(0, 0, 0);
			-moz-transform: translate3d(0, 0, 0);
			-ms-transform: translate3d(0, 0, 0);
			-o-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0)
		}

		.slick-track {
			position: relative;
			left: 0;
			top: 0;
			display: block;
			margin-left: auto;
			margin-right: auto
		}

		.slick-track:after,
		.slick-track:before {
			content: "";
			display: table
		}

		.slick-track:after {
			clear: both
		}

		.slick-loading .slick-track {
			visibility: hidden
		}

		.slick-slide {
			float: left;
			height: 100%;
			min-height: 1px;
			display: none
		}

		[dir=rtl] .slick-slide {
			float: right
		}

		.slick-slide img {
			display: block
		}

		.slick-slide.slick-loading img {
			display: none
		}

		.slick-slide.dragging img {
			pointer-events: none
		}

		.slick-initialized .slick-slide {
			display: block
		}

		.slick-loading .slick-slide {
			visibility: hidden
		}

		.slick-vertical .slick-slide {
			display: block;
			height: auto;
			border: 1px solid transparent
		}

		.slick-arrow.slick-hidden {
			display: none
		}

		::-moz-selection {
			color: #fff !important;
			background: #f16523
		}

		::selection {
			color: #fff !important;
			background: #f16523
		}

		body,
		html {
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			color: #202020;
			-webkit-font-smoothing: antialiased
		}

		blockquote,
		dl,
		form,
		ol,
		p,
		pre,
		table,
		ul {
			margin: 0 0 2em;
			line-height: 1.88235294
		}

		blockquote:last-child,
		dl:last-child,
		form:last-child,
		ol:last-child,
		p:last-child,
		pre:last-child,
		table:last-child,
		ul:last-child {
			margin-bottom: 0
		}

		h1 {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			margin: 0;
			font-family: HelloSunshineMarker, Arial, Helvetica Neue, Helvetica, sans-serif;
			font-size: 5.375rem;
			font-weight: 400;
			line-height: 1;
			color: #000
		}

		h1:first-child {
			margin-top: 0
		}

		h1:last-child {
			margin-bottom: 0
		}

		@media (max-width:900px) {
			h1 {
				font-size: 4.375rem
			}
		}

		@media (max-width:600px) {
			h1 {
				font-size: 3.5rem
			}
		}

		h2 {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			font-size: 3.5rem
		}

		h2:first-child {
			margin-top: 0
		}

		h2:last-child {
			margin-bottom: 0
		}

		@media (max-width:600px) {
			h2 {
				font-size: 2.875rem
			}
		}

		h3 {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			font-size: 2.875rem
		}

		h3:first-child {
			margin-top: 0
		}

		h3:last-child {
			margin-bottom: 0
		}

		@media (max-width:600px) {
			h3 {
				font-size: 2rem
			}
		}

		h4 {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			font-size: 2rem
		}

		h4:first-child {
			margin-top: 0
		}

		h4:last-child {
			margin-bottom: 0
		}

		@media (max-width:600px) {
			h4 {
				font-size: 1.375rem
			}
		}

		h5 {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			font-size: 1.375rem;
			font-weight: 400
		}

		h5:first-child {
			margin-top: 0
		}

		h5:last-child {
			margin-bottom: 0
		}

		h6 {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			font-size: 1.125rem
		}

		h6:first-child {
			margin-top: 0
		}

		h6:last-child {
			margin-bottom: 0
		}

		a {
			color: #f16523;
			text-decoration: none;
			border-bottom: 1px solid rgba(241, 101, 35, .5);
			transition: .2s ease-out;
			transition: .2s
		}

		a[href] {
			cursor: pointer
		}

		a>* {
			transition: .2s ease-out;
			transition: .2s
		}

		a svg path {
			transition: .2s ease-out;
			transition: .2s
		}

		a[href^="tel:"] {
			white-space: nowrap
		}

		a:hover {
			color: #fbb040;
			border-bottom-color: rgba(251, 176, 64, .5)
		}

		a:focus {
			outline: 1px solid #aaa
		}

		hr {
			clear: both;
			border: none;
			border-top: 1px solid #cecfce
		}

		b,
		strong {
			font-weight: 700
		}

		em,
		i {
			font-style: italic
		}

		.noList {
			list-style: none;
			margin: 0;
			padding: 0
		}

		.noList li:before {
			display: none
		}

		ul.noList {
			list-style: none;
			margin: 0;
			padding: 0
		}

		ul.noList li:before {
			display: none
		}

		ol.noList {
			list-style: none;
			margin: 0;
			padding: 0
		}

		ol.noList li:before {
			display: none
		}

		.btn,
		button[type=submit],
		input[type=submit] {
			position: relative;
			z-index: 1;
			display: inline-block;
			padding: 15px 40px;
			max-width: 100%;
			line-height: 1;
			font-size: 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			letter-spacing: 2px;
			text-align: center;
			text-decoration: none !important;
			text-transform: uppercase;
			color: #fff;
			background: #cc2126;
			border: 2px solid #cc2126;
			border-radius: 0;
			box-shadow: none;
			-webkit-appearance: none;
			cursor: pointer;
			vertical-align: middle;
			overflow: hidden;
			transition: .2s
		}

		.btn:hover,
		button[type=submit]:hover,
		input[type=submit]:hover {
			color: #fff;
			background: #a8080d;
			border-color: #a8080d
		}

		.btn:focus,
		button[type=submit]:focus,
		input[type=submit]:focus {
			outline: 1px solid #000;
			background: #a8080d;
			border-color: #a8080d
		}

		.btn.disabled,
		button[type=submit].disabled,
		input[type=submit].disabled {
			background: #aaa;
			pointer-events: none
		}

		.btn.outline,
		button[type=submit].outline,
		input[type=submit].outline {
			color: #cc2126;
			background: 0 0;
			border-color: #cc2126
		}

		.btn.outline:hover,
		button[type=submit].outline:hover,
		input[type=submit].outline:hover {
			border-color: #cc2126
		}

		.btn.hover-white:hover,
		button[type=submit].hover-white:hover,
		input[type=submit].hover-white:hover {
			color: #cc2126;
			background: #fff;
			border-color: #fff
		}

		.btn.orange,
		button[type=submit].orange,
		input[type=submit].orange {
			background: #f16523;
			border-color: #f16523
		}

		.btn.orange:focus,
		.btn.orange:hover,
		button[type=submit].orange:focus,
		button[type=submit].orange:hover,
		input[type=submit].orange:focus,
		input[type=submit].orange:hover {
			background: #dd500e;
			border-color: #dd500e
		}

		.btn.gold,
		button[type=submit].gold,
		input[type=submit].gold {
			color: #000;
			background: #fbb040;
			border-color: #fbb040
		}

		.btn.gold:focus,
		.btn.gold:hover,
		button[type=submit].gold:focus,
		button[type=submit].gold:hover,
		input[type=submit].gold:focus,
		input[type=submit].gold:hover {
			background: #fa9f18;
			border-color: #fa9f18
		}

		.btn.black,
		button[type=submit].black,
		input[type=submit].black {
			background: #000;
			border-color: #000
		}

		.btn.black:focus,
		.btn.black:hover,
		button[type=submit].black:focus,
		button[type=submit].black:hover,
		input[type=submit].black:focus,
		input[type=submit].black:hover {
			color: #000;
			background: #fff;
			border-color: #fff
		}

		.btn.outline-white,
		button[type=submit].outline-white,
		input[type=submit].outline-white {
			color: #fff;
			background: 0 0;
			border-color: #fff
		}

		.btn.outline-white:hover,
		button[type=submit].outline-white:hover,
		input[type=submit].outline-white:hover {
			border-color: #cc2126
		}

		.select {
			display: block;
			-webkit-appearance: none;
			-moz-appearance: none;
			padding: 0 45px 0 15px;
			width: 100%;
			height: 50px;
			color: #202020;
			background: #fff url(https://www.buildon.org/wp-content/themes/nmc_buildon/assets/select-arrow.svg) calc(100% - 15px) 50% no-repeat;
			background-size: 15px 9px;
			border: 1px solid #cecfce;
			border-radius: 0;
			transition: .2s
		}

		.select::-ms-expand {
			display: none
		}

		.select:focus {
			outline: 0;
			border-color: #f16523
		}

		.form {
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif
		}

		.form fieldset {
			margin-bottom: 1.5em;
			padding: 0;
			border: none
		}

		.form label {
			display: block;
			margin: 0 0 10px;
			line-height: 1.2
		}

		.form input[type=email],
		.form input[type=number],
		.form input[type=password],
		.form input[type=search],
		.form input[type=tel],
		.form input[type=text],
		.form input[type=url],
		.form textarea {
			display: block;
			padding: 0 15px;
			width: 100%;
			height: 50px;
			line-height: 1.2;
			border: 1px solid #cecfce;
			background: #fff;
			box-shadow: none;
			border-radius: 0 !important;
			-webkit-appearance: none;
			box-sizing: border-box;
			transition: .2s
		}

		.form input[type=email]:focus,
		.form input[type=number]:focus,
		.form input[type=password]:focus,
		.form input[type=search]:focus,
		.form input[type=tel]:focus,
		.form input[type=text]:focus,
		.form input[type=url]:focus,
		.form textarea:focus {
			outline: 0;
			border-color: #f16523
		}

		.form textarea {
			padding: 15px;
			height: 100px
		}

		.form select {
			display: block;
			-webkit-appearance: none;
			-moz-appearance: none;
			padding: 0 45px 0 15px;
			width: 100%;
			height: 50px;
			color: #202020;
			background: #fff url(https://www.buildon.org/wp-content/themes/nmc_buildon/assets/select-arrow.svg) calc(100% - 15px) 50% no-repeat;
			background-size: 15px 9px;
			border: 1px solid #cecfce;
			border-radius: 0;
			transition: .2s
		}

		.form select::-ms-expand {
			display: none
		}

		.form select:focus {
			outline: 0;
			border-color: #f16523
		}

		.form .disclaimer-text {
			margin: 1em 0 2em;
			font-size: 12px;
			font-style: italic
		}

		form {
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif
		}

		form fieldset {
			margin-bottom: 1.5em;
			padding: 0;
			border: none
		}

		form label {
			display: block;
			margin: 0 0 10px;
			line-height: 1.2
		}

		form input[type=email],
		form input[type=number],
		form input[type=password],
		form input[type=search],
		form input[type=tel],
		form input[type=text],
		form input[type=url],
		form textarea {
			display: block;
			padding: 0 15px;
			width: 100%;
			height: 50px;
			line-height: 1.2;
			border: 1px solid #cecfce;
			background: #fff;
			box-shadow: none;
			border-radius: 0 !important;
			-webkit-appearance: none;
			box-sizing: border-box;
			transition: .2s
		}

		form input[type=email]:focus,
		form input[type=number]:focus,
		form input[type=password]:focus,
		form input[type=search]:focus,
		form input[type=tel]:focus,
		form input[type=text]:focus,
		form input[type=url]:focus,
		form textarea:focus {
			outline: 0;
			border-color: #f16523
		}

		form textarea {
			padding: 15px;
			height: 100px
		}

		form select {
			display: block;
			-webkit-appearance: none;
			-moz-appearance: none;
			padding: 0 45px 0 15px;
			width: 100%;
			height: 50px;
			color: #202020;
			background: #fff url(https://www.buildon.org/wp-content/themes/nmc_buildon/assets/select-arrow.svg) calc(100% - 15px) 50% no-repeat;
			background-size: 15px 9px;
			border: 1px solid #cecfce;
			border-radius: 0;
			transition: .2s
		}

		form select::-ms-expand {
			display: none
		}

		form select:focus {
			outline: 0;
			border-color: #f16523
		}

		form .disclaimer-text {
			margin: 1em 0 2em;
			font-size: 12px;
			font-style: italic
		}

		.placeholder {
			opacity: 1;
			color: #202020
		}

		::-webkit-input-placeholder {
			opacity: 1;
			color: #202020
		}

		:-moz-placeholder {
			opacity: 1;
			color: #202020
		}

		::-moz-placeholder {
			opacity: 1;
			color: #202020
		}

		:-ms-input-placeholder {
			opacity: 1;
			color: #202020
		}

		.bound-none {
			position: relative;
			margin: 0 auto;
			width: 100%
		}

		.bound-maximum {
			position: relative;
			margin: 0 auto;
			width: 94vw
		}

		@media (max-width:600px) {
			.bound-maximum {
				width: 88vw
			}
		}

		.bound-layout {
			position: relative;
			margin: 0 auto;
			width: 94vw;
			max-width: 1080px
		}

		@media (max-width:600px) {
			.bound-layout {
				width: 88vw
			}
		}

		.bound-wide {
			position: relative;
			margin: 0 auto;
			width: 94vw;
			max-width: 1290px
		}

		@media (max-width:600px) {
			.bound-wide {
				width: 88vw
			}
		}

		.bound-narrow {
			position: relative;
			margin: 0 auto;
			width: 94vw;
			max-width: 770px
		}

		@media (max-width:600px) {
			.bound-narrow {
				width: 88vw
			}
		}

		.footer {
			padding: 74px 0 calc(25.83% + 54px);
			font-size: 16px;
			color: #fff;
			background-color: #121112;
			background-position: 50% 100%;
			background-size: 100% auto;
			background-repeat: no-repeat
		}

		.footer .bound-layout {
			display: flex;
			flex-wrap: wrap
		}

		.footer_header {
			margin: 0 0 1em;
			font-size: 22px;
			font-weight: 400;
			text-transform: uppercase;
			color: #fff
		}

		.footer-form-wrap {
			flex-basis: 65.74074074%;
			margin-bottom: 60px;
			overflow: hidden
		}

		.footer-form {
			height: 70px
		}

		.footer_form-layout {
			display: flex
		}

		.footer_form-field {
			margin-right: 10px;
			flex-grow: 1
		}

		.footer_form-label {
			position: absolute;
			margin: -1px;
			padding: 0;
			width: 1px;
			height: 1px;
			overflow: hidden;
			border: 0;
			clip: rect(1px, 1px, 1px, 1px);
			clip-path: inset(50%);
			word-wrap: normal !important
		}

		input[type].footer_form-input {
			height: 50px;
			border-color: #fff
		}

		input[type].footer_form-input:focus {
			color: #fff;
			border-color: #fff;
			background: 0 0
		}

		input[type].footer_form-input:focus .footer-form-placeholder-focus {
			color: #fff
		}

		input[type].footer_form-input:focus::-webkit-input-placeholder {
			color: #fff
		}

		input[type].footer_form-input:focus:-moz-placeholder {
			color: #fff
		}

		input[type].footer_form-input:focus::-moz-placeholder {
			color: #fff
		}

		input[type].footer_form-input:focus:-ms-input-placeholder {
			color: #fff
		}

		.footer_form-submit.btn {
			padding: 15px 35px;
			border-width: 1px
		}

		.footer_form-submit.btn:focus,
		.footer_form-submit.btn:hover {
			color: #000;
			background: #fff;
			border-color: #fff !important
		}

		.footer-connect {
			flex-basis: 23.14814815%;
			position: relative;
			margin-left: auto;
			margin-bottom: 80px;
			padding-left: 6.94444444%
		}

		.footer-connect:before {
			content: '';
			position: absolute;
			left: 0;
			top: -25px;
			width: 0;
			height: calc(100% + 50px);
			border-right: 1px solid #474344
		}

		.footer_social {
			display: flex;
			align-items: center
		}

		.footer_social .social-link {
			margin-left: 12px;
			padding: 0 10px;
			width: 40px;
			height: 40px;
			border: none;
			border-radius: 50%;
			background: #cc2126
		}

		.footer_social .social-link:first-child {
			margin-left: 0
		}

		.footer_social .social-link:hover {
			background: #f16523
		}

		.footer_social .social-link:focus {
			outline: 1px solid #fff
		}

		.footer_social .social-link.-facebook {
			padding-top: 11px
		}

		.footer_social .social-link.-twitter {
			padding-top: 13px
		}

		.footer_social .social-link.-linkedin {
			padding-top: 10px
		}

		.footer_social .social-link.-instagram {
			padding-top: 10px
		}

		.footer-logo {
			flex-basis: 150px;
			flex-shrink: 0;
			margin-bottom: 80px
		}

		.footer-nav {
			display: flex;
			margin-bottom: 80px
		}

		.footer-nav_ul {
			list-style: none;
			margin: 0;
			padding: 0;
			margin-left: 100px
		}

		.footer-nav_ul li:before {
			display: none
		}

		.footer-nav_ul.-primary {
			font-weight: 700;
			text-transform: uppercase
		}

		.footer-nav_a {
			color: #fff;
			border: none
		}

		.footer-nav_a:hover {
			color: #f16523
		}

		.footer-footnotes {
			flex-basis: 100%;
			font-size: 13px;
			color: #888
		}

		.footer-footnotes_p {
			margin: 0
		}

		.footer-footnotes_a {
			color: #888;
			border-color: rgba(136, 136, 136, .5)
		}

		.footer-footnotes_a:hover {
			color: rgba(136, 136, 136, .5);
			border-color: rgba(136, 136, 136, .5)
		}

		@media (max-width:900px) {
			.footer-form-wrap {
				flex-basis: 710px
			}

			.footer-connect {
				flex-basis: 100%;
				margin-left: 0;
				padding-left: 0
			}

			.footer-connect:before {
				display: none
			}

			.footer-nav_ul {
				margin-left: 80px
			}
		}

		@media (max-width:600px) {

			.footer-connect,
			.footer-form-wrap,
			.footer-logo,
			.footer-nav {
				margin-bottom: 50px
			}

			.footer_form-layout {
				display: block
			}

			.footer-form {
				height: 210px
			}

			.footer_form-field {
				margin: 0 0 10px
			}

			.footer-nav {
				flex-basis: 100%
			}

			.footer-nav_ul:first-child {
				margin-left: 0
			}
		}

		@media (max-width:420px) {
			.footer-nav {
				display: block
			}

			.footer-nav_ul {
				margin: 0 0 25px
			}
		}

		.header {
			position: relative;
			z-index: 10;
			background: #fff
		}

		.scrolled .header {
			box-shadow: 0 2px 16px 0 rgba(0, 0, 0, .2)
		}

		.header:before {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			height: 100%;
			width: 100%;
			background: #fff
		}

		.header>.bound-maximum {
			height: 100%
		}

		.header-layout {
			display: flex;
			justify-content: space-between;
			align-items: center;
			height: 100%
		}

		.header-layout_group {
			display: flex;
			align-items: center
		}

		.header-layout_group.-with-secondary {
			align-self: flex-end;
			margin-bottom: 20px
		}

		.logo {
			width: 220px
		}

		.logo_a {
			display: block;
			transition: none;
			border: none
		}

		.nav-toggle {
			display: none
		}

		.primary-nav {
			height: 45px;
			font-size: 16px
		}

		.mainNav_ul {
			list-style: none;
			margin: 0;
			padding: 0;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif
		}

		.mainNav_ul li:before {
			display: none
		}

		.mainNav_a {
			border: none
		}

		.mainNav_ul.-depth-1 {
			display: flex;
			align-items: center;
			height: 100%
		}

		.mainNav_li.-depth-1 {
			display: flex;
			align-items: center;
			position: relative;
			margin: 0;
			height: 100%
		}

		.mainNav_li.-depth-1.-last .mainNav_a.-depth-1 {
			padding-right: 0
		}

		.mainNav_a.-depth-1 {
			display: flex;
			align-items: center;
			padding: 0 12px;
			height: 100%;
			line-height: 1.2;
			text-align: center;
			font-weight: 700;
			text-transform: uppercase;
			color: #000
		}

		.mainNav_a.-depth-1[aria-haspopup=true]:after {
			content: '▾';
			margin-left: 5px
		}

		.mainNav_a.-depth-1:hover {
			color: rgb(44,103,42)
		}

		.mainNav_li.-depth-1.-button {
			margin-left: 10px
		}

		.mainNav_li.-depth-1.-button .mainNav_a.-depth-1 {
			padding: 0 20px;
			letter-spacing: 2px;
			color: #fff;
			background: #cc2126
		}

		.mainNav_li.-depth-1.-button .mainNav_a.-depth-1:hover {
			color: #fff;
			background: #a8080d
		}

		.mainNav_li.-depth-1.-button.-current .mainNav_a.-depth-1 {
			color: #fff
		}

		.mainNav_li.-depth-1.-current .mainNav_a.-depth-1 {
			color: rgb(44,103,42)
		}

		.mainNav_li.-depth-1.-open .mainNav_a.-depth-1 {
			color: rgb(44,103,42)
		}

		.mainNav_subnav-toggle.-depth-1 {
			display: none
		}

		.mainNav_subnav {
			display: flex;
			opacity: 0;
			visibility: hidden;
			transition: .2s;
			position: absolute;
			left: 50%;
			top: 100%;
			transform: translate(-50%, 0);
			padding: 50px 15px 100px 40px;
			width: 545px;
			background: #fff;
			border-bottom: 5px solid rgb(44,103,42)
		}

		.-end .mainNav_subnav {
			left: auto;
			right: -3vw;
			transform: none
		}

		.mainNav_subnav-info {
			flex-basis: 236px;
			flex-shrink: 0;
			margin-right: 30px
		}

		.mainNav_subnav-title {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			font-size: 2rem;
			margin-bottom: 0
		}

		.mainNav_subnav-title:first-child {
			margin-top: 0
		}

		.mainNav_subnav-title:last-child {
			margin-bottom: 0
		}

		@media (max-width:600px) {
			.mainNav_subnav-title {
				font-size: 1.375rem
			}
		}

		.mainNav_subnav-title_link {
			color: #202020;
			border: none
		}

		.mainNav_subnav-title_link:hover {
			color: rgb(44,103,42)
		}

		.mainNav_li.-depth-2 {
			margin: 15px 0 0;
			line-height: 1.2;
			text-align: left
		}

		.mainNav_li.-depth-2:first-child {
			margin-top: 0
		}

		.mainNav_a.-depth-2 {
			color: #202020
		}

		.mainNav_a.-depth-2:hover {
			color: rgb(44,103,42)
		}

		.mainNav_li.-depth-1.-focus .mainNav_a.-depth-1,
		.mainNav_li.-depth-1:hover .mainNav_a.-depth-1 {
			color: rgb(44,103,42)
		}

		.mainNav_li.-depth-1.-focus .mainNav_subnav,
		.mainNav_li.-depth-1:hover .mainNav_subnav {
			opacity: 1;
			visibility: visible
		}

		.secondary-nav {
			display: flex;
			justify-content: flex-end;
			position: absolute;
			right: 0;
			top: 12px;
			line-height: 1.5;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-size: 15px
		}

		.secondary-nav_item:not(:first-child) {
			margin-left: 15px;
			padding-left: 15px;
			border-left: 1px solid #cecfce
		}

		.secondary-nav_a {
			display: block;
			color: #333;
			text-align: center;
			border: none
		}

		.secondary-nav_a:hover {
			color: rgb(44,103,42)
		}

		.secondary-nav_a.dashboard svg {
			margin-right: 5px
		}

		@media (max-width:1100px) and (min-width:901px) {
			.scrolled .mainNav_a.-depth-1 {
				font-size: 13px
			}
		}

		@media (min-width:901px) {
			.scrolled .header-layout_group:last-child {
				align-self: auto;
				margin: 0
			}

			.scrolled .header-layout_group.-with-secondary {
				align-self: center;
				margin-bottom: 0
			}

			.scrolled .language {
				opacity: 0;
				top: -50px
			}

			.scrolled .logo {
				width: 140px
			}

			.scrolled .mainNav_a.-depth-1 {
				padding: 0 8px
			}

			.scrolled .mainNav_li -depth-1.-button {
				margin-left: 5px
			}

			.scrolled .secondary-nav {
				position: relative;
				top: 0;
				margin-left: 20px
			}
		}

		@media (max-width:1100px) and (min-width:901px) {
			.mainNav_a.-depth-1 {
				font-size: 14px
			}
		}

		@media (max-width:900px) {
			.header-layout_group:last-child {
				align-self: auto;
				margin: 0
			}

			.header-layout_group.-with-secondary {
				align-self: center;
				margin-bottom: 0
			}

			.logo {
				width: 116px
			}

			.language {
				display: none
			}

			.translate-mobile {
				position: absolute;
				right: 50px;
				top: 0;
				height: 100%;
				display: flex;
				align-items: center
			}

			.translate-mobile form select {
				height: 40px;
				font-size: 13px
			}

			.nav-toggle {
				display: block;
				position: relative;
				z-index: 3;
				margin-right: -15px;
				padding: 15px;
				border: none;
				background: 0 0
			}

			.nav-toggle:focus {
				outline: 1px solid #333
			}

			.nav-toggle_span {
				display: block
			}

			.nav-toggle_span.icon {
				position: relative;
				width: 30px;
				height: 24px
			}

			.nav-toggle_span.icon>span {
				position: absolute;
				left: 0;
				width: 100%;
				height: 3px;
				background: rgb(44,103,42);
				transform: translate3d(0, 0, 0)
			}

			.nav-toggle_span.t {
				top: 0
			}

			.nav-toggle_span.m {
				top: calc(50% - 1px)
			}

			.nav-toggle_span.b {
				top: calc(100% - 2px)
			}

			.nav-open .nav-toggle_span.t {
				transform: translate3d(0, 11px, 0) rotate(-45deg)
			}

			.nav-open .nav-toggle_span.m {
				opacity: 0
			}

			.nav-open .nav-toggle_span.b {
				transform: translate3d(0, -11px, 0) rotate(45deg)
			}

			.primary-nav {
				position: fixed;
				left: 0;
				top: 0;
				z-index: 2;
				margin: 0;
				width: 100vw;
				background: 0 0;
				transition: .2s ease-in;
				opacity: 0;
				visibility: hidden;
				overflow: hidden
			}

			.mainNav_ul.-depth-1 {
				display: block;
				position: relative;
				overflow-y: auto;
				overflow-x: hidden;
				padding: 0 0 46px;
				background: rgb(44,103,42)
			}

			.mainNav_li.-depth-1 {
				display: block;
				margin: 0;
				padding: 0;
				height: auto;
				line-height: 1.2;
				border-top: 1px solid rgba(0, 0, 0, .15)
			}

			.mainNav_li.-depth-1:first-child {
				border-top: none
			}

			.mainNav_li.-depth-1.-button {
				margin-left: 0
			}

			.mainNav_li.-depth-1.-button .mainNav_a.-depth-1 {
				display: block;
				padding: 20px 10px
			}

			.mainNav_a.-depth-1 {
				display: inline-block;
				position: relative;
				padding: 20px 50px 20px 3vw;
				color: #fff !important
			}

			.mainNav_a.-depth-1[aria-haspopup=true]:after {
				display: none
			}

			.mainNav_subnav {
				display: none;
				opacity: 1;
				visibility: visible;
				transition: 0;
				position: static;
				transform: none;
				padding: 0;
				width: auto;
				background: rgb(44,103,42);
				border-bottom: none
			}

			.mainNav_subnav-info {
				display: none
			}

			.mainNav_li.-depth-2 {
				margin: 0;
				line-height: 1.2;
				text-align: left;
				border-top: 1px solid rgba(0, 0, 0, .15)
			}

			.mainNav_li.-depth-2:first-child {
				margin-top: 0
			}

			.mainNav_a.-depth-2 {
				display: inline-block;
				padding: 15px 3vw;
				color: #fff
			}

			.mainNav_a.-depth-2:hover {
				color: rgba(255, 255, 255, .5)
			}

			.mainNav_li.-depth-1.-open .mainNav_subnav {
				display: block
			}

			.mainNav_subnav-toggle.-depth-1 {
				display: block;
				position: absolute;
				right: 2px;
				top: 2px;
				width: 60px;
				height: 55px;
				background: 0 0;
				border: none
			}

			.mainNav_subnav-toggle.-depth-1:focus {
				outline: 1px solid #000
			}

			.secondary-nav {
				right: 60px;
				top: 25px
			}

			.nav-open .primary-nav {
				transition: .2s ease-out;
				opacity: 1;
				visibility: visible
			}

			.nav-open .secondary-nav {
				transform: translate3d(0, 0, 0);
				transition: .2s .5s ease-out
			}
		}

		@media (max-width:900px) and (max-width:500px) {
			.secondary-nav {
				display: flex;
				flex-wrap: wrap;
				justify-content: center;
				position: fixed;
				left: 0;
				bottom: 0;
				top: auto;
				z-index: 3;
				padding: 12px 0;
				width: 100%;
				height: auto;
				background: #fff;
				transition: .2s ease-in;
				transform: translate3d(0, 100%, 0);
				border-radius: 0
			}

			.secondary-nav_item {
				text-align: center
			}

			.nav-open .primary-nav {
				transition: .2s ease-out;
				opacity: 1;
				visibility: visible
			}

			.nav-open .secondary-nav {
				transform: translate3d(0, 0, 0);
				transition: .2s .5s ease-out
			}
		}

		@media (max-width:900px) and (max-width:420px) {
			.translate-mobile {
				right: 40px
			}

			.translate-mobile form select {
				max-width: 100px;
				padding: 0 25px 0 10px;
				font-size: 11px;
				background: #fff url(http://buildon.nmc/wp-content/themes/nmc_buildon/assets/select-arrow.svg) calc(100% - 10px) 50% no-repeat;
				background-size: 10px 6px
			}
		}

		.site-alert {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			position: relative;
			overflow: hidden;
			color: #fff;
			background: #000
		}

		.site-alert .site-alert_close {
			position: absolute;
			right: 35px;
			top: 35px;
			text-indent: -9999em;
			padding: 0;
			width: 25px;
			height: 25px;
			background: 0 0;
			border: none
		}

		.site-alert .site-alert_close:before {
			content: '';
			display: block;
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%) rotate(45deg);
			width: 35px;
			height: 3px;
			background: #fff
		}

		.site-alert .site-alert_close:after {
			content: '';
			display: block;
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%) rotate(-45deg);
			width: 35px;
			height: 3px;
			background: #fff
		}

		.site-alert .site-alert_wrap {
			flex-basis: 100%;
			padding: 0 70px 0 3vw
		}

		.site-alert .site-alert_heading {
			margin: 0 0 5px;
			font-weight: 400;
			font-size: 22px;
			color: #fff
		}

		.site-alert .site-alert_content>* {
			line-height: 1.2
		}

		@media (max-width:900px) {
			.site-alert .site-alert_heading {
				font-size: 18px
			}

			.site-alert .site-alert_content {
				font-size: 15px
			}
		}

		@media (max-width:600px) {
			.site-alert .site-alert_heading {
				font-size: 16px
			}

			.site-alert .site-alert_content {
				font-size: 14px
			}
		}

		html {
			overflow-x: hidden;
			scroll-padding: 150px 0 0 0
		}

		body {
			padding-top: 110px
		}

		body .header {
			position: fixed;
			left: 0;
			top: 0;
			z-index: 10;
			width: 100%;
			height: 110px
		}

		body .site-alert {
			display: none
		}

		.scrolled body .header {
			height: 70px
		}

		body.admin-bar {
			padding-top: 142px
		}

		body.admin-bar .header {
			top: 32px
		}

		body.alert-bar {
			padding-top: 225px
		}

		body.alert-bar .header {
			top: 115px
		}

		body.alert-bar .site-alert {
			display: flex;
			position: fixed;
			left: 0;
			top: 0;
			z-index: 10;
			width: 100%;
			height: 115px
		}

		body.admin-bar.alert-bar {
			padding-top: 257px
		}

		body.admin-bar.alert-bar .header {
			top: 147px
		}

		body.admin-bar.alert-bar .site-alert {
			top: 32px
		}

		@media (max-width:900px) {

			.scrolled body,
			body {
				padding-top: 70px
			}

			.scrolled body .header,
			body .header {
				height: 70px
			}

			.scrolled body .primary-nav,
			body .primary-nav {
				padding-top: 70px;
				height: 100vh
			}

			.scrolled body.admin-bar,
			body.admin-bar {
				padding-top: 102px
			}

			.scrolled body.admin-bar .primary-nav,
			body.admin-bar .primary-nav {
				padding-top: 102px
			}

			.scrolled body.alert-bar,
			body.alert-bar {
				padding-top: 185px
			}

			.scrolled body.alert-bar .primary-nav,
			body.alert-bar .primary-nav {
				padding-top: 185px
			}

			.scrolled body.admin-bar.alert-bar,
			body.admin-bar.alert-bar {
				padding-top: 217px
			}

			.scrolled body.admin-bar.alert-bar .primary-nav,
			body.admin-bar.alert-bar .primary-nav {
				padding-top: 217px
			}
		}

		@media (max-width:782px) {

			.scrolled body.admin-bar,
			body.admin-bar {
				padding-top: 116px
			}

			.scrolled body.admin-bar .header,
			body.admin-bar .header {
				top: 46px
			}

			.scrolled body.admin-bar .primary-nav,
			body.admin-bar .primary-nav {
				padding-top: 116px
			}

			.scrolled body.admin-bar.alert-bar,
			body.admin-bar.alert-bar {
				padding-top: 231px
			}

			.scrolled body.admin-bar.alert-bar .site-alert,
			body.admin-bar.alert-bar .site-alert {
				top: 46px
			}

			.scrolled body.admin-bar.alert-bar .header,
			body.admin-bar.alert-bar .header {
				top: 161px
			}

			.scrolled body.admin-bar.alert-bar .primary-nav,
			body.admin-bar.alert-bar .primary-nav {
				padding-top: 231px
			}
		}

		@media (max-width:600px) {
			#wpadminbar {
				position: fixed !important
			}
		}

		.skip-link {
			position: absolute;
			top: 20px;
			left: 20px;
			z-index: 9999;
			padding: 10px 20px;
			background: #fff;
			color: #000;
			font-size: 18px;
			border: 2px solid #000
		}

		.skip-link:not(:focus) {
			position: absolute;
			clip: rect(1px 1px 1px 1px);
			clip: rect(1px, 1px, 1px, 1px);
			padding: 0;
			border: 0;
			height: 1px;
			width: 1px;
			overflow: hidden
		}

		.gutenberg>.bound-narrow>:first-child {
			margin-top: 6.25rem
		}

		.gutenberg>.bound-narrow>:first-child.no-space {
			margin-top: 0
		}

		.gutenberg>.bound-narrow>:last-child {
			margin-bottom: 6.25rem
		}

		@media (max-width:900px) {
			.gutenberg>.bound-narrow>:first-child {
				margin-top: 3.125rem
			}

			.gutenberg>.bound-narrow>:last-child {
				margin-bottom: 3.125rem
			}
		}

		.gutenberg>figure {
			position: relative;
			margin: 6.25rem 0 0;
			overflow: hidden
		}

		.gutenberg>figure.no-space {
			margin-top: 0
		}

		.gutenberg>figure.less-space {
			margin-top: 2.08333333rem
		}

		.gutenberg>figure:last-child {
			margin-bottom: 6.25rem
		}

		.gutenberg>figure+blockquote,
		.gutenberg>figure+dl,
		.gutenberg>figure+form,
		.gutenberg>figure+h1,
		.gutenberg>figure+h2,
		.gutenberg>figure+h3,
		.gutenberg>figure+h4,
		.gutenberg>figure+h5,
		.gutenberg>figure+h6,
		.gutenberg>figure+ol,
		.gutenberg>figure+p,
		.gutenberg>figure+pre,
		.gutenberg>figure+table,
		.gutenberg>figure+ul {
			margin-top: 6.25rem
		}

		@media (max-width:900px) {

			.gutenberg>figure+blockquote,
			.gutenberg>figure+dl,
			.gutenberg>figure+form,
			.gutenberg>figure+h1,
			.gutenberg>figure+h2,
			.gutenberg>figure+h3,
			.gutenberg>figure+h4,
			.gutenberg>figure+h5,
			.gutenberg>figure+h6,
			.gutenberg>figure+ol,
			.gutenberg>figure+p,
			.gutenberg>figure+pre,
			.gutenberg>figure+table,
			.gutenberg>figure+ul {
				margin-top: 3.125rem
			}
		}

		@media (max-width:900px) {
			.gutenberg>figure {
				margin: 3.125rem 0 0
			}

			.gutenberg>figure.less-space {
				margin-top: 1.04166667rem
			}

			.gutenberg>figure:last-child {
				margin-bottom: 3.125rem
			}
		}

		.gutenberg>figure.alignwide {
			margin-left: calc(50% - 544px);
			margin-right: calc(50% - 544px)
		}

		@media (max-width:1130px) {
			.gutenberg>figure.alignwide {
				margin-left: calc(50% - 47vw);
				margin-right: calc(50% - 47vw);
				width: 96vw
			}
		}

		@media (max-width:600px) {
			.gutenberg>figure.alignwide {
				margin-left: calc(50% - 44vw);
				margin-right: calc(50% - 44vw);
				width: 94vw
			}
		}

		.gutenberg>figure.alignfull {
			margin-left: calc(50% - 50vw);
			margin-right: calc(50% - 50vw);
			width: 100vw;
			max-width: 100vw
		}

		.gutenberg>figure.has-background {
			padding: 6.25rem 0
		}

		@media (max-width:900px) {
			.gutenberg>figure.has-background {
				padding: 3.125rem 0
			}
		}

		.gutenberg>figure.has-background+.has-background {
			margin-top: 0
		}

		.gutenberg>figure.has-background:last-child {
			margin-bottom: 0
		}

		.gutenberg .has-text-align-center {
			text-align: center
		}

		.gutenberg .has-text-align-right {
			text-align: right
		}

		.gutenberg a[href*=".jpeg"],
		.gutenberg a[href*=".jpg"],
		.gutenberg a[href*=".png"] {
			border: none
		}

		.gutenberg img {
			max-width: 100%;
			height: auto
		}

		.gutenberg img.alignleft {
			float: left;
			margin: 0 1.5rem 1rem 0;
			max-width: 50%
		}

		.gutenberg img.alignright {
			float: right;
			margin: 0 0 1rem 1.5rem;
			max-width: 50%
		}

		.gutenberg img.aligncenter {
			display: block;
			margin: 0 auto
		}

		.gutenberg>.bound-narrow>blockquote,
		.gutenberg>.bound-narrow>dl,
		.gutenberg>.bound-narrow>form,
		.gutenberg>.bound-narrow>ol,
		.gutenberg>.bound-narrow>p,
		.gutenberg>.bound-narrow>pre,
		.gutenberg>.bound-narrow>table,
		.gutenberg>.bound-narrow>ul {
			font-size: 1.0625rem
		}

		@media (max-width:600px) {

			.gutenberg>.bound-narrow>blockquote,
			.gutenberg>.bound-narrow>dl,
			.gutenberg>.bound-narrow>form,
			.gutenberg>.bound-narrow>ol,
			.gutenberg>.bound-narrow>p,
			.gutenberg>.bound-narrow>pre,
			.gutenberg>.bound-narrow>table,
			.gutenberg>.bound-narrow>ul {
				font-size: 1rem
			}
		}

		.gutenberg>.bound-narrow>ul {
			padding-left: 25px
		}

		.gutenberg>.bound-narrow>ul li {
			margin-bottom: .5em;
			padding-left: 10px
		}

		.gutenberg>.bound-narrow>ul.is-style-checklist {
			padding-left: 0;
			list-style-type: none;
			columns: 2;
			column-gap: 10%
		}

		@media (max-width:600px) {
			.gutenberg>.bound-narrow>ul.is-style-checklist {
				columns: 1
			}
		}

		.gutenberg>.bound-narrow>ul.is-style-checklist li {
			position: relative;
			margin-bottom: .5em;
			padding-left: 35px
		}

		.gutenberg>.bound-narrow>ul.is-style-checklist li:before {
			content: '';
			position: absolute;
			display: block;
			left: 0;
			top: 10px;
			width: 16px;
			height: 12px;
			background: url(https://www.buildon.org/wp-content/themes/nmc_buildon/assets/check-icon.svg) 0 0 no-repeat
		}

		.gutenberg>.bound-narrow>ol {
			padding-left: 25px
		}

		.gutenberg>.bound-narrow>ol li {
			margin-bottom: .5em;
			padding-left: 10px
		}

		.gutenberg ul.wp-block-gallery {
			list-style: none;
			margin: 0;
			padding: 0
		}

		.gutenberg ul.wp-block-gallery li:before {
			display: none
		}

		.gutenberg ul.wp-block-gallery figure {
			margin: 0 0 1em
		}

		.gutenberg ul.wp-block-gallery figure a {
			border: none
		}

		.image-auto {
			position: relative;
			width: 100%;
			height: 0;
			overflow: hidden
		}

		.image-auto img,
		.image-auto picture {
			position: absolute;
			left: 0;
			top: 0;
			height: 100%;
			width: 100%
		}

		.video-auto {
			position: relative;
			width: 100%;
			height: 0;
			overflow: hidden
		}

		.video-auto iframe,
		.video-auto video {
			position: absolute;
			left: 0;
			top: 0;
			height: 100%;
			width: 100%
		}

		.arrow-link {
			display: inline-block;
			position: relative;
			font-weight: 700;
			color: #cc2126;
			letter-spacing: 2px;
			text-decoration: underline;
			text-decoration-thickness: 2px;
			border: none
		}

		.arrow-link:after {
			content: '▶︎';
			display: inline-block;
			left: 100%;
			top: 2px;
			margin-left: 8px;
			font-size: .7em
		}

		.arrow-link:hover {
			color: #000
		}

		.arrow-link.orange {
			color: #f16523
		}

		.arrow-link.orange:hover {
			color: #000
		}

		.arrow-link.gold {
			color: #fbb040
		}

		.arrow-link.gold:hover {
			color: #000
		}

		.pagination {
			display: flex;
			justify-content: center;
			align-items: center;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-size: 15px;
			text-transform: uppercase;
			color: #f16523;
			font-weight: 700
		}

		.pagination a {
			color: #000;
			border: none
		}

		.pagination a:hover {
			color: #f16523
		}

		.pagination .next_link,
		.pagination .prev_link {
			display: inline-block;
			padding: 10px;
			color: #cc2126
		}

		.pagination .next_link:hover,
		.pagination .prev_link:hover {
			color: #f16523
		}

		.pagination .pages {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			font-weight: 700
		}

		.pagination .pages li:before {
			display: none
		}

		.pagination .pages li {
			margin: 0
		}

		.pagination .pages .page-number {
			display: inline-block;
			padding: 4px 14px
		}

		.pagination .pages .current {
			color: #fff;
			background: #000
		}

		@media (max-width:600px) {
			.pagination {
				font-size: 14px
			}

			.pagination .pages li {
				margin: 0
			}

			.pagination .pages .page-number {
				padding: 4px 6px
			}
		}

		.breadcrumb-wrapper .bound-layout {
			display: flex;
			align-items: center;
			height: 60px
		}

		.breadcrumb {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
			flex-wrap: wrap;
			font-size: 14px;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif
		}

		.breadcrumb li:before {
			display: none
		}

		.breadcrumb .bc-list-item {
			display: flex;
			margin: 0;
			line-height: 1.5
		}

		.breadcrumb .bc-list-item:before {
			display: block;
			content: '▶︎';
			margin: 0 10px;
			font-size: .8em;
			transform: translate(0, 3px);
			transform-origin: 50% 50%
		}

		.breadcrumb .bc-list-item:first-child:before {
			display: none
		}

		.breadcrumb .bc-link {
			border: none
		}

		@media (max-width:600px) {
			.breadcrumb {
				font-size: 12px
			}
		}

		.video-embed {
			display: block;
			position: relative;
			padding: 0;
			width: 100%;
			background: #333;
			border: none;
			cursor: pointer
		}

		.video-embed:after {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			height: 100%;
			width: 100%;
			background: rgba(0, 0, 0, .18);
			opacity: 1;
			transition: .2s
		}

		.video-embed .youtube-image {
			position: relative;
			padding-top: 56.25%;
			overflow: hidden
		}

		.video-embed .youtube-image img {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			width: 100%;
			height: auto
		}

		.video-embed .play-icon {
			position: absolute;
			left: 50%;
			top: 50%;
			z-index: 1;
			transform: translate(-50%, -50%)
		}

		.video-embed:hover:after {
			opacity: 0
		}

		@media (max-width:600px) {
			.video-embed .play-icon {
				transform: translate(-50%, -50%) scale(.5)
			}
		}

		.post-partial {
			display: flex;
			margin-bottom: 60px;
			font-size: 1.0625rem
		}

		.post-partial .post-partial_image {
			flex-basis: 300px;
			flex-shrink: 0;
			margin-right: 38px
		}

		.post-partial .post-partial_categories {
			margin: 0 0 1em;
			font-size: 1.125rem;
			font-weight: 700;
			text-transform: uppercase
		}

		.post-partial .post-partial_date {
			margin: 0 0 1em
		}

		.post-partial .post-partial_title {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			font-size: 1.375rem;
			font-weight: 400;
			margin: 0
		}

		.post-partial .post-partial_title:first-child {
			margin-top: 0
		}

		.post-partial .post-partial_title:last-child {
			margin-bottom: 0
		}

		.post-partial .post-partial_title-link {
			color: #202020;
			border: none
		}

		.post-partial .post-partial_title-link:hover {
			color: #f16523
		}

		.post-partial .post-partial_event-date {
			margin: 1em 0 1em;
			font-weight: 700
		}

		.post-partial .post-partial_link {
			display: inline-block;
			margin: 1.25em 0 0;
			color: #cc2126;
			font-weight: 700;
			letter-spacing: 2px;
			text-transform: uppercase;
			border: none
		}

		.post-partial .post-partial_link:hover {
			color: #f16523
		}

		@media (max-width:900px) {
			.post-partial .post-partial_image {
				flex-basis: 200px
			}
		}

		@media (max-width:600px) {
			.post-partial {
				display: block
			}

			.post-partial .post-partial_image {
				margin: 0 0 1em
			}
		}

		.tabs {
			position: relative
		}

		.tabs_tablist {
			display: flex;
			justify-content: center
		}

		.tabs_button {
			-webkit-appearance: none;
			padding: 0;
			line-height: inherit;
			font-size: inherit;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 400;
			text-align: left;
			color: #202020;
			background: 0 0;
			border: none;
			position: relative;
			padding: 30px;
			font-size: 1.125rem;
			font-weight: 700;
			text-transform: uppercase;
			color: #bbb;
			border-left: 1px solid #d3d4d3;
			cursor: pointer;
			transition: .2s;
			text-align: center
		}

		.tabs_button:hover {
			color: #202020;
			background: 0 0
		}

		.tabs_button:focus {
			outline: 0
		}

		.tabs_button:first-child {
			border-left: none
		}

		.tabs_button:focus {
			outline: 1px solid #000;
			background: #f4f4f4
		}

		.tabs_button[aria-selected=true] {
			color: #202020
		}

		.tabs_button[aria-selected=true]:after {
			content: '';
			position: absolute;
			left: 30px;
			right: 30px;
			bottom: 10px;
			height: 4px;
			background: #f16523
		}

		.tab-content-wrap {
			margin-top: 36px
		}

		.tabs_content {
			visibility: visible
		}

		.tabs_content.hidden {
			visibility: hidden;
			position: absolute;
			left: -9999em
		}

		@media (max-width:819px) {
			.tabs_button {
				padding: 20px 10px;
				font-size: .875rem
			}

			.tabs_button[aria-selected=true]:after {
				left: 10px;
				right: 10px;
				bottom: 5px;
				height: 3px
			}
		}

		@media (max-width:600px) {
			.tabs_button {
				padding: 15px 5px;
				font-size: .75rem;
				text-transform: none
			}

			.tabs_button[aria-selected=true]:after {
				left: 5px;
				right: 5px
			}
		}

		.testimonial {
			display: flex;
			align-items: center
		}

		.testimonial .testimonial-image {
			flex-basis: 305px;
			flex-shrink: 0;
			position: relative;
			margin: 0 35px 0 -15px;
			padding: 45px 0 0 35px;
			background-position: 0 0;
			background-size: 90% auto;
			background-repeat: no-repeat
		}

		.testimonial .testimonial-image img {
			border-radius: 50%
		}

		.testimonial .testimonial-content {
			font-size: 1.375rem
		}

		.testimonial .testimonial-content p {
			margin: 0 0 1em
		}

		.testimonial .testimonial-content p:last-child {
			margin: 0
		}

		.testimonial .testimonial-footer {
			font-size: 1.0625rem;
			color: #666
		}

		@media (max-width:900px) {
			.testimonial .testimonial-image {
				flex-basis: 250px;
				padding: 30px 0 0 20px
			}

			.testimonial .testimonial-content {
				font-size: 1.125rem
			}

			.testimonial .testimonial-footer {
				font-size: .9375rem
			}
		}

		@media (max-width:600px) {
			.testimonial {
				display: block
			}

			.testimonial .testimonial-image {
				margin: 0 auto 2em;
				max-width: 305px
			}

			.testimonial .testimonial-content {
				font-size: 1.375rem
			}

			.testimonial .testimonial-footer {
				font-size: 1.0625rem
			}
		}

		@media (max-width:420px) {
			.testimonial .testimonial-content {
				font-size: 1rem
			}

			.testimonial .testimonial-footer {
				font-size: .875rem
			}
		}

		.contact-box {
			display: flex;
			padding: 45px 7%;
			background: #f1f2f4
		}

		.contact-box .block-title {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			font-size: 2rem;
			flex-basis: 310px
		}

		.contact-box .block-title:first-child {
			margin-top: 0
		}

		.contact-box .block-title:last-child {
			margin-bottom: 0
		}

		@media (max-width:600px) {
			.contact-box .block-title {
				font-size: 1.375rem
			}
		}

		.contact-box .contact-info {
			flex-grow: 1;
			display: flex;
			justify-content: center;
			font-size: 1.0625rem;
			line-height: 1.82352941
		}

		.contact-box .person_name {
			font-weight: 700
		}

		.contact-box .person_phone+.person_email {
			position: relative;
			margin-left: 32px
		}

		.contact-box .person_phone+.person_email:before {
			content: '|';
			position: absolute;
			left: -20px;
			top: 0;
			line-height: 1;
			color: #202020
		}

		.contact-box .person_email {
			color: #cc2126;
			border-color: #cc2126
		}

		.contact-box .person_email:hover {
			color: #a8080d;
			border-color: #a8080d
		}

		@media (max-width:900px) {
			.contact-box {
				display: block
			}

			.contact-box .contact-info {
				display: block
			}
		}

		@media (max-width:600px) {
			.contact-box .contact-info {
				font-size: 1rem
			}

			.contact-box .person_phone {
				margin-right: 2em
			}

			.contact-box .person_phone+.person_email {
				margin-left: 0
			}

			.contact-box .person_phone+.person_email:before {
				display: none
			}
		}

		.nmc-block {
			position: relative;
			margin: 6.25rem 0 0;
			overflow: hidden
		}

		.nmc-block.no-space {
			margin-top: 0
		}

		.nmc-block.less-space {
			margin-top: 2.08333333rem
		}

		.nmc-block:last-child {
			margin-bottom: 6.25rem
		}

		.nmc-block+blockquote,
		.nmc-block+dl,
		.nmc-block+form,
		.nmc-block+h1,
		.nmc-block+h2,
		.nmc-block+h3,
		.nmc-block+h4,
		.nmc-block+h5,
		.nmc-block+h6,
		.nmc-block+ol,
		.nmc-block+p,
		.nmc-block+pre,
		.nmc-block+table,
		.nmc-block+ul {
			margin-top: 6.25rem
		}

		@media (max-width:900px) {

			.nmc-block+blockquote,
			.nmc-block+dl,
			.nmc-block+form,
			.nmc-block+h1,
			.nmc-block+h2,
			.nmc-block+h3,
			.nmc-block+h4,
			.nmc-block+h5,
			.nmc-block+h6,
			.nmc-block+ol,
			.nmc-block+p,
			.nmc-block+pre,
			.nmc-block+table,
			.nmc-block+ul {
				margin-top: 3.125rem
			}
		}

		@media (max-width:900px) {
			.nmc-block {
				margin: 3.125rem 0 0
			}

			.nmc-block.less-space {
				margin-top: 1.04166667rem
			}

			.nmc-block:last-child {
				margin-bottom: 3.125rem
			}
		}

		.nmc-block.alignwide {
			margin-left: calc(50% - 544px);
			margin-right: calc(50% - 544px)
		}

		@media (max-width:1130px) {
			.nmc-block.alignwide {
				margin-left: calc(50% - 47vw);
				margin-right: calc(50% - 47vw);
				width: 96vw
			}
		}

		@media (max-width:600px) {
			.nmc-block.alignwide {
				margin-left: calc(50% - 44vw);
				margin-right: calc(50% - 44vw);
				width: 94vw
			}
		}

		.nmc-block.alignfull {
			margin-left: calc(50% - 50vw);
			margin-right: calc(50% - 50vw);
			width: 100vw;
			max-width: 100vw
		}

		.nmc-block.has-background {
			padding: 6.25rem 0
		}

		@media (max-width:900px) {
			.nmc-block.has-background {
				padding: 3.125rem 0
			}
		}

		.nmc-block.has-background+.has-background {
			margin-top: 0
		}

		.nmc-block.has-background:last-child {
			margin-bottom: 0
		}

		.wp-block-image figure,
		figure.wp-block-image {
			margin: 2rem auto
		}

		.wp-block-image img {
			max-width: 100%;
			height: auto
		}

		.wp-block-image figcaption {
			position: relative;
			z-index: 1;
			margin: -2em auto 0;
			padding: 20px 16px;
			width: 90%;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-size: 1.0625rem;
			color: #fff;
			text-align: left;
			background: #cc2126
		}

		.wp-block-image .alignleft {
			float: left;
			margin: 0 1.5rem 1rem 0;
			max-width: 50%
		}

		.wp-block-image .alignright {
			float: right;
			margin: 0 0 1rem 1.5rem;
			max-width: 50%
		}

		.wp-block-image .aligncenter img {
			display: block;
			margin: 0 auto
		}

		.wp-block-image.alignfull img,
		.wp-block-image.alignwide img {
			display: block;
			width: 100%
		}

		.wp-block-image.alignfull {
			margin-left: calc(50% - 50vw);
			margin-right: calc(50% - 50vw);
			width: 100vw;
			max-width: 100vw
		}

		.wp-block-image.alignfull figcaption {
			padding-left: 1rem
		}

		@media (max-width:600px) {
			.wp-block-image figcaption {
				margin: -1.75em auto 0;
				padding: 10px 16px;
				font-size: .875rem
			}

			.wp-block-image .alignleft,
			.wp-block-image .alignright {
				float: none;
				margin: 2rem 0;
				max-width: 100%
			}

			.wp-block-image .alignleft img,
			.wp-block-image .alignright img {
				display: block;
				margin: 0 auto
			}
		}

		.wp-block-quote {
			margin: 2rem 0;
			padding: 20px 0 0 90px;
			background-repeat: no-repeat
		}

		.wp-block-quote:before {
			content: ''
		}

		.wp-block-quote p {
			position: relative;
			margin: 0;
			font-size: 1.375rem;
			line-height: 1.72727273
		}

		.wp-block-quote cite {
			display: block;
			position: relative;
			margin-top: 1rem;
			font-size: 1.0625rem;
			font-style: normal;
			color: #666
		}

		.wp-block-quote cite:before {
			content: '\2014';
			margin-right: 5px
		}

		@media (max-width:420px) {
			.wp-block-quote {
				padding: 5px 0 0 40px;
				background-size: 25px auto
			}

			.wp-block-quote p {
				font-size: 1rem
			}

			.wp-block-quote cite {
				font-size: .875rem
			}
		}

		.wp-block-pullquote {
			margin: 3rem 0;
			padding: 0 0 0 2rem;
			text-align: left;
			border: none;
			border-left: 8px solid #f16523
		}

		.wp-block-pullquote p {
			position: relative;
			margin: 0;
			font-size: 1.5rem
		}

		.wp-block-pullquote cite {
			display: block;
			position: relative;
			margin-top: 1.5rem;
			font-size: 1rem;
			font-style: normal
		}

		@media (max-width:600px) {
			.wp-block-pullquote p {
				font-size: 1.125rem
			}

			.wp-block-pullquote cite {
				font-size: .875rem
			}
		}

		figure.wp-block-embed {
			margin: 3rem 0
		}

		.wp-block-embed figcaption {
			margin-top: 1.5em;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-size: .9375rem;
			text-align: left
		}

		@media (max-width:600px) {
			.wp-block-embed figcaption {
				font-size: .875rem
			}
		}

		.is-provider-youtube .wp-block-embed__wrapper {
			position: relative;
			padding-top: 56.2%;
			height: 0
		}

		.is-provider-youtube .wp-block-embed__wrapper iframe {
			position: absolute;
			left: 0;
			top: 0;
			height: 100%;
			width: 100%
		}

		.wp-block-separator,
		.wp-block-separator.is-style-default {
			margin-top: 3.75rem;
			margin-bottom: 3.75rem;
			margin-left: calc(50% - 544px);
			margin-right: calc(50% - 544px)
		}

		@media (max-width:1130px) {

			.wp-block-separator,
			.wp-block-separator.is-style-default {
				margin-left: calc(50% - 47vw);
				margin-right: calc(50% - 47vw);
				width: 94vw
			}
		}

		@media (max-width:600px) {

			.wp-block-separator,
			.wp-block-separator.is-style-default {
				margin-left: calc(50% - 44vw);
				margin-right: calc(50% - 44vw);
				width: 88vw
			}
		}

		.wp-block-separator.is-style-wide {
			margin-left: calc(50% - 50vw);
			margin-right: calc(50% - 50vw)
		}

		.wp-block-separator.is-style-narrow {
			margin-left: 0;
			margin-right: 0
		}

		.wp-block-separator.is-style-dots {
			margin-top: 3.125rem;
			margin-bottom: 3.125rem;
			border: none;
			text-align: center;
			max-width: none;
			line-height: 1;
			height: auto
		}

		.wp-block-separator.is-style-dots::before {
			content: "\00b7 \00b7 \00b7";
			color: currentColor;
			font-size: 30px;
			letter-spacing: 1rem;
			padding-left: 1rem;
			font-family: serif;
			font-weight: 700
		}

		.wp-block-separator.half-space {
			margin-top: 3.125rem;
			margin-bottom: 3.125rem
		}

		@media (max-width:900px) {

			.wp-block-separator,
			.wp-block-separator.is-style-default {
				margin-top: 3.125rem;
				margin-bottom: 3.125rem
			}

			.wp-block-separator.half-space {
				margin-top: 1.5625rem;
				margin-bottom: 1.5625rem
			}
		}

		h1+figure.wp-block-table,
		h1+figure.wp-block-table.is-style-stripes,
		h2+figure.wp-block-table,
		h2+figure.wp-block-table.is-style-stripes,
		h3+figure.wp-block-table,
		h3+figure.wp-block-table.is-style-stripes,
		h4+figure.wp-block-table,
		h4+figure.wp-block-table.is-style-stripes,
		h5+figure.wp-block-table,
		h5+figure.wp-block-table.is-style-stripes,
		h6+figure.wp-block-table,
		h6+figure.wp-block-table.is-style-stripes {
			margin-top: 1rem
		}

		.wp-block-table.alignwide {
			margin-left: calc(50% - 544px);
			margin-right: calc(50% - 544px)
		}

		@media (max-width:1130px) {
			.wp-block-table.alignwide {
				margin-left: calc(50% - 47vw);
				margin-right: calc(50% - 47vw);
				width: 96vw
			}
		}

		@media (max-width:600px) {
			.wp-block-table.alignwide {
				margin-left: calc(50% - 44vw);
				margin-right: calc(50% - 44vw);
				width: 94vw
			}
		}

		figure.wp-block-table,
		figure.wp-block-table.is-style-stripes {
			margin: 3rem 0
		}

		.wp-block-table figcaption,
		.wp-block-table.is-style-stripes figcaption {
			margin-top: 1.5em;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-size: .9375rem;
			text-align: left
		}

		.wp-block-table table,
		.wp-block-table.is-style-stripes table {
			margin: 0;
			min-width: 100%;
			border-spacing: 0;
			text-align: left
		}

		.wp-block-table table td,
		.wp-block-table table th,
		.wp-block-table.is-style-stripes table td,
		.wp-block-table.is-style-stripes table th {
			padding: 18px;
			border: 0
		}

		.wp-block-table table thead tr,
		.wp-block-table.is-style-stripes table thead tr {
			background: 0 0
		}

		.wp-block-table table thead td,
		.wp-block-table table thead th,
		.wp-block-table.is-style-stripes table thead td,
		.wp-block-table.is-style-stripes table thead th {
			line-height: 1;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			font-size: .875rem;
			text-transform: uppercase;
			letter-spacing: 2px
		}

		.wp-block-table table tbody tr,
		.wp-block-table.is-style-stripes table tbody tr {
			background: 0 0
		}

		.wp-block-table table tbody tr:nth-child(2n+1),
		.wp-block-table.is-style-stripes table tbody tr:nth-child(2n+1) {
			background: rgba(251, 176, 64, .2)
		}

		.wp-block-table table tbody td,
		.wp-block-table.is-style-stripes table tbody td {
			line-height: 1.2
		}

		.wp-block-table table tbody a,
		.wp-block-table.is-style-stripes table tbody a {
			color: #f16523;
			border: none
		}

		.wp-block-table table tbody a:hover,
		.wp-block-table.is-style-stripes table tbody a:hover {
			color: rgba(241, 101, 35, .5)
		}

		@media (max-width:900px) {

			.wp-block-table table,
			.wp-block-table.is-style-stripes table {
				font-size: 12px
			}

			.wp-block-table table td,
			.wp-block-table table th,
			.wp-block-table.is-style-stripes table td,
			.wp-block-table.is-style-stripes table th {
				padding: 10px
			}
		}

		@media (max-width:600px) {

			.wp-block-table table td,
			.wp-block-table table th,
			.wp-block-table.is-style-stripes table td,
			.wp-block-table.is-style-stripes table th {
				padding: 10px 5px
			}

			.wp-block-table figcaption,
			.wp-block-table.is-style-stripes figcaption {
				font-size: .875rem
			}
		}

		.nmc-block--search-results .search-panel-form {
			margin-bottom: 50px
		}

		.nmc-block--search-results .search-submit-button {
			margin-top: 10px
		}

		.nmc-block--search-results .search-partial {
			margin: 50px 0
		}

		.nmc-block--search-results .search-partial .search-result-link {
			display: block;
			padding: 36px;
			color: #202020;
			background: #f1f2f4;
			border: 1px solid #e3e5e9
		}

		.nmc-block--search-results .search-partial .search-result-link:hover {
			background: #e3e5e9;
			border-color: #d4d7de
		}

		.nmc-block--search-results .search-partial .search-result-type {
			margin: 0;
			text-transform: uppercase
		}

		.nmc-block--search-results .search-partial .search-result-title {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			font-size: 1.375rem;
			font-weight: 400;
			margin: 0
		}

		.nmc-block--search-results .search-partial .search-result-title:first-child {
			margin-top: 0
		}

		.nmc-block--search-results .search-partial .search-result-title:last-child {
			margin-bottom: 0
		}

		.nmc-block--search-results .search-partial .search-result-excerpt {
			margin-top: 1rem;
			line-height: 1.5
		}

		* {
			box-sizing: border-box;
			-webkit-tap-highlight-color: transparent
		}

		.nmc-block--introduction .bound-layout {
			display: flex
		}

		.nmc-block--introduction .block-title {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			font-size: 2rem;
			flex-basis: 338px;
			flex-shrink: 0;
			margin-right: 8.33333333%
		}

		.nmc-block--introduction .block-title:first-child {
			margin-top: 0
		}

		.nmc-block--introduction .block-title:last-child {
			margin-bottom: 0
		}

		@media (max-width:600px) {
			.nmc-block--introduction .block-title {
				font-size: 1.375rem
			}
		}

		.nmc-block--introduction .intro-text {
			font-size: 1.25rem
		}

		.nmc-block--introduction .intro-text p {
			margin: 0 0 1em
		}

		.nmc-block--introduction .arrow-link {
			font-size: 1rem;
			text-transform: uppercase
		}

		.nmc-block--introduction .btn {
			margin-top: 1.5em
		}

		@media (max-width:900px) {
			.nmc-block--introduction .bound-layout {
				display: block
			}

			.nmc-block--introduction .block-title {
				margin: 0 0 1em
			}

			.nmc-block--introduction .intro-text {
				font-size: 1.125rem
			}
		}

		* {
			box-sizing: border-box;
			-webkit-tap-highlight-color: transparent
		}

		.nmc-block--people .block-title {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			font-size: 2rem;
			margin-bottom: 1em;
			text-align: center
		}

		.nmc-block--people .block-title:first-child {
			margin-top: 0
		}

		.nmc-block--people .block-title:last-child {
			margin-bottom: 0
		}

		@media (max-width:600px) {
			.nmc-block--people .block-title {
				font-size: 1.375rem
			}
		}

		.nmc-block--people .people {
			display: flex;
			flex-wrap: wrap;
			padding-bottom: 2px
		}

		.nmc-block--people .person {
			flex-basis: 22.8%;
			margin-left: 2.9333%;
			margin-bottom: -2px;
			padding: 24px 0;
			font-size: 1.0625rem;
			border-top: 2px solid #cecfce;
			border-bottom: 2px solid #cecfce
		}

		.nmc-block--people .person:nth-child(4n+1) {
			margin-left: 0
		}

		.nmc-block--people .person-name {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			font-size: 1.375rem;
			font-weight: 400;
			margin-bottom: .4em;
			text-transform: uppercase
		}

		.nmc-block--people .person-name:first-child {
			margin-top: 0
		}

		.nmc-block--people .person-name:last-child {
			margin-bottom: 0
		}

		.nmc-block--people .person-title {
			margin-bottom: .5em;
			color: #777;
			font-style: italic
		}

		.nmc-block--people .person-location {
			display: flex;
			align-items: center;
			margin-bottom: .5em
		}

		.nmc-block--people .person-location_icon {
			display: flex;
			align-items: center;
			width: 30px;
			height: 30px
		}

		.nmc-block--people .person-location_icon img {
			margin: 0 auto;
			max-width: 25px;
			height: auto
		}

		.nmc-block--people .person-twitter_a {
			color: #cc2126
		}

		@media (max-width:900px) {
			.nmc-block--people .person {
				flex-basis: 31.5%;
				margin-left: 2.75%
			}

			.nmc-block--people .person:nth-child(4n+1) {
				margin-left: 2.75%
			}

			.nmc-block--people .person:nth-child(3n+1) {
				margin-left: 0
			}
		}

		@media (max-width:700px) {
			.nmc-block--people .person {
				flex-basis: 48%;
				margin-left: 4%
			}

			.nmc-block--people .person:nth-child(3n+1),
			.nmc-block--people .person:nth-child(4n+1) {
				margin-left: 4%
			}

			.nmc-block--people .person:nth-child(2n+1) {
				margin-left: 0
			}
		}

		@media (max-width:420px) {
			.nmc-block--people .people {
				display: block
			}

			.nmc-block--people .person {
				margin-left: 0 !important
			}
		}

		* {
			box-sizing: border-box;
			-webkit-tap-highlight-color: transparent
		}

		.nmc-block--banner-cta {
			height: 550px;
			font-size: 1.0625rem;
			background: #fbb040
		}

		.gutenberg>.bound-narrow>.nmc-block--banner-cta:last-child {
			margin-bottom: 0
		}

		.nmc-block--banner-cta:before {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			height: 100%;
			width: 100%;
			background: url(https://www.buildon.org/wp-content/themes/nmc_buildon/assets/pattern.svg) 0 0 repeat;
			opacity: .3
		}

		.nmc-block--banner-cta .banner-cta_content {
			position: absolute;
			left: 0;
			top: 0;
			height: 100%;
			width: 100%;
			text-align: center
		}

		.nmc-block--banner-cta .bound-narrow {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100%
		}

		.nmc-block--banner-cta .banner-cta_title {
			margin: 24px 0 1rem;
			font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
			font-weight: 700;
			line-height: 1.25;
			color: #202020;
			font-size: 2.875rem
		}

		.nmc-block--banner-cta .banner-cta_title:first-child {
			margin-top: 0
		}

		.nmc-block--banner-cta .banner-cta_title:last-child {
			margin-bottom: 0
		}

		@media (max-width:600px) {
			.nmc-block--banner-cta .banner-cta_title {
				font-size: 2rem
			}
		}

		.nmc-block--banner-cta .banner-cta_description {
			margin: 0 0 2em
		}

		.nmc-block--banner-cta .banner-cta_description a {
			color: #202020;
			border-color: rgba(32, 32, 32, .5)
		}

		.nmc-block--banner-cta .banner-cta_description a:hover {
			color: #cc2126;
			border-color: #cc2126
		}

		.nmc-block--banner-cta.black:before,
		.nmc-block--banner-cta.red:before,
		.nmc-block--banner-cta.with-image:before {
			opacity: .2
		}

		.nmc-block--banner-cta.black .banner-cta_content,
		.nmc-block--banner-cta.red .banner-cta_content,
		.nmc-block--banner-cta.with-image .banner-cta_content {
			color: #fff
		}

		.nmc-block--banner-cta.black .banner-cta_content .banner-cta_title,
		.nmc-block--banner-cta.red .banner-cta_content .banner-cta_title,
		.nmc-block--banner-cta.with-image .banner-cta_content .banner-cta_title {
			color: #fff
		}

		.nmc-block--banner-cta.black .banner-cta_content .banner-cta_description a,
		.nmc-block--banner-cta.red .banner-cta_content .banner-cta_description a,
		.nmc-block--banner-cta.with-image .banner-cta_content .banner-cta_description a {
			color: #fff;
			border-color: rgba(255, 255, 255, .5)
		}

		.nmc-block--banner-cta.black .banner-cta_content .banner-cta_description a:hover,
		.nmc-block--banner-cta.red .banner-cta_content .banner-cta_description a:hover,
		.nmc-block--banner-cta.with-image .banner-cta_content .banner-cta_description a:hover {
			opacity: .5
		}

		.nmc-block--banner-cta.orange {
			background: #f16523
		}

		.nmc-block--banner-cta.red {
			background: #cc2126
		}

		.nmc-block--banner-cta.black {
			background: #000
		}

		.nmc-block--banner-cta.with-image {
			height: auto;
			background: #000
		}

		.nmc-block--banner-cta.with-image:before {
			display: none
		}

		.nmc-block--banner-cta.with-image .banner-cta_image {
			opacity: .6
		}

		.nmc-block--banner-cta.small-banner {
			height: auto
		}

		.nmc-block--banner-cta.small-banner .banner-cta_content {
			position: relative;
			padding: 75px 0
		}

		.nmc-block--banner-cta.small-banner .banner-cta_content-wrap {
			display: flex;
			justify-content: space-between;
			align-items: center
		}

		.nmc-block--banner-cta.small-banner .banner-cta_title {
			margin: 0 50px 0 0;
			text-align: left
		}

		.nmc-block--banner-cta.small-banner .banner-cta_button {
			min-width: 260px
		}

		@media (max-width:900px) {
			.nmc-block--banner-cta.small-banner .banner-cta_title {
				font-size: 2rem
			}

			.nmc-block--banner-cta.small-banner .banner-cta_button {
				min-width: 0
			}
		}

		@media (max-width:600px) {
			.nmc-block--banner-cta {
				height: auto
			}

			.nmc-block--banner-cta .banner-cta_content {
				position: relative;
				padding: 80px 0
			}

			.nmc-block--banner-cta.with-image .banner-cta_content {
				padding: 40px
			}

			.nmc-block--banner-cta.with-image .banner-cta_content:before {
				content: '';
				position: absolute;
				left: 0;
				top: 0;
				height: 100%;
				width: 100%;
				opacity: .2
			}

			.nmc-block--banner-cta.small-banner .banner-cta_content {
				padding: 45px 0
			}

			.nmc-block--banner-cta.small-banner .banner-cta_content-wrap {
				display: block
			}

			.nmc-block--banner-cta.small-banner .banner-cta_title {
				margin: 0 0 1em;
				text-align: center
			}

			.nmc-block--banner-cta.small-banner .banner-cta_button {
				min-width: 250px
			}
		}

		* {
			box-sizing: border-box;
			-webkit-tap-highlight-color: transparent
		}

		* {
			box-sizing: border-box;
			-webkit-tap-highlight-color: transparent
		}

		.gutenberg>.bound-narrow>.nmc-block--get-in-touch-form:last-child {
			margin-bottom: 0
		}

		.nmc-block--get-in-touch-form .get-in-touch-form {
			display: flex;
			justify-content: space-between;
			position: relative;
			z-index: 1
		}

		.nmc-block--get-in-touch-form .left {
			flex-basis: 360px;
			flex-shrink: 0
		}

		.nmc-block--get-in-touch-form .right {
			flex-grow: 1;
			margin-left: 12%;
			min-width: 0
		}

		.nmc-block--get-in-touch-form .intro-text {
			font-size: 1.25rem
		}

		.nmc-block--get-in-touch-form .block-image {
			position: relative;
			z-index: 0;
			margin: 0 0 -6.25rem
		}

		.nmc-block--get-in-touch-form .block-image:before {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			z-index: 1;
			width: 100%;
			height: 20%;
			background: linear-gradient(180deg, #f1f2f4 0, transparent 100%)
		}

		.nmc-block--get-in-touch-form .block-image.no-gradient:before {
			display: none
		}

		.nmc-block--get-in-touch-form .block-image.default {
			margin-top: -32%
		}

		.nmc-block--get-in-touch-form .block-image.default:before {
			display: none
		}

		@media (max-width:900px) {
			.nmc-block--get-in-touch-form .get-in-touch-form {
				display: block
			}

			.nmc-block--get-in-touch-form .right {
				margin: 60px 0 0
			}

			.nmc-block--get-in-touch-form .intro-text {
				flex-basis: 45%
			}

			.nmc-block--get-in-touch-form .block-image {
				margin: 0 0 -3.125rem
			}

			.nmc-block--get-in-touch-form .block-image.default {
				margin-top: -32%
			}
		}

		@media (max-width:600px) {
			.nmc-block--get-in-touch-form .left {
				display: block
			}
		}
	</style>
</head>

<body>
    <header id="header" class="header" role="banner">
		
        <div class="bound-maximum">
            <div class="header-layout">
                <div class="header-layout_group">
                    <div class="logo">
                        <a href="{{ route('home') }}" rel="home" class="logo_a" title="homepage"
                            aria-label="RATO">
							<div class="nav-brand d-flex" style="padding-top: 29.166666666667%;">
								{{-- <img class="logo_img"  src="{{ asset('assets/images/logo.jpeg.') }}" width="240" height="70"
                                    alt="Ramat"> --}}
								<span class="logo-text" style="color: green;">RAMAT TANZANIA</span>
							</div>
                            <div class="image-auto" style="padding-top: 29.166666666667%;">
								
                                {{-- <img class="logo_img" src="{{ asset('assets/images/logo.jpeg') }}" width="240" height="70"
                                    alt="Ramat"> --}}
                            </div>
                        </a>
                    </div>
                </div>
                <div class="header-layout_group">
                    <button id="nav-toggle" class="nav-toggle" tabindex="-1">
                        <span class="nav-toggle_span icon">
                            <span class="nav-toggle_span t"></span>
                            <span class="nav-toggle_span m"></span>
                            <span class="nav-toggle_span b"></span>
                        </span>
                    </button>
                    <nav id="primary-nav" class="primary-nav" role="navigation" aria-label="Main Navigation">
                        <ul class="mainNav_ul -depth-1" role="menubar" aria-label="Main Navigation">
                            <li class="mainNav_li -depth-1 -current" role="none">
                                <a href="/#" role="menuitem"
                                    class="mainNav_a -depth-1">Home
                                </a>
                            </li>
                            <li class="mainNav_li -depth-1 " role="none">
                                <a href="#" role="menuitem" class="mainNav_a -depth-1"
                                    aria-haspopup="true" aria-expanded="false">Programes</a>
                                <button class="mainNav_subnav-toggle -depth-1" aria-label="subnav toggle" tabindex="-1">
                                    <img loading="lazy" src="./Our Work _ buildOn_files/nav-arrow.svg"
                                        alt="Subnav Toggle">
                                </button>
                                <div class="mainNav_subnav">
                                    <div class="mainNav_subnav-info">
                                        <div class="mainNav_subnav-image">
                                            <div class="image-auto" style="padding-top: 61.864406779661%">
                                                <img width="236" height="146" alt="" loading="lazy"
                                                    src="./Our Work _ buildOn_files/1-OurWork-Masthead-1--256.webp">
                                            </div>
                                        </div>
                                        <div class="mainNav_subnav-title">
                                            <a class="mainNav_subnav-title_link" href="#"
                                                aria-haspopup="true">Our Work</a>
                                        </div>
                                    </div>
                                    <ul role="menu" aria-label="Our Work" class="mainNav_ul -depth-2"
                                        aria-hidden="true">
                                        <li class="mainNav_li -depth-2 -end" role="none">
                                            <a href="{{ route('women_empower') }}" role="menuitem"
                                                class="mainNav_a -depth-2" tabindex="-1">Women Empowerment in tourism
                                            </a>
                                        </li>
                                        <li class="mainNav_li -depth-2 -end" role="none">
                                            <a href="{{ route('young_generation') }}" role="menuitem"
                                                class="mainNav_a -depth-2" tabindex="-1">Young generation in tourism
                                            </a>
                                        </li>
                                        <li class="mainNav_li -depth-2 -end" role="none">
                                            <a href="{{ route('healthy_ev_school') }}"
                                                role="menuitem" class="mainNav_a -depth-2" tabindex="-1">Healthy environment in school
                                            </a>
                                        </li>
                                        <li class="mainNav_li -depth-2 -end" role="none">
                                            <a href="{{ route('waste') }}" role="menuitem"
                                                class="mainNav_a -depth-2" tabindex="-1">Waste management
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mainNav_li -depth-1" role="none">
                                <a href="#" role="menuitem"
                                    class="mainNav_a -depth-1" aria-haspopup="true" aria-expanded="false">Get
                                    Involved</a>
                                <button class="mainNav_subnav-toggle -depth-1" aria-label="subnav toggle" tabindex="-1">
                                    <img loading="lazy" src="./Our Work _ buildOn_files/nav-arrow.svg"
                                        alt="Subnav Toggle">
                                </button>
                                <div class="mainNav_subnav">
                                    <div class="mainNav_subnav-info">
                                        <div class="mainNav_subnav-image">
                                            <div class="image-auto" style="padding-top: 61.864406779661%">
                                                <img width="236" height="146" alt="" loading="lazy"
                                                    src="./Our Work _ buildOn_files/ServicePartners-5-Immersion4-Trek--256.webp">
                                            </div>
                                        </div>
                                        <div class="mainNav_subnav-title">
                                            <a class="mainNav_subnav-title_link"
                                                href="#" aria-haspopup="true">Get
                                                Involved
                                            </a>
                                        </div>
                                    </div>
                                    <ul role="menu" aria-label="Get Involved" class="mainNav_ul -depth-2"
                                        aria-hidden="true">
                                        <li class="mainNav_li -depth-2 -end" role="none">
                                            <a href="#" role="menuitem"
                                                class="mainNav_a -depth-2" tabindex="-1">Donate
                                            </a>

                                        </li>
                                        <li class="mainNav_li -depth-2 -end" role="none">
                                            <a href="#" role="menuitem"
                                                class="mainNav_a -depth-2" tabindex="-1">Partner with us
                                            </a>
                                        </li>
                                        <li class="mainNav_li -depth-2 -end" role="none">
                                            <a href="#"
                                                role="menuitem" class="mainNav_a -depth-2" tabindex="-1">Events
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mainNav_li -depth-1 -end" role="none">
                                <a href="{{ route('about') }}" role="menuitem" class="mainNav_a -depth-1"
                                    aria-haspopup="true" aria-expanded="false">About Us</a>
                                <button class="mainNav_subnav-toggle -depth-1" aria-label="subnav toggle" tabindex="-1">
                                    <img loading="lazy" src="{{ asset('assets/images/downloads/studies.jpg') }}"
                                        alt="Subnav Toggle">
                                </button>
                                <div class="mainNav_subnav">
                                    <div class="mainNav_subnav-info">
                                        <div class="mainNav_subnav-image">
                                            <div class="image-auto" style="padding-top: 61.864406779661%">
                                                <img width="236" height="146" alt="" loading="lazy"
                                                    src="{{ asset('assets/images/downloads/studies.jpg') }}">
                                            </div>
                                        </div>
                                        <div class="mainNav_subnav-title">
                                            <a class="mainNav_subnav-title_link" href="{{ route('about') }}"
                                                aria-haspopup="true">About Us</a>
                                        </div>
                                    </div>
                                    <ul role="menu" aria-label="About Us" class="mainNav_ul -depth-2"
                                        aria-hidden="true">

                                        <li class="mainNav_li -depth-2 -end" role="none">
                                            <a href="#miss&viss" role="menuitem"
                                                class="mainNav_a -depth-2" tabindex="-1">Mission &amp; Vision
                                            </a>
                                        </li>
                                        <li class="mainNav_li -depth-2 -end" role="none">
                                            <a href="#ourteam" role="menuitem"
                                                class="mainNav_a -depth-2" tabindex="-1">Our Team
                                            </a>
                                        </li>
                                        <li class="mainNav_li -depth-2 -end" role="none">
                                            <a href="#" role="menuitem"
                                                class="mainNav_a -depth-2" tabindex="-1">History
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mainNav_li -depth-1" role="none">
                                <a href="{{ route('contact') }}" role="menuitem"
                                    class="mainNav_a -depth-1">Contact Us
                                </a>
                            </li>
                            <li class="mainNav_li -depth-1" role="none">
                                <a href="{{ route('news') }}" role="menuitem"
                                    class="mainNav_a -depth-1">News
                                </a>
                            </li>
                            <li class="mainNav_li -depth-1" role="none">
                                <a href="{{ route('gallary') }}" role="menuitem"
                                    class="mainNav_a -depth-1">Gallary
                                </a>
                            </li>
							<li class="mainNav_li -depth-1 -end" role="none">
								<a href="" role="menuitem" class="mainNav_a -depth-1" style="background: rgb(240,83,49); color:#fff;">
									Donate
								</a>
					
							</li>
							<li class="mainNav_li -depth-1" role="none">
                                <a href="{{ route('login') }}" role="menuitem"
                                    class="mainNav_a -depth-1">login
                                </a>
                            </li>
                        </ul>
                    </nav>
            </div>
        </div>
    </header>
    <main id="main" class="main" role="main">
       @yield('content')
    </main>
 
	<div class="container-fluid footer-ablove">
		<div class="container">
			<div class="row">
				<p>Looking For Exclusive Services?
					<button class="btn btn-default text-dark">Donate Now</button>
				</p>
			</div>
		</div>
	</div>
	<footer class="container-fluid footer-cont">
        <div class="container">
            <div class="footer-top row">
                <div class="col-md-12 foot-logo">
                    <h2>Ramat <span style="color: rgb(44,103,42)">Tanzania</span></h2>
					<p>Donec venenatis metus at diam condimentum pretiuteger aliquet a turpis quis pel len tesque ueta turpis quis venenatissolelementum</p>
                </div>
                
            </div>
            <div class="foot-botom row">
                <div class="col-md-6">
                    <div class="fotter-coo">
                        <h5>IMPORTANT LINKS</h5>
                        <ul>
                            <li><i class="fas fa-caret-right"></i> ABOUT US</li>
                            <li><i class="fas fa-caret-right"></i> COMPANY PROFILE</li>
                            <li><i class="fas fa-caret-right"></i> OUR SERVICES</li>
                            <li><i class="fas fa-caret-right"></i> CONTACT US</li>
                        </ul>
                    </div>
                    
                </div>
                 <div class="col-md-6">
                    <div class="fotter-coo">
                        <h5>ADDRESS</h5>
						<ul>
							<li><i class="fas fa-map-marker-alt"></i> Manor hotel second floor, near moshi, Nairobi road, Arusha </li>
							<li><i class="fas fa-mobile-alt"></i> +255 (782) 189778  </li>
							<li><i class="far fa-envelope"></i> jjamalspring60@gmail.com </li>
						</ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
	<div class="copy">
        <div class="container">
            <a href="#">2022 &copy; All Rights Reserved | Designed and Developed by Mrdavid</a>

            <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
        </span>
        </div>

    </div>
	<!-- End Footer -->
  
	<!-- Vendor JS Files -->
	
	<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
	
    
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="{{ asset('assets/plugins/slider/js/owl.carousel.min.js') }}"></script>
    <script src="assets/js/script.js"></script>

</body>


</html>