<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="컬렉션부터 스타일, 쇼핑, 뷰티, 라이프스타일, 셀러브리티까지 지금 가장 핫한 트렌드 소개"
    />
    <title>보그 코리아 (Vogue Korea) 2023</title>
    <link
      rel="shortcut icon"
      href="https://img.vogue.co.kr/vogue/common/vogue-favicon.ico?v=0.2"
      type="image/x-icon"
    />
    <!-- 아이콘 CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/fontisto@v3.0.4/css/fontisto/fontisto.min.css"
    />
    <!-- 카테고리페이지 CSS -->
    <link rel="stylesheet" href="./css/category.css" />
   <!-- 미디어쿼리 CSS -->
   <link rel="stylesheet" href="./css/media.css">
    <!-- 제이쿼리 라이브러리 -->
    <script src="./js/jquery-3.7.1.min.js"></script>
    <!-- 제이쿼리 UI -->
    <script src="./js/jquery-ui.min.js"></script>
    <!-- 공통모듈 JS -->
    <script type="module" src="./js/common.js"></script>
    <script type="module" src="./js/category.js"></script>
    <!-- 링크시스템 JS -->
    <script src="./js/linksys.js"></script>
  </head>
  <body>
    <!-- 로그인 처리 인클루드 호출 -->
    <?php include "inc/login_session.inc" ?>
    <!-- 1.상단영역 -->
    <?php include "inc/top_area.inc" ?>
    <!-- 2.메인영역 -->
    <div id="main-area">
      <main class="main-area ibx">
        <!-- 2-1. 카테고리 페이지 상단영역 -->
        <header class="cat-top-area">
          <!-- 2-1-1. 서브타이틀 -->
          <h2 class="cat-tit">Fashion</h2>
          <!-- 2-1-2. 서브메뉴(LNB:Local Navigation Bar) -->
          <nav class="lnb">
            
          </nav>
        </header>
        <!-- 2-2. 카테고리 페이지 컨텐츠영역 -->
        <div class="cat-cont-area">
          <section class="pt2">
            <div class="cbx bgi bg1-1">
              <h2>&lt;고양이를 부탁해&gt;의 20주년 기획전</h2>
            </div>
            <div class="cbx bgi bg1-2">
              <h2>패션계에서 가장 주목받는 신인 디자이너, 자크무스</h2>
            </div>
            <div class="cbx bgi bg1-3">
              <h2>서울국제여성영화제 장편 경쟁 한국 영화 4편</h2>
            </div>
          </section>
          <section class="pt2">
            <div class="cbx bgi bg2-1">
              <h2>드라마 &lt;알고 있지만&gt;의 나비가 유행이라고?</h2>
            </div>
            <div class="cbx bgi bg2-2">
              <h2>홍콩 누아르 영화 주인공으로 변신한 민주</h2>
            </div>
            <div class="cbx bgi bg2-3">
              <h2>MSG워너비여, 영원하라!</h2>
            </div>
          </section>

        </div>
      </main>
    </div>
    <!-- 3.하단영역 -->
    <?php include "inc/footer_area.inc" ?>

    <!-- 위로가기버튼 -->
    <a href="#" class="tbtn fi fi-angle-up">
      <span class="ir">위로가기버튼</span>
    </a>
  </body>
</html>
