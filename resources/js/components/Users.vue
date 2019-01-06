<template>
  <!-- <div class="container"> -->
  <div class="row mt-3 justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pengguna</h3>
          <div class="card-tools">
            <button class="btn btn-success" v-on:click="addUser">
              <i class="fas fa-user-plus"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped">
            <tr>
              <th style="width: 10px">#</th>
              <th>Nama</th>
              <th style="width: 40px">Lihat</th>
            </tr>
            <tr v-for="u in users" v-bind:key="u.email">
              <td>{{u.id}}</td>
              <td>{{u.username}}</td>
              <td>
                <a v-on:click="viewUser(u.id)">
                  <i class="fas fa-eye"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>
  <!-- </div> -->
</template>

<script>
import s from '../services/user'

export default {
  data() {
    return {
      users: []
    }
  },
  methods: {
    addUser: function() {
      this.$router.push('/users/create')
    },
    viewUser: function(id) {
      this.$router.push(`/users/${id}`)
    },
    setUsers: function(arr) {
      this.users = arr
    }
  },
  mounted() {
    s.getUsers().then(data => {
      this.setUsers(data)
    })
  }
}
</script>
