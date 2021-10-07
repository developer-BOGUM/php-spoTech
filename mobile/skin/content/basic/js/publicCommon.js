var floatUI = (function() {
	let pTop;
	let before_st;
    return {
        "init": function(prevTop) {
			before_st = 0;
			if (prevTop !== undefined){
				pTop = prevTop.offsetHeight;
			} else {
				pTop = 0;
			}
			let last_st = 0;
			let ticking = false;
			window.addEventListener('scroll', function(e) {
			  last_st = window.scrollY;

			  if (!ticking) {
				window.requestAnimationFrame(function() {
				  floatUI.onScroll(last_st);
				  ticking = false;
				});

				ticking = true;
			  }
			});
			window.addEventListener('resize', function(e) {
				if (prevTop !== undefined){
					pTop = prevTop.offsetHeight;
				} else {
					pTop = 0;
				}
				floatUI.onScroll(last_st);
			});
        },
		"onScroll": function(st) {
			const topdown = document.getElementById('wrap');
			if (topdown != null){
				if (st > 0){
					topdown.classList.add('sco');
				} else {
					topdown.classList.remove('sco');
				}
			}
		}
    }
})();