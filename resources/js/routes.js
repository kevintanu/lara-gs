import Dashboard from './components/Dashboard'
import Users from './components/Users'
import UserView from './components/UserView'
import BankAccount from './components/BankAccount'
import UserAdd from './components/UserAdd'

const routes = [
  {
    path: '/dashboard',
    component: Dashboard
  },
  { path: '/users', component: Users },
  {
    path: '/users/create',
    component: UserAdd
  },
  {
    path: '/users/:id',
    component: UserView
  },

  {
    path: '/bank-account',
    component: BankAccount
  }
]

export default routes
