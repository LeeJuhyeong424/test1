<?php
$userName = "홍길동";
$userId = 1023;
$userImagePath = "/uploads/profile/{$userId}.webp";
$hasProfileImage = file_exists($_SERVER['DOCUMENT_ROOT'] . $userImagePath);
$pageTitle = $pageTitle ?? '자산 플래너';

require_once __DIR__ . '/user.avatar.php';
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="/frontend/js/header.js" defer></script>
</head>

<header class="bg-white shadow px-4 py-3">
  <div id="header-app" class="max-w-screen-xl mx-auto flex items-center justify-between relative">

    <!-- 로고 -->
    <div class="flex items-center gap-2">
      <img src="/assets/img/logo.webp" alt="로고" class="h-8 w-auto">
      <span class="hidden md:inline text-lg font-bold text-blue-700">Finance_manager</span>
    </div>

    <!-- 페이지명 -->
    <h2 class="text-base font-semibold text-gray-700"><?= htmlspecialchars($pageTitle) ?></h2>

    <!-- PC 메뉴 -->
    <div class="hidden md:flex items-center gap-6">
      <nav class="flex gap-4">
        <a href="#" class="text-sm text-gray-700 hover:text-blue-600">홈</a>
        <a href="#" class="text-sm text-gray-700 hover:text-blue-600">기록</a>
        <a href="#" class="text-sm text-gray-700 hover:text-blue-600">통계</a>
      </nav>

      <!-- 사용자 드롭다운 -->
      <div class="relative group flex items-center gap-2 cursor-pointer">
        <?php renderUserAvatar($userName, $userImagePath, $hasProfileImage); ?>
        <span class="text-sm font-medium text-gray-800"><?= htmlspecialchars($userName) ?> ▼</span>
        <div class="absolute right-0 top-full mt-2 w-40 bg-white border rounded-lg shadow hidden group-hover:block z-50">
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">설정</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">관리자</a>
          <a href="/logout.php" class="block px-4 py-2 hover:bg-gray-100 text-red-500">로그아웃</a>
        </div>
      </div>
    </div>

    <!-- 모바일 ☰ -->
    <button @click="menuOpen = !menuOpen" class="md:hidden text-gray-600 text-xl focus:outline-none">☰</button>

    <!-- 모바일 메뉴 -->
    <div v-if="menuOpen" class="absolute top-full right-0 mt-2 w-60 bg-white border rounded-lg shadow-md z-50 md:hidden">
      <div class="flex items-center gap-3 px-4 py-3 border-b">
        <?php renderUserAvatar($userName, $userImagePath, $hasProfileImage); ?>
        <span class="text-sm font-medium text-gray-800"><?= htmlspecialchars($userName) ?></span>
      </div>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100">홈</a>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100">기록</a>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100">통계</a>
      <hr class="my-1">
      <a href="#" class="block px-4 py-2 hover:bg-gray-100">설정</a>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100">관리자</a>
      <a href="/logout.php" class="block px-4 py-2 hover:bg-gray-100 text-red-500">로그아웃</a>
    </div>
  </div>
</header>
