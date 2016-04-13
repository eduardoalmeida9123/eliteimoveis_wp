$(function(){
      $("#slides").slidesjs({
        navigation: {
      		active: false,
    		},
    	play: {
			active: false,
			effect: "side",
			interval: 2000,
			auto: true,
			swap: true,
			pauseOnHover: false,
			restartDelay: 2500
    	},
    	pagination: {
      		active: false,
    }
      });
});