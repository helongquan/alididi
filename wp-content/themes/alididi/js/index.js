Vue.use(VueRouter);

Yoo.modules.App = Vue.extend({
    components : {
        alert : VueStrap.alert
    }
})

// 用户登录模态框 开始
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

// 用户登录模态框 结束



var router = new VueRouter()

router.map({
    '/foo': {
        component: Yoo.modules.Foo
    },
    '/Newest': {
        component: Yoo.modules.NEWEST
    },
    '/ClothForBoy': {
        component: Yoo.modules.CLOTHFORBOY
    },
    '/ClothForGirl': {
        component: Yoo.modules.CLOTHFORGIRL
    },
    '/LiveForElectronic': {
        component: Yoo.modules.LIVEFORELECTRONIC
    },
    '/LiveForFurniture': {
        component: Yoo.modules.LIVEFORFURNITURE
    },
    '/EleForParts': {
        component: Yoo.modules.ELEFORPARTS
    },
    '/EleForIntel': {
        component: Yoo.modules.ELEFORINTEL
    },
    '/FoodForDry': {
        component: Yoo.modules.FOODFORDRY
    },
    '/FoodForDamp': {
        component: Yoo.modules.FOODFORDAMP
    },
    '/Shopping': {
        component: Yoo.modules.SHOPPING
    },
    '/bp': {
        component: Yoo.modules.Bp
    },
})
router.start(Yoo.modules.App, '#app');