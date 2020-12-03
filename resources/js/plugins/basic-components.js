import Vue from 'vue';
import AppHeader from '../components/AppHeader';
import LoadSvg from '../components/widgets/LoadSvg';
import AddFriend from '../components/widgets/AddFriend';
import PostAction from '../components/widgets/post/PostAction';

Vue.component('app-header', AppHeader);
Vue.component('load-svg', LoadSvg);
Vue.component('add-friend', AddFriend);
Vue.component('post-action', PostAction);