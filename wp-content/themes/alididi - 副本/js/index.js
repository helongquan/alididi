Vue.use(VueRouter);

Yoo.modules.App = Vue.extend({
    components : {
        alert : VueStrap.alert
    }
})

var router = new VueRouter()

router.map({
    '/foo': {
        component: Yoo.modules.Foo
    },
    '/bar': {
        component: Yoo.modules.Bar
    }
})

router.start(Yoo.modules.App, '#app');