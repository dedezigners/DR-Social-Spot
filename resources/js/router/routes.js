// User Helper class
import User from '../helpers/user';
// Pages
import Home from '../components/Home';
import Login from '../components/Login';
import Signup from '../components/Signup';
import Profile from '../components/Profile';
import Setting from '../components/Setting';

function requireAuth(to, from, next) {
    let auth = User.loggedIn();
    return (!auth && next({ name: 'login' })) || next();
}

export const routes = [
    { path: '/', name: 'home', component: Home },
    { path: '/login', name: 'login', component: Login },
    { path: '/signup', name: 'signup', component: Signup },
    { path: '/profile', name: 'profile', component: Profile, beforeEnter: requireAuth },
    { path: '/settings', name: 'settings', component: Setting, beforeEnter: requireAuth }
];
