<style>

::-moz-selection {
  background: #000;
  color: #fff; }

::selection {
  background: #000;
  color: #fff; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a:hover {
    text-decoration: none; }

.border-2 {
  border-width: 2px; }

.color-black-opacity-5 {
  color: rgba(0, 0, 0, 0.5); }

.color-white-opacity-5 {
  color: rgba(255, 255, 255, 0.5); }

.offcanvas-menu .site-wrap {
  position: absolute;
  overflow: hidden; }

.site-wrap:before {
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out;
  background: rgba(0, 0, 0, 0.6);
  content: "";
  position: absolute;
  z-index: 2000;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  visibility: hidden; }

.offcanvas-menu .site-wrap {
  position: absolute;
  height: 100%;
  width: 100%;
  z-index: 2;
  overflow: hidden; }
  .offcanvas-menu .site-wrap:before {
    opacity: 1;
    visibility: visible; }

.btn {
  border-radius: 30px; }
  .btn:hover, .btn:active, .btn:focus {
    outline: none;
    -webkit-box-shadow: none !important;
    box-shadow: none !important; }
  .btn.btn-black {
    color: #fff;
    background-color: #000; }
    .btn.btn-black:hover {
      color: #000;
      background-color: #fff; }
  .btn.btn-outline-white {
    border: 2px solid #fff; }
    .btn.btn-outline-white:hover {
      background: #fff;
      color: #ef6c57 !important; }
  .btn.btn-md {
    padding: 15px 30px;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: .1em; }

.line-height-1 {
  line-height: 1 !important; }

.bg-black {
  background: #000; }

.form-control {
  border: none;
  border-bottom: 2px solid gray;
  border-radius: 0;
  background: none;
  color: #fff;
  padding-left: 0;
  padding-right: 0; }
  .form-control:active, .form-control:focus {
    color: #fff;
    background: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: none;
    border-color: #fff; }

.site-section {
  padding: 2.5em 0; }
  @media (min-width: 768px) {
    .site-section {
      padding: 5em 0; } }
  .site-section.site-section-sm {
    padding: 4em 0; }

.site-section-heading {
  padding-bottom: 20px;
  margin-bottom: 50px;
  position: relative;
  font-size: 2.5rem; }
  @media (min-width: 768px) {
    .site-section-heading {
      font-size: 4rem; } }
  .site-section-heading:after {
    content: "";
    left: 0%;
    bottom: 0;
    position: absolute;
    width: 100px;
    height: 3px;
    background: #ef6c57; }
  .site-section-heading.text-center:after {
    content: "";
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    content: "";
    left: 50%;
    bottom: 0;
    position: absolute;
    width: 100px;
    height: 3px;
    background: #ef6c57; }

.border-top {
  border-top: 1px solid #edf0f5 !important; }

.site-footer {
  padding: 4em 0;
  background: #333333; }
  @media (min-width: 768px) {
    .site-footer {
      padding: 8em 0; } }
  .site-footer .border-top {
    border-top: 1px solid rgba(255, 255, 255, 0.1) !important; }
  .site-footer p {
    color: #737373; }
  .site-footer h2, .site-footer h3, .site-footer h4, .site-footer h5 {
    color: #fff; }
  .site-footer a {
    color: #999999; }
    .site-footer a:hover {
      color: white; }
  .site-footer ul li {
    margin-bottom: 10px; }
  .site-footer .footer-heading {
    font-size: 16px;
    color: #fff; }

.bg-text-line {
  display: inline;
  background: #000;
  -webkit-box-shadow: 20px 0 0 #000, -20px 0 0 #000;
  box-shadow: 20px 0 0 #000, -20px 0 0 #000; }

.text-white-opacity-05 {
  color: rgba(255, 255, 255, 0.5); }

.text-black-opacity-05 {
  color: rgba(0, 0, 0, 0.5); }

.hover-bg-enlarge {
  overflow: hidden;
  position: relative; }
  @media (max-width: 991.98px) {
    .hover-bg-enlarge {
      height: auto !important; } }
  .hover-bg-enlarge > div {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .8s all ease-in-out;
    -o-transition: .8s all ease-in-out;
    transition: .8s all ease-in-out; }
  .hover-bg-enlarge:hover > div, .hover-bg-enlarge:focus > div, .hover-bg-enlarge:active > div {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2); }
  @media (max-width: 991.98px) {
    .hover-bg-enlarge .bg-image-md-height {
      height: 300px !important; } }

.bg-image {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed; }
  .bg-image.overlay {
    position: relative; }
    .bg-image.overlay:after {
      position: absolute;
      content: "";
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.7); }
  .bg-image > .container {
    position: relative;
    z-index: 1; }

@media (max-width: 991.98px) {
  .img-md-fluid {
    max-width: 100%; } }

@media (max-width: 991.98px) {
  .display-1, .display-3 {
    font-size: 3rem; } }

.play-single-big {
  width: 90px;
  height: 90px;
  display: inline-block;
  border: 2px solid #fff;
  color: #fff !important;
  border-radius: 50%;
  position: relative;
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out; }
  .play-single-big > span {
    font-size: 50px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-40%, -50%);
    -ms-transform: translate(-40%, -50%);
    transform: translate(-40%, -50%); }
  .play-single-big:hover {
    width: 120px;
    height: 120px; }

.overlap-to-top {
  margin-top: -150px; }

.ul-check {
  margin-bottom: 50px; }
  .ul-check li {
    position: relative;
    padding-left: 35px;
    margin-bottom: 15px;
    line-height: 1.5; }
    .ul-check li:before {
      left: 0;
      font-size: 20px;
      top: -.3rem;
      font-family: "icomoon";
      content: "\e5ca";
      position: absolute; }
  .ul-check.white li:before {
    color: #fff; }
  .ul-check.success li:before {
    color: #8bc34a; }
  .ul-check.primary li:before {
    color: #ef6c57; }

.select-wrap, .wrap-icon {
  position: relative; }
  .select-wrap .icon, .wrap-icon .icon {
    position: absolute;
    right: 10px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: 22px; }
  .select-wrap select, .wrap-icon select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 100%; }

.top-bar {
  border-bottom: 1px solid #e9ecef !important; }

/* Navbar */
.site-navbar {
  margin-bottom: 0px;
  z-index: 1999;
  position: relative;
  width: 100%; }
  .site-navbar.transparent {
    background: transparent; }
  .site-navbar.absolute {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%; }
  .site-navbar .site-logo {
    position: relative;
    left: 0;
    top: -5px; }
  .site-navbar .site-navigation.border-bottom {
    border-bottom: 1px solid #f3f3f4 !important; }
  .site-navbar .site-navigation .site-menu {
    margin-bottom: 0; }
    .site-navbar .site-navigation .site-menu .active > a {
      color: #ef6c57;
      display: inline-block;
      padding: 5px 20px; }
    .site-navbar .site-navigation .site-menu a {
      text-decoration: none !important;
      display: inline-block; }
    .site-navbar .site-navigation .site-menu > li {
      display: inline-block; }
      .site-navbar .site-navigation .site-menu > li > a {
        padding: 5px 10px;
        color: #fff;
        display: inline-block;
        text-decoration: none !important; }
        .site-navbar .site-navigation .site-menu > li > a:hover {
          color: #ef6c57; }
    .site-navbar .site-navigation .site-menu .has-children {
      position: relative; }
      .site-navbar .site-navigation .site-menu .has-children > a {
        position: relative;
        padding-right: 20px; }
        .site-navbar .site-navigation .site-menu .has-children > a:before {
          position: absolute;
          content: "\e313";
          font-size: 16px;
          top: 50%;
          right: 0;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
          font-family: 'icomoon'; }
      .site-navbar .site-navigation .site-menu .has-children .dropdown {
        visibility: hidden;
        opacity: 0;
        top: 100%;
        position: absolute;
        text-align: left;
        border-top: 2px solid #ef6c57;
        -webkit-box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
        box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
        border-left: 1px solid #edf0f5;
        border-right: 1px solid #edf0f5;
        border-bottom: 1px solid #edf0f5;
        padding: 0px 0;
        margin-top: 20px;
        margin-left: 0px;
        background: #fff;
        -webkit-transition: 0.2s 0s;
        -o-transition: 0.2s 0s;
        transition: 0.2s 0s; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top {
          position: absolute; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            bottom: 100%;
            left: 20%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            border-color: rgba(136, 183, 213, 0);
            border-bottom-color: #fff;
            border-width: 10px;
            margin-left: -10px; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown a {
          text-transform: none;
          letter-spacing: normal;
          -webkit-transition: 0s all;
          -o-transition: 0s all;
          transition: 0s all;
          color: #343a40; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown .active > a {
          color: #ef6c57 !important; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown > li {
          list-style: none;
          padding: 0;
          margin: 0;
          min-width: 200px; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a {
            padding: 9px 20px;
            display: block; }
            .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a:hover {
              background: #f4f5f9;
              color: #25262a; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > a:before {
            content: "\e315";
            right: 20px; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > .dropdown, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > ul {
            left: 100%;
            top: 0; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:active > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:focus > a {
            background: #f4f5f9;
            color: #25262a; }
      .site-navbar .site-navigation .site-menu .has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children:focus > a, .site-navbar .site-navigation .site-menu .has-children:active > a {
        color: #ef6c57; }
      .site-navbar .site-navigation .site-menu .has-children:hover, .site-navbar .site-navigation .site-menu .has-children:focus, .site-navbar .site-navigation .site-menu .has-children:active {
        cursor: pointer; }
        .site-navbar .site-navigation .site-menu .has-children:hover > .dropdown, .site-navbar .site-navigation .site-menu .has-children:focus > .dropdown, .site-navbar .site-navigation .site-menu .has-children:active > .dropdown {
          -webkit-transition-delay: 0s;
          -o-transition-delay: 0s;
          transition-delay: 0s;
          margin-top: 0px;
          visibility: visible;
          opacity: 1; }

.site-mobile-menu {
  width: 300px;
  position: fixed;
  right: 0;
  z-index: 2000;
  padding-top: 20px;
  background: #fff;
  height: calc(100vh);
  -webkit-transform: translateX(110%);
  -ms-transform: translateX(110%);
  transform: translateX(110%);
  -webkit-box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
  box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out; }
  .offcanvas-menu .site-mobile-menu {
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%); }
  .site-mobile-menu .site-mobile-menu-header {
    width: 100%;
    float: left;
    padding-left: 20px;
    padding-right: 20px; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close {
      float: right;
      margin-top: 8px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span {
        font-size: 30px;
        display: inline-block;
        padding-left: 10px;
        padding-right: 0px;
        line-height: 1;
        cursor: pointer;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span:hover {
          color: #25262a; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo {
      float: left;
      margin-top: 10px;
      margin-left: 0px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a {
        display: inline-block;
        text-transform: uppercase; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a img {
          max-width: 70px; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a:hover {
          text-decoration: none; }
  .site-mobile-menu .site-mobile-menu-body {
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
    position: relative;
    padding: 0 20px 20px 20px;
    height: calc(100vh - 52px);
    padding-bottom: 150px; }
  .site-mobile-menu .site-nav-wrap {
    padding: 0;
    margin: 0;
    list-style: none;
    position: relative; }
    .site-mobile-menu .site-nav-wrap a {
      padding: 10px 20px;
      display: block;
      position: relative;
      color: #212529; }
      .site-mobile-menu .site-nav-wrap a:hover {
        color: #ef6c57; }
    .site-mobile-menu .site-nav-wrap li {
      position: relative;
      display: block; }
      .site-mobile-menu .site-nav-wrap li.active > a {
        color: #ef6c57; }
    .site-mobile-menu .site-nav-wrap .arrow-collapse {
      position: absolute;
      right: 0px;
      top: 10px;
      z-index: 20;
      width: 36px;
      height: 36px;
      text-align: center;
      cursor: pointer;
      border-radius: 50%; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse:hover {
        background: #f8f9fa; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse:before {
        font-size: 12px;
        z-index: 20;
        font-family: "icomoon";
        content: "\f078";
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%) rotate(-180deg);
        -ms-transform: translate(-50%, -50%) rotate(-180deg);
        transform: translate(-50%, -50%) rotate(-180deg);
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse.collapsed:before {
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
    .site-mobile-menu .site-nav-wrap > li {
      display: block;
      position: relative;
      float: left;
      width: 100%; }
      .site-mobile-menu .site-nav-wrap > li > a {
        padding-left: 20px;
        font-size: 20px; }
      .site-mobile-menu .site-nav-wrap > li > ul {
        padding: 0;
        margin: 0;
        list-style: none; }
        .site-mobile-menu .site-nav-wrap > li > ul > li {
          display: block; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > a {
            padding-left: 40px;
            font-size: 16px; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > ul {
            padding: 0;
            margin: 0; }
            .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li {
              display: block; }
              .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li > a {
                font-size: 16px;
                padding-left: 60px; }
    .site-mobile-menu .site-nav-wrap[data-class="social"] {
      float: left;
      width: 100%;
      margin-top: 30px;
      padding-bottom: 5em; }
      .site-mobile-menu .site-nav-wrap[data-class="social"] > li {
        width: auto; }
        .site-mobile-menu .site-nav-wrap[data-class="social"] > li:first-child a {
          padding-left: 15px !important; }

/* Blocks */
.header-bar {
  float: right;
  width: 250px;
  height: 100vh;
  min-height: 400px;
  overflow: auto;
  background: #000;
  padding: 30px;
  text-align: right;
  position: fixed;
  right: 0;
  top: 0; }
  @media (max-width: 991.98px) {
    .header-bar {
      width: 100%;
      position: relative;
      float: none;
      height: 70px !important;
      min-height: 70px; } }
  .header-bar .site-logo {
    margin-bottom: 30px; }
    @media (max-width: 991.98px) {
      .header-bar .site-logo {
        margin-right: auto;
        margin-bottom: 0; } }
    .header-bar .site-logo a {
      font-size: 20px;
      color: #fff;
      text-transform: uppercase;
      font-weight: bold; }
  .header-bar .main-menu {
    margin-left: auto; }
    @media (max-width: 991.98px) {
      .header-bar .main-menu {
        display: none; } }
  .header-bar ul {
    text-align: right;
    padding: 0;
    margin: 0 0 30px 0; }
    @media (max-width: 991.98px) {
      .header-bar ul {
        display: inline-block;
        margin-bottom: 0; } }
    .header-bar ul li {
      list-style: none;
      margin-bottom: 5px; }
      @media (max-width: 991.98px) {
        .header-bar ul li {
          display: inline-block; } }
      .header-bar ul li a {
        display: block;
        padding: 4px 0;
        color: #fff;
        text-transform: uppercase;
        font-size: .8rem; }
        @media (max-width: 991.98px) {
          .header-bar ul li a {
            padding: 4px 10px; } }
      .header-bar ul li.active a {
        color: #ef6c57; }
    .header-bar ul.social li {
      display: inline-block; }
      .header-bar ul.social li a {
        padding: 10px; }
      .header-bar ul.social li:last-child a {
        padding-right: 0; }


  @media (max-width: 991.98px) {
    .main-content {
      width: 100%;
      position: relative;
      float: none; } }
  .main-content .container-fluid {
    margin-left: 0;
    margin-right: 0;
    padding-left: 0;
    padding-right: 0; }
    @media (max-width: 991.98px) {
      .main-content .container-fluid {
        padding-left: 15px;
        padding-right: 15px; } }
  .main-content .photos .photo-item {
    position: relative; }
   
    .main-content .photos .photo-item .photo-text-more {
      position: absolute;
      z-index: 3;
      top: 50%;
      left: 50%;
      width: 100%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      margin-top: 30px;
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease;
      opacity: 0;
      visibility: hidden;
      text-align: center; }
      .main-content .photos .photo-item .photo-text-more .icon {
        color: #fff;
        font-size: 20px; }
      .main-content .photos .photo-item .photo-text-more .heading {
        font-size: 16px;
        color: #fff;
        margin-bottom: 0; }
      .main-content .photos .photo-item .photo-text-more .meta {
        color: #cccccc;
        text-transform: uppercase;
        font-size: 12px; }
    .main-content .photos .photo-item img {
      width: 100%;
      -o-object-fit: cover;
      object-fit: cover;
      
      margin-bottom: 20px; }
      @media (max-width: 575.98px) {
        .main-content .photos .photo-item img {
          height: 200px; } }
    .main-content .photos .photo-item:hover:after {
      opacity: 1;
      visibility: visible; }
    .main-content .photos .photo-item:hover .photo-text-more {
      margin-top: 0;
      opacity: 1;
      visibility: visible; }

.site-mobile-menu .site-mobile-menu-body ul:first-child {
  margin-bottom: 20px !important;
  float: left; }

.site-mobile-menu .site-mobile-menu-body .site-nav-wrap + .site-nav-wrap {
  float: left;
  display: block;
  position: relative; }
  .site-mobile-menu .site-mobile-menu-body .site-nav-wrap + .site-nav-wrap li, .site-mobile-menu .site-mobile-menu-body .site-nav-wrap + .site-nav-wrap li a {
    float: none;
    width: auto;
    display: inline; }

.blog-entry .img-wrap {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 250px;
  flex: 0 0 250px; }
  .blog-entry .img-wrap img {
    border: 4px solid #fff; }

.blog-entry h2 {
  font-size: 24px; }
  .blog-entry h2 a {
    color: #fff; }

.blog-entry .meta {
  color: #737373; }

.custom-pagination {
  margin-top: 50px;
  margin-bottom: 50px; }
  .custom-pagination span, .custom-pagination a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center; }
  .custom-pagination a {
    border-radius: 50%; }
    .custom-pagination a:hover {
      background: #ef6c57;
      color: #fff; }

</style>