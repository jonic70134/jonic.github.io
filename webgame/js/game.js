enchant();
window.onload = function(){
	var game = new Game(950,700);
	game.preload('./images/people.png', './images/css_sprites.png',  './images/arrow-left1.png', './images/arrow-right1.png','./images/clock.png','./images/score_board.png');
	game.fps = 24; //fps
	timeLeft = 15 *game.fps; //時間15秒
	crowni = 0;
	crownSPEED = 20; //移動速度

	game.onload = function(){
		titleScene = new Scene();
		gameScene = new Scene(); 
		
		//説明畫面
		var title = new Sprite(950, 700);
        titleScene.addChild(title);
        game.pushScene(gameScene);
    	title.addEventListener('touchstart', function(){//點擊滑鼠或enter鍵後開始
    		game.pushScene(gameScene);
    	});
    
    	
		// 掉下來的物品
		var Item = enchant.Class.create(enchant.Sprite, { 
    	initialize: function(frameN, a, b){
        		enchant.Sprite.call(this, 70, 70);
        		this.image = game.assets['./images/css_sprites.png'];
        		this.frame = frameN;
        		this.x = rand(850); //禮物盒&硬幣亂數生成寬度位置
        		this.y = 100;
        		gameScene.addChild(this);
        		var SPEED = rand(a) + b;
        		this.addEventListener('enterframe', function() {
        			this.y += SPEED;
        		});
    		}
    	});
    	function rand(num){ return Math.floor(Math.random() * num); }
    	function label(x){	//字體
			x.font = "bold 24px 'Arial'";
			gameScene.addChild(x);
		}

		gameScene.backgroundColor = "";//遊戲背景色
	
        var score = 0; //硬幣
        var scoreLabel = new Label('Score: 0');
        scoreLabel.x = 5;
        scoreLabel.y = 100;
		label(scoreLabel);
		
		var giftscore = 0; //禮物盒
        var giftscoreLabel = new Label('gift: 0');
        giftscoreLabel.x = 5;
        giftscoreLabel.y = 200;
        label(giftscoreLabel);

		var timeLabel = new Label('0'); //時間
		timeLabel.x = 5;
        label(timeLabel);
        
		 items1 = []; items2 = [];
		var itemTimer = 1;

		//金幣出現數量
		var coin_score = 10;
		//金幣出現計數用
		var show_coin_count = 0;

		//禮物出現數量
		var gift_score = 10;
		//禮物出現計數用
		var show_gift_count = 0;
		/*********************************遊戲場景開始********************************/
		gameScene.addEventListener('enterframe', function(){ 
			
				
			if ((rand(380 *itemTimer) < 10) && (coin_score != show_coin_count)) {
				var item1 =new Item(2, 6, 6);           
				items1[game.frame] = item1;
				show_coin_count++;
			}
            if(rand(380 *itemTimer) < 10 && (gift_score != show_gift_count)){
				var item2 =new Item(3, 6, 7);       
				items2[game.frame] = item2;
				show_gift_count++;
			}
      
			function itemFunc(itemsN, a){
            	for(var a in itemsN){
                	if(itemsN[a].intersect(crown)){			//碰到小丑
                		gameScene.removeChild(itemsN[a]);	//就把元素刪除
        				delete itemsN[a];
                		if(itemsN == items1) score++;		//硬幣分數+1
                		if(itemsN == items2) giftscore++;    //禮物盒分數+1

                	} else if(itemsN[a].y >500){			//碰到螢幕下方
                		gameScene.removeChild(itemsN[a]);	//就把元素刪除
        				delete itemsN[a];
                	}
            	}
			}
			var j;
			itemFunc(items1, j);	itemFunc(items2, j);
			// itemFunc(items3, j);	itemFunc(items4, j);
			// itemFunc(items5, j);	itemFunc(items6, j);
			///////////////////////////////////////////////////////////////////////////////
			var clock = new Sprite(157, 177); // 時鐘背景圖
			clock.x = -20; 
			clock.y = -20; 
			clock.image = game.assets['./images/clock.png']; 
			game.rootScene.addChild(clock);

			var statistics = new Sprite(260, 90); // 計分板
			statistics.x = 700; 
			statistics.y = 10; 
			statistics.image = game.assets['./images/score_board.png']; 
			game.rootScene.addChild(statistics);

            scoreLabel.text = score;//硬幣分數
            scoreLabel.x= 790;
			scoreLabel.y= 55;
			scoreLabel.color = '#ffe258';

			giftscoreLabel.text = giftscore;//禮物盒分數
			giftscoreLabel.x= 900;
			giftscoreLabel.y= 55;
			giftscoreLabel.color = '#ffe258';
			
        	// if(crownSPEED==10){ crowni++; } 
            // if(crowni>48){				 
            // 	crownSPEED=6;
            // 	crowni=0;
            // }
			timeLeft--;
			timeLabel.x= 30;
			timeLabel.y= 50;
			timeLabel.width= 55;
			timeLabel.textAlign = 'center';
			timeLabel.text=Math.floor(timeLeft/24);
			timeLabel.font = "bold 50px 'Arial'";
			timeLabel.color = '#ffe258'; //倒數計時文字顏色
		
        	if (timeLeft <=0) {
        		game.end(score, "");
        		timeLabel.text='0';
			}
		});
		/*********************************遊戲場景結束*********************************/

		var crown = new Sprite(129, 205); //小丑大小
        crown.image = game.assets['./images/people.png'];
        crown.x = 450;
        crown.y = 430;
        crown.opacity = 1.0;
        gameScene.addChild(crown);
        var rightButton = new Sprite(134, 81); //右按鈕
        rightButton.image = game.assets['./images/arrow-right1.png'];
        rightButton.x = 450;
        rightButton.y =620;
        gameScene.addChild(rightButton);
        var ar = 0;
        rightButton.addEventListener('touchstart', function() { ar = 1; });
        rightButton.addEventListener('touchend', function() { ar = 0; });
        
        var leftButton = new Sprite(134, 81); //左按鈕
		leftButton.image = game.assets['./images/arrow-left1.png'];
		leftButton.x = 350;
        leftButton.y =620;
        gameScene.addChild(leftButton);
        var al = 0;
        leftButton.addEventListener('touchstart', function() { al = 1; });
        leftButton.addEventListener('touchend', function() { al = 0; });
        
		var crownDire =1; //1:左 0:右
        crown.addEventListener('enterframe', function() { //左右移動
            if (game.input.right || ar==1){
            	moving(crownSPEED, 10);
            	crownDire =0;
            } else if (game.input.left || al==1) {
            	moving(-crownSPEED, 1);
            	crownDire =1;
            } 
		});
		
        function moving(a, frameN){ //移動
            crown.x += a;
			if (crown.age % 10 ==1) {crown.frame =  frameN;}
            if (crown.age % 10 ==6) {crown.frame =  frameN;}
            if (crown.x <= -3) {crown.x = 0;}
            if (crown.x >= 831) {crown.x =830;}
		}
	}
	game.start();
}