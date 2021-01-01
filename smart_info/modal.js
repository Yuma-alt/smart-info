Vue.use(window["vue-js-modal"].default);

var app = new Vue({
  el: '#app',
  methods: {
    show : function() {
      this.$modal.show('hello-world');
    },
    hide : function () {
      this.$modal.hide('hello-world');
    },
  }
})