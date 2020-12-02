// Pages
import Home from '../components/Home';
import Login from '../components/Login';
import Signup from '../components/Signup';
import Profile from '../components/Profile';
import Setting from '../components/Setting';

export const routes = [
    { path: '/', name: 'home', component: Home },
    { path: '/login', name: 'login', component: Login },
    { path: '/signup', name: 'signup', component: Signup },
    { path: '/profile', name: 'profile', component: Profile },
    { path: '/settings', name: 'settings', component: Setting }
];
