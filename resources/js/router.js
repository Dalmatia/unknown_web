import Vue from 'vue';
import VueRouter from 'vue-router';

// ページコンポーネントをインポートする
import PhotoList from './pages/PhotoList.vue';
import Login from './pages/Login.vue';

import store from './store'; // 追加

// VueRouterプラグインを使用する
// これによって<RouterView />コンポーネントなどを使うことができる
Vue.use(VueRouter);

// パスとコンポーネントのマッピング
const routes = [
  {
    path: '/',
    component: PhotoList
  },
  {
    path: '/login',
    component: Login,
    beforeEnter(to, from, next) {
      if (store.getters['auth/check']) {
        next('/')
      } else {
        next();
      }
    }
  }
];

// VueRouterインスタンスを作成する
const router = new VueRouter({
  mode: 'history', // 追加: URLの#が消える
  routes
});

// VueRouterインスタンスをエクスポートする
// app.jsでインポートするため
export default router;