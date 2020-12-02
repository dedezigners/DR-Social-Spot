// Pages
import Home from '../components/Home';
import Login from '../components/Login';
import Signup from '../components/Signup';

export const routes = [
    { path: '/', name: 'home', component: Home },
    { path: '/login', name: 'login', component: Login },
    { path: '/signup', name: 'signup', component: Signup }
];
