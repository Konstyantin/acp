import {addUIActions} from './pages/dashboard';

const app = new Vue({
  el: '#app',
  mounted: function() {
    addUIActions();
  },
});
