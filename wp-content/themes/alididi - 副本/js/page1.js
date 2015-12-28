Vue.use(VueRouter);

var Main = {

    data : function(){
        return {
            showLeft: false,
            showRight: false
        };
    },

    methods : {
      showLeftbar : function(p){
          console.log(p);
          this.showLeft = true;
      },

      closeLeftbar : function(){
          this.showLeft = false;
      }
    },

    components : {
        // aside : VueStrap.aside,
        sidebar : VueStrap.aside
    }
};

Yoo.modules.App = Vue.extend(Main);
var router = new VueRouter();

router.map({
    '/foo': {
        component: Yoo.modules.Foo
    },
    '/acc': {
        component: Yoo.modules.Acc
    },
    '/bar': {
        component: Yoo.modules.Bar
    },
    '/cpp': {
        component: Yoo.modules.Cpp
    },
})

router.start(Yoo.modules.App, '#app');


