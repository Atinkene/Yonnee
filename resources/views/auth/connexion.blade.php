<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    
    <title>{{$title}}</title>
    <style>
               /*! tailwindcss v4.0.14 | MIT License | https://tailwindcss.com */
@layer theme, base, components, utilities;
@layer theme {
  :root, :host {
    --font-sans: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --font-mono: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono",
      "Courier New", monospace;
    --color-red-50: oklch(0.971 0.013 17.38);
    --color-red-500: oklch(0.637 0.237 25.331);
    --color-red-800: oklch(0.444 0.177 26.899);
    --color-blue-500: oklch(0.623 0.214 259.815);
    --color-blue-600: oklch(0.546 0.245 262.881);
    --color-blue-700: oklch(0.488 0.243 264.376);
    --color-blue-900: oklch(0.379 0.146 265.522);
    --color-indigo-500: oklch(0.585 0.233 277.117);
    --color-gray-100: oklch(0.967 0.003 264.542);
    --color-gray-300: oklch(0.872 0.01 258.338);
    --color-gray-400: oklch(0.707 0.022 261.325);
    --color-gray-500: oklch(0.551 0.027 264.364);
    --color-gray-600: oklch(0.446 0.03 256.802);
    --color-gray-700: oklch(0.373 0.034 259.733);
    --color-gray-800: oklch(0.278 0.033 256.848);
    --color-gray-900: oklch(0.21 0.034 264.665);
    --color-black: #000;
    --color-white: #fff;
    --spacing: 0.25rem;
    --container-7xl: 80rem;
    --text-sm: 0.875rem;
    --text-sm--line-height: calc(1.25 / 0.875);
    --text-lg: 1.125rem;
    --text-lg--line-height: calc(1.75 / 1.125);
    --text-xl: 1.25rem;
    --text-xl--line-height: calc(1.75 / 1.25);
    --text-4xl: 2.25rem;
    --text-4xl--line-height: calc(2.5 / 2.25);
    --text-5xl: 3rem;
    --text-5xl--line-height: 1;
    --font-weight-normal: 400;
    --font-weight-medium: 500;
    --font-weight-semibold: 600;
    --font-weight-bold: 700;
    --leading-relaxed: 1.625;
    --radius-sm: 0.25rem;
    --radius-md: 0.375rem;
    --radius-lg: 0.5rem;
    --radius-2xl: 1rem;
    --blur-sm: 8px;
    --blur-lg: 16px;
    --default-transition-duration: 150ms;
    --default-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    --default-font-family: var(--font-sans);
    --default-font-feature-settings: var(--font-sans--font-feature-settings);
    --default-font-variation-settings: var(
      --font-sans--font-variation-settings
    );
    --default-mono-font-family: var(--font-mono);
    --default-mono-font-feature-settings: var(
      --font-mono--font-feature-settings
    );
    --default-mono-font-variation-settings: var(
      --font-mono--font-variation-settings
    );
  }
}
@layer base {
  *, ::after, ::before, ::backdrop, ::file-selector-button {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    border: 0 solid;
  }
  html, :host {
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    tab-size: 4;
    font-family: var( --default-font-family, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" );
    font-feature-settings: var(--default-font-feature-settings, normal);
    font-variation-settings: var( --default-font-variation-settings, normal );
    -webkit-tap-highlight-color: transparent;
  }
  body {
    line-height: inherit;
  }
  hr {
    height: 0;
    color: inherit;
    border-top-width: 1px;
  }
  abbr:where([title]) {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
  }
  h1, h2, h3, h4, h5, h6 {
    font-size: inherit;
    font-weight: inherit;
  }
  a {
    color: inherit;
    -webkit-text-decoration: inherit;
    text-decoration: inherit;
  }
  b, strong {
    font-weight: bolder;
  }
  code, kbd, samp, pre {
    font-family: var( --default-mono-font-family, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace );
    font-feature-settings: var( --default-mono-font-feature-settings, normal );
    font-variation-settings: var( --default-mono-font-variation-settings, normal );
    font-size: 1em;
  }
  small {
    font-size: 80%;
  }
  sub, sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
  }
  sub {
    bottom: -0.25em;
  }
  sup {
    top: -0.5em;
  }
  table {
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse;
  }
  :-moz-focusring {
    outline: auto;
  }
  progress {
    vertical-align: baseline;
  }
  summary {
    display: list-item;
  }
  ol, ul, menu {
    list-style: none;
  }
  img, svg, video, canvas, audio, iframe, embed, object {
    display: block;
    vertical-align: middle;
  }
  img, video {
    max-width: 100%;
    height: auto;
  }
  button, input, select, optgroup, textarea, ::file-selector-button {
    font: inherit;
    font-feature-settings: inherit;
    font-variation-settings: inherit;
    letter-spacing: inherit;
    color: inherit;
    border-radius: 0;
    background-color: transparent;
    opacity: 1;
  }
  :where(select:is([multiple], [size])) optgroup {
    font-weight: bolder;
  }
  :where(select:is([multiple], [size])) optgroup option {
    padding-inline-start: 20px;
  }
  ::file-selector-button {
    margin-inline-end: 4px;
  }
  ::placeholder {
    opacity: 1;
    color: color-mix(in oklab, currentColor 50%, transparent);
  }
  textarea {
    resize: vertical;
  }
  ::-webkit-search-decoration {
    -webkit-appearance: none;
  }
  ::-webkit-date-and-time-value {
    min-height: 1lh;
    text-align: inherit;
  }
  ::-webkit-datetime-edit {
    display: inline-flex;
  }
  ::-webkit-datetime-edit-fields-wrapper {
    padding: 0;
  }
  ::-webkit-datetime-edit, ::-webkit-datetime-edit-year-field, ::-webkit-datetime-edit-month-field, ::-webkit-datetime-edit-day-field, ::-webkit-datetime-edit-hour-field, ::-webkit-datetime-edit-minute-field, ::-webkit-datetime-edit-second-field, ::-webkit-datetime-edit-millisecond-field, ::-webkit-datetime-edit-meridiem-field {
    padding-block: 0;
  }
  :-moz-ui-invalid {
    box-shadow: none;
  }
  button, input:where([type="button"], [type="reset"], [type="submit"]), ::file-selector-button {
    appearance: button;
  }
  ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {
    height: auto;
  }
  [hidden]:where(:not([hidden="until-found"])) {
    display: none !important;
  }
}
@layer utilities {
  .fixed {
    position: fixed;
  }
  .relative {
    position: relative;
  }
  .static {
    position: static;
  }
  .top-0 {
    top: calc(var(--spacing) * 0);
  }
  .right-0 {
    right: calc(var(--spacing) * 0);
  }
  .bottom-0 {
    bottom: calc(var(--spacing) * 0);
  }
  .left-0 {
    left: calc(var(--spacing) * 0);
  }
  .z-10 {
    z-index: 10;
  }
  .col-span-2 {
    grid-column: span 2 / span 2;
  }
  .col-span-3 {
    grid-column: span 3 / span 3;
  }
  .container {
    width: 100%;
    @media (width >= 40rem) {
      max-width: 40rem;
    }
    @media (width >= 48rem) {
      max-width: 48rem;
    }
    @media (width >= 64rem) {
      max-width: 64rem;
    }
    @media (width >= 80rem) {
      max-width: 80rem;
    }
    @media (width >= 96rem) {
      max-width: 96rem;
    }
  }
  .m-auto {
    margin: auto;
  }
  .mx-6 {
    margin-inline: calc(var(--spacing) * 6);
  }
  .mx-auto {
    margin-inline: auto;
  }
  .-mt-px {
    margin-top: -1px;
  }
  .mt-1 {
    margin-top: calc(var(--spacing) * 1);
  }
  .mt-4 {
    margin-top: calc(var(--spacing) * 4);
  }
  .mt-6 {
    margin-top: calc(var(--spacing) * 6);
  }
  .mt-16 {
    margin-top: calc(var(--spacing) * 16);
  }
  .mr-1 {
    margin-right: calc(var(--spacing) * 1);
  }
  .mr-10 {
    margin-right: calc(var(--spacing) * 10);
  }
  .mb-4 {
    margin-bottom: calc(var(--spacing) * 4);
  }
  .ml-4 {
    margin-left: calc(var(--spacing) * 4);
  }
  .block {
    display: block;
  }
  .flex {
    display: flex;
  }
  .grid {
    display: grid;
  }
  .hidden {
    display: none;
  }
  .inline-block {
    display: inline-block;
  }
  .inline-flex {
    display: inline-flex;
  }
  .table {
    display: table;
  }
  .size-6 {
    width: calc(var(--spacing) * 6);
    height: calc(var(--spacing) * 6);
  }
  .h-5 {
    height: calc(var(--spacing) * 5);
  }
  .h-5\/6 {
    height: calc(5/6 * 100%);
  }
  .h-6 {
    height: calc(var(--spacing) * 6);
  }
  .h-7 {
    height: calc(var(--spacing) * 7);
  }
  .h-9 {
    height: calc(var(--spacing) * 9);
  }
  .h-10 {
    height: calc(var(--spacing) * 10);
  }
  .h-10\/12 {
    height: calc(10/12 * 100%);
  }
  .h-12 {
    height: calc(var(--spacing) * 12);
  }
  .h-16 {
    height: calc(var(--spacing) * 16);
  }
  .h-20 {
    height: calc(var(--spacing) * 20);
  }
  .h-full {
    height: 100%;
  }
  .h-screen {
    height: 100vh;
  }
  .max-h-10 {
    max-height: calc(var(--spacing) * 10);
  }
  .max-h-10\/12 {
    max-height: calc(10/12 * 100%);
  }
  .max-h-\[80vh\] {
    max-height: 80vh;
  }
  .min-h-10 {
    min-height: calc(var(--spacing) * 10);
  }
  .min-h-10\/12 {
    min-height: calc(10/12 * 100%);
  }
  .min-h-full {
    min-height: 100%;
  }
  .min-h-screen {
    min-height: 100vh;
  }
  .w-1 {
    width: calc(var(--spacing) * 1);
  }
  .w-1\/2 {
    width: calc(1/2 * 100%);
  }
  .w-1\/3 {
    width: calc(1/3 * 100%);
  }
  .w-2 {
    width: calc(var(--spacing) * 2);
  }
  .w-2\/3 {
    width: calc(2/3 * 100%);
  }
  .w-5 {
    width: calc(var(--spacing) * 5);
  }
  .w-6 {
    width: calc(var(--spacing) * 6);
  }
  .w-7 {
    width: calc(var(--spacing) * 7);
  }
  .w-8 {
    width: calc(var(--spacing) * 8);
  }
  .w-9 {
    width: calc(var(--spacing) * 9);
  }
  .w-10 {
    width: calc(var(--spacing) * 10);
  }
  .w-14 {
    width: calc(var(--spacing) * 14);
  }
  .w-16 {
    width: calc(var(--spacing) * 16);
  }
  .w-20 {
    width: calc(var(--spacing) * 20);
  }
  .w-36 {
    width: calc(var(--spacing) * 36);
  }
  .w-\[94\%\] {
    width: 94%;
  }
  .w-auto {
    width: auto;
  }
  .w-full {
    width: 100%;
  }
  .max-w-7xl {
    max-width: var(--container-7xl);
  }
  .min-w-full {
    min-width: 100%;
  }
  .flex-shrink {
    flex-shrink: 1;
  }
  .shrink-0 {
    flex-shrink: 0;
  }
  .table-auto {
    table-layout: auto;
  }
  .border-collapse {
    border-collapse: collapse;
  }
  .scale-100 {
    --tw-scale-x: 100%;
    --tw-scale-y: 100%;
    --tw-scale-z: 100%;
    scale: var(--tw-scale-x) var(--tw-scale-y);
  }
  .cursor-pointer {
    cursor: pointer;
  }
  .resize {
    resize: both;
  }
  .grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr));
  }
  .grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
  .grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }
  .content-between {
    align-content: space-between;
  }
  .items-center {
    align-items: center;
  }
  .items-start {
    align-items: flex-start;
  }
  .justify-center {
    justify-content: center;
  }
  .justify-end {
    justify-content: flex-end;
  }
  .justify-start {
    justify-content: flex-start;
  }
  .gap-3 {
    gap: calc(var(--spacing) * 3);
  }
  .gap-4 {
    gap: calc(var(--spacing) * 4);
  }
  .gap-6 {
    gap: calc(var(--spacing) * 6);
  }
  .space-y-1 {
    :where(& > :not(:last-child)) {
      --tw-space-y-reverse: 0;
      margin-block-start: calc(calc(var(--spacing) * 1) * var(--tw-space-y-reverse));
      margin-block-end: calc(calc(var(--spacing) * 1) * calc(1 - var(--tw-space-y-reverse)));
    }
  }
  .space-y-8 {
    :where(& > :not(:last-child)) {
      --tw-space-y-reverse: 0;
      margin-block-start: calc(calc(var(--spacing) * 8) * var(--tw-space-y-reverse));
      margin-block-end: calc(calc(var(--spacing) * 8) * calc(1 - var(--tw-space-y-reverse)));
    }
  }
  .self-center {
    align-self: center;
  }
  .overflow-auto {
    overflow: auto;
  }
  .overflow-y-auto {
    overflow-y: auto;
  }
  .rounded-2xl {
    border-radius: var(--radius-2xl);
  }
  .rounded-full {
    border-radius: calc(infinity * 1px);
  }
  .rounded-lg {
    border-radius: var(--radius-lg);
  }
  .rounded-md {
    border-radius: var(--radius-md);
  }
  .rounded-t-2xl {
    border-top-left-radius: var(--radius-2xl);
    border-top-right-radius: var(--radius-2xl);
  }
  .rounded-tl-full {
    border-top-left-radius: calc(infinity * 1px);
  }
  .rounded-r-full {
    border-top-right-radius: calc(infinity * 1px);
    border-bottom-right-radius: calc(infinity * 1px);
  }
  .rounded-bl-full {
    border-bottom-left-radius: calc(infinity * 1px);
  }
  .border {
    border-style: var(--tw-border-style);
    border-width: 1px;
  }
  .border-t {
    border-top-style: var(--tw-border-style);
    border-top-width: 1px;
  }
  .border-gray-300 {
    border-color: var(--color-gray-300);
  }
  .border-red-500 {
    border-color: var(--color-red-500);
  }
  .bg-\[\#c44241\] {
    background-color: #c44241;
  }
  .bg-blue-500 {
    background-color: var(--color-blue-500);
  }
  .bg-blue-900 {
    background-color: var(--color-blue-900);
  }
  .bg-gray-100 {
    background-color: var(--color-gray-100);
  }
  .bg-gray-500 {
    background-color: var(--color-gray-500);
  }
  .bg-red-50 {
    background-color: var(--color-red-50);
  }
  .bg-white {
    background-color: var(--color-white);
  }
  .from-gray-700 {
    --tw-gradient-from: var(--color-gray-700);
    --tw-gradient-stops: var(--tw-gradient-via-stops, var(--tw-gradient-position), var(--tw-gradient-from) var(--tw-gradient-from-position), var(--tw-gradient-to) var(--tw-gradient-to-position));
  }
  .from-gray-700\/50 {
    --tw-gradient-from: color-mix(in oklab, var(--color-gray-700) 50%, transparent);
    --tw-gradient-stops: var(--tw-gradient-via-stops, var(--tw-gradient-position), var(--tw-gradient-from) var(--tw-gradient-from-position), var(--tw-gradient-to) var(--tw-gradient-to-position));
  }
  .via-transparent {
    --tw-gradient-via: transparent;
    --tw-gradient-via-stops: var(--tw-gradient-position), var(--tw-gradient-from) var(--tw-gradient-from-position), var(--tw-gradient-via) var(--tw-gradient-via-position), var(--tw-gradient-to) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-via-stops);
  }
  .bg-center {
    background-position: center;
  }
  .stroke-gray-400 {
    stroke: var(--color-gray-400);
  }
  .stroke-red-500 {
    stroke: var(--color-red-500);
  }
  .stroke-2 {
    stroke-width: 2;
  }
  .p-5 {
    padding: calc(var(--spacing) * 5);
  }
  .p-6 {
    padding: calc(var(--spacing) * 6);
  }
  .p-8 {
    padding: calc(var(--spacing) * 8);
  }
  .p-50 {
    padding: calc(var(--spacing) * 50);
  }
  .px-0 {
    padding-inline: calc(var(--spacing) * 0);
  }
  .px-3 {
    padding-inline: calc(var(--spacing) * 3);
  }
  .px-4 {
    padding-inline: calc(var(--spacing) * 4);
  }
  .px-6 {
    padding-inline: calc(var(--spacing) * 6);
  }
  .py-2 {
    padding-block: calc(var(--spacing) * 2);
  }
  .py-5 {
    padding-block: calc(var(--spacing) * 5);
  }
  .pt-2 {
    padding-top: calc(var(--spacing) * 2);
  }
  .text-center {
    text-align: center;
  }
  .text-right {
    text-align: right;
  }
  .text-4xl {
    font-size: var(--text-4xl);
    line-height: var(--tw-leading, var(--text-4xl--line-height));
  }
  .text-5xl {
    font-size: var(--text-5xl);
    line-height: var(--tw-leading, var(--text-5xl--line-height));
  }
  .text-lg {
    font-size: var(--text-lg);
    line-height: var(--tw-leading, var(--text-lg--line-height));
  }
  .text-sm {
    font-size: var(--text-sm);
    line-height: var(--tw-leading, var(--text-sm--line-height));
  }
  .text-xl {
    font-size: var(--text-xl);
    line-height: var(--tw-leading, var(--text-xl--line-height));
  }
  .leading-relaxed {
    --tw-leading: var(--leading-relaxed);
    line-height: var(--leading-relaxed);
  }
  .font-bold {
    --tw-font-weight: var(--font-weight-bold);
    font-weight: var(--font-weight-bold);
  }
  .font-medium {
    --tw-font-weight: var(--font-weight-medium);
    font-weight: var(--font-weight-medium);
  }
  .font-semibold {
    --tw-font-weight: var(--font-weight-semibold);
    font-weight: var(--font-weight-semibold);
  }
  .text-\[\#c44241\] {
    color: #c44241;
  }
  .text-\[\#e27b06\] {
    color: #e27b06;
  }
  .text-black {
    color: var(--color-black);
  }
  .text-blue-900 {
    color: var(--color-blue-900);
  }
  .text-gray-500 {
    color: var(--color-gray-500);
  }
  .text-gray-600 {
    color: var(--color-gray-600);
  }
  .text-gray-700 {
    color: var(--color-gray-700);
  }
  .text-gray-900 {
    color: var(--color-gray-900);
  }
  .text-red-500 {
    color: var(--color-red-500);
  }
  .text-white {
    color: var(--color-white);
  }
  .italic {
    font-style: italic;
  }
  .underline {
    text-decoration-line: underline;
  }
  .antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  .shadow-2xl {
    --tw-shadow: 0 25px 50px -12px var(--tw-shadow-color, rgb(0 0 0 / 0.25));
    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
  }
  .shadow-lg {
    --tw-shadow: 0 10px 15px -3px var(--tw-shadow-color, rgb(0 0 0 / 0.1)), 0 4px 6px -4px var(--tw-shadow-color, rgb(0 0 0 / 0.1));
    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
  }
  .shadow-md {
    --tw-shadow: 0 4px 6px -1px var(--tw-shadow-color, rgb(0 0 0 / 0.1)), 0 2px 4px -2px var(--tw-shadow-color, rgb(0 0 0 / 0.1));
    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
  }
  .shadow-sm {
    --tw-shadow: 0 1px 3px 0 var(--tw-shadow-color, rgb(0 0 0 / 0.1)), 0 1px 2px -1px var(--tw-shadow-color, rgb(0 0 0 / 0.1));
    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
  }
  .shadow-xl {
    --tw-shadow: 0 20px 25px -5px var(--tw-shadow-color, rgb(0 0 0 / 0.1)), 0 8px 10px -6px var(--tw-shadow-color, rgb(0 0 0 / 0.1));
    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
  }
  .ring-4 {
    --tw-ring-shadow: var(--tw-ring-inset,) 0 0 0 calc(4px + var(--tw-ring-offset-width)) var(--tw-ring-color, currentColor);
    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
  }
  .ring-8 {
    --tw-ring-shadow: var(--tw-ring-inset,) 0 0 0 calc(8px + var(--tw-ring-offset-width)) var(--tw-ring-color, currentColor);
    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
  }
  .shadow-black {
    --tw-shadow-color: var(--color-black);
  }
  .shadow-gray-500 {
    --tw-shadow-color: var(--color-gray-500);
  }
  .shadow-gray-500\/20 {
    --tw-shadow-color: color-mix(in oklab, var(--color-gray-500) 20%, transparent);
  }
  .ring-blue-900 {
    --tw-ring-color: var(--color-blue-900);
  }
  .outline {
    outline-style: var(--tw-outline-style);
    outline-width: 1px;
  }
  .backdrop-blur-lg {
    --tw-backdrop-blur: blur(var(--blur-lg));
    -webkit-backdrop-filter: var(--tw-backdrop-blur,) var(--tw-backdrop-brightness,) var(--tw-backdrop-contrast,) var(--tw-backdrop-grayscale,) var(--tw-backdrop-hue-rotate,) var(--tw-backdrop-invert,) var(--tw-backdrop-opacity,) var(--tw-backdrop-saturate,) var(--tw-backdrop-sepia,);
    backdrop-filter: var(--tw-backdrop-blur,) var(--tw-backdrop-brightness,) var(--tw-backdrop-contrast,) var(--tw-backdrop-grayscale,) var(--tw-backdrop-hue-rotate,) var(--tw-backdrop-invert,) var(--tw-backdrop-opacity,) var(--tw-backdrop-saturate,) var(--tw-backdrop-sepia,);
  }
  .backdrop-blur-sm {
    --tw-backdrop-blur: blur(var(--blur-sm));
    -webkit-backdrop-filter: var(--tw-backdrop-blur,) var(--tw-backdrop-brightness,) var(--tw-backdrop-contrast,) var(--tw-backdrop-grayscale,) var(--tw-backdrop-hue-rotate,) var(--tw-backdrop-invert,) var(--tw-backdrop-opacity,) var(--tw-backdrop-saturate,) var(--tw-backdrop-sepia,);
    backdrop-filter: var(--tw-backdrop-blur,) var(--tw-backdrop-brightness,) var(--tw-backdrop-contrast,) var(--tw-backdrop-grayscale,) var(--tw-backdrop-hue-rotate,) var(--tw-backdrop-invert,) var(--tw-backdrop-opacity,) var(--tw-backdrop-saturate,) var(--tw-backdrop-sepia,);
  }
  .backdrop-filter {
    -webkit-backdrop-filter: var(--tw-backdrop-blur,) var(--tw-backdrop-brightness,) var(--tw-backdrop-contrast,) var(--tw-backdrop-grayscale,) var(--tw-backdrop-hue-rotate,) var(--tw-backdrop-invert,) var(--tw-backdrop-opacity,) var(--tw-backdrop-saturate,) var(--tw-backdrop-sepia,);
    backdrop-filter: var(--tw-backdrop-blur,) var(--tw-backdrop-brightness,) var(--tw-backdrop-contrast,) var(--tw-backdrop-grayscale,) var(--tw-backdrop-hue-rotate,) var(--tw-backdrop-invert,) var(--tw-backdrop-opacity,) var(--tw-backdrop-saturate,) var(--tw-backdrop-sepia,);
  }
  .transition-all {
    transition-property: all;
    transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
    transition-duration: var(--tw-duration, var(--default-transition-duration));
  }
  .duration-250 {
    --tw-duration: 250ms;
    transition-duration: 250ms;
  }
  .group-hover\:text-\[\#c44241\] {
    &:is(:where(.group):hover *) {
      @media (hover: hover) {
        color: #c44241;
      }
    }
  }
  .selection\:bg-red-500 {
    & *::selection {
      background-color: var(--color-red-500);
    }
    &::selection {
      background-color: var(--color-red-500);
    }
  }
  .selection\:text-white {
    & *::selection {
      color: var(--color-white);
    }
    &::selection {
      color: var(--color-white);
    }
  }
  .placeholder\:font-normal {
    &::placeholder {
      --tw-font-weight: var(--font-weight-normal);
      font-weight: var(--font-weight-normal);
    }
  }
  .placeholder\:text-\[\#c44241\] {
    &::placeholder {
      color: #c44241;
    }
  }
  .hover\:cursor-pointer {
    &:hover {
      @media (hover: hover) {
        cursor: pointer;
      }
    }
  }
  .hover\:border-3 {
    &:hover {
      @media (hover: hover) {
        border-style: var(--tw-border-style);
        border-width: 3px;
      }
    }
  }
  .hover\:border-l-4 {
    &:hover {
      @media (hover: hover) {
        border-left-style: var(--tw-border-style);
        border-left-width: 4px;
      }
    }
  }
  .hover\:border-dashed {
    &:hover {
      @media (hover: hover) {
        --tw-border-style: dashed;
        border-style: dashed;
      }
    }
  }
  .hover\:border-\[\#c44241\] {
    &:hover {
      @media (hover: hover) {
        border-color: #c44241;
      }
    }
  }
  .hover\:border-blue-900 {
    &:hover {
      @media (hover: hover) {
        border-color: var(--color-blue-900);
      }
    }
  }
  .hover\:bg-blue-600 {
    &:hover {
      @media (hover: hover) {
        background-color: var(--color-blue-600);
      }
    }
  }
  .hover\:bg-blue-700 {
    &:hover {
      @media (hover: hover) {
        background-color: var(--color-blue-700);
      }
    }
  }
  .hover\:bg-gray-700 {
    &:hover {
      @media (hover: hover) {
        background-color: var(--color-gray-700);
      }
    }
  }
  .hover\:bg-white {
    &:hover {
      @media (hover: hover) {
        background-color: var(--color-white);
      }
    }
  }
  .hover\:text-\[\#c44241\] {
    &:hover {
      @media (hover: hover) {
        color: #c44241;
      }
    }
  }
  .hover\:text-blue-900 {
    &:hover {
      @media (hover: hover) {
        color: var(--color-blue-900);
      }
    }
  }
  .hover\:text-gray-700 {
    &:hover {
      @media (hover: hover) {
        color: var(--color-gray-700);
      }
    }
  }
  .hover\:text-gray-900 {
    &:hover {
      @media (hover: hover) {
        color: var(--color-gray-900);
      }
    }
  }
  .hover\:underline {
    &:hover {
      @media (hover: hover) {
        text-decoration-line: underline;
      }
    }
  }
  .hover\:shadow-2xl {
    &:hover {
      @media (hover: hover) {
        --tw-shadow: 0 25px 50px -12px var(--tw-shadow-color, rgb(0 0 0 / 0.25));
        box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
      }
    }
  }
  .hover\:shadow-\[\#c44241\] {
    &:hover {
      @media (hover: hover) {
        --tw-shadow-color: #c44241;
      }
    }
  }
  .focus\:rounded-sm {
    &:focus {
      border-radius: var(--radius-sm);
    }
  }
  .focus\:border-indigo-500 {
    &:focus {
      border-color: var(--color-indigo-500);
    }
  }
  .focus\:border-transparent {
    &:focus {
      border-color: transparent;
    }
  }
  .focus\:ring-2 {
    &:focus {
      --tw-ring-shadow: var(--tw-ring-inset,) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color, currentColor);
      box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
    }
  }
  .focus\:ring-blue-500 {
    &:focus {
      --tw-ring-color: var(--color-blue-500);
    }
  }
  .focus\:ring-indigo-500 {
    &:focus {
      --tw-ring-color: var(--color-indigo-500);
    }
  }
  .focus\:outline {
    &:focus {
      outline-style: var(--tw-outline-style);
      outline-width: 1px;
    }
  }
  .focus\:outline-2 {
    &:focus {
      outline-style: var(--tw-outline-style);
      outline-width: 2px;
    }
  }
  .focus\:outline-red-500 {
    &:focus {
      outline-color: var(--color-red-500);
    }
  }
  .focus\:outline-none {
    &:focus {
      --tw-outline-style: none;
      outline-style: none;
    }
  }
  .motion-safe\:hover\:scale-\[1\.01\] {
    @media (prefers-reduced-motion: no-preference) {
      &:hover {
        @media (hover: hover) {
          scale: 1.01;
        }
      }
    }
  }
  .sm\:fixed {
    @media (width >= 40rem) {
      position: fixed;
    }
  }
  .sm\:top-0 {
    @media (width >= 40rem) {
      top: calc(var(--spacing) * 0);
    }
  }
  .sm\:right-0 {
    @media (width >= 40rem) {
      right: calc(var(--spacing) * 0);
    }
  }
  .sm\:ml-0 {
    @media (width >= 40rem) {
      margin-left: calc(var(--spacing) * 0);
    }
  }
  .sm\:flex {
    @media (width >= 40rem) {
      display: flex;
    }
  }
  .sm\:items-center {
    @media (width >= 40rem) {
      align-items: center;
    }
  }
  .sm\:justify-between {
    @media (width >= 40rem) {
      justify-content: space-between;
    }
  }
  .sm\:justify-center {
    @media (width >= 40rem) {
      justify-content: center;
    }
  }
  .sm\:text-left {
    @media (width >= 40rem) {
      text-align: left;
    }
  }
  .sm\:text-right {
    @media (width >= 40rem) {
      text-align: right;
    }
  }
  .sm\:text-sm {
    @media (width >= 40rem) {
      font-size: var(--text-sm);
      line-height: var(--tw-leading, var(--text-sm--line-height));
    }
  }
  .md\:grid-cols-2 {
    @media (width >= 48rem) {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }
  .lg\:gap-8 {
    @media (width >= 64rem) {
      gap: calc(var(--spacing) * 8);
    }
  }
  .lg\:p-8 {
    @media (width >= 64rem) {
      padding: calc(var(--spacing) * 8);
    }
  }
  .dark\:bg-gray-800\/50 {
    @media (prefers-color-scheme: dark) {
      background-color: color-mix(in oklab, var(--color-gray-800) 50%, transparent);
    }
  }
  .dark\:bg-gray-900 {
    @media (prefers-color-scheme: dark) {
      background-color: var(--color-gray-900);
    }
  }
  .dark\:bg-red-800\/20 {
    @media (prefers-color-scheme: dark) {
      background-color: color-mix(in oklab, var(--color-red-800) 20%, transparent);
    }
  }
  .dark\:bg-gradient-to-bl {
    @media (prefers-color-scheme: dark) {
      --tw-gradient-position: to bottom left in oklab;
      background-image: linear-gradient(var(--tw-gradient-stops));
    }
  }
  .dark\:text-gray-400 {
    @media (prefers-color-scheme: dark) {
      color: var(--color-gray-400);
    }
  }
  .dark\:text-white {
    @media (prefers-color-scheme: dark) {
      color: var(--color-white);
    }
  }
  .dark\:shadow-none {
    @media (prefers-color-scheme: dark) {
      --tw-shadow: 0 0 #0000;
      box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
    }
  }
  .dark\:ring-1 {
    @media (prefers-color-scheme: dark) {
      --tw-ring-shadow: var(--tw-ring-inset,) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color, currentColor);
      box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
    }
  }
  .dark\:ring-white\/5 {
    @media (prefers-color-scheme: dark) {
      --tw-ring-color: color-mix(in oklab, var(--color-white) 5%, transparent);
    }
  }
  .dark\:ring-inset {
    @media (prefers-color-scheme: dark) {
      --tw-ring-inset: inset;
    }
  }
  .dark\:hover\:text-white {
    @media (prefers-color-scheme: dark) {
      &:hover {
        @media (hover: hover) {
          color: var(--color-white);
        }
      }
    }
  }
}
@property --tw-scale-x {
  syntax: "*";
  inherits: false;
  initial-value: 1;
}
@property --tw-scale-y {
  syntax: "*";
  inherits: false;
  initial-value: 1;
}
@property --tw-scale-z {
  syntax: "*";
  inherits: false;
  initial-value: 1;
}
@property --tw-space-y-reverse {
  syntax: "*";
  inherits: false;
  initial-value: 0;
}
@property --tw-border-style {
  syntax: "*";
  inherits: false;
  initial-value: solid;
}
@property --tw-gradient-position {
  syntax: "*";
  inherits: false;
}
@property --tw-gradient-from {
  syntax: "<color>";
  inherits: false;
  initial-value: #0000;
}
@property --tw-gradient-via {
  syntax: "<color>";
  inherits: false;
  initial-value: #0000;
}
@property --tw-gradient-to {
  syntax: "<color>";
  inherits: false;
  initial-value: #0000;
}
@property --tw-gradient-stops {
  syntax: "*";
  inherits: false;
}
@property --tw-gradient-via-stops {
  syntax: "*";
  inherits: false;
}
@property --tw-gradient-from-position {
  syntax: "<length-percentage>";
  inherits: false;
  initial-value: 0%;
}
@property --tw-gradient-via-position {
  syntax: "<length-percentage>";
  inherits: false;
  initial-value: 50%;
}
@property --tw-gradient-to-position {
  syntax: "<length-percentage>";
  inherits: false;
  initial-value: 100%;
}
@property --tw-leading {
  syntax: "*";
  inherits: false;
}
@property --tw-font-weight {
  syntax: "*";
  inherits: false;
}
@property --tw-shadow {
  syntax: "*";
  inherits: false;
  initial-value: 0 0 #0000;
}
@property --tw-shadow-color {
  syntax: "*";
  inherits: false;
}
@property --tw-inset-shadow {
  syntax: "*";
  inherits: false;
  initial-value: 0 0 #0000;
}
@property --tw-inset-shadow-color {
  syntax: "*";
  inherits: false;
}
@property --tw-ring-color {
  syntax: "*";
  inherits: false;
}
@property --tw-ring-shadow {
  syntax: "*";
  inherits: false;
  initial-value: 0 0 #0000;
}
@property --tw-inset-ring-color {
  syntax: "*";
  inherits: false;
}
@property --tw-inset-ring-shadow {
  syntax: "*";
  inherits: false;
  initial-value: 0 0 #0000;
}
@property --tw-ring-inset {
  syntax: "*";
  inherits: false;
}
@property --tw-ring-offset-width {
  syntax: "<length>";
  inherits: false;
  initial-value: 0px;
}
@property --tw-ring-offset-color {
  syntax: "*";
  inherits: false;
  initial-value: #fff;
}
@property --tw-ring-offset-shadow {
  syntax: "*";
  inherits: false;
  initial-value: 0 0 #0000;
}
@property --tw-outline-style {
  syntax: "*";
  inherits: false;
  initial-value: solid;
}
@property --tw-backdrop-blur {
  syntax: "*";
  inherits: false;
}
@property --tw-backdrop-brightness {
  syntax: "*";
  inherits: false;
}
@property --tw-backdrop-contrast {
  syntax: "*";
  inherits: false;
}
@property --tw-backdrop-grayscale {
  syntax: "*";
  inherits: false;
}
@property --tw-backdrop-hue-rotate {
  syntax: "*";
  inherits: false;
}
@property --tw-backdrop-invert {
  syntax: "*";
  inherits: false;
}
@property --tw-backdrop-opacity {
  syntax: "*";
  inherits: false;
}
@property --tw-backdrop-saturate {
  syntax: "*";
  inherits: false;
}
@property --tw-backdrop-sepia {
  syntax: "*";
  inherits: false;
}
@property --tw-duration {
  syntax: "*";
  inherits: false;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}    
    </style>
</head>
<body class="bg-" >
    
    {{-- style="background-image: url({{asset('img/12.png')}})" --}}
    @auth
        {{-- {{Auth::user()}} --}}
    @endauth
    <div class="h-screen flex justify-center items-center ">
       <div class="w-full h-full flex justify-center items-center" >
        <div class="backdrop-filter backdrop-blur-lg ring-8 ring-opacity-20 ring-blue-900 flex justify-center items-center rounded-full h-5/6 w-2/3 shadow-lg shadow-black pt-2  " style="background-image: url({{asset('img/4.png')}})" >
            <div class="w-full flex justify-center items-center backdrop-blur-sm h-full rounded-full ">
                <div class="w-2/3 ">
                    <form class="text-center items-center space-y-1 w-full" action="" method="post">
                        @csrf
                        <div class="grid grid-cols-6 gap-4">
                            <div class="flex justify-center items-center">
                                <img class="p-5 m-auto" width="150px" height="150px"  src="{{ asset('images/logo.jpg') }}" alt="Logo">

                            </div>
                            <h2 class="font-bold text-5xl text-blue-900 font">Connexion</h2>
                            <input  class="text-center bg-opacity-25 text-[#e27b06] font-semibold text-lg h-12 w-full  rounded-full shadow-lg italic shadow-black-900/50 placeholder:text-[#c44241] placeholder:font-normal  ring-4 ring-opacity-20 ring-blue-900 focus:outline-none focus:ring-opacity-50  focus:border-transparent" type="text" name="matricule" id="" placeholder="Entrer votre matricule"><br>
                            @error('matricule')
                                <div class="text-red-500">
                                    {{$message}}
                                </div>
                            @enderror
                            <input  class="text-center text-[#e27b06] font-semibold text-lg h-12 w-full rounded-full shadow-lg italic shadow-black-900/50 placeholder:text-[#c44241] placeholder:font-normal  ring-4 ring-opacity-20 ring-blue-900 focus:outline-none focus:ring-opacity-50  focus:border-transparent" type="password" name="password" id="" placeholder="Entrez votre mot de passe"><br>
                            <div class="flex justify-center items-center">
                                <input class="text-center  text-white hover:text-blue-900 text-lg h-10 w-1/2 bg-blue-900 hover:bg-white rounded-lg shadow-lg font-semibold shadow-black-900/50 cursor-pointer  hover:border-3 hover:border-[#c44241] hover:border-dashed " type="submit" name="" id="" value="Se connecter"><br><br>

                                </div>
                        </div>
                        <div class="grid grid-cols-1 gap-3">
                            <a class="text-blue-900 font-semibold hover:underline" href="">Mot de passe oublié?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       </div>
    </div>
</body>
</html>