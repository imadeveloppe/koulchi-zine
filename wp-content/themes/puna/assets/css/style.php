<?php 
  function getOption($field, $default)
  {
    if (get_field($field ,'option')){
      return get_field($field ,'option');
    }else{
      return $default;
    }
  };

  
    $principalColor = getOption('couleur_principale','#e5111f'); 
    $colorText1 = getOption('couleur_secondaire','#02043d'); 
    $colorContent = getOption('couleur_du_contenu','#808080').' !important';  
    $colorButton = getOption('couleur_texte_boutons','#fff');
    $subtitle = getOption('couleur_du_sous-titre','#999');
 ?>
<style type="text/css">
@charset "UTF-8";
/* -----------------------------------------------------

Project : Puna - Single Property Real estate Template
Version : 1.0.0
Author: RavisTheme

-------------- Table of Content -------------------

1.Bootstrap
2.Fontawesome
3.Puna fonts
4.Animation.css
5.Owl Slider styles
6.Magnific Popup Styles
7.Reset the default Styles
8.Shortcodes
	-- heading
	-- selcet-boxes
	-- sort
	-- pagination
9.Sections
	-- main-header
	-- main-slider
	-- welcome
	-- feature-section
	-- gallery
	-- agent
	-- attraction
	-- testimonials
	-- contact
	-- top-footer
	-- footer
	-- clients
	-- services
	-- breadcrumb
	-- property-highlights
	-- amenities
	-- contact-info-box
	-- video-tour
	-- slide-show
10.Pages
	-- pages
	-- blog
	-- 404
-----------------------------------------------------*/
/**
 * Bootstrap
 */
/*!
 * Bootstrap v3.3.5 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%; }

body {
  margin: 0; }

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block; }

audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline; }

audio:not([controls]) {
  display: none;
  height: 0; }

[hidden],
template {
  display: none; }

a {
  background-color: transparent; }

a:active,
a:hover {
  outline: 0; }

abbr[title] {
  border-bottom: 1px dotted; }

b,
strong {
  font-weight: bold; }

dfn {
  font-style: italic; }

h1 {
  font-size: 2em;
  margin: 0.67em 0; }

mark {
  background: #ff0;
  color: #000; }

small {
  font-size: 80%; }

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline; }

sup {
  top: -0.5em; }

sub {
  bottom: -0.25em; }

img {
  border: 0; }

svg:not(:root) {
  overflow: hidden; }

figure {
  margin: 1em 40px; }

hr {
  box-sizing: content-box;
  height: 0; }

pre {
  overflow: auto; }

code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em; }

button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0; }

button {
  overflow: visible; }

button,
select {
  text-transform: none; }

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer; }

button[disabled],
html input[disabled] {
  cursor: default; }

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0; }

input {
  line-height: normal; }

input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0; }

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto; }

input[type="search"] {
  -webkit-appearance: textfield;
  box-sizing: content-box; }

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em; }

legend {
  border: 0;
  padding: 0; }

textarea {
  overflow: auto; }

optgroup {
  font-weight: bold; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

td,
th {
  padding: 0; }

/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
@media print {
  *,
  *:before,
  *:after {
    background: transparent !important;
    color: #000 !important;
    box-shadow: none !important;
    text-shadow: none !important; }

  a,
  a:visited {
    text-decoration: underline; }

  a[href]:after {
    content: " (" attr(href) ")"; }

  abbr[title]:after {
    content: " (" attr(title) ")"; }

  a[href^="#"]:after,
  a[href^="javascript:"]:after {
    content: ""; }

  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid; }

  thead {
    display: table-header-group; }

  tr,
  img {
    page-break-inside: avoid; }

  img {
    max-width: 100% !important; }

  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }

  h2,
  h3 {
    page-break-after: avoid; }

  .navbar {
    display: none; }

  .btn > .caret, #agent-section .detail-info .contact-url > .caret,
  .dropup > .btn > .caret,
  #agent-section .detail-info .dropup > .contact-url > .caret {
    border-top-color: #000 !important; }

  .label {
    border: 1px solid #000; }

  .table {
    border-collapse: collapse !important; }
    .table td,
    .table th {
      background-color: #fff !important; }

  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important; } }
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url(<?php echo get_template_directory_uri(); ?>/assets/fonts/bootstrap/glyphicons-halflings-regular.eot?1426523004);
  src: url(<?php echo get_template_directory_uri(); ?>/assets/fonts/bootstrap/glyphicons-halflings-regular.eot?&1426523004#iefix) format("embedded-opentype"), url(<?php echo get_template_directory_uri(); ?>/assets/fonts/bootstrap/glyphicons-halflings-regular.woff2?1426523004) format("woff2"), url(<?php echo get_template_directory_uri(); ?>/assets/fonts/bootstrap/glyphicons-halflings-regular.woff?1426523004) format("woff"), url(<?php echo get_template_directory_uri(); ?>/assets/fonts/bootstrap/glyphicons-halflings-regular.ttf?1426523004) format("truetype"), url(<?php echo get_template_directory_uri(); ?>/assets/fonts/bootstrap/glyphicons-halflings-regular.svg?1426523004#glyphicons_halflingsregular) format("svg"); }
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; }

.glyphicon-asterisk:before {
  content: "\2a"; }

.glyphicon-plus:before {
  content: "\2b"; }

.glyphicon-euro:before,
.glyphicon-eur:before {
  content: "\20ac"; }

.glyphicon-minus:before {
  content: "\2212"; }

.glyphicon-cloud:before {
  content: "\2601"; }

.glyphicon-envelope:before {
  content: "\2709"; }

.glyphicon-pencil:before {
  content: "\270f"; }

.glyphicon-glass:before {
  content: "\e001"; }

.glyphicon-music:before {
  content: "\e002"; }

.glyphicon-search:before {
  content: "\e003"; }

.glyphicon-heart:before {
  content: "\e005"; }

.glyphicon-star:before {
  content: "\e006"; }

.glyphicon-star-empty:before {
  content: "\e007"; }

.glyphicon-user:before {
  content: "\e008"; }

.glyphicon-film:before {
  content: "\e009"; }

.glyphicon-th-large:before {
  content: "\e010"; }

.glyphicon-th:before {
  content: "\e011"; }

.glyphicon-th-list:before {
  content: "\e012"; }

.glyphicon-ok:before {
  content: "\e013"; }

.glyphicon-remove:before {
  content: "\e014"; }

.glyphicon-zoom-in:before {
  content: "\e015"; }

.glyphicon-zoom-out:before {
  content: "\e016"; }

.glyphicon-off:before {
  content: "\e017"; }

.glyphicon-signal:before {
  content: "\e018"; }

.glyphicon-cog:before {
  content: "\e019"; }

.glyphicon-trash:before {
  content: "\e020"; }

.glyphicon-home:before {
  content: "\e021"; }

.glyphicon-file:before {
  content: "\e022"; }

.glyphicon-time:before {
  content: "\e023"; }

.glyphicon-road:before {
  content: "\e024"; }

.glyphicon-download-alt:before {
  content: "\e025"; }

.glyphicon-download:before {
  content: "\e026"; }

.glyphicon-upload:before {
  content: "\e027"; }

.glyphicon-inbox:before {
  content: "\e028"; }

.glyphicon-play-circle:before {
  content: "\e029"; }

.glyphicon-repeat:before {
  content: "\e030"; }

.glyphicon-refresh:before {
  content: "\e031"; }

.glyphicon-list-alt:before {
  content: "\e032"; }

.glyphicon-lock:before {
  content: "\e033"; }

.glyphicon-flag:before {
  content: "\e034"; }

.glyphicon-headphones:before {
  content: "\e035"; }

.glyphicon-volume-off:before {
  content: "\e036"; }

.glyphicon-volume-down:before {
  content: "\e037"; }

.glyphicon-volume-up:before {
  content: "\e038"; }

.glyphicon-qrcode:before {
  content: "\e039"; }

.glyphicon-barcode:before {
  content: "\e040"; }

.glyphicon-tag:before {
  content: "\e041"; }

.glyphicon-tags:before {
  content: "\e042"; }

.glyphicon-book:before {
  content: "\e043"; }

.glyphicon-bookmark:before {
  content: "\e044"; }

.glyphicon-print:before {
  content: "\e045"; }

.glyphicon-camera:before {
  content: "\e046"; }

.glyphicon-font:before {
  content: "\e047"; }

.glyphicon-bold:before {
  content: "\e048"; }

.glyphicon-italic:before {
  content: "\e049"; }

.glyphicon-text-height:before {
  content: "\e050"; }

.glyphicon-text-width:before {
  content: "\e051"; }

.glyphicon-align-left:before {
  content: "\e052"; }

.glyphicon-align-center:before {
  content: "\e053"; }

.glyphicon-align-right:before {
  content: "\e054"; }

.glyphicon-align-justify:before {
  content: "\e055"; }

.glyphicon-list:before {
  content: "\e056"; }

.glyphicon-indent-left:before {
  content: "\e057"; }

.glyphicon-indent-right:before {
  content: "\e058"; }

.glyphicon-facetime-video:before {
  content: "\e059"; }

.glyphicon-picture:before {
  content: "\e060"; }

.glyphicon-map-marker:before {
  content: "\e062"; }

.glyphicon-adjust:before {
  content: "\e063"; }

.glyphicon-tint:before {
  content: "\e064"; }

.glyphicon-edit:before {
  content: "\e065"; }

.glyphicon-share:before {
  content: "\e066"; }

.glyphicon-check:before {
  content: "\e067"; }

.glyphicon-move:before {
  content: "\e068"; }

.glyphicon-step-backward:before {
  content: "\e069"; }

.glyphicon-fast-backward:before {
  content: "\e070"; }

.glyphicon-backward:before {
  content: "\e071"; }

.glyphicon-play:before {
  content: "\e072"; }

.glyphicon-pause:before {
  content: "\e073"; }

.glyphicon-stop:before {
  content: "\e074"; }

.glyphicon-forward:before {
  content: "\e075"; }

.glyphicon-fast-forward:before {
  content: "\e076"; }

.glyphicon-step-forward:before {
  content: "\e077"; }

.glyphicon-eject:before {
  content: "\e078"; }

.glyphicon-chevron-left:before {
  content: "\e079"; }

.glyphicon-chevron-right:before {
  content: "\e080"; }

.glyphicon-plus-sign:before {
  content: "\e081"; }

.glyphicon-minus-sign:before {
  content: "\e082"; }

.glyphicon-remove-sign:before {
  content: "\e083"; }

.glyphicon-ok-sign:before {
  content: "\e084"; }

.glyphicon-question-sign:before {
  content: "\e085"; }

.glyphicon-info-sign:before {
  content: "\e086"; }

.glyphicon-screenshot:before {
  content: "\e087"; }

.glyphicon-remove-circle:before {
  content: "\e088"; }

.glyphicon-ok-circle:before {
  content: "\e089"; }

.glyphicon-ban-circle:before {
  content: "\e090"; }

.glyphicon-arrow-left:before {
  content: "\e091"; }

.glyphicon-arrow-right:before {
  content: "\e092"; }

.glyphicon-arrow-up:before {
  content: "\e093"; }

.glyphicon-arrow-down:before {
  content: "\e094"; }

.glyphicon-share-alt:before {
  content: "\e095"; }

.glyphicon-resize-full:before {
  content: "\e096"; }

.glyphicon-resize-small:before {
  content: "\e097"; }

.glyphicon-exclamation-sign:before {
  content: "\e101"; }

.glyphicon-gift:before {
  content: "\e102"; }

.glyphicon-leaf:before {
  content: "\e103"; }

.glyphicon-fire:before {
  content: "\e104"; }

.glyphicon-eye-open:before {
  content: "\e105"; }

.glyphicon-eye-close:before {
  content: "\e106"; }

.glyphicon-warning-sign:before {
  content: "\e107"; }

.glyphicon-plane:before {
  content: "\e108"; }

.glyphicon-calendar:before {
  content: "\e109"; }

.glyphicon-random:before {
  content: "\e110"; }

.glyphicon-comment:before {
  content: "\e111"; }

.glyphicon-magnet:before {
  content: "\e112"; }

.glyphicon-chevron-up:before {
  content: "\e113"; }

.glyphicon-chevron-down:before {
  content: "\e114"; }

.glyphicon-retweet:before {
  content: "\e115"; }

.glyphicon-shopping-cart:before {
  content: "\e116"; }

.glyphicon-folder-close:before {
  content: "\e117"; }

.glyphicon-folder-open:before {
  content: "\e118"; }

.glyphicon-resize-vertical:before {
  content: "\e119"; }

.glyphicon-resize-horizontal:before {
  content: "\e120"; }

.glyphicon-hdd:before {
  content: "\e121"; }

.glyphicon-bullhorn:before {
  content: "\e122"; }

.glyphicon-bell:before {
  content: "\e123"; }

.glyphicon-certificate:before {
  content: "\e124"; }

.glyphicon-thumbs-up:before {
  content: "\e125"; }

.glyphicon-thumbs-down:before {
  content: "\e126"; }

.glyphicon-hand-right:before {
  content: "\e127"; }

.glyphicon-hand-left:before {
  content: "\e128"; }

.glyphicon-hand-up:before {
  content: "\e129"; }

.glyphicon-hand-down:before {
  content: "\e130"; }

.glyphicon-circle-arrow-right:before {
  content: "\e131"; }

.glyphicon-circle-arrow-left:before {
  content: "\e132"; }

.glyphicon-circle-arrow-up:before {
  content: "\e133"; }

.glyphicon-circle-arrow-down:before {
  content: "\e134"; }

.glyphicon-globe:before {
  content: "\e135"; }

.glyphicon-wrench:before {
  content: "\e136"; }

.glyphicon-tasks:before {
  content: "\e137"; }

.glyphicon-filter:before {
  content: "\e138"; }

.glyphicon-briefcase:before {
  content: "\e139"; }

.glyphicon-fullscreen:before {
  content: "\e140"; }

.glyphicon-dashboard:before {
  content: "\e141"; }

.glyphicon-paperclip:before {
  content: "\e142"; }

.glyphicon-heart-empty:before {
  content: "\e143"; }

.glyphicon-link:before {
  content: "\e144"; }

.glyphicon-phone:before {
  content: "\e145"; }

.glyphicon-pushpin:before {
  content: "\e146"; }

.glyphicon-usd:before {
  content: "\e148"; }

.glyphicon-gbp:before {
  content: "\e149"; }

.glyphicon-sort:before {
  content: "\e150"; }

.glyphicon-sort-by-alphabet:before {
  content: "\e151"; }

.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152"; }

.glyphicon-sort-by-order:before {
  content: "\e153"; }

.glyphicon-sort-by-order-alt:before {
  content: "\e154"; }

.glyphicon-sort-by-attributes:before {
  content: "\e155"; }

.glyphicon-sort-by-attributes-alt:before {
  content: "\e156"; }

.glyphicon-unchecked:before {
  content: "\e157"; }

.glyphicon-expand:before {
  content: "\e158"; }

.glyphicon-collapse-down:before {
  content: "\e159"; }

.glyphicon-collapse-up:before {
  content: "\e160"; }

.glyphicon-log-in:before {
  content: "\e161"; }

.glyphicon-flash:before {
  content: "\e162"; }

.glyphicon-log-out:before {
  content: "\e163"; }

.glyphicon-new-window:before {
  content: "\e164"; }

.glyphicon-record:before {
  content: "\e165"; }

.glyphicon-save:before {
  content: "\e166"; }

.glyphicon-open:before {
  content: "\e167"; }

.glyphicon-saved:before {
  content: "\e168"; }

.glyphicon-import:before {
  content: "\e169"; }

.glyphicon-export:before {
  content: "\e170"; }

.glyphicon-send:before {
  content: "\e171"; }

.glyphicon-floppy-disk:before {
  content: "\e172"; }

.glyphicon-floppy-saved:before {
  content: "\e173"; }

.glyphicon-floppy-remove:before {
  content: "\e174"; }

.glyphicon-floppy-save:before {
  content: "\e175"; }

.glyphicon-floppy-open:before {
  content: "\e176"; }

.glyphicon-credit-card:before {
  content: "\e177"; }

.glyphicon-transfer:before {
  content: "\e178"; }

.glyphicon-cutlery:before {
  content: "\e179"; }

.glyphicon-header:before {
  content: "\e180"; }

.glyphicon-compressed:before {
  content: "\e181"; }

.glyphicon-earphone:before {
  content: "\e182"; }

.glyphicon-phone-alt:before {
  content: "\e183"; }

.glyphicon-tower:before {
  content: "\e184"; }

.glyphicon-stats:before {
  content: "\e185"; }

.glyphicon-sd-video:before {
  content: "\e186"; }

.glyphicon-hd-video:before {
  content: "\e187"; }

.glyphicon-subtitles:before {
  content: "\e188"; }

.glyphicon-sound-stereo:before {
  content: "\e189"; }

.glyphicon-sound-dolby:before {
  content: "\e190"; }

.glyphicon-sound-5-1:before {
  content: "\e191"; }

.glyphicon-sound-6-1:before {
  content: "\e192"; }

.glyphicon-sound-7-1:before {
  content: "\e193"; }

.glyphicon-copyright-mark:before {
  content: "\e194"; }

.glyphicon-registration-mark:before {
  content: "\e195"; }

.glyphicon-cloud-download:before {
  content: "\e197"; }

.glyphicon-cloud-upload:before {
  content: "\e198"; }

.glyphicon-tree-conifer:before {
  content: "\e199"; }

.glyphicon-tree-deciduous:before {
  content: "\e200"; }

.glyphicon-cd:before {
  content: "\e201"; }

.glyphicon-save-file:before {
  content: "\e202"; }

.glyphicon-open-file:before {
  content: "\e203"; }

.glyphicon-level-up:before {
  content: "\e204"; }

.glyphicon-copy:before {
  content: "\e205"; }

.glyphicon-paste:before {
  content: "\e206"; }

.glyphicon-alert:before {
  content: "\e209"; }

.glyphicon-equalizer:before {
  content: "\e210"; }

.glyphicon-king:before {
  content: "\e211"; }

.glyphicon-queen:before {
  content: "\e212"; }

.glyphicon-pawn:before {
  content: "\e213"; }

.glyphicon-bishop:before {
  content: "\e214"; }

.glyphicon-knight:before {
  content: "\e215"; }

.glyphicon-baby-formula:before {
  content: "\e216"; }

.glyphicon-tent:before {
  content: "\26fa"; }

.glyphicon-blackboard:before {
  content: "\e218"; }

.glyphicon-bed:before {
  content: "\e219"; }

.glyphicon-apple:before {
  content: "\f8ff"; }

.glyphicon-erase:before {
  content: "\e221"; }

.glyphicon-hourglass:before {
  content: "\231b"; }

.glyphicon-lamp:before {
  content: "\e223"; }

.glyphicon-duplicate:before {
  content: "\e224"; }

.glyphicon-piggy-bank:before {
  content: "\e225"; }

.glyphicon-scissors:before {
  content: "\e226"; }

.glyphicon-bitcoin:before {
  content: "\e227"; }

.glyphicon-btc:before {
  content: "\e227"; }

.glyphicon-xbt:before {
  content: "\e227"; }

.glyphicon-yen:before {
  content: "\00a5"; }

.glyphicon-jpy:before {
  content: "\00a5"; }

.glyphicon-ruble:before {
  content: "\20bd"; }

.glyphicon-rub:before {
  content: "\20bd"; }

.glyphicon-scale:before {
  content: "\e230"; }

.glyphicon-ice-lolly:before {
  content: "\e231"; }

.glyphicon-ice-lolly-tasted:before {
  content: "\e232"; }

.glyphicon-education:before {
  content: "\e233"; }

.glyphicon-option-horizontal:before {
  content: "\e234"; }

.glyphicon-option-vertical:before {
  content: "\e235"; }

.glyphicon-menu-hamburger:before {
  content: "\e236"; }

.glyphicon-modal-window:before {
  content: "\e237"; }

.glyphicon-oil:before {
  content: "\e238"; }

.glyphicon-grain:before {
  content: "\e239"; }

.glyphicon-sunglasses:before {
  content: "\e240"; }

.glyphicon-text-size:before {
  content: "\e241"; }

.glyphicon-text-color:before {
  content: "\e242"; }

.glyphicon-text-background:before {
  content: "\e243"; }

.glyphicon-object-align-top:before {
  content: "\e244"; }

.glyphicon-object-align-bottom:before {
  content: "\e245"; }

.glyphicon-object-align-horizontal:before {
  content: "\e246"; }

.glyphicon-object-align-left:before {
  content: "\e247"; }

.glyphicon-object-align-vertical:before {
  content: "\e248"; }

.glyphicon-object-align-right:before {
  content: "\e249"; }

.glyphicon-triangle-right:before {
  content: "\e250"; }

.glyphicon-triangle-left:before {
  content: "\e251"; }

.glyphicon-triangle-bottom:before {
  content: "\e252"; }

.glyphicon-triangle-top:before {
  content: "\e253"; }

.glyphicon-console:before {
  content: "\e254"; }

.glyphicon-superscript:before {
  content: "\e255"; }

.glyphicon-subscript:before {
  content: "\e256"; }

.glyphicon-menu-left:before {
  content: "\e257"; }

.glyphicon-menu-right:before {
  content: "\e258"; }

.glyphicon-menu-down:before {
  content: "\e259"; }

.glyphicon-menu-up:before {
  content: "\e260"; }

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

html {
  font-size: 10px;
  -webkit-tap-highlight-color: transparent; }

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.42857;
  color: #333333;
  background-color: #fff; }

input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

a {
  color: #337ab7;
  text-decoration: none; }
  a:hover, a:focus {
    color: #23527c;
    text-decoration: underline; }
  a:focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px; }

figure {
  margin: 0; }

img {
  vertical-align: middle; }

.img-responsive {
  display: block;
  max-width: 100%;
  height: auto; }

.img-rounded {
  border-radius: 0; }

.img-thumbnail {
  padding: 4px;
  line-height: 1.42857;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 0;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto; }

.img-circle {
  border-radius: 50%; }

hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eeeeee; }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto; }

[role="button"] {
  cursor: pointer; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit; }
  h1 small,
  h1 .small, h2 small,
  h2 .small, h3 small,
  h3 .small, h4 small,
  h4 .small, h5 small,
  h5 .small, h6 small,
  h6 .small,
  .h1 small,
  .h1 .small, .h2 small,
  .h2 .small, .h3 small,
  .h3 .small, .h4 small,
  .h4 .small, .h5 small,
  .h5 .small, .h6 small,
  .h6 .small {
    font-weight: normal;
    line-height: 1;
    color: #777777; }

h1, .h1,
h2, .h2,
h3, .h3 {
  margin-top: 20px;
  margin-bottom: 10px; }
  h1 small,
  h1 .small, .h1 small,
  .h1 .small,
  h2 small,
  h2 .small, .h2 small,
  .h2 .small,
  h3 small,
  h3 .small, .h3 small,
  .h3 .small {
    font-size: 65%; }

h4, .h4,
h5, .h5,
h6, .h6 {
  margin-top: 10px;
  margin-bottom: 10px; }
  h4 small,
  h4 .small, .h4 small,
  .h4 .small,
  h5 small,
  h5 .small, .h5 small,
  .h5 .small,
  h6 small,
  h6 .small, .h6 small,
  .h6 .small {
    font-size: 75%; }

h1, .h1 {
  font-size: 36px; }

h2, .h2 {
  font-size: 30px; }

h3, .h3 {
  font-size: 24px; }

h4, .h4 {
  font-size: 18px; }

h5, .h5 {
  font-size: 14px; }

h6, .h6 {
  font-size: 12px; }

p {
  margin: 0 0 10px; }

.lead {
  margin-bottom: 20px;
  font-size: 16px;
  font-weight: 300;
  line-height: 1.4; }
  @media (min-width: 768px) {
    .lead {
      font-size: 21px; } }

small,
.small {
  font-size: 85%; }

mark,
.mark {
  background-color: #fcf8e3;
  padding: .2em; }

.text-left {
  text-align: left; }

.text-right {
  text-align: right; }

.text-center {
  text-align: center; }

.text-justify {
  text-align: justify; }

.text-nowrap {
  white-space: nowrap; }

.text-lowercase {
  text-transform: lowercase; }

.text-uppercase, .initialism {
  text-transform: uppercase; }

.text-capitalize {
  text-transform: capitalize; }

.text-muted {
  color: #777777; }

.text-primary {
  color: #337ab7; }

a.text-primary:hover,
a.text-primary:focus {
  color: #286090; }

.text-success {
  color: #3c763d; }

a.text-success:hover,
a.text-success:focus {
  color: #2b542c; }

.text-info {
  color: #31708f; }

a.text-info:hover,
a.text-info:focus {
  color: #245269; }

.text-warning {
  color: #8a6d3b; }

a.text-warning:hover,
a.text-warning:focus {
  color: #66512c; }

.text-danger {
  color: #a94442; }

a.text-danger:hover,
a.text-danger:focus {
  color: #843534; }

.bg-primary {
  color: <?= $colorButton ?>; }

.bg-primary {
  background-color: #337ab7; }

a.bg-primary:hover,
a.bg-primary:focus {
  background-color: #286090; }

.bg-success {
  background-color: #dff0d8; }

a.bg-success:hover,
a.bg-success:focus {
  background-color: #c1e2b3; }

.bg-info {
  background-color: #d9edf7; }

a.bg-info:hover,
a.bg-info:focus {
  background-color: #afd9ee; }

.bg-warning {
  background-color: #fcf8e3; }

a.bg-warning:hover,
a.bg-warning:focus {
  background-color: #f7ecb5; }

.bg-danger {
  background-color: #f2dede; }

a.bg-danger:hover,
a.bg-danger:focus {
  background-color: #e4b9b9; }

.page-header {
  padding-bottom: 9px;
  margin: 40px 0 20px;
  border-bottom: 1px solid #eeeeee; }

ul,
ol {
  margin-top: 0;
  margin-bottom: 10px; }
  ul ul,
  ul ol,
  ol ul,
  ol ol {
    margin-bottom: 0; }
.short-desc,
#testimonials-section .item .text,
.desc,
#welcome-section .content, #about-section .content{
   color: <?= $colorContent ?>;
}
.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline, .pagination-box ul {
  padding-left: 0;
  list-style: none;
  margin-left: -5px; }
  .list-inline > li, .pagination-box ul > li {
    display: inline-block;
    padding-left: 5px;
    padding-right: 5px; }

dl {
  margin-top: 0;
  margin-bottom: 20px; }

dt,
dd {
  line-height: 1.42857; }

dt {
  font-weight: bold; }

dd {
  margin-left: 0; }

.dl-horizontal dd:before, .dl-horizontal dd:after {
  content: " ";
  display: table; }
.dl-horizontal dd:after {
  clear: both; }
@media (min-width: 768px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap; }
  .dl-horizontal dd {
    margin-left: 180px; } }

abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777777; }

.initialism {
  font-size: 90%; }

blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #eeeeee; }
  blockquote p:last-child,
  blockquote ul:last-child,
  blockquote ol:last-child {
    margin-bottom: 0; }
  blockquote footer,
  blockquote small,
  blockquote .small {
    display: block;
    font-size: 80%;
    line-height: 1.42857;
    color: #777777; }
    blockquote footer:before,
    blockquote small:before,
    blockquote .small:before {
      content: '\2014 \00A0'; }

.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #eeeeee;
  border-left: 0;
  text-align: right; }
  .blockquote-reverse footer:before,
  .blockquote-reverse small:before,
  .blockquote-reverse .small:before,
  blockquote.pull-right footer:before,
  blockquote.pull-right small:before,
  blockquote.pull-right .small:before {
    content: ''; }
  .blockquote-reverse footer:after,
  .blockquote-reverse small:after,
  .blockquote-reverse .small:after,
  blockquote.pull-right footer:after,
  blockquote.pull-right small:after,
  blockquote.pull-right .small:after {
    content: '\00A0 \2014'; }

address {
  margin-bottom: 20px;
  font-style: normal;
  line-height: 1.42857; }

code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace; }

code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 0; }

kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: <?= $colorButton ?>;
  background-color: #333;
  border-radius: 0;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25); }
  kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: bold;
    box-shadow: none; }

pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.42857;
  word-break: break-all;
  word-wrap: break-word;
  color: #333333;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 0; }
  pre code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border-radius: 0; }

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll; }

.container, body.boxed #main-wrapper {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px; }
  .container:before, body.boxed #main-wrapper:before, .container:after, body.boxed #main-wrapper:after {
    content: " ";
    display: table; }
  .container:after, body.boxed #main-wrapper:after {
    clear: both; }
  @media (min-width: 768px) {
    .container, body.boxed #main-wrapper {
      width: 750px; } }
  @media (min-width: 992px) {
    .container, body.boxed #main-wrapper {
      width: 970px; } }
  @media (min-width: 1200px) {
    .container, body.boxed #main-wrapper {
      width: 1170px; } }

.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px; }
  .container-fluid:before, .container-fluid:after {
    content: " ";
    display: table; }
  .container-fluid:after {
    clear: both; }

.row {
  margin-left: -15px;
  margin-right: -15px; }
  .row:before, .row:after {
    content: " ";
    display: table; }
  .row:after {
    clear: both; }

.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px; }

.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left; }

.col-xs-1 {
  width: 8.33333%; }

.col-xs-2 {
  width: 16.66667%; }

.col-xs-3 {
  width: 25%; }

.col-xs-4 {
  width: 33.33333%; }

.col-xs-5 {
  width: 41.66667%; }

.col-xs-6 {
  width: 50%; }

.col-xs-7 {
  width: 58.33333%; }

.col-xs-8 {
  width: 66.66667%; }

.col-xs-9 {
  width: 75%; }

.col-xs-10 {
  width: 83.33333%; }

.col-xs-11 {
  width: 91.66667%; }

.col-xs-12 {
  width: 100%; }

.col-xs-pull-0 {
  right: auto; }

.col-xs-pull-1 {
  right: 8.33333%; }

.col-xs-pull-2 {
  right: 16.66667%; }

.col-xs-pull-3 {
  right: 25%; }

.col-xs-pull-4 {
  right: 33.33333%; }

.col-xs-pull-5 {
  right: 41.66667%; }

.col-xs-pull-6 {
  right: 50%; }

.col-xs-pull-7 {
  right: 58.33333%; }

.col-xs-pull-8 {
  right: 66.66667%; }

.col-xs-pull-9 {
  right: 75%; }

.col-xs-pull-10 {
  right: 83.33333%; }

.col-xs-pull-11 {
  right: 91.66667%; }

.col-xs-pull-12 {
  right: 100%; }

.col-xs-push-0 {
  left: auto; }

.col-xs-push-1 {
  left: 8.33333%; }

.col-xs-push-2 {
  left: 16.66667%; }

.col-xs-push-3 {
  left: 25%; }

.col-xs-push-4 {
  left: 33.33333%; }

.col-xs-push-5 {
  left: 41.66667%; }

.col-xs-push-6 {
  left: 50%; }

.col-xs-push-7 {
  left: 58.33333%; }

.col-xs-push-8 {
  left: 66.66667%; }

.col-xs-push-9 {
  left: 75%; }

.col-xs-push-10 {
  left: 83.33333%; }

.col-xs-push-11 {
  left: 91.66667%; }

.col-xs-push-12 {
  left: 100%; }

.col-xs-offset-0 {
  margin-left: 0%; }

.col-xs-offset-1 {
  margin-left: 8.33333%; }

.col-xs-offset-2 {
  margin-left: 16.66667%; }

.col-xs-offset-3 {
  margin-left: 25%; }

.col-xs-offset-4 {
  margin-left: 33.33333%; }

.col-xs-offset-5 {
  margin-left: 41.66667%; }

.col-xs-offset-6 {
  margin-left: 50%; }

.col-xs-offset-7 {
  margin-left: 58.33333%; }

.col-xs-offset-8 {
  margin-left: 66.66667%; }

.col-xs-offset-9 {
  margin-left: 75%; }

.col-xs-offset-10 {
  margin-left: 83.33333%; }

.col-xs-offset-11 {
  margin-left: 91.66667%; }

.col-xs-offset-12 {
  margin-left: 100%; }

@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left; }

  .col-sm-1 {
    width: 8.33333%; }

  .col-sm-2 {
    width: 16.66667%; }

  .col-sm-3 {
    width: 25%; }

  .col-sm-4 {
    width: 33.33333%; }

  .col-sm-5 {
    width: 41.66667%; }

  .col-sm-6 {
    width: 50%; }

  .col-sm-7 {
    width: 58.33333%; }

  .col-sm-8 {
    width: 66.66667%; }

  .col-sm-9 {
    width: 75%; }

  .col-sm-10 {
    width: 83.33333%; }

  .col-sm-11 {
    width: 91.66667%; }

  .col-sm-12 {
    width: 100%; }

  .col-sm-pull-0 {
    right: auto; }

  .col-sm-pull-1 {
    right: 8.33333%; }

  .col-sm-pull-2 {
    right: 16.66667%; }

  .col-sm-pull-3 {
    right: 25%; }

  .col-sm-pull-4 {
    right: 33.33333%; }

  .col-sm-pull-5 {
    right: 41.66667%; }

  .col-sm-pull-6 {
    right: 50%; }

  .col-sm-pull-7 {
    right: 58.33333%; }

  .col-sm-pull-8 {
    right: 66.66667%; }

  .col-sm-pull-9 {
    right: 75%; }

  .col-sm-pull-10 {
    right: 83.33333%; }

  .col-sm-pull-11 {
    right: 91.66667%; }

  .col-sm-pull-12 {
    right: 100%; }

  .col-sm-push-0 {
    left: auto; }

  .col-sm-push-1 {
    left: 8.33333%; }

  .col-sm-push-2 {
    left: 16.66667%; }

  .col-sm-push-3 {
    left: 25%; }

  .col-sm-push-4 {
    left: 33.33333%; }

  .col-sm-push-5 {
    left: 41.66667%; }

  .col-sm-push-6 {
    left: 50%; }

  .col-sm-push-7 {
    left: 58.33333%; }

  .col-sm-push-8 {
    left: 66.66667%; }

  .col-sm-push-9 {
    left: 75%; }

  .col-sm-push-10 {
    left: 83.33333%; }

  .col-sm-push-11 {
    left: 91.66667%; }

  .col-sm-push-12 {
    left: 100%; }

  .col-sm-offset-0 {
    margin-left: 0%; }

  .col-sm-offset-1 {
    margin-left: 8.33333%; }

  .col-sm-offset-2 {
    margin-left: 16.66667%; }

  .col-sm-offset-3 {
    margin-left: 25%; }

  .col-sm-offset-4 {
    margin-left: 33.33333%; }

  .col-sm-offset-5 {
    margin-left: 41.66667%; }

  .col-sm-offset-6 {
    margin-left: 50%; }

  .col-sm-offset-7 {
    margin-left: 58.33333%; }

  .col-sm-offset-8 {
    margin-left: 66.66667%; }

  .col-sm-offset-9 {
    margin-left: 75%; }

  .col-sm-offset-10 {
    margin-left: 83.33333%; }

  .col-sm-offset-11 {
    margin-left: 91.66667%; }

  .col-sm-offset-12 {
    margin-left: 100%; } }
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left; }

  .col-md-1 {
    width: 8.33333%; }

  .col-md-2 {
    width: 16.66667%; }

  .col-md-3 {
    width: 25%; }

  .col-md-4 {
    width: 33.33333%; }

  .col-md-5 {
    width: 41.66667%; }

  .col-md-6 {
    width: 50%; }

  .col-md-7 {
    width: 58.33333%; }

  .col-md-8 {
    width: 66.66667%; }

  .col-md-9 {
    width: 75%; }

  .col-md-10 {
    width: 83.33333%; }

  .col-md-11 {
    width: 91.66667%; }

  .col-md-12 {
    width: 100%; }

  .col-md-pull-0 {
    right: auto; }

  .col-md-pull-1 {
    right: 8.33333%; }

  .col-md-pull-2 {
    right: 16.66667%; }

  .col-md-pull-3 {
    right: 25%; }

  .col-md-pull-4 {
    right: 33.33333%; }

  .col-md-pull-5 {
    right: 41.66667%; }

  .col-md-pull-6 {
    right: 50%; }

  .col-md-pull-7 {
    right: 58.33333%; }

  .col-md-pull-8 {
    right: 66.66667%; }

  .col-md-pull-9 {
    right: 75%; }

  .col-md-pull-10 {
    right: 83.33333%; }

  .col-md-pull-11 {
    right: 91.66667%; }

  .col-md-pull-12 {
    right: 100%; }

  .col-md-push-0 {
    left: auto; }

  .col-md-push-1 {
    left: 8.33333%; }

  .col-md-push-2 {
    left: 16.66667%; }

  .col-md-push-3 {
    left: 25%; }

  .col-md-push-4 {
    left: 33.33333%; }

  .col-md-push-5 {
    left: 41.66667%; }

  .col-md-push-6 {
    left: 50%; }

  .col-md-push-7 {
    left: 58.33333%; }

  .col-md-push-8 {
    left: 66.66667%; }

  .col-md-push-9 {
    left: 75%; }

  .col-md-push-10 {
    left: 83.33333%; }

  .col-md-push-11 {
    left: 91.66667%; }

  .col-md-push-12 {
    left: 100%; }

  .col-md-offset-0 {
    margin-left: 0%; }

  .col-md-offset-1 {
    margin-left: 8.33333%; }

  .col-md-offset-2 {
    margin-left: 16.66667%; }

  .col-md-offset-3 {
    margin-left: 25%; }

  .col-md-offset-4 {
    margin-left: 33.33333%; }

  .col-md-offset-5 {
    margin-left: 41.66667%; }

  .col-md-offset-6 {
    margin-left: 50%; }

  .col-md-offset-7 {
    margin-left: 58.33333%; }

  .col-md-offset-8 {
    margin-left: 66.66667%; }

  .col-md-offset-9 {
    margin-left: 75%; }

  .col-md-offset-10 {
    margin-left: 83.33333%; }

  .col-md-offset-11 {
    margin-left: 91.66667%; }

  .col-md-offset-12 {
    margin-left: 100%; } }
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left; }

  .col-lg-1 {
    width: 8.33333%; }

  .col-lg-2 {
    width: 16.66667%; }

  .col-lg-3 {
    width: 25%; }

  .col-lg-4 {
    width: 33.33333%; }

  .col-lg-5 {
    width: 41.66667%; }

  .col-lg-6 {
    width: 50%; }

  .col-lg-7 {
    width: 58.33333%; }

  .col-lg-8 {
    width: 66.66667%; }

  .col-lg-9 {
    width: 75%; }

  .col-lg-10 {
    width: 83.33333%; }

  .col-lg-11 {
    width: 91.66667%; }

  .col-lg-12 {
    width: 100%; }

  .col-lg-pull-0 {
    right: auto; }

  .col-lg-pull-1 {
    right: 8.33333%; }

  .col-lg-pull-2 {
    right: 16.66667%; }

  .col-lg-pull-3 {
    right: 25%; }

  .col-lg-pull-4 {
    right: 33.33333%; }

  .col-lg-pull-5 {
    right: 41.66667%; }

  .col-lg-pull-6 {
    right: 50%; }

  .col-lg-pull-7 {
    right: 58.33333%; }

  .col-lg-pull-8 {
    right: 66.66667%; }

  .col-lg-pull-9 {
    right: 75%; }

  .col-lg-pull-10 {
    right: 83.33333%; }

  .col-lg-pull-11 {
    right: 91.66667%; }

  .col-lg-pull-12 {
    right: 100%; }

  .col-lg-push-0 {
    left: auto; }

  .col-lg-push-1 {
    left: 8.33333%; }

  .col-lg-push-2 {
    left: 16.66667%; }

  .col-lg-push-3 {
    left: 25%; }

  .col-lg-push-4 {
    left: 33.33333%; }

  .col-lg-push-5 {
    left: 41.66667%; }

  .col-lg-push-6 {
    left: 50%; }

  .col-lg-push-7 {
    left: 58.33333%; }

  .col-lg-push-8 {
    left: 66.66667%; }

  .col-lg-push-9 {
    left: 75%; }

  .col-lg-push-10 {
    left: 83.33333%; }

  .col-lg-push-11 {
    left: 91.66667%; }

  .col-lg-push-12 {
    left: 100%; }

  .col-lg-offset-0 {
    margin-left: 0%; }

  .col-lg-offset-1 {
    margin-left: 8.33333%; }

  .col-lg-offset-2 {
    margin-left: 16.66667%; }

  .col-lg-offset-3 {
    margin-left: 25%; }

  .col-lg-offset-4 {
    margin-left: 33.33333%; }

  .col-lg-offset-5 {
    margin-left: 41.66667%; }

  .col-lg-offset-6 {
    margin-left: 50%; }

  .col-lg-offset-7 {
    margin-left: 58.33333%; }

  .col-lg-offset-8 {
    margin-left: 66.66667%; }

  .col-lg-offset-9 {
    margin-left: 75%; }

  .col-lg-offset-10 {
    margin-left: 83.33333%; }

  .col-lg-offset-11 {
    margin-left: 91.66667%; }

  .col-lg-offset-12 {
    margin-left: 100%; } }
table {
  background-color: transparent; }

caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777777;
  text-align: left; }

th {
  text-align: left; }

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px; }
  .table > thead > tr > th,
  .table > thead > tr > td,
  .table > tbody > tr > th,
  .table > tbody > tr > td,
  .table > tfoot > tr > th,
  .table > tfoot > tr > td {
    padding: 8px;
    line-height: 1.42857;
    vertical-align: top;
    border-top: 1px solid #ddd; }
  .table > thead > tr > th {
    vertical-align: bottom;
    border-bottom: 2px solid #ddd; }
  .table > caption + thead > tr:first-child > th,
  .table > caption + thead > tr:first-child > td,
  .table > colgroup + thead > tr:first-child > th,
  .table > colgroup + thead > tr:first-child > td,
  .table > thead:first-child > tr:first-child > th,
  .table > thead:first-child > tr:first-child > td {
    border-top: 0; }
  .table > tbody + tbody {
    border-top: 2px solid #ddd; }
  .table .table {
    background-color: #fff; }

.table-condensed > thead > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > th,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > th,
.table-condensed > tfoot > tr > td {
  padding: 5px; }

.table-bordered {
  border: 1px solid #ddd; }
  .table-bordered > thead > tr > th,
  .table-bordered > thead > tr > td,
  .table-bordered > tbody > tr > th,
  .table-bordered > tbody > tr > td,
  .table-bordered > tfoot > tr > th,
  .table-bordered > tfoot > tr > td {
    border: 1px solid #ddd; }
  .table-bordered > thead > tr > th,
  .table-bordered > thead > tr > td {
    border-bottom-width: 2px; }

.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9; }

.table-hover > tbody > tr:hover {
  background-color: #f5f5f5; }

table col[class*="col-"] {
  position: static;
  float: none;
  display: table-column; }

table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  float: none;
  display: table-cell; }

.table > thead > tr > td.active,
.table > thead > tr > th.active, .table > thead > tr.active > td, .table > thead > tr.active > th,
.table > tbody > tr > td.active,
.table > tbody > tr > th.active,
.table > tbody > tr.active > td,
.table > tbody > tr.active > th,
.table > tfoot > tr > td.active,
.table > tfoot > tr > th.active,
.table > tfoot > tr.active > td,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5; }

.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover, .table-hover > tbody > tr.active:hover > td, .table-hover > tbody > tr:hover > .active, .table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8; }

.table > thead > tr > td.success,
.table > thead > tr > th.success, .table > thead > tr.success > td, .table > thead > tr.success > th,
.table > tbody > tr > td.success,
.table > tbody > tr > th.success,
.table > tbody > tr.success > td,
.table > tbody > tr.success > th,
.table > tfoot > tr > td.success,
.table > tfoot > tr > th.success,
.table > tfoot > tr.success > td,
.table > tfoot > tr.success > th {
  background-color: #dff0d8; }

.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover, .table-hover > tbody > tr.success:hover > td, .table-hover > tbody > tr:hover > .success, .table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6; }

.table > thead > tr > td.info,
.table > thead > tr > th.info, .table > thead > tr.info > td, .table > thead > tr.info > th,
.table > tbody > tr > td.info,
.table > tbody > tr > th.info,
.table > tbody > tr.info > td,
.table > tbody > tr.info > th,
.table > tfoot > tr > td.info,
.table > tfoot > tr > th.info,
.table > tfoot > tr.info > td,
.table > tfoot > tr.info > th {
  background-color: #d9edf7; }

.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover, .table-hover > tbody > tr.info:hover > td, .table-hover > tbody > tr:hover > .info, .table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3; }

.table > thead > tr > td.warning,
.table > thead > tr > th.warning, .table > thead > tr.warning > td, .table > thead > tr.warning > th,
.table > tbody > tr > td.warning,
.table > tbody > tr > th.warning,
.table > tbody > tr.warning > td,
.table > tbody > tr.warning > th,
.table > tfoot > tr > td.warning,
.table > tfoot > tr > th.warning,
.table > tfoot > tr.warning > td,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3; }

.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover, .table-hover > tbody > tr.warning:hover > td, .table-hover > tbody > tr:hover > .warning, .table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc; }

.table > thead > tr > td.danger,
.table > thead > tr > th.danger, .table > thead > tr.danger > td, .table > thead > tr.danger > th,
.table > tbody > tr > td.danger,
.table > tbody > tr > th.danger,
.table > tbody > tr.danger > td,
.table > tbody > tr.danger > th,
.table > tfoot > tr > td.danger,
.table > tfoot > tr > th.danger,
.table > tfoot > tr.danger > td,
.table > tfoot > tr.danger > th {
  background-color: #f2dede; }

.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover, .table-hover > tbody > tr.danger:hover > td, .table-hover > tbody > tr:hover > .danger, .table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc; }

.table-responsive {
  overflow-x: auto;
  min-height: 0.01%; }
  @media screen and (max-width: 767px) {
    .table-responsive {
      width: 100%;
      margin-bottom: 15px;
      overflow-y: hidden;
      -ms-overflow-style: -ms-autohiding-scrollbar;
      border: 1px solid #ddd; }
      .table-responsive > .table {
        margin-bottom: 0; }
        .table-responsive > .table > thead > tr > th,
        .table-responsive > .table > thead > tr > td,
        .table-responsive > .table > tbody > tr > th,
        .table-responsive > .table > tbody > tr > td,
        .table-responsive > .table > tfoot > tr > th,
        .table-responsive > .table > tfoot > tr > td {
          white-space: nowrap; }
      .table-responsive > .table-bordered {
        border: 0; }
        .table-responsive > .table-bordered > thead > tr > th:first-child,
        .table-responsive > .table-bordered > thead > tr > td:first-child,
        .table-responsive > .table-bordered > tbody > tr > th:first-child,
        .table-responsive > .table-bordered > tbody > tr > td:first-child,
        .table-responsive > .table-bordered > tfoot > tr > th:first-child,
        .table-responsive > .table-bordered > tfoot > tr > td:first-child {
          border-left: 0; }
        .table-responsive > .table-bordered > thead > tr > th:last-child,
        .table-responsive > .table-bordered > thead > tr > td:last-child,
        .table-responsive > .table-bordered > tbody > tr > th:last-child,
        .table-responsive > .table-bordered > tbody > tr > td:last-child,
        .table-responsive > .table-bordered > tfoot > tr > th:last-child,
        .table-responsive > .table-bordered > tfoot > tr > td:last-child {
          border-right: 0; }
        .table-responsive > .table-bordered > tbody > tr:last-child > th,
        .table-responsive > .table-bordered > tbody > tr:last-child > td,
        .table-responsive > .table-bordered > tfoot > tr:last-child > th,
        .table-responsive > .table-bordered > tfoot > tr:last-child > td {
          border-bottom: 0; } }

fieldset {
  padding: 0;
  margin: 0;
  border: 0;
  min-width: 0; }

legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: inherit;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5; }

label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold; }

input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal; }

input[type="file"] {
  display: block; }

input[type="range"] {
  display: block;
  width: 100%; }

select[multiple],
select[size] {
  height: auto; }

input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px; }

output {
  display: block;
  padding-top: 7px;
  font-size: 14px;
  line-height: 1.42857;
  color: #555555; }

.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857;
  color: #555555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s; }
  .form-control:focus {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6); }
  .form-control::-moz-placeholder {
    color: #999;
    opacity: 1; }
  .form-control:-ms-input-placeholder {
    color: #999; }
  .form-control::-webkit-input-placeholder {
    color: #999; }
  .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background-color: #eeeeee;
    opacity: 1; }
  .form-control[disabled], fieldset[disabled] .form-control {
    cursor: not-allowed; }

textarea.form-control {
  height: auto; }

input[type="search"] {
  -webkit-appearance: none; }

@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].form-control,
  input[type="time"].form-control,
  input[type="datetime-local"].form-control,
  input[type="month"].form-control {
    line-height: 34px; }
  input[type="date"].input-sm, .input-group-sm > input[type="date"].form-control,
  .input-group-sm > input[type="date"].input-group-addon,
  .input-group-sm > .input-group-btn > input[type="date"].btn,
  #agent-section .detail-info .input-group-sm > .input-group-btn > input[type="date"].contact-url, .input-group-sm input[type="date"],
  input[type="time"].input-sm,
  .input-group-sm > input[type="time"].form-control,
  .input-group-sm > input[type="time"].input-group-addon,
  .input-group-sm > .input-group-btn > input[type="time"].btn,
  #agent-section .detail-info .input-group-sm > .input-group-btn > input[type="time"].contact-url, .input-group-sm
  input[type="time"],
  input[type="datetime-local"].input-sm,
  .input-group-sm > input[type="datetime-local"].form-control,
  .input-group-sm > input[type="datetime-local"].input-group-addon,
  .input-group-sm > .input-group-btn > input[type="datetime-local"].btn,
  #agent-section .detail-info .input-group-sm > .input-group-btn > input[type="datetime-local"].contact-url, .input-group-sm
  input[type="datetime-local"],
  input[type="month"].input-sm,
  .input-group-sm > input[type="month"].form-control,
  .input-group-sm > input[type="month"].input-group-addon,
  .input-group-sm > .input-group-btn > input[type="month"].btn,
  #agent-section .detail-info .input-group-sm > .input-group-btn > input[type="month"].contact-url, .input-group-sm
  input[type="month"] {
    line-height: 30px; }
  input[type="date"].input-lg, .input-group-lg > input[type="date"].form-control,
  .input-group-lg > input[type="date"].input-group-addon,
  .input-group-lg > .input-group-btn > input[type="date"].btn,
  #agent-section .detail-info .input-group-lg > .input-group-btn > input[type="date"].contact-url, .input-group-lg input[type="date"],
  input[type="time"].input-lg,
  .input-group-lg > input[type="time"].form-control,
  .input-group-lg > input[type="time"].input-group-addon,
  .input-group-lg > .input-group-btn > input[type="time"].btn,
  #agent-section .detail-info .input-group-lg > .input-group-btn > input[type="time"].contact-url, .input-group-lg
  input[type="time"],
  input[type="datetime-local"].input-lg,
  .input-group-lg > input[type="datetime-local"].form-control,
  .input-group-lg > input[type="datetime-local"].input-group-addon,
  .input-group-lg > .input-group-btn > input[type="datetime-local"].btn,
  #agent-section .detail-info .input-group-lg > .input-group-btn > input[type="datetime-local"].contact-url, .input-group-lg
  input[type="datetime-local"],
  input[type="month"].input-lg,
  .input-group-lg > input[type="month"].form-control,
  .input-group-lg > input[type="month"].input-group-addon,
  .input-group-lg > .input-group-btn > input[type="month"].btn,
  #agent-section .detail-info .input-group-lg > .input-group-btn > input[type="month"].contact-url, .input-group-lg
  input[type="month"] {
    line-height: 46px; } }
.form-group {
  margin-bottom: 15px; }

.radio,
.checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px; }
  .radio label,
  .checkbox label {
    min-height: 20px;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: normal;
    cursor: pointer; }

.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-left: -20px;
  margin-top: 4px \9; }

.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px; }

.radio-inline,
.checkbox-inline {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer; }

.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px; }

input[type="radio"][disabled], input[type="radio"].disabled, fieldset[disabled] input[type="radio"],
input[type="checkbox"][disabled],
input[type="checkbox"].disabled, fieldset[disabled]
input[type="checkbox"] {
  cursor: not-allowed; }

.radio-inline.disabled, fieldset[disabled] .radio-inline,
.checkbox-inline.disabled, fieldset[disabled]
.checkbox-inline {
  cursor: not-allowed; }

.radio.disabled label, fieldset[disabled] .radio label,
.checkbox.disabled label, fieldset[disabled]
.checkbox label {
  cursor: not-allowed; }

.form-control-static {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
  min-height: 34px; }
  .form-control-static.input-lg, .input-group-lg > .form-control-static.form-control,
  .input-group-lg > .form-control-static.input-group-addon,
  .input-group-lg > .input-group-btn > .form-control-static.btn,
  #agent-section .detail-info .input-group-lg > .input-group-btn > .form-control-static.contact-url, .form-control-static.input-sm, .input-group-sm > .form-control-static.form-control,
  .input-group-sm > .form-control-static.input-group-addon,
  .input-group-sm > .input-group-btn > .form-control-static.btn,
  #agent-section .detail-info .input-group-sm > .input-group-btn > .form-control-static.contact-url {
    padding-left: 0;
    padding-right: 0; }

.input-sm, .input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn,
#agent-section .detail-info .input-group-sm > .input-group-btn > .contact-url {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 0; }

select.input-sm, .input-group-sm > select.form-control,
.input-group-sm > select.input-group-addon,
.input-group-sm > .input-group-btn > select.btn,
#agent-section .detail-info .input-group-sm > .input-group-btn > select.contact-url {
  height: 30px;
  line-height: 30px; }

textarea.input-sm, .input-group-sm > textarea.form-control,
.input-group-sm > textarea.input-group-addon,
.input-group-sm > .input-group-btn > textarea.btn,
#agent-section .detail-info .input-group-sm > .input-group-btn > textarea.contact-url,
select[multiple].input-sm,
.input-group-sm > select[multiple].form-control,
.input-group-sm > select[multiple].input-group-addon,
.input-group-sm > .input-group-btn > select[multiple].btn,
#agent-section .detail-info .input-group-sm > .input-group-btn > select[multiple].contact-url {
  height: auto; }

.form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 0; }
.form-group-sm select.form-control {
  height: 30px;
  line-height: 30px; }
.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto; }
.form-group-sm .form-control-static {
  height: 30px;
  min-height: 32px;
  padding: 6px 10px;
  font-size: 12px;
  line-height: 1.5; }

.input-lg, .input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn,
#agent-section .detail-info .input-group-lg > .input-group-btn > .contact-url {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33333;
  border-radius: 0; }

select.input-lg, .input-group-lg > select.form-control,
.input-group-lg > select.input-group-addon,
.input-group-lg > .input-group-btn > select.btn,
#agent-section .detail-info .input-group-lg > .input-group-btn > select.contact-url {
  height: 46px;
  line-height: 46px; }

textarea.input-lg, .input-group-lg > textarea.form-control,
.input-group-lg > textarea.input-group-addon,
.input-group-lg > .input-group-btn > textarea.btn,
#agent-section .detail-info .input-group-lg > .input-group-btn > textarea.contact-url,
select[multiple].input-lg,
.input-group-lg > select[multiple].form-control,
.input-group-lg > select[multiple].input-group-addon,
.input-group-lg > .input-group-btn > select[multiple].btn,
#agent-section .detail-info .input-group-lg > .input-group-btn > select[multiple].contact-url {
  height: auto; }

.form-group-lg .form-control {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33333;
  border-radius: 0; }
.form-group-lg select.form-control {
  height: 46px;
  line-height: 46px; }
.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto; }
.form-group-lg .form-control-static {
  height: 46px;
  min-height: 38px;
  padding: 11px 16px;
  font-size: 18px;
  line-height: 1.33333; }

.has-feedback {
  position: relative; }
  .has-feedback .form-control {
    padding-right: 42.5px; }

.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  pointer-events: none; }

.input-lg + .form-control-feedback, .input-group-lg > .form-control + .form-control-feedback,
.input-group-lg > .input-group-addon + .form-control-feedback,
.input-group-lg > .input-group-btn > .btn + .form-control-feedback,
#agent-section .detail-info .input-group-lg > .input-group-btn > .contact-url + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.form-group-lg .form-control + .form-control-feedback {
  width: 46px;
  height: 46px;
  line-height: 46px; }

.input-sm + .form-control-feedback, .input-group-sm > .form-control + .form-control-feedback,
.input-group-sm > .input-group-addon + .form-control-feedback,
.input-group-sm > .input-group-btn > .btn + .form-control-feedback,
#agent-section .detail-info .input-group-sm > .input-group-btn > .contact-url + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.form-group-sm .form-control + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px; }

.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline, .has-success.radio label, .has-success.checkbox label, .has-success.radio-inline label, .has-success.checkbox-inline label {
  color: #3c763d; }
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); }
  .has-success .form-control:focus {
    border-color: #2b542c;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168; }
.has-success .input-group-addon {
  color: #3c763d;
  border-color: #3c763d;
  background-color: #dff0d8; }
.has-success .form-control-feedback {
  color: #3c763d; }

.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline, .has-warning.radio label, .has-warning.checkbox label, .has-warning.radio-inline label, .has-warning.checkbox-inline label {
  color: #8a6d3b; }
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); }
  .has-warning .form-control:focus {
    border-color: #66512c;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b; }
.has-warning .input-group-addon {
  color: #8a6d3b;
  border-color: #8a6d3b;
  background-color: #fcf8e3; }
.has-warning .form-control-feedback {
  color: #8a6d3b; }

.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline, .has-error.radio label, .has-error.checkbox label, .has-error.radio-inline label, .has-error.checkbox-inline label {
  color: #a94442; }
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); }
  .has-error .form-control:focus {
    border-color: #843534;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483; }
.has-error .input-group-addon {
  color: #a94442;
  border-color: #a94442;
  background-color: #f2dede; }
.has-error .form-control-feedback {
  color: #a94442; }

.has-feedback label ~ .form-control-feedback {
  top: 25px; }
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0; }

.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373; }

@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle; }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle; }
  .form-inline .form-control-static {
    display: inline-block; }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle; }
    .form-inline .input-group .input-group-addon,
    .form-inline .input-group .input-group-btn,
    .form-inline .input-group .form-control {
      width: auto; }
  .form-inline .input-group > .form-control {
    width: 100%; }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle; }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle; }
    .form-inline .radio label,
    .form-inline .checkbox label {
      padding-left: 0; }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0; }
  .form-inline .has-feedback .form-control-feedback {
    top: 0; } }

.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px; }
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 27px; }
.form-horizontal .form-group {
  margin-left: -15px;
  margin-right: -15px; }
  .form-horizontal .form-group:before, .form-horizontal .form-group:after {
    content: " ";
    display: table; }
  .form-horizontal .form-group:after {
    clear: both; }
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px; } }
.form-horizontal .has-feedback .form-control-feedback {
  right: 15px; }
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 14.33333px;
    font-size: 18px; } }
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
    font-size: 12px; } }

.btn, #agent-section .detail-info .contact-url {
  display: inline-block;
  margin-bottom: 0;
  font-weight: normal;
  text-align: center;
  vertical-align: middle;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857;
  border-radius: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }
  .btn:focus, #agent-section .detail-info .contact-url:focus, .btn.focus, #agent-section .detail-info .focus.contact-url, .btn:active:focus, #agent-section .detail-info .contact-url:active:focus, .btn:active.focus, #agent-section .detail-info .contact-url:active.focus, .btn.active:focus, #agent-section .detail-info .active.contact-url:focus, .btn.active.focus, #agent-section .detail-info .active.focus.contact-url {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px; }
  .btn:hover, #agent-section .detail-info .contact-url:hover, .btn:focus, #agent-section .detail-info .contact-url:focus, .btn.focus, #agent-section .detail-info .focus.contact-url {
    color: #333;
    text-decoration: none; }
  .btn:active, #agent-section .detail-info .contact-url:active, .btn.active, #agent-section .detail-info .active.contact-url {
    outline: 0;
    background-image: none;
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125); }
  .btn.disabled, #agent-section .detail-info .disabled.contact-url, .btn[disabled], #agent-section .detail-info [disabled].contact-url, fieldset[disabled] .btn, fieldset[disabled] #agent-section .detail-info .contact-url, #agent-section .detail-info fieldset[disabled] .contact-url {
    cursor: not-allowed;
    opacity: 0.65;
    filter: alpha(opacity=65);
    -webkit-box-shadow: none;
    box-shadow: none; }

a.btn.disabled, #agent-section .detail-info a.disabled.contact-url, fieldset[disabled] a.btn, fieldset[disabled] #agent-section .detail-info a.contact-url, #agent-section .detail-info fieldset[disabled] a.contact-url {
  pointer-events: none; }

.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc; }
  .btn-default:focus, .btn-default.focus {
    color: #333;
    background-color: #e6e6e6;
    border-color: #8c8c8c; }
  .btn-default:hover {
    color: #333;
    background-color: #e6e6e6;
    border-color: #adadad; }
  .btn-default:active, .btn-default.active, .open > .btn-default.dropdown-toggle {
    color: #333;
    background-color: #e6e6e6;
    border-color: #adadad; }
    .btn-default:active:hover, .btn-default:active:focus, .btn-default:active.focus, .btn-default.active:hover, .btn-default.active:focus, .btn-default.active.focus, .open > .btn-default.dropdown-toggle:hover, .open > .btn-default.dropdown-toggle:focus, .open > .btn-default.dropdown-toggle.focus {
      color: #333;
      background-color: #d4d4d4;
      border-color: #8c8c8c; }
  .btn-default:active, .btn-default.active, .open > .btn-default.dropdown-toggle {
    background-image: none; }
  .btn-default.disabled, .btn-default.disabled:hover, .btn-default.disabled:focus, .btn-default.disabled.focus, .btn-default.disabled:active, .btn-default.disabled.active, .btn-default[disabled], .btn-default[disabled]:hover, .btn-default[disabled]:focus, .btn-default[disabled].focus, .btn-default[disabled]:active, .btn-default[disabled].active, fieldset[disabled] .btn-default, fieldset[disabled] .btn-default:hover, fieldset[disabled] .btn-default:focus, fieldset[disabled] .btn-default.focus, fieldset[disabled] .btn-default:active, fieldset[disabled] .btn-default.active {
    background-color: #fff;
    border-color: #ccc; }
  .btn-default .badge {
    color: <?= $colorButton ?>;
    background-color: #333; }

.btn-primary {
  color: <?= $colorButton ?>;
  background-color: #337ab7;
  border-color: #2e6da4; }
  .btn-primary:focus, .btn-primary.focus {
    color: <?= $colorButton ?>;
    background-color: #286090;
    border-color: #122b40; }
  .btn-primary:hover {
    color: <?= $colorButton ?>;
    background-color: #286090;
    border-color: #204d74; }
  .btn-primary:active, .btn-primary.active, .open > .btn-primary.dropdown-toggle {
    color: <?= $colorButton ?>;
    background-color: #286090;
    border-color: #204d74; }
    .btn-primary:active:hover, .btn-primary:active:focus, .btn-primary:active.focus, .btn-primary.active:hover, .btn-primary.active:focus, .btn-primary.active.focus, .open > .btn-primary.dropdown-toggle:hover, .open > .btn-primary.dropdown-toggle:focus, .open > .btn-primary.dropdown-toggle.focus {
      color: <?= $colorButton ?>;
      background-color: #204d74;
      border-color: #122b40; }
  .btn-primary:active, .btn-primary.active, .open > .btn-primary.dropdown-toggle {
    background-image: none; }
  .btn-primary.disabled, .btn-primary.disabled:hover, .btn-primary.disabled:focus, .btn-primary.disabled.focus, .btn-primary.disabled:active, .btn-primary.disabled.active, .btn-primary[disabled], .btn-primary[disabled]:hover, .btn-primary[disabled]:focus, .btn-primary[disabled].focus, .btn-primary[disabled]:active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary, fieldset[disabled] .btn-primary:hover, fieldset[disabled] .btn-primary:focus, fieldset[disabled] .btn-primary.focus, fieldset[disabled] .btn-primary:active, fieldset[disabled] .btn-primary.active {
    background-color: #337ab7;
    border-color: #2e6da4; }
  .btn-primary .badge {
    color: #337ab7;
    background-color: #fff; }

.btn-success {
  color: <?= $colorButton ?>;
  background-color: #5cb85c;
  border-color: #4cae4c; }
  .btn-success:focus, .btn-success.focus {
    color: <?= $colorButton ?>;
    background-color: #449d44;
    border-color: #255625; }
  .btn-success:hover {
    color: <?= $colorButton ?>;
    background-color: #449d44;
    border-color: #398439; }
  .btn-success:active, .btn-success.active, .open > .btn-success.dropdown-toggle {
    color: <?= $colorButton ?>;
    background-color: #449d44;
    border-color: #398439; }
    .btn-success:active:hover, .btn-success:active:focus, .btn-success:active.focus, .btn-success.active:hover, .btn-success.active:focus, .btn-success.active.focus, .open > .btn-success.dropdown-toggle:hover, .open > .btn-success.dropdown-toggle:focus, .open > .btn-success.dropdown-toggle.focus {
      color: <?= $colorButton ?>;
      background-color: #398439;
      border-color: #255625; }
  .btn-success:active, .btn-success.active, .open > .btn-success.dropdown-toggle {
    background-image: none; }
  .btn-success.disabled, .btn-success.disabled:hover, .btn-success.disabled:focus, .btn-success.disabled.focus, .btn-success.disabled:active, .btn-success.disabled.active, .btn-success[disabled], .btn-success[disabled]:hover, .btn-success[disabled]:focus, .btn-success[disabled].focus, .btn-success[disabled]:active, .btn-success[disabled].active, fieldset[disabled] .btn-success, fieldset[disabled] .btn-success:hover, fieldset[disabled] .btn-success:focus, fieldset[disabled] .btn-success.focus, fieldset[disabled] .btn-success:active, fieldset[disabled] .btn-success.active {
    background-color: #5cb85c;
    border-color: #4cae4c; }
  .btn-success .badge {
    color: #5cb85c;
    background-color: #fff; }

.btn-info {
  color: <?= $colorButton ?>;
  background-color: #5bc0de;
  border-color: #46b8da; }
  .btn-info:focus, .btn-info.focus {
    color: <?= $colorButton ?>;
    background-color: #31b0d5;
    border-color: #1b6d85; }
  .btn-info:hover {
    color: <?= $colorButton ?>;
    background-color: #31b0d5;
    border-color: #269abc; }
  .btn-info:active, .btn-info.active, .open > .btn-info.dropdown-toggle {
    color: <?= $colorButton ?>;
    background-color: #31b0d5;
    border-color: #269abc; }
    .btn-info:active:hover, .btn-info:active:focus, .btn-info:active.focus, .btn-info.active:hover, .btn-info.active:focus, .btn-info.active.focus, .open > .btn-info.dropdown-toggle:hover, .open > .btn-info.dropdown-toggle:focus, .open > .btn-info.dropdown-toggle.focus {
      color: <?= $colorButton ?>;
      background-color: #269abc;
      border-color: #1b6d85; }
  .btn-info:active, .btn-info.active, .open > .btn-info.dropdown-toggle {
    background-image: none; }
  .btn-info.disabled, .btn-info.disabled:hover, .btn-info.disabled:focus, .btn-info.disabled.focus, .btn-info.disabled:active, .btn-info.disabled.active, .btn-info[disabled], .btn-info[disabled]:hover, .btn-info[disabled]:focus, .btn-info[disabled].focus, .btn-info[disabled]:active, .btn-info[disabled].active, fieldset[disabled] .btn-info, fieldset[disabled] .btn-info:hover, fieldset[disabled] .btn-info:focus, fieldset[disabled] .btn-info.focus, fieldset[disabled] .btn-info:active, fieldset[disabled] .btn-info.active {
    background-color: #5bc0de;
    border-color: #46b8da; }
  .btn-info .badge {
    color: #5bc0de;
    background-color: #fff; }

.btn-warning {
  color: <?= $colorButton ?>;
  background-color: #f0ad4e;
  border-color: #eea236; }
  .btn-warning:focus, .btn-warning.focus {
    color: <?= $colorButton ?>;
    background-color: #ec971f;
    border-color: #985f0d; }
  .btn-warning:hover {
    color: <?= $colorButton ?>;
    background-color: #ec971f;
    border-color: #d58512; }
  .btn-warning:active, .btn-warning.active, .open > .btn-warning.dropdown-toggle {
    color: <?= $colorButton ?>;
    background-color: #ec971f;
    border-color: #d58512; }
    .btn-warning:active:hover, .btn-warning:active:focus, .btn-warning:active.focus, .btn-warning.active:hover, .btn-warning.active:focus, .btn-warning.active.focus, .open > .btn-warning.dropdown-toggle:hover, .open > .btn-warning.dropdown-toggle:focus, .open > .btn-warning.dropdown-toggle.focus {
      color: <?= $colorButton ?>;
      background-color: #d58512;
      border-color: #985f0d; }
  .btn-warning:active, .btn-warning.active, .open > .btn-warning.dropdown-toggle {
    background-image: none; }
  .btn-warning.disabled, .btn-warning.disabled:hover, .btn-warning.disabled:focus, .btn-warning.disabled.focus, .btn-warning.disabled:active, .btn-warning.disabled.active, .btn-warning[disabled], .btn-warning[disabled]:hover, .btn-warning[disabled]:focus, .btn-warning[disabled].focus, .btn-warning[disabled]:active, .btn-warning[disabled].active, fieldset[disabled] .btn-warning, fieldset[disabled] .btn-warning:hover, fieldset[disabled] .btn-warning:focus, fieldset[disabled] .btn-warning.focus, fieldset[disabled] .btn-warning:active, fieldset[disabled] .btn-warning.active {
    background-color: #f0ad4e;
    border-color: #eea236; }
  .btn-warning .badge {
    color: #f0ad4e;
    background-color: #fff; }

.btn-danger {
  color: <?= $colorButton ?>;
  background-color: #d9534f;
  border-color: #d43f3a; }
  .btn-danger:focus, .btn-danger.focus {
    color: <?= $colorButton ?>;
    background-color: #c9302c;
    border-color: #761c19; }
  .btn-danger:hover {
    color: <?= $colorButton ?>;
    background-color: #c9302c;
    border-color: #ac2925; }
  .btn-danger:active, .btn-danger.active, .open > .btn-danger.dropdown-toggle {
    color: <?= $colorButton ?>;
    background-color: #c9302c;
    border-color: #ac2925; }
    .btn-danger:active:hover, .btn-danger:active:focus, .btn-danger:active.focus, .btn-danger.active:hover, .btn-danger.active:focus, .btn-danger.active.focus, .open > .btn-danger.dropdown-toggle:hover, .open > .btn-danger.dropdown-toggle:focus, .open > .btn-danger.dropdown-toggle.focus {
      color: <?= $colorButton ?>;
      background-color: #ac2925;
      border-color: #761c19; }
  .btn-danger:active, .btn-danger.active, .open > .btn-danger.dropdown-toggle {
    background-image: none; }
  .btn-danger.disabled, .btn-danger.disabled:hover, .btn-danger.disabled:focus, .btn-danger.disabled.focus, .btn-danger.disabled:active, .btn-danger.disabled.active, .btn-danger[disabled], .btn-danger[disabled]:hover, .btn-danger[disabled]:focus, .btn-danger[disabled].focus, .btn-danger[disabled]:active, .btn-danger[disabled].active, fieldset[disabled] .btn-danger, fieldset[disabled] .btn-danger:hover, fieldset[disabled] .btn-danger:focus, fieldset[disabled] .btn-danger.focus, fieldset[disabled] .btn-danger:active, fieldset[disabled] .btn-danger.active {
    background-color: #d9534f;
    border-color: #d43f3a; }
  .btn-danger .badge {
    color: #d9534f;
    background-color: #fff; }

.btn-link {
  color: #337ab7;
  font-weight: normal;
  border-radius: 0; }
  .btn-link, .btn-link:active, .btn-link.active, .btn-link[disabled], fieldset[disabled] .btn-link {
    background-color: transparent;
    -webkit-box-shadow: none;
    box-shadow: none; }
  .btn-link, .btn-link:hover, .btn-link:focus, .btn-link:active {
    border-color: transparent; }
  .btn-link:hover, .btn-link:focus {
    color: #23527c;
    text-decoration: underline;
    background-color: transparent; }
  .btn-link[disabled]:hover, .btn-link[disabled]:focus, fieldset[disabled] .btn-link:hover, fieldset[disabled] .btn-link:focus {
    color: #777777;
    text-decoration: none; }

.btn-lg, .btn-group-lg > .btn, #agent-section .detail-info .btn-group-lg > .contact-url {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33333;
  border-radius: 0; }

.btn-sm, .btn-group-sm > .btn, #agent-section .detail-info .btn-group-sm > .contact-url {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 0; }

.btn-xs, .btn-group-xs > .btn, #agent-section .detail-info .btn-group-xs > .contact-url {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 0; }

.btn-block {
  display: block;
  width: 100%; }

.btn-block + .btn-block {
  margin-top: 5px; }

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%; }

.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear; }
  .fade.in {
    opacity: 1; }

.collapse {
  display: none; }
  .collapse.in {
    display: block; }

tr.collapse.in {
  display: table-row; }

tbody.collapse.in {
  display: table-row-group; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-property: height, visibility;
  transition-property: height, visibility;
  -webkit-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-timing-function: ease;
  transition-timing-function: ease; }

.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid \9 ;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent; }

.dropup,
.dropdown {
  position: relative; }

.dropdown-toggle:focus {
  outline: 0; }

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 14px;
  text-align: left;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box; }
  .dropdown-menu.pull-right {
    right: 0;
    left: auto; }
  .dropdown-menu .divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #e5e5e5; }
  .dropdown-menu > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857;
    color: #333333;
    white-space: nowrap; }

.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5; }

.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus {
  color: <?= $colorButton ?>;
  text-decoration: none;
  outline: 0;
  background-color: #337ab7; }

.dropdown-menu > .disabled > a, .dropdown-menu > .disabled > a:hover, .dropdown-menu > .disabled > a:focus {
  color: #777777; }
.dropdown-menu > .disabled > a:hover, .dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed; }

.open > .dropdown-menu {
  display: block; }
.open > a {
  outline: 0; }

.dropdown-menu-right {
  left: auto;
  right: 0; }

.dropdown-menu-left {
  left: 0;
  right: auto; }

.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857;
  color: #777777;
  white-space: nowrap; }

.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990; }

.pull-right > .dropdown-menu {
  right: 0;
  left: auto; }

.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px dashed;
  border-bottom: 4px solid \9 ;
  content: ""; }
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px; }

@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    right: 0;
    left: auto; }
  .navbar-right .dropdown-menu-left {
    left: 0;
    right: auto; } }
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle; }
  .btn-group > .btn, #agent-section .detail-info .btn-group > .contact-url,
  .btn-group-vertical > .btn,
  #agent-section .detail-info .btn-group-vertical > .contact-url {
    position: relative;
    float: left; }
    .btn-group > .btn:hover, #agent-section .detail-info .btn-group > .contact-url:hover, .btn-group > .btn:focus, #agent-section .detail-info .btn-group > .contact-url:focus, .btn-group > .btn:active, #agent-section .detail-info .btn-group > .contact-url:active, .btn-group > .btn.active, #agent-section .detail-info .btn-group > .active.contact-url,
    .btn-group-vertical > .btn:hover,
    #agent-section .detail-info .btn-group-vertical > .contact-url:hover,
    .btn-group-vertical > .btn:focus,
    #agent-section .detail-info .btn-group-vertical > .contact-url:focus,
    .btn-group-vertical > .btn:active,
    #agent-section .detail-info .btn-group-vertical > .contact-url:active,
    .btn-group-vertical > .btn.active,
    #agent-section .detail-info .btn-group-vertical > .active.contact-url {
      z-index: 2; }

.btn-group .btn + .btn, .btn-group #agent-section .detail-info .contact-url + .btn, #agent-section .detail-info .btn-group .contact-url + .btn, .btn-group #agent-section .detail-info .btn + .contact-url, #agent-section .detail-info .btn-group .btn + .contact-url, .btn-group #agent-section .detail-info .contact-url + .contact-url, #agent-section .detail-info .btn-group .contact-url + .contact-url,
.btn-group .btn + .btn-group,
.btn-group #agent-section .detail-info .contact-url + .btn-group,
#agent-section .detail-info .btn-group .contact-url + .btn-group,
.btn-group .btn-group + .btn,
.btn-group #agent-section .detail-info .btn-group + .contact-url,
#agent-section .detail-info .btn-group .btn-group + .contact-url,
.btn-group .btn-group + .btn-group {
  margin-left: -1px; }

.btn-toolbar {
  margin-left: -5px; }
  .btn-toolbar:before, .btn-toolbar:after {
    content: " ";
    display: table; }
  .btn-toolbar:after {
    clear: both; }
  .btn-toolbar .btn, .btn-toolbar #agent-section .detail-info .contact-url, #agent-section .detail-info .btn-toolbar .contact-url,
  .btn-toolbar .btn-group,
  .btn-toolbar .input-group {
    float: left; }
  .btn-toolbar > .btn, #agent-section .detail-info .btn-toolbar > .contact-url,
  .btn-toolbar > .btn-group,
  .btn-toolbar > .input-group {
    margin-left: 5px; }

.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle), #agent-section .detail-info .btn-group > .contact-url:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0; }

.btn-group > .btn:first-child, #agent-section .detail-info .btn-group > .contact-url:first-child {
  margin-left: 0; }
  .btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle), #agent-section .detail-info .btn-group > .contact-url:first-child:not(:last-child):not(.dropdown-toggle) {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0; }

.btn-group > .btn:last-child:not(:first-child), #agent-section .detail-info .btn-group > .contact-url:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0; }

.btn-group > .btn-group {
  float: left; }

.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn, #agent-section .detail-info .btn-group > .btn-group:not(:first-child):not(:last-child) > .contact-url {
  border-radius: 0; }

.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child, #agent-section .detail-info .btn-group > .btn-group:first-child:not(:last-child) > .contact-url:last-child,
.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0; }

.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child, #agent-section .detail-info .btn-group > .btn-group:last-child:not(:first-child) > .contact-url:first-child {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0; }

.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0; }

.btn-group > .btn + .dropdown-toggle, #agent-section .detail-info .btn-group > .contact-url + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px; }

.btn-group > .btn-lg + .dropdown-toggle, .btn-group-lg.btn-group > .btn + .dropdown-toggle, #agent-section .detail-info .btn-group-lg.btn-group > .contact-url + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px; }

.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125); }
  .btn-group.open .dropdown-toggle.btn-link {
    -webkit-box-shadow: none;
    box-shadow: none; }

.btn .caret, #agent-section .detail-info .contact-url .caret {
  margin-left: 0; }

.btn-lg .caret, .btn-group-lg > .btn .caret, #agent-section .detail-info .btn-group-lg > .contact-url .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0; }

.dropup .btn-lg .caret, .dropup .btn-group-lg > .btn .caret, .dropup #agent-section .detail-info .btn-group-lg > .contact-url .caret, #agent-section .detail-info .dropup .btn-group-lg > .contact-url .caret {
  border-width: 0 5px 5px; }

.btn-group-vertical > .btn, #agent-section .detail-info .btn-group-vertical > .contact-url,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn,
#agent-section .detail-info .btn-group-vertical > .btn-group > .contact-url {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%; }
.btn-group-vertical > .btn-group:before, .btn-group-vertical > .btn-group:after {
  content: " ";
  display: table; }
.btn-group-vertical > .btn-group:after {
  clear: both; }
.btn-group-vertical > .btn-group > .btn, #agent-section .detail-info .btn-group-vertical > .btn-group > .contact-url {
  float: none; }
.btn-group-vertical > .btn + .btn, #agent-section .detail-info .btn-group-vertical > .contact-url + .btn, #agent-section .detail-info .btn-group-vertical > .btn + .contact-url, #agent-section .detail-info .btn-group-vertical > .contact-url + .contact-url,
.btn-group-vertical > .btn + .btn-group,
#agent-section .detail-info .btn-group-vertical > .contact-url + .btn-group,
.btn-group-vertical > .btn-group + .btn,
#agent-section .detail-info .btn-group-vertical > .btn-group + .contact-url,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0; }

.btn-group-vertical > .btn:not(:first-child):not(:last-child), #agent-section .detail-info .btn-group-vertical > .contact-url:not(:first-child):not(:last-child) {
  border-radius: 0; }
.btn-group-vertical > .btn:first-child:not(:last-child), #agent-section .detail-info .btn-group-vertical > .contact-url:first-child:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }
.btn-group-vertical > .btn:last-child:not(:first-child), #agent-section .detail-info .btn-group-vertical > .contact-url:last-child:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0; }

.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn, #agent-section .detail-info .btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .contact-url {
  border-radius: 0; }

.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child, #agent-section .detail-info .btn-group-vertical > .btn-group:first-child:not(:last-child) > .contact-url:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }

.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child, #agent-section .detail-info .btn-group-vertical > .btn-group:last-child:not(:first-child) > .contact-url:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0; }

.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate; }
  .btn-group-justified > .btn, #agent-section .detail-info .btn-group-justified > .contact-url,
  .btn-group-justified > .btn-group {
    float: none;
    display: table-cell;
    width: 1%; }
  .btn-group-justified > .btn-group .btn, .btn-group-justified > .btn-group #agent-section .detail-info .contact-url, #agent-section .detail-info .btn-group-justified > .btn-group .contact-url {
    width: 100%; }
  .btn-group-justified > .btn-group .dropdown-menu {
    left: auto; }

[data-toggle="buttons"] > .btn input[type="radio"], #agent-section .detail-info [data-toggle="buttons"] > .contact-url input[type="radio"],
[data-toggle="buttons"] > .btn input[type="checkbox"],
#agent-section .detail-info [data-toggle="buttons"] > .contact-url input[type="checkbox"],
[data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
#agent-section .detail-info [data-toggle="buttons"] > .btn-group > .contact-url input[type="radio"],
[data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"],
#agent-section .detail-info [data-toggle="buttons"] > .btn-group > .contact-url input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none; }

.input-group {
  position: relative;
  display: table;
  border-collapse: separate; }
  .input-group[class*="col-"] {
    float: none;
    padding-left: 0;
    padding-right: 0; }
  .input-group .form-control {
    position: relative;
    z-index: 2;
    float: left;
    width: 100%;
    margin-bottom: 0; }

.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell; }
  .input-group-addon:not(:first-child):not(:last-child),
  .input-group-btn:not(:first-child):not(:last-child),
  .input-group .form-control:not(:first-child):not(:last-child) {
    border-radius: 0; }

.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle; }

.input-group-addon {
  padding: 6px 12px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1;
  color: #555555;
  text-align: center;
  background-color: #eeeeee;
  border: 1px solid #ccc;
  border-radius: 0; }
  .input-group-addon.input-sm,
  .input-group-sm > .input-group-addon,
  .input-group-sm > .input-group-btn > .input-group-addon.btn,
  #agent-section .detail-info .input-group-sm > .input-group-btn > .input-group-addon.contact-url {
    padding: 5px 10px;
    font-size: 12px;
    border-radius: 0; }
  .input-group-addon.input-lg,
  .input-group-lg > .input-group-addon,
  .input-group-lg > .input-group-btn > .input-group-addon.btn,
  #agent-section .detail-info .input-group-lg > .input-group-btn > .input-group-addon.contact-url {
    padding: 10px 16px;
    font-size: 18px;
    border-radius: 0; }
  .input-group-addon input[type="radio"],
  .input-group-addon input[type="checkbox"] {
    margin-top: 0; }

.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
#agent-section .detail-info .input-group-btn:first-child > .contact-url,
.input-group-btn:first-child > .btn-group > .btn,
#agent-section .detail-info .input-group-btn:first-child > .btn-group > .contact-url,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
#agent-section .detail-info .input-group-btn:last-child > .contact-url:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn,
#agent-section .detail-info .input-group-btn:last-child > .btn-group:not(:last-child) > .contact-url {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0; }

.input-group-addon:first-child {
  border-right: 0; }

.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
#agent-section .detail-info .input-group-btn:last-child > .contact-url,
.input-group-btn:last-child > .btn-group > .btn,
#agent-section .detail-info .input-group-btn:last-child > .btn-group > .contact-url,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
#agent-section .detail-info .input-group-btn:first-child > .contact-url:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn,
#agent-section .detail-info .input-group-btn:first-child > .btn-group:not(:first-child) > .contact-url {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0; }

.input-group-addon:last-child {
  border-left: 0; }

.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap; }
  .input-group-btn > .btn, #agent-section .detail-info .input-group-btn > .contact-url {
    position: relative; }
    .input-group-btn > .btn + .btn, #agent-section .detail-info .input-group-btn > .contact-url + .btn, #agent-section .detail-info .input-group-btn > .btn + .contact-url, #agent-section .detail-info .input-group-btn > .contact-url + .contact-url {
      margin-left: -1px; }
    .input-group-btn > .btn:hover, #agent-section .detail-info .input-group-btn > .contact-url:hover, .input-group-btn > .btn:focus, #agent-section .detail-info .input-group-btn > .contact-url:focus, .input-group-btn > .btn:active, #agent-section .detail-info .input-group-btn > .contact-url:active {
      z-index: 2; }
  .input-group-btn:first-child > .btn, #agent-section .detail-info .input-group-btn:first-child > .contact-url,
  .input-group-btn:first-child > .btn-group {
    margin-right: -1px; }
  .input-group-btn:last-child > .btn, #agent-section .detail-info .input-group-btn:last-child > .contact-url,
  .input-group-btn:last-child > .btn-group {
    z-index: 2;
    margin-left: -1px; }

.nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none; }
  .nav:before, .nav:after {
    content: " ";
    display: table; }
  .nav:after {
    clear: both; }
  .nav > li {
    position: relative;
    display: block; }
    .nav > li > a {
      position: relative;
      display: block;
      padding: 10px 15px; }
      .nav > li > a:hover, .nav > li > a:focus {
        text-decoration: none;
        background-color: #eeeeee; }
    .nav > li.disabled > a {
      color: #777777; }
      .nav > li.disabled > a:hover, .nav > li.disabled > a:focus {
        color: #777777;
        text-decoration: none;
        background-color: transparent;
        cursor: not-allowed; }
  .nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
    background-color: #eeeeee;
    border-color: #337ab7; }
  .nav .nav-divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #e5e5e5; }
  .nav > li > a > img {
    max-width: none; }

.nav-tabs {
  border-bottom: 1px solid #ddd; }
  .nav-tabs > li {
    float: left;
    margin-bottom: -1px; }
    .nav-tabs > li > a {
      margin-right: 2px;
      line-height: 1.42857;
      border: 1px solid transparent;
      border-radius: 0 0 0 0; }
      .nav-tabs > li > a:hover {
        border-color: #eeeeee #eeeeee #ddd; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
      color: #555555;
      background-color: #fff;
      border: 1px solid #ddd;
      border-bottom-color: transparent;
      cursor: default; }

.nav-pills > li {
  float: left; }
  .nav-pills > li > a {
    border-radius: 0; }
  .nav-pills > li + li {
    margin-left: 2px; }
  .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
    color: <?= $colorButton ?>;
    background-color: #337ab7; }

.nav-stacked > li {
  float: none; }
  .nav-stacked > li + li {
    margin-top: 2px;
    margin-left: 0; }

.nav-justified, .nav-tabs.nav-justified {
  width: 100%; }
  .nav-justified > li, .nav-tabs.nav-justified > li {
    float: none; }
    .nav-justified > li > a, .nav-tabs.nav-justified > li > a {
      text-align: center;
      margin-bottom: 5px; }
  .nav-justified > .dropdown .dropdown-menu {
    top: auto;
    left: auto; }
  @media (min-width: 768px) {
    .nav-justified > li, .nav-tabs.nav-justified > li {
      display: table-cell;
      width: 1%; }
      .nav-justified > li > a, .nav-tabs.nav-justified > li > a {
        margin-bottom: 0; } }

.nav-tabs-justified, .nav-tabs.nav-justified {
  border-bottom: 0; }
  .nav-tabs-justified > li > a, .nav-tabs.nav-justified > li > a {
    margin-right: 0;
    border-radius: 0; }
  .nav-tabs-justified > .active > a, .nav-tabs.nav-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus,
  .nav-tabs.nav-justified > .active > a:focus {
    border: 1px solid #ddd; }
  @media (min-width: 768px) {
    .nav-tabs-justified > li > a, .nav-tabs.nav-justified > li > a {
      border-bottom: 1px solid #ddd;
      border-radius: 0 0 0 0; }
    .nav-tabs-justified > .active > a, .nav-tabs.nav-justified > .active > a,
    .nav-tabs-justified > .active > a:hover,
    .nav-tabs.nav-justified > .active > a:hover,
    .nav-tabs-justified > .active > a:focus,
    .nav-tabs.nav-justified > .active > a:focus {
      border-bottom-color: #fff; } }

.tab-content > .tab-pane {
  display: none; }
.tab-content > .active {
  display: block; }

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0; }

.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent; }
  .navbar:before, .navbar:after {
    content: " ";
    display: table; }
  .navbar:after {
    clear: both; }
  @media (min-width: 768px) {
    .navbar {
      border-radius: 0; } }

.navbar-header:before, .navbar-header:after {
  content: " ";
  display: table; }
.navbar-header:after {
  clear: both; }
@media (min-width: 768px) {
  .navbar-header {
    float: left; } }

.navbar-collapse {
  overflow-x: visible;
  padding-right: 15px;
  padding-left: 15px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch; }
  .navbar-collapse:before, .navbar-collapse:after {
    content: " ";
    display: table; }
  .navbar-collapse:after {
    clear: both; }
  .navbar-collapse.in {
    overflow-y: auto; }
  @media (min-width: 768px) {
    .navbar-collapse {
      width: auto;
      border-top: 0;
      box-shadow: none; }
      .navbar-collapse.collapse {
        display: block !important;
        height: auto !important;
        padding-bottom: 0;
        overflow: visible !important; }
      .navbar-collapse.in {
        overflow-y: visible; }
      .navbar-fixed-top .navbar-collapse, .navbar-static-top .navbar-collapse, .navbar-fixed-bottom .navbar-collapse {
        padding-left: 0;
        padding-right: 0; } }

.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px; }
  @media (max-device-width: 480px) and (orientation: landscape) {
    .navbar-fixed-top .navbar-collapse,
    .navbar-fixed-bottom .navbar-collapse {
      max-height: 200px; } }

.container > .navbar-header, body.boxed #main-wrapper > .navbar-header,
.container > .navbar-collapse,
body.boxed #main-wrapper > .navbar-collapse,
.container-fluid > .navbar-header,
.container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px; }
  @media (min-width: 768px) {
    .container > .navbar-header, body.boxed #main-wrapper > .navbar-header,
    .container > .navbar-collapse,
    body.boxed #main-wrapper > .navbar-collapse,
    .container-fluid > .navbar-header,
    .container-fluid > .navbar-collapse {
      margin-right: 0;
      margin-left: 0; } }

.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px; }
  @media (min-width: 768px) {
    .navbar-static-top {
      border-radius: 0; } }

.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030; }
  @media (min-width: 768px) {
    .navbar-fixed-top,
    .navbar-fixed-bottom {
      border-radius: 0; } }

.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px; }

.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0; }

.navbar-brand {
  float: left;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
  height: 50px; }
  .navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none; }
  .navbar-brand > img {
    display: block; }
  @media (min-width: 768px) {
    .navbar > .container .navbar-brand, body.boxed .navbar > #main-wrapper .navbar-brand, .navbar > .container-fluid .navbar-brand {
      margin-left: -15px; } }

.navbar-toggle {
  position: relative;
  float: right;
  margin-right: 15px;
  padding: 9px 10px;
  margin-top: 8px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 0; }
  .navbar-toggle:focus {
    outline: 0; }
  .navbar-toggle .icon-bar {
    display: block;
    width: 22px;
    height: 2px;
    border-radius: 1px; }
  .navbar-toggle .icon-bar + .icon-bar {
    margin-top: 4px; }
  @media (min-width: 768px) {
    .navbar-toggle {
      display: none; } }

.navbar-nav {
  margin: 7.5px -15px; }
  .navbar-nav > li > a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px; }
  @media (max-width: 767px) {
    .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      box-shadow: none; }
      .navbar-nav .open .dropdown-menu > li > a,
      .navbar-nav .open .dropdown-menu .dropdown-header {
        padding: 5px 15px 5px 25px; }
      .navbar-nav .open .dropdown-menu > li > a {
        line-height: 20px; }
        .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-nav .open .dropdown-menu > li > a:focus {
          background-image: none; } }
  @media (min-width: 768px) {
    .navbar-nav {
      float: left;
      margin: 0; }
      .navbar-nav > li {
        float: left; }
        .navbar-nav > li > a {
          padding-top: 15px;
          padding-bottom: 15px; } }

.navbar-form {
  margin-left: -15px;
  margin-right: -15px;
  padding: 10px 15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: 8px;
  margin-bottom: 8px; }
  @media (min-width: 768px) {
    .navbar-form .form-group {
      display: inline-block;
      margin-bottom: 0;
      vertical-align: middle; }
    .navbar-form .form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle; }
    .navbar-form .form-control-static {
      display: inline-block; }
    .navbar-form .input-group {
      display: inline-table;
      vertical-align: middle; }
      .navbar-form .input-group .input-group-addon,
      .navbar-form .input-group .input-group-btn,
      .navbar-form .input-group .form-control {
        width: auto; }
    .navbar-form .input-group > .form-control {
      width: 100%; }
    .navbar-form .control-label {
      margin-bottom: 0;
      vertical-align: middle; }
    .navbar-form .radio,
    .navbar-form .checkbox {
      display: inline-block;
      margin-top: 0;
      margin-bottom: 0;
      vertical-align: middle; }
      .navbar-form .radio label,
      .navbar-form .checkbox label {
        padding-left: 0; }
    .navbar-form .radio input[type="radio"],
    .navbar-form .checkbox input[type="checkbox"] {
      position: relative;
      margin-left: 0; }
    .navbar-form .has-feedback .form-control-feedback {
      top: 0; } }
  @media (max-width: 767px) {
    .navbar-form .form-group {
      margin-bottom: 5px; }
      .navbar-form .form-group:last-child {
        margin-bottom: 0; } }
  @media (min-width: 768px) {
    .navbar-form {
      width: auto;
      border: 0;
      margin-left: 0;
      margin-right: 0;
      padding-top: 0;
      padding-bottom: 0;
      -webkit-box-shadow: none;
      box-shadow: none; } }

.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0; }

.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0; }

.navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px; }
  .navbar-btn.btn-sm, .btn-group-sm > .navbar-btn.btn, #agent-section .detail-info .btn-group-sm > .navbar-btn.contact-url {
    margin-top: 10px;
    margin-bottom: 10px; }
  .navbar-btn.btn-xs, .btn-group-xs > .navbar-btn.btn, #agent-section .detail-info .btn-group-xs > .navbar-btn.contact-url {
    margin-top: 14px;
    margin-bottom: 14px; }

.navbar-text {
  margin-top: 15px;
  margin-bottom: 15px; }
  @media (min-width: 768px) {
    .navbar-text {
      float: left;
      margin-left: 15px;
      margin-right: 15px; } }

@media (min-width: 768px) {
  .navbar-left {
    float: left !important; }

  .navbar-right {
    float: right !important;
    margin-right: -15px; }
    .navbar-right ~ .navbar-right {
      margin-right: 0; } }
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7; }
  .navbar-default .navbar-brand {
    color: #777; }
    .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
      color: #5e5e5e;
      background-color: transparent; }
  .navbar-default .navbar-text {
    color: #777; }
  .navbar-default .navbar-nav > li > a {
    color: #777; }
    .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
      color: #333;
      background-color: transparent; }
  .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: #555;
    background-color: #e7e7e7; }
  .navbar-default .navbar-nav > .disabled > a, .navbar-default .navbar-nav > .disabled > a:hover, .navbar-default .navbar-nav > .disabled > a:focus {
    color: #ccc;
    background-color: transparent; }
  .navbar-default .navbar-toggle {
    border-color: #ddd; }
    .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
      background-color: #ddd; }
    .navbar-default .navbar-toggle .icon-bar {
      background-color: #888; }
  .navbar-default .navbar-collapse,
  .navbar-default .navbar-form {
    border-color: #e7e7e7; }
  .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
    background-color: #e7e7e7;
    color: #555; }
  @media (max-width: 767px) {
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
      color: #777; }
      .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
        color: #333;
        background-color: transparent; }
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
      color: #555;
      background-color: #e7e7e7; }
    .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
      color: #ccc;
      background-color: transparent; } }
  .navbar-default .navbar-link {
    color: #777; }
    .navbar-default .navbar-link:hover {
      color: #333; }
  .navbar-default .btn-link {
    color: #777; }
    .navbar-default .btn-link:hover, .navbar-default .btn-link:focus {
      color: #333; }
    .navbar-default .btn-link[disabled]:hover, .navbar-default .btn-link[disabled]:focus, fieldset[disabled] .navbar-default .btn-link:hover, fieldset[disabled] .navbar-default .btn-link:focus {
      color: #ccc; }

.navbar-inverse {
  background-color: #222;
  border-color: #090909; }
  .navbar-inverse .navbar-brand {
    color: #9d9d9d; }
    .navbar-inverse .navbar-brand:hover, .navbar-inverse .navbar-brand:focus {
      color: <?= $colorButton ?>;
      background-color: transparent; }
  .navbar-inverse .navbar-text {
    color: #9d9d9d; }
  .navbar-inverse .navbar-nav > li > a {
    color: #9d9d9d; }
    .navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
      color: <?= $colorButton ?>;
      background-color: transparent; }
  .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus {
    color: <?= $colorButton ?>;
    background-color: #090909; }
  .navbar-inverse .navbar-nav > .disabled > a, .navbar-inverse .navbar-nav > .disabled > a:hover, .navbar-inverse .navbar-nav > .disabled > a:focus {
    color: #444;
    background-color: transparent; }
  .navbar-inverse .navbar-toggle {
    border-color: #333; }
    .navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus {
      background-color: #333; }
    .navbar-inverse .navbar-toggle .icon-bar {
      background-color: #fff; }
  .navbar-inverse .navbar-collapse,
  .navbar-inverse .navbar-form {
    border-color: #101010; }
  .navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover, .navbar-inverse .navbar-nav > .open > a:focus {
    background-color: #090909;
    color: <?= $colorButton ?>; }
  @media (max-width: 767px) {
    .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
      border-color: #090909; }
    .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
      background-color: #090909; }
    .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
      color: #9d9d9d; }
      .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
        color: <?= $colorButton ?>;
        background-color: transparent; }
    .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
      color: <?= $colorButton ?>;
      background-color: #090909; }
    .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
      color: #444;
      background-color: transparent; } }
  .navbar-inverse .navbar-link {
    color: #9d9d9d; }
    .navbar-inverse .navbar-link:hover {
      color: <?= $colorButton ?>; }
  .navbar-inverse .btn-link {
    color: #9d9d9d; }
    .navbar-inverse .btn-link:hover, .navbar-inverse .btn-link:focus {
      color: <?= $colorButton ?>; }
    .navbar-inverse .btn-link[disabled]:hover, .navbar-inverse .btn-link[disabled]:focus, fieldset[disabled] .navbar-inverse .btn-link:hover, fieldset[disabled] .navbar-inverse .btn-link:focus {
      color: #444; }

.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 20px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 0; }
  .breadcrumb > li {
    display: inline-block; }
    .breadcrumb > li + li:before {
      content: "/ ";
      padding: 0 5px;
      color: #ccc; }
  .breadcrumb > .active {
    color: #777777; }

.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 0; }
  .pagination > li {
    display: inline; }
    .pagination > li > a,
    .pagination > li > span {
      position: relative;
      float: left;
      padding: 6px 12px;
      line-height: 1.42857;
      text-decoration: none;
      color: #337ab7;
      background-color: #fff;
      border: 1px solid #ddd;
      margin-left: -1px; }
    .pagination > li:first-child > a,
    .pagination > li:first-child > span {
      margin-left: 0;
      border-bottom-left-radius: 0;
      border-top-left-radius: 0; }
    .pagination > li:last-child > a,
    .pagination > li:last-child > span {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0; }
  .pagination > li > a:hover, .pagination > li > a:focus,
  .pagination > li > span:hover,
  .pagination > li > span:focus {
    z-index: 3;
    color: #23527c;
    background-color: #eeeeee;
    border-color: #ddd; }
  .pagination > .active > a, .pagination > .active > a:hover, .pagination > .active > a:focus,
  .pagination > .active > span,
  .pagination > .active > span:hover,
  .pagination > .active > span:focus {
    z-index: 2;
    color: <?= $colorButton ?>;
    background-color: #337ab7;
    border-color: #337ab7;
    cursor: default; }
  .pagination > .disabled > span,
  .pagination > .disabled > span:hover,
  .pagination > .disabled > span:focus,
  .pagination > .disabled > a,
  .pagination > .disabled > a:hover,
  .pagination > .disabled > a:focus {
    color: #777777;
    background-color: #fff;
    border-color: #ddd;
    cursor: not-allowed; }

.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33333; }
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0; }
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0; }

.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5; }
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0; }
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0; }

.pager {
  padding-left: 0;
  margin: 20px 0;
  list-style: none;
  text-align: center; }
  .pager:before, .pager:after {
    content: " ";
    display: table; }
  .pager:after {
    clear: both; }
  .pager li {
    display: inline; }
    .pager li > a,
    .pager li > span {
      display: inline-block;
      padding: 5px 14px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 15px; }
    .pager li > a:hover,
    .pager li > a:focus {
      text-decoration: none;
      background-color: #eeeeee; }
  .pager .next > a,
  .pager .next > span {
    float: right; }
  .pager .previous > a,
  .pager .previous > span {
    float: left; }
  .pager .disabled > a,
  .pager .disabled > a:hover,
  .pager .disabled > a:focus,
  .pager .disabled > span {
    color: #777777;
    background-color: #fff;
    cursor: not-allowed; }

.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: <?= $colorButton ?>;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em; }
  .label:empty {
    display: none; }
  .btn .label, #agent-section .detail-info .contact-url .label {
    position: relative;
    top: -1px; }

a.label:hover, a.label:focus {
  color: <?= $colorButton ?>;
  text-decoration: none;
  cursor: pointer; }

.label-default {
  background-color: #777777; }
  .label-default[href]:hover, .label-default[href]:focus {
    background-color: #5e5e5e; }

.label-primary {
  background-color: #337ab7; }
  .label-primary[href]:hover, .label-primary[href]:focus {
    background-color: #286090; }

.label-success {
  background-color: #5cb85c; }
  .label-success[href]:hover, .label-success[href]:focus {
    background-color: #449d44; }

.label-info {
  background-color: #5bc0de; }
  .label-info[href]:hover, .label-info[href]:focus {
    background-color: #31b0d5; }

.label-warning {
  background-color: #f0ad4e; }
  .label-warning[href]:hover, .label-warning[href]:focus {
    background-color: #ec971f; }

.label-danger {
  background-color: #d9534f; }
  .label-danger[href]:hover, .label-danger[href]:focus {
    background-color: #c9302c; }

.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  color: <?= $colorButton ?>;
  line-height: 1;
  vertical-align: middle;
  white-space: nowrap;
  text-align: center;
  background-color: #777777;
  border-radius: 10px; }
  .badge:empty {
    display: none; }
  .btn .badge, #agent-section .detail-info .contact-url .badge {
    position: relative;
    top: -1px; }
  .btn-xs .badge, .btn-group-xs > .btn .badge, #agent-section .detail-info .btn-group-xs > .contact-url .badge, .btn-group-xs > .btn .badge, #agent-section .detail-info .btn-group-xs > .contact-url .badge {
    top: 0;
    padding: 1px 5px; }
  .list-group-item.active > .badge, .nav-pills > .active > a > .badge {
    color: #337ab7;
    background-color: #fff; }
  .list-group-item > .badge {
    float: right; }
  .list-group-item > .badge + .badge {
    margin-right: 5px; }
  .nav-pills > li > a > .badge {
    margin-left: 3px; }

a.badge:hover, a.badge:focus {
  color: <?= $colorButton ?>;
  text-decoration: none;
  cursor: pointer; }

.jumbotron {
  padding-top: 30px;
  padding-bottom: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eeeeee; }
  .jumbotron h1,
  .jumbotron .h1 {
    color: inherit; }
  .jumbotron p {
    margin-bottom: 15px;
    font-size: 21px;
    font-weight: 200; }
  .jumbotron > hr {
    border-top-color: #d5d5d5; }
  .container .jumbotron, body.boxed #main-wrapper .jumbotron, .container-fluid .jumbotron {
    border-radius: 0; }
  .jumbotron .container, .jumbotron body.boxed #main-wrapper, body.boxed .jumbotron #main-wrapper {
    max-width: 100%; }
  @media screen and (min-width: 768px) {
    .jumbotron {
      padding-top: 48px;
      padding-bottom: 48px; }
      .container .jumbotron, body.boxed #main-wrapper .jumbotron, .container-fluid .jumbotron {
        padding-left: 60px;
        padding-right: 60px; }
      .jumbotron h1,
      .jumbotron .h1 {
        font-size: 63px; } }

.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 0;
  -webkit-transition: border 0.2s ease-in-out;
  -o-transition: border 0.2s ease-in-out;
  transition: border 0.2s ease-in-out; }
  .thumbnail > img,
  .thumbnail a > img {
    display: block;
    max-width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto; }
  .thumbnail .caption {
    padding: 9px;
    color: #333333; }

a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #337ab7; }

.alert, [id^="contact-agent-"] > .wpcf7 .wpcf7-not-valid-tip, [id^="contact-agent-"] > .wpcf7 .wpcf7-validation-errors, [id^="contact-agent-"] > .wpcf7 .wpcf7-mail-sent-ok, #contact-info-box .contact-form-container #contact-form .wpcf7-not-valid-tip, #contact-info-box .contact-form-container #contact-form .wpcf7-validation-errors, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-not-valid-tip, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-validation-errors, #contact-info-box .wpcf7 #contact-form .wpcf7-not-valid-tip, #contact-info-box .wpcf7 #contact-form .wpcf7-validation-errors, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-not-valid-tip, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-validation-errors, #contact-info-box .contact-form-container #contact-form .wpcf7-mail-sent-ok, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-mail-sent-ok, #contact-info-box .wpcf7 #contact-form .wpcf7-mail-sent-ok, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-mail-sent-ok {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 0; }
  .alert h4, [id^="contact-agent-"] > .wpcf7 .wpcf7-not-valid-tip h4, [id^="contact-agent-"] > .wpcf7 .wpcf7-validation-errors h4, [id^="contact-agent-"] > .wpcf7 .wpcf7-mail-sent-ok h4, #contact-info-box .contact-form-container #contact-form .wpcf7-not-valid-tip h4, #contact-info-box .contact-form-container #contact-form .wpcf7-validation-errors h4, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-not-valid-tip h4, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-validation-errors h4, #contact-info-box .wpcf7 #contact-form .wpcf7-not-valid-tip h4, #contact-info-box .wpcf7 #contact-form .wpcf7-validation-errors h4, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-not-valid-tip h4, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-validation-errors h4, #contact-info-box .contact-form-container #contact-form .wpcf7-mail-sent-ok h4, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-mail-sent-ok h4, #contact-info-box .wpcf7 #contact-form .wpcf7-mail-sent-ok h4, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-mail-sent-ok h4 {
    margin-top: 0;
    color: inherit; }
  .alert .alert-link, [id^="contact-agent-"] > .wpcf7 .wpcf7-not-valid-tip .alert-link, [id^="contact-agent-"] > .wpcf7 .wpcf7-validation-errors .alert-link, [id^="contact-agent-"] > .wpcf7 .wpcf7-mail-sent-ok .alert-link, #contact-info-box .contact-form-container #contact-form .wpcf7-not-valid-tip .alert-link, #contact-info-box .contact-form-container #contact-form .wpcf7-validation-errors .alert-link, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-not-valid-tip .alert-link, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-validation-errors .alert-link, #contact-info-box .wpcf7 #contact-form .wpcf7-not-valid-tip .alert-link, #contact-info-box .wpcf7 #contact-form .wpcf7-validation-errors .alert-link, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-not-valid-tip .alert-link, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-validation-errors .alert-link, #contact-info-box .contact-form-container #contact-form .wpcf7-mail-sent-ok .alert-link, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-mail-sent-ok .alert-link, #contact-info-box .wpcf7 #contact-form .wpcf7-mail-sent-ok .alert-link, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-mail-sent-ok .alert-link {
    font-weight: bold; }
  .alert > p, [id^="contact-agent-"] > .wpcf7 .wpcf7-not-valid-tip > p, [id^="contact-agent-"] > .wpcf7 .wpcf7-validation-errors > p, [id^="contact-agent-"] > .wpcf7 .wpcf7-mail-sent-ok > p, #contact-info-box .contact-form-container #contact-form .wpcf7-not-valid-tip > p, #contact-info-box .contact-form-container #contact-form .wpcf7-validation-errors > p, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-not-valid-tip > p, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-validation-errors > p, #contact-info-box .wpcf7 #contact-form .wpcf7-not-valid-tip > p, #contact-info-box .wpcf7 #contact-form .wpcf7-validation-errors > p, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-not-valid-tip > p, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-validation-errors > p, #contact-info-box .contact-form-container #contact-form .wpcf7-mail-sent-ok > p, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-mail-sent-ok > p, #contact-info-box .wpcf7 #contact-form .wpcf7-mail-sent-ok > p, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-mail-sent-ok > p,
  .alert > ul,
  [id^="contact-agent-"] > .wpcf7 .wpcf7-not-valid-tip > ul,
  [id^="contact-agent-"] > .wpcf7 .wpcf7-validation-errors > ul,
  [id^="contact-agent-"] > .wpcf7 .wpcf7-mail-sent-ok > ul,
  #contact-info-box .contact-form-container #contact-form .wpcf7-not-valid-tip > ul,
  #contact-info-box .contact-form-container #contact-form .wpcf7-validation-errors > ul,
  #contact-info-box .contact-form-container .wpcf7-form .wpcf7-not-valid-tip > ul,
  #contact-info-box .contact-form-container .wpcf7-form .wpcf7-validation-errors > ul,
  #contact-info-box .wpcf7 #contact-form .wpcf7-not-valid-tip > ul,
  #contact-info-box .wpcf7 #contact-form .wpcf7-validation-errors > ul,
  #contact-info-box .wpcf7 .wpcf7-form .wpcf7-not-valid-tip > ul,
  #contact-info-box .wpcf7 .wpcf7-form .wpcf7-validation-errors > ul,
  #contact-info-box .contact-form-container #contact-form .wpcf7-mail-sent-ok > ul,
  #contact-info-box .contact-form-container .wpcf7-form .wpcf7-mail-sent-ok > ul,
  #contact-info-box .wpcf7 #contact-form .wpcf7-mail-sent-ok > ul,
  #contact-info-box .wpcf7 .wpcf7-form .wpcf7-mail-sent-ok > ul {
    margin-bottom: 0; }
  .alert > p + p, [id^="contact-agent-"] > .wpcf7 .wpcf7-not-valid-tip > p + p, [id^="contact-agent-"] > .wpcf7 .wpcf7-validation-errors > p + p, [id^="contact-agent-"] > .wpcf7 .wpcf7-mail-sent-ok > p + p, #contact-info-box .contact-form-container #contact-form .wpcf7-not-valid-tip > p + p, #contact-info-box .contact-form-container #contact-form .wpcf7-validation-errors > p + p, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-not-valid-tip > p + p, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-validation-errors > p + p, #contact-info-box .wpcf7 #contact-form .wpcf7-not-valid-tip > p + p, #contact-info-box .wpcf7 #contact-form .wpcf7-validation-errors > p + p, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-not-valid-tip > p + p, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-validation-errors > p + p, #contact-info-box .contact-form-container #contact-form .wpcf7-mail-sent-ok > p + p, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-mail-sent-ok > p + p, #contact-info-box .wpcf7 #contact-form .wpcf7-mail-sent-ok > p + p, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-mail-sent-ok > p + p {
    margin-top: 5px; }

.alert-dismissable,
.alert-dismissible {
  padding-right: 35px; }
  .alert-dismissable .close,
  .alert-dismissible .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit; }

.alert-success, [id^="contact-agent-"] > .wpcf7 .wpcf7-mail-sent-ok, #contact-info-box .contact-form-container #contact-form .wpcf7-mail-sent-ok, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-mail-sent-ok, #contact-info-box .wpcf7 #contact-form .wpcf7-mail-sent-ok, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-mail-sent-ok {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #3c763d; }
  .alert-success hr, [id^="contact-agent-"] > .wpcf7 .wpcf7-mail-sent-ok hr, #contact-info-box .contact-form-container #contact-form .wpcf7-mail-sent-ok hr, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-mail-sent-ok hr, #contact-info-box .wpcf7 #contact-form .wpcf7-mail-sent-ok hr, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-mail-sent-ok hr {
    border-top-color: #c9e2b3; }
  .alert-success .alert-link, [id^="contact-agent-"] > .wpcf7 .wpcf7-mail-sent-ok .alert-link, #contact-info-box .contact-form-container #contact-form .wpcf7-mail-sent-ok .alert-link, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-mail-sent-ok .alert-link, #contact-info-box .wpcf7 #contact-form .wpcf7-mail-sent-ok .alert-link, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-mail-sent-ok .alert-link {
    color: #2b542c; }

.alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #31708f; }
  .alert-info hr {
    border-top-color: #a6e1ec; }
  .alert-info .alert-link {
    color: #245269; }

.alert-warning {
  background-color: #fcf8e3;
  border-color: #faebcc;
  color: #8a6d3b; }
  .alert-warning hr {
    border-top-color: #f7e1b5; }
  .alert-warning .alert-link {
    color: #66512c; }

.alert-danger, [id^="contact-agent-"] > .wpcf7 .wpcf7-not-valid-tip, [id^="contact-agent-"] > .wpcf7 .wpcf7-validation-errors, #contact-info-box .contact-form-container #contact-form .wpcf7-not-valid-tip, #contact-info-box .contact-form-container #contact-form .wpcf7-validation-errors, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-not-valid-tip, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-validation-errors, #contact-info-box .wpcf7 #contact-form .wpcf7-not-valid-tip, #contact-info-box .wpcf7 #contact-form .wpcf7-validation-errors, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-not-valid-tip, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-validation-errors {
  background-color: #f2dede;
  border-color: #ebccd1;
  color: #a94442; }
  .alert-danger hr, [id^="contact-agent-"] > .wpcf7 .wpcf7-not-valid-tip hr, [id^="contact-agent-"] > .wpcf7 .wpcf7-validation-errors hr, #contact-info-box .contact-form-container #contact-form .wpcf7-not-valid-tip hr, #contact-info-box .contact-form-container #contact-form .wpcf7-validation-errors hr, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-not-valid-tip hr, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-validation-errors hr, #contact-info-box .wpcf7 #contact-form .wpcf7-not-valid-tip hr, #contact-info-box .wpcf7 #contact-form .wpcf7-validation-errors hr, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-not-valid-tip hr, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-validation-errors hr {
    border-top-color: #e4b9c0; }
  .alert-danger .alert-link, [id^="contact-agent-"] > .wpcf7 .wpcf7-not-valid-tip .alert-link, [id^="contact-agent-"] > .wpcf7 .wpcf7-validation-errors .alert-link, #contact-info-box .contact-form-container #contact-form .wpcf7-not-valid-tip .alert-link, #contact-info-box .contact-form-container #contact-form .wpcf7-validation-errors .alert-link, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-not-valid-tip .alert-link, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-validation-errors .alert-link, #contact-info-box .wpcf7 #contact-form .wpcf7-not-valid-tip .alert-link, #contact-info-box .wpcf7 #contact-form .wpcf7-validation-errors .alert-link, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-not-valid-tip .alert-link, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-validation-errors .alert-link {
    color: #843534; }

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0; }
  to {
    background-position: 0 0; } }
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0; }
  to {
    background-position: 0 0; } }
.progress {
  overflow: hidden;
  height: 20px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1); }

.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: <?= $colorButton ?>;
  text-align: center;
  background-color: #337ab7;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease; }

.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 0) 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0));
  background-size: 40px 40px; }

.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite; }

.progress-bar-success {
  background-color: #5cb85c; }
  .progress-striped .progress-bar-success {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 0) 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0)); }

.progress-bar-info {
  background-color: #5bc0de; }
  .progress-striped .progress-bar-info {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 0) 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0)); }

.progress-bar-warning {
  background-color: #f0ad4e; }
  .progress-striped .progress-bar-warning {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 0) 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0)); }

.progress-bar-danger {
  background-color: #d9534f; }
  .progress-striped .progress-bar-danger {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 0) 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0)); }

.media {
  margin-top: 15px; }
  .media:first-child {
    margin-top: 0; }

.media,
.media-body {
  zoom: 1;
  overflow: hidden; }

.media-body {
  width: 10000px; }

.media-object {
  display: block; }
  .media-object.img-thumbnail {
    max-width: none; }

.media-right,
.media > .pull-right {
  padding-left: 10px; }

.media-left,
.media > .pull-left {
  padding-right: 10px; }

.media-left,
.media-right,
.media-body {
  display: table-cell;
  vertical-align: top; }

.media-middle {
  vertical-align: middle; }

.media-bottom {
  vertical-align: bottom; }

.media-heading {
  margin-top: 0;
  margin-bottom: 5px; }

.media-list {
  padding-left: 0;
  list-style: none; }

.list-group {
  margin-bottom: 20px;
  padding-left: 0; }

.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd; }
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0; }
  .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }

a.list-group-item,
button.list-group-item {
  color: #555; }
  a.list-group-item .list-group-item-heading,
  button.list-group-item .list-group-item-heading {
    color: #333; }
  a.list-group-item:hover, a.list-group-item:focus,
  button.list-group-item:hover,
  button.list-group-item:focus {
    text-decoration: none;
    color: #555;
    background-color: #f5f5f5; }

button.list-group-item {
  width: 100%;
  text-align: left; }

.list-group-item.disabled, .list-group-item.disabled:hover, .list-group-item.disabled:focus {
  background-color: #eeeeee;
  color: #777777;
  cursor: not-allowed; }
  .list-group-item.disabled .list-group-item-heading, .list-group-item.disabled:hover .list-group-item-heading, .list-group-item.disabled:focus .list-group-item-heading {
    color: inherit; }
  .list-group-item.disabled .list-group-item-text, .list-group-item.disabled:hover .list-group-item-text, .list-group-item.disabled:focus .list-group-item-text {
    color: #777777; }
.list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus {
  z-index: 2;
  color: <?= $colorButton ?>;
  background-color: #337ab7;
  border-color: #337ab7; }
  .list-group-item.active .list-group-item-heading,
  .list-group-item.active .list-group-item-heading > small,
  .list-group-item.active .list-group-item-heading > .small, .list-group-item.active:hover .list-group-item-heading,
  .list-group-item.active:hover .list-group-item-heading > small,
  .list-group-item.active:hover .list-group-item-heading > .small, .list-group-item.active:focus .list-group-item-heading,
  .list-group-item.active:focus .list-group-item-heading > small,
  .list-group-item.active:focus .list-group-item-heading > .small {
    color: inherit; }
  .list-group-item.active .list-group-item-text, .list-group-item.active:hover .list-group-item-text, .list-group-item.active:focus .list-group-item-text {
    color: #c7ddef; }

.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8; }

a.list-group-item-success,
button.list-group-item-success {
  color: #3c763d; }
  a.list-group-item-success .list-group-item-heading,
  button.list-group-item-success .list-group-item-heading {
    color: inherit; }
  a.list-group-item-success:hover, a.list-group-item-success:focus,
  button.list-group-item-success:hover,
  button.list-group-item-success:focus {
    color: #3c763d;
    background-color: #d0e9c6; }
  a.list-group-item-success.active, a.list-group-item-success.active:hover, a.list-group-item-success.active:focus,
  button.list-group-item-success.active,
  button.list-group-item-success.active:hover,
  button.list-group-item-success.active:focus {
    color: <?= $colorButton ?>;
    background-color: #3c763d;
    border-color: #3c763d; }

.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7; }

a.list-group-item-info,
button.list-group-item-info {
  color: #31708f; }
  a.list-group-item-info .list-group-item-heading,
  button.list-group-item-info .list-group-item-heading {
    color: inherit; }
  a.list-group-item-info:hover, a.list-group-item-info:focus,
  button.list-group-item-info:hover,
  button.list-group-item-info:focus {
    color: #31708f;
    background-color: #c4e3f3; }
  a.list-group-item-info.active, a.list-group-item-info.active:hover, a.list-group-item-info.active:focus,
  button.list-group-item-info.active,
  button.list-group-item-info.active:hover,
  button.list-group-item-info.active:focus {
    color: <?= $colorButton ?>;
    background-color: #31708f;
    border-color: #31708f; }

.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3; }

a.list-group-item-warning,
button.list-group-item-warning {
  color: #8a6d3b; }
  a.list-group-item-warning .list-group-item-heading,
  button.list-group-item-warning .list-group-item-heading {
    color: inherit; }
  a.list-group-item-warning:hover, a.list-group-item-warning:focus,
  button.list-group-item-warning:hover,
  button.list-group-item-warning:focus {
    color: #8a6d3b;
    background-color: #faf2cc; }
  a.list-group-item-warning.active, a.list-group-item-warning.active:hover, a.list-group-item-warning.active:focus,
  button.list-group-item-warning.active,
  button.list-group-item-warning.active:hover,
  button.list-group-item-warning.active:focus {
    color: <?= $colorButton ?>;
    background-color: #8a6d3b;
    border-color: #8a6d3b; }

.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede; }

a.list-group-item-danger,
button.list-group-item-danger {
  color: #a94442; }
  a.list-group-item-danger .list-group-item-heading,
  button.list-group-item-danger .list-group-item-heading {
    color: inherit; }
  a.list-group-item-danger:hover, a.list-group-item-danger:focus,
  button.list-group-item-danger:hover,
  button.list-group-item-danger:focus {
    color: #a94442;
    background-color: #ebcccc; }
  a.list-group-item-danger.active, a.list-group-item-danger.active:hover, a.list-group-item-danger.active:focus,
  button.list-group-item-danger.active,
  button.list-group-item-danger.active:hover,
  button.list-group-item-danger.active:focus {
    color: <?= $colorButton ?>;
    background-color: #a94442;
    border-color: #a94442; }

.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px; }

.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3; }

.panel {
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 0;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05); }

.panel-body {
  padding: 15px; }
  .panel-body:before, .panel-body:after {
    content: " ";
    display: table; }
  .panel-body:after {
    clear: both; }

.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: -1;
  border-top-left-radius: -1; }
  .panel-heading > .dropdown .dropdown-toggle {
    color: inherit; }

.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit; }
  .panel-title > a,
  .panel-title > small,
  .panel-title > .small,
  .panel-title > small > a,
  .panel-title > .small > a {
    color: inherit; }

.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: -1;
  border-bottom-left-radius: -1; }

.panel > .list-group,
.panel > .panel-collapse > .list-group {
  margin-bottom: 0; }
  .panel > .list-group .list-group-item,
  .panel > .panel-collapse > .list-group .list-group-item {
    border-width: 1px 0;
    border-radius: 0; }
  .panel > .list-group:first-child .list-group-item:first-child,
  .panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
    border-top: 0;
    border-top-right-radius: -1;
    border-top-left-radius: -1; }
  .panel > .list-group:last-child .list-group-item:last-child,
  .panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
    border-bottom: 0;
    border-bottom-right-radius: -1;
    border-bottom-left-radius: -1; }
.panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0; }

.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0; }

.list-group + .panel-footer {
  border-top-width: 0; }

.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0; }
  .panel > .table caption,
  .panel > .table-responsive > .table caption,
  .panel > .panel-collapse > .table caption {
    padding-left: 15px;
    padding-right: 15px; }
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-right-radius: -1;
  border-top-left-radius: -1; }
  .panel > .table:first-child > thead:first-child > tr:first-child,
  .panel > .table:first-child > tbody:first-child > tr:first-child,
  .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
  .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
    border-top-left-radius: -1;
    border-top-right-radius: -1; }
    .panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
    .panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
      border-top-left-radius: -1; }
    .panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
    .panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
    .panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
    .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
      border-top-right-radius: -1; }
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: -1;
  border-bottom-left-radius: -1; }
  .panel > .table:last-child > tbody:last-child > tr:last-child,
  .panel > .table:last-child > tfoot:last-child > tr:last-child,
  .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
  .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
    border-bottom-left-radius: -1;
    border-bottom-right-radius: -1; }
    .panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
    .panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
      border-bottom-left-radius: -1; }
    .panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
    .panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
    .panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
    .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
      border-bottom-right-radius: -1; }
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid #ddd; }
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0; }
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0; }
  .panel > .table-bordered > thead > tr > th:first-child,
  .panel > .table-bordered > thead > tr > td:first-child,
  .panel > .table-bordered > tbody > tr > th:first-child,
  .panel > .table-bordered > tbody > tr > td:first-child,
  .panel > .table-bordered > tfoot > tr > th:first-child,
  .panel > .table-bordered > tfoot > tr > td:first-child,
  .panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
  .panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
  .panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0; }
  .panel > .table-bordered > thead > tr > th:last-child,
  .panel > .table-bordered > thead > tr > td:last-child,
  .panel > .table-bordered > tbody > tr > th:last-child,
  .panel > .table-bordered > tbody > tr > td:last-child,
  .panel > .table-bordered > tfoot > tr > th:last-child,
  .panel > .table-bordered > tfoot > tr > td:last-child,
  .panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
  .panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
  .panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0; }
  .panel > .table-bordered > thead > tr:first-child > td,
  .panel > .table-bordered > thead > tr:first-child > th,
  .panel > .table-bordered > tbody > tr:first-child > td,
  .panel > .table-bordered > tbody > tr:first-child > th,
  .panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
  .panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
  .panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
  .panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
    border-bottom: 0; }
  .panel > .table-bordered > tbody > tr:last-child > td,
  .panel > .table-bordered > tbody > tr:last-child > th,
  .panel > .table-bordered > tfoot > tr:last-child > td,
  .panel > .table-bordered > tfoot > tr:last-child > th,
  .panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
  .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
    border-bottom: 0; }
.panel > .table-responsive {
  border: 0;
  margin-bottom: 0; }

.panel-group {
  margin-bottom: 20px; }
  .panel-group .panel {
    margin-bottom: 0;
    border-radius: 0; }
    .panel-group .panel + .panel {
      margin-top: 5px; }
  .panel-group .panel-heading {
    border-bottom: 0; }
    .panel-group .panel-heading + .panel-collapse > .panel-body,
    .panel-group .panel-heading + .panel-collapse > .list-group {
      border-top: 1px solid #ddd; }
  .panel-group .panel-footer {
    border-top: 0; }
    .panel-group .panel-footer + .panel-collapse .panel-body {
      border-bottom: 1px solid #ddd; }

.panel-default {
  border-color: #ddd; }
  .panel-default > .panel-heading {
    color: #333333;
    background-color: #f5f5f5;
    border-color: #ddd; }
    .panel-default > .panel-heading + .panel-collapse > .panel-body {
      border-top-color: #ddd; }
    .panel-default > .panel-heading .badge {
      color: #f5f5f5;
      background-color: #333333; }
  .panel-default > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #ddd; }

.panel-primary {
  border-color: #337ab7; }
  .panel-primary > .panel-heading {
    color: <?= $colorButton ?>;
    background-color: #337ab7;
    border-color: #337ab7; }
    .panel-primary > .panel-heading + .panel-collapse > .panel-body {
      border-top-color: #337ab7; }
    .panel-primary > .panel-heading .badge {
      color: #337ab7;
      background-color: #fff; }
  .panel-primary > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #337ab7; }

.panel-success {
  border-color: #d6e9c6; }
  .panel-success > .panel-heading {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6; }
    .panel-success > .panel-heading + .panel-collapse > .panel-body {
      border-top-color: #d6e9c6; }
    .panel-success > .panel-heading .badge {
      color: #dff0d8;
      background-color: #3c763d; }
  .panel-success > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #d6e9c6; }

.panel-info {
  border-color: #bce8f1; }
  .panel-info > .panel-heading {
    color: #31708f;
    background-color: #d9edf7;
    border-color: #bce8f1; }
    .panel-info > .panel-heading + .panel-collapse > .panel-body {
      border-top-color: #bce8f1; }
    .panel-info > .panel-heading .badge {
      color: #d9edf7;
      background-color: #31708f; }
  .panel-info > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #bce8f1; }

.panel-warning {
  border-color: #faebcc; }
  .panel-warning > .panel-heading {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #faebcc; }
    .panel-warning > .panel-heading + .panel-collapse > .panel-body {
      border-top-color: #faebcc; }
    .panel-warning > .panel-heading .badge {
      color: #fcf8e3;
      background-color: #8a6d3b; }
  .panel-warning > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #faebcc; }

.panel-danger {
  border-color: #ebccd1; }
  .panel-danger > .panel-heading {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1; }
    .panel-danger > .panel-heading + .panel-collapse > .panel-body {
      border-top-color: #ebccd1; }
    .panel-danger > .panel-heading .badge {
      color: #f2dede;
      background-color: #a94442; }
  .panel-danger > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #ebccd1; }

.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden; }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    border: 0; }

.embed-responsive-16by9 {
  padding-bottom: 56.25%; }

.embed-responsive-4by3 {
  padding-bottom: 75%; }

.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05); }
  .well blockquote {
    border-color: #ddd;
    border-color: rgba(0, 0, 0, 0.15); }

.well-lg {
  padding: 24px;
  border-radius: 0; }

.well-sm {
  padding: 9px;
  border-radius: 0; }

.close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.2;
  filter: alpha(opacity=20); }
  .close:hover, .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    opacity: 0.5;
    filter: alpha(opacity=50); }

button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none; }

.modal-open {
  overflow: hidden; }

.modal {
  display: none;
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  -webkit-overflow-scrolling: touch;
  outline: 0; }
  .modal.fade .modal-dialog {
    -webkit-transform: translate(0, -25%);
    -ms-transform: translate(0, -25%);
    -o-transform: translate(0, -25%);
    transform: translate(0, -25%);
    -webkit-transition: -webkit-transform 0.3s ease-out;
    -moz-transition: -moz-transform 0.3s ease-out;
    -o-transition: -o-transform 0.3s ease-out;
    transition: transform 0.3s ease-out; }
  .modal.in .modal-dialog {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0); }

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px; }

.modal-content {
  position: relative;
  background-color: #fff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000; }
  .modal-backdrop.fade {
    opacity: 0;
    filter: alpha(opacity=0); }
  .modal-backdrop.in {
    opacity: 0.5;
    filter: alpha(opacity=50); }

.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
  min-height: 16.42857px; }

.modal-header .close {
  margin-top: -2px; }

.modal-title {
  margin: 0;
  line-height: 1.42857; }

.modal-body {
  position: relative;
  padding: 15px; }

.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5; }
  .modal-footer:before, .modal-footer:after {
    content: " ";
    display: table; }
  .modal-footer:after {
    clear: both; }
  .modal-footer .btn + .btn, .modal-footer #agent-section .detail-info .contact-url + .btn, #agent-section .detail-info .modal-footer .contact-url + .btn, .modal-footer #agent-section .detail-info .btn + .contact-url, #agent-section .detail-info .modal-footer .btn + .contact-url, .modal-footer #agent-section .detail-info .contact-url + .contact-url, #agent-section .detail-info .modal-footer .contact-url + .contact-url {
    margin-left: 5px;
    margin-bottom: 0; }
  .modal-footer .btn-group .btn + .btn, .modal-footer .btn-group #agent-section .detail-info .contact-url + .btn, #agent-section .detail-info .modal-footer .btn-group .contact-url + .btn, .modal-footer .btn-group #agent-section .detail-info .btn + .contact-url, #agent-section .detail-info .modal-footer .btn-group .btn + .contact-url, .modal-footer .btn-group #agent-section .detail-info .contact-url + .contact-url, #agent-section .detail-info .modal-footer .btn-group .contact-url + .contact-url {
    margin-left: -1px; }
  .modal-footer .btn-block + .btn-block {
    margin-left: 0; }

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto; }

  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5); }

  .modal-sm {
    width: 300px; } }
@media (min-width: 992px) {
  .modal-lg {
    width: 900px; } }
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.42857;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  font-size: 12px;
  opacity: 0;
  filter: alpha(opacity=0); }
  .tooltip.in {
    opacity: 0.9;
    filter: alpha(opacity=90); }
  .tooltip.top {
    margin-top: -3px;
    padding: 5px 0; }
  .tooltip.right {
    margin-left: 3px;
    padding: 0 5px; }
  .tooltip.bottom {
    margin-top: 3px;
    padding: 5px 0; }
  .tooltip.left {
    margin-left: -3px;
    padding: 0 5px; }

.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: <?= $colorButton ?>;
  text-align: center;
  background-color: #000;
  border-radius: 0; }

.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid; }

.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000; }
.tooltip.top-left .tooltip-arrow {
  bottom: 0;
  right: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000; }
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000; }
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000; }
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000; }
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000; }
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000; }
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000; }

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.42857;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  font-size: 14px;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); }
  .popover.top {
    margin-top: -10px; }
  .popover.right {
    margin-left: 10px; }
  .popover.bottom {
    margin-top: 10px; }
  .popover.left {
    margin-left: -10px; }

.popover-title {
  margin: 0;
  padding: 8px 14px;
  font-size: 14px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: -1 -1 0 0; }

.popover-content {
  padding: 9px 14px; }

.popover > .arrow, .popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid; }

.popover > .arrow {
  border-width: 11px; }

.popover > .arrow:after {
  border-width: 10px;
  content: ""; }

.popover.top > .arrow {
  left: 50%;
  margin-left: -11px;
  border-bottom-width: 0;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.25);
  bottom: -11px; }
  .popover.top > .arrow:after {
    content: " ";
    bottom: 1px;
    margin-left: -10px;
    border-bottom-width: 0;
    border-top-color: #fff; }
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-left-width: 0;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.25); }
  .popover.right > .arrow:after {
    content: " ";
    left: 1px;
    bottom: -10px;
    border-left-width: 0;
    border-right-color: #fff; }
.popover.bottom > .arrow {
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  top: -11px; }
  .popover.bottom > .arrow:after {
    content: " ";
    top: 1px;
    margin-left: -10px;
    border-top-width: 0;
    border-bottom-color: #fff; }
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.25); }
  .popover.left > .arrow:after {
    content: " ";
    right: 1px;
    border-right-width: 0;
    border-left-color: #fff;
    bottom: -10px; }

.carousel {
  position: relative; }

.carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%; }
  .carousel-inner > .item {
    display: none;
    position: relative;
    -webkit-transition: 0.6s ease-in-out left;
    -o-transition: 0.6s ease-in-out left;
    transition: 0.6s ease-in-out left; }
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
      display: block;
      max-width: 100%;
      height: auto;
      line-height: 1; }
    @media all and (transform-3d), (-webkit-transform-3d) {
      .carousel-inner > .item {
        -webkit-transition: -webkit-transform 0.6s ease-in-out;
        -moz-transition: -moz-transform 0.6s ease-in-out;
        -o-transition: -o-transform 0.6s ease-in-out;
        transition: transform 0.6s ease-in-out;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000px;
        -moz-perspective: 1000px;
        perspective: 1000px; }
        .carousel-inner > .item.next, .carousel-inner > .item.active.right {
          -webkit-transform: translate3d(100%, 0, 0);
          transform: translate3d(100%, 0, 0);
          left: 0; }
        .carousel-inner > .item.prev, .carousel-inner > .item.active.left {
          -webkit-transform: translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0);
          left: 0; }
        .carousel-inner > .item.next.left, .carousel-inner > .item.prev.right, .carousel-inner > .item.active {
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
          left: 0; } }
  .carousel-inner > .active,
  .carousel-inner > .next,
  .carousel-inner > .prev {
    display: block; }
  .carousel-inner > .active {
    left: 0; }
  .carousel-inner > .next,
  .carousel-inner > .prev {
    position: absolute;
    top: 0;
    width: 100%; }
  .carousel-inner > .next {
    left: 100%; }
  .carousel-inner > .prev {
    left: -100%; }
  .carousel-inner > .next.left,
  .carousel-inner > .prev.right {
    left: 0; }
  .carousel-inner > .active.left {
    left: -100%; }
  .carousel-inner > .active.right {
    left: 100%; }

.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 15%;
  opacity: 0.5;
  filter: alpha(opacity=50);
  font-size: 20px;
  color: <?= $colorButton ?>;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6); }
  .carousel-control.left {
    background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
    background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1); }
  .carousel-control.right {
    left: auto;
    right: 0;
    background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
    background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1); }
  .carousel-control:hover, .carousel-control:focus {
    outline: 0;
    color: <?= $colorButton ?>;
    text-decoration: none;
    opacity: 0.9;
    filter: alpha(opacity=90); }
  .carousel-control .icon-prev,
  .carousel-control .icon-next,
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right {
    position: absolute;
    top: 50%;
    margin-top: -10px;
    z-index: 5;
    display: inline-block; }
  .carousel-control .icon-prev,
  .carousel-control .glyphicon-chevron-left {
    left: 50%;
    margin-left: -10px; }
  .carousel-control .icon-next,
  .carousel-control .glyphicon-chevron-right {
    right: 50%;
    margin-right: -10px; }
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 20px;
    height: 20px;
    line-height: 1;
    font-family: serif; }
  .carousel-control .icon-prev:before {
    content: '\2039'; }
  .carousel-control .icon-next:before {
    content: '\203a'; }

.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center; }
  .carousel-indicators li {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    border: 1px solid #fff;
    border-radius: 10px;
    cursor: pointer;
    background-color: #000 \9 ;
    background-color: transparent; }
  .carousel-indicators .active {
    margin: 0;
    width: 12px;
    height: 12px;
    background-color: #fff; }

.carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: <?= $colorButton ?>;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6); }
  .carousel-caption .btn, .carousel-caption #agent-section .detail-info .contact-url, #agent-section .detail-info .carousel-caption .contact-url {
    text-shadow: none; }

@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -15px;
    font-size: 30px; }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -15px; }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -15px; }

  .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px; }

  .carousel-indicators {
    bottom: 20px; } }
.clearfix:before, .clearfix:after {
  content: " ";
  display: table; }
.clearfix:after {
  clear: both; }

.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto; }

.pull-right {
  float: right !important; }

.pull-left {
  float: left !important; }

.hide {
  display: none !important; }

.show {
  display: block !important; }

.invisible {
  visibility: hidden; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.hidden {
  display: none !important; }

.affix {
  position: fixed; }

@-ms-viewport {
  width: device-width; }
.visible-xs {
  display: none !important; }

.visible-sm {
  display: none !important; }

.visible-md {
  display: none !important; }

.visible-lg {
  display: none !important; }

.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important; }

@media (max-width: 767px) {
  .visible-xs {
    display: block !important; }

  table.visible-xs {
    display: table !important; }

  tr.visible-xs {
    display: table-row !important; }

  th.visible-xs,
  td.visible-xs {
    display: table-cell !important; } }
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important; } }

@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important; } }

@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important; } }

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important; }

  table.visible-sm {
    display: table !important; }

  tr.visible-sm {
    display: table-row !important; }

  th.visible-sm,
  td.visible-sm {
    display: table-cell !important; } }
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important; } }

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important; } }

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important; } }

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important; }

  table.visible-md {
    display: table !important; }

  tr.visible-md {
    display: table-row !important; }

  th.visible-md,
  td.visible-md {
    display: table-cell !important; } }
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important; } }

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important; } }

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important; } }

@media (min-width: 1200px) {
  .visible-lg {
    display: block !important; }

  table.visible-lg {
    display: table !important; }

  tr.visible-lg {
    display: table-row !important; }

  th.visible-lg,
  td.visible-lg {
    display: table-cell !important; } }
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important; } }

@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important; } }

@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important; } }

@media (max-width: 767px) {
  .hidden-xs {
    display: none !important; } }
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important; } }
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important; } }
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important; } }
.visible-print {
  display: none !important; }

@media print {
  .visible-print {
    display: block !important; }

  table.visible-print {
    display: table !important; }

  tr.visible-print {
    display: table-row !important; }

  th.visible-print,
  td.visible-print {
    display: table-cell !important; } }
.visible-print-block {
  display: none !important; }
  @media print {
    .visible-print-block {
      display: block !important; } }

.visible-print-inline {
  display: none !important; }
  @media print {
    .visible-print-inline {
      display: inline !important; } }

.visible-print-inline-block {
  display: none !important; }
  @media print {
    .visible-print-inline-block {
      display: inline-block !important; } }

@media print {
  .hidden-print {
    display: none !important; } }
/**
 * Fontawesome
 */
/*!
 *  Font Awesome 4.3.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/FontAwesome/fontawesome-webfont.eot?v=4.3.0");
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/FontAwesome/fontawesome-webfont.eot?#iefix&v=4.3.0") format("embedded-opentype"), url("<?php echo get_template_directory_uri(); ?>/assets/fonts/FontAwesome/fontawesome-webfont.woff2?v=4.3.0") format("woff2"), url("<?php echo get_template_directory_uri(); ?>/assets/fonts/FontAwesome/fontawesome-webfont.woff?v=4.3.0") format("woff"), url("<?php echo get_template_directory_uri(); ?>/assets/fonts/FontAwesome/fontawesome-webfont.ttf?v=4.3.0") format("truetype"), url("<?php echo get_template_directory_uri(); ?>/assets/fonts/FontAwesome/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular") format("svg");
  font-weight: normal;
  font-style: normal; }
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  transform: translate(0, 0); }

/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333em;
  line-height: 0.75em;
  vertical-align: -15%; }

.fa-2x {
  font-size: 2em; }

.fa-3x {
  font-size: 3em; }

.fa-4x {
  font-size: 4em; }

.fa-5x {
  font-size: 5em; }

.fa-fw {
  width: 1.28571em;
  text-align: center; }

.fa-ul {
  padding-left: 0;
  margin-left: 2.14286em;
  list-style-type: none; }
  .fa-ul > li {
    position: relative; }

.fa-li {
  position: absolute;
  left: -2.14286em;
  width: 2.14286em;
  top: 0.14286em;
  text-align: center; }
  .fa-li.fa-lg {
    left: -1.85714em; }

.fa-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eee;
  border-radius: .1em; }

.pull-right {
  float: right; }

.pull-left {
  float: left; }

.fa.pull-left {
  margin-right: .3em; }
.fa.pull-right {
  margin-left: .3em; }

.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear; }

.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8); }

@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg); } }
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg); } }
.fa-rotate-90 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg); }

.fa-rotate-180 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg); }

.fa-rotate-270 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg); }

.fa-flip-horizontal {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0);
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1); }

.fa-flip-vertical {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1); }

:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none; }

.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle; }

.fa-stack-1x, .fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center; }

.fa-stack-1x {
  line-height: inherit; }

.fa-stack-2x {
  font-size: 2em; }

.fa-inverse {
  color: <?= $colorButton ?>; }

/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: ""; }

.fa-music:before {
  content: ""; }

.fa-search:before {
  content: ""; }

.fa-envelope-o:before {
  content: ""; }

.fa-heart:before {
  content: ""; }

.fa-star:before {
  content: ""; }

.fa-star-o:before {
  content: ""; }

.fa-user:before {
  content: ""; }

.fa-film:before {
  content: ""; }

.fa-th-large:before {
  content: ""; }

.fa-th:before {
  content: ""; }

.fa-th-list:before {
  content: ""; }

.fa-check:before {
  content: ""; }

.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: ""; }

.fa-search-plus:before {
  content: ""; }

.fa-search-minus:before {
  content: ""; }

.fa-power-off:before {
  content: ""; }

.fa-signal:before {
  content: ""; }

.fa-gear:before,
.fa-cog:before {
  content: ""; }

.fa-trash-o:before {
  content: ""; }

.fa-home:before, #main-header .nav-container .b-header nav > ul > li.home a:before, #breadcrumb-section .breadcrumb ul li.home a:before, #breadcrumb-section .breadcrumb ol li.home a:before {
  content: ""; }

.fa-file-o:before {
  content: ""; }

.fa-clock-o:before {
  content: ""; }

.fa-road:before {
  content: ""; }

.fa-download:before {
  content: ""; }

.fa-arrow-circle-o-down:before {
  content: ""; }

.fa-arrow-circle-o-up:before {
  content: ""; }

.fa-inbox:before {
  content: ""; }

.fa-play-circle-o:before {
  content: ""; }

.fa-rotate-right:before,
.fa-repeat:before {
  content: ""; }

.fa-refresh:before {
  content: ""; }

.fa-list-alt:before {
  content: ""; }

.fa-lock:before {
  content: ""; }

.fa-flag:before {
  content: ""; }

.fa-headphones:before {
  content: ""; }

.fa-volume-off:before {
  content: ""; }

.fa-volume-down:before {
  content: ""; }

.fa-volume-up:before {
  content: ""; }

.fa-qrcode:before {
  content: ""; }

.fa-barcode:before {
  content: ""; }

.fa-tag:before {
  content: ""; }

.fa-tags:before {
  content: ""; }

.fa-book:before {
  content: ""; }

.fa-bookmark:before {
  content: ""; }

.fa-print:before {
  content: ""; }

.fa-camera:before {
  content: ""; }

.fa-font:before {
  content: ""; }

.fa-bold:before {
  content: ""; }

.fa-italic:before {
  content: ""; }

.fa-text-height:before {
  content: ""; }

.fa-text-width:before {
  content: ""; }

.fa-align-left:before {
  content: ""; }

.fa-align-center:before {
  content: ""; }

.fa-align-right:before {
  content: ""; }

.fa-align-justify:before {
  content: ""; }

.fa-list:before {
  content: ""; }

.fa-dedent:before,
.fa-outdent:before {
  content: ""; }

.fa-indent:before {
  content: ""; }

.fa-video-camera:before {
  content: ""; }

.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: ""; }

.fa-pencil:before {
  content: ""; }

.fa-map-marker:before {
  content: ""; }

.fa-adjust:before {
  content: ""; }

.fa-tint:before {
  content: ""; }

.fa-edit:before,
.fa-pencil-square-o:before {
  content: ""; }

.fa-share-square-o:before {
  content: ""; }

.fa-check-square-o:before {
  content: ""; }

.fa-arrows:before {
  content: ""; }

.fa-step-backward:before {
  content: ""; }

.fa-fast-backward:before {
  content: ""; }

.fa-backward:before {
  content: ""; }

.fa-play:before {
  content: ""; }

.fa-pause:before {
  content: ""; }

.fa-stop:before {
  content: ""; }

.fa-forward:before {
  content: ""; }

.fa-fast-forward:before {
  content: ""; }

.fa-step-forward:before {
  content: ""; }

.fa-eject:before {
  content: ""; }

.fa-chevron-left:before {
  content: ""; }

.fa-chevron-right:before {
  content: ""; }

.fa-plus-circle:before {
  content: ""; }

.fa-minus-circle:before {
  content: ""; }

.fa-times-circle:before {
  content: ""; }

.fa-check-circle:before {
  content: ""; }

.fa-question-circle:before {
  content: ""; }

.fa-info-circle:before {
  content: ""; }

.fa-crosshairs:before {
  content: ""; }

.fa-times-circle-o:before {
  content: ""; }

.fa-check-circle-o:before {
  content: ""; }

.fa-ban:before {
  content: ""; }

.fa-arrow-left:before {
  content: ""; }

.fa-arrow-right:before {
  content: ""; }

.fa-arrow-up:before {
  content: ""; }

.fa-arrow-down:before {
  content: ""; }

.fa-mail-forward:before,
.fa-share:before {
  content: ""; }

.fa-expand:before {
  content: ""; }

.fa-compress:before {
  content: ""; }

.fa-plus:before {
  content: ""; }

.fa-minus:before {
  content: ""; }

.fa-asterisk:before {
  content: ""; }

.fa-exclamation-circle:before {
  content: ""; }

.fa-gift:before {
  content: ""; }

.fa-leaf:before {
  content: ""; }

.fa-fire:before {
  content: ""; }

.fa-eye:before {
  content: ""; }

.fa-eye-slash:before {
  content: ""; }

.fa-warning:before,
.fa-exclamation-triangle:before {
  content: ""; }

.fa-plane:before {
  content: ""; }

.fa-calendar:before {
  content: ""; }

.fa-random:before {
  content: ""; }

.fa-comment:before {
  content: ""; }

.fa-magnet:before {
  content: ""; }

.fa-chevron-up:before {
  content: ""; }

.fa-chevron-down:before {
  content: ""; }

.fa-retweet:before {
  content: ""; }

.fa-shopping-cart:before {
  content: ""; }

.fa-folder:before {
  content: ""; }

.fa-folder-open:before {
  content: ""; }

.fa-arrows-v:before {
  content: ""; }

.fa-arrows-h:before {
  content: ""; }

.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: ""; }

.fa-twitter-square:before {
  content: ""; }

.fa-facebook-square:before {
  content: ""; }

.fa-camera-retro:before {
  content: ""; }

.fa-key:before {
  content: ""; }

.fa-gears:before,
.fa-cogs:before {
  content: ""; }

.fa-comments:before {
  content: ""; }

.fa-thumbs-o-up:before {
  content: ""; }

.fa-thumbs-o-down:before {
  content: ""; }

.fa-star-half:before {
  content: ""; }

.fa-heart-o:before {
  content: ""; }

.fa-sign-out:before {
  content: ""; }

.fa-linkedin-square:before {
  content: ""; }

.fa-thumb-tack:before {
  content: ""; }

.fa-external-link:before {
  content: ""; }

.fa-sign-in:before {
  content: ""; }

.fa-trophy:before {
  content: ""; }

.fa-github-square:before {
  content: ""; }

.fa-upload:before {
  content: ""; }

.fa-lemon-o:before {
  content: ""; }

.fa-phone:before {
  content: ""; }

.fa-square-o:before {
  content: ""; }

.fa-bookmark-o:before {
  content: ""; }

.fa-phone-square:before {
  content: ""; }

.fa-twitter:before {
  content: ""; }

.fa-facebook-f:before,
.fa-facebook:before {
  content: ""; }

.fa-github:before {
  content: ""; }

.fa-unlock:before {
  content: ""; }

.fa-credit-card:before {
  content: ""; }

.fa-rss:before {
  content: ""; }

.fa-hdd-o:before {
  content: ""; }

.fa-bullhorn:before {
  content: ""; }

.fa-bell:before {
  content: ""; }

.fa-certificate:before {
  content: ""; }

.fa-hand-o-right:before {
  content: ""; }

.fa-hand-o-left:before {
  content: ""; }

.fa-hand-o-up:before {
  content: ""; }

.fa-hand-o-down:before {
  content: ""; }

.fa-arrow-circle-left:before {
  content: ""; }

.fa-arrow-circle-right:before {
  content: ""; }

.fa-arrow-circle-up:before {
  content: ""; }

.fa-arrow-circle-down:before {
  content: ""; }

.fa-globe:before {
  content: ""; }

.fa-wrench:before {
  content: ""; }

.fa-tasks:before {
  content: ""; }

.fa-filter:before {
  content: ""; }

.fa-briefcase:before {
  content: ""; }

.fa-arrows-alt:before {
  content: ""; }

.fa-group:before,
.fa-users:before {
  content: ""; }

.fa-chain:before,
.fa-link:before {
  content: ""; }

.fa-cloud:before {
  content: ""; }

.fa-flask:before {
  content: ""; }

.fa-cut:before,
.fa-scissors:before {
  content: ""; }

.fa-copy:before,
.fa-files-o:before {
  content: ""; }

.fa-paperclip:before {
  content: ""; }

.fa-save:before,
.fa-floppy-o:before {
  content: ""; }

.fa-square:before {
  content: ""; }

.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: ""; }

.fa-list-ul:before {
  content: ""; }

.fa-list-ol:before {
  content: ""; }

.fa-strikethrough:before {
  content: ""; }

.fa-underline:before {
  content: ""; }

.fa-table:before {
  content: ""; }

.fa-magic:before {
  content: ""; }

.fa-truck:before {
  content: ""; }

.fa-pinterest:before {
  content: ""; }

.fa-pinterest-square:before {
  content: ""; }

.fa-google-plus-square:before {
  content: ""; }

.fa-google-plus:before {
  content: ""; }

.fa-money:before {
  content: ""; }

.fa-caret-down:before {
  content: ""; }

.fa-caret-up:before {
  content: ""; }

.fa-caret-left:before {
  content: ""; }

.fa-caret-right:before {
  content: ""; }

.fa-columns:before {
  content: ""; }

.fa-unsorted:before,
.fa-sort:before {
  content: ""; }

.fa-sort-down:before,
.fa-sort-desc:before {
  content: ""; }

.fa-sort-up:before,
.fa-sort-asc:before {
  content: ""; }

.fa-envelope:before {
  content: ""; }

.fa-linkedin:before {
  content: ""; }

.fa-rotate-left:before,
.fa-undo:before {
  content: ""; }

.fa-legal:before,
.fa-gavel:before {
  content: ""; }

.fa-dashboard:before,
.fa-tachometer:before {
  content: ""; }

.fa-comment-o:before {
  content: ""; }

.fa-comments-o:before {
  content: ""; }

.fa-flash:before,
.fa-bolt:before {
  content: ""; }

.fa-sitemap:before {
  content: ""; }

.fa-umbrella:before {
  content: ""; }

.fa-paste:before,
.fa-clipboard:before {
  content: ""; }

.fa-lightbulb-o:before {
  content: ""; }

.fa-exchange:before {
  content: ""; }

.fa-cloud-download:before {
  content: ""; }

.fa-cloud-upload:before {
  content: ""; }

.fa-user-md:before {
  content: ""; }

.fa-stethoscope:before {
  content: ""; }

.fa-suitcase:before {
  content: ""; }

.fa-bell-o:before {
  content: ""; }

.fa-coffee:before {
  content: ""; }

.fa-cutlery:before {
  content: ""; }

.fa-file-text-o:before {
  content: ""; }

.fa-building-o:before {
  content: ""; }

.fa-hospital-o:before {
  content: ""; }

.fa-ambulance:before {
  content: ""; }

.fa-medkit:before {
  content: ""; }

.fa-fighter-jet:before {
  content: ""; }

.fa-beer:before {
  content: ""; }

.fa-h-square:before {
  content: ""; }

.fa-plus-square:before {
  content: ""; }

.fa-angle-double-left:before {
  content: ""; }

.fa-angle-double-right:before {
  content: ""; }

.fa-angle-double-up:before {
  content: ""; }

.fa-angle-double-down:before {
  content: ""; }

.fa-angle-left:before {
  content: ""; }

.fa-angle-right:before {
  content: ""; }

.fa-angle-up:before {
  content: ""; }

.fa-angle-down:before {
  content: ""; }

.fa-desktop:before {
  content: ""; }

.fa-laptop:before {
  content: ""; }

.fa-tablet:before {
  content: ""; }

.fa-mobile-phone:before,
.fa-mobile:before {
  content: ""; }

.fa-circle-o:before {
  content: ""; }

.fa-quote-left:before {
  content: ""; }

.fa-quote-right:before {
  content: ""; }

.fa-spinner:before {
  content: ""; }

.fa-circle:before {
  content: ""; }

.fa-mail-reply:before,
.fa-reply:before,
.comments-container .comment-box .comment .reply a:before {
  content: ""; }

.fa-github-alt:before {
  content: ""; }

.fa-folder-o:before {
  content: ""; }

.fa-folder-open-o:before {
  content: ""; }

.fa-smile-o:before {
  content: ""; }

.fa-frown-o:before {
  content: ""; }

.fa-meh-o:before {
  content: ""; }

.fa-gamepad:before {
  content: ""; }

.fa-keyboard-o:before {
  content: ""; }

.fa-flag-o:before {
  content: ""; }

.fa-flag-checkered:before {
  content: ""; }

.fa-terminal:before {
  content: ""; }

.fa-code:before {
  content: ""; }

.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: ""; }

.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: ""; }

.fa-location-arrow:before {
  content: ""; }

.fa-crop:before {
  content: ""; }

.fa-code-fork:before {
  content: ""; }

.fa-unlink:before,
.fa-chain-broken:before {
  content: ""; }

.fa-question:before {
  content: ""; }

.fa-info:before {
  content: ""; }

.fa-exclamation:before {
  content: ""; }

.fa-superscript:before {
  content: ""; }

.fa-subscript:before {
  content: ""; }

.fa-eraser:before {
  content: ""; }

.fa-puzzle-piece:before {
  content: ""; }

.fa-microphone:before {
  content: ""; }

.fa-microphone-slash:before {
  content: ""; }

.fa-shield:before {
  content: ""; }

.fa-calendar-o:before {
  content: ""; }

.fa-fire-extinguisher:before {
  content: ""; }

.fa-rocket:before {
  content: ""; }

.fa-maxcdn:before {
  content: ""; }

.fa-chevron-circle-left:before {
  content: ""; }

.fa-chevron-circle-right:before {
  content: ""; }

.fa-chevron-circle-up:before {
  content: ""; }

.fa-chevron-circle-down:before {
  content: ""; }

.fa-html5:before {
  content: ""; }

.fa-css3:before {
  content: ""; }

.fa-anchor:before {
  content: ""; }

.fa-unlock-alt:before {
  content: ""; }

.fa-bullseye:before {
  content: ""; }

.fa-ellipsis-h:before {
  content: ""; }

.fa-ellipsis-v:before {
  content: ""; }

.fa-rss-square:before {
  content: ""; }

.fa-play-circle:before {
  content: ""; }

.fa-ticket:before {
  content: ""; }

.fa-minus-square:before {
  content: ""; }

.fa-minus-square-o:before {
  content: ""; }

.fa-level-up:before {
  content: ""; }

.fa-level-down:before {
  content: ""; }

.fa-check-square:before {
  content: ""; }

.fa-pencil-square:before {
  content: ""; }

.fa-external-link-square:before {
  content: ""; }

.fa-share-square:before {
  content: ""; }

.fa-compass:before {
  content: ""; }

.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: ""; }

.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: ""; }

.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: ""; }

.fa-euro:before,
.fa-eur:before {
  content: ""; }

.fa-gbp:before {
  content: ""; }

.fa-dollar:before,
.fa-usd:before {
  content: ""; }

.fa-rupee:before,
.fa-inr:before {
  content: ""; }

.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: ""; }

.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: ""; }

.fa-won:before,
.fa-krw:before {
  content: ""; }

.fa-bitcoin:before,
.fa-btc:before {
  content: ""; }

.fa-file:before {
  content: ""; }

.fa-file-text:before {
  content: ""; }

.fa-sort-alpha-asc:before {
  content: ""; }

.fa-sort-alpha-desc:before {
  content: ""; }

.fa-sort-amount-asc:before {
  content: ""; }

.fa-sort-amount-desc:before {
  content: ""; }

.fa-sort-numeric-asc:before {
  content: ""; }

.fa-sort-numeric-desc:before {
  content: ""; }

.fa-thumbs-up:before {
  content: ""; }

.fa-thumbs-down:before {
  content: ""; }

.fa-youtube-square:before {
  content: ""; }

.fa-youtube:before {
  content: ""; }

.fa-xing:before {
  content: ""; }

.fa-xing-square:before {
  content: ""; }

.fa-youtube-play:before {
  content: ""; }

.fa-dropbox:before {
  content: ""; }

.fa-stack-overflow:before {
  content: ""; }

.fa-instagram:before {
  content: ""; }

.fa-flickr:before {
  content: ""; }

.fa-adn:before {
  content: ""; }

.fa-bitbucket:before {
  content: ""; }

.fa-bitbucket-square:before {
  content: ""; }

.fa-tumblr:before {
  content: ""; }

.fa-tumblr-square:before {
  content: ""; }

.fa-long-arrow-down:before {
  content: ""; }

.fa-long-arrow-up:before {
  content: ""; }

.fa-long-arrow-left:before {
  content: ""; }

.fa-long-arrow-right:before {
  content: ""; }

.fa-apple:before {
  content: ""; }

.fa-windows:before {
  content: ""; }

.fa-android:before {
  content: ""; }

.fa-linux:before {
  content: ""; }

.fa-dribbble:before {
  content: ""; }

.fa-skype:before {
  content: ""; }

.fa-foursquare:before {
  content: ""; }

.fa-trello:before {
  content: ""; }

.fa-female:before {
  content: ""; }

.fa-male:before {
  content: ""; }

.fa-gittip:before,
.fa-gratipay:before {
  content: ""; }

.fa-sun-o:before {
  content: ""; }

.fa-moon-o:before {
  content: ""; }

.fa-archive:before {
  content: ""; }

.fa-bug:before {
  content: ""; }

.fa-vk:before {
  content: ""; }

.fa-weibo:before {
  content: ""; }

.fa-renren:before {
  content: ""; }

.fa-pagelines:before {
  content: ""; }

.fa-stack-exchange:before {
  content: ""; }

.fa-arrow-circle-o-right:before {
  content: ""; }

.fa-arrow-circle-o-left:before {
  content: ""; }

.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: ""; }

.fa-dot-circle-o:before {
  content: ""; }

.fa-wheelchair:before {
  content: ""; }

.fa-vimeo-square:before {
  content: ""; }

.fa-turkish-lira:before,
.fa-try:before {
  content: ""; }

.fa-plus-square-o:before {
  content: ""; }

.fa-space-shuttle:before {
  content: ""; }

.fa-slack:before {
  content: ""; }

.fa-envelope-square:before {
  content: ""; }

.fa-wordpress:before {
  content: ""; }

.fa-openid:before {
  content: ""; }

.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: ""; }

.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: ""; }

.fa-yahoo:before {
  content: ""; }

.fa-google:before {
  content: ""; }

.fa-reddit:before {
  content: ""; }

.fa-reddit-square:before {
  content: ""; }

.fa-stumbleupon-circle:before {
  content: ""; }

.fa-stumbleupon:before {
  content: ""; }

.fa-delicious:before {
  content: ""; }

.fa-digg:before {
  content: ""; }

.fa-pied-piper:before {
  content: ""; }

.fa-pied-piper-alt:before {
  content: ""; }

.fa-drupal:before {
  content: ""; }

.fa-joomla:before {
  content: ""; }

.fa-language:before {
  content: ""; }

.fa-fax:before {
  content: ""; }

.fa-building:before {
  content: ""; }

.fa-child:before {
  content: ""; }

.fa-paw:before {
  content: ""; }

.fa-spoon:before {
  content: ""; }

.fa-cube:before {
  content: ""; }

.fa-cubes:before {
  content: ""; }

.fa-behance:before {
  content: ""; }

.fa-behance-square:before {
  content: ""; }

.fa-steam:before {
  content: ""; }

.fa-steam-square:before {
  content: ""; }

.fa-recycle:before {
  content: ""; }

.fa-automobile:before,
.fa-car:before {
  content: ""; }

.fa-cab:before,
.fa-taxi:before {
  content: ""; }

.fa-tree:before {
  content: ""; }

.fa-spotify:before {
  content: ""; }

.fa-deviantart:before {
  content: ""; }

.fa-soundcloud:before {
  content: ""; }

.fa-database:before {
  content: ""; }

.fa-file-pdf-o:before {
  content: ""; }

.fa-file-word-o:before {
  content: ""; }

.fa-file-excel-o:before {
  content: ""; }

.fa-file-powerpoint-o:before {
  content: ""; }

.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: ""; }

.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: ""; }

.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: ""; }

.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: ""; }

.fa-file-code-o:before {
  content: ""; }

.fa-vine:before {
  content: ""; }

.fa-codepen:before {
  content: ""; }

.fa-jsfiddle:before {
  content: ""; }

.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: ""; }

.fa-circle-o-notch:before {
  content: ""; }

.fa-ra:before,
.fa-rebel:before {
  content: ""; }

.fa-ge:before,
.fa-empire:before {
  content: ""; }

.fa-git-square:before {
  content: ""; }

.fa-git:before {
  content: ""; }

.fa-hacker-news:before {
  content: ""; }

.fa-tencent-weibo:before {
  content: ""; }

.fa-qq:before {
  content: ""; }

.fa-wechat:before,
.fa-weixin:before {
  content: ""; }

.fa-send:before,
.fa-paper-plane:before {
  content: ""; }

.fa-send-o:before,
.fa-paper-plane-o:before {
  content: ""; }

.fa-history:before {
  content: ""; }

.fa-genderless:before,
.fa-circle-thin:before {
  content: ""; }

.fa-header:before {
  content: ""; }

.fa-paragraph:before {
  content: ""; }

.fa-sliders:before {
  content: ""; }

.fa-share-alt:before {
  content: ""; }

.fa-share-alt-square:before {
  content: ""; }

.fa-bomb:before {
  content: ""; }

.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: ""; }

.fa-tty:before {
  content: ""; }

.fa-binoculars:before {
  content: ""; }

.fa-plug:before {
  content: ""; }

.fa-slideshare:before {
  content: ""; }

.fa-twitch:before {
  content: ""; }

.fa-yelp:before {
  content: ""; }

.fa-newspaper-o:before {
  content: ""; }

.fa-wifi:before {
  content: ""; }

.fa-calculator:before {
  content: ""; }

.fa-paypal:before {
  content: ""; }

.fa-google-wallet:before {
  content: ""; }

.fa-cc-visa:before {
  content: ""; }

.fa-cc-mastercard:before {
  content: ""; }

.fa-cc-discover:before {
  content: ""; }

.fa-cc-amex:before {
  content: ""; }

.fa-cc-paypal:before {
  content: ""; }

.fa-cc-stripe:before {
  content: ""; }

.fa-bell-slash:before {
  content: ""; }

.fa-bell-slash-o:before {
  content: ""; }

.fa-trash:before {
  content: ""; }

.fa-copyright:before {
  content: ""; }

.fa-at:before {
  content: ""; }

.fa-eyedropper:before {
  content: ""; }

.fa-paint-brush:before {
  content: ""; }

.fa-birthday-cake:before {
  content: ""; }

.fa-area-chart:before {
  content: ""; }

.fa-pie-chart:before {
  content: ""; }

.fa-line-chart:before {
  content: ""; }

.fa-lastfm:before {
  content: ""; }

.fa-lastfm-square:before {
  content: ""; }

.fa-toggle-off:before {
  content: ""; }

.fa-toggle-on:before {
  content: ""; }

.fa-bicycle:before {
  content: ""; }

.fa-bus:before {
  content: ""; }

.fa-ioxhost:before {
  content: ""; }

.fa-angellist:before {
  content: ""; }

.fa-cc:before {
  content: ""; }

.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: ""; }

.fa-meanpath:before {
  content: ""; }

.fa-buysellads:before {
  content: ""; }

.fa-connectdevelop:before {
  content: ""; }

.fa-dashcube:before {
  content: ""; }

.fa-forumbee:before {
  content: ""; }

.fa-leanpub:before {
  content: ""; }

.fa-sellsy:before {
  content: ""; }

.fa-shirtsinbulk:before {
  content: ""; }

.fa-simplybuilt:before {
  content: ""; }

.fa-skyatlas:before {
  content: ""; }

.fa-cart-plus:before {
  content: ""; }

.fa-cart-arrow-down:before {
  content: ""; }

.fa-diamond:before {
  content: ""; }

.fa-ship:before {
  content: ""; }

.fa-user-secret:before {
  content: ""; }

.fa-motorcycle:before {
  content: ""; }

.fa-street-view:before {
  content: ""; }

.fa-heartbeat:before {
  content: ""; }

.fa-venus:before {
  content: ""; }

.fa-mars:before {
  content: ""; }

.fa-mercury:before {
  content: ""; }

.fa-transgender:before {
  content: ""; }

.fa-transgender-alt:before {
  content: ""; }

.fa-venus-double:before {
  content: ""; }

.fa-mars-double:before {
  content: ""; }

.fa-venus-mars:before {
  content: ""; }

.fa-mars-stroke:before {
  content: ""; }

.fa-mars-stroke-v:before {
  content: ""; }

.fa-mars-stroke-h:before {
  content: ""; }

.fa-neuter:before {
  content: ""; }

.fa-facebook-official:before {
  content: ""; }

.fa-pinterest-p:before {
  content: ""; }

.fa-whatsapp:before {
  content: ""; }

.fa-server:before {
  content: ""; }

.fa-user-plus:before {
  content: ""; }

.fa-user-times:before {
  content: ""; }

.fa-hotel:before,
.fa-bed:before {
  content: ""; }

.fa-viacoin:before {
  content: ""; }

.fa-train:before {
  content: ""; }

.fa-subway:before {
  content: ""; }

.fa-medium:before {
  content: ""; }

/**
 * Puna fonts
 */
@font-face {
  font-family: 'puna';
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/puna/puna.eot?-wmozmq");
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/puna/puna.eot?#iefix-wmozmq") format("embedded-opentype"), url("<?php echo get_template_directory_uri(); ?>/assets/fonts/puna/puna.ttf?-wmozmq") format("truetype"), url("<?php echo get_template_directory_uri(); ?>/assets/fonts/puna/puna.woff?-wmozmq") format("woff"), url("<?php echo get_template_directory_uri(); ?>/assets/fonts/puna/puna.svg?-wmozmq#puna") format("svg");
  font-weight: normal;
  font-style: normal; }
[class^="puna-ic-"], [class*=" puna-ic-"] {
  font-family: 'puna';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; }

.puna-ic-television:before {
  content: "\e608"; }

.puna-ic-furniture:before {
  content: "\e600"; }

.puna-ic-land-size:before {
  content: "\e601"; }

.puna-ic-building-size:before {
  content: "\e602"; }

.puna-ic-bathroom:before {
  content: "\e603"; }

.puna-ic-bedrooms:before {
  content: "\e604"; }

.puna-ic-maid:before {
  content: "\e605"; }

.puna-ic-swimming-pool:before {
  content: "\e606"; }

.puna-ic-parking:before {
  content: "\e607"; }

/**
* Ravis Social icons
*/
@font-face {
  font-family: 'ravis';
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/ravis-social/ravis.eot?ge29nu");
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/ravis-social/ravis.eot?#iefixge29nu") format("embedded-opentype"), url("<?php echo get_template_directory_uri(); ?>/assets/fonts/ravis-social/ravis.woff?ge29nu") format("woff"), url("<?php echo get_template_directory_uri(); ?>/assets/fonts/ravis-social/ravis.ttf?ge29nu") format("truetype"), url("<?php echo get_template_directory_uri(); ?>/assets/fonts/ravis-social/ravis.svg?ge29nu#icomoon") format("svg");
  font-weight: normal;
  font-style: normal; }
[class^="ravis-icon-"], [class*=" ravis-icon-"] {
  font-family: 'ravis';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; }

.ravis-icon-google-plus:before {
  content: "\ea88"; }

.ravis-icon-google-drive:before {
  content: "\ea8b"; }

.ravis-icon-facebook:before {
  content: "\ea8c"; }

.ravis-icon-instagram:before {
  content: "\ea90"; }

.ravis-icon-twitter:before {
  content: "\ea91"; }

.ravis-icon-feed2:before {
  content: "\ea94"; }

.ravis-icon-youtube:before {
  content: "\ea97"; }

.ravis-icon-twitch:before {
  content: "\ea9b"; }

.ravis-icon-vimeo:before {
  content: "\ea9c"; }

.ravis-icon-lanyrd:before {
  content: "\ea9f"; }

.ravis-icon-flickr:before {
  content: "\eaa0"; }

.ravis-icon-picassa:before {
  content: "\eaa4"; }

.ravis-icon-dribbble:before {
  content: "\eaa6"; }

.ravis-icon-forrst:before {
  content: "\eaa9"; }

.ravis-icon-deviantart:before {
  content: "\eaab"; }

.ravis-icon-steam:before {
  content: "\eaad"; }

.ravis-icon-dropbox:before {
  content: "\eaaf"; }

.ravis-icon-github:before {
  content: "\eab1"; }

.ravis-icon-wordpress:before {
  content: "\eab6"; }

.ravis-icon-joomla:before {
  content: "\eab8"; }

.ravis-icon-blogger:before {
  content: "\eab9"; }

.ravis-icon-tumblr:before {
  content: "\eabb"; }

.ravis-icon-yahoo:before {
  content: "\eabd"; }

.ravis-icon-tux:before {
  content: "\eabe"; }

.ravis-icon-apple:before {
  content: "\eabf"; }

.ravis-icon-finder:before {
  content: "\eac0"; }

.ravis-icon-android:before {
  content: "\eac1"; }

.ravis-icon-windows8:before {
  content: "\eac3"; }

.ravis-icon-soundcloud:before {
  content: "\eac4"; }

.ravis-icon-skype:before {
  content: "\eac6"; }

.ravis-icon-reddit:before {
  content: "\eac7"; }

.ravis-icon-linkedin:before {
  content: "\eac8"; }

.ravis-icon-lastfm:before {
  content: "\eaca"; }

.ravis-icon-delicious:before {
  content: "\eacc"; }

.ravis-icon-stumbleupon:before {
  content: "\eacd"; }

.ravis-icon-stackoverflow:before {
  content: "\eacf"; }

.ravis-icon-pinterest:before {
  content: "\ead0"; }

.ravis-icon-xing:before {
  content: "\ead2"; }

.ravis-icon-foursquare:before {
  content: "\ead5"; }

.ravis-icon-paypal:before {
  content: "\ead6"; }

.ravis-icon-yelp:before {
  content: "\ead9"; }

.ravis-icon-html5:before {
  content: "\eadf"; }

.ravis-icon-git:before {
  content: "\eae2"; }

.ravis-icon-svg:before {
  content: "\eae3"; }

.ravis-icon-codepen:before {
  content: "\eae4"; }

.ravis-icon-chrome:before {
  content: "\eae5"; }

.ravis-icon-firefox:before {
  content: "\eae6"; }

.ravis-icon-IE:before {
  content: "\eae7"; }

.ravis-icon-opera:before {
  content: "\eae8"; }

.ravis-icon-safari:before {
  content: "\eae9"; }

.ravis-icon-IcoMoon:before {
  content: "\eaea"; }

.ravis-icon-digg:before {
  content: "\f1a6"; }

/**
 * Animation.css
 */
@-webkit-keyframes fadeIn {
  0% {
    opacity: 0; }
  100% {
    opacity: 1; } }
@-moz-keyframes fadeIn {
  0% {
    opacity: 0; }
  100% {
    opacity: 1; } }
@-ms-keyframes fadeIn {
  0% {
    opacity: 0; }
  100% {
    opacity: 1; } }
@-o-keyframes fadeIn {
  0% {
    opacity: 0; }
  100% {
    opacity: 1; } }
@keyframes fadeIn {
  0% {
    opacity: 0; }
  100% {
    opacity: 1; } }
@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-20px); }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0); } }
@-moz-keyframes fadeInDown {
  0% {
    opacity: 0;
    -moz-transform: translateY(-20px); }
  100% {
    opacity: 1;
    -moz-transform: translateY(0); } }
@-ms-keyframes fadeInDown {
  0% {
    opacity: 0;
    -ms-transform: translateY(-20px); }
  100% {
    opacity: 1;
    -ms-transform: translateY(0); } }
@-o-keyframes fadeInDown {
  0% {
    opacity: 0;
    -ms-transform: translateY(-20px); }
  100% {
    opacity: 1;
    -ms-transform: translateY(0); } }
@keyframes fadeInDown {
  0% {
    opacity: 0;
    transform: translateY(-20px); }
  100% {
    opacity: 1;
    transform: translateY(0); } }
@-webkit-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-20px); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0); } }
@-moz-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -moz-transform: translateX(-20px); }
  100% {
    opacity: 1;
    -moz-transform: translateX(0); } }
@-ms-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -ms-transform: translateX(-20px); }
  100% {
    opacity: 1;
    -ms-transform: translateX(0); } }
@-o-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -o-transform: translateX(-20px); }
  100% {
    opacity: 1;
    -o-transform: translateX(0); } }
@keyframes fadeInLeft {
  0% {
    opacity: 0;
    transform: translateX(-20px); }
  100% {
    opacity: 1;
    transform: translateX(0); } }
@-webkit-keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(20px); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0); } }
@-moz-keyframes fadeInRight {
  0% {
    opacity: 0;
    -moz-transform: translateX(20px); }
  100% {
    opacity: 1;
    -moz-transform: translateX(0); } }
@-ms-keyframes fadeInRight {
  0% {
    opacity: 0;
    -ms-transform: translateX(20px); }
  100% {
    opacity: 1;
    -ms-transform: translateX(0); } }
@-o-keyframes fadeInRight {
  0% {
    opacity: 0;
    -o-transform: translateX(20px); }
  100% {
    opacity: 1;
    -o-transform: translateX(0); } }
@keyframes fadeInRight {
  0% {
    opacity: 0;
    transform: translateX(20px); }
  100% {
    opacity: 1;
    transform: translateX(0); } }
@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px); }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0); } }
@-moz-keyframes fadeInUp {
  0% {
    opacity: 0;
    -moz-transform: translateY(20px); }
  100% {
    opacity: 1;
    -moz-transform: translateY(0); } }
@-ms-keyframes fadeInUp {
  0% {
    opacity: 0;
    -ms-transform: translateY(20px); }
  100% {
    opacity: 1;
    -ms-transform: translateY(0); } }
@-o-keyframes fadeInUp {
  0% {
    opacity: 0;
    -o-transform: translateY(20px); }
  100% {
    opacity: 1;
    -o-transform: translateY(0); } }
@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(20px); }
  100% {
    opacity: 1;
    transform: translateY(0); } }
@-webkit-keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }
@-moz-keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }
@-ms-keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }
@-o-keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }
@keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }
@-webkit-keyframes fadeOutUpBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px); } }
@-moz-keyframes fadeOutUpBig {
  0% {
    opacity: 1;
    -moz-transform: translateY(0); }
  100% {
    opacity: 0;
    -moz-transform: translateY(-2000px); } }
@-o-keyframes fadeOutUpBig {
  0% {
    opacity: 1;
    -o-transform: translateY(0); }
  100% {
    opacity: 0;
    -o-transform: translateY(-2000px); } }
@keyframes fadeOutUpBig {
  0% {
    opacity: 1;
    transform: translateY(0); }
  100% {
    opacity: 0;
    transform: translateY(-2000px); } }
@-webkit-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg); }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg); }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    opacity: 1; } }
@-moz-keyframes flipInX {
  0% {
    -moz-transform: perspective(400px) rotateX(90deg);
    opacity: 0; }
  40% {
    -moz-transform: perspective(400px) rotateX(-10deg); }
  70% {
    -moz-transform: perspective(400px) rotateX(10deg); }
  100% {
    -moz-transform: perspective(400px) rotateX(0deg);
    opacity: 1; } }
@-o-keyframes flipInX {
  0% {
    -o-transform: perspective(400px) rotateX(90deg);
    opacity: 0; }
  40% {
    -o-transform: perspective(400px) rotateX(-10deg); }
  70% {
    -o-transform: perspective(400px) rotateX(10deg); }
  100% {
    -o-transform: perspective(400px) rotateX(0deg);
    opacity: 1; } }
@keyframes flipInX {
  0% {
    transform: perspective(400px) rotateX(90deg);
    opacity: 0; }
  40% {
    transform: perspective(400px) rotateX(-10deg); }
  70% {
    transform: perspective(400px) rotateX(10deg); }
  100% {
    transform: perspective(400px) rotateX(0deg);
    opacity: 1; } }
@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg); }
  50% {
    -webkit-transform: rotate(180deg); }
  100% {
    -webkit-transform: rotate(180deg); } }
@-moz-keyframes spin {
  0% {
    -moz-transform: rotate(0deg); }
  50% {
    -moz-transform: rotate(180deg); }
  100% {
    -moz-transform: rotate(180deg); } }
@-ms-keyframes spin {
  0% {
    -ms-transform: rotate(0deg); }
  50% {
    -ms-transform: rotate(180deg); }
  100% {
    -ms-transform: rotate(180deg); } }
@-o-keyframes spin {
  0% {
    -o-transform: rotate(0deg); }
  50% {
    -o-transform: rotate(180deg); }
  100% {
    -o-transform: rotate(180deg); } }
@keyframes spin {
  0% {
    transform: rotate(0deg); }
  50% {
    transform: rotate(180deg); }
  100% {
    transform: rotate(180deg); } }
.fadeIn {
  -webkit-animation-name: fadeIn;
  -moz-animation-name: fadeIn;
  -ms-animation-name: fadeIn;
  -o-animation-name: fadeIn;
  animation-name: fadeIn;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  -ms-animation-duration: 1s;
  -o-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 0.2s;
  -moz-animation-delay: 0.2s;
  -ms-animation-delay: 0.2s;
  -o-animation-delay: 0.2s;
  animation-delay: 0.2s;
  -webkit-animation-timing-function: ease;
  -moz-animation-timing-function: ease;
  -ms-animation-timing-function: ease;
  -o-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden; }

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  -moz-animation-name: fadeInDown;
  -ms-animation-name: fadeInDown;
  -o-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  -ms-animation-duration: 1s;
  -o-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 0.2s;
  -moz-animation-delay: 0.2s;
  -ms-animation-delay: 0.2s;
  -o-animation-delay: 0.2s;
  animation-delay: 0.2s;
  -webkit-animation-timing-function: ease;
  -moz-animation-timing-function: ease;
  -ms-animation-timing-function: ease;
  -o-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden; }

.fadeInLeft, .mfp-wrap.mfp-fade .mfp-content {
  -webkit-animation-name: fadeInLeft;
  -moz-animation-name: fadeInLeft;
  -ms-animation-name: fadeInLeft;
  -o-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  -ms-animation-duration: 1s;
  -o-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 0.2s;
  -moz-animation-delay: 0.2s;
  -ms-animation-delay: 0.2s;
  -o-animation-delay: 0.2s;
  animation-delay: 0.2s;
  -webkit-animation-timing-function: ease;
  -moz-animation-timing-function: ease;
  -ms-animation-timing-function: ease;
  -o-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden; }

.fadeInRight {
  -webkit-animation-name: fadeInRight;
  -moz-animation-name: fadeInRight;
  -ms-animation-name: fadeInRight;
  -o-animation-name: fadeInRight;
  animation-name: fadeInRight;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  -ms-animation-duration: 1s;
  -o-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 0.2s;
  -moz-animation-delay: 0.2s;
  -ms-animation-delay: 0.2s;
  -o-animation-delay: 0.2s;
  animation-delay: 0.2s;
  -webkit-animation-timing-function: ease;
  -moz-animation-timing-function: ease;
  -ms-animation-timing-function: ease;
  -o-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden; }

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  -moz-animation-name: fadeInUp;
  -ms-animation-name: fadeInUp;
  -o-animation-name: fadeInUp;
  animation-name: fadeInUp;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  -ms-animation-duration: 1s;
  -o-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 0.2s;
  -moz-animation-delay: 0.2s;
  -ms-animation-delay: 0.2s;
  -o-animation-delay: 0.2s;
  animation-delay: 0.2s;
  -webkit-animation-timing-function: ease;
  -moz-animation-timing-function: ease;
  -ms-animation-timing-function: ease;
  -o-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden; }

.flipInX {
  -webkit-animation-name: flipInX;
  -moz-animation-name: flipInX;
  -ms-animation-name: flipInX;
  -o-animation-name: flipInX;
  animation-name: flipInX;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  -ms-animation-duration: 1s;
  -o-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 0.2s;
  -moz-animation-delay: 0.2s;
  -ms-animation-delay: 0.2s;
  -o-animation-delay: 0.2s;
  animation-delay: 0.2s;
  -webkit-animation-timing-function: ease;
  -moz-animation-timing-function: ease;
  -ms-animation-timing-function: ease;
  -o-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden; }

.spin {
  -webkit-animation-name: spin;
  -moz-animation-name: spin;
  -ms-animation-name: spin;
  -o-animation-name: spin;
  animation-name: spin;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  -ms-animation-duration: 1s;
  -o-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 0.2s;
  -moz-animation-delay: 0.2s;
  -ms-animation-delay: 0.2s;
  -o-animation-delay: 0.2s;
  animation-delay: 0.2s;
  -webkit-animation-timing-function: ease;
  -moz-animation-timing-function: ease;
  -ms-animation-timing-function: ease;
  -o-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden; }

/**
 * Owl Slider styles
 */
/*
 *  Core Owl Carousel CSS File
 *  v1.3.2
 */
/* display none until init */
.owl-carousel {
  direction: ltr;
  display: none;
  position: relative;
  width: 100%;
  margin: 0 auto;
  -ms-touch-action: pan-y; }
  .owl-carousel .owl-wrapper {
    display: none;
    position: relative;
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
    .owl-carousel .owl-wrapper:after {
      content: ".";
      display: block;
      clear: both;
      visibility: hidden;
      line-height: 0;
      height: 0; }
  .owl-carousel .owl-wrapper-outer {
    overflow: hidden;
    position: relative;
    width: 100%; }
    .owl-carousel .owl-wrapper-outer.autoHeight {
      -webkit-transition: height 500ms ease-in-out;
      -o-transition: height 500ms ease-in-out;
      transition: height 500ms ease-in-out; }
  .owl-carousel .owl-item {
    float: left;
    padding: 0;
    overflow: hidden; }
    .owl-carousel .owl-item .item, .owl-carousel .owl-item .items {
      position: relative;
      z-index: 1;
      -webkit-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease; }
      .owl-carousel .owl-item .item img, .owl-carousel .owl-item .items img {
        width: 100%; }
  .owl-carousel .owl-page, .owl-carousel .owl-buttons div {
    cursor: pointer; }
  .owl-carousel .owl-wrapper, .owl-carousel .owl-item {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  .owl-carousel.property-container .owl-item {
    padding: 0; }
  .owl-carousel.not-16-9 .owl-item .items img {
    max-width: none;
    width: auto; }

.owl-controls {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: transparent; }

/* mouse grab icon */
.owl-theme {
  /* Styling Next and Prev buttons */ }
  .owl-theme .owl-controls {
    position: absolute;
    left: 50%;
    bottom: 30px;
    text-align: center;
    z-index: 1;
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    /* Clickable class fix problem with hover on touch devices */
    /* Use it for non-touch hover action */
    /* Styling Pagination*/ }
    @media (max-width: 650px) {
      .owl-theme .owl-controls {
        width: 100%; } }
    .owl-theme .owl-controls .owl-buttons div {
      position: absolute;
      bottom: 30px;
      display: inline-block;
      zoom: 1;
      *display: inline;
      /*IE7 life-saver */
      color: #000000;
      font: 0/0 a;
      color: transparent;
      text-shadow: none;
      background-color: transparent;
      border: 0;
      width: 30px;
      height: 45px; }
      @media (min-width: 768px) and (max-width: 992px) {
        .owl-theme .owl-controls .owl-buttons div {
          bottom: 100%; } }
      @media (max-width: 767px) {
        .owl-theme .owl-controls .owl-buttons div {
          bottom: 100%; } }
      .owl-theme .owl-controls .owl-buttons div:after, .owl-theme .owl-controls .owl-buttons div:before {
        display: block;
        content: "";
        position: absolute;
        left: 0;
        top: 10px;
        width: 30px;
        height: 1px;
        -webkit-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
        background: #000000; }
      .owl-theme .owl-controls .owl-buttons div:before {
        top: 31px; }
      .owl-theme .owl-controls .owl-buttons div:hover:after, .owl-theme .owl-controls .owl-buttons div:hover:before {
        background: #FFFFFF; }
      .owl-theme .owl-controls .owl-buttons div.owl-next {
        right: -145px; }
        .owl-theme .owl-controls .owl-buttons div.owl-next:after {
          -webkit-transform: rotate(45deg);
          -ms-transform: rotate(45deg);
          -o-transform: rotate(45deg);
          transform: rotate(45deg); }
        .owl-theme .owl-controls .owl-buttons div.owl-next:before {
          -webkit-transform: rotate(-45deg);
          -ms-transform: rotate(-45deg);
          -o-transform: rotate(-45deg);
          transform: rotate(-45deg); }
      .owl-theme .owl-controls .owl-buttons div.owl-prev {
        left: -145px; }
        .owl-theme .owl-controls .owl-buttons div.owl-prev:after {
          -webkit-transform: rotate(-45deg);
          -ms-transform: rotate(-45deg);
          -o-transform: rotate(-45deg);
          transform: rotate(-45deg); }
        .owl-theme .owl-controls .owl-buttons div.owl-prev:before {
          -webkit-transform: rotate(45deg);
          -ms-transform: rotate(45deg);
          -o-transform: rotate(45deg);
          transform: rotate(45deg); }
    .owl-theme .owl-controls.clickable .owl-buttons div:hover {
      opacity: 1;
      filter: alpha(opacity=100);
      text-decoration: none; }
    .owl-theme .owl-controls .owl-pagination {
      display: inline-block; }
    .owl-theme .owl-controls .owl-page {
      display: inline-block;
      zoom: 1;
      *display: inline;
      /*IE7 life-saver */ }
    .owl-theme .owl-controls .owl-page span {
      width: 40px;
      height: 10px;
      background: #FFFFFF;
      border: 1px solid #d9d9d9;
      position: relative;
      margin: 5px;
      display: block; }
      .owl-theme .owl-controls .owl-page span:before {
        display: block;
        content: "";
        position: absolute;
        left: -3px;
        top: -3px;
        -webkit-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
        width: calc(100% + 6px);
        height: calc(100% + 6px);
        border: 1px solid #d9d9d9; }
    .owl-theme .owl-controls .owl-page.active span {
      border-color: <?= $principalColor ?>;
      background: <?= $principalColor ?>; }
      .owl-theme .owl-controls .owl-page.active span:before {
        border-color: <?= $principalColor ?>; }
    .owl-theme .owl-controls .owl-page.active span, .owl-theme .owl-controls.clickable .owl-page:hover span {
      background: <?= $principalColor ?>; }

/* preloading images */
.owl-item.loading {
  min-height: 150px;
  background: url(AjaxLoader.gif) no-repeat center center; }

/*!
 * Datepicker for Bootstrap
 *
 * Copyright 2012 Stefan Petre
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 */
.datepicker {
  top: 0;
  left: 0;
  padding: 11px;
  margin-top: 1px;
  /*.dow {
      border-top: 1px solid #ddd !important;
  }*/ }
  @media (max-width: 460px) {
    .datepicker {
      padding: 5px; } }
  .datepicker.datepicker-rtl {
    direction: rtl; }
    .datepicker.datepicker-rtl table tr td span {
      float: right; }
  .datepicker.dropdown-menu {
    -webkit-box-shadow: none;
    box-shadow: none;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
    border: 0;
    border: 1px solid #e6e6e6;
    background: #FFFFFF;
    color: <?= $principalColor ?>; }
  .datepicker > div {
    display: none; }
  .datepicker table {
    width: 100%;
    margin: 0; }
  .datepicker td,
  .datepicker th {
    text-align: center;
    width: 20px;
    height: 20px;
    padding: 7px 12px !important; }
    @media (max-width: 460px) {
      .datepicker td,
      .datepicker th {
        padding: 7px !important; } }
    @media (max-width: 390px) {
      .datepicker td,
      .datepicker th {
        padding: 5px !important; } }
  .datepicker td {
    font-weight: bold;
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease; }
    .datepicker td.day:hover, .datepicker td.today {
      background: #d9d9d9;
      color: #000000;
      cursor: pointer; }
    .datepicker td.day.disabled {
      color: #e6e6e6;
      font-weight: 100;
      cursor: default; }
      .datepicker td.day.disabled:hover {
        background: #FFFFFF; }
    .datepicker td.old, .datepicker td.new {
      color: #e6e6e6;
      font-weight: 100; }
    .datepicker td.selected {
      background: #04076e; }
    .datepicker td.range {
      background: #030656; }
    .datepicker td.active, .datepicker td.active:hover {
      background: <?= $principalColor ?>;
      color: <?= $colorButton ?>; }
    .datepicker td span {
      display: block;
      width: 47px;
      height: 54px;
      line-height: 54px;
      float: left;
      margin: 2px;
      cursor: pointer; }
      .datepicker td span:hover {
        background: rgba(229, 17, 31, 0.7); }
      .datepicker td span.active {
        background: #000000;
        color: <?= $colorButton ?>;
        text-shadow: 0 -1px 0 rgba(229, 17, 31, 0.25); }
      .datepicker td span.old {
        color: <?= $colorText1 ?>; }
  .datepicker th.switch {
    width: 145px; }
  .datepicker th.next, .datepicker th.prev {
    font-size: 21px; }
  .datepicker thead tr:first-child th {
    cursor: pointer;
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease; }
    .datepicker thead tr:first-child th:hover {
      background: <?= $principalColor ?>;
      color: <?= $colorButton ?>; }

.input-append.date .add-on i,
.input-prepend.date .add-on i {
  display: block;
  cursor: pointer;
  width: 16px;
  height: 16px; }

body.white-datepicker .datepicker, body.room-details .datepicker {
  background: #FFFFFF;
  border: 1px solid <?= $principalColor ?>; }
  body.white-datepicker .datepicker td.day:hover, body.white-datepicker .datepicker td.today, body.room-details .datepicker td.day:hover, body.room-details .datepicker td.today {
    background: white;
    color: <?= $principalColor ?>; }
  body.white-datepicker .datepicker td.day.disabled, body.room-details .datepicker td.day.disabled {
    color: #f2f1f6; }
    body.white-datepicker .datepicker td.day.disabled:hover, body.room-details .datepicker td.day.disabled:hover {
      background: #f2f1f6;
      color: <?= $colorButton ?>; }
  body.white-datepicker .datepicker td.old, body.white-datepicker .datepicker td.new, body.room-details .datepicker td.old, body.room-details .datepicker td.new {
    color: #d5d2e2;
    font-weight: 300; }
  body.white-datepicker .datepicker td.selected, body.white-datepicker .datepicker td.selected:hover, body.room-details .datepicker td.selected, body.room-details .datepicker td.selected:hover {
    background: #ef212f;
    color: <?= $colorButton ?>; }
  body.white-datepicker .datepicker td.range, body.room-details .datepicker td.range {
    background: #f2505b; }

/**
 * Magnific Popup Styles
 */
/* Magnific Popup CSS */
.mfp-bg {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1042;
  overflow: hidden;
  position: fixed;
  background: rgba(255, 255, 255, 0.8);
  opacity: 0.8;
  filter: alpha(opacity=80); }
  .mfp-bg.mfp-fade {
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: all 0.6s ease-out;
    -o-transition: all 0.6s ease-out;
    transition: all 0.6s ease-out; }
    .mfp-bg.mfp-fade.mfp-ready {
      opacity: 1;
      filter: alpha(opacity=100); }
    .mfp-bg.mfp-fade.mfp-removing {
      opacity: 0;
      filter: alpha(opacity=0); }

.mfp-wrap {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1043;
  position: fixed;
  outline: none !important;
  -webkit-backface-visibility: hidden; }
  .mfp-wrap.mfp-fade {
    -webkit-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out; }
    .mfp-wrap.mfp-fade.mfp-removing {
      opacity: 0;
      filter: alpha(opacity=0); }

.mfp-container {
  text-align: center;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  padding: 0 8px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

.mfp-container:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle; }

.mfp-align-top .mfp-container:before {
  display: none; }

.mfp-content {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 0 auto;
  text-align: left;
  z-index: 1045; }

.mfp-inline-holder .mfp-content,
.mfp-ajax-holder .mfp-content {
  width: auto;
  cursor: auto; }

.mfp-ajax-cur {
  cursor: progress; }

.mfp-auto-cursor .mfp-content {
  cursor: auto; }

.mfp-close,
.mfp-arrow,
.mfp-preloader,
.mfp-counter {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }

.mfp-loading.mfp-figure {
  display: none; }

.mfp-hide {
  display: none !important; }

.mfp-preloader {
  color: <?= $colorButton ?>;
  position: absolute;
  top: 50%;
  width: auto;
  text-align: center;
  margin-top: -0.8em;
  left: 8px;
  right: 8px;
  z-index: 1044; }
  .mfp-preloader a {
    color: <?= $colorButton ?>; }
    .mfp-preloader a:hover {
      color: #000000; }

.mfp-s-ready .mfp-preloader {
  display: none; }

.mfp-s-error .mfp-content {
  display: none; }

button.mfp-close, button.mfp-arrow {
  overflow: visible;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
  display: block;
  outline: none;
  padding: 0;
  z-index: 1046;
  -webkit-box-shadow: none;
  box-shadow: none; }
button::-moz-focus-inner {
  padding: 0;
  border: 0; }

.mfp-close {
  width: 44px;
  height: 44px;
  line-height: 44px;
  position: absolute;
  right: 2px;
  top: 2px;
  text-decoration: none;
  text-align: center;
  opacity: 0.65;
  background: #FFFFFF !important;
  filter: alpha(opacity=65);
  padding: 0 0 18px 10px;
  color: #4b4e53;
  font-style: normal;
  font-size: 28px;
  font-family: Arial, Baskerville, monospace; }
  .mfp-close:hover, .mfp-close:focus {
    opacity: 1;
    filter: alpha(opacity=100); }
  .mfp-close:active {
    top: 1px; }

.mfp-close-btn-in .mfp-close {
  color: #000000; }

.mfp-counter {
  position: absolute;
  top: 8px;
  right: 65px;
  color: <?= $colorButton ?>;
  font-size: 12px;
  line-height: 25px; }

.mfp-arrow {
  position: absolute;
  margin: 0;
  top: 50%;
  margin-top: -55px;
  padding: 0;
  width: 90px;
  height: 110px;
  -webkit-tap-highlight-color: rgba(229, 17, 31, 0); }
  .mfp-arrow:active {
    margin-top: -54px; }
  .mfp-arrow:hover:before, .mfp-arrow:hover:after,
  .mfp-arrow:hover .mfp-b,
  .mfp-arrow:hover .mfp-a, .mfp-arrow:focus:before, .mfp-arrow:focus:after,
  .mfp-arrow:focus .mfp-b,
  .mfp-arrow:focus .mfp-a {
    background: #000000; }
  .mfp-arrow:before, .mfp-arrow:after,
  .mfp-arrow .mfp-b,
  .mfp-arrow .mfp-a {
    content: '';
    display: block;
    width: 30px;
    height: 1px;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: 35px;
    margin-left: 35px;
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    background: #4b4e53; }
  .mfp-arrow:after, .mfp-arrow .mfp-a {
    top: -7px; }
  .mfp-arrow:before, .mfp-arrow .mfp-b {
    top: 14px; }

.mfp-arrow-left {
  left: 0; }
  .mfp-arrow-left:after, .mfp-arrow-left .mfp-a {
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg); }
  .mfp-arrow-left:before, .mfp-arrow-left .mfp-b {
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg); }

.mfp-arrow-right {
  right: 10px; }
  .mfp-arrow-right:after, .mfp-arrow-right .mfp-a {
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg); }
  .mfp-arrow-right:before, .mfp-arrow-right .mfp-b {
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg); }

.mfp-iframe-holder {
  padding-top: 40px;
  padding-bottom: 40px; }
  .mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 1100px;
    height: 100%; }
  .mfp-iframe-holder .mfp-close {
    top: -40px; }

.mfp-iframe-scaler {
  width: 100%;
  height: 0;
  overflow: hidden;
  padding-top: 56.25%; }
  .mfp-iframe-scaler iframe {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 8px rgba(229, 17, 31, 0.6);
    background: <?= $principalColor ?>; }

/* Main image in popup */
img.mfp-img {
  width: auto;
  height: auto;
  max-width: 100%;
  display: block;
  line-height: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0 0 0;
  margin: 0 auto; }

/* The shadow behind the image */
.mfp-figure {
  line-height: 0; }
  .mfp-figure:after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1; }
  .mfp-figure small {
    color: <?= $colorButton ?>;
    display: block;
    font-size: 12px;
    line-height: 14px; }
  .mfp-figure figure {
    margin: 0; }

.mfp-bottom-bar {
  position: absolute;
  top: 2px;
  left: 2px;
  width: calc(100% - 4px);
  padding: 0 10px;
  cursor: auto;
  background: rgba(0, 0, 0, 0.3); }

.mfp-title {
  text-align: left;
  line-height: 44px;
  color: <?= $colorButton ?>;
  word-wrap: break-word; }

.mfp-image-holder .mfp-content {
  max-width: 100%; }

.mfp-gallery .mfp-image-holder .mfp-figure {
  cursor: pointer; }

@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
  /**
   * Remove all paddings around the image on small screen
   */
  .mfp-img-mobile .mfp-image-holder {
    padding-left: 0;
    padding-right: 0; }
  .mfp-img-mobile img.mfp-img {
    padding: 0; }
  .mfp-img-mobile .mfp-figure:after {
    top: 0;
    bottom: 0; }
  .mfp-img-mobile .mfp-figure small {
    display: inline;
    margin-left: 5px; }
  .mfp-img-mobile .mfp-bottom-bar {
    background: rgba(229, 17, 31, 0.3);
    bottom: 0;
    margin: 0;
    top: auto;
    padding: 3px 5px;
    position: fixed;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box; }
    .mfp-img-mobile .mfp-bottom-bar:empty {
      padding: 0; }
  .mfp-img-mobile .mfp-counter {
    right: 5px;
    top: 3px; }
  .mfp-img-mobile .mfp-close {
    top: 0;
    right: 0;
    width: 35px;
    height: 35px;
    line-height: 35px;
    background: rgba(0, 0, 0, 0.2);
    position: fixed;
    text-align: center;
    padding: 0; } }
@media all and (max-width: 900px) {
  .mfp-arrow {
    -webkit-transform: scale(0.75);
    transform: scale(0.75); }

  .mfp-arrow-left {
    -webkit-transform-origin: 0;
    transform-origin: 0; }

  .mfp-arrow-right {
    -webkit-transform-origin: 100%;
    transform-origin: 100%; }

  .mfp-container {
    padding-left: 6px;
    padding-right: 6px; } }
.mfp-ie7 .mfp-img {
  padding: 0; }
.mfp-ie7 .mfp-bottom-bar {
  width: 600px;
  left: 50%;
  margin-left: -300px;
  margin-top: 5px;
  padding-bottom: 5px; }
.mfp-ie7 .mfp-container {
  padding: 0; }
.mfp-ie7 .mfp-content {
  padding-top: 44px; }
.mfp-ie7 .mfp-close {
  top: 0;
  right: 0;
  padding-top: 0; }

/**
 * Reset the default Styles
 */
/*
 * Required CSS classes
 */
.wp-caption, .gallery-caption, .bypostauthor {
  font-style: inherit;
  background: #FFFFFF;
  padding: 10px; }
  .wp-caption .wp-caption-text, .gallery-caption .wp-caption-text, .bypostauthor .wp-caption-text {
    line-height: 40px; }

.alignright {
  text-align: right;
  float: right;
  margin: 20px 0 20px 20px; }

.alignleft {
  text-align: left;
  float: left;
  margin: 20px 20px 20px 0; }

.aligncenter {
  text-align: center;
  margin: 20px auto; }

.screen-reader-text {
  font-family: inherit; }

.header-sec {
  text-align: center; }
  .header-sec h2 {
    font: 2.5em/1.5em "Playfair Display", Arial, Helvetica, sans-serif;
    display: inline-block;
    margin: 10px 0 60px;
    color: <?= $colorText1 ?>;
    position: relative;
    padding: 20px 40px;
    border-bottom: 1px solid #d9d9d9; }
    @media (max-width: 992px) {
      .header-sec h2 {
        font-size: 1.8em; } }
    .header-sec h2:before, .header-sec h2:after {
      display: block;
      content: "";
      position: absolute;
      background: #FFFFFF;
      border: 1px solid #d9d9d9;
      z-index: 1; }
    .header-sec h2:before {
      bottom: -6px;
      width: 22px;
      height: 12px;
      left: 50%;
      margin-left: -11px; }
    .header-sec h2:after {
      bottom: -4px;
      width: 18px;
      height: 8px;
      left: 50%;
      margin-left: -9px;
      z-index: 2; }
    .header-sec h2 span {
      color: <?= $principalColor ?>; }
  .header-sec .subtitle {
    margin-top: -30px;
    color: <?= $subtitle ?>; }

select {
  display: block;
  width: 100%;
  height: 35px;
  padding: 5px 40px 5px 10px;
  border: 1px solid #e4e1ec;
  outline: none !important;
  background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CgkJCQkJPHN2ZyB3aWR0aD0iNDBweCIgaGVpZ2h0PSIxNXB4IiB2aWV3Qm94PSIwIDAgNDAgMTUiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiPgoJCQkJCSAgICA8ZGVmcz48L2RlZnM+CgkJCQkJICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHNrZXRjaDp0eXBlPSJNU1BhZ2UiPgoJCQkJCSAgICAgICAgPHBhdGggZD0iTTIwLDE1IEwwLDE1IEwxMCwwIEwyMCwxNSBaIiBpZD0iVHJpYW5nbGUtMSIgZmlsbD0icmdiYSgxMDIsMTE0LDEyMSwgMSkiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEwLjAwMDAwMCwgNy41MDAwMDApIHJvdGF0ZSgtMTgwLjAwMDAwMCkgdHJhbnNsYXRlKC0xMC4wMDAwMDAsIC03LjUwMDAwMCkgIj48L3BhdGg+CgkJCQkJICAgIDwvZz4KCQkJCQk8L3N2Zz4=");
  background-position: center right;
  background-repeat: no-repeat;
  background-size: 20px;
  -moz-appearance: none;
  -webkit-appearance: none;
  -webkit-box-shadow: none !important;
  box-shadow: none !important; }
  select:focus, select:hover {
    border-color: #e4e1ec; }

.sort-section-container {
  margin: -25px 0 30px;
  text-align: center; }
  @media (max-width: 1200px) {
    .sort-section-container {
      text-align: center; } }
  .sort-section-container .sort-handle {
    background: #FFFFFF;
    text-align: center;
    color: <?= $colorText1 ?>;
    line-height: 35px;
    position: relative;
    cursor: pointer;
    margin-bottom: 3px;
    border: 2px solid #d9d9d9;
    display: none; }
    @media (max-width: 650px) {
      .sort-section-container .sort-handle {
        display: block; } }
    .sort-section-container .sort-handle:before {
      display: block;
      width: 35px;
      height: 35px;
      background: #d9d9d9;
      color: <?= $colorText1 ?>;
      font-family: "FontAwesome";
      content: "\f107";
      float: left; }
    .sort-section-container .sort-handle:after {
      content: '';
      float: right;
      margin: 15px 12px 0 0;
      width: 0;
      height: 0;
      border-left: 7px solid transparent;
      border-right: 7px solid transparent;
      border-bottom: 7px solid transparent;
      border-top: 7px solid #d9d9d9; }
  .sort-section-container ul {
    margin-left: 0;
    display: inline-block; }
    .sort-section-container ul li a {
      color: <?= $colorText1 ?>;
      line-height: 35px;
      display: inline-block;
      z-index: 1;
      overflow: hidden;
      border-bottom: 1px solid transparent;
      padding: 0 10px;
      -webkit-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease; }
      @media (max-width: 767px) {
        .sort-section-container ul li a {
          padding: 0; } }
      .sort-section-container ul li a:hover, .sort-section-container ul li a.active {
        border-color: <?= $principalColor ?>; }
    @media (max-width: 650px) {
      .sort-section-container ul {
        display: none; }
        .sort-section-container ul li {
          display: block;
          margin-bottom: 3px; }
          .sort-section-container ul li a {
            display: block; } }

.pagination-box {
  margin: 30px 0 50px;
  text-align: center; }
  .pagination-box ul {
    display: inline-block; }
    .pagination-box ul li {
      width: 35px;
      height: 35px;
      margin: 0 3px;
      padding: 0; }
      .pagination-box ul li a, .pagination-box ul li > span {
        display: block;
        background: #FFFFFF;
        color: <?= $principalColor ?>;
        border: 3px double #d9d9d9;
        line-height: 35px; }
        .pagination-box ul li a:hover, .pagination-box ul li a.active, .pagination-box ul li a.current, .pagination-box ul li > span:hover, .pagination-box ul li > span.active, .pagination-box ul li > span.current {
          background: #FFFFFF;
          color: <?= $principalColor ?>;
          border-color: <?= $principalColor ?>; }

.ui-timepicker-wrapper {
  overflow-y: auto;
  width: 200px;
  height: 200px;
  background: #FFFFFF;
  border: 1px solid #e6e6e6;
  outline: none;
  z-index: 10001;
  margin: 0; }
  .ui-timepicker-wrapper .ui-timepicker-list li {
    line-height: 40px;
    padding: 0 10px;
    letter-spacing: 1px;
    border-bottom: 1px solid #e6e6e6;
    cursor: pointer;
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease; }
    .ui-timepicker-wrapper .ui-timepicker-list li:hover {
      background: <?= $principalColor ?>;
      color: <?= $colorButton ?>; }

/*!
 * FullCalendar v2.3.2 Stylesheet
 * Docs & License: http://fullcalendar.io/
 * (c) 2015 Adam Shaw
 */
.fc-state-active, .fc-state-down {
  border: 0; }

.fc-bg, .fc-bgevent-skeleton, .fc-helper-skeleton, .fc-highlight-skeleton {
  position: absolute;
  top: 0;
  left: 0;
  right: 0; }

.fc th, .fc td {
  border-style: solid;
  border-width: 1px;
  padding: 0;
  vertical-align: top; }

.fc-row .fc-content-skeleton td, .fc-row .fc-helper-skeleton td {
  background: 0 0;
  border-color: transparent;
  border-bottom: 0; }

.fc-rtl .fc-h-event.fc-not-end, .fc-ltr .fc-h-event.fc-not-start {
  margin-left: 0;
  border-left-width: 0;
  padding-left: 1px;
  -moz-border-radius-topleft: 0;
  -webkit-border-top-left-radius: 0;
  border-top-left-radius: 0;
  -moz-border-radius-bottomleft: 0;
  -webkit-border-bottom-left-radius: 0;
  border-bottom-left-radius: 0; }

.fc-rtl .fc-h-event.fc-not-start, .fc-ltr .fc-h-event.fc-not-end {
  margin-right: 0;
  border-right-width: 0;
  padding-right: 1px;
  -moz-border-radius-topright: 0;
  -webkit-border-top-right-radius: 0;
  border-top-right-radius: 0;
  -moz-border-radius-bottomright: 0;
  -webkit-border-bottom-right-radius: 0;
  border-bottom-right-radius: 0; }

.fc-time-grid .fc-bgevent-skeleton, .fc-time-grid .fc-content-skeleton {
  position: absolute;
  top: 0;
  left: 0;
  right: 0; }

.fc {
  direction: ltr;
  text-align: left; }
  .fc button {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    height: 40px;
    padding: 0 20px;
    font-size: 1em;
    white-space: nowrap;
    cursor: pointer; }
    .fc button .fc-icon {
      position: relative;
      top: -.05em;
      margin: 0 .2em;
      vertical-align: middle; }
  .fc button::-moz-focus-inner {
    margin: 0;
    padding: 0; }
  .fc .fc-button-group > * {
    float: left;
    margin: 0 0 0 -1px; }
  .fc .fc-button-group > :first-child {
    margin-left: 0; }
  .fc table {
    width: 100%;
    table-layout: fixed;
    border-collapse: collapse;
    border-spacing: 0;
    font-size: 1em; }
  .fc th {
    text-align: center; }
  .fc td.fc-today {
    border-style: double; }
  .fc .fc-row {
    border-style: solid;
    border-width: 0; }
  .fc .fc-axis {
    vertical-align: middle;
    padding: 0 4px;
    white-space: nowrap; }
  .fc .fc-toolbar > * > * {
    float: left;
    margin-left: .75em; }
  .fc .fc-toolbar > * > :first-child {
    margin-left: 0; }

.fc-rtl {
  text-align: right; }
  .fc-rtl .fc-h-event .fc-end-resizer {
    right: auto;
    cursor: w-resize; }
    .fc-rtl .fc-h-event .fc-end-resizer:after {
      right: auto;
      cursor: w-resize; }
    .fc-rtl .fc-h-event .fc-end-resizer:before {
      right: auto;
      cursor: w-resize; }
  .fc-rtl .fc-h-event .fc-start-resizer {
    left: auto;
    cursor: e-resize; }
    .fc-rtl .fc-h-event .fc-start-resizer:after {
      left: auto;
      cursor: e-resize; }
    .fc-rtl .fc-h-event .fc-start-resizer:before {
      left: auto;
      cursor: e-resize; }
  .fc-rtl .fc-axis {
    text-align: left; }
  .fc-rtl .fc-popover .fc-header .fc-close {
    float: left; }
  .fc-rtl .fc-popover .fc-header .fc-title {
    float: right; }
  .fc-rtl .fc-basic-view .fc-day-number {
    text-align: center; }
  .fc-rtl .fc-time-grid .fc-event-container {
    margin: 0 2px 0 2.5%; }
  .fc-rtl .fc-prev-button, .fc-rtl .fc-next-button {
    direction: rtl; }
    .fc-rtl .fc-prev-button .fc-icon, .fc-rtl .fc-next-button .fc-icon {
      line-height: 26px; }

.fc-unthemed .fc-divider {
  border-color: #e6e6e6;
  background: #dedede; }
.fc-unthemed .fc-popover {
  border: 1px solid #e6e6e6;
  background-color: #FFFFFF; }
  .fc-unthemed .fc-popover .fc-header {
    background: #dedede; }
    .fc-unthemed .fc-popover .fc-header .fc-close {
      color: #4b4e53;
      font-size: .9em;
      margin-top: 2px; }
.fc-unthemed .fc-row {
  border-color: #e6e6e6; }
.fc-unthemed tbody {
  border-color: #e6e6e6; }
.fc-unthemed td {
  border-color: #e6e6e6; }
.fc-unthemed th {
  font-family: "Playfair Display", Arial, Helvetica, sans-serif;
  line-height: 50px;
  color: <?= $principalColor ?>;
  border-color: #e6e6e6; }
.fc-unthemed thead {
  border-color: #e6e6e6; }
.fc-unthemed .fc-today {
  background: #ededed; }

.fc-highlight {
  background: <?= $colorText1 ?>;
  opacity: 0.3;
  filter: alpha(opacity=30); }

.fc-bgevent {
  background: <?= $principalColor ?>;
  opacity: 0.3;
  filter: alpha(opacity=30); }

.fc-nonbusiness {
  background: #FFFFFF; }

.fc-icon {
  display: inline-block;
  width: 1em;
  height: 1.3em;
  line-height: 1em;
  font-size: 1em;
  text-align: center;
  overflow: hidden;
  font-family: "Open Sans", Arial, Helvetica, sans-serif;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }
  .fc-icon:after {
    position: relative;
    margin: 0 -1em; }

.fc-state-default {
  border: 1px solid #e6e6e6;
  background-color: #f2f2f2;
  color: #333538; }

.fc-state-active {
  color: #FFFFFF !important;
  background-color: <?= $principalColor ?> !important;
  border-color: <?= $principalColor ?>; }

.fc-state-disabled {
  color: #333538;
  background-color: #ebebeb;
  cursor: default;
  background-image: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none; }

.fc-state-down {
  color: #333538;
  background-color: #d9d9d9; }

.fc-button-group {
  display: inline-block; }

.fc-popover {
  position: absolute;
  -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15); }
  .fc-popover .fc-header {
    padding: 2px 4px; }
    .fc-popover .fc-header .fc-title {
      margin: 0 2px; }
    .fc-popover .fc-header .fc-close {
      cursor: pointer; }
  .fc-popover > .ui-widget-header + .ui-widget-content {
    border-top: 0; }

.fc-ltr .fc-h-event .fc-start-resizer {
  right: auto;
  cursor: w-resize; }
  .fc-ltr .fc-h-event .fc-start-resizer:after, .fc-ltr .fc-h-event .fc-start-resizer:before {
    right: auto;
    cursor: w-resize; }
.fc-ltr .fc-h-event .fc-end-resizer {
  left: auto;
  cursor: e-resize; }
  .fc-ltr .fc-h-event .fc-end-resizer:after, .fc-ltr .fc-h-event .fc-end-resizer:before {
    left: auto;
    cursor: e-resize; }
.fc-ltr .fc-axis {
  text-align: right; }
.fc-ltr .fc-popover .fc-header .fc-title {
  float: left; }
.fc-ltr .fc-popover .fc-header .fc-close {
  float: right; }
.fc-ltr .fc-basic-view .fc-day-number {
  text-align: center; }
.fc-ltr .fc-time-grid .fc-event-container {
  margin: 0 2.5% 0 2px; }

.fc-divider {
  border-style: solid;
  border-width: 1px; }

.fc-clear {
  clear: both; }

.fc-bg {
  bottom: 0; }
  .fc-bg table {
    height: 100%; }

.fc-row {
  position: relative; }
  .fc-row table {
    border-left: 0 hidden transparent;
    border-right: 0 hidden transparent;
    border-bottom: 0 hidden transparent; }
  .fc-row .fc-bg {
    z-index: 1; }
  .fc-row .fc-bgevent-skeleton {
    bottom: 0;
    z-index: 2; }
    .fc-row .fc-bgevent-skeleton table {
      height: 100%; }
    .fc-row .fc-bgevent-skeleton td {
      border-color: transparent; }
  .fc-row .fc-highlight-skeleton {
    bottom: 0;
    z-index: 3; }
    .fc-row .fc-highlight-skeleton table {
      height: 100%; }
    .fc-row .fc-highlight-skeleton td {
      border-color: transparent; }
  .fc-row .fc-content-skeleton {
    position: relative;
    z-index: 4;
    padding-bottom: 2px;
    line-height: 30px; }
    .fc-row .fc-content-skeleton tbody td {
      border-top: 0; }
  .fc-row .fc-helper-skeleton {
    z-index: 5; }
    .fc-row .fc-helper-skeleton tbody td {
      border-top: 0; }
  .fc-row.fc-rigid {
    overflow: hidden; }
    .fc-row.fc-rigid .fc-content-skeleton {
      position: absolute;
      top: 0;
      left: 0;
      right: 0; }
  .fc-row:first-child table {
    border-top: 0 hidden transparent; }

.fc-scroller {
  overflow-y: scroll;
  overflow-x: hidden; }
  .fc-scroller > * {
    position: relative;
    width: 100%;
    overflow: hidden; }

.fc-event {
  position: relative;
  display: block;
  font-size: .9em;
  line-height: 1.7;
  margin: 2px 5px;
  border: 1px solid <?= $principalColor ?>;
  background-color: #FFFFFF;
  font-weight: 400;
  color: <?= $colorText1 ?>;
  text-decoration: none;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease; }
  .fc-event:hover {
    color: <?= $colorText1 ?>;
    border-color: <?= $colorText1 ?>;
    text-decoration: none; }
    .fc-event:hover .fc-time {
      color: <?= $principalColor ?>; }
  .fc-event.fc-draggable {
    cursor: pointer; }
  .fc-event .fc-bg {
    z-index: 1;
    background: #FFFFFF;
    opacity: 0.25;
    filter: alpha(opacity=25); }
  .fc-event .fc-content {
    padding: 0 5px;
    line-height: 30px;
    position: relative;
    z-index: 2; }
  .fc-event .fc-resizer {
    position: absolute;
    z-index: 3; }

.ui-widget .fc-event {
  color: <?= $colorButton ?>;
  text-decoration: none; }
.ui-widget td.fc-axis {
  font-weight: 400; }

.fc-event[href] {
  cursor: pointer; }

.fc-not-allowed {
  cursor: not-allowed; }
  .fc-not-allowed .fc-event {
    cursor: not-allowed; }

.fc-day-grid-event .fc-content {
  white-space: nowrap;
  overflow: hidden;
  text-align: center; }
.fc-day-grid-event .fc-time {
  font-weight: 700;
  display: none;
  width: 25px;
  color: <?= $colorText1 ?>;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease; }
@media (min-width: 768px) and (max-width: 992px) {
  .fc-day-grid-event .fc-time {
    display: block; }
  .fc-day-grid-event .fc-title {
    display: none; } }
.fc-day-grid-event .fc-resizer {
  left: -3px;
  right: -3px;
  width: 7px; }

.fc-limited {
  display: none; }

.fc-more-popover {
  z-index: 2;
  width: 220px; }
  .fc-more-popover .fc-event-container {
    padding: 10px; }

.fc-toolbar {
  text-align: center;
  margin-bottom: 40px; }
  .fc-toolbar .fc-left {
    float: left; }
  .fc-toolbar .fc-right {
    float: right; }
  .fc-toolbar .fc-center {
    font-family: "Playfair Display", Arial, Helvetica, sans-serif;
    display: inline-block;
    line-height: 50px; }
  .fc-toolbar h2 {
    margin: 0; }
  .fc-toolbar button {
    position: relative; }
    .fc-toolbar button:focus {
      z-index: 5;
      outline: none; }
  .fc-toolbar .fc-state-hover {
    z-index: 2; }
  .fc-toolbar .ui-state-hover {
    z-index: 2; }
  .fc-toolbar .fc-state-down {
    z-index: 3; }
  .fc-toolbar .fc-state-active {
    z-index: 4; }
  .fc-toolbar .ui-state-active {
    z-index: 4; }

.fc-view-container * {
  box-sizing: content-box; }
.fc-view-container :after {
  box-sizing: content-box; }
.fc-view-container :before {
  box-sizing: content-box; }

.fc-view {
  position: relative;
  z-index: 1; }
  .fc-view > table {
    position: relative;
    z-index: 1; }

.fc-basic-view .fc-day-number {
  padding: 0 2px; }
.fc-basic-view .fc-week-number {
  padding: 0 2px;
  text-align: center; }
  .fc-basic-view .fc-week-number span {
    display: inline-block;
    min-width: 1.25em; }
.fc-basic-view td.fc-day-number {
  padding-top: 2px;
  padding-bottom: 2px; }
.fc-basic-view td.fc-week-number span {
  padding-top: 2px;
  padding-bottom: 2px; }
.fc-basic-view .fc-body .fc-row {
  min-height: 4em; }

.fc-time-grid {
  position: relative;
  z-index: 1;
  min-height: 100%; }
  .fc-time-grid table {
    border: 0 hidden transparent; }
  .fc-time-grid .fc-slats {
    position: relative;
    z-index: 2; }
    .fc-time-grid .fc-slats td {
      height: 30px;
      border-bottom: 0; }
    .fc-time-grid .fc-slats .ui-widget-content {
      background: 0 0; }
    .fc-time-grid .fc-slats .fc-minor td {
      border-top-style: dotted; }
  .fc-time-grid > hr {
    position: relative;
    z-index: 2; }
  .fc-time-grid .fc-bgevent-skeleton {
    z-index: 3; }
  .fc-time-grid .fc-content-skeleton {
    z-index: 5; }
  .fc-time-grid .fc-highlight-skeleton {
    z-index: 4; }
  .fc-time-grid .fc-helper-skeleton {
    z-index: 6; }
  .fc-time-grid .fc-highlight-container {
    position: relative; }
  .fc-time-grid .fc-highlight {
    position: absolute;
    left: 0;
    right: 0; }
  .fc-time-grid .fc-bgevent-container {
    position: relative; }
  .fc-time-grid .fc-event-container {
    position: relative; }
  .fc-time-grid .fc-bgevent {
    position: absolute;
    z-index: 1;
    left: 0;
    right: 0; }
  .fc-time-grid .fc-event {
    position: absolute;
    z-index: 1; }
  .fc-time-grid > .fc-bg {
    z-index: 1; }

.fc-time-grid-container {
  position: relative;
  z-index: 1; }

.fc-v-event.fc-not-start {
  border-top-width: 0;
  padding-top: 1px;
  -moz-border-radius-topleft: 0;
  -webkit-border-top-left-radius: 0;
  border-top-left-radius: 0;
  -moz-border-radius-topright: 0;
  -webkit-border-top-right-radius: 0;
  border-top-right-radius: 0; }
.fc-v-event.fc-not-end {
  border-bottom-width: 0;
  padding-bottom: 1px;
  -moz-border-radius-bottomleft: 0;
  -webkit-border-bottom-left-radius: 0;
  border-bottom-left-radius: 0;
  -moz-border-radius-bottomright: 0;
  -webkit-border-bottom-right-radius: 0;
  border-bottom-right-radius: 0; }

.fc-time-grid-event {
  overflow: hidden; }
  .fc-time-grid-event .fc-time {
    padding: 0 1px;
    font-size: .85em;
    white-space: nowrap;
    color: <?= $colorText1 ?>;
    font-weight: bold; }
  .fc-time-grid-event .fc-title {
    padding: 0 1px; }
  .fc-time-grid-event.fc-short .fc-content {
    white-space: nowrap; }
  .fc-time-grid-event.fc-short .fc-time {
    display: inline-block;
    vertical-align: top; }
    .fc-time-grid-event.fc-short .fc-time span {
      display: none; }
    .fc-time-grid-event.fc-short .fc-time:before {
      content: attr(data-start); }
    .fc-time-grid-event.fc-short .fc-time:after {
      content: "\000A0-\000A0"; }
  .fc-time-grid-event.fc-short .fc-title {
    display: inline-block;
    vertical-align: top;
    font-size: .85em;
    padding: 0; }
  .fc-time-grid-event .fc-resizer {
    left: 0;
    right: 0;
    bottom: 0;
    height: 8px;
    overflow: hidden;
    line-height: 8px;
    font-size: 11px;
    font-family: "Playfair Display", Arial, Helvetica, sans-serif;
    text-align: center;
    cursor: s-resize; }
    .fc-time-grid-event .fc-resizer:after {
      content: "="; }

body .fc {
  font-size: 1em; }

.fc-icon-left-single-arrow:after {
  content: "\02039";
  font-weight: 700;
  font-size: 200%;
  top: -7%;
  left: 3%; }

.fc-icon-right-single-arrow:after {
  content: "\0203A";
  font-weight: 700;
  font-size: 200%;
  top: -7%;
  left: -3%; }

.fc-icon-left-double-arrow:after {
  content: "\000AB";
  font-size: 160%;
  top: -7%; }

.fc-icon-right-double-arrow:after {
  content: "\000BB";
  font-size: 160%;
  top: -7%; }

.fc-icon-left-triangle:after {
  content: "\25C4";
  font-size: 125%;
  top: 3%;
  left: -2%; }

.fc-icon-right-triangle:after {
  content: "\25BA";
  font-size: 125%;
  top: 3%;
  left: 2%; }

.fc-icon-down-triangle:after {
  content: "\25BC";
  font-size: 125%;
  top: 2%; }

.fc-icon-x:after {
  content: "\000D7";
  font-size: 200%;
  top: 6%; }

hr.fc-divider {
  height: 0;
  margin: 0;
  padding: 0 0 2px;
  border-width: 1px 0; }

.fc-h-event .fc-resizer {
  top: -1px;
  bottom: -1px;
  left: -1px;
  right: -1px;
  width: 5px; }

a.fc-more {
  margin: 1px 3px;
  font-size: .85em;
  cursor: pointer;
  text-decoration: none; }
  a.fc-more:hover {
    text-decoration: underline; }

.fc-day-grid .fc-row {
  z-index: 1; }

.fc-basicDay-view .fc-content-skeleton {
  padding-top: 1px;
  padding-bottom: 1em; }

.fc-basicWeek-view .fc-content-skeleton {
  padding-top: 1px;
  padding-bottom: 1em; }

.fc-day-number.fc-other-month {
  opacity: 0.3;
  filter: alpha(opacity=30); }

.fc-agenda-view .fc-day-grid {
  position: relative;
  z-index: 2; }
  .fc-agenda-view .fc-day-grid .fc-row {
    min-height: 3em; }
    .fc-agenda-view .fc-day-grid .fc-row .fc-content-skeleton {
      padding-top: 1px;
      padding-bottom: 1em; }

html {
  overflow-y: auto;
  overflow-x: hidden; }

body {
  background: #FFFFFF;
  font: 14px/20px "Open Sans", Arial, Helvetica, sans-serif;
  color: <?= $colorText1 ?>;
  padding: 0; }
/*  body.pattern-1 {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/img/pattern/1.png"); }
  body.pattern-2 {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/img/pattern/2.png"); }
  body.pattern-3 {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/img/pattern/3.png"); }
  body.pattern-4 {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/img/pattern/4.png"); }
  body.pattern-5 {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/img/pattern/5.png"); }
  body.pattern-6 {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/img/pattern/6.png"); }
  body.pattern-7 {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/img/pattern/7.png"); }
  body.pattern-8 {
    background: url("<?php echo get_template_directory_uri(); ?>/assets/img/pattern/8.png"); }*/

ul {
  list-style: none;
  padding: 0;
  margin: 0; }

a {
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  color: <?= $colorText1 ?>; }
  a:hover, a:focus, a:active {
    text-decoration: none;
    outline: none !important; }
  a:focus {
    color: <?= $colorText1 ?>; }
  a:hover {
    color: <?= $principalColor ?>; }

input, textarea {
  resize: none; }
  input:focus, textarea:focus {
    border-color: <?= $principalColor ?>;
    outline: none !important; }

.animated-box {
  opacity: 0;
  filter: alpha(opacity=0); }

#main-header {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  border-top: 4px solid <?= $colorText1 ?>;
  -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
  background: #FFFFFF;
  z-index: 10; }
  #main-header .nav-container {
    padding-right: 0; }
    @media (max-width: 1200px) {
      #main-header .nav-container .t-header {
        float: right; } }
    #main-header .nav-container .t-header .lang-box {
      float: right;
      padding-left: 40px;
      margin: 5px 0 0 30px;
      position: relative;
      min-width: 107px; }
      @media (max-width: 390px) {
        #main-header .nav-container .t-header .lang-box {
          display: none; } }
      #main-header .nav-container .t-header .lang-box:before {
        display: block;
        content: "";
        position: absolute;
        top: -5px;
        left: 0;
        width: 1px;
        height: 15px;
        background: #d5d2e2; }
      @media (max-width: 1200px) {
        #main-header .nav-container .t-header .lang-box {
          margin-top: 23px; }
          #main-header .nav-container .t-header .lang-box:before {
            top: -23px; } }
      @media (max-width: 460px) {
        #main-header .nav-container .t-header .lang-box {
          display: none; } }
      #main-header .nav-container .t-header .lang-box select {
        height: 25px;
        font-size: 11px;
        padding: 0 30px 0 10px;
        background-size: 15px; }
    #main-header .nav-container .t-header .contact-info {
      float: right;
      margin-top: 5px;
      font-size: 13px; }
      @media (max-width: 1200px) {
        #main-header .nav-container .t-header .contact-info {
          display: none; } }
      #main-header .nav-container .t-header .contact-info .email {
        margin-left: 40px;
        padding-left: 40px;
        position: relative; }
        #main-header .nav-container .t-header .contact-info .email:before {
          display: block;
          content: "";
          position: absolute;
          top: -5px;
          left: 0;
          width: 1px;
          height: 15px;
          background: #d5d2e2; }
    #main-header .nav-container .b-header {
      margin-top: 35px;
      -webkit-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease; }
      #main-header .nav-container .b-header nav > ul {
        float: right;
        margin: 0;
        position: relative;
        z-index: 1; }
        #main-header .nav-container .b-header nav > ul:before {
          display: block;
          position: absolute;
          left: 0;
          bottom: -3px;
          width: 100%;
          height: 3px;
          content: "";
          background: <?= $colorText1 ?>; }
        #main-header .nav-container .b-header nav > ul a {
          font-size: 13px; }
        #main-header .nav-container .b-header nav > ul > li {
          padding: 0;
          position: relative;
          float: left; }
          #main-header .nav-container .b-header nav > ul > li:before {
            display: block;
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 1px;
            height: 15px;
            background: #d5d2e2; }
          #main-header .nav-container .b-header nav > ul > li > a {
            display: block;
            line-height: 38px;
            padding: 0 25px;
            letter-spacing: 1px; }
          #main-header .nav-container .b-header nav > ul > li ul {
            left: 50%;
            padding: 2px;
            min-width: 150px;
            visibility: hidden;
            position: absolute;
            top: calc(100% + 3px);
            border: 1px solid #FFFFFF;
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
            -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); }
            #main-header .nav-container .b-header nav > ul > li ul > li {
              display: block;
              padding: 0 20px;
              background: #FFFFFF;
              position: relative; }
              #main-header .nav-container .b-header nav > ul > li ul > li:last-child a {
                border-bottom: 0; }
              #main-header .nav-container .b-header nav > ul > li ul > li a {
                white-space: nowrap;
                text-transform: none;
                display: block;
                line-height: 40px;
                text-align: center;
                border-bottom: 1px solid #d5d2e2; }
              #main-header .nav-container .b-header nav > ul > li ul > li.active a, #main-header .nav-container .b-header nav > ul > li ul > li.current-menu-item a {
                color: <?= $principalColor ?>; }
              #main-header .nav-container .b-header nav > ul > li ul > li > ul {
                left: 100%;
                top: 5px;
                -moz-transform: translateX(2px);
                -ms-transform: translateX(2px);
                -webkit-transform: translateX(2px);
                transform: translateX(2px); }
              #main-header .nav-container .b-header nav > ul > li ul > li:hover > ul {
                opacity: 1;
                filter: alpha(opacity=100);
                visibility: visible; }
          #main-header .nav-container .b-header nav > ul > li:hover > ul {
            opacity: 1;
            filter: alpha(opacity=100);
            visibility: visible; }
          #main-header .nav-container .b-header nav > ul > li.home a {
            text-indent: -999999px;
            width: 80px;
            height: 38px;
            text-align: center;
            overflow: hidden; }
            #main-header .nav-container .b-header nav > ul > li.home a:before {
              display: block;
              font-family: "FontAwesome";
              text-indent: 0;
              font-size: 1.5em; }
          #main-header .nav-container .b-header nav > ul > li.active:after, #main-header .nav-container .b-header nav > ul > li.current-menu-item:after, #main-header .nav-container .b-header nav > ul > li.current-menu-parent:after {
            display: block;
            position: absolute;
            left: 0;
            bottom: -3px;
            width: 100%;
            height: 3px;
            content: "";
            background: <?= $principalColor ?>; }
          #main-header .nav-container .b-header nav > ul > li.active > a, #main-header .nav-container .b-header nav > ul > li.current-menu-item > a, #main-header .nav-container .b-header nav > ul > li.current-menu-parent > a {
            color: <?= $principalColor ?>; }
          #main-header .nav-container .b-header nav > ul > li:first-child:before {
            display: none; }
  #main-header.has-booking-btn .nav-container .b-header {
    margin-right: 170px; }

.logo-container {
  padding-left: 0; }

#top-logo {
  position: relative;
  display: block;
  width: 100%;
  height: 107px;
  text-align: center;
  border-top: 4px solid <?= $principalColor ?>;
  margin-top: -4px;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease; }
  #top-logo img {
    margin-top: 10px;
    max-width: 100%; }
  @media (max-width: 1200px) {
    #top-logo {
      font-size: .7em;
      height: 80px; } }
  #top-logo:before {
    display: block;
    content: "";
    position: absolute;
    top: -4px;
    width: 100%;
    height: 4px;
    background: <?= $principalColor ?>; }
  #top-logo .sub-title {
    color: rgba(75, 78, 83, 0.5);
    position: absolute;
    text-transform: lowercase;
    font-size: .8em;
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    left: 65px;
    top: 32px;
    letter-spacing: 2px; }
    @media (max-width: 1200px) {
      #top-logo .sub-title {
        left: 49px;
        top: 22px; } }
    @media (max-width: 460px) {
      #top-logo .sub-title {
        display: none; } }
  #top-logo .title {
    font-family: "Playfair Display", Arial, Helvetica, sans-serif;
    font-size: 3.3em;
    color: <?= $colorText1 ?>;
    position: absolute;
    top: 35px;
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    left: 13px;
    letter-spacing: 5px; }
    @media (max-width: 1200px) {
      #top-logo .title {
        top: 25px; } }
  #top-logo:not(.rtl) .title:first-letter, #top-logo:not(.rtl) .title b {
    font-size: 1.8em;
    font-weight: normal;
    margin-right: -7px; }

#main-menu-handle {
  float: right;
  border: 1px solid #e4e1ec;
  width: 40px;
  height: 40px;
  cursor: pointer;
  line-height: 40px;
  text-align: center;
  margin-top: 16px;
  color: <?= $colorText1 ?>;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease; }
  #main-menu-handle:hover {
    color: <?= $principalColor ?>; }
  #main-menu-handle.active i:before {
    content: "\f00d"; }

#mobile-menu-container {
  border-top: 1px solid #e4e1ec;
  background: #FFFFFF; }
  @media (max-width: 1200px) {
    #mobile-menu-container {
      display: none; } }
  #mobile-menu-container #main-menu li {
    display: block; }
    #mobile-menu-container #main-menu li.active > a, #mobile-menu-container #main-menu li:hover > a {
      color: <?= $principalColor ?>; }
      #mobile-menu-container #main-menu li.active > a:before, #mobile-menu-container #main-menu li:hover > a:before {
        background: <?= $principalColor ?>; }
    #mobile-menu-container #main-menu li a {
      display: block;
      padding: 0 30px;
      line-height: 35px;
      border-bottom: 1px solid #e4e1ec; }
    #mobile-menu-container #main-menu li.current_page_item > a {
      color: <?= $principalColor ?>; }
    #mobile-menu-container #main-menu li > ul li a:after {
      display: block;
      content: "";
      width: 5px;
      height: 5px;
      background: <?= $colorText1 ?>;
      margin: 15px 15px 0 0;
      float: left; }

#header-book-visit-btn {
  display: block;
  border-bottom: 0;
  background: <?= $principalColor ?>;
  color: <?= $colorButton ?>;
  padding: 0;
  text-transform: uppercase;
  -webkit-box-shadow: inset 0 0 0 1px #FFFFFF;
  box-shadow: inset 0 0 0 1px #FFFFFF;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  width: 170px;
  position: absolute;
  bottom: 0;
  right: 0; }
  #header-book-visit-btn:before {
    display: block;
    content: '';
    position: absolute;
    left: 0;
    bottom: -3px;
    width: 100%;
    height: 3px;
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    background: <?= $colorText1 ?>; }
  #header-book-visit-btn .inner-box {
    display: block;
    width: 100%;
    height: 100%;
    overflow: hidden;
    padding: 8px 25px;
    position: relative; }
  #header-book-visit-btn i {
    position: absolute;
    top: 0;
    display: none;
    font-size: 2.5em;
    opacity: 0.3;
    filter: alpha(opacity=30);
    right: 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg); }
  #header-book-visit-btn:hover {
    background: <?= $colorText1 ?>;
    color: <?= $colorButton ?>; }
    #header-book-visit-btn:hover:before {
      background: <?= $principalColor ?>; }
  @media (max-width: 1200px) {
    #header-book-visit-btn {
      position: relative;
      float: right;
      border-bottom: 1px solid transparent;
      margin: 13px 20px 0 0; }
      #header-book-visit-btn .inner-box {
        padding: 10px 25px; }
      #header-book-visit-btn:hover {
        border-bottom-color: <?= $colorText1 ?>; } }
  @media (max-width: 650px) {
    #header-book-visit-btn {
      width: 50px;
      height: 40px; }
      #header-book-visit-btn .inner-box {
        padding: 0; }
      #header-book-visit-btn .text {
        display: none; }
      #header-book-visit-btn i {
        display: block;
        opacity: 0.6;
        filter: alpha(opacity=60); } }

#main-slider {
  width: 100%;
  height: 100%;
  margin: 0; }
  #main-slider .owl-controls {
    bottom: 50%;
    width: 100%; }
    #main-slider .owl-controls .owl-prev, #main-slider .owl-controls .owl-next {
      width: 50px;
      height: 50px; }
      #main-slider .owl-controls .owl-prev:before, #main-slider .owl-controls .owl-next:before {
        font-size: 15px;
        color: <?= $principalColor ?>;
        background: rgba(255, 255, 255, 0.9);
        font-family: "Glyphicons Halflings";
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
        width: 100%;
        height: 100%;
        line-height: 50px;
        text-align: center;
        top: 0; }
      #main-slider .owl-controls .owl-prev:after, #main-slider .owl-controls .owl-next:after {
        display: none; }
    #main-slider .owl-controls .owl-prev {
      left: 0; }
      #main-slider .owl-controls .owl-prev:before {
        content: "\e079"; }
    #main-slider .owl-controls .owl-next {
      right: 0; }
      #main-slider .owl-controls .owl-next:before {
        content: "\e080"; }
  #main-slider .img-container {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center; }
    #main-slider .img-container img {
      position: absolute;
      left: 0;
      top: 50%;
      -moz-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%); }
  #main-slider .items {
    height: 100%; }
  #main-slider .owl-wrapper {
    width: 100% !important;
    height: 600px !important;
    left: 0 !important;
    position: relative;
    -moz-transform: translateX(0) !important;
    -ms-transform: translateX(0) !important;
    -webkit-transform: translateX(0) !important;
    transform: translateX(0) !important; }
  #main-slider .owl-item {
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    filter: alpha(opacity=0);
    visibility: hidden;
    -webkit-transition: all 2s ease;
    -o-transition: all 2s ease;
    transition: all 2s ease;
    width: 100% !important;
    height: 100% !important;
    overflow: hidden; }
    #main-slider .owl-item.active {
      opacity: 1;
      filter: alpha(opacity=100);
      visibility: visible; }
  #main-slider .slide-caption {
    z-index: 1;
    max-width: 100%;
    position: relative;
    bottom: -100%; }
    #main-slider .slide-caption a {
      padding: 30px 40px;
      display: block;
      z-index: 1;
      background: rgba(255, 255, 255, 0.8);
      position: absolute;
      left: 20px;
      bottom: 70px;
      max-width: 90%; }
      @media (max-width: 992px) {
        #main-slider .slide-caption a {
          font-size: .7em;
          left: 50%;
          -moz-transform: translateX(-50%);
          -ms-transform: translateX(-50%);
          -webkit-transform: translateX(-50%);
          transform: translateX(-50%); } }
      #main-slider .slide-caption a:before {
        top: -5px;
        left: -5px;
        content: "";
        display: block;
        z-index: 1;
        position: absolute;
        border: 1px solid #FFFFFF;
        width: calc(100% + 10px);
        height: calc(100% + 10px); }
      #main-slider .slide-caption a .corner-box {
        width: 0;
        height: 0;
        border-bottom: 70px solid <?= $principalColor ?>;
        border-left: 70px solid transparent;
        display: block;
        position: absolute;
        bottom: -10px;
        right: -10px; }
        #main-slider .slide-caption a .corner-box:before {
          display: block;
          content: "";
          position: absolute;
          right: 10px;
          bottom: -60px;
          width: 0;
          height: 0;
          border-bottom: 50px solid rgba(255, 255, 255, 0.5);
          border-left: 50px solid transparent; }
    #main-slider .slide-caption span {
      display: block; }
    #main-slider .slide-caption .title {
      color: <?= $colorText1 ?>;
      font-family: "Playfair Display", Arial, Helvetica, sans-serif;
      font-size: 3em;
      line-height: 1.3em;
      margin-bottom: 20px;
      white-space: nowrap;
      max-width: 100%;
      padding-bottom: 12px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap; }
    #main-slider .slide-caption .subtitle {
      color: <?= $principalColor ?>;
      font-size: 1.3em;
      line-height: 1.2em;
      letter-spacing: 2px;
      font-weight: 300;
      position: relative; }
      #main-slider .slide-caption .subtitle:before {
        display: block;
        content: "";
        position: absolute;
        left: 0;
        top: -18px;
        width: 30%;
        height: 1px;
        background: #d9d9d9; }

#welcome-section, #about-section {
  padding: 60px 15px 110px;
  text-align: center; }
  @media (max-width: 992px) {
    #welcome-section, #about-section {
      padding: 20px 15px 80px; } }
  #welcome-section .content, #about-section .content {
    color: gray;
    line-height: 30px;
    margin-bottom: 60px;
    padding: 0 120px; }
    @media (max-width: 992px) {
      #welcome-section .content, #about-section .content {
        padding: 0; } }
  #welcome-section .btn-row .btn, #about-section .btn-row .btn, #welcome-section .btn-row #agent-section .detail-info .contact-url, #agent-section .detail-info #welcome-section .btn-row .contact-url, #about-section .btn-row #agent-section .detail-info .contact-url, #agent-section .detail-info #about-section .btn-row .contact-url {
    min-width: 200px;
    border-color: <?= $principalColor ?>;
    background: <?= $principalColor ?>;
    color: <?= $colorButton ?>;
    margin: 0 30px;
    line-height: 20px;
    letter-spacing: 1px;
    font-size: 14px;
    -webkit-box-shadow: inset 0 0 0 1px #FFFFFF;
    box-shadow: inset 0 0 0 1px #FFFFFF;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease; }
    @media (max-width: 650px) {
      #welcome-section .btn-row .btn, #about-section .btn-row .btn, #welcome-section .btn-row #agent-section .detail-info .contact-url, #agent-section .detail-info #welcome-section .btn-row .contact-url, #about-section .btn-row #agent-section .detail-info .contact-url, #agent-section .detail-info #about-section .btn-row .contact-url {
        font-size: 13px;
        min-width: 150px;
        margin-bottom: 20px; } }
    #welcome-section .btn-row .btn:focus, #about-section .btn-row .btn:focus, #welcome-section .btn-row #agent-section .detail-info .contact-url:focus, #agent-section .detail-info #welcome-section .btn-row .contact-url:focus, #about-section .btn-row #agent-section .detail-info .contact-url:focus, #agent-section .detail-info #about-section .btn-row .contact-url:focus {
      background-color: #FFFFFF; }
    #welcome-section .btn-row .btn:hover, #about-section .btn-row .btn:hover, #welcome-section .btn-row #agent-section .detail-info .contact-url:hover, #agent-section .detail-info #welcome-section .btn-row .contact-url:hover, #about-section .btn-row #agent-section .detail-info .contact-url:hover, #agent-section .detail-info #about-section .btn-row .contact-url:hover {
      background: none;
      color: <?= $principalColor ?>; }
  #welcome-section.has-image, .has-image#about-section {
    text-align: left;
    padding: 60px 15px 50px; }
    #welcome-section.has-image .content, .has-image#about-section .content {
      padding: 0 20px; }
    #welcome-section.has-image .img-container, .has-image#about-section .img-container {
      position: relative; }
      #welcome-section.has-image .img-container img, .has-image#about-section .img-container img {
        max-width: 100%; }
      #welcome-section.has-image .img-container:before, .has-image#about-section .img-container:before {
        display: block;
        content: "";
        position: absolute;
        left: 5px;
        top: 5px;
        width: calc(100% - 10px);
        height: calc(100% - 10px);
        border: 1px solid #FFFFFF; }

#about-section {
  text-align: left;
  padding: 60px 15px 50px; }
  #about-section .content {
    padding: 0 20px; }
  #about-section .img-container {
    position: relative; }
    #about-section .img-container img {
      max-width: 100%; }
    #about-section .img-container:before {
      display: block;
      content: "";
      position: absolute;
      left: 5px;
      top: 5px;
      width: calc(100% - 10px);
      height: calc(100% - 10px);
      border: 1px solid #FFFFFF; }

#feature-section {
  background-size: cover;
  background-position: center;
  width: 100%;
  height: 550px; }
  #feature-section:before, #feature-section:after {
    content: " ";
    display: table; }
  #feature-section:after {
    clear: both; }
  @media (max-width: 992px) {
    #feature-section {
      height: auto; } }
  #feature-section.active-slide-1 .section-box .section-slide-1 {
    opacity: 1;
    filter: alpha(opacity=100);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -webkit-transform: scale(1);
    transform: scale(1); }
  #feature-section.active-slide-2 .section-box .section-slide-2 {
    opacity: 1;
    filter: alpha(opacity=100);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -webkit-transform: scale(1);
    transform: scale(1); }
  #feature-section.active-slide-3 .section-box .section-slide-3 {
    opacity: 1;
    filter: alpha(opacity=100);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -webkit-transform: scale(1);
    transform: scale(1); }
  #feature-section .section-box {
    height: 550px;
    position: relative;
    border-right: 2px solid #FFFFFF;
    overflow: hidden;
    -webkit-transition: all 0.9s ease;
    -o-transition: all 0.9s ease;
    transition: all 0.9s ease; }
    @media (max-width: 992px) {
      #feature-section .section-box {
        height: 400px; } }
    @media (max-width: 767px) {
      #feature-section .section-box {
        height: 350px; } }
    @media (max-width: 650px) {
      #feature-section .section-box {
        height: 270px; } }
    #feature-section .section-box:last-child {
      border: 0; }
    #feature-section .section-box [class*="section-slide"] {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-size: 300.2%;
      background-repeat: no-repeat;
      opacity: 0;
      filter: alpha(opacity=0);
      -moz-transform: scale(0.9);
      -ms-transform: scale(0.9);
      -webkit-transform: scale(0.9);
      transform: scale(0.9);
      -webkit-transition: all 0.6s ease;
      -o-transition: all 0.6s ease;
      transition: all 0.6s ease; }
    #feature-section .section-box .section-slide-1 {
      background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/features-placeholder.jpg); }
    #feature-section .section-box .section-slide-2 {
      background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/features-placeholder.jpg); }
    #feature-section .section-box .section-slide-3 {
      background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/features-placeholder.jpg); }
    #feature-section .section-box.slide-1 [class*="section-slide"] {
      background-position: center left; }
    #feature-section .section-box.slide-2 [class*="section-slide"] {
      background-position: center center; }
    #feature-section .section-box.slide-3 [class*="section-slide"] {
      background-position: center right; }
    #feature-section .section-box .content {
      position: absolute;
      width: 100%;
      height: 100%;
      left: 0;
      top: 80%;
      z-index: 1;
      text-align: center;
      background: rgba(255, 255, 255, 0.8);
      -webkit-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease;
      border: 4px double transparent; }
      @media (max-width: 767px) {
        #feature-section .section-box .content {
          display: none; } }
      #feature-section .section-box .content ul {
        margin: 30px 50px 10px; }
        #feature-section .section-box .content ul:before, #feature-section .section-box .content ul:after {
          content: " ";
          display: table; }
        #feature-section .section-box .content ul:after {
          clear: both; }
        @media (max-width: 992px) {
          #feature-section .section-box .content ul {
            margin: 10px 20px; } }
        @media (max-width: 650px) {
          #feature-section .section-box .content ul {
            margin: 10px; } }
        #feature-section .section-box .content ul li {
          font-size: 1.2em;
          line-height: 35px;
          margin-bottom: 15px; }
          #feature-section .section-box .content ul li:before, #feature-section .section-box .content ul li:after {
            content: " ";
            display: table; }
          #feature-section .section-box .content ul li:after {
            clear: both; }
          @media (max-width: 992px) {
            #feature-section .section-box .content ul li {
              font-size: 1em; } }
          @media (max-width: 650px) {
            #feature-section .section-box .content ul li {
              line-height: 30px; } }
          #feature-section .section-box .content ul li span {
            display: inline-block;
            width: 50%;
            float: left;
            font-family: "Playfair Display", Arial, Helvetica, sans-serif; }
            #feature-section .section-box .content ul li span.title {
              color: <?= $principalColor ?>;
              padding-right: 20px;
              border-right: 1px solid #cccccc;
              text-align: right; }
              @media (min-width: 768px) and (max-width: 992px) {
                #feature-section .section-box .content ul li span.title {
                  padding-right: 10px; } }
              @media (max-width: 992px) {
                #feature-section .section-box .content ul li span.title {
                  width: 115px; } }
              @media (max-width: 650px) {
                #feature-section .section-box .content ul li span.title {
                  width: 105px; } }
            #feature-section .section-box .content ul li span.value {
              padding-left: 20px;
              text-align: left; }
    #feature-section .section-box .head-title {
      font: 2.2em/3.2em "Playfair Display", Arial, Helvetica, sans-serif;
      color: <?= $colorText1 ?>;
      text-align: center;
      display: inline-block;
      padding: 0 30px;
      -webkit-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease; }
      @media (max-width: 992px) {
        #feature-section .section-box .head-title {
          font-size: 1.7em; } }
      @media (max-width: 650px) {
        #feature-section .section-box .head-title {
          font-size: 1.3em; } }
    #feature-section .section-box:hover .content, #feature-section .section-box.active .content {
      top: 0;
      background: rgba(255, 255, 255, 0.9);
      border-color: #cccccc; }
    #feature-section .section-box:hover .head-title, #feature-section .section-box.active .head-title {
      line-height: 3.7em;
      position: relative;
      margin-bottom: 20px;
      border-bottom: 1px solid #d9d9d9; }
      #feature-section .section-box:hover .head-title:before, #feature-section .section-box:hover .head-title:after, #feature-section .section-box.active .head-title:before, #feature-section .section-box.active .head-title:after {
        display: block;
        content: "";
        position: absolute;
        background: #FFFFFF;
        border: 1px solid #d9d9d9;
        z-index: 1; }
      #feature-section .section-box:hover .head-title:before, #feature-section .section-box.active .head-title:before {
        bottom: -6px;
        width: 22px;
        height: 12px;
        left: 50%;
        margin-left: -11px; }
      #feature-section .section-box:hover .head-title:after, #feature-section .section-box.active .head-title:after {
        bottom: -4px;
        width: 18px;
        height: 8px;
        left: 50%;
        margin-left: -9px;
        z-index: 2; }
  #feature-section [class*="content-box"] {
    padding: 0 20px;
    display: none; }
    #feature-section [class*="content-box"].active {
      display: block; }
    #feature-section [class*="content-box"] ul {
      margin: 10px 50px; }
      #feature-section [class*="content-box"] ul:before, #feature-section [class*="content-box"] ul:after {
        content: " ";
        display: table; }
      #feature-section [class*="content-box"] ul:after {
        clear: both; }
      @media (max-width: 992px) {
        #feature-section [class*="content-box"] ul {
          margin: 10px 20px; } }
      @media (max-width: 650px) {
        #feature-section [class*="content-box"] ul {
          margin: 10px; } }
      #feature-section [class*="content-box"] ul li {
        font-size: 1em;
        line-height: 30px;
        width: 50%;
        float: left; }
        @media (max-width: 650px) {
          #feature-section [class*="content-box"] ul li {
            float: none;
            width: 100%; } }
        #feature-section [class*="content-box"] ul li .title {
          color: <?= $principalColor ?>;
          display: inline-block;
          width: 150px; }
    #feature-section [class*="content-box"] .head-title {
      font: 1.7em/3.7em "Playfair Display", Arial, Helvetica, sans-serif;
      color: <?= $colorText1 ?>;
      text-align: center; }
      @media (max-width: 650px) {
        #feature-section [class*="content-box"] .head-title {
          font-size: 1.3em; } }

#gallery-section {
  padding: 60px 0 100px; }
  #gallery-section img {
    max-width: 100%; }
  #gallery-section .gallery-container {
    padding: 0; }
  #gallery-section .image-main-box {
    border-left: 5px solid #FFFFFF; }
    #gallery-section .image-main-box li {
      padding: 0;
      border: 1px solid #FFFFFF; }
      @media (max-width: 650px) {
        #gallery-section .image-main-box li {
          float: none;
          width: 100%; } }
      #gallery-section .image-main-box li figure {
        position: relative;
        overflow: hidden; }
        #gallery-section .image-main-box li figure a {
          display: block;
          position: absolute;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          z-index: 2;
          text-indent: -999999px; }
        #gallery-section .image-main-box li figure figcaption {
          display: block;
          position: absolute;
          left: 10px;
          top: 10px;
          text-align: center;
          background: rgba(255, 255, 255, 0.9);
          width: calc(100% - 20px);
          height: calc(100% - 20px);
          opacity: 0;
          filter: alpha(opacity=0);
          -webkit-transform: scale(0.9);
          -ms-transform: scale(0.9);
          -o-transform: scale(0.9);
          transform: scale(0.9);
          -webkit-transition: all 0.5s ease;
          -o-transition: all 0.5s ease;
          transition: all 0.5s ease; }
          #gallery-section .image-main-box li figure figcaption h3 {
            display: block;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: 0;
            font: 1.9em/1.5em "Playfair Display", Arial, Helvetica, sans-serif;
            width: 80%;
            -moz-transform: translateX(-50%) translateY(-50%);
            -ms-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%); }
            #gallery-section .image-main-box li figure figcaption h3 span {
              color: <?= $principalColor ?>; }
        #gallery-section .image-main-box li figure:hover figcaption {
          opacity: 1;
          filter: alpha(opacity=100);
          -webkit-transform: scale(1);
          -ms-transform: scale(1);
          -o-transform: scale(1);
          transform: scale(1); }

#agent-section {
  background: #ededed;
  border-top: 5px solid #FFFFFF; }
  #agent-section > .inner-container {
    padding-top: 50px; }
    @media (max-width: 992px) {
      #agent-section > .inner-container {
        padding-bottom: 50px; } }
    @media (max-width: 992px) {
      #agent-section > .inner-container.right {
        padding-bottom: 0; } }
    #agent-section > .inner-container.right .detail-info {
      margin-bottom: 50px; }
  #agent-section .agent-img img {
    margin: 0 auto;
    display: block;
    max-height: 100%;
    width: auto; }
  @media (max-width: 767px) {
    #agent-section .agent-img {
      float: none;
      width: 300px;
      height: 400px;
      text-align: center;
      padding-top: 30px;
      background: #FFFFFF;
      margin: 0 auto;
      border: 4px solid #ededed;
      -webkit-box-shadow: 0 0 0 1px #FFFFFF;
      box-shadow: 0 0 0 1px #FFFFFF; } }
  #agent-section .detail-info {
    margin-top: 60px; }
    @media (max-width: 992px) {
      #agent-section .detail-info {
        margin-top: 0; } }
    @media (max-width: 767px) {
      #agent-section .detail-info {
        float: none;
        width: 100%;
        margin-top: 50px;
        text-align: center; } }
    #agent-section .detail-info .name {
      font: 2.8em/1.5em "Playfair Display", Arial, Helvetica, sans-serif; }
      @media (max-width: 992px) {
        #agent-section .detail-info .name {
          font-size: 2.2em; } }
      #agent-section .detail-info .name span {
        color: <?= $principalColor ?>; }
    #agent-section .detail-info .title {
      font-size: 1.8em;
      line-height: 1.7em;
      font-weight: 300; }
      @media (max-width: 992px) {
        #agent-section .detail-info .title {
          font-size: 1.3em; } }
    #agent-section .detail-info .desc {
      margin: 40px 0;
      line-height: 30px;
      color: gray; }
      @media (max-width: 992px) {
        #agent-section .detail-info .desc {
          margin: 25px 0; } }
    #agent-section .detail-info .contact-info {
      color: gray;
      font-weight: 300;
      margin-bottom: 50px; }
      @media (max-width: 992px) {
        #agent-section .detail-info .contact-info {
          margin-bottom: 30px; } }
      #agent-section .detail-info .contact-info li {
        width: 32.5%;
        margin: 0; }
        @media (max-width: 992px) {
          #agent-section .detail-info .contact-info li {
            text-align: center; } }
        @media (max-width: 650px) {
          #agent-section .detail-info .contact-info li {
            width: 100%; } }
        #agent-section .detail-info .contact-info li i {
          color: <?= $principalColor ?>;
          display: inline-block;
          margin-right: 20px;
          font-size: 1.4em;
          width: 20px; }
          @media (max-width: 992px) {
            #agent-section .detail-info .contact-info li i {
              display: block;
              margin: 15px auto; } }
    #agent-section .detail-info .contact-url {
      border-color: <?= $principalColor ?>;
      background: <?= $principalColor ?>;
      color: <?= $colorButton ?>;
      padding: 10px 40px;
      letter-spacing: 2px;
      -webkit-box-shadow: inset 0 0 0 1px #ededed;
      box-shadow: inset 0 0 0 1px #ededed;
      -webkit-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease; }
      #agent-section .detail-info .contact-url:hover {
        background: none;
        color: <?= $principalColor ?>; }

[id^="contact-agent-"] {
  padding: 30px;
  background: #FFFFFF;
  border: 20px solid #f2f2f2;
  width: 520px;
  margin: 0 auto;
  position: relative; }
  @media (max-width: 650px) {
    [id^="contact-agent-"] {
      width: 100%; } }
  [id^="contact-agent-"] > .wpcf7 input[type="text"], [id^="contact-agent-"] > .wpcf7 input[type="email"], [id^="contact-agent-"] > .wpcf7 input[type="tel"], [id^="contact-agent-"] > .wpcf7 input[type="url"], [id^="contact-agent-"] > .wpcf7 textarea {
    background: none;
    border: 1px solid #f2f2f2;
    width: 100%;
    height: 45px;
    padding: 0 20px;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease; }
    [id^="contact-agent-"] > .wpcf7 input[type="text"]:focus, [id^="contact-agent-"] > .wpcf7 input[type="email"]:focus, [id^="contact-agent-"] > .wpcf7 input[type="tel"]:focus, [id^="contact-agent-"] > .wpcf7 input[type="url"]:focus, [id^="contact-agent-"] > .wpcf7 textarea:focus {
      border-color: rgba(229, 17, 31, 0.5); }
    [id^="contact-agent-"] > .wpcf7 input[type="text"][type="submit"], [id^="contact-agent-"] > .wpcf7 input[type="email"][type="submit"], [id^="contact-agent-"] > .wpcf7 input[type="tel"][type="submit"], [id^="contact-agent-"] > .wpcf7 input[type="url"][type="submit"], [id^="contact-agent-"] > .wpcf7 textarea[type="submit"] {
      background: <?= $principalColor ?>;
      color: <?= $colorButton ?>;
      border: 1px solid <?= $principalColor ?>;
      padding: 8px 25px;
      -webkit-box-shadow: inset 0 0 0 1px #FFFFFF;
      box-shadow: inset 0 0 0 1px #FFFFFF;
      -webkit-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease; }
      [id^="contact-agent-"] > .wpcf7 input[type="text"][type="submit"]:hover, [id^="contact-agent-"] > .wpcf7 input[type="email"][type="submit"]:hover, [id^="contact-agent-"] > .wpcf7 input[type="tel"][type="submit"]:hover, [id^="contact-agent-"] > .wpcf7 input[type="url"][type="submit"]:hover, [id^="contact-agent-"] > .wpcf7 textarea[type="submit"]:hover {
        background: #FFFFFF;
        color: <?= $principalColor ?>; }
  [id^="contact-agent-"] > .wpcf7 .row {
    margin: 0 0 20px; }
    [id^="contact-agent-"] > .wpcf7 .row:last-child {
      margin-bottom: 0; }
    @media (max-width: 650px) {
      [id^="contact-agent-"] > .wpcf7 .row {
        margin-bottom: 0; } }
    [id^="contact-agent-"] > .wpcf7 .row > div:first-child {
      padding-left: 0; }
    [id^="contact-agent-"] > .wpcf7 .row > div:last-child {
      padding-right: 0; }
    @media (max-width: 650px) {
      [id^="contact-agent-"] > .wpcf7 .row > div {
        float: none;
        width: 100%;
        padding: 0; } }
  [id^="contact-agent-"] > .wpcf7 textarea {
    padding: 20px;
    height: 120px; }
  [id^="contact-agent-"] > .wpcf7 .button-container {
    text-align: center;
    margin-bottom: 0; }
    [id^="contact-agent-"] > .wpcf7 .button-container input[type="submit"] {
      background: <?= $principalColor ?>;
      color: <?= $colorButton ?>;
      border: 1px solid <?= $principalColor ?>;
      padding: 8px 25px;
      -webkit-box-shadow: inset 0 0 0 1px #FFFFFF;
      box-shadow: inset 0 0 0 1px #FFFFFF;
      -webkit-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease; }
      [id^="contact-agent-"] > .wpcf7 .button-container input[type="submit"]:hover {
        background: #FFFFFF;
        color: <?= $principalColor ?>; }
  [id^="contact-agent-"] > .wpcf7 .wpcf7-not-valid-tip, [id^="contact-agent-"] > .wpcf7 .wpcf7-validation-errors {
    margin-top: 10px; }
  [id^="contact-agent-"] > .wpcf7 .wpcf7-mail-sent-ok {
    margin-top: 10px; }

#attraction-section {
  padding: 50px 0; }
  #attraction-section .attraction-container {
    margin-top: 80px;
    text-align: center; }
    #attraction-section .attraction-container .attraction-box {
      padding: 0 20px;
      margin-bottom: 40px; }
      #attraction-section .attraction-container .attraction-box:nth-child(2n-2) {
        padding-right: 0; }
      #attraction-section .attraction-container .attraction-box:nth-child(2n-1) {
        padding-left: 0; }
      @media (max-width: 650px) {
        #attraction-section .attraction-container .attraction-box {
          padding: 0 !important; } }
      #attraction-section .attraction-container .attraction-box .inner-box {
        position: relative;
        border: 30px solid #ebebeb;
        -webkit-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease; }
        #attraction-section .attraction-container .attraction-box .inner-box:hover {
          border-color: #d9d9d9; }
          #attraction-section .attraction-container .attraction-box .inner-box:hover .img-container:before {
            opacity: 1;
            filter: alpha(opacity=100); }
          #attraction-section .attraction-container .attraction-box .inner-box:hover .img-container:after {
            opacity: 1;
            filter: alpha(opacity=100);
            -moz-transform: translateX(-50%) translateY(-50%) scale(1);
            -ms-transform: translateX(-50%) translateY(-50%) scale(1);
            -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
            transform: translateX(-50%) translateY(-50%) scale(1); }
          #attraction-section .attraction-container .attraction-box .inner-box:hover .img-container img {
            -moz-transform: translateY(-50%) scale(1.1);
            -ms-transform: translateY(-50%) scale(1.1);
            -webkit-transform: translateY(-50%) scale(1.1);
            transform: translateY(-50%) scale(1.1); }
            @media (max-width: 767px) {
              #attraction-section .attraction-container .attraction-box .inner-box:hover .img-container img {
                -moz-transform: translateY(0) scale(1.1);
                -ms-transform: translateY(0) scale(1.1);
                -webkit-transform: translateY(0) scale(1.1);
                transform: translateY(0) scale(1.1); } }
        #attraction-section .attraction-container .attraction-box .inner-box .img-container {
          display: block;
          position: relative;
          overflow: hidden;
          width: 100%;
          height: 200px;
          -webkit-transition: all 0.5s ease;
          -o-transition: all 0.5s ease;
          transition: all 0.5s ease; }
          #attraction-section .attraction-container .attraction-box .inner-box .img-container:before, #attraction-section .attraction-container .attraction-box .inner-box .img-container:after {
            display: block;
            position: absolute;
            content: "";
            z-index: 1;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease; }
          #attraction-section .attraction-container .attraction-box .inner-box .img-container:before {
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.6); }
          #attraction-section .attraction-container .attraction-box .inner-box .img-container:after {
            width: 50px;
            height: 50px;
            left: 50%;
            top: 50%;
            -moz-transform: translateX(-50%) translateY(-50%) scale(0);
            -ms-transform: translateX(-50%) translateY(-50%) scale(0);
            -webkit-transform: translateX(-50%) translateY(-50%) scale(0);
            transform: translateX(-50%) translateY(-50%) scale(0);
            background: #FFFFFF;
            color: <?= $principalColor ?>;
            font: 1.3em/50px "FontAwesome";
            content: "\f0c1"; }
          @media (max-width: 767px) {
            #attraction-section .attraction-container .attraction-box .inner-box .img-container {
              height: auto; } }
          #attraction-section .attraction-container .attraction-box .inner-box .img-container img {
            max-width: 100%;
            position: absolute;
            left: 0;
            top: 50%;
            -webkit-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
            @media (max-width: 767px) {
              #attraction-section .attraction-container .attraction-box .inner-box .img-container img {
                position: initial;
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -webkit-transform: translateY(0);
                transform: translateY(0); } }
        #attraction-section .attraction-container .attraction-box .inner-box .title {
          font: 1.8em/1.5em "Playfair Display", Arial, Helvetica, sans-serif;
          margin: 30px 0; }
          #attraction-section .attraction-container .attraction-box .inner-box .title a {
            color: <?= $colorText1 ?>; }
            #attraction-section .attraction-container .attraction-box .inner-box .title a:hover {
              color: <?= $principalColor ?>; }
        #attraction-section .attraction-container .attraction-box .inner-box .desc {
          line-height: 30px;
          color: gray;
          padding: 0 40px 40px; }
    #attraction-section .attraction-container .more-attraction {
      border-color: <?= $principalColor ?>;
      color: <?= $colorButton ?>;
      background: <?= $principalColor ?>;
      padding: 8px 60px;
      margin: 40px 0 30px;
      -webkit-box-shadow: inset 0 0 0 1px #FFFFFF;
      box-shadow: inset 0 0 0 1px #FFFFFF; }

      #attraction-section .attraction-container .more-attraction:hover {
        background: none;
        border-color: <?= $principalColor ?>;
        color: <?= $principalColor ?>; }
      #attraction-section .attraction-container.boutons a{
        margin-top: 0px;
      } 
#testimonials-section {
  position: relative;
  z-index: 1;
  padding: 40px 0 120px; }
  #testimonials-section:before {
    position: absolute;
    left: 0;
    top: 0;
    content: "";
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.2);
    z-index: -1; }
  #testimonials-section .header-sec h2 {
    border-bottom-color: #FFFFFF;
    margin-bottom: 80px; }
    #testimonials-section .header-sec h2:before, #testimonials-section .header-sec h2:after {
      display: none; }
  #testimonials-section .owl-item {
    padding: 5px;
    border: 1px solid #FFFFFF; }
  #testimonials-section .item {
    background: #FFFFFF;
    padding: 60px 170px 100px;
    text-align: center; }
    @media (max-width: 650px) {
      #testimonials-section .item {
        padding: 60px 80px 90px; } }
    #testimonials-section .item .user {
      font: 2em/2.7em "Playfair Display", Arial, Helvetica, sans-serif; }
      #testimonials-section .item .user span {
        color: <?= $principalColor ?>; }
    #testimonials-section .item .text {
      color: gray;
      line-height: 30px;
      position: relative; }
      #testimonials-section .item .text:before, #testimonials-section .item .text:after {
        font: 2em/1em "FontAwesome";
        color: <?= $principalColor ?>;
        position: absolute; }
      #testimonials-section .item .text:before {
        content: "\f10d";
        top: -40px;
        left: -40px; }
      #testimonials-section .item .text:after {
        content: "\f10e";
        right: -40px;
        bottom: -40px; }
  #testimonials-section .owl-theme .owl-controls {
    bottom: -60px; }
    #testimonials-section .owl-theme .owl-controls .owl-page span {
      width: 30px;
      height: 6px;
      background: #FFFFFF; }
    #testimonials-section .owl-theme .owl-controls .owl-page.active span {
      background: <?= $principalColor ?>; }

#contact-section {
  padding: 1px;
  background: #FFFFFF;
  position: relative; }
  #contact-section .contact-container {
    margin: 80px auto;
    padding: 0;
    border: 30px solid #ebebeb; }
    #contact-section .contact-container .header-sec h2 {
      font-size: 28px;
      margin: 0 0 40px; }
    #contact-section .contact-container .contact-box {
      background: #FFFFFF;
      padding: 50px 60px 80px;
      -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); }
      @media (max-width: 650px) {
        #contact-section .contact-container .contact-box {
          float: none;
          width: 100%;
          padding: 30px 20px 40px; } }
      #contact-section .contact-container .contact-box .desc {
        line-height: 30px;
        text-align: center;
        color: #a6a6a6; }
      #contact-section .contact-container .contact-box .contact-info {
        margin: 40px 0; }
        #contact-section .contact-container .contact-box .contact-info li {
          margin-bottom: 14px;
          padding-left: 40px;
          position: relative;
          line-height: 30px; }
          #contact-section .contact-container .contact-box .contact-info li i {
            position: absolute;
            left: 0;
            top: 6px;
            color: <?= $principalColor ?>;
            display: inline-block;
            width: 20px;
            font-size: 1.3em;
            text-align: center; }
          @media (max-width: 650px) {
            #contact-section .contact-container .contact-box .contact-info li {
              padding-left: 0;
              text-align: center; }
              #contact-section .contact-container .contact-box .contact-info li i {
                position: initial;
                display: block;
                margin: 20px auto; } }
      #contact-section .contact-container .contact-box .visit-request {
        display: block;
        margin: 0;
        background: <?= $principalColor ?>;
        color: <?= $colorButton ?>;
        padding: 12px 30px;
        -webkit-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
        border: 1px solid <?= $principalColor ?>;
        -webkit-box-shadow: inset 0 0 0 1px #FFFFFF;
        box-shadow: inset 0 0 0 1px #FFFFFF; }
        #contact-section .contact-container .contact-box .visit-request:hover {
          background: #FFFFFF;
          color: <?= $principalColor ?>; }
  #contact-section .map-container {
    padding: 0;
    -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); }
    @media (max-width: 650px) {
      #contact-section .map-container {
        float: none;
        width: 100%; } }
  #contact-section #map {
    width: 100%;
    height: 100%; }

#top-footer {
  background: #f2f2f2;
  padding: 80px 0; }
  #top-footer img {
    max-width: 100%; }
  #top-footer .widget {
    padding: 0 40px; }
    @media (max-width: 992px) {
      #top-footer .widget {
        padding: 0 15px; } }
    #top-footer .widget:first-child {
      padding-left: 0; }
    #top-footer .widget:last-child {
      padding-right: 0; }
    @media (max-width: 650px) {
      #top-footer .widget {
        float: none;
        width: 100%;
        padding: 0 40px !important;
        margin-bottom: 30px; }
        #top-footer .widget:last-child {
          margin-bottom: 0; } }
    #top-footer .widget h4 {
      font: 1.9em/2em "Playfair Display", Arial, Helvetica, sans-serif;
      margin-bottom: 30px; }
    #top-footer .widget .widget-content, #top-footer .widget .textwidget {
      color: #999999;
      line-height: 25px; }
      #top-footer .widget .widget-content .news-letter-form, #top-footer .widget .textwidget .news-letter-form {
        margin-top: 20px; }
        #top-footer .widget .widget-content .news-letter-form input, #top-footer .widget .textwidget .news-letter-form input {
          display: block;
          border: 1px solid <?= $principalColor ?>;
          padding: 10px;
          width: 100%;
          height: 45px; }
          #top-footer .widget .widget-content .news-letter-form input.email, #top-footer .widget .textwidget .news-letter-form input.email {
            background: #FFFFFF;
            color: #999999;
            margin-bottom: 15px; }
            #top-footer .widget .widget-content .news-letter-form input.email.placeholder, #top-footer .widget .textwidget .news-letter-form input.email.placeholder {
              color: #999999; }
            #top-footer .widget .widget-content .news-letter-form input.email:-moz-placeholder, #top-footer .widget .textwidget .news-letter-form input.email:-moz-placeholder {
              color: #999999; }
            #top-footer .widget .widget-content .news-letter-form input.email::-moz-placeholder, #top-footer .widget .textwidget .news-letter-form input.email::-moz-placeholder {
              color: #999999; }
            #top-footer .widget .widget-content .news-letter-form input.email:-ms-input-placeholder, #top-footer .widget .textwidget .news-letter-form input.email:-ms-input-placeholder {
              color: #999999; }
            #top-footer .widget .widget-content .news-letter-form input.email::-webkit-input-placeholder, #top-footer .widget .textwidget .news-letter-form input.email::-webkit-input-placeholder {
              color: #999999; }
          #top-footer .widget .widget-content .news-letter-form input[type="submit"], #top-footer .widget .textwidget .news-letter-form input[type="submit"] {
            background: <?= $principalColor ?>;
            color: <?= $colorButton ?>;
            -webkit-box-shadow: inset 0 0 0 1px #f2f2f2;
            box-shadow: inset 0 0 0 1px #f2f2f2;
            -webkit-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease; }
            #top-footer .widget .widget-content .news-letter-form input[type="submit"]:hover, #top-footer .widget .textwidget .news-letter-form input[type="submit"]:hover {
              background: #FFFFFF;
              color: <?= $principalColor ?>; }
        #top-footer .widget .widget-content .news-letter-form .message-container, #top-footer .widget .textwidget .news-letter-form .message-container {
          display: none;
          margin: -10px 0 10px; }
          #top-footer .widget .widget-content .news-letter-form .message-container.active, #top-footer .widget .textwidget .news-letter-form .message-container.active {
            display: block; }
      #top-footer .widget .widget-content.recent-posts ul li, #top-footer .widget .textwidget.recent-posts ul li {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #FFFFFF; }
        #top-footer .widget .widget-content.recent-posts ul li:before, #top-footer .widget .widget-content.recent-posts ul li:after, #top-footer .widget .textwidget.recent-posts ul li:before, #top-footer .widget .textwidget.recent-posts ul li:after {
          content: " ";
          display: table; }
        #top-footer .widget .widget-content.recent-posts ul li:after, #top-footer .widget .textwidget.recent-posts ul li:after {
          clear: both; }
        #top-footer .widget .widget-content.recent-posts ul li:last-child, #top-footer .widget .textwidget.recent-posts ul li:last-child {
          margin-bottom: 0;
          border-bottom: 0; }
        #top-footer .widget .widget-content.recent-posts ul li .post-img, #top-footer .widget .textwidget.recent-posts ul li .post-img {
          float: left;
          width: 100px;
          height: auto; }
        #top-footer .widget .widget-content.recent-posts ul li .post-details, #top-footer .widget .textwidget.recent-posts ul li .post-details {
          margin-left: 115px; }
          #top-footer .widget .widget-content.recent-posts ul li .post-details a, #top-footer .widget .textwidget.recent-posts ul li .post-details a {
            color: <?= $principalColor ?>;
            display: block;
            font-size: .9em;
            line-height: 20px; }
            #top-footer .widget .widget-content.recent-posts ul li .post-details a:hover, #top-footer .widget .textwidget.recent-posts ul li .post-details a:hover {
              color: <?= $colorText1 ?>; }
          #top-footer .widget .widget-content.recent-posts ul li .post-details .date, #top-footer .widget .textwidget.recent-posts ul li .post-details .date {
            font-size: .8em; }

#footer {
  text-align: center;
  padding: 40px 0 60px; }
  #footer .copyright {
    margin-top: 20px; }

.social-icons {
  margin: 30px 0;
  text-align: center; }
  .social-icons ul {
    margin: 0; }
    .social-icons ul li {
      width: 40px;
      height: 40px;
      margin: 0 5px;
      padding: 0; }
      .social-icons ul li a {
        display: block;
        width: 100%;
        height: 100%;
        line-height: 36px;
        text-align: center;
        background: <?= $principalColor ?>;
        color: <?= $colorButton ?>;
        font-size: 1.3em;
        border: 3px double #FFFFFF;
        -webkit-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease; }
        .social-icons ul li a:hover {
          background: #FFFFFF;
          border-color: <?= $principalColor ?>;
          color: <?= $principalColor ?>; }

#client-section {
  padding: 70px 0 30px; }
  #client-section .client-container {
    padding: 50px 0; }
    #client-section .client-container img {
      max-width: 100%; }
    #client-section .client-container li {
      margin-bottom: 30px;
      text-align: center; }
      @media (max-width: 650px) {
        #client-section .client-container li {
          width: 100%;
          float: none; } }
      #client-section .client-container li a {
        display: block;
        position: relative; }
        #client-section .client-container li a:before {
          top: 0;
          left: 0;
          content: "";
          display: block;
          position: absolute;
          -webkit-box-shadow: 0 0 0 2px #d9d9d9;
          box-shadow: 0 0 0 2px #d9d9d9;
          border: 3px solid #FFFFFF;
          background: rgba(255, 255, 255, 0.5);
          opacity: 0;
          filter: alpha(opacity=0);
          -webkit-transform: scale(0.7);
          -ms-transform: scale(0.7);
          -o-transform: scale(0.7);
          transform: scale(0.7);
          -webkit-transition: all 0.5s ease;
          -o-transition: all 0.5s ease;
          transition: all 0.5s ease;
          width: 100%;
          height: 100%; }
        #client-section .client-container li a:hover:before {
          opacity: 1;
          filter: alpha(opacity=100);
          -webkit-transform: scale(1);
          -ms-transform: scale(1);
          -o-transform: scale(1);
          transform: scale(1); }
        @media (max-width: 992px) {
          #client-section .client-container li a img {
            width: 100%;
            height: auto; } }

#service-section {
  padding: 70px 0 60px; }
  #service-section .services-container {
    padding: 50px 0; }
    #service-section .services-container .service-box {
      text-align: center; }
      @media (max-width: 992px) {
        #service-section .services-container .service-box {
          padding-bottom: 20px; } }
      #service-section .services-container .service-box .img-box {
        position: relative; }
        #service-section .services-container .service-box .img-box:before {
          display: block;
          content: "";
          position: absolute;
          left: 5px;
          top: 5px;
          width: calc(100% - 10px);
          height: calc(100% - 10px);
          border: 1px solid #FFFFFF;
          -webkit-transition: all 0.5s ease;
          -o-transition: all 0.5s ease;
          transition: all 0.5s ease; }
        #service-section .services-container .service-box .img-box img {
          max-width: 100%;
          height: auto; }
          @media (max-width: 992px) {
            #service-section .services-container .service-box .img-box img {
              width: 100%; } }
      #service-section .services-container .service-box .bottom-sec {
        -webkit-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease; }
        #service-section .services-container .service-box .bottom-sec .title {
          font: 1.7em/3.7em "Playfair Display", Arial, Helvetica, sans-serif; }
          #service-section .services-container .service-box .bottom-sec .title span {
            color: <?= $principalColor ?>; }
        #service-section .services-container .service-box .bottom-sec .desc {
          padding: 0 20px 20px;
          line-height: 25px;
          color: gray; }
      #service-section .services-container .service-box:hover .img-box:before {
        background: rgba(0, 0, 0, 0.2); }
      #service-section .services-container .service-box:hover .bottom-sec {
        background: #f2f2f2; }

#breadcrumb-section {
  text-align: center;
  position: relative; }
  #breadcrumb-section:before {
    display: block;
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.4); }
  #breadcrumb-section .inner-container {
    padding: 80px 0;
    position: relative;
    min-height: 285px; }
  #breadcrumb-section h1 {
    display: inline-block;
    font: 2.3em/1.7em "Playfair Display", Arial, Helvetica, sans-serif;
    position: relative;
    background: #FFFFFF;
    padding: 20px 70px;
    position: relative; }
    #breadcrumb-section h1:before {
      top: -5px;
      left: -5px;
      content: "";
      display: block;
      position: absolute;
      border: 1px solid #FFFFFF;
      width: calc(100% + 10px);
      height: calc(100% + 10px); }
    #breadcrumb-section h1 span {
      color: <?= $principalColor ?>; }
  #breadcrumb-section .breadcrumb {
    position: absolute;
    left: 20px;
    bottom: 0;
    background: none;
    padding: 0;
    margin: 0;
    font-size: .8em; }
    @media (max-width: 767px) {
      #breadcrumb-section .breadcrumb {
        left: 10px; } }
    #breadcrumb-section .breadcrumb ul, #breadcrumb-section .breadcrumb ol {
      padding: 8px 17px;
      background: #FFFFFF;
      position: relative;
      z-index: 1;
      margin: 0; }
      #breadcrumb-section .breadcrumb ul:before, #breadcrumb-section .breadcrumb ul:after, #breadcrumb-section .breadcrumb ol:before, #breadcrumb-section .breadcrumb ol:after {
        content: " ";
        display: table; }
      #breadcrumb-section .breadcrumb ul:after, #breadcrumb-section .breadcrumb ol:after {
        clear: both; }
      #breadcrumb-section .breadcrumb ul:before, #breadcrumb-section .breadcrumb ol:before {
        display: block;
        content: "";
        position: absolute;
        left: -5px;
        top: -5px;
        border: 1px solid #FFFFFF;
        width: calc(100% + 10px);
        height: calc(100% + 10px);
        z-index: -1; }
      #breadcrumb-section .breadcrumb ul li, #breadcrumb-section .breadcrumb ol li {
        float: left;
        padding: 0 30px 0 0;
        position: relative; }
        #breadcrumb-section .breadcrumb ul li:last-child, #breadcrumb-section .breadcrumb ol li:last-child {
          padding-right: 0; }
          #breadcrumb-section .breadcrumb ul li:last-child:after, #breadcrumb-section .breadcrumb ol li:last-child:after {
            display: none; }
        #breadcrumb-section .breadcrumb ul li:after, #breadcrumb-section .breadcrumb ol li:after {
          content: "/";
          position: absolute;
          right: 15px;
          top: 0;
          font-size: .8em;
          color: #cccccc; }
        #breadcrumb-section .breadcrumb ul li.home a, #breadcrumb-section .breadcrumb ol li.home a {
          text-indent: -999999px;
          color: <?= $principalColor ?>;
          width: 35px;
          height: 20px;
          text-align: center;
          overflow: hidden;
          display: block; }
          #breadcrumb-section .breadcrumb ul li.home a:before, #breadcrumb-section .breadcrumb ol li.home a:before {
            display: block;
            font-family: "FontAwesome";
            text-indent: 0;
            font-size: 1.5em; }

#property-highlights-section #highlights-box {
  direction: ltr;
  margin-top: 50px;
  padding-bottom: 170px; }
  #property-highlights-section #highlights-box .owl-item {
    background: #f7f7f7;
    text-align: center;
    border-right: 1px solid #FFFFFF;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease; }
    #property-highlights-section #highlights-box .owl-item .img-container {
      position: relative; }
      #property-highlights-section #highlights-box .owl-item .img-container:before {
        display: block;
        content: "";
        position: absolute;
        left: 5px;
        top: 5px;
        background: rgba(255, 255, 255, 0.6);
        width: calc( 100% - 10px);
        height: calc( 100% - 10px);
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease; }
    #property-highlights-section #highlights-box .owl-item:last-child {
      border-right: 0; }
    #property-highlights-section #highlights-box .owl-item .bottom-sec {
      border: 1px solid transparent;
      border-top: 0;
      -webkit-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease; }
    #property-highlights-section #highlights-box .owl-item .title {
      font: 1.8em/1.5em "Playfair Display", Arial, Helvetica, sans-serif;
      margin: 30px 0; }
      #property-highlights-section #highlights-box .owl-item .title span {
        color: <?= $principalColor ?>; }
    #property-highlights-section #highlights-box .owl-item .short-desc {
      line-height: 30px;
      color: gray;
      padding: 0 40px 40px; }
    #property-highlights-section #highlights-box .owl-item:hover {
      background: none; }
      #property-highlights-section #highlights-box .owl-item:hover .img-container:before {
        opacity: 1;
        filter: alpha(opacity=100); }
      #property-highlights-section #highlights-box .owl-item:hover .bottom-sec {
        border-color: #f7f7f7; }
  #property-highlights-section #highlights-box .owl-controls {
    bottom: 85px; }

#amenities-section .amenities-list-container {
  margin: 20px 0 60px; }
  #amenities-section .amenities-list-container ul {
    margin: 0;
    padding: 0; }
    #amenities-section .amenities-list-container ul .amenities-item {
      margin-bottom: 50px;
      padding: 0; }
      @media (max-width: 650px) {
        #amenities-section .amenities-list-container ul .amenities-item {
          float: none;
          width: 100%;
          padding: 0 30px; } }
      #amenities-section .amenities-list-container ul .amenities-item i {
        display: block;
        width: 95px;
        height: 95px;
        background: #f7f7f7;
        float: left;
        line-height: 95px;
        text-align: center;
        color: #d9d9d9;
        font-size: 3em;
        border: 2px solid #FFFFFF;
        -webkit-box-shadow: 0 0 0 2px #f7f7f7;
        box-shadow: 0 0 0 2px #f7f7f7;
        -webkit-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease; }
      #amenities-section .amenities-list-container ul .amenities-item .text-box {
        margin-left: 130px;
        padding-top: 15px; }
        #amenities-section .amenities-list-container ul .amenities-item .text-box .title {
          font: 1.8em/1.5em "Playfair Display", Arial, Helvetica, sans-serif; }
          @media (max-width: 767px) {
            #amenities-section .amenities-list-container ul .amenities-item .text-box .title {
              font-size: 1.3em; } }
          @media (max-width: 767px) {
            #amenities-section .amenities-list-container ul .amenities-item .text-box .title {
              font-size: 1.6em; } }
          #amenities-section .amenities-list-container ul .amenities-item .text-box .title span {
            color: <?= $principalColor ?>; }
        #amenities-section .amenities-list-container ul .amenities-item .text-box .value {
          font-size: 1.2em;
          color: #b3b3b3;
          -webkit-transition: all 0.5s ease;
          -o-transition: all 0.5s ease;
          transition: all 0.5s ease; }
          @media (max-width: 767px) {
            #amenities-section .amenities-list-container ul .amenities-item .text-box .value {
              font-size: 1em; } }
          @media (max-width: 767px) {
            #amenities-section .amenities-list-container ul .amenities-item .text-box .value {
              font-size: 1.2em; } }
      #amenities-section .amenities-list-container ul .amenities-item:hover i {
        color: <?= $principalColor ?>;
        background: #e6e6e6;
        -webkit-box-shadow: 0 0 0 2px #e6e6e6;
        box-shadow: 0 0 0 2px #e6e6e6; }
      #amenities-section .amenities-list-container ul .amenities-item:hover .text-box .value {
        color: gray; }

#contact-info-box {
  padding: 50px 0 100px; }
  #contact-info-box .header-sec {
    margin-bottom: 70px; }
  #contact-info-box .contact-info-container {
    margin-bottom: 50px; }
    #contact-info-box .contact-info-container .left-sec {
      padding-left: 0; }
      @media (max-width: 650px) {
        #contact-info-box .contact-info-container .left-sec {
          padding: 0 15px; } }
      #contact-info-box .contact-info-container .left-sec .desc {
        line-height: 30px;
        color: gray; }
      #contact-info-box .contact-info-container .left-sec .contact-info {
        margin: 40px 0 0; }
        #contact-info-box .contact-info-container .left-sec .contact-info li {
          font-size: 15px;
          margin-bottom: 20px;
          padding-left: 70px;
          position: relative;
          line-height: 60px;
          font-family: "Playfair Display", Arial, Helvetica, sans-serif; }
          #contact-info-box .contact-info-container .left-sec .contact-info li:last-child {
            margin-bottom: 0; }
          #contact-info-box .contact-info-container .left-sec .contact-info li i {
            position: absolute;
            left: 0;
            top: 6px;
            color: <?= $principalColor ?>;
            display: block;
            font-size: 1.2em;
            line-height: 46px;
            text-align: center;
            background: #e6e6e6;
            width: 50px;
            height: 50px;
            border: 2px solid #FFFFFF;
            -webkit-box-shadow: 0 0 0 3px #e6e6e6;
            box-shadow: 0 0 0 3px #e6e6e6; }
    #contact-info-box .contact-info-container .right-sec {
      padding-right: 0; }
      @media (max-width: 650px) {
        #contact-info-box .contact-info-container .right-sec {
          margin-top: 30px;
          padding: 0 15px; } }
      #contact-info-box .contact-info-container .right-sec #map {
        margin-top: 15px;
        border: 3px solid #FFFFFF;
        -webkit-box-shadow: 0 0 0 5px #e6e6e6;
        box-shadow: 0 0 0 5px #e6e6e6;
        width: 100%;
        height: 390px; }
  #contact-info-box .contact-form-container #contact-form, #contact-info-box .contact-form-container .wpcf7-form, #contact-info-box .wpcf7 #contact-form, #contact-info-box .wpcf7 .wpcf7-form {
    padding: 60px;
    background: #e6e6e6;
    border: 2px solid #FFFFFF;
    -webkit-box-shadow: 0 0 0 5px #e6e6e6;
    box-shadow: 0 0 0 5px #e6e6e6; }
    @media (max-width: 650px) {
      #contact-info-box .contact-form-container #contact-form, #contact-info-box .contact-form-container .wpcf7-form, #contact-info-box .wpcf7 #contact-form, #contact-info-box .wpcf7 .wpcf7-form {
        padding: 30px; } }
    #contact-info-box .contact-form-container #contact-form input[type="text"], #contact-info-box .contact-form-container #contact-form input[type="email"], #contact-info-box .contact-form-container #contact-form input[type="tel"], #contact-info-box .contact-form-container #contact-form input[type="url"], #contact-info-box .contact-form-container #contact-form textarea, #contact-info-box .contact-form-container .wpcf7-form input[type="text"], #contact-info-box .contact-form-container .wpcf7-form input[type="email"], #contact-info-box .contact-form-container .wpcf7-form input[type="tel"], #contact-info-box .contact-form-container .wpcf7-form input[type="url"], #contact-info-box .contact-form-container .wpcf7-form textarea, #contact-info-box .wpcf7 #contact-form input[type="text"], #contact-info-box .wpcf7 #contact-form input[type="email"], #contact-info-box .wpcf7 #contact-form input[type="tel"], #contact-info-box .wpcf7 #contact-form input[type="url"], #contact-info-box .wpcf7 #contact-form textarea, #contact-info-box .wpcf7 .wpcf7-form input[type="text"], #contact-info-box .wpcf7 .wpcf7-form input[type="email"], #contact-info-box .wpcf7 .wpcf7-form input[type="tel"], #contact-info-box .wpcf7 .wpcf7-form input[type="url"], #contact-info-box .wpcf7 .wpcf7-form textarea {
      border: 0;
      background: none;
      border-bottom: 2px solid #FFFFFF;
      width: 100%;
      height: 40px;
      -webkit-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease; }
      #contact-info-box .contact-form-container #contact-form input[type="text"].placeholder, #contact-info-box .contact-form-container #contact-form input[type="email"].placeholder, #contact-info-box .contact-form-container #contact-form input[type="tel"].placeholder, #contact-info-box .contact-form-container #contact-form input[type="url"].placeholder, #contact-info-box .contact-form-container #contact-form textarea.placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="text"].placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="email"].placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="tel"].placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="url"].placeholder, #contact-info-box .contact-form-container .wpcf7-form textarea.placeholder, #contact-info-box .wpcf7 #contact-form input[type="text"].placeholder, #contact-info-box .wpcf7 #contact-form input[type="email"].placeholder, #contact-info-box .wpcf7 #contact-form input[type="tel"].placeholder, #contact-info-box .wpcf7 #contact-form input[type="url"].placeholder, #contact-info-box .wpcf7 #contact-form textarea.placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="text"].placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="email"].placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="tel"].placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="url"].placeholder, #contact-info-box .wpcf7 .wpcf7-form textarea.placeholder {
        color: gray; }
      #contact-info-box .contact-form-container #contact-form input[type="text"]:-moz-placeholder, #contact-info-box .contact-form-container #contact-form input[type="email"]:-moz-placeholder, #contact-info-box .contact-form-container #contact-form input[type="tel"]:-moz-placeholder, #contact-info-box .contact-form-container #contact-form input[type="url"]:-moz-placeholder, #contact-info-box .contact-form-container #contact-form textarea:-moz-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="text"]:-moz-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="email"]:-moz-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="tel"]:-moz-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="url"]:-moz-placeholder, #contact-info-box .contact-form-container .wpcf7-form textarea:-moz-placeholder, #contact-info-box .wpcf7 #contact-form input[type="text"]:-moz-placeholder, #contact-info-box .wpcf7 #contact-form input[type="email"]:-moz-placeholder, #contact-info-box .wpcf7 #contact-form input[type="tel"]:-moz-placeholder, #contact-info-box .wpcf7 #contact-form input[type="url"]:-moz-placeholder, #contact-info-box .wpcf7 #contact-form textarea:-moz-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="text"]:-moz-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="email"]:-moz-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="tel"]:-moz-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="url"]:-moz-placeholder, #contact-info-box .wpcf7 .wpcf7-form textarea:-moz-placeholder {
        color: gray; }
      #contact-info-box .contact-form-container #contact-form input[type="text"]::-moz-placeholder, #contact-info-box .contact-form-container #contact-form input[type="email"]::-moz-placeholder, #contact-info-box .contact-form-container #contact-form input[type="tel"]::-moz-placeholder, #contact-info-box .contact-form-container #contact-form input[type="url"]::-moz-placeholder, #contact-info-box .contact-form-container #contact-form textarea::-moz-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="text"]::-moz-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="email"]::-moz-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="tel"]::-moz-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="url"]::-moz-placeholder, #contact-info-box .contact-form-container .wpcf7-form textarea::-moz-placeholder, #contact-info-box .wpcf7 #contact-form input[type="text"]::-moz-placeholder, #contact-info-box .wpcf7 #contact-form input[type="email"]::-moz-placeholder, #contact-info-box .wpcf7 #contact-form input[type="tel"]::-moz-placeholder, #contact-info-box .wpcf7 #contact-form input[type="url"]::-moz-placeholder, #contact-info-box .wpcf7 #contact-form textarea::-moz-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="text"]::-moz-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="email"]::-moz-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="tel"]::-moz-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="url"]::-moz-placeholder, #contact-info-box .wpcf7 .wpcf7-form textarea::-moz-placeholder {
        color: gray; }
      #contact-info-box .contact-form-container #contact-form input[type="text"]:-ms-input-placeholder, #contact-info-box .contact-form-container #contact-form input[type="email"]:-ms-input-placeholder, #contact-info-box .contact-form-container #contact-form input[type="tel"]:-ms-input-placeholder, #contact-info-box .contact-form-container #contact-form input[type="url"]:-ms-input-placeholder, #contact-info-box .contact-form-container #contact-form textarea:-ms-input-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="text"]:-ms-input-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="email"]:-ms-input-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="tel"]:-ms-input-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="url"]:-ms-input-placeholder, #contact-info-box .contact-form-container .wpcf7-form textarea:-ms-input-placeholder, #contact-info-box .wpcf7 #contact-form input[type="text"]:-ms-input-placeholder, #contact-info-box .wpcf7 #contact-form input[type="email"]:-ms-input-placeholder, #contact-info-box .wpcf7 #contact-form input[type="tel"]:-ms-input-placeholder, #contact-info-box .wpcf7 #contact-form input[type="url"]:-ms-input-placeholder, #contact-info-box .wpcf7 #contact-form textarea:-ms-input-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="text"]:-ms-input-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="email"]:-ms-input-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="tel"]:-ms-input-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="url"]:-ms-input-placeholder, #contact-info-box .wpcf7 .wpcf7-form textarea:-ms-input-placeholder {
        color: gray; }
      #contact-info-box .contact-form-container #contact-form input[type="text"]::-webkit-input-placeholder, #contact-info-box .contact-form-container #contact-form input[type="email"]::-webkit-input-placeholder, #contact-info-box .contact-form-container #contact-form input[type="tel"]::-webkit-input-placeholder, #contact-info-box .contact-form-container #contact-form input[type="url"]::-webkit-input-placeholder, #contact-info-box .contact-form-container #contact-form textarea::-webkit-input-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="text"]::-webkit-input-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="email"]::-webkit-input-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="tel"]::-webkit-input-placeholder, #contact-info-box .contact-form-container .wpcf7-form input[type="url"]::-webkit-input-placeholder, #contact-info-box .contact-form-container .wpcf7-form textarea::-webkit-input-placeholder, #contact-info-box .wpcf7 #contact-form input[type="text"]::-webkit-input-placeholder, #contact-info-box .wpcf7 #contact-form input[type="email"]::-webkit-input-placeholder, #contact-info-box .wpcf7 #contact-form input[type="tel"]::-webkit-input-placeholder, #contact-info-box .wpcf7 #contact-form input[type="url"]::-webkit-input-placeholder, #contact-info-box .wpcf7 #contact-form textarea::-webkit-input-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="text"]::-webkit-input-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="email"]::-webkit-input-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="tel"]::-webkit-input-placeholder, #contact-info-box .wpcf7 .wpcf7-form input[type="url"]::-webkit-input-placeholder, #contact-info-box .wpcf7 .wpcf7-form textarea::-webkit-input-placeholder {
        color: gray; }
      #contact-info-box .contact-form-container #contact-form input[type="text"]:focus, #contact-info-box .contact-form-container #contact-form input[type="email"]:focus, #contact-info-box .contact-form-container #contact-form input[type="tel"]:focus, #contact-info-box .contact-form-container #contact-form input[type="url"]:focus, #contact-info-box .contact-form-container #contact-form textarea:focus, #contact-info-box .contact-form-container .wpcf7-form input[type="text"]:focus, #contact-info-box .contact-form-container .wpcf7-form input[type="email"]:focus, #contact-info-box .contact-form-container .wpcf7-form input[type="tel"]:focus, #contact-info-box .contact-form-container .wpcf7-form input[type="url"]:focus, #contact-info-box .contact-form-container .wpcf7-form textarea:focus, #contact-info-box .wpcf7 #contact-form input[type="text"]:focus, #contact-info-box .wpcf7 #contact-form input[type="email"]:focus, #contact-info-box .wpcf7 #contact-form input[type="tel"]:focus, #contact-info-box .wpcf7 #contact-form input[type="url"]:focus, #contact-info-box .wpcf7 #contact-form textarea:focus, #contact-info-box .wpcf7 .wpcf7-form input[type="text"]:focus, #contact-info-box .wpcf7 .wpcf7-form input[type="email"]:focus, #contact-info-box .wpcf7 .wpcf7-form input[type="tel"]:focus, #contact-info-box .wpcf7 .wpcf7-form input[type="url"]:focus, #contact-info-box .wpcf7 .wpcf7-form textarea:focus {
        border-color: rgba(229, 17, 31, 0.5); }
    #contact-info-box .contact-form-container #contact-form .row, #contact-info-box .contact-form-container .wpcf7-form .row, #contact-info-box .wpcf7 #contact-form .row, #contact-info-box .wpcf7 .wpcf7-form .row {
      margin: 0 0 20px; }
      #contact-info-box .contact-form-container #contact-form .row:last-child, #contact-info-box .contact-form-container .wpcf7-form .row:last-child, #contact-info-box .wpcf7 #contact-form .row:last-child, #contact-info-box .wpcf7 .wpcf7-form .row:last-child {
        margin-bottom: 0; }
      @media (max-width: 650px) {
        #contact-info-box .contact-form-container #contact-form .row, #contact-info-box .contact-form-container .wpcf7-form .row, #contact-info-box .wpcf7 #contact-form .row, #contact-info-box .wpcf7 .wpcf7-form .row {
          margin-bottom: 0; } }
      #contact-info-box .contact-form-container #contact-form .row > div:first-child, #contact-info-box .contact-form-container .wpcf7-form .row > div:first-child, #contact-info-box .wpcf7 #contact-form .row > div:first-child, #contact-info-box .wpcf7 .wpcf7-form .row > div:first-child {
        padding-left: 0; }
      #contact-info-box .contact-form-container #contact-form .row > div:last-child, #contact-info-box .contact-form-container .wpcf7-form .row > div:last-child, #contact-info-box .wpcf7 #contact-form .row > div:last-child, #contact-info-box .wpcf7 .wpcf7-form .row > div:last-child {
        padding-right: 0; }
      @media (max-width: 650px) {
        #contact-info-box .contact-form-container #contact-form .row > div, #contact-info-box .contact-form-container .wpcf7-form .row > div, #contact-info-box .wpcf7 #contact-form .row > div, #contact-info-box .wpcf7 .wpcf7-form .row > div {
          float: none;
          width: 100%;
          padding: 0; } }
    #contact-info-box .contact-form-container #contact-form textarea, #contact-info-box .contact-form-container .wpcf7-form textarea, #contact-info-box .wpcf7 #contact-form textarea, #contact-info-box .wpcf7 .wpcf7-form textarea {
      height: 150px; }
    #contact-info-box .contact-form-container #contact-form .button-container, #contact-info-box .contact-form-container .wpcf7-form .button-container, #contact-info-box .wpcf7 #contact-form .button-container, #contact-info-box .wpcf7 .wpcf7-form .button-container {
      text-align: center; }
      #contact-info-box .contact-form-container #contact-form .button-container input[type="submit"], #contact-info-box .contact-form-container .wpcf7-form .button-container input[type="submit"], #contact-info-box .wpcf7 #contact-form .button-container input[type="submit"], #contact-info-box .wpcf7 .wpcf7-form .button-container input[type="submit"] {
        background: <?= $principalColor ?>;
        color: <?= $colorButton ?>;
        border: 1px solid <?= $principalColor ?>;
        padding: 8px 25px;
        -webkit-box-shadow: inset 0 0 0 1px #FFFFFF;
        box-shadow: inset 0 0 0 1px #FFFFFF;
        -webkit-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease; }
        #contact-info-box .contact-form-container #contact-form .button-container input[type="submit"]:hover, #contact-info-box .contact-form-container .wpcf7-form .button-container input[type="submit"]:hover, #contact-info-box .wpcf7 #contact-form .button-container input[type="submit"]:hover, #contact-info-box .wpcf7 .wpcf7-form .button-container input[type="submit"]:hover {
          background: #FFFFFF;
          color: <?= $principalColor ?>; }
    #contact-info-box .contact-form-container #contact-form .wpcf7-not-valid-tip, #contact-info-box .contact-form-container #contact-form .wpcf7-validation-errors, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-not-valid-tip, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-validation-errors, #contact-info-box .wpcf7 #contact-form .wpcf7-not-valid-tip, #contact-info-box .wpcf7 #contact-form .wpcf7-validation-errors, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-not-valid-tip, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-validation-errors {
      margin-top: 10px; }
    #contact-info-box .contact-form-container #contact-form .wpcf7-mail-sent-ok, #contact-info-box .contact-form-container .wpcf7-form .wpcf7-mail-sent-ok, #contact-info-box .wpcf7 #contact-form .wpcf7-mail-sent-ok, #contact-info-box .wpcf7 .wpcf7-form .wpcf7-mail-sent-ok {
      margin-top: 10px; }

#video-tour-section {
  padding: 50px 0 100px; }
  #video-tour-section .desc {
    line-height: 30px;
    color: gray;
    padding: 0 120px;
    text-align: center; }
  #video-tour-section iframe {
    margin-top: 50px;
    width: 100%;
    height: 650px; }

#slide-show-section {
  padding: 50px 0 100px; }
  #slide-show-section .desc {
    line-height: 30px;
    color: gray;
    padding: 0 120px;
    text-align: center;
    margin-bottom: 70px; }
    @media (max-width: 767px) {
      #slide-show-section .desc {
        padding: 0 60px; } }
    @media (max-width: 650px) {
      #slide-show-section .desc {
        padding: 0 20px; } }
  #slide-show-section #slide-show {
    position: relative;
    overflow: hidden;
    border: 3px solid #FFFFFF;
    -webkit-box-shadow: 0 0 0 5px #ebebeb;
    box-shadow: 0 0 0 5px #ebebeb; }
    #slide-show-section #slide-show:hover #thumbnail-slider {
      bottom: 0;
      visibility: visible;
      opacity: 1;
      filter: alpha(opacity=100); }
  #slide-show-section #main-image-slider .owl-controls {
    bottom: 50%;
    width: 100%; }
    #slide-show-section #main-image-slider .owl-controls .owl-prev, #slide-show-section #main-image-slider .owl-controls .owl-next {
      width: 50px;
      height: 50px; }
      #slide-show-section #main-image-slider .owl-controls .owl-prev:before, #slide-show-section #main-image-slider .owl-controls .owl-next:before {
        font-size: 15px;
        color: <?= $principalColor ?>;
        background: rgba(255, 255, 255, 0.9);
        font-family: "Glyphicons Halflings";
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
        width: 100%;
        height: 100%;
        line-height: 50px;
        text-align: center;
        top: 0; }
      #slide-show-section #main-image-slider .owl-controls .owl-prev:after, #slide-show-section #main-image-slider .owl-controls .owl-next:after {
        display: none; }
    #slide-show-section #main-image-slider .owl-controls .owl-prev {
      left: 0; }
      #slide-show-section #main-image-slider .owl-controls .owl-prev:before {
        content: "\e079"; }
    #slide-show-section #main-image-slider .owl-controls .owl-next {
      right: 0; }
      #slide-show-section #main-image-slider .owl-controls .owl-next:before {
        content: "\e080"; }
  #slide-show-section #thumbnail-slider {
    position: absolute;
    left: 0;
    bottom: 0;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    background: #FFFFFF;
    max-height: 200px; }
    #slide-show-section #thumbnail-slider .slide-caption {
      display: block;
      position: absolute;
      left: 10px;
      top: 10px;
      text-align: center;
      background: rgba(255, 255, 255, 0.9);
      width: calc(100% - 20px);
      height: calc(100% - 20px);
      opacity: 0;
      filter: alpha(opacity=0);
      -webkit-transform: scale(0.9);
      -ms-transform: scale(0.9);
      -o-transform: scale(0.9);
      transform: scale(0.9);
      -webkit-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease; }
      #slide-show-section #thumbnail-slider .slide-caption .title {
        display: block;
        position: absolute;
        left: 50%;
        top: 50%;
        margin: 0;
        font: 1.5em/1.5em "Playfair Display", Arial, Helvetica, sans-serif;
        width: 80%;
        -moz-transform: translateX(-50%) translateY(-50%);
        -ms-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%); }
        #slide-show-section #thumbnail-slider .slide-caption .title span {
          color: <?= $principalColor ?>; }
    #slide-show-section #thumbnail-slider .owl-item {
      cursor: pointer;
      border-right: 1px solid #FFFFFF;
      border-top: 1px solid #FFFFFF; }
      #slide-show-section #thumbnail-slider .owl-item:last-child {
        border-right: 0; }
      #slide-show-section #thumbnail-slider .owl-item.synced .slide-caption {
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1); }

.comments-container {
  margin: 30px;
  clear: both; }
  @media (max-width: 650px) {
    .comments-container {
      margin: 30px 0; } }
  .comments-container > h3 {
    font: 1.7em/2.5em "Playfair Display", Arial, Helvetica, sans-serif;
    margin: 0 0 40px;
    color: <?= $principalColor ?>; }
    .comments-container > h3 b, .comments-container > h3 span {
      color: <?= $colorText1 ?>;
      font-weight: normal; }
  .comments-container .comment-box .pingback {
    padding: 30px;
    margin-bottom: 30px;
    background: #FFFFFF;
    position: relative;
    border: 4px solid #f2f2f2;
    -webkit-box-shadow: 0 0 0 3px #FFFFFF;
    box-shadow: 0 0 0 3px #FFFFFF; }
    .comments-container .comment-box .pingback:before, .comments-container .comment-box .pingback:after {
      content: " ";
      display: table; }
    .comments-container .comment-box .pingback:after {
      clear: both; }
    .comments-container .comment-box .pingback .comment-body a {
      margin-left: 20px; }
  .comments-container .comment-box .comment {
    padding: 30px;
    margin-bottom: 30px;
    background: #FFFFFF;
    position: relative;
    border: 4px solid #f2f2f2;
    -webkit-box-shadow: 0 0 0 3px #FFFFFF;
    box-shadow: 0 0 0 3px #FFFFFF; }
    .comments-container .comment-box .comment:before, .comments-container .comment-box .comment:after {
      content: " ";
      display: table; }
    .comments-container .comment-box .comment:after {
      clear: both; }
    @media (max-width: 650px) {
      .comments-container .comment-box .comment {
        margin-left: 0; } }
    .comments-container .comment-box .comment:last-child {
      margin-bottom: 0; }
    .comments-container .comment-box .comment:first-child {
      margin-left: 0; }
    .comments-container .comment-box .comment footer {
      position: relative;
      padding-left: 120px; }
      .comments-container .comment-box .comment footer:before, .comments-container .comment-box .comment footer:after {
        content: " ";
        display: table; }
      .comments-container .comment-box .comment footer:after {
        clear: both; }
      .comments-container .comment-box .comment footer .comment-author {
        float: left; }
        .comments-container .comment-box .comment footer .comment-author > img {
          position: absolute;
          left: 0;
          float: left;
          top: 0;
          width: 100px;
          height: 100px;
          -moz-border-radius: 50%;
          -webkit-border-radius: 50%;
          border-radius: 50%; }
          @media (max-width: 650px) {
            .comments-container .comment-box .comment footer .comment-author > img {
              float: none;
              margin: 0 auto; } }
        .comments-container .comment-box .comment footer .comment-author .says {
          display: none; }
        .comments-container .comment-box .comment footer .comment-author .fn {
          font-size: 1.5em;
          font-family: "Playfair Display", Arial, Helvetica, sans-serif;
          display: inline-block;
          font-weight: normal;
          color: <?= $principalColor ?>; }
          .comments-container .comment-box .comment footer .comment-author .fn a {
            color: <?= $principalColor ?>;
            -webkit-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease; }
            .comments-container .comment-box .comment footer .comment-author .fn a:hover {
              color: <?= $colorText1 ?>; }
          .comments-container .comment-box .comment footer .comment-author .fn span {
            color: <?= $colorText1 ?>; }
          @media (max-width: 650px) {
            .comments-container .comment-box .comment footer .comment-author .fn {
              display: block;
              margin-bottom: 20px;
              text-align: center; } }
      .comments-container .comment-box .comment footer .comment-metadata {
        float: left;
        margin: 5px 0 0 20px;
        color: #cccccc;
        font-size: 12px;
        display: inline-block; }
    .comments-container .comment-box .comment .comment-content {
      margin: 20px 0 0 120px;
      clear: both;
      color: #b3b3b3;
      line-height: 25px;
      min-height: 60px; }
      .comments-container .comment-box .comment .comment-content ul {
        list-style: square;
        padding-left: 30px; }
      .comments-container .comment-box .comment .comment-content table {
        width: 100%; }
        .comments-container .comment-box .comment .comment-content table th, .comments-container .comment-box .comment .comment-content table td {
          padding: 5px;
          text-align: center;
          border: 1px solid #e9e8f0; }
      .comments-container .comment-box .comment .comment-content blockquote {
        background: #f2f2f2;
        border: 4px solid #FFFFFF;
        -webkit-box-shadow: 0 0 0 3px #f2f2f2;
        box-shadow: 0 0 0 3px #f2f2f2;
        color: #737373;
        font-size: 1em;
        line-height: 30px;
        padding: 50px;
        margin: 30px 0;
        position: relative; }
        .comments-container .comment-box .comment .comment-content blockquote:before, .comments-container .comment-box .comment .comment-content blockquote:after {
          position: absolute;
          display: block;
          font-family: "FontAwesome";
          font-size: 2em;
          color: #e6e6e6; }
        .comments-container .comment-box .comment .comment-content blockquote:before {
          content: "\f10d";
          left: 20px;
          top: 20px; }
        .comments-container .comment-box .comment .comment-content blockquote:after {
          content: "\f10e";
          right: 20px;
          bottom: 20px; }
    .comments-container .comment-box .comment .reply {
      position: absolute;
      right: 30px;
      top: 30px;
      width: 30px;
      height: 30px; }
      .comments-container .comment-box .comment .reply a {
        -webkit-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
        position: relative;
        color: #cccccc;
        display: block;
        text-indent: -9999999px;
        overflow: hidden;
        height: 100%; }
        .comments-container .comment-box .comment .reply a:before {
          font-family: "FontAwesome";
          display: block;
          text-indent: 0;
          position: absolute;
          left: 5px;
          top: 5px; }
        .comments-container .comment-box .comment .reply a:hover {
          color: <?= $principalColor ?>; }
    .comments-container .comment-box .comment > .comment.depth-2 {
      background: #f2f2f2;
      border: 4px solid #FFFFFF;
      -webkit-box-shadow: 0 0 0 3px #f2f2f2;
      box-shadow: 0 0 0 3px #f2f2f2; }
    .comments-container .comment-box .comment > .comment.depth-4 {
      background: #f2f2f2;
      border: 4px solid #FFFFFF;
      -webkit-box-shadow: 0 0 0 3px #f2f2f2;
      box-shadow: 0 0 0 3px #f2f2f2; }
    .comments-container .comment-box .comment > .comment.depth-6 {
      background: #f2f2f2;
      border: 4px solid #FFFFFF;
      -webkit-box-shadow: 0 0 0 3px #f2f2f2;
      box-shadow: 0 0 0 3px #f2f2f2; }
    .comments-container .comment-box .comment > .comment.depth-8 {
      background: #f2f2f2;
      border: 4px solid #FFFFFF;
      -webkit-box-shadow: 0 0 0 3px #f2f2f2;
      box-shadow: 0 0 0 3px #f2f2f2; }
    .comments-container .comment-box .comment > .comment.depth-10 {
      background: #f2f2f2;
      border: 4px solid #FFFFFF;
      -webkit-box-shadow: 0 0 0 3px #f2f2f2;
      box-shadow: 0 0 0 3px #f2f2f2; }
  .comments-container .no-comments {
    padding: 30px;
    margin: 30px 0;
    background: #FFFFFF;
    -webkit-box-shadow: 0 0 0 3px #FFFFFF;
    box-shadow: 0 0 0 3px #FFFFFF;
    color: <?= $principalColor ?>;
    text-align: center; }
    .comments-container .no-comments:before, .comments-container .no-comments:after {
      content: " ";
      display: table; }
    .comments-container .no-comments:after {
      clear: both; }

#respond, body.page-template-default .main-page-container .inner-box .comment-respond {
  padding: 30px;
  margin: 80px 30px 30px;
  background: #FFFFFF;
  border: 4px solid #f2f2f2;
  -webkit-box-shadow: 0 0 0 3px #FFFFFF;
  box-shadow: 0 0 0 3px #FFFFFF; }
  @media (max-width: 650px) {
    #respond, body.page-template-default .main-page-container .inner-box .comment-respond {
      margin: 80px 0 30px; } }
  #respond h3, body.page-template-default .main-page-container .inner-box .comment-respond h3 {
    font: 1.7em/2.5em "Playfair Display", Arial, Helvetica, sans-serif;
    margin: 0;
    color: <?= $principalColor ?>; }
    #respond h3 b, body.page-template-default .main-page-container .inner-box .comment-respond h3 b, #respond h3 span, body.page-template-default .main-page-container .inner-box .comment-respond h3 span {
      color: <?= $colorText1 ?>;
      font-weight: normal; }
  #respond > .desc, body.page-template-default .main-page-container .inner-box .comment-respond > .desc, #respond .comment-notes, body.page-template-default .main-page-container .inner-box .comment-respond .comment-notes {
    color: #b3b3b3;
    margin-bottom: 40px; }
  #respond .comment-form, body.page-template-default .main-page-container .inner-box .comment-respond .comment-form {
    padding-bottom: 20px; }
    #respond .comment-form input[type="text"], body.page-template-default .main-page-container .inner-box .comment-respond .comment-form input[type="text"], #respond .comment-form input[type="email"], body.page-template-default .main-page-container .inner-box .comment-respond .comment-form input[type="email"], #respond .comment-form input[type="tel"], body.page-template-default .main-page-container .inner-box .comment-respond .comment-form input[type="tel"], #respond .comment-form input[type="url"], body.page-template-default .main-page-container .inner-box .comment-respond .comment-form input[type="url"], #respond .comment-form textarea, body.page-template-default .main-page-container .inner-box .comment-respond .comment-form textarea {
      border: 0;
      background: none;
      border-bottom: 2px solid #f2f2f2;
      width: 100%;
      height: 40px;
      -webkit-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease; }
      #respond .comment-form input[type="text"]:focus, body.page-template-default .main-page-container .inner-box .comment-respond .comment-form input[type="text"]:focus, #respond .comment-form input[type="email"]:focus, body.page-template-default .main-page-container .inner-box .comment-respond .comment-form input[type="email"]:focus, #respond .comment-form input[type="tel"]:focus, body.page-template-default .main-page-container .inner-box .comment-respond .comment-form input[type="tel"]:focus, #respond .comment-form input[type="url"]:focus, body.page-template-default .main-page-container .inner-box .comment-respond .comment-form input[type="url"]:focus, #respond .comment-form textarea:focus, body.page-template-default .main-page-container .inner-box .comment-respond .comment-form textarea:focus {
        border-color: rgba(229, 17, 31, 0.5); }
    #respond .comment-form .field-row, body.page-template-default .main-page-container .inner-box .comment-respond .comment-form .field-row {
      margin: 0 0 20px; }
      #respond .comment-form .field-row:last-child, body.page-template-default .main-page-container .inner-box .comment-respond .comment-form .field-row:last-child {
        margin-bottom: 0;
        text-align: center; }
    #respond .comment-form textarea, body.page-template-default .main-page-container .inner-box .comment-respond .comment-form textarea {
      height: 150px; }
    #respond .comment-form input[type="submit"], body.page-template-default .main-page-container .inner-box .comment-respond .comment-form input[type="submit"] {
      background: <?= $principalColor ?>;
      color: <?= $colorButton ?>;
      border: 1px solid <?= $principalColor ?>;
      padding: 8px 25px;
      margin-top: 20px;
      -webkit-box-shadow: inset 0 0 0 1px #f2f2f2;
      box-shadow: inset 0 0 0 1px #f2f2f2;
      -webkit-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease; }
      #respond .comment-form input[type="submit"]:hover, body.page-template-default .main-page-container .inner-box .comment-respond .comment-form input[type="submit"]:hover {
        background: #FFFFFF;
        color: <?= $principalColor ?>; }
    #respond .comment-form .form-submit, body.page-template-default .main-page-container .inner-box .comment-respond .comment-form .form-submit {
      text-align: center; }

aside.sidebar {
  padding-right: 0; }
  @media (max-width: 767px) {
    aside.sidebar {
      padding: 0 15px; } }
  aside.sidebar h3 {
    font: 1.7em/1.8em "Playfair Display", Arial, Helvetica, sans-serif;
    margin: 0 0 40px;
    color: <?= $colorText1 ?>;
    position: relative;
    text-align: center;
    padding: 0 0 20px;
    white-space: nowrap;
    border-bottom: 1px solid #d9d9d9; }
    aside.sidebar h3:before, aside.sidebar h3:after {
      display: block;
      content: "";
      position: absolute;
      background: #FFFFFF;
      border: 1px solid #d9d9d9;
      z-index: 1; }
    aside.sidebar h3:before {
      bottom: -6px;
      width: 22px;
      height: 12px;
      left: 50%;
      margin-left: -11px; }
    aside.sidebar h3:after {
      bottom: -4px;
      width: 18px;
      height: 8px;
      left: 50%;
      margin-left: -9px;
      z-index: 2; }
    aside.sidebar h3 span {
      color: <?= $principalColor ?>; }
    aside.sidebar h3 img {
      vertical-align: middle;
      margin-right: 10px; }
  aside.sidebar img {
    max-width: 100%;
    height: auto; }
  aside.sidebar label {
    font-weight: normal;
    line-height: 35px; }
  aside.sidebar .widget {
    margin-bottom: 40px; }
    aside.sidebar .widget:last-child {
      margin-bottom: 0; }
  aside.sidebar .textwidget {
    color: gray;
    line-height: 30px; }
  aside.sidebar ul li {
    line-height: 40px;
    border-bottom: 1px solid #d9d9d9;
    font-family: "Playfair Display", Arial, Helvetica, sans-serif;
    color: <?= $principalColor ?>; }
    aside.sidebar ul li:before, aside.sidebar ul li:after {
      content: " ";
      display: table; }
    aside.sidebar ul li:after {
      clear: both; }
    aside.sidebar ul li:last-child {
      border-bottom: 0; }
    aside.sidebar ul li a {
      display: block;
      float: left;
      margin-right: 10px;
      font-family: "Open Sans", Arial, Helvetica, sans-serif;
      color: <?= $colorText1 ?>; }
      aside.sidebar ul li a:hover {
        color: <?= $principalColor ?>; }
    aside.sidebar ul li > ul {
      padding: 0 0 0 10px;
      clear: both;
      border-top: 1px solid #d9d9d9; }
      aside.sidebar ul li > ul li {
        padding-right: 0; }
        aside.sidebar ul li > ul li:before {
          content: "::";
          padding-right: 10px;
          float: left; }
  aside.sidebar .widget_recent_entries ul li {
    text-align: left; }
  aside.sidebar .widget_recent_comments ul li {
    text-align: left; }
    aside.sidebar .widget_recent_comments ul li a {
      display: inline;
      float: none;
      margin: 0 5px; }
  aside.sidebar .widget_rss ul li {
    text-align: left; }
    aside.sidebar .widget_rss ul li .rsswidget {
      display: inline-block;
      float: none;
      font-family: "Playfair Display", Arial, Helvetica, sans-serif;
      color: <?= $principalColor ?>; }
      aside.sidebar .widget_rss ul li .rsswidget:hover {
        color: #000000; }
    aside.sidebar .widget_rss ul li .rss-date {
      color: <?= $colorText1 ?>;
      display: block;
      font-size: .8em;
      font-family: "Open Sans", Arial, Helvetica, sans-serif; }
    aside.sidebar .widget_rss ul li .rssSummary {
      font-family: "Open Sans", Arial, Helvetica, sans-serif;
      text-align: left;
      line-height: 30px;
      color: <?= $colorText1 ?>; }
  aside.sidebar .tagcloud a {
    display: inline-block;
    line-height: 30px;
    border: 1px solid <?= $principalColor ?>;
    color: <?= $principalColor ?>;
    background: #FFFFFF;
    margin: 0 5px 5px 0;
    padding: 0 15px;
    font-size: .9em !important; }
    aside.sidebar .tagcloud a:hover {
      background: <?= $principalColor ?>;
      color: <?= $colorButton ?>; }
  aside.sidebar .widget_search .search-form:before, aside.sidebar .widget_search .search-form:after {
    content: " ";
    display: table; }
  aside.sidebar .widget_search .search-form:after {
    clear: both; }
  aside.sidebar .widget_search .search-form label {
    float: left;
    width: 80%;
    position: relative;
    margin-bottom: 0; }
    aside.sidebar .widget_search .search-form label > span {
      display: none; }
    aside.sidebar .widget_search .search-form label input {
      border: 1px solid #d5d2e2;
      border-right: 0;
      background: #FFFFFF;
      color: <?= $principalColor ?>;
      font-weight: normal;
      padding: 0 10px;
      width: 100%;
      height: 40px; }
      aside.sidebar .widget_search .search-form label input.placeholder {
        color: <?= $principalColor ?>; }
      aside.sidebar .widget_search .search-form label input:-moz-placeholder {
        color: <?= $principalColor ?>; }
      aside.sidebar .widget_search .search-form label input::-moz-placeholder {
        color: <?= $principalColor ?>; }
      aside.sidebar .widget_search .search-form label input:-ms-input-placeholder {
        color: <?= $principalColor ?>; }
      aside.sidebar .widget_search .search-form label input::-webkit-input-placeholder {
        color: <?= $principalColor ?>; }
    aside.sidebar .widget_search .search-form label:after {
      display: block;
      content: "\f002";
      font: 16px/20px "FontAwesome";
      color: #d5d2e2;
      position: absolute;
      right: -40px;
      top: 9px; }
  aside.sidebar .widget_search .search-form .search-submit {
    border: 1px solid #d5d2e2;
    float: left;
    border-left: 0;
    background: transparent;
    text-indent: -999999px;
    overflow: hidden;
    position: relative;
    z-index: 1;
    width: 20%;
    height: 40px;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0; }
  aside.sidebar .widget_calendar #calendar_wrap {
    text-align: center;
    font-size: 13px; }
    aside.sidebar .widget_calendar #calendar_wrap caption {
      text-align: center; }
    aside.sidebar .widget_calendar #calendar_wrap table {
      width: 100%;
      border: 1px solid #e9e8f0;
      background: #FFFFFF; }
      aside.sidebar .widget_calendar #calendar_wrap table caption {
        background: #f7f7f7;
        color: <?= $principalColor ?>;
        font-size: 18px;
        line-height: 30px;
        font-family: "Playfair Display", Arial, Helvetica, sans-serif; }
      aside.sidebar .widget_calendar #calendar_wrap table td, aside.sidebar .widget_calendar #calendar_wrap table th {
        padding: 8px 0;
        color: #d5d2e2;
        text-align: center;
        font-weight: normal; }
        aside.sidebar .widget_calendar #calendar_wrap table td a, aside.sidebar .widget_calendar #calendar_wrap table th a {
          color: <?= $principalColor ?>; }
      aside.sidebar .widget_calendar #calendar_wrap table tfoot {
        background: #f7f7f7; }
        aside.sidebar .widget_calendar #calendar_wrap table tfoot a {
          color: #000000; }
          aside.sidebar .widget_calendar #calendar_wrap table tfoot a:hover {
            color: <?= $principalColor ?>; }
        aside.sidebar .widget_calendar #calendar_wrap table tfoot td#prev {
          padding-left: 15px;
          text-align: left; }
        aside.sidebar .widget_calendar #calendar_wrap table tfoot td#next {
          padding-right: 15px;
          text-align: right; }

body .main-bg-color, body #property-highlights-section #highlights-box, #property-highlights-section body #highlights-box {
  background: #FFFFFF; }
body #main-wrapper {
  position: relative;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  padding-top: 107px; }
  @media (max-width: 1200px) {
    body #main-wrapper {
      padding-top: 81px; } }
body.boxed #main-wrapper {
  padding: 0;
  position: relative;
  overflow: hidden;
  margin-top: 30px;
  margin-bottom: 30px;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); }
  body.boxed #main-wrapper .inner-container {
    padding-right: 30px;
    padding-left: 30px; }
body.boxed:not(.sticky) #main-wrapper .inner-container {
  width: auto; }
body.boxed #main-header .nav-container .b-header nav > ul > li > a {
  padding: 0 20px; }
  body.sticky #main-header {
    position: fixed; 
  }
  body.sticky #main-header .logo-container img{  
    max-height: 71px !important;
  }
  body.sticky #main-header .logo-container img{  
    
  }
  body.sticky #main-header .nav-container .t-header {
    visibility: hidden; }
    @media (max-width: 992px) {
      body.sticky #main-header .nav-container .t-header {
        visibility: visible; } }
  body.sticky #main-header .nav-container .b-header {
    margin-top: 0; }
  body.sticky #main-header #top-logo {
    height: 67px; }
    body.sticky #main-header #top-logo .sub-title {
      top: 14px;
      font-size: .7em; }
    body.sticky #main-header #top-logo .title {
      font-size: 2.3em;
      letter-spacing: 14px;
      top: 19px; }

#booking-form {
  padding: 0 30px 30px;
  background: #FFFFFF;
  border: 20px solid #f2f2f2;
  width: 520px;
  margin: 0 auto;
  position: relative; }
  @media (max-width: 650px) {
    #booking-form {
      width: 100%; } }
  #booking-form.loading:before {
    display: block;
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    z-index: 3;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.7); }
  #booking-form.loading:after {
    display: block;
    content: '';
    border: 1px solid #FFFFFF;
    width: 30px;
    height: 30px;
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: 3;
    background: <?= $principalColor ?>;
    margin: -15px 0 0 -15px;
    -webkit-box-shadow: 0 0 0 1px <?= $principalColor ?>;
    box-shadow: 0 0 0 1px <?= $principalColor ?>;
    -webkit-animation: spin 1s ease infinite;
    -o-animation: spin 1s ease infinite;
    animation: spin 1s ease infinite; }
  #booking-form .header-sec h2 {
    font-size: 2em;
    margin-bottom: 40px; }
  #booking-form .booking-fields {
    margin-bottom: 20px; }
    #booking-form .booking-fields:last-child {
      margin-bottom: 0; }
    #booking-form .booking-fields.two-cols > div {
      padding: 0 10px; }
      @media (max-width: 460px) {
        #booking-form .booking-fields.two-cols > div {
          width: 100%;
          float: none;
          padding: 0; } }
      #booking-form .booking-fields.two-cols > div:first-child {
        padding-left: 0; }
        @media (max-width: 460px) {
          #booking-form .booking-fields.two-cols > div:first-child {
            padding-bottom: 20px; } }
      #booking-form .booking-fields.two-cols > div:last-child {
        padding-right: 0; }
  #booking-form input, #booking-form textarea {
    background: none;
    border: 1px solid #f2f2f2;
    width: 100%;
    height: 45px;
    padding: 0 20px;
    -webkit-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease; }
    #booking-form input.placeholder, #booking-form textarea.placeholder {
      color: gray; }
    #booking-form input:-moz-placeholder, #booking-form textarea:-moz-placeholder {
      color: gray; }
    #booking-form input::-moz-placeholder, #booking-form textarea::-moz-placeholder {
      color: gray; }
    #booking-form input:-ms-input-placeholder, #booking-form textarea:-ms-input-placeholder {
      color: gray; }
    #booking-form input::-webkit-input-placeholder, #booking-form textarea::-webkit-input-placeholder {
      color: gray; }
    #booking-form input:focus, #booking-form textarea:focus {
      border-color: rgba(229, 17, 31, 0.5); }
    #booking-form input[type="submit"], #booking-form textarea[type="submit"] {
      background: <?= $principalColor ?>;
      color: <?= $colorButton ?>;
      border: 1px solid <?= $principalColor ?>;
      padding: 8px 25px;
      -webkit-box-shadow: inset 0 0 0 1px #FFFFFF;
      box-shadow: inset 0 0 0 1px #FFFFFF;
      -webkit-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease; }
      #booking-form input[type="submit"]:hover, #booking-form textarea[type="submit"]:hover {
        background: #FFFFFF;
        color: <?= $principalColor ?>; }
  #booking-form textarea {
    padding: 20px;
    height: 120px; }
  #booking-form .response-message-box {
    display: none;
    text-align: center; }
    #booking-form .response-message-box.active {
      display: block; }

body #main-wrapper > p {
  margin: 0; }
body .sep-line {
  border-bottom: 5px solid #FFFFFF; }
body.page-template-default .main-page-container {
  padding: 80px 0; }
  body.page-template-default .main-page-container .inner-box {
    background: #f2f2f2;
    border: 3px solid #FFFFFF;
    padding: 20px;
    line-height: 30px;
    color: #b3b3b3;
    -webkit-box-shadow: 0 0 0 5px #f7f7f7;
    box-shadow: 0 0 0 5px #f7f7f7; }
    body.page-template-default .main-page-container .inner-box figure, body.page-template-default .main-page-container .inner-box img {
      height: auto;
      max-width: 100%; }
      body.page-template-default .main-page-container .inner-box figure.alignnone, body.page-template-default .main-page-container .inner-box img.alignnone {
        margin: 20px 0; }
    body.page-template-default .main-page-container .inner-box pre {
      background: #FFFFFF; }
    body.page-template-default .main-page-container .inner-box blockquote {
      background: #FFFFFF;
      border: 4px solid #f2f2f2;
      -webkit-box-shadow: 0 0 0 3px #FFFFFF;
      box-shadow: 0 0 0 3px #FFFFFF;
      color: #737373;
      font-size: 1em;
      line-height: 30px;
      padding: 50px;
      margin: 30px 0;
      position: relative; }
      body.page-template-default .main-page-container .inner-box blockquote:before, body.page-template-default .main-page-container .inner-box blockquote:after {
        position: absolute;
        display: block;
        font-family: "FontAwesome";
        font-size: 2em;
        color: #e6e6e6; }
      body.page-template-default .main-page-container .inner-box blockquote:before {
        content: "\f10d";
        left: 20px;
        top: 20px; }
      body.page-template-default .main-page-container .inner-box blockquote:after {
        content: "\f10e";
        right: 20px;
        bottom: 20px; }
      body.page-template-default .main-page-container .inner-box blockquote blockquote {
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        padding: 0;
        margin: 0; }
        body.page-template-default .main-page-container .inner-box blockquote blockquote:before, body.page-template-default .main-page-container .inner-box blockquote blockquote:after {
          display: none; }
    body.page-template-default .main-page-container .inner-box ul {
      list-style: square;
      padding-left: 30px; }
    body.page-template-default .main-page-container .inner-box table {
      width: 100%; }
      body.page-template-default .main-page-container .inner-box table th, body.page-template-default .main-page-container .inner-box table td {
        padding: 5px;
        background: #FFFFFF;
        text-align: center;
        border: 1px solid #e9e8f0; }
    body.page-template-default .main-page-container .inner-box .comment-respond {
      margin: 80px 0 30px; }
body.post-type-archive-agent #agent-section {
  padding-top: 5px; }

.blog-main-container {
  padding: 80px 0; }
  .blog-main-container .page-content {
    padding: 0 50px 0 0; }
    @media (max-width: 767px) {
      .blog-main-container .page-content {
        padding: 0 15px 30px; } }
    .blog-main-container .page-content .post-container .post-box {
      background: #f2f2f2;
      border: 3px solid #FFFFFF;
      padding: 20px;
      margin-bottom: 70px;
      -webkit-box-shadow: 0 0 0 5px #f7f7f7;
      box-shadow: 0 0 0 5px #f7f7f7; }
      .blog-main-container .page-content .post-container .post-box:only-child {
        margin-bottom: 0; }
      .blog-main-container .page-content .post-container .post-box .post-img-box {
        display: block;
        text-align: center; }
        .blog-main-container .page-content .post-container .post-box .post-img-box img {
          max-width: 100%;
          height: auto; }
      .blog-main-container .page-content .post-container .post-box .post-title-box {
        text-align: center;
        padding: 40px 0 0; }
        .blog-main-container .page-content .post-container .post-box .post-title-box .post-title {
          font: 1.7em/2.5em "Playfair Display", Arial, Helvetica, sans-serif;
          margin: 0 0 40px;
          color: <?= $colorText1 ?>;
          position: relative;
          text-align: center;
          padding: 0 0 20px;
          display: inline-block;
          border-bottom: 1px solid #d9d9d9; }
          .blog-main-container .page-content .post-container .post-box .post-title-box .post-title:before, .blog-main-container .page-content .post-container .post-box .post-title-box .post-title:after {
            display: block;
            content: "";
            position: absolute;
            background: #f2f2f2;
            border: 1px solid #d9d9d9;
            z-index: 1; }
          .blog-main-container .page-content .post-container .post-box .post-title-box .post-title:before {
            bottom: -6px;
            width: 22px;
            height: 12px;
            left: 50%;
            margin-left: -11px; }
          .blog-main-container .page-content .post-container .post-box .post-title-box .post-title:after {
            bottom: -4px;
            width: 18px;
            height: 8px;
            left: 50%;
            margin-left: -9px;
            z-index: 2; }
          .blog-main-container .page-content .post-container .post-box .post-title-box .post-title span {
            color: <?= $principalColor ?>; }
          .blog-main-container .page-content .post-container .post-box .post-title-box .post-title:hover {
            color: <?= $principalColor ?>; }
      .blog-main-container .page-content .post-container .post-box .post-meta {
        text-align: center;
        margin-bottom: 30px; }
        .blog-main-container .page-content .post-container .post-box .post-meta > div {
          display: inline-block;
          color: gray;
          font-size: .9em;
          margin: 0 10px; }
          .blog-main-container .page-content .post-container .post-box .post-meta > div > time:last-child {
            margin-left: 10px; }
          .blog-main-container .page-content .post-container .post-box .post-meta > div > time:only-child {
            margin-left: 0; }
          .blog-main-container .page-content .post-container .post-box .post-meta > div a {
            color: gray;
            margin: 0 5px; }
            .blog-main-container .page-content .post-container .post-box .post-meta > div a:hover {
              color: <?= $principalColor ?>; }
          .blog-main-container .page-content .post-container .post-box .post-meta > div i {
            vertical-align: middle;
            margin-right: 5px; }
      .blog-main-container .page-content .post-container .post-box .post-desc {
        padding: 0 30px;
        line-height: 30px;
        color: gray; }
        .blog-main-container .page-content .post-container .post-box .post-desc figure {
          max-width: 100%; }
        .blog-main-container .page-content .post-container .post-box .post-desc img {
          max-width: 100%;
          height: auto; }
        @media (max-width: 650px) {
          .blog-main-container .page-content .post-container .post-box .post-desc {
            padding: 0; } }
        .blog-main-container .page-content .post-container .post-box .post-desc pre {
          background: #FFFFFF; }
        .blog-main-container .page-content .post-container .post-box .post-desc blockquote {
          background: #FFFFFF;
          border: 4px solid #f2f2f2;
          -webkit-box-shadow: 0 0 0 3px #FFFFFF;
          box-shadow: 0 0 0 3px #FFFFFF;
          color: #737373;
          font-size: 1em;
          line-height: 30px;
          padding: 50px;
          margin: 30px 0;
          position: relative; }
          .blog-main-container .page-content .post-container .post-box .post-desc blockquote:before, .blog-main-container .page-content .post-container .post-box .post-desc blockquote:after {
            position: absolute;
            display: block;
            font-family: "FontAwesome";
            font-size: 2em;
            color: #e6e6e6; }
          .blog-main-container .page-content .post-container .post-box .post-desc blockquote:before {
            content: "\f10d";
            left: 20px;
            top: 20px; }
          .blog-main-container .page-content .post-container .post-box .post-desc blockquote:after {
            content: "\f10e";
            right: 20px;
            bottom: 20px; }
          .blog-main-container .page-content .post-container .post-box .post-desc blockquote blockquote {
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            padding: 0;
            margin: 0; }
            .blog-main-container .page-content .post-container .post-box .post-desc blockquote blockquote:before, .blog-main-container .page-content .post-container .post-box .post-desc blockquote blockquote:after {
              display: none; }
        .blog-main-container .page-content .post-container .post-box .post-desc ul {
          list-style: square;
          padding-left: 30px; }
        .blog-main-container .page-content .post-container .post-box .post-desc table {
          width: 100%; }
          .blog-main-container .page-content .post-container .post-box .post-desc table th, .blog-main-container .page-content .post-container .post-box .post-desc table td {
            padding: 5px;
            background: #FFFFFF;
            text-align: center;
            border: 1px solid #e9e8f0; }
        .blog-main-container .page-content .post-container .post-box .post-desc .post-pagination-box {
          text-align: center; }
          .blog-main-container .page-content .post-container .post-box .post-desc .post-pagination-box > a {
            width: 35px;
            height: 35px;
            display: inline-block;
            background: #FFFFFF;
            color: <?= $principalColor ?>;
            border: 3px double #d9d9d9;
            line-height: 30px;
            margin: 0 5px;
            -webkit-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease; }
            .blog-main-container .page-content .post-container .post-box .post-desc .post-pagination-box > a:hover, .blog-main-container .page-content .post-container .post-box .post-desc .post-pagination-box > a.active, .blog-main-container .page-content .post-container .post-box .post-desc .post-pagination-box > a.current {
              background: #FFFFFF;
              color: <?= $principalColor ?>;
              border-color: <?= $principalColor ?>; }
          .blog-main-container .page-content .post-container .post-box .post-desc .post-pagination-box > span {
            width: 35px;
            height: 35px;
            display: inline-block;
            background: #FFFFFF;
            color: <?= $principalColor ?>;
            border: 3px double <?= $principalColor ?>;
            line-height: 30px;
            margin: 0 5px; }
      .blog-main-container .page-content .post-container .post-box .read-more-container {
        text-align: center;
        padding: 40px; }
        .blog-main-container .page-content .post-container .post-box .read-more-container a {
          display: inline-block;
          line-height: 30px;
          border: 1px solid <?= $principalColor ?>;
          color: <?= $colorButton ?>;
          background: <?= $principalColor ?>;
          padding: 3px 20px;
          -webkit-box-shadow: inset 0 0 0 1px #f2f2f2;
          box-shadow: inset 0 0 0 1px #f2f2f2; }
          .blog-main-container .page-content .post-container .post-box .read-more-container a:hover {
            background: #f2f2f2;
            color: <?= $principalColor ?>; }
      .blog-main-container .page-content .post-container .post-box .post-tags {
        border-top: 1px solid #FFFFFF;
        border-bottom: 1px solid #FFFFFF;
        padding: 20px 0 15px;
        margin: 30px; }
        @media (max-width: 650px) {
          .blog-main-container .page-content .post-container .post-box .post-tags {
            margin: 30px 0; } }
        .blog-main-container .page-content .post-container .post-box .post-tags ul li {
          padding: 0; }
        .blog-main-container .page-content .post-container .post-box .post-tags a {
          display: inline-block;
          line-height: 30px;
          border: 1px solid <?= $principalColor ?>;
          color: <?= $principalColor ?>;
          background: #FFFFFF;
          margin: 0 5px 5px 0;
          padding: 0 15px;
          font-size: .9em; }
          .blog-main-container .page-content .post-container .post-box .post-tags a:hover {
            background: <?= $principalColor ?>;
            color: <?= $colorButton ?>; }
      .blog-main-container .page-content .post-container .post-box.post-password-required .post-desc form.post-password-form p {
        margin-bottom: 30px; }
        .blog-main-container .page-content .post-container .post-box.post-password-required .post-desc form.post-password-form p:last-child {
          margin-bottom: 0; }
      .blog-main-container .page-content .post-container .post-box.post-password-required .post-desc form.post-password-form label {
        font-weight: normal; }
        .blog-main-container .page-content .post-container .post-box.post-password-required .post-desc form.post-password-form label input {
          border: 1px solid #e6e6e6;
          padding: 5px 10px;
          min-width: 300px;
          margin-left: 10px; }
        .blog-main-container .page-content .post-container .post-box.post-password-required .post-desc form.post-password-form label + input {
          background: <?= $principalColor ?>;
          color: <?= $colorButton ?>;
          border: 1px solid <?= $principalColor ?>;
          margin-left: -5px;
          padding: 5px 20px;
          -webkit-transition: all 0.3s ease;
          -o-transition: all 0.3s ease;
          transition: all 0.3s ease; }
          .blog-main-container .page-content .post-container .post-box.post-password-required .post-desc form.post-password-form label + input:hover {
            background: #FFFFFF;
            color: <?= $principalColor ?>; }
      .blog-main-container .page-content .post-container .post-box.sticky {
        background: #FFFFFF;
        border: 1px solid <?= $principalColor ?>;
        -webkit-box-shadow: 0 0 0 2px #FFFFFF, 0 0 0 4px <?= $principalColor ?>;
        box-shadow: 0 0 0 2px #FFFFFF, 0 0 0 4px <?= $principalColor ?>; }
        .blog-main-container .page-content .post-container .post-box.sticky .post-title-box .post-title:before, .blog-main-container .page-content .post-container .post-box.sticky .post-title-box .post-title:after {
          background: #FFFFFF; }

#not-found-page {
  text-align: center;
  padding: 80px 0; }
  #not-found-page .search-box {
    width: 100%;
    max-width: 400px;
    margin: 40px auto; }
    #not-found-page .search-box .search-form:before, #not-found-page .search-box .search-form:after {
      content: " ";
      display: table; }
    #not-found-page .search-box .search-form:after {
      clear: both; }
    #not-found-page .search-box .search-form label {
      float: left;
      width: 90%;
      position: relative;
      margin-bottom: 0; }
      #not-found-page .search-box .search-form label > span {
        display: none; }
      #not-found-page .search-box .search-form label input {
        border: 1px solid #d5d2e2;
        border-right: 0;
        background: #FFFFFF;
        color: <?= $principalColor ?>;
        font-weight: normal;
        padding: 0 10px;
        width: 100%;
        height: 40px; }
        #not-found-page .search-box .search-form label input.placeholder {
          color: <?= $principalColor ?>; }
        #not-found-page .search-box .search-form label input:-moz-placeholder {
          color: <?= $principalColor ?>; }
        #not-found-page .search-box .search-form label input::-moz-placeholder {
          color: <?= $principalColor ?>; }
        #not-found-page .search-box .search-form label input:-ms-input-placeholder {
          color: <?= $principalColor ?>; }
        #not-found-page .search-box .search-form label input::-webkit-input-placeholder {
          color: <?= $principalColor ?>; }
      #not-found-page .search-box .search-form label:after {
        display: block;
        content: "\f002";
        font: 16px/20px "FontAwesome";
        color: #d5d2e2;
        position: absolute;
        right: -20px;
        top: 9px; }
    #not-found-page .search-box .search-form .search-submit {
      border: 1px solid #d5d2e2;
      float: left;
      border-left: 0;
      background: transparent;
      text-indent: -999999px;
      overflow: hidden;
      position: relative;
      z-index: 1;
      width: 10%;
      height: 40px;
      -moz-border-radius: 0;
      -webkit-border-radius: 0;
      border-radius: 0; }

#search-no-result {
  max-width: 670px;
  margin: 0 auto; }
  #search-no-result h3 {
    font: 2em/1.5em "Playfair Display", Arial, Helvetica, sans-serif;
    display: inline-block;
    margin: 10px 0 60px;
    color: <?= $colorText1 ?>;
    position: relative;
    padding: 20px 40px;
    border-bottom: 1px solid #d9d9d9; }
    @media (max-width: 992px) {
      #search-no-result h3 {
        font-size: 1.8em; } }
    #search-no-result h3:before, #search-no-result h3:after {
      display: block;
      content: "";
      position: absolute;
      background: #FFFFFF;
      border: 1px solid #d9d9d9;
      z-index: 1; }
    #search-no-result h3:before {
      bottom: -6px;
      width: 22px;
      height: 12px;
      left: 50%;
      margin-left: -11px; }
    #search-no-result h3:after {
      bottom: -4px;
      width: 18px;
      height: 8px;
      left: 50%;
      margin-left: -9px;
      z-index: 2; }
    #search-no-result h3 b {
      font-weight: normal; }
  #search-no-result h5 {
    text-align: center;
    margin-top: -30px;
    font-weight: normal;
    font-size: 16px;
    color: #b3b3b3; }
  #search-no-result .search-form {
    margin: 50px auto 0;
    max-width: 500px; }
    #search-no-result .search-form:before, #search-no-result .search-form:after {
      content: " ";
      display: table; }
    #search-no-result .search-form:after {
      clear: both; }
    #search-no-result .search-form label {
      float: left;
      width: 90%;
      position: relative;
      margin-bottom: 0; }
      #search-no-result .search-form label > span {
        display: none; }
      #search-no-result .search-form label input {
        border: 1px solid #d5d2e2;
        border-right: 0;
        background: #FFFFFF;
        color: <?= $principalColor ?>;
        font-weight: normal;
        padding: 0 10px;
        width: 100%;
        height: 40px; }
        #search-no-result .search-form label input.placeholder {
          color: <?= $principalColor ?>; }
        #search-no-result .search-form label input:-moz-placeholder {
          color: <?= $principalColor ?>; }
        #search-no-result .search-form label input::-moz-placeholder {
          color: <?= $principalColor ?>; }
        #search-no-result .search-form label input:-ms-input-placeholder {
          color: <?= $principalColor ?>; }
        #search-no-result .search-form label input::-webkit-input-placeholder {
          color: <?= $principalColor ?>; }
      #search-no-result .search-form label:after {
        display: block;
        content: "\f002";
        font: 16px/20px "FontAwesome";
        color: #d5d2e2;
        position: absolute;
        right: -20px;
        top: 9px;
        z-index: -1; }
    #search-no-result .search-form .search-submit {
      float: left;
      border: 1px solid #d5d2e2;
      border-left: 0;
      background: transparent;
      text-indent: -999999px;
      overflow: hidden;
      width: 10%;
      height: 40px;
      -moz-border-radius: 0;
      -webkit-border-radius: 0;
      border-radius: 0; }

body.page-template-booking-overview .page-main-container {
  padding: 80px 0; }

.attraction-single {
  padding: 80px 0; }
  .attraction-single .page-content {
    padding: 0 50px 0 0; }
    @media (max-width: 767px) {
      .attraction-single .page-content {
        padding: 0 15px 30px; } }
    .attraction-single .page-content .post-container .post-box {
      border: 30px solid #ebebeb;
      -webkit-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease; }
      .attraction-single .page-content .post-container .post-box:hover {
        border-color: #d9d9d9; }
        .attraction-single .page-content .post-container .post-box:hover .post-img-box:before {
          opacity: 1;
          filter: alpha(opacity=100); }
        .attraction-single .page-content .post-container .post-box:hover .post-img-box img {
          -moz-transform: translateY(-50%) scale(1.1);
          -ms-transform: translateY(-50%) scale(1.1);
          -webkit-transform: translateY(-50%) scale(1.1);
          transform: translateY(-50%) scale(1.1); }
          @media (max-width: 767px) {
            .attraction-single .page-content .post-container .post-box:hover .post-img-box img {
              -moz-transform: translateY(0) scale(1.1);
              -ms-transform: translateY(0) scale(1.1);
              -webkit-transform: translateY(0) scale(1.1);
              transform: translateY(0) scale(1.1); } }
      .attraction-single .page-content .post-container .post-box .post-img-box {
        display: block;
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 350px;
        -webkit-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease; }
        .attraction-single .page-content .post-container .post-box .post-img-box:before {
          display: block;
          position: absolute;
          content: "";
          z-index: 1;
          opacity: 0;
          filter: alpha(opacity=0);
          -webkit-transition: all 0.5s ease;
          -o-transition: all 0.5s ease;
          transition: all 0.5s ease;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          background: rgba(255, 255, 255, 0.6); }
        .attraction-single .page-content .post-container .post-box .post-img-box img {
          width: 100%;
          max-width: 100%;
          position: absolute;
          left: 0;
          top: 50%;
          -webkit-transition: all 0.5s ease;
          -o-transition: all 0.5s ease;
          transition: all 0.5s ease;
          -moz-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          -webkit-transform: translateY(-50%);
          transform: translateY(-50%); }
          @media (max-width: 767px) {
            .attraction-single .page-content .post-container .post-box .post-img-box img {
              position: initial;
              -moz-transform: translateY(0);
              -ms-transform: translateY(0);
              -webkit-transform: translateY(0);
              transform: translateY(0); } }
      .attraction-single .page-content .post-container .post-box .post-title-box {
        font: 1.8em/1.5em "Playfair Display", Arial, Helvetica, sans-serif;
        margin: 30px 0;
        text-align: center;
        position: relative; }
        .attraction-single .page-content .post-container .post-box .post-title-box:before, .attraction-single .page-content .post-container .post-box .post-title-box:after {
          display: block;
          content: "";
          position: absolute;
          background: #FFFFFF;
          border: 1px solid #d9d9d9;
          z-index: 1; }
        .attraction-single .page-content .post-container .post-box .post-title-box:before {
          bottom: -6px;
          width: 22px;
          height: 12px;
          left: 50%;
          margin-left: -11px; }
        .attraction-single .page-content .post-container .post-box .post-title-box:after {
          bottom: -4px;
          width: 18px;
          height: 8px;
          left: 50%;
          margin-left: -9px;
          z-index: 2; }
        .attraction-single .page-content .post-container .post-box .post-title-box a {
          line-height: 3em;
          display: inline-block;
          border-bottom: 1px solid #d9d9d9;
          color: <?= $colorText1 ?>; }
          .attraction-single .page-content .post-container .post-box .post-title-box a:hover {
            color: <?= $principalColor ?>; }
      .attraction-single .page-content .post-container .post-box .post-desc {
        line-height: 30px;
        color: #b3b3b3;
        padding: 0 40px 40px; }
</style>