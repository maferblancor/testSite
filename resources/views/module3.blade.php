<!DOCTYPE html>
<html>
<head><meta charset="utf-8" />

<title>module3</title>

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
<div class="prompt input_prompt">In&nbsp;[62]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">sqlalchemy</span> <span class="k">import</span> <span class="n">create_engine</span>
<span class="kn">import</span> <span class="nn">pandas</span> <span class="k">as</span> <span class="nn">pd</span>
<span class="kn">import</span> <span class="nn">matplotlib.pyplot</span> <span class="k">as</span> <span class="nn">plt</span>
<span class="kn">import</span> <span class="nn">numpy</span> <span class="k">as</span> <span class="nn">np</span>
<span class="kn">from</span> <span class="nn">mpl_toolkits.mplot3d</span> <span class="k">import</span> <span class="n">axes3d</span>
<span class="o">%</span><span class="k">matplotlib</span> inline
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[155]:</div>
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
    
<span class="k">def</span> <span class="nf">plot_att</span><span class="p">(</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">,</span><span class="n">frames</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span><span class="n">locx</span><span class="p">,</span> <span class="n">locy</span><span class="p">,</span><span class="n">labelx</span><span class="p">,</span><span class="n">labely</span><span class="p">,</span> <span class="n">p</span> <span class="o">=</span><span class="s1">&#39;p&#39;</span><span class="p">):</span>     
    <span class="n">my_xticks</span> <span class="o">=</span> <span class="nb">list</span><span class="p">(</span><span class="nb">set</span><span class="p">(</span><span class="n">frames</span><span class="p">[</span><span class="n">locx</span><span class="p">]))</span>
    <span class="n">plt</span><span class="o">.</span><span class="n">xticks</span><span class="p">(</span><span class="nb">range</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span><span class="mi">6</span><span class="p">,</span><span class="mi">1</span><span class="p">),</span> <span class="n">my_xticks</span><span class="p">)</span>
    <span class="n">x_</span> <span class="o">=</span> <span class="n">frames</span><span class="p">[</span><span class="n">locx</span><span class="p">]</span>
    <span class="n">y_</span> <span class="o">=</span> <span class="n">frames</span><span class="p">[</span><span class="n">locy</span><span class="p">]</span>
    <span class="n">axes</span><span class="p">[</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">]</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">x_</span><span class="p">,</span><span class="n">y_</span><span class="p">,</span><span class="s1">&#39;b &#39;</span><span class="o">+</span><span class="n">p</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">]</span><span class="o">.</span><span class="n">grid</span><span class="p">(</span><span class="n">which</span><span class="o">=</span> <span class="s1">&#39;both&#39;</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="n">labely</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="n">labelx</span><span class="p">)</span>
    
<span class="k">def</span> <span class="nf">plot_att_x</span><span class="p">(</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">,</span><span class="n">frames</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axes</span><span class="p">,</span> <span class="n">locx</span><span class="p">,</span><span class="n">locy</span><span class="p">,</span><span class="n">labelx</span><span class="p">,</span><span class="n">labely</span><span class="p">,</span> <span class="n">p</span> <span class="o">=</span><span class="s1">&#39;p&#39;</span><span class="p">):</span>     
    <span class="n">my_xticks</span> <span class="o">=</span> <span class="nb">list</span><span class="p">(</span><span class="nb">set</span><span class="p">(</span><span class="n">locx</span><span class="p">))</span>
    <span class="n">plt</span><span class="o">.</span><span class="n">xticks</span><span class="p">(</span><span class="nb">range</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span><span class="mi">6</span><span class="p">,</span><span class="mi">1</span><span class="p">),</span> <span class="n">my_xticks</span><span class="p">)</span>
    <span class="n">y_</span> <span class="o">=</span> <span class="n">frames</span><span class="p">[</span><span class="n">locy</span><span class="p">]</span>
    <span class="n">axes</span><span class="p">[</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">]</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">locx</span><span class="p">,</span><span class="n">y_</span><span class="p">,</span><span class="s1">&#39;b &#39;</span><span class="o">+</span><span class="n">p</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">]</span><span class="o">.</span><span class="n">grid</span><span class="p">(</span><span class="n">which</span><span class="o">=</span> <span class="s1">&#39;both&#39;</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="n">labely</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="n">x</span><span class="p">,</span><span class="n">y</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="n">labelx</span><span class="p">)</span>

<span class="n">FORMATO_DIC</span> <span class="o">=</span> <span class="p">{</span><span class="s1">&#39;Carrusel&#39;</span><span class="p">:</span><span class="mi">1</span><span class="p">,</span> <span class="s1">&#39;Link Ad&#39;</span><span class="p">:</span><span class="mi">2</span><span class="p">,</span> <span class="s1">&#39;Right Time&#39;</span><span class="p">:</span><span class="mi">3</span><span class="p">,</span> <span class="s1">&#39;Web Site Card&#39;</span><span class="p">:</span><span class="mi">4</span><span class="p">,</span>
               <span class="s1">&#39;Rich Media&#39;</span><span class="p">:</span><span class="mi">5</span><span class="p">,</span> <span class="s1">&#39;Post&#39;</span><span class="p">:</span><span class="mi">6</span><span class="p">,</span> <span class="s1">&#39;Push Notifications&#39;</span><span class="p">:</span><span class="mi">7</span><span class="p">,</span> <span class="s1">&#39;Video&#39;</span><span class="p">:</span><span class="mi">8</span><span class="p">,</span>
               <span class="s1">&#39;Brand Content&#39;</span><span class="p">:</span><span class="mi">9</span><span class="p">,</span> <span class="s1">&#39;Store Visits&#39;</span><span class="p">:</span><span class="mi">10</span><span class="p">,</span> <span class="s1">&#39;Video Pmp&#39;</span><span class="p">:</span><span class="mi">11</span><span class="p">,</span> <span class="s1">&#39;Native Ads&#39;</span><span class="p">:</span><span class="mi">12</span><span class="p">,</span>
               <span class="s1">&#39;Banners Tradicionales&#39;</span><span class="p">:</span><span class="mi">13</span><span class="p">,</span> <span class="s1">&#39;Video Loop&#39;</span><span class="p">:</span><span class="mi">14</span><span class="p">,</span> <span class="s1">&#39;Video Ad&#39;</span><span class="p">:</span><span class="mi">15</span><span class="p">,</span> <span class="s1">&#39;Collection&#39;</span><span class="p">:</span><span class="mi">16</span><span class="p">}</span>

<span class="n">FORMATO_DIC_</span> <span class="o">=</span> <span class="p">{</span><span class="mi">1</span><span class="p">:</span><span class="s1">&#39;Carrusel&#39;</span><span class="p">,</span> <span class="mi">2</span><span class="p">:</span><span class="s1">&#39;Link Ad&#39;</span><span class="p">,</span> <span class="mi">3</span><span class="p">:</span><span class="s1">&#39;Right Time&#39;</span><span class="p">,</span> <span class="mi">4</span><span class="p">:</span><span class="s1">&#39;Web Site Card&#39;</span><span class="p">,</span>
               <span class="mi">5</span><span class="p">:</span><span class="s1">&#39;Rich Media&#39;</span><span class="p">,</span> <span class="mi">6</span><span class="p">:</span><span class="s1">&#39;Post&#39;</span><span class="p">,</span> <span class="mi">7</span><span class="p">:</span><span class="s1">&#39;Push Notifications&#39;</span><span class="p">,</span> <span class="mi">8</span><span class="p">:</span><span class="s1">&#39;Video&#39;</span><span class="p">,</span>
               <span class="mi">9</span><span class="p">:</span><span class="s1">&#39;Brand Content&#39;</span><span class="p">,</span> <span class="mi">10</span><span class="p">:</span><span class="s1">&#39;Store Visits&#39;</span><span class="p">,</span> <span class="mi">11</span><span class="p">:</span><span class="s1">&#39;Video Pmp&#39;</span><span class="p">,</span> <span class="mi">12</span><span class="p">:</span><span class="s1">&#39;Native Ads&#39;</span><span class="p">,</span>
               <span class="mi">13</span><span class="p">:</span><span class="s1">&#39;Banners Tradicionales&#39;</span><span class="p">,</span> <span class="mi">14</span><span class="p">:</span><span class="s1">&#39;Video Loop&#39;</span><span class="p">,</span> <span class="mi">15</span><span class="p">:</span><span class="s1">&#39;Video Ad&#39;</span><span class="p">,</span> <span class="mi">16</span><span class="p">:</span><span class="s1">&#39;Collection&#39;</span><span class="p">}</span>
    
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[4]:</div>
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
<div class="prompt input_prompt">In&nbsp;[8]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">data</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_sql_query</span><span class="p">(</span><span class="s1">&#39;SELECT * from data&#39;</span><span class="p">,</span><span class="n">con</span><span class="p">,</span><span class="n">index_col</span><span class="o">=</span><span class="s1">&#39;index&#39;</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[269]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">views</span> <span class="o">=</span> <span class="p">[]</span>
<span class="k">for</span> <span class="n">vie</span> <span class="ow">in</span> <span class="n">data</span><span class="o">.</span><span class="n">VIEWS</span><span class="p">:</span>
    <span class="k">try</span><span class="p">:</span>
        <span class="n">views</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">pd</span><span class="o">.</span><span class="n">to_numeric</span><span class="p">(</span><span class="n">vie</span><span class="p">))</span>
    <span class="k">except</span><span class="p">:</span>
        <span class="n">views</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="mi">0</span><span class="p">)</span>
     
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h2 id="Analisis-de-mercado-para-datos-de-prueba">Analisis de mercado para datos de prueba<a class="anchor-link" href="#Analisis-de-mercado-para-datos-de-prueba">&#182;</a></h2><p>¿Cuáles son los <strong>atributos</strong> considerados?</p>
<ul>
<li><strong>Inversion en USD</strong></li>
<li><strong>Formato</strong></li>
</ul>
<p>¿Cuáles son las <strong>respuestas</strong>?</p>
<ul>
<li><strong>Impresiones</strong></li>
<li><strong>Clics</strong></li>
<li><strong>Views</strong></li>
<li><strong>Interaciones</strong></li>
</ul>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[118]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">fig</span><span class="p">,</span> <span class="n">axs</span> <span class="o">=</span> <span class="n">plt</span><span class="o">.</span><span class="n">subplots</span><span class="p">(</span><span class="mi">4</span><span class="p">,</span> <span class="mi">2</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">subplots_adjust</span><span class="p">(</span><span class="n">top</span><span class="o">=</span><span class="mi">5</span><span class="p">,</span> <span class="n">bottom</span><span class="o">=</span><span class="mf">0.09</span><span class="p">,</span> <span class="n">left</span><span class="o">=</span><span class="mf">0.2</span><span class="p">,</span> <span class="n">right</span><span class="o">=</span><span class="mi">3</span><span class="p">,</span> <span class="n">hspace</span><span class="o">=</span><span class="mf">0.2</span><span class="p">,</span>
                    <span class="n">wspace</span><span class="o">=</span><span class="mf">0.4</span><span class="p">)</span> 
<span class="n">plot_att</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="n">data</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axs</span><span class="p">,</span><span class="s1">&#39;CLICS&#39;</span><span class="p">,</span> <span class="s1">&#39;INVERSION_USD&#39;</span><span class="p">,</span><span class="s1">&#39;Clics&#39;</span><span class="p">,</span><span class="s1">&#39;Inversion UDS&#39;</span><span class="p">)</span>
<span class="n">plot_att</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="n">data</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axs</span><span class="p">,</span><span class="s1">&#39;CLICS&#39;</span><span class="p">,</span> <span class="s1">&#39;FORMATO&#39;</span><span class="p">,</span><span class="s1">&#39;Clics&#39;</span><span class="p">,</span><span class="s1">&#39;Formato&#39;</span><span class="p">)</span>

<span class="n">plot_att</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="n">data</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axs</span><span class="p">,</span><span class="s1">&#39;IMPRESIONES&#39;</span><span class="p">,</span> <span class="s1">&#39;INVERSION_USD&#39;</span><span class="p">,</span><span class="s1">&#39;Impresiones&#39;</span><span class="p">,</span><span class="s1">&#39;Inversion UDS&#39;</span><span class="p">)</span>
<span class="n">plot_att</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="n">data</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axs</span><span class="p">,</span><span class="s1">&#39;IMPRESIONES&#39;</span><span class="p">,</span> <span class="s1">&#39;FORMATO&#39;</span><span class="p">,</span><span class="s1">&#39;Impresiones&#39;</span><span class="p">,</span><span class="s1">&#39;Formato&#39;</span><span class="p">)</span>

<span class="n">plot_att</span><span class="p">(</span><span class="mi">3</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="n">data</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axs</span><span class="p">,</span><span class="s1">&#39;INTERACCIONES&#39;</span><span class="p">,</span> <span class="s1">&#39;FORMATO&#39;</span><span class="p">,</span><span class="s1">&#39;Interacciones&#39;</span><span class="p">,</span><span class="s1">&#39;Formato&#39;</span><span class="p">)</span>
<span class="n">plot_att</span><span class="p">(</span><span class="mi">3</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="n">data</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axs</span><span class="p">,</span><span class="s1">&#39;INTERACCIONES&#39;</span><span class="p">,</span> <span class="s1">&#39;INVERSION_USD&#39;</span><span class="p">,</span><span class="s1">&#39;Interacciones&#39;</span><span class="p">,</span><span class="s1">&#39;Inversion UDS&#39;</span><span class="p">)</span>

<span class="n">plot_att_x</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="n">data</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axs</span><span class="p">,</span><span class="n">views</span><span class="p">,</span> <span class="s1">&#39;INVERSION_USD&#39;</span><span class="p">,</span><span class="s1">&#39;Views&#39;</span><span class="p">,</span><span class="s1">&#39;Inversion UDS&#39;</span><span class="p">)</span>
<span class="n">plot_att_x</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span><span class="mi">1</span><span class="p">,</span><span class="n">data</span><span class="p">,</span><span class="n">plt</span><span class="p">,</span><span class="n">axs</span><span class="p">,</span><span class="n">views</span><span class="p">,</span> <span class="s1">&#39;FORMATO&#39;</span><span class="p">,</span><span class="s1">&#39;Views&#39;</span><span class="p">,</span><span class="s1">&#39;Formato&#39;</span><span class="p">)</span>
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
<h4 id="Analisis-1">Analisis 1<a class="anchor-link" href="#Analisis-1">&#182;</a></h4><p>Gracias a los graficos de dispersion en los que se estudian los valores de las variables de respuesta clics, impresiones, interacciones y views, se puede deducir que los mejores resultados se producen con inversiones menores a 6000 USD.</p>
<p>Con respecto a los formatos solo se puede deducir a simple vista que el formato video es el que produce mayor numero de vistas y el formato Native Ads es el que produce mayor numero de impresiones.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h2 id="Regresiones-lineales">Regresiones lineales<a class="anchor-link" href="#Regresiones-lineales">&#182;</a></h2>
</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Construccion-de-un-modelo-de-regresion-lineal-con-el-atributo-Inversion-en-USD-para-predecir-el-numero-de-clics-en-una-publicacion">Construccion de un modelo de regresion lineal con el atributo Inversion en USD para predecir el numero de clics en una publicacion<a class="anchor-link" href="#Construccion-de-un-modelo-de-regresion-lineal-con-el-atributo-Inversion-en-USD-para-predecir-el-numero-de-clics-en-una-publicacion">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Division de los datos de inversion y numero de clics en conjuntos de prueba y entrenamiento</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[270]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">sklearn.model_selection</span> <span class="k">import</span> <span class="n">train_test_split</span>
<span class="n">atributos_cols</span> <span class="o">=</span> <span class="p">[</span><span class="s1">&#39;INVERSION_USD&#39;</span><span class="p">]</span>
<span class="n">X</span> <span class="o">=</span> <span class="n">data</span><span class="p">[</span><span class="n">atributos_cols</span><span class="p">]</span>
<span class="n">y</span> <span class="o">=</span> <span class="n">views</span>
<span class="n">X_entrenamiento</span><span class="p">,</span> <span class="n">X_prueba</span><span class="p">,</span> <span class="n">y_entrenamiento</span><span class="p">,</span> <span class="n">y_prueba</span> <span class="o">=</span> <span class="n">train_test_split</span><span class="p">(</span>
    <span class="n">X</span><span class="p">,</span> <span class="n">y</span><span class="p">,</span> <span class="n">random_state</span><span class="o">=</span><span class="mi">0</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[271]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># seguir el patron de uso de sklearn: importar, instanciar, ajustar</span>
<span class="kn">from</span> <span class="nn">sklearn.linear_model</span> <span class="k">import</span> <span class="n">LinearRegression</span>
<span class="n">lm</span> <span class="o">=</span> <span class="n">LinearRegression</span><span class="p">()</span>
<span class="n">lm</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">X_entrenamiento</span><span class="p">,</span> <span class="n">y_entrenamiento</span><span class="p">)</span>

<span class="c1"># imprimir intercepto y coeficientes de la recta</span>
<span class="nb">print</span> <span class="p">(</span><span class="n">lm</span><span class="o">.</span><span class="n">intercept_</span><span class="p">)</span>
<span class="nb">print</span> <span class="p">(</span><span class="n">lm</span><span class="o">.</span><span class="n">coef_</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>45655.59708990215
[71.41767332]
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[272]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1">#Evaluacion del modelo</span>
<span class="n">lm</span><span class="o">.</span><span class="n">score</span><span class="p">(</span><span class="n">X_prueba</span><span class="p">,</span> <span class="n">y_prueba</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[272]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>0.06322944226177074</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[273]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">X_prueba</span><span class="p">,</span><span class="n">y_prueba</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">,</span>
        <span class="n">X_prueba</span><span class="p">,</span><span class="n">lm</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">X_prueba</span><span class="p">),</span><span class="s1">&#39;-&#39;</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[273]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>[&lt;matplotlib.lines.Line2D at 0x229f40b8940&gt;,
 &lt;matplotlib.lines.Line2D at 0x229f40b8a90&gt;]</pre>
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
<h3 id="Construccion-de-un-modelo-de-regresion-lineal-con-los-atributos-formato-e-Inversion-en-USD-para-predecir-el-numero-de-clics-en-una-publicacion">Construccion de un modelo de regresion lineal con los atributos formato e Inversion en USD para predecir el numero de clics en una publicacion<a class="anchor-link" href="#Construccion-de-un-modelo-de-regresion-lineal-con-los-atributos-formato-e-Inversion-en-USD-para-predecir-el-numero-de-clics-en-una-publicacion">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[275]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">forms</span> <span class="o">=</span> <span class="p">[]</span>
<span class="k">for</span> <span class="n">form</span> <span class="ow">in</span> <span class="n">data</span><span class="o">.</span><span class="n">FORMATO</span><span class="p">:</span>
    <span class="n">forms</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">FORMATO_DIC</span><span class="p">[</span><span class="n">form</span><span class="p">])</span>
<span class="n">data</span><span class="p">[</span><span class="s1">&#39;forms&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="n">forms</span>
<span class="n">all_atributos_cols</span> <span class="o">=</span> <span class="p">[</span><span class="s1">&#39;INVERSION_USD&#39;</span><span class="p">,</span><span class="s1">&#39;forms&#39;</span><span class="p">]</span>
<span class="n">X1</span> <span class="o">=</span> <span class="n">data</span><span class="p">[</span><span class="n">all_atributos_cols</span><span class="p">]</span>
<span class="n">y1</span> <span class="o">=</span> <span class="n">views</span>
<span class="n">X1_entrenamiento</span><span class="p">,</span> <span class="n">X1_prueba</span><span class="p">,</span> <span class="n">y1_entrenamiento</span><span class="p">,</span> <span class="n">y1_prueba</span> <span class="o">=</span> <span class="n">train_test_split</span><span class="p">(</span>
    <span class="n">X1</span><span class="p">,</span> <span class="n">y1</span><span class="p">,</span> <span class="n">random_state</span><span class="o">=</span><span class="mi">0</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[276]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">lm1</span> <span class="o">=</span> <span class="n">LinearRegression</span><span class="p">()</span>
<span class="c1">#Hacer el ajusto al modelo de regresion lineal con los conjuntos que se acaban de crear.</span>
<span class="n">lm1</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">X1_entrenamiento</span><span class="p">,</span> <span class="n">y1_entrenamiento</span><span class="p">)</span>
<span class="c1"># imprimir intercepto y coeficientes</span>
<span class="nb">print</span> <span class="p">(</span><span class="n">lm1</span><span class="o">.</span><span class="n">intercept_</span><span class="p">)</span>
<span class="nb">print</span> <span class="p">(</span><span class="n">lm1</span><span class="o">.</span><span class="n">coef_</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>145620.20095384997
[    76.5543586  -13518.85725085]
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[277]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1">#Medida de veracidad de la prediccion</span>
<span class="n">lm1</span><span class="o">.</span><span class="n">score</span><span class="p">(</span><span class="n">X1_prueba</span><span class="p">,</span> <span class="n">y1_prueba</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[277]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>0.08342652000935713</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[278]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">lm1</span> <span class="o">=</span> <span class="n">LinearRegression</span><span class="p">()</span>
<span class="n">lm1</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">X1_entrenamiento</span><span class="p">,</span> <span class="n">y1_entrenamiento</span><span class="p">)</span>
<span class="c1"># imprimir intercepto y coeficientes</span>
<span class="nb">print</span> <span class="p">(</span><span class="n">lm1</span><span class="o">.</span><span class="n">intercept_</span><span class="p">)</span>
<span class="nb">print</span> <span class="p">(</span><span class="n">lm1</span><span class="o">.</span><span class="n">coef_</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>145620.20095384997
[    76.5543586  -13518.85725085]
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Aplicar-los-modelos-para-predecir-el-numero-de-clics-por-inversion-y-por-formato-e-inversion">Aplicar los modelos para predecir el numero de clics por inversion y por formato e inversion<a class="anchor-link" href="#Aplicar-los-modelos-para-predecir-el-numero-de-clics-por-inversion-y-por-formato-e-inversion">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[302]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">clics1</span> <span class="o">=</span> <span class="n">data</span><span class="p">[</span><span class="n">data</span><span class="o">.</span><span class="n">index</span> <span class="o">==</span> <span class="mi">10</span><span class="p">]</span>
<span class="n">clics1_X</span> <span class="o">=</span> <span class="n">clics1</span><span class="p">[</span><span class="n">atributos_cols</span><span class="p">]</span>
<span class="nb">print</span> <span class="p">(</span><span class="s1">&#39;Valor de Inversion en USD para caso de prueba con index = 300&#39;</span><span class="p">)</span>
<span class="n">clics1_X</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Valor de Inversion en USD para caso de prueba con index = 300
</pre>
</div>
</div>

<div class="output_area">

    <div class="prompt output_prompt">Out[302]:</div>



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
      <th>INVERSION_USD</th>
    </tr>
    <tr>
      <th>index</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>10</th>
      <td>2155.192381</td>
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
<div class="prompt input_prompt">In&nbsp;[303]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">clics1_X1</span> <span class="o">=</span> <span class="n">clics1</span><span class="p">[</span><span class="n">all_atributos_cols</span><span class="p">]</span>
<span class="nb">print</span> <span class="p">(</span><span class="s1">&#39;Valor de Inversion en USD y formato para caso de prueba con index = 300&#39;</span><span class="p">)</span>
<span class="nb">print</span> <span class="p">(</span><span class="s1">&#39;El formato 3 corresponde al valor: &#39;</span><span class="o">+</span><span class="n">FORMATO_DIC_</span><span class="p">[</span><span class="mi">10</span><span class="p">])</span>

<span class="n">clics1_X1</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Valor de Inversion en USD y formato para caso de prueba con index = 300
El formato 3 corresponde al valor: Store Visits
</pre>
</div>
</div>

<div class="output_area">

    <div class="prompt output_prompt">Out[303]:</div>



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
      <th>INVERSION_USD</th>
      <th>forms</th>
    </tr>
    <tr>
      <th>index</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>10</th>
      <td>2155.192381</td>
      <td>8</td>
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
<div class="prompt input_prompt">In&nbsp;[304]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span> <span class="p">(</span><span class="s1">&#39;Numero de Clics real para valores de prueba en el index = 300&#39;</span><span class="p">)</span>
<span class="n">clics1_y</span> <span class="o">=</span>  <span class="n">views</span><span class="p">[</span><span class="mi">10</span><span class="p">]</span>
<span class="nb">print</span> <span class="p">(</span><span class="n">clics1_y</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Numero de Clics real para valores de prueba en el index = 300
1166228
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[305]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">lm</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">clics1_X</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[305]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>array([199574.42249994])</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[306]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">lm1</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">clics1_X1</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[306]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>array([202458.71333332])</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h4 id="Analisis-2">Analisis 2<a class="anchor-link" href="#Analisis-2">&#182;</a></h4><p>La data no se ajusta a una regresion lineal por lo tanto no es buena ninguna prediccion realizada sobre estos modelos.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h2 id="Regresiones-polinomiales">Regresiones polinomiales<a class="anchor-link" href="#Regresiones-polinomiales">&#182;</a></h2>
</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Construccion-de-un-modelo-de-regresion-polinomial-con-el-atributo-formato-para-predecir-el-numero-de-clics-en-una-publicacion">Construccion de un modelo de regresion polinomial con el atributo formato para predecir el numero de clics en una publicacion<a class="anchor-link" href="#Construccion-de-un-modelo-de-regresion-polinomial-con-el-atributo-formato-para-predecir-el-numero-de-clics-en-una-publicacion">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[354]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="k">def</span> <span class="nf">polinomial_dataframe</span><span class="p">(</span><span class="n">atributo</span><span class="p">,</span> <span class="n">grado</span><span class="p">):</span>
    <span class="c1"># asumir que grado es &gt;= 1</span>
    <span class="c1"># inicializar el DataFrame:</span>
    <span class="n">poli_dataframe</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">DataFrame</span><span class="p">()</span>
    <span class="c1"># fijar poli_dataframe[&#39;potencia_1&#39;] igual al atributo pasado</span>
    <span class="n">poli_dataframe</span><span class="p">[</span><span class="s1">&#39;potencia_1&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="n">atributo</span>
    <span class="c1"># chequear si grado &gt; 1</span>
    <span class="k">if</span> <span class="n">grado</span> <span class="o">&gt;</span> <span class="mi">1</span><span class="p">:</span>
        <span class="c1"># realizar un lazo con los grados restantes:</span>
        <span class="k">for</span> <span class="n">potencia</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span> <span class="n">grado</span><span class="o">+</span><span class="mi">1</span><span class="p">):</span> 
            <span class="c1"># primero le damos el nombre a la columna:</span>
            <span class="n">nombre</span> <span class="o">=</span> <span class="s1">&#39;potencia_&#39;</span> <span class="o">+</span> <span class="nb">str</span><span class="p">(</span><span class="n">potencia</span><span class="p">)</span>
            <span class="c1"># luego asignamos a poli_dataframe[nombre] la potencia del atributo apropiada</span>
            <span class="n">poli_dataframe</span><span class="p">[</span><span class="n">nombre</span><span class="p">]</span> <span class="o">=</span> <span class="n">atributo</span><span class="o">**</span><span class="n">potencia</span>
    <span class="k">return</span> <span class="n">poli_dataframe</span>
</pre></div>

    </div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[355]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">data_2</span> <span class="o">=</span> <span class="n">data</span><span class="o">.</span><span class="n">sort_values</span><span class="p">([</span><span class="s1">&#39;forms&#39;</span><span class="p">])</span>

<span class="n">poli2_data_X</span> <span class="o">=</span> <span class="n">polinomial_dataframe</span><span class="p">(</span><span class="n">data_2</span><span class="o">.</span><span class="n">forms</span><span class="p">,</span> <span class="mi">2</span><span class="p">)</span>
<span class="n">poli2_data_y</span> <span class="o">=</span> <span class="n">views</span>
<span class="n">modelo2</span> <span class="o">=</span> <span class="n">LinearRegression</span><span class="p">()</span>
<span class="n">modelo2</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">poli2_data_X</span><span class="p">,</span> <span class="n">poli2_data_y</span><span class="p">)</span>
<span class="nb">print</span> <span class="p">(</span><span class="n">modelo2</span><span class="o">.</span><span class="n">intercept_</span><span class="p">)</span>
<span class="nb">print</span> <span class="p">(</span><span class="n">modelo2</span><span class="o">.</span><span class="n">coef_</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>485504.86424227356
[-60192.88942442   2470.47690721]
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[356]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">poli2_data_X</span><span class="o">.</span><span class="n">potencia_1</span><span class="p">,</span> <span class="n">poli2_data_y</span><span class="p">,</span><span class="s1">&#39;.&#39;</span><span class="p">,</span>
        <span class="n">poli2_data_X</span><span class="o">.</span><span class="n">potencia_1</span><span class="p">,</span> <span class="n">modelo2</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">poli2_data_X</span><span class="p">),</span><span class="s1">&#39;-&#39;</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[356]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>[&lt;matplotlib.lines.Line2D at 0x229f1560400&gt;,
 &lt;matplotlib.lines.Line2D at 0x229f15602e8&gt;]</pre>
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
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[357]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">clics1</span> <span class="o">=</span> <span class="n">data</span><span class="p">[</span><span class="n">data</span><span class="o">.</span><span class="n">index</span> <span class="o">==</span> <span class="mi">300</span><span class="p">]</span>
<span class="n">clics1_X</span> <span class="o">=</span> <span class="n">clics1</span><span class="p">[</span><span class="n">atributos_cols</span><span class="p">]</span>
<span class="nb">print</span> <span class="p">(</span><span class="s1">&#39;Valor de Inversion en USD para caso de prueba con index = 300&#39;</span><span class="p">)</span>
<span class="n">clics1_X</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Valor de Inversion en USD para caso de prueba con index = 300
</pre>
</div>
</div>

<div class="output_area">

    <div class="prompt output_prompt">Out[357]:</div>



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
      <th>INVERSION_USD</th>
    </tr>
    <tr>
      <th>index</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>300</th>
      <td>317.460317</td>
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
<div class="prompt input_prompt">In&nbsp;[358]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">clics1_X1</span> <span class="o">=</span> <span class="n">clics1</span><span class="p">[</span><span class="n">all_atributos_cols</span><span class="p">]</span>
<span class="nb">print</span> <span class="p">(</span><span class="s1">&#39;Valor de Inversion en USD y formato para caso de prueba con index = 300&#39;</span><span class="p">)</span>
<span class="nb">print</span> <span class="p">(</span><span class="s1">&#39;El formato 3 corresponde al valor: &#39;</span><span class="o">+</span><span class="n">FORMATO_DIC_</span><span class="p">[</span><span class="mi">10</span><span class="p">])</span>

<span class="n">clics1_X1</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>Valor de Inversion en USD y formato para caso de prueba con index = 300
El formato 3 corresponde al valor: Store Visits
</pre>
</div>
</div>

<div class="output_area">

    <div class="prompt output_prompt">Out[358]:</div>



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
      <th>INVERSION_USD</th>
      <th>forms</th>
    </tr>
    <tr>
      <th>index</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>300</th>
      <td>317.460317</td>
      <td>3</td>
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
<div class="prompt input_prompt">In&nbsp;[353]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">modelo2</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">clics1_X1</span><span class="p">)</span>
</pre></div>

    </div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

    <div class="prompt output_prompt">Out[353]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>array([-18615937.49056679])</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div><div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h4 id="Analisis-3">Analisis 3<a class="anchor-link" href="#Analisis-3">&#182;</a></h4><p>Ni las regresiones polinomiales o lineales se ajustan a los valores que toman las variables de interes para predecir un valor real de la variable de interes.</p>

</div>
</div>
</div>
    </div>
  </div>
</body>

 


</html>
