<template>
  <div class="mt-3">
    <button class="btn btn-link btn-sm mb-3" v-on:click="goBack">
      <i class="fas fa-chevron-left"></i> Kembali
    </button>
    <div class="container-fluid">
      <form action>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
          <label for="passcode">Passcode</label>
          <input type="password" name="passcode" id="passcode" class="form-control">
        </div>
        <input type="submit" value="Tambah" class="btn btn-primary float-right">
      </form>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    goBack: function() {
      this.$router.go(-1)
    }
  }
}
</script>

<style>
</style>
