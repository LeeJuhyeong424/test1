Vue.createApp({
    data() {
      return {
        menuOpen: false
      };
    },
    watch: {
      menuOpen(val) {
        if (val) {
          document.addEventListener('click', this.closeOutside);
        } else {
          document.removeEventListener('click', this.closeOutside);
        }
      }
    },
    methods: {
      closeOutside(e) {
        const el = document.querySelector('#header-app');
        if (!el.contains(e.target)) {
          this.menuOpen = false;
        }
      }
    }
  }).mount('#header-app');
  