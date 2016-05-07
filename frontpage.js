		var count=1,total=5;
		
		function slide(x){
			count=count+x;
			if(count==0) {count=5;}
			if(count>total) {count=1;}

			var image=document.getElementById('imageid');
			switch(count)
			{
				case 1: 
					imageid.src="http://www.youtube.com/embed/QIlflyccwjQ?autoplay=0&autohide=1"; break;
				
				case 2: 
					imageid.src="http://www.youtube.com/embed/LYMbwL_UUV8?autoplay=0&autohide=1"; break;

				case 3: 
					imageid.src="http://www.youtube.com/embed/FvdKS-jL2tM?autoplay=0&autohide=1"; break;

				case 4: 
					imageid.src="http://www.youtube.com/embed/e37dxCXfFfg?autoplay=0&autohide=1"; break;

				case 5: 
					imageid.src="http://www.youtube.com/embed/DoBwkr64Zkk?autoplay=0&autohide=1"; break;
				
			}
		}