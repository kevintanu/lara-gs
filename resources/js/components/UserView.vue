<template>
  <div class="mt-3">
    <button class="btn btn-link btn-sm mb-3" v-on:click="goBack">
      <i class="fas fa-chevron-left"></i> Kembali
    </button>
    <div class="container-fluid">
      <h1>{{user.username}}</h1>
      <ul class="list-group">
        <li v-for="(x, i) in computedUser" v-bind:key="i" class="list-group-item">
          <strong>{{x.label}}</strong>
          : {{x.value}}
        </li>
      </ul>
      <div class="mt-3">
        <button
          type="button"
          class="btn btn-danger float-left"
          v-on:click="deleteUser(user.id)"
        >Hapus</button>
        <button type="button" class="btn btn-primary float-right" v-on:click="editUser">Edit</button>
      </div>
    </div>
  </div>
</template>

<script>
import s from '../services/user'
export default {
  data() {
    return {
      user: {}
    }
  },
  methods: {
    deleteUser: function(id) {
      s.deleteUser(id)
      this.$router.go(-1)
    },
    editUser: function() {},
    goBack: function() {
      this.$router.go(-1)
    }
  },
  mounted() {
    s.getUser(this.$route.params.id).then(data => {
      this.user = data
    })
  },
  computed: {
    computedUser: function() {
      return [
        { label: 'Username', value: this.user.username },
        { label: 'Email', value: this.user.email },
        { label: 'Tanggal dibuat', value: this.user.created_at },
        { label: 'Tanggal terakhir diupdate', value: this.user.updated_at }
      ]
    }
  }
}
</script>
