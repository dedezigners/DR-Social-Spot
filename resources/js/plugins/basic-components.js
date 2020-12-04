import Vue from 'vue';
import AppHeader from '../components/AppHeader';
import LoadSvg from '../components/widgets/LoadSvg';
import AddFriend from '../components/widgets/AddFriend';
import PostAction from '../components/widgets/post/PostAction';
import Like from '../components/widgets/buttons/Like';
import Comment from '../components/widgets/buttons/Comment';
import Share from '../components/widgets/buttons/Share';

Vue.component('app-header', AppHeader);
Vue.component('load-svg', LoadSvg);
Vue.component('add-friend', AddFriend);
Vue.component('post-action', PostAction);
Vue.component('like', Like);
Vue.component('comment', Comment);
Vue.component('share', Share);