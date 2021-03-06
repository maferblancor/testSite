<!DOCTYPE html>
<html>
<head><meta charset="utf-8" />

<title>module2</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.10/require.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>



<style type="text/css">
    /*!
*
* Twitter Bootstrap
*
*/
/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
}
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
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background-color: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
mark {
  background: #ff0;
  color: #000;
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  box-sizing: content-box;
  height: 0;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: textfield;
  box-sizing: content-box;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td,
th {
  padding: 0;
}
/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
@media print {
  *,
  *:before,
  *:after {
    background: transparent !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  a[href^="#"]:after,
  a[href^="javascript:"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  .navbar {
    display: none;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../components/bootstrap/fonts/glyphicons-halflings-regular.eot');
  src: url('../components/bootstrap/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.woff') format('woff'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../components/bootstrap/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: "\002a";
}
.glyphicon-plus:before {
  content: "\002b";
}
.glyphicon-euro:before,
.glyphicon-eur:before {
  content: "\20ac";
}
.glyphicon-minus:before {
  content: "\2212";
}
.glyphicon-cloud:before {
  content: "\2601";
}
.glyphicon-envelope:before {
  content: "\2709";
}
.glyphicon-pencil:before {
  content: "\270f";
}
.glyphicon-glass:before {
  content: "\e001";
}
.glyphicon-music:before {
  content: "\e002";
}
.glyphicon-search:before {
  content: "\e003";
}
.glyphicon-heart:before {
  content: "\e005";
}
.glyphicon-star:before {
  content: "\e006";
}
.glyphicon-star-empty:before {
  content: "\e007";
}
.glyphicon-user:before {
  content: "\e008";
}
.glyphicon-film:before {
  content: "\e009";
}
.glyphicon-th-large:before {
  content: "\e010";
}
.glyphicon-th:before {
  content: "\e011";
}
.glyphicon-th-list:before {
  content: "\e012";
}
.glyphicon-ok:before {
  content: "\e013";
}
.glyphicon-remove:before {
  content: "\e014";
}
.glyphicon-zoom-in:before {
  content: "\e015";
}
.glyphicon-zoom-out:before {
  content: "\e016";
}
.glyphicon-off:before {
  content: "\e017";
}
.glyphicon-signal:before {
  content: "\e018";
}
.glyphicon-cog:before {
  content: "\e019";
}
.glyphicon-trash:before {
  content: "\e020";
}
.glyphicon-home:before {
  content: "\e021";
}
.glyphicon-file:before {
  content: "\e022";
}
.glyphicon-time:before {
  content: "\e023";
}
.glyphicon-road:before {
  content: "\e024";
}
.glyphicon-download-alt:before {
  content: "\e025";
}
.glyphicon-download:before {
  content: "\e026";
}
.glyphicon-upload:before {
  content: "\e027";
}
.glyphicon-inbox:before {
  content: "\e028";
}
.glyphicon-play-circle:before {
  content: "\e029";
}
.glyphicon-repeat:before {
  content: "\e030";
}
.glyphicon-refresh:before {
  content: "\e031";
}
.glyphicon-list-alt:before {
  content: "\e032";
}
.glyphicon-lock:before {
  content: "\e033";
}
.glyphicon-flag:before {
  content: "\e034";
}
.glyphicon-headphones:before {
  content: "\e035";
}
.glyphicon-volume-off:before {
  content: "\e036";
}
.glyphicon-volume-down:before {
  content: "\e037";
}
.glyphicon-volume-up:before {
  content: "\e038";
}
.glyphicon-qrcode:before {
  content: "\e039";
}
.glyphicon-barcode:before {
  content: "\e040";
}
.glyphicon-tag:before {
  content: "\e041";
}
.glyphicon-tags:before {
  content: "\e042";
}
.glyphicon-book:before {
  content: "\e043";
}
.glyphicon-bookmark:before {
  content: "\e044";
}
.glyphicon-print:before {
  content: "\e045";
}
.glyphicon-camera:before {
  content: "\e046";
}
.glyphicon-font:before {
  content: "\e047";
}
.glyphicon-bold:before {
  content: "\e048";
}
.glyphicon-italic:before {
  content: "\e049";
}
.glyphicon-text-height:before {
  content: "\e050";
}
.glyphicon-text-width:before {
  content: "\e051";
}
.glyphicon-align-left:before {
  content: "\e052";
}
.glyphicon-align-center:before {
  content: "\e053";
}
.glyphicon-align-right:before {
  content: "\e054";
}
.glyphicon-align-justify:before {
  content: "\e055";
}
.glyphicon-list:before {
  content: "\e056";
}
.glyphicon-indent-left:before {
  content: "\e057";
}
.glyphicon-indent-right:before {
  content: "\e058";
}
.glyphicon-facetime-video:before {
  content: "\e059";
}
.glyphicon-picture:before {
  content: "\e060";
}
.glyphicon-map-marker:before {
  content: "\e062";
}
.glyphicon-adjust:before {
  content: "\e063";
}
.glyphicon-tint:before {
  content: "\e064";
}
.glyphicon-edit:before {
  content: "\e065";
}
.glyphicon-share:before {
  content: "\e066";
}
.glyphicon-check:before {
  content: "\e067";
}
.glyphicon-move:before {
  content: "\e068";
}
.glyphicon-step-backward:before {
  content: "\e069";
}
.glyphicon-fast-backward:before {
  content: "\e070";
}
.glyphicon-backward:before {
  content: "\e071";
}
.glyphicon-play:before {
  content: "\e072";
}
.glyphicon-pause:before {
  content: "\e073";
}
.glyphicon-stop:before {
  content: "\e074";
}
.glyphicon-forward:before {
  content: "\e075";
}
.glyphicon-fast-forward:before {
  content: "\e076";
}
.glyphicon-step-forward:before {
  content: "\e077";
}
.glyphicon-eject:before {
  content: "\e078";
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
.glyphicon-chevron-right:before {
  content: "\e080";
}
.glyphicon-plus-sign:before {
  content: "\e081";
}
.glyphicon-minus-sign:before {
  content: "\e082";
}
.glyphicon-remove-sign:before {
  content: "\e083";
}
.glyphicon-ok-sign:before {
  content: "\e084";
}
.glyphicon-question-sign:before {
  content: "\e085";
}
.glyphicon-info-sign:before {
  content: "\e086";
}
.glyphicon-screenshot:before {
  content: "\e087";
}
.glyphicon-remove-circle:before {
  content: "\e088";
}
.glyphicon-ok-circle:before {
  content: "\e089";
}
.glyphicon-ban-circle:before {
  content: "\e090";
}
.glyphicon-arrow-left:before {
  content: "\e091";
}
.glyphicon-arrow-right:before {
  content: "\e092";
}
.glyphicon-arrow-up:before {
  content: "\e093";
}
.glyphicon-arrow-down:before {
  content: "\e094";
}
.glyphicon-share-alt:before {
  content: "\e095";
}
.glyphicon-resize-full:before {
  content: "\e096";
}
.glyphicon-resize-small:before {
  content: "\e097";
}
.glyphicon-exclamation-sign:before {
  content: "\e101";
}
.glyphicon-gift:before {
  content: "\e102";
}
.glyphicon-leaf:before {
  content: "\e103";
}
.glyphicon-fire:before {
  content: "\e104";
}
.glyphicon-eye-open:before {
  content: "\e105";
}
.glyphicon-eye-close:before {
  content: "\e106";
}
.glyphicon-warning-sign:before {
  content: "\e107";
}
.glyphicon-plane:before {
  content: "\e108";
}
.glyphicon-calendar:before {
  content: "\e109";
}
.glyphicon-random:before {
  content: "\e110";
}
.glyphicon-comment:before {
  content: "\e111";
}
.glyphicon-magnet:before {
  content: "\e112";
}
.glyphicon-chevron-up:before {
  content: "\e113";
}
.glyphicon-chevron-down:before {
  content: "\e114";
}
.glyphicon-retweet:before {
  content: "\e115";
}
.glyphicon-shopping-cart:before {
  content: "\e116";
}
.glyphicon-folder-close:before {
  content: "\e117";
}
.glyphicon-folder-open:before {
  content: "\e118";
}
.glyphicon-resize-vertical:before {
  content: "\e119";
}
.glyphicon-resize-horizontal:before {
  content: "\e120";
}
.glyphicon-hdd:before {
  content: "\e121";
}
.glyphicon-bullhorn:before {
  content: "\e122";
}
.glyphicon-bell:before {
  content: "\e123";
}
.glyphicon-certificate:before {
  content: "\e124";
}
.glyphicon-thumbs-up:before {
  content: "\e125";
}
.glyphicon-thumbs-down:before {
  content: "\e126";
}
.glyphicon-hand-right:before {
  content: "\e127";
}
.glyphicon-hand-left:before {
  content: "\e128";
}
.glyphicon-hand-up:before {
  content: "\e129";
}
.glyphicon-hand-down:before {
  content: "\e130";
}
.glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.glyphicon-globe:before {
  content: "\e135";
}
.glyphicon-wrench:before {
  content: "\e136";
}
.glyphicon-tasks:before {
  content: "\e137";
}
.glyphicon-filter:before {
  content: "\e138";
}
.glyphicon-briefcase:before {
  content: "\e139";
}
.glyphicon-fullscreen:before {
  content: "\e140";
}
.glyphicon-dashboard:before {
  content: "\e141";
}
.glyphicon-paperclip:before {
  content: "\e142";
}
.glyphicon-heart-empty:before {
  content: "\e143";
}
.glyphicon-link:before {
  content: "\e144";
}
.glyphicon-phone:before {
  content: "\e145";
}
.glyphicon-pushpin:before {
  content: "\e146";
}
.glyphicon-usd:before {
  content: "\e148";
}
.glyphicon-gbp:before {
  content: "\e149";
}
.glyphicon-sort:before {
  content: "\e150";
}
.glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.glyphicon-sort-by-order:before {
  content: "\e153";
}
.glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.glyphicon-unchecked:before {
  content: "\e157";
}
.glyphicon-expand:before {
  content: "\e158";
}
.glyphicon-collapse-down:before {
  content: "\e159";
}
.glyphicon-collapse-up:before {
  content: "\e160";
}
.glyphicon-log-in:before {
  content: "\e161";
}
.glyphicon-flash:before {
  content: "\e162";
}
.glyphicon-log-out:before {
  content: "\e163";
}
.glyphicon-new-window:before {
  content: "\e164";
}
.glyphicon-record:before {
  content: "\e165";
}
.glyphicon-save:before {
  content: "\e166";
}
.glyphicon-open:before {
  content: "\e167";
}
.glyphicon-saved:before {
  content: "\e168";
}
.glyphicon-import:before {
  content: "\e169";
}
.glyphicon-export:before {
  content: "\e170";
}
.glyphicon-send:before {
  content: "\e171";
}
.glyphicon-floppy-disk:before {
  content: "\e172";
}
.glyphicon-floppy-saved:before {
  content: "\e173";
}
.glyphicon-floppy-remove:before {
  content: "\e174";
}
.glyphicon-floppy-save:before {
  content: "\e175";
}
.glyphicon-floppy-open:before {
  content: "\e176";
}
.glyphicon-credit-card:before {
  content: "\e177";
}
.glyphicon-transfer:before {
  content: "\e178";
}
.glyphicon-cutlery:before {
  content: "\e179";
}
.glyphicon-header:before {
  content: "\e180";
}
.glyphicon-compressed:before {
  content: "\e181";
}
.glyphicon-earphone:before {
  content: "\e182";
}
.glyphicon-phone-alt:before {
  content: "\e183";
}
.glyphicon-tower:before {
  content: "\e184";
}
.glyphicon-stats:before {
  content: "\e185";
}
.glyphicon-sd-video:before {
  content: "\e186";
}
.glyphicon-hd-video:before {
  content: "\e187";
}
.glyphicon-subtitles:before {
  content: "\e188";
}
.glyphicon-sound-stereo:before {
  content: "\e189";
}
.glyphicon-sound-dolby:before {
  content: "\e190";
}
.glyphicon-sound-5-1:before {
  content: "\e191";
}
.glyphicon-sound-6-1:before {
  content: "\e192";
}
.glyphicon-sound-7-1:before {
  content: "\e193";
}
.glyphicon-copyright-mark:before {
  content: "\e194";
}
.glyphicon-registration-mark:before {
  content: "\e195";
}
.glyphicon-cloud-download:before {
  content: "\e197";
}
.glyphicon-cloud-upload:before {
  content: "\e198";
}
.glyphicon-tree-conifer:before {
  content: "\e199";
}
.glyphicon-tree-deciduous:before {
  content: "\e200";
}
.glyphicon-cd:before {
  content: "\e201";
}
.glyphicon-save-file:before {
  content: "\e202";
}
.glyphicon-open-file:before {
  content: "\e203";
}
.glyphicon-level-up:before {
  content: "\e204";
}
.glyphicon-copy:before {
  content: "\e205";
}
.glyphicon-paste:before {
  content: "\e206";
}
.glyphicon-alert:before {
  content: "\e209";
}
.glyphicon-equalizer:before {
  content: "\e210";
}
.glyphicon-king:before {
  content: "\e211";
}
.glyphicon-queen:before {
  content: "\e212";
}
.glyphicon-pawn:before {
  content: "\e213";
}
.glyphicon-bishop:before {
  content: "\e214";
}
.glyphicon-knight:before {
  content: "\e215";
}
.glyphicon-baby-formula:before {
  content: "\e216";
}
.glyphicon-tent:before {
  content: "\26fa";
}
.glyphicon-blackboard:before {
  content: "\e218";
}
.glyphicon-bed:before {
  content: "\e219";
}
.glyphicon-apple:before {
  content: "\f8ff";
}
.glyphicon-erase:before {
  content: "\e221";
}
.glyphicon-hourglass:before {
  content: "\231b";
}
.glyphicon-lamp:before {
  content: "\e223";
}
.glyphicon-duplicate:before {
  content: "\e224";
}
.glyphicon-piggy-bank:before {
  content: "\e225";
}
.glyphicon-scissors:before {
  content: "\e226";
}
.glyphicon-bitcoin:before {
  content: "\e227";
}
.glyphicon-btc:before {
  content: "\e227";
}
.glyphicon-xbt:before {
  content: "\e227";
}
.glyphicon-yen:before {
  content: "\00a5";
}
.glyphicon-jpy:before {
  content: "\00a5";
}
.glyphicon-ruble:before {
  content: "\20bd";
}
.glyphicon-rub:before {
  content: "\20bd";
}
.glyphicon-scale:before {
  content: "\e230";
}
.glyphicon-ice-lolly:before {
  content: "\e231";
}
.glyphicon-ice-lolly-tasted:before {
  content: "\e232";
}
.glyphicon-education:before {
  content: "\e233";
}
.glyphicon-option-horizontal:before {
  content: "\e234";
}
.glyphicon-option-vertical:before {
  content: "\e235";
}
.glyphicon-menu-hamburger:before {
  content: "\e236";
}
.glyphicon-modal-window:before {
  content: "\e237";
}
.glyphicon-oil:before {
  content: "\e238";
}
.glyphicon-grain:before {
  content: "\e239";
}
.glyphicon-sunglasses:before {
  content: "\e240";
}
.glyphicon-text-size:before {
  content: "\e241";
}
.glyphicon-text-color:before {
  content: "\e242";
}
.glyphicon-text-background:before {
  content: "\e243";
}
.glyphicon-object-align-top:before {
  content: "\e244";
}
.glyphicon-object-align-bottom:before {
  content: "\e245";
}
.glyphicon-object-align-horizontal:before {
  content: "\e246";
}
.glyphicon-object-align-left:before {
  content: "\e247";
}
.glyphicon-object-align-vertical:before {
  content: "\e248";
}
.glyphicon-object-align-right:before {
  content: "\e249";
}
.glyphicon-triangle-right:before {
  content: "\e250";
}
.glyphicon-triangle-left:before {
  content: "\e251";
}
.glyphicon-triangle-bottom:before {
  content: "\e252";
}
.glyphicon-triangle-top:before {
  content: "\e253";
}
.glyphicon-console:before {
  content: "\e254";
}
.glyphicon-superscript:before {
  content: "\e255";
}
.glyphicon-subscript:before {
  content: "\e256";
}
.glyphicon-menu-left:before {
  content: "\e257";
}
.glyphicon-menu-right:before {
  content: "\e258";
}
.glyphicon-menu-down:before {
  content: "\e259";
}
.glyphicon-menu-up:before {
  content: "\e260";
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
  font-size: 10px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  line-height: 1.42857143;
  color: #000;
  background-color: #fff;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #337ab7;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #23527c;
  text-decoration: underline;
}
a:focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 3px;
}
.img-thumbnail {
  padding: 4px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 2px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 18px;
  margin-bottom: 18px;
  border: 0;
  border-top: 1px solid #eeeeee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
[role="button"] {
  cursor: pointer;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777777;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 18px;
  margin-bottom: 9px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 9px;
  margin-bottom: 9px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 33px;
}
h2,
.h2 {
  font-size: 27px;
}
h3,
.h3 {
  font-size: 23px;
}
h4,
.h4 {
  font-size: 17px;
}
h5,
.h5 {
  font-size: 13px;
}
h6,
.h6 {
  font-size: 12px;
}
p {
  margin: 0 0 9px;
}
.lead {
  margin-bottom: 18px;
  font-size: 14px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 19.5px;
  }
}
small,
.small {
  font-size: 92%;
}
mark,
.mark {
  background-color: #fcf8e3;
  padding: .2em;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-nowrap {
  white-space: nowrap;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-capitalize {
  text-transform: capitalize;
}
.text-muted {
  color: #777777;
}
.text-primary {
  color: #337ab7;
}
a.text-primary:hover,
a.text-primary:focus {
  color: #286090;
}
.text-success {
  color: #3c763d;
}
a.text-success:hover,
a.text-success:focus {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
a.text-info:hover,
a.text-info:focus {
  color: #245269;
}
.text-warning {
  color: #8a6d3b;
}
a.text-warning:hover,
a.text-warning:focus {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
a.text-danger:hover,
a.text-danger:focus {
  color: #843534;
}
.bg-primary {
  color: #fff;
  background-color: #337ab7;
}
a.bg-primary:hover,
a.bg-primary:focus {
  background-color: #286090;
}
.bg-success {
  background-color: #dff0d8;
}
a.bg-success:hover,
a.bg-success:focus {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: #d9edf7;
}
a.bg-info:hover,
a.bg-info:focus {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:hover,
a.bg-warning:focus {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: #f2dede;
}
a.bg-danger:hover,
a.bg-danger:focus {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 8px;
  margin: 36px 0 18px;
  border-bottom: 1px solid #eeeeee;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 9px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
  margin-left: -5px;
}
.list-inline > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 18px;
}
dt,
dd {
  line-height: 1.42857143;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
@media (min-width: 541px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777777;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 9px 18px;
  margin: 0 0 18px;
  font-size: inherit;
  border-left: 5px solid #eeeeee;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777777;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: '\2014 \00A0';
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #eeeeee;
  border-left: 0;
  text-align: right;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: '';
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
address {
  margin-bottom: 18px;
  font-style: normal;
  line-height: 1.42857143;
}
code,
kbd,
pre,
samp {
  font-family: monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 2px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #888;
  background-color: transparent;
  border-radius: 1px;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: bold;
  box-shadow: none;
}
pre {
  display: block;
  padding: 8.5px;
  margin: 0 0 9px;
  font-size: 12px;
  line-height: 1.42857143;
  word-break: break-all;
  word-wrap: break-word;
  color: #333333;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 2px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 0px;
  padding-right: 0px;
}
@media (min-width: 768px) {
  .container {
    width: 768px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 940px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1140px;
  }
}
.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 0px;
  padding-right: 0px;
}
.row {
  margin-left: 0px;
  margin-right: 0px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 0px;
  padding-right: 0px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0%;
  }
}
table {
  background-color: transparent;
}
caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777777;
  text-align: left;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 18px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  float: none;
  display: table-column;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  float: none;
  display: table-cell;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.table-responsive {
  overflow-x: auto;
  min-height: 0.01%;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 13.5px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  padding: 0;
  margin: 0;
  border: 0;
  min-width: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 18px;
  font-size: 19.5px;
  line-height: inherit;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal;
}
input[type="file"] {
  display: block;
}
input[type="range"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
}
.form-control {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.form-control::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999;
}
.form-control::-webkit-input-placeholder {
  color: #999;
}
.form-control::-ms-expand {
  border: 0;
  background-color: transparent;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #eeeeee;
  opacity: 1;
}
.form-control[disabled],
fieldset[disabled] .form-control {
  cursor: not-allowed;
}
textarea.form-control {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: none;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].form-control,
  input[type="time"].form-control,
  input[type="datetime-local"].form-control,
  input[type="month"].form-control {
    line-height: 32px;
  }
  input[type="date"].input-sm,
  input[type="time"].input-sm,
  input[type="datetime-local"].input-sm,
  input[type="month"].input-sm,
  .input-group-sm input[type="date"],
  .input-group-sm input[type="time"],
  .input-group-sm input[type="datetime-local"],
  .input-group-sm input[type="month"] {
    line-height: 30px;
  }
  input[type="date"].input-lg,
  input[type="time"].input-lg,
  input[type="datetime-local"].input-lg,
  input[type="month"].input-lg,
  .input-group-lg input[type="date"],
  .input-group-lg input[type="time"],
  .input-group-lg input[type="datetime-local"],
  .input-group-lg input[type="month"] {
    line-height: 45px;
  }
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.radio label,
.checkbox label {
  min-height: 18px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-left: -20px;
  margin-top: 4px \9;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"].disabled,
input[type="checkbox"].disabled,
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"] {
  cursor: not-allowed;
}
.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.form-control-static {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
  min-height: 31px;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-left: 0;
  padding-right: 0;
}
.input-sm {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
select.input-sm {
  height: 30px;
  line-height: 30px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
.form-group-sm select.form-control {
  height: 30px;
  line-height: 30px;
}
.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 30px;
  min-height: 30px;
  padding: 6px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.input-lg {
  height: 45px;
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
select.input-lg {
  height: 45px;
  line-height: 45px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.form-group-lg .form-control {
  height: 45px;
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
.form-group-lg select.form-control {
  height: 45px;
  line-height: 45px;
}
.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 45px;
  min-height: 35px;
  padding: 11px 16px;
  font-size: 17px;
  line-height: 1.3333333;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 40px;
}
.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 32px;
  height: 32px;
  line-height: 32px;
  text-align: center;
  pointer-events: none;
}
.input-lg + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.form-group-lg .form-control + .form-control-feedback {
  width: 45px;
  height: 45px;
  line-height: 45px;
}
.input-sm + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.form-group-sm .form-control + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success.radio label,
.has-success.checkbox label,
.has-success.radio-inline label,
.has-success.checkbox-inline label {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  border-color: #3c763d;
  background-color: #dff0d8;
}
.has-success .form-control-feedback {
  color: #3c763d;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning.radio label,
.has-warning.checkbox label,
.has-warning.radio-inline label,
.has-warning.checkbox-inline label {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  border-color: #8a6d3b;
  background-color: #fcf8e3;
}
.has-warning .form-control-feedback {
  color: #8a6d3b;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error.radio label,
.has-error.checkbox label,
.has-error.radio-inline label,
.has-error.checkbox-inline label {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  border-color: #a94442;
  background-color: #f2dede;
}
.has-error .form-control-feedback {
  color: #a94442;
}
.has-feedback label ~ .form-control-feedback {
  top: 23px;
}
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #404040;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-static {
    display: inline-block;
  }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .form-inline .input-group .input-group-addon,
  .form-inline .input-group .input-group-btn,
  .form-inline .input-group .form-control {
    width: auto;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio label,
  .form-inline .checkbox label {
    padding-left: 0;
  }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 25px;
}
.form-horizontal .form-group {
  margin-left: 0px;
  margin-right: 0px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  right: 0px;
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 11px;
    font-size: 17px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
    font-size: 12px;
  }
}
.btn {
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
  font-size: 13px;
  line-height: 1.42857143;
  border-radius: 2px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus,
.btn.focus {
  color: #333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
}
a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.btn-default:focus,
.btn-default.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
.btn-default:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active:hover,
.btn-default.active:hover,
.open > .dropdown-toggle.btn-default:hover,
.btn-default:active:focus,
.btn-default.active:focus,
.open > .dropdown-toggle.btn-default:focus,
.btn-default:active.focus,
.btn-default.active.focus,
.open > .dropdown-toggle.btn-default.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .badge {
  color: #fff;
  background-color: #333;
}
.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary:focus,
.btn-primary.focus {
  color: #fff;
  background-color: #286090;
  border-color: #122b40;
}
.btn-primary:hover {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .dropdown-toggle.btn-primary.focus {
  color: #fff;
  background-color: #204d74;
  border-color: #122b40;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus {
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary .badge {
  color: #337ab7;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:focus,
.btn-success.focus {
  color: #fff;
  background-color: #449d44;
  border-color: #255625;
}
.btn-success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active:hover,
.btn-success.active:hover,
.open > .dropdown-toggle.btn-success:hover,
.btn-success:active:focus,
.btn-success.active:focus,
.open > .dropdown-toggle.btn-success:focus,
.btn-success:active.focus,
.btn-success.active.focus,
.open > .dropdown-toggle.btn-success.focus {
  color: #fff;
  background-color: #398439;
  border-color: #255625;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info:focus,
.btn-info.focus {
  color: #fff;
  background-color: #31b0d5;
  border-color: #1b6d85;
}
.btn-info:hover {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active:hover,
.btn-info.active:hover,
.open > .dropdown-toggle.btn-info:hover,
.btn-info:active:focus,
.btn-info.active:focus,
.open > .dropdown-toggle.btn-info:focus,
.btn-info:active.focus,
.btn-info.active.focus,
.open > .dropdown-toggle.btn-info.focus {
  color: #fff;
  background-color: #269abc;
  border-color: #1b6d85;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning:focus,
.btn-warning.focus {
  color: #fff;
  background-color: #ec971f;
  border-color: #985f0d;
}
.btn-warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active:hover,
.btn-warning.active:hover,
.open > .dropdown-toggle.btn-warning:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open > .dropdown-toggle.btn-warning:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open > .dropdown-toggle.btn-warning.focus {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger:focus,
.btn-danger.focus {
  color: #fff;
  background-color: #c9302c;
  border-color: #761c19;
}
.btn-danger:hover {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active:hover,
.btn-danger.active:hover,
.open > .dropdown-toggle.btn-danger:hover,
.btn-danger:active:focus,
.btn-danger.active:focus,
.open > .dropdown-toggle.btn-danger:focus,
.btn-danger:active.focus,
.btn-danger.active.focus,
.open > .dropdown-toggle.btn-danger.focus {
  color: #fff;
  background-color: #ac2925;
  border-color: #761c19;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger .badge {
  color: #d9534f;
  background-color: #fff;
}
.btn-link {
  color: #337ab7;
  font-weight: normal;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link.active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #23527c;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #777777;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-property: height, visibility;
  transition-property: height, visibility;
  -webkit-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-timing-function: ease;
  transition-timing-function: ease;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid \9;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropup,
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
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
  font-size: 13px;
  text-align: left;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 2px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 8px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333333;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  background-color: #337ab7;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #777777;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  left: auto;
  right: 0;
}
.dropdown-menu-left {
  left: 0;
  right: auto;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #777777;
  white-space: nowrap;
}
.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px dashed;
  border-bottom: 4px solid \9;
  content: "";
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
@media (min-width: 541px) {
  .navbar-right .dropdown-menu {
    left: auto;
    right: 0;
  }
  .navbar-right .dropdown-menu-left {
    left: 0;
    right: auto;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn,
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  float: none;
  display: table-cell;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
[data-toggle="buttons"] > .btn input[type="radio"],
[data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
[data-toggle="buttons"] > .btn input[type="checkbox"],
[data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*="col-"] {
  float: none;
  padding-left: 0;
  padding-right: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group .form-control:focus {
  z-index: 3;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 45px;
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
  border-radius: 3px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 45px;
  line-height: 45px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 13px;
  font-weight: normal;
  line-height: 1;
  color: #555555;
  text-align: center;
  background-color: #eeeeee;
  border: 1px solid #ccc;
  border-radius: 2px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 1px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 17px;
  border-radius: 3px;
}
.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  z-index: 2;
  margin-left: -1px;
}
.nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.nav > li.disabled > a {
  color: #777777;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #777777;
  text-decoration: none;
  background-color: transparent;
  cursor: not-allowed;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #eeeeee;
  border-color: #337ab7;
}
.nav .nav-divider {
  height: 1px;
  margin: 8px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 2px 2px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #ddd;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #555555;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
  cursor: default;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 2px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 2px 2px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 2px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #337ab7;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 2px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 2px 2px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar {
  position: relative;
  min-height: 30px;
  margin-bottom: 18px;
  border: 1px solid transparent;
}
@media (min-width: 541px) {
  .navbar {
    border-radius: 2px;
  }
}
@media (min-width: 541px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  overflow-x: visible;
  padding-right: 0px;
  padding-left: 0px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch;
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 541px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-left: 0;
    padding-right: 0;
  }
}
.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
@media (max-device-width: 540px) and (orientation: landscape) {
  .navbar-fixed-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px;
  }
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: 0px;
  margin-left: 0px;
}
@media (min-width: 541px) {
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 541px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
@media (min-width: 541px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  padding: 6px 0px;
  font-size: 17px;
  line-height: 18px;
  height: 30px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
.navbar-brand > img {
  display: block;
}
@media (min-width: 541px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: 0px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  margin-right: 0px;
  padding: 9px 10px;
  margin-top: -2px;
  margin-bottom: -2px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 2px;
}
.navbar-toggle:focus {
  outline: 0;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 541px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 3px 0px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 18px;
}
@media (max-width: 540px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 18px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 541px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 6px;
    padding-bottom: 6px;
  }
}
.navbar-form {
  margin-left: 0px;
  margin-right: 0px;
  padding: 10px 0px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: -1px;
  margin-bottom: -1px;
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .form-control-static {
    display: inline-block;
  }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn,
  .navbar-form .input-group .form-control {
    width: auto;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio label,
  .navbar-form .checkbox label {
    padding-left: 0;
  }
  .navbar-form .radio input[type="radio"],
  .navbar-form .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 540px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
  .navbar-form .form-group:last-child {
    margin-bottom: 0;
  }
}
@media (min-width: 541px) {
  .navbar-form {
    width: auto;
    border: 0;
    margin-left: 0;
    margin-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: -1px;
  margin-bottom: -1px;
}
.navbar-btn.btn-sm {
  margin-top: 0px;
  margin-bottom: 0px;
}
.navbar-btn.btn-xs {
  margin-top: 4px;
  margin-bottom: 4px;
}
.navbar-text {
  margin-top: 6px;
  margin-bottom: 6px;
}
@media (min-width: 541px) {
  .navbar-text {
    float: left;
    margin-left: 0px;
    margin-right: 0px;
  }
}
@media (min-width: 541px) {
  .navbar-left {
    float: left !important;
    float: left;
  }
  .navbar-right {
    float: right !important;
    float: right;
    margin-right: 0px;
  }
  .navbar-right ~ .navbar-right {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  background-color: #e7e7e7;
  color: #555;
}
@media (max-width: 540px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.navbar-default .btn-link {
  color: #777;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #333;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: #ccc;
}
.navbar-inverse {
  background-color: #222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #9d9d9d;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #fff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  background-color: #080808;
  color: #fff;
}
@media (max-width: 540px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #9d9d9d;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #9d9d9d;
}
.navbar-inverse .navbar-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link {
  color: #9d9d9d;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #fff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 18px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 2px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  content: "/\00a0";
  padding: 0 5px;
  color: #5e5e5e;
}
.breadcrumb > .active {
  color: #777777;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 18px 0;
  border-radius: 2px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.42857143;
  text-decoration: none;
  color: #337ab7;
  background-color: #fff;
  border: 1px solid #ddd;
  margin-left: -1px;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius: 2px;
  border-top-left-radius: 2px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-bottom-right-radius: 2px;
  border-top-right-radius: 2px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  z-index: 2;
  color: #23527c;
  background-color: #eeeeee;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 3;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
  cursor: default;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777777;
  background-color: #fff;
  border-color: #ddd;
  cursor: not-allowed;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 17px;
  line-height: 1.3333333;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: 1px;
  border-top-left-radius: 1px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: 1px;
  border-top-right-radius: 1px;
}
.pager {
  padding-left: 0;
  margin: 18px 0;
  list-style: none;
  text-align: center;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #777777;
  background-color: #fff;
  cursor: not-allowed;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
a.label:hover,
a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #777777;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #5e5e5e;
}
.label-primary {
  background-color: #337ab7;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #286090;
}
.label-success {
  background-color: #5cb85c;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44;
}
.label-info {
  background-color: #5bc0de;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5;
}
.label-warning {
  background-color: #f0ad4e;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f;
}
.label-danger {
  background-color: #d9534f;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #c9302c;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  color: #fff;
  line-height: 1;
  vertical-align: middle;
  white-space: nowrap;
  text-align: center;
  background-color: #777777;
  border-radius: 10px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge,
.btn-group-xs > .btn .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #337ab7;
  background-color: #fff;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.jumbotron {
  padding-top: 30px;
  padding-bottom: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eeeeee;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 20px;
  font-weight: 200;
}
.jumbotron > hr {
  border-top-color: #d5d5d5;
}
.container .jumbotron,
.container-fluid .jumbotron {
  border-radius: 3px;
  padding-left: 0px;
  padding-right: 0px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px;
  }
  .container .jumbotron,
  .container-fluid .jumbotron {
    padding-left: 60px;
    padding-right: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 59px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 18px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 2px;
  -webkit-transition: border 0.2s ease-in-out;
  -o-transition: border 0.2s ease-in-out;
  transition: border 0.2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-left: auto;
  margin-right: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #337ab7;
}
.thumbnail .caption {
  padding: 9px;
  color: #000;
}
.alert {
  padding: 15px;
  margin-bottom: 18px;
  border: 1px solid transparent;
  border-radius: 2px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #3c763d;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #31708f;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  background-color: #fcf8e3;
  border-color: #faebcc;
  color: #8a6d3b;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  background-color: #f2dede;
  border-color: #ebccd1;
  color: #a94442;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  overflow: hidden;
  height: 18px;
  margin-bottom: 18px;
  background-color: #f5f5f5;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 12px;
  line-height: 18px;
  color: #fff;
  text-align: center;
  background-color: #337ab7;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media,
.media-body {
  zoom: 1;
  overflow: hidden;
}
.media-body {
  width: 10000px;
}
.media-object {
  display: block;
}
.media-object.img-thumbnail {
  max-width: none;
}
.media-right,
.media > .pull-right {
  padding-left: 10px;
}
.media-left,
.media > .pull-left {
  padding-right: 10px;
}
.media-left,
.media-right,
.media-body {
  display: table-cell;
  vertical-align: top;
}
.media-middle {
  vertical-align: middle;
}
.media-bottom {
  vertical-align: bottom;
}
.media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  margin-bottom: 20px;
  padding-left: 0;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.list-group-item:first-child {
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
a.list-group-item,
button.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading,
button.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:hover,
button.list-group-item:hover,
a.list-group-item:focus,
button.list-group-item:focus {
  text-decoration: none;
  color: #555;
  background-color: #f5f5f5;
}
button.list-group-item {
  width: 100%;
  text-align: left;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  background-color: #eeeeee;
  color: #777777;
  cursor: not-allowed;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #777777;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #c7ddef;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success,
button.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading,
button.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
button.list-group-item-success:hover,
a.list-group-item-success:focus,
button.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info,
button.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading,
button.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
button.list-group-item-info:hover,
a.list-group-item-info:focus,
button.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning,
button.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading,
button.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
button.list-group-item-warning:hover,
a.list-group-item-warning:focus,
button.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger,
button.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading,
button.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
button.list-group-item-danger:hover,
a.list-group-item-danger:focus,
button.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 18px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 2px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 15px;
  color: inherit;
}
.panel-title > a,
.panel-title > small,
.panel-title > .small,
.panel-title > small > a,
.panel-title > .small > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 1px;
  border-bottom-left-radius: 1px;
}
.panel > .list-group,
.panel > .panel-collapse > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item,
.panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child,
.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;
}
.panel > .list-group:last-child .list-group-item:last-child,
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 1px;
  border-bottom-left-radius: 1px;
}
.panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table caption,
.panel > .table-responsive > .table caption,
.panel > .panel-collapse > .table caption {
  padding-left: 15px;
  padding-right: 15px;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;
}
.panel > .table:first-child > thead:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
  border-top-left-radius: 1px;
  border-top-right-radius: 1px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 1px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 1px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 1px;
  border-bottom-left-radius: 1px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-left-radius: 1px;
  border-bottom-right-radius: 1px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 1px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 1px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid #ddd;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  border: 0;
  margin-bottom: 0;
}
.panel-group {
  margin-bottom: 18px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 2px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body,
.panel-group .panel-heading + .panel-collapse > .list-group {
  border-top: 1px solid #ddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ddd;
}
.panel-default {
  border-color: #ddd;
}
.panel-default > .panel-heading {
  color: #333333;
  background-color: #f5f5f5;
  border-color: #ddd;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ddd;
}
.panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #333333;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ddd;
}
.panel-primary {
  border-color: #337ab7;
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #337ab7;
}
.panel-primary > .panel-heading .badge {
  color: #337ab7;
  background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #337ab7;
}
.panel-success {
  border-color: #d6e9c6;
}
.panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #d6e9c6;
}
.panel-success > .panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #d6e9c6;
}
.panel-info {
  border-color: #bce8f1;
}
.panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #bce8f1;
}
.panel-info > .panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #bce8f1;
}
.panel-warning {
  border-color: #faebcc;
}
.panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.panel-warning > .panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #faebcc;
}
.panel-danger {
  border-color: #ebccd1;
}
.panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebccd1;
}
.panel-danger > .panel-heading .badge {
  color: #f2dede;
  background-color: #a94442;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebccd1;
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
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
  border: 0;
}
.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.well-lg {
  padding: 24px;
  border-radius: 3px;
}
.well-sm {
  padding: 9px;
  border-radius: 1px;
}
.close {
  float: right;
  font-size: 19.5px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
.modal-open {
  overflow: hidden;
}
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
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  -o-transform: translate(0, -25%);
  transform: translate(0, -25%);
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -moz-transition: -moz-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: 0;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
  filter: alpha(opacity=0);
}
.modal-backdrop.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.42857143;
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
  filter: alpha(opacity=0);
}
.tooltip.in {
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.tooltip.top {
  margin-top: -3px;
  padding: 5px 0;
}
.tooltip.right {
  margin-left: 3px;
  padding: 0 5px;
}
.tooltip.bottom {
  margin-top: 3px;
  padding: 5px 0;
}
.tooltip.left {
  margin-left: -3px;
  padding: 0 5px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 2px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  bottom: 0;
  right: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
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
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  font-size: 13px;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  margin: 0;
  padding: 8px 14px;
  font-size: 13px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 2px 2px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  border-width: 10px;
  content: "";
}
.popover.top > .arrow {
  left: 50%;
  margin-left: -11px;
  border-bottom-width: 0;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.25);
  bottom: -11px;
}
.popover.top > .arrow:after {
  content: " ";
  bottom: 1px;
  margin-left: -10px;
  border-bottom-width: 0;
  border-top-color: #fff;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-left-width: 0;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.popover.right > .arrow:after {
  content: " ";
  left: 1px;
  bottom: -10px;
  border-left-width: 0;
  border-right-color: #fff;
}
.popover.bottom > .arrow {
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  top: -11px;
}
.popover.bottom > .arrow:after {
  content: " ";
  top: 1px;
  margin-left: -10px;
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.popover.left > .arrow:after {
  content: " ";
  right: 1px;
  border-right-width: 0;
  border-left-color: #fff;
  bottom: -10px;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;
}
.carousel-inner > .item {
  display: none;
  position: relative;
  -webkit-transition: 0.6s ease-in-out left;
  -o-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
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
    perspective: 1000px;
  }
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.next.left,
  .carousel-inner > .item.prev.right,
  .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 15%;
  opacity: 0.5;
  filter: alpha(opacity=50);
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
  background-color: rgba(0, 0, 0, 0);
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}
.carousel-control.right {
  left: auto;
  right: 0;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
}
.carousel-control:hover,
.carousel-control:focus {
  outline: 0;
  color: #fff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  margin-top: -10px;
  z-index: 5;
  display: inline-block;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  line-height: 1;
  font-family: serif;
}
.carousel-control .icon-prev:before {
  content: '\2039';
}
.carousel-control .icon-next:before {
  content: '\203a';
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  border: 1px solid #fff;
  border-radius: 10px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
}
.carousel-indicators .active {
  margin: 0;
  width: 12px;
  height: 12px;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -10px;
    font-size: 30px;
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -10px;
  }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -10px;
  }
  .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-header:before,
.modal-header:after,
.modal-footer:before,
.modal-footer:after,
.item_buttons:before,
.item_buttons:after {
  content: " ";
  display: table;
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-header:after,
.modal-footer:after,
.item_buttons:after {
  clear: both;
}
.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
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
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table !important;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table !important;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table !important;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table !important;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table !important;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
}
.visible-print-block {
  display: none !important;
}
@media print {
  .visible-print-block {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;
}
@media print {
  .visible-print-inline {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;
}
@media print {
  .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}
/*!
*
* Font Awesome
*
*/
/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('../components/font-awesome/fonts/fontawesome-webfont.eot?v=4.7.0');
  src: url('../components/font-awesome/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('../components/font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('../components/font-awesome/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('../components/font-awesome/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('../components/font-awesome/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eee;
  border-radius: .1em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left {
  margin-right: .3em;
}
.fa.fa-pull-right {
  margin-left: .3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: .3em;
}
.fa.pull-right {
  margin-left: .3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #fff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: "\f000";
}
.fa-music:before {
  content: "\f001";
}
.fa-search:before {
  content: "\f002";
}
.fa-envelope-o:before {
  content: "\f003";
}
.fa-heart:before {
  content: "\f004";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-o:before {
  content: "\f006";
}
.fa-user:before {
  content: "\f007";
}
.fa-film:before {
  content: "\f008";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-check:before {
  content: "\f00c";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: "\f00d";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-signal:before {
  content: "\f012";
}
.fa-gear:before,
.fa-cog:before {
  content: "\f013";
}
.fa-trash-o:before {
  content: "\f014";
}
.fa-home:before {
  content: "\f015";
}
.fa-file-o:before {
  content: "\f016";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-road:before {
  content: "\f018";
}
.fa-download:before {
  content: "\f019";
}
.fa-arrow-circle-o-down:before {
  content: "\f01a";
}
.fa-arrow-circle-o-up:before {
  content: "\f01b";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-play-circle-o:before {
  content: "\f01d";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: "\f01e";
}
.fa-refresh:before {
  content: "\f021";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-lock:before {
  content: "\f023";
}
.fa-flag:before {
  content: "\f024";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-print:before {
  content: "\f02f";
}
.fa-camera:before {
  content: "\f030";
}
.fa-font:before {
  content: "\f031";
}
.fa-bold:before {
  content: "\f032";
}
.fa-italic:before {
  content: "\f033";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-list:before {
  content: "\f03a";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-video-camera:before {
  content: "\f03d";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: "\f03e";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-tint:before {
  content: "\f043";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: "\f044";
}
.fa-share-square-o:before {
  content: "\f045";
}
.fa-check-square-o:before {
  content: "\f046";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-eject:before {
  content: "\f052";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-times-circle-o:before {
  content: "\f05c";
}
.fa-check-circle-o:before {
  content: "\f05d";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-expand:before {
  content: "\f065";
}
.fa-compress:before {
  content: "\f066";
}
.fa-plus:before {
  content: "\f067";
}
.fa-minus:before {
  content: "\f068";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-plane:before {
  content: "\f072";
}
.fa-calendar:before {
  content: "\f073";
}
.fa-random:before {
  content: "\f074";
}
.fa-comment:before {
  content: "\f075";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: "\f080";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-key:before {
  content: "\f084";
}
.fa-gears:before,
.fa-cogs:before {
  content: "\f085";
}
.fa-comments:before {
  content: "\f086";
}
.fa-thumbs-o-up:before {
  content: "\f087";
}
.fa-thumbs-o-down:before {
  content: "\f088";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-heart-o:before {
  content: "\f08a";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-thumb-tack:before {
  content: "\f08d";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-upload:before {
  content: "\f093";
}
.fa-lemon-o:before {
  content: "\f094";
}
.fa-phone:before {
  content: "\f095";
}
.fa-square-o:before {
  content: "\f096";
}
.fa-bookmark-o:before {
  content: "\f097";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: "\f09a";
}
.fa-github:before {
  content: "\f09b";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-feed:before,
.fa-rss:before {
  content: "\f09e";
}
.fa-hdd-o:before {
  content: "\f0a0";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-hand-o-right:before {
  content: "\f0a4";
}
.fa-hand-o-left:before {
  content: "\f0a5";
}
.fa-hand-o-up:before {
  content: "\f0a6";
}
.fa-hand-o-down:before {
  content: "\f0a7";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-group:before,
.fa-users:before {
  content: "\f0c0";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-copy:before,
.fa-files-o:before {
  content: "\f0c5";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-save:before,
.fa-floppy-o:before {
  content: "\f0c7";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: "\f0c9";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-plus:before {
  content: "\f0d5";
}
.fa-money:before {
  content: "\f0d6";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-unsorted:before,
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: "\f0dd";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: "\f0de";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-legal:before,
.fa-gavel:before {
  content: "\f0e3";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-comment-o:before {
  content: "\f0e5";
}
.fa-comments-o:before {
  content: "\f0e6";
}
.fa-flash:before,
.fa-bolt:before {
  content: "\f0e7";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-paste:before,
.fa-clipboard:before {
  content: "\f0ea";
}
.fa-lightbulb-o:before {
  content: "\f0eb";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-bell-o:before {
  content: "\f0a2";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-cutlery:before {
  content: "\f0f5";
}
.fa-file-text-o:before {
  content: "\f0f6";
}
.fa-building-o:before {
  content: "\f0f7";
}
.fa-hospital-o:before {
  content: "\f0f8";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f10b";
}
.fa-circle-o:before {
  content: "\f10c";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-circle:before {
  content: "\f111";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f112";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-folder-o:before {
  content: "\f114";
}
.fa-folder-open-o:before {
  content: "\f115";
}
.fa-smile-o:before {
  content: "\f118";
}
.fa-frown-o:before {
  content: "\f119";
}
.fa-meh-o:before {
  content: "\f11a";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-keyboard-o:before {
  content: "\f11c";
}
.fa-flag-o:before {
  content: "\f11d";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-code:before {
  content: "\f121";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: "\f122";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: "\f123";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-crop:before {
  content: "\f125";
}
.fa-code-fork:before {
  content: "\f126";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: "\f127";
}
.fa-question:before {
  content: "\f128";
}
.fa-info:before {
  content: "\f129";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-shield:before {
  content: "\f132";
}
.fa-calendar-o:before {
  content: "\f133";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-minus-square-o:before {
  content: "\f147";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-pencil-square:before {
  content: "\f14b";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: "\f150";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: "\f151";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: "\f152";
}
.fa-euro:before,
.fa-eur:before {
  content: "\f153";
}
.fa-gbp:before {
  content: "\f154";
}
.fa-dollar:before,
.fa-usd:before {
  content: "\f155";
}
.fa-rupee:before,
.fa-inr:before {
  content: "\f156";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: "\f157";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: "\f158";
}
.fa-won:before,
.fa-krw:before {
  content: "\f159";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: "\f15a";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-text:before {
  content: "\f15c";
}
.fa-sort-alpha-asc:before {
  content: "\f15d";
}
.fa-sort-alpha-desc:before {
  content: "\f15e";
}
.fa-sort-amount-asc:before {
  content: "\f160";
}
.fa-sort-amount-desc:before {
  content: "\f161";
}
.fa-sort-numeric-asc:before {
  content: "\f162";
}
.fa-sort-numeric-desc:before {
  content: "\f163";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-youtube-play:before {
  content: "\f16a";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-adn:before {
  content: "\f170";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitbucket-square:before {
  content: "\f172";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-apple:before {
  content: "\f179";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-android:before {
  content: "\f17b";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-trello:before {
  content: "\f181";
}
.fa-female:before {
  content: "\f182";
}
.fa-male:before {
  content: "\f183";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: "\f184";
}
.fa-sun-o:before {
  content: "\f185";
}
.fa-moon-o:before {
  content: "\f186";
}
.fa-archive:before {
  content: "\f187";
}
.fa-bug:before {
  content: "\f188";
}
.fa-vk:before {
  content: "\f189";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-arrow-circle-o-right:before {
  content: "\f18e";
}
.fa-arrow-circle-o-left:before {
  content: "\f190";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: "\f191";
}
.fa-dot-circle-o:before {
  content: "\f192";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: "\f195";
}
.fa-plus-square-o:before {
  content: "\f196";
}
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-slack:before {
  content: "\f198";
}
.fa-envelope-square:before {
  content: "\f199";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: "\f19c";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: "\f19d";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-pied-piper-pp:before {
  content: "\f1a7";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-spoon:before {
  content: "\f1b1";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-automobile:before,
.fa-car:before {
  content: "\f1b9";
}
.fa-cab:before,
.fa-taxi:before {
  content: "\f1ba";
}
.fa-tree:before {
  content: "\f1bb";
}
.fa-spotify:before {
  content: "\f1bc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-file-pdf-o:before {
  content: "\f1c1";
}
.fa-file-word-o:before {
  content: "\f1c2";
}
.fa-file-excel-o:before {
  content: "\f1c3";
}
.fa-file-powerpoint-o:before {
  content: "\f1c4";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: "\f1c5";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: "\f1c6";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: "\f1c7";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: "\f1c8";
}
.fa-file-code-o:before {
  content: "\f1c9";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-circle-o-notch:before {
  content: "\f1ce";
}
.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
  content: "\f1d0";
}
.fa-ge:before,
.fa-empire:before {
  content: "\f1d1";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-wechat:before,
.fa-weixin:before {
  content: "\f1d7";
}
.fa-send:before,
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: "\f1d9";
}
.fa-history:before {
  content: "\f1da";
}
.fa-circle-thin:before {
  content: "\f1db";
}
.fa-header:before {
  content: "\f1dc";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-sliders:before {
  content: "\f1de";
}
.fa-share-alt:before {
  content: "\f1e0";
}
.fa-share-alt-square:before {
  content: "\f1e1";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: "\f1e3";
}
.fa-tty:before {
  content: "\f1e4";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-newspaper-o:before {
  content: "\f1ea";
}
.fa-wifi:before {
  content: "\f1eb";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bell-slash-o:before {
  content: "\f1f7";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-at:before {
  content: "\f1fa";
}
.fa-eyedropper:before {
  content: "\f1fb";
}
.fa-paint-brush:before {
  content: "\f1fc";
}
.fa-birthday-cake:before {
  content: "\f1fd";
}
.fa-area-chart:before {
  content: "\f1fe";
}
.fa-pie-chart:before {
  content: "\f200";
}
.fa-line-chart:before {
  content: "\f201";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-bus:before {
  content: "\f207";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-cc:before {
  content: "\f20a";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: "\f20b";
}
.fa-meanpath:before {
  content: "\f20c";
}
.fa-buysellads:before {
  content: "\f20d";
}
.fa-connectdevelop:before {
  content: "\f20e";
}
.fa-dashcube:before {
  content: "\f210";
}
.fa-forumbee:before {
  content: "\f211";
}
.fa-leanpub:before {
  content: "\f212";
}
.fa-sellsy:before {
  content: "\f213";
}
.fa-shirtsinbulk:before {
  content: "\f214";
}
.fa-simplybuilt:before {
  content: "\f215";
}
.fa-skyatlas:before {
  content: "\f216";
}
.fa-cart-plus:before {
  content: "\f217";
}
.fa-cart-arrow-down:before {
  content: "\f218";
}
.fa-diamond:before {
  content: "\f219";
}
.fa-ship:before {
  content: "\f21a";
}
.fa-user-secret:before {
  content: "\f21b";
}
.fa-motorcycle:before {
  content: "\f21c";
}
.fa-street-view:before {
  content: "\f21d";
}
.fa-heartbeat:before {
  content: "\f21e";
}
.fa-venus:before {
  content: "\f221";
}
.fa-mars:before {
  content: "\f222";
}
.fa-mercury:before {
  content: "\f223";
}
.fa-intersex:before,
.fa-transgender:before {
  content: "\f224";
}
.fa-transgender-alt:before {
  content: "\f225";
}
.fa-venus-double:before {
  content: "\f226";
}
.fa-mars-double:before {
  content: "\f227";
}
.fa-venus-mars:before {
  content: "\f228";
}
.fa-mars-stroke:before {
  content: "\f229";
}
.fa-mars-stroke-v:before {
  content: "\f22a";
}
.fa-mars-stroke-h:before {
  content: "\f22b";
}
.fa-neuter:before {
  content: "\f22c";
}
.fa-genderless:before {
  content: "\f22d";
}
.fa-facebook-official:before {
  content: "\f230";
}
.fa-pinterest-p:before {
  content: "\f231";
}
.fa-whatsapp:before {
  content: "\f232";
}
.fa-server:before {
  content: "\f233";
}
.fa-user-plus:before {
  content: "\f234";
}
.fa-user-times:before {
  content: "\f235";
}
.fa-hotel:before,
.fa-bed:before {
  content: "\f236";
}
.fa-viacoin:before {
  content: "\f237";
}
.fa-train:before {
  content: "\f238";
}
.fa-subway:before {
  content: "\f239";
}
.fa-medium:before {
  content: "\f23a";
}
.fa-yc:before,
.fa-y-combinator:before {
  content: "\f23b";
}
.fa-optin-monster:before {
  content: "\f23c";
}
.fa-opencart:before {
  content: "\f23d";
}
.fa-expeditedssl:before {
  content: "\f23e";
}
.fa-battery-4:before,
.fa-battery:before,
.fa-battery-full:before {
  content: "\f240";
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
  content: "\f241";
}
.fa-battery-2:before,
.fa-battery-half:before {
  content: "\f242";
}
.fa-battery-1:before,
.fa-battery-quarter:before {
  content: "\f243";
}
.fa-battery-0:before,
.fa-battery-empty:before {
  content: "\f244";
}
.fa-mouse-pointer:before {
  content: "\f245";
}
.fa-i-cursor:before {
  content: "\f246";
}
.fa-object-group:before {
  content: "\f247";
}
.fa-object-ungroup:before {
  content: "\f248";
}
.fa-sticky-note:before {
  content: "\f249";
}
.fa-sticky-note-o:before {
  content: "\f24a";
}
.fa-cc-jcb:before {
  content: "\f24b";
}
.fa-cc-diners-club:before {
  content: "\f24c";
}
.fa-clone:before {
  content: "\f24d";
}
.fa-balance-scale:before {
  content: "\f24e";
}
.fa-hourglass-o:before {
  content: "\f250";
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
  content: "\f251";
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
  content: "\f252";
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
  content: "\f253";
}
.fa-hourglass:before {
  content: "\f254";
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
  content: "\f255";
}
.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
  content: "\f256";
}
.fa-hand-scissors-o:before {
  content: "\f257";
}
.fa-hand-lizard-o:before {
  content: "\f258";
}
.fa-hand-spock-o:before {
  content: "\f259";
}
.fa-hand-pointer-o:before {
  content: "\f25a";
}
.fa-hand-peace-o:before {
  content: "\f25b";
}
.fa-trademark:before {
  content: "\f25c";
}
.fa-registered:before {
  content: "\f25d";
}
.fa-creative-commons:before {
  content: "\f25e";
}
.fa-gg:before {
  content: "\f260";
}
.fa-gg-circle:before {
  content: "\f261";
}
.fa-tripadvisor:before {
  content: "\f262";
}
.fa-odnoklassniki:before {
  content: "\f263";
}
.fa-odnoklassniki-square:before {
  content: "\f264";
}
.fa-get-pocket:before {
  content: "\f265";
}
.fa-wikipedia-w:before {
  content: "\f266";
}
.fa-safari:before {
  content: "\f267";
}
.fa-chrome:before {
  content: "\f268";
}
.fa-firefox:before {
  content: "\f269";
}
.fa-opera:before {
  content: "\f26a";
}
.fa-internet-explorer:before {
  content: "\f26b";
}
.fa-tv:before,
.fa-television:before {
  content: "\f26c";
}
.fa-contao:before {
  content: "\f26d";
}
.fa-500px:before {
  content: "\f26e";
}
.fa-amazon:before {
  content: "\f270";
}
.fa-calendar-plus-o:before {
  content: "\f271";
}
.fa-calendar-minus-o:before {
  content: "\f272";
}
.fa-calendar-times-o:before {
  content: "\f273";
}
.fa-calendar-check-o:before {
  content: "\f274";
}
.fa-industry:before {
  content: "\f275";
}
.fa-map-pin:before {
  content: "\f276";
}
.fa-map-signs:before {
  content: "\f277";
}
.fa-map-o:before {
  content: "\f278";
}
.fa-map:before {
  content: "\f279";
}
.fa-commenting:before {
  content: "\f27a";
}
.fa-commenting-o:before {
  content: "\f27b";
}
.fa-houzz:before {
  content: "\f27c";
}
.fa-vimeo:before {
  content: "\f27d";
}
.fa-black-tie:before {
  content: "\f27e";
}
.fa-fonticons:before {
  content: "\f280";
}
.fa-reddit-alien:before {
  content: "\f281";
}
.fa-edge:before {
  content: "\f282";
}
.fa-credit-card-alt:before {
  content: "\f283";
}
.fa-codiepie:before {
  content: "\f284";
}
.fa-modx:before {
  content: "\f285";
}
.fa-fort-awesome:before {
  content: "\f286";
}
.fa-usb:before {
  content: "\f287";
}
.fa-product-hunt:before {
  content: "\f288";
}
.fa-mixcloud:before {
  content: "\f289";
}
.fa-scribd:before {
  content: "\f28a";
}
.fa-pause-circle:before {
  content: "\f28b";
}
.fa-pause-circle-o:before {
  content: "\f28c";
}
.fa-stop-circle:before {
  content: "\f28d";
}
.fa-stop-circle-o:before {
  content: "\f28e";
}
.fa-shopping-bag:before {
  content: "\f290";
}
.fa-shopping-basket:before {
  content: "\f291";
}
.fa-hashtag:before {
  content: "\f292";
}
.fa-bluetooth:before {
  content: "\f293";
}
.fa-bluetooth-b:before {
  content: "\f294";
}
.fa-percent:before {
  content: "\f295";
}
.fa-gitlab:before {
  content: "\f296";
}
.fa-wpbeginner:before {
  content: "\f297";
}
.fa-wpforms:before {
  content: "\f298";
}
.fa-envira:before {
  content: "\f299";
}
.fa-universal-access:before {
  content: "\f29a";
}
.fa-wheelchair-alt:before {
  content: "\f29b";
}
.fa-question-circle-o:before {
  content: "\f29c";
}
.fa-blind:before {
  content: "\f29d";
}
.fa-audio-description:before {
  content: "\f29e";
}
.fa-volume-control-phone:before {
  content: "\f2a0";
}
.fa-braille:before {
  content: "\f2a1";
}
.fa-assistive-listening-systems:before {
  content: "\f2a2";
}
.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
  content: "\f2a3";
}
.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
  content: "\f2a4";
}
.fa-glide:before {
  content: "\f2a5";
}
.fa-glide-g:before {
  content: "\f2a6";
}
.fa-signing:before,
.fa-sign-language:before {
  content: "\f2a7";
}
.fa-low-vision:before {
  content: "\f2a8";
}
.fa-viadeo:before {
  content: "\f2a9";
}
.fa-viadeo-square:before {
  content: "\f2aa";
}
.fa-snapchat:before {
  content: "\f2ab";
}
.fa-snapchat-ghost:before {
  content: "\f2ac";
}
.fa-snapchat-square:before {
  content: "\f2ad";
}
.fa-pied-piper:before {
  content: "\f2ae";
}
.fa-first-order:before {
  content: "\f2b0";
}
.fa-yoast:before {
  content: "\f2b1";
}
.fa-themeisle:before {
  content: "\f2b2";
}
.fa-google-plus-circle:before,
.fa-google-plus-official:before {
  content: "\f2b3";
}
.fa-fa:before,
.fa-font-awesome:before {
  content: "\f2b4";
}
.fa-handshake-o:before {
  content: "\f2b5";
}
.fa-envelope-open:before {
  content: "\f2b6";
}
.fa-envelope-open-o:before {
  content: "\f2b7";
}
.fa-linode:before {
  content: "\f2b8";
}
.fa-address-book:before {
  content: "\f2b9";
}
.fa-address-book-o:before {
  content: "\f2ba";
}
.fa-vcard:before,
.fa-address-card:before {
  content: "\f2bb";
}
.fa-vcard-o:before,
.fa-address-card-o:before {
  content: "\f2bc";
}
.fa-user-circle:before {
  content: "\f2bd";
}
.fa-user-circle-o:before {
  content: "\f2be";
}
.fa-user-o:before {
  content: "\f2c0";
}
.fa-id-badge:before {
  content: "\f2c1";
}
.fa-drivers-license:before,
.fa-id-card:before {
  content: "\f2c2";
}
.fa-drivers-license-o:before,
.fa-id-card-o:before {
  content: "\f2c3";
}
.fa-quora:before {
  content: "\f2c4";
}
.fa-free-code-camp:before {
  content: "\f2c5";
}
.fa-telegram:before {
  content: "\f2c6";
}
.fa-thermometer-4:before,
.fa-thermometer:before,
.fa-thermometer-full:before {
  content: "\f2c7";
}
.fa-thermometer-3:before,
.fa-thermometer-three-quarters:before {
  content: "\f2c8";
}
.fa-thermometer-2:before,
.fa-thermometer-half:before {
  content: "\f2c9";
}
.fa-thermometer-1:before,
.fa-thermometer-quarter:before {
  content: "\f2ca";
}
.fa-thermometer-0:before,
.fa-thermometer-empty:before {
  content: "\f2cb";
}
.fa-shower:before {
  content: "\f2cc";
}
.fa-bathtub:before,
.fa-s15:before,
.fa-bath:before {
  content: "\f2cd";
}
.fa-podcast:before {
  content: "\f2ce";
}
.fa-window-maximize:before {
  content: "\f2d0";
}
.fa-window-minimize:before {
  content: "\f2d1";
}
.fa-window-restore:before {
  content: "\f2d2";
}
.fa-times-rectangle:before,
.fa-window-close:before {
  content: "\f2d3";
}
.fa-times-rectangle-o:before,
.fa-window-close-o:before {
  content: "\f2d4";
}
.fa-bandcamp:before {
  content: "\f2d5";
}
.fa-grav:before {
  content: "\f2d6";
}
.fa-etsy:before {
  content: "\f2d7";
}
.fa-imdb:before {
  content: "\f2d8";
}
.fa-ravelry:before {
  content: "\f2d9";
}
.fa-eercast:before {
  content: "\f2da";
}
.fa-microchip:before {
  content: "\f2db";
}
.fa-snowflake-o:before {
  content: "\f2dc";
}
.fa-superpowers:before {
  content: "\f2dd";
}
.fa-wpexplorer:before {
  content: "\f2de";
}
.fa-meetup:before {
  content: "\f2e0";
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
/*!
*
* IPython base
*
*/
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
code {
  color: #000;
}
pre {
  font-size: inherit;
  line-height: inherit;
}
label {
  font-weight: normal;
}
/* Make the page background atleast 100% the height of the view port */
/* Make the page itself atleast 70% the height of the view port */
.border-box-sizing {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
.corner-all {
  border-radius: 2px;
}
.no-padding {
  padding: 0px;
}
/* Flexible box model classes */
/* Taken from Alex Russell http://infrequently.org/2009/08/css-3-progress/ */
/* This file is a compatability layer.  It allows the usage of flexible box 
model layouts accross multiple browsers, including older browsers.  The newest,
universal implementation of the flexible box model is used when available (see
`Modern browsers` comments below).  Browsers that are known to implement this 
new spec completely include:

    Firefox 28.0+
    Chrome 29.0+
    Internet Explorer 11+ 
    Opera 17.0+

Browsers not listed, including Safari, are supported via the styling under the
`Old browsers` comments below.
*/
.hbox {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
.hbox > * {
  /* Old browsers */
  -webkit-box-flex: 0;
  -moz-box-flex: 0;
  box-flex: 0;
  /* Modern browsers */
  flex: none;
}
.vbox {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
}
.vbox > * {
  /* Old browsers */
  -webkit-box-flex: 0;
  -moz-box-flex: 0;
  box-flex: 0;
  /* Modern browsers */
  flex: none;
}
.hbox.reverse,
.vbox.reverse,
.reverse {
  /* Old browsers */
  -webkit-box-direction: reverse;
  -moz-box-direction: reverse;
  box-direction: reverse;
  /* Modern browsers */
  flex-direction: row-reverse;
}
.hbox.box-flex0,
.vbox.box-flex0,
.box-flex0 {
  /* Old browsers */
  -webkit-box-flex: 0;
  -moz-box-flex: 0;
  box-flex: 0;
  /* Modern browsers */
  flex: none;
  width: auto;
}
.hbox.box-flex1,
.vbox.box-flex1,
.box-flex1 {
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
.hbox.box-flex,
.vbox.box-flex,
.box-flex {
  /* Old browsers */
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
.hbox.box-flex2,
.vbox.box-flex2,
.box-flex2 {
  /* Old browsers */
  -webkit-box-flex: 2;
  -moz-box-flex: 2;
  box-flex: 2;
  /* Modern browsers */
  flex: 2;
}
.box-group1 {
  /*  Deprecated */
  -webkit-box-flex-group: 1;
  -moz-box-flex-group: 1;
  box-flex-group: 1;
}
.box-group2 {
  /* Deprecated */
  -webkit-box-flex-group: 2;
  -moz-box-flex-group: 2;
  box-flex-group: 2;
}
.hbox.start,
.vbox.start,
.start {
  /* Old browsers */
  -webkit-box-pack: start;
  -moz-box-pack: start;
  box-pack: start;
  /* Modern browsers */
  justify-content: flex-start;
}
.hbox.end,
.vbox.end,
.end {
  /* Old browsers */
  -webkit-box-pack: end;
  -moz-box-pack: end;
  box-pack: end;
  /* Modern browsers */
  justify-content: flex-end;
}
.hbox.center,
.vbox.center,
.center {
  /* Old browsers */
  -webkit-box-pack: center;
  -moz-box-pack: center;
  box-pack: center;
  /* Modern browsers */
  justify-content: center;
}
.hbox.baseline,
.vbox.baseline,
.baseline {
  /* Old browsers */
  -webkit-box-pack: baseline;
  -moz-box-pack: baseline;
  box-pack: baseline;
  /* Modern browsers */
  justify-content: baseline;
}
.hbox.stretch,
.vbox.stretch,
.stretch {
  /* Old browsers */
  -webkit-box-pack: stretch;
  -moz-box-pack: stretch;
  box-pack: stretch;
  /* Modern browsers */
  justify-content: stretch;
}
.hbox.align-start,
.vbox.align-start,
.align-start {
  /* Old browsers */
  -webkit-box-align: start;
  -moz-box-align: start;
  box-align: start;
  /* Modern browsers */
  align-items: flex-start;
}
.hbox.align-end,
.vbox.align-end,
.align-end {
  /* Old browsers */
  -webkit-box-align: end;
  -moz-box-align: end;
  box-align: end;
  /* Modern browsers */
  align-items: flex-end;
}
.hbox.align-center,
.vbox.align-center,
.align-center {
  /* Old browsers */
  -webkit-box-align: center;
  -moz-box-align: center;
  box-align: center;
  /* Modern browsers */
  align-items: center;
}
.hbox.align-baseline,
.vbox.align-baseline,
.align-baseline {
  /* Old browsers */
  -webkit-box-align: baseline;
  -moz-box-align: baseline;
  box-align: baseline;
  /* Modern browsers */
  align-items: baseline;
}
.hbox.align-stretch,
.vbox.align-stretch,
.align-stretch {
  /* Old browsers */
  -webkit-box-align: stretch;
  -moz-box-align: stretch;
  box-align: stretch;
  /* Modern browsers */
  align-items: stretch;
}
div.error {
  margin: 2em;
  text-align: center;
}
div.error > h1 {
  font-size: 500%;
  line-height: normal;
}
div.error > p {
  font-size: 200%;
  line-height: normal;
}
div.traceback-wrapper {
  text-align: left;
  max-width: 800px;
  margin: auto;
}
div.traceback-wrapper pre.traceback {
  max-height: 600px;
  overflow: auto;
}
/**
 * Primary styles
 *
 * Author: Jupyter Development Team
 */
body {
  background-color: #fff;
  /* This makes sure that the body covers the entire window and needs to
       be in a different element than the display: box in wrapper below */
  position: absolute;
  left: 0px;
  right: 0px;
  top: 0px;
  bottom: 0px;
  overflow: visible;
}
body > #header {
  /* Initially hidden to prevent FLOUC */
  display: none;
  background-color: #fff;
  /* Display over codemirror */
  position: relative;
  z-index: 100;
}
body > #header #header-container {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding: 5px;
  padding-bottom: 5px;
  padding-top: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
body > #header .header-bar {
  width: 100%;
  height: 1px;
  background: #e7e7e7;
  margin-bottom: -1px;
}
@media print {
  body > #header {
    display: none !important;
  }
}
#header-spacer {
  width: 100%;
  visibility: hidden;
}
@media print {
  #header-spacer {
    display: none;
  }
}
#ipython_notebook {
  padding-left: 0px;
  padding-top: 1px;
  padding-bottom: 1px;
}
[dir="rtl"] #ipython_notebook {
  margin-right: 10px;
  margin-left: 0;
}
[dir="rtl"] #ipython_notebook.pull-left {
  float: right !important;
  float: right;
}
.flex-spacer {
  flex: 1;
}
#noscript {
  width: auto;
  padding-top: 16px;
  padding-bottom: 16px;
  text-align: center;
  font-size: 22px;
  color: red;
  font-weight: bold;
}
#ipython_notebook img {
  height: 28px;
}
#site {
  width: 100%;
  display: none;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  overflow: auto;
}
@media print {
  #site {
    height: auto !important;
  }
}
/* Smaller buttons */
.ui-button .ui-button-text {
  padding: 0.2em 0.8em;
  font-size: 77%;
}
input.ui-button {
  padding: 0.3em 0.9em;
}
span#kernel_logo_widget {
  margin: 0 10px;
}
span#login_widget {
  float: right;
}
[dir="rtl"] span#login_widget {
  float: left;
}
span#login_widget > .button,
#logout {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
span#login_widget > .button:focus,
#logout:focus,
span#login_widget > .button.focus,
#logout.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
span#login_widget > .button:hover,
#logout:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
span#login_widget > .button:active,
#logout:active,
span#login_widget > .button.active,
#logout.active,
.open > .dropdown-togglespan#login_widget > .button,
.open > .dropdown-toggle#logout {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
span#login_widget > .button:active:hover,
#logout:active:hover,
span#login_widget > .button.active:hover,
#logout.active:hover,
.open > .dropdown-togglespan#login_widget > .button:hover,
.open > .dropdown-toggle#logout:hover,
span#login_widget > .button:active:focus,
#logout:active:focus,
span#login_widget > .button.active:focus,
#logout.active:focus,
.open > .dropdown-togglespan#login_widget > .button:focus,
.open > .dropdown-toggle#logout:focus,
span#login_widget > .button:active.focus,
#logout:active.focus,
span#login_widget > .button.active.focus,
#logout.active.focus,
.open > .dropdown-togglespan#login_widget > .button.focus,
.open > .dropdown-toggle#logout.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
span#login_widget > .button:active,
#logout:active,
span#login_widget > .button.active,
#logout.active,
.open > .dropdown-togglespan#login_widget > .button,
.open > .dropdown-toggle#logout {
  background-image: none;
}
span#login_widget > .button.disabled:hover,
#logout.disabled:hover,
span#login_widget > .button[disabled]:hover,
#logout[disabled]:hover,
fieldset[disabled] span#login_widget > .button:hover,
fieldset[disabled] #logout:hover,
span#login_widget > .button.disabled:focus,
#logout.disabled:focus,
span#login_widget > .button[disabled]:focus,
#logout[disabled]:focus,
fieldset[disabled] span#login_widget > .button:focus,
fieldset[disabled] #logout:focus,
span#login_widget > .button.disabled.focus,
#logout.disabled.focus,
span#login_widget > .button[disabled].focus,
#logout[disabled].focus,
fieldset[disabled] span#login_widget > .button.focus,
fieldset[disabled] #logout.focus {
  background-color: #fff;
  border-color: #ccc;
}
span#login_widget > .button .badge,
#logout .badge {
  color: #fff;
  background-color: #333;
}
.nav-header {
  text-transform: none;
}
#header > span {
  margin-top: 10px;
}
.modal_stretch .modal-dialog {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  min-height: 80vh;
}
.modal_stretch .modal-dialog .modal-body {
  max-height: calc(100vh - 200px);
  overflow: auto;
  flex: 1;
}
.modal-header {
  cursor: move;
}
@media (min-width: 768px) {
  .modal .modal-dialog {
    width: 700px;
  }
}
@media (min-width: 768px) {
  select.form-control {
    margin-left: 12px;
    margin-right: 12px;
  }
}
/*!
*
* IPython auth
*
*/
.center-nav {
  display: inline-block;
  margin-bottom: -4px;
}
[dir="rtl"] .center-nav form.pull-left {
  float: right !important;
  float: right;
}
[dir="rtl"] .center-nav .navbar-text {
  float: right;
}
[dir="rtl"] .navbar-inner {
  text-align: right;
}
[dir="rtl"] div.text-left {
  text-align: right;
}
/*!
*
* IPython tree view
*
*/
/* We need an invisible input field on top of the sentense*/
/* "Drag file onto the list ..." */
.alternate_upload {
  background-color: none;
  display: inline;
}
.alternate_upload.form {
  padding: 0;
  margin: 0;
}
.alternate_upload input.fileinput {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  overflow: hidden;
  cursor: pointer;
  opacity: 0;
  z-index: 2;
}
.alternate_upload .btn-xs > input.fileinput {
  margin: -1px -5px;
}
.alternate_upload .btn-upload {
  position: relative;
  height: 22px;
}
::-webkit-file-upload-button {
  cursor: pointer;
}
/**
 * Primary styles
 *
 * Author: Jupyter Development Team
 */
ul#tabs {
  margin-bottom: 4px;
}
ul#tabs a {
  padding-top: 6px;
  padding-bottom: 4px;
}
[dir="rtl"] ul#tabs.nav-tabs > li {
  float: right;
}
[dir="rtl"] ul#tabs.nav.nav-tabs {
  padding-right: 0;
}
ul.breadcrumb a:focus,
ul.breadcrumb a:hover {
  text-decoration: none;
}
ul.breadcrumb i.icon-home {
  font-size: 16px;
  margin-right: 4px;
}
ul.breadcrumb span {
  color: #5e5e5e;
}
.list_toolbar {
  padding: 4px 0 4px 0;
  vertical-align: middle;
}
.list_toolbar .tree-buttons {
  padding-top: 1px;
}
[dir="rtl"] .list_toolbar .tree-buttons .pull-right {
  float: left !important;
  float: left;
}
[dir="rtl"] .list_toolbar .col-sm-4,
[dir="rtl"] .list_toolbar .col-sm-8 {
  float: right;
}
.dynamic-buttons {
  padding-top: 3px;
  display: inline-block;
}
.list_toolbar [class*="span"] {
  min-height: 24px;
}
.list_header {
  font-weight: bold;
  background-color: #EEE;
}
.list_placeholder {
  font-weight: bold;
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 7px;
  padding-right: 7px;
}
.list_container {
  margin-top: 4px;
  margin-bottom: 20px;
  border: 1px solid #ddd;
  border-radius: 2px;
}
.list_container > div {
  border-bottom: 1px solid #ddd;
}
.list_container > div:hover .list-item {
  background-color: red;
}
.list_container > div:last-child {
  border: none;
}
.list_item:hover .list_item {
  background-color: #ddd;
}
.list_item a {
  text-decoration: none;
}
.list_item:hover {
  background-color: #fafafa;
}
.list_header > div,
.list_item > div {
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 7px;
  padding-right: 7px;
  line-height: 22px;
}
.list_header > div input,
.list_item > div input {
  margin-right: 7px;
  margin-left: 14px;
  vertical-align: text-bottom;
  line-height: 22px;
  position: relative;
  top: -1px;
}
.list_header > div .item_link,
.list_item > div .item_link {
  margin-left: -1px;
  vertical-align: baseline;
  line-height: 22px;
}
[dir="rtl"] .list_item > div input {
  margin-right: 0;
}
.new-file input[type=checkbox] {
  visibility: hidden;
}
.item_name {
  line-height: 22px;
  height: 24px;
}
.item_icon {
  font-size: 14px;
  color: #5e5e5e;
  margin-right: 7px;
  margin-left: 7px;
  line-height: 22px;
  vertical-align: baseline;
}
.item_modified {
  margin-right: 7px;
  margin-left: 7px;
}
[dir="rtl"] .item_modified.pull-right {
  float: left !important;
  float: left;
}
.item_buttons {
  line-height: 1em;
  margin-left: -5px;
}
.item_buttons .btn,
.item_buttons .btn-group,
.item_buttons .input-group {
  float: left;
}
.item_buttons > .btn,
.item_buttons > .btn-group,
.item_buttons > .input-group {
  margin-left: 5px;
}
.item_buttons .btn {
  min-width: 13ex;
}
.item_buttons .running-indicator {
  padding-top: 4px;
  color: #5cb85c;
}
.item_buttons .kernel-name {
  padding-top: 4px;
  color: #5bc0de;
  margin-right: 7px;
  float: left;
}
[dir="rtl"] .item_buttons.pull-right {
  float: left !important;
  float: left;
}
[dir="rtl"] .item_buttons .kernel-name {
  margin-left: 7px;
  float: right;
}
.toolbar_info {
  height: 24px;
  line-height: 24px;
}
.list_item input:not([type=checkbox]) {
  padding-top: 3px;
  padding-bottom: 3px;
  height: 22px;
  line-height: 14px;
  margin: 0px;
}
.highlight_text {
  color: blue;
}
#project_name {
  display: inline-block;
  padding-left: 7px;
  margin-left: -2px;
}
#project_name > .breadcrumb {
  padding: 0px;
  margin-bottom: 0px;
  background-color: transparent;
  font-weight: bold;
}
.sort_button {
  display: inline-block;
  padding-left: 7px;
}
[dir="rtl"] .sort_button.pull-right {
  float: left !important;
  float: left;
}
#tree-selector {
  padding-right: 0px;
}
#button-select-all {
  min-width: 50px;
}
[dir="rtl"] #button-select-all.btn {
  float: right ;
}
#select-all {
  margin-left: 7px;
  margin-right: 2px;
  margin-top: 2px;
  height: 16px;
}
[dir="rtl"] #select-all.pull-left {
  float: right !important;
  float: right;
}
.menu_icon {
  margin-right: 2px;
}
.tab-content .row {
  margin-left: 0px;
  margin-right: 0px;
}
.folder_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f114";
}
.folder_icon:before.fa-pull-left {
  margin-right: .3em;
}
.folder_icon:before.fa-pull-right {
  margin-left: .3em;
}
.folder_icon:before.pull-left {
  margin-right: .3em;
}
.folder_icon:before.pull-right {
  margin-left: .3em;
}
.notebook_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f02d";
  position: relative;
  top: -1px;
}
.notebook_icon:before.fa-pull-left {
  margin-right: .3em;
}
.notebook_icon:before.fa-pull-right {
  margin-left: .3em;
}
.notebook_icon:before.pull-left {
  margin-right: .3em;
}
.notebook_icon:before.pull-right {
  margin-left: .3em;
}
.running_notebook_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f02d";
  position: relative;
  top: -1px;
  color: #5cb85c;
}
.running_notebook_icon:before.fa-pull-left {
  margin-right: .3em;
}
.running_notebook_icon:before.fa-pull-right {
  margin-left: .3em;
}
.running_notebook_icon:before.pull-left {
  margin-right: .3em;
}
.running_notebook_icon:before.pull-right {
  margin-left: .3em;
}
.file_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f016";
  position: relative;
  top: -2px;
}
.file_icon:before.fa-pull-left {
  margin-right: .3em;
}
.file_icon:before.fa-pull-right {
  margin-left: .3em;
}
.file_icon:before.pull-left {
  margin-right: .3em;
}
.file_icon:before.pull-right {
  margin-left: .3em;
}
#notebook_toolbar .pull-right {
  padding-top: 0px;
  margin-right: -1px;
}
ul#new-menu {
  left: auto;
  right: 0;
}
#new-menu .dropdown-header {
  font-size: 10px;
  border-bottom: 1px solid #e5e5e5;
  padding: 0 0 3px;
  margin: -3px 20px 0;
}
.kernel-menu-icon {
  padding-right: 12px;
  width: 24px;
  content: "\f096";
}
.kernel-menu-icon:before {
  content: "\f096";
}
.kernel-menu-icon-current:before {
  content: "\f00c";
}
#tab_content {
  padding-top: 20px;
}
#running .panel-group .panel {
  margin-top: 3px;
  margin-bottom: 1em;
}
#running .panel-group .panel .panel-heading {
  background-color: #EEE;
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 7px;
  padding-right: 7px;
  line-height: 22px;
}
#running .panel-group .panel .panel-heading a:focus,
#running .panel-group .panel .panel-heading a:hover {
  text-decoration: none;
}
#running .panel-group .panel .panel-body {
  padding: 0px;
}
#running .panel-group .panel .panel-body .list_container {
  margin-top: 0px;
  margin-bottom: 0px;
  border: 0px;
  border-radius: 0px;
}
#running .panel-group .panel .panel-body .list_container .list_item {
  border-bottom: 1px solid #ddd;
}
#running .panel-group .panel .panel-body .list_container .list_item:last-child {
  border-bottom: 0px;
}
.delete-button {
  display: none;
}
.duplicate-button {
  display: none;
}
.rename-button {
  display: none;
}
.move-button {
  display: none;
}
.download-button {
  display: none;
}
.shutdown-button {
  display: none;
}
.dynamic-instructions {
  display: inline-block;
  padding-top: 4px;
}
/*!
*
* IPython text editor webapp
*
*/
.selected-keymap i.fa {
  padding: 0px 5px;
}
.selected-keymap i.fa:before {
  content: "\f00c";
}
#mode-menu {
  overflow: auto;
  max-height: 20em;
}
.edit_app #header {
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
}
.edit_app #menubar .navbar {
  /* Use a negative 1 bottom margin, so the border overlaps the border of the
    header */
  margin-bottom: -1px;
}
.dirty-indicator {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 20px;
}
.dirty-indicator.fa-pull-left {
  margin-right: .3em;
}
.dirty-indicator.fa-pull-right {
  margin-left: .3em;
}
.dirty-indicator.pull-left {
  margin-right: .3em;
}
.dirty-indicator.pull-right {
  margin-left: .3em;
}
.dirty-indicator-dirty {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 20px;
}
.dirty-indicator-dirty.fa-pull-left {
  margin-right: .3em;
}
.dirty-indicator-dirty.fa-pull-right {
  margin-left: .3em;
}
.dirty-indicator-dirty.pull-left {
  margin-right: .3em;
}
.dirty-indicator-dirty.pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 20px;
}
.dirty-indicator-clean.fa-pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean.fa-pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean.pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean.pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f00c";
}
.dirty-indicator-clean:before.fa-pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean:before.fa-pull-right {
  margin-left: .3em;
}
.dirty-indicator-clean:before.pull-left {
  margin-right: .3em;
}
.dirty-indicator-clean:before.pull-right {
  margin-left: .3em;
}
#filename {
  font-size: 16pt;
  display: table;
  padding: 0px 5px;
}
#current-mode {
  padding-left: 5px;
  padding-right: 5px;
}
#texteditor-backdrop {
  padding-top: 20px;
  padding-bottom: 20px;
}
@media not print {
  #texteditor-backdrop {
    background-color: #EEE;
  }
}
@media print {
  #texteditor-backdrop #texteditor-container .CodeMirror-gutter,
  #texteditor-backdrop #texteditor-container .CodeMirror-gutters {
    background-color: #fff;
  }
}
@media not print {
  #texteditor-backdrop #texteditor-container .CodeMirror-gutter,
  #texteditor-backdrop #texteditor-container .CodeMirror-gutters {
    background-color: #fff;
  }
}
@media not print {
  #texteditor-backdrop #texteditor-container {
    padding: 0px;
    background-color: #fff;
    -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
    box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  }
}
.CodeMirror-dialog {
  background-color: #fff;
}
/*!
*
* IPython notebook
*
*/
/* CSS font colors for translated ANSI escape sequences */
/* The color values are a mix of
   http://www.xcolors.net/dl/baskerville-ivorylight and
   http://www.xcolors.net/dl/euphrasia */
.ansi-black-fg {
  color: #3E424D;
}
.ansi-black-bg {
  background-color: #3E424D;
}
.ansi-black-intense-fg {
  color: #282C36;
}
.ansi-black-intense-bg {
  background-color: #282C36;
}
.ansi-red-fg {
  color: #E75C58;
}
.ansi-red-bg {
  background-color: #E75C58;
}
.ansi-red-intense-fg {
  color: #B22B31;
}
.ansi-red-intense-bg {
  background-color: #B22B31;
}
.ansi-green-fg {
  color: #00A250;
}
.ansi-green-bg {
  background-color: #00A250;
}
.ansi-green-intense-fg {
  color: #007427;
}
.ansi-green-intense-bg {
  background-color: #007427;
}
.ansi-yellow-fg {
  color: #DDB62B;
}
.ansi-yellow-bg {
  background-color: #DDB62B;
}
.ansi-yellow-intense-fg {
  color: #B27D12;
}
.ansi-yellow-intense-bg {
  background-color: #B27D12;
}
.ansi-blue-fg {
  color: #208FFB;
}
.ansi-blue-bg {
  background-color: #208FFB;
}
.ansi-blue-intense-fg {
  color: #0065CA;
}
.ansi-blue-intense-bg {
  background-color: #0065CA;
}
.ansi-magenta-fg {
  color: #D160C4;
}
.ansi-magenta-bg {
  background-color: #D160C4;
}
.ansi-magenta-intense-fg {
  color: #A03196;
}
.ansi-magenta-intense-bg {
  background-color: #A03196;
}
.ansi-cyan-fg {
  color: #60C6C8;
}
.ansi-cyan-bg {
  background-color: #60C6C8;
}
.ansi-cyan-intense-fg {
  color: #258F8F;
}
.ansi-cyan-intense-bg {
  background-color: #258F8F;
}
.ansi-white-fg {
  color: #C5C1B4;
}
.ansi-white-bg {
  background-color: #C5C1B4;
}
.ansi-white-intense-fg {
  color: #A1A6B2;
}
.ansi-white-intense-bg {
  background-color: #A1A6B2;
}
.ansi-default-inverse-fg {
  color: #FFFFFF;
}
.ansi-default-inverse-bg {
  background-color: #000000;
}
.ansi-bold {
  font-weight: bold;
}
.ansi-underline {
  text-decoration: underline;
}
/* The following styles are deprecated an will be removed in a future version */
.ansibold {
  font-weight: bold;
}
.ansi-inverse {
  outline: 0.5px dotted;
}
/* use dark versions for foreground, to improve visibility */
.ansiblack {
  color: black;
}
.ansired {
  color: darkred;
}
.ansigreen {
  color: darkgreen;
}
.ansiyellow {
  color: #c4a000;
}
.ansiblue {
  color: darkblue;
}
.ansipurple {
  color: darkviolet;
}
.ansicyan {
  color: steelblue;
}
.ansigray {
  color: gray;
}
/* and light for background, for the same reason */
.ansibgblack {
  background-color: black;
}
.ansibgred {
  background-color: red;
}
.ansibggreen {
  background-color: green;
}
.ansibgyellow {
  background-color: yellow;
}
.ansibgblue {
  background-color: blue;
}
.ansibgpurple {
  background-color: magenta;
}
.ansibgcyan {
  background-color: cyan;
}
.ansibggray {
  background-color: gray;
}
div.cell {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  border-radius: 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  border-width: 1px;
  border-style: solid;
  border-color: transparent;
  width: 100%;
  padding: 5px;
  /* This acts as a spacer between cells, that is outside the border */
  margin: 0px;
  outline: none;
  position: relative;
  overflow: visible;
}
div.cell:before {
  position: absolute;
  display: block;
  top: -1px;
  left: -1px;
  width: 5px;
  height: calc(100% +  2px);
  content: '';
  background: transparent;
}
div.cell.jupyter-soft-selected {
  border-left-color: #E3F2FD;
  border-left-width: 1px;
  padding-left: 5px;
  border-right-color: #E3F2FD;
  border-right-width: 1px;
  background: #E3F2FD;
}
@media print {
  div.cell.jupyter-soft-selected {
    border-color: transparent;
  }
}
div.cell.selected,
div.cell.selected.jupyter-soft-selected {
  border-color: #ababab;
}
div.cell.selected:before,
div.cell.selected.jupyter-soft-selected:before {
  position: absolute;
  display: block;
  top: -1px;
  left: -1px;
  width: 5px;
  height: calc(100% +  2px);
  content: '';
  background: #42A5F5;
}
@media print {
  div.cell.selected,
  div.cell.selected.jupyter-soft-selected {
    border-color: transparent;
  }
}
.edit_mode div.cell.selected {
  border-color: #66BB6A;
}
.edit_mode div.cell.selected:before {
  position: absolute;
  display: block;
  top: -1px;
  left: -1px;
  width: 5px;
  height: calc(100% +  2px);
  content: '';
  background: #66BB6A;
}
@media print {
  .edit_mode div.cell.selected {
    border-color: transparent;
  }
}
.prompt {
  /* This needs to be wide enough for 3 digit prompt numbers: In[100]: */
  min-width: 14ex;
  /* This padding is tuned to match the padding on the CodeMirror editor. */
  padding: 0.4em;
  margin: 0px;
  font-family: monospace;
  text-align: right;
  /* This has to match that of the the CodeMirror class line-height below */
  line-height: 1.21429em;
  /* Don't highlight prompt number selection */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  /* Use default cursor */
  cursor: default;
}
@media (max-width: 540px) {
  .prompt {
    text-align: left;
  }
}
div.inner_cell {
  min-width: 0;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
/* input_area and input_prompt must match in top border and margin for alignment */
div.input_area {
  border: 1px solid #cfcfcf;
  border-radius: 2px;
  background: #f7f7f7;
  line-height: 1.21429em;
}
/* This is needed so that empty prompt areas can collapse to zero height when there
   is no content in the output_subarea and the prompt. The main purpose of this is
   to make sure that empty JavaScript output_subareas have no height. */
div.prompt:empty {
  padding-top: 0;
  padding-bottom: 0;
}
div.unrecognized_cell {
  padding: 5px 5px 5px 0px;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
div.unrecognized_cell .inner_cell {
  border-radius: 2px;
  padding: 5px;
  font-weight: bold;
  color: red;
  border: 1px solid #cfcfcf;
  background: #eaeaea;
}
div.unrecognized_cell .inner_cell a {
  color: inherit;
  text-decoration: none;
}
div.unrecognized_cell .inner_cell a:hover {
  color: inherit;
  text-decoration: none;
}
@media (max-width: 540px) {
  div.unrecognized_cell > div.prompt {
    display: none;
  }
}
div.code_cell {
  /* avoid page breaking on code cells when printing */
}
@media print {
  div.code_cell {
    page-break-inside: avoid;
  }
}
/* any special styling for code cells that are currently running goes here */
div.input {
  page-break-inside: avoid;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
@media (max-width: 540px) {
  div.input {
    /* Old browsers */
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-box-align: stretch;
    display: -moz-box;
    -moz-box-orient: vertical;
    -moz-box-align: stretch;
    display: box;
    box-orient: vertical;
    box-align: stretch;
    /* Modern browsers */
    display: flex;
    flex-direction: column;
    align-items: stretch;
  }
}
/* input_area and input_prompt must match in top border and margin for alignment */
div.input_prompt {
  color: #303F9F;
  border-top: 1px solid transparent;
}
div.input_area > div.highlight {
  margin: 0.4em;
  border: none;
  padding: 0px;
  background-color: transparent;
}
div.input_area > div.highlight > pre {
  margin: 0px;
  border: none;
  padding: 0px;
  background-color: transparent;
}
/* The following gets added to the <head> if it is detected that the user has a
 * monospace font with inconsistent normal/bold/italic height.  See
 * notebookmain.js.  Such fonts will have keywords vertically offset with
 * respect to the rest of the text.  The user should select a better font.
 * See: https://github.com/ipython/ipython/issues/1503
 *
 * .CodeMirror span {
 *      vertical-align: bottom;
 * }
 */
.CodeMirror {
  line-height: 1.21429em;
  /* Changed from 1em to our global default */
  font-size: 14px;
  height: auto;
  /* Changed to auto to autogrow */
  background: none;
  /* Changed from white to allow our bg to show through */
}
.CodeMirror-scroll {
  /*  The CodeMirror docs are a bit fuzzy on if overflow-y should be hidden or visible.*/
  /*  We have found that if it is visible, vertical scrollbars appear with font size changes.*/
  overflow-y: hidden;
  overflow-x: auto;
}
.CodeMirror-lines {
  /* In CM2, this used to be 0.4em, but in CM3 it went to 4px. We need the em value because */
  /* we have set a different line-height and want this to scale with that. */
  /* Note that this should set vertical padding only, since CodeMirror assumes
       that horizontal padding will be set on CodeMirror pre */
  padding: 0.4em 0;
}
.CodeMirror-linenumber {
  padding: 0 8px 0 4px;
}
.CodeMirror-gutters {
  border-bottom-left-radius: 2px;
  border-top-left-radius: 2px;
}
.CodeMirror pre {
  /* In CM3 this went to 4px from 0 in CM2. This sets horizontal padding only,
    use .CodeMirror-lines for vertical */
  padding: 0 0.4em;
  border: 0;
  border-radius: 0;
}
.CodeMirror-cursor {
  border-left: 1.4px solid black;
}
@media screen and (min-width: 2138px) and (max-width: 4319px) {
  .CodeMirror-cursor {
    border-left: 2px solid black;
  }
}
@media screen and (min-width: 4320px) {
  .CodeMirror-cursor {
    border-left: 4px solid black;
  }
}
/*

Original style from softwaremaniacs.org (c) Ivan Sagalaev <Maniac@SoftwareManiacs.Org>
Adapted from GitHub theme

*/
.highlight-base {
  color: #000;
}
.highlight-variable {
  color: #000;
}
.highlight-variable-2 {
  color: #1a1a1a;
}
.highlight-variable-3 {
  color: #333333;
}
.highlight-string {
  color: #BA2121;
}
.highlight-comment {
  color: #408080;
  font-style: italic;
}
.highlight-number {
  color: #080;
}
.highlight-atom {
  color: #88F;
}
.highlight-keyword {
  color: #008000;
  font-weight: bold;
}
.highlight-builtin {
  color: #008000;
}
.highlight-error {
  color: #f00;
}
.highlight-operator {
  color: #AA22FF;
  font-weight: bold;
}
.highlight-meta {
  color: #AA22FF;
}
/* previously not defined, copying from default codemirror */
.highlight-def {
  color: #00f;
}
.highlight-string-2 {
  color: #f50;
}
.highlight-qualifier {
  color: #555;
}
.highlight-bracket {
  color: #997;
}
.highlight-tag {
  color: #170;
}
.highlight-attribute {
  color: #00c;
}
.highlight-header {
  color: blue;
}
.highlight-quote {
  color: #090;
}
.highlight-link {
  color: #00c;
}
/* apply the same style to codemirror */
.cm-s-ipython span.cm-keyword {
  color: #008000;
  font-weight: bold;
}
.cm-s-ipython span.cm-atom {
  color: #88F;
}
.cm-s-ipython span.cm-number {
  color: #080;
}
.cm-s-ipython span.cm-def {
  color: #00f;
}
.cm-s-ipython span.cm-variable {
  color: #000;
}
.cm-s-ipython span.cm-operator {
  color: #AA22FF;
  font-weight: bold;
}
.cm-s-ipython span.cm-variable-2 {
  color: #1a1a1a;
}
.cm-s-ipython span.cm-variable-3 {
  color: #333333;
}
.cm-s-ipython span.cm-comment {
  color: #408080;
  font-style: italic;
}
.cm-s-ipython span.cm-string {
  color: #BA2121;
}
.cm-s-ipython span.cm-string-2 {
  color: #f50;
}
.cm-s-ipython span.cm-meta {
  color: #AA22FF;
}
.cm-s-ipython span.cm-qualifier {
  color: #555;
}
.cm-s-ipython span.cm-builtin {
  color: #008000;
}
.cm-s-ipython span.cm-bracket {
  color: #997;
}
.cm-s-ipython span.cm-tag {
  color: #170;
}
.cm-s-ipython span.cm-attribute {
  color: #00c;
}
.cm-s-ipython span.cm-header {
  color: blue;
}
.cm-s-ipython span.cm-quote {
  color: #090;
}
.cm-s-ipython span.cm-link {
  color: #00c;
}
.cm-s-ipython span.cm-error {
  color: #f00;
}
.cm-s-ipython span.cm-tab {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAMCAYAAAAkuj5RAAAAAXNSR0IArs4c6QAAAGFJREFUSMft1LsRQFAQheHPowAKoACx3IgEKtaEHujDjORSgWTH/ZOdnZOcM/sgk/kFFWY0qV8foQwS4MKBCS3qR6ixBJvElOobYAtivseIE120FaowJPN75GMu8j/LfMwNjh4HUpwg4LUAAAAASUVORK5CYII=);
  background-position: right;
  background-repeat: no-repeat;
}
div.output_wrapper {
  /* this position must be relative to enable descendents to be absolute within it */
  position: relative;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
  z-index: 1;
}
/* class for the output area when it should be height-limited */
div.output_scroll {
  /* ideally, this would be max-height, but FF barfs all over that */
  height: 24em;
  /* FF needs this *and the wrapper* to specify full width, or it will shrinkwrap */
  width: 100%;
  overflow: auto;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.8);
  box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.8);
  display: block;
}
/* output div while it is collapsed */
div.output_collapsed {
  margin: 0px;
  padding: 0px;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
}
div.out_prompt_overlay {
  height: 100%;
  padding: 0px 0.4em;
  position: absolute;
  border-radius: 2px;
}
div.out_prompt_overlay:hover {
  /* use inner shadow to get border that is computed the same on WebKit/FF */
  -webkit-box-shadow: inset 0 0 1px #000;
  box-shadow: inset 0 0 1px #000;
  background: rgba(240, 240, 240, 0.5);
}
div.output_prompt {
  color: #D84315;
}
/* This class is the outer container of all output sections. */
div.output_area {
  padding: 0px;
  page-break-inside: avoid;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
div.output_area .MathJax_Display {
  text-align: left !important;
}
div.output_area .rendered_html table {
  margin-left: 0;
  margin-right: 0;
}
div.output_area .rendered_html img {
  margin-left: 0;
  margin-right: 0;
}
div.output_area img,
div.output_area svg {
  max-width: 100%;
  height: auto;
}
div.output_area img.unconfined,
div.output_area svg.unconfined {
  max-width: none;
}
div.output_area .mglyph > img {
  max-width: none;
}
/* This is needed to protect the pre formating from global settings such
   as that of bootstrap */
.output {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-align: stretch;
  display: box;
  box-orient: vertical;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: column;
  align-items: stretch;
}
@media (max-width: 540px) {
  div.output_area {
    /* Old browsers */
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-box-align: stretch;
    display: -moz-box;
    -moz-box-orient: vertical;
    -moz-box-align: stretch;
    display: box;
    box-orient: vertical;
    box-align: stretch;
    /* Modern browsers */
    display: flex;
    flex-direction: column;
    align-items: stretch;
  }
}
div.output_area pre {
  margin: 0;
  padding: 1px 0 1px 0;
  border: 0;
  vertical-align: baseline;
  color: black;
  background-color: transparent;
  border-radius: 0;
}
/* This class is for the output subarea inside the output_area and after
   the prompt div. */
div.output_subarea {
  overflow-x: auto;
  padding: 0.4em;
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
  max-width: calc(100% - 14ex);
}
div.output_scroll div.output_subarea {
  overflow-x: visible;
}
/* The rest of the output_* classes are for special styling of the different
   output types */
/* all text output has this class: */
div.output_text {
  text-align: left;
  color: #000;
  /* This has to match that of the the CodeMirror class line-height below */
  line-height: 1.21429em;
}
/* stdout/stderr are 'text' as well as 'stream', but execute_result/error are *not* streams */
div.output_stderr {
  background: #fdd;
  /* very light red background for stderr */
}
div.output_latex {
  text-align: left;
}
/* Empty output_javascript divs should have no height */
div.output_javascript:empty {
  padding: 0;
}
.js-error {
  color: darkred;
}
/* raw_input styles */
div.raw_input_container {
  line-height: 1.21429em;
  padding-top: 5px;
}
pre.raw_input_prompt {
  /* nothing needed here. */
}
input.raw_input {
  font-family: monospace;
  font-size: inherit;
  color: inherit;
  width: auto;
  /* make sure input baseline aligns with prompt */
  vertical-align: baseline;
  /* padding + margin = 0.5em between prompt and cursor */
  padding: 0em 0.25em;
  margin: 0em 0.25em;
}
input.raw_input:focus {
  box-shadow: none;
}
p.p-space {
  margin-bottom: 10px;
}
div.output_unrecognized {
  padding: 5px;
  font-weight: bold;
  color: red;
}
div.output_unrecognized a {
  color: inherit;
  text-decoration: none;
}
div.output_unrecognized a:hover {
  color: inherit;
  text-decoration: none;
}
.rendered_html {
  color: #000;
  /* any extras will just be numbers: */
}
.rendered_html em {
  font-style: italic;
}
.rendered_html strong {
  font-weight: bold;
}
.rendered_html u {
  text-decoration: underline;
}
.rendered_html :link {
  text-decoration: underline;
}
.rendered_html :visited {
  text-decoration: underline;
}
.rendered_html h1 {
  font-size: 185.7%;
  margin: 1.08em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h2 {
  font-size: 157.1%;
  margin: 1.27em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h3 {
  font-size: 128.6%;
  margin: 1.55em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h4 {
  font-size: 100%;
  margin: 2em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
}
.rendered_html h5 {
  font-size: 100%;
  margin: 2em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
  font-style: italic;
}
.rendered_html h6 {
  font-size: 100%;
  margin: 2em 0 0 0;
  font-weight: bold;
  line-height: 1.0;
  font-style: italic;
}
.rendered_html h1:first-child {
  margin-top: 0.538em;
}
.rendered_html h2:first-child {
  margin-top: 0.636em;
}
.rendered_html h3:first-child {
  margin-top: 0.777em;
}
.rendered_html h4:first-child {
  margin-top: 1em;
}
.rendered_html h5:first-child {
  margin-top: 1em;
}
.rendered_html h6:first-child {
  margin-top: 1em;
}
.rendered_html ul:not(.list-inline),
.rendered_html ol:not(.list-inline) {
  padding-left: 2em;
}
.rendered_html ul {
  list-style: disc;
}
.rendered_html ul ul {
  list-style: square;
  margin-top: 0;
}
.rendered_html ul ul ul {
  list-style: circle;
}
.rendered_html ol {
  list-style: decimal;
}
.rendered_html ol ol {
  list-style: upper-alpha;
  margin-top: 0;
}
.rendered_html ol ol ol {
  list-style: lower-alpha;
}
.rendered_html ol ol ol ol {
  list-style: lower-roman;
}
.rendered_html ol ol ol ol ol {
  list-style: decimal;
}
.rendered_html * + ul {
  margin-top: 1em;
}
.rendered_html * + ol {
  margin-top: 1em;
}
.rendered_html hr {
  color: black;
  background-color: black;
}
.rendered_html pre {
  margin: 1em 2em;
  padding: 0px;
  background-color: #fff;
}
.rendered_html code {
  background-color: #eff0f1;
}
.rendered_html p code {
  padding: 1px 5px;
}
.rendered_html pre code {
  background-color: #fff;
}
.rendered_html pre,
.rendered_html code {
  border: 0;
  color: #000;
  font-size: 100%;
}
.rendered_html blockquote {
  margin: 1em 2em;
}
.rendered_html table {
  margin-left: auto;
  margin-right: auto;
  border: none;
  border-collapse: collapse;
  border-spacing: 0;
  color: black;
  font-size: 12px;
  table-layout: fixed;
}
.rendered_html thead {
  border-bottom: 1px solid black;
  vertical-align: bottom;
}
.rendered_html tr,
.rendered_html th,
.rendered_html td {
  text-align: right;
  vertical-align: middle;
  padding: 0.5em 0.5em;
  line-height: normal;
  white-space: normal;
  max-width: none;
  border: none;
}
.rendered_html th {
  font-weight: bold;
}
.rendered_html tbody tr:nth-child(odd) {
  background: #f5f5f5;
}
.rendered_html tbody tr:hover {
  background: rgba(66, 165, 245, 0.2);
}
.rendered_html * + table {
  margin-top: 1em;
}
.rendered_html p {
  text-align: left;
}
.rendered_html * + p {
  margin-top: 1em;
}
.rendered_html img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.rendered_html * + img {
  margin-top: 1em;
}
.rendered_html img,
.rendered_html svg {
  max-width: 100%;
  height: auto;
}
.rendered_html img.unconfined,
.rendered_html svg.unconfined {
  max-width: none;
}
.rendered_html .alert {
  margin-bottom: initial;
}
.rendered_html * + .alert {
  margin-top: 1em;
}
[dir="rtl"] .rendered_html p {
  text-align: right;
}
div.text_cell {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
}
@media (max-width: 540px) {
  div.text_cell > div.prompt {
    display: none;
  }
}
div.text_cell_render {
  /*font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;*/
  outline: none;
  resize: none;
  width: inherit;
  border-style: none;
  padding: 0.5em 0.5em 0.5em 0.4em;
  color: #000;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
a.anchor-link:link {
  text-decoration: none;
  padding: 0px 20px;
  visibility: hidden;
}
h1:hover .anchor-link,
h2:hover .anchor-link,
h3:hover .anchor-link,
h4:hover .anchor-link,
h5:hover .anchor-link,
h6:hover .anchor-link {
  visibility: visible;
}
.text_cell.rendered .input_area {
  display: none;
}
.text_cell.rendered .rendered_html {
  overflow-x: auto;
  overflow-y: hidden;
}
.text_cell.rendered .rendered_html tr,
.text_cell.rendered .rendered_html th,
.text_cell.rendered .rendered_html td {
  max-width: none;
}
.text_cell.unrendered .text_cell_render {
  display: none;
}
.text_cell .dropzone .input_area {
  border: 2px dashed #bababa;
  margin: -1px;
}
.cm-header-1,
.cm-header-2,
.cm-header-3,
.cm-header-4,
.cm-header-5,
.cm-header-6 {
  font-weight: bold;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.cm-header-1 {
  font-size: 185.7%;
}
.cm-header-2 {
  font-size: 157.1%;
}
.cm-header-3 {
  font-size: 128.6%;
}
.cm-header-4 {
  font-size: 110%;
}
.cm-header-5 {
  font-size: 100%;
  font-style: italic;
}
.cm-header-6 {
  font-size: 100%;
  font-style: italic;
}
/*!
*
* IPython notebook webapp
*
*/
@media (max-width: 767px) {
  .notebook_app {
    padding-left: 0px;
    padding-right: 0px;
  }
}
#ipython-main-app {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  height: 100%;
}
div#notebook_panel {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  height: 100%;
}
div#notebook {
  font-size: 14px;
  line-height: 20px;
  overflow-y: hidden;
  overflow-x: auto;
  width: 100%;
  /* This spaces the page away from the edge of the notebook area */
  padding-top: 20px;
  margin: 0px;
  outline: none;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  min-height: 100%;
}
@media not print {
  #notebook-container {
    padding: 15px;
    background-color: #fff;
    min-height: 0;
    -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
    box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  }
}
@media print {
  #notebook-container {
    width: 100%;
  }
}
div.ui-widget-content {
  border: 1px solid #ababab;
  outline: none;
}
pre.dialog {
  background-color: #f7f7f7;
  border: 1px solid #ddd;
  border-radius: 2px;
  padding: 0.4em;
  padding-left: 2em;
}
p.dialog {
  padding: 0.2em;
}
/* Word-wrap output correctly.  This is the CSS3 spelling, though Firefox seems
   to not honor it correctly.  Webkit browsers (Chrome, rekonq, Safari) do.
 */
pre,
code,
kbd,
samp {
  white-space: pre-wrap;
}
#fonttest {
  font-family: monospace;
}
p {
  margin-bottom: 0;
}
.end_space {
  min-height: 100px;
  transition: height .2s ease;
}
.notebook_app > #header {
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
}
@media not print {
  .notebook_app {
    background-color: #EEE;
  }
}
kbd {
  border-style: solid;
  border-width: 1px;
  box-shadow: none;
  margin: 2px;
  padding-left: 2px;
  padding-right: 2px;
  padding-top: 1px;
  padding-bottom: 1px;
}
.jupyter-keybindings {
  padding: 1px;
  line-height: 24px;
  border-bottom: 1px solid gray;
}
.jupyter-keybindings input {
  margin: 0;
  padding: 0;
  border: none;
}
.jupyter-keybindings i {
  padding: 6px;
}
.well code {
  background-color: #ffffff;
  border-color: #ababab;
  border-width: 1px;
  border-style: solid;
  padding: 2px;
  padding-top: 1px;
  padding-bottom: 1px;
}
/* CSS for the cell toolbar */
.celltoolbar {
  border: thin solid #CFCFCF;
  border-bottom: none;
  background: #EEE;
  border-radius: 2px 2px 0px 0px;
  width: 100%;
  height: 29px;
  padding-right: 4px;
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
  /* Old browsers */
  -webkit-box-pack: end;
  -moz-box-pack: end;
  box-pack: end;
  /* Modern browsers */
  justify-content: flex-end;
  display: -webkit-flex;
}
@media print {
  .celltoolbar {
    display: none;
  }
}
.ctb_hideshow {
  display: none;
  vertical-align: bottom;
}
/* ctb_show is added to the ctb_hideshow div to show the cell toolbar.
   Cell toolbars are only shown when the ctb_global_show class is also set.
*/
.ctb_global_show .ctb_show.ctb_hideshow {
  display: block;
}
.ctb_global_show .ctb_show + .input_area,
.ctb_global_show .ctb_show + div.text_cell_input,
.ctb_global_show .ctb_show ~ div.text_cell_render {
  border-top-right-radius: 0px;
  border-top-left-radius: 0px;
}
.ctb_global_show .ctb_show ~ div.text_cell_render {
  border: 1px solid #cfcfcf;
}
.celltoolbar {
  font-size: 87%;
  padding-top: 3px;
}
.celltoolbar select {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
  width: inherit;
  font-size: inherit;
  height: 22px;
  padding: 0px;
  display: inline-block;
}
.celltoolbar select:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.celltoolbar select::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.celltoolbar select:-ms-input-placeholder {
  color: #999;
}
.celltoolbar select::-webkit-input-placeholder {
  color: #999;
}
.celltoolbar select::-ms-expand {
  border: 0;
  background-color: transparent;
}
.celltoolbar select[disabled],
.celltoolbar select[readonly],
fieldset[disabled] .celltoolbar select {
  background-color: #eeeeee;
  opacity: 1;
}
.celltoolbar select[disabled],
fieldset[disabled] .celltoolbar select {
  cursor: not-allowed;
}
textarea.celltoolbar select {
  height: auto;
}
select.celltoolbar select {
  height: 30px;
  line-height: 30px;
}
textarea.celltoolbar select,
select[multiple].celltoolbar select {
  height: auto;
}
.celltoolbar label {
  margin-left: 5px;
  margin-right: 5px;
}
.tags_button_container {
  width: 100%;
  display: flex;
}
.tag-container {
  display: flex;
  flex-direction: row;
  flex-grow: 1;
  overflow: hidden;
  position: relative;
}
.tag-container > * {
  margin: 0 4px;
}
.remove-tag-btn {
  margin-left: 4px;
}
.tags-input {
  display: flex;
}
.cell-tag:last-child:after {
  content: "";
  position: absolute;
  right: 0;
  width: 40px;
  height: 100%;
  /* Fade to background color of cell toolbar */
  background: linear-gradient(to right, rgba(0, 0, 0, 0), #EEE);
}
.tags-input > * {
  margin-left: 4px;
}
.cell-tag,
.tags-input input,
.tags-input button {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 1px;
  box-shadow: none;
  width: inherit;
  font-size: inherit;
  height: 22px;
  line-height: 22px;
  padding: 0px 4px;
  display: inline-block;
}
.cell-tag:focus,
.tags-input input:focus,
.tags-input button:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.cell-tag::-moz-placeholder,
.tags-input input::-moz-placeholder,
.tags-input button::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.cell-tag:-ms-input-placeholder,
.tags-input input:-ms-input-placeholder,
.tags-input button:-ms-input-placeholder {
  color: #999;
}
.cell-tag::-webkit-input-placeholder,
.tags-input input::-webkit-input-placeholder,
.tags-input button::-webkit-input-placeholder {
  color: #999;
}
.cell-tag::-ms-expand,
.tags-input input::-ms-expand,
.tags-input button::-ms-expand {
  border: 0;
  background-color: transparent;
}
.cell-tag[disabled],
.tags-input input[disabled],
.tags-input button[disabled],
.cell-tag[readonly],
.tags-input input[readonly],
.tags-input button[readonly],
fieldset[disabled] .cell-tag,
fieldset[disabled] .tags-input input,
fieldset[disabled] .tags-input button {
  background-color: #eeeeee;
  opacity: 1;
}
.cell-tag[disabled],
.tags-input input[disabled],
.tags-input button[disabled],
fieldset[disabled] .cell-tag,
fieldset[disabled] .tags-input input,
fieldset[disabled] .tags-input button {
  cursor: not-allowed;
}
textarea.cell-tag,
textarea.tags-input input,
textarea.tags-input button {
  height: auto;
}
select.cell-tag,
select.tags-input input,
select.tags-input button {
  height: 30px;
  line-height: 30px;
}
textarea.cell-tag,
textarea.tags-input input,
textarea.tags-input button,
select[multiple].cell-tag,
select[multiple].tags-input input,
select[multiple].tags-input button {
  height: auto;
}
.cell-tag,
.tags-input button {
  padding: 0px 4px;
}
.cell-tag {
  background-color: #fff;
  white-space: nowrap;
}
.tags-input input[type=text]:focus {
  outline: none;
  box-shadow: none;
  border-color: #ccc;
}
.completions {
  position: absolute;
  z-index: 110;
  overflow: hidden;
  border: 1px solid #ababab;
  border-radius: 2px;
  -webkit-box-shadow: 0px 6px 10px -1px #adadad;
  box-shadow: 0px 6px 10px -1px #adadad;
  line-height: 1;
}
.completions select {
  background: white;
  outline: none;
  border: none;
  padding: 0px;
  margin: 0px;
  overflow: auto;
  font-family: monospace;
  font-size: 110%;
  color: #000;
  width: auto;
}
.completions select option.context {
  color: #286090;
}
#kernel_logo_widget .current_kernel_logo {
  display: none;
  margin-top: -1px;
  margin-bottom: -1px;
  width: 32px;
  height: 32px;
}
[dir="rtl"] #kernel_logo_widget {
  float: left !important;
  float: left;
}
.modal .modal-body .move-path {
  display: flex;
  flex-direction: row;
  justify-content: space;
  align-items: center;
}
.modal .modal-body .move-path .server-root {
  padding-right: 20px;
}
.modal .modal-body .move-path .path-input {
  flex: 1;
}
#menubar {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  margin-top: 1px;
}
#menubar .navbar {
  border-top: 1px;
  border-radius: 0px 0px 2px 2px;
  margin-bottom: 0px;
}
#menubar .navbar-toggle {
  float: left;
  padding-top: 7px;
  padding-bottom: 7px;
  border: none;
}
#menubar .navbar-collapse {
  clear: left;
}
[dir="rtl"] #menubar .navbar-toggle {
  float: right;
}
[dir="rtl"] #menubar .navbar-collapse {
  clear: right;
}
[dir="rtl"] #menubar .navbar-nav {
  float: right;
}
[dir="rtl"] #menubar .nav {
  padding-right: 0px;
}
[dir="rtl"] #menubar .navbar-nav > li {
  float: right;
}
[dir="rtl"] #menubar .navbar-right {
  float: left !important;
}
[dir="rtl"] ul.dropdown-menu {
  text-align: right;
  left: auto;
}
[dir="rtl"] ul#new-menu.dropdown-menu {
  right: auto;
  left: 0;
}
.nav-wrapper {
  border-bottom: 1px solid #e7e7e7;
}
i.menu-icon {
  padding-top: 4px;
}
[dir="rtl"] i.menu-icon.pull-right {
  float: left !important;
  float: left;
}
ul#help_menu li a {
  overflow: hidden;
  padding-right: 2.2em;
}
ul#help_menu li a i {
  margin-right: -1.2em;
}
[dir="rtl"] ul#help_menu li a {
  padding-left: 2.2em;
}
[dir="rtl"] ul#help_menu li a i {
  margin-right: 0;
  margin-left: -1.2em;
}
[dir="rtl"] ul#help_menu li a i.pull-right {
  float: left !important;
  float: left;
}
.dropdown-submenu {
  position: relative;
}
.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
}
[dir="rtl"] .dropdown-submenu > .dropdown-menu {
  right: 100%;
  margin-right: -1px;
}
.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}
.dropdown-submenu > a:after {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  display: block;
  content: "\f0da";
  float: right;
  color: #333333;
  margin-top: 2px;
  margin-right: -10px;
}
.dropdown-submenu > a:after.fa-pull-left {
  margin-right: .3em;
}
.dropdown-submenu > a:after.fa-pull-right {
  margin-left: .3em;
}
.dropdown-submenu > a:after.pull-left {
  margin-right: .3em;
}
.dropdown-submenu > a:after.pull-right {
  margin-left: .3em;
}
[dir="rtl"] .dropdown-submenu > a:after {
  float: left;
  content: "\f0d9";
  margin-right: 0;
  margin-left: -10px;
}
.dropdown-submenu:hover > a:after {
  color: #262626;
}
.dropdown-submenu.pull-left {
  float: none;
}
.dropdown-submenu.pull-left > .dropdown-menu {
  left: -100%;
  margin-left: 10px;
}
#notification_area {
  float: right !important;
  float: right;
  z-index: 10;
}
[dir="rtl"] #notification_area {
  float: left !important;
  float: left;
}
.indicator_area {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
}
[dir="rtl"] .indicator_area {
  float: left !important;
  float: left;
}
#kernel_indicator {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
  border-left: 1px solid;
}
#kernel_indicator .kernel_indicator_name {
  padding-left: 5px;
  padding-right: 5px;
}
[dir="rtl"] #kernel_indicator {
  float: left !important;
  float: left;
  border-left: 0;
  border-right: 1px solid;
}
#modal_indicator {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
}
[dir="rtl"] #modal_indicator {
  float: left !important;
  float: left;
}
#readonly-indicator {
  float: right !important;
  float: right;
  color: #777;
  margin-left: 5px;
  margin-right: 5px;
  width: 11px;
  z-index: 10;
  text-align: center;
  width: auto;
  margin-top: 2px;
  margin-bottom: 0px;
  margin-left: 0px;
  margin-right: 0px;
  display: none;
}
.modal_indicator:before {
  width: 1.28571429em;
  text-align: center;
}
.edit_mode .modal_indicator:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f040";
}
.edit_mode .modal_indicator:before.fa-pull-left {
  margin-right: .3em;
}
.edit_mode .modal_indicator:before.fa-pull-right {
  margin-left: .3em;
}
.edit_mode .modal_indicator:before.pull-left {
  margin-right: .3em;
}
.edit_mode .modal_indicator:before.pull-right {
  margin-left: .3em;
}
.command_mode .modal_indicator:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: ' ';
}
.command_mode .modal_indicator:before.fa-pull-left {
  margin-right: .3em;
}
.command_mode .modal_indicator:before.fa-pull-right {
  margin-left: .3em;
}
.command_mode .modal_indicator:before.pull-left {
  margin-right: .3em;
}
.command_mode .modal_indicator:before.pull-right {
  margin-left: .3em;
}
.kernel_idle_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f10c";
}
.kernel_idle_icon:before.fa-pull-left {
  margin-right: .3em;
}
.kernel_idle_icon:before.fa-pull-right {
  margin-left: .3em;
}
.kernel_idle_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_idle_icon:before.pull-right {
  margin-left: .3em;
}
.kernel_busy_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f111";
}
.kernel_busy_icon:before.fa-pull-left {
  margin-right: .3em;
}
.kernel_busy_icon:before.fa-pull-right {
  margin-left: .3em;
}
.kernel_busy_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_busy_icon:before.pull-right {
  margin-left: .3em;
}
.kernel_dead_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f1e2";
}
.kernel_dead_icon:before.fa-pull-left {
  margin-right: .3em;
}
.kernel_dead_icon:before.fa-pull-right {
  margin-left: .3em;
}
.kernel_dead_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_dead_icon:before.pull-right {
  margin-left: .3em;
}
.kernel_disconnected_icon:before {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f127";
}
.kernel_disconnected_icon:before.fa-pull-left {
  margin-right: .3em;
}
.kernel_disconnected_icon:before.fa-pull-right {
  margin-left: .3em;
}
.kernel_disconnected_icon:before.pull-left {
  margin-right: .3em;
}
.kernel_disconnected_icon:before.pull-right {
  margin-left: .3em;
}
.notification_widget {
  color: #777;
  z-index: 10;
  background: rgba(240, 240, 240, 0.5);
  margin-right: 4px;
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.notification_widget:focus,
.notification_widget.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
.notification_widget:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.notification_widget:active,
.notification_widget.active,
.open > .dropdown-toggle.notification_widget {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.notification_widget:active:hover,
.notification_widget.active:hover,
.open > .dropdown-toggle.notification_widget:hover,
.notification_widget:active:focus,
.notification_widget.active:focus,
.open > .dropdown-toggle.notification_widget:focus,
.notification_widget:active.focus,
.notification_widget.active.focus,
.open > .dropdown-toggle.notification_widget.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
.notification_widget:active,
.notification_widget.active,
.open > .dropdown-toggle.notification_widget {
  background-image: none;
}
.notification_widget.disabled:hover,
.notification_widget[disabled]:hover,
fieldset[disabled] .notification_widget:hover,
.notification_widget.disabled:focus,
.notification_widget[disabled]:focus,
fieldset[disabled] .notification_widget:focus,
.notification_widget.disabled.focus,
.notification_widget[disabled].focus,
fieldset[disabled] .notification_widget.focus {
  background-color: #fff;
  border-color: #ccc;
}
.notification_widget .badge {
  color: #fff;
  background-color: #333;
}
.notification_widget.warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.notification_widget.warning:focus,
.notification_widget.warning.focus {
  color: #fff;
  background-color: #ec971f;
  border-color: #985f0d;
}
.notification_widget.warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.notification_widget.warning:active,
.notification_widget.warning.active,
.open > .dropdown-toggle.notification_widget.warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.notification_widget.warning:active:hover,
.notification_widget.warning.active:hover,
.open > .dropdown-toggle.notification_widget.warning:hover,
.notification_widget.warning:active:focus,
.notification_widget.warning.active:focus,
.open > .dropdown-toggle.notification_widget.warning:focus,
.notification_widget.warning:active.focus,
.notification_widget.warning.active.focus,
.open > .dropdown-toggle.notification_widget.warning.focus {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d;
}
.notification_widget.warning:active,
.notification_widget.warning.active,
.open > .dropdown-toggle.notification_widget.warning {
  background-image: none;
}
.notification_widget.warning.disabled:hover,
.notification_widget.warning[disabled]:hover,
fieldset[disabled] .notification_widget.warning:hover,
.notification_widget.warning.disabled:focus,
.notification_widget.warning[disabled]:focus,
fieldset[disabled] .notification_widget.warning:focus,
.notification_widget.warning.disabled.focus,
.notification_widget.warning[disabled].focus,
fieldset[disabled] .notification_widget.warning.focus {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.notification_widget.warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.notification_widget.success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.notification_widget.success:focus,
.notification_widget.success.focus {
  color: #fff;
  background-color: #449d44;
  border-color: #255625;
}
.notification_widget.success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.notification_widget.success:active,
.notification_widget.success.active,
.open > .dropdown-toggle.notification_widget.success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.notification_widget.success:active:hover,
.notification_widget.success.active:hover,
.open > .dropdown-toggle.notification_widget.success:hover,
.notification_widget.success:active:focus,
.notification_widget.success.active:focus,
.open > .dropdown-toggle.notification_widget.success:focus,
.notification_widget.success:active.focus,
.notification_widget.success.active.focus,
.open > .dropdown-toggle.notification_widget.success.focus {
  color: #fff;
  background-color: #398439;
  border-color: #255625;
}
.notification_widget.success:active,
.notification_widget.success.active,
.open > .dropdown-toggle.notification_widget.success {
  background-image: none;
}
.notification_widget.success.disabled:hover,
.notification_widget.success[disabled]:hover,
fieldset[disabled] .notification_widget.success:hover,
.notification_widget.success.disabled:focus,
.notification_widget.success[disabled]:focus,
fieldset[disabled] .notification_widget.success:focus,
.notification_widget.success.disabled.focus,
.notification_widget.success[disabled].focus,
fieldset[disabled] .notification_widget.success.focus {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.notification_widget.success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.notification_widget.info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.notification_widget.info:focus,
.notification_widget.info.focus {
  color: #fff;
  background-color: #31b0d5;
  border-color: #1b6d85;
}
.notification_widget.info:hover {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.notification_widget.info:active,
.notification_widget.info.active,
.open > .dropdown-toggle.notification_widget.info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.notification_widget.info:active:hover,
.notification_widget.info.active:hover,
.open > .dropdown-toggle.notification_widget.info:hover,
.notification_widget.info:active:focus,
.notification_widget.info.active:focus,
.open > .dropdown-toggle.notification_widget.info:focus,
.notification_widget.info:active.focus,
.notification_widget.info.active.focus,
.open > .dropdown-toggle.notification_widget.info.focus {
  color: #fff;
  background-color: #269abc;
  border-color: #1b6d85;
}
.notification_widget.info:active,
.notification_widget.info.active,
.open > .dropdown-toggle.notification_widget.info {
  background-image: none;
}
.notification_widget.info.disabled:hover,
.notification_widget.info[disabled]:hover,
fieldset[disabled] .notification_widget.info:hover,
.notification_widget.info.disabled:focus,
.notification_widget.info[disabled]:focus,
fieldset[disabled] .notification_widget.info:focus,
.notification_widget.info.disabled.focus,
.notification_widget.info[disabled].focus,
fieldset[disabled] .notification_widget.info.focus {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.notification_widget.info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.notification_widget.danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.notification_widget.danger:focus,
.notification_widget.danger.focus {
  color: #fff;
  background-color: #c9302c;
  border-color: #761c19;
}
.notification_widget.danger:hover {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.notification_widget.danger:active,
.notification_widget.danger.active,
.open > .dropdown-toggle.notification_widget.danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.notification_widget.danger:active:hover,
.notification_widget.danger.active:hover,
.open > .dropdown-toggle.notification_widget.danger:hover,
.notification_widget.danger:active:focus,
.notification_widget.danger.active:focus,
.open > .dropdown-toggle.notification_widget.danger:focus,
.notification_widget.danger:active.focus,
.notification_widget.danger.active.focus,
.open > .dropdown-toggle.notification_widget.danger.focus {
  color: #fff;
  background-color: #ac2925;
  border-color: #761c19;
}
.notification_widget.danger:active,
.notification_widget.danger.active,
.open > .dropdown-toggle.notification_widget.danger {
  background-image: none;
}
.notification_widget.danger.disabled:hover,
.notification_widget.danger[disabled]:hover,
fieldset[disabled] .notification_widget.danger:hover,
.notification_widget.danger.disabled:focus,
.notification_widget.danger[disabled]:focus,
fieldset[disabled] .notification_widget.danger:focus,
.notification_widget.danger.disabled.focus,
.notification_widget.danger[disabled].focus,
fieldset[disabled] .notification_widget.danger.focus {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.notification_widget.danger .badge {
  color: #d9534f;
  background-color: #fff;
}
div#pager {
  background-color: #fff;
  font-size: 14px;
  line-height: 20px;
  overflow: hidden;
  display: none;
  position: fixed;
  bottom: 0px;
  width: 100%;
  max-height: 50%;
  padding-top: 8px;
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  /* Display over codemirror */
  z-index: 100;
  /* Hack which prevents jquery ui resizable from changing top. */
  top: auto !important;
}
div#pager pre {
  line-height: 1.21429em;
  color: #000;
  background-color: #f7f7f7;
  padding: 0.4em;
}
div#pager #pager-button-area {
  position: absolute;
  top: 8px;
  right: 20px;
}
div#pager #pager-contents {
  position: relative;
  overflow: auto;
  width: 100%;
  height: 100%;
}
div#pager #pager-contents #pager-container {
  position: relative;
  padding: 15px 0px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
div#pager .ui-resizable-handle {
  top: 0px;
  height: 8px;
  background: #f7f7f7;
  border-top: 1px solid #cfcfcf;
  border-bottom: 1px solid #cfcfcf;
  /* This injects handle bars (a short, wide = symbol) for 
        the resize handle. */
}
div#pager .ui-resizable-handle::after {
  content: '';
  top: 2px;
  left: 50%;
  height: 3px;
  width: 30px;
  margin-left: -15px;
  position: absolute;
  border-top: 1px solid #cfcfcf;
}
.quickhelp {
  /* Old browsers */
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-align: stretch;
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-align: stretch;
  display: box;
  box-orient: horizontal;
  box-align: stretch;
  /* Modern browsers */
  display: flex;
  flex-direction: row;
  align-items: stretch;
  line-height: 1.8em;
}
.shortcut_key {
  display: inline-block;
  width: 21ex;
  text-align: right;
  font-family: monospace;
}
.shortcut_descr {
  display: inline-block;
  /* Old browsers */
  -webkit-box-flex: 1;
  -moz-box-flex: 1;
  box-flex: 1;
  /* Modern browsers */
  flex: 1;
}
span.save_widget {
  height: 30px;
  margin-top: 4px;
  display: flex;
  justify-content: flex-start;
  align-items: baseline;
  width: 50%;
  flex: 1;
}
span.save_widget span.filename {
  height: 100%;
  line-height: 1em;
  margin-left: 16px;
  border: none;
  font-size: 146.5%;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
  border-radius: 2px;
}
span.save_widget span.filename:hover {
  background-color: #e6e6e6;
}
[dir="rtl"] span.save_widget.pull-left {
  float: right !important;
  float: right;
}
[dir="rtl"] span.save_widget span.filename {
  margin-left: 0;
  margin-right: 16px;
}
span.checkpoint_status,
span.autosave_status {
  font-size: small;
  white-space: nowrap;
  padding: 0 5px;
}
@media (max-width: 767px) {
  span.save_widget {
    font-size: small;
    padding: 0 0 0 5px;
  }
  span.checkpoint_status,
  span.autosave_status {
    display: none;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  span.checkpoint_status {
    display: none;
  }
  span.autosave_status {
    font-size: x-small;
  }
}
.toolbar {
  padding: 0px;
  margin-left: -5px;
  margin-top: 2px;
  margin-bottom: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
.toolbar select,
.toolbar label {
  width: auto;
  vertical-align: middle;
  margin-right: 2px;
  margin-bottom: 0px;
  display: inline;
  font-size: 92%;
  margin-left: 0.3em;
  margin-right: 0.3em;
  padding: 0px;
  padding-top: 3px;
}
.toolbar .btn {
  padding: 2px 8px;
}
.toolbar .btn-group {
  margin-top: 0px;
  margin-left: 5px;
}
.toolbar-btn-label {
  margin-left: 6px;
}
#maintoolbar {
  margin-bottom: -3px;
  margin-top: -8px;
  border: 0px;
  min-height: 27px;
  margin-left: 0px;
  padding-top: 11px;
  padding-bottom: 3px;
}
#maintoolbar .navbar-text {
  float: none;
  vertical-align: middle;
  text-align: right;
  margin-left: 5px;
  margin-right: 0px;
  margin-top: 0px;
}
.select-xs {
  height: 24px;
}
[dir="rtl"] .btn-group > .btn,
.btn-group-vertical > .btn {
  float: right;
}
.pulse,
.dropdown-menu > li > a.pulse,
li.pulse > a.dropdown-toggle,
li.pulse.open > a.dropdown-toggle {
  background-color: #F37626;
  color: white;
}
/**
 * Primary styles
 *
 * Author: Jupyter Development Team
 */
/** WARNING IF YOU ARE EDITTING THIS FILE, if this is a .css file, It has a lot
 * of chance of beeing generated from the ../less/[samename].less file, you can
 * try to get back the less file by reverting somme commit in history
 **/
/*
 * We'll try to get something pretty, so we
 * have some strange css to have the scroll bar on
 * the left with fix button on the top right of the tooltip
 */
@-moz-keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@-webkit-keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
@-moz-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
/*properties of tooltip after "expand"*/
.bigtooltip {
  overflow: auto;
  height: 200px;
  -webkit-transition-property: height;
  -webkit-transition-duration: 500ms;
  -moz-transition-property: height;
  -moz-transition-duration: 500ms;
  transition-property: height;
  transition-duration: 500ms;
}
/*properties of tooltip before "expand"*/
.smalltooltip {
  -webkit-transition-property: height;
  -webkit-transition-duration: 500ms;
  -moz-transition-property: height;
  -moz-transition-duration: 500ms;
  transition-property: height;
  transition-duration: 500ms;
  text-overflow: ellipsis;
  overflow: hidden;
  height: 80px;
}
.tooltipbuttons {
  position: absolute;
  padding-right: 15px;
  top: 0px;
  right: 0px;
}
.tooltiptext {
  /*avoid the button to overlap on some docstring*/
  padding-right: 30px;
}
.ipython_tooltip {
  max-width: 700px;
  /*fade-in animation when inserted*/
  -webkit-animation: fadeOut 400ms;
  -moz-animation: fadeOut 400ms;
  animation: fadeOut 400ms;
  -webkit-animation: fadeIn 400ms;
  -moz-animation: fadeIn 400ms;
  animation: fadeIn 400ms;
  vertical-align: middle;
  background-color: #f7f7f7;
  overflow: visible;
  border: #ababab 1px solid;
  outline: none;
  padding: 3px;
  margin: 0px;
  padding-left: 7px;
  font-family: monospace;
  min-height: 50px;
  -moz-box-shadow: 0px 6px 10px -1px #adadad;
  -webkit-box-shadow: 0px 6px 10px -1px #adadad;
  box-shadow: 0px 6px 10px -1px #adadad;
  border-radius: 2px;
  position: absolute;
  z-index: 1000;
}
.ipython_tooltip a {
  float: right;
}
.ipython_tooltip .tooltiptext pre {
  border: 0;
  border-radius: 0;
  font-size: 100%;
  background-color: #f7f7f7;
}
.pretooltiparrow {
  left: 0px;
  margin: 0px;
  top: -16px;
  width: 40px;
  height: 16px;
  overflow: hidden;
  position: absolute;
}
.pretooltiparrow:before {
  background-color: #f7f7f7;
  border: 1px #ababab solid;
  z-index: 11;
  content: "";
  position: absolute;
  left: 15px;
  top: 10px;
  width: 25px;
  height: 25px;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
}
ul.typeahead-list i {
  margin-left: -10px;
  width: 18px;
}
[dir="rtl"] ul.typeahead-list i {
  margin-left: 0;
  margin-right: -10px;
}
ul.typeahead-list {
  max-height: 80vh;
  overflow: auto;
}
ul.typeahead-list > li > a {
  /** Firefox bug **/
  /* see https://github.com/jupyter/notebook/issues/559 */
  white-space: normal;
}
ul.typeahead-list  > li > a.pull-right {
  float: left !important;
  float: left;
}
[dir="rtl"] .typeahead-list {
  text-align: right;
}
.cmd-palette .modal-body {
  padding: 7px;
}
.cmd-palette form {
  background: white;
}
.cmd-palette input {
  outline: none;
}
.no-shortcut {
  min-width: 20px;
  color: transparent;
}
[dir="rtl"] .no-shortcut.pull-right {
  float: left !important;
  float: left;
}
[dir="rtl"] .command-shortcut.pull-right {
  float: left !important;
  float: left;
}
.command-shortcut:before {
  content: "(command mode)";
  padding-right: 3px;
  color: #777777;
}
.edit-shortcut:before {
  content: "(edit)";
  padding-right: 3px;
  color: #777777;
}
[dir="rtl"] .edit-shortcut.pull-right {
  float: left !important;
  float: left;
}
#find-and-replace #replace-preview .match,
#find-and-replace #replace-preview .insert {
  background-color: #BBDEFB;
  border-color: #90CAF9;
  border-style: solid;
  border-width: 1px;
  border-radius: 0px;
}
[dir="ltr"] #find-and-replace .input-group-btn + .form-control {
  border-left: none;
}
[dir="rtl"] #find-and-replace .input-group-btn + .form-control {
  border-right: none;
}
#find-and-replace #replace-preview .replace .match {
  background-color: #FFCDD2;
  border-color: #EF9A9A;
  border-radius: 0px;
}
#find-and-replace #replace-preview .replace .insert {
  background-color: #C8E6C9;
  border-color: #A5D6A7;
  border-radius: 0px;
}
#find-and-replace #replace-preview {
  max-height: 60vh;
  overflow: auto;
}
#find-and-replace #replace-preview pre {
  padding: 5px 10px;
}
.terminal-app {
  background: #EEE;
}
.terminal-app #header {
  background: #fff;
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
}
.terminal-app .terminal {
  width: 100%;
  float: left;
  font-family: monospace;
  color: white;
  background: black;
  padding: 0.4em;
  border-radius: 2px;
  -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.4);
  box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.4);
}
.terminal-app .terminal,
.terminal-app .terminal dummy-screen {
  line-height: 1em;
  font-size: 14px;
}
.terminal-app .terminal .xterm-rows {
  padding: 10px;
}
.terminal-app .terminal-cursor {
  color: black;
  background: white;
}
.terminal-app #terminado-container {
  margin-top: 20px;
}
/*# sourceMappingURL=style.min.css.map */
    </style>
<style type="text/css">
    .highlight .hll { background-color: #ffffcc }
.highlight  { background: #f8f8f8; }
.highlight .c { color: #408080; font-style: italic } /* Comment */
.highlight .err { border: 1px solid #FF0000 } /* Error */
.highlight .k { color: #008000; font-weight: bold } /* Keyword */
.highlight .o { color: #666666 } /* Operator */
.highlight .ch { color: #408080; font-style: italic } /* Comment.Hashbang */
.highlight .cm { color: #408080; font-style: italic } /* Comment.Multiline */
.highlight .cp { color: #BC7A00 } /* Comment.Preproc */
.highlight .cpf { color: #408080; font-style: italic } /* Comment.PreprocFile */
.highlight .c1 { color: #408080; font-style: italic } /* Comment.Single */
.highlight .cs { color: #408080; font-style: italic } /* Comment.Special */
.highlight .gd { color: #A00000 } /* Generic.Deleted */
.highlight .ge { font-style: italic } /* Generic.Emph */
.highlight .gr { color: #FF0000 } /* Generic.Error */
.highlight .gh { color: #000080; font-weight: bold } /* Generic.Heading */
.highlight .gi { color: #00A000 } /* Generic.Inserted */
.highlight .go { color: #888888 } /* Generic.Output */
.highlight .gp { color: #000080; font-weight: bold } /* Generic.Prompt */
.highlight .gs { font-weight: bold } /* Generic.Strong */
.highlight .gu { color: #800080; font-weight: bold } /* Generic.Subheading */
.highlight .gt { color: #0044DD } /* Generic.Traceback */
.highlight .kc { color: #008000; font-weight: bold } /* Keyword.Constant */
.highlight .kd { color: #008000; font-weight: bold } /* Keyword.Declaration */
.highlight .kn { color: #008000; font-weight: bold } /* Keyword.Namespace */
.highlight .kp { color: #008000 } /* Keyword.Pseudo */
.highlight .kr { color: #008000; font-weight: bold } /* Keyword.Reserved */
.highlight .kt { color: #B00040 } /* Keyword.Type */
.highlight .m { color: #666666 } /* Literal.Number */
.highlight .s { color: #BA2121 } /* Literal.String */
.highlight .na { color: #7D9029 } /* Name.Attribute */
.highlight .nb { color: #008000 } /* Name.Builtin */
.highlight .nc { color: #0000FF; font-weight: bold } /* Name.Class */
.highlight .no { color: #880000 } /* Name.Constant */
.highlight .nd { color: #AA22FF } /* Name.Decorator */
.highlight .ni { color: #999999; font-weight: bold } /* Name.Entity */
.highlight .ne { color: #D2413A; font-weight: bold } /* Name.Exception */
.highlight .nf { color: #0000FF } /* Name.Function */
.highlight .nl { color: #A0A000 } /* Name.Label */
.highlight .nn { color: #0000FF; font-weight: bold } /* Name.Namespace */
.highlight .nt { color: #008000; font-weight: bold } /* Name.Tag */
.highlight .nv { color: #19177C } /* Name.Variable */
.highlight .ow { color: #AA22FF; font-weight: bold } /* Operator.Word */
.highlight .w { color: #bbbbbb } /* Text.Whitespace */
.highlight .mb { color: #666666 } /* Literal.Number.Bin */
.highlight .mf { color: #666666 } /* Literal.Number.Float */
.highlight .mh { color: #666666 } /* Literal.Number.Hex */
.highlight .mi { color: #666666 } /* Literal.Number.Integer */
.highlight .mo { color: #666666 } /* Literal.Number.Oct */
.highlight .sa { color: #BA2121 } /* Literal.String.Affix */
.highlight .sb { color: #BA2121 } /* Literal.String.Backtick */
.highlight .sc { color: #BA2121 } /* Literal.String.Char */
.highlight .dl { color: #BA2121 } /* Literal.String.Delimiter */
.highlight .sd { color: #BA2121; font-style: italic } /* Literal.String.Doc */
.highlight .s2 { color: #BA2121 } /* Literal.String.Double */
.highlight .se { color: #BB6622; font-weight: bold } /* Literal.String.Escape */
.highlight .sh { color: #BA2121 } /* Literal.String.Heredoc */
.highlight .si { color: #BB6688; font-weight: bold } /* Literal.String.Interpol */
.highlight .sx { color: #008000 } /* Literal.String.Other */
.highlight .sr { color: #BB6688 } /* Literal.String.Regex */
.highlight .s1 { color: #BA2121 } /* Literal.String.Single */
.highlight .ss { color: #19177C } /* Literal.String.Symbol */
.highlight .bp { color: #008000 } /* Name.Builtin.Pseudo */
.highlight .fm { color: #0000FF } /* Name.Function.Magic */
.highlight .vc { color: #19177C } /* Name.Variable.Class */
.highlight .vg { color: #19177C } /* Name.Variable.Global */
.highlight .vi { color: #19177C } /* Name.Variable.Instance */
.highlight .vm { color: #19177C } /* Name.Variable.Magic */
.highlight .il { color: #666666 } /* Literal.Number.Integer.Long */
    </style>
<style type="text/css">
    
/* Temporary definitions which will become obsolete with Notebook release 5.0 */
.ansi-black-fg { color: #3E424D; }
.ansi-black-bg { background-color: #3E424D; }
.ansi-black-intense-fg { color: #282C36; }
.ansi-black-intense-bg { background-color: #282C36; }
.ansi-red-fg { color: #E75C58; }
.ansi-red-bg { background-color: #E75C58; }
.ansi-red-intense-fg { color: #B22B31; }
.ansi-red-intense-bg { background-color: #B22B31; }
.ansi-green-fg { color: #00A250; }
.ansi-green-bg { background-color: #00A250; }
.ansi-green-intense-fg { color: #007427; }
.ansi-green-intense-bg { background-color: #007427; }
.ansi-yellow-fg { color: #DDB62B; }
.ansi-yellow-bg { background-color: #DDB62B; }
.ansi-yellow-intense-fg { color: #B27D12; }
.ansi-yellow-intense-bg { background-color: #B27D12; }
.ansi-blue-fg { color: #208FFB; }
.ansi-blue-bg { background-color: #208FFB; }
.ansi-blue-intense-fg { color: #0065CA; }
.ansi-blue-intense-bg { background-color: #0065CA; }
.ansi-magenta-fg { color: #D160C4; }
.ansi-magenta-bg { background-color: #D160C4; }
.ansi-magenta-intense-fg { color: #A03196; }
.ansi-magenta-intense-bg { background-color: #A03196; }
.ansi-cyan-fg { color: #60C6C8; }
.ansi-cyan-bg { background-color: #60C6C8; }
.ansi-cyan-intense-fg { color: #258F8F; }
.ansi-cyan-intense-bg { background-color: #258F8F; }
.ansi-white-fg { color: #C5C1B4; }
.ansi-white-bg { background-color: #C5C1B4; }
.ansi-white-intense-fg { color: #A1A6B2; }
.ansi-white-intense-bg { background-color: #A1A6B2; }

.ansi-bold { font-weight: bold; }

    </style>


<style type="text/css">
/* Overrides of notebook CSS for static HTML export */
body {
  overflow: visible;
  padding: 8px;
}

div#notebook {
  overflow: visible;
  border-top: none;
}@media print {
  div.cell {
    display: block;
    page-break-inside: avoid;
  } 
  div.output_wrapper { 
    display: block;
    page-break-inside: avoid; 
  }
  div.output { 
    display: block;
    page-break-inside: avoid; 
  }
}
</style>

<!-- Custom stylesheet, it must be in the same directory as the html file -->
<link rel="stylesheet" href="custom.css">

<!-- Loading mathjax macro -->
<!-- Load mathjax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS_HTML"></script>
    <!-- MathJax configuration -->
    <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
        tex2jax: {
            inlineMath: [ ['$','$'], ["\\(","\\)"] ],
            displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
            processEscapes: true,
            processEnvironments: true
        },
        // Center justify equations in code and markdown cells. Elsewhere
        // we use CSS to left justify single line equations in code cells.
        displayAlign: 'center',
        "HTML-CSS": {
            styles: {'.MathJax_Display': {"margin": 0}},
            linebreaks: { automatic: true }
        }
    });
    </script>
    <!-- End of mathjax configuration --></head>
<body>
  <div tabindex="-1" id="notebook" class="border-box-sizing">
    <div class="container" id="notebook-container">

<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[30]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">sqlalchemy</span> <span class="k">import</span> <span class="n">create_engine</span>
<span class="kn">import</span> <span class="nn">pandas</span> <span class="k">as</span> <span class="nn">pd</span>
<span class="kn">import</span> <span class="nn">matplotlib.pyplot</span> <span class="k">as</span> <span class="nn">plt</span>
<span class="kn">import</span> <span class="nn">numpy</span> <span class="k">as</span> <span class="nn">np</span>
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[31]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="k">def</span> <span class="nf">plot_frames</span><span class="p">(</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">,</span><span class="n">frame</span><span class="p">,</span><span class="n">frames</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="n">val1</span><span class="p">,</span> <span class="n">val2</span><span class="p">,</span> <span class="n">val3</span><span class="p">,</span><span class="n">labely</span><span class="p">,</span><span class="n">labelx</span><span class="p">,</span> <span class="n">p</span> <span class="o">=</span><span class="s1">&#39;p&#39;</span><span class="p">):</span>     
    <span class="n">my_xticks</span> <span class="o">=</span> <span class="nb">list</span><span class="p">(</span><span class="nb">set</span><span class="p">(</span><span class="n">frames</span><span class="p">[</span><span class="n">frame</span><span class="p">][</span><span class="n">val1</span><span class="p">]))</span>
    <span class="n">plt</span><span class="o">.</span><span class="n">xticks</span><span class="p">(</span><span class="nb">range</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span><span class="mi">6</span><span class="p">,</span><span class="mi">1</span><span class="p">),</span> <span class="n">my_xticks</span><span class="p">)</span>
    <span class="n">x_</span> <span class="o">=</span> <span class="n">frames</span><span class="p">[</span><span class="n">frame</span><span class="p">][</span><span class="n">val1</span><span class="p">]</span>
    <span class="n">y_</span> <span class="o">=</span> <span class="n">frames</span><span class="p">[</span><span class="n">frame</span><span class="p">][</span><span class="n">val2</span><span class="p">]</span>
    <span class="n">axes</span><span class="p">[</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">]</span><span class="o">.</span><span class="n">set</span><span class="p">(</span><span class="n">title</span><span class="o">=</span><span class="n">frames</span><span class="p">[</span><span class="n">frame</span><span class="p">][</span><span class="n">val3</span><span class="p">][</span><span class="mi">0</span><span class="p">:</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">to_string</span><span class="p">(</span><span class="n">index</span> <span class="o">=</span> <span class="kc">False</span><span class="p">))</span>
    <span class="n">axes</span><span class="p">[</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">]</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">x_</span><span class="p">,</span><span class="n">y_</span><span class="p">,</span><span class="s1">&#39;b &#39;</span><span class="o">+</span><span class="n">p</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">]</span><span class="o">.</span><span class="n">grid</span><span class="p">(</span><span class="n">which</span><span class="o">=</span> <span class="s1">&#39;both&#39;</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="n">labely</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="n">labelx</span><span class="p">)</span>
    
    
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[32]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">engine</span> <span class="o">=</span> <span class="n">create_engine</span><span class="p">(</span>
      <span class="s2">&quot;mysql://datatest0:00000000@localhost/datatest0?host=db4free.net?port=3306&quot;</span><span class="p">)</span>

<span class="n">con</span> <span class="o">=</span> <span class="n">engine</span><span class="o">.</span><span class="n">connect</span><span class="p">()</span>
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[41]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">querys</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;SELECT COUNT(DISTINCT marca) AS cant_marcas FROM data&quot;</span><span class="p">,</span>
          <span class="s2">&quot;SELECT marca, count(marca) AS num_marcas FROM data GROUP BY marca&quot;</span><span class="p">,</span> 
          <span class="s2">&quot;SELECT tipo_de_kpi, COUNT(marca) as marcas FROM data GROUP BY tipo_de_kpi&quot;</span><span class="p">,</span>
          <span class="s2">&quot;select tipo_de_kpi, marca, count(marca) as num_marcas from data GROUP by TIPO_DE_KPI, marca&quot;</span><span class="p">,</span>
          <span class="s2">&quot;select formato, MARCA, TIPO_DE_KPI,INVERSION_USD,KPI_CONTRATADO,REAL_CUMPLIDO, (INVERSION_USD/KPI_CONTRATADO-INVERSION_USD/REAL_CUMPLIDO)*100 AS desempeno_percent from data WHERE KPI_CONTRATADO &gt; 1 AND REAL_CUMPLIDO &gt; 0 UNION ALL select formato,MARCA, TIPO_DE_KPI,INVERSION_USD,KPI_CONTRATADO,REAL_CUMPLIDO,(INVERSION_USD/KPI_CONTRATADO-INVERSION_USD/REAL_CUMPLIDO)/100 AS desempeno from data WHERE KPI_CONTRATADO &lt; 1 AND KPI_CONTRATADO &gt; 0 AND REAL_CUMPLIDO &gt; 0 order by formato&quot;</span><span class="p">,</span>
          <span class="s2">&quot;select DISTINCT d.proveedor, d.marca, d.formato, d.FECHA, d.INVERSION_USD from ( select MAX(INVERSION_USD)  as max_inv,fecha from data GROUP by FECHA ) as x inner join data as d on d.INVERSION_USD = x.max_inv and x.fecha = d.FECHA&quot;</span>
         <span class="p">]</span>
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[42]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">dataquery</span><span class="o">=</span><span class="p">[]</span>
<span class="k">for</span> <span class="n">query</span> <span class="ow">in</span> <span class="n">querys</span><span class="p">:</span>
    <span class="n">dataquery</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">pd</span><span class="o">.</span><span class="n">read_sql_query</span><span class="p">(</span><span class="n">query</span><span class="p">,</span><span class="n">con</span><span class="p">))</span>
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Marcas-disponibles-en-el-informe-y-cantidad-de-registros-por-marca">Marcas disponibles en el informe y cantidad de registros por marca<a class="anchor-link" href="#Marcas-disponibles-en-el-informe-y-cantidad-de-registros-por-marca">&#182;</a></h3><ul>
<li>Consulta marcas disponibles en el informe: <em>SELECT COUNT(DISTINCT marca) AS cant_marcas FROM data</em></li>
</ul>
<p>La data tiene un total de:</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[43]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span> <span class="p">(</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">to_string</span><span class="p">(</span><span class="n">index</span><span class="o">=</span><span class="kc">False</span><span class="p">))</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>cant_marcas
          5
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<ul>
<li>Consulta cantidad de registros por marca: <em>SELECT marca, count(marca) AS num_marcas FROM data GROUP BY marca</em></li>
</ul>
<p>La catidad de registros por marca se muestra en la tabla siguiente:</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[44]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span> <span class="p">(</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">to_string</span><span class="p">(</span><span class="n">index</span><span class="o">=</span><span class="kc">False</span><span class="p">))</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>marca  num_marcas
A-140         140
 D-42          42
 D-45          45
 M-31          31
R-172         172
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Y su puede ser mejor observada en el grafico siguiente:</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[45]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">()</span> <span class="c1"># Crear una figura</span>
<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">marca</span><span class="p">,</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">num_marcas</span> <span class="p">,</span> <span class="s1">&#39;b-*&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">legend</span><span class="p">([</span><span class="s1">&#39;Cantidad&#39;</span><span class="p">])</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">&#39;Marcas&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s1">&#39;Cantidad de registros&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s1">&#39;Cantidad de registros por marcas&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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S2nbti0nnngiW7duZdKkSeTm5jJo0CDat2/P1q1b6dWr1+7yIuPGjaNVq1b07NmTzz//fPe23nrrLbp27UqHDh04/vjjdyem9evXc+KJJ9KhQwcuv/xyrJKvMall50747jto3BjmzIGhQ+PcUK2qKfvo1KmTFrdo0aLdv197rWrPnuEfFSqowt6PChXCv+baa/fa5F4effRRve666/aaXlhYqJs2bVJV1YKCAm3evLnu2rVLly5dqhUrVtT58+erquo555yjzz//vKqq9uzZU+fOnbt7HYHnq1at0saNG+vatWt1+/bt2r17d73yyitVVXXDhg26a9cuVVV95plndNiwYaqqevXVV+udd96pqqpvv/22AlpQUBDxGBpjksd777nPqNdeK9t6gFyN4jM27fpBxOLII901vXXrXINPhQpQuzY0bx6f7akqt9xyCzNnzqRChQqsXLly97f7pk2b0r59ewA6derEsmXLIq5rzpw59OrVizp1XEHG/v37727jyMvLo3///uTn57Njx47dfRpmzpzJ5MmTATjttNOoWbNmPHbTGBMn2dlQqxacfnpitpfWCeKRR0pe5l//grFjoUoV2LEDzj4bnnqqbNtt27YtkyZN2mv6iy++SEFBAfPmzSMrK4smTZrs7nNQuXLl3ctVrFiRrVu3lridcLekXn311QwbNoy+ffsyY8YMRowYUeJrjDHJbd06eOMNuPJK1/6QCBnfBrFmjbuON3t2+V3P6927N9u3b+eZZ57ZPW3u3LksX76cgw46iKysLKZPn87y5SVX3K1WrRqbN2/ea3rXrl2ZMWMG69evp7CwkNdee233vE2bNtGwYUMAJkyYsHt6jx49ePHFFwGYOnUqGzduLPU+GmMS68UXobAQLroocdtM6zOIaHhXXAB48snyWaeI8Prrr3PdddcxevRoqlSpQpMmTRgxYgTXXHMNnTt3pn379rRu3brEdQ0ZMoShQ4dStWpVZs2atXt6/fr1GTFiBN26daN+/fp07NiRnTt3AjBixAjOOeccGjZsyFFHHcVS7x644cOHM3DgQDp27EjPnj05+OCDy2eHjTFxpeouL3XpAu3aJW67KT0mdefOnbX4gEGLFy/msMMO8ymi9GDH0JjkkpvrksOYMe5KR1mJyDxV7VzSchl/ickYY5JddrZrJx04MLHbtQRhjDFJ7M8/4aWX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
"
>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Total-de-marcas-por-KPI">Total de marcas por KPI<a class="anchor-link" href="#Total-de-marcas-por-KPI">&#182;</a></h3><ul>
<li>Consulta de resultados de registros por KPI: <em>SELECT tipo_de_kpi, COUNT(marca) as marcas FROM data GROUP BY tipo_de_kpi</em></li>
</ul>
<p>Las cantidades marcas por cada tipo de KPI son:</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[46]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span> <span class="p">(</span><span class="nb">list</span><span class="p">(</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">marca</span><span class="p">))</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>[&#39;A-140&#39;, &#39;D-42&#39;, &#39;D-45&#39;, &#39;M-31&#39;, &#39;R-172&#39;]
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[47]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">impr</span> <span class="o">=</span> <span class="n">dataquery</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">tipo_de_kpi</span>
<span class="n">vol</span> <span class="o">=</span> <span class="n">dataquery</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">marcas</span>
<span class="c1">#expl =(0, 0.05, 0.1, 0)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">pie</span><span class="p">(</span><span class="n">vol</span><span class="p">,</span> <span class="n">labels</span><span class="o">=</span><span class="n">impr</span><span class="p">,</span> <span class="n">autopct</span><span class="o">=</span><span class="s1">&#39;</span><span class="si">%1.1f%%</span><span class="s1">&#39;</span><span class="p">,</span><span class="n">radius</span><span class="o">=</span><span class="mf">1.5</span><span class="p">,</span> <span class="n">shadow</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s2">&quot;Registros por KPI&quot;</span><span class="p">,</span><span class="n">loc</span><span class="o">=</span><span class="s1">&#39;left&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
<span class="c1">#plt.legend(loc=10)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Resultados-de-cada-marca-por-KPI">Resultados de cada marca por KPI<a class="anchor-link" href="#Resultados-de-cada-marca-por-KPI">&#182;</a></h3><ul>
<li>Consulta de total de registros por marca para cada KPI: <em>select tipo_de_kpi, marca, count(marca) as num_marcas from data GROUP by TIPO_DE_KPI, marca</em></li>
</ul>
<p>Las cantidades de registros por cada tipo de KPI son:</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[48]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">frames</span> <span class="o">=</span> <span class="p">[]</span>
<span class="k">for</span> <span class="n">it</span> <span class="ow">in</span> <span class="nb">set</span><span class="p">(</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">3</span><span class="p">]</span><span class="o">.</span><span class="n">tipo_de_kpi</span><span class="p">):</span>
    <span class="n">frames</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">3</span><span class="p">][</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">3</span><span class="p">][</span><span class="s1">&#39;tipo_de_kpi&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="n">it</span><span class="p">])</span>
    
<span class="n">fig</span><span class="p">,</span> <span class="n">axes</span> <span class="o">=</span> <span class="n">plt</span><span class="o">.</span><span class="n">subplots</span><span class="p">(</span><span class="n">nrows</span><span class="o">=</span><span class="mi">3</span><span class="p">,</span> <span class="n">ncols</span><span class="o">=</span><span class="mi">3</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">subplots_adjust</span><span class="p">(</span><span class="n">top</span><span class="o">=</span><span class="mi">2</span><span class="p">,</span> <span class="n">bottom</span><span class="o">=</span><span class="mf">0.09</span><span class="p">,</span> <span class="n">left</span><span class="o">=</span><span class="mf">0.10</span><span class="p">,</span> <span class="n">right</span><span class="o">=</span><span class="mi">2</span><span class="p">,</span> <span class="n">hspace</span><span class="o">=</span><span class="mf">0.5</span><span class="p">,</span>
                    <span class="n">wspace</span><span class="o">=</span><span class="mf">0.35</span><span class="p">)</span> 

<span class="n">plot_frames</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="n">frames</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;marca&#39;</span><span class="p">,</span><span class="s1">&#39;num_marcas&#39;</span><span class="p">,</span><span class="s1">&#39;tipo_de_kpi&#39;</span><span class="p">,</span><span class="s1">&#39;Registros&#39;</span><span class="p">,</span><span class="s1">&#39;Marcas&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="n">frames</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;marca&#39;</span><span class="p">,</span><span class="s1">&#39;num_marcas&#39;</span><span class="p">,</span><span class="s1">&#39;tipo_de_kpi&#39;</span><span class="p">,</span><span class="s1">&#39;Registros&#39;</span><span class="p">,</span><span class="s1">&#39;Marcas&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span><span class="mi">2</span><span class="p">,</span><span class="mi">2</span><span class="p">,</span><span class="n">frames</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;marca&#39;</span><span class="p">,</span><span class="s1">&#39;num_marcas&#39;</span><span class="p">,</span><span class="s1">&#39;tipo_de_kpi&#39;</span><span class="p">,</span><span class="s1">&#39;Registros&#39;</span><span class="p">,</span><span class="s1">&#39;Marcas&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">3</span><span class="p">,</span><span class="n">frames</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;marca&#39;</span><span class="p">,</span><span class="s1">&#39;num_marcas&#39;</span><span class="p">,</span><span class="s1">&#39;tipo_de_kpi&#39;</span><span class="p">,</span><span class="s1">&#39;Registros&#39;</span><span class="p">,</span><span class="s1">&#39;Marcas&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">4</span><span class="p">,</span><span class="n">frames</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;marca&#39;</span><span class="p">,</span><span class="s1">&#39;num_marcas&#39;</span><span class="p">,</span><span class="s1">&#39;tipo_de_kpi&#39;</span><span class="p">,</span><span class="s1">&#39;Registros&#39;</span><span class="p">,</span><span class="s1">&#39;Marcas&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span><span class="mi">2</span><span class="p">,</span><span class="mi">5</span><span class="p">,</span><span class="n">frames</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;marca&#39;</span><span class="p">,</span><span class="s1">&#39;num_marcas&#39;</span><span class="p">,</span><span class="s1">&#39;tipo_de_kpi&#39;</span><span class="p">,</span><span class="s1">&#39;Registros&#39;</span><span class="p">,</span><span class="s1">&#39;Marcas&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">6</span><span class="p">,</span><span class="n">frames</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;marca&#39;</span><span class="p">,</span><span class="s1">&#39;num_marcas&#39;</span><span class="p">,</span><span class="s1">&#39;tipo_de_kpi&#39;</span><span class="p">,</span><span class="s1">&#39;Registros&#39;</span><span class="p">,</span><span class="s1">&#39;Marcas&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">7</span><span class="p">,</span><span class="n">frames</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;marca&#39;</span><span class="p">,</span><span class="s1">&#39;num_marcas&#39;</span><span class="p">,</span><span class="s1">&#39;tipo_de_kpi&#39;</span><span class="p">,</span><span class="s1">&#39;Registros&#39;</span><span class="p">,</span><span class="s1">&#39;Marcas&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span><span class="mi">2</span><span class="p">,</span><span class="mi">8</span><span class="p">,</span><span class="n">frames</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;marca&#39;</span><span class="p">,</span><span class="s1">&#39;num_marcas&#39;</span><span class="p">,</span><span class="s1">&#39;tipo_de_kpi&#39;</span><span class="p">,</span><span class="s1">&#39;Registros&#39;</span><span class="p">,</span><span class="s1">&#39;Marcas&#39;</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Estos valores estan divididos por KPI y los puntos resultados son el numero de registros en la base de datos que pertenecen a una respectiva marca.</p>
<p>Los datos anteriores se encuentran en la tabla siguiente</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[13]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">dataquery</span><span class="p">[</span><span class="mi">3</span><span class="p">]</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[13]:</div>



<div class="output_html rendered_html output_subarea output_execute_result">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>tipo_de_kpi</th>
      <th>marca</th>
      <th>num_marcas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>CPC</td>
      <td>A-140</td>
      <td>30</td>
    </tr>
    <tr>
      <th>1</th>
      <td>CPC</td>
      <td>D-42</td>
      <td>10</td>
    </tr>
    <tr>
      <th>2</th>
      <td>Alcance</td>
      <td>D-42</td>
      <td>4</td>
    </tr>
    <tr>
      <th>3</th>
      <td>CPM</td>
      <td>D-42</td>
      <td>15</td>
    </tr>
    <tr>
      <th>4</th>
      <td>CPV</td>
      <td>D-42</td>
      <td>13</td>
    </tr>
    <tr>
      <th>5</th>
      <td>CPC</td>
      <td>D-45</td>
      <td>15</td>
    </tr>
    <tr>
      <th>6</th>
      <td>CPV</td>
      <td>D-45</td>
      <td>12</td>
    </tr>
    <tr>
      <th>7</th>
      <td>CPC</td>
      <td>M-31</td>
      <td>8</td>
    </tr>
    <tr>
      <th>8</th>
      <td>CPC</td>
      <td>R-172</td>
      <td>20</td>
    </tr>
    <tr>
      <th>9</th>
      <td>Alcance</td>
      <td>R-172</td>
      <td>27</td>
    </tr>
    <tr>
      <th>10</th>
      <td>CPM</td>
      <td>R-172</td>
      <td>62</td>
    </tr>
    <tr>
      <th>11</th>
      <td>CPV</td>
      <td>R-172</td>
      <td>31</td>
    </tr>
    <tr>
      <th>12</th>
      <td>Impresiones</td>
      <td>A-140</td>
      <td>8</td>
    </tr>
    <tr>
      <th>13</th>
      <td>CPV</td>
      <td>A-140</td>
      <td>20</td>
    </tr>
    <tr>
      <th>14</th>
      <td>Alcance</td>
      <td>A-140</td>
      <td>34</td>
    </tr>
    <tr>
      <th>15</th>
      <td>Alcance</td>
      <td>D-45</td>
      <td>9</td>
    </tr>
    <tr>
      <th>16</th>
      <td>CPM</td>
      <td>D-45</td>
      <td>9</td>
    </tr>
    <tr>
      <th>17</th>
      <td>CPM</td>
      <td>M-31</td>
      <td>10</td>
    </tr>
    <tr>
      <th>18</th>
      <td>CPV</td>
      <td>M-31</td>
      <td>7</td>
    </tr>
    <tr>
      <th>19</th>
      <td>CPM</td>
      <td>A-140</td>
      <td>46</td>
    </tr>
    <tr>
      <th>20</th>
      <td>Alcance</td>
      <td>M-31</td>
      <td>6</td>
    </tr>
    <tr>
      <th>21</th>
      <td>Interaccion con una publicacion</td>
      <td>R-172</td>
      <td>9</td>
    </tr>
    <tr>
      <th>22</th>
      <td>Clics en el enlace</td>
      <td>R-172</td>
      <td>2</td>
    </tr>
    <tr>
      <th>23</th>
      <td>Tasa de Interaccion</td>
      <td>R-172</td>
      <td>16</td>
    </tr>
    <tr>
      <th>24</th>
      <td>Tasa de Clicks en el enlace</td>
      <td>R-172</td>
      <td>5</td>
    </tr>
    <tr>
      <th>25</th>
      <td>Clics en el enlace</td>
      <td>A-140</td>
      <td>2</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="%-de-variaci&#243;n-entre-costos-planeado-y-costo-real">% de variaci&#243;n entre costos planeado y costo real<a class="anchor-link" href="#%-de-variaci&#243;n-entre-costos-planeado-y-costo-real">&#182;</a></h3><ul>
<li>Variacion de costos planeados y costo real para cada formato por tipo de kpi:</li>
</ul>
<p><em>select MARCA, TIPO_DE_KPI,INVERSION_USD,KPI_CONTRATADO,REAL_CUMPLIDO, (INVERSION_USD/KPI_CONTRATADO-INVERSION_USD/REAL_CUMPLIDO)</em>100 AS desempeno_percent from data WHERE KPI_CONTRATADO &gt; 1 AND REAL_CUMPLIDO &gt; 0 UNION ALL select MARCA, TIPO_DE_KPI,INVERSION_USD,KPI_CONTRATADO,REAL_CUMPLIDO,(INVERSION_USD/KPI_CONTRATADO-INVERSION_USD/REAL_CUMPLIDO)/100 AS desempeno from data WHERE KPI_CONTRATADO &lt; 1 AND KPI_CONTRATADO &gt; 0 AND REAL_CUMPLIDO &gt; 0 order by marca, TIPO_DE_KPI</p>
<p>Aclaratoria:</p>
<p>La pregunta especifica: Desempeño por formato, % de variación entre costos planeado y costo real (costo planeado = inversión Usd/KPI planeado)</p>
<p>Pero considerando que:</p>
<ul>
<li>No existe un valor en el formato de entrada para el costo real </li>
</ul>
<p>Se asume:</p>
<ul>
<li>El costo real es el valor entre la inversion en usd y el real cumplido. </li>
<li>La variacion es la diferencia entre el costo real y el costo planeado.</li>
</ul>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[99]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">frames2</span> <span class="o">=</span> <span class="p">[]</span>
<span class="k">for</span> <span class="n">it</span> <span class="ow">in</span> <span class="nb">set</span><span class="p">(</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">4</span><span class="p">][</span><span class="s1">&#39;formato&#39;</span><span class="p">]):</span>
    <span class="n">frames2</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">4</span><span class="p">][</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">4</span><span class="p">][</span><span class="s1">&#39;formato&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="n">it</span><span class="p">])</span>

<span class="n">fig</span><span class="p">,</span> <span class="n">axes</span> <span class="o">=</span> <span class="n">plt</span><span class="o">.</span><span class="n">subplots</span><span class="p">(</span><span class="n">nrows</span><span class="o">=</span><span class="mi">8</span><span class="p">,</span> <span class="n">ncols</span><span class="o">=</span><span class="mi">2</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">subplots_adjust</span><span class="p">(</span><span class="n">top</span><span class="o">=</span><span class="mi">5</span><span class="p">,</span> <span class="n">bottom</span><span class="o">=</span><span class="mf">0.09</span><span class="p">,</span> <span class="n">left</span><span class="o">=</span><span class="mf">0.10</span><span class="p">,</span> <span class="n">right</span><span class="o">=</span><span class="mf">2.6</span><span class="p">,</span> <span class="n">hspace</span><span class="o">=</span><span class="mf">0.5</span><span class="p">,</span>
                    <span class="n">wspace</span><span class="o">=</span><span class="mf">0.2</span><span class="p">)</span> 

<span class="n">plot_frames</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">2</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">3</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">4</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">5</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">3</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">6</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">3</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">7</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">4</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">8</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">4</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">5</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">10</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">5</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">11</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">6</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">12</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">6</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="mi">13</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plot_frames</span><span class="p">(</span><span class="mi">7</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="mi">14</span><span class="p">,</span><span class="n">frames2</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="s1">&#39;TIPO_DE_KPI&#39;</span><span class="p">,</span><span class="s1">&#39;desempeno_percent&#39;</span><span class="p">,</span><span class="s1">&#39;formato&#39;</span><span class="p">,</span> <span class="s1">&#39;</span><span class="si">% d</span><span class="s1">esempeno&#39;</span><span class="p">,</span> <span class="s1">&#39;Tipo de KPI&#39;</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">delaxes</span><span class="p">(</span><span class="n">axes</span><span class="p">[</span><span class="mi">7</span><span class="p">,</span><span class="mi">1</span><span class="p">])</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Los valores estan divididos por formato y los puntos resaltados son el valor porcentual de variacion entre el costo planeado y el costo real para todos los registros de la data que tienen ciertos valores de KPI.</p>
<p>Pero por la asuncion realizada y los valores utilizados se asume entonces que los resultados negativos implican registros donde el KPI real no cumple con el KPI contratado es decir la inversion no es satisfecha y existe una perdida, valores positivos o iguales a cero implican registros donde el KPI real es igual al contradado o lo excede por lo tanto la inversion es completamente satisfecha o excede los valores contratados.</p>
<p>El total de registros y su desempeno porcentual pude ser verificado en la tabla siguiente.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[100]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">dataquery</span><span class="p">[</span><span class="mi">4</span><span class="p">]</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[100]:</div>



<div class="output_html rendered_html output_subarea output_execute_result">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>formato</th>
      <th>MARCA</th>
      <th>TIPO_DE_KPI</th>
      <th>INVERSION_USD</th>
      <th>KPI_CONTRATADO</th>
      <th>REAL_CUMPLIDO</th>
      <th>desempeno_percent</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>Banners Tradicionales</td>
      <td>D-45</td>
      <td>CPC</td>
      <td>2679.313016</td>
      <td>2.503800e+04</td>
      <td>2885.000000</td>
      <td>-82.169482</td>
    </tr>
    <tr>
      <th>1</th>
      <td>Banners Tradicionales</td>
      <td>R-172</td>
      <td>CPM</td>
      <td>587.269841</td>
      <td>3.329820e+05</td>
      <td>314147.000000</td>
      <td>-0.010574</td>
    </tr>
    <tr>
      <th>2</th>
      <td>Banners Tradicionales</td>
      <td>R-172</td>
      <td>CPC</td>
      <td>749.571429</td>
      <td>2.361150e+05</td>
      <td>3900.000000</td>
      <td>-18.902320</td>
    </tr>
    <tr>
      <th>3</th>
      <td>Banners Tradicionales</td>
      <td>R-172</td>
      <td>CPM</td>
      <td>817.714286</td>
      <td>2.575800e+05</td>
      <td>333471.000000</td>
      <td>0.072247</td>
    </tr>
    <tr>
      <th>4</th>
      <td>Banners Tradicionales</td>
      <td>A-140</td>
      <td>CPC</td>
      <td>2748.860317</td>
      <td>2.568800e+04</td>
      <td>25749.000000</td>
      <td>0.025351</td>
    </tr>
    <tr>
      <th>5</th>
      <td>Banners Tradicionales</td>
      <td>A-140</td>
      <td>CPC</td>
      <td>2748.860317</td>
      <td>2.568800e+04</td>
      <td>25749.000000</td>
      <td>0.025351</td>
    </tr>
    <tr>
      <th>6</th>
      <td>Banners Tradicionales</td>
      <td>D-45</td>
      <td>CPC</td>
      <td>3174.603175</td>
      <td>2.966700e+04</td>
      <td>30067.000000</td>
      <td>0.142359</td>
    </tr>
    <tr>
      <th>7</th>
      <td>Banners Tradicionales</td>
      <td>R-172</td>
      <td>CPC</td>
      <td>1963.285079</td>
      <td>1.834700e+04</td>
      <td>1422.000000</td>
      <td>-127.364204</td>
    </tr>
    <tr>
      <th>8</th>
      <td>Banners Tradicionales</td>
      <td>D-45</td>
      <td>CPC</td>
      <td>2168.778730</td>
      <td>2.026700e+04</td>
      <td>20988.000000</td>
      <td>0.367612</td>
    </tr>
    <tr>
      <th>9</th>
      <td>Banners Tradicionales</td>
      <td>M-31</td>
      <td>CPC</td>
      <td>1049.274603</td>
      <td>9.805000e+03</td>
      <td>8139.000000</td>
      <td>-2.190511</td>
    </tr>
    <tr>
      <th>10</th>
      <td>Banners Tradicionales</td>
      <td>M-31</td>
      <td>CPC</td>
      <td>1052.620000</td>
      <td>9.837000e+03</td>
      <td>872.000000</td>
      <td>-110.012683</td>
    </tr>
    <tr>
      <th>11</th>
      <td>Banners Tradicionales</td>
      <td>R-172</td>
      <td>CPC</td>
      <td>1577.201587</td>
      <td>1.473900e+04</td>
      <td>15605.000000</td>
      <td>0.593845</td>
    </tr>
    <tr>
      <th>12</th>
      <td>Banners Tradicionales</td>
      <td>A-140</td>
      <td>CPC</td>
      <td>3274.017460</td>
      <td>3.119900e+04</td>
      <td>31933.000000</td>
      <td>0.241211</td>
    </tr>
    <tr>
      <th>13</th>
      <td>Banners Tradicionales</td>
      <td>A-140</td>
      <td>CPC</td>
      <td>3274.017460</td>
      <td>3.119900e+04</td>
      <td>31933.000000</td>
      <td>0.241211</td>
    </tr>
    <tr>
      <th>14</th>
      <td>Banners Tradicionales</td>
      <td>R-172</td>
      <td>CPC</td>
      <td>1362.857143</td>
      <td>4.293000e+05</td>
      <td>7036.000000</td>
      <td>-19.052311</td>
    </tr>
    <tr>
      <th>15</th>
      <td>Banners Tradicionales</td>
      <td>D-45</td>
      <td>CPM</td>
      <td>2835.510476</td>
      <td>4.968350e+05</td>
      <td>463394.000000</td>
      <td>-0.041186</td>
    </tr>
    <tr>
      <th>16</th>
      <td>Banners Tradicionales</td>
      <td>D-45</td>
      <td>CPC</td>
      <td>2168.778730</td>
      <td>1.052600e+04</td>
      <td>10528.000000</td>
      <td>0.003914</td>
    </tr>
    <tr>
      <th>17</th>
      <td>Banners Tradicionales</td>
      <td>D-42</td>
      <td>CPC</td>
      <td>1753.825397</td>
      <td>1.638900e+04</td>
      <td>1532.000000</td>
      <td>-103.778230</td>
    </tr>
    <tr>
      <th>18</th>
      <td>Banners Tradicionales</td>
      <td>D-42</td>
      <td>CPM</td>
      <td>3174.603175</td>
      <td>5.562500e+05</td>
      <td>542575.000000</td>
      <td>-0.014384</td>
    </tr>
    <tr>
      <th>19</th>
      <td>Banners Tradicionales</td>
      <td>A-140</td>
      <td>CPC</td>
      <td>2114.761587</td>
      <td>1.866000e+04</td>
      <td>18661.000000</td>
      <td>0.000607</td>
    </tr>
    <tr>
      <th>20</th>
      <td>Banners Tradicionales</td>
      <td>A-140</td>
      <td>CPC</td>
      <td>2114.761587</td>
      <td>1.866000e+04</td>
      <td>18661.000000</td>
      <td>0.000607</td>
    </tr>
    <tr>
      <th>21</th>
      <td>Banners Tradicionales</td>
      <td>A-140</td>
      <td>CPC</td>
      <td>4561.454286</td>
      <td>4.262700e+04</td>
      <td>3661.000000</td>
      <td>-113.894999</td>
    </tr>
    <tr>
      <th>22</th>
      <td>Banners Tradicionales</td>
      <td>A-140</td>
      <td>CPC</td>
      <td>4561.454286</td>
      <td>4.262700e+04</td>
      <td>3661.000000</td>
      <td>-113.894999</td>
    </tr>
    <tr>
      <th>23</th>
      <td>Banners Tradicionales</td>
      <td>D-45</td>
      <td>CPC</td>
      <td>2168.778730</td>
      <td>2.026700e+04</td>
      <td>2651.000000</td>
      <td>-71.108800</td>
    </tr>
    <tr>
      <th>24</th>
      <td>Banners Tradicionales</td>
      <td>D-42</td>
      <td>CPC</td>
      <td>1657.211746</td>
      <td>1.548700e+04</td>
      <td>1771.000000</td>
      <td>-82.874252</td>
    </tr>
    <tr>
      <th>25</th>
      <td>Banners Tradicionales</td>
      <td>A-140</td>
      <td>CPC</td>
      <td>4871.430476</td>
      <td>4.552400e+04</td>
      <td>5356.000000</td>
      <td>-80.251976</td>
    </tr>
    <tr>
      <th>26</th>
      <td>Banners Tradicionales</td>
      <td>A-140</td>
      <td>CPC</td>
      <td>4871.430476</td>
      <td>4.552400e+04</td>
      <td>5356.000000</td>
      <td>-80.251976</td>
    </tr>
    <tr>
      <th>27</th>
      <td>Banners Tradicionales</td>
      <td>R-172</td>
      <td>CPC</td>
      <td>1587.301587</td>
      <td>1.483300e+04</td>
      <td>14989.000000</td>
      <td>0.111374</td>
    </tr>
    <tr>
      <th>28</th>
      <td>Banners Tradicionales</td>
      <td>M-31</td>
      <td>CPC</td>
      <td>1049.274603</td>
      <td>9.805000e+03</td>
      <td>5734.000000</td>
      <td>-7.597750</td>
    </tr>
    <tr>
      <th>29</th>
      <td>Banners Tradicionales</td>
      <td>R-172</td>
      <td>CPM</td>
      <td>2195.238095</td>
      <td>3.846470e+05</td>
      <td>956507.000000</td>
      <td>0.341209</td>
    </tr>
    <tr>
      <th>...</th>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
    </tr>
    <tr>
      <th>387</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>1232.545079</td>
      <td>7.617900e+04</td>
      <td>91335.000000</td>
      <td>0.268482</td>
    </tr>
    <tr>
      <th>388</th>
      <td>Video Pmp</td>
      <td>M-31</td>
      <td>CPM</td>
      <td>1138.095238</td>
      <td>8.862900e+04</td>
      <td>82725.000000</td>
      <td>-0.091646</td>
    </tr>
    <tr>
      <th>389</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>1232.545079</td>
      <td>7.617900e+04</td>
      <td>91335.000000</td>
      <td>0.268482</td>
    </tr>
    <tr>
      <th>390</th>
      <td>Video Pmp</td>
      <td>R-172</td>
      <td>CPM</td>
      <td>1327.777778</td>
      <td>1.034010e+05</td>
      <td>96507.000000</td>
      <td>-0.091730</td>
    </tr>
    <tr>
      <th>391</th>
      <td>Video Pmp</td>
      <td>R-172</td>
      <td>CPV</td>
      <td>1232.545079</td>
      <td>3.839378e+07</td>
      <td>38505.000000</td>
      <td>-3.197790</td>
    </tr>
    <tr>
      <th>392</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>1412.050794</td>
      <td>1.111990e+05</td>
      <td>111000.000000</td>
      <td>-0.002277</td>
    </tr>
    <tr>
      <th>393</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>1396.825397</td>
      <td>8.878100e+04</td>
      <td>89059.000000</td>
      <td>0.004911</td>
    </tr>
    <tr>
      <th>394</th>
      <td>Video Pmp</td>
      <td>M-31</td>
      <td>CPM</td>
      <td>1138.095238</td>
      <td>8.862900e+04</td>
      <td>88376.000000</td>
      <td>-0.003676</td>
    </tr>
    <tr>
      <th>395</th>
      <td>Video Pmp</td>
      <td>M-31</td>
      <td>CPM</td>
      <td>1138.095238</td>
      <td>2.153150e+05</td>
      <td>185265.000000</td>
      <td>-0.085734</td>
    </tr>
    <tr>
      <th>396</th>
      <td>Video Pmp</td>
      <td>D-42</td>
      <td>CPM</td>
      <td>1334.377460</td>
      <td>1.039150e+05</td>
      <td>103985.000000</td>
      <td>0.000864</td>
    </tr>
    <tr>
      <th>397</th>
      <td>Video Pmp</td>
      <td>R-172</td>
      <td>CPM</td>
      <td>1057.142857</td>
      <td>7.056400e+04</td>
      <td>69447.000000</td>
      <td>-0.024096</td>
    </tr>
    <tr>
      <th>398</th>
      <td>Video Pmp</td>
      <td>M-31</td>
      <td>CPM</td>
      <td>1138.095238</td>
      <td>8.862900e+04</td>
      <td>88766.000000</td>
      <td>0.001982</td>
    </tr>
    <tr>
      <th>399</th>
      <td>Video Pmp</td>
      <td>R-172</td>
      <td>CPM</td>
      <td>2006.010476</td>
      <td>1.581310e+05</td>
      <td>104688.000000</td>
      <td>-0.647605</td>
    </tr>
    <tr>
      <th>400</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>763.584444</td>
      <td>5.946400e+04</td>
      <td>59418.000000</td>
      <td>-0.000994</td>
    </tr>
    <tr>
      <th>401</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>763.584444</td>
      <td>5.946400e+04</td>
      <td>59418.000000</td>
      <td>-0.000994</td>
    </tr>
    <tr>
      <th>402</th>
      <td>Video Pmp</td>
      <td>R-172</td>
      <td>CPM</td>
      <td>1692.857143</td>
      <td>1.334460e+05</td>
      <td>133474.000000</td>
      <td>0.000266</td>
    </tr>
    <tr>
      <th>403</th>
      <td>Video Pmp</td>
      <td>D-42</td>
      <td>CPM</td>
      <td>1517.460317</td>
      <td>1.181720e+05</td>
      <td>117940.000000</td>
      <td>-0.002526</td>
    </tr>
    <tr>
      <th>404</th>
      <td>Video Pmp</td>
      <td>D-42</td>
      <td>CPM</td>
      <td>1197.166032</td>
      <td>9.322900e+04</td>
      <td>94377.000000</td>
      <td>0.015620</td>
    </tr>
    <tr>
      <th>405</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>1412.050794</td>
      <td>1.111990e+05</td>
      <td>111000.000000</td>
      <td>-0.002277</td>
    </tr>
    <tr>
      <th>406</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>1800.516190</td>
      <td>1.402150e+05</td>
      <td>124623.000000</td>
      <td>-0.160659</td>
    </tr>
    <tr>
      <th>407</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>1800.516190</td>
      <td>1.402150e+05</td>
      <td>124623.000000</td>
      <td>-0.160659</td>
    </tr>
    <tr>
      <th>408</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>1232.545079</td>
      <td>8.227200e+04</td>
      <td>91335.000000</td>
      <td>0.148657</td>
    </tr>
    <tr>
      <th>409</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>1232.545079</td>
      <td>8.227200e+04</td>
      <td>91335.000000</td>
      <td>0.148657</td>
    </tr>
    <tr>
      <th>410</th>
      <td>Video Pmp</td>
      <td>R-172</td>
      <td>CPM</td>
      <td>1327.777778</td>
      <td>2.509500e+05</td>
      <td>18010.000000</td>
      <td>-6.843347</td>
    </tr>
    <tr>
      <th>411</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>1880.952381</td>
      <td>1.493700e+05</td>
      <td>149445.000000</td>
      <td>0.000632</td>
    </tr>
    <tr>
      <th>412</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>1880.952381</td>
      <td>1.493700e+05</td>
      <td>149445.000000</td>
      <td>0.000632</td>
    </tr>
    <tr>
      <th>413</th>
      <td>Video Pmp</td>
      <td>R-172</td>
      <td>CPM</td>
      <td>1327.777778</td>
      <td>1.034010e+05</td>
      <td>103552.000000</td>
      <td>0.001872</td>
    </tr>
    <tr>
      <th>414</th>
      <td>Video Pmp</td>
      <td>A-140</td>
      <td>CPM</td>
      <td>1396.825397</td>
      <td>8.878100e+04</td>
      <td>89059.000000</td>
      <td>0.004911</td>
    </tr>
    <tr>
      <th>415</th>
      <td>Web Site Card</td>
      <td>R-172</td>
      <td>Tasa de Clicks en el enlace</td>
      <td>1904.761905</td>
      <td>5.000000e-03</td>
      <td>0.015233</td>
      <td>2559.124622</td>
    </tr>
    <tr>
      <th>416</th>
      <td>Web Site Card</td>
      <td>R-172</td>
      <td>Tasa de Clicks en el enlace</td>
      <td>1333.333333</td>
      <td>5.000000e-03</td>
      <td>0.012100</td>
      <td>1564.750538</td>
    </tr>
  </tbody>
</table>
<p>417 rows × 7 columns</p>
</div>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Proveedores,-marcas-y-formatos-con-mayor-inversion-mes-a-mes">Proveedores, marcas y formatos con mayor inversion mes a mes<a class="anchor-link" href="#Proveedores,-marcas-y-formatos-con-mayor-inversion-mes-a-mes">&#182;</a></h3><ul>
<li>Consulta de proveedores, marcas y formatos con mayot inversion mensual:</li>
</ul>
<p><em>select DISTINCT d.proveedor, d.marca, d.tipo_de_kpi, d.FECHA, d.INVERSION_USD from ( select MAX(INVERSION_USD)  as max_inv,fecha from data GROUP by FECHA ) as x inner join data as d on d.INVERSION_USD = x.max_inv and x.fecha = d.FECHA</em></p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[101]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">()</span>
<span class="n">dates</span> <span class="o">=</span> <span class="p">[]</span>
<span class="n">dic_date</span> <span class="o">=</span> <span class="p">{</span><span class="mi">1</span><span class="p">:</span><span class="s1">&#39;Enero&#39;</span><span class="p">,</span><span class="mi">2</span><span class="p">:</span><span class="s1">&#39;Febrero&#39;</span><span class="p">,</span><span class="mi">3</span><span class="p">:</span><span class="s1">&#39;Marzo&#39;</span><span class="p">,</span><span class="mi">4</span><span class="p">:</span><span class="s1">&#39;Abril&#39;</span><span class="p">,</span><span class="mi">5</span><span class="p">:</span><span class="s1">&#39;Mayo&#39;</span><span class="p">,</span><span class="mi">6</span><span class="p">:</span><span class="s1">&#39;Junio&#39;</span><span class="p">,</span><span class="mi">7</span><span class="p">:</span><span class="s1">&#39;Julio&#39;</span><span class="p">,</span><span class="mi">8</span><span class="p">:</span><span class="s1">&#39;Agosto&#39;</span><span class="p">,</span><span class="mi">9</span><span class="p">:</span><span class="s1">&#39;Septiembre&#39;</span><span class="p">,</span><span class="mi">10</span><span class="p">:</span><span class="s1">&#39;Octubre&#39;</span><span class="p">}</span>
<span class="n">fechas</span> <span class="o">=</span> <span class="p">[</span><span class="s1">&#39;Enero&#39;</span><span class="p">,</span><span class="s1">&#39;Febrero&#39;</span><span class="p">,</span><span class="s1">&#39;Marzo&#39;</span><span class="p">,</span><span class="s1">&#39;Abril&#39;</span><span class="p">,</span><span class="s1">&#39;Mayo&#39;</span><span class="p">,</span><span class="s1">&#39;Junio&#39;</span><span class="p">,</span><span class="s1">&#39;Julio&#39;</span><span class="p">,</span><span class="s1">&#39;Agosto&#39;</span><span class="p">,</span><span class="s1">&#39;Septiembre&#39;</span><span class="p">,</span><span class="s1">&#39;Octubre&#39;</span><span class="p">]</span> 
<span class="k">for</span> <span class="n">fec</span> <span class="ow">in</span> <span class="n">dataquery</span><span class="p">[</span><span class="mi">5</span><span class="p">]</span><span class="o">.</span><span class="n">FECHA</span><span class="p">:</span>
    <span class="n">dates</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">dic_date</span><span class="p">[</span><span class="n">fec</span><span class="o">.</span><span class="n">month</span><span class="p">])</span>

<span class="n">unidades</span> <span class="o">=</span> <span class="n">dataquery</span><span class="p">[</span><span class="mi">5</span><span class="p">]</span><span class="o">.</span><span class="n">INVERSION_USD</span>
<span class="n">plt</span><span class="o">.</span><span class="n">barh</span><span class="p">(</span><span class="n">dates</span><span class="p">,</span> <span class="n">unidades</span><span class="p">,</span> <span class="n">align</span> <span class="o">=</span> <span class="s2">&quot;center&quot;</span><span class="p">,</span><span class="n">color</span> <span class="o">=</span> <span class="s2">&quot;k&quot;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">yticks</span><span class="p">(</span><span class="n">fechas</span><span class="p">,</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">5</span><span class="p">]</span><span class="o">.</span><span class="n">proveedor</span><span class="o">+</span><span class="s1">&#39; - &#39;</span><span class="o">+</span><span class="n">dates</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">&#39;Inversion en USD&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s1">&#39;Proveedores&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s2">&quot;Proveedores con mayor inversion por mes&quot;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>

<span class="n">unidades</span> <span class="o">=</span> <span class="n">dataquery</span><span class="p">[</span><span class="mi">5</span><span class="p">]</span><span class="o">.</span><span class="n">INVERSION_USD</span>
<span class="n">plt</span><span class="o">.</span><span class="n">barh</span><span class="p">(</span><span class="n">dates</span><span class="p">,</span> <span class="n">unidades</span><span class="p">,</span> <span class="n">align</span> <span class="o">=</span> <span class="s2">&quot;center&quot;</span><span class="p">,</span><span class="n">color</span> <span class="o">=</span> <span class="s2">&quot;b&quot;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">yticks</span><span class="p">(</span><span class="n">fechas</span><span class="p">,</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">5</span><span class="p">]</span><span class="o">.</span><span class="n">marca</span><span class="o">+</span><span class="s1">&#39; - &#39;</span><span class="o">+</span><span class="n">dates</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">&#39;Inversion en USD&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s1">&#39;Marcas&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s2">&quot;Marcas con mayor inversion por mes&quot;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>

<span class="n">unidades</span> <span class="o">=</span> <span class="n">dataquery</span><span class="p">[</span><span class="mi">5</span><span class="p">]</span><span class="o">.</span><span class="n">INVERSION_USD</span>
<span class="n">plt</span><span class="o">.</span><span class="n">barh</span><span class="p">(</span><span class="n">dates</span><span class="p">,</span> <span class="n">unidades</span><span class="p">,</span> <span class="n">align</span> <span class="o">=</span> <span class="s2">&quot;center&quot;</span><span class="p">,</span><span class="n">color</span> <span class="o">=</span> <span class="s2">&quot;y&quot;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">yticks</span><span class="p">(</span><span class="n">fechas</span><span class="p">,</span><span class="n">dataquery</span><span class="p">[</span><span class="mi">5</span><span class="p">]</span><span class="o">.</span><span class="n">formato</span><span class="o">+</span><span class="s1">&#39; - &#39;</span><span class="o">+</span><span class="n">dates</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">&#39;Inversion en USD&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s1">&#39;Formato&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s2">&quot;Formato con mayor inversion por mes&quot;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

<div class="output_area">

    <div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

<div class="output_area">

    <div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Los datos de los graficos anteriores corresponden con los valores que se observan en la tabla siguiente:</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[102]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">dataquery</span><span class="p">[</span><span class="mi">5</span><span class="p">]</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[102]:</div>



<div class="output_html rendered_html output_subarea output_execute_result">
<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>proveedor</th>
      <th>marca</th>
      <th>formato</th>
      <th>FECHA</th>
      <th>INVERSION_USD</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>F-101</td>
      <td>R-172</td>
      <td>Post</td>
      <td>2018-01-31</td>
      <td>6973.434603</td>
    </tr>
    <tr>
      <th>1</th>
      <td>F-101</td>
      <td>A-140</td>
      <td>Store Visits</td>
      <td>2018-02-28</td>
      <td>5438.998095</td>
    </tr>
    <tr>
      <th>2</th>
      <td>C-294</td>
      <td>R-172</td>
      <td>Push Notifications</td>
      <td>2018-03-31</td>
      <td>10222.385397</td>
    </tr>
    <tr>
      <th>3</th>
      <td>c-294</td>
      <td>A-140</td>
      <td>Banners Tradicionales</td>
      <td>2018-04-30</td>
      <td>4561.454286</td>
    </tr>
    <tr>
      <th>4</th>
      <td>C-294</td>
      <td>R-172</td>
      <td>Push Notifications</td>
      <td>2018-05-31</td>
      <td>11417.539048</td>
    </tr>
    <tr>
      <th>5</th>
      <td>C-294</td>
      <td>R-172</td>
      <td>Video Pmp</td>
      <td>2018-06-30</td>
      <td>4300.443492</td>
    </tr>
    <tr>
      <th>6</th>
      <td>F-101</td>
      <td>D-45</td>
      <td>Post</td>
      <td>2018-07-31</td>
      <td>5120.327619</td>
    </tr>
    <tr>
      <th>7</th>
      <td>F-101</td>
      <td>D-45</td>
      <td>Video Loop</td>
      <td>2018-08-31</td>
      <td>5120.327619</td>
    </tr>
    <tr>
      <th>8</th>
      <td>C-294</td>
      <td>A-140</td>
      <td>Rich Media</td>
      <td>2018-09-30</td>
      <td>2539.682540</td>
    </tr>
    <tr>
      <th>9</th>
      <td>F-101</td>
      <td>A-140</td>
      <td>Carrusel</td>
      <td>2018-10-31</td>
      <td>1677.706667</td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[20]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">con</span><span class="o">.</span><span class="n">close</span><span class="p">()</span>
</pre></div>

    </div>
</div>
</div>

</div>
    </div>
  </div>
</body>

 


</html>
