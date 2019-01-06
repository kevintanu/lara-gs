import axios from 'axios'

const Service = class {
  getUsers() {
    return axios
      .get('/api/users')
      .then(({ data }) => data)
      .catch(err => console.log(err))
  }

  getUser(id) {
    return axios
      .get(`/api/users/${id}`)
      .then(({ data }) => data)
      .catch(err => console.log(err))
  }

  deleteUser(id) {
    return axios
      .delete(`/api/users/${id}`)
      .then(({ data }) => data)
      .catch(err => console.log(err))
  }
}

const userService = new Service()
export default userService
