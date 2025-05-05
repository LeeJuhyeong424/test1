const { createApp } = Vue;

createApp({
  data() {
    return {
      // 로그인
      userId: '',
      password: '',
      errorId: false,
      errorPw: false,
      loginError: '',

      // 팝업
      showPopup: false,
      popupMode: 'id',

      // 아이디 찾기
      findName: '',
      findEmail: '',
      errorFindName: false,
      errorFindEmail: false,
      findResult: false,
      findFail: false,
      foundId: '',

      // 비밀번호 찾기
      pwId: '',
      pwEmail: '',
      errorPwId: false,
      errorPwEmail: false,
      pwResetSuccess: false,
      pwResetFail: false
    };
  },
  computed: {
    activeTab() {
      return 'px-4 py-1 bg-blue-500 text-white rounded-lg';
    },
    inactiveTab() {
      return 'px-4 py-1 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300';
    }
  },
  methods: {
    login() {
      this.errorId = !this.userId.trim();
      this.errorPw = !this.password.trim();
      this.loginError = '';

      if (this.errorId || this.errorPw) return;

      // 임시 로직: 실제는 fetch('/backend/login/login_process.php') 사용
      if (this.userId === 'suspendedUser') {
        this.loginError = '이 계정은 정지되었습니다. 고객센터에 문의해주세요.';
        return;
      }

      if (this.userId !== 'testuser' || this.password !== '1234') {
        this.loginError = '아이디 또는 비밀번호가 일치하지 않습니다.';
        return;
      }

      alert('로그인 성공!');
    },
    closePopup() {
      this.showPopup = false;
      this.popupMode = 'id';
      this.resetForms();
    },
    handleFindId() {
      this.errorFindName = !this.findName.trim();
      this.errorFindEmail = !this.findEmail.trim();
      this.findFail = false;
      this.findResult = false;

      if (this.errorFindName || this.errorFindEmail) return;

      if (this.findName === '홍길동' && this.findEmail === 'hong@example.com') {
        this.foundId = 'hong123';
        this.findResult = true;
      } else {
        this.findFail = true;
      }
    },
    handleResetPw() {
      this.errorPwId = !this.pwId.trim();
      this.errorPwEmail = !this.pwEmail.trim();
      this.pwResetSuccess = false;
      this.pwResetFail = false;

      if (this.errorPwId || this.errorPwEmail) return;

      if (this.pwId === 'hong123' && this.pwEmail === 'hong@example.com') {
        this.pwResetSuccess = true;
      } else {
        this.pwResetFail = true;
      }
    },
    resetForms() {
      this.findName = this.findEmail = this.foundId = '';
      this.errorFindName = this.errorFindEmail = false;
      this.findResult = this.findFail = false;

      this.pwId = this.pwEmail = '';
      this.errorPwId = this.errorPwEmail = false;
      this.pwResetSuccess = this.pwResetFail = false;
    }
  }
}).mount('#app');
