<!-- login.php -->
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>로그인</title>

  <!-- ✅ Tailwind 개발용 CDN (경고 무시 가능) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- ✅ Vue CDN 먼저 로딩 (이게 login.js보다 앞에 있어야 함) -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <div id="app" class="w-full max-w-sm p-8 bg-white rounded-2xl shadow-md relative">
    <h2 class="text-2xl font-bold text-center mb-6">로그인</h2>

    <form @submit.prevent="login">
      <div class="mb-4">
        <label for="userId" class="block mb-1 text-gray-700">아이디</label>
        <input type="text" id="userId" v-model="userId" class="w-full px-4 py-2 border rounded-lg">
        <p v-if="errorId" class="text-sm text-red-500 mt-1">아이디를 입력해주세요.</p>
      </div>

      <div class="mb-4">
        <label for="userPassword" class="block mb-1 text-gray-700">비밀번호</label>
        <input type="password" id="userPassword" v-model="password" class="w-full px-4 py-2 border rounded-lg">
        <p v-if="errorPw" class="text-sm text-red-500 mt-1">비밀번호를 입력해주세요.</p>
      </div>

      <p v-if="loginError" class="text-sm text-red-500 mb-3 text-center">{{ loginError }}</p>

      <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">
        로그인
      </button>
    </form>

    <div class="mt-4 text-sm text-center text-gray-600">
      <button @click="showPopup = true" class="hover:underline">아이디/비밀번호 찾기</button>
    </div>

    <!-- ✅ 모달 UI include -->
    <?php include 'views/login/find_modal.html'; ?>
  </div>

  <!-- ✅ Vue 로딩된 이후에만 JS 실행되도록 순서 유지 -->
  <script src="/frontend/js/login/login.js"></script>
</body>
</html>
