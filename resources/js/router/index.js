import Vue from 'vue';
import Router from 'vue-router';

import home from '../views/home';
import profile from '../views/user/profile';

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            name: 'home',
            component: home
        },
				{
					path: '/profile',
					name: 'profile',
					component: profile
				}
    ]
})
