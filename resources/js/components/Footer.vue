<template>
  <footer class="footer">
    <button class="button button--link" @click="logout">ログアウト</button>
    <RouterLink class="button button--link" to="/login">
      ログイン / 新規登録
    </RouterLink>
  </footer>
</template>

<script>
export default {
  methods: {
    async logout() {
      await this.$store.dispatch('auth/logout')

      this.$router.push('/login')
    }
  }
}
</script>