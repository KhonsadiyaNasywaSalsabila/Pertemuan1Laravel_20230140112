<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-black:#000;--color-white:#fff;--spacing:.25rem;--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--font-weight-medium:500;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}button{font:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}button{-webkit-appearance:button;-moz-appearance:button;appearance:button}}@layer utilities{.absolute{position:absolute}.relative{position:relative}.mt-1{margin-top:calc(var(--spacing)*1)}.mt-4{margin-top:calc(var(--spacing)*4)}.flex{display:flex}.inline-block{display:inline-block}.min-h-screen{min-height:100vh}.w-full{width:100%}.max-w-4xl{max-width:56rem}.items-center{align-items:center}.justify-center{justify-content:center}.rounded{border-radius:var(--radius-sm)}.rounded-lg{border-radius:var(--radius-lg)}.border{border-style:solid;border-width:1px}.border-\[\#333\]{border-color:#333}.bg-\[\#0f0f0f\]{background-color:#0f0f0f}.bg-\[\#1a1a1a\]{background-color:#1a1a1a}.bg-\[\#f5f5f5\]{background-color:#f5f5f5}.p-12{padding:calc(var(--spacing)*12)}.p-6{padding:calc(var(--spacing)*6)}.px-4{padding-inline:calc(var(--spacing)*4)}.py-2{padding-block:calc(var(--spacing)*2)}.text-base{font-size:var(--text-base);line-height:var(--text-base--line-height)}.text-sm{font-size:var(--text-sm);line-height:var(--text-sm--line-height)}.font-medium{font-weight:var(--font-weight-medium)}.text-\[\#111\]{color:#111}.text-\[\#a3a3a3\]{color:#a3a3a3}.text-\[\#f5f5f5\]{color:#f5f5f5}.text-white{color:var(--color-white)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}@media (hover:hover){.hover\:bg-\[\#e5e5e5\]:hover{background-color:#e5e5e5}}@media (width>=64rem){.lg\:p-16{padding:calc(var(--spacing)*16)}}}
            </style>
        @endif
    </head>
    
    <body class="bg-[#0f0f0f] text-white flex items-center justify-center min-h-screen p-6">
        
        <main class="w-full max-w-4xl border border-[#333] bg-[#1a1a1a] rounded-lg p-12 lg:p-16">
            <h1 class="text-base font-medium text-[#f5f5f5]">Khonsadiya Nasywa Salsabila</h1>
            
            <p class="text-sm text-[#a3a3a3] mt-1">20230140112</p>
            
            <a href="#" class="inline-block mt-4 bg-[#f5f5f5] text-[#111] px-4 py-2 rounded text-sm font-medium hover:bg-[#e5e5e5] transition">
                Modul Pertemuan 1
            </a>
        </main>

    </body>
</html>