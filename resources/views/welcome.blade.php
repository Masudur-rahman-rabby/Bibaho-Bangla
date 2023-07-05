<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Edu+NSW+ACT+Foundation&display=swap"
    rel="stylesheet">
  <title>Bibaho-Bangla</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"
        
        />

        <!-- Styles -->
        <style>

            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;

}

.highlight {
  color: red;
  font-weight: bold;
}

.highlight2 {
  color: rgb(171, 82, 124);
}

.containerC {   
             
         margin: 70px;      
        overflow: hidden;
        position: relative;
        height: fit-content;
        justify-content: center;
        align-self: center
        }
    
        h1 {
          text-align: center;
        }
    
        .story {
          width: 100%; 
          margin-bottom: 20px;
          padding: 20px;
          background-color: #ffffff;
          border-radius: 5px;
          box-shadow: 4px 4px 4px rgba(0.1, 0.1, 0.1, 0.1);
          display: inline-block;
          align-items:  center;
          align-self: center;
        }
    
        .couple {
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
          margin-bottom: 20px;
        }
    
        .couple img {
          width: 180px;
          height: 180px;
          object-fit: cover;
          border-radius: 50%;
          transform: scale(1);
          transition: transform 0.3s ease;
        }
        .couple img:hover{
          transform: scale(0.9);
        }
    
        .weds {
          font-size: 35px;
          font-weight: bold;
          font-family: Dancing Script;
          margin-left: 80px;
          margin-right: 80px;
        }
    
        .names {
            
        position: relative;
          font-size: 24px;
  
          font-family: Dancing Script;
          font-weight: bold;
        }
    
        .contentC {
          margin-top: 10px;
        }

        .full-text {
  display: none;
}

 .see-more {
  display: block;
  color: blue;
}
.see-less {
  display: none;
  color: blue;
}
.contentC1 {
          margin-top: 10px;
        }

        .full-text1 {
  display: none;
}

 .see-more1 {
  display: block;
  color: blue;
}
.see-less1 {
  display: none;
  color: blue;
}       .contentC2 {
          margin-top: 10px;
        }

        .full-text2 {
  display: none;
}

 .see-more2 {
  display: block;
  color: blue;
}
.see-less2 {
  display: none;
  color: blue;
}



body {
  font-family: sans-serif;
  font-size: 16px;
  background-color: #f2f2f2;
}



.hero {

  text-align: center;
  background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/background.jpg');
  background-size: cover;
  background-position: center;
  height: 620px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 150px;


}

div.transbox {
  color: white;
  text-align: center;
}

div.transbox h1 {
  font-family: Dancing Script;
  font-size: 48px;
  margin: 2%;
  font-weight: bold;
  color: white;
}

.hero p {
  font-family: Edu NSW ACT Foundation;
  font-size: 24px;
  margin-bottom: 30px;
}

.btn {
  background-color: white;
  color: red;
  padding: 5px 10px;
  margin: 10px;
  border-radius: 5px;
  text-decoration: none;
}

.btn:hover {
  background-color: #fff;
  color: royalblue;
  opacity: .5;
  transition: .5s;
}

.content {
  position: absolute;
  top: 100%;
  width: 100%;
  height: 100%;
  background-color: #fff;
  padding: 10px;

}

.card:hover .content {
  top: 0;
}

.card-container2 {

  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;

}

.card2 {

  align-items: center;
  width: 270px;
  height: 320px;
  background-color: #f9f9f9;
  border-radius: 10px;
  padding: 20px;
  margin: 20px;
  text-align: center;
  transform: scale(1);
  transition: transform 0.3s ease;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);


}

.card2:hover {
  transform: scale(1.1);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);

}

.card2 h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.card2 h3 {
  margin-bottom: 10px;
  font-size: 28px;

}

.card2 p {
  font-size: 14px;
  margin-bottom: 20px;
}

.round-button {
  display: inline-block;
  padding: 10px 20px;
  border-radius: 20px;
  background-color: #333;
  color: #fff;
  text-decoration: none;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}

.round-button:hover {
  color: black;
  background-color: red;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.card-container3 {
  align-items: center;
  justify-content: center;
  display: grid;
  grid-template-columns: repeat(2, 450px);
  grid-template-rows: repeat(2, 200px);
  gap: 20px;
  margin-bottom: 100px;
}

.card3 {
  width: 450px;
  height: 200px;
  background-color: white;
  border-radius: 10px;
  padding: 20px;
  box-sizing: border-box;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
  text-align: left;
}


.services {

  margin-top: 20px;
  text-align: center;
  align-items: top;
  position: top;
  overflow: hidden;
}

.containerSer {

width: 70%;
display: flex;
align-items: center;
overflow: hidden;

margin: 50px auto;
}

.image-containerSer {
position: relative;
flex: 1;
transition: opacity 0.3s;

}

.image-containerSer:hover {
opacity: 0.7;
}

.image-overlaySer {
position: absolute;
top: 100%;
left: 0;
width: 400px;
height: 100%;
background-color: black;
display: flex;
align-items: center;
justify-content: center;
opacity: 0;
transition: opacity 0.3s, top 0.3s;
}

.image-containerSer:hover .image-overlaySer {
opacity: 0.6;
top: 0;
}

.image-overlay-text {
color: white;
text-align: center;
}

.image-containerSer img {
width: 400px;

height: 250px;
box-sizing: border-box;
box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

.content-containerSer {
flex: 1;
padding: 0 20px;
}
footer {
  width: 100%;
  background: linear-gradient(to right, #00093c, #2d0b00);
  color: #fff;
  padding: 10px 0 30px;
  border-top-left-radius: 125px;
  font-size: 13px;
  line-height: 20px;
}

.row {
  width: 85%;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  justify-content: space-between;
}

.col {
  flex-basis: 25%;
  padding: 10px;
}

.col:nth-child(2),
col:nth-child(3) {
  flex-basis: 15%;

}

.footerlogo {
  width: 80px;
  margin-bottom: 30px;
}

.col h3 {
  width: fit-content;
  margin-bottom: 40px;
  position: relative;
}

.footeremail {
  width: fit-content;
  border-bottom: 1px solid #ccc;
  margin: 20px 0;

}

ul li {
  list-style: none;
  margin-bottom: 12px;
}

ul li a {
  text-decoration: none;
  color: #fff;
}

.social-icons .fa {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-top: 120px;
  text-align: center;
  line-height: 40px;
  font-size: 20px;
  color: #000;
  background: rgb(83, 158, 239);
  margin-right: 15px;
  cursor: pointer;
}

.social-icons .fa:hover {
  background-color: rgb(237, 238, 238);
}

hr {
  width: 90%;
  border: 0;
  border-bottom: 1px solid #ccc;
  margin: 20px auto;
}

.copyright {
  text-align: center;
}

.underline {
  width: 100%;
  height: 5px;
  background: #767676;
  border-radius: 3px;
  position: absolute;
  top: 25px;
  left: 0;
  overflow: hidden;
}

.underline span {
  width: 15px;
  height: 100%;
  background: #fff;
  border-radius: 3px;
  position: absolute;
  top: 0;
  left: 10px;
  animation: moving 2s linear infinite;
}

@keyframes moving {
  0% {
    left: -20px
  }

  100% {
    left: 100%;
  }
}



@media (max-width:700px) {
  footer {
    bottom: unset;
  }

  .col {
    flex-basis: 100%;
  }

  .col:nth-child(2),
  col:nth-child(3) {
    flex-basis: 100%;
  }
}
        </style>
    </head>



    <body class="antialiased">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        <div class="hero">
                
    <div class="transbox" style="margin-top: 50px;">
      <h1>Bibaho-Bangla</h1>
      <h3 style="font-family: Edu NSW ACT Foundation; font-size: 28px;">Find your perfect match!</h2>
        <p>Join our matrimonial site today and start searching for your life partner.</p><br><br>
</div>

  </div>

  <div class="services">
    <p style="font-size: 44px; color: rgb(211, 78, 78);padding: 20px;margin-bottom: 40px;">
      Find your Special Someone!</p>
      <div class="containerSer">
        <!-- View 1: Image on the Left -->
        <div class="image-containerSer">
          <img src="images/search.png" alt="Image 1">
          <div class="image-overlaySer">
            <div class="image-overlay-text">
              Start your Searching to find a compatible life partner
            </div>
          </div>
        </div>
        <div class="content-containerSer">
          <h1 style="font-size: 24px;margin-bottom: 10px;">Search</h1>
          <p style="font-size: 16px;line-height: 1.5;">Search for your potential partner based on your preferences, allowing the sparks of compatibility to ignite a flame of lasting love. With our comprehensive database and advanced filters, find someone who shares your passions and dreams. Embrace the opportunity to create a beautiful love story that transcends time and distance.</p>
        </div>
      </div>
    
      <div class="containerSer">
        <!-- View 2: Image on the Right -->
        <div class="content-containerSer">
          <h1 style="font-size: 24px;margin-bottom: 10px;">Match</h1>
          <p style="font-size: 16px;line-height: 1.5;">Our matching algorithm will delve deep into your unique qualities and interests, unveiling the hidden gems that make you truly remarkable. Trust in our expertise to connect you with someone who complements your essence, creating a foundation for a fulfilling relationship. Embrace the excitement of possibilities as you embark on this journey of love and companionship.</p>
        </div>
        <div class="image-containerSer">
          <img src="images/match.png" alt="Image 2">
          <div class="image-overlaySer">
            <div class="image-overlay-text">
              Match your requirement to your partner preferences
            </div>
          </div>
        </div>
      </div>
    
      <div class="containerSer">
        <!-- View 3: Image on the Left -->
        <div class="image-containerSer">
          <img src="images/story.png" alt="Image 3">
          <div class="image-overlaySer">
            <div class="image-overlay-text">
              Tell us about your successful stories
            </div>
          </div>
        </div>
        <div class="content-containerSer">
          <h1 style="font-size: 24px;margin-bottom: 10px;">Story</h1>
          <p style="font-size: 16px;line-height: 1.5;">
            Share your story of finding love with us, and allow us to showcase it on our esteemed website. Your tale of togetherness will inspire and uplift others, reminding them of the magic and beauty that unfolds when two hearts intertwine. Let your words be a beacon of hope, illuminating the path for those still seeking their own love story. Together, let's celebrate the transformative power of love and the joy it brings to our lives.</p>
        </div>
      </div>
  </div>

  <p style="font-size: 42px; color: rgb(211, 78, 78);padding: 20px;margin-top: 40px;text-align: center;">
    Matrimony Service with Millions of Success Stories!</p>
    <div class="containerC">
  
        <div class="story">
          <div class="couple">
            <img src="images/D1.jpg" alt="Couple 1">
            <div class="weds">weds</div>
            <img src="images/D2.jpg" alt="Couple 2">
          </div>
          <div class="names">Pritam & Sehtaj</div>
          <div class="contentC">Pritam was a talented musician with a heart full of melodies. His soulful tunes captured the emotions of those who listened, and his charismatic personality drew people toward him. Sehtaj, on the other hand, was a vibrant and independent spirit. With a passion for literature and a love for exploring the world, she had an aura of adventure around her.</div>
          <div class="full-text">Pritam was a talented musician with a heart full of melodies. His soulful tunes captured the emotions of those who listened, and his charismatic personality drew people toward him. Sehtaj, on the other hand, was a vibrant and independent spirit. With a passion for literature and a love for exploring the world, she had an aura of adventure around her.

            One fateful day, as they both scrolled through Bibaho-Bangla, their eyes locked onto each other's profiles. Pritam was captivated by Sehtaj's radiant smile, and Sehtaj was intrigued by Pritam's poetic words. They decided to take a leap of faith and started conversing.
            
            Their initial conversations were filled with intellectual discussions, shared passions, and the discovery of a deep connection. Pritam's love for music resonated with Sehtaj's appreciation for art, while Sehtaj's love for literature captivated Pritam's poetic soul. Their compatibility grew with each passing day, and they couldn't help but feel that they had stumbled upon something extraordinary.
            
            As their conversations blossomed into a beautiful friendship, Pritam and Sehtaj decided it was time to meet in person. They chose a charming café in Kolkata, where they could share their love for music and literature. Nervous yet excited, they met at the café, their hearts pounding with anticipation. When their eyes met, it was as if the world stood still. They smiled at each other, their souls recognizing a kindred spirit.
            
            Their date was filled with laughter, music, and the exchange of stories that painted colorful pictures of their lives. Pritam strummed his guitar, serenading Sehtaj with heartfelt melodies. Sehtaj recited verses from her favorite poets, captivating Pritam's soul with her eloquence. They discovered that their shared passions complemented each other beautifully, like two harmonious notes in a symphony.
            
            As time passed, Pritam and Sehtaj's bond grew stronger. They supported each other through life's highs and lows, celebrating their achievements and offering solace during difficult times. Pritam's melodies provided comfort to Sehtaj when she needed it the most, and Sehtaj's words inspired Pritam to pursue his dreams fearlessly. They realized that their love had become an unbreakable pillar in their lives.
            
            One starlit evening, while strolling along the picturesque Hooghly River, Pritam took Sehtaj's hand and looked into her eyes. With a voice filled with love, he confessed his deepest feelings, telling her that she was his muse and the missing piece in his melody. Overwhelmed with emotions, Sehtaj nodded, tears of happiness streaming down her cheeks. They sealed their love with a passionate embrace, knowing that they had found their forever in each other's arms.
            
            Pritam and Sehtaj's love story continued to evolve, as they embarked on adventures together, creating memories that would last a lifetime. They traveled to distant lands, embracing new cultures and immersing themselves in the beauty of the world. Their love became a symphony of life, composed of moments that were etched in their hearts.
            
            And so, Pritam and Sehtaj's love story, born from the serendipity of Bibaho-Bangla, became an eternal tale of two souls united by the threads of destiny. Their love transcended boundaries, capturing the hearts of those around them. Together, they danced through the rhythm of life, creating melodies that would resonate with the world forever</div>
          <a href="#" class="see-more">See more...</a>
          <a href="#" class="see-less">See less...</a>

        </div>
        <div class="story">
          <div class="couple">
            <img src="images/B1.jpg" alt="Couple 1">
            <div class="weds">weds</div>
            <img src="images/B2.jpg" alt="Couple 2">
          </div>
          <div class="names">Masudur & Shammi</div>
          <div class="contentC1">Once upon a time, in the bustling city of Dhaka, Bangladesh, there were two individuals named Masud and Shammi who were both in search of love and companionship. In the modern era of technology, they turned to a popular matrimonial site named "Bibaho-Bangla" to find their life partners.</div>
          <div class="full-text1">Once upon a time, in the bustling city of Dhaka, Bangladesh, there were two individuals named Masud and Shammi who were both in search of love and companionship. In the modern era of technology, they turned to a popular matrimonial site named "Bibaho-Bangla" to find their life partners.

            Masud was a charming and ambitious young man. With a warm heart and a contagious smile, he had a way of making everyone around him feel at ease. Shammi, on the other hand, was an intelligent and kind-hearted woman with a passion for music and a desire to find true love.
            
            One day, as fate would have it, Masud stumbled upon Shammi's profile on Bibaho-Bangla. Intrigued by her captivating smile and genuine words, he decided to initiate a conversation. Little did he know that Shammi had noticed his profile too, and was equally drawn to his warm personality and adventurous spirit.
            
            Their initial conversations were filled with laughter, shared interests, and deep conversations about life and love. Masud was captivated by Shammi's soothing voice, and Shammi found solace in Masud's genuine understanding. Their connection grew stronger with each passing day, and they soon realized that they had found something special in each other.
            
            As weeks turned into months, Masud and Shammi decided it was time to meet in person. They chose a cozy café in the heart of Dhaka for their first date. Nervous and excited, they met at the designated spot, their hearts pounding with anticipation. When their eyes met, it was as if time stood still. They exchanged smiles and embraced each other, feeling an instant connection that words could not fully describe.
            
            Their date was filled with laughter, heartfelt conversations, and shared dreams. Masud and Shammi discovered that they complemented each other perfectly. Masud's adventurous spirit inspired Shammi to step out of her comfort zone, while Shammi's calming presence grounded Masud in the chaos of life. They laughed, they shared stories, and most importantly, they fell in love.
            
            As their relationship blossomed, Masud and Shammi realized that their love had the power to overcome any obstacle. They supported each other through the ups and downs of life, celebrating each other's successes and offering comfort during challenging times. Their love became a beacon of hope, reminding them that they were not alone in this journey called life.
            
            One beautiful evening, as the sun set over the city, Masud took Shammi to a scenic park. Surrounded by the tranquil beauty of nature, he got down on one knee and asked Shammi to be his partner for life. Overwhelmed with joy, Shammi said yes, tears of happiness streaming down her cheeks. They sealed their love with a tender kiss, knowing that their journey had just begun.
            
            Masud and Shammi's love story continued to flourish, as they planned their future together, filled with dreams and aspirations. They knew that they had found their soulmate in each other, and they were ready to embrace the joys and challenges that lay ahead, hand in hand.
            
            And so, Masud and Shammi's love story, born from a chance encounter on Bibaho-Bangla, became an everlasting tale of love, trust, and companionship. They proved that true love knows no boundaries and that the internet could be a platform for destiny to unfold. Together, they embarked on a lifelong journey, creating a love story that would inspire generations to come.</div>
          <a href="#" class="see-more1">See more...</a>
          <a href="#" class="see-less1">See less...</a>

        </div>
        <div class="story">
          <div class="couple">
            <img src="images/C1.jpg" alt="Couple 1">
            <div class="weds">weds</div>
            <img src="images/C2.jpg" alt="Couple 2">
          </div>
          <div class="names">Nihal & Raha</div>
          <div class="contentC2">
            Nihal and Raha were the best of friends during their time at university. They shared laughter, secrets, and dreams, creating an unbreakable bond that seemed destined to last a lifetime. However, life took them on different paths after graduation, and they lost touch with each other. Little did they know that fate had a different plan in store for them.</div>
          <div class="full-text2">Nihal and Raha were the best of friends during their time at university. They shared laughter, secrets, and dreams, creating an unbreakable bond that seemed destined to last a lifetime. However, life took them on different paths after graduation, and they lost touch with each other. Little did they know that fate had a different plan in store for them.

            Years later, both Nihal and Raha found themselves at a crossroads in their personal lives. Feeling the void of companionship, they independently turned to Bibaho-Bangla, a popular matrimonial site, in search of a partner who would fill their hearts with love and understanding.
            
            As Nihal scrolled through profiles on Bibaho-Bangla, a familiar face caught his attention. It was Raha, his long-lost university friend. Astonished and excited, Nihal immediately reached out to reconnect with her. Raha, equally surprised and thrilled, responded with eagerness, and they decided to meet in person to catch up on lost time.
            
            Their reunion was filled with nostalgic conversations and the joy of rediscovery. They laughed, they reminisced, and they shared stories of the years they spent apart. As they delved deeper into their lives, they realized that the bond they had formed during their university days was not easily forgotten.
            
            As days turned into weeks, Nihal and Raha's connection deepened. They discovered that the friendship they once cherished had bloomed into something more profound. Their hearts began to beat in sync, and they found solace in each other's presence. Love began to sprout in the garden of their rekindled friendship.
            
            The romance between Nihal and Raha grew with each passing moment. They embarked on new adventures together, exploring the world around them and creating beautiful memories. They shared intimate conversations under the moonlit sky, promising to always support and uplift each other.
            
            However, amidst the blossoming love, an unexpected storm emerged. Raha found herself entangled in a dangerous situation involving a powerful and violent individual from her past. Threats loomed over her, casting a dark shadow on their newfound happiness.
            
            Nihal, driven by his love for Raha, became her protector and pillar of strength. He vowed to shield her from harm and fight against the forces that threatened to tear them apart. With unwavering determination, he faced the violence head-on, showing courage and resilience.
            
            Together, Nihal and Raha navigated the turbulent waters, holding onto their love as an anchor amidst the chaos. They faced challenges that tested their bond, but their unwavering support for each other gave them the strength to overcome every obstacle that stood in their way.
            
            Their love became a beacon of hope, shining bright in the face of adversity. Nihal's unwavering love and Raha's resilience formed a powerful combination that conquered the darkness surrounding them. They emerged from the storm stronger than ever, their love having withstood the test of time and violence.
            
            In the end, Nihal and Raha's journey on Bibaho-Bangla led them not only to find love but also to rediscover a profound connection that had been lost. They proved that true love could withstand the trials of life, and that even in the face of violence, love could become a shield of protection and a source of strength.
            
            With their hearts intertwined and their souls inseparable, Nihal and Raha embraced their love story, forever grateful for the twists of fate that brought them back together. Together, they forged a path of love, resilience, and unwavering commitment, inspiring others to hold onto hope and cherish the power of love in the face of life's challenges.</div>
          <a href="#" class="see-more2">See more...</a>
          <a href="#" class="see-less2">See less...</a>

        </div>
       

      </div>
  <p style="font-size: 44px;  text-align: center;margin-top: 20px;"><span class="highlight">Upgrade now</span> & Get
    <span class="highlight">Premium</span> benefits!
  </p>
  <p style="font-size: 32px; text-align: center; margin-bottom: 80px;">Upgrade to any of our Premium Plans and we
    guarantee you will find a match!</p>
  <div class="card-container2">
    <div class="card2">
      <h2>Bronze Package</h2>
      <h3>BDT 2,000/- </h3>
      <p>Sent unlimited contact request</p>
      <p style="opacity: .4;">~View upto 75 contact numbers</p>
      <p style="opacity: .4;">~Let matches contact you directly</p>
      <a href="{{ route('payment') }}" class="round-button">continue</a>
    </div>

    <div class="card2">
      <h2>Silver Package</h2>
      <h3>BDT 5,000/- </h3>
      <p>Sent unlimited contact request</p>
      <p>View upto 75 contact numbers</p>
      <p style="opacity: .4;">~Let matches contact you directly</p>
      <a href="{{ route('payment') }}" class="round-button">Continue</a>
    </div>

    <div class="card2">
      <h2>Gold Package</h2>
      <h3>BDT 10,000/- </h3>
      <p>Sent unlimited contact request</p>
      <p>View upto 75 contact numbers</p>
      <p>Let matches contact you directly</p>
      <a href="{{ route('payment') }}" class="round-button">Continue</a>
    </div>

    <div class="card2">
      <h2>Platinum Package</h2>
      <h3>BDT 15,000/- </h3>
      <p>Sent unlimited contact request</p>
      <p>View upto 100 contact numbers</p>
      <p>Let matches contact you directly</p>
      <a href="{{ route('payment') }}" class="round-button">Continue</a>
    </div>
  </div>

  <p style="font-size: 32px; margin-top: 100px; margin-bottom: 100px; text-align: center;">You have <span
      class="highlight2">Questions</span> We have the <span class="highlight2">Answers...</span></p>
  <div class="card-container3">
    <div class="card3">
      <h4>What are some of the benefits of Premium plans?</h4><br>
      <p>As a Premium member, you can chat unlimited with your Matches, view their contact numbers and view hidden
        photos. You also get Premium Assistance on priority. These benefits will help you to accelerate your partner
        search.</p>
    </div>
    <div class="card3">
      <h4>What offers and discounts can I avail?</h4><br>
      <p>We keep you informed from time to time whenever you are eligible for different discounts and offers. Login
        frequently to check and avail the best available offer.</p>
    </div>
    <div class="card3">
      <h4>What payment options do you offer?</h4><br>
      <p>We offer multiple Online and Offline payment options for you to pick and choose from based on your location.
        Choose your preferred plan and move forward to see the various options available to you.</p>
    </div>
    <div class="card3">
      <h4>How can I be safe on Bibaho-Bangla?</h4><br>
      <p>We go to great lengths to make sure you get the best possible experience here. Every single profile is screened
        & your matches are tailored to your preferences. But if you still have any unpleasant experience please do
        report the same to us.</p>
    </div>
  </div>

  <footer>
    <div class="row">
      <div class="col">
        <img src="images/logo.png" class="footerlogo" />
        <p style="font-family: Dancing Script; font-size: 28px">Bibaho-Bangla</p>
      </div>
      <div class="col">
        <h3>Adress <div class="underline"><span></span></div>
        </h3>
        <p>Dept of CSE, Block:B New Academic Building</p>
        <p>KUET,Khulna</p>
        <p class="footeremail">masudurrabby8@gmail.com</p>
        <h4>01840794147</h4>
      </div>
      <div class="col">
        <h3>Links <div class="underline"><span></span></div>
        </h3>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="{{route('register')}}">Sign Up</a></li>
          <li><a href="https://github.com/Masudur-rahman-rabby/Bibaho-Bangla.git">Github</a></li>
          <li></li>
        </ul>
      </div>
    </div>
    </div>
    <hr>
    <p class="copyright"><i class="fa fa-copyright"></i>Masudur Rahman Rabby</p>
  </footer>



  <!--Java Script codes here-->
<script>
  document.addEventListener('DOMContentLoaded', function() {
  var seeMoreLink = document.querySelector('.see-more');
  var seeLessLink = document.querySelector('.see-less');
  var fullText = document.querySelector('.full-text');
  var initialText = document.querySelector('.contentC');

  seeMoreLink.addEventListener('click', function(event) {
    event.preventDefault();
    fullText.style.display = 'block';
    initialText.style.display = 'none';
    seeMoreLink.style.display = 'none';
    seeLessLink.style.display = 'inline';
  });

  seeLessLink.addEventListener('click', function(event) {
    event.preventDefault();
    fullText.style.display = 'none';
    initialText.style.display = 'block';
    seeMoreLink.style.display = 'inline';
    seeLessLink.style.display = 'none';
  });
  });
  document.addEventListener('DOMContentLoaded', function() {
  var seeMoreLink = document.querySelector('.see-more1');
  var seeLessLink = document.querySelector('.see-less1');
  var fullText = document.querySelector('.full-text1');
  var initialText = document.querySelector('.contentC1');

  seeMoreLink.addEventListener('click', function(event) {
    event.preventDefault();
    fullText.style.display = 'block';
    initialText.style.display = 'none';
    seeMoreLink.style.display = 'none';
    seeLessLink.style.display = 'inline';
  });

  seeLessLink.addEventListener('click', function(event) {
    event.preventDefault();
    fullText.style.display = 'none';
    initialText.style.display = 'block';
    seeMoreLink.style.display = 'inline';
    seeLessLink.style.display = 'none';
  });
  });
  document.addEventListener('DOMContentLoaded', function() {
  var seeMoreLink = document.querySelector('.see-more2');
  var seeLessLink = document.querySelector('.see-less2');
  var fullText = document.querySelector('.full-text2');
  var initialText = document.querySelector('.contentC2');

    seeMoreLink.addEventListener('click', function(event) {
    event.preventDefault();
    fullText.style.display = 'block';
    initialText.style.display = 'none';
    seeMoreLink.style.display = 'none';
    seeLessLink.style.display = 'inline';
    });

    seeLessLink.addEventListener('click', function(event) {
    event.preventDefault();
    fullText.style.display = 'none';
    initialText.style.display = 'block';
    seeMoreLink.style.display = 'inline';
    seeLessLink.style.display = 'none';
  });
  });

    
  </script>
    </body>
</html>
