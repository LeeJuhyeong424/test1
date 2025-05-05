<?php
// 페이지 타이틀 정의 (header.php에서 사용됨)
$pageTitle = '자산 플래너';

// 유저 정보 (예제용, 실제로는 세션에서 받아야 함)
$userName = "홍길동";
$userId = 1023;
$userImagePath = "/uploads/profile/{$userId}.webp";
$hasProfileImage = file_exists($_SERVER['DOCUMENT_ROOT'] . $userImagePath);

// 헤더 include
require_once 'views/common/header.php';
?>

<!-- 본문 -->
<main class="max-w-screen-xl mx-auto px-4 py-10">
  <h1 class="text-2xl font-bold text-gray-800 mb-4">자산 플래너에 오신 걸 환영합니다!</h1>
  <p class="text-gray-600">여기서 자산을 관리하고 기록하고 통계로 분석할 수 있습니다.</p>

  <!-- 추가 콘텐츠 위치 -->
</main>

<?php
// 푸터 include
require_once 'views/common/footer.php';
?>
