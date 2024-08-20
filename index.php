
<?php
    $cms = require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
    $cms->landing( 1, 2 );

    $cms->thankspage = DIR . './success/success.php';
    define( 'THANKSPAGE', $_SERVER['DOCUMENT_ROOT'] . './success/success.php' );
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Farmacin-RM</title>
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Expires" content="-1">
  <meta name="keywords" content>
  <meta name="description" content="Farmacin-RM">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript">
    window.ladi_viewport = function(b) {
      var a = document;
      b = b ? b : 'innerWidth';
      var c = window[b];
      var d = c < 768;
      if (typeof window.ladi_is_desktop == "undefined" || window.ladi_is_desktop == undefined) {
        window.ladi_is_desktop = !d;
      }
      var e = 1200;
      var f = 420;
      var g = '';
      if (!d) {
        g = "width=" + e + ",user-scalable=no,initial-scale=1.0";
      } else {
        var h = 1;
        var i = f;
        if (i != c) {
          h = c / i;
        }
        g = "width=" + i + ",user-scalable=no,initial-scale=" + h + ",minimum-scale=" + h + ",maximum-scale=" + h;
      }
      var j = a.getElementById("viewport");
      if (!j) {
        j = a.createElement("meta");
        j.id = "viewport";
        j.name = "viewport";
        a.head.appendChild(j);
      }
      j.setAttribute("content", g);
    };
    window.ladi_viewport();
    window.ladi_fbq_data = [];
    window.ladi_fbq = function() {
      window.ladi_fbq_data.push(arguments);
    };
    window.ladi_ttq_data = [];
    window.ladi_ttq = function() {
      window.ladi_ttq_data.push(arguments);
    };
  </script>
  <link rel="canonical" href="https://shopkkat.com/Farmacin">
  <meta property="og:url" content="https://shopkkat.com/Farmacin">
  <meta property="og:title" content="Farmacin-RM">
  <meta property="og:type" content="website">
  <meta property="og:description" content="Farmacin-RM">
  <meta name="format-detection" content="telephone=no">
  <link rel="dns-prefetch">
  <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="preconnect" href="https://w.ladicdn.com/" crossorigin>
  <link rel="preconnect" href="https://s.ladicdn.com/" crossorigin>
  <link rel="preconnect" href="https://api1.ldpform.com/" crossorigin>
  <link rel="preconnect" href="https://a.ladipage.com/" crossorigin>
  <link rel="preconnect" href="https://api.sales.ldpform.net/" crossorigin>
  <link rel="preload" href="https:/index_family_Open_Sans_wght_400_700_display_swap_.html" as="style" onload="this.onload = null; this.rel = 'stylesheet';">
  <link rel="preload" href="https://w.ladicdn.com/v4/source/ladipagev3.min.js?v=1711682121479" as="script">
  <style id="style_ladi" type="text/css">
    a,
    abbr,
    acronym,
    address,
    applet,
    article,
    aside,
    audio,
    b,
    big,
    blockquote,
    body,
    button,
    canvas,
    caption,
    center,
    cite,
    code,
    dd,
    del,
    details,
    dfn,
    div,
    dl,
    dt,
    em,
    embed,
    fieldset,
    figcaption,
    figure,
    footer,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    header,
    hgroup,
    html,
    i,
    iframe,
    img,
    input,
    ins,
    kbd,
    label,
    legend,
    li,
    mark,
    menu,
    nav,
    object,
    ol,
    output,
    p,
    pre,
    q,
    ruby,
    s,
    samp,
    section,
    select,
    small,
    span,
    strike,
    strong,
    sub,
    summary,
    sup,
    table,
    tbody,
    td,
    textarea,
    tfoot,
    th,
    thead,
    time,
    tr,
    tt,
    u,
    ul,
    var,
    video {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      font-size: 100%;
      font: inherit;
      vertical-align: baseline;
      box-sizing: border-box;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
      display: block
    }

    body {
      line-height: 1
    }

    a {
      text-decoration: none
    }

    ol,
    ul {
      list-style: none
    }

    blockquote,
    q {
      quotes: none
    }

    blockquote:after,
    blockquote:before,
    q:after,
    q:before {
      content: '';
      content: none
    }

    table {
      border-collapse: collapse;
      border-spacing: 0
    }

    .ladi-loading {
      z-index: 900000000000;
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background-color: rgba(0, 0, 0, .1)
    }

    .ladi-loading .loading {
      width: 80px;
      height: 80px;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      margin: auto;
      overflow: hidden;
      position: absolute
    }

    .ladi-loading .loading div {
      position: absolute;
      width: 6px;
      height: 6px;
      background: #fff;
      border-radius: 50%;
      animation: ladi-loading 1.2s linear infinite
    }

    .ladi-loading .loading div:nth-child(1) {
      animation-delay: 0s;
      top: 37px;
      left: 66px
    }

    .ladi-loading .loading div:nth-child(2) {
      animation-delay: -.1s;
      top: 22px;
      left: 62px
    }

    .ladi-loading .loading div:nth-child(3) {
      animation-delay: -.2s;
      top: 11px;
      left: 52px
    }

    .ladi-loading .loading div:nth-child(4) {
      animation-delay: -.3s;
      top: 7px;
      left: 37px
    }

    .ladi-loading .loading div:nth-child(5) {
      animation-delay: -.4s;
      top: 11px;
      left: 22px
    }

    .ladi-loading .loading div:nth-child(6) {
      animation-delay: -.5s;
      top: 22px;
      left: 11px
    }

    .ladi-loading .loading div:nth-child(7) {
      animation-delay: -.6s;
      top: 37px;
      left: 7px
    }

    .ladi-loading .loading div:nth-child(8) {
      animation-delay: -.7s;
      top: 52px;
      left: 11px
    }

    .ladi-loading .loading div:nth-child(9) {
      animation-delay: -.8s;
      top: 62px;
      left: 22px
    }

    .ladi-loading .loading div:nth-child(10) {
      animation-delay: -.9s;
      top: 66px;
      left: 37px
    }

    .ladi-loading .loading div:nth-child(11) {
      animation-delay: -1s;
      top: 62px;
      left: 52px
    }

    .ladi-loading .loading div:nth-child(12) {
      animation-delay: -1.1s;
      top: 52px;
      left: 62px
    }

    @keyframes ladi-loading {

      0%,
      100%,
      20%,
      80% {
        transform: scale(1)
      }

      50% {
        transform: scale(1.5)
      }
    }

    .ladipage-message {
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 10000000000;
      background: rgba(0, 0, 0, .3)
    }

    .ladipage-message .ladipage-message-box {
      width: 400px;
      max-width: calc(100% - 50px);
      height: 160px;
      border: 1px solid rgba(0, 0, 0, .3);
      background-color: #fff;
      position: fixed;
      top: calc(50% - 155px);
      left: 0;
      right: 0;
      margin: auto;
      border-radius: 10px
    }

    .ladipage-message .ladipage-message-box span {
      display: block;
      background-color: rgba(6, 21, 40, .05);
      color: #000;
      padding: 12px 15px;
      font-weight: 600;
      font-size: 16px;
      line-height: 16px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px
    }

    .ladipage-message .ladipage-message-box .ladipage-message-text {
      display: -webkit-box;
      font-size: 14px;
      padding: 0 20px;
      margin-top: 10px;
      line-height: 18px;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .ladipage-message .ladipage-message-box .ladipage-message-close {
      display: block;
      position: absolute;
      right: 15px;
      bottom: 10px;
      margin: 0 auto;
      padding: 10px 0;
      border: none;
      width: 80px;
      text-transform: uppercase;
      text-align: center;
      color: #000;
      background-color: #e6e6e6;
      border-radius: 5px;
      text-decoration: none;
      font-size: 14px;
      line-height: 14px;
      font-weight: 600;
      cursor: pointer
    }

    .lightbox-screen {
      display: none;
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      margin: auto;
      z-index: 9000000080;
      background: rgba(0, 0, 0, .5)
    }

    .lightbox-screen .lightbox-close {
      position: absolute;
      z-index: 9000000090;
      cursor: pointer
    }

    .lightbox-screen .lightbox-hidden {
      display: none
    }

    .lightbox-screen .lightbox-close {
      width: 16px;
      height: 16px;
      margin: 10px;
      background-repeat: no-repeat;
      background-position: center center;
      background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")
    }

    body {
      font-size: 12px;
      -ms-text-size-adjust: none;
      -moz-text-size-adjust: none;
      -o-text-size-adjust: none;
      -webkit-text-size-adjust: none;
      background-color: #fff;
    }

    .overflow-hidden {
      overflow: hidden;
    }

    .ladi-transition {
      transition: all 150ms linear 0s;
    }

    .z-index-1 {
      z-index: 1;
    }

    .opacity-0 {
      opacity: 0;
    }

    .height-0 {
      height: 0 !important;
    }

    .pointer-events-none {
      pointer-events: none;
    }

    .transition-parent-collapse-height {
      transition: height 150ms linear 0s;
    }

    .transition-parent-collapse-top {
      transition: top 150ms linear 0s;
    }

    .transition-readmore {
      transition: height 350ms linear 0s;
    }

    .transition-collapse {
      transition: height 150ms linear 0s;
    }

    body.grab {
      cursor: grab;
    }

    .ladi-wraper {
      width: 100%;
      min-height: 100%;
      overflow: hidden;
    }

    .ladi-container {
      position: relative;
      margin: 0 auto;
      height: 100%;
    }

    .ladi-overlay {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      pointer-events: none;
    }

    .ladi-element {
      position: absolute;
    }

    @media (hover: hover) {
      .ladi-check-hover {
        opacity: 0;
      }
    }

    .ladi-section {
      margin: 0 auto;
      position: relative;
    }

    .ladi-section[data-tab-id] {
      display: none;
    }

    .ladi-section.selected[data-tab-id] {
      display: block;
    }

    .ladi-section .ladi-section-background {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      pointer-events: none;
      overflow: hidden;
    }

    .ladi-box {
      position: absolute;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    #SECTION_POPUP .ladi-container {
      z-index: 90000070;
    }

    #SECTION_POPUP .ladi-container>.ladi-element {
      z-index: 90000070;
      position: fixed;
      display: none;
    }

    #SECTION_POPUP .ladi-container>.ladi-element[data-fixed-close="true"] {
      position: relative !important;
    }

    #SECTION_POPUP .ladi-container>.ladi-element.hide-visibility {
      display: block !important;
      visibility: hidden !important;
    }

    #SECTION_POPUP .popup-close {
      position: absolute;
      right: 0px;
      top: 0px;
      z-index: 9000000080;
      cursor: pointer;
      width: 16px;
      height: 16px;
      margin: 10px;
      background-repeat: no-repeat;
      background-position: center center;
      background-image: url("data:image/svg+xml;utf8, %3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23000%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
    }

    .ladi-popup {
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .ladi-popup .ladi-popup-background {
      height: 100%;
      width: 100%;
      pointer-events: none;
    }

    .ladi-button {
      position: absolute;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .ladi-button:active {
      transform: translateY(2px);
      transition: transform 0.2s linear;
    }

    .ladi-button .ladi-button-background {
      height: 100%;
      width: 100%;
      pointer-events: none;
      transition: inherit;
    }

    .ladi-button>.ladi-button-headline,
    .ladi-button>.ladi-button-shape {
      width: 100% !important;
      height: 100% !important;
      top: 0 !important;
      left: 0 !important;
      display: table;
      user-select: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
    }

    .ladi-button>.ladi-button-shape .ladi-shape {
      margin: auto;
      top: 0;
      bottom: 0;
    }

    .ladi-button>.ladi-button-headline .ladi-headline {
      display: table-cell;
      vertical-align: middle;
    }

    .ladi-form {
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .ladi-form>.ladi-element {
      text-transform: inherit;
      text-decoration: inherit;
      text-align: inherit;
      letter-spacing: inherit;
      color: inherit;
      background-size: inherit;
      background-attachment: inherit;
      background-origin: inherit;
    }

    .ladi-form .ladi-button>.ladi-button-headline {
      color: initial;
      font-size: initial;
      font-weight: initial;
      text-transform: initial;
      text-decoration: initial;
      font-style: initial;
      text-align: initial;
      letter-spacing: initial;
      line-height: initial;
    }

    .ladi-form>.ladi-element .ladi-form-item-container {
      text-transform: inherit;
      text-decoration: inherit;
      text-align: inherit;
      letter-spacing: inherit;
      color: inherit;
      background-size: inherit;
      background-attachment: inherit;
      background-origin: inherit;
    }

    .ladi-form>[data-quantity="true"] .ladi-form-item-container {
      overflow: hidden;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item {
      text-transform: inherit;
      text-decoration: inherit;
      text-align: inherit;
      letter-spacing: inherit;
      color: inherit;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item-background {
      background-size: inherit;
      background-attachment: inherit;
      background-origin: inherit;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-size: 9px 6px !important;
      background-position: right .5rem center;
      background-repeat: no-repeat;
      padding-right: 24px;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-2 {
      width: calc(100% / 2 - 5px);
      max-width: calc(100% / 2 - 5px);
      min-width: calc(100% / 2 - 5px);
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-2:nth-child(3) {
      margin-left: 7.5px;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3 {
      width: calc(100% / 3 - 5px);
      max-width: calc(100% / 3 - 5px);
      min-width: calc(100% / 3 - 5px);
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(3) {
      margin-left: 7.5px;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(4) {
      margin-left: 7.5px;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select option {
      color: initial;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control:not(.ladi-form-control-select) {
      text-transform: inherit;
      text-decoration: inherit;
      text-align: inherit;
      letter-spacing: inherit;
      color: inherit;
      background-size: inherit;
      background-attachment: inherit;
      background-origin: inherit;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
      text-transform: inherit;
      text-align: inherit;
      letter-spacing: inherit;
      color: inherit;
      background-size: inherit;
      background-attachment: inherit;
      background-origin: inherit;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select:not([data-selected=""]) {
      text-decoration: inherit;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item {
      text-transform: inherit;
      text-decoration: inherit;
      text-align: inherit;
      letter-spacing: inherit;
      color: inherit;
      background-size: inherit;
      background-attachment: inherit;
      background-origin: inherit;
      vertical-align: middle;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-box-item {
      display: inline-block;
      width: fit-content;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span {
      user-select: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked="true"] {
      text-transform: inherit;
      text-decoration: inherit;
      text-align: inherit;
      letter-spacing: inherit;
      color: inherit;
      background-size: inherit;
      background-attachment: inherit;
      background-origin: inherit;
    }

    .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked="false"] {
      text-transform: inherit;
      text-align: inherit;
      letter-spacing: inherit;
      color: inherit;
      background-size: inherit;
      background-attachment: inherit;
      background-origin: inherit;
    }

    .ladi-form .ladi-form-item-container {
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .ladi-form .ladi-form-item-title-value {
      font-weight: bold;
      word-break: break-word;
    }

    .ladi-form .ladi-form-label-container {
      position: relative;
      width: 100%;
    }

    .ladi-form .ladi-form-control-file {
      background-repeat: no-repeat;
      background-position: calc(100% - 5px) center;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item {
      display: inline-block;
      cursor: pointer;
      position: relative;
      border-radius: 0px !important;
      user-select: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.image {
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.no-value {
      display: none !important;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.text.disabled {
      opacity: 0.35;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.image.disabled {
      opacity: 0.2;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.color.disabled {
      opacity: 0.15;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.selected:before {
      content: '';
      width: 0;
      height: 0;
      bottom: -1px;
      right: -1px;
      position: absolute;
      border-width: 0 0 15px 15px;
      border-color: transparent;
      border-style: solid;
    }

    .ladi-form .ladi-form-label-container .ladi-form-label-item.selected:after {
      content: '';
      background-image: url("data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 12 12' viewBox='0 0 12 12' x='0' fill='%23fff' y='0'%3E%3Cg%3E%3Cpath d='m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: bottom right;
      width: 7px;
      height: 7px;
      bottom: 0;
      right: 0;
      position: absolute;
    }

    .ladi-form .ladi-form-item {
      width: 100%;
      height: 100%;
      position: absolute;
    }

    .ladi-form .ladi-form-item-background {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      pointer-events: none;
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox {
      height: auto;
    }

    .ladi-form .ladi-form-item .ladi-form-control {
      background-color: transparent;
      min-width: 100%;
      min-height: 100%;
      max-width: 100%;
      max-height: 100%;
      width: 100%;
      height: 100%;
      padding: 0 5px;
      color: inherit;
      font-size: inherit;
      border: none;
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox {
      padding: 0 5px;
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-vertical .ladi-form-checkbox-item {
      margin-top: 0 !important;
      margin-left: 0 !important;
      margin-right: 0 !important;
      display: flex;
      align-items: center;
      border: none;
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item {
      margin-top: 0 !important;
      margin-left: 0 !important;
      margin-right: 10px !important;
      display: inline-flex;
      align-items: center;
      border: none;
      position: relative;
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item input {
      margin-right: 5px;
      display: block;
    }

    .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span {
      cursor: default;
      word-break: break-word;
    }

    .ladi-form .ladi-form-item textarea.ladi-form-control {
      resize: none;
      padding: 5px;
    }

    .ladi-form .ladi-button {
      cursor: pointer;
    }

    .ladi-form .ladi-button .ladi-headline {
      cursor: pointer;
      user-select: none;
    }

    .ladi-form .ladi-element .ladi-form-otp::-webkit-outer-spin-button,
    .ladi-form .ladi-element .ladi-form-otp::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    .ladi-form .ladi-element .ladi-form-item .button-get-code {
      display: none;
      position: absolute;
      right: 0;
      top: 0;
      bottom: 0;
      margin: auto 0;
      line-height: initial;
      padding: 5px 10px;
      height: max-content;
      cursor: pointer;
      user-select: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
    }

    .ladi-form .ladi-element .ladi-form-item .button-get-code.hide-visibility {
      display: block !important;
      visibility: hidden !important;
    }

    .ladi-form .ladi-form-item.otp-resend .button-get-code {
      display: block;
    }

    .ladi-form .ladi-form-item.otp-countdown:before {
      content: attr(data-countdown-time) "s";
      position: absolute;
      top: 0;
      bottom: 0;
      margin: auto 0;
      height: max-content;
      line-height: initial;
    }

    .ladi-form [data-variant="true"] select option[disabled] {
      background: #fff;
      color: #b8b8b8 !important;
    }

    .ladi-google-recaptcha-checkbox {
      position: absolute;
      display: inline-block;
      transform: translateY(-100%);
      margin-top: -5px;
      z-index: 90000010;
    }

    .ladi-group {
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .ladi-image {
      position: absolute;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .ladi-image .ladi-image-background {
      background-repeat: no-repeat;
      background-position: left top;
      background-size: cover;
      background-attachment: scroll;
      background-origin: content-box;
      position: absolute;
      margin: 0 auto;
      width: 100%;
      height: 100%;
      pointer-events: none;
    }

    .ladi-headline {
      width: 100%;
      display: inline-block;
      word-break: break-word;
      background-size: cover;
      background-position: center center;
    }

    .ladi-headline a {
      text-decoration: underline;
    }

    .ladi-paragraph {
      width: 100%;
      display: inline-block;
      word-break: break-word;
    }

    .ladi-paragraph a {
      text-decoration: underline;
    }

    .ladi-list-paragraph {
      width: 100%;
      display: inline-block;
    }

    .ladi-list-paragraph a {
      text-decoration: underline;
    }

    .ladi-list-paragraph ul li {
      position: relative;
      counter-increment: linum;
    }

    .ladi-list-paragraph ul li:before {
      position: absolute;
      background-repeat: no-repeat;
      background-size: 100% 100%;
      left: 0;
    }

    .ladi-list-paragraph ul li:last-child {
      padding-bottom: 0 !important;
    }

    .ladi-line {
      position: relative;
    }

    .ladi-line .ladi-line-container {
      border-bottom: 0 !important;
      border-right: 0 !important;
      width: 100%;
      height: 100%;
    }

    a[data-action] {
      user-select: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      cursor: pointer
    }

    a:visited {
      color: inherit
    }

    a:link {
      color: inherit
    }

    [data-opacity="0"] {
      opacity: 0
    }

    [data-hidden="true"] {
      display: none
    }

    [data-action="true"] {
      cursor: pointer
    }

    .ladi-hidden {
      display: none
    }

    .ladi-animation-hidden {
      visibility: hidden !important;
      opacity: 0 !important
    }

    .element-click-selected {
      cursor: pointer
    }

    .is-2nd-click {
      cursor: pointer
    }

    .ladi-button-shape.is-2nd-click,
    .ladi-accordion-shape.is-2nd-click {
      z-index: 1
    }

    .backdrop-popup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 90000060
    }

    .backdrop-dropbox {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 90000040
    }

    .ladi-lazyload {
      background-image: none !important;
    }

    .ladi-list-paragraph ul li.ladi-lazyload:before {
      background-image: none !important;
    }

    #BODY_BACKGROUND {
      position: fixed;
      pointer-events: none;
      top: 0;
      left: 0;
      right: 0;
      margin: 0 auto;
      height: 100vh !important;
    }

    @media (min-width: 768px) {}

    @media (max-width: 767px) {
      .ladi-element.ladi-auto-scroll {
        overflow-x: auto;
        overflow-y: hidden;
        width: 100% !important;
        left: 0 !important;
        -webkit-overflow-scrolling: touch;
      }

      [data-hint]:not([data-timeout-id-copied]):before,
      [data-hint]:not([data-timeout-id-copied]):after {
        display: none !important;
      }

      .ladi-section.ladi-auto-scroll {
        overflow-x: auto;
        overflow-y: hidden;
        -webkit-overflow-scrolling: touch;
      }
    }
  </style>
  <style id="style_page" type="text/css">
    body {
      direction: ltr;
    }

    @media (min-width: 768px) {
      .ladi-section .ladi-container {
        width: 1200px;
      }
    }

    @media (max-width: 767px) {
      .ladi-section .ladi-container {
        width: 420px;
      }
    }

    body {
      font-family: "Open Sans", sans-serif
    }
  </style>
  <style id="style_element" type="text/css">
    #BODY_BACKGROUND,
    #SECTION_POPUP {
      height: 0px;
    }

    #BODY_BACKGROUND>.ladi-section-background,
    #POPUP2>.ladi-popup>.ladi-popup-background {
      background-color: rgb(230, 234, 242);
    }

    #IMAGE41,
    #IMAGE41>.ladi-image>.ladi-image-background {
      width: 402.313px;
      height: 677.92px;
    }

    #IMAGE41>.ladi-image>.ladi-image-background,
    #IMAGE1>.ladi-image>.ladi-image-background,
    #IMAGE2>.ladi-image>.ladi-image-background,
    #HEADLINE7,
    #IMAGE3>.ladi-image>.ladi-image-background,
    #IMAGE4>.ladi-image>.ladi-image-background,
    #GROUP5,
    #BOX2,
    #IMAGE6>.ladi-image>.ladi-image-background,
    #GROUP8,
    #BOX1,
    #IMAGE5>.ladi-image>.ladi-image-background,
    #GROUP7,
    #BOX3,
    #IMAGE7>.ladi-image>.ladi-image-background,
    #GROUP12,
    #BUTTON4,
    #IMAGE13>.ladi-image>.ladi-image-background,
    #IMAGE14>.ladi-image>.ladi-image-background,
    #IMAGE8>.ladi-image>.ladi-image-background,
    #IMAGE9>.ladi-image>.ladi-image-background,
    #GROUP42,
    #IMAGE33,
    #IMAGE33>.ladi-image>.ladi-image-background,
    #IMAGE34>.ladi-image>.ladi-image-background,
    #GROUP14,
    #IMAGE15,
    #IMAGE15>.ladi-image>.ladi-image-background,
    #IMAGE16>.ladi-image>.ladi-image-background,
    #GROUP27,
    #IMAGE23,
    #IMAGE23>.ladi-image>.ladi-image-background,
    #IMAGE24>.ladi-image>.ladi-image-background,
    #GROUP45,
    #IMAGE35,
    #IMAGE35>.ladi-image>.ladi-image-background,
    #IMAGE36>.ladi-image>.ladi-image-background,
    #GROUP36,
    #IMAGE29,
    #IMAGE29>.ladi-image>.ladi-image-background,
    #IMAGE30>.ladi-image>.ladi-image-background,
    #GROUP39,
    #IMAGE31,
    #IMAGE31>.ladi-image>.ladi-image-background,
    #IMAGE32>.ladi-image>.ladi-image-background,
    #GROUP48,
    #IMAGE37,
    #IMAGE37>.ladi-image>.ladi-image-background,
    #IMAGE38>.ladi-image>.ladi-image-background,
    #GROUP51,
    #IMAGE39,
    #IMAGE39>.ladi-image>.ladi-image-background,
    #IMAGE40>.ladi-image>.ladi-image-background,
    #IMAGE42>.ladi-image>.ladi-image-background,
    #GROUP62,
    #BOX30,
    #BOX31,
    #IMAGE45>.ladi-image>.ladi-image-background,
    #IMAGE10,
    #IMAGE10>.ladi-image>.ladi-image-background,
    #IMAGE11>.ladi-image>.ladi-image-background,
    #IMAGE12>.ladi-image>.ladi-image-background,
    #GROUP53,
    #BOX19,
    #BOX25,
    #IMAGE43>.ladi-image>.ladi-image-background,
    #GROUP59,
    #BOX27,
    #BOX28,
    #IMAGE44>.ladi-image>.ladi-image-background,
    #IMAGE46>.ladi-image>.ladi-image-background,
    #IMAGE47>.ladi-image>.ladi-image-background,
    #GROUP64,
    #BOX32,
    #IMAGE48>.ladi-image>.ladi-image-background,
    #GROUP71,
    #BOX39,
    #IMAGE51>.ladi-image>.ladi-image-background,
    #GROUP73,
    #BOX41,
    #IMAGE52>.ladi-image>.ladi-image-background,
    #GROUP66,
    #GROUP67,
    #BOX35,
    #IMAGE49>.ladi-image>.ladi-image-background,
    #GROUP69,
    #BOX37,
    #IMAGE50>.ladi-image>.ladi-image-background,
    #GROUP75,
    #BOX43,
    #IMAGE53>.ladi-image>.ladi-image-background,
    #IMAGE56>.ladi-image>.ladi-image-background,
    #IMAGE54>.ladi-image>.ladi-image-background,
    #PARAGRAPH1,
    #IMAGE55>.ladi-image>.ladi-image-background,
    #GROUP79,
    #BUTTON5,
    #IMAGE57>.ladi-image>.ladi-image-background,
    #IMAGE58>.ladi-image>.ladi-image-background,
    #IMAGE59>.ladi-image>.ladi-image-background,
    #IMAGE60,
    #IMAGE60>.ladi-image>.ladi-image-background,
    #IMAGE61>.ladi-image>.ladi-image-background,
    #IMAGE62,
    #IMAGE62>.ladi-image>.ladi-image-background,
    #GROUP85,
    #BOX47,
    #IMAGE63>.ladi-image>.ladi-image-background,
    #IMAGE64,
    #IMAGE64>.ladi-image>.ladi-image-background,
    #GROUP90,
    #BOX50,
    #IMAGE65>.ladi-image>.ladi-image-background,
    #IMAGE66>.ladi-image>.ladi-image-background,
    #GROUP93,
    #BOX52,
    #IMAGE67>.ladi-image>.ladi-image-background,
    #IMAGE68>.ladi-image>.ladi-image-background,
    #GROUP96,
    #GROUP94,
    #BOX53,
    #IMAGE69,
    #IMAGE69>.ladi-image>.ladi-image-background,
    #IMAGE70>.ladi-image>.ladi-image-background,
    #IMAGE71>.ladi-image>.ladi-image-background,
    #GROUP97,
    #BOX55,
    #IMAGE72>.ladi-image>.ladi-image-background,
    #GROUP101,
    #BOX57,
    #IMAGE74>.ladi-image>.ladi-image-background,
    #GROUP103,
    #BOX58,
    #IMAGE75>.ladi-image>.ladi-image-background,
    #GROUP105,
    #BOX59,
    #IMAGE76>.ladi-image>.ladi-image-background,
    #GROUP107,
    #BOX61,
    #IMAGE79>.ladi-image>.ladi-image-background,
    #IMAGE80>.ladi-image>.ladi-image-background,
    #IMAGE82>.ladi-image>.ladi-image-background,
    #IMAGE83>.ladi-image>.ladi-image-background,
    #IMAGE85>.ladi-image>.ladi-image-background,
    #IMAGE86>.ladi-image>.ladi-image-background,
    #IMAGE87>.ladi-image>.ladi-image-background,
    #IMAGE88>.ladi-image>.ladi-image-background,
    #GROUP117,
    #BUTTON6,
    #IMAGE84>.ladi-image>.ladi-image-background,
    #IMAGE89>.ladi-image>.ladi-image-background,
    #IMAGE90>.ladi-image>.ladi-image-background,
    #IMAGE91>.ladi-image>.ladi-image-background,
    #IMAGE92>.ladi-image>.ladi-image-background,
    #IMAGE93>.ladi-image>.ladi-image-background,
    #GROUP153,
    #BOX84,
    #IMAGE121>.ladi-image>.ladi-image-background,
    #GROUP155,
    #BOX86,
    #IMAGE122>.ladi-image>.ladi-image-background,
    #GROUP158,
    #BOX91,
    #IMAGE123>.ladi-image>.ladi-image-background,
    #GROUP160,
    #BOX93,
    #IMAGE124>.ladi-image>.ladi-image-background,
    #GROUP162,
    #BOX95,
    #IMAGE125>.ladi-image>.ladi-image-background,
    #GROUP164,
    #BOX97,
    #IMAGE126>.ladi-image>.ladi-image-background,
    #GROUP166,
    #BOX99,
    #IMAGE127>.ladi-image>.ladi-image-background,
    #GROUP149,
    #BOX80,
    #IMAGE119>.ladi-image>.ladi-image-background,
    #GROUP151,
    #BOX82,
    #IMAGE120>.ladi-image>.ladi-image-background,
    #IMAGE101>.ladi-image>.ladi-image-background,
    #IMAGE94>.ladi-image>.ladi-image-background,
    #IMAGE95>.ladi-image>.ladi-image-background,
    #GROUP121,
    #BOX64,
    #IMAGE96>.ladi-image>.ladi-image-background,
    #GROUP124,
    #BOX67,
    #IMAGE97>.ladi-image>.ladi-image-background,
    #GROUP126,
    #BOX69,
    #IMAGE98>.ladi-image>.ladi-image-background,
    #IMAGE99>.ladi-image>.ladi-image-background,
    #IMAGE100>.ladi-image>.ladi-image-background,
    #IMAGE107>.ladi-image>.ladi-image-background,
    #IMAGE116>.ladi-image>.ladi-image-background,
    #GROUP142,
    #FORM2,
    #FORM_ITEM2,
    #IMAGE114>.ladi-image>.ladi-image-background,
    #GROUP127,
    #BOX71,
    #IMAGE102>.ladi-image>.ladi-image-background,
    #GROUP134,
    #BOX74,
    #IMAGE105>.ladi-image>.ladi-image-background,
    #GROUP130,
    #BOX72,
    #IMAGE103>.ladi-image>.ladi-image-background,
    #GROUP132,
    #BOX73,
    #IMAGE104>.ladi-image>.ladi-image-background,
    #IMAGE108>.ladi-image>.ladi-image-background,
    #IMAGE111,
    #IMAGE111>.ladi-image>.ladi-image-background,
    #IMAGE106>.ladi-image>.ladi-image-background,
    #POPUP2,
    #IMAGE137>.ladi-image>.ladi-image-background,
    #IMAGE138>.ladi-image>.ladi-image-background,
    #IMAGE136>.ladi-image>.ladi-image-background,
    #FORM3,
    #FORM_ITEM6,
    #IMAGE139>.ladi-image>.ladi-image-background {
      top: 0px;
      left: 0px;
    }

    #IMAGE41>.ladi-image>.ladi-image-background {
      background-image: url("images/img16.webp");
    }

    #GROUP1 {
      width: 690px;
      height: 26px;
    }

    #IMAGE2,
    #IMAGE2>.ladi-image>.ladi-image-background {
      width: 105.135px;
      height: 16.3529px;
    }

    #IMAGE2 {
      top: 4.8235px;
      left: 0px;
    }

    #IMAGE2>.ladi-image>.ladi-image-background,
    #IMAGE3>.ladi-image>.ladi-image-background,
    #IMAGE106>.ladi-image>.ladi-image-background {
      background-image: url("images/svg24.svg");
    }

    #HEADLINE3,
    #HEADLINE4 {
      width: 109px;
    }

    #HEADLINE3 {
      top: 0px;
      left: 182px;
    }

    #HEADLINE3>.ladi-headline,
    #HEADLINE4>.ladi-headline,
    #HEADLINE5>.ladi-headline,
    #HEADLINE6>.ladi-headline,
    #HEADLINE62>.ladi-headline {
      font-size: 16px;
      line-height: 1.6;
      color: rgb(0, 0, 0);
      text-align: center;
    }

    #HEADLINE4 {
      top: 0px;
      left: 291px;
    }

    #HEADLINE5 {
      width: 122px;
      top: 0px;
      left: 400px;
    }

    #HEADLINE6 {
      width: 168px;
      top: 0px;
      left: 522px;
    }

    #HEADLINE7 {
      width: 315px;
    }

    #HEADLINE7>.ladi-headline,
    #HEADLINE103>.ladi-headline {
      line-height: 1.6;
      color: rgb(84, 84, 84);
      text-align: left;
    }

    #IMAGE3 {
      top: 26px;
      left: 0px;
    }

    #HEADLINE8 {
      width: 364px;
    }

    #HEADLINE8>.ladi-headline {
      line-height: 1.4;
      color: rgb(0, 0, 0);
    }

    #IMAGE4,
    #IMAGE4>.ladi-image>.ladi-image-background {
      width: 110px;
      height: 191px;
    }

    #IMAGE4>.ladi-image>.ladi-image-background,
    #IMAGE107>.ladi-image>.ladi-image-background {
      background-image: url("images/svg27.svg");
    }

    #GROUP9 {
      width: 322px;
    }

    #GROUP4 {
      width: 282px;
      height: 40px;
    }

    #GROUP4,
    #GROUP2,
    #GROUP6,
    #HEADLINE13,
    #GROUP35,
    #HEADLINE17,
    #GROUP70,
    #HEADLINE54,
    #HEADLINE142,
    #GROUP95,
    #HEADLINE77,
    #HEADLINE138,
    #LINE7,
    #PARAGRAPH6,
    #PARAGRAPH7,
    #IMAGE108,
    #HEADLINE134,
    #HEADLINE126,
    #HEADLINE128 {
      left: 0px;
    }

    #GROUP5,
    #BOX2,
    #GROUP2,
    #BOX1,
    #GROUP7,
    #BOX3 {
      width: 40px;
      height: 40px;
    }

    #BOX2>.ladi-box,
    #BOX1>.ladi-box,
    #BOX3>.ladi-box {
      border-radius: 20px;
    }

    #BOX2>.ladi-box,
    #BOX1>.ladi-box,
    #BOX3>.ladi-box,
    #BOX4>.ladi-box,
    #BOX15>.ladi-box,
    #BOX6>.ladi-box,
    #BOX10>.ladi-box,
    #BOX16>.ladi-box,
    #BOX13>.ladi-box,
    #BOX14>.ladi-box,
    #BOX17>.ladi-box,
    #BOX18>.ladi-box,
    #BOX33>.ladi-box,
    #BOX38>.ladi-box,
    #BOX40>.ladi-box,
    #BOX34>.ladi-box,
    #BOX36>.ladi-box,
    #BOX42>.ladi-box,
    #BOX46>.ladi-box,
    #BOX48>.ladi-box,
    #BOX49>.ladi-box,
    #BOX51>.ladi-box,
    #BOX53>.ladi-box,
    #BOX62>.ladi-box,
    #BOX83>.ladi-box,
    #BOX85>.ladi-box,
    #BOX90>.ladi-box,
    #BOX92>.ladi-box,
    #BOX94>.ladi-box,
    #BOX96>.ladi-box,
    #BOX98>.ladi-box,
    #BOX79>.ladi-box,
    #BOX81>.ladi-box,
    #BOX65>.ladi-box,
    #BOX66>.ladi-box,
    #BOX68>.ladi-box,
    #BOX76>.ladi-box,
    #BOX100>.ladi-box {
      background-color: rgb(40, 73, 118);
    }

    #IMAGE6,
    #IMAGE6>.ladi-image>.ladi-image-background,
    #IMAGE5,
    #IMAGE5>.ladi-image>.ladi-image-background,
    #IMAGE7,
    #IMAGE7>.ladi-image>.ladi-image-background,
    #IMAGE34,
    #IMAGE34>.ladi-image>.ladi-image-background,
    #IMAGE16,
    #IMAGE16>.ladi-image>.ladi-image-background,
    #IMAGE24,
    #IMAGE24>.ladi-image>.ladi-image-background,
    #IMAGE36,
    #IMAGE36>.ladi-image>.ladi-image-background,
    #IMAGE30,
    #IMAGE30>.ladi-image>.ladi-image-background,
    #IMAGE32,
    #IMAGE32>.ladi-image>.ladi-image-background,
    #IMAGE38,
    #IMAGE38>.ladi-image>.ladi-image-background,
    #IMAGE40,
    #IMAGE40>.ladi-image>.ladi-image-background,
    #IMAGE48,
    #IMAGE48>.ladi-image>.ladi-image-background,
    #IMAGE51,
    #IMAGE51>.ladi-image>.ladi-image-background,
    #IMAGE52,
    #IMAGE52>.ladi-image>.ladi-image-background,
    #IMAGE49,
    #IMAGE49>.ladi-image>.ladi-image-background,
    #IMAGE50,
    #IMAGE50>.ladi-image>.ladi-image-background,
    #IMAGE53,
    #IMAGE53>.ladi-image>.ladi-image-background {
      width: 20px;
      height: 16px;
    }

    #IMAGE6,
    #IMAGE5,
    #IMAGE7 {
      top: 13px;
      left: 10px;
    }

    #IMAGE6>.ladi-image>.ladi-image-background,
    #IMAGE5>.ladi-image>.ladi-image-background,
    #IMAGE7>.ladi-image>.ladi-image-background {
      background-image: url("images/svg2.svg");
    }

    #HEADLINE10,
    #HEADLINE9 {
      width: 220px;
    }

    #HEADLINE10 {
      top: 9px;
      left: 62px;
    }

    #HEADLINE10>.ladi-headline,
    #HEADLINE9>.ladi-headline,
    #HEADLINE11>.ladi-headline {
      font-weight: bold;
      line-height: 1.2;
      color: rgb(0, 0, 0);
      text-align: left;
    }

    #GROUP8 {
      width: 282px;
    }

    #HEADLINE9,
    #HEADLINE11 {
      top: 0px;
      left: 62px;
    }

    #GROUP6 {
      width: 322px;
      height: 43px;
    }

    #HEADLINE11 {
      width: 260px;
    }

    #GROUP13,
    #GROUP12,
    #GROUP78,
    #GROUP79,
    #GROUP116,
    #GROUP117 {
      width: 285px;
      height: 78px;
    }

    #BOX4,
    #BUTTON4,
    #BOX46,
    #BUTTON5,
    #BOX62,
    #BUTTON6 {
      width: 280px;
      height: 71.5px;
    }

    #BOX4,
    #BOX46,
    #BOX62 {
      top: 6.5px;
      left: 5px;
    }

    #BOX4>.ladi-box,
    #BOX15>.ladi-box,
    #BOX6>.ladi-box,
    #BOX10>.ladi-box,
    #BOX16>.ladi-box,
    #BOX13>.ladi-box,
    #BOX14>.ladi-box,
    #BOX17>.ladi-box,
    #BOX18>.ladi-box,
    #BOX29>.ladi-box,
    #BOX30>.ladi-box,
    #BOX20>.ladi-box,
    #BOX19>.ladi-box,
    #BOX26>.ladi-box,
    #BOX27>.ladi-box,
    #BOX33>.ladi-box,
    #BOX32>.ladi-box,
    #BOX38>.ladi-box,
    #BOX39>.ladi-box,
    #BOX40>.ladi-box,
    #BOX41>.ladi-box,
    #BOX34>.ladi-box,
    #BOX35>.ladi-box,
    #BOX36>.ladi-box,
    #BOX37>.ladi-box,
    #BOX42>.ladi-box,
    #BOX43>.ladi-box,
    #BOX46>.ladi-box,
    #BOX48>.ladi-box,
    #BOX47>.ladi-box,
    #BOX49>.ladi-box,
    #BOX50>.ladi-box,
    #BOX51>.ladi-box,
    #BOX52>.ladi-box,
    #BOX54>.ladi-box,
    #BOX53>.ladi-box,
    #BOX60>.ladi-box,
    #BOX61>.ladi-box,
    #BOX62>.ladi-box,
    #BOX83>.ladi-box,
    #BOX84>.ladi-box,
    #BOX85>.ladi-box,
    #BOX86>.ladi-box,
    #BOX90>.ladi-box,
    #BOX91>.ladi-box,
    #BOX92>.ladi-box,
    #BOX93>.ladi-box,
    #BOX94>.ladi-box,
    #BOX95>.ladi-box,
    #BOX96>.ladi-box,
    #BOX97>.ladi-box,
    #BOX98>.ladi-box,
    #BOX99>.ladi-box,
    #BOX79>.ladi-box,
    #BOX80>.ladi-box,
    #BOX81>.ladi-box,
    #BOX82>.ladi-box,
    #BOX65>.ladi-box,
    #BOX64>.ladi-box,
    #BOX66>.ladi-box,
    #BOX67>.ladi-box,
    #BOX68>.ladi-box,
    #BOX69>.ladi-box,
    #BOX76>.ladi-box,
    #BOX100>.ladi-box {
      border-radius: 0px;
    }

    #BUTTON4>.ladi-button>.ladi-button-background,
    #BOX30>.ladi-box,
    #BOX19>.ladi-box,
    #BOX27>.ladi-box,
    #BUTTON5>.ladi-button>.ladi-button-background,
    #BUTTON6>.ladi-button>.ladi-button-background {
      background-color: rgb(219, 78, 81);
    }

    #BUTTON4>.ladi-button:hover,
    #BUTTON5>.ladi-button:hover,
    #BUTTON6>.ladi-button:hover,
    #BUTTON9>.ladi-button:hover {
      opacity: 1;
    }

    #BUTTON4>.ladi-button:hover .ladi-button-background,
    #BUTTON5>.ladi-button:hover .ladi-button-background,
    #BUTTON6>.ladi-button:hover .ladi-button-background {
      background-image: none !important;
      background-color: rgb(154, 58, 60) !important;
      background-size: initial !important;
      background-origin: initial !important;
      background-position: initial !important;
      background-repeat: initial !important;
      background-attachment: initial !important;
    }

    #BUTTON4>.ladi-button:hover .ladi-button-background,
    #BUTTON5>.ladi-button:hover .ladi-button-background,
    #BUTTON6>.ladi-button:hover .ladi-button-background,
    #BUTTON9>.ladi-button:hover .ladi-button-background {
      -webkit-background-clip: initial !important;
    }

    #BUTTON_TEXT4,
    #BUTTON_TEXT5,
    #BUTTON_TEXT6 {
      width: 280px;
    }

    #BUTTON_TEXT4,
    #BUTTON_TEXT5,
    #BUTTON_TEXT6,
    #BUTTON_TEXT8,
    #BUTTON_TEXT9 {
      top: 9px;
      left: 0px;
    }

    #BUTTON_TEXT4>.ladi-headline,
    #BUTTON_TEXT5>.ladi-headline,
    #BUTTON_TEXT6>.ladi-headline {
      font-size: 24px;
      font-weight: bold;
      line-height: 1.6;
      color: rgb(255, 255, 255);
      text-align: center;
    }

    #IMAGE13,
    #IMAGE13>.ladi-image>.ladi-image-background,
    #IMAGE57,
    #IMAGE57>.ladi-image>.ladi-image-background,
    #IMAGE84,
    #IMAGE84>.ladi-image>.ladi-image-background,
    #IMAGE114,
    #IMAGE114>.ladi-image>.ladi-image-background,
    #IMAGE139>.ladi-image>.ladi-image-background {
      width: 29px;
      height: 24px;
    }

    #IMAGE13,
    #IMAGE57,
    #IMAGE84 {
      top: 27px;
      left: 235.5px;
    }

    #IMAGE13>.ladi-image>.ladi-image-background,
    #IMAGE57>.ladi-image>.ladi-image-background,
    #IMAGE84>.ladi-image>.ladi-image-background,
    #IMAGE114>.ladi-image>.ladi-image-background,
    #IMAGE139>.ladi-image>.ladi-image-background {
      background-image: url("images/img9.webp");
    }

    #BOX5>.ladi-box,
    #BOX45>.ladi-box,
    #BOX63>.ladi-box,
    #POPUP2>.ladi-popup>.ladi-overlay,
    #POPUP2>.ladi-popup>.ladi-popup-background,
    #POPUP2>.ladi-popup {
      border-radius: 30px;
    }

    #BOX5>.ladi-box,
    #BOX45>.ladi-box,
    #BOX63>.ladi-box,
    #BOX70>.ladi-box {
      background-color: rgb(247, 249, 251);
    }

    #BOX5>.ladi-box,
    #BOX45>.ladi-box,
    #BOX54>.ladi-box,
    #BOX60>.ladi-box,
    #BOX63>.ladi-box,
    #BOX70>.ladi-box {
      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 15px;
    }

    #GROUP10,
    #HEADLINE13,
    #GROUP80,
    #HEADLINE54,
    #GROUP118,
    #HEADLINE77,
    #HEADLINE105 {
      width: 137px;
    }

    #IMAGE9,
    #GROUP26,
    #IMAGE11,
    #IMAGE12,
    #HEADLINE19,
    #IMAGE59,
    #HEADLINE144,
    #IMAGE71,
    #HEADLINE73,
    #HEADLINE75,
    #IMAGE86,
    #LINE9,
    #HEADLINE112,
    #GROUP139,
    #IMAGE138,
    #HEADLINE132 {
      top: 0px;
    }

    #IMAGE9>.ladi-image>.ladi-image-background,
    #IMAGE59>.ladi-image>.ladi-image-background,
    #IMAGE86>.ladi-image>.ladi-image-background,
    #IMAGE111>.ladi-image>.ladi-image-background,
    #IMAGE138>.ladi-image>.ladi-image-background {
      background-image: url("images/svg30.svg");
    }

    #HEADLINE13>.ladi-headline,
    #HEADLINE54>.ladi-headline,
    #HEADLINE71>.ladi-headline,
    #HEADLINE77>.ladi-headline,
    #HEADLINE126>.ladi-headline {
      font-weight: bold;
      line-height: 1.6;
      color: rgb(0, 0, 0);
      text-align: center;
    }

    #HEADLINE20>.ladi-headline,
    #HEADLINE86>.ladi-headline,
    #HEADLINE87>.ladi-headline,
    #HEADLINE94>.ladi-headline {
      font-weight: bold;
      line-height: 1.4;
      color: rgb(0, 0, 0);
      text-align: center;
    }

    #GROUP41,
    #GROUP16,
    #GROUP47 {
      width: 253.176px;
      height: 204.707px;
    }

    #GROUP42,
    #GROUP14,
    #GROUP27,
    #GROUP45,
    #GROUP36,
    #GROUP39,
    #GROUP48,
    #GROUP51 {
      width: 253.176px;
      height: 169.707px;
    }

    #BOX15,
    #IMAGE33,
    #IMAGE33>.ladi-image>.ladi-image-background,
    #BOX6,
    #IMAGE15,
    #IMAGE15>.ladi-image>.ladi-image-background,
    #BOX10,
    #IMAGE23,
    #IMAGE23>.ladi-image>.ladi-image-background,
    #BOX16,
    #IMAGE35,
    #IMAGE35>.ladi-image>.ladi-image-background,
    #BOX13,
    #IMAGE29,
    #IMAGE29>.ladi-image>.ladi-image-background,
    #BOX14,
    #IMAGE31,
    #IMAGE31>.ladi-image>.ladi-image-background,
    #BOX17,
    #IMAGE37,
    #IMAGE37>.ladi-image>.ladi-image-background,
    #BOX18,
    #IMAGE39,
    #IMAGE39>.ladi-image>.ladi-image-background {
      width: 247.001px;
      height: 163.532px;
    }

    #BOX15,
    #BOX6,
    #BOX10,
    #BOX16,
    #BOX13,
    #BOX14,
    #BOX17,
    #BOX18 {
      top: 6.17503px;
      left: 6.17502px;
    }

    #IMAGE33>.ladi-image>.ladi-image-background {
      background-image: url("images/img5.webp");
    }

    #GROUP43,
    #GROUP15,
    #GROUP49 {
      width: 232px;
      height: 26px;
    }

    #GROUP43,
    #GROUP15,
    #GROUP28,
    #GROUP46,
    #GROUP37,
    #GROUP40,
    #GROUP49,
    #GROUP52 {
      top: 178.707px;
      left: 6.588px;
    }

    #IMAGE34,
    #IMAGE16,
    #IMAGE24,
    #IMAGE36,
    #IMAGE30,
    #IMAGE32,
    #IMAGE38,
    #IMAGE40 {
      top: 5px;
      left: 0px;
    }

    #IMAGE34>.ladi-image>.ladi-image-background,
    #IMAGE16>.ladi-image>.ladi-image-background,
    #IMAGE24>.ladi-image>.ladi-image-background,
    #IMAGE36>.ladi-image>.ladi-image-background,
    #IMAGE30>.ladi-image>.ladi-image-background,
    #IMAGE32>.ladi-image>.ladi-image-background,
    #IMAGE38>.ladi-image>.ladi-image-background,
    #IMAGE40>.ladi-image>.ladi-image-background {
      background-image: url("images/svg1.svg");
    }

    #HEADLINE30,
    #HEADLINE21,
    #HEADLINE31,
    #HEADLINE32,
    #HEADLINE33 {
      width: 204px;
    }

    #HEADLINE30,
    #HEADLINE21,
    #HEADLINE25,
    #HEADLINE31,
    #HEADLINE28,
    #HEADLINE29,
    #HEADLINE32,
    #HEADLINE33 {
      top: 0px;
      left: 28px;
    }

    #HEADLINE30>.ladi-headline,
    #HEADLINE21>.ladi-headline,
    #HEADLINE25>.ladi-headline,
    #HEADLINE31>.ladi-headline,
    #HEADLINE28>.ladi-headline,
    #HEADLINE29>.ladi-headline,
    #HEADLINE32>.ladi-headline,
    #HEADLINE33>.ladi-headline,
    #HEADLINE40>.ladi-headline,
    #HEADLINE46>.ladi-headline,
    #HEADLINE48>.ladi-headline,
    #HEADLINE42>.ladi-headline,
    #HEADLINE44>.ladi-headline,
    #HEADLINE50>.ladi-headline {
      font-size: 16px;
      line-height: 1.6;
      color: rgb(0, 0, 0);
      text-align: left;
    }

    #IMAGE15>.ladi-image>.ladi-image-background {
      background-image: url("images/img1.webp");
    }

    #GROUP26,
    #GROUP38 {
      width: 257.588px;
      height: 204.707px;
    }

    #IMAGE23>.ladi-image>.ladi-image-background {
      background-image: url("images/img2.webp");
    }

    #GROUP28,
    #GROUP40 {
      width: 251px;
      height: 26px;
    }

    #HEADLINE25,
    #HEADLINE28,
    #HEADLINE29 {
      width: 223px;
    }

    #GROUP44,
    #GROUP50 {
      width: 253.176px;
      height: 229.707px;
    }

    #IMAGE35>.ladi-image>.ladi-image-background {
      background-image: url("images/img6.webp");
    }

    #GROUP46,
    #GROUP52 {
      width: 232px;
      height: 51px;
    }

    #GROUP35 {
      width: 257.588px;
      height: 229.707px;
    }

    #IMAGE29>.ladi-image>.ladi-image-background {
      background-image: url("images/img3.webp");
    }

    #GROUP37 {
      width: 251px;
      height: 51px;
    }

    #IMAGE31>.ladi-image>.ladi-image-background {
      background-image: url("images/img4.webp");
    }

    #IMAGE37>.ladi-image>.ladi-image-background {
      background-image: url("images/img7.webp");
    }

    #IMAGE39>.ladi-image>.ladi-image-background {
      background-image: url("images/img8.webp");
    }

    #IMAGE42>.ladi-image>.ladi-image-background {
      background-image: url("images/svg23.svg");
    }

    #HEADLINE34>.ladi-headline,
    #HEADLINE38>.ladi-headline,
    #HEADLINE61>.ladi-headline,
    #HEADLINE66>.ladi-headline {
      font-weight: bold;
      line-height: 1.2;
      color: rgb(0, 0, 0);
      text-align: center;
    }

    #GROUP61,
    #GROUP62 {
      width: 359px;
      height: 440px;
    }

    #BOX29,
    #BOX30 {
      width: 350px;
      height: 430.365px;
    }

    #BOX29 {
      top: 9.63504px;
      left: 9px;
    }

    #BOX29>.ladi-box,
    #BOX20>.ladi-box,
    #BOX26>.ladi-box,
    #BOX32>.ladi-box,
    #BOX39>.ladi-box,
    #BOX41>.ladi-box,
    #BOX35>.ladi-box,
    #BOX37>.ladi-box,
    #BOX43>.ladi-box,
    #BOX47>.ladi-box,
    #BOX50>.ladi-box,
    #BOX52>.ladi-box,
    #BOX54>.ladi-box,
    #BOX61>.ladi-box,
    #BOX84>.ladi-box,
    #BOX86>.ladi-box,
    #BOX91>.ladi-box,
    #BOX93>.ladi-box,
    #BOX95>.ladi-box,
    #BOX97>.ladi-box,
    #BOX99>.ladi-box,
    #BOX80>.ladi-box,
    #BOX82>.ladi-box,
    #BOX64>.ladi-box,
    #BOX67>.ladi-box,
    #BOX69>.ladi-box,
    #FORM2 .ladi-form-item-background,
    #FORM3 .ladi-form-item-background {
      background-color: rgb(255, 255, 255);
    }

    #BOX29>.ladi-box,
    #BOX20>.ladi-box,
    #BOX26>.ladi-box {
      box-shadow: rgb(115, 115, 115) 0px 15px 20px -15px;
    }

    #GROUP63,
    #BOX31,
    #GROUP56,
    #BOX25,
    #GROUP60,
    #BOX28 {
      width: 70px;
      height: 70px;
    }

    #GROUP63,
    #GROUP56,
    #GROUP60 {
      top: 29.81px;
      left: 25px;
    }

    #BOX31>.ladi-box,
    #BOX25>.ladi-box,
    #BOX28>.ladi-box {
      border-radius: 35px;
    }

    #BOX31>.ladi-box,
    #BOX25>.ladi-box,
    #BOX28>.ladi-box,
    #BOX55>.ladi-box,
    #BOX57>.ladi-box,
    #BOX58>.ladi-box,
    #BOX59>.ladi-box,
    #BOX71>.ladi-box,
    #BOX74>.ladi-box,
    #BOX72>.ladi-box,
    #BOX73>.ladi-box {
      background-color: rgb(249, 202, 93);
    }

    #IMAGE45,
    #IMAGE45>.ladi-image>.ladi-image-background,
    #IMAGE43,
    #IMAGE43>.ladi-image>.ladi-image-background,
    #IMAGE44,
    #IMAGE44>.ladi-image>.ladi-image-background {
      width: 32px;
      height: 32px;
    }

    #IMAGE45,
    #IMAGE43,
    #IMAGE44 {
      top: 19px;
      left: 19px;
    }

    #IMAGE45>.ladi-image>.ladi-image-background {
      background-image: url("images/svg22.svg");
    }

    #HEADLINE37,
    #HEADLINE35,
    #HEADLINE36,
    #HEADLINE39,
    #HEADLINE45,
    #HEADLINE47,
    #HEADLINE49,
    #HEADLINE52,
    #HEADLINE63,
    #HEADLINE119,
    #HEADLINE120,
    #HEADLINE121,
    #HEADLINE122,
    #HEADLINE123,
    #HEADLINE124,
    #HEADLINE125,
    #HEADLINE117,
    #HEADLINE118,
    #HEADLINE88,
    #HEADLINE90,
    #HEADLINE92 {
      width: 200px;
    }

    #HEADLINE37,
    #HEADLINE35,
    #HEADLINE36 {
      top: 43.31px;
      left: 122px;
    }

    #HEADLINE37>.ladi-headline,
    #HEADLINE35>.ladi-headline,
    #HEADLINE36>.ladi-headline {
      font-size: 18px;
      font-weight: bold;
      line-height: 1.2;
      color: rgb(255, 255, 255);
      text-align: left;
    }

    #LIST_PARAGRAPH3,
    #PARAGRAPH11,
    #PARAGRAPH12,
    #PARAGRAPH13,
    #PARAGRAPH14,
    #PARAGRAPH15,
    #PARAGRAPH16,
    #PARAGRAPH17,
    #PARAGRAPH9,
    #PARAGRAPH10 {
      width: 303px;
    }

    #LIST_PARAGRAPH3 {
      top: 115px;
      left: 28px;
    }

    #LIST_PARAGRAPH3>.ladi-list-paragraph,
    #LIST_PARAGRAPH1>.ladi-list-paragraph,
    #LIST_PARAGRAPH2>.ladi-list-paragraph {
      font-size: 18px;
      line-height: 1.6;
      color: rgb(255, 255, 255);
    }

    #LIST_PARAGRAPH3 ul li,
    #LIST_PARAGRAPH1 ul li,
    #LIST_PARAGRAPH2 ul li {
      padding-bottom: 8px;
      padding-left: 28px;
    }

    #LIST_PARAGRAPH3 ul li:before,
    #LIST_PARAGRAPH1 ul li:before,
    #LIST_PARAGRAPH2 ul li:before {
      top: -18px;
      font-size: 40px;
      color: rgb(249, 202, 93);
      content: counter(linum, disc);
    }

    #GROUP170 {
      height: 75px;
    }

    #IMAGE10,
    #IMAGE10>.ladi-image>.ladi-image-background {
      width: 75.8621px;
      height: 75px;
    }

    #IMAGE10>.ladi-image>.ladi-image-background,
    #IMAGE60>.ladi-image>.ladi-image-background,
    #IMAGE87>.ladi-image>.ladi-image-background {
      background-image: url("images/img21.webp");
    }

    #IMAGE11,
    #IMAGE11>.ladi-image>.ladi-image-background {
      width: 99.7159px;
      height: 75px;
    }

    #IMAGE11>.ladi-image>.ladi-image-background {
      background-image: url("images/img22.webp");
    }

    #IMAGE12,
    #IMAGE12>.ladi-image>.ladi-image-background {
      width: 75px;
      height: 75px;
    }

    #IMAGE12>.ladi-image>.ladi-image-background,
    #IMAGE61>.ladi-image>.ladi-image-background,
    #IMAGE88>.ladi-image>.ladi-image-background {
      background-image: url("images/img23.webp");
    }

    #HEADLINE12>.ladi-headline,
    #HEADLINE89>.ladi-headline,
    #HEADLINE91>.ladi-headline,
    #HEADLINE93>.ladi-headline,
    #HEADLINE96>.ladi-headline,
    #HEADLINE102>.ladi-headline,
    #HEADLINE98>.ladi-headline,
    #HEADLINE100>.ladi-headline,
    #HEADLINE128>.ladi-headline {
      font-size: 18px;
      line-height: 1.6;
      color: rgb(0, 0, 0);
      text-align: left;
    }

    #HEADLINE16>.ladi-headline,
    #HEADLINE141>.ladi-headline,
    #HEADLINE137>.ladi-headline,
    #HEADLINE138>.ladi-headline,
    #HEADLINE133>.ladi-headline,
    #HEADLINE134>.ladi-headline {
      font-weight: bold;
      line-height: 1.6;
      color: rgb(40, 73, 118);
      text-align: left;
    }

    #HEADLINE17>.ladi-headline,
    #HEADLINE142>.ladi-headline {
      font-size: 40px;
      font-weight: bold;
      line-height: 1.6;
      color: rgb(40, 73, 118);
      text-align: left;
    }

    #HEADLINE18,
    #HEADLINE143 {
      width: 34px;
    }

    #HEADLINE18,
    #HEADLINE143,
    #HEADLINE135 {
      left: 82px;
    }

    #HEADLINE18>.ladi-headline,
    #HEADLINE143>.ladi-headline,
    #HEADLINE139>.ladi-headline,
    #HEADLINE135>.ladi-headline {
      font-weight: bold;
      line-height: 1.6;
      color: rgb(84, 84, 84);
      text-decoration-line: line-through;
      text-align: left;
    }

    #HEADLINE19>.ladi-headline,
    #HEADLINE144>.ladi-headline,
    #HEADLINE140>.ladi-headline,
    #HEADLINE136>.ladi-headline {
      font-weight: bold;
      line-height: 1.6;
      color: rgb(84, 84, 84);
      text-align: center;
    }

    #GROUP57,
    #GROUP53,
    #GROUP58,
    #GROUP59 {
      width: 359px;
      height: 411px;
    }

    #BOX20,
    #BOX19,
    #BOX26,
    #BOX27 {
      width: 350px;
      height: 402px;
    }

    #BOX20,
    #BOX26 {
      top: 9px;
      left: 9px;
    }

    #IMAGE43>.ladi-image>.ladi-image-background {
      background-image: url("images/svg20.svg");
    }

    #LIST_PARAGRAPH1,
    #HEADLINE41,
    #HEADLINE43 {
      width: 234px;
    }

    #LIST_PARAGRAPH1,
    #LIST_PARAGRAPH2 {
      top: 123px;
      left: 44.912px;
    }

    #IMAGE44>.ladi-image>.ladi-image-background {
      background-image: url("images/svg21.svg");
    }

    #LIST_PARAGRAPH2 {
      width: 277px;
    }

    #IMAGE46>.ladi-image>.ladi-image-background {
      background-image: url("images/svg13.svg");
    }

    #IMAGE47>.ladi-image>.ladi-image-background {
      background-image: url("images/img25.webp");
    }

    #GROUP65,
    #GROUP64,
    #GROUP70,
    #GROUP71,
    #GROUP72,
    #GROUP73,
    #GROUP66,
    #GROUP67,
    #GROUP68,
    #GROUP69,
    #GROUP74,
    #GROUP75 {
      width: 295.25px;
      height: 114px;
    }

    #BOX33,
    #BOX32,
    #BOX38,
    #BOX39,
    #BOX40,
    #BOX41,
    #BOX34,
    #BOX35,
    #BOX36,
    #BOX37,
    #BOX42,
    #BOX43 {
      width: 290px;
      height: 108px;
    }

    #BOX33,
    #BOX38,
    #BOX40,
    #BOX34,
    #BOX36,
    #BOX42 {
      top: 6px;
      left: 5.25px;
    }

    #IMAGE48,
    #IMAGE51,
    #IMAGE52,
    #IMAGE49,
    #IMAGE50,
    #IMAGE53 {
      top: 21px;
      left: 10.685px;
    }

    #IMAGE48>.ladi-image>.ladi-image-background,
    #IMAGE51>.ladi-image>.ladi-image-background,
    #IMAGE52>.ladi-image>.ladi-image-background,
    #IMAGE49>.ladi-image>.ladi-image-background,
    #IMAGE50>.ladi-image>.ladi-image-background,
    #IMAGE53>.ladi-image>.ladi-image-background,
    #IMAGE63>.ladi-image>.ladi-image-background,
    #IMAGE65>.ladi-image>.ladi-image-background,
    #IMAGE67>.ladi-image>.ladi-image-background {
      background-image: url("images/svg3.svg");
    }

    #HEADLINE39,
    #HEADLINE45,
    #HEADLINE47,
    #HEADLINE41,
    #HEADLINE43,
    #HEADLINE49 {
      top: 17px;
      left: 36.25px;
    }

    #HEADLINE39>.ladi-headline,
    #HEADLINE45>.ladi-headline,
    #HEADLINE47>.ladi-headline,
    #HEADLINE41>.ladi-headline,
    #HEADLINE43>.ladi-headline,
    #HEADLINE49>.ladi-headline,
    #HEADLINE63>.ladi-headline,
    #HEADLINE64>.ladi-headline,
    #HEADLINE65>.ladi-headline {
      font-size: 16px;
      font-weight: bold;
      line-height: 1.6;
      color: rgb(0, 0, 0);
      text-align: left;
    }

    #HEADLINE40,
    #HEADLINE46,
    #HEADLINE48,
    #HEADLINE42,
    #HEADLINE44,
    #HEADLINE50 {
      width: 245px;
      top: 44px;
      left: 36.25px;
    }

    #HEADLINE51>.ladi-headline {
      font-weight: bold;
      color: rgb(0, 0, 0);
    }

    #IMAGE56,
    #IMAGE56>.ladi-image>.ladi-image-background {
      width: 365.659px;
      height: 728.408px;
    }

    #IMAGE56>.ladi-image>.ladi-image-background {
      background-image: url("images/img17.webp");
    }

    #LINE4>.ladi-line>.ladi-line-container {
      border-top: 1px solid rgb(115, 115, 115);
      border-right: 1px solid rgb(115, 115, 115);
      border-bottom: 1px solid rgb(115, 115, 115);
      border-left: 0px !important;
    }

    #LINE4>.ladi-line,
    #LINE2>.ladi-line,
    #LINE6>.ladi-line {
      width: 100%;
      padding: 8px 0px;
    }

    #IMAGE54,
    #IMAGE54>.ladi-image>.ladi-image-background {
      width: 549.333px;
      height: 709.206px;
    }

    #IMAGE54>.ladi-image>.ladi-image-background {
      background-image: url("images/img13.webp");
    }

    #PARAGRAPH1>.ladi-paragraph,
    #PARAGRAPH5>.ladi-paragraph,
    #HEADLINE112>.ladi-headline {
      line-height: 1.6;
      color: rgb(0, 0, 0);
    }

    #IMAGE55,
    #IMAGE55>.ladi-image>.ladi-image-background {
      width: 39.2879px;
      height: 42.6562px;
    }

    #IMAGE55>.ladi-image>.ladi-image-background {
      background-image: url("images/svg12.svg");
    }

    #HEADLINE52>.ladi-headline,
    #HEADLINE85>.ladi-headline {
      font-weight: bold;
      line-height: 1.6;
      color: rgb(0, 0, 0);
      text-align: left;
    }

    #HEADLINE53>.ladi-headline,
    #HEADLINE104>.ladi-headline {
      line-height: 1.6;
      color: rgb(0, 0, 0);
      text-align: left;
    }

    #IMAGE58,
    #IMAGE58>.ladi-image>.ladi-image-background,
    #IMAGE85,
    #IMAGE85>.ladi-image>.ladi-image-background {
      width: 175px;
      height: 273.592px;
    }

    #IMAGE58>.ladi-image>.ladi-image-background,
    #IMAGE85>.ladi-image>.ladi-image-background {
      background-image: url("images/img25.webp");
    }

    #LINE2,
    #LINE6 {
      width: 97px;
    }

    #LINE2>.ladi-line>.ladi-line-container,
    #LINE6>.ladi-line>.ladi-line-container {
      border-top: 3px solid rgb(40, 73, 118);
      border-right: 3px solid rgb(40, 73, 118);
      border-bottom: 3px solid rgb(40, 73, 118);
      border-left: 0px !important;
    }

    #HEADLINE55,
    #HEADLINE82 {
      width: 370px;
    }

    #HEADLINE55>.ladi-headline,
    #HEADLINE82>.ladi-headline {
      font-weight: bold;
      line-height: 1.6;
      color: rgb(0, 0, 0);
    }

    #HEADLINE56>.ladi-headline,
    #HEADLINE83>.ladi-headline,
    #HEADLINE111>.ladi-headline {
      font-size: 18px;
      line-height: 1.6;
      color: rgb(0, 0, 0);
    }

    #GROUP178 {
      width: 188.841px;
      height: 88px;
    }

    #IMAGE60,
    #IMAGE60>.ladi-image>.ladi-image-background,
    #IMAGE87,
    #IMAGE87>.ladi-image>.ladi-image-background {
      width: 88px;
      height: 87px;
    }

    #IMAGE61,
    #IMAGE61>.ladi-image>.ladi-image-background,
    #IMAGE88,
    #IMAGE88>.ladi-image>.ladi-image-background {
      width: 88px;
      height: 88px;
    }

    #IMAGE61 {
      top: 0px;
      left: 100.841px;
    }

    #GROUP87,
    #GROUP88,
    #GROUP91 {
      width: 310.159px;
      height: 459.045px;
    }

    #IMAGE62,
    #IMAGE62>.ladi-image>.ladi-image-background {
      width: 303.159px;
      height: 178.518px;
    }

    #IMAGE62>.ladi-image>.ladi-image-background {
      background-image: url("images/img11.webp");
    }

    #GROUP86,
    #GROUP85,
    #GROUP89,
    #GROUP90,
    #GROUP92,
    #GROUP93 {
      width: 310.159px;
      height: 258.159px;
    }

    #GROUP86,
    #GROUP89,
    #GROUP92 {
      top: 200.886px;
      left: 0px;
    }

    #BOX48,
    #BOX49,
    #BOX51 {
      width: 303.159px;
      height: 251.159px;
      top: 7px;
      left: 7px;
    }

    #BOX47,
    #BOX50,
    #BOX52 {
      width: 303.159px;
      height: 252.159px;
    }

    #IMAGE63,
    #IMAGE63>.ladi-image>.ladi-image-background,
    #IMAGE65,
    #IMAGE65>.ladi-image>.ladi-image-background,
    #IMAGE67,
    #IMAGE67>.ladi-image>.ladi-image-background {
      width: 20px;
      height: 17px;
    }

    #IMAGE63,
    #IMAGE65,
    #IMAGE67 {
      top: 20px;
      left: 12px;
    }

    #HEADLINE63,
    #HEADLINE64,
    #HEADLINE65 {
      top: 14px;
      left: 41px;
    }

    #PARAGRAPH2,
    #PARAGRAPH3,
    #PARAGRAPH4 {
      width: 266px;
      top: 58px;
      left: 21.0795px;
    }

    #PARAGRAPH2>.ladi-paragraph,
    #PARAGRAPH3>.ladi-paragraph,
    #PARAGRAPH4>.ladi-paragraph,
    #PARAGRAPH11>.ladi-paragraph,
    #PARAGRAPH12>.ladi-paragraph,
    #PARAGRAPH13>.ladi-paragraph,
    #PARAGRAPH14>.ladi-paragraph,
    #PARAGRAPH15>.ladi-paragraph,
    #PARAGRAPH16>.ladi-paragraph,
    #PARAGRAPH17>.ladi-paragraph,
    #PARAGRAPH9>.ladi-paragraph,
    #PARAGRAPH10>.ladi-paragraph {
      font-size: 16px;
      line-height: 1.6;
      color: rgb(0, 0, 0);
    }

    #IMAGE64,
    #IMAGE64>.ladi-image>.ladi-image-background {
      width: 303.159px;
      height: 189.518px;
    }

    #IMAGE64>.ladi-image>.ladi-image-background {
      background-image: url("images/img10.webp");
    }

    #HEADLINE64 {
      width: 246px;
    }

    #IMAGE66,
    #IMAGE66>.ladi-image>.ladi-image-background {
      width: 272.977px;
      height: 186.886px;
    }

    #IMAGE66 {
      top: 0px;
      left: 18.591px;
    }

    #IMAGE66>.ladi-image>.ladi-image-background {
      background-image: url("images/img12.webp");
    }

    #HEADLINE65 {
      width: 254px;
    }

    #IMAGE68>.ladi-image>.ladi-image-background {
      background-image: url("images/svg11.svg");
    }

    #GROUP95,
    #GROUP94,
    #GROUP181,
    #GROUP107 {
      height: 564px;
    }

    #BOX54,
    #BOX60 {
      height: 554px;
      top: 10px;
      left: 10px;
    }

    #BOX53 {
      height: 556px;
    }

    #IMAGE69,
    #IMAGE69>.ladi-image>.ladi-image-background {
      width: 115.613px;
      height: 160px;
    }

    #IMAGE69>.ladi-image>.ladi-image-background {
      background-image: url("images/svg9.svg");
    }

    #IMAGE70,
    #IMAGE70>.ladi-image>.ladi-image-background {
      width: 237.966px;
      height: 269.515px;
    }

    #IMAGE70 {
      top: 284.742px;
    }

    #IMAGE70>.ladi-image>.ladi-image-background {
      background-image: url("images/svg10.svg");
    }

    #GROUP99,
    #GROUP100,
    #GROUP102,
    #GROUP104 {
      left: 32px;
    }

    #GROUP97,
    #BOX55,
    #GROUP101,
    #BOX57,
    #GROUP103,
    #BOX58 {
      width: 56px;
      height: 56px;
    }

    #BOX55>.ladi-box,
    #BOX57>.ladi-box,
    #BOX58>.ladi-box,
    #BOX59>.ladi-box {
      border-radius: 28px;
    }

    #IMAGE72,
    #IMAGE72>.ladi-image>.ladi-image-background,
    #IMAGE75,
    #IMAGE75>.ladi-image>.ladi-image-background {
      width: 24px;
      height: 26px;
    }

    #IMAGE72,
    #IMAGE74,
    #IMAGE75 {
      top: 15px;
      left: 16px;
    }

    #IMAGE72>.ladi-image>.ladi-image-background {
      background-image: url("images/svg4.svg");
    }

    #HEADLINE67,
    #HEADLINE69 {
      top: 3px;
      left: 74px;
    }

    #HEADLINE67>.ladi-headline,
    #HEADLINE68>.ladi-headline,
    #HEADLINE69>.ladi-headline,
    #HEADLINE70>.ladi-headline {
      font-weight: bold;
      line-height: 1.4;
      color: rgb(255, 255, 255);
      text-align: left;
    }

    #IMAGE74,
    #IMAGE74>.ladi-image>.ladi-image-background {
      width: 25px;
      height: 26px;
    }

    #IMAGE74>.ladi-image>.ladi-image-background {
      background-image: url("images/svg5.svg");
    }

    #HEADLINE68 {
      top: 15.5px;
      left: 74px;
    }

    #IMAGE75>.ladi-image>.ladi-image-background {
      background-image: url("images/svg6.svg");
    }

    #GROUP105,
    #BOX59 {
      height: 56px;
    }

    #IMAGE76 {
      height: 20px;
      top: 18px;
    }

    #IMAGE76>.ladi-image>.ladi-image-background {
      width: 33.3333px;
      height: 20px;
      background-image: url("images/svg7.svg");
    }

    #HEADLINE70 {
      top: 15.5px;
    }

    #BOX60>.ladi-box {
      background-color: rgb(84, 84, 84);
    }

    #BOX61 {
      height: 555px;
    }

    #HEADLINE71 {
      width: 312px;
    }

    #GROUP109 {
      height: 50px;
      top: 128px;
      left: 47px;
    }

    #IMAGE79,
    #IMAGE79>.ladi-image>.ladi-image-background {
      width: 18px;
      height: 17px;
    }

    #IMAGE79 {
      top: 15.5px;
      left: 0px;
    }

    #IMAGE79>.ladi-image>.ladi-image-background,
    #IMAGE80>.ladi-image>.ladi-image-background,
    #IMAGE82>.ladi-image>.ladi-image-background,
    #IMAGE83>.ladi-image>.ladi-image-background {
      background-image: url("images/svg8.svg");
    }

    #HEADLINE72 {
      top: 0px;
      left: 31px;
    }

    #HEADLINE72>.ladi-headline,
    #HEADLINE73>.ladi-headline,
    #HEADLINE75>.ladi-headline,
    #HEADLINE76>.ladi-headline {
      font-size: 18px;
      line-height: 1.4;
      color: rgb(0, 0, 0);
      text-align: left;
    }

    #GROUP110 {
      height: 25px;
      top: 222.5px;
      left: 47px;
    }

    #IMAGE80,
    #IMAGE82 {
      height: 17px;
    }

    #IMAGE80,
    #IMAGE82,
    #IMAGE83 {
      top: 4px;
      left: 0px;
    }

    #IMAGE80>.ladi-image>.ladi-image-background,
    #IMAGE82>.ladi-image>.ladi-image-background,
    #IMAGE83,
    #IMAGE83>.ladi-image>.ladi-image-background {
      width: 18.7864px;
      height: 17px;
    }

    #GROUP112 {
      height: 101px;
      top: 300.5px;
      left: 47px;
    }

    #GROUP113 {
      top: 436px;
      left: 47px;
    }

    #HEADLINE76 {
      top: 0px;
      left: 32px;
    }

    #IMAGE89,
    #IMAGE89>.ladi-image>.ladi-image-background {
      width: 334.883px;
      height: 662.897px;
    }

    #IMAGE89>.ladi-image>.ladi-image-background {
      background-image: url("images/img18.webp");
    }

    #IMAGE90,
    #IMAGE90>.ladi-image>.ladi-image-background {
      width: 367.014px;
      height: 629.937px;
    }

    #IMAGE90>.ladi-image>.ladi-image-background {
      background-image: url("images/img19.webp");
    }

    #IMAGE92,
    #IMAGE92>.ladi-image>.ladi-image-background {
      width: 117px;
      height: 89px;
    }

    #IMAGE92>.ladi-image>.ladi-image-background {
      background-image: url("images/svg28.svg");
    }

    #HEADLINE84>.ladi-headline {
      font-weight: bold;
      line-height: 1.4;
      color: rgb(0, 0, 0);
    }

    #IMAGE93>.ladi-image>.ladi-image-background {
      background-image: url("images/svg29.svg");
    }

    #GROUP152,
    #GROUP153,
    #GROUP150,
    #GROUP151 {
      width: 335px;
      height: 505px;
    }

    #BOX83,
    #BOX84,
    #BOX81,
    #BOX82 {
      width: 330px;
      height: 499.128px;
    }

    #BOX83,
    #BOX81 {
      top: 5.87209px;
      left: 5px;
    }

    #IMAGE121,
    #IMAGE121>.ladi-image>.ladi-image-background,
    #IMAGE122,
    #IMAGE122>.ladi-image>.ladi-image-background,
    #IMAGE123,
    #IMAGE123>.ladi-image>.ladi-image-background,
    #IMAGE124,
    #IMAGE124>.ladi-image>.ladi-image-background,
    #IMAGE125,
    #IMAGE125>.ladi-image>.ladi-image-background,
    #IMAGE126,
    #IMAGE126>.ladi-image>.ladi-image-background,
    #IMAGE127,
    #IMAGE127>.ladi-image>.ladi-image-background,
    #IMAGE119,
    #IMAGE119>.ladi-image>.ladi-image-background,
    #IMAGE120,
    #IMAGE120>.ladi-image>.ladi-image-background {
      width: 69px;
      height: 70px;
    }

    #IMAGE121,
    #IMAGE122,
    #IMAGE123,
    #IMAGE124,
    #IMAGE125,
    #IMAGE126,
    #IMAGE127,
    #IMAGE119,
    #IMAGE120 {
      top: 13.35px;
      left: 12.5px;
    }

    #IMAGE121>.ladi-image>.ladi-image-background {
      background-image: url("images/img29.webp");
    }

    #HEADLINE119,
    #HEADLINE120,
    #HEADLINE121,
    #HEADLINE122,
    #HEADLINE123,
    #HEADLINE124,
    #HEADLINE125,
    #HEADLINE117,
    #HEADLINE118 {
      top: 33.85px;
      left: 101px;
    }

    #HEADLINE119>.ladi-headline,
    #HEADLINE120>.ladi-headline,
    #HEADLINE121>.ladi-headline,
    #HEADLINE122>.ladi-headline,
    #HEADLINE123>.ladi-headline,
    #HEADLINE124>.ladi-headline,
    #HEADLINE125>.ladi-headline,
    #HEADLINE117>.ladi-headline,
    #HEADLINE118>.ladi-headline {
      font-size: 18px;
      font-weight: bold;
      line-height: 1.6;
      color: rgb(0, 0, 0);
      text-align: left;
    }

    #PARAGRAPH11,
    #PARAGRAPH12,
    #PARAGRAPH13,
    #PARAGRAPH14,
    #PARAGRAPH15,
    #PARAGRAPH16,
    #PARAGRAPH17,
    #PARAGRAPH9,
    #PARAGRAPH10 {
      top: 98.35px;
      left: 16px;
    }

    #GROUP154,
    #GROUP155 {
      width: 335px;
      height: 579px;
    }

    #BOX85,
    #BOX86 {
      width: 330px;
      height: 572.267px;
    }

    #BOX85 {
      top: 6.73255px;
      left: 5px;
    }

    #IMAGE122>.ladi-image>.ladi-image-background {
      background-image: url("images/img30.webp");
    }

    #GROUP157,
    #GROUP158,
    #GROUP159,
    #GROUP160 {
      width: 335px;
      height: 578px;
    }

    #BOX90,
    #BOX91,
    #BOX92,
    #BOX93 {
      width: 330px;
      height: 571.279px;
    }

    #BOX90,
    #BOX92 {
      top: 6.72093px;
      left: 5px;
    }

    #IMAGE123>.ladi-image>.ladi-image-background {
      background-image: url("images/img31.webp");
    }

    #IMAGE124>.ladi-image>.ladi-image-background {
      background-image: url("images/img32.webp");
    }

    #GROUP161,
    #GROUP162 {
      width: 335px;
      height: 600px;
    }

    #BOX94,
    #BOX95 {
      width: 330px;
      height: 593.023px;
    }

    #BOX94 {
      top: 6.97674px;
      left: 5px;
    }

    #IMAGE125>.ladi-image>.ladi-image-background {
      background-image: url("images/img33.webp");
    }

    #GROUP163,
    #GROUP164,
    #GROUP165,
    #GROUP166 {
      width: 335px;
      height: 601px;
    }

    #BOX96,
    #BOX97,
    #BOX98,
    #BOX99 {
      width: 330px;
      height: 594.012px;
    }

    #BOX96,
    #BOX98 {
      top: 6.98837px;
      left: 5px;
    }

    #IMAGE126>.ladi-image>.ladi-image-background {
      background-image: url("images/img34.webp");
    }

    #IMAGE127>.ladi-image>.ladi-image-background {
      background-image: url("images/img26.webp");
    }

    #GROUP148,
    #GROUP149 {
      width: 335px;
      height: 508px;
    }

    #BOX79,
    #BOX80 {
      width: 330px;
      height: 502.093px;
    }

    #BOX79 {
      top: 5.90697px;
      left: 5px;
    }

    #IMAGE119>.ladi-image>.ladi-image-background {
      background-image: url("images/img27.webp");
    }

    #IMAGE120>.ladi-image>.ladi-image-background {
      background-image: url("images/img28.webp");
    }

    #IMAGE101>.ladi-image>.ladi-image-background {
      background-image: url("images/svg26.svg");
    }

    #IMAGE94>.ladi-image>.ladi-image-background {
      background-image: url("images/svg14.svg");
    }

    #GROUP122,
    #GROUP121,
    #GROUP123,
    #GROUP124 {
      height: 113px;
    }

    #BOX65,
    #BOX64,
    #BOX66,
    #BOX67 {
      height: 104px;
    }

    #BOX65,
    #BOX66 {
      top: 9px;
    }

    #IMAGE96,
    #IMAGE96>.ladi-image>.ladi-image-background {
      width: 40px;
      height: 48px;
    }

    #IMAGE96 {
      top: 24.5px;
      left: 20.5px;
    }

    #IMAGE96>.ladi-image>.ladi-image-background {
      background-image: url("images/svg31.svg");
    }

    #HEADLINE88,
    #HEADLINE90,
    #HEADLINE92 {
      top: 12.5px;
      left: 88px;
    }

    #HEADLINE88>.ladi-headline,
    #HEADLINE90>.ladi-headline,
    #HEADLINE92>.ladi-headline,
    #HEADLINE95>.ladi-headline,
    #HEADLINE101>.ladi-headline,
    #HEADLINE97>.ladi-headline,
    #HEADLINE99>.ladi-headline {
      font-size: 20px;
      font-weight: bold;
      line-height: 1.6;
      color: rgb(0, 0, 0);
      text-align: left;
    }

    #HEADLINE89,
    #HEADLINE91 {
      width: 318px;
    }

    #HEADLINE89,
    #HEADLINE91,
    #HEADLINE93 {
      top: 53.5px;
      left: 88px;
    }

    #IMAGE97,
    #IMAGE97>.ladi-image>.ladi-image-background {
      width: 30.3448px;
      height: 40px;
    }

    #IMAGE97 {
      top: 29.5px;
      left: 20.5px;
    }

    #IMAGE97>.ladi-image>.ladi-image-background {
      background-image: url("images/svg32.svg");
    }

    #IMAGE98,
    #IMAGE98>.ladi-image>.ladi-image-background {
      width: 34.2708px;
      height: 35px;
    }

    #IMAGE98 {
      top: 33.5px;
      left: 20.5px;
    }

    #IMAGE98>.ladi-image>.ladi-image-background {
      background-image: url("images/svg33.svg");
    }

    #BOX70>.ladi-box {
      border-radius: 40px;
    }

    #IMAGE100>.ladi-image>.ladi-image-background {
      background-image: url("images/svg25.svg");
    }

    #LINE7,
    #LINE8,
    #LINE9 {
      height: 266px;
    }

    #LINE7>.ladi-line>.ladi-line-container,
    #LINE8>.ladi-line>.ladi-line-container,
    #LINE9>.ladi-line>.ladi-line-container {
      border-top: 0px !important;
      border-right: 1px solid rgb(217, 217, 217);
      border-bottom: 1px solid rgb(217, 217, 217);
      border-left: 1px solid rgb(217, 217, 217);
    }

    #LINE7>.ladi-line,
    #LINE8>.ladi-line,
    #LINE9>.ladi-line {
      height: 100%;
      padding: 0px 8px;
    }

    #HEADLINE104 {
      width: 381px;
    }

    #IMAGE107,
    #IMAGE107>.ladi-image>.ladi-image-background {
      width: 112.879px;
      height: 196px;
    }

    #IMAGE107>.ladi-image {
      transform: rotate(-30deg);
    }

    #HEADLINE112 {
      width: 272px;
    }

    #PARAGRAPH6>.ladi-paragraph,
    #PARAGRAPH7>.ladi-paragraph {
      line-height: 1.4;
      color: rgb(0, 0, 0);
      text-align: center;
    }

    #BOX76,
    #BUTTON8,
    #FORM_ITEM2,
    #FORM_ITEM4 {
      width: 330px;
      height: 60px;
    }

    #FORM2>.ladi-form,
    #FORM3>.ladi-form {
      font-size: 24px;
      line-height: 1.6;
      color: rgb(0, 0, 0);
    }

    #FORM2 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"],
    #FORM2 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item .ladi-editing,
    #FORM2 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item .ladi-editing::placeholder,
    #FORM2 .ladi-form .ladi-survey-option .ladi-survey-option-label,
    #FORM2 .ladi-form-item .ladi-form-control::placeholder,
    #FORM2 .ladi-form-item select.ladi-form-control[data-selected=""],
    #FORM3 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"],
    #FORM3 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item .ladi-editing,
    #FORM3 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item .ladi-editing::placeholder,
    #FORM3 .ladi-form .ladi-survey-option .ladi-survey-option-label,
    #FORM3 .ladi-form-item .ladi-form-control::placeholder,
    #FORM3 .ladi-form-item select.ladi-form-control[data-selected=""] {
      color: rgb(0, 0, 0);
    }

    #FORM2 .ladi-form-item,
    #FORM3 .ladi-form-item {
      padding-left: 5px;
      padding-right: 5px;
    }

    #FORM2 .ladi-form-item.otp-countdown:before,
    #FORM3 .ladi-form-item.otp-countdown:before {
      right: 10px;
    }

    #FORM2 .ladi-form-item.ladi-form-checkbox,
    #FORM3 .ladi-form-item.ladi-form-checkbox {
      padding-left: 10px;
      padding-right: 10px;
    }

    #FORM2 .ladi-survey-option,
    #FORM3 .ladi-survey-option {
      text-align: left;
    }

    #FORM2 .ladi-form-item-container,
    #FORM2 .ladi-form-label-container .ladi-form-label-item,
    #FORM3 .ladi-form-item-container,
    #FORM3 .ladi-form-label-container .ladi-form-label-item {
      border-width: 1px;
      border-style: solid;
      border-color: rgb(166, 166, 166);
    }

    #FORM2 .ladi-form-item-container .ladi-form-item.ladi-form-quantity,
    #FORM3 .ladi-form-item-container .ladi-form-item.ladi-form-quantity {
      width: calc(100% + 1px);
    }

    #FORM2 .ladi-form-item-container .ladi-form-quantity .button,
    #FORM3 .ladi-form-item-container .ladi-form-quantity .button {
      background-color: rgb(166, 166, 166);
    }

    #BUTTON8>.ladi-button>.ladi-button-background,
    #BUTTON9>.ladi-button>.ladi-button-background {
      background-color: rgb(154, 58, 60);
    }

    #BUTTON_TEXT8 {
      width: 330px;
    }

    #BUTTON_TEXT8>.ladi-headline,
    #BUTTON_TEXT9>.ladi-headline {
      font-size: 24px;
      font-weight: bold;
      line-height: 1.6;
      color: rgb(241, 243, 244);
      text-align: center;
    }

    #GROUP127,
    #BOX71,
    #GROUP134,
    #BOX74,
    #GROUP130,
    #BOX72,
    #GROUP132,
    #BOX73 {
      width: 80px;
      height: 80px;
    }

    #BOX71>.ladi-box,
    #BOX74>.ladi-box,
    #BOX72>.ladi-box,
    #BOX73>.ladi-box {
      border-radius: 45px;
    }

    #IMAGE102,
    #IMAGE102>.ladi-image>.ladi-image-background {
      width: 30px;
      height: 41px;
    }

    #IMAGE102,
    #IMAGE103,
    #IMAGE104 {
      top: 19.5px;
      left: 25px;
    }

    #IMAGE102>.ladi-image>.ladi-image-background {
      background-image: url("images/svg15.svg");
    }

    #HEADLINE95,
    #HEADLINE101,
    #HEADLINE102,
    #HEADLINE97,
    #HEADLINE99 {
      width: 243px;
    }

    #HEADLINE96 {
      left: 5.028px;
    }

    #IMAGE105,
    #IMAGE105>.ladi-image>.ladi-image-background {
      width: 28.833px;
      height: 34px;
    }

    #IMAGE105 {
      top: 23px;
      left: 25.5835px;
    }

    #IMAGE105>.ladi-image>.ladi-image-background {
      background-image: url("images/svg18.svg");
    }

    #IMAGE103,
    #IMAGE103>.ladi-image>.ladi-image-background {
      width: 32.3415px;
      height: 39px;
    }

    #IMAGE103>.ladi-image>.ladi-image-background {
      background-image: url("images/svg16.svg");
    }

    #IMAGE104,
    #IMAGE104>.ladi-image>.ladi-image-background {
      width: 33.9212px;
      height: 32px;
    }

    #IMAGE104>.ladi-image>.ladi-image-background {
      background-image: url("images/svg17.svg");
    }

    #GROUP139 {
      width: 137px;
      height: 134.476px;
    }

    #IMAGE111,
    #IMAGE111>.ladi-image>.ladi-image-background {
      width: 135.416px;
      height: 134.476px;
    }

    #HEADLINE105 {
      top: 38.238px;
      left: 0px;
    }

    #HEADLINE105>.ladi-headline {
      font-size: 36px;
      font-weight: bold;
      line-height: 1.6;
      color: rgb(0, 0, 0);
      text-align: center;
    }

    #HEADLINE103 {
      width: 382px;
    }

    #HEADLINE136 {
      width: 38px;
    }

    #POPUP2 {
      right: 0px;
      bottom: 0px;
      margin: auto;
    }

    #HEADLINE126 {
      width: 104px;
    }

    #HEADLINE127>.ladi-headline {
      font-weight: bold;
      line-height: 1.4;
      color: rgb(0, 0, 0);
      text-align: left;
    }

    #IMAGE136>.ladi-image>.ladi-image-background {
      background-image: url("images/svg19.svg");
    }

    #HEADLINE129,
    #HEADLINE130 {
      width: 102px;
    }

    #HEADLINE129>.ladi-headline {
      font-size: 40px;
      font-weight: bold;
      line-height: 1;
      color: rgb(40, 73, 118);
      text-align: center;
    }

    #HEADLINE130>.ladi-headline {
      font-weight: bold;
      line-height: 1;
      color: rgb(40, 73, 118);
      text-align: center;
    }

    #HEADLINE131 {
      width: 56px;
    }

    #HEADLINE131>.ladi-headline {
      line-height: 1;
      color: rgb(166, 166, 166);
      text-decoration-line: line-through;
      letter-spacing: 0px;
      text-align: center;
    }

    #HEADLINE132>.ladi-headline {
      font-size: 21px;
      line-height: 1;
      color: rgb(166, 166, 166);
      text-align: center;
    }

    #GROUP168 {
      height: 224px;
    }

    #BOX100 {
      height: 60.605px;
      top: 163.395px;
    }

    #FORM3 {
      height: 220px;
    }

    #BUTTON9,
    #FORM_ITEM6,
    #FORM_ITEM8 {
      height: 60px;
    }

    #BUTTON9 {
      top: 160px;
      left: 0px;
    }

    #BUTTON9>.ladi-button:hover .ladi-button-background {
      background-image: none !important;
      background-color: rgb(111, 35, 37) !important;
      background-size: initial !important;
      background-origin: initial !important;
      background-position: initial !important;
      background-repeat: initial !important;
      background-attachment: initial !important;
    }

    #FORM_ITEM8 {
      top: 84px;
      left: 0px;
    }

    #IMAGE139 {
      height: 24px;
      top: 177.395px;
    }

    @media (min-width: 768px) {
      #SECTION1 {
        height: 2366.9px;
      }

      #IMAGE41 {
        top: 1459.99px;
        left: 1047.59px;
      }

      #IMAGE1,
      #IMAGE1>.ladi-image>.ladi-image-background {
        width: 770.414px;
        height: 829px;
      }

      #IMAGE1 {
        top: 0px;
        left: 690px;
      }

      #IMAGE1>.ladi-image>.ladi-image-background {
        background-image: url("images/img14.webp");
      }

      #GROUP1 {
        top: 46.5px;
        left: 0px;
      }

      #GROUP11 {
        width: 426.771px;
        height: 94.353px;
        top: 160px;
        left: 0px;
      }

      #HEADLINE7>.ladi-headline,
      #PARAGRAPH1>.ladi-paragraph,
      #PARAGRAPH5>.ladi-paragraph,
      #PARAGRAPH6>.ladi-paragraph,
      #PARAGRAPH7>.ladi-paragraph {
        font-size: 16px;
      }

      #IMAGE3,
      #IMAGE3>.ladi-image>.ladi-image-background {
        width: 426.771px;
        height: 68.353px;
      }

      #HEADLINE8 {
        top: 326px;
        left: 0px;
      }

      #HEADLINE8>.ladi-headline {
        font-size: 21px;
        text-align: left;
      }

      #IMAGE4 {
        top: 354px;
        left: 364px;
      }

      #GROUP9 {
        height: 206.5px;
        top: 172.5px;
        left: 498px;
      }

      #GROUP4 {
        top: 96.5px;
      }

      #HEADLINE10>.ladi-headline,
      #HEADLINE9>.ladi-headline,
      #HEADLINE11>.ladi-headline,
      #HEADLINE16>.ladi-headline,
      #HEADLINE52>.ladi-headline,
      #HEADLINE53>.ladi-headline,
      #HEADLINE141>.ladi-headline,
      #HEADLINE67>.ladi-headline,
      #HEADLINE68>.ladi-headline,
      #HEADLINE69>.ladi-headline,
      #HEADLINE70>.ladi-headline,
      #HEADLINE137>.ladi-headline,
      #HEADLINE85>.ladi-headline,
      #HEADLINE133>.ladi-headline {
        font-size: 18px;
      }

      #GROUP8 {
        height: 65px;
      }

      #GROUP2 {
        top: 15px;
      }

      #GROUP6 {
        top: 163.5px;
      }

      #GROUP13 {
        top: 597px;
        left: 58px;
      }

      #IMAGE14,
      #IMAGE14>.ladi-image>.ladi-image-background {
        width: 688px;
        height: 697.73px;
      }

      #IMAGE14 {
        top: 747.278px;
        left: -271px;
      }

      #IMAGE14>.ladi-image>.ladi-image-background {
        background-image: url("images/img15.webp");
      }

      #BOX5 {
        width: 1200px;
        height: 729px;
        top: 837px;
        left: 0px;
      }

      #IMAGE8,
      #IMAGE8>.ladi-image>.ladi-image-background {
        width: 273.984px;
        height: 403.211px;
      }

      #IMAGE8 {
        top: 446.845px;
        left: 460px;
      }

      #IMAGE8>.ladi-image>.ladi-image-background,
      #IMAGE108>.ladi-image>.ladi-image-background {
        background-image: url("images/img24.webp");
      }

      #GROUP10,
      #GROUP80,
      #GROUP118 {
        height: 134.476px;
      }

      #GROUP10 {
        top: 402.024px;
        left: 812.724px;
      }

      #IMAGE9,
      #IMAGE9>.ladi-image>.ladi-image-background,
      #IMAGE59,
      #IMAGE59>.ladi-image>.ladi-image-background,
      #IMAGE86,
      #IMAGE86>.ladi-image>.ladi-image-background {
        width: 135.416px;
        height: 134.476px;
      }

      #IMAGE9,
      #IMAGE59,
      #IMAGE86,
      #IMAGE138 {
        left: 0px;
      }

      #HEADLINE13,
      #HEADLINE54,
      #HEADLINE77 {
        top: 38.238px;
      }

      #HEADLINE13>.ladi-headline,
      #HEADLINE54>.ladi-headline,
      #HEADLINE77>.ladi-headline {
        font-size: 36px;
      }

      #HEADLINE20 {
        width: 645px;
        top: 883px;
        left: 277.5px;
      }

      #HEADLINE20>.ladi-headline,
      #HEADLINE34>.ladi-headline,
      #HEADLINE38>.ladi-headline {
        font-size: 46px;
      }

      #GROUP41 {
        top: 1299.08px;
        left: 35.324px;
      }

      #GROUP172 {
        width: 547.47px;
        height: 530.494px;
        top: 962.293px;
        left: 35.324px;
      }

      #GROUP16 {
        top: 37.997px;
        left: 0px;
      }

      #GROUP26 {
        left: 289.882px;
      }

      #GROUP44 {
        top: 300.787px;
        left: 289.882px;
      }

      #GROUP173 {
        width: 548.366px;
        height: 541.494px;
        top: 962.293px;
        left: 619.206px;
      }

      #GROUP35 {
        top: 37.997px;
      }

      #GROUP38 {
        top: 0px;
        left: 290.778px;
      }

      #GROUP47 {
        top: 336.787px;
        left: 0px;
      }

      #GROUP50 {
        top: 300.787px;
        left: 290.778px;
      }

      #IMAGE42,
      #IMAGE42>.ladi-image>.ladi-image-background {
        width: 1791.9px;
        height: 442.372px;
      }

      #IMAGE42 {
        top: 1905.31px;
        left: -342px;
      }

      #HEADLINE34,
      #HEADLINE38 {
        width: 830px;
      }

      #HEADLINE34 {
        top: 1649px;
        left: 185.5px;
      }

      #GROUP61 {
        top: 1821.5px;
        left: 841px;
      }

      #GROUP170 {
        width: 273.276px;
        top: 716px;
        left: 926.724px;
      }

      #IMAGE11 {
        left: 88.776px;
      }

      #IMAGE12 {
        left: 198.276px;
      }

      #HEADLINE12,
      #HEADLINE56,
      #HEADLINE83,
      #HEADLINE111 {
        width: 145px;
      }

      #HEADLINE12 {
        top: 478.5px;
        left: 0px;
      }

      #GROUP171,
      #GROUP192,
      #GROUP191,
      #GROUP190 {
        width: 147px;
        height: 65px;
      }

      #GROUP171 {
        top: 459.5px;
        left: 224px;
      }

      #HEADLINE16,
      #HEADLINE141,
      #GROUP105,
      #BOX59,
      #HEADLINE137,
      #HEADLINE133 {
        width: 56px;
      }

      #HEADLINE16,
      #HEADLINE141,
      #HEADLINE137,
      #HEADLINE133 {
        top: 29px;
        left: 80px;
      }

      #HEADLINE17,
      #HEADLINE142,
      #HEADLINE138,
      #HEADLINE134 {
        width: 73px;
      }

      #HEADLINE17,
      #HEADLINE18,
      #HEADLINE142,
      #HEADLINE143,
      #HEADLINE138,
      #HEADLINE134,
      #HEADLINE135 {
        top: 1px;
      }

      #HEADLINE18>.ladi-headline,
      #HEADLINE143>.ladi-headline,
      #HEADLINE139>.ladi-headline,
      #HEADLINE135>.ladi-headline {
        font-size: 15px;
      }

      #HEADLINE19,
      #HEADLINE144,
      #HEADLINE140 {
        width: 38px;
      }

      #HEADLINE19,
      #HEADLINE144 {
        left: 109px;
      }

      #HEADLINE19>.ladi-headline,
      #HEADLINE144>.ladi-headline,
      #HEADLINE140>.ladi-headline,
      #HEADLINE136>.ladi-headline {
        font-size: 13px;
      }

      #GROUP57 {
        top: 1821.5px;
        left: 0px;
      }

      #GROUP58 {
        top: 1890.5px;
        left: 421px;
      }

      #SECTION2 {
        height: 1069.9px;
      }

      #IMAGE46,
      #IMAGE46>.ladi-image>.ladi-image-background {
        width: 1068.13px;
        height: 931.398px;
      }

      #IMAGE46 {
        top: 36.4px;
        left: 65.935px;
      }

      #HEADLINE38 {
        top: 61.1px;
        left: 185.5px;
      }

      #IMAGE47,
      #IMAGE47>.ladi-image>.ladi-image-background {
        width: 250px;
        height: 389.102px;
      }

      #IMAGE47 {
        top: 344.399px;
        left: 470px;
      }

      #GROUP65 {
        top: 258.6px;
        left: 162.75px;
      }

      #GROUP176 {
        width: 413px;
        height: 276px;
        top: 258.6px;
        left: 787px;
      }

      #GROUP70,
      #LINE7 {
        top: 0px;
      }

      #GROUP72 {
        top: 162px;
        left: 117.75px;
      }

      #GROUP175 {
        width: 1076px;
        height: 333px;
        top: 420.6px;
        left: 0px;
      }

      #GROUP68 {
        top: 189px;
        left: 63.75px;
      }

      #GROUP74 {
        top: 219px;
        left: 780.75px;
      }

      #HEADLINE51 {
        width: 334px;
        top: 954.9px;
        left: 44px;
      }

      #HEADLINE51>.ladi-headline {
        font-size: 36px;
        line-height: 1.6;
        text-align: left;
      }

      #SECTION3 {
        height: 881.2px;
      }

      #IMAGE56 {
        top: 38px;
        left: 1076px;
      }

      #LINE4 {
        width: 1061px;
        top: 864.2px;
        left: 69.5px;
      }

      #BOX45 {
        width: 1200px;
        height: 481.803px;
        top: 0px;
        left: 0px;
      }

      #IMAGE54 {
        top: -227.403px;
        left: 610px;
      }

      #GROUP177 {
        width: 537px;
        height: 328.672px;
        top: 63.2px;
        left: 44px;
      }

      #PARAGRAPH1 {
        width: 537px;
      }

      #IMAGE55 {
        top: 277.672px;
        left: 19.75px;
      }

      #HEADLINE52 {
        top: 270.672px;
        left: 77px;
      }

      #HEADLINE53 {
        width: 399px;
        top: 299.672px;
        left: 77px;
      }

      #GROUP78 {
        top: 702.7px;
        left: 809px;
      }

      #IMAGE58 {
        top: 552.904px;
        left: 0px;
      }

      #GROUP80 {
        top: 537.962px;
        left: 727.72px;
      }

      #LINE2 {
        top: 653.438px;
        left: 321.159px;
      }

      #HEADLINE55 {
        top: 586.2px;
        left: 321.159px;
      }

      #HEADLINE55>.ladi-headline,
      #HEADLINE82>.ladi-headline {
        font-size: 36px;
        text-align: left;
      }

      #HEADLINE56 {
        top: 714.7px;
        left: 321.159px;
      }

      #HEADLINE56>.ladi-headline,
      #HEADLINE83>.ladi-headline,
      #HEADLINE111>.ladi-headline {
        text-align: left;
      }

      #GROUP178 {
        top: 692.7px;
        left: 462.159px;
      }

      #GROUP192 {
        top: 711.2px;
        left: 651px;
      }

      #SECTION4 {
        height: 854.9px;
      }

      #HEADLINE61,
      #HEADLINE66 {
        width: 1200px;
      }

      #HEADLINE61 {
        top: 43.5px;
        left: 0px;
      }

      #HEADLINE61>.ladi-headline,
      #HEADLINE66>.ladi-headline,
      #HEADLINE86>.ladi-headline,
      #HEADLINE87>.ladi-headline,
      #HEADLINE94>.ladi-headline {
        font-size: 44px;
      }

      #HEADLINE62 {
        width: 1082px;
        top: 174.5px;
        left: 59px;
      }

      #GROUP87 {
        top: 286.614px;
        left: 46px;
      }

      #GROUP88 {
        top: 286.614px;
        left: 444.92px;
      }

      #GROUP91 {
        top: 286.614px;
        left: 848.92px;
      }

      #SECTION5 {
        height: 1227.9px;
      }

      #HEADLINE66 {
        top: 6.6px;
        left: 0px;
      }

      #IMAGE68,
      #IMAGE68>.ladi-image>.ladi-image-background {
        width: 1957.91px;
        height: 700.563px;
      }

      #IMAGE68 {
        top: 775.319px;
        left: -412.297px;
      }

      #GROUP108,
      #GROUP96 {
        width: 519px;
        height: 667.606px;
      }

      #GROUP108 {
        top: 108.994px;
        left: 63px;
      }

      #GROUP95,
      #GROUP94,
      #GROUP181,
      #GROUP107 {
        width: 519px;
      }

      #GROUP95 {
        top: 103.606px;
      }

      #BOX54,
      #BOX53,
      #BOX60,
      #BOX61 {
        width: 509px;
      }

      #IMAGE70 {
        left: 273.034px;
      }

      #IMAGE71,
      #IMAGE71>.ladi-image>.ladi-image-background {
        width: 130px;
        height: 193.211px;
      }

      #IMAGE71 {
        left: 151.688px;
      }

      #IMAGE71>.ladi-image>.ladi-image-background {
        background-image: url("images/img24.webp");
      }

      #GROUP99,
      #GROUP100,
      #GROUP102,
      #GROUP104 {
        width: 455px;
        height: 56px;
      }

      #GROUP99 {
        top: 262.606px;
      }

      #HEADLINE67,
      #HEADLINE68,
      #HEADLINE69,
      #HEADLINE70,
      #HEADLINE72 {
        width: 381px;
      }

      #GROUP100 {
        top: 356.606px;
      }

      #GROUP102 {
        top: 454.606px;
      }

      #GROUP104 {
        top: 557.606px;
      }

      #IMAGE76 {
        width: 33.3333px;
        left: 11.3333px;
      }

      #HEADLINE70 {
        left: 74px;
      }

      #GROUP181 {
        top: 245.6px;
        left: 641px;
      }

      #HEADLINE71 {
        top: 49.5px;
        left: 103.5px;
      }

      #HEADLINE71>.ladi-headline {
        font-size: 28px;
      }

      #GROUP109 {
        width: 412px;
      }

      #GROUP110,
      #GROUP112 {
        width: 430px;
      }

      #IMAGE80,
      #IMAGE82 {
        width: 18.7864px;
      }

      #HEADLINE73,
      #HEADLINE75,
      #HEADLINE76 {
        width: 398px;
      }

      #HEADLINE73,
      #HEADLINE75 {
        left: 32px;
      }

      #GROUP113 {
        width: 430px;
        height: 50px;
      }

      #IMAGE85 {
        top: 881.542px;
        left: 53px;
      }

      #GROUP118 {
        top: 866.6px;
        left: 780.72px;
      }

      #LINE6 {
        top: 982.076px;
        left: 374.159px;
      }

      #HEADLINE82 {
        top: 914.838px;
        left: 374.159px;
      }

      #HEADLINE83 {
        top: 1043.34px;
        left: 374.159px;
      }

      #IMAGE87 {
        top: 1021.34px;
        left: 515.159px;
      }

      #IMAGE88 {
        top: 1021.34px;
        left: 616px;
      }

      #GROUP116 {
        top: 1139px;
        left: 444.92px;
      }

      #GROUP191 {
        top: 1032.34px;
        left: 704px;
      }

      #HEADLINE138>.ladi-headline,
      #HEADLINE134>.ladi-headline {
        font-size: 40px;
      }

      #HEADLINE139,
      #HEADLINE135 {
        width: 34px;
      }

      #HEADLINE139 {
        top: 1px;
        left: 82px;
      }

      #HEADLINE140,
      #HEADLINE136 {
        top: 0px;
        left: 109px;
      }

      #SECTION6 {
        height: 823.9px;
      }

      #IMAGE89 {
        top: 0px;
        left: 1130.29px;
      }

      #IMAGE90 {
        top: 187.132px;
        left: -272px;
      }

      #BOX63 {
        width: 1200px;
        height: 676.803px;
        top: 54.7px;
        left: 0px;
      }

      #IMAGE91,
      #IMAGE91>.ladi-image>.ladi-image-background {
        width: 173px;
        height: 173px;
      }

      #IMAGE91 {
        top: 104.963px;
        left: 66.055px;
      }

      #IMAGE91>.ladi-image>.ladi-image-background {
        background-image: url("images/img35.webp");
      }

      #IMAGE92 {
        top: 104.963px;
        left: 1053.5px;
      }

      #HEADLINE84,
      #HEADLINE86,
      #HEADLINE87,
      #HEADLINE94 {
        width: 727px;
      }

      #HEADLINE84 {
        top: 119.7px;
        left: 294px;
      }

      #HEADLINE84>.ladi-headline {
        font-size: 44px;
        text-align: left;
      }

      #HEADLINE85 {
        width: 544px;
        top: 284.7px;
        left: 294.658px;
      }

      #PARAGRAPH5 {
        width: 826px;
        top: 335.601px;
        left: 294.658px;
      }

      #SECTION7 {
        height: 1943.9px;
      }

      #HEADLINE86 {
        top: 18.8px;
        left: 236.5px;
      }

      #IMAGE93,
      #IMAGE93>.ladi-image>.ladi-image-background {
        width: 1818.95px;
        height: 271.896px;
      }

      #IMAGE93 {
        top: 199.8px;
        left: -306px;
      }

      #GROUP152 {
        top: 1376.95px;
        left: 45px;
      }

      #GROUP154 {
        top: 115.45px;
        left: 45px;
      }

      #GROUP157 {
        top: 115.95px;
        left: 424px;
      }

      #GROUP159 {
        top: 115.95px;
        left: 812.5px;
      }

      #GROUP161 {
        top: 735.95px;
        left: 45px;
      }

      #GROUP163 {
        top: 735.95px;
        left: 812.5px;
      }

      #GROUP165 {
        top: 735.95px;
        left: 424px;
      }

      #GROUP148 {
        top: 1378.45px;
        left: 424px;
      }

      #GROUP150 {
        top: 1378.45px;
        left: 812.5px;
      }

      #SECTION8 {
        height: 2647.22px;
      }

      #IMAGE101,
      #IMAGE101>.ladi-image>.ladi-image-background {
        width: 1099.25px;
        height: 1296.98px;
      }

      #IMAGE101 {
        top: 1044.91px;
        left: 231.5px;
      }

      #HEADLINE87 {
        top: 34.9px;
        left: 236.5px;
      }

      #IMAGE94,
      #IMAGE94>.ladi-image>.ladi-image-background {
        width: 749.318px;
        height: 653.398px;
      }

      #IMAGE94 {
        top: 151.201px;
        left: -64.318px;
      }

      #IMAGE95,
      #IMAGE95>.ladi-image>.ladi-image-background {
        width: 250px;
        height: 395.211px;
      }

      #IMAGE95 {
        top: 260.345px;
        left: 171px;
      }

      #IMAGE95>.ladi-image>.ladi-image-background {
        background-image: url("images/img24.webp");
      }

      #GROUP122,
      #GROUP121,
      #GROUP123,
      #GROUP124 {
        width: 421px;
      }

      #GROUP122 {
        top: 217.9px;
        left: 685px;
      }

      #BOX65,
      #BOX64,
      #BOX66,
      #BOX67 {
        width: 413px;
      }

      #BOX65,
      #BOX66 {
        left: 8px;
      }

      #GROUP123 {
        top: 395.9px;
        left: 739px;
      }

      #GROUP125,
      #GROUP126 {
        width: 449px;
        height: 113px;
      }

      #GROUP125 {
        top: 571.9px;
        left: 685px;
      }

      #BOX68,
      #BOX69 {
        width: 440.468px;
        height: 104px;
      }

      #BOX68 {
        top: 9px;
        left: 8.53207px;
      }

      #HEADLINE93 {
        width: 333px;
      }

      #IMAGE99,
      #IMAGE99>.ladi-image>.ladi-image-background {
        width: 429.925px;
        height: 737.914px;
      }

      #IMAGE99 {
        top: 693.262px;
        left: -266px;
      }

      #IMAGE99>.ladi-image>.ladi-image-background {
        background-image: url("images/img19.webp");
      }

      #BOX70 {
        width: 1200px;
        height: 525.803px;
        top: 753.9px;
        left: 0px;
      }

      #HEADLINE94 {
        top: 785.9px;
        left: 236.5px;
      }

      #IMAGE100,
      #IMAGE100>.ladi-image>.ladi-image-background {
        width: 399.237px;
        height: 1017.08px;
      }

      #IMAGE100 {
        top: 1630.14px;
        left: -265.312px;
      }

      #GROUP188 {
        width: 603.528px;
        height: 266px;
        top: 915.9px;
        left: 285.5px;
      }

      #LINE8 {
        top: 0px;
        left: 299px;
      }

      #LINE9 {
        left: 586.528px;
      }

      #HEADLINE104 {
        top: 1705.4px;
        left: 2.341px;
      }

      #HEADLINE104>.ladi-headline,
      #HEADLINE103>.ladi-headline {
        font-size: 22px;
      }

      #IMAGE107 {
        top: 1679.4px;
        left: 402px;
      }

      #GROUP189 {
        width: 1111px;
        height: 430px;
        top: 2105.4px;
        left: 44.5px;
      }

      #HEADLINE112 {
        left: 790.368px;
      }

      #HEADLINE112>.ladi-headline {
        font-size: 16px;
        text-align: left;
      }

      #PARAGRAPH6,
      #PARAGRAPH7 {
        width: 1111px;
      }

      #PARAGRAPH6 {
        top: 95px;
      }

      #PARAGRAPH7 {
        top: 418px;
      }

      #IMAGE116,
      #IMAGE116>.ladi-image>.ladi-image-background {
        width: 502.541px;
        height: 710.937px;
      }

      #IMAGE116 {
        top: 1936.28px;
        left: 960px;
      }

      #IMAGE116>.ladi-image>.ladi-image-background {
        background-image: url("images/img20.webp");
      }

      #GROUP143,
      #GROUP142 {
        width: 1043px;
        height: 64.25px;
      }

      #GROUP143 {
        top: 2023.9px;
        left: 78.5px;
      }

      #BOX76 {
        top: 4.25px;
        left: 713px;
      }

      #FORM2 {
        width: 1038px;
        height: 60.5px;
      }

      #BUTTON8 {
        top: 0px;
        left: 708px;
      }

      #FORM_ITEM4 {
        top: 0.5px;
        left: 347px;
      }

      #IMAGE114 {
        top: 20.13px;
        left: 998.5px;
      }

      #GROUP128,
      #GROUP131 {
        width: 248.028px;
        height: 226.5px;
      }

      #GROUP128 {
        top: 915.9px;
        left: 22px;
      }

      #HEADLINE95,
      #HEADLINE101,
      #HEADLINE97,
      #HEADLINE99 {
        top: 96.5px;
        left: 5.028px;
      }

      #HEADLINE96,
      #HEADLINE98,
      #HEADLINE100 {
        width: 243px;
      }

      #HEADLINE96 {
        top: 168.5px;
      }

      #GROUP133 {
        width: 248.028px;
        height: 197.5px;
        top: 915.9px;
        left: 922px;
      }

      #HEADLINE102,
      #HEADLINE98,
      #HEADLINE100 {
        top: 168.5px;
        left: 5.028px;
      }

      #GROUP129 {
        width: 248.028px;
        height: 254.5px;
        top: 915.9px;
        left: 324px;
      }

      #GROUP131 {
        top: 915.9px;
        left: 624px;
      }

      #GROUP185 {
        width: 491.22px;
        height: 435.821px;
        top: 1431.18px;
        left: 658px;
      }

      #IMAGE108,
      #IMAGE108>.ladi-image>.ladi-image-background {
        width: 250px;
        height: 402.211px;
      }

      #IMAGE108 {
        top: 33.61px;
      }

      #GROUP139 {
        left: 354.22px;
      }

      #HEADLINE103 {
        top: 1499.9px;
        left: 0px;
      }

      #IMAGE106,
      #IMAGE106>.ladi-image>.ladi-image-background {
        width: 570.375px;
        height: 91.353px;
      }

      #IMAGE106 {
        top: 1548.9px;
        left: 0px;
      }

      #HEADLINE111 {
        top: 1847.64px;
        left: 70.925px;
      }

      #GROUP190 {
        top: 1840.64px;
        left: 211.688px;
      }

      #POPUP2 {
        width: 936px;
        height: 535px;
      }

      #IMAGE137,
      #IMAGE137>.ladi-image>.ladi-image-background {
        width: 338.384px;
        height: 303.211px;
      }

      #IMAGE137 {
        top: 149.894px;
        left: 55px;
      }

      #IMAGE137>.ladi-image>.ladi-image-background {
        background-image: url("images/img24.webp");
      }

      #GROUP167,
      #IMAGE138,
      #IMAGE138>.ladi-image>.ladi-image-background {
        width: 110.769px;
        height: 110px;
      }

      #GROUP167 {
        top: 98px;
        left: 327px;
      }

      #HEADLINE126 {
        top: 29.5px;
      }

      #HEADLINE126>.ladi-headline {
        font-size: 32px;
      }

      #HEADLINE127 {
        width: 391px;
        top: 39.372px;
        left: 477px;
      }

      #HEADLINE127>.ladi-headline {
        font-size: 24px;
      }

      #IMAGE136,
      #IMAGE136>.ladi-image>.ladi-image-background {
        width: 725.546px;
        height: 436.256px;
      }

      #IMAGE136 {
        top: 70.372px;
        left: -71px;
      }

      #GROUP180 {
        width: 398px;
        height: 81px;
        top: 129.894px;
        left: 483px;
      }

      #HEADLINE128 {
        width: 200px;
        top: 20px;
      }

      #HEADLINE129 {
        top: 20px;
        left: 200px;
      }

      #HEADLINE130 {
        top: 48px;
        left: 281px;
      }

      #HEADLINE130>.ladi-headline {
        font-size: 33px;
      }

      #HEADLINE131 {
        top: 0px;
        left: 281px;
      }

      #HEADLINE131>.ladi-headline {
        font-size: 20px;
      }

      #HEADLINE132 {
        width: 102px;
        left: 296px;
      }

      #GROUP168,
      #FORM3,
      #FORM_ITEM6,
      #FORM_ITEM8 {
        width: 385px;
      }

      #GROUP168 {
        top: 242.105px;
        left: 477px;
      }

      #BOX100,
      #BUTTON9,
      #BUTTON_TEXT9 {
        width: 379px;
      }

      #BOX100 {
        left: 5px;
      }

      #IMAGE139 {
        width: 29px;
        left: 330.5px;
      }
    }

    @media (max-width: 767px) {
      #SECTION1 {
        height: 4489.15px;
      }

      #IMAGE41 {
        top: 2304.65px;
        left: 626.844px;
      }

      #IMAGE1,
      #IMAGE1>.ladi-image>.ladi-image-background {
        width: 400px;
        height: 430.418px;
      }

      #IMAGE1 {
        top: 83px;
        left: 599px;
      }

      #IMAGE1,
      #GROUP1,
      #SECTION7 {
        display: none !important;
      }

      #IMAGE1>.ladi-image>.ladi-image-background {
        background-image: url("images/img14.webp");
      }

      #GROUP1 {
        top: 229.418px;
        left: 511px;
      }

      #GROUP11 {
        width: 320.629px;
        height: 77.353px;
        top: 12.418px;
        left: 11.6145px;
      }

      #HEADLINE7>.ladi-headline,
      #PARAGRAPH1>.ladi-paragraph,
      #HEADLINE53>.ladi-headline,
      #PARAGRAPH5>.ladi-paragraph {
        font-size: 14px;
      }

      #IMAGE3,
      #IMAGE3>.ladi-image>.ladi-image-background {
        width: 320.629px;
        height: 51.353px;
      }

      #HEADLINE8 {
        top: 110.271px;
        left: 28px;
      }

      #HEADLINE8>.ladi-headline {
        font-size: 16px;
        text-align: center;
      }

      #IMAGE4 {
        top: 581.271px;
        left: 756px;
      }

      #GROUP9 {
        height: 198.5px;
        top: 165.771px;
        left: 49px;
      }

      #GROUP4 {
        top: 79.25px;
      }

      #HEADLINE10>.ladi-headline,
      #HEADLINE9>.ladi-headline,
      #HEADLINE11>.ladi-headline,
      #HEADLINE52>.ladi-headline,
      #HEADLINE67>.ladi-headline,
      #HEADLINE68>.ladi-headline,
      #HEADLINE69>.ladi-headline,
      #HEADLINE70>.ladi-headline,
      #HEADLINE85>.ladi-headline,
      #HEADLINE127>.ladi-headline {
        font-size: 16px;
      }

      #GROUP8 {
        height: 58px;
      }

      #GROUP2 {
        top: 7px;
      }

      #GROUP6 {
        top: 155.5px;
      }

      #GROUP13 {
        top: 976.17px;
        left: 67.5px;
      }

      #IMAGE14,
      #IMAGE14>.ladi-image>.ladi-image-background {
        width: 400px;
        height: 405.657px;
      }

      #IMAGE14 {
        top: 422.17px;
        left: -607px;
      }

      #IMAGE14>.ladi-image>.ladi-image-background {
        background-image: url("images/img15.webp");
      }

      #BOX5 {
        width: 400px;
        height: 1908.74px;
        top: 1073.83px;
        left: 10px;
      }

      #IMAGE8,
      #IMAGE8>.ladi-image>.ladi-image-background {
        width: 170px;
        height: 255.423px;
      }

      #IMAGE8 {
        top: 433.747px;
        left: 42px;
      }

      #IMAGE8>.ladi-image>.ladi-image-background {
        background-image: url("images/img24.webp");
      }

      #GROUP10 {
        height: 100.476px;
        top: 382.942px;
        left: 251.589px;
      }

      #IMAGE9,
      #IMAGE9>.ladi-image>.ladi-image-background {
        width: 101.178px;
        height: 100.476px;
      }

      #IMAGE9 {
        left: 17.911px;
      }

      #HEADLINE13,
      #HEADLINE54 {
        top: 26.238px;
      }

      #HEADLINE13>.ladi-headline {
        font-size: 30px;
      }

      #HEADLINE20,
      #GROUP110 {
        width: 309px;
      }

      #HEADLINE20 {
        top: 1092.83px;
        left: 55.5px;
      }

      #HEADLINE20>.ladi-headline,
      #HEADLINE77>.ladi-headline,
      #HEADLINE130>.ladi-headline {
        font-size: 20px;
      }

      #GROUP41 {
        top: 1823.95px;
        left: 83.412px;
      }

      #GROUP172 {
        width: 257.588px;
        height: 659.121px;
        top: 1146.83px;
        left: 81.206px;
      }

      #GROUP16,
      #GROUP50 {
        top: 214.707px;
        left: 2.206px;
      }

      #GROUP26,
      #LINE9 {
        left: 0px;
      }

      #GROUP44 {
        top: 429.414px;
        left: 2.206px;
      }

      #GROUP173 {
        width: 257.588px;
        height: 898.828px;
        top: 2047.32px;
        left: 83.412px;
      }

      #GROUP35 {
        top: 454.414px;
      }

      #GROUP38 {
        top: 694.121px;
        left: 0px;
      }

      #GROUP47 {
        top: 0px;
        left: 2.206px;
      }

      #IMAGE42,
      #IMAGE42>.ladi-image>.ladi-image-background {
        width: 400px;
        height: 98.7493px;
      }

      #IMAGE42 {
        top: 3626.57px;
        left: -456px;
      }

      #HEADLINE34,
      #HEADLINE38,
      #LINE4,
      #HEADLINE61,
      #HEADLINE62,
      #HEADLINE66,
      #GROUP95,
      #GROUP94,
      #HEADLINE86,
      #HEADLINE87,
      #PARAGRAPH6,
      #PARAGRAPH7 {
        width: 400px;
      }

      #HEADLINE34 {
        top: 3028.57px;
        left: 10px;
      }

      #HEADLINE34>.ladi-headline,
      #HEADLINE38>.ladi-headline,
      #HEADLINE54>.ladi-headline,
      #HEADLINE61>.ladi-headline,
      #HEADLINE66>.ladi-headline,
      #HEADLINE71>.ladi-headline,
      #HEADLINE94>.ladi-headline {
        font-size: 24px;
      }

      #GROUP61 {
        top: 4006.32px;
        left: 30.5px;
      }

      #GROUP170 {
        width: 284.589px;
        top: 711.17px;
        left: 67.7055px;
      }

      #IMAGE11 {
        left: 92.668px;
      }

      #IMAGE12 {
        left: 209.589px;
      }

      #HEADLINE12 {
        width: 205px;
        top: 817.17px;
        left: 107.5px;
      }

      #GROUP171,
      #GROUP192 {
        width: 158px;
        height: 70px;
      }

      #GROUP171 {
        top: 857.17px;
        left: 144px;
      }

      #HEADLINE16,
      #HEADLINE141 {
        width: 76px;
        top: 41px;
        left: 82px;
      }

      #HEADLINE16>.ladi-headline,
      #HEADLINE141>.ladi-headline {
        font-size: 31px;
      }

      #HEADLINE17,
      #HEADLINE142 {
        width: 116px;
        top: 5px;
      }

      #HEADLINE18,
      #HEADLINE143,
      #HEADLINE138,
      #HEADLINE134,
      #HEADLINE135 {
        top: 0px;
      }

      #HEADLINE18>.ladi-headline,
      #HEADLINE19>.ladi-headline,
      #HEADLINE143>.ladi-headline,
      #HEADLINE144>.ladi-headline,
      #HEADLINE140>.ladi-headline,
      #HEADLINE103>.ladi-headline,
      #HEADLINE136>.ladi-headline,
      #HEADLINE131>.ladi-headline {
        font-size: 18px;
      }

      #HEADLINE19,
      #HEADLINE144 {
        width: 37px;
        left: 111px;
      }

      #GROUP57 {
        top: 3104.57px;
        left: 30.5px;
      }

      #GROUP58 {
        top: 3554.57px;
        left: 30.5px;
      }

      #SECTION2 {
        height: 916.98px;
      }

      #IMAGE46,
      #IMAGE46>.ladi-image>.ladi-image-background,
      #IMAGE94,
      #IMAGE94>.ladi-image>.ladi-image-background {
        width: 400px;
        height: 348.796px;
      }

      #IMAGE46 {
        top: 43px;
        left: -598px;
      }

      #HEADLINE38 {
        top: 22.796px;
        left: 10px;
      }

      #IMAGE47,
      #IMAGE47>.ladi-image>.ladi-image-background {
        width: 400px;
        height: 359.184px;
      }

      #IMAGE47 {
        top: 398.796px;
        left: -659px;
      }

      #GROUP65 {
        top: 107.796px;
        left: 62.375px;
      }

      #GROUP176 {
        width: 295.25px;
        height: 238px;
        top: 607.98px;
        left: 62.375px;
      }

      #GROUP70 {
        top: 124px;
      }

      #GROUP72 {
        top: 0px;
        left: 0px;
      }

      #GROUP175 {
        width: 295.25px;
        height: 362px;
        top: 233.49px;
        left: 62.375px;
      }

      #GROUP68 {
        top: 124px;
        left: 0px;
      }

      #GROUP74 {
        top: 248px;
        left: 0px;
      }

      #HEADLINE51 {
        width: 446px;
        top: 884.98px;
        left: -8px;
      }

      #HEADLINE51>.ladi-headline {
        font-size: 20px;
        line-height: 1.4;
        text-align: center;
      }

      #SECTION3 {
        height: 1199.15px;
      }

      #IMAGE56 {
        top: -416.794px;
        left: 648.17px;
      }

      #LINE4 {
        top: 1176.15px;
        left: 9.9995px;
      }

      #BOX45 {
        width: 409px;
        height: 381.803px;
        top: 8.8px;
        left: 5.5px;
      }

      #IMAGE54 {
        top: -273px;
        left: 897px;
      }

      #GROUP177 {
        width: 389.25px;
        height: 321.608px;
        top: 36.603px;
        left: 23px;
      }

      #PARAGRAPH1 {
        width: 381px;
      }

      #IMAGE55 {
        top: 277.608px;
        left: 0px;
      }

      #HEADLINE52 {
        top: 270.608px;
        left: 57.25px;
      }

      #HEADLINE53,
      #GROUP109 {
        width: 332px;
      }

      #HEADLINE53 {
        top: 299.608px;
        left: 57.25px;
      }

      #GROUP78 {
        top: 1074.35px;
        left: 67.5px;
      }

      #IMAGE58 {
        top: 503.603px;
        left: 57.659px;
      }

      #GROUP80 {
        height: 90.476px;
        top: 457.61px;
        left: 208.774px;
      }

      #IMAGE59,
      #IMAGE59>.ladi-image>.ladi-image-background {
        width: 91.1083px;
        height: 90.476px;
      }

      #IMAGE59 {
        left: 22.9459px;
      }

      #LINE2 {
        top: 844.086px;
        left: -545.841px;
      }

      #HEADLINE55 {
        top: 422.848px;
        left: 25px;
      }

      #HEADLINE55>.ladi-headline {
        font-size: 26px;
        text-align: center;
      }

      #HEADLINE56 {
        width: 243px;
        top: 914.348px;
        left: 88.5px;
      }

      #HEADLINE56>.ladi-headline,
      #HEADLINE83>.ladi-headline,
      #HEADLINE111>.ladi-headline {
        text-align: center;
      }

      #GROUP178 {
        top: 809.586px;
        left: 115.579px;
      }

      #GROUP192 {
        top: 968.04px;
        left: 131px;
      }

      #SECTION4 {
        height: 1677.13px;
      }

      #HEADLINE61,
      #HEADLINE86,
      #HEADLINE87 {
        top: 10px;
        left: 10px;
      }

      #HEADLINE62 {
        top: 109px;
        left: 10px;
      }

      #GROUP87 {
        top: 209px;
        left: 54.92px;
      }

      #GROUP88 {
        top: 695.09px;
        left: 54.9205px;
      }

      #GROUP91 {
        top: 1187.05px;
        left: 54.9205px;
      }

      #SECTION5 {
        height: 2344.26px;
      }

      #HEADLINE66 {
        top: 25px;
        left: 10px;
      }

      #IMAGE68,
      #IMAGE68>.ladi-image>.ladi-image-background {
        width: 400px;
        height: 143.125px;
      }

      #IMAGE68 {
        top: 1136.61px;
        left: 564px;
      }

      #GROUP108,
      #GROUP96 {
        width: 400px;
        height: 666.606px;
      }

      #GROUP108 {
        top: 117px;
        left: 10px;
      }

      #GROUP95 {
        top: 102.606px;
      }

      #BOX54 {
        width: 390px;
      }

      #BOX53 {
        width: 391px;
      }

      #IMAGE70 {
        left: 148.034px;
      }

      #IMAGE71,
      #IMAGE71>.ladi-image>.ladi-image-background {
        width: 160px;
        height: 206.211px;
      }

      #IMAGE71 {
        left: 90.688px;
      }

      #IMAGE71>.ladi-image>.ladi-image-background {
        background-image: url("images/img24.webp");
      }

      #GROUP99 {
        width: 364px;
        height: 70px;
        top: 260.606px;
      }

      #HEADLINE67,
      #HEADLINE75 {
        width: 290px;
      }

      #GROUP100 {
        width: 353px;
        height: 65.5px;
        top: 355.606px;
      }

      #HEADLINE68 {
        width: 279px;
      }

      #GROUP102 {
        width: 367px;
        height: 79px;
        top: 453.606px;
      }

      #HEADLINE69 {
        width: 293px;
      }

      #GROUP104 {
        width: 342.024px;
        height: 60.5px;
        top: 556.606px;
      }

      #GROUP105,
      #BOX59 {
        width: 55.2615px;
      }

      #IMAGE76 {
        width: 32.8937px;
        left: 11.1838px;
      }

      #HEADLINE70 {
        width: 269px;
        left: 73.0241px;
      }

      #GROUP181,
      #GROUP107 {
        width: 395px;
      }

      #GROUP181 {
        top: 822.606px;
        left: 10px;
      }

      #BOX60 {
        width: 385px;
      }

      #BOX61 {
        width: 384px;
      }

      #HEADLINE71 {
        top: 31.5px;
        left: 44px;
      }

      #HEADLINE72 {
        width: 301px;
      }

      #IMAGE80 {
        width: 13.5px;
      }

      #HEADLINE73 {
        width: 286px;
        left: 22.9953px;
      }

      #GROUP112 {
        width: 313px;
      }

      #IMAGE82 {
        width: 13.6748px;
      }

      #HEADLINE75 {
        left: 23.293px;
      }

      #GROUP113 {
        width: 313px;
        height: 76px;
      }

      #HEADLINE76 {
        width: 281px;
      }

      #IMAGE85 {
        top: 1497.67px;
        left: 55.159px;
      }

      #GROUP118 {
        height: 86.6895px;
        top: 1449.73px;
        left: 213.66px;
      }

      #IMAGE86,
      #IMAGE86>.ladi-image>.ladi-image-background {
        width: 87.2955px;
        height: 86.6895px;
      }

      #IMAGE86 {
        left: 24.8522px;
      }

      #HEADLINE77 {
        top: 27.3448px;
      }

      #LINE6 {
        top: 1790.21px;
        left: 728.159px;
      }

      #HEADLINE82 {
        top: 1417.97px;
        left: 22.5px;
      }

      #HEADLINE82>.ladi-headline,
      #HEADLINE84>.ladi-headline {
        font-size: 24px;
        text-align: center;
      }

      #HEADLINE83,
      #HEADLINE85 {
        width: 262px;
      }

      #HEADLINE83 {
        top: 2001.47px;
        left: 76.5px;
      }

      #IMAGE87 {
        top: 1795.47px;
        left: 109.078px;
      }

      #IMAGE88 {
        top: 1901.47px;
        left: 209.919px;
      }

      #GROUP116 {
        top: 2169.47px;
        left: 67.5px;
      }

      #GROUP191 {
        width: 166.083px;
        height: 90.7275px;
        top: 2053.47px;
        left: 121px;
      }

      #HEADLINE137 {
        width: 72px;
        top: 44.7275px;
        left: 75.3333px;
      }

      #HEADLINE137>.ladi-headline {
        font-size: 29px;
      }

      #HEADLINE138 {
        width: 79px;
      }

      #HEADLINE138>.ladi-headline,
      #HEADLINE134>.ladi-headline {
        font-size: 44px;
      }

      #HEADLINE139 {
        width: 69px;
        top: 4.56409px;
        left: 88.8333px;
      }

      #HEADLINE139>.ladi-headline,
      #HEADLINE135>.ladi-headline {
        font-size: 19px;
      }

      #HEADLINE140 {
        width: 53px;
        top: 4.56409px;
        left: 113.083px;
      }

      #SECTION6 {
        height: 750.43px;
      }

      #IMAGE89 {
        top: 16px;
        left: 789.558px;
      }

      #IMAGE90 {
        top: 98.493px;
        left: -578.507px;
      }

      #BOX63 {
        width: 400px;
        height: 695.601px;
        top: 16px;
        left: 7.5px;
      }

      #IMAGE91,
      #IMAGE91>.ladi-image>.ladi-image-background {
        width: 84px;
        height: 84px;
      }

      #IMAGE91 {
        top: 121.498px;
        left: 17.5px;
      }

      #IMAGE91>.ladi-image>.ladi-image-background {
        background-image: url("images/img35.webp");
      }

      #IMAGE92 {
        top: 281.498px;
        left: 684.5px;
      }

      #HEADLINE84,
      #HEADLINE100 {
        width: 346px;
      }

      #HEADLINE84 {
        top: 38.498px;
        left: 37px;
      }

      #HEADLINE85 {
        top: 134.498px;
        left: 121px;
      }

      #PARAGRAPH5 {
        width: 370px;
        top: 222.43px;
        left: 24px;
      }

      #SECTION7 {
        height: 5324.79px;
      }

      #HEADLINE86>.ladi-headline,
      #HEADLINE87>.ladi-headline,
      #HEADLINE133>.ladi-headline {
        font-size: 28px;
      }

      #IMAGE93,
      #IMAGE93>.ladi-image>.ladi-image-background {
        width: 400px;
        height: 59.7919px;
      }

      #IMAGE93 {
        top: 1148px;
        left: 587px;
      }

      #GROUP152 {
        top: 1892.79px;
        left: 42.5px;
      }

      #GROUP154 {
        top: 71px;
        left: 40px;
      }

      #GROUP157 {
        top: 671px;
        left: 42.5px;
      }

      #GROUP159 {
        top: 4712.79px;
        left: 42.5px;
      }

      #GROUP161 {
        top: 1266.79px;
        left: 42.5px;
      }

      #GROUP163 {
        top: 4091.79px;
        left: 42.5px;
      }

      #GROUP165 {
        top: 3474.79px;
        left: 42.5px;
      }

      #GROUP148 {
        top: 2423.79px;
        left: 42.5px;
      }

      #GROUP150 {
        top: 2953.79px;
        left: 42.5px;
      }

      #SECTION8 {
        height: 3026.44px;
      }

      #IMAGE101,
      #IMAGE101>.ladi-image>.ladi-image-background {
        width: 400px;
        height: 471.951px;
      }

      #IMAGE101 {
        top: 2320.04px;
        left: 651px;
      }

      #IMAGE94 {
        top: 48px;
        left: 657px;
      }

      #IMAGE95,
      #IMAGE95>.ladi-image>.ladi-image-background {
        width: 237px;
        height: 304.423px;
      }

      #IMAGE95 {
        top: 497.796px;
        left: 41.632px;
      }

      #IMAGE95>.ladi-image>.ladi-image-background {
        background-image: url("images/img24.webp");
      }

      #GROUP122,
      #GROUP123 {
        width: 406px;
      }

      #GROUP122 {
        top: 77.796px;
        left: 14px;
      }

      #GROUP121 {
        width: 392px;
      }

      #BOX65,
      #BOX64 {
        width: 384.551px;
      }

      #BOX65 {
        left: 7.44893px;
      }

      #GROUP123 {
        top: 207.219px;
        left: 14px;
      }

      #GROUP124 {
        width: 394px;
      }

      #BOX66,
      #BOX67 {
        width: 386.513px;
      }

      #BOX66 {
        left: 7.48694px;
      }

      #GROUP125,
      #GROUP126 {
        width: 395px;
        height: 126px;
      }

      #GROUP125 {
        top: 338.219px;
        left: 14px;
      }

      #BOX68,
      #BOX69 {
        width: 387.494px;
        height: 115.965px;
      }

      #BOX68 {
        top: 10.0354px;
        left: 7.50594px;
      }

      #HEADLINE93 {
        width: 276px;
      }

      #IMAGE99,
      #IMAGE99>.ladi-image>.ladi-image-background {
        width: 400px;
        height: 686.551px;
      }

      #IMAGE99 {
        top: 89.219px;
        left: -631px;
      }

      #IMAGE99>.ladi-image>.ladi-image-background {
        background-image: url("images/img19.webp");
      }

      #BOX70 {
        width: 400px;
        height: 774.268px;
        top: 825.77px;
        left: 10px;
      }

      #HEADLINE94 {
        width: 303px;
        top: 847.04px;
        left: 60px;
      }

      #IMAGE100,
      #IMAGE100>.ladi-image>.ladi-image-background {
        width: 206.111px;
        height: 525.08px;
      }

      #IMAGE100 {
        top: 2240.24px;
        left: 873.381px;
      }

      #GROUP188 {
        width: 17px;
        height: 818px;
        top: 1891.99px;
        left: 788.5px;
      }

      #LINE7 {
        top: 552px;
      }

      #LINE8 {
        top: 276px;
        left: 0px;
      }

      #HEADLINE104 {
        top: 1733.32px;
        left: 25.243px;
      }

      #HEADLINE104>.ladi-headline {
        font-size: 17px;
      }

      #IMAGE107 {
        top: 1874.32px;
        left: -522.439px;
      }

      #GROUP189 {
        width: 400px;
        height: 356.004px;
        top: 2611.72px;
        left: 10px;
      }

      #HEADLINE112 {
        left: 64px;
      }

      #HEADLINE112>.ladi-headline {
        font-size: 13px;
        text-align: center;
      }

      #PARAGRAPH6 {
        top: 61.0039px;
      }

      #PARAGRAPH6>.ladi-paragraph,
      #PARAGRAPH7>.ladi-paragraph {
        font-size: 13px;
      }

      #PARAGRAPH7 {
        top: 301.004px;
      }

      #IMAGE116,
      #IMAGE116>.ladi-image>.ladi-image-background {
        width: 100.993px;
        height: 142.874px;
      }

      #IMAGE116 {
        top: 2384.32px;
        left: 882.381px;
      }

      #IMAGE116>.ladi-image>.ladi-image-background {
        background-image: url("images/img20.webp");
      }

      #GROUP143,
      #GROUP142 {
        width: 334px;
        height: 214.25px;
      }

      #GROUP143 {
        top: 2384.19px;
        left: 43px;
      }

      #BOX76 {
        top: 154.25px;
        left: 4px;
      }

      #FORM2 {
        width: 330px;
        height: 210px;
      }

      #BUTTON8 {
        top: 150px;
        left: 0px;
      }

      #FORM_ITEM4 {
        top: 66.5px;
        left: 0px;
      }

      #IMAGE114 {
        top: 171.13px;
        left: 288.5px;
      }

      #GROUP128 {
        width: 339.028px;
        height: 147.5px;
        top: 901.04px;
        left: 36.986px;
      }

      #HEADLINE95 {
        top: 8px;
        left: 96.028px;
      }

      #HEADLINE96 {
        width: 334px;
        top: 89.5px;
      }

      #GROUP133 {
        width: 342.028px;
        height: 122.5px;
        top: 1417.54px;
        left: 36.986px;
      }

      #HEADLINE101 {
        top: 8px;
        left: 99.028px;
      }

      #HEADLINE102 {
        top: 93.5px;
        left: 0px;
      }

      #GROUP129 {
        width: 347.028px;
        height: 149.5px;
        top: 1075.74px;
        left: 36.986px;
      }

      #HEADLINE97 {
        top: 8px;
        left: 104.028px;
      }

      #HEADLINE98 {
        width: 347px;
        top: 91.5px;
        left: 0px;
      }

      #GROUP131 {
        width: 346.028px;
        height: 126.5px;
        top: 1258.24px;
        left: 36.986px;
      }

      #HEADLINE99 {
        top: 24px;
        left: 103.028px;
      }

      #HEADLINE100 {
        top: 97.5px;
        left: 0px;
      }

      #GROUP185 {
        width: 355.514px;
        height: 358.893px;
        top: 1860.32px;
        left: 56.743px;
      }

      #IMAGE108,
      #IMAGE108>.ladi-image>.ladi-image-background {
        width: 200px;
        height: 275.423px;
      }

      #IMAGE108 {
        top: 83.47px;
      }

      #IMAGE108>.ladi-image>.ladi-image-background {
        background-image: url("images/img24.webp");
      }

      #GROUP139 {
        left: 218.514px;
      }

      #HEADLINE103 {
        top: 1577.99px;
        left: -626px;
      }

      #IMAGE106,
      #IMAGE106>.ladi-image>.ladi-image-background {
        width: 314.386px;
        height: 50.353px;
      }

      #IMAGE106 {
        top: 1653.88px;
        left: 52.807px;
      }

      #HEADLINE111 {
        width: 249px;
        top: 1799.72px;
        left: -42.5px;
      }

      #GROUP190 {
        width: 157px;
        height: 81px;
        top: 1782.32px;
        left: 156px;
      }

      #HEADLINE133,
      #HEADLINE135 {
        width: 75px;
      }

      #HEADLINE133 {
        top: 36px;
        left: 82px;
      }

      #HEADLINE134 {
        width: 78px;
      }

      #HEADLINE136 {
        top: 0.5px;
        left: 119px;
      }

      #POPUP2 {
        width: 414px;
        height: 593px;
      }

      #IMAGE137,
      #IMAGE137>.ladi-image>.ladi-image-background {
        width: 258.473px;
        height: 231.606px;
      }

      #IMAGE137 {
        top: 16.894px;
        left: 16px;
      }

      #IMAGE137>.ladi-image>.ladi-image-background {
        background-image: url("images/img24.webp");
      }

      #GROUP167 {
        width: 104px;
        height: 85px;
        top: 5px;
        left: 219px;
      }

      #IMAGE138,
      #IMAGE138>.ladi-image>.ladi-image-background {
        width: 85.5942px;
        height: 85px;
      }

      #IMAGE138 {
        left: 4px;
      }

      #HEADLINE126 {
        top: 21.5px;
      }

      #HEADLINE126>.ladi-headline {
        font-size: 26px;
      }

      #HEADLINE127 {
        width: 118px;
        top: 95px;
        left: 286px;
      }

      #IMAGE136,
      #IMAGE136>.ladi-image>.ladi-image-background {
        width: 512.667px;
        height: 308.256px;
      }

      #IMAGE136 {
        top: 226.744px;
        left: -63px;
      }

      #GROUP180 {
        width: 375px;
        height: 82px;
        top: 240.5px;
        left: 27.5px;
      }

      #HEADLINE128 {
        width: 153px;
        top: 24px;
      }

      #HEADLINE129 {
        top: 23px;
        left: 173px;
      }

      #HEADLINE130 {
        top: 52px;
        left: 249px;
      }

      #HEADLINE131 {
        top: 6px;
        left: 258px;
      }

      #HEADLINE132 {
        width: 100px;
        left: 275px;
      }

      #GROUP168,
      #FORM3,
      #FORM_ITEM6,
      #FORM_ITEM8 {
        width: 359px;
      }

      #GROUP168 {
        top: 344.105px;
        left: 27.5px;
      }

      #BOX100,
      #BUTTON9 {
        width: 353.405px;
      }

      #BOX100 {
        left: 4.66234px;
      }

      #BUTTON_TEXT9 {
        width: 353px;
      }

      #IMAGE139 {
        width: 27.0416px;
        left: 308.181px;
      }
    }
  </style>
  <style id="style_lazyload" type="text/css">
    body.lazyload .ladi-overlay,
    body.lazyload .ladi-box,
    body.lazyload .ladi-button-background,
    body.lazyload .ladi-collection-item:before,
    body.lazyload .ladi-countdown-background,
    body.lazyload .ladi-form-item-background,
    body.lazyload .ladi-form-label-container .ladi-form-label-item.image,
    body.lazyload .ladi-frame-background,
    body.lazyload .ladi-gallery-view-item,
    body.lazyload .ladi-gallery-control-item,
    body.lazyload .ladi-headline,
    body.lazyload .ladi-image-background,
    body.lazyload .ladi-image-compare,
    body.lazyload .ladi-list-paragraph ul li:before,
    body.lazyload .ladi-section-background,
    body.lazyload .ladi-survey-option-background,
    body.lazyload .ladi-survey-option-image,
    body.lazyload .ladi-tabs-background,
    body.lazyload .ladi-video-background,
    body.lazyload .ladi-banner,
    body.lazyload .ladi-spin-lucky-screen,
    body.lazyload .ladi-spin-lucky-start {
      background-image: none !important;
    }
  </style>
  
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "AW-11189894713", {
      allow_enhanced_conversions: true
    });
  </script>

<?php $cms->header(); ?>
</head>


<body class="lazyload">
  <div class="ladi-wraper">
    <div id="BODY_BACKGROUND" class="ladi-section">
      <div class="ladi-section-background"></div>
    </div>
    <div id="SECTION1" class="ladi-section">
      <div class="ladi-section-background"></div>
      <div class="ladi-container">
        <div id="IMAGE41" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="IMAGE1" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP1" class="ladi-element">
          <div class="ladi-group">
            <div id="IMAGE2" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE3" class="ladi-element">
              <h3 class="ladi-headline">Compoziție<br></h3>
            </div>
            <div id="HEADLINE4" class="ladi-element">
              <h3 class="ladi-headline">Recenzii<br></h3>
            </div>
            <div id="HEADLINE5" class="ladi-element">
              <h3 class="ladi-headline">Cum să luați<br></h3>
            </div>
            <div id="HEADLINE6" class="ladi-element">
              <h3 class="ladi-headline">Cum să comandați<br></h3>
            </div>
          </div>
        </div>
        <div id="GROUP11" class="ladi-element">
          <div class="ladi-group">
            <div id="HEADLINE7" class="ladi-element">
              <h3 class="ladi-headline">PROTECTIVE ADVANCED COMPLEX<br></h3>
            </div>
            <div id="IMAGE3" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
          </div>
        </div>
        <div id="HEADLINE8" class="ladi-element">
          <h3 class="ladi-headline">Un mod natural de a curăța corpul de paraziți<br></h3>
        </div>
        <div id="IMAGE4" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP9" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP4" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP5" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX2" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE6" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="HEADLINE10" class="ladi-element">
                  <h3 class="ladi-headline">Rezistent la reinfecție<br></h3>
                </div>
              </div>
            </div>
            <div id="GROUP8" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP2" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX1" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE5" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="HEADLINE9" class="ladi-element">
                  <h3 class="ladi-headline">Contribuie la eliminarea paraziților și a toxinelor acestora<br></h3>
                </div>
              </div>
            </div>
            <div id="GROUP6" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP7" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX3" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE7" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="HEADLINE11" class="ladi-element">
                  <h3 class="ladi-headline">Ajută la întărirea sistemului imunitar<br></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="GROUP13" class="ladi-element btn-to-form-js">
          <div class="ladi-group">
            <div id="GROUP12" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX4" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div data-action="true" id="BUTTON4" class="ladi-element">
                  <div class="ladi-button ladi-transition">
                    <div class="ladi-button-background"></div>
                    <div id="BUTTON_TEXT4" class="ladi-element ladi-button-headline">
                      <p class="ladi-headline">Comandaţi</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="IMAGE13" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
          </div>
        </div>
        <div id="IMAGE14" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="BOX5" class="ladi-element">
          <div class="ladi-box"></div>
        </div>
        <div id="IMAGE8" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP10" class="ladi-element">
          <div class="ladi-group">
            <div id="IMAGE9" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE13" class="ladi-element">
              <h3 class="ladi-headline">-50%<br></h3>
            </div>
          </div>
        </div>
        <div id="HEADLINE20" class="ladi-element">
          <h3 class="ladi-headline">Atenție! Paraziți sunt în jur<br></h3>
        </div>
        <div id="GROUP41" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP42" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX15" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="IMAGE33" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="GROUP43" class="ladi-element">
              <div class="ladi-group">
                <div id="IMAGE34" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE30" class="ladi-element">
                  <h3 class="ladi-headline">Locuri publice și transport<br></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="GROUP172" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP16" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP14" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX6" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE15" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="GROUP15" class="ladi-element">
                  <div class="ladi-group">
                    <div id="IMAGE16" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                    <div id="HEADLINE21" class="ladi-element">
                      <h3 class="ladi-headline">Carne și pește slab prăjite<br></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="GROUP26" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP27" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX10" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE23" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="GROUP28" class="ladi-element">
                  <div class="ladi-group">
                    <div id="IMAGE24" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                    <div id="HEADLINE25" class="ladi-element">
                      <h3 class="ladi-headline">Fructe și legume slab spălate<br></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="GROUP44" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP45" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX16" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE35" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="GROUP46" class="ladi-element">
                  <div class="ladi-group">
                    <div id="IMAGE36" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                    <div id="HEADLINE31" class="ladi-element">
                      <h3 class="ladi-headline">Fast food, alimentație publica, "Street food"<br></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="GROUP173" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP35" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP36" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX13" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE29" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="GROUP37" class="ladi-element">
                  <div class="ladi-group">
                    <div id="IMAGE30" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                    <div id="HEADLINE28" class="ladi-element">
                      <h3 class="ladi-headline">Animale de companie și de fermă<br></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="GROUP38" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP39" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX14" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE31" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="GROUP40" class="ladi-element">
                  <div class="ladi-group">
                    <div id="IMAGE32" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                    <div id="HEADLINE29" class="ladi-element">
                      <h3 class="ladi-headline">Mușcături de insecte<br></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="GROUP47" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP48" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX17" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE37" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="GROUP49" class="ladi-element">
                  <div class="ladi-group">
                    <div id="IMAGE38" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                    <div id="HEADLINE32" class="ladi-element">
                      <h3 class="ladi-headline">Apă sau sol poluat<br></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="GROUP50" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP51" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX18" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE39" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="GROUP52" class="ladi-element">
                  <div class="ladi-group">
                    <div id="IMAGE40" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                    <div id="HEADLINE33" class="ladi-element">
                      <h3 class="ladi-headline">Contacte cu persoane infectate<br></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="IMAGE42" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="HEADLINE34" class="ladi-element">
          <h3 class="ladi-headline">Paraziții pot provoca complicații
            <br>grave!<br>
          </h3>
        </div>
        <div id="GROUP61" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP62" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX29" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX30" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="GROUP63" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX31" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="IMAGE45" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="HEADLINE37" class="ladi-element">
              <h3 class="ladi-headline">49% din complicații sunt cauzate de helminți<br></h3>
            </div>
            <div id="LIST_PARAGRAPH3" class="ladi-element">
              <div class="ladi-list-paragraph">
                <ul>
                  <li>Acestea afectează creierul, provocând miasis
                  </li>
                  <li>Provoca scabie, dermatită, trombidioză
                  </li>
                  <li>Provoca tulburări grave în activitatea organelor vizuale
                  </li>
                  <li>Activează bolile de inimă, contribuie la accidente vasculare cerebrale</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="GROUP170" class="ladi-element">
          <div class="ladi-group">
            <div id="IMAGE10" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="IMAGE11" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="IMAGE12" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
          </div>
        </div>
        <div id="HEADLINE12" class="ladi-element">
          <h3 class="ladi-headline">Doar azi<br></h3>
        </div>
        <div id="GROUP171" class="ladi-element">
          <div class="ladi-group">
            <div id="HEADLINE16" class="ladi-element">
              <h3 class="ladi-headline">RON<br></h3>
            </div>
            <div id="HEADLINE17" class="ladi-element">
              <h3 class="ladi-headline">149<br></h3>
            </div>
            <div id="HEADLINE18" class="ladi-element">
              <h3 class="ladi-headline">298<br></h3>
            </div>
            <div id="HEADLINE19" class="ladi-element">
              <h3 class="ladi-headline">ron<br></h3>
            </div>
          </div>
        </div>
        <div id="GROUP57" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP53" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX20" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX19" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="GROUP56" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX25" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="IMAGE43" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="HEADLINE35" class="ladi-element">
              <h3 class="ladi-headline">În timp ce paraziții sunt înăuntru, ei:<br></h3>
            </div>
            <div id="LIST_PARAGRAPH1" class="ladi-element">
              <div class="ladi-list-paragraph">
                <ul>
                  <li>Reduc imunitatea
                  </li>
                  <li>Provoacă alergii
                  </li>
                  <li>Afectează negativ sistemul nervos</li>
                  <li>Absorb vitaminele
                  </li>
                  <li>Stimulează apariția neoplasmelor</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="GROUP58" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP59" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX26" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX27" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="GROUP60" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX28" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="IMAGE44" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="HEADLINE36" class="ladi-element">
              <h3 class="ladi-headline">Larvele și ouăle se dezvoltă activ în interior:<br></h3>
            </div>
            <div id="LIST_PARAGRAPH2" class="ladi-element">
              <div class="ladi-list-paragraph">
                <ul>
                  <li>Paraziții depun de la 245.000 de ouă pe zi
                  </li>
                  <li>Ele cresc până la 40 cm
                  </li>
                  <li>Pătrund în interiorul organelor și le distrug</li>
                  <li>În fiecare zi otrăvesc organismul cu otrăvuri și toxine</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="SECTION2" class="ladi-section">
      <div class="ladi-section-background"></div>
      <div class="ladi-container">
        <div id="IMAGE46" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="HEADLINE38" class="ladi-element">
          <h3 class="ladi-headline">Farmacin - produs antiparazitar
            <br>de acțiune complexă<br>
          </h3>
        </div>
        <div id="IMAGE47" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP65" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP64" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX33" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX32" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="IMAGE48" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE39" class="ladi-element">
              <h3 class="ladi-headline">Ajută la distrugerea<br></h3>
            </div>
            <div id="HEADLINE40" class="ladi-element">
              <h3 class="ladi-headline">majorității tipurilor de paraziți<br></h3>
            </div>
          </div>
        </div>
        <div id="GROUP176" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP70" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP71" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX38" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="BOX39" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                  </div>
                </div>
                <div id="IMAGE51" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE45" class="ladi-element">
                  <h3 class="ladi-headline">Contribuie la reducerea<br></h3>
                </div>
                <div id="HEADLINE46" class="ladi-element">
                  <h3 class="ladi-headline">intoxicației în cazuri de helminthiasis<br></h3>
                </div>
              </div>
            </div>
            <div id="GROUP72" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP73" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX40" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="BOX41" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                  </div>
                </div>
                <div id="IMAGE52" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE47" class="ladi-element">
                  <h3 class="ladi-headline">Reduce numărul de<br></h3>
                </div>
                <div id="HEADLINE48" class="ladi-element">
                  <h3 class="ladi-headline">reinfectare<br></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="GROUP175" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP66" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP67" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX34" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="BOX35" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                  </div>
                </div>
                <div id="IMAGE49" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE41" class="ladi-element">
                  <h3 class="ladi-headline">Contribuie la îmbunătățirea<br></h3>
                </div>
                <div id="HEADLINE42" class="ladi-element">
                  <h3 class="ladi-headline">funcției tractului digestiv și stabilizează apetitul<br></h3>
                </div>
              </div>
            </div>
            <div id="GROUP68" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP69" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX36" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="BOX37" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                  </div>
                </div>
                <div id="IMAGE50" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE43" class="ladi-element">
                  <h3 class="ladi-headline">Permite să restaurați<br></h3>
                </div>
                <div id="HEADLINE44" class="ladi-element">
                  <h3 class="ladi-headline">mucoasa intestinală deteriorată<br></h3>
                </div>
              </div>
            </div>
            <div id="GROUP74" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP75" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX42" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="BOX43" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                  </div>
                </div>
                <div id="IMAGE53" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE49" class="ladi-element">
                  <h3 class="ladi-headline">Sprijină consolidarea<br></h3>
                </div>
                <div id="HEADLINE50" class="ladi-element">
                  <h3 class="ladi-headline">sistemului imunitar<br></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="HEADLINE51" class="ladi-element">
          <h3 class="ladi-headline">Opinia experților despre Farmacin:<br></h3>
        </div>
      </div>
    </div>
    <div id="SECTION3" class="ladi-section">
      <div class="ladi-section-background"></div>
      <div class="ladi-container">
        <div id="IMAGE56" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="LINE4" class="ladi-element">
          <div class="ladi-line">
            <div class="ladi-line-container"></div>
          </div>
        </div>
        <div id="BOX45" class="ladi-element">
          <div class="ladi-box"></div>
        </div>
        <div id="IMAGE54" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP177" class="ladi-element">
          <div class="ladi-group">
            <div id="PARAGRAPH1" class="ladi-element">
              <div class="ladi-paragraph">Este necesar să scăpați urgent de paraziți! Dacă nu controlați acest proces în timp, atunci numărul lor doar va crește, otrăvindu-vă organismul și provocând consecințe periculoase.
                <br>
                <br>Cred că Farmacin este cel mai bine face față acestei probleme. Produsul conține extracte de usturoi, seminte de dovleac și papaya, rădăcină de păpădie și ghimbir. Aceste componente nu numai că ajută la îndepărtarea în siguranță a paraziților, a larvelor lor, a deșeurilor, dar și la recuperarea organismului după ei.<br>
              </div>
            </div>
            <div id="IMAGE55" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE52" class="ladi-element">
              <h3 class="ladi-headline">Victor Peeters<br></h3>
            </div>
            <div id="HEADLINE53" class="ladi-element">
              <h3 class="ladi-headline">specialist în domeniul problemelor infecțioase<br></h3>
            </div>
          </div>
        </div>
        <div id="GROUP78" class="ladi-element btn-to-form-js">
          <div class="ladi-group">
            <div id="GROUP79" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX46" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div data-action="true" id="BUTTON5" class="ladi-element">
                  <div class="ladi-button ladi-transition">
                    <div class="ladi-button-background"></div>
                    <div id="BUTTON_TEXT5" class="ladi-element ladi-button-headline">
                      <p class="ladi-headline">Comandaţi</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="IMAGE57" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
          </div>
        </div>
        <div id="IMAGE58" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP80" class="ladi-element">
          <div class="ladi-group">
            <div id="IMAGE59" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE54" class="ladi-element">
              <h3 class="ladi-headline">-50%<br></h3>
            </div>
          </div>
        </div>
        <div id="LINE2" class="ladi-element">
          <div class="ladi-line">
            <div class="ladi-line-container"></div>
          </div>
        </div>
        <div id="HEADLINE55" class="ladi-element">
          <h3 class="ladi-headline">Atenție! Promoție<br></h3>
        </div>
        <div id="HEADLINE56" class="ladi-element">
          <h3 class="ladi-headline">Doar azi<br></h3>
        </div>
        <div id="GROUP178" class="ladi-element">
          <div class="ladi-group">
            <div id="IMAGE60" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="IMAGE61" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
          </div>
        </div>
        <div id="GROUP192" class="ladi-element">
          <div class="ladi-group">
            <div id="HEADLINE141" class="ladi-element">
              <h3 class="ladi-headline">RON<br></h3>
            </div>
            <div id="HEADLINE142" class="ladi-element">
              <h3 class="ladi-headline">149<br></h3>
            </div>
            <div id="HEADLINE143" class="ladi-element">
              <h3 class="ladi-headline">298<br></h3>
            </div>
            <div id="HEADLINE144" class="ladi-element">
              <h3 class="ladi-headline">ron<br></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="SECTION4" class="ladi-section">
      <div class="ladi-section-background"></div>
      <div class="ladi-container">
        <div id="HEADLINE61" class="ladi-element">
          <h3 class="ladi-headline">Farmacin - un complex împotriva paraziților bazat de ingrediente naturale<br></h3>
        </div>
        <div id="HEADLINE62" class="ladi-element">
          <h3 class="ladi-headline">O combinație unică de extracte de plante, în care fiecare ingredient se completează și îmbunătățește efectul unul celuilalt.<br></h3>
        </div>
        <div id="GROUP87" class="ladi-element">
          <div class="ladi-group">
            <div id="IMAGE62" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="GROUP86" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP85" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX48" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="BOX47" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                  </div>
                </div>
                <div id="IMAGE63" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE63" class="ladi-element">
                  <h3 class="ladi-headline">Extract de usturoi<br></h3>
                </div>
                <div id="PARAGRAPH2" class="ladi-element">
                  <div class="ladi-paragraph">Conține o gamă largă de tiosulfați (de exemplu alicină) care sunt responsabili pentru activitatea antibacteriană asociată cu inhibarea enzimelor, inclusiv tiol, în microorganisme. Mai mult decât atât,</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="GROUP88" class="ladi-element">
          <div class="ladi-group">
            <div id="IMAGE64" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="GROUP89" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP90" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX49" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="BOX50" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                  </div>
                </div>
                <div id="IMAGE65" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE64" class="ladi-element">
                  <h3 class="ladi-headline">Extract din semințe de dovleac<br></h3>
                </div>
                <div id="PARAGRAPH3" class="ladi-element">
                  <div class="ladi-paragraph">Conține cucurbitină, un aminoacid rar. Este capabil să distrugă viermii paraziți, fiind complet netoxic pentru organismul uman. Semințele de dovleac au activitate antiparazitară</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="GROUP91" class="ladi-element">
          <div class="ladi-group">
            <div id="IMAGE66" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="GROUP92" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP93" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX51" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="BOX52" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                  </div>
                </div>
                <div id="IMAGE67" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE65" class="ladi-element">
                  <h3 class="ladi-headline">Extract de semințe de papaya<br></h3>
                </div>
                <div id="PARAGRAPH4" class="ladi-element">
                  <div class="ladi-paragraph">Regenerează celulele hepatice și luptă împotriva paraziților. Papaya este cunoscută în special pentru nivelurile sale ridicate de enzime. Stimulează sistemul imunitar, întărind bariera de protecție</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="SECTION5" class="ladi-section">
      <div class="ladi-section-background"></div>
      <div class="ladi-container">
        <div id="HEADLINE66" class="ladi-element">
          <h3 class="ladi-headline">Cu ce se deosebește Farmacin de remediile obișnuite?<br></h3>
        </div>
        <div id="IMAGE68" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP108" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP96" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP95" class="ladi-element">
                  <div class="ladi-group">
                    <div id="GROUP94" class="ladi-element">
                      <div class="ladi-group">
                        <div id="BOX54" class="ladi-element">
                          <div class="ladi-box"></div>
                        </div>
                        <div id="BOX53" class="ladi-element">
                          <div class="ladi-box"></div>
                        </div>
                      </div>
                    </div>
                    <div id="IMAGE69" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                    <div id="IMAGE70" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="IMAGE71" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="GROUP99" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP97" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX55" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE72" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="HEADLINE67" class="ladi-element">
                  <h3 class="ladi-headline">Compoziția inovatoare cu o combinație unică de extracte naturale<br></h3>
                </div>
              </div>
            </div>
            <div id="GROUP100" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP101" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX57" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE74" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="HEADLINE68" class="ladi-element">
                  <h3 class="ladi-headline">Acțiune vizibilă după primul curs<br></h3>
                </div>
              </div>
            </div>
            <div id="GROUP102" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP103" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX58" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE75" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="HEADLINE69" class="ladi-element">
                  <h3 class="ladi-headline">Acest instrument este recomandat de experți internaționali<br></h3>
                </div>
              </div>
            </div>
            <div id="GROUP104" class="ladi-element">
              <div class="ladi-group">
                <div id="GROUP105" class="ladi-element">
                  <div class="ladi-group">
                    <div id="BOX59" class="ladi-element">
                      <div class="ladi-box"></div>
                    </div>
                    <div id="IMAGE76" class="ladi-element">
                      <div class="ladi-image">
                        <div class="ladi-image-background"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="HEADLINE70" class="ladi-element">
                  <h3 class="ladi-headline">Complexul are un efect ușor și eficient<br></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="GROUP181" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP107" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX60" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX61" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="HEADLINE71" class="ladi-element">
              <h3 class="ladi-headline">Mijloace tradiționale<br></h3>
            </div>
            <div id="GROUP109" class="ladi-element">
              <div class="ladi-group">
                <div id="IMAGE79" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE72" class="ladi-element">
                  <h3 class="ladi-headline">Compoziția poate include hormoni și componente chimice<br></h3>
                </div>
              </div>
            </div>
            <div id="GROUP110" class="ladi-element">
              <div class="ladi-group">
                <div id="IMAGE80" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE73" class="ladi-element">
                  <h3 class="ladi-headline">Este adesea necesar să luați mai multe cursuri<br></h3>
                </div>
              </div>
            </div>
            <div id="GROUP112" class="ladi-element">
              <div class="ladi-group">
                <div id="IMAGE82" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE75" class="ladi-element">
                  <h3 class="ladi-headline">În cele mai multe cazuri, compoziția și eficacitate sunt învechite, nu afectează acele tipuri de paraziți care au fost descoperite recent<br></h3>
                </div>
              </div>
            </div>
            <div id="GROUP113" class="ladi-element">
              <div class="ladi-group">
                <div id="IMAGE83" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE76" class="ladi-element">
                  <h3 class="ladi-headline">Au o mulțime de efecte secundare, provocând dispute între specialiști<br></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="IMAGE85" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP118" class="ladi-element">
          <div class="ladi-group">
            <div id="IMAGE86" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE77" class="ladi-element">
              <h3 class="ladi-headline">-50%<br></h3>
            </div>
          </div>
        </div>
        <div id="LINE6" class="ladi-element">
          <div class="ladi-line">
            <div class="ladi-line-container"></div>
          </div>
        </div>
        <div id="HEADLINE82" class="ladi-element">
          <h3 class="ladi-headline">Atenție! Promoție<br></h3>
        </div>
        <div id="HEADLINE83" class="ladi-element">
          <h3 class="ladi-headline">Doar azi<br></h3>
        </div>
        <div id="IMAGE87" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="IMAGE88" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP116" class="ladi-element btn-to-form-js">
          <div class="ladi-group">
            <div id="GROUP117" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX62" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div data-action="true" id="BUTTON6" class="ladi-element">
                  <div class="ladi-button ladi-transition">
                    <div class="ladi-button-background"></div>
                    <div id="BUTTON_TEXT6" class="ladi-element ladi-button-headline">
                      <p class="ladi-headline">Comandaţi</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="IMAGE84" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
          </div>
        </div>
        <div id="GROUP191" class="ladi-element">
          <div class="ladi-group">
            <div id="HEADLINE137" class="ladi-element">
              <h3 class="ladi-headline">RON<br></h3>
            </div>
            <div id="HEADLINE138" class="ladi-element">
              <h3 class="ladi-headline">149<br></h3>
            </div>
            <div id="HEADLINE139" class="ladi-element">
              <h3 class="ladi-headline">298<br></h3>
            </div>
            <div id="HEADLINE140" class="ladi-element">
              <h3 class="ladi-headline">ron<br></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="SECTION6" class="ladi-section">
      <div class="ladi-section-background"></div>
      <div class="ladi-container">
        <div id="IMAGE89" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="IMAGE90" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="BOX63" class="ladi-element">
          <div class="ladi-box"></div>
        </div>
        <div id="IMAGE91" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="IMAGE92" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="HEADLINE84" class="ladi-element">
          <h3 class="ladi-headline">Recenzia Monica S., care a luat cursul Farmacin:<br></h3>
        </div>
        <div id="HEADLINE85" class="ladi-element">
          <h3 class="ladi-headline">"După balonarea stomacului - viermii au început să iasă"<br></h3>
        </div>
        <div id="PARAGRAPH5" class="ladi-element">
          <div class="ladi-paragraph">Anul trecut, au început să mă îngrijoreze balonările, dureri abdominale în jurul buricului. Am crezut că este o tulburare digestivă și am luat diverse remedii pentru aceasta. Durerea și umflarea fie treceau, fie apăreau din nou.
            <br>
            <br>Odată, când făceam un duș, un vierme de 32 cm a ieșit din anus. Am fost în stare de șoc! După teste, s-au găsit ouă de ascaris. Am început să iau Farmacin și după câteva zile au ieșit aproximativ 20 de viermi, cei mai mici 17 cm și cei mai mari 34 cm. Durerea și balonarea au dispărut. Acum mă simt mult mai bine și testele au confirmat că nu mai există paraziți sau ouă. Cu toate acestea, specialistul a recomandat să iau periodic Farmacin pentru prevenire.
            <br>
            <br>Sunt îngrijorată că am reacționat atât de ușor la semne și, ca urmare, am trăit cu viermi în intestine timp de șase luni fără să le suspectez și ar fi putut exista complicații. Vă sfătuiesc să fiți examinați și să luați Farmacin pentru orice semne a problemei!<br>
          </div>
        </div>
      </div>
    </div>
    <div id="SECTION7" class="ladi-section">
      <div class="ladi-section-background"></div>
      <div class="ladi-container">
        <div id="HEADLINE86" class="ladi-element">
          <h3 class="ladi-headline">Recenzii<br></h3>
        </div>
        <div id="IMAGE93" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP152" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP153" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX83" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX84" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="IMAGE121" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE119" class="ladi-element">
              <h3 class="ladi-headline">Lucrețiu Umbreanu<br></h3>
            </div>
            <div id="PARAGRAPH11" class="ladi-element">
              <div class="ladi-paragraph">Sora mea a început brusc să piardă în greutate. Mâncat ca înainte, nimic nu s-a schimbat în regimul ei. S-a dus și a făcut teste pentru helminți. Rezultatul a fost pozitiv. Specialistul a sfătuit-o să ia Farmacin, să finalizeze întregul curs, respectând cu strictețe toate recomandările. Așa și a făcut. După un curs, toată lumea a observat că a început să arăte mai bine. Sora mea nu a avut efecte secundare, după o perioadă de&nbsp;recuperare, paraziți nu mai erau găsiți în ea. Așa că am testat experimental că acest instrument este destul de eficient.<br></div>
            </div>
          </div>
        </div>
        <div id="GROUP154" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP155" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX85" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX86" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="IMAGE122" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE120" class="ladi-element">
              <h3 class="ladi-headline">Iona Echim<br></h3>
            </div>
            <div id="PARAGRAPH12" class="ladi-element">
              <div class="ladi-paragraph">S-a întâmplat că a trebuit urgent să folosesc Farmacin după o vacanță activă în țările calde. La sosire, am descoperit în anusul meu mâncărime și bănuiam că ceva nu este în regulă. Enterobioza, analiza a confirmat. Mai mult, cu o lună înainte, am făcut o analiză și totul a fost bine. Specialistul mi-a sfătuit cel mai eficient remediu din tot ceea ce a folosit în practică. Ca rezultat, Farmacin a ajutat foarte mult.<br></div>
            </div>
          </div>
        </div>
        <div id="GROUP157" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP158" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX90" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX91" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="IMAGE123" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE121" class="ladi-element">
              <h3 class="ladi-headline">Viorelia Tudoran<br></h3>
            </div>
            <div id="PARAGRAPH13" class="ladi-element">
              <div class="ladi-paragraph">În zilele noastre, mulți sunt rușinați să vorbească despre un astfel de subiect ca viermi și tot felul de paraziți. Oamenii sunt rușinați să-și dea seama că astfel de "oaspeți" trăiesc în corpul lor și chiar ideea că este posibil să fii un purtător de acest fel, multora nu le vină să creadă. Mi-au trimis o cutie de fructe exotice ca cadou și cine ar fi crezut că vor exista ouă de vierme pe fructe. După descoperire, au început tulburări gastro-intestinale grave. Mulțumită prietenilor care s-au confruntat cu probleme similare și mi-au sfătuit Farmacin. Acesta este un remediu miraculos care a curățat ușor organismul de paraziți fără a provoca complicații pentru tractul gastro-intestinal.<br></div>
            </div>
          </div>
        </div>
        <div id="GROUP159" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP160" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX92" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX93" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="IMAGE124" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE122" class="ladi-element">
              <h3 class="ladi-headline">Radu Stan<br></h3>
            </div>
            <div id="PARAGRAPH14" class="ladi-element">
              <div class="ladi-paragraph">Simptomele mele, s-au început la o săptămână după ce am trecut testul care a arătat giardia. Simțeam o greață puternică, care se începea după o cafea și alte băuturi. Plus o durere de cap severă m-a forțat să merg la un RMN al creierului. Mulțumesc specialistului care tocmai m-a salvat cu Farmacin, care include multe ingrediente naturale. Au dispărut toate senzațiile neplăcute împreună cu paraziții.<br></div>
            </div>
          </div>
        </div>
        <div id="GROUP161" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP162" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX94" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX95" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="IMAGE125" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE123" class="ladi-element">
              <h3 class="ladi-headline">Elena Cebotaru<br></h3>
            </div>
            <div id="PARAGRAPH15" class="ladi-element">
              <div class="ladi-paragraph">Acest tip de probleme s-a întâmplat și cu mine. Am avut oxiuri. Dar cred că nu doar așa. Îmi place să-mi mănânc unghiile. Da, o fată mare, iar unghiile îmi mănânc. Nu mă pot abține. Deși după viermi, nu-mi mai mănânc unghiile. Văzându-i, pentru prima dată, am simțit șoc, groază, dezgust. După ce am văzut, am alergat la specialist care mi-a prescris un curs de Farmacin. Un remediu foarte bun, ușor curăță organismul de tot felul de ființe, astfel încât să nu mai rămână nici o urmă.<br></div>
            </div>
          </div>
        </div>
        <div id="GROUP163" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP164" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX96" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX97" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="IMAGE126" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE124" class="ladi-element">
              <h3 class="ladi-headline">Adin Matei<br></h3>
            </div>
            <div id="PARAGRAPH16" class="ladi-element">
              <div class="ladi-paragraph">Dacă luați animale de pe stradă, ar trebui să fiți gata pentru faptul că în organismul vostru se pot găsi paraziți, așa că este mai bine să prevedeți acest moment ca măsură preventivă. Am doi câini și am luat o pisică. După un timp, am început să am tulburări intestinale și balonare constantă. Specialistul m-a sfătuit să fac teste pentru paraziți și s-a dovedit că organismul meu este plin de ei. Prietenii, care au și o mulțime de animale de companie, au sugerat că întreaga familie a luat cursul Farmacin. De asemenea, am comandat acest instrument și sunt surprins de cât de repede s-a isprăvit produsul cu această sarcină. Nici un parazit nu a fost găsit după curs. Încă trăim împreună și fericiți cu câinii și pisicile noastre iubite.<br></div>
            </div>
          </div>
        </div>
        <div id="GROUP165" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP166" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX98" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX99" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="IMAGE127" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE125" class="ladi-element">
              <h3 class="ladi-headline">Margareta Strâmb<br></h3>
            </div>
            <div id="PARAGRAPH17" class="ladi-element">
              <div class="ladi-paragraph">Vreau să spun că am fost plăcut impresionată de compoziția vegetală a Farmacin. Aceasta este o combinație unică de ingrediente naturale care nu numai că curăță organismul, ci și întărește cu adevărat sistemul imunitar. Am încercat multe lucruri când am aflat că port paraziți în mine. Dar anume acest instrument m-a ajutat mai eficient. Principalul lucru este să respectați în mod clar schema de recepție. Sănătate bună tuturor!<br></div>
            </div>
          </div>
        </div>
        <div id="GROUP148" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP149" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX79" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX80" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="IMAGE119" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE117" class="ladi-element">
              <h3 class="ladi-headline">Ionuț Codreanu<br></h3>
            </div>
            <div id="PARAGRAPH9" class="ladi-element">
              <div class="ladi-paragraph">Soția mea salvează animalele fără stăpân. Ea ia pisici și câini pe un timp oarecare, și apoi le dăm în mâini bune. La un moment dat, ambii ne-am simțit rău și un disconfort în anus. S-a dovedit că purtăm paraziți în noi. Mulțumesc experților pentru răspunsul lor rapid. Am început să luăm Farmacin și totul a mers bine. Am uitat de această problemă.<br></div>
            </div>
          </div>
        </div>
        <div id="GROUP150" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP151" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX81" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX82" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="IMAGE120" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE118" class="ladi-element">
              <h3 class="ladi-headline">Marinuca Bărău<br></h3>
            </div>
            <div id="PARAGRAPH10" class="ladi-element">
              <div class="ladi-paragraph">La un moment dat, au început să mă îngrijoreze balonarea, dureri în abdomen în jurul buricului. Am folosit diferite metode pentru ceea ce credeam că este o tulburare digestivă. Durerea și umflarea fie treceau, fie apăreau din nou. Și apoi, când făceam un duș, un vierme de 32 cm a ieșit din anus. Am fost în stare de șoc! Specialiștii au găsit ouă de ascaris în fecale și mi-au recomandat imediat să iau un curs de Farmacin. După primul curs, tulburările de stomac au trecut și toate testele au arătat un rezultat negativ pentru prezența paraziților.<br></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="SECTION8" class="ladi-section">
      <div class="ladi-section-background"></div>
      <div class="ladi-container">
        <div id="IMAGE101" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="HEADLINE87" class="ladi-element">
          <h3 class="ladi-headline">Cum să luați<br></h3>
        </div>
        <div id="IMAGE94" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="IMAGE95" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP122" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP121" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX65" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX64" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="IMAGE96" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE88" class="ladi-element">
              <h3 class="ladi-headline">Pasul 1<br></h3>
            </div>
            <div id="HEADLINE89" class="ladi-element">
              <h3 class="ladi-headline">Luați câte 1 capsulă de 2 ori pe zi<br></h3>
            </div>
          </div>
        </div>
        <div id="GROUP123" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP124" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX66" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX67" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="IMAGE97" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE90" class="ladi-element">
              <h3 class="ladi-headline">Pasul 2<br></h3>
            </div>
            <div id="HEADLINE91" class="ladi-element">
              <h3 class="ladi-headline">Beţi un pahar de apă<br></h3>
            </div>
          </div>
        </div>
        <div id="GROUP125" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP126" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX68" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="BOX69" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
              </div>
            </div>
            <div id="IMAGE98" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="HEADLINE92" class="ladi-element">
              <h3 class="ladi-headline">Pasul 3<br></h3>
            </div>
            <div id="HEADLINE93" class="ladi-element">
              <h3 class="ladi-headline">Repetați zilnic pe tot parcursul cursului<br></h3>
            </div>
          </div>
        </div>
        <div id="IMAGE99" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="BOX70" class="ladi-element">
          <div class="ladi-box"></div>
        </div>
        <div id="HEADLINE94" class="ladi-element">
          <h3 class="ladi-headline">Cum să comandați<br></h3>
        </div>
        <div id="IMAGE100" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP188" class="ladi-element">
          <div class="ladi-group">
            <div id="LINE7" class="ladi-element">
              <div class="ladi-line">
                <div class="ladi-line-container"></div>
              </div>
            </div>
            <div id="LINE8" class="ladi-element">
              <div class="ladi-line">
                <div class="ladi-line-container"></div>
              </div>
            </div>
            <div id="LINE9" class="ladi-element">
              <div class="ladi-line">
                <div class="ladi-line-container"></div>
              </div>
            </div>
          </div>
        </div>
        <div id="HEADLINE104" class="ladi-element">
          <h3 class="ladi-headline">Un mod natural de a curăța corpul de paraziți<br></h3>
        </div>
        <div id="IMAGE107" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP189" class="ladi-element">
          <div class="ladi-group">
            <div id="HEADLINE112" class="ladi-element">
              <h3 class="ladi-headline">* Funcționează asupra mărfurilor în limitele unui canal de distribuţie<br></h3>
            </div>
            <div id="PARAGRAPH6" class="ladi-element">
              <div class="ladi-paragraph">Consumatorul are dreptul sa notifice in scris comerciantului ca renunta la cumparare, fara penalitati si fara invocarea unui motiv, in termen de 10 zile lucratoare de la primirea produsului sau, in cazul prestarilor de servicii, de la incheierea contractului.
                <br>
                <br>* Nu este un medicament
                <br>
                <br>* Efectele depind de caracteristicile individuale ale organismului
                <br>
                <br>* Este posibilă intoleranța individuală la componentele produsului
                <br>
                <br>* Înainte de utilizare, citiți cu atenţie instrucțiunile<br>
              </div>
            </div>
            <div id="PARAGRAPH7" class="ladi-element">
              <div class="ladi-paragraph"></div>
            </div>
          </div>
        </div>
        <div id="IMAGE116" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="GROUP143" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP142" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX76" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="FORM2" class="ladi-element">
                  <form autocomplete="off" method="post" class="ladi-form" id="form-scroll"><?=$cms->params();?>>
                    <div id="BUTTON8" class="ladi-element">
                      <div class="ladi-button">
                        <div class="ladi-button-background"></div>
                        <div id="BUTTON_TEXT8" class="ladi-element ladi-button-headline">
                          <p class="ladi-headline">Comandaţi</p>
                        </div>
                      </div>
                    </div>
                    <div id="FORM_ITEM2" class="ladi-element">
                      <div class="ladi-form-item-container">
                        <div class="ladi-form-item-background"></div>
                        <div class="ladi-form-item"><input autocomplete="off" tabindex="1" name="name" required class="ladi-form-control" type="text" placeholder="Numele dvs." value></div>
                      </div>
                    </div>
                    <div id="FORM_ITEM4" class="ladi-element">
                      <div class="ladi-form-item-container">
                        <div class="ladi-form-item-background"></div>
                        <div class="ladi-form-item"><input autocomplete="off" tabindex="3" name="phone" required class="ladi-form-control" type="tel" placeholder="Numărul dvs. de telefon" pattern="(+84|0)(9|8|7|5|3)[0-9]{8}" value></div>
                      </div>
                    </div><button type="submit" class="ladi-hidden"></button>
                  </form>
                </div>
              </div>
            </div>
            <div id="IMAGE114" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
          </div>
        </div>
        <div id="GROUP128" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP127" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX71" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="IMAGE102" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="HEADLINE95" class="ladi-element">
              <h3 class="ladi-headline">Completați
                <br>formularul de comandă<br>
              </h3>
            </div>
            <div id="HEADLINE96" class="ladi-element">
              <h3 class="ladi-headline">Introduceți numele și numărul de telefon<br></h3>
            </div>
          </div>
        </div>
        <div id="GROUP133" class="ladi-element btn-to-form-js">
          <div class="ladi-group">
            <div id="GROUP134" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX74" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="IMAGE105" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="HEADLINE101" class="ladi-element">
              <h3 class="ladi-headline">Aplicați
                <br>conform instrucțiunilor<br>
              </h3>
            </div>
            <div id="HEADLINE102" class="ladi-element">
              <h3 class="ladi-headline">Fiți sănătoși!<br></h3>
            </div>
          </div>
        </div>
        <div id="GROUP129" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP130" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX72" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="IMAGE103" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="HEADLINE97" class="ladi-element">
              <h3 class="ladi-headline">Răspundeți la apelul operatorului<br></h3>
            </div>
            <div id="HEADLINE98" class="ladi-element">
              <h3 class="ladi-headline">El vă va clarifica detaliile adresei și va răspunde la toate întrebările<br></h3>
            </div>
          </div>
        </div>
        <div id="GROUP131" class="ladi-element">
          <div class="ladi-group">
            <div id="GROUP132" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX73" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="IMAGE104" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="HEADLINE99" class="ladi-element">
              <h3 class="ladi-headline">Plătiți după primire<br></h3>
            </div>
            <div id="HEADLINE100" class="ladi-element">
              <h3 class="ladi-headline">Nu este necesară plata în avans<br></h3>
            </div>
          </div>
        </div>
        <div id="GROUP185" class="ladi-element">
          <div class="ladi-group">
            <div id="IMAGE108" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="GROUP139" class="ladi-element">
              <div class="ladi-group">
                <div id="IMAGE111" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE105" class="ladi-element">
                  <h3 class="ladi-headline">-50%<br></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="HEADLINE103" class="ladi-element">
          <h3 class="ladi-headline">PROTECTIVE ADVANCED COMPLEX<br></h3>
        </div>
        <div id="IMAGE106" class="ladi-element">
          <div class="ladi-image">
            <div class="ladi-image-background"></div>
          </div>
        </div>
        <div id="HEADLINE111" class="ladi-element">
          <h3 class="ladi-headline">Doar azi<br></h3>
        </div>
        <div id="GROUP190" class="ladi-element">
          <div class="ladi-group">
            <div id="HEADLINE133" class="ladi-element">
              <h3 class="ladi-headline">RON<br></h3>
            </div>
            <div id="HEADLINE134" class="ladi-element">
              <h3 class="ladi-headline">149<br></h3>
            </div>
            <div id="HEADLINE135" class="ladi-element">
              <h3 class="ladi-headline">298<br></h3>
            </div>
            <div id="HEADLINE136" class="ladi-element">
              <h3 class="ladi-headline">ron<br></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="SECTION_POPUP" class="ladi-section">
      <div class="ladi-section-background"></div>
      <div class="ladi-container">
        <div id="POPUP2" class="ladi-element">
          <div class="ladi-popup">
            <div class="ladi-popup-background"></div>
            <div class="ladi-overlay"></div>
            <div id="IMAGE137" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="GROUP167" class="ladi-element">
              <div class="ladi-group">
                <div id="IMAGE138" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
                <div id="HEADLINE126" class="ladi-element">
                  <h3 class="ladi-headline">-50%<br></h3>
                </div>
              </div>
            </div>
            <div id="HEADLINE127" class="ladi-element">
              <h3 class="ladi-headline">Un mod natural de a curăța organismul de paraziți<br></h3>
            </div>
            <div id="IMAGE136" class="ladi-element">
              <div class="ladi-image">
                <div class="ladi-image-background"></div>
              </div>
            </div>
            <div id="GROUP180" class="ladi-element">
              <div class="ladi-group">
                <div id="HEADLINE128" class="ladi-element">
                  <h3 class="ladi-headline">Doar azi<br></h3>
                </div>
                <div id="HEADLINE129" class="ladi-element">
                  <h3 class="ladi-headline">149</h3>
                </div>
                <div id="HEADLINE130" class="ladi-element">
                  <h3 class="ladi-headline">RON<br></h3>
                </div>
                <div id="HEADLINE131" class="ladi-element">
                  <h3 class="ladi-headline">298<br></h3>
                </div>
                <div id="HEADLINE132" class="ladi-element">
                  <h3 class="ladi-headline">ron<br></h3>
                </div>
              </div>
            </div>
            <div id="GROUP168" class="ladi-element">
              <div class="ladi-group">
                <div id="BOX100" class="ladi-element">
                  <div class="ladi-box"></div>
                </div>
                <div id="FORM3" data-config-id="6593832aece1d60012b899a3" class="ladi-element">
                  <form autocomplete="off" method="post" class="ladi-form"><?=$cms->params();?>>
                    <div id="BUTTON9" class="ladi-element">
                      <div class="ladi-button ladi-transition">
                        <div class="ladi-button-background"></div>
                        <div id="BUTTON_TEXT9" class="ladi-element ladi-button-headline">
                          <p class="ladi-headline">Comandaţi</p>
                        </div>
                      </div>
                    </div>
                    <div id="FORM_ITEM6" class="ladi-element">
                      <div class="ladi-form-item-container">
                        <div class="ladi-form-item-background"></div>
                        <div class="ladi-form-item"><input autocomplete="off" tabindex="1" name="name" required class="ladi-form-control" type="text" placeholder="Numele dvs." value></div>
                      </div>
                    </div>
                    <div id="FORM_ITEM8" class="ladi-element">
                      <div class="ladi-form-item-container">
                        <div class="ladi-form-item-background"></div>
                        <div class="ladi-form-item"><input autocomplete="off" tabindex="3" name="phone" required class="ladi-form-control" type="tel" placeholder="Numărul dvs. de telefon" pattern="(+84|0)(9|8|7|5|3)[0-9]{8}" value></div>
                      </div>
                    </div><button type="submit" class="ladi-hidden"></button>
                  </form>
                </div>
                <div id="IMAGE139" class="ladi-element">
                  <div class="ladi-image">
                    <div class="ladi-image-background"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="backdrop-popup" class="backdrop-popup"></div>
  <div id="backdrop-dropbox" class="backdrop-dropbox"></div>
  <div id="lightbox-screen" class="lightbox-screen"></div>
  <script id="script_lazyload" type="text/javascript">
    window.lazyload_run = function(dom, is_first, check_dom_rect) {
      if (check_dom_rect && (document.body.clientWidth <= 0 || document.body.clientheight <= 0)) {
        return setTimeout(function() {
          window.lazyload_run(dom, is_first, check_dom_rect);
        }, 1);
      }
      var style_lazyload = document.getElementById('style_lazyload');
      var list_element_lazyload = dom.querySelectorAll('body.lazyload .ladi-overlay, body.lazyload .ladi-box, body.lazyload .ladi-button-background, body.lazyload .ladi-collection-item, body.lazyload .ladi-countdown-background, body.lazyload .ladi-form-item-background, body.lazyload .ladi-form-label-container .ladi-form-label-item.image, body.lazyload .ladi-frame-background, body.lazyload .ladi-gallery-view-item, body.lazyload .ladi-gallery-control-item, body.lazyload .ladi-headline, body.lazyload .ladi-image-background, body.lazyload .ladi-image-compare, body.lazyload .ladi-list-paragraph ul li, body.lazyload .ladi-section-background, body.lazyload .ladi-survey-option-background, body.lazyload .ladi-survey-option-image, body.lazyload .ladi-tabs-background, body.lazyload .ladi-video-background, body.lazyload .ladi-banner, body.lazyload .ladi-spin-lucky-screen, body.lazyload .ladi-spin-lucky-start');
      var docEventScroll = window;
      for (var i = 0; i < list_element_lazyload.length; i++) {
        var rect = list_element_lazyload[i].getBoundingClientRect();
        if (rect.x == "undefined" || rect.x == undefined || rect.y == "undefined" || rect.y == undefined) {
          rect.x = rect.left;
          rect.y = rect.top;
        }
        var offset_top = rect.y + window.scrollY;
        if (offset_top >= window.scrollY + window.innerHeight || window.scrollY >= offset_top + list_element_lazyload[i].offsetHeight) {
          list_element_lazyload[i].classList.add('ladi-lazyload');
        }
      }
      if (typeof style_lazyload != "undefined" && style_lazyload != undefined) {
        style_lazyload.parentElement.removeChild(style_lazyload);
      }
      document.body.classList.remove("lazyload");
      var currentScrollY = window.scrollY;
      var stopLazyload = function(event) {
        if (event.type == "scroll" && window.scrollY == currentScrollY) {
          currentScrollY = -1;
          return;
        }
        docEventScroll.removeEventListener('scroll', stopLazyload);
        list_element_lazyload = document.getElementsByClassName('ladi-lazyload');
        while (list_element_lazyload.length > 0) {
          list_element_lazyload[0].classList.remove('ladi-lazyload');
        }
      };
      if (is_first) {
        var scrollEventPassive = null;
        try {
          var opts = Object.defineProperty({}, 'passive', {
            get: function() {
              scrollEventPassive = {
                passive: true
              };
            }
          });
          window.addEventListener('testPassive', null, opts);
          window.removeEventListener('testPassive', null, opts);
        } catch (e) {}
        docEventScroll.addEventListener('scroll', stopLazyload, scrollEventPassive);
      }
      return dom;
    };
    window.lazyload_run(document, true, true);
  </script><!--[if lt IE 9]><script src="js/script1.js"></script><script src="js/script3.js"></script><![endif]-->
  <link href="https:/index_family_Open_Sans_wght_400_700_display_swap_.html" rel="stylesheet" type="text/css">
  <script src="js/script2.js" type="text/javascript"></script>
  <script id="script_event_data" type="application/json">
    {
      "BUTTON4": {
        "a": "button",
        "cs": [{
          "dr": "action",
          "dw": "POPUP2",
          "a": "popup"
        }]
      },
      "BUTTON5": {
        "a": "button",
        "cs": [{
          "dr": "action",
          "dw": "POPUP2",
          "a": "popup"
        }]
      },
      "BUTTON6": {
        "a": "button",
        "cs": [{
          "dr": "action",
          "dw": "POPUP2",
          "a": "popup"
        }]
      },
      "FORM_ITEM2": {
        "a": "form_item",
        "bS": "text",
        "bQ": 1
      },
      "FORM_ITEM4": {
        "a": "form_item",
        "bS": "tel",
        "bQ": 3
      },
      "FORM2": {
        "a": "form",
        "bP": "6593832aece1d60012b899a3",
        "bM": true,
        "bK": "default",
        "bJ": "Mulțumesc! Te sunăm în curând!",
        "bE": "11189894713",
        "bC": "MojGCLytjaEZELn84Ncp",
        "by": true,
        "bx": true
      },
      "POPUP2": {
        "a": "popup",
        "X": "default",
        "U": "background-color: rgba(0, 0, 0, 0.5);"
      },
      "FORM_ITEM6": {
        "a": "form_item",
        "bS": "text",
        "bQ": 1
      },
      "FORM_ITEM8": {
        "a": "form_item",
        "bS": "tel",
        "bQ": 3
      },
      "FORM3": {
        "a": "form",
        "bP": "6593832aece1d60012b899a3",
        "bM": true,
        "bK": "default",
        "bJ": "Mulțumesc! Te sunăm în curând!",
        "bE": "11189891361",
        "bC": "OJXRCLeR0IQZEKHi4Ncp",
        "by": true,
        "bx": true
      }
    }
  </script>
  <script id="script_ladipage_run" type="text/javascript">
    (function() {
      var run = function() {
        if (typeof window.LadiPageScript == "undefined" || typeof window.ladi == "undefined" || window.ladi == undefined) {
          setTimeout(run, 100);
          return;
        }
        window.LadiPageApp = window.LadiPageApp || new window.LadiPageAppV2();
        window.LadiPageScript.runtime.ladipage_id = '6593802ca16ca60012d9d47c';
        window.LadiPageScript.runtime.publish_platform = 'WORDPRESS';
        window.LadiPageScript.runtime.version = '1711682121479';
        window.LadiPageScript.runtime.cdn_url = 'https://w.ladicdn.com/v4/source/';
        window.LadiPageScript.runtime.DOMAIN_SET_COOKIE = ["shopkkat.com"];
        window.LadiPageScript.runtime.DOMAIN_FREE = ["preview.ldp.page", "ldp.link", "ldp.page"];
        window.LadiPageScript.runtime.bodyFontSize = 12;
        window.LadiPageScript.runtime.store_id = "5ea845b95da1a2557f302daa";
        window.LadiPageScript.runtime.time_zone = 7;
        window.LadiPageScript.runtime.currency = "VND";
        window.LadiPageScript.runtime.convert_replace_str = true;
        window.LadiPageScript.runtime.desktop_width = 1200;
        window.LadiPageScript.runtime.mobile_width = 420;
        window.LadiPageScript.runtime.formdata = true;
        window.LadiPageScript.runtime.tracking_button_click = true;
        window.LadiPageScript.runtime.publish_time = 1711687323520;
        window.LadiPageScript.runtime.lang = "en";
        window.LadiPageScript.run(true);
        window.LadiPageScript.runEventScroll();
      };
      run();
    })();
  </script>
  <script>
document.addEventListener("DOMContentLoaded", function() {
    console.log('Документ загружен');
    
    const buttons = document.querySelectorAll('.btn-to-form-js');

    console.log(`Найдено кнопок: ${buttons.length}`);
    
    if (buttons.length > 0) {
        buttons.forEach(function(button, index) {
            button.addEventListener('click', function() {
                console.log(`Кнопка ${index + 1} нажата`);
                
                const form = document.getElementById('form-scroll');
                
                if (form) {
                    console.log('Форма найдена, выполняем скролл');
                    
                    window.scrollTo({
                        top: form.offsetTop,
                        behavior: 'smooth'
                    });
                } else {
                }
            });
        });
    } else {
    }
});
  </script>

<?php $cms->footer(); ?>
</body>


</html><!--Publish time: Fri, 29 Mar 2024 04:42:04 GMT--><!--LadiPage build time: Fri, 29 Mar 2024 03:15:21 GMT-->